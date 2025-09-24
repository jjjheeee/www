<?
$page_num = "03";
$sub_num = "03";
$sub_num2 = "04";
$sub_num3 = "01";
$page_section = "stemcell";
$sub_section = "business";
$sub_section2 = "banking";
$page_info = "줄기세포";
$sub_info = "줄기세포 사업";
$sub_info2 = "셀뱅킹";
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
	<section class="stemcell-banking-page stemcell-business-container">
		<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/stemcell/business/left_menu.php"; ?>
		<article class="stemcell-business-content full-content">
			<div class="banking-outline-con">
				<div class="area">
					<div class="top-con" data-scroll="fade-up">
						<div class="tit-box"><strong class="tit">Re-Born <br>셀뱅킹</strong></div>
						<div class="txt-box">
							<p class="stem-business-txt"><b style="color:#575757;">엔바이오텍의</b> 리본셀뱅킹은 자신의 줄기세포와 면역세포를 보관하여 훗날 필요로 하는 때에 언제든 건강, 미용, 안티에이징 및 질병치료 등의 목적으로 사용할 수 있는 고객 맞춤형 줄기세포 보관 서비스입니다.</p>
							<p class="stem-business-txt">남은 인생 중 가장 젊고 건강한 오늘, 엔바이오텍의 리본셀뱅킹을 통해 당신의 젊고 건강한 세포를 보관하여 언제 생길지 모르는 질병에 대비하고<b style="color:#454545;"> 젊은 시절의 몸으로 Re-Born하세요.</b></p>
						</div>
					</div>
					<div class="circle-con" data-scroll="fade-up">
						<ul class="circle-list">
							<li style="background-image:url('/images/content/stemcell_business_banking_circle_bg_01.png');">
								<div class="inner">
									<strong class="tit">SVF 뱅킹</strong>
								</div>
							</li>
							<li style="background-image:url('/images/content/stemcell_business_banking_circle_bg_02.png');">
								<div class="inner">
									<strong class="tit">NK세포 뱅킹</strong>
								</div>
							</li>
							<li style="background-image:url('/images/content/stemcell_business_banking_circle_bg_03.png');">
								<div class="inner">
									<strong class="tit">지방유래줄기세포 뱅킹</strong>
								</div>
							</li>
							<li style="background-image:url('/images/content/stemcell_business_banking_circle_bg_04.png');">
								<div class="inner">
									<strong class="tit">제대혈 줄기세포 뱅킹</strong>
								</div>
							</li>
						</ul>
					</div>
					<div class="graph-con" data-scroll="fade-up">
						<div class="tit-box">
							<strong class="tit"><span>동결보관 후 생존율</span>평균 약 90%</strong>
						</div>
						<div class="graph-box">
							<div class="graph-item" data-scroll="">
								<div class="inner-box">
									<div class="tit-box">
										<span class="legend">회복률</span>
									</div>
									<div class="bar-box">
										<img src="<?=$site_host?>/images/content/stemcell_business_banking_outline_graph_bg_kr.png" alt="">
										<span class="bar"><img src="<?=$site_host?>/images/content/stemcell_business_banking_outline_graph_bar.png" alt=""></span>
										<span class="percent"><img src="<?=$site_host?>/images/content/stemcell_business_banking_outline_graph_percent.png" alt=""></span>
									</div>
									<p class="label">Month</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>
	</section>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
