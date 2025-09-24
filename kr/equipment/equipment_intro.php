<?
$page_num = "06";
$sub_num = "01";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "equipment";
$sub_section = "equipment_intro";
$page_info = "실험 장비";
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
						<h4 class="accordion-tit"><b>CO<sub>2</sub> 배양기</b></h4>
						<i class="accordion-arrow xi-angle-right"></i>
						<a href="<?=$site_url?>/equipment/equipment_list.php?part_idx=1" class="accordion-info-box">
							<dl>
								<dt>CO<sub>2</sub> 배양기</dt>
								<dd>
									<p class="accordion-info-txt">CO<sub>2</sub> 배양기는 CO<sub>2</sub> 공급량을 정밀하게 조정하고 오염을 감소시켜 세포 배양 성장을 촉진합니다. <br class="pc-br">
									엔바이오텍은 다양한 크기와 용량의 배양기를 제공합니다.</p>
									<span class="more-btn"><em class="off">자세히 보기</em><em class="on">자세히 보기</em></span>
								</dd>
							</dl>
						</a>
					</div>
				</li>
				<li class="accordion-item accordion-item02">
					<div class="accordion-inner" style="background:url(/images/content/intro_bg_02.jpg) no-repeat 50% 50%;">
						<article class="accordion-m-img" style="background:url(/images/content/intro_bg_02.jpg) 50% 50% no-repeat;"></article>
						<h4 class="accordion-tit"><b>진탕배양기</b></h4>
						<i class="accordion-arrow xi-angle-right"></i>
						<a href="<?=$site_url?>/equipment/equipment_list.php?part_idx=2" class="accordion-info-box">
							<dl>
								<dt>진탕배양기</dt>
								<dd>
									<p class="accordion-info-txt">강력한 쉐이커와 다양한 용기 플랫폼을 위한 넓은 작업 공간.<br class="pc-br">안정적인 진탕과 정밀한 온도 제어.</p>
									<span class="more-btn"><em class="off">자세히 보기</em><em class="on">자세히 보기</em></span>
								</dd>
							</dl>
						</a>
					</div>
				</li>
				<li class="accordion-item accordion-item03">
					<div class="accordion-inner" style="background:url(/images/content/intro_bg_03.jpg) no-repeat 50% 50%;">
						<article class="accordion-m-img" style="background:url(/images/content/intro_bg_03.jpg) 50% 50% no-repeat;"></article>
						<h4 class="accordion-tit"><b>쉐이커 및 롤러 장치</b></h4>
						<i class="accordion-arrow xi-angle-right"></i>
						<a href="<?=$site_url?>/equipment/equipment_list.php?part_idx=3" class="accordion-info-box">
							<dl>
								<dt>쉐이커 및 롤러 장치</dt>
								<dd>
									<p class="accordion-info-txt">궤도형, 왕복형, 여러 쉐이킹 모션이 복합된 형태, 그리고 원격 제어 등 다양한 크기와 옵션으로 제공되는 무벨트 자기 드라이브 벤치탑 쉐이커입니다. 또한 다양한 용기 홀더 플랫폼에 쉽게 장착할 수 있습니다.</p>
									<span class="more-btn"><em class="off">자세히 보기</em><em class="on">자세히 보기</em></span>
								</dd>
							</dl>
						</a>
					</div>
				</li>
				<li class="accordion-item accordion-item04">
					<div class="accordion-inner" style="background:url(/images/content/intro_bg_04.jpg) no-repeat 50% 50%;">
						<article class="accordion-m-img" style="background:url(/images/content/intro_bg_04.jpg) 50% 50% no-repeat;"></article>
						<h4 class="accordion-tit"><b>항온수조 및 히팅블럭</b></h4>
						<i class="accordion-arrow xi-angle-right"></i>
						<a href="<?=$site_url?>/equipment/equipment_list.php?part_idx=4" class="accordion-info-box">
							<dl>
								<dt>항온수조 및 히팅블럭</dt>
								<dd>
									<p class="accordion-info-txt">특정 용도에 적합한 우수한 온도 균일성을 보장하며 부식을 방지해주는<br class="pc-br">
									이음매 없는 스테인리스 내부 챔버와 여러 가지 기구를 수납할 수 있는 <br class="pc-br">특수 내장형 스프링 랙(*진탕 항온수조)과 같은 독특한 기능을 제공합니다.</p>
									<span class="more-btn"><em class="off">자세히 보기</em><em class="on">자세히 보기</em></span>
								</dd>
							</dl>
						</a>
					</div>
				</li>
				<li class="accordion-item accordion-item05">
					<div class="accordion-inner" style="background:url(/images/content/intro_bg_05.jpg) no-repeat 50% 50%;">
						<article class="accordion-m-img" style="background:url(/images/content/intro_bg_05.jpg) 50% 50% no-repeat;"></article>
						<h4 class="accordion-tit"><b>농축기</b></h4>
						<i class="accordion-arrow xi-angle-right"></i>
						<a href="<?=$site_url?>/equipment/equipment_list.php?part_idx=5" class="accordion-info-box">
							<dl>
								<dt>농축기</dt>
								<dd>
									<p class="accordion-info-txt">원심력과 진공, 열을 조합하여 기화와 농축 속도를 높입니다.</p>
									<span class="more-btn"><em class="off">자세히 보기</em><em class="on">자세히 보기</em></span>
								</dd>
							</dl>
						</a>
					</div>
				</li>
				<li class="accordion-item accordion-item06">
					<div class="accordion-inner" style="background:url(/images/content/intro_bg_06.jpg) no-repeat 50% 50%;">
						<article class="accordion-m-img" style="background:url(/images/content/intro_bg_06.jpg) 50% 50% no-repeat;"></article>
						<h4 class="accordion-tit"><b>건조기 및 배양기</b></h4>
						<i class="accordion-arrow xi-angle-right"></i>
						<a href="<?=$site_url?>/equipment/equipment_list.php?part_idx=6"  class="accordion-info-box">
							<dl>
								<dt>건조기 및 배양기</dt>
								<dd>
									<p class="accordion-info-txt">건조기는 간단한 작동을 통해서 시료를 건조하고 멸균하는 데 주로 사용되고, <br class="pc-br">
									일반 배양기는 모든 종류의 미생물, 세포, 세균 및 병균을 배양하거나 성장시키는 데 사용됩니다. 
									마이크로프로세서 컨트롤러가 탑재되어 우수한 온도 정확도와 재현성을 발휘합니다.</p>
									<span class="more-btn"><em class="off">자세히 보기</em><em class="on">자세히 보기</em></span>
								</dd>
							</dl>
						</a>
					</div>
				</li>
				<li class="accordion-item accordion-item07">
					<div class="accordion-inner" style="background:url(/images/content/intro_bg_07.jpg) no-repeat 50% 50%;">
						<article class="accordion-m-img" style="background:url(/images/content/intro_bg_07.jpg) 50% 50% no-repeat;"></article>
						<h4 class="accordion-tit"><b>고압증기 멸균기</b></h4>
						<i class="accordion-arrow xi-angle-right"></i>
						<a href="<?=$site_url?>/equipment/equipment_list.php?part_idx=7"  class="accordion-info-box">
							<dl>
								<dt>고압증기 멸균기</dt>
								<dd>
									<p class="accordion-info-txt">일반 실험실에 적합한 고압증기 멸균기입니다. 최고의 작업 효율과 <br class="pc-br">안전 기능으로 가격 대비해서 뛰어난 멸균 시스템을 제공합니다.</p>
									<span class="more-btn"><em class="off">자세히 보기</em><em class="on">자세히 보기</em></span>
								</dd>
							</dl>
						</a>
					</div>
				</li>
				<li class="accordion-item accordion-item08">
					<div class="accordion-inner" style="background:url(/images/content/intro_bg_08.jpg) no-repeat 50% 50%;">
						<article class="accordion-m-img" style="background:url(/images/content/intro_bg_08.jpg) 50% 50% no-repeat;"></article>
						<h4 class="accordion-tit"><b>클린벤치</b></h4>
						<i class="accordion-arrow xi-angle-right"></i>
						<a href="<?=$site_url?>/equipment/equipment_list.php?part_idx=8"  class="accordion-info-box">
							<dl>
								<dt>클린벤치</dt>
								<dd>
									<p class="accordion-info-txt">HEPA 필터를 통한 공기 순환으로 사용자와 제품 및 환경 보호.</p>
									<span class="more-btn"><em class="off">자세히 보기</em><em class="on">자세히 보기</em></span>
								</dd>
							</dl>
						</a>
					</div>
				</li>
				<li class="accordion-item accordion-item09">
					<div class="accordion-inner" style="background:url(/images/content/intro_bg_09.jpg) no-repeat 50% 50%;">
						<article class="accordion-m-img" style="background:url(/images/content/intro_bg_09.jpg) 50% 50% no-repeat;"></article>
						<h4 class="accordion-tit"><b>줄기세포 분리 패키지</b></h4>
						<i class="accordion-arrow xi-angle-right"></i>
						<a href="<?=$site_url?>/equipment/equipment_list.php?part_idx=9" class="accordion-info-box">
							<dl>
								<dt>줄기세포 분리 패키지</dt>
								<dd>
									<p class="accordion-info-txt">줄기세포 관련 장비와 분리 및 투여용 키트 공급.</p>
									<span  class="more-btn"><em class="off">자세히 보기</em><em class="on">자세히 보기</em></span>
								</dd>
							</dl>
						</a>
					</div>
				</li>
				<li class="accordion-item accordion-item10">
					<div class="accordion-inner" style="background:url(/images/content/intro_bg_10.jpg) no-repeat 50% 50%;">
						<article class="accordion-m-img" style="background:url(/images/content/intro_bg_10.jpg) 50% 50% no-repeat;"></article>
						<h4 class="accordion-tit"><b>밸리데이션</b></h4>
						<i class="accordion-arrow xi-angle-right"></i>
						<a href="<?=$site_url?>/equipment/validation.php" class="accordion-info-box">
							<dl>
								<dt>밸리데이션</dt>
								<dd>
									<p class="accordion-info-txt">장비의 성능을 최상으로 유지하기 위해 엔바이오텍은 전문 품질 관리사를 통해 밸리데이션 서비스를 제공합니다.</p>
									<span class="more-btn"><em class="off">자세히 보기</em><em class="on">자세히 보기</em></span>
								</dd>
							</dl>
						</a>
					</div>
				</li>
			</ul>
		</div>
	</section>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
