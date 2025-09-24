<?
$page_num = "03";
$sub_num = "04";
$sub_num2 = "02";
$sub_num3 = "01";
$page_section = "stemcell";
$sub_section = "business";
$sub_section2 = "system";
$page_info = "줄기세포";
//$sub_info = "줄기세포 사업";
$sub_info = "스템피아";
$sub_info2 = "스템피아 시스템";
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
							<p class="txt">엔바이오텍의 스템피아시스템은 SVF, PRP 분리 및 <br class="m-br">응용을 위한 원스톱 솔루션입니다. </p>
							<p class="txt">
								스템피아시스템은 줄기세포 관련 사업 착수에 적합하며,<br class="m-br"> 사용자의 목적에 따라 클린부스, <br class="pc-br">
								배양 설비 및 장비, 셀뱅킹 시설 <br class="m-br">등을 추가로 선택이 가능합니다.
							</p>
							<p class="txt">
								또한, 엔바이오텍은 SVF, PRP 분리 및 응용을<br class="m-br"> 위한 기술 교육을 제공합니다.
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
									<strong class="tit">소프트웨어</strong>
									<p class="txt">
										SVF, PRP 를 추출하여 응용하는데 필요한 <br class="pc-br">기술트레이닝 및 국제줄기세포응용학회를 통한 <br class="pc-br">글로벌 네트워크 구축 및 마케팅 지원
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
									<strong class="tit">하드웨어</strong>
									<p class="txt">
										SVF, PRP를 추출하여 응용하는데에 <br class="pc-br">필요한 모든 설비와 물품
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
							<span class="point">스템피아 시스템 특장점</span>
							<ul class="point-list">
								<li class="font-xi">
									<strong class="tit">One-Stop Solution</strong>
									<p class="txt">스템피아 시스템을 통한 쉽고 빠른 SVF & PRP 접근과 엔바이오텍 자체 개발 SVF 분리 키트인 스템피아를 이용하여 시술 비용을 절감합니다.</p>
								</li>
								<li class="font-xi">
									<strong class="tit">Customization</strong>
									<p class="txt">필요한 목적에 따라 셀카운팅, 셀뱅킹, 클린룸 시설 등을 추가할 수 있습니다.</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</article>
	</section>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
