<?
$page_num = "03";
$sub_num = "03";
$sub_num2 = "02";
$sub_num3 = "04";
$sub_num4 = "04";
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
<style>
	#content.wide {padding:0;}
</style>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
	<section class="stemcell-system-page stemcell-business-container">
		<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/stemcell/business/left_menu.php"; ?>
		<article class="stemcell-business-content">
			<div class="area">
				<section class="cm-tab-container-JS stemcell-business-tab-container">
					<aside class="sub-tab-wrapper-style">
						<div class="sub-drop-menu-style cm-tab-list-JS stemcell-business-tab-style">
							<a href="javascript:;" class="sub-drop-open-btn-style cm-tab-select-btn-JS"><span></span><i class="xi-caret-down-min arrow"></i></a>
							<ul class="clearfix">
								<li class="selected"><a href="#tabConM01"><em>Clean Booth</em></a></li>
								<li><a href="#tabConM02"><em>Cell Counting</em></a></li>
								<li><a href="#tabConM03"><em>Cell Banking</em></a></li>
							</ul>
						</div>
					</aside>
					<article class="sub-tab-content-style cm-tab-content-wrapper-JS">
						<div class="sub-tab-con system-customization-tab01 system-customization-con" id="tabConM01">
							<div class="con-box con01"  data-scroll="fade-up">
								<div class="img-box">
									<div class="inner"><strong class="tit">Clean Booth (Option)</strong><img src="<?=$site_host?>/images/content/stemcell_business_system_customization_tab01_img_01.jpg" alt="">
									</div>
								</div>
								<div class="txt-box">
									<p class="stem-business-txt">
										A clean booth which is as a small bio cleanroom flows purified air inside vertically to maintain a required cleanliness level inside. Since it is easy to assemble and move, it can be set up in a short period so that it allows securing a suitable space for cell processing easily and rapidly.
									</p>
								</div>
							</div>
							<div class="con-box con02" data-scroll="fade-up">
								<div class="img-box" data-scroll="">
									<div class="inner-box">
										<div class="inner">
											<span class="default-img"><img src="<?=$site_host?>/images/content/stemcell_business_system_customization_tab01_img_02_default.png" alt="" class=""></span>
											<span class="active-img"><img src="<?=$site_host?>/images/content/stemcell_business_system_customization_tab01_img_02_active.png" alt="" class=""></span>
										</div>
									</div>
								</div>
								<div class="txt-box">
									<ul class="num-list">
										<li>
											<span class="num">1</span>
											<p class="stem-business-txt">Purified air is flown into a booth through a HEPA filter installed on top.</p>
										</li>
										<li>
											<span class="num">2</span>
											<p class="stem-business-txt">
												Flown air purified by a HEPA filter on top is spewed out through bottom. <br class="pc-br">
												Positive pressure inside prevents outside air from coming into a booth <br class="pc-br">
												so that it can always maintain high cleanliness level of inside.
											</p>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="sub-tab-con system-customization-tab02 system-customization-con" id="tabConM02">
							<div class="con-box">
								<div class="img-box">
									<img src="<?=$site_host?>/images/content/stemcell_business_system_customization_tab02_img_01.jpg" alt="">
									<div class="inner"> <strong class="tit" data-scroll="fade">Cell Counting</strong></div>
								</div>
								<div class="txt-box in-img-box">
									<div class="inner">
										<p class="stem-business-txt">
											Providing Cell Counter, microscope, and related consumables necessary for cell counting, enables more accurate and professional procedures and research.
										</p>
										<div class="img-item-box">
											<div class="img-item"><div class="img"><span><img src="<?=$site_host?>/images/content/stemcell_business_system_customization_tab02_img_02.jpg" alt="" class="img-center"></span></div><p class="txt">Cell counter</p></div>
											<div class="img-item"><div class="img"><span><img src="<?=$site_host?>/images/content/stemcell_business_system_customization_tab02_img_03.jpg" alt="" class="img-center"></span></div><p class="txt">Microscope</p></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="sub-tab-con system-customization-tab03 system-customization-con" id="tabConM03">
							<div class="con-box">
								<div class="img-box">
									<img src="<?=$site_host?>/images/content/stemcell_business_system_customization_tab03_img_01.jpg" alt="">
									<div class="inner"> <strong class="tit" data-scroll="fade">Cell Banking</strong></div>
								</div>
								<div class="txt-box in-img-box">
									<div class="inner">
										<p class="stem-business-txt">
											Possible to conduct cell banking facility by providing Deep freezer, LN2 storage tank, Water bath, and consumables. <br><br>
											N-BIOTEK’s cell banking technology minimizes cell damage and maintain over 90% high viability and cell recovery rate after cell cryopreservation.
										</p>
										<div class="img-item-box">
											<div class="img-item"><div class="img"><span><img src="<?=$site_host?>/images/content/stemcell_business_system_customization_tab03_img_02.jpg" alt="" class="img-center"></span></div><p class="txt">Deep freezer</p></div>
											<div class="img-item"><div class="img"><span><img src="<?=$site_host?>/images/content/stemcell_business_system_customization_tab03_img_03.jpg" alt="" class="img-center"></span></div><p class="txt">LN2 tank</p></div>
											<div class="img-item"><div class="img"><span><img src="<?=$site_host?>/images/content/stemcell_business_system_customization_tab03_img_04.jpg" alt="" class="img-center"></span></div><p class="txt">Water bath</p></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</article>
				</section>
			</div>
		</article>
	</section>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
