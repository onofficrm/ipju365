<?php
if (!defined('_GNUBOARD_')) {
    exit;
}

if (G5_IS_MOBILE) {
    include_once G5_THEME_MOBILE_PATH . '/tail.php';
    return;
}

if (G5_COMMUNITY_USE === false) {
    include_once G5_THEME_SHOP_PATH . '/shop.tail.php';
    return;
}

$rb_footer_layout = isset($rb_core['layout_ft']) && $rb_core['layout_ft'] !== '' ? $rb_core['layout_ft'] : 'basic';
$rb_footer_path = G5_THEME_PATH . '/rb.layout_ft/' . $rb_footer_layout . '/footer.php';
$rb_footer_style = G5_THEME_PATH . '/rb.layout_ft/' . $rb_footer_layout . '/style.css';
$rb_footer_style_ver = is_file($rb_footer_style) ? filemtime($rb_footer_style) : G5_SERVER_TIME;

$rb_footer_width = isset($tb_width_inner) && $tb_width_inner ? $tb_width_inner : '1400px';
$rb_footer_padding = isset($tb_width_padding) ? $tb_width_padding : '';
$rb_footer_company = !empty($rb_builder['bu_1']) ? $rb_builder['bu_1'] : $config['cf_title'];
$rb_footer_owner = !empty($rb_builder['bu_2']) ? $rb_builder['bu_2'] : '사업자 정보 준비중';
$rb_footer_phone = !empty($rb_builder['bu_3']) ? $rb_builder['bu_3'] : '';
$rb_footer_biz = !empty($rb_builder['bu_5']) ? $rb_builder['bu_5'] : '사업자등록번호 준비중';
$rb_footer_address = !empty($rb_builder['bu_10']) ? $rb_builder['bu_10'] : '주소 정보 준비중';
$rb_footer_note = !empty($rb_builder['bu_12']) ? strip_tags($rb_builder['bu_12']) : '';
$rb_footer_logo = !empty($rb_builder['bu_logo_pc_w']) ? G5_URL . '/data/logos/pc_w?ver=' . G5_SERVER_TIME : G5_THEME_URL . '/rb.img/logos/pc.png?ver=' . G5_SERVER_TIME;
?>
        </section>
    </div>

    <?php if (is_file($rb_footer_style)) { ?>
    <link rel="stylesheet" href="<?php echo G5_THEME_URL; ?>/rb.layout_ft/<?php echo $rb_footer_layout; ?>/style.css?ver=<?php echo $rb_footer_style_ver; ?>">
    <?php } ?>

    <?php if (is_file($rb_footer_path)) { ?>
        <?php include_once $rb_footer_path; ?>
    <?php } else { ?>
    <footer id="footer">
        <div class="footer_gnb">
            <div class="inner" style="width:<?php echo $rb_footer_width; ?>; <?php echo $rb_footer_padding; ?>">
                <ul class="footer_gnb_ul1">
                    <li><a href="<?php echo G5_URL; ?>">홈</a></li>
                    <li><a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=company">회사소개</a></li>
                    <li><a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=privacy">개인정보처리방침</a></li>
                    <li><a href="<?php echo G5_BBS_URL; ?>/content.php?co_id=provision">이용약관</a></li>
                </ul>
            </div>
        </div>
        <div class="footer_copy">
            <div class="inner" style="width:<?php echo $rb_footer_width; ?>; <?php echo $rb_footer_padding; ?>">
                <ul class="footer_copy_ul1">
                    <li class="footer_copy_ul1_li1">
                        <img src="<?php echo $rb_footer_logo; ?>" alt="<?php echo get_text($rb_footer_company); ?>">
                    </li>
                    <li class="footer_copy_ul1_li2">
                        <dl>
                            <dd><?php echo get_text($rb_footer_company); ?></dd>
                            <dd>대표: <?php echo get_text($rb_footer_owner); ?></dd>
                            <dd>사업자등록번호: <?php echo get_text($rb_footer_biz); ?></dd>
                            <?php if ($rb_footer_phone) { ?><dd>대표전화: <?php echo get_text($rb_footer_phone); ?></dd><?php } ?>
                            <dd>주소: <?php echo get_text($rb_footer_address); ?></dd>
                        </dl>
                        <div class="cb"></div>
                    </li>
                    <?php if ($rb_footer_note) { ?>
                    <li class="footer_copy_ul1_li3"><?php echo get_text($rb_footer_note); ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </footer>
    </main>
    <?php } ?>

<?php
include_once G5_PATH . '/tail.sub.php';
