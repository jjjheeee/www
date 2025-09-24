<?
$page_num = "03";
$sub_num = "03";
$sub_num2 = "02";
$sub_num3 = "04";
$sub_num4 = "03";
$page_section = "stemcell";
$sub_section = "business";
$sub_section2 = "system";
$sub_section3 = "product";
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
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-deferred@2.0.0/dist/chartjs-plugin-deferred.min.js"></script>
<style>
	#content.wide {padding:0;}
</style>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
	<section class="stemcell-system-page stemcell-business-container">
		<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/stemcell/business/left_menu.php"; ?>
		<article class="stemcell-business-content">
			<div class="area">
				<div class="system-activator-con01 system-prd-top-con" data-scroll="fade-up">
					<strong class="system-prd-tit">LED CELL ACTIVATOR (LCA)</strong>
					<div class="con-box">
						<div class="img-box"><img src="<?=$site_host?>/images/content/stemcell_business_activator_top_img.png" alt="" class="pc-ver"><img src="<?=$site_host?>/images/content/stemcell_business_activator_top_img_m.png" alt="" class="m-ver"></div>
						<div class="txt-box">
							<strong class="tit">
								Cell Activation
							</strong>
							<p class="txt">
								LED Cell Activator improves the effect of treatment by
								activation cells and growth factors
							</p>
						</div>
					</div>
				</div>
				<div class="system-activator-con02">
					<div class="graph-box">
						<div class="graph-item item01"  data-scroll="">
							<div class="inner-box">
								<div class="tit-box">
									<strong class="tit">TGF-<b>β</b>1 Growth Factor Level in PRP</strong>
								</div>
								<div class="bar-box">
									<img src="<?=$site_host?>/images/content/stemcell_business_activator_graph_bg_01.png" alt="">
									<span class="bar"><img src="<?=$site_host?>/images/content/stemcell_business_activator_graph_img_01.png" alt=""></span>
								</div>
							</div>
						</div>
						<div class="graph-item item02"  data-scroll="">
							<div class="inner-box">
								<div class="tit-box">
									<strong class="tit">VEGF Growth Factor Level in PRP</strong>
								</div>
								<div class="bar-box">
									<img src="<?=$site_host?>/images/content/stemcell_business_activator_graph_bg_02.png" alt="">
									<span class="bar"><img src="<?=$site_host?>/images/content/stemcell_business_activator_graph_img_02.png" alt=""></span>
								</div>
							</div>
						</div>
					</div>
					<p class="stem-business-txt" data-scroll="fade-up">
						According to the experiment result of N-BIOTEK R&D center, it has been confirmed that concentrations of <br class="pc-br">
						growth factors in PRP were increased after exposing 3 types of LED lights of N-BIOTEK LED Cell Activator for 15 minutes.
					</p>
				</div>
			</div>
		</article>
	</section>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
