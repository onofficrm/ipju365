<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (!function_exists('boon_build_icon')) {
    function boon_build_icon($name)
    {
        switch ($name) {
            case 'phone':
                return '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6.6 10.8c1.44 2.83 3.77 5.14 6.6 6.6l2.2-2.2c.27-.27.68-.36 1.03-.24 1.13.38 2.35.59 3.57.59.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.61 21 3 13.39 3 4c0-.55.45-1 1-1h3.45c.55 0 1 .45 1 1 0 1.22.2 2.44.59 3.57.11.35.03.74-.25 1.03l-2.19 2.2z" fill="currentColor"/></svg>';
            case 'search':
                return '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M10.5 3a7.5 7.5 0 0 1 5.94 12.08l4.24 4.24-1.42 1.42-4.24-4.24A7.5 7.5 0 1 1 10.5 3zm0 2a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11z" fill="currentColor"/></svg>';
            case 'map':
                return '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7zm0 9.5A2.5 2.5 0 1 1 12 6a2.5 2.5 0 0 1 0 5.5z" fill="currentColor"/></svg>';
            case 'check':
                return '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="m9.55 17.65-5.2-5.2 1.4-1.4 3.8 3.78 8.7-8.68 1.4 1.4-10.1 10.1z" fill="currentColor"/></svg>';
            case 'star':
                return '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2.25l2.92 5.92 6.53.95-4.72 4.6 1.12 6.51L12 17.16l-5.85 3.07 1.12-6.51-4.72-4.6 6.53-.95L12 2.25z" fill="currentColor"/></svg>';
            case 'spark':
                return '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M11 2h2l1.2 6.8L21 10v2l-6.8 1.2L13 20h-2l-1.2-6.8L3 12v-2l6.8-1.2L11 2zm7.5 13.5h1l.6 3.4 3.4.6v1l-3.4.6-.6 3.4h-1l-.6-3.4-3.4-.6v-1l3.4-.6.6-3.4zM4.5.5h1l.6 3.4 3.4.6v1l-3.4.6-.6 3.4h-1l-.6-3.4L-.5 5.5v-1l3.4-.6.6-3.4z" fill="currentColor"/></svg>';
            case 'shield':
                return '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 2 4 5v6c0 5.05 3.41 9.76 8 11 4.59-1.24 8-5.95 8-11V5l-8-3zm-1.05 13.5-3.2-3.2 1.4-1.4 1.8 1.79 4.9-4.89 1.4 1.4-6.3 6.3z" fill="currentColor"/></svg>';
            default:
                return '';
        }
    }
}

$boon_build_site_title = isset($config['cf_title']) && $config['cf_title'] ? $config['cf_title'] : '공감 입주 청소';
$boon_build_company_name = !empty($rb_builder['bu_1']) ? $rb_builder['bu_1'] : '공감 입주 청소';
$boon_build_owner = !empty($rb_builder['bu_2']) ? $rb_builder['bu_2'] : '사업자 정보 준비중';
$boon_build_phone = !empty($rb_builder['bu_3']) ? $rb_builder['bu_3'] : '0503-6982-1224';
$boon_build_biz = !empty($rb_builder['bu_5']) ? $rb_builder['bu_5'] : '사업자등록번호 준비중';
$boon_build_address = !empty($rb_builder['bu_10']) ? $rb_builder['bu_10'] : '주소 정보 준비중';
$boon_build_privacy = !empty($rb_builder['bu_11']) ? $rb_builder['bu_11'] : '';
$boon_build_footer_note = !empty($rb_builder['bu_12']) ? strip_tags($rb_builder['bu_12']) : '프리미엄 입주청소의 기준, 공감 입주 청소입니다.';
$boon_build_logo_url = !empty($rb_builder['bu_logo_pc']) ? G5_URL.'/data/logos/pc?ver='.G5_SERVER_TIME : '';
$boon_build_logo_white_url = !empty($rb_builder['bu_logo_pc_w']) ? G5_URL.'/data/logos/pc_w?ver='.G5_SERVER_TIME : $boon_build_logo_url;
$boon_build_kakao_url = !empty($rb_builder['bu_sns2']) ? $rb_builder['bu_sns2'] : (!empty($rb_builder['bu_sns1']) ? $rb_builder['bu_sns1'] : '');

$boon_build_nav = array(
    array('label' => '공감의 약속', 'href' => '#boon-build-why'),
    array('label' => '서비스', 'href' => '#boon-build-service'),
    array('label' => '지역 찾기', 'href' => '#boon-build-region'),
    array('label' => '후기', 'href' => '#boon-build-reviews'),
);

$boon_build_values = array(
    array('icon' => 'shield', 'title' => '전문 교육 팀', 'desc' => '하청이 아닌 본사 소속의 숙련된 정직원이 책임감 있는 프리미엄 서비스를 제공합니다.'),
    array('icon' => 'spark', 'title' => '친환경 세제', 'desc' => '인체에 무해한 친환경 세제로 가족의 건강과 공간의 쾌적함을 함께 지킵니다.'),
    array('icon' => 'check', 'title' => '100% 만족 보장', 'desc' => '청소 완료 후 고객 검수를 거치며 최종 만족하셨을 때 결제가 진행됩니다.'),
    array('icon' => 'phone', 'title' => '신속한 상담', 'desc' => '원하시는 일정과 평수에 맞춰 빠르고 정확하게 견적과 가능 일정을 안내합니다.'),
);

$boon_build_services = array(
    array(
        'title' => '신축 입주청소',
        'image' => 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774922339_0284.jpg',
        'features' => array('시멘트 가루와 분진 제거', '베란다 내부 유리창 청소', '주방, 욕실 수전 및 배수구 청소', '새집증후군 케어 옵션')
    ),
    array(
        'title' => '이사 후 입주청소',
        'image' => 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774922339_589.png',
        'features' => array('찌든 때와 묵은 때 제거', '벽지와 타일 얼룩 정리', '화장실 물때 집중 케어', '주방 후드와 기름때 청소')
    ),
    array(
        'title' => '상가/사무실 청소',
        'image' => 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774922338_5203.png',
        'features' => array('바닥 청소 및 왁스 작업', '유리창과 출입문 청소', '화장실 청소 및 소독', '먼지 제거와 전체 소독')
    ),
);

$boon_build_process = array(
    array('step' => '01', 'title' => '예약 및 상담', 'desc' => '전화 상담으로 일정과 평수를 확인하고 견적을 안내합니다.'),
    array('step' => '02', 'title' => '현장 점검', 'desc' => '오염도와 특이사항을 꼼꼼하게 체크합니다.'),
    array('step' => '03', 'title' => '정밀 청소', 'desc' => '천장부터 바닥까지 구역별로 청소합니다.'),
    array('step' => '04', 'title' => '살균 및 검수', 'desc' => '고온 스팀 살균과 자체 검수를 진행합니다.'),
    array('step' => '05', 'title' => '고객 확인', 'desc' => '고객님과 최종 확인 후 결제가 진행됩니다.'),
);

$boon_build_gallery = array(
    array('label' => '주방 청소', 'before' => 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774921570_5274.png', 'after' => 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774921571_026.png'),
    array('label' => '창틀 청소', 'before' => 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774921571_4993.png', 'after' => 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774921571_7922.png'),
    array('label' => '화장실 청소', 'before' => 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774921572_2602.png', 'after' => 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774921572_5538.png'),
    array('label' => '환풍기 청소', 'before' => 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774921572_8437.png', 'after' => 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774921573_1288.png'),
);

$boon_build_reviews = array(
    array('name' => '김*희 고객님', 'region' => '서울 강남구', 'image' => 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775011976_9414.png', 'content' => '신축 아파트라 먼지가 너무 많아서 걱정했는데 구석구석 정말 깨끗하게 해주셨어요. 창틀이 새것처럼 변해서 놀랐습니다.'),
    array('name' => '이*준 고객님', 'region' => '경기 수지', 'image' => 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775011977_497.png', 'content' => '이사 청소 맡겼는데 전 세입자가 남긴 찌든 때가 하나도 안 보여요. 주방 후드와 욕실 배수구까지 분해해서 세척해주셨습니다.'),
    array('name' => '박*아 고객님', 'region' => '인천 부평구', 'image' => 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775011977_7737.png', 'content' => '아이 때문에 친환경 세제 쓰는 곳을 찾다가 예약했는데 냄새도 안 나고 깔끔해요. 집안 공기가 달라진 게 느껴집니다.'),
    array('name' => '조*현 고객님', 'region' => '서울 송파구', 'image' => 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775011975_8251.png', 'content' => '오래된 구축 아파트라 걱정이 많았는데 베란다 곰팡이부터 창틀 묵은 먼지까지 완벽하게 제거해주셨어요.'),
);

$boon_build_faqs = array(
    array('q' => '예약은 언제쯤 하는 것이 좋나요?', 'a' => '최소 1~2주 전 예약을 권장드립니다. 이사 성수기에는 예약이 빨리 마감될 수 있습니다.'),
    array('q' => '청소 시간은 얼마나 걸리나요?', 'a' => '평수와 오염도에 따라 다르지만 30평형대 기준 보통 4~6시간 정도 소요됩니다.'),
    array('q' => '청소 당일 현장에 있어야 하나요?', 'a' => '시작 시 특이사항 전달과 종료 시 최종 검수를 위해 현장 방문을 추천드립니다. 어려우신 경우 사진 전송으로 대체 가능합니다.'),
    array('q' => '추가 비용이 발생할 수 있나요?', 'a' => '빌트인 가전 내부, 베란다 비확장, 과도한 곰팡이/시트지 제거 등은 현장에서 추가 비용이 발생할 수 있습니다.'),
);
?>

<div class="boon-build">
    <header class="boon-build__site-header">
        <div class="boon-build__container">
            <div class="boon-build__site-header-inner">
                <a href="<?php echo G5_URL; ?>" class="boon-build__brand" aria-label="<?php echo $boon_build_site_title; ?>">
                    <?php if ($boon_build_logo_url) { ?>
                    <img src="<?php echo $boon_build_logo_url; ?>" alt="<?php echo $boon_build_site_title; ?>">
                    <?php } else { ?>
                    <span class="boon-build__brand-mark"><?php echo boon_build_icon('spark'); ?></span>
                    <span><?php echo $boon_build_site_title; ?></span>
                    <?php } ?>
                </a>

                <nav class="boon-build__desktop-nav" aria-label="메인 메뉴">
                    <?php foreach ($boon_build_nav as $boon_build_nav_item) { ?>
                    <a href="<?php echo $boon_build_nav_item['href']; ?>" class="boon-build__desktop-link"><?php echo $boon_build_nav_item['label']; ?></a>
                    <?php } ?>
                </nav>

                <div class="boon-build__desktop-actions">
                    <a href="tel:<?php echo $boon_build_phone; ?>" class="boon-build__login-link"><?php echo $boon_build_phone; ?></a>
                    <a href="#boon-build-region" class="boon-build__button boon-build__button--header">지역 찾기</a>
                </div>

                <button type="button" class="boon-build__menu-toggle" aria-expanded="false" aria-controls="boon-build-mobile-nav">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>

        <div class="boon-build__mobile-nav" id="boon-build-mobile-nav" hidden>
            <div class="boon-build__container">
                <nav class="boon-build__mobile-nav-inner" aria-label="모바일 메인 메뉴">
                    <?php foreach ($boon_build_nav as $boon_build_nav_item) { ?>
                    <a href="<?php echo $boon_build_nav_item['href']; ?>" class="boon-build__mobile-link"><?php echo $boon_build_nav_item['label']; ?></a>
                    <?php } ?>
                </nav>
            </div>
        </div>
    </header>

    <section class="boon-build__hero boon-build__full-bleed" id="boon-build-home">
        <div class="boon-build__hero-media">
            <img src="https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775010246_4278.png" alt="공감 입주 청소">
            <div class="boon-build__hero-overlay"></div>
        </div>
        <div class="boon-build__container">
            <div class="boon-build__hero-content">
                <span class="boon-build__eyebrow">Premium Cleaning Service</span>
                <h1 class="boon-build__hero-title">
                    공감 입주 청소로 완성하는<br>
                    <span>새집의 설렘, 완벽한 디테일</span>
                </h1>
                <p class="boon-build__hero-text">
                    전문 인력과 친환경 세제로 가족의 건강까지 케어하는<br>
                    프리미엄 입주청소 서비스
                </p>
                <div class="boon-build__hero-actions">
                    <a href="#boon-build-region" class="boon-build__button boon-build__button--primary">지금 바로 지역 찾기</a>
                    <a href="#boon-build-service" class="boon-build__button boon-build__button--ghost">서비스 상세 보기</a>
                </div>
            </div>
        </div>
    </section>

    <section class="boon-build__section boon-build__section--soft" id="boon-build-why">
        <div class="boon-build__container">
            <div class="boon-build__section-title">
                <p>01 / Our Values</p>
                <h2>왜 <span>공감 입주 청소</span>인가요?</h2>
                <strong>고객님이 믿고 맡길 수 있는 진심 어린 약속</strong>
            </div>

            <div class="boon-build__value-grid">
                <?php foreach ($boon_build_values as $boon_build_value) { ?>
                <article class="boon-build__value-card">
                    <div class="boon-build__value-icon"><?php echo boon_build_icon($boon_build_value['icon']); ?></div>
                    <h3><?php echo $boon_build_value['title']; ?></h3>
                    <p><?php echo $boon_build_value['desc']; ?></p>
                </article>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="boon-build__section" id="boon-build-service">
        <div class="boon-build__container">
            <div class="boon-build__section-head">
                <div class="boon-build__section-title boon-build__section-title--left">
                    <p>02 / Our Services</p>
                    <h2>전문적인 <span>클리닝 서비스</span></h2>
                </div>
                <p>공간의 특성과 오염도에 맞춘 공감만의 최적화된 클리닝 솔루션을 경험해 보세요.</p>
            </div>

            <div class="boon-build__service-grid">
                <?php foreach ($boon_build_services as $boon_build_service) { ?>
                <article class="boon-build__service-card">
                    <div class="boon-build__service-media">
                        <img src="<?php echo $boon_build_service['image']; ?>" alt="<?php echo $boon_build_service['title']; ?>">
                        <span>Premium</span>
                    </div>
                    <div class="boon-build__service-body">
                        <h3><?php echo $boon_build_service['title']; ?></h3>
                        <ul>
                            <?php foreach ($boon_build_service['features'] as $boon_build_feature) { ?>
                            <li><?php echo boon_build_icon('check'); ?><?php echo $boon_build_feature; ?></li>
                            <?php } ?>
                        </ul>
                        <a href="#boon-build-region" class="boon-build__button boon-build__button--light">지역별 상담 문의</a>
                    </div>
                </article>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="boon-build__section boon-build__section--soft boon-build__full-bleed" id="boon-build-region">
        <div class="boon-build__container">
            <div class="boon-build__section-title">
                <p>03 / Service Area</p>
                <h2>나의 지역 <span>지점 찾기</span></h2>
                <strong>거주하시는 지역을 선택하여 담당 지점의 연락처와 상세 정보를 확인하세요.</strong>
            </div>

            <div class="boon-build__region-panel">
                <div class="boon-build__region-search">
                    <span><?php echo boon_build_icon('search'); ?></span>
                    <input type="search" id="boon-build-region-search" placeholder="지역명을 검색하여 담당 지점의 연락처를 확인하세요">
                </div>
                <div class="boon-build__region-tabs" id="boon-build-region-tabs"></div>
                <div class="boon-build__city-grid" id="boon-build-city-grid"></div>
            </div>
        </div>
    </section>

    <section class="boon-build__section boon-build__section--dark boon-build__full-bleed" id="boon-build-process">
        <div class="boon-build__container">
            <div class="boon-build__section-title">
                <p>04 / Work Flow</p>
                <h2>입주청소 <span>프로세스</span></h2>
                <strong>공감 입주 청소만의 체계적이고 투명한 5단계 시스템</strong>
            </div>
            <div class="boon-build__process-grid">
                <?php foreach ($boon_build_process as $boon_build_step) { ?>
                <article class="boon-build__process-card">
                    <span><?php echo $boon_build_step['step']; ?></span>
                    <h3><?php echo $boon_build_step['title']; ?></h3>
                    <p><?php echo $boon_build_step['desc']; ?></p>
                </article>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="boon-build__section" id="boon-build-gallery">
        <div class="boon-build__container">
            <div class="boon-build__section-title">
                <p>05 / Cleaning Gallery</p>
                <h2>청소 <span>갤러리</span></h2>
                <strong>전후 사진으로 증명하는 공감 입주 청소의 퀄리티</strong>
            </div>
            <div class="boon-build__gallery-grid">
                <?php foreach ($boon_build_gallery as $boon_build_photo) { ?>
                <article class="boon-build__gallery-card">
                    <div class="boon-build__before-after">
                        <figure>
                            <img src="<?php echo $boon_build_photo['before']; ?>" alt="<?php echo $boon_build_photo['label']; ?> 전">
                            <figcaption>Before</figcaption>
                        </figure>
                        <figure>
                            <img src="<?php echo $boon_build_photo['after']; ?>" alt="<?php echo $boon_build_photo['label']; ?> 후">
                            <figcaption>After</figcaption>
                        </figure>
                    </div>
                    <h3><?php echo $boon_build_photo['label']; ?></h3>
                </article>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="boon-build__section boon-build__section--soft boon-build__full-bleed" id="boon-build-reviews">
        <div class="boon-build__container">
            <div class="boon-build__section-title">
                <p>06 / Testimonials</p>
                <h2>생생한 <span>고객 후기</span></h2>
                <strong>실제 이용 고객님들이 직접 경험하고 남겨주신 리뷰</strong>
            </div>
            <div class="boon-build__review-row">
                <?php foreach ($boon_build_reviews as $boon_build_review) { ?>
                <article class="boon-build__review-card">
                    <div class="boon-build__stars">
                        <?php for ($i = 0; $i < 5; $i++) echo boon_build_icon('star'); ?>
                    </div>
                    <p>"<?php echo $boon_build_review['content']; ?>"</p>
                    <div class="boon-build__review-author">
                        <img src="<?php echo $boon_build_review['image']; ?>" alt="<?php echo $boon_build_review['name']; ?>">
                        <div>
                            <strong><?php echo $boon_build_review['name']; ?></strong>
                            <span><?php echo $boon_build_review['region']; ?></span>
                        </div>
                    </div>
                </article>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="boon-build__section" id="boon-build-faq">
        <div class="boon-build__container">
            <div class="boon-build__section-title">
                <p>07 / Help Center</p>
                <h2>자주 묻는 <span>질문</span></h2>
                <strong>궁금하신 점을 공감에서 시원하게 해결해 드립니다.</strong>
            </div>
            <div class="boon-build__faq-list">
                <?php foreach ($boon_build_faqs as $index => $boon_build_faq) { ?>
                <article class="boon-build__faq-item">
                    <button type="button" aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>">
                        <span><?php echo $boon_build_faq['q']; ?></span>
                        <b></b>
                    </button>
                    <div class="boon-build__faq-answer" <?php echo $index === 0 ? '' : 'hidden'; ?>>
                        <?php echo $boon_build_faq['a']; ?>
                    </div>
                </article>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="boon-build__cta boon-build__full-bleed">
        <div class="boon-build__container">
            <h2>지금 바로 상담해보세요</h2>
            <p>지역별 담당 지점이 빠르게 상담을 도와드립니다.</p>
            <div class="boon-build__cta-actions">
                <a href="tel:<?php echo $boon_build_phone; ?>" class="boon-build__contact boon-build__contact--phone"><?php echo boon_build_icon('phone'); ?> 전화 상담</a>
                <?php if ($boon_build_kakao_url) { ?>
                <a href="<?php echo $boon_build_kakao_url; ?>" target="_blank" rel="noopener noreferrer" class="boon-build__contact boon-build__contact--kakao">카카오 상담</a>
                <?php } ?>
            </div>
        </div>
    </section>

    <footer class="boon-build__site-footer boon-build__full-bleed">
        <div class="boon-build__container">
            <div class="boon-build__site-footer-inner">
                <?php if ($boon_build_logo_white_url) { ?>
                <p class="boon-build__site-footer-logo">
                    <img src="<?php echo $boon_build_logo_white_url; ?>" alt="<?php echo $boon_build_site_title; ?>">
                </p>
                <?php } ?>
                <p class="boon-build__site-footer-copy">© <?php echo date('Y'); ?> <?php echo $boon_build_company_name; ?>. All rights reserved.</p>
                <p class="boon-build__site-footer-info"><?php echo $boon_build_company_name; ?> | 대표: <?php echo $boon_build_owner; ?> | 사업자등록번호: <?php echo $boon_build_biz; ?></p>
                <p class="boon-build__site-footer-info">대표전화: <?php echo $boon_build_phone; ?> | 주소: <?php echo $boon_build_address; ?></p>
                <?php if ($boon_build_privacy) { ?>
                <p class="boon-build__site-footer-info">개인정보책임자(이메일): <?php echo $boon_build_privacy; ?></p>
                <?php } ?>
                <p class="boon-build__site-footer-note"><?php echo $boon_build_footer_note; ?></p>
            </div>
        </div>
    </footer>

    <div class="boon-build__floating">
        <a href="tel:<?php echo $boon_build_phone; ?>" class="boon-build__floating-button boon-build__floating-button--phone" title="전화 상담">
            <?php echo boon_build_icon('phone'); ?>
        </a>
    </div>
</div>

<script>
(function() {
    var root = document.querySelector('.boon-build');
    var body = document.body;
    var toggle = document.querySelector('.boon-build__menu-toggle');
    var mobileNav = document.getElementById('boon-build-mobile-nav');
    var activeRegion = '서울';
    var regionSearch = document.getElementById('boon-build-region-search');
    var regionTabs = document.getElementById('boon-build-region-tabs');
    var cityGrid = document.getElementById('boon-build-city-grid');

    var regions = {
        '서울': [
            { name: '강남입주청소', url: 'https://ipju365.kr/seoul/%EA%B0%95%EB%82%A8-%EC%9E%85%EC%A3%BC%EC%B2%AD%EC%86%8C/', phone: '0503-6982-1224', image: 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774927160_6126.png' },
            { name: '금천구입주청소', url: 'https://ipju365.kr/seoul/%EA%B8%88%EC%B2%9C%EA%B5%AC-%EC%9E%85%EC%A3%BC%EC%B2%AD%EC%86%8C/', phone: '0503-6982-1238', image: 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774927161_1028.png' },
            { name: '노원구입주청소', url: 'https://ipju365.kr/seoul/%EB%85%B8%EC%9B%90%EA%B5%AC-%EC%9E%85%EC%A3%BC%EC%B2%AD%EC%86%8C/', phone: '0503-6982-1232', image: 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774927161_3979.png' },
            { name: '동대문입주청소', url: 'https://ipju365.kr/seoul/%EB%8F%99%EB%8C%80%EB%AC%B8-%EC%9E%85%EC%A3%BC%EC%B2%AD%EC%86%8C/', phone: '0503-6982-1236', image: 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774927162_7655.png' },
            { name: '마포구입주청소', url: 'https://ipju365.kr/seoul/%EB%A7%88%ED%8F%AC%EA%B5%AC-%EC%9E%85%EC%A3%BC%EC%B2%AD%EC%86%8C/', phone: '0503-6982-1233', image: 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774927163_5097.png' },
            { name: '동작구입주청소', url: 'https://ipju365.kr/seoul/%EB%8F%99%EC%9E%91%EA%B5%AC-%EC%9E%85%EC%A3%BC%EC%B2%AD%EC%86%8C/', phone: '0503-6982-1239', image: 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774927163_2305.png' },
            { name: '서대문입주청소', url: 'https://ipju365.kr/seoul/%EC%84%9C%EB%8C%80%EB%AC%B8-%EC%9E%85%EC%A3%BC%EC%B2%AD%EC%86%8C/', phone: '0503-6982-1237', image: 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774927163_7911.png' },
            { name: '성동구입주청소', url: 'https://ipju365.kr/seoul/%EC%84%B1%EB%8F%99%EA%B5%AC-%EC%9E%85%EC%A3%BC%EC%B2%AD%EC%86%8C/', phone: '0503-6982-1240', image: 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774927164_0729.png' },
            { name: '송파입주청소', url: 'https://ipju365.kr/Gyeonggi/%EC%86%A1%ED%8C%8C-%EC%9E%85%EC%A3%BC%EC%B2%AD%EC%86%8C/', phone: '0503-6982-1211', image: 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774927164_3552.png' },
            { name: '영등포입주청소', url: 'https://ipju365.kr/seoul/%EC%98%81%EB%93%B1%ED%8F%AC-%EC%9E%85%EC%A3%BC%EC%B2%AD%EC%86%8C/', phone: '0503-6982-1234', image: 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774927164_6352.png' },
            { name: '은평구입주청소', url: 'https://ipju365.kr/seoul/%EC%9D%80%ED%8F%89%EA%B5%AC-%EC%9E%85%EC%A3%BC%EC%B2%AD%EC%86%8C/', phone: '0503-6982-1235', image: 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774927180_9834.png' },
            { name: '중랑구입주청소', url: 'https://ipju365.kr/seoul/%EC%A4%91%EB%9E%91%EA%B5%AC-%EC%9E%85%EC%A3%BC%EC%B2%AD%EC%86%8C/', phone: '0503-6982-1231', image: 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774927181_2698.png' }
        ],
        '인천': [
            { name: '계양구입주청소', url: 'https://ipju365.kr/Incheon/%EA%B3%84%EC%96%91%EA%B5%AC-%EC%9E%85%EC%A3%BC%EC%B2%AD%EC%86%8C/', phone: '0503-6982-1249', image: 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774928603_0778.png' },
            { name: '남동구입주청소', url: 'https://ipju365.kr/Incheon/%EB%82%A8%EB%8F%99%EA%B5%AC-%EC%9E%85%EC%A3%BC%EC%B2%AD%EC%86%8C/', phone: '0503-6982-1250', image: 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774928603_359.png' },
            { name: '미추홀구입주청소', url: 'https://ipju365.kr/Incheon/%EB%AF%B8%EC%B6%94%ED%99%80%EA%B5%AC-%EC%9E%85%EC%A3%BC%EC%B2%AD%EC%86%8C/', phone: '0503-6982-1252', image: 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774928603_6175.png' },
            { name: '부평입주청소', url: 'https://ipju365.kr/Gyeonggi/%EB%B6%80%ED%8F%89-%EC%9E%85%EC%A3%BC%EC%B2%AD%EC%86%8C/', phone: '0503-6982-1215', image: 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774928604_2702.png' },
            { name: '서구입주청소', url: 'https://ipju365.kr/Incheon/%EC%84%9C%EA%B5%AC-%EC%9E%85%EC%A3%BC%EC%B2%AD%EC%86%8C/', phone: '0503-6982-1251', image: 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774928604_5073.png' },
            { name: '송도입주청소', url: 'https://ipju365.kr/Gyeonggi/%EC%86%A1%EB%8F%84-%EC%9E%85%EC%A3%BC%EC%B2%AD%EC%86%8C/', phone: '0503-6982-1212', image: 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774928604_7301.png' },
            { name: '연수구입주청소', url: 'https://ipju365.kr/Incheon/%EC%97%B0%EC%88%98%EA%B5%AC-%EC%9E%85%EC%A3%BC%EC%B2%AD%EC%86%8C/', phone: '0503-6982-1248', image: 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774928604_8972.png' },
            { name: '인천입주청소', url: 'https://ipju365.kr/Gyeonggi/%EC%9D%B8%EC%B2%9C-%EC%9E%85%EC%A3%BC%EC%B2%AD%EC%86%8C/', phone: '0503-6982-1220', image: 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774928605_0649.png' },
            { name: '중구입주청소', url: 'https://ipju365.kr/Incheon/%EC%A4%91%EA%B5%AC-%EC%9E%85%EC%A3%BC%EC%B2%AD%EC%86%8C/', phone: '0503-6982-1253', image: 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774928605_2318.png' }
        ],
        '경기 북부': [
            { name: '고양입주청소', url: 'https://example.com/gyeonggi-north/goyang', phone: '1588-1101', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775015168_2708.png' },
            { name: '덕양구입주청소', url: 'https://example.com/gyeonggi-north/deogyang', phone: '1588-1102', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775015168_5005.png' },
            { name: '문산입주청소', url: 'https://example.com/gyeonggi-north/munsan', phone: '1588-1103', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775015168_7123.png' },
            { name: '양주입주청소', url: 'https://example.com/gyeonggi-north/yangju', phone: '1588-1104', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775015168_8806.png' },
            { name: '연천입주청소', url: 'https://example.com/gyeonggi-north/yeoncheon', phone: '1588-1105', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775015169_7875.png' },
            { name: '의정부입주청소', url: 'https://example.com/gyeonggi-north/uijeongbu', phone: '1588-1106', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775015170_065.png' },
            { name: '일산입주청소', url: 'https://example.com/gyeonggi-north/ilsan', phone: '1588-1107', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775015395_9224.png' },
            { name: '파주입주청소', url: 'https://example.com/gyeonggi-north/paju', phone: '1588-1108', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775015396_421.png' },
            { name: '포천입주청소', url: 'https://example.com/gyeonggi-north/pocheon', phone: '1588-1109', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775015397_0616.png' }
        ],
        '경기 남부': [
            { name: '경기광주입주청소', url: 'https://example.com/gyeonggi-south/gwangju', phone: '1588-1201', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775018822_8251.png' },
            { name: '과천입주청소', url: 'https://example.com/gyeonggi-south/gwacheon', phone: '1588-1202', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775018823_0937.png' },
            { name: '광교입주청소', url: 'https://example.com/gyeonggi-south/gwanggyo', phone: '1588-1203', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775018824_5006.png' },
            { name: '광명입주청소', url: 'https://example.com/gyeonggi-south/gwangmyeong', phone: '1588-1204', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775018824_9829.png' },
            { name: '구리입주청소', url: 'https://example.com/gyeonggi-south/guri', phone: '1588-1205', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775018825_268.png' },
            { name: '군포입주청소', url: 'https://example.com/gyeonggi-south/gunpo', phone: '1588-1206', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775018825_717.png' },
            { name: '권선구입주청소', url: 'https://example.com/gyeonggi-south/gwonseon', phone: '1588-1207', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775018826_0035.png' },
            { name: '기흥구입주청소', url: 'https://example.com/gyeonggi-south/giheung', phone: '1588-1208', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775018826_2929.png' },
            { name: '김포입주청소', url: 'https://example.com/gyeonggi-south/gimpo', phone: '1588-1209', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775018826_5768.png' },
            { name: '남양주입주청소', url: 'https://example.com/gyeonggi-south/namyangju', phone: '1588-1210', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775018826_8638.png' },
            { name: '다산입주청소', url: 'https://example.com/gyeonggi-south/dasan', phone: '1588-1211', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775018853_4809.png' },
            { name: '단원구입주청소', url: 'https://example.com/gyeonggi-south/danwon', phone: '1588-1212', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775018853_9733.png' },
            { name: '동안구입주청소', url: 'https://example.com/gyeonggi-south/dongan', phone: '1588-1213', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775018854_4558.png' },
            { name: '동탄입주청소', url: 'https://example.com/gyeonggi-south/dongtan', phone: '1588-1214', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775018854_7489.png' },
            { name: '만안구입주청소', url: 'https://example.com/gyeonggi-south/manan', phone: '1588-1215', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775018856_1925.png' },
            { name: '부천입주청소', url: 'https://example.com/gyeonggi-south/bucheon', phone: '1588-1216', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775018856_6855.png' },
            { name: '분당입주청소', url: 'https://example.com/gyeonggi-south/bundang', phone: '1588-1217', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775018856_9847.png' },
            { name: '상록구입주청소', url: 'https://example.com/gyeonggi-south/sangnok', phone: '1588-1218', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775018857_2761.png' },
            { name: '성남입주청소', url: 'https://example.com/gyeonggi-south/seongnam', phone: '1588-1219', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775018857_573.png' },
            { name: '소사구입주청소', url: 'https://example.com/gyeonggi-south/sosa', phone: '1588-1220', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775018857_8692.png' },
            { name: '수원입주청소', url: 'https://example.com/gyeonggi-south/suwon', phone: '1588-1221', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775020142_1372.png' },
            { name: '수지입주청소', url: 'https://example.com/gyeonggi-south/suji', phone: '1588-1222', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775020142_6471.png' },
            { name: '시흥입주청소', url: 'https://example.com/gyeonggi-south/siheung', phone: '1588-1224', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775020143_1107.png' },
            { name: '안양입주청소', url: 'https://example.com/gyeonggi-south/anyang', phone: '1588-1225', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775020143_4053.png' },
            { name: '양평입주청소', url: 'https://example.com/gyeonggi-south/yangpyeong', phone: '1588-1226', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775020143_6991.png' },
            { name: '여주입주청소', url: 'https://example.com/gyeonggi-south/yeoju', phone: '1588-1227', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775020144_0246.png' },
            { name: '영통구입주청소', url: 'https://example.com/gyeonggi-south/yeongtong', phone: '1588-1228', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775020144_3145.png' },
            { name: '오산입주청소', url: 'https://example.com/gyeonggi-south/osan', phone: '1588-1229', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775020144_6074.png' },
            { name: '오정구입주청소', url: 'https://example.com/gyeonggi-south/ojeong', phone: '1588-1230', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775020144_945.png' },
            { name: '용인입주청소', url: 'https://example.com/gyeonggi-south/yongin', phone: '1588-1231', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775020145_2369.png' },
            { name: '원미구입주청소', url: 'https://example.com/gyeonggi-south/wonmi', phone: '1588-1232', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775020179_6811.png' },
            { name: '의왕입주청소', url: 'https://example.com/gyeonggi-south/uiwang', phone: '1588-1233', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775020180_1725.png' },
            { name: '장안구입주청소', url: 'https://example.com/gyeonggi-south/jangan', phone: '1588-1234', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775020180_4623.png' },
            { name: '중원구입주청소', url: 'https://example.com/gyeonggi-south/jungwon', phone: '1588-1235', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775020181_9213.png' },
            { name: '처인구입주청소', url: 'https://example.com/gyeonggi-south/cheoin', phone: '1588-1236', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775020182_4215.png' },
            { name: '평택입주청소', url: 'https://example.com/gyeonggi-south/pyeongtaek', phone: '1588-1237', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775020182_8943.png' },
            { name: '하남입주청소', url: 'https://example.com/gyeonggi-south/hanam', phone: '1588-1238', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775020183_188.png' },
            { name: '화성입주청소', url: 'https://example.com/gyeonggi-south/hwaseong', phone: '1588-1239', image: 'https://ipju365.kr/data/editor/2604/f74fe487082181366583f752aa8e38dd_1775020183_4802.png' }
        ],
        '기타': [
            { name: '부산입주청소', url: 'https://ipju365.kr/Other/%EB%B6%80%EC%82%B0-%EC%9E%85%EC%A3%BC%EC%B2%AD%EC%86%8C/', phone: '0503-6982-1281', image: 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774927690_9256.png' },
            { name: '세종입주청소', url: 'https://ipju365.kr/Other/%EC%84%B8%EC%A2%85-%EC%9E%85%EC%A3%BC%EC%B2%AD%EC%86%8C/', phone: '0503-6982-1280', image: 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774927691_6069.png' },
            { name: '아산입주청소', url: 'https://ipju365.kr/Gyeonggi/%EC%95%84%EC%82%B0-%EC%9E%85%EC%A3%BC%EC%B2%AD%EC%86%8C/', phone: '0503-6982-1208', image: 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774927691_8972.png' },
            { name: '원주입주청소', url: 'https://ipju365.kr/Gyeonggi/%EC%9B%90%EC%A3%BC-%EC%9E%85%EC%A3%BC%EC%B2%AD%EC%86%8C/', phone: '0503-6982-1275', image: 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774927693_4963.png' },
            { name: '천안입주청소', url: 'https://ipju365.kr/Gyeonggi/%EC%B2%9C%EC%95%88-%EC%9E%85%EC%A3%BC%EC%B2%AD%EC%86%8C/', phone: '0503-6982-1228', image: 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774927693_9752.png' },
            { name: '춘천입주청소', url: 'https://ipju365.kr/Gyeonggi/%EC%B6%98%EC%B2%9C-%EC%9E%85%EC%A3%BC%EC%B2%AD%EC%86%8C/', phone: '0503-6982-1277', image: 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774927694_6322.png' },
            { name: '홍천입주청소', url: 'https://ipju365.kr/Gyeonggi/%ED%99%8D%EC%B2%9C-%EC%9E%85%EC%A3%BC%EC%B2%AD%EC%86%8C/', phone: '0503-6982-1276', image: 'https://ipju365.kr/data/editor/2603/061ace0f7202ee905ad866deb97e4818_1774927695_1217.png' }
        ]
    };

    function escapeHtml(value) {
        return String(value).replace(/[&<>"']/g, function(char) {
            return ({ '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;' })[char];
        });
    }

    function getCities() {
        var query = regionSearch ? regionSearch.value.trim().toLowerCase() : '';
        if (!query) {
            return regions[activeRegion] || [];
        }

        return Object.keys(regions).reduce(function(items, regionName) {
            return items.concat(regions[regionName]);
        }, []).filter(function(city) {
            return city.name.toLowerCase().indexOf(query) !== -1;
        });
    }

    function renderTabs() {
        if (!regionTabs) {
            return;
        }

        var query = regionSearch ? regionSearch.value.trim() : '';
        regionTabs.hidden = !!query;
        regionTabs.innerHTML = Object.keys(regions).map(function(regionName) {
            var active = regionName === activeRegion ? ' is-active' : '';
            return '<button type="button" class="boon-build__region-tab' + active + '" data-region="' + escapeHtml(regionName) + '"><?php echo boon_build_icon('map'); ?>' + escapeHtml(regionName) + '</button>';
        }).join('');
    }

    function renderCities() {
        if (!cityGrid) {
            return;
        }

        var cities = getCities();
        if (!cities.length) {
            cityGrid.innerHTML = '<div class="boon-build__city-empty">검색 결과가 없습니다. 다른 검색어를 입력해 보세요.</div>';
            return;
        }

        cityGrid.innerHTML = cities.map(function(city) {
            var cityName = escapeHtml(city.name);
            return [
                '<article class="boon-build__city-card">',
                    '<div class="boon-build__city-media">',
                        '<img src="' + escapeHtml(city.image) + '" alt="' + cityName + '">',
                        '<div><strong>' + cityName + '</strong><span><?php echo boon_build_icon('phone'); ?>' + escapeHtml(city.phone) + '</span></div>',
                    '</div>',
                    '<div class="boon-build__city-actions">',
                        '<a href="tel:' + escapeHtml(city.phone) + '" class="boon-build__city-call"><?php echo boon_build_icon('phone'); ?>전화하기</a>',
                        '<a href="' + escapeHtml(city.url) + '" target="_blank" rel="noopener noreferrer">상세보기</a>',
                    '</div>',
                '</article>'
            ].join('');
        }).join('');
    }

    function refreshRegions() {
        renderTabs();
        renderCities();
    }

    if (!root) {
        return;
    }

    if (body) {
        body.classList.add('boon-build-home');
    }

    if (toggle && mobileNav) {
        toggle.addEventListener('click', function() {
            var expanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', expanded ? 'false' : 'true');
            mobileNav.hidden = expanded;
            root.classList.toggle('is-mobile-nav-open', !expanded);
        });

        mobileNav.querySelectorAll('a').forEach(function(link) {
            link.addEventListener('click', function() {
                toggle.setAttribute('aria-expanded', 'false');
                mobileNav.hidden = true;
                root.classList.remove('is-mobile-nav-open');
            });
        });
    }

    if (regionTabs) {
        regionTabs.addEventListener('click', function(event) {
            var button = event.target.closest('[data-region]');
            if (!button) {
                return;
            }
            activeRegion = button.getAttribute('data-region');
            refreshRegions();
        });
    }

    if (regionSearch) {
        regionSearch.addEventListener('input', refreshRegions);
    }

    root.querySelectorAll('.boon-build__faq-item button').forEach(function(button) {
        button.addEventListener('click', function() {
            var answer = this.nextElementSibling;
            var expanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', expanded ? 'false' : 'true');
            if (answer) {
                answer.hidden = expanded;
            }
        });
    });

    refreshRegions();
})();
</script>
