<?
$page_num = "04";
$sub_num = "01";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "stemcell";
$sub_section = "about";
$page_info = "줄기세포";
$sub_info = "줄기세포란?";
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
				<h3 class="stem-big-tit"><b>줄기세포</b>란?</h3>
				<p class="stem-cm-txt">줄기세포는 여러 신체조직으로 분화할 수 있는 미분화세포로 여러 기능을 통해 우리 몸에서 손상된 세포나 조직을 재생하고 회복시키는 역할을 합니다.</p>
			</div>
			<div class="stem-graph">
				<div class="area">
					<div class="lf-img"><img src="<?=$site_url?>/images/content/about_stem_graph_kr.jpg" alt="Stem Cells Graph" /></div>
					<div class="rt-txt stem-cm-txt">
						<p>하지만 20대 중반 이후 우리 몸의 줄기세포 수와 활성도는 급격하게 감소하며<br class="pc-br"> 그에 따라 치유 및 재생 능력이 떨어지면서 빠른 속도로 노화가 진행되게 됩니다.</p>
						<p>건강한 줄기세포를 지속적으로 우리 몸 안에 제공해준다면,<br class="pc-br"> 면역시스템을 회복해주며 노화를 늦출 수 있습니다.</p>
					</div>
				</div>
			</div>
		</article>
		<article class="stem-about-02 stem-sec scroll-object" data-scroll="fade-up">
			<div class="area">
				<h4 class="stem-cm-tit">줄기세포의 종류</h4>
				<ul class="type-list">
					<li>
						<img src="<?=$site_host?>/images/content/about_stem_img01.jpg" alt="Embryonic stem cells" />
						<dl class="txt">
						   <dt class="stem-blue-txt">배아줄기세포</dt>
						   <dd class="stem-cm-txt sm">
								<p><b>수정된 배아</b> 초기 단계에서 유래</p>
								<p>모든 조직의 세포로 분화가능한 전능 세포</p>
								<p>살아있는 생명체 파괴로 취급될 수 있는 문제<span class="arrow-txt"><i class="xi-long-arrow-right"></i><b>윤리적 문제를 갖고 있음</b></span></p>
								<p><b>조절 문제로 인한 부작용 발생</b>으로 의료 목적으로 사용 금지되어 있는 상태</p>
						   </dd>
						</dl>
					</li>
					<li>
						<img src="<?=$site_host?>/images/content/about_stem_img02.jpg" alt="Adult stem cells" />
						<dl class="txt">
						   <dt class="stem-blue-txt">성체줄기세포</dt>
						   <dd class="stem-cm-txt sm">
								<p><b>분화가 가능한 미분화 세포</b></p>
								<p>다양한 조직에서 채취가 가능하여<b> 채취가 용이함</b></p>
								<p><b>자가세포를 활용하여 면역거부반응 없음 </b></p>
								<p><b>암 조직 등을 형성할 위험성이 없음</b></p>
								<p><b>중간엽 줄기세포 / 조혈모 줄기세포</b></p>
						   </dd>
						</dl>
					</li>
				</ul>
			</div>
		</article>
		<article class="stem-about-03 stem-sec scroll-object" data-scroll="fade-up">
			<div class="area-1410">
				<h4 class="stem-cm-tit">성체줄기세포</h4>
				<ul class="origins-list">
					<li>
						<div class="inner">
							<div class="lf-img"><img src="<?=$site_host?>/images/content/about_stem_img03.png" alt="Cord blood" /></div>
							<dl class="rt-txt">
								<dt class="stem-blue-txt">제대혈</dt>
								<dd class="stem-cm-txt sm">
									<p>혈액관련 질병에 적용</p>
									<p>출생 시만 채집 가능</p>
								</dd>
							</dl>
						</div>
					</li>
					<li>
						<div class="inner">
							<div class="lf-img"><img src="<?=$site_host?>/images/content/about_stem_img04.png" alt="Placenta" /></div>
							<dl class="rt-txt">
								<dt class="stem-blue-txt">태반</dt>
								<dd class="stem-cm-txt sm">
									<p>채취가 쉬우나 제한적</p>
									<p>출생 시만 채집 가능</p>
								</dd>
							</dl>
						</div>
					</li>
					<li>
						<div class="inner">
							<div class="lf-img"><img src="<?=$site_host?>/images/content/about_stem_img05.png" alt="Bone Marrow" /></div>
							<dl class="rt-txt">
								<dt class="stem-blue-txt">골수</dt>
								<dd class="stem-cm-txt sm">
									<p>채취가 어려움</p>
									<p>소량만 채취가능</p>
									<p>배양이 어려움</p>
									<p>연구 기간이 가장 오래됨</p>
								</dd>
							</dl>
						</div>
					</li>
					<li>
						<div class="inner">
							<div class="lf-img"><img src="<?=$site_host?>/images/content/about_stem_img06.png" alt="Fat Tissue" /></div>
							<dl class="rt-txt">
								<dt class="stem-blue-txt">지방</dt>
								<dd class="stem-cm-txt sm">
									<p>채취가 쉬움</p>
									<p>부작용이 전혀 없음</p>
									<p>배양이 쉬움</p>
									<p>적용범위가 넓은 연구재료</p>
								</dd>
							</dl>
						</div>
					</li>
				</ul>
			</div>
		</article>
		<article class="stem-about-04 stem-sec scroll-object">
			<h4 class="stem-cm-tit" data-scroll="fade-up">줄기세포의 특성</h4>
			<div class="character-01 character-con" data-scroll="fade-up">
				<div class="area">
					<div class="top-num-txt clearfix">
						<strong class="num"><em>01</em>분화</strong>
						<p class="txt stem-cm-txt">줄기세포는 여러 신체조직으로 분화할 수 있는 미분화세포로 여러 기능을 통해 <br class="pc-br">
						우리 몸에서 손상된 세포나 조직을 재생하고 회복시키는 역할을 합니다.</p>
					</div>
					<div class="center-img">
						<img src="<?=$site_host?>/images/content/about_stem_img07_kr.png" alt="Liver Cell, Blood Cell, Muscle Cell" class="pc" />
						<img src="<?=$site_host?>/images/content/about_stem_img07_mb_kr.png" alt="Liver Cell, Blood Cell, Muscle Cell" class="mb" />
					</div>
				</div>
			</div>
			<div class="character-02 character-con" data-scroll="fade-up">
				<div class="area">
					<div class="top-num-txt clearfix wh">
						<strong class="num"><em>02</em>줄기세포의 호밍효과</strong>
					</div>
					<div class="center-img">
						<img src="<?=$site_url?>/images/content/about_stem_img08_kr.png" alt="Homing Ability" class="pc"/>
						<img src="<?=$site_url?>/images/content/about_stem_img08_mb_kr.png" alt="Homing Ability" class="mb"/>
					</div>
				</div>
			</div>
			<div class="character-03 character-con" data-scroll="fade-up">
				<div class="area">
					<div class="top-num-txt clearfix">
						<strong class="num"><em>03</em>파라크라인 효과</strong>
						<p class="txt stem-cm-txt">줄기세포는 증식되면서 면역조절과 세포활성화를 돕는 여러 유형의 성장 인자를 분비합니다.</p>
					</div>
					<div class="center-img">
						<img src="<?=$site_url?>/images/content/about_stem_img09_kr.png" alt="Paracrine Effect" class="pc" />
						<img src="<?=$site_url?>/images/content/about_stem_img09_mb_kr.png" alt="Paracrine Effect" class="mb" />
					</div>
				</div>
			</div>
		</article>
		<article class="stem-about-05 stem-sec scroll-object" data-scroll="fade-up">
			<div class="area">
				<h4 class="stem-cm-tit">줄기세포의 기능</h4>
				<div class="function-img"><img src="<?=$site_url?>/images/content/about_stem_img10_kr.png" alt="Stem Cell Function" /></div>
			</div>
		</article>
		<article class="stem-about-06 stem-sec scroll-object" data-scroll="fade-up">
			<div class="area">
				<h4 class="sec-tit"><b>줄기세포의</b><br>사용 가능 분야</h4>
				<div class="potential center-img">
					<img src="<?=$site_url?>/images/content/about_stem_img11_kr.jpg" alt="Potential Uses of Stem Cells" class="pc"/>
					<img src="<?=$site_url?>/images/content/about_stem_img11_mb_kr.jpg" alt="Potential Uses of Stem Cells" class="mb"/>
				</div>
			</div>
		</article>
	</article>		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
