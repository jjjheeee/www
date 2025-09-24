<?
$page_num = "06";
$sub_num = "10";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "equipment";
$sub_section = "equipment_view";
$page_info = "실험 장비";
$sub_info = "밸리데이션";
$content_type="wide";
// $sub_info2 = "3차메뉴";	// 사용안할시 주석처리
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(Description)	필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>


<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
	<section class="validation-page">
		<h3 class="content-tit"><?=$sub_info?></h3>
		<article class="validation-con01">
			<div class="area" data-scroll="fade-up">
				<span class="top-logo"><img src="<?=$site_host?>/images/content/validation_con01_logo.png" alt="Validation Logo"></span>
				<p class="txt">엔바이오텍 (N-Biotek)은 전문기술인력을 통한 실험기기, 설비 및 시스템의 GMP 기준에 적합한<b> ‘The Best Validation Service’를 제공합니다.</b></p>
				<a href="<?=$site_url?>/customer/inquiry.php?cate=2" class="inquiry-btn"><span>밸리데이션 문의</span><i class="xi-caret-up"></i></a>
			</div>
		</article>
		<article class="validation-con02">
			<div class="area">
				<div class="img-box" data-scroll="fade-up">
					<div class="svg"><? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/equipment/validation_svg.php"; ?></div>
				</div>
				<div class="txt-box" data-scroll="fade-up">
					<div class="txt-item txt-item01">
						<div class="inner">
							<p class="txt"><span>URS</span><span>사용자 요구사항 <br>(User Requirement Specification)</span></p>
							<p class="txt"><span>DQ</span><span>설계 적격성 평가 (Design Qualification)</span></p>
							<p class="txt"><span>FS</span><span>기능 사양 (Functional Specification)</span></p>
							<p class="txt"><span>DS</span><span>설계 사양 (Design Specification)</span></p>
						</div>
					</div>
					<div class="txt-item txt-item02">
						<div class="inner">
							<p class="txt"><span>IQ</span><span>설치 적격성 평가 <br>(Installation Qualification)</span></p>
							<p class="txt"><span>OQ</span><span>운전 적격성 평가 <br> (Operational Qualification)</span></p>
							<p class="txt"><span>PQ</span><span>성능 적격성 평가  <br>(Performance Qualification)</span></p>
						</div>
					</div>
				</div>
			</div>
		</article>
		<article class="validation-con03">
			<div class="area">
				<div class="txt-box" data-scroll="fade-up">
					<p class="txt"><span>엔바이오텍</span>은 GMP 시설 실험기기의 성능 및 품질기준에 대한 적합여부를 판단하기 위해 전문 검사장비와 기술인력을 통한 IQ,OQ,PQ의 세분화된 적격성 평가를 실시합니다.  </p>
					<span class="img"><img src="<?=$site_host?>/images/content/validation_con03_top_img.jpg" alt=""></span>
				</div>
				<div class="con-box" data-scroll="fade-up">
					<strong class="tit">주요 밸리데이션 장비</strong>
					<div class="list-box">
						<ul class="validation-eq-list">
							<li>
								<div class="thumb-con">
									<img src="<?=$site_host?>/images/content/validation_con03_img_01.png" alt="">
								</div>
								<div class="over-info-con">
									<div class="over-info-box">
										<div class="inner">
											<span class="tit">VAISALA</span>
											<strong class="info">MI70</strong>
										</div>
									</div>
									<span class="more-plus-icon"><i class="xi-plus-min"></i></span>
								</div>
							</li>
							<li>
								<div class="thumb-con">
									<img src="<?=$site_host?>/images/content/validation_con03_img_02.png" alt="">
								</div>
								<div class="over-info-con">
									<div class="over-info-box">
										<div class="inner">
											<span class="tit">GRAPHTEC</span>
											<strong class="info">GL840</strong>
										</div>
									</div>
									<span class="more-plus-icon"><i class="xi-plus-min"></i></span>
								</div>
							</li>
							<li>
								<div class="thumb-con">
									<img src="<?=$site_host?>/images/content/validation_con03_img_03.png" alt="">
								</div>
								<div class="over-info-con">
									<div class="over-info-box">
										<div class="inner">
											<span class="tit">YOKOGAWA</span>
											<strong class="info">DX2030</strong>
										</div>
									</div>
									<span class="more-plus-icon"><i class="xi-plus-min"></i></span>
								</div>
							</li>
							<li>
								<div class="thumb-con">
									<img src="<?=$site_host?>/images/content/validation_con03_img_04.png" alt="">
								</div>
								<div class="over-info-con">
									<div class="over-info-box">
										<div class="inner">
											<span class="tit">MADGETECH</span>
											<strong class="info">PRTemp140</strong>
										</div>
									</div>
									<span class="more-plus-icon"><i class="xi-plus-min"></i></span>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</article>
		<article class="validation-con04">
			<div class="con-box">
				<div class="img-box">
					<span class="img" style="background-image:url('/images/content/validation_con04_img.jpg');"></span>
				</div>
				<div class="txt-box" data-scroll="fade-up">
					<strong class="tit">WHY N-BIOTEK?</strong>
					<div class="list-box">
						<div class="item">
							<b class="num">01</b>
							<p class="txt">
								사용자 요구사항(URS)과 매뉴얼을 검토하여 GMP 요구사항에 따른 전문적인 밸리데이션 서비스 제공
							</p>
						</div>
						<div class="item">
							<b class="num">02</b>
							<p class="txt">전세계적으로 인정받은 정밀계측기기 다수 보유
							<em>* 계측범위 : 온도, CO2, 습도, 압력, RPM 등</em></p>
						</div>
						<div class="item">
							<b class="num">03</b>
							<p class="txt">엔바이오텍의 밸리데이션 전문 기술인력을 통한 신속하고 신뢰도 높은 서비스<em>* 동종업계 실험기기, 설비, 시스템 밸리데이션 서비스 가능</em></p>
							<span class="img"><img src="<?=$site_host?>/images/content/validation_certificate_img.jpg" alt=""></span>
						</div>
						<div class="item">
							<b class="num">04</b>
							<p class="txt">품질 보증과 고객 맞춤형 서비스를 하나로 : ‘One-Line Service’ 통합관리시스템<em>* 실험기기,설비 제작 & 밸리데이션 & A/S</em></p>
						</div>
					</div>
				</div>
			</div>
		</article>
		<article class="validation-con05">
			<div class="area-1595">
				<div class="con-box" data-scroll="fade-up">
					<strong class="con-tit">컨텐츠</strong>
					<div class="center-img">
						<img src="<?=$site_host?>/images/content/validation_con05_center_logo.png" alt="" class="pc-ver">
						<img src="<?=$site_host?>/images/content/validation_con05_center_logo_m.png" alt="" class="m-ver">
					</div>
					<div class="list-box">
						<div class="item item01">
							<dl>
								<dt>
									<span class="icon" style="background-image:url('/images/content/validation_con05_icon_01.png');"></span>
									<strong class="tit">설치 적격성 평가(IQ)</strong>
								</dt>
								<dd>
									<p class="txt">
									<span class="dot">기계,설비 또는 시스템이 설정된 기준에 맞게 설치되었는지를 검증하고 문서화 하는 것</span>
									<span class="dot">교정 요건, 구성물품의 확인시험 등</span>
									</p>
								</dd>
							</dl>
						</div>
						<div class="item item02">
							<dl>
								<dt>
									<span class="icon" style="background-image:url('/images/content/validation_con05_icon_02.png');"></span>
									<strong class="tit">운전 적격성 평가(OQ)</strong>
								</dt>
								<dd>
									<p class="txt">
									<span class="dot">기계,설비 또는 시스템이 예측된 운전범위<br class="pc-br"> 내에서 의도한 대로 가동하는지를 검증하고<br class="pc-br"> 문서화 하는 것</span>
									<span class="dot">‘최악조건’이라고 하는 상한 및 하한의 운전기준을 포괄하는 조건에서의 시험</span>
									</p>
								</dd>
							</dl>
						</div>
						<div class="item item03">
							<dl>
								<dt>
									<span class="icon" style="background-image:url('/images/content/validation_con05_icon_03.png');"></span>
									<strong class="tit">성능 적격성 평가(PQ)</strong>
								</dt>
								<dd>
									<p class="txt">
									<span class="dot">기계,설비 또는 시스템이 설정된 품질기준에 맞게 제품을 제조할 수 있는지를 검증하고 문서화 하는 것</span>
									<span class="dot">상·하한의 운전기준을 포괄하는 조건에서 제조물질, 적합한 대체물질, 또는 모의제품을 사용하는 시험</span>
									</p>
								</dd>
							</dl>
						</div>
						<div class="item item04">
							<dl>
								<dt>
									<span class="icon" style="background-image:url('/images/content/validation_con05_icon_04.png');"></span>
									<strong class="tit">기타</strong>
								</dt>
								<dd>
									<p class="txt">
										<span class="dot">편차 분석/보고서</span>
										<span class="dot">일탈사항 분석/보고서</span>
										<span class="dot">운전/유지관리 매뉴얼</span>
										<span class="dot">계측장비 검·교정 인증서</span>
										<span class="dot">기계,설비 또는 시스템 검·교정 인증서</span>
									</p>
								</dd>
							</dl>
						</div>
					</div>
				</div>
			</div>
		</article>
		<article class="validation-con06">
			<div class="area">
				<div class="con-box" data-scroll="fade-up">
					<div class="item">
						<dl>
							<dt><span><img src="<?=$site_host?>/images/content/validation_con06_img_01.jpg" alt=""></span></dt>
							<dd>
								<span class="num">01</span>
								<p class="txt">사용자요구사항 및 IQ, OQ, PQ 요청</p>
							</dd>
						</dl>
					</div>
					<div class="item">
						<dl>
							<dt><span><img src="<?=$site_host?>/images/content/validation_con06_img_02.jpg" alt=""></span></dt>
							<dd>
								<span class="num">02</span>
								<p class="txt">IQ, OQ, PQ 프로토콜</p>
							</dd>
						</dl>
					</div>
					<div class="item">
						<dl>
							<dt><span><img src="<?=$site_host?>/images/content/validation_con06_img_03.jpg" alt=""></span></dt>
							<dd>
								<span class="num">03</span>
								<p class="txt">
									적격성 평가 진행<br>
									<span>IQ · OQ : 평균 2~3일 <br>IQ · OQ · PQ : 평균 4~5일</span>
								</p>
							</dd>
						</dl>
					</div>
					<div class="item">
						<dl>
							<dt><span><img src="<?=$site_host?>/images/content/validation_con06_img_04.jpg" alt=""></span></dt>
							<dd>
								<span class="num">04</span>
								<p class="txt">IQ, OQ, PQ 보고서 </p>
							</dd>
						</dl>
					</div>
				</div>
			</div>
		</article>
		<article class="validation-con07">
			<div class="area" data-scroll="fade-up">
				<strong class="tit">갤러리</strong>
				<div class="list-box">
					<ul class="img-list" id="equipmentGallery">
						<li class="grid-sizer"></li><!-- 고정 -->
						<?
						$rs = $db->select("cs_bbs_data","where code='v_gallery' order by idx desc limit 6");
						while($row = mysqli_fetch_object($rs)){
						?>
						<li class="grid-item"><span class="img"><img src="/data/bbsData/<?=$row->sum_file?>" alt=""></span></li>
						<? } ?>
						<!-- <li class="grid-item"><span class="img"><img src="<?=$site_host?>/images/content/validation_con07_img_02.jpg" alt=""></span></li>
						<li class="grid-item"><span class="img"><img src="<?=$site_host?>/images/content/validation_con07_img_03.jpg" alt=""></span></li>
						<li class="grid-item"><span class="img"><img src="<?=$site_host?>/images/content/validation_con07_img_01.jpg" alt=""></span></li> -->
					</ul>
				</div>
				<div class="cm-list-more-btn-box" id="button_more">
					<a href="<?=$site_url?>/equipment/ajax_gallery_list.php" class="cm-list-more-btn ajax-more-list-btn">
						<div class="cm-list-more-btn-inner">
							<div class="cm-list-more-btn-line">
								<svg viewBox="0 0 100 100"><circle cx="50" cy="50" r="49"></circle></svg>
								<svg viewBox="0 0 100 100"><circle cx="50" cy="50" r="49"></circle></svg>
							</div>
							<span class="cm-list-more-btn-icon"><i class="xi-angle-down"></i></span>
						</div>
					</a>
				</div>
				<a href="<?=$site_url?>/customer/inquiry.php?cate=2" class="inquiry-btn"><span>밸리데이션 문의</span><i class="xi-caret-up"></i></a>
			</div>
		</article>
	</section>

<form method="post" name="form">
<input type="hidden" name="listgu" value="0">
</form>

	<script>
		$(document).ready(function  () {
			/* *********************** 제품 리스트  ************************ */
			var $projectContainer = $('.validation-con07 .img-list').isotope({
				// options
				itemSelector: '.grid-item',
				// percentPosition: true,
				masonry: {
					columnWidth: '.grid-item',
					// horizontalOrder: true
				},
				/*getSortData: {
					scale: '.sort-scale',
					floor: '.sort-floor',
					year: '.sort-year',
					d_year: '.sort-design-year',
					name: '.sort-name'
				},*/
				stagger: 20,
				
				// horizontalOrder: true
			});
			$projectContainer.imagesLoaded().progress( function() {
				$projectContainer.isotope('layout');
			});
		
			function getGallreyList (strUrl) {
				
				if(form.listgu.value==0){
					form.listgu.value = 6;
				} else {
					st = form.listgu.value;
					form.listgu.value = eval(st) + 3;
				}

				listgu = form.listgu.value;

				var postData = 
				{ 
					"listgu": listgu
				};
				
				
				$container = $('#equipmentGallery');
				$.ajax({
					type: "POST",
					url: strUrl,
					data: postData,
					success: function(resultText){
						var $data = $(resultText);
						setTimeout(function  () {
							$projectContainer.isotope( 'insert' ,$data);
						},50);
					},
					error: function() {
						if ( $("html").attr("lang") == "ko" ) {
							alert("호출에 실패하였습니다.");
						}else {
							alert("Please try again.");
						}
					},
				});
			} 
			
			$(document).on("click",".ajax-more-list-btn",function  () {
				getGallreyList($(this).attr("href"));
				return false;
			});
		});
	</script>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
