<?
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "./lib/config.php";
$fullpage = 1;
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<!-- fullpage css -->
<link rel="stylesheet" type="text/css" href="<?=$site_host?>/css/plugin/jquery.fullPage.css" />
</head>

<body>
<!--[if lt IE 7]>
<p class="cm-alert-ie">현재 웹브라우저에서는 사이트가 정상적으로 표시되지 않을 수 있습니다. <strong><a href="http://browsehappy.com/" target="_blank">여기를 클릭</a></strong>하여 웹브라우저를 업그레이드 하세요.</p>
<![endif]-->
<!-- accessibility -->
<div class="cm-accessibility">
	<a href="#mainVisual">본문바로가기</a>
</div>
<!-- //accessibility -->

<!-- code -->
<div id="wrap">
	<!-- header -->
	<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/header.php"; ?>
	<!-- //header -->
	<!-- container -->
	<div id="fullpage">
		<!-- ****************** 메인비주얼 ********************** -->
		<section id="mainVisual" class="section">
			<article class="main-visual-con">
				<div class="main-visual-item">
					<div class="main-visual-pc-img" style="background:#fff url(<?=$site_host?>/images/main/main_visual_01.jpg) no-repeat 50% 50%;"></div>
					<div class="main-visual-m-img"><img src="<?=$site_host?>/images/main/main_visual_01_m.jpg" alt="메인비주얼 모바일 이미지 1" /></div>	<!-- 모바일이미지 -->
					<div class="main-visual-txt-con">
						<div class="main-visual-txt-box area-box">
							<div class="main-visual-txt-inner">
								<strong class="main-visual-txt1 cm-word-split-JS" data-splitting data-css-property="animation" data-speed="0.03" data-speed-delay="0.3">giantsoft Stand in the world giantsoft Stand in the world  11</strong>
								<p class="main-visual-txt2"><b>거인소프트</b> 반응형 </p>
								<p class="main-visual-txt3">언제나 처음 시작하였던 다짐과 포부를 가슴 깊이 되새기고,<br>미래를 열어가겠습니다. </p>
								<a href="" class="main-visual-more-btn">DETAIL VIEW</a>
							</div>
						</div>
					</div>
				</div>
				<div class="main-visual-item">
					<div class="main-visual-pc-img" style="background:#fff url(<?=$site_host?>/images/main/main_visual_02.jpg) no-repeat 50% 50%;"></div>
					<div class="main-visual-m-img"><img src="<?=$site_host?>/images/main/main_visual_02_m.jpg" alt="메인비주얼 모바일 이미지 2" /></div>	<!-- 모바일이미지 -->
					<div class="main-visual-txt-con">
						<div class="main-visual-txt-box area-box">
							<div class="main-visual-txt-inner">
								<strong class="main-visual-txt1 cm-word-split-JS" data-splitting data-css-property="animation" data-speed="0.03" data-speed-delay="0.3">giantsoft Stand in the world giantsoft Stand in the world  11</strong>
								<p class="main-visual-txt2"><b>거인소프트</b> 반응형 </p>
								<p class="main-visual-txt3">언제나 처음 시작하였던 다짐과 포부를 가슴 깊이 되새기고,<br>미래를 열어가겠습니다. </p>
								<a href="" class="main-visual-more-btn">DETAIL VIEW</a>
							</div>
						</div>
					</div>
				</div>
			</article>
			<div class="main-scroll-icon">
				<span>SCROLL DOWN</span>
			</div>
			<aside class="main-visual-conuter">
				<div class="area-box"><span class="cur-num">1</span><em class="middle">/</em><span class="total-num"></span></div>
			</aside>
		</section>
		<!-- ****************** 메인 컨텐츠1 ********************** -->
		<section id="mainContent1" class="section">
			<div class="area-box">
				<div class="main-tit-box scroll-object" data-scroll="fade">
					<h3 class="main-tit cm-word-split-JS" data-splitting data-css-property="transition" data-speed="0.03" data-speed-delay="0"><strong>메인</strong> 컨텐츠 타이틀</h3>
					<p class="main-sub-tit" data-scroll="fade-up"><span>타이틀 서브 텍스트가 들어갑니다 </span> <span> span태그안에 넣으면 모바일에서 줄바꿈이 됩니다.</span></p>
				</div>
				<ul class="main-quick-menu-list clearfix scroll-object" data-scroll="fade-up">
					<li class="quick-menu-item quick-menu-item1" data-scroll="fade-up" data-scroll-delay="100">
						<a href="">
							<div class="quick-menu-item-inner">
								<p class="item-txt-box">
									<strong class="item-tit">1,234,567</strong>
									<span class="item-sub-tit">Giantsoft Stand in the world</span>
									<span class="item-sub-txt">1200이하 800이상 에서는 비율대로 줄어든다</span>
								</p>
							</div>
							<div class="over-thum"></div>
						</a>
					</li>
					<li class="quick-menu-item quick-menu-item2" data-scroll="fade-up" data-scroll-delay="250">
						<a href="">
							<div class="quick-menu-item-inner">
								<p class="item-txt-box">
									<strong class="item-tit">Giantsoft Business</strong>
									<span class="item-sub-tit">Giantsoft Stand in the world</span>
									<span class="item-sub-txt">1200이하 800이상 에서는 비율대로 줄어든다</span>
								</p>
							</div>
							<div class="over-thum"></div>
						</a>
					</li>
					<li class="quick-menu-item quick-menu-item3" data-scroll="fade-up" data-scroll-delay="400">
						<a href="">
							<div class="quick-menu-item-inner">
								<p class="item-txt-box">
									<strong class="item-tit">Giantsoft Business</strong>
									<span class="item-sub-tit">Giantsoft Stand in the world</span>
									<span class="item-sub-txt">1200이하 800이상 에서는 비율대로 줄어든다</span>
								</p>
							</div>
							<div class="over-thum"></div>
						</a>
					</li>
					<li class="quick-menu-item quick-menu-item4" data-scroll="fade-up" data-scroll-delay="550">
						<a href="">
							<div class="quick-menu-item-inner">
								<p class="item-txt-box">
									<strong class="item-tit">Giantsoft Business</strong>
									<span class="item-sub-tit">Giantsoft Stand in the world</span>
									<span class="item-sub-txt">1200이하 800이상 에서는 비율대로 줄어든다</span>
								</p>
							</div>
							<div class="over-thum"></div>
						</a>
					</li>
				</ul>
			</div>
		</section>
		<!-- ****************** 메인 컨텐츠2  ********************** -->
		<section id="mainContent2" class="section">
			<div class="area">
				<div class="main-tit-box" data-scroll>
					<h3 class="main-tit cm-word-split-JS" data-splitting data-css-property="transition" data-speed="0.03" data-speed-delay="0"><strong>메인</strong> 컨텐츠 타이틀</h3>
					<p class="main-sub-tit" data-scroll="fade-up"><span>타이틀 서브 텍스트가 들어갑니다 </span> <span> span태그안에 넣으면 모바일에서 줄바꿈이 됩니다.</span></p>
				</div>
				<ul class="main-news-list clearfix" data-scroll="fade-up">
					<li>
						<a href="">
							<span class="bbs-inner-thumb over-img"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" class="img-full" /></span>
							<div class="bbs-inner-con">
								<strong class="bbs-category">카테고리</strong>
								<strong class="bbs-tit line2">Giantsoft Sttand in the world</strong>
								<p class="bbs-content line3">
									홈페이지 제작을 어려워하던 시기를 지나 현대는 활용도와 목적에 맞는 홈페이지를 효율적으로 제작하는것이 이슈가 되고 있습니다. 보다 실용적이며 효과적인 구축하기위한 우리의 노력은 오늘도 계속되고 있습니다.
								</p>
							</div>
						</a>
					</li>
					<li>
						<a href="">
							<span class="bbs-inner-thumb over-img"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" class="img-full" /></span>
							<div class="bbs-inner-con">
								<strong class="bbs-category">카테고리</strong>
								<strong class="bbs-tit line2">Giantsoft Sttand in the world</strong>
								<p class="bbs-content line3">
									홈페이지 제작을 어려워하던 시기를 지나 현대는 활용도와 목적에 맞는 홈페이지를 효율적으로 제작하는것이 이슈가 되고 있습니다. 보다 실용적이며 효과적인 구축하기위한 우리의 노력은 오늘도 계속되고 있습니다.
								</p>
							</div>
						</a>
					</li>
					<li>
						<a href="">
							<span class="bbs-inner-thumb over-img"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" class="img-full" /></span>
							<div class="bbs-inner-con">
								<strong class="bbs-category">카테고리</strong>
								<strong class="bbs-tit">제목이 길어도 한줄로 표시됩니다</strong>
								<p class="bbs-content line3">
									홈페이지 제작을 어려워하던 시기를 지나 현대는 활용도와 목적에 맞는 홈페이지를 효율적으로 제작하는것이 이슈가 되고 있습니다. 보다 실용적이며 효과적인 구축하기위한 우리의 노력은 오늘도 계속되고 있습니다.
								</p>
							</div>
						</a>
					</li>
				</ul>
			</div>
		</section>
		<!-- ****************** 메인 컨텐츠3  ********************** -->
		<section id="mainContent3" class="section">
			<div class="area">
				<div class="main-tit-box">
					<h3 class="main-tit"><strong>메인</strong> 컨텐츠 타이틀</h3>
					<p class="main-sub-tit"><span>타이틀 서브 텍스트가 들어갑니다 </span> <span>타이틀 서브 텍스트가 들어갑니다</span></p>
				</div>
				<article class="main-gallery-rolling-con">
					<ul class="bbs-basic-gallery-con">
						<li>
							<a href="">
								<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
								<div class="gallery-txt-con">
									<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
									<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
									<span class="gal-day"><i class="material-icons">&#xE8AE;</i> 16.08.30</span>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
								<div class="gallery-txt-con">
									<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
									<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
									<span class="gal-day"><i class="material-icons">&#xE8AE;</i> 16.08.30</span>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
								<div class="gallery-txt-con">
									<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
									<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
									<span class="gal-day"><i class="material-icons">&#xE8AE;</i> 16.08.30</span>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
								<div class="gallery-txt-con">
									<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
									<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
									<span class="gal-day"><i class="material-icons">&#xE8AE;</i> 16.08.30</span>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
								<div class="gallery-txt-con">
									<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
									<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
									<span class="gal-day"><i class="material-icons">&#xE8AE;</i> 16.08.30</span>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
								<div class="gallery-txt-con">
									<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
									<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
									<span class="gal-day"><i class="material-icons">&#xE8AE;</i> 16.08.30</span>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
								<div class="gallery-txt-con">
									<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
									<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
									<span class="gal-day"><i class="material-icons">&#xE8AE;</i> 16.08.30</span>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="gallery-thum-box"><span class="gallery-thum"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></span></div>
								<div class="gallery-txt-con">
									<strong class="gal-tit">갤러리 게시판입니다 일반 게시판입니다.</strong>
									<p class="gal-txt">갤러리 기본게시판입니다. 원하는 스타일로 css 수정바랍니다 </p>
									<span class="gal-day"><i class="material-icons">&#xE8AE;</i> 16.08.30</span>
								</div>
							</a>
						</li>
					</ul>
				</article>
			</div>
		</section>
		<section id="mainFooter" class="section fp-auto-height">
			<!-- footer -->
			<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/footer.php"; ?>
			<!-- //footer -->
		</section>
	</div>
	<!-- //container -->
</div>
<!-- //wrap -->
<script>
	dep1 = 0,
	dep2 = 0;
</script>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/scripts.php"; ?>
<!-- Fullpage JS  -->
<script type="text/javascript" src="<?=$site_host?>/js/plugin/jquery.fullPage.js"></script>
<!-- // -->
<script type="text/javascript" src="<?=$site_host?>/js/main.js"></script>
<!--[if lte IE 9]>
		<article id="browserUpgradePopup">
			<div class="browser-upgrade-popup-dim"></div>
			<div class="browser-upgrade-popup-inner">
				<button class="browser-popup-close-btn" title="close" onclick="javascript:;"><i class="xi-close-thin"></i></button>
				<span class="browser-popup-caution-icon"><i class="xi-error-o"></i></span>
				<h2 class="browser-popup-tit"><b>브라우저 업데이트</b> 안내</h2>
				<p class="browser-popup-txt">현재 사용중인 브라우저는 곧 지원이 중단됩니다. <br>원활한 서비스를 제공받기 위해<br><b>보안과 속도가 강화된 브라우저로 업그레이드</b> 하시기 바랍니다.</p>
			</div>
		</article>
		<script type="text/javascript">
		$(".browser-popup-close-btn").click(function  () {
			$("#browserUpgradePopup").hide();
		}); 
		</script>
<![endif]-->
</body>
</html>
