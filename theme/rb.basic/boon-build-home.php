<?php
/**
 * 공감마사지 메인 — GONGGAM 스타일 (히어로·검색·특징·탭·3열 카드·FAB)
 * 헤더/푸터는 테마 그대로, 본문만 .boon-build
 */
if (!defined('_GNUBOARD_')) {
    exit;
}

include_once G5_THEME_PATH . '/boon-build/home.php';
return;

$u = G5_URL;
$b = G5_BBS_URL;
$bb_css_file = G5_THEME_PATH . '/css/boon-build.css';
$bb_css_ver = (is_file($bb_css_file)) ? (int) filemtime($bb_css_file) : time();
$bb_theme_css = G5_THEME_URL . '/css/boon-build.css?ver=' . $bb_css_ver;
$img_fb = 'https://onmoon.co.kr/data/editor/2512/1e18e42db0d520bc7b11124400f58ed7_1765266428_7841.png';

$bb_seoul = array(
    array('name' => '서초출장마사지', 'phone' => '0503-6982-1016', 'link' => $u . '/bbs/board.php?bo_table=massage&wr_id=6', 'imageUrl' => 'https://onmoon.co.kr/data/editor/2512/6be7981a180c0dbd5c6299d45aba48da_1765262779_1044.png'),
    array('name' => '강남출장마사지', 'phone' => '0503-6982-1011', 'link' => $u . '/bbs/board.php?bo_table=massage&wr_id=1', 'imageUrl' => 'https://onmoon.co.kr/data/editor/2512/6be7981a180c0dbd5c6299d45aba48da_1765262772_4146.png'),
    array('name' => '여의도출장마사지', 'phone' => '0503-6982-1038', 'link' => $u . '/bbs/board.php?bo_table=massage&wr_id=11', 'imageUrl' => 'https://onmoon.co.kr/data/editor/2603/73866c8751a896d8a7180b3cab683363_1772423435_6195.png'),
    array('name' => '잠실 출장마사지', 'phone' => '0503-6982-1081', 'link' => $u . '/bbs/board.php?bo_table=massage&wr_id=28', 'imageUrl' => 'https://onmoon.co.kr/data/editor/2603/73866c8751a896d8a7180b3cab683363_1772423475_4055.png'),
    array('name' => '송파 출장마사지', 'phone' => '0503-6982-1015', 'link' => $u . '/bbs/board.php?bo_table=massage&wr_id=5', 'imageUrl' => 'https://onmoon.co.kr/data/editor/2512/6be7981a180c0dbd5c6299d45aba48da_1765262777_9794.png'),
    array('name' => '마포출장마사지', 'phone' => '0503-6982-1014', 'link' => $u . '/bbs/board.php?bo_table=massage&wr_id=4', 'imageUrl' => 'https://onmoon.co.kr/data/editor/2512/6be7981a180c0dbd5c6299d45aba48da_1765262775_9178.png'),
    array('name' => '영등포 출장마사지', 'phone' => '0503-6982-1013', 'link' => $u . '/bbs/board.php?bo_table=massage&wr_id=3', 'imageUrl' => 'https://onmoon.co.kr/data/editor/2512/6be7981a180c0dbd5c6299d45aba48da_1765262774_8138.png'),
    array('name' => '홍대 출장마사지', 'phone' => '0503-6982-1072', 'link' => $u . '/bbs/board.php?bo_table=massage&wr_id=13', 'imageUrl' => 'https://onmoon.co.kr/data/editor/2603/73866c8751a896d8a7180b3cab683363_1772423443_9762.png'),
    array('name' => '용산 출장마사지', 'phone' => '0503-6982-1087', 'link' => $u . '/bbs/board.php?bo_table=massage&wr_id=22', 'imageUrl' => 'https://onmoon.co.kr/data/editor/2603/a3d8c5fba4a92a97ad5bd5115d595dad_1772611388_1731.png'),
    array('name' => '논현 출장마사지', 'phone' => '0503-6982-1075', 'link' => $u . '/bbs/board.php?bo_table=massage&wr_id=15', 'imageUrl' => 'https://onmoon.co.kr/data/editor/2603/73866c8751a896d8a7180b3cab683363_1772423460_1414.png'),
    array('name' => '건대 출장마사지', 'phone' => '0503-6982-1079', 'link' => $u . '/bbs/board.php?bo_table=massage&wr_id=17', 'imageUrl' => 'https://onmoon.co.kr/data/editor/2603/73866c8751a896d8a7180b3cab683363_1772423472_8489.png'),
    array('name' => '강서 출장마사지', 'phone' => '0503-6982-1017', 'link' => $u . '/bbs/board.php?bo_table=massage&wr_id=7', 'imageUrl' => 'https://onmoon.co.kr/data/editor/2512/6be7981a180c0dbd5c6299d45aba48da_1765262776_9407.png'),
);

$bb_gyeonggi = array(
    array('name' => '수원 출장마사지', 'phone' => '0503-6982-1021', 'link' => $u . '/bbs/board.php?bo_table=massage2&wr_id=1', 'imageUrl' => 'https://onmoon.co.kr/data/editor/2512/1e18e42db0d520bc7b11124400f58ed7_1765266427_5952.png'),
    array('name' => '안양 출장마사지', 'phone' => '0503-6982-1027', 'link' => $u . '/bbs/board.php?bo_table=massage2&wr_id=7', 'imageUrl' => 'https://onmoon.co.kr/data/editor/2512/1e18e42db0d520bc7b11124400f58ed7_1765266435_1413.png'),
    array('name' => '동탄 출장마사지', 'phone' => '0503-6982-1111', 'link' => $u . '/bbs/board.php?bo_table=massage2&wr_id=15', 'imageUrl' => 'https://onmoon.co.kr/data/editor/2602/cfce70ff78b7554a3ebdf18d81d2e584_1772088438_3496.png'),
    array('name' => '성남 출장마사지', 'phone' => '0503-6982-1023', 'link' => $u . '/bbs/board.php?bo_table=massage2&wr_id=3', 'imageUrl' => 'https://onmoon.co.kr/data/editor/2512/1e18e42db0d520bc7b11124400f58ed7_1765266430_1861.png'),
    array('name' => '용인 출장마사지', 'phone' => '0503-6982-1024', 'link' => $u . '/bbs/board.php?bo_table=massage2&wr_id=4', 'imageUrl' => 'https://onmoon.co.kr/data/editor/2512/1e18e42db0d520bc7b11124400f58ed7_1765266431_4378.png'),
    array('name' => '고양 출장마사지', 'phone' => '0503-6982-1022', 'link' => $u . '/bbs/board.php?bo_table=massage2&wr_id=2', 'imageUrl' => 'https://onmoon.co.kr/data/editor/2512/1e18e42db0d520bc7b11124400f58ed7_1765266428_774.png'),
    array('name' => '부천출장마사지', 'phone' => '0503-6982-1031', 'link' => $u . '/bbs/board.php?bo_table=massage2&wr_id=10', 'imageUrl' => 'https://onmoon.co.kr/data/editor/2512/1e18e42db0d520bc7b11124400f58ed7_1765266438_774.png'),
    array('name' => '일산출장마사지', 'phone' => '0503-6982-1042', 'link' => $u . '/bbs/board.php?bo_table=massage2&wr_id=12', 'imageUrl' => 'https://onmoon.co.kr/data/editor/2602/cfce70ff78b7554a3ebdf18d81d2e584_1772088434_6184.png'),
    array('name' => '평택 출장마사지', 'phone' => '0503-6982-1025', 'link' => $u . '/bbs/board.php?bo_table=massage2&wr_id=5', 'imageUrl' => 'https://onmoon.co.kr/data/editor/2512/1e18e42db0d520bc7b11124400f58ed7_1765266432_8503.png'),
    array('name' => '분당 출장마사지', 'phone' => '0503-6982-1122', 'link' => $u . '/bbs/board.php?bo_table=massage2&wr_id=22', 'imageUrl' => 'https://onmoon.co.kr/data/editor/2602/03aa45314a4e2f945ef3889a66b2f50a_1772172490_0003.png'),
);

$bb_incheon = array(
    array('name' => '인천출장마사지', 'phone' => '0503-6982-1015', 'link' => $u . '/bbs/board.php?bo_table=massage3&wr_id=10', 'imageUrl' => 'https://onmoon.co.kr/data/editor/2603/cc91de4f7aef16e9e5bed10ee00b4802_1773728305_7041.png'),
    array('name' => '부평출장마사지', 'phone' => '0503-6982-1033', 'link' => $u . '/bbs/board.php?bo_table=massage3&wr_id=2', 'imageUrl' => 'https://onmoon.co.kr/data/editor/2512/d2704a1b2169964497a8257b19420737_1765326691_9834.png'),
    array('name' => '연수구 출장마사지', 'phone' => '0503-6982-1032', 'link' => $u . '/bbs/board.php?bo_table=massage3&wr_id=1', 'imageUrl' => 'https://onmoon.co.kr/data/editor/2512/d2704a1b2169964497a8257b19420737_1765326690_6907.png'),
    array('name' => '송도 출장마사지', 'phone' => '0503-6982-1153', 'link' => $u . '/bbs/board.php?bo_table=massage3&wr_id=8', 'imageUrl' => 'https://onmoon.co.kr/data/editor/2602/d2c507edb8c5507391abcb1a5ac3e934_1772008817_3647.png'),
    array('name' => '주안 출장마사지', 'phone' => '0503-6982-1154', 'link' => $u . '/bbs/board.php?bo_table=massage3&wr_id=9', 'imageUrl' => 'https://onmoon.co.kr/data/editor/2602/d2c507edb8c5507391abcb1a5ac3e934_1772008817_8781.png'),
    array('name' => '남동구 출장마사지', 'phone' => '0503-6982-1034', 'link' => $u . '/bbs/board.php?bo_table=massage3&wr_id=3', 'imageUrl' => 'https://onmoon.co.kr/data/editor/2512/d2704a1b2169964497a8257b19420737_1765326693_0054.png'),
    array('name' => '계양 출장마사지', 'phone' => '0503-6982-1152', 'link' => $u . '/bbs/board.php?bo_table=massage3&wr_id=7', 'imageUrl' => 'https://onmoon.co.kr/data/editor/2602/d2c507edb8c5507391abcb1a5ac3e934_1772008816_8493.png'),
    array('name' => '동구 출장마사지', 'phone' => '0503-6982-1037', 'link' => $u . '/bbs/board.php?bo_table=massage3&wr_id=6', 'imageUrl' => 'https://onmoon.co.kr/data/editor/2512/d2704a1b2169964497a8257b19420737_1765326696_2294.png'),
);

$bb_etc = array(
    array('name' => '공주지역 출장마사지', 'phone' => '0503-6982-1000', 'link' => $u . '/bbs/board.php?bo_table=massage4&wr_id=1', 'imageUrl' => $img_fb),
    array('name' => '천안지역 출장마사지', 'phone' => '0503-6982-1000', 'link' => $u . '/bbs/board.php?bo_table=massage4&wr_id=2', 'imageUrl' => $img_fb),
    array('name' => '청주지역 출장마사지', 'phone' => '0503-6982-1000', 'link' => $u . '/bbs/board.php?bo_table=massage4&wr_id=3', 'imageUrl' => $img_fb),
);

/**
 * @param array<int, array<string, string>> $rows
 * @return array<int, array<string, string>>
 */
function bb_tag_region($rows, $rid, $rlabel)
{
    $out = array();
    foreach ($rows as $r) {
        $r['_region'] = $rid;
        $r['_rlabel'] = $rlabel;
        $out[] = $r;
    }
    return $out;
}

$bb_list_all = array_merge(
    bb_tag_region($bb_seoul, 'seoul', '서울'),
    bb_tag_region($bb_gyeonggi, 'gyeonggi', '경기'),
    bb_tag_region($bb_incheon, 'incheon', '인천'),
    bb_tag_region($bb_etc, 'etc', '기타')
);

/**
 * @param array<string, string> $row
 */
function bb_gong_badge_class($code)
{
    if ($code === 'BEST') {
        return 'bb-gong-badge bb-gong-badge--best';
    }
    if ($code === 'NEW') {
        return 'bb-gong-badge bb-gong-badge--new';
    }
    return '';
}

?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,600;0,700;1,600&amp;family=Noto+Sans+KR:wght@400;500;600;700;800&amp;display=swap">
<link rel="stylesheet" href="<?php echo $bb_theme_css; ?>">

<div class="boon-build">
  <div class="bb-gong-hero-zone">
    <div class="bb-inner bb-gong-intro">
      <div class="bb-gong-intro-panel">
        <h1 class="bb-gong-headline">
          진심으로 <span class="bb-gong-brand" lang="en">GONGGAM</span>하는<br>
          완벽한 휴식의 순간
        </h1>
        <form class="bb-gong-search" method="get" action="<?php echo $b; ?>/search.php" role="search">
          <input type="hidden" name="sop" value="and">
          <input type="hidden" name="sfl" value="wr_subject||wr_content">
          <label class="bb-gong-search-shell">
            <span class="bb-gong-search-ic" aria-hidden="true">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/></svg>
            </span>
            <span class="sound_only">검색어</span>
            <input type="search" name="stx" class="bb-gong-search-input" placeholder="마사지샵, 지역명을 검색해 보세요" autocomplete="off" maxlength="50">
          </label>
        </form>
      </div>
    </div>

    <div class="bb-inner bb-gong-features">
      <div class="bb-gong-feature">
        <span class="bb-gong-feature-ic" aria-hidden="true">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
        </span>
        <strong class="bb-gong-feature-tit">전국 최저가 보장</strong>
        <p class="bb-gong-feature-desc">합리적인 가격으로 부담 없이 이용하세요.</p>
      </div>
      <div class="bb-gong-feature">
        <span class="bb-gong-feature-ic" aria-hidden="true">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
        </span>
        <strong class="bb-gong-feature-tit">실제 이용 후기</strong>
        <p class="bb-gong-feature-desc">검증된 정보로 믿고 선택할 수 있어요.</p>
      </div>
      <div class="bb-gong-feature">
        <span class="bb-gong-feature-ic" aria-hidden="true">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="5"/><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/></svg>
        </span>
        <strong class="bb-gong-feature-tit">24시 상담</strong>
        <p class="bb-gong-feature-desc">언제든 편하게 문의하고 예약하세요.</p>
      </div>
    </div>
  </div>

  <div class="bb-inner bb-gong-main">
    <div class="bb-gong-tabs" role="tablist" aria-label="지역별 보기">
      <button type="button" class="bb-gong-tab is-active" role="tab" aria-selected="true" data-bb-tab="all">공감마사지 추천</button>
      <button type="button" class="bb-gong-tab" role="tab" aria-selected="false" data-bb-tab="seoul">서울</button>
      <button type="button" class="bb-gong-tab" role="tab" aria-selected="false" data-bb-tab="gyeonggi">경기</button>
      <button type="button" class="bb-gong-tab" role="tab" aria-selected="false" data-bb-tab="incheon">인천</button>
      <button type="button" class="bb-gong-tab" role="tab" aria-selected="false" data-bb-tab="etc">기타지역</button>
    </div>

    <div class="bb-gong-grid" data-bb-grid>
      <?php
      foreach ($bb_list_all as $gi => $row) {
          $bc = '';
          if ($gi % 6 === 0) {
              $bc = 'BEST';
          } elseif ($gi % 6 === 2) {
              $bc = 'NEW';
          }
          $tel_href = 'tel:' . preg_replace('/[^0-9+]/', '', $row['phone']);
          ?>
      <article class="bb-gong-card" data-bb-region="<?php echo htmlspecialchars($row['_region'], ENT_QUOTES, 'UTF-8'); ?>">
        <a href="<?php echo htmlspecialchars($row['link'], ENT_QUOTES, 'UTF-8'); ?>" class="bb-gong-card-link">
          <div class="bb-gong-card-media">
            <?php if ($bc !== '') { ?>
            <span class="<?php echo bb_gong_badge_class($bc); ?>"><?php echo htmlspecialchars($bc, ENT_QUOTES, 'UTF-8'); ?></span>
            <?php } ?>
            <img src="<?php echo htmlspecialchars($row['imageUrl'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8'); ?>" loading="lazy" decoding="async" referrerpolicy="no-referrer" onerror="this.onerror=null;this.src='<?php echo htmlspecialchars($img_fb, ENT_QUOTES, 'UTF-8'); ?>';">
            <div class="bb-gong-card-overlay" aria-hidden="true">
              <span class="bb-gong-card-region"><?php echo htmlspecialchars($row['_rlabel'], ENT_QUOTES, 'UTF-8'); ?>지역</span>
              <span class="bb-gong-card-cat">출장마사지</span>
            </div>
          </div>
          <div class="bb-gong-card-body">
            <h2 class="bb-gong-card-title"><?php echo htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8'); ?></h2>
            <p class="bb-gong-card-meta"><?php echo htmlspecialchars($row['_rlabel'], ENT_QUOTES, 'UTF-8'); ?> · 출장마사지</p>
            <div class="bb-gong-card-foot">
              <span class="bb-gong-card-tel"><?php echo htmlspecialchars($row['phone'], ENT_QUOTES, 'UTF-8'); ?></span>
              <span class="bb-gong-card-fav" aria-hidden="true" title="">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
              </span>
            </div>
          </div>
        </a>
        <a href="<?php echo htmlspecialchars($tel_href, ENT_QUOTES, 'UTF-8'); ?>" class="bb-gong-card-dial" aria-label="전화 <?php echo htmlspecialchars($row['phone'], ENT_QUOTES, 'UTF-8'); ?>">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        </a>
      </article>
      <?php } ?>
    </div>
  </div>

  <a href="tel:05036982111" class="bb-gong-fab" aria-label="빠른 전화 상담">
    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
  </a>
</div>

<script>
(function () {
  var root = document.querySelector('.boon-build');
  if (!root) return;

  var tabs = root.querySelectorAll('.bb-gong-tab');
  var cards = root.querySelectorAll('.bb-gong-card');
  tabs.forEach(function (btn) {
    btn.addEventListener('click', function () {
      var tab = btn.getAttribute('data-bb-tab');
      tabs.forEach(function (b) {
        var on = b === btn;
        b.classList.toggle('is-active', on);
        b.setAttribute('aria-selected', on ? 'true' : 'false');
      });
      cards.forEach(function (card) {
        var r = card.getAttribute('data-bb-region');
        var show = tab === 'all' || r === tab;
        card.toggleAttribute('hidden', !show);
      });
    });
  });
})();
</script>
