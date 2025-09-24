<?
$page_num = "03";
$sub_num = "03";
$sub_num2 = "02";
$sub_num3 = "01";
$page_section = "stemcell";
$sub_section = "business";
$sub_section2 = "system";
$page_info = "Stem Cell";
$sub_info = "Stem Cell Business";
$sub_info2 = "STEMPIA SYSTEM";
$content_type="wide";
$leftMenu_tit ="&nbsp;";
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
	<section class="stemcell-system-page stemcell-business-container">
		<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/stemcell/business/left_menu.php"; ?>
		<article class="stemcell-business-content">
			<div class="area">
				<div class="system-outline-top-con" data-scroll="fade-up">
					<div class="tit-box">
						<div class="left-box"><img src="<?=$site_host?>/images/content/stemcell_business_system_outline_txt.jpg" alt="STEMPIA SYSTEM"></div>
						<div class="right-box">
							<p class="txt">N-BIOTEK Stempia System is One-stop solution for SVF and PRP isolation and application. </p>
							<p class="txt">
								Stempia System is suitable for starting stem cell related business and also possible <br class="pc-br">
								for customization (adding various type of clean booth, culture facility · equipment, cell banking
								facility) according to your purpose.
							</p>
							<p class="txt">
								In addition, N-BIOTEK provide technology training for SVF, PRP isolation and application, and
								experience our global stem cell platform, ISSCA (International Society for Stem Cell Application).
							</p>
						</div>
					</div>
					<div class="img-box">
						<div class="inner-box">
							<img src="<?=$site_host?>/images/content/stemcell_business_system_outline_icons.jpg" alt="">
						</div>
					</div>
				</div>
				<div class="system-outline-bottom-con">
					<div class="item-box">
						<div class="item" data-scroll="fade-up">
							<div class="inner-box">
								<span class="bg" style="background-image:url('/images/content/stemcell_business_system_outline_circle_bg_01.png');"></span>
								<div class="circle-box">
									<svg version="1.1" viewBox="0 0 490 490" preserveAspectRatio="xMinYMin meet">
										<circle class="circle" cx="245" cy="245" r="236" stroke="#a2e3de" stroke-width="18" fill-opacity="0" />
									</svg>
								</div>
								<div class="txt-box">
									<span class="icon" style="background-image:url('/images/content/stemcell_business_system_outline_circle_icon_01.png');"></span>
									<strong class="tit">TECHNOLOGY</strong>
									<p class="txt">
										Technology training for SVF <br class="pc-br">and PRP Isolation and Application & <br class="pc-br">Global Stem Cell Platform ISSCA
									</p>
								</div>
							</div>
							<div class="arrow-box">
								<span class="img"><img src="<?=$site_host?>/images/content/stemcell_business_system_outline_circle_arrow_01.png" alt=""></span>
							</div>
						</div>
						<div class="item" data-scroll="fade-up">
							<div class="inner-box">
								<span class="bg" style="background-image:url('/images/content/stemcell_business_system_outline_circle_bg_02.png');"></span>
								<div class="circle-box">
									<svg version="1.1" viewBox="0 0 490 490" preserveAspectRatio="xMinYMin meet">
										<circle class="circle" cx="245" cy="245" r="236" stroke="#b5abdf" stroke-width="18" fill-opacity="0" />
									</svg>
								</div>
								<div class="txt-box">
									<span class="icon" style="background-image:url('/images/content/stemcell_business_system_outline_circle_icon_02.png');"></span>
									<strong class="tit">EQUIPMENT</strong>
									<p class="txt">
										All equipment necessary For SVF and<br class="pc-br"> PRP Isolation and application
									</p>
								</div>
							</div>
							<div class="arrow-box">
								<span class="img"><img src="<?=$site_host?>/images/content/stemcell_business_system_outline_circle_arrow_02.png" alt=""></span>
							</div>
						</div>
					</div>
					<div class="point-box"  data-scroll="fade-up">
						<div class="inner-box">
							<span class="point">Strong Point</span>
							<ul class="point-list">
								<li class="font-xi">
									<strong class="tit">One-Stop Solution</strong>
									<p class="txt">All the products for SVF isolation process are provided</p>
								</li>
								<li class="font-xi">
									<strong class="tit">Customization</strong>
									<p class="txt">Possible to add bio cleanroom, culture facility, cell banking facility, etc, according to purpose</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</article>
	</section>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
