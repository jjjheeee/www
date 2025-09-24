<?
$page_num = "03";
$sub_num = "03";
$sub_num2 = "02";
$sub_num3 = "05";
$sub_num4 = "02";
$page_section = "stemcell";
$sub_section = "business";
$sub_section2 = "system";
$page_info = "Stem Cell";
$sub_info = "Stem Cell Business";
$sub_info2 = "STEMPIA SYSTEM";
$content_type="wide";
$leftMenu_tit ="&nbsp;";
$leftMenu_txt ="Full option of Stempia System";
// $sub_info2 = "3차메뉴";	// 사용안할시 주석처리
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../../lib/config.php";
$sub_description = ""; // 페이지 설명(Description)	필요시 사용
include "../../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<style>
	#content.wide {padding:0;}
</style>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
	<section class="stemcell-system-page stemcell-business-container responsive">
		<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/stemcell/business/left_menu.php"; ?>
		<article class="stemcell-business-content full-content">
			<div class="slide-box">
				<ul class="stemcell-business-slide">
					<li><span class="img" style="background-image:url('/images/content/stemcell_business_system_reference_img_01.jpg');"></span></li>
					<li><span class="img" style="background-image:url('/images/content/stemcell_business_system_reference_img_02.jpg');"></span></li>
					<li><span class="img" style="background-image:url('/images/content/stemcell_business_system_reference_img_03.jpg');"></span></li>
					<li><span class="img" style="background-image:url('/images/content/stemcell_business_system_reference_img_04.jpg');"></span></li>
					<li><span class="img" style="background-image:url('/images/content/stemcell_business_system_reference_img_05.jpg');"></span></li>
					<li><span class="img" style="background-image:url('/images/content/stemcell_business_system_reference_img_06.jpg');"></span></li>
				</ul>
			</div>
		</article>
	</section>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
