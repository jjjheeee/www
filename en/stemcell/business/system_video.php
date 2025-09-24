<?
$page_num = "03";
$sub_num = "03";
$sub_num2 = "02";
$sub_num3 = "03";
$page_section = "stemcell";
$sub_section = "business";
$sub_section2 = "system";
$page_info = "Stem Cell";
$sub_info = "Stem Cell Business";
$sub_info2 = "STEMPIA SYSTEM";
$content_type="wide";
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
			<article class="stemcell-business-video-content">
				<div class="iframe-wrapper">
					<div class="iframe-inner">
						<iframe src="https://www.youtube.com/embed/hYwa5TStSwo?controls=0&amp;rel=0&amp;autoplay=1&amp;loop=1&amp;mute=1&amp;Modembranding=1&amp;playlist=hYwa5TStSwo" frameborder="0" allowfullscreen=""></iframe>
					</div>
				</div>
				<div class="video-txt-box">
					<strong class="tit">One-Stop Solution</strong>
					<p class="txt">
						All the products for SVF isolation   SVF isolation
						SVF isolation SVF isolation
					</p>
				</div>
			</article>
		</article>
	</section>


<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
