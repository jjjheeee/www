<?
$page_num = "03";
$sub_num = "03";
$sub_num2 = "02";
$sub_num3 = "04";
$sub_num4 = "02";
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
				<div class="system-kit-con01 system-prd-top-con" data-scroll="fade-up">
					<strong class="system-prd-tit">STEMPIA KIT</strong>
					<div class="con-box">
						<div class="img-box"><img src="<?=$site_host?>/images/content/stemcell_business_system_kit_top_img.png" alt=""></div>
						<div class="txt-box">
							<span class="logo"><img src="<?=$site_host?>/images/content/stemcell_business_system_kit_top_logo.png" alt="STEMPIA"></span>
							<strong class="tit"> Adipose derived Stem Cell Isolation Kit </strong>
						</div>
					</div>
				</div>
				<div class="system-kit-con02">
					<div class="tit-box" data-scroll="fade-up">
						<strong class="stem-business-tit small">SIMPLE AND EASY SVF ISOLATION WITH STEMPIA KIT</strong>
						<p class="stem-business-txt">
							STEMPIA KIT consist of two specially designed tubes for isolation and concentration of SVF derived from adipose tissue. STEMPIA offer easier and shorter process for SVF isolation using less consumables and tools as compared with typical manual SVF isolation process using pipets and conical tubes. 
							<span>Save both cost and time for SVF isolation with STEMPIA KIT.</span>
						</p>
					</div>
					<div class="con-box">
						<div class="item" data-scroll="fade-up">
							<div class="inner">
								<div class="left-box"><strong class="tit">Simple & Easy Isolation</strong></div>
								<div class="right-box"><p class="txt stem-business-txt">SVF isolation process is simplified to allow anyone to conduct SVF isolation easily.</p></div>
							</div>
						</div>
						<div class="item" data-scroll="fade-up">
							<div class="inner">
								<div class="left-box"><strong class="tit">Low Risk of Contamination</strong></div>
								<div class="right-box"><p class="txt stem-business-txt">Since fat tissue and cells are not exposed to external environment during isolation, <br class="pc-br"> The risk of contamination is minimized.</p></div>
							</div>
						</div>
						<div class="item" data-scroll="">
							<div class="inner">
								<div class="left-box"><strong class="tit">High Quality</strong></div>
								<div class="right-box"><p class="txt stem-business-txt">The quality of treatment is upgraded by the high cell viability and yield rate of STEAMPIA KIT.</p></div>
							</div>
							<div class="graph-box">
								<div class="graph-item item01">
									<div class="inner-box">
										<div class="tit-box">
											<strong class="tit">Viability Test</strong>
											<span class="unit">
												Avg. <b>90%</b> <br> Cell Viability
											</span>
										</div>
										<div class="bar-box">
											<img src="<?=$site_host?>/images/content/stemcell_business_product_kit_graph_bg_01.jpg" alt="">
											<span class="bar"><img src="<?=$site_host?>/images/content/stemcell_business_product_kit_graph_bar_01.png" alt=""></span>
										</div>
									</div>
								</div>
								<div class="graph-item item02">
									<div class="inner-box">
										<div class="tit-box">
											<strong class="tit">Cell Yield Test</strong>
											<span class="unit">
												<b>50 milion SVF extractable</b><br>
												by using single set of Stempia Kit <br>
												(Fat Tissue 40mL)
											</span>
										</div>
										<div class="bar-box">
											<img src="<?=$site_host?>/images/content/stemcell_business_product_kit_graph_bg_02.png" alt="">
											<span class="bar"><img src="<?=$site_host?>/images/content/stemcell_business_product_kit_graph_bar_02.png" alt=""></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item" data-scroll="fade-up">
							<div class="inner">
								<div class="left-box"><strong class="tit">Cost Saving</strong></div>
								<div class="right-box">
									<p class="txt stem-business-txt">Cost is greatly saved by decreasing the numbers and types of necessary consumables</p>
								</div>
								<div class="img-box">
									<ul class="img-list">
										<li>
											<dl>
												<dt><img src="<?=$site_host?>/images/content/stemcell_business_system_kit_img_01.jpg" alt="Consumables required for SVF isolation (General Manual) Image"></dt>
												<dd>Consumables required for SVF isolation (General Manual)</dd>
											</dl>
										</li>
										<li>
											<dl>
												<dt><img src="<?=$site_host?>/images/content/stemcell_business_system_kit_img_02.jpg" alt="Consumables of STEMPIA KIT Image"></dt>
												<dd>Consumables of STEMPIA KIT</dd>
											</dl>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>
	</section>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
