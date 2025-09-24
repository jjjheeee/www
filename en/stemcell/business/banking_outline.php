<?
$page_num = "03";
$sub_num = "03";
$sub_num2 = "04";
$sub_num3 = "01";
$page_section = "stemcell";
$sub_section = "business";
$sub_section2 = "banking";
$page_info = "Stem Cell";
$sub_info = "Stem Cell Business";
$sub_info2 = "CELL BANKING";
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
	<section class="stemcell-banking-page stemcell-business-container">
		<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/stemcell/business/left_menu.php"; ?>
		<article class="stemcell-business-content full-content">
			<div class="banking-outline-con">
				<div class="area">
					<div class="top-con" data-scroll="fade-up">
						<div class="tit-box"><strong class="tit">Re-Born <br>Cell Banking</strong></div>
						<div class="txt-box">
							<p class="stem-business-txt"><b style="color:#575757;">N-BIOTEK’s</b> Re-Born Cell Banking System is customized stem cell storage service which offers to store your own stem cells and immune cells safely in a good condition for the future use. Banked cells can be used for the purpose of health, beauty, anti-aging and disease treatment at any time when needed. </p>
							<p class="stem-business-txt">Todayis the youngest and healthiest moment of your life. Store your most young and healty cells through Re-Born Cell Banking System to be prepared for a disease that may occur in the future, and <b style="color:#454545;">Re-Born with the body of your youth.</b></p>
						</div>
					</div>
					<div class="circle-con" data-scroll="fade-up">
						<ul class="circle-list">
							<li style="background-image:url('/images/content/stemcell_business_banking_circle_bg_01.png');">
								<div class="inner">
									<strong class="tit">SVF Treatment <br>Banking</strong>
								</div>
							</li>
							<li style="background-image:url('/images/content/stemcell_business_banking_circle_bg_02.png');">
								<div class="inner">
									<strong class="tit">NK Cell <br>Banking </strong>
								</div>
							</li>
							<li style="background-image:url('/images/content/stemcell_business_banking_circle_bg_03.png');">
								<div class="inner">
									<strong class="tit">Adipose Derived <br>Stem Cell Banking </strong>
								</div>
							</li>
							<li style="background-image:url('/images/content/stemcell_business_banking_circle_bg_04.png');">
								<div class="inner">
									<strong class="tit">Cord Blood <br>Stem Cell Banking </strong>
								</div>
							</li>
						</ul>
					</div>
					<div class="graph-con" data-scroll="fade-up">
						<div class="tit-box">
							<strong class="tit"><span>Recovery rate after cell cryopreservation</span> Average approx. 90%</strong>
						</div>
						<div class="graph-box">
							<div class="graph-item" data-scroll="">
								<div class="inner-box">
									<div class="tit-box">
										<span class="legend">Recovery rate</span>
									</div>
									<div class="bar-box">
										<img src="<?=$site_host?>/images/content/stemcell_business_banking_outline_graph_bg.png" alt="">
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
