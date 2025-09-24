<?
$page_num = "03";
$sub_num = "03";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "stemcell";
$sub_section = "business";
$page_info = "Stem Cell Business";
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
								<strong class="tit">STEM CELL <br>TOTAL SOLUTION</strong>
								<p class="txt">
									N-BIOTEK provides Stem Cell Total <br>
									Solution by conducting stem cell facility, <br>
									equipment, and technology transfer <br>
									for helping our partner <br>
									to lead the stem cell field <br>
									successfully
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
								<strong class="tit">STEMPIA <br>SYSTEM</strong>
								<p class="txt">
									N-BIOTEK Stempia System is <br>
									One-stop solution for SVF and PRP <br>
									isolation and application.
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
								<strong class="tit">STEM CELL <br> RESEARCH</strong>
								<p class="txt">
									N-BIOTEK has achieved a license <br>
									from KFDA for stem cell processing facility <br>
									satisfying all the condition stipulated in the <br>
									new law to manufacture and provide stem cells <br>
									to other hospitals for clinical research.
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
								<strong class="tit">CELL<br> BANKING</strong>
								<p class="txt">
									N-BIOTEK’s Re-Born Cell Banking <br>
									System is customized stem cell storage service
									which offers to store your own stem cells and 
									immune cells safely in a good condition <br>
									for the future use.
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
