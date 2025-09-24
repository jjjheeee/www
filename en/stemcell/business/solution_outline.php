<?
$page_num = "03";
$sub_num = "03";
$sub_num2 = "01";
$sub_num3 = "01";
$page_section = "stemcell";
$sub_section = "business";
$sub_section2 = "solutions";
$page_info = "Stem Cell";
$sub_info = "Stem Cell Business";
$sub_info2 = "STEM CELL TOTAL SOLUTION";
$content_type="wide";
$leftMenu_tit ="From officially approved stem cell processing facility";
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
	<section class="stemcell-solution-page stemcell-business-container">
		<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/stemcell/business/left_menu.php"; ?>
		<article class="stemcell-business-content">
			<div class="area">
				<div class="stemcell-business-tit-box" data-scroll="fade-up">
					<h4 class="stem-business-tit">STEM CELL TOTAL SOLUTION</h4>
					<p class="stem-business-txt">
						N-BIOTEK provides Stem Cell Total Solution by conducting stem cell facility, equipment, <br class="pc-br">
						and technology transfer <b>in 7 month</b> for helping our partner to lead the stem cell field successfully
					</p>
				</div>
				<div class="solutions-outline-top-con">
					<div class="con-box">
						<div class="img-box">
							<div class="center-img-box" data-scroll="fade">
								<span class="center-img"><img src="<?=$site_host?>/images/content/stemcell_business_solution_outline_top_img_01.png" alt=""></span>
								<strong class="tit">STEM CELL TOTAL <br>SOULTION</strong>
								<div class="cirlce-box">
									<div class="inner"><span class="circle"></span><span class="circle"></span><span class="circle"></span><span class="circle"></span></div>
								</div>
							</div>
						</div>
						<div class="item-box">
							<ul class="item-list">
								<li data-scroll="fade-right">
									<div class="dot-box">
										<span class="dot"></span><span class="dot"></span><span class="dot"></span>
									</div>
									<dl>
										<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_solution_outline_top_img_02.png" alt=""></span></dt>
										<dd>
											<div class="inner-box">
												<strong class="tit">BIO CLEAN ROOM</strong>
												<p class="txt">Stem cell processing must <br>be conducted at Bio Clean Room <br>complying GMP guidelines. </p>
											</div>
										</dd>
									</dl>
								</li>
								<li data-scroll="fade-right" data-scroll-delay="300">
									<div class="dot-box">
										<span class="dot"></span><span class="dot"></span><span class="dot"></span>
									</div>
									<dl>
										<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_solution_outline_top_img_03.png" alt=""></span></dt>
										<dd>
											<div class="inner-box">
												<strong class="tit">LAB EQUIPMENT</strong>
												<p class="txt">Stem cell processing requires <br>more than 30 equipment. </p>
											</div>
										</dd>
									</dl>
								</li>
								<li data-scroll="fade-right" data-scroll-delay="600">
									<div class="dot-box">
										<span class="dot"></span><span class="dot"></span><span class="dot"></span>
									</div>
									<dl>
										<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_solution_outline_top_img_04.png" alt=""></span></dt>
										<dd>
											<div class="inner-box">
												<strong class="tit">TECHNOLOGY TRANSFER</strong>
												<p class="txt">Stem cell processing requires <br>standardized and safe <br>technology. </p>
											</div>
										</dd>
									</dl>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="solutions-outline-bottom-con">
					<div class="stemcell-business-tit-box" data-scroll="fade-up">
						<h4 class="stem-business-tit">EXPANSION PLAN OF <br>STEM CELL TOTAL SOLUTION </h4>
					</div>
					<div class="con-box">
						<div class="center-box" data-scroll="fade">
							<div class="center-box-inner-box">
								<div class="center-box-inner">
									<div class="center-img-inner-box">
										<div class="inner">
											<dl>
												<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_solution_bottom_center_img.png" alt=""></span></dt>
												<dd>
													<strong class="tit">
														STEM CELL <br>PROCESSING CENTER
													</strong>
													<p class="txt">
														Clean room, Equipment, <br>Technology
													</p>
												</dd>
											</dl>
										</div>
									</div>
								</div>
							</div>
						</div>
						<ul class="outline-cirlcle-item-box" data-rolling-time="1500" data-reset-width="0">
							<li class="outline-circle-item" data-scroll="fade-down" >
								<div class="inner">
									<span class="bg"><img src="<?=$site_host?>/images/content/stemcell_business_solution_outline_bottom_img_01.jpg" alt=""></span>
									<div class="txt-box">
										<strong class="tit">Stem Cell Banking</strong>
										<p class="txt">Stem cell, Fat QC</p>
									</div>
									<span class="dot-line"><img src="<?=$site_host?>/images/content/stemcell_dot_line_01.png" alt=""></span>
								</div>
							</li>
							<li class="outline-circle-item" data-scroll="fade-left">
								<div class="inner">
									<span class="bg"><img src="<?=$site_host?>/images/content/stemcell_business_solution_outline_bottom_img_02.jpg" alt=""></span>
									<div class="txt-box">
										<strong class="tit">Beauty Treatment</strong>
										<p class="txt">Skin care, wound healing</p>
									</div>
									<span class="dot-line"><img src="<?=$site_host?>/images/content/stemcell_dot_line_02.png" alt=""></span>
								</div>
							</li>
							<li class="outline-circle-item" data-scroll="fade-up">
								<div class="inner">
									<span class="bg"><img src="<?=$site_host?>/images/content/stemcell_business_solution_outline_bottom_img_03.jpg" alt=""></span>
									<div class="txt-box">
										<strong class="tit">Medical Treatment</strong>
										<p class="txt">Chronic diseases Anti-Aging</p>
									</div>
									<span class="dot-line"><img src="<?=$site_host?>/images/content/stemcell_dot_line_03.png" alt=""></span>
								</div>
							</li>
							<li class="outline-circle-item" data-scroll="fade-up">
								<div class="inner">
									<span class="bg"><img src="<?=$site_host?>/images/content/stemcell_business_solution_outline_bottom_img_04.jpg" alt=""></span>
									<div class="txt-box">
										<strong class="tit">Stem Cell Training</strong>
										<p class="txt"></p>
									</div>
									<span class="dot-line"><img src="<?=$site_host?>/images/content/stemcell_dot_line_04.png" alt=""></span>
								</div>
							</li>
							<li class="outline-circle-item" data-scroll="fade-right">
								<div class="inner">
									<span class="bg"><img src="<?=$site_host?>/images/content/stemcell_business_solution_outline_bottom_img_05.jpg" alt=""></span>
									<div class="txt-box">
										<strong class="tit">Stem Cell Research</strong>
										<p class="txt">Medicine development</p>
									</div>
									<span class="dot-line"><img src="<?=$site_host?>/images/content/stemcell_dot_line_05.png" alt=""></span>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</article>
	</section>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
