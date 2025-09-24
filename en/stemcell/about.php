<?
$page_num = "03";
$sub_num = "01";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "stemcell";
$sub_section = "about";
$page_info = "Stem Cell";
$sub_info = "What is Stem Cell";
$content_type="wide";
// $sub_info2 = "3차메뉴";	// 사용안할시 주석처리
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(Description)	필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
	<article class="stem-about-page">
		<article class="stem-about-01 stem-sec scroll-object" data-scroll="fade-up" data-scroll-delay="200">
			<div class="top-txt area">
				<h3 class="stem-big-tit">WHAT IS <b>STEM CELL?</b></h3>
				<p class="stem-cm-txt">Stem cells are undifferentiated cells that can replicate by itself and differentiate into various parts of our body.</p>
			</div>
			<div class="stem-graph">
				<div class="area">
					<div class="lf-img"><img src="<?=$site_url?>/images/content/about_stem_graph.jpg" alt="Stem Cells Graph" /></div>
					<div class="rt-txt stem-cm-txt">
						<p>Normally, after the age of 23, <br class="pc-br">the immune system weakens and aging begins <br class="pc-br">due to the decreasing number of stem cells in our body.</p>
						<p>If we can supply healthy stem cells into our body constantly, <br class="pc-br">we can recover our immune system and slow down the aging process.</p>
					</div>
				</div>
			</div>
		</article>
		<article class="stem-about-02 stem-sec scroll-object" data-scroll="fade-up">
			<div class="area">
				<h4 class="stem-cm-tit">Types of stem cell</h4>
				<ul class="type-list">
					<li>
						<img src="<?=$site_host?>/images/content/about_stem_img01.jpg" alt="Embryonic stem cells" />
						<dl class="txt">
						   <dt class="stem-blue-txt">Embryonic stem cells</dt>
						   <dd class="stem-cm-txt sm">
								<p>Derived from <b>early stage of embryo</b></p>
								<p>Can be treated as <b>destructing alive human being</b><span class="arrow-txt"><i class="xi-long-arrow-right"></i>ethical issues</span></p>
								<p>Unsuitable to use for medical treatment because of <b>side effect</b></p>
						   </dd>
						</dl>
					</li>
					<li>
						<img src="<?=$site_host?>/images/content/about_stem_img02.jpg" alt="Adult stem cells" />
						<dl class="txt">
						   <dt class="stem-blue-txt">Adult stem cells</dt>
						   <dd class="stem-cm-txt sm">
								<p><b>Undifferentiated</b> cells</p>
								<p><b>Found all over the adult body</b> after embryonic development</p>
								<p><b>No side effect</b> through using autologous cell</p>
						   </dd>
						</dl>
					</li>
				</ul>
			</div>
		</article>
		<article class="stem-about-03 stem-sec scroll-object" data-scroll="fade-up">
			<div class="area-1410">
				<h4 class="stem-cm-tit">Origins of Adult stem cell</h4>
				<ul class="origins-list">
					<li>
						<div class="inner">
							<div class="lf-img"><img src="<?=$site_host?>/images/content/about_stem_img03.png" alt="Cord blood" /></div>
							<dl class="rt-txt">
								<dt class="stem-blue-txt">Cord blood</dt>
								<dd class="stem-cm-txt sm">
									<p>Apply for blood-related disease</p>
									<p>Collected when giving birth</p>
								</dd>
							</dl>
						</div>
					</li>
					<li>
						<div class="inner">
							<div class="lf-img"><img src="<?=$site_host?>/images/content/about_stem_img04.png" alt="Placenta" /></div>
							<dl class="rt-txt">
								<dt class="stem-blue-txt">Placenta</dt>
								<dd class="stem-cm-txt sm">
									<p>Easy to collect but limited</p>
									<p>Collected when giving birth</p>
								</dd>
							</dl>
						</div>
					</li>
					<li>
						<div class="inner">
							<div class="lf-img"><img src="<?=$site_host?>/images/content/about_stem_img05.png" alt="Bone Marrow" /></div>
							<dl class="rt-txt">
								<dt class="stem-blue-txt">Bone Marrow</dt>
								<dd class="stem-cm-txt sm">
									<p>Difficult to collect</p>
									<p>Small amount</p>
									<p>Hard to culture</p>
								</dd>
							</dl>
						</div>
					</li>
					<li>
						<div class="inner">
							<div class="lf-img"><img src="<?=$site_host?>/images/content/about_stem_img06.png" alt="Fat Tissue" /></div>
							<dl class="rt-txt">
								<dt class="stem-blue-txt">Fat Tissue</dt>
								<dd class="stem-cm-txt sm">
									<p>Easy to collect</p>
									<p>No side effect at all</p>
									<p>Easy to culture</p>
									<p>Research item for wide-range application</p>
								</dd>
							</dl>
						</div>
					</li>
				</ul>
			</div>
		</article>
		<article class="stem-about-04 stem-sec scroll-object">
			<h4 class="stem-cm-tit" data-scroll="fade-up">CHARACTERISTICS OF STEM CELL</h4>
			<div class="character-01 character-con" data-scroll="fade-up">
				<div class="area">
					<div class="top-num-txt clearfix">
						<strong class="num"><em>01</em>Differentiation </strong>
						<p class="txt stem-cm-txt">When stem cell is in undifferentiated status, it can be differentiated into various parts of our body <br class="pc-br">
						such as organ, blood vessels, bones in a special condition. Through its differentiation ability, it can be used for <br class="pc-br">
						regeneration of our body</p>
					</div>
					<div class="center-img">
						<img src="<?=$site_host?>/images/content/about_stem_img07.png" alt="Liver Cell, Blood Cell, Muscle Cell" class="pc" />
						<img src="<?=$site_host?>/images/content/about_stem_img07_mb.png" alt="Liver Cell, Blood Cell, Muscle Cell" class="mb" />
					</div>
				</div>
			</div>
			<div class="character-02 character-con" data-scroll="fade-up">
				<div class="area">
					<div class="top-num-txt clearfix wh">
						<strong class="num"><em>02</em>Homing Ability</strong>
					</div>
					<div class="center-img">
						<img src="<?=$site_url?>/images/content/about_stem_img08.png" alt="Homing Ability" class="pc"/>
						<img src="<?=$site_url?>/images/content/about_stem_img08_mb.png" alt="Homing Ability" class="mb"/>
					</div>
				</div>
			</div>
			<div class="character-03 character-con" data-scroll="fade-up">
				<div class="area">
					<div class="top-num-txt clearfix">
						<strong class="num"><em>03</em>Paracrine Effect</strong>
						<p class="txt stem-cm-txt">When stem cell is proliferated, it secretes many types of growth factors that <br class="pc-br">boosts immunomodulation and cell activation</p>
					</div>
					<div class="center-img">
						<img src="<?=$site_url?>/images/content/about_stem_img09.png" alt="Paracrine Effect" class="pc" />
						<img src="<?=$site_url?>/images/content/about_stem_img09_mb.png" alt="Paracrine Effect" class="mb" />
					</div>
				</div>
			</div>
		</article>
		<article class="stem-about-05 stem-sec scroll-object" data-scroll="fade-up">
			<div class="area">
				<h4 class="stem-cm-tit">Function of Stem cell</h4>
				<div class="function-img"><img src="<?=$site_url?>/images/content/about_stem_img10.png" alt="Stem Cell Function" /></div>
			</div>
		</article>
		<article class="stem-about-06 stem-sec scroll-object" data-scroll="fade-up">
			<div class="area">
				<h4 class="sec-tit">Potential Uses of <br><b>Stem Cells</b></h4>
				<div class="potential center-img">
					<img src="<?=$site_url?>/images/content/about_stem_img11.jpg" alt="Potential Uses of Stem Cells" class="pc"/>
					<img src="<?=$site_url?>/images/content/about_stem_img11_mb.jpg" alt="Potential Uses of Stem Cells" class="mb"/>
				</div>
			</div>
		</article>
	</article>		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
