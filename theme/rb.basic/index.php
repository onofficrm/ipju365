<?php
if (!defined('_GNUBOARD_')) {
    exit;
}

if (!defined('_INDEX_')) {
    define('_INDEX_', true);
}

if (G5_IS_MOBILE) {
    include_once G5_THEME_MOBILE_PATH . '/index.php';
    return;
}

if (G5_COMMUNITY_USE === false) {
    include_once G5_THEME_SHOP_PATH . '/index.php';
    return;
}

// The homepage uses the single-row header so logo, menu, and auth buttons align together.
$rb_core['layout_hd'] = 'basic';

include_once G5_THEME_PATH . '/head.php';

$rb_layout_name = isset($rb_core['layout']) ? $rb_core['layout'] : '';
$rb_layout_index = $rb_layout_name !== '' ? G5_THEME_PATH . '/rb.layout/' . $rb_layout_name . '/index.php' : '';

if ($rb_layout_index !== '' && is_file($rb_layout_index)) {
    include_once $rb_layout_index;
} else {
    include_once __DIR__ . '/rb.layout/boon-build/index.php';
}

include_once G5_THEME_PATH . '/tail.php';
