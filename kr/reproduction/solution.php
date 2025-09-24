<?
$page_num = "03";
$sub_num = "01";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "reproduction";
$sub_section = "solution";
$page_info = "첨단 재생 의료";
$sub_info = "Total Solution";
$content_type="wide";
// $sub_info2 = "3차메뉴";	// 사용안할시 주석처리
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(Description)	필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>

<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>

<style>
	

</style>

<article class="solution-page">
	<section class="st-con">
		<div class="area">
			<div class="tit-box" data-scroll="fade-up">
				<p class="st-tit">첨단재생의료 도입 절차</p>
			</div>
			<div class="st-process">
				<dl data-scroll="fade">
					<dt><span>Q</span><em>모든 의료기관이 첨단재생의료 치료를 할 수 있나요?</em></dt>
					<dd>
						<div class="arrow-box">
							<span class="arrow">
								<i class="xi-angle-right-min"></i>
								<i class="xi-angle-right-min"></i>
							</span>
						</div>
					<span>A</span><em>NO! 첨단재생의료 실시기관에서만 <br class="pc-br"> 첨단재생의료 치료가 가능합니다.</em></dd>
					
				</dl>
				<dl data-scroll="fade">
					<dt><span>Q</span><em>첨단재생의료 실시기관이 되려면 어떻게 하나요?</em></dt>
					<dd>
						<div class="arrow-box">
							<span class="arrow">
								<i class="xi-angle-right-min"></i>
								<i class="xi-angle-right-min"></i>
							</span>
						</div>
					<span>A</span><em>보건복지부로부터 첨단재생의료기관으로 <br class="pc-br"> 지정받아야 합니다.</em></dd>
					<!-- <div class="arrow-box">
						<span class="arrow">
							<i class="xi-angle-right-min"></i>
							<i class="xi-angle-right-min"></i>
						</span>
					</div> -->
				</dl>
				<div class="st-process-arrow" data-scroll="fade-down">
					<img src="<?=$site_host?>/images/content/st_process_arrow.png" alt="">
				</div>
				<div class="result-box" data-scroll="fade-down" data-scroll-delay="250">
					<p>엔바이오텍과 함께하세요</p>
				</div>
			</div>
		</div>
	</section>
	<section class="st-con area">
		<div class="tit-box" data-scroll="fade-up">
			<p class="st-tit">절차 안내</p>
		</div>
		<ul class="st-process-list" data-scroll="fade" data-rolling-time="2000" data-reset-width="800">
			<li >
				<div class="ps-top">
					<span class="num">01</span>
					<p class="ps-tit">재생의료기관 지정신청</p>
					<em class="ps-company">의료기관</em>
				</div>
				<div class="ico-box">
					<span>
						<img src="<?=$site_host?>/images/content/total_intro_ico01.png" alt="" class="img-center">
					</span>
				</div>
			</li>
			<li >
				<div class="ps-top">
					<span class="num">02</span>
					<p class="ps-tit">서류심사</p>
					<em class="ps-company">보건복지부등</em>
				</div>
				<div class="ico-box">
					<span>
						<img src="<?=$site_host?>/images/content/total_intro_ico02.png" alt="" class="img-center">
					</span>
				</div>
			</li>
			<li >
				<div class="ps-top">
					<span class="num">03</span>
					<p class="ps-tit">현장조사</p>
					<em class="ps-company">보건복지부 <br> 및 안전관리기관등</em>
				</div>
				<div class="ico-box">
					<span>
						<img src="<?=$site_host?>/images/content/total_intro_ico03.png" alt="" class="img-center">
					</span>
				</div>
			</li>
			<li >
				<div class="ps-top">
					<span class="num">04</span>
					<p class="ps-tit">재생의료기관 지정 <br class="pc-br"> 및 지정서 발급</p>
					<em class="ps-company">보건복지부 및 안전관리관등</em>
				</div>
				<div class="ico-box">
					<span>
						<img src="<?=$site_host?>/images/content/total_intro_ico04.png" alt="" class="img-center">
					</span>
				</div>
			</li>
		</ul>
	</section>
	<section class="st-con st-con03">
		<div class="area">
			<div class="tit-box" data-scroll="fade-down">
				<p class="st-tit">첨단재생의료 실시기관</p>
				<p class="st-process2-tit">지정을 위한 토탈 솔루션 제공</p>
			</div>
			<ul class="st-process2-list">
				<li data-scroll="fade-down">
					<div class="img-box"><img src="<?=$site_host?>/images/content/total_solution_img01.jpg" alt=""></div>
					<span class="ps2-tit">시설 개설 자문</span>
				</li>
				<li data-scroll="fade-down" data-scroll-delay="250">
					<div class="img-box"><img src="<?=$site_host?>/images/content/total_solution_img02.jpg" alt=""></div>
					<span class="ps2-tit">세포 보관 장비</span>
				</li>
				<li data-scroll="fade-down" data-scroll-delay="400">
					<div class="img-box"><img src="<?=$site_host?>/images/content/total_solution_img03.jpg" alt=""></div>
					<span class="ps2-tit">신청서류 컨설팅</span>
				</li>
				<li data-scroll="fade-down" data-scroll-delay="550">
					<div class="img-box"><img src="<?=$site_host?>/images/content/total_solution_img04.jpg" alt=""></div>
					<span class="ps2-tit">세포공급 & 임상연구</span>
				</li>
			</ul>
			<div class="ps2-arrow" data-scroll="fade-down">
				<img src="<?=$site_host?>/images/content/ps2_arrow.png" alt="">
			</div>
			<p class="ps2-result-txt" data-scroll="fade-down">보건복지부 실사 대응 지원</p>
		</div>
	</section>
	<section class="st-con st-con04">
		<div class="area">
			<div class="st-ct-top" data-scroll="fade-up">
				<div class="tit-box">
					<p class="st-tit">컨설턴트 & 파트너</p>
				</div>
				<div class="st-ct-tit">
					<strong>
						<span>기관지정 컨설팅만 하고 끝?</span> <br>
						<em>엔바이오텍의 토탈솔루션은 다릅니다.</em>
					</strong>
				</div>
			</div>
			<div class="st-ct-bottom">
				<div class="left-box">
					<div class="ct-circle">
						<p>첨단재생의료 <br> 기관지정</p>
						<div class="dot">
							<span class="dots"></span><span class="dots"></span>
						</div>
						<span>지정 관련 컨설팅, 장비 공급 </span>
					</div>
					<div class="ct-circle">
						<p>임상연구</p>
						<div class="dot">
							<span class="dots"></span><span class="dots"></span>
						</div>
						<span>공동연구 및 세포공급 </span>
					</div>
					<div class="ct-circle">
						<p>첨생 치료 </p>
						<div class="dot">
							<span class="dots"></span><span class="dots"></span>
						</div>
						<span>세포 공급 </span>
					</div>
				</div>
				<div class="right-box">
					<em class="txt01">첨생기관 지정 컨설팅에서 끝나지 않고 세포처리시설로 협력 지속이 가능한 </em>
					<p class="txt02">첨생 동반 파트너! </p>
				</div>
			</div>
			<span class="reference-txt">*첨생 : 첨단재생의료</span>
		</div>
	</section>
	<section class="st-con st-con05">
		<div class="area">
			<div class="tit-box" data-scroll="fade-up">
				<p class="st-tit">줄기세포 토탈 솔루션</p>
				<p class="st-txt">엔바이오텍은 줄기세포 관련 사업을 시작하고자 하는 파트너들을 위해 줄기세포 처리에 필요한 전체 시스템을 제공해드리는 유일한 회사입니다. <br>
				바이오클린룸 공사, 관련 장비 설치 및 줄기세포 기술 컨설팅까지 줄기세포 사업에 필요한 모든 것들을 Turn-key로 제공해 드리는 줄기세포 토탈 솔루션을 통해
				세계 각국의 파트너 분들이 쉽고 빠르게 줄기세포 사업을 시작할 수 있도록 도와드리고 있습니다.</p>
			</div>			
		</div>
		<div class="stem-cell-box" data-scroll="fade">
			<div class="stem-cell-left">
				<img src="<?=$site_host?>/images/content/stem_cell_left_img.png" alt="">
			</div>
			<div class="stem-cell-right">
				<div class="stem-item">
					<div class="img-box"><img src="<?=$site_host?>/images/content/solution_type01.png" alt=""></div>
					<div class="item-txt">
						<p>Bio Clean Room </p>
						<em>Stem cell processing must <br class="pc-br">
						be conducted at Bio Clean Room <br class="pc-br">
						complying GMP guidelines.
						</em>
					</div>
				</div>
				<div class="stem-item">
					<div class="img-box"><img src="<?=$site_host?>/images/content/solution_type02.png" alt=""></div>
					<div class="item-txt">
						<p>Cell Processing System</p>
						<em>From cell culture and research to <br class="pc-br">
						development, quality control, and <br class="pc-br">
						banking — we deliver it all.
						</em>
					</div>
				</div>
				<div class="stem-item">
					<div class="img-box"><img src="<?=$site_host?>/images/content/solution_type03.png" alt=""></div>
					<div class="item-txt">
						<p>Technology Transfer </p>
						<em>Stem cell processing requires <br>
						standardized and safe <br>
						technology.
						</em>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="st-con st-con06">
		<div class="area">
			<div class="tit-box" data-scroll="fade-up">
				<p class="st-tit">줄기세포 토탈 솔루션 <br> 사업 확장성</p>
			</div>
			<div class="stem-cell-center" data-scroll="fade">
				<ul class="stem-cell-list">
					<li>
						<div class="img-box"><img src="<?=$site_host?>/images/content/stem_cell_type01.png" alt=""></div>
						<div class="inner-txt">
							<p>Stem Cell Banking</p>
							<em>Stem cell, Fat QC</em>
						</div>
					</li>
					<li>
						<div class="img-box"><img src="<?=$site_host?>/images/content/stem_cell_type02.png" alt=""></div>
						<div class="inner-txt">
							<p>Beauty Treatment</p>
							<em>Skin care, <br> wound healing</em>
						</div>
					</li>
					<li>
						<div class="img-box"><img src="<?=$site_host?>/images/content/stem_cell_type05.png" alt=""></div>
						<div class="inner-txt">
							<p>Stem Cell Research</p>
							<em>Medicine <br> development</em>
						</div>
					</li>
					<li>
						<div class="img-box"><img src="<?=$site_host?>/images/content/stem_cell_type04.png" alt=""></div>
						<div class="inner-txt">
							<p>Stem Cell Training</p>
							
						</div>
					</li>
					<li>
						<div class="img-box"><img src="<?=$site_host?>/images/content/stem_cell_type03.png" alt=""></div>
						<div class="inner-txt">
							<p>Medical Treatment</p>
							<em>Chronic diseases <br> Anti-Aging</em>
						</div>						
					</li>
				</ul>
				<div class="center">
					<img src="<?=$site_host?>/images/content/stem_cell_center_img.png" alt="">
					<img src="<?=$site_host?>/images/content/stem_cell_center_img_m.png" alt="" class="m-ver">
				</div>
			</div>
		</div>		
	</section>
</article>

<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>

<script>
	rollingActive('.st-process-list');

	$(window).scroll(function  () {
		if($('.st-ct-top.animated').length){
			$('.st-ct-bottom').addClass('animated');
		}
	});
	
</script>