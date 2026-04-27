<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

function ipju365_meta_escape($value)
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function ipju365_normalize_seo_text($text)
{
    $text = html_entity_decode((string) $text, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $text = preg_replace('/<script\b[^>]*>.*?<\/script>/is', ' ', $text);
    $text = preg_replace('/<style\b[^>]*>.*?<\/style>/is', ' ', $text);
    $text = strip_tags($text);
    $text = str_replace(array('&nbsp;', "\xc2\xa0"), ' ', $text);
    $text = preg_replace('/\[[^\]]+\]/u', ' ', $text);
    $text = preg_replace('/\s+/u', ' ', $text);

    return trim($text);
}

function ipju365_seo_excerpt($content, $limit = 160)
{
    $content = ipju365_normalize_seo_text($content);
    if ($content === '') {
        return '';
    }

    if (function_exists('cut_str')) {
        return trim(cut_str($content, $limit, ''));
    }

    return trim(mb_substr($content, 0, $limit, 'UTF-8'));
}

function ipju365_absolute_url($url)
{
    $url = trim(html_entity_decode((string) $url, ENT_QUOTES, 'UTF-8'));
    if ($url === '') {
        return '';
    }

    if (preg_match('#^https?://#i', $url)) {
        return $url;
    }

    if (strpos($url, '//') === 0) {
        return (defined('G5_HTTPS_DOMAIN') && G5_HTTPS_DOMAIN ? 'https:' : 'http:') . $url;
    }

    if ($url[0] === '/') {
        return rtrim(G5_URL, '/') . $url;
    }

    return rtrim(G5_URL, '/') . '/' . ltrim($url, '/');
}

function ipju365_first_board_image_url($bo_table, $wr_id, $content)
{
    $file = function_exists('get_file') ? get_file($bo_table, $wr_id) : array();
    $count = isset($file['count']) ? (int) $file['count'] : 0;

    for ($i = 0; $i < $count; $i++) {
        if (empty($file[$i]['file'])) {
            continue;
        }

        $is_image = !empty($file[$i]['image_type']) || preg_match('/\.(jpe?g|png|gif|webp)$/i', $file[$i]['file']);
        if (!$is_image) {
            continue;
        }

        return G5_DATA_URL . '/file/' . $bo_table . '/' . rawurlencode($file[$i]['file']);
    }

    if (function_exists('get_editor_image')) {
        $matches = get_editor_image($content, false);
        if (!empty($matches[1][0])) {
            return ipju365_absolute_url($matches[1][0]);
        }
    }

    return '';
}

function ipju365_board_seo_keywords($title, $category, $content)
{
    $source = ipju365_normalize_seo_text($category . ' ' . $title . ' ' . $content);
    if ($source === '') {
        return '';
    }

    preg_match_all('/[가-힣A-Za-z0-9][가-힣A-Za-z0-9_-]{1,}/u', $source, $matches);

    $stopwords = array(
        '그리고' => true, '그러나' => true, '하지만' => true, '입니다' => true,
        '합니다' => true, '있는' => true, '없는' => true, 'the' => true,
        'and' => true, 'with' => true, 'for' => true, 'from' => true,
    );
    $keywords = array();
    $seen = array();

    foreach ((array) $matches[0] as $word) {
        $word = trim($word, "-_ \t\n\r\0\x0B");
        if ($word === '') {
            continue;
        }

        $key = function_exists('mb_strtolower') ? mb_strtolower($word, 'UTF-8') : strtolower($word);
        if (isset($stopwords[$key]) || isset($seen[$key])) {
            continue;
        }

        $seen[$key] = true;
        $keywords[] = $word;

        if (count($keywords) >= 15) {
            break;
        }
    }

    return implode(', ', $keywords);
}

function ipju365_get_board_seo_meta()
{
    global $bo_table, $wr_id, $write, $board, $config;

    if (empty($bo_table) || empty($wr_id) || empty($write) || !is_array($write)) {
        return array();
    }

    if (isset($write['wr_is_comment']) && (int) $write['wr_is_comment'] !== 0) {
        return array();
    }

    $title = ipju365_normalize_seo_text(isset($write['wr_subject']) ? $write['wr_subject'] : '');
    if ($title === '') {
        return array();
    }

    $content = isset($write['wr_content']) ? $write['wr_content'] : '';
    $description = ipju365_seo_excerpt($content, 160);
    if ($description === '') {
        $description = $title;
    }

    $category = isset($write['ca_name']) ? $write['ca_name'] : '';
    $keywords = ipju365_board_seo_keywords($title, $category, $content);
    if ($keywords === '' && !empty($board['bo_subject'])) {
        $keywords = ipju365_board_seo_keywords($title, $board['bo_subject'], '');
    }

    $canonical = function_exists('get_pretty_url')
        ? get_pretty_url($bo_table, $wr_id)
        : G5_BBS_URL . '/board.php?bo_table=' . urlencode($bo_table) . '&wr_id=' . urlencode($wr_id);
    $canonical = ipju365_absolute_url(str_replace('&amp;', '&', $canonical));

    $image = ipju365_first_board_image_url($bo_table, $wr_id, $content);

    return array(
        'title' => $title,
        'description' => $description,
        'keywords' => $keywords,
        'canonical' => $canonical,
        'image' => $image,
        'site_name' => isset($config['cf_title']) ? $config['cf_title'] : '',
    );
}

function ipju365_render_board_seo_meta($meta)
{
    if (empty($meta['title'])) {
        return '';
    }

    $html = array();
    $html[] = '<!-- Board SEO META { -->';
    $html[] = '<meta name="title" content="' . ipju365_meta_escape($meta['title']) . '" />';
    $html[] = '<meta name="description" content="' . ipju365_meta_escape($meta['description']) . '" />';

    if (!empty($meta['keywords'])) {
        $html[] = '<meta name="keywords" content="' . ipju365_meta_escape($meta['keywords']) . '" />';
    }

    $html[] = '<meta name="robots" content="index,follow" />';
    $html[] = '<link rel="canonical" href="' . ipju365_meta_escape($meta['canonical']) . '" />';
    $html[] = '<meta property="og:type" content="article" />';
    $html[] = '<meta property="og:url" content="' . ipju365_meta_escape($meta['canonical']) . '" />';
    $html[] = '<meta property="og:title" content="' . ipju365_meta_escape($meta['title']) . '" />';
    $html[] = '<meta property="og:description" content="' . ipju365_meta_escape($meta['description']) . '" />';

    if (!empty($meta['site_name'])) {
        $html[] = '<meta property="og:site_name" content="' . ipju365_meta_escape($meta['site_name']) . '" />';
    }

    if (!empty($meta['image'])) {
        $html[] = '<meta property="og:image" content="' . ipju365_meta_escape($meta['image']) . '" />';
    }

    $html[] = '<meta name="twitter:card" content="' . (!empty($meta['image']) ? 'summary_large_image' : 'summary') . '" />';
    $html[] = '<meta name="twitter:title" content="' . ipju365_meta_escape($meta['title']) . '" />';
    $html[] = '<meta name="twitter:description" content="' . ipju365_meta_escape($meta['description']) . '" />';

    if (!empty($meta['image'])) {
        $html[] = '<meta name="twitter:image" content="' . ipju365_meta_escape($meta['image']) . '" />';
    }

    $html[] = '<!-- } Board SEO META -->';

    return implode(PHP_EOL, $html) . PHP_EOL;
}

function ipju365_filter_duplicate_seo_meta($html)
{
    if (trim((string) $html) === '') {
        return $html;
    }

    $patterns = array(
        '/<meta\s+[^>]*(?:name|property)=["\'](?:title|keywords|description|robots|og:type|og:url|og:title|og:description|og:image|og:site_name|twitter:card|twitter:title|twitter:description|twitter:image)["\'][^>]*>\s*/i',
        '/<link\s+[^>]*rel=["\']canonical["\'][^>]*>\s*/i',
    );

    return preg_replace($patterns, '', $html);
}
