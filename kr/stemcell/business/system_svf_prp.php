<?
$page_num = "03";
$sub_num = "04";
$sub_num2 = "02";
$sub_num3 = "02";
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
				<div class="system-svf-prp-con">
					<div class="system-svf-con"  data-scroll="fade-up">
						<div class="tit-box">
							<strong class="tit">SVF</strong>
							<p class="txt">기질혈관분획</p>
						</div>
						<div class="con-box">
							<div class="left-img-box"><span><img src="<?=$site_host?>/images/content/stemcell_business_system_svf_img_01.png" alt="SVF Image"></span></div>
							<div class="txt-box">
								<span class="point-tit">SVF란?</span>
								<div class="inner">
									<p class="txt">
										SVF(기질혈관분획)는 자가지방조직에서 추출되는 지방유래 줄기세포를 비롯한 <br class="pc-br">
										여러가지 세포들의 혼합물로 SVF 내 지방유래 줄기세포는 자가증식능력, 분화능력, 면역조절 능력, <br class="pc-br">
										세포사멸 억제 능력 등의 기능을 통해 여러가지 성형, 피부미용 및 항노화 시술에 활용되고 있습니다. 
									</p>
								</div>
							</div>
							<div class="right-img-box" data-scroll="">
								<div class="inner-box">
									<div class="inner">
										<span class="item01" style="background-color:#fefbce;"></span>
										<span class="item02" style="background-color:#fadf95;"></span>
										<span class="item03" style="background-color:#e8bf71;"></span>
										<span class="item04" style="background-color:#439abe;"></span>
									</div>
									<span class="bg"><img src="<?=$site_host?>/images/content/stemcell_business_system_svf_img_02_kr.png" alt=""></span>
								</div>
							</div>
						</div>
					</div>
					<div class="system-prp-con" data-scroll="fade-up">
						<div class="tit-box">
							<strong class="tit">PRP</strong>
							<p class="txt">자가혈치료술</p>
						</div>
						<div class="con-box">
							<div class="left-img-box"><span><img src="<?=$site_host?>/images/content/stemcell_business_system_prp_img_01.png" alt="PRP Image"></span></div>
							<div class="txt-box">
								<span class="point-tit">PRP란?</span>
								<div class="inner">
									<p class="txt">
										PRP는 혈액에서 추출할 수 있는 다양한 성장인자를 포함한 혈장 성분으로<br class="pc-br">
										성장인자들의 기능을 통한 조직재생이나 주름개선, 항염증 치료에 사용되고 있습니다.  
									</p>
									<p class="txt">
										본인 혈액을 활용하므로 필러나 다른 합성 물질보다 거부 반응이 없다는 것이 장점이며, <br class="pc-br">
										SVF와 병행한 응용시술이 가능하고 피부시술의 경우 레이저나 다양한 장비로 시술이 가능합니다. 
									</p>
								</div>
							</div>
							<div class="right-img-box" data-scroll="">
								<div class="inner-box">
									<div class="inner">
										<span class="item01" style="background-color:#fefbce;"></span>
										<span class="item02" style="background-color:#fadf95;"></span>
										<span class="item03" style="background-color:#ef6e68;"></span>
									</div>
									<span class="bg"><img src="<?=$site_host?>/images/content/stemcell_business_system_prp_img_02_kr.png" alt=""></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>
	</section>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
