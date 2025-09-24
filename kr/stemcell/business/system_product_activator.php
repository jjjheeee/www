<?
$page_num = "03";
$sub_num = "04";
$sub_num2 = "02";
$sub_num3 = "04";
$sub_num4 = "03";
$page_section = "stemcell";
$sub_section = "business";
$sub_section2 = "system";
$sub_section3 = "product";
$page_info = "줄기세포";
//$sub_info = "줄기세포 사업";
$sub_info = "스템피아";
$sub_info2 = "스템피아 시스템";
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
					<strong class="system-prd-tit">LED 셀 액티베이터(LCA)</strong>
					<div class="con-box">
						<div class="img-box"><img src="<?=$site_host?>/images/content/stemcell_business_activator_top_img.png" alt="" class="pc-ver"><img src="<?=$site_host?>/images/content/stemcell_business_activator_top_img_m.png" alt="" class="m-ver"></div>
						<div class="txt-box">
							<strong class="tit">
								성장인자 활성화 및 치료 효과 증진
							</strong>
							<p class="txt">
								4가지 종류의 LED 빛을 조사하여 SVF 및 <br class="pc-br">
								PRP 내의 성장인자를 활성화시켜 치료 효과를 <br class="pc-br">
								증진시켜주는 엔바이오텍만의 특허 제품입니다.
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
						실험결과 LED 세포 액티베이터의 3가지 LED 라이트를 15분 동안 조사했을 때 PRP 내 성장 인자의 농도가 증가한 것으로 확인되었습니다.
					</p>
				</div>
			</div>
		</article>
	</section>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
