<?
$page_num = "03";
$sub_num = "03";
$sub_num2 = "02";
$sub_num3 = "04";
$sub_num4 = "01";
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
				<div class="system-multi-con01 system-prd-top-con"  data-scroll="fade-up">
					<strong class="system-prd-tit">STEM CELL MULTI WORKSTATION</strong>
					<div class="con-box">
						<div class="img-box"><img src="<?=$site_host?>/images/content/stemcell_business_system_multi_top_img.png" alt=""></div>
						<div class="txt-box">
							<strong class="tit">
								Centrifuge, Shaking Incubator, <br>
								Clean Bench <span> in one equipment</span> 
							</strong>
							<p class="txt">The best safe and convenient Stem Cell Isolation Solution</p>
						</div>
					</div>
				</div>
				<div class="system-multi-con02">
					<strong class="stem-business-tit small"  data-scroll="fade-up" style="display:block;">INTEGRATED WORK STATION FOR STEM CELL ISOLATION</strong>
					<p class="stem-business-txt" data-scroll="fade-up">
						Unique multi-functional work station which combines Clean Bench with Centrifuge and Shaking Incubator.<br class="pc-br">
						Its integrated design enables the operation of centrifuge and shaking incubator in clean bench which provides <br class="pc-br">
						aseptic condition by air circulation through HEPA filter. 
						<span>It minimizes the risk of contamination during stem cell isolation or some biological application. <br class="pc-br">
						Enjoy all-in-one station for the efficiency.</span>
					</p>
					<div class="img-box pc-ver" data-scroll=""><? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/stemcell/business/system_product_multi_svg.php"; ?></div>
					<div class="img-box m-ver" data-scroll=""><? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/stemcell/business/system_product_multi_svg_m.php"; ?></div>
				</div>
				<div class="system-multi-con03" data-scroll="fade-up">
					<strong class="stem-business-tit small">EASY AND EFFECTIVE STEM CELL TREATMENT <br class="pc-br"> WITH STEM CELL MULTI WORKSTATION </strong>
					<div class="con-box">
						<ul class="system-multi-list">
							<li>
								<dl>
									<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_system_multi_list_img_01.jpg" alt="Liposuction Image"></span></dt>
									<dd>
										<b class="num">01</b>
										<p class="txt">Liposuction</p>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_system_multi_list_img_02.jpg" alt="Prepare STEMPIA Kits and other materials Image"></span></dt>
									<dd>
										<b class="num">02</b>
										<p class="txt">Prepare STEMPIA Kits and other materials </p>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_system_multi_list_img_03.jpg" alt="Decompose fat tissue by using a 1st stempia kit, collagenase and shaking incubator Image"></span></dt>
									<dd>
										<b class="num">03</b>
										<p class="txt">Decomposefat tissue by <br class="pc-br">using a 1st stempia kit, collagenase and shaking incubator </p>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_system_multi_list_img_04.jpg" alt="Isolate SVF by using a centrifuge Image"></span></dt>
									<dd>
										<b class="num">04</b>
										<p class="txt">Isolate SVF by using a centrifuge </p>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_system_multi_list_img_05.jpg" alt="Wash SVF by using 2nd Stempia kit and normal saline Image"></span></dt>
									<dd>
										<b class="num">05</b>
										<p class="txt">Wash SVF by using 2nd Stempia kit and normal saline </p>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_system_multi_list_img_06.jpg" alt="Collect SVF Image"></span></dt>
									<dd>
										<b class="num">06</b>
										<p class="txt">Collect SVF</p>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_system_multi_list_img_07.jpg" alt="Activate SVF by using a Led Cell Activator Image"></span></dt>
									<dd>
										<b class="num">07</b>
										<p class="txt">Activate SVF byusing <br class="pc-br"> a Led Cell Activator </p>
									</dd>
								</dl>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</article>
	</section>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
