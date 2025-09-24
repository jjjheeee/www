<?
$page_num = "03";
$sub_num = "03";
$sub_num2 = "01";
$sub_num3 = "03";
$page_section = "stemcell";
$sub_section = "business";
$sub_section2 = "solutions";
$page_info = "Stem Cell";
$sub_info = "Stem Cell Business";
$sub_info2 = "STEM CELL TOTAL SOLUTION";
$content_type="wide";
$leftMenu_tit = "7 Month to start <br>Stem Cell Business";
$leftMenu_txt = "Total 7 month procedure for conducting stem cell facility, equipment, and technology transfer.";
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
		<article class="stemcell-business-content full-content solutions-plan-content">
			<span class="bg" data-bg-url="/images/content/stemcell_business_solution_plan_bg_0"></span>
			<div class="solutions-plan-tit-box" data-scroll="fade-up">
				<div class="area">
					<div class="solutions-plan-tit-item default">
						<h4 class="stem-business-tit">CONSTRUCTION PLAN</h4>
						<p class="stem-business-txt">
							<b>7 Month to start Stem Cell Business</b>
							Total 7 month procedure for conducting stem cell facility, equipment, and technology transfer.
						</p>
					</div>
					<div class="solutions-plan-tit-item" data-index="1">
						<h4 class="stem-business-tit">BIO CLEAN ROOM</h4>
						<p class="stem-business-txt">
							<span>To keep cells safe all the time, it is very necessary maintaining the best bio clean room environment.</span>
							Based on its experience of constructing stem cell processing facility in various countries, N-BIOTEK provides <br class="pc-br">
							an optimized bio clean room for stem cell processing.
						</p>
					</div>
					<div class="solutions-plan-tit-item" data-index="2">
						<h4 class="stem-business-tit">STEM CELL EQUIPMENT</h4>
						<p class="stem-business-txt">
							<span>Stem cell processing requires many kinds of life science equipment for cell isolation, culture, quality control and cryopreservation.</span>
							Since N-BIOTEK manufactures and provides various life science equipment by itself, <br class="pc-br">
							It supplies and installs all the necessary equipment for stem cell processing.
						</p>
					</div>
					<div class="solutions-plan-tit-item"  data-index="3">
						<h4 class="stem-business-tit">STEM CELL TECHNOLOGY</h4>
						<p class="stem-business-txt">
							<span>
								Since N-BIOTEK established its own stem cell research center and develops stem cell <br class="pc-br">
								technology, it has acquired various patents related to stem cell processing.
							</span>
							N-BIOTEK shares this patented technology with Its stem cell total solution partners <br class="pc-br">
							through its special technology transfer process and training programs.
						</p>
					</div>
				</div>
			</div>
			<div class="solutions-plan-graph-box" data-scroll="fade-up">
				<div class="area">
					<div class="top-box">
						<div class="tit-col"><strong class="tit">Equipment Time Table</strong></div>
						<div class="month-col"><strong class="month">Month</strong></div>
						<div class="num-col">
							<span class="num">0</span>
							<span class="num">1</span>
							<span class="num">2</span>
							<span class="num">3</span>
							<span class="num">4</span>
							<span class="num">5</span>
							<span class="num">6</span>
							<span class="num">7</span>
						</div>
					</div>
					<div class="solutions-plan-item" data-index="1">
						<div class="inner-box">
							<div class="first-box row">
								<div class="tit-col"><strong class="tit">BIO CLEAN ROOM <i class="xi-angle-down-min"></i></strong></div>
								<div class="month-col"><strong class="month">5</strong></div>
								<div class="num-col bar-col">
									<div class="graph-bar"><span class="bar" data-start="0"></span></div>
								</div>
							</div>
							<div class="hidden-box">
								<div class="hidden-item row">
									<div class="tit-col"><strong class="tit">Designing Facility</strong></div>
									<div class="month-col"><span class="month">0.7</span></div>
									<div class="num-col bar-col">
										<div class="graph-bar"><span class="bar" data-start="0"></span></div>
									</div>
								</div>
								<div class="hidden-item row">
									<div class="tit-col"><strong class="tit">Building Clean Room & Others</strong></div>
									<div class="month-col"><span class="month">3.3</span></div>
									<div class="num-col bar-col">
										<div class="graph-bar"><span class="bar" data-start="0.7"></span></div>
									</div>
								</div>
								<div class="hidden-item row">
									<div class="tit-col"><strong class="tit">Validation, Pre-test</strong></div>
									<div class="month-col"><span class="month">1</span></div>
									<div class="num-col bar-col">
										<div class="graph-bar"><span class="bar" data-start="4"></span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="solutions-plan-item" data-index="2">
						<div class="inner-box">
							<div class="first-box row">
								<div class="tit-col"><strong class="tit">STEM CELL EQUIPMENT <i class="xi-angle-down-min"></i></strong></div>
								<div class="month-col"><strong class="month">3</strong></div>
								<div class="num-col bar-col">
									<div class="graph-bar"><span class="bar" data-start="2"></span></div>
								</div>
							</div>
							<div class="hidden-box">
								<div class="hidden-item row">
									<div class="tit-col"><strong class="tit">Manufacturing & Installation</strong></div>
									<div class="month-col"><span class="month">2</span></div>
									<div class="num-col bar-col">
										<div class="graph-bar"><span class="bar" data-start="2"></span></div>
									</div>
								</div>
								<div class="hidden-item row">
									<div class="tit-col"><strong class="tit">Validation</strong></div>
									<div class="month-col"><span class="month">1</span></div>
									<div class="num-col bar-col">
										<div class="graph-bar"><span class="bar" data-start="4"></span></div>
									</div>
								</div>
								<div class="hidden-item row">
									<div class="tit-col"><strong class="tit">Consumable Order & Delivery</strong></div>
									<div class="month-col"><span class="month">1</span></div>
									<div class="num-col bar-col">
										<div class="graph-bar"><span class="bar" data-start="4"></span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="solutions-plan-item" data-index="3">
						<div class="inner-box">
							<div class="first-box row">
								<div class="tit-col"><strong class="tit">STEM CELL TECHNOLOGY <i class="xi-angle-down-min"></i></strong></div>
								<div class="month-col"><strong class="month">2</strong></div>
								<div class="num-col bar-col">
									<div class="graph-bar"><span class="bar"  data-start="5"></span></div>
								</div>
							</div>
							<div class="hidden-box">
								<div class="hidden-item row">
									<div class="tit-col"><strong class="tit">Facility Operation <br> Cell Culture Technology Transfer</strong></div>
									<div class="month-col"><span class="month">2</span></div>
									<div class="num-col bar-col">
										<div class="graph-bar"><span class="bar" data-start="5"></span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>
	</section>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
