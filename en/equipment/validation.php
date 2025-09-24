<?
$page_num = "02";
$sub_num = "10";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "equipment";
$sub_section = "equipment_view";
$page_info = "Lab Equipment";
$sub_info = "Validation";
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
				<p class="txt"> To maintain the best performance of the equipment, <b>N-BIOTEK provide Validation Service by professional quality manager</b></p>
				<a href="<?=$site_url?>/customer/inquiry.php?cate=2" class="inquiry-btn"><span>Validation Inquiry</span><i class="xi-caret-up"></i></a>
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
							<p class="txt"><span>URS</span>User Requirement Specification</p>
							<p class="txt"><span>DQ</span>Design Qualification</p>
							<p class="txt"><span>FS</span>Functional Specification</p>
							<p class="txt"><span>DS</span>Design Specification</p>
						</div>
					</div>
					<div class="txt-item txt-item02">
						<div class="inner">
							<p class="txt"><span>IQ</span>Installation Qualification</p>
							<p class="txt"><span>OQ</span>Operational Qualification</p>
							<p class="txt"><span>PQ</span>Performance Qualification</p>
						</div>
					</div>
				</div>
			</div>
		</article>
		<article class="validation-con03">
			<div class="area">
				<div class="txt-box" data-scroll="fade-up">
					<p class="txt"><span>N-BIOTEK</span> provide reports of IQ, OQ, PQ using professional inspection equipment to check suitability of Safety Standards for GMP Facilities. </p>
					<span class="img"><img src="<?=$site_host?>/images/content/validation_con03_top_img.jpg" alt=""></span>
				</div>
				<div class="con-box" data-scroll="fade-up">
					<strong class="tit">MAIN VALIDATION EQUIPMENT</strong>
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
								Review User Requirements Specification (URS) and Manual to provide professional validation services based on GMP requirements.
							</p>
						</div>
						<div class="item">
							<b class="num">02</b>
							<p class="txt">Various precision measuring instruments in possession.
							<em>* Measuring section: Temperature, CO2, Humidity, Pressure,  RPM etc.</em></p>
						</div>
						<div class="item">
							<b class="num">03</b>
							<p class="txt">Fast and trustworthy service through N-BIOTEK’s validation specialist.<em>* Validation service available for other brand’s equipment. </em></p>
							<span class="img"><img src="<?=$site_host?>/images/content/validation_certificate_img.jpg" alt=""></span>
						</div>
						<div class="item">
							<b class="num">04</b>
							<p class="txt">Provide “One-line service” for quality assurance and customer friendly management. <em>* Equipment + Validation + After-sales service</em></p>
						</div>
					</div>
				</div>
			</div>
		</article>
		<article class="validation-con05">
			<div class="area-1595">
				<div class="con-box" data-scroll="fade-up">
					<strong class="con-tit">SERVICE CONTENTS</strong>
					<div class="center-img">
						<img src="<?=$site_host?>/images/content/validation_con05_center_logo.png" alt="" class="pc-ver">
						<img src="<?=$site_host?>/images/content/validation_con05_center_logo_m.png" alt="" class="m-ver">
					</div>
					<div class="list-box">
						<div class="item item01">
							<dl>
								<dt>
									<span class="icon" style="background-image:url('/images/content/validation_con05_icon_01.png');"></span>
									<strong class="tit">Installation <br>Qualification (IQ)</strong>
								</dt>
								<dd>
									<p class="txt">On-site verification and documentation for proper standardized installation of equipment, facility, or system. </p>
								</dd>
							</dl>
						</div>
						<div class="item item02">
							<dl>
								<dt>
									<span class="icon" style="background-image:url('/images/content/validation_con05_icon_02.png');"></span>
									<strong class="tit">Operational <br>Qualification (OQ) </strong>
								</dt>
								<dd>
									<p class="txt">Verification and documentation for proper equipment, facility, or system’s operation intended within predicted range. </p>
								</dd>
							</dl>
						</div>
						<div class="item item03">
							<dl>
								<dt>
									<span class="icon" style="background-image:url('/images/content/validation_con05_icon_03.png');"></span>
									<strong class="tit">Performance <br>Qualification (PQ) </strong>
								</dt>
								<dd>
									<p class="txt">Verification and documentation for manufacture according to the set quality standards. </p>
								</dd>
							</dl>
						</div>
						<div class="item item04">
							<dl>
								<dt>
									<span class="icon" style="background-image:url('/images/content/validation_con05_icon_04.png');"></span>
									<strong class="tit">Others</strong>
								</dt>
								<dd>
									<p class="txt">
										<span class="dot">Deviation analysis/report</span>
										<span class="dot">Operation/Maintenance manual</span>
										<span class="dot">Certificates of calibration for inspection equipment</span>
										<span class="dot">Certificates of calibration for equipment</span>
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
								<p class="txt">Determination of qualification assessment targets and request validation </p>
							</dd>
						</dl>
					</div>
					<div class="item">
						<dl>
							<dt><span><img src="<?=$site_host?>/images/content/validation_con06_img_02.jpg" alt=""></span></dt>
							<dd>
								<span class="num">02</span>
								<p class="txt">Determination of qualification assessment targets and request validation</p>
							</dd>
						</dl>
					</div>
					<div class="item">
						<dl>
							<dt><span><img src="<?=$site_host?>/images/content/validation_con06_img_03.jpg" alt=""></span></dt>
							<dd>
								<span class="num">03</span>
								<p class="txt">
									Start qualification assessment <br>
									<span>IQ · OQ : Avg. 2~3 days <br>IQ · OQ · PQ : Avg. 4~5 days</span>
								</p>
							</dd>
						</dl>
					</div>
					<div class="item">
						<dl>
							<dt><span><img src="<?=$site_host?>/images/content/validation_con06_img_04.jpg" alt=""></span></dt>
							<dd>
								<span class="num">04</span>
								<p class="txt">Approve validation report</p>
							</dd>
						</dl>
					</div>
				</div>
			</div>
		</article>
		<article class="validation-con07">
			<div class="area" data-scroll="fade-up">
				<strong class="tit">Gallery</strong>
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
				<a href="<?=$site_url?>/customer/inquiry.php?cate=2" class="inquiry-btn"><span>Validation Inquiry</span><i class="xi-caret-up"></i></a>
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
