<?
$page_num = "03";
$sub_num = "03";
$sub_num2 = "03";
$sub_num3 = "01";
$page_section = "stemcell";
$sub_section = "business";
$sub_section2 = "research";
$page_info = "줄기세포";
$sub_info = "줄기세포 사업";
$sub_info2 = "줄기세포 임상연구";
$content_type="wide";
$leftMenu_tit ="공인된 세포처리시설";
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
						<strong class="stem-business-tit">공인된 세포처리시설</strong>
						<div class="txt-box">
							<p class="stem-business-txt">
								엔바이오텍은 국내 식약처로부터 첨단재생의료 임상연구 진행을 위한 세포처리시설 허가와 세포치료제 생산을 위한 <br class="pc-br">
								첨단바이오의약품제조업 허가를 취득하여 자체 시설과 기술력의 안전성을 공식적으로 인정 받았으며 
							</p>
							<p class="stem-business-txt">
								줄기세포 관련 다양한 특허를 통해 검증된 줄기세포 기술력으로 고객의 니즈에 따라 최적화된 줄기세포 서비스를 제공합니다.
							</p>
						</div>
					</div>
					<div class="certification-box">
						<div class="certification-item" data-scroll="fade-up">
							<dl>
								<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_research_outline_img_01.jpg" alt=""></span></dt>
								<dd><div class="thumb-box"><strong class="tit">첨단바이오의약품<br>제조업 허가증</strong></div></dd>
							</dl>
						</div>
						<div class="certification-item" data-scroll="fade-up">
							<dl>
								<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_research_outline_img_02.jpg" alt=""></span></dt>
								<dd><div class="thumb-box"><strong class="tit">세포처리시설<br>허가증</strong></div></dd>
							</dl>
						</div>
					</div>
				</div>
			</div>
		</article>
	</section>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
