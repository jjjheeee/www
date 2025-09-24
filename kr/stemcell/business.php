<?
$page_num = "04";
$sub_num = "04";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "stemcell";
$sub_section = "business";
$page_info = "스템피아";
$sub_info = "스템피아";
$content_type="wide";
// $sub_info2 = "3차메뉴";	// 사용안할시 주석처리
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(Description)	필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>

<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>

	<section class="stemcell-solution-page stemcell-business-container">
		<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/stemcell/business/left_menu.php"; ?>
		<article class="stemcell-business-content">
			<div class="area">
				<div class="stemcell-business-tit-box" data-scroll="fade-up">
					<h4 class="stem-business-tit">줄기세포 토탈 솔루션</h4>
					<p class="stem-business-txt">
						엔바이오텍은 줄기세포 관련 사업을 시작하고자 하는 파트너들을 위해 줄기세포 처리에 필요한 전체 시스템을 제공해드리는 유일한 회사입니다. <br class="pc-br">
						바이오클린룸 공사, 관련 장비 설치 및 줄기세포 기술 컨설팅까지 줄기세포 사업에 필요한 모든 것들을 Turn-key로 제공해 드리는 줄기세포 토탈 솔루션을 통해<br class="pc-br">
						세계 각국의 파트너 분들이 쉽고 빠르게 줄기세포 사업을 시작할 수 있도록 <br class="m-br">도와드리고 있습니다.
					</p>
				</div>
				<div class="solutions-outline-top-con">
					<div class="con-box">
						<div class="img-box">
							<div class="center-img-box" data-scroll="fade">
								<span class="center-img"><img src="<?=$site_host?>/images/content/stemcell_business_solution_outline_top_img_01.png" alt=""></span>
								<strong class="tit">줄기세포 <br>토탈 솔루션</strong>
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
												<strong class="tit">바이오클린룸</strong>
												<p class="txt">줄기세포를 안전하게 분리, 배양하고<br> 보관할 수 있도록 GMP 가이드라인에<br> 맞게 바이오 클린룸 구축</p>
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
												<strong class="tit">생명과학장비</strong>
												<p class="txt">40년 이상의 실험장비 개발 노하우를 통한 <br>줄기세포 분리, 배양, 보관 및 세포품질에 필요한<br> 모든 생명공학 관련 장비 공급 및 설치</p>
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
												<strong class="tit">줄기세포 처리 기술 이전</strong>
												<p class="txt">표준화 되고 안전한 줄기세포 <br>대량생산 및 보관 기술 이전</p>
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
						<h4 class="stem-business-tit">줄기세포 토탈 솔루션 <br>사업 확장성</h4>
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
														세포처리시설
													</strong>
													<p class="txt">
														클린룸, 장비, 기술
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
										<strong class="tit">셀뱅킹</strong>
										<p class="txt">줄기세포보관</p>
									</div>
									<span class="dot-line"><img src="<?=$site_host?>/images/content/stemcell_dot_line_01.png" alt=""></span>
								</div>
							</li>
							<li class="outline-circle-item" data-scroll="fade-left">
								<div class="inner">
									<span class="bg"><img src="<?=$site_host?>/images/content/stemcell_business_solution_outline_bottom_img_02.jpg" alt=""></span>
									<div class="txt-box">
										<strong class="tit">피부미용</strong>
										<p class="txt">피부 케어, 상처 치료</p>
									</div>
									<span class="dot-line"><img src="<?=$site_host?>/images/content/stemcell_dot_line_02.png" alt=""></span>
								</div>
							</li>
							<li class="outline-circle-item" data-scroll="fade-up">
								<div class="inner">
									<span class="bg"><img src="<?=$site_host?>/images/content/stemcell_business_solution_outline_bottom_img_03.jpg" alt=""></span>
									<div class="txt-box">
										<strong class="tit">의학적 치료</strong>
										<p class="txt">만성 질병, 항노화</p>
									</div>
									<span class="dot-line"><img src="<?=$site_host?>/images/content/stemcell_dot_line_03.png" alt=""></span>
								</div>
							</li>
							<li class="outline-circle-item" data-scroll="fade-up">
								<div class="inner">
									<span class="bg"><img src="<?=$site_host?>/images/content/stemcell_business_solution_outline_bottom_img_04.jpg" alt=""></span>
									<div class="txt-box">
										<strong class="tit">줄기세포 교육</strong>
										<p class="txt"></p>
									</div>
									<span class="dot-line"><img src="<?=$site_host?>/images/content/stemcell_dot_line_04.png" alt=""></span>
								</div>
							</li>
							<li class="outline-circle-item" data-scroll="fade-right">
								<div class="inner">
									<span class="bg"><img src="<?=$site_host?>/images/content/stemcell_business_solution_outline_bottom_img_05.jpg" alt=""></span>
									<div class="txt-box">
										<strong class="tit">줄기세포 연구</strong>
										<p class="txt">바이오 의약품 개발</p>
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