<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
<style>
    #nananav {background:#0a0019; padding:30px;}
    #nananav>ul {width:930px; margin:0 auto;}
    #nananav>ul>li{display:inline-block; margin-left:30px;}
    #nananav>ul>li:first-child {margin-left:0;}
    #nananav>ul>li>a{color:#fff; font-size:2em;}
</style>

<nav id="nananav">
    <ul>
        <li><img src="/logodark.png" alt="logo" style=" width:100px;"></li>
        <li><a href="/">MAIN</a></li>
        <li><a href="http://g2mpartners.net/gnu/bbs/board.php?bo_table=LatestNews">Latest News</a></li>
    </ul>
</nav>

    <div id="container" style="position:absolute; left:50%; margin-left: -465px;">
        <?php if (!defined("_INDEX_")) { ?><h2 id="container_title"><span title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></span></h2><?php } ?>

