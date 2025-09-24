<?
$page_num = "02";
$sub_num = "01";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "ribon";
$sub_section = "ribon";
$page_info = "Reborn Stem";
$sub_info = "Reborn Stem";
$content_type="wide";
// $sub_info2 = "3차메뉴";	// 사용안할시 주석처리
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(Description)	필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>

<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>

<style>
	.img-box {text-align:center; padding: 120px 30px 240px;}
	.img-box img {max-width:100%;}
</style>

<article>
	<div class="img-box"><img src="<?=$site_host?>/images/content/ready_img.png" alt=""></div>
</article>

<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
