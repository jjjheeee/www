<?
$page_num = "03";
$sub_num = "03";
$sub_num2 = "01";
$sub_num3 = "04";
$page_section = "stemcell";
$sub_section = "business";
$sub_section2 = "solutions";
$page_info = "줄기세포";
$sub_info = "줄기세포 사업";
$sub_info2 = "줄기세포 토탈 솔루션";
$content_type="wide";
$leftMenu_tit = "베트남";
$leftMenu_txt = "베트남 과학기술원 ";
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
	<section class="stemcell-solution-page stemcell-business-container responsive">
		<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/stemcell/business/left_menu.php"; ?>
		<article class="stemcell-business-content full-content">
			<div class="slide-box">
				<ul class="stemcell-business-slide">
					<li><span class="img" style="background-image:url('/images/content/stemcell_business_solution_reference_img_01.jpg');"></span></li>
					<li><span class="img" style="background-image:url('/images/content/stemcell_business_solution_reference_img_02.jpg');"></span></li>
				</ul>
			</div>
		</article>
	</section>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
