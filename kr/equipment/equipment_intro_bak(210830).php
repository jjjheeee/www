<?
$page_num = "04";
$sub_num = "01";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "equipment";
$sub_section = "equipment_intro";
$page_info = "Lab Equipment";
$sub_info = "CO2 Incubator";
$intro_page = "true";
$content_type="wide";
// $sub_info2 = "3차메뉴";	// 사용안할시 주석처리
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(Description)	필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>

<script>
$(document).ready(function  () {
	function accordion_width () {
		$(".accordion-list").each(function  () {
			$accordionList = $(this);
			$accordionItem = $(this).find(".accordion-item");		// 아코디언 각각의 class
			itemTotalWidth = $accordionList.outerWidth();		// 아코디언 전체 width
			itemBoxLength = $accordionItem.length;		// 아코디언 갯수
			mobileWidth = 1024;
			// itemWidth = 158; 		// 아코디언 각각 width
			if ( $(window).width() > 1367 ) {
				itemWidth = 177
			}else {
				itemWidth = 140
			}
			
			activeWidth =  itemTotalWidth - itemWidth;
			//activeWidth =  itemTotalWidth - itemWidth;
			//activeWidth =  itemTotalWidth - (itemWidth * (itemBoxLength-1));
			
			// console.log("Total width : " + itemTotalWidth + "px, None Active width :  " + itemWidth + "px, Active width :  " + activeWidth + "px");
			
			if ( $(window).width() > mobileWidth - 17 ) {
				$accordionItem.each(function  () {
					$accordionItem.not(".active").css("width", itemWidth );
					$accordionList.find(".accordion-item.active").css("width", activeWidth );
				});
			}else {
				$accordionItem.removeAttr("style");
			}
		});
	}
	accordion_width();
	$(window).on('resize', accordion_width);
	
	// 1024 PC버전 마우스클릭시
	$accordionItem.on("click",function  () {	
		$(".accordion-list-box").addClass("open");
		if ( $(window).width() > mobileWidth && !$(this).is(".active")) {
			$(this).addClass("active").stop().animate({"width": activeWidth },300,"swing");
			$accordionItem.not($(this)).removeClass("active").stop().animate({"width":itemWidth},300,"swing"); 
			// $accordionItem.not($(this)).removeClass("active");
			// TweenMax.to($accordionItem.not($(this)), 0.5, {width:itemWidth, ease:Power2.easeOut })
		}
	});

	// 1024이하 모바일버전 클릭시
	$accordionItem.on("click",function  () {
		if ( $(window).width() <  mobileWidth+1 ) {
			$(".accordion-list .accordion-item").not($(this)).removeClass("active");
			$(this).addClass("active");
		}
	});
});
</script>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>

	<section class="equipment-list-page area-1593">
		<div class="accordion-list-box">
				<ul class="accordion-list clearfix">
					<li class="accordion-item accordion-item01">
						<div class="accordion-inner" style="background:url(/images/content/intro_bg_01.jpg) no-repeat 50% 50%;">
							<article class="accordion-m-img" style="background:url(/images/content/intro_bg_01.jpg) 50% 50% no-repeat;"></article>
							<h4 class="accordion-tit"><b>CO2 Incubator</b></h4>
							<i class="accordion-arrow xi-angle-right"></i>
							<div class="accordion-info-box">
								<dl>
									<dt>CO2 Incubator</dt>
									<dd>
										<p class="accordion-info-txt">Incubators of various dimensions and capacities that offer precise modification of 
										CO2 supply levels and provide contamination reduction to promote cell culture growth. </p>
										<a href="" class="more-btn">View more</a>
									</dd>
								</dl>
							</div>
						</div>
					</li>
					<li class="accordion-item accordion-item02">
						<div class="accordion-inner" style="background:url(/images/content/intro_bg_02.jpg) no-repeat 50% 50%;">
							<article class="accordion-m-img" style="background:url(/images/content/intro_bg_02.jpg) 50% 50% no-repeat;"></article>
							<h4 class="accordion-tit"><b>Shaking Incubator</b></h4>
							<i class="accordion-arrow xi-angle-right"></i>
							<div class="accordion-info-box">
								<dl>
									<dt>Shaking Incubator</dt>
									<dd>
										<p class="accordion-info-txt">Powerful shaker and large work space for various vessel platforms.<br>Stable shaking and precise temperature control.</p>
										<a href="" class="more-btn">View more</a>
									</dd>
								</dl>
							</div>
						</div>
					</li>
					<li class="accordion-item accordion-item03">
						<div class="accordion-inner" style="background:url(/images/content/intro_bg_03.jpg) no-repeat 50% 50%;">
							<article class="accordion-m-img" style="background:url(/images/content/intro_bg_03.jpg) 50% 50% no-repeat;"></article>
							<h4 class="accordion-tit"><b>Shaker & Roller Apparatus</b></h4>
							<i class="accordion-arrow xi-angle-right"></i>
							<div class="accordion-info-box">
								<dl>
									<dt>Shaker & Roller Apparatus</dt>
									<dd>
										<p class="accordion-info-txt">Beltless magnetic drive benchtop shakers with various sizes and options such as <br class="pc-br">
										orbital, reciprocating, combination shaking motions and a remote control. Also, <br class="pc-br">
										easy installation available for various vessels holder platforms.</p>
										<a href="" class="more-btn">View more</a>
									</dd>
								</dl>
							</div>
						</div>
					</li>
					<li class="accordion-item accordion-item04">
						<div class="accordion-inner" style="background:url(/images/content/intro_bg_04.jpg) no-repeat 50% 50%;">
							<article class="accordion-m-img" style="background:url(/images/content/intro_bg_04.jpg) 50% 50% no-repeat;"></article>
							<h4 class="accordion-tit"><b>Water Bath & Thermal Block</b></h4>
							<i class="accordion-arrow xi-angle-right"></i>
							<div class="accordion-info-box">
								<dl>
									<dt>Water Bath & Thermal Block</dt>
									<dd>
										<p class="accordion-info-txt">Provides excellent temperature uniformity for specific applications and offer unique <br class="pc-br">
										features such as a seamless-stainless steel interior chamber which make them <br class="pc-br">
										resistant to corrosion and special built-in spring rack (*shaking water bath) for various <br class="pc-br">
										apparatus. </p>
										<a href="" class="more-btn">View more</a>
									</dd>
								</dl>
							</div>
						</div>
					</li>
					<li class="accordion-item accordion-item05">
						<div class="accordion-inner" style="background:url(/images/content/intro_bg_05.jpg) no-repeat 50% 50%;">
							<article class="accordion-m-img" style="background:url(/images/content/intro_bg_05.jpg) 50% 50% no-repeat;"></article>
							<h4 class="accordion-tit"><b>Concentrator</b></h4>
							<i class="accordion-arrow xi-angle-right"></i>
							<div class="accordion-info-box">
								<dl>
									<dt>Concentrator</dt>
									<dd>
										<p class="accordion-info-txt">Combination of centrifugal force, vacuum and <br class="pc-br">heat to speed evaporation and concentration.</p>
										<a href="" class="more-btn">View more</a>
									</dd>
								</dl>
							</div>
						</div>
					</li>
					<li class="accordion-item accordion-item06">
						<div class="accordion-inner" style="background:url(/images/content/intro_bg_06.jpg) no-repeat 50% 50%;">
							<article class="accordion-m-img" style="background:url(/images/content/intro_bg_06.jpg) 50% 50% no-repeat;"></article>
							<h4 class="accordion-tit"><b>Oven & Incubator</b></h4>
							<i class="accordion-arrow xi-angle-right"></i>
							<div class="accordion-info-box">
								<dl>
									<dt>Oven & Incubator</dt>
									<dd>
										<p class="accordion-info-txt">Drying oven, mainly used for drying and sterilizing sample with simple operation. <br>
										and general incubator is useful to incubate or germinate for all kind of microbes, <br class="pc-br">
										cells, bacteria and germs. Microprocessor controller set for temperature accuracy <br class="pc-br">
										and reproducibility.</p>
										<a href="" class="more-btn">View more</a>
									</dd>
								</dl>
							</div>
						</div>
					</li>
					<li class="accordion-item accordion-item07">
						<div class="accordion-inner" style="background:url(/images/content/intro_bg_07.jpg) no-repeat 50% 50%;">
							<article class="accordion-m-img" style="background:url(/images/content/intro_bg_07.jpg) 50% 50% no-repeat;"></article>
							<h4 class="accordion-tit"><b>Autoclave</b></h4>
							<i class="accordion-arrow xi-angle-right"></i>
							<div class="accordion-info-box">
								<dl>
									<dt>Autoclave</dt>
									<dd>
										<p class="accordion-info-txt">High pressure autoclave, suitable for general laboratory. Provides the cost-effective <br class="pc-br">sterilization system with the highest work efficiency and safety features.</p>
										<a href="" class="more-btn">View more</a>
									</dd>
								</dl>
							</div>
						</div>
					</li>
					<li class="accordion-item accordion-item08">
						<div class="accordion-inner" style="background:url(/images/content/intro_bg_08.jpg) no-repeat 50% 50%;">
							<article class="accordion-m-img" style="background:url(/images/content/intro_bg_08.jpg) 50% 50% no-repeat;"></article>
							<h4 class="accordion-tit"><b>Clean Bench</b></h4>
							<i class="accordion-arrow xi-angle-right"></i>
							<div class="accordion-info-box">
								<dl>
									<dt>Clean Bench</dt>
									<dd>
										<p class="accordion-info-txt">Providing personnel, product, and environmental <br class="pc-br">protection by HEPA filtered air circulation.</p>
										<a href="" class="more-btn">View more</a>
									</dd>
								</dl>
							</div>
						</div>
					</li>
					<li class="accordion-item accordion-item09">
						<div class="accordion-inner" style="background:url(/images/content/intro_bg_09.jpg) no-repeat 50% 50%;">
							<article class="accordion-m-img" style="background:url(/images/content/intro_bg_09.jpg) 50% 50% no-repeat;"></article>
							<h4 class="accordion-tit"><b>Stem Cell Isolation Package</b></h4>
							<i class="accordion-arrow xi-angle-right"></i>
							<div class="accordion-info-box">
								<dl>
									<dt>Stem Cell Isolation Package</dt>
									<dd>
										<p class="accordion-info-txt">Supplying stem cell related equipment and kit for isolation and application.</p>
										<a href="" class="more-btn">View more</a>
									</dd>
								</dl>
							</div>
						</div>
					</li>
				</ul>
			</div>


	</section>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
