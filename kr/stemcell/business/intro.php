<?
$page_num = "03";
$sub_num = "03";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "stemcell";
$sub_section = "business";
$page_info = "줄기세포 사업";
$sub_info = "What is Stem Cell";
$content_type="wide";
// $sub_info2 = "3차메뉴";	// 사용안할시 주석처리
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../../lib/config.php";
$sub_description = ""; // 페이지 설명(Description)	필요시 사용
include "../../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<style>
	#topMenu04 {display:none;}
	#content.wide {padding:0;}
</style>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
	<section class="stemcell-intro-page">
		<article class="stemcell-intro-con on">
			<div class="bg" style="background-image:url('/images/content/stem_intro_bg_01.jpg');"></div>
			<!-- STEM CELL TOTAL SOLUTION -->
			<div class="stemcell-intro-item on item01" data-bg="/images/content/stem_intro_bg_01.jpg">
				<a href="<?=$site_url?>/stemcell/business/solution_outline.php">
					<div class="inner-box">
						<dl>
							<dt><span class="icon" style="background-image:url('/images/content/stem_intro_icon_01.png');"></span></dt>
							<dd>
								<strong class="tit">줄기세포 <br>토탈 솔루션</strong>
								<p class="txt">
									엔바이오텍은 국내외 파트너 분들이 성공적으로 <br>
									첨단재생의료 분야를 선도할 수 있도록 바이오클린룸 구축,<br> 
									생명과학장비 설치 그리고 줄기세포 처리기술까지 <br>
									이전해드리는 줄기세포 토탈솔루션을 <br>
									제공해오고 있습니다.
								</p>
							</dd>
						</dl>
					</div>
				</a>
			</div>
			<!-- // -->
			<!-- STEMPIA SYSTEM -->
			<div class="stemcell-intro-item item02" data-bg="/images/content/stem_intro_bg_02.jpg">
				<a href="<?=$site_url?>/stemcell/business/system_outline.php">
					<div class="inner-box">
						<dl>
							<dt><span class="icon" style="background-image:url('/images/content/stem_intro_icon_02.png');"></span></dt>
							<dd>
								<strong class="tit">스템피아<br>시스템</strong>
								<p class="txt">
									엔바이오텍은 SVF와 PRP  <br>
									치료를 위한 최고의 솔루션인  <br>
									스템피아시스템을 제공합니다. 
								</p>
							</dd>
						</dl>
					</div>
				</a>
			</div>
			<!-- // -->
			<!-- STEM CELL RESEARCH -->
			<div class="stemcell-intro-item item03" data-bg="/images/content/stem_intro_bg_03.jpg">
				<a href="<?=$site_url?>/stemcell/business/research_outline.php">
					<div class="inner-box">
						<dl>
							<dt><span class="icon" style="background-image:url('/images/content/stem_intro_icon_03.png');"></span></dt>
							<dd>
								<strong class="tit">줄기세포 <br> 임상연구</strong>
								<p class="txt">
									엔바이오텍의 세포처리시설은 식품의약품안전처로부터  <br>
									안정성을 인정받은 시설로 엔바이오텍은 자체적으로 생산한<br>
									 줄기세포를 활용하여 여러 의료기관들과 첨단재생의료 <br>
									 관련 임상연구를 진행하고 있습니다.
								</p>
							</dd>
						</dl>
					</div>
				</a>
			</div>
			<!-- // -->
			<!-- CELL BANKING -->
			<div class="stemcell-intro-item item04" data-bg="/images/content/stem_intro_bg_04.jpg">
				<a href="<?=$site_url?>/stemcell/business/banking_outline.php">
					<div class="inner-box">
						<dl>
							<dt><span class="icon" style="background-image:url('/images/content/stem_intro_icon_04.png');"></span></dt>
							<dd>
								<strong class="tit">셀뱅킹</strong>
								<p class="txt">
									엔바이오텍의 리본셀뱅킹으로 세포보관의 <br>
									최적화 된 환경에서 특수한 동결보관 기술을 활용하여 <br>
									줄기세포, 면역세포 등을 미래를 위해 <br>
									안전하게 보관하실 수 있습니다.
								</p>
							</dd>
						</dl>
					</div>
				</a>
			</div>
			<!-- // -->
		</article>
	</section>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
