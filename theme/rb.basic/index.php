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

include_once G5_THEME_PATH . '/head.php';
include_once __DIR__ . '/boon-build-home.php';
include_once G5_THEME_PATH . '/tail.php';
