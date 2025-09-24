<?
$page_num = "03";
$sub_num = "04";
$sub_num2 = "02";
$sub_num3 = "04";
$sub_num4 = "04";
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
								<li class="selected"><a href="#tabConM01"><em>클린부스</em></a></li>
								<li><a href="#tabConM02"><em>세포계수</em></a></li>
								<li><a href="#tabConM03"><em>셀뱅킹</em></a></li>
							</ul>
						</div>
					</aside>
					<article class="sub-tab-content-style cm-tab-content-wrapper-JS">
						<div class="sub-tab-con system-customization-tab01 system-customization-con" id="tabConM01">
							<div class="con-box con01"  data-scroll="fade-up">
								<div class="img-box">
									<div class="inner"><strong class="tit">클린부스 (옵션)</strong><img src="<?=$site_host?>/images/content/stemcell_business_system_customization_tab01_img_01.jpg" alt="">
									</div>
								</div>
								<div class="txt-box">
									<p class="stem-business-txt">
										헤파필터를 통해 청정한 공기가 수직층류 방식으로 유입되어 부스 내에서 요구되는 청정도에 맞출 수 있는 설비입니다. 조립, 분해, 이동이 가능하며 제작기간도 짧아 빠른 시일 내에 세포처리에 적합한 무균 공간을 확보할 수 있습니다.
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
											<p class="stem-business-txt">클린부스 상부에 설치된 헤파필터를 통해 청정한 공기를 유입시킵니다.</p>
										</li>
										<li>
											<span class="num">2</span>
											<p class="stem-business-txt">
												헤파필터를 통해 유입된 청정한 공기가 클린부스 하부로 빠져나가 <br class="pc-br">
												클린부스 내에 양압이 유지되어 외부의 공기가 유입되지 않으므로 항상 높은 청정도를 유지할 수 있습니다.												
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
									<div class="inner"> <strong class="tit" data-scroll="fade">세포 계수</strong></div>
								</div>
								<div class="txt-box in-img-box">
									<div class="inner">
										<p class="stem-business-txt">
											정밀한 세포계수를 위한 이중형광 광학계가 탑재된 줄기세포 및 SVF 계수 전용 셀카운터, 현미경 등 세포 계수에 필요한 관련 소모품을 제공하므로 더 정확하고 전문적인 연구가 가능합니다.
										</p>
										<div class="img-item-box">
											<div class="img-item"><div class="img"><span><img src="<?=$site_host?>/images/content/stemcell_business_system_customization_tab02_img_02.jpg" alt="" class="img-center"></span></div><p class="txt">셀 카운터</p></div>
											<div class="img-item"><div class="img"><span><img src="<?=$site_host?>/images/content/stemcell_business_system_customization_tab02_img_03.jpg" alt="" class="img-center"></span></div><p class="txt">현미경</p></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="sub-tab-con system-customization-tab03 system-customization-con" id="tabConM03">
							<div class="con-box">
								<div class="img-box">
									<img src="<?=$site_host?>/images/content/stemcell_business_system_customization_tab03_img_01.jpg" alt="">
									<div class="inner"> <strong class="tit" data-scroll="fade">셀뱅킹</strong></div>
								</div>
								<div class="txt-box in-img-box">
									<div class="inner">
										<p class="stem-business-txt">
											셀뱅킹에 필요한 초저온냉동고, LN2 저장탱크, 항온수조 및 소모품을 제공합니다.<br><br>
											엔바이오텍의 특별한 셀뱅킹 기술을 통해 세포 손상을 최소화하여 동결보관 후에도 90% 이상의 높은 생존율과 세포 수율을 유지할 수 있습니다.
										</p>
										<div class="img-item-box">
											<div class="img-item"><div class="img"><span><img src="<?=$site_host?>/images/content/stemcell_business_system_customization_tab03_img_02.jpg" alt="" class="img-center"></span></div><p class="txt">초저온 냉동고</p></div>
											<div class="img-item"><div class="img"><span><img src="<?=$site_host?>/images/content/stemcell_business_system_customization_tab03_img_03.jpg" alt="" class="img-center"></span></div><p class="txt">LN2 저장탱크</p></div>
											<div class="img-item"><div class="img"><span><img src="<?=$site_host?>/images/content/stemcell_business_system_customization_tab03_img_04.jpg" alt="" class="img-center"></span></div><p class="txt">항온수조</p></div>
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
