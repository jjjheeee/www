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
		<!-- ****************** 메인 영상 ********************** -->
		<section id="mainVideo" class="section">
			<article class="background-video-wrapper">
				<div class="background-video">
					<div id="player" data-code="hYwa5TStSwo"></div> <!-- 유투브 코드값 -->
				</div>
				<div class="background-video-alternative" style="background:#000"></div><!-- 하위브라우저 대체이미지  -->
			</article>
			<div class="main-video-txt">
				<strong class="txt-01">N-BIOTEK</strong>
				<span class="txt-02">Leading Life Science</span>
			</div>
			<div class="main-scroll-icon">
				<em class="move-bar"></em><span>SCROLL DOWN</span>
			</div>
			<div class="video-playing-icon">
				<span class="txt">Video Playing</span>
				<div class="icon">
					<em class="line-01" style="height:8px"></em>
					<em class="line-02 type2" style="height:14px"></em>
					<em class="line-03 type3" style="height:21px"></em>
					<em class="line-04 type2" style="height:16px"></em>
					<em class="line-05" style="height:8px"></em>
					<em class="line-06 type3" style="height:20px"></em>
					<em class="line-07 type2" style="height:11px"></em>
				</div>
			</div>
		</section>
		<!-- ****************** 메인비주얼 ********************** -->
		<section id="mainVisual" class="section">
			<article class="main-visual-con">
				<div class="main-visual-item" data-title="Stem Cell">
					<div class="main-visual-pc-img" style="background:#fff url(<?=$site_host?>/images/main/main_visual_01.jpg) no-repeat 50% 50%;"></div>
					<div class="main-visual-m-img"><span style="background:#fff url(<?=$site_host?>/images/main/main_visual_01.jpg) no-repeat 70% 50%;"></span></div>
					<div class="main-visual-txt-con">
						<div class="main-visual-txt-box area-box">
							<div class="main-visual-txt-inner">
								<strong class="main-visual-txt1 cm-word-split-JS" data-splitting data-css-property="animation" data-speed="0.03" data-speed-delay="0.3">Stem Cell Total Solution</strong>
								<p class="main-visual-txt2">The Best Solution for Stem Cell Business</p>
							</div>
						</div>
					</div>
				</div>
				<div class="main-visual-item" data-title="Lab Equipment">
					<div class="main-visual-pc-img" style="background:#fff url(<?=$site_host?>/images/main/main_visual_02.jpg) no-repeat 50% 50%;"></div>
					<div class="main-visual-m-img"><span style="background:#fff url(<?=$site_host?>/images/main/main_visual_02.jpg) no-repeat 65% 50%;"></span></div>
					<div class="main-visual-txt-con">
						<div class="main-visual-txt-box area-box">
							<div class="main-visual-txt-inner visual-02-txt">
								<strong class="main-visual-txt1 cm-word-split-JS" data-splitting data-css-property="animation" data-speed="0.03" data-speed-delay="0.3">Large Capacity CO2 Incubator</strong>
								<p class="main-visual-txt2">Maximizing Your Cell Culture Capacity in a Big Platform</p>
								<span class="maxcell-img"><img src="<?=$site_host?>/images/main/maxcell_img.png" alt="MAXCELL" /></span>
							</div>
						</div>
					</div>
				</div>
				<div class="main-visual-item" data-title="ISSCA">
					<div class="main-visual-pc-img" style="background:#fff url(<?=$site_host?>/images/main/main_visual_03.jpg) no-repeat 50% 50%;"></div>
					<div class="main-visual-m-img"><span style="background:#fff url(<?=$site_host?>/images/main/main_visual_03.jpg) no-repeat 42% 50%;"></span></div>
					<div class="main-visual-txt-con">
						<div class="main-visual-txt-box area-box">
							<div class="main-visual-txt-inner">
								<strong class="main-visual-txt1 cm-word-split-JS" data-splitting data-css-property="animation" data-speed="0.03" data-speed-delay="0.3">International Society for Stem Cell Application</strong>
								<p class="main-visual-txt2">The World Leader in Regenerative Medicine</p>
								<a href="" class="cm-button-style06 clearfix main-visual-more-btn"><span>VISIT ISSCA</span><i class="xi-trending-flat arrow"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="main-visual-item" data-title="Cosmetics">
					<div class="main-visual-pc-img" style="background:#fff url(<?=$site_host?>/images/main/main_visual_04.jpg) no-repeat 50% 50%;"></div>
					<div class="main-visual-m-img"><span style="background:#fff url(<?=$site_host?>/images/main/main_visual_04.jpg) no-repeat 71% 50%;"></span></div>
					<div class="main-visual-txt-con">
						<div class="main-visual-txt-box area-box">
							<div class="main-visual-txt-inner">
								<strong class="main-visual-txt1 cm-word-split-JS" data-splitting data-css-property="animation" data-speed="0.03" data-speed-delay="0.3">ESFOMI Stem Cell Cosmetics</strong>
								<p class="main-visual-txt2">High Quality Anti-aging Cosmetic Containing Stem Cell Activator</p>
								<a href="" class="cm-button-style06 clearfix main-visual-more-btn"><span>VISIT ESFOMI</span><i class="xi-trending-flat arrow"></i></a>
							</div>
						</div>
					</div>
				</div>
			</article>
			<div class="main-visual-control">
				<div class="area-box clearfix">
					<div class="visual-arrow">
						<div class="scroll-down"></div>
						<div class="visual-stop"></div>
						<a href="javascript:;" class="prev"><i class="xi-long-arrow-left"></i></a>
						<a href="javascript:;" class="next"><i class="xi-long-arrow-right"></i></a>
					</div>
					<div class="visual-slide-dot"></div>
				</div>
			</div>
		</section>
		<!-- ****************** 메인 컨텐츠1 ********************** -->
		<section id="mainQuickMenu" class="section">
			<article class="main-quick-menu kwicks">
				<div class="main-quick-item item-01 scroll-object">
					<div class="bg-img"></div>
					<div class="inner-area">
						<div class="tit-con">
							<strong class="txt-01">LIFE SCIENCE EQUIPMENT</strong>
							<p class="txt-02">The best solution for Cell Culture & General Laboratory <br>Various capacity & options available</p>
						</div>
						<div class="menu-con">
							<strong class="menu-tit">Lab Equipment</strong>
							<ul class="menu-list">
								<li><a href=""><span>CO<sup>2</sup> Incubator<i class="xi-long-arrow-right"></i></span></a></li>
								<li><a href=""><span>Shaking Incubator<i class="xi-long-arrow-right"></i></span></a></li>
								<li><a href=""><span>Shaker & Roller Apparatus<i class="xi-long-arrow-right"></i></span></a></li>
								<li><a href=""><span>Water Bath & Thermal Block<i class="xi-long-arrow-right"></i></span></a></li>
								<li><a href=""><span>Concentrator<i class="xi-long-arrow-right"></i></span></a></li>
								<li><a href=""><span>Oven & Incubator<i class="xi-long-arrow-right"></i></span></a></li>
								<li><a href=""><span>Autoclave<i class="xi-long-arrow-right"></i></span></a></li>
								<li><a href=""><span>Clean Bench<i class="xi-long-arrow-right"></i></span></a></li>
								<li><a href=""><span>Stem Cell Isolation Package<i class="xi-long-arrow-right"></i></span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="main-quick-item item-02 scroll-object">
					<div class="bg-img"></div>
					<div class="inner-area">
						<div class="menu-con">
							<strong class="menu-tit">Stem Cell</strong>
							<ul class="menu-list">
								<li><a href=""><span>Stem Cell Total Solution<i class="xi-long-arrow-right"></i></span></a></li>
								<li><a href=""><span>Stempia System<i class="xi-long-arrow-right"></i></span></a></li>
								<li><a href=""><span>ISSCA<i class="xi-long-arrow-right"></i></span></a></li>
							</ul>
						</div>
						<div class="tit-con">
							<strong class="txt-01">STEM CELL BUSINESS</strong>
							<p class="txt-02">Only one stem cell total solution provider</p>
						</div>
					</div>
				</div>
			</article>
		</section>
		<!-- ****************** 메인 컨텐츠2 ********************** -->
		<section id="mainPlayVideo" class="section">
			<section class="cm-tab-container-JS">
				<article class="play-video-tab-content cm-tab-content-wrapper-JS">
					<div class="sub-tab-con" id="tabCon01">
						<article class="background-video-wrapper play-01">
							<div class="background-video">
								<div id="player2" data-code="Sk3va7fu-Mc"></div> <!-- 유투브 코드값 -->
							</div>
							<div class="background-video-alternative" style="background:#000"></div><!-- 하위브라우저 대체이미지  -->
						</article>
						<div class="play-video-txt">
							<div class="area-box scroll-object" data-scroll="fade-up">
								<strong>Company Introduction Video</strong>
								<p>ISSCA focuses on developing stem cell application, getting government approval, and finally spreading stem cell treatment. <br>
								ISSCA will definitely play the key role in leading stem cell therapy & technology.<br>
								ISSCA has wide range of activity : Conference, Symposium, Seminar, Training, Demonstration therapy, Clinical trial presentation.<br>
								Please join this event and ISSCA via www.isscalink.org <br class="pc-br">
								ISSCA has wide range of activity : Conference, Symposium, Seminar, Training, Demonstration therapy, <br class="pc-br">
								Clinical trial presentation.<br>
								Please join this event and ISSCA via www.isscalink.org</p>
								<div class="video-play-btn video-01" title="play">
									<span class="play play-btn">Play Video<i class="xi-videocam"></i></span>
									<span class="stop stop-btn">Stop Video<i class="xi-pause"></i></span>
								</div>
							</div>
						</div>
						<div class="play-video-bg" style="background:url(/images/main/play_video_bg01.jpg) no-repeat 50% 50%"></div>
					</div>
					<div class="sub-tab-con" id="tabCon02">
						<article class="background-video-wrapper play-02">
							<div class="background-video">
								<div id="player3" data-code="TAk11eksjks"></div> <!-- 유투브 코드값 -->
							</div>
							<div class="background-video-alternative" style="background:#000"></div><!-- 하위브라우저 대체이미지  -->
						</article>
						<div class="play-video-txt">
							<div class="area-box">
								<strong>20th Anniversary Video</strong>
								<p>ISSCA focuses on developing stem cell application, getting government approval, and finally spreading stem cell treatment. <br>
								ISSCA will definitely play the key role in leading stem cell therapy & technology.<br>
								ISSCA has wide range of activity : Conference, Symposium, Seminar, Training, Demonstration therapy, Clinical trial presentation.<br>
								Please join this event and ISSCA via www.isscalink.org <br class="pc-br">
								ISSCA has wide range of activity : Conference, Symposium, Seminar, Training, Demonstration therapy, <br class="pc-br">
								Clinical trial presentation.<br>
								Please join this event and ISSCA via www.isscalink.org</p>
								<div class="video-play-btn video-02" title="play">
									<span class="play">Play Video<i class="xi-videocam"></i></span>
									<span class="stop">Stop Video<i class="xi-pause"></i></span>
								</div>
							</div>
						</div>
						<div class="play-video-bg" style="background:url(/images/main/play_video_bg01.jpg) no-repeat 50% 50%"></div>
					</div>
					<div class="sub-tab-con" id="tabCon03">
						<article class="background-video-wrapper play-03">
							<div class="background-video">
								<div id="player4" data-code="sgpDVISFLgI"></div> <!-- 유투브 코드값 -->
							</div>
							<div class="background-video-alternative" style="background:#000"></div><!-- 하위브라우저 대체이미지  -->
						</article>
						<div class="play-video-txt">
							<div class="area-box">
								<strong>ISSCA Conference Promo Video</strong>
								<p>ISSCA focuses on developing stem cell application, getting government approval, and finally spreading stem cell treatment. <br>
								ISSCA will definitely play the key role in leading stem cell therapy & technology.<br>
								ISSCA has wide range of activity : Conference, Symposium, Seminar, Training, Demonstration therapy, Clinical trial presentation.<br>
								Please join this event and ISSCA via www.isscalink.org <br class="pc-br">
								ISSCA has wide range of activity : Conference, Symposium, Seminar, Training, Demonstration therapy,<br class="pc-br">
								Clinical trial presentation.<br>
								Please join this event and ISSCA via www.isscalink.org</p>
								<div class="video-play-btn video-03" title="play">
									<span class="play">Play Video<i class="xi-videocam"></i></span>
									<span class="stop">Stop Video<i class="xi-pause"></i></span>
								</div>
							</div>
						</div>
						<div class="play-video-bg" style="background:url(/images/main/play_video_bg01.jpg) no-repeat 50% 50%"></div>
					</div>
				</article>
				<aside class="play-video-tab">
					<div class="play-video-tab-list cm-tab-list-JS scroll-object" data-scroll="fade-up">
						<ul class="clearfix">
							<li class="selected"><a href="#tabCon01">Company Introduction Video<em>01</em></a></li>
							<li><a href="#tabCon02">20th Anniversary Video<em>02</em></a></li>
							<li><a href="#tabCon03">ISSCA Conference Promo Video<em>03</em></a></li>
						</ul>
					</div>
				</aside>
			</section>
		</section>
		<!-- ****************** 메인 컨텐츠3 ********************** -->
		<section id="mainNewsCon" class="section">
			<div class="area-box">
				<div class="news-con-top clearfix scroll-object" data-scroll="fade-up">
					<h3 class="tit">NEWS</h3>
					<a href="" class="more-view-btn"><span class="pc">MORE VIEW</span><span class="mb"><i class="xi-plus"></i></span></a>
				</div>
				<div class="swiper-container main-news-slide scroll-object" data-scroll="fade-up" data-scroll-delay="300">
					<div class="swiper-wrapper">
						<div class="news-item swiper-slide">
							<a href="">
								<span class="news-img over-img"><img src="<?=$site_host?>/images/test/main_news_img.jpg" alt="" /></span>
								<div class="new-txt">
									<strong class="tit text-ellipsis">The Volunteer Activities in the Activities in the</strong>
									<p class="txt line-clamp2">In April 2019, the sixth ISSCA conference was held at Mamara University in Istanbul, Turkey. The three The three In April 2019, the sixth ISSCA conference was held at Mamara University in Istanbul, Turkey. The three The three</p>
									<span class="date">2019.12.03	</span>
								</div>
							</a>
						</div>
						<div class="news-item swiper-slide">
							<a href="">
								<span class="news-img over-img"><img src="<?=$site_host?>/images/test/main_news_img2.jpg" alt="" /></span>
								<div class="new-txt">
									<strong class="tit text-ellipsis">The Volunteer Activities in the Activities in the</strong>
									<p class="txt line-clamp2">In April 2019, the sixth ISSCA conference was held at Mamara University in Istanbul, Turkey. The three The three In April 2019, the sixth ISSCA conference was held at Mamara University in Istanbul, Turkey. The three The three</p>
									<span class="date">2019.12.03	</span>
								</div>
							</a>
						</div>
						<div class="news-item swiper-slide">
							<a href="">
								<span class="news-img over-img"><img src="<?=$site_host?>/images/test/main_news_img.jpg" alt="" /></span>
								<div class="new-txt">
									<strong class="tit text-ellipsis">The Volunteer Activities in the Activities in the</strong>
									<p class="txt line-clamp2">In April 2019, the sixth ISSCA conference was held at Mamara University in Istanbul, Turkey. The three The three</p>
									<span class="date">2019.12.03	</span>
								</div>
							</a>
						</div>
						<div class="news-item swiper-slide">
							<a href="">
								<span class="news-img over-img"><img src="<?=$site_host?>/images/test/main_news_img2.jpg" alt="" /></span>
								<div class="new-txt">
									<strong class="tit text-ellipsis">The Volunteer Activities in the Activities in the</strong>
									<p class="txt line-clamp2">In April 2019, the sixth ISSCA conference was held at Mamara University in Istanbul, Turkey. The three The three</p>
									<span class="date">2019.12.03	</span>
								</div>
							</a>
						</div>
						<div class="news-item swiper-slide">
							<a href="">
								<span class="news-img over-img"><img src="<?=$site_host?>/images/test/main_news_img.jpg" alt="" /></span>
								<div class="new-txt">
									<strong class="tit text-ellipsis">The Volunteer Activities in the Activities in the</strong>
									<p class="txt line-clamp2">In April 2019, the sixth ISSCA conference was held at Mamara University in Istanbul, Turkey. The three The three</p>
									<span class="date">2019.12.03	</span>
								</div>
							</a>
						</div>
						<div class="news-item swiper-slide">
							<a href="">
								<span class="news-img over-img"><img src="<?=$site_host?>/images/test/main_news_img2.jpg" alt="" /></span>
								<div class="new-txt">
									<strong class="tit text-ellipsis">The Volunteer Activities in the Activities in the</strong>
									<p class="txt line-clamp2">In April 2019, the sixth ISSCA conference was held at Mamara University in Istanbul, Turkey. The three The three</p>
									<span class="date">2019.12.03	</span>
								</div>
							</a>
						</div>
						<div class="news-item swiper-slide">
							<a href="">
								<span class="news-img over-img"><img src="<?=$site_host?>/images/test/main_news_img.jpg" alt="" /></span>
								<div class="new-txt">
									<strong class="tit text-ellipsis">The Volunteer Activities in the Activities in the</strong>
									<p class="txt line-clamp2">In April 2019, the sixth ISSCA conference was held at Mamara University in Istanbul, Turkey. The three The three</p>
									<span class="date">2019.12.03	</span>
								</div>
							</a>
						</div>
						<div class="news-item swiper-slide">
							<a href="">
								<span class="news-img over-img"><img src="<?=$site_host?>/images/test/main_news_img.jpg" alt="" /></span>
								<div class="new-txt">
									<strong class="tit text-ellipsis">The Volunteer Activities in the Activities in the</strong>
									<p class="txt line-clamp2">In April 2019, the sixth ISSCA conference was held at Mamara University in Istanbul, Turkey. The three The three</p>
									<span class="date">2019.12.03	</span>
								</div>
							</a>
						</div>
					</div>
					<div class="news-slide-arrow clearfix">
						<div class="prev news-arrow"><i class="xi-long-arrow-left"></i></div>
						<div class="next news-arrow"><i class="xi-long-arrow-right"></i></div>
					</div>
					<div class="swiper-scrollbar"></div>
				</div>

			</div>
		</section>
		<!-- ****************** 메인 컨텐츠4 ********************** -->
		<section id="globalMapCon" class="section">
			<div class="global-area area-box scroll-object">
				<div class="global-map-con" >
					<img src="<?=$site_host?>/images/main/global_map.png" alt="세계지도" class="global-map-bg"/>
					<div class="global-nation-box" data-scroll="fade">
						<div class="nation-circle on" data-num="1">
							<div class="effect-circle" style="margin-top:-3%; margin-left:-13.1%"><span></span><span></span><span></span><span></span><i></i></div>
							<img src="<?=$site_host?>/images/main/global_map_asia.png" alt="Asia" />
						</div>
						<div class="nation-circle" data-num="2">
							<div class="effect-circle" style="margin-top:-3%; margin-left:-33%"><span></span><span></span><span></span><span></span><i></i></div>
							<img src="<?=$site_host?>/images/main/global_map_mideast.png" alt="Asia" />
						</div>
						<div class="nation-circle" data-num="3">
							<div class="effect-circle" style="margin-top:-13%; margin-left:27.9%"><span></span><span></span><span></span><span></span><i></i></div>
							<img src="<?=$site_host?>/images/main/global_map_north_america.png" alt="Asia" />
						</div>
						<div class="nation-circle" data-num="4">
							<div class="effect-circle" style="margin-top:9%; margin-left:38%"><span></span><span></span><span></span><span></span><i></i></div>
							<img src="<?=$site_host?>/images/main/global_map_south_america.png" alt="Asia" />
						</div>
						<div class="nation-circle" data-num="5">
							<div class="effect-circle" style="margin-top:-8%; margin-left:-39%"><span></span><span></span><span></span><span></span><i></i></div>
							<img src="<?=$site_host?>/images/main/global_map_europe.png" alt="Asia" />
						</div>
						<div class="nation-circle" data-num="6">
							<div class="effect-circle" style="margin-top:3%; margin-left:-40%"><span></span><span></span><span></span><span></span><i></i></div>
							<img src="<?=$site_host?>/images/main/global_map_africa.png" alt="Asia" />
						</div>
					</div>
				</div>
				<div class="global-country font-roboto">
					<div data-scroll="fade-up" data-scroll-delay="200">
						<div class="lf-txt">
							<em class="txt-01">Global Distributors in</em>
							<span class="txt-02">64 Countries</span>
							<span class="txt-03">110</span>
						</div>
						<div class="rt-txt">
							<ul class="country-list">
								<li data-num="1" class="on clearfix">
									<span class="country">Asia</span>
									<span class="num">15</span>
								</li>
								<li data-num="2" class="clearfix">
									<span class="country">Middle East</span>
									<span class="num">9</span>
								</li>
								<li data-num="3" class="clearfix">
									<span class="country">North America</span>
									<span class="num">3</span>
								</li>
								<li data-num="4" class="clearfix">
									<span class="country">South America</span>
									<span class="num">6</span>
								</li>
								<li data-num="5" class="clearfix">
									<span class="country">Europe</span>
									<span class="num">26</span>
								</li>
								<li data-num="6" class="clearfix">
									<span class="country">Africa</span>
									<span class="num">5</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- ****************** 메인 컨텐츠5 ********************** -->
		<section id="contactFooter" class="section fp-auto-height">
			<div class="main-contact-con">
				<div class="area-box scroll-object" data-scroll="fade-up">
					<p class="txt">Ask anything, <br>
					from STEM CELL TOTAL SOLUTION <br>
					to  PRODUCT INQUIRY
					</p>
					<a href="" class="contact-btn">Contact us<i class="xi-pen"></i></a>
				</div>
			</div>
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



<script type="text/javascript">
/* 유투브 API 가져오기 */ 
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

//var done = false;
var player;
var playerID = $("#player").data("code");
var playerInfoList = [{id: 'player2', videoId: 'Sk3va7fu-Mc'}, {id: 'player3', videoId: 'TAk11eksjks'}, {id: 'player4', videoId: 'sgpDVISFLgI'}];

ieYoutubeAlt();

function onYouTubeIframeAPIReady() {
	player = new YT.Player('player', {
		playerVars: {
		'autoplay': 1,
		'controls': 0,
		'autohide': 1,
		'wmode': 'opaque',
		'showinfo': 0,
		'loop': 1,
		'mute':1,
		'playsinline':1,
		'playlist': playerID	// Youtube ID
		},
		videoId: playerID,	// Youtube ID
		events: {
			'onReady': onPlayerReady,
			'onStateChange': onPlayerStateChange
		}
	});

	if (typeof playerInfoList === 'undefined') return;
    for (var i = 0; i < playerInfoList.length; i++) {
        var curplayer = createPlayer(playerInfoList[i]);
        players[i] = curplayer;
    }
}

var players = new Array();
function createPlayer(playerInfo) {
    return new YT.Player(playerInfo.id, {
        playerVars: {
		'autoplay': 0,
		'controls': 0,
		'autohide': 1,
		'wmode': 'opaque',
		'showinfo': 0,
		'loop': 1,
		'mute':0,
		'playsinline':1,
		'start':0
		},
		videoId: playerInfo.videoId,
    });
}


function onPlayerStateChange(event) {
	// event.data = 1(재생), 2(일시정지), 0(정지)
	if (event.data === 1) {	// 재생
		$(".background-video").addClass("start");
		$(".background-video iframe").attr('data-keepplaying',''); // 풀페이지에서 영상 계속 재생 (섹션이동영향x)
	}
}
function onPlayerReady(event) {
	event.target.playVideo();
}
function ieYoutubeAlt () { 
	/* 하위브라우저 대체이미지로 변경 */ 
	if ( ieVersionCheck() != false && ieVersionCheck() < 10 ) {
		$(".background-video, .visual-circle-box, .visual-line-box").hide();
		$(".background-video-alternative").show();
	}
}

/* play video 섹션 */
$(document).ready(function () {
	$(".video-play-btn .play").click(function  () {	
		$(".background-video-wrapper").addClass("play");
		$(this).parent().parent().parent().prev().addClass("play");
		$(this).parent().parent().parent().next(".play-video-bg").delay(200).fadeOut(1000);
		$(this).parent().addClass("play-video");
	});

	$(".play-video-tab li a, .video-play-btn .stop").click(function  () {		
		$(players).each(function (i) {
			this.pauseVideo();
		});
		$(".video-play-btn").removeClass("play-video");
	});

    $('.video-play-btn.video-01 .play').click(function () {
        players[0].playVideo();
    });
	$('.video-play-btn.video-02 .play').click(function () {
        players[1].playVideo();
    });
	$('.video-play-btn.video-03 .play').click(function () {
        players[2].playVideo();
    });
})


</script>

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
