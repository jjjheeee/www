<?
$page_num = "03";
$sub_num = "03";
$sub_num2 = "02";
$sub_num3 = "02";
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
				<div class="system-svf-prp-con">
					<div class="system-svf-con"  data-scroll="fade-up">
						<div class="tit-box">
							<strong class="tit">SVF</strong>
							<p class="txt">Stromal Vascular Fraction</p>
						</div>
						<div class="con-box">
							<div class="left-img-box"><span><img src="<?=$site_host?>/images/content/stemcell_business_system_svf_img_01.png" alt="SVF Image"></span></div>
							<div class="txt-box">
								<span class="point-tit">What is SVF?</span>
								<div class="inner">
									<p class="txt">
										Stromal Vascular Fraction (SVF) is a component of the lipoaspirate obtained through liposuction and contains multiple cell types,<br class="pc-br"> including adipose-derived stem cells (ADSCs). 
									</p>
									<p class="txt">
										Adipose derived stem cell in SVF <br class="pc-br">can be applied for aesthetic, plastic surgery, anti-aging, etc. <br class="pc-br">through its ability of differentiation, immunomodulation, self-renewal, etc.
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
									<span class="bg"><img src="<?=$site_host?>/images/content/stemcell_business_system_svf_img_02.png" alt=""></span>
								</div>
							</div>
						</div>
					</div>
					<div class="system-prp-con" data-scroll="fade-up">
						<div class="tit-box">
							<strong class="tit">PRP</strong>
							<p class="txt">Platelet Rich Plasma</p>
						</div>
						<div class="con-box">
							<div class="left-img-box"><span><img src="<?=$site_host?>/images/content/stemcell_business_system_prp_img_01.png" alt="PRP Image"></span></div>
							<div class="txt-box">
								<span class="point-tit">What is PRP?</span>
								<div class="inner">
									<p class="txt">
										Platelet Rich Plasma is concentration of plasma including various growth factors which can be used for tissue regeneration, wrinkle improvement, and anti-inflammation, etc. 
									</p>
									<p class="txt">
										Since PRP therapy applies customers’ own blood, its risk of rejection is lower than filer and other materials and also it can be applied with SVF and other aesthetic therapies.
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
									<span class="bg"><img src="<?=$site_host?>/images/content/stemcell_business_system_prp_img_02.png" alt=""></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>
	</section>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
