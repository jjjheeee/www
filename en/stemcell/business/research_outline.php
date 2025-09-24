<?
$page_num = "03";
$sub_num = "03";
$sub_num2 = "03";
$sub_num3 = "01";
$page_section = "stemcell";
$sub_section = "business";
$sub_section2 = "research";
$page_info = "Stem Cell";
$sub_info = "Stem Cell Business";
$sub_info2 = "STEM CELL RESEARCH";
$content_type="wide";
$leftMenu_tit ="From officially approved stem cell processing facility";
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
	<section class="stemcell-resarch-page stemcell-business-container">
		<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/stemcell/business/left_menu.php"; ?>
		<article class="stemcell-business-content full-content research-outline-content">
			<div class="area">
				<div class="research-outline-con" data-scroll="fade-up">
					<div class="tit-box">
						<strong class="stem-business-tit">OFFICIALLY APPROVED STEM CELL PROCESSING FACILITY</strong>
						<div class="txt-box">
							<p class="stem-business-txt">
								N-BIOTEK has achieved a license from KFDA for stem cell processing facility <br class="pc-br">
								satisfying all the condition stipulated in the new law to manufacture and provide stem cells to other hospitals for clinical research.
							</p>
							<p class="stem-business-txt">
								Also, it has achieved a license from KFDA for manufacturing advanced biomedicine <br class="pc-br">
								product which allows develop and manufacture cell therapy product.
							</p>
						</div>
					</div>
					<div class="certification-box">
						<div class="certification-item" data-scroll="fade-up">
							<dl>
								<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_research_outline_img_01.jpg" alt=""></span></dt>
								<dd><div class="thumb-box"><strong class="tit">KFDA license <br> for stem cell processing facility </strong></div></dd>
							</dl>
						</div>
						<div class="certification-item" data-scroll="fade-up">
							<dl>
								<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_research_outline_img_02.jpg" alt=""></span></dt>
								<dd><div class="thumb-box"><strong class="tit">KFDA license <br>for manufacturing advanced Biomedicine product </strong></div></dd>
							</dl>
						</div>
					</div>
				</div>
			</div>
		</article>
	</section>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
