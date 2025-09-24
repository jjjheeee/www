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
	

});
</script>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>

	<section class="equipment-list-page area-1595">
		<div class="accordion-list-box scroll-object" data-scroll="fade-up">
			<ul class="accordion-list clearfix kwicks-accordion">
				<li class="accordion-item accordion-item01">
					<div class="accordion-inner" style="background:url(/images/content/intro_bg_01.jpg) no-repeat 50% 50%;">
						<article class="accordion-m-img" style="background:url(/images/content/intro_bg_01.jpg) 50% 50% no-repeat;"></article>
						<h4 class="accordion-tit"><b>CO<sub>2</sub> Incubator</b></h4>
						<i class="accordion-arrow xi-angle-right"></i>
						<a href="<?=$site_url?>/equipment/equipment_list.php?part_idx=1" class="accordion-info-box">
							<dl>
								<dt>CO<sub>2</sub> Incubator</dt>
								<dd>
									<p class="accordion-info-txt">Incubators of various dimensions and capacities that offer precise modification of 
									CO<sub>2</sub> supply levels and provide contamination reduction to promote cell culture growth. </p>
									<span class="more-btn"><em class="off">View more</em><em class="on">View more</em></span>
								</dd>
							</dl>
						</a>
					</div>
				</li>
				<li class="accordion-item accordion-item02">
					<div class="accordion-inner" style="background:url(/images/content/intro_bg_02.jpg) no-repeat 50% 50%;">
						<article class="accordion-m-img" style="background:url(/images/content/intro_bg_02.jpg) 50% 50% no-repeat;"></article>
						<h4 class="accordion-tit"><b>Shaking Incubator</b></h4>
						<i class="accordion-arrow xi-angle-right"></i>
						<a href="<?=$site_url?>/equipment/equipment_list.php?part_idx=2" class="accordion-info-box">
							<dl>
								<dt>Shaking Incubator</dt>
								<dd>
									<p class="accordion-info-txt">Powerful shaker and large work space for various vessel platforms.<br>Stable shaking and precise temperature control.</p>
									<span class="more-btn"><em class="off">View more</em><em class="on">View more</em></span>
								</dd>
							</dl>
						</a>
					</div>
				</li>
				<li class="accordion-item accordion-item03">
					<div class="accordion-inner" style="background:url(/images/content/intro_bg_03.jpg) no-repeat 50% 50%;">
						<article class="accordion-m-img" style="background:url(/images/content/intro_bg_03.jpg) 50% 50% no-repeat;"></article>
						<h4 class="accordion-tit"><b>Shaker & Roller Apparatus</b></h4>
						<i class="accordion-arrow xi-angle-right"></i>
						<a href="<?=$site_url?>/equipment/equipment_list.php?part_idx=3" class="accordion-info-box">
							<dl>
								<dt>Shaker & Roller Apparatus</dt>
								<dd>
									<p class="accordion-info-txt">Beltless magnetic drive benchtop shakers with various sizes and options such as 
									orbital, reciprocating, combination shaking motions and a remote control. Also, 
									easy installation available for various vessels holder platforms.</p>
									<span class="more-btn"><em class="off">View more</em><em class="on">View more</em></span>
								</dd>
							</dl>
						</a>
					</div>
				</li>
				<li class="accordion-item accordion-item04">
					<div class="accordion-inner" style="background:url(/images/content/intro_bg_04.jpg) no-repeat 50% 50%;">
						<article class="accordion-m-img" style="background:url(/images/content/intro_bg_04.jpg) 50% 50% no-repeat;"></article>
						<h4 class="accordion-tit"><b>Water Bath & Thermal Block</b></h4>
						<i class="accordion-arrow xi-angle-right"></i>
						<a href="<?=$site_url?>/equipment/equipment_list.php?part_idx=4" class="accordion-info-box">
							<dl>
								<dt>Water Bath & Thermal Block</dt>
								<dd>
									<p class="accordion-info-txt">Provides excellent temperature uniformity for specific applications and offer unique 
									features such as a seamless-stainless steel interior chamber which make them 
									resistant to corrosion and special built-in spring rack (*shaking water bath) for various 
									apparatus. </p>
									<span class="more-btn"><em class="off">View more</em><em class="on">View more</em></span>
								</dd>
							</dl>
						</a>
					</div>
				</li>
				<li class="accordion-item accordion-item05">
					<div class="accordion-inner" style="background:url(/images/content/intro_bg_05.jpg) no-repeat 50% 50%;">
						<article class="accordion-m-img" style="background:url(/images/content/intro_bg_05.jpg) 50% 50% no-repeat;"></article>
						<h4 class="accordion-tit"><b>Concentrator</b></h4>
						<i class="accordion-arrow xi-angle-right"></i>
						<a href="<?=$site_url?>/equipment/equipment_list.php?part_idx=5" class="accordion-info-box">
							<dl>
								<dt>Concentrator</dt>
								<dd>
									<p class="accordion-info-txt">Combination of centrifugal force, vacuum and <br class="pc-br">heat to speed evaporation and concentration.</p>
									<span class="more-btn"><em class="off">View more</em><em class="on">View more</em></span>
								</dd>
							</dl>
						</a>
					</div>
				</li>
				<li class="accordion-item accordion-item06">
					<div class="accordion-inner" style="background:url(/images/content/intro_bg_06.jpg) no-repeat 50% 50%;">
						<article class="accordion-m-img" style="background:url(/images/content/intro_bg_06.jpg) 50% 50% no-repeat;"></article>
						<h4 class="accordion-tit"><b>Oven & Incubator</b></h4>
						<i class="accordion-arrow xi-angle-right"></i>
						<a href="<?=$site_url?>/equipment/equipment_list.php?part_idx=6"  class="accordion-info-box">
							<dl>
								<dt>Oven & Incubator</dt>
								<dd>
									<p class="accordion-info-txt">Drying oven, mainly used for drying and sterilizing sample with simple operation. 
									and general incubator is useful to incubate or germinate for all kind of microbes, 
									cells, bacteria and germs. Microprocessor controller set for temperature accuracy 
									and reproducibility.</p>
									<span class="more-btn"><em class="off">View more</em><em class="on">View more</em></span>
								</dd>
							</dl>
						</a>
					</div>
				</li>
				<li class="accordion-item accordion-item07">
					<div class="accordion-inner" style="background:url(/images/content/intro_bg_07.jpg) no-repeat 50% 50%;">
						<article class="accordion-m-img" style="background:url(/images/content/intro_bg_07.jpg) 50% 50% no-repeat;"></article>
						<h4 class="accordion-tit"><b>Autoclave</b></h4>
						<i class="accordion-arrow xi-angle-right"></i>
						<a href="<?=$site_url?>/equipment/equipment_list.php?part_idx=7"  class="accordion-info-box">
							<dl>
								<dt>Autoclave</dt>
								<dd>
									<p class="accordion-info-txt">High pressure autoclave, suitable for general laboratory. Provides the cost-effective sterilization system with the highest work efficiency and safety features.</p>
									<span class="more-btn"><em class="off">View more</em><em class="on">View more</em></span>
								</dd>
							</dl>
						</a>
					</div>
				</li>
				<li class="accordion-item accordion-item08">
					<div class="accordion-inner" style="background:url(/images/content/intro_bg_08.jpg) no-repeat 50% 50%;">
						<article class="accordion-m-img" style="background:url(/images/content/intro_bg_08.jpg) 50% 50% no-repeat;"></article>
						<h4 class="accordion-tit"><b>Clean Bench</b></h4>
						<i class="accordion-arrow xi-angle-right"></i>
						<a href="<?=$site_url?>/equipment/equipment_list.php?part_idx=8"  class="accordion-info-box">
							<dl>
								<dt>Clean Bench</dt>
								<dd>
									<p class="accordion-info-txt">Providing personnel, product, and environmental <br class="pc-br">protection by HEPA filtered air circulation.</p>
									<span class="more-btn"><em class="off">View more</em><em class="on">View more</em></span>
								</dd>
							</dl>
						</a>
					</div>
				</li>
				<li class="accordion-item accordion-item09">
					<div class="accordion-inner" style="background:url(/images/content/intro_bg_09.jpg) no-repeat 50% 50%;">
						<article class="accordion-m-img" style="background:url(/images/content/intro_bg_09.jpg) 50% 50% no-repeat;"></article>
						<h4 class="accordion-tit"><b>Stem Cell Isolation Package</b></h4>
						<i class="accordion-arrow xi-angle-right"></i>
						<a href="<?=$site_url?>/equipment/equipment_list.php?part_idx=9" class="accordion-info-box">
							<dl>
								<dt>Stem Cell Isolation Package</dt>
								<dd>
									<p class="accordion-info-txt">Supplying stem cell related equipment and kit for isolation and application.</p>
									<span  class="more-btn"><em class="off">View more</em><em class="on">View more</em></span>
								</dd>
							</dl>
						</a>
					</div>
				</li>
				<li class="accordion-item accordion-item10">
					<div class="accordion-inner" style="background:url(/images/content/intro_bg_10.jpg) no-repeat 50% 50%;">
						<article class="accordion-m-img" style="background:url(/images/content/intro_bg_10.jpg) 50% 50% no-repeat;"></article>
						<h4 class="accordion-tit"><b>Validation</b></h4>
						<i class="accordion-arrow xi-angle-right"></i>
						<a href="<?=$site_url?>/equipment/validation.php" class="accordion-info-box">
							<dl>
								<dt>Validation</dt>
								<dd>
									<p class="accordion-info-txt">To maintain the best performance of the equipment, N-BIOTEK provide Validation Service by professional quality manager.</p>
									<span class="more-btn"><em class="off">View more</em><em class="on">View more</em></span>
								</dd>
							</dl>
						</a>
					</div>
				</li>
			</ul>
		</div>
	</section>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
