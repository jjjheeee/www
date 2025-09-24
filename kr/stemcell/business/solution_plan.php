<?
$page_num = "03";
$sub_num = "03";
$sub_num2 = "01";
$sub_num3 = "03";
$page_section = "stemcell";
$sub_section = "business";
$sub_section2 = "solutions";
$page_info = "줄기세포";
$sub_info = "줄기세포 사업";
$sub_info2 = "줄기세포 토탈 솔루션";
$content_type="wide";
//$leftMenu_tit = "7 Month to start <br>Stem Cell Business";
$leftMenu_txt = "약 7개월 안에 줄기세포 처리에 필요한 시설, 장비, 기술을 Turn-key로 제공하여 줄기세포 관련 사업을 시작하실 수 있도록 해드립니다.";
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
						<h4 class="stem-business-tit">구축 계획</h4>
						<p class="stem-business-txt">
							<!--<b>7 Month to start <br class="m-br">Stem Cell Business</b>-->
							약 7개월 안에 줄기세포 처리에 필요한 시설, 장비, <br class="m-br">기술을 Turn-key로 제공하여 줄기세포 관련 <br class="m-br">사업을 시작하실 수 있도록 해드립니다.
						</p>
					</div>
					<div class="solutions-plan-tit-item" data-index="1">
						<h4 class="stem-business-tit">바이오 클린룸</h4>
						<p class="stem-business-txt">
							<span>세포를 안전하게 보존하기 위해서는 최상의 바이오 클린룸 환경을 유지하는 것이 필수입니다.</span>
							엔바이오텍은 세계 여러 국가에 줄기세포 처리 시설을 구축한 경험을 바탕으로 줄기세포 처리를 위한 최적의 바이오 클린룸을 제공합니다.
						</p>
					</div>
					<div class="solutions-plan-tit-item" data-index="2">
						<h4 class="stem-business-tit">줄기세포 장비</h4>
						<p class="stem-business-txt">
							<span>줄기세포 처리를 위해서는 세포 분리, 배양, 품질 관리 및 동결보관을 위한 다양한 생명과학 장비가 필요합니다.</span>
							엔바이오텍은 다양한 생명과학 장비를 직접 생산하고 공급하여 줄기세포 처리에 필요한 모든 장비를 공급하고 설치해드립니다.
						</p>
					</div>
					<div class="solutions-plan-tit-item"  data-index="3">
						<h4 class="stem-business-tit">줄기세포 기술</h4>
						<p class="stem-business-txt">
							<span>
								엔바이오텍은 자체적으로 줄기세포 연구 센터를 설립하고 줄기세포 기술을 개발하여 줄기세포 배양에 관련된 여러 가지 특허를 획득하였습니다.
							</span>
							엔바이오텍은 이러한 전문성을 바탕으로 줄기세포 사업을 시작하려는 파트너 분들에게 기술이전과 다양한 교육 프로그램을 제공하고 있습니다.
						</p>
					</div>
				</div>
			</div>
			<div class="solutions-plan-graph-box" data-scroll="fade-up">
				<div class="area">
					<div class="top-box">
						<div class="tit-col"><strong class="tit">소요기간 </strong></div>
						<div class="month-col"><strong class="month">개월</strong></div>
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
								<div class="tit-col"><strong class="tit">바이오 클린룸 <i class="xi-angle-down-min"></i></strong></div>
								<div class="month-col"><strong class="month">5</strong></div>
								<div class="num-col bar-col">
									<div class="graph-bar"><span class="bar" data-start="0"></span></div>
								</div>
							</div>
							<div class="hidden-box">
								<div class="hidden-item row">
									<div class="tit-col"><strong class="tit">시설 설계</strong></div>
									<div class="month-col"><span class="month">0.7</span></div>
									<div class="num-col bar-col">
										<div class="graph-bar"><span class="bar" data-start="0"></span></div>
									</div>
								</div>
								<div class="hidden-item row">
									<div class="tit-col"><strong class="tit">클린룸 및 기타 설비 제조</strong></div>
									<div class="month-col"><span class="month">3.3</span></div>
									<div class="num-col bar-col">
										<div class="graph-bar"><span class="bar" data-start="0.7"></span></div>
									</div>
								</div>
								<div class="hidden-item row">
									<div class="tit-col"><strong class="tit">밸리데이션, 사전 테스트</strong></div>
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
								<div class="tit-col"><strong class="tit">줄기세포 장비 <i class="xi-angle-down-min"></i></strong></div>
								<div class="month-col"><strong class="month">3</strong></div>
								<div class="num-col bar-col">
									<div class="graph-bar"><span class="bar" data-start="2"></span></div>
								</div>
							</div>
							<div class="hidden-box">
								<div class="hidden-item row">
									<div class="tit-col"><strong class="tit">제조 및 설치</strong></div>
									<div class="month-col"><span class="month">2</span></div>
									<div class="num-col bar-col">
										<div class="graph-bar"><span class="bar" data-start="2"></span></div>
									</div>
								</div>
								<div class="hidden-item row">
									<div class="tit-col"><strong class="tit">밸리데이션</strong></div>
									<div class="month-col"><span class="month">1</span></div>
									<div class="num-col bar-col">
										<div class="graph-bar"><span class="bar" data-start="4"></span></div>
									</div>
								</div>
								<div class="hidden-item row">
									<div class="tit-col"><strong class="tit">소모품 주문 및 배송</strong></div>
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
								<div class="tit-col"><strong class="tit">줄기세포 기술 <i class="xi-angle-down-min"></i></strong></div>
								<div class="month-col"><strong class="month">2</strong></div>
								<div class="num-col bar-col">
									<div class="graph-bar"><span class="bar"  data-start="5"></span></div>
								</div>
							</div>
							<div class="hidden-box">
								<div class="hidden-item row">
									<div class="tit-col"><strong class="tit">시설 운영<br> 세포 배양 기술 이전</strong></div>
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
