<?
echo $_SERVER['HTTP_HOST'];
echo $_SERVER["DOCUMENT_ROOT"];
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

<style>
	.main-quick-item.item-01 .bg-img {background: url("/images/main/main_quick_bg01_new.jpg") 50% 50% no-repeat;}
	.main-quick-item.item-01 .menu-con {bottom: 46.464%;}

	@media all and (max-width:800px){
		.main-quick-item.item-01 .menu-con {bottom: 8%;}
	}
</style>

<!-- code -->
<div id="wrap">
	<!-- header -->
	<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/header.php"; ?>
	<!-- //header -->
	<!-- container -->
	<div id="fullpage">
		<!-- ****************** 메인 영상 ********************** -->
		<section id="mainVideo" class="section fp-auto-height">
			<article class="background-video-wrapper">
				<div class="background-video">
					<div id="playerMain" class="pc-ver" data-code="hYwa5TStSwo"></div> <!-- pc 유투브 코드값 -->
					<div id="playerMainMobile" class="m-ver" data-code="SI1Aw7qJ64w"></div> <!-- mobile 유투브 코드값 -->
				</div>
				<div class="background-video-alternative" style="background:#000"></div><!-- 하위브라우저 대체이미지  -->
			</article>
			<div class="main-video-txt">
				<p class="txt-01 cm-word-split-JS up-effect-txt" data-splitting data-css-property="animation" data-speed="0" data-speed-delay="0.2">엔바이오텍</p>
				<p class="txt-02 cm-word-split-JS up-effect-txt" data-splitting data-css-property="animation" data-speed="0" data-speed-delay="0.6">생명과학의 선두주자</p>
			</div>
			<div class="main-scroll-icon">
				<em class="move-bar"></em><span>아래로 스크롤</span>
			</div>
			<div class="video-playing-icon">
				<span class="txt">동영상재생</span>
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
				
				<?
				$rs = $db->select("cs_banner","where cate='1' and display='1' and lang='$lang' order by idx asc");
				while($row = mysqli_fetch_object($rs)){

					if($row->bbs_file2){
						$mbbs_file = $row->bbs_file2;
					} else {
						$mbbs_file = $row->bbs_file;
					}
				?>
				<div class="main-visual-item" data-title="<?=$row->subject?>">
					<div class="main-visual-pc-img" style="background:#fff url(/data/bbsData/<?=$row->bbs_file?>) no-repeat 50% 50%;"></div>
					<div class="main-visual-m-img"><span style="background:#fff url(/data/bbsData/<?=$mbbs_file?>) no-repeat 50% 50%;"></span></div>
					<div class="main-visual-txt-con">
						<div class="main-visual-txt-box area-box">
							<div class="main-visual-txt-inner">
								<? if($row->ctext1){ ?>
								<strong class="main-visual-txt1 cm-word-split-JS up-effect-txt" data-splitting data-css-property="animation" data-speed="0" data-speed-delay="0.2"><?=$row->ctext1?></strong>
								<? } ?>
								<? if($row->ctext2){ ?>
								<p class="main-visual-txt2 cm-word-split-JS up-effect-txt" data-splitting data-css-property="animation" data-speed="0" data-speed-delay="0.6"><?=$row->ctext2?></p>
								<? } ?>
								<? if($row->bbs_file3){ ?>
								<span class="maxcell-img"><img src="/data/bbsData/<?=$row->bbs_file3?>" alt="MAXCELL" /></span>
								<? } ?>
								<? if($row->ctext3){ ?>
								<div class="main-visual-btn up-effect-txt"><a href="<? if($row->link_url){ ?><?=$row->link_url?><? } else { ?>#none<? } ?>" <? if($row->link_url and $row->link_open==1){ ?>target="_blank"<? } ?> class="cm-button-style06 clearfix main-visual-more-btn"><span><?=$row->ctext3?></span><i class="xi-trending-flat arrow"></i></a></div>
								<? } ?>
							</div>
						</div>
					</div>
				</div>
				<? } ?>
				
				<!-- <div class="main-visual-item" data-title="Stem Cell">
					<div class="main-visual-pc-img" style="background:#fff url(<?=$site_host?>/images/main/main_visual_01.jpg) no-repeat 50% 50%;"></div>
					<div class="main-visual-m-img"><span style="background:#fff url(<?=$site_host?>/images/main/main_visual_01.jpg) no-repeat 70% 50%;"></span></div>
					<div class="main-visual-txt-con">
						<div class="main-visual-txt-box area-box">
							<div class="main-visual-txt-inner">
								<strong class="main-visual-txt1 cm-word-split-JS up-effect-txt" data-splitting data-css-property="animation" data-speed="0" data-speed-delay="0.2">Stem Cell Total Solution</strong>
								<p class="main-visual-txt2 cm-word-split-JS up-effect-txt" data-splitting data-css-property="animation" data-speed="0" data-speed-delay="0.6">The Best Solution for Stem Cell Business</p>
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
								<strong class="main-visual-txt1 cm-word-split-JS up-effect-txt" data-splitting data-css-property="animation" data-speed="0" data-speed-delay="0.2">Large Capacity CO2 Incubator</strong>
								<p class="main-visual-txt2 cm-word-split-JS up-effect-txt" data-splitting data-css-property="animation" data-speed="0" data-speed-delay="0.6">Maximizing Your Cell Culture Capacity in a Big Platform</p>
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
								<strong class="main-visual-txt1 cm-word-split-JS up-effect-txt" data-splitting data-css-property="animation" data-speed="0" data-speed-delay="0.2">International Society for Stem Cell Application</strong>
								<p class="main-visual-txt2 cm-word-split-JS up-effect-txt" data-splitting data-css-property="animation" data-speed="0" data-speed-delay="0.6">The World Leader in Regenerative Medicine</p>
								<div class="main-visual-btn up-effect-txt"><a href="http://www.isscalink.org" target="_blank" class="cm-button-style06 clearfix main-visual-more-btn"><span>VISIT ISSCA</span><i class="xi-trending-flat arrow"></i></a></div>
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
								<strong class="main-visual-txt1 cm-word-split-JS up-effect-txt" data-splitting data-css-property="animation" data-speed="0" data-speed-delay="0.2">ESFOMI Stem Cell Cosmetics</strong>
								<p class="main-visual-txt2 cm-word-split-JS up-effect-txt" data-splitting data-css-property="animation" data-speed="0" data-speed-delay="0.6">High Quality Anti-aging Cosmetic Containing Stem Cell Activator</p>
								<div class="main-visual-btn up-effect-txt"><a href="https://www.esfomi.co.kr/" target="_blank" class="cm-button-style06 clearfix main-visual-more-btn"><span>VISIT ESFOMI</span><i class="xi-trending-flat arrow"></i></a></div>
							</div>
						</div>
					</div>
				</div> -->
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
							<strong class="txt-01">Total Solution Provider</strong>
							<p class="txt-02">축척된 관련 노하우를 활용한 <br> A to Z 컨설팅 제공</p>
						</div>
						<div class="menu-con">
							<strong class="menu-tit">첨단 재생 의료</strong>
							<ul class="menu-list">
								<li><a href="<?=$site_url?>/reproduction/solution.php"><span>첨단 재생 의료란?<i class="xi-long-arrow-right"></i></span></a></li>
								<li><a href="<?=$site_url?>/reproduction/solution.php"><span>Total Solution<i class="xi-long-arrow-right"></i></span></a></li>
								<!-- <li><a href="<?=$site_url?>/equipment/equipment_list.php?part_idx=3"><span>쉐이커 및 롤러 장치<i class="xi-long-arrow-right"></i></span></a></li>
								<li><a href="<?=$site_url?>/equipment/equipment_list.php?part_idx=4"><span>항온수조 및 히팅블럭<i class="xi-long-arrow-right"></i></span></a></li>
								<li><a href="<?=$site_url?>/equipment/equipment_list.php?part_idx=5"><span>농축기<i class="xi-long-arrow-right"></i></span></a></li>
								<li><a href="<?=$site_url?>/equipment/equipment_list.php?part_idx=6"><span>건조기 및 배양기<i class="xi-long-arrow-right"></i></span></a></li>
								<li><a href="<?=$site_url?>/equipment/equipment_list.php?part_idx=7"><span>고압증기 멸균기<i class="xi-long-arrow-right"></i></span></a></li>
								<li><a href="<?=$site_url?>/equipment/equipment_list.php?part_idx=8"><span>클린벤치<i class="xi-long-arrow-right"></i></span></a></li>
								<li><a href="<?=$site_url?>/equipment/equipment_list.php?part_idx=9"><span>줄기세포 분리 패키지<i class="xi-long-arrow-right"></i></span></a></li>
								<li><a href="<?=$site_url?>/equipment/validation.php"><span>밸리데이션<i class="xi-long-arrow-right"></i></span></a></li> -->
							</ul>
							<a href="<?=$site_url?>/equipment/equipment_intro.php" class="cm-button-style06 clearfix mb-quick-btn"><span>Go Lab Equipment</span><i class="xi-trending-flat arrow"></i></a>
						</div>
					</div>
				</div>
				<div class="main-quick-item item-02 scroll-object">
					<div class="bg-img"></div>
					<div class="inner-area">
						<div class="menu-con">
							<strong class="menu-tit">줄기세포</strong>
							<ul class="menu-list">
								<li><a href="<?=$site_url?>/stemcell/about.php"><span>줄기세포란?<i class="xi-long-arrow-right"></i></span></a></li>
								<li><a href="<?=$site_url?>/stemcell/rnd.php"><span>R&D 센터<i class="xi-long-arrow-right"></i></span></a></li>
								<li><a href="<?=$site_url?>/stemcell/business/intro.php"><span>줄기세포 사업<i class="xi-long-arrow-right"></i></span></a></li>
								<li><a href="<?=$site_url?>/stemcell/issca.php"><span>ISSCA<i class="xi-long-arrow-right"></i></span></a></li>
							</ul>
							<a href="<?=$site_url?>/stemcell/about.php" class="cm-button-style06 clearfix mb-quick-btn"><span>Go Stem Cell</span><i class="xi-trending-flat arrow"></i></a>
						</div>
						<div class="tit-con">
							<strong class="txt-01">줄기세포 사업</strong>
							<p class="txt-02">유일한 줄기세포 토탈 솔루션 제공업체</p>
						</div>
					</div>
				</div>
			</article>
		</section>
		<!-- ****************** 메인 컨텐츠2 ********************** -->
		<section id="mainPlayVideo" class="section">
			<section class="cm-tab-container-JS" data-scroll="">
				<article class="play-video-tab-content cm-tab-content-wrapper-JS">
					<!-- 20th Anniversary Video -->
					<div class="sub-tab-con video-con-01" id="tabCon01" data-video="0">
						<div class="play-video-txt">
							<div class="area-box">
								<strong class="no-effect">창립 20주년 <br>기념 동영상</strong>
								<div class="txt">
									<p>엔바이오텍의 창립 20주년을 축하합니다!</p>
									<p>2000년 3월 13일 회사를 창립한 이후,<br class="pc-br"> 우리는 여러 협력사들과 함께 성장해 왔습니다.<br>
									엔바이오텍의 모든 협력사에 감사의 뜻을 전하며<br class="pc-br"> 계속해서 함께 성장할 수 있길 바랍니다!</p>
								</div>
								<!-- <div class="video-play-btn video-02" title="play" data-video="1">
									<span class="play">Play Video<i class="xi-videocam"></i></span>
									<span class="stop">Stop Video<i class="xi-pause"></i></span>
								</div> -->
							</div>
						</div>
						<article class="background-video-wrapper play-01">
							<div class="background-video">
								<div id="player2" data-code="TAk11eksjks"></div> <!-- 유투브 코드값 -->
							</div>
							<div class="background-video-alternative" style="background:#000"></div><!-- 하위브라우저 대체이미지  -->
						</article>
						<div class="visual-circle-box video-play-btn video-01" title="play" data-video="0">
							<div id="defaultBar" class="circle-box circle1">
								<svg viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg">
									<circle class="circle" cx="64" cy="64" r="64" id="progressBar"></circle>
								</svg>
								<button class="pause-btn stop"><i class="xi-pause"></i></button>
								<button class="play-btn play"><i class="xi-play"></i></button>
							</div>
						</div>
						<div class="play-video-bg video-bg-01" style="background:url(https://img.youtube.com/vi/TAk11eksjks/maxresdefault.jpg) no-repeat 50% 50%"></div>
						<div class="video-dim"></div>
					</div>
					<!-- // -->
					<!-- Company Introduce Video -->
					<div class="sub-tab-con video-con-02" id="tabCon02" data-video="1">
						<div class="play-video-txt start">
							<div class="area-box">
								<strong class="cm-word-split-JS up-effect-txt-02" data-splitting>회사 소개 <br>동영상</strong>
								<div class="txt up-effect-txt-02">
									<div class="effect-inner">
										<p>엔바이오텍은 바이오 클린룸 건축, <br class="pc-br">줄기세포 장비 설치, 기술 이전, 소모품 및 줄기세포 화장품 등 <br class="pc-br">줄기세포를 이용한 토탈 솔루션을 제공합니다.</p>
										<p>당사는 고객 여러분의 건강과 뷰티, 그리고 안티에이징을<br class="pc-br"> 관리해드릴 준비가 완벽하게 되어 있습니다.<br>앞으로도 엔바이오텍은 줄기세포 치료와 최첨단 바이오
										<br class="pc-br">기술을 통해 재생의료를 선도해 갈 것입니다.</p>
										<!-- <p class="cm-word-split-JS up-effect-txt-02" data-splitting></p>-->
									</div>
								</div>
								<!-- <div class="up-effect-txt-02">
									<div class="video-play-btn video-01 play-video effect-inner" title="play" data-video="0">
										<span class="play play-btn">Play Video<i class="xi-videocam"></i></span>
										<span class="stop stop-btn">Stop Video<i class="xi-pause"></i></span>
									</div>
								</div> -->
							</div>
						</div>
						<article class="background-video-wrapper play-02">
							<div class="background-video">
								<div id="player3" data-code="Sk3va7fu-Mc"></div> <!-- 유투브 코드값 -->
							</div>
							<div class="background-video-alternative" style="background:#000"></div><!-- 하위브라우저 대체이미지  -->
						</article>
						<div class="visual-circle-box video-play-btn video-02" title="play" data-video="1">
							<div id="defaultBar" class="circle-box circle2">
								<svg viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg">
									<circle class="circle" cx="64" cy="64" r="64" id="progressBar"></circle>
								</svg>
								<button class="pause-btn stop"><i class="xi-pause"></i></button>
								<button class="play-btn play"><i class="xi-play"></i></button>
							</div>
						</div>
						<div class="play-video-bg " style="background:url(https://img.youtube.com/vi/Sk3va7fu-Mc/maxresdefault.jpg) no-repeat 50% 50%"></div>
						<div class="video-dim"></div>
					</div>
					<!-- // -->
					<div class="sub-tab-con video-con-03" id="tabCon03" data-video="2">
						<div class="play-video-txt">
							<div class="area-box">
								<strong class="no-effect">ISSCA 컨퍼런스 <br>홍보 영상</strong>
								<div class="txt">
									<p>ISSCA는 줄기세포의 응용 분야를 개발하고 정부의 승인을 획득하여<br class="pc-br"> 최종적으로 줄기세포 치료를 확산하는 데 중점을 두고 있습니다.
									<br class="pc-br">ISSCA는 줄기세포 치료와 기술을 선도하는데 핵심적 역할을 할 것입니다.</span>
									<p>ISSCA에서는 컨퍼런스, 심포지엄, 세미나,<br class="pc-br"> 교육, 시연 치료, 임상시험 소개 등 다양한 활동을 하고 있습니다.</span>
									<p><a href="https://issca.net/" target="_blank">www.issca.net</a>를 통해 이 행사와 ISSCA에 동참하세요.</p>
								</div>
								<!-- <div class="video-play-btn video-03" title="play" data-video="2">
									<span class="play">Play Video<i class="xi-videocam"></i></span>
									<span class="stop">Stop Video<i class="xi-pause"></i></span>
								</div> -->
							</div>
						</div>
						<article class="background-video-wrapper play-03">
							<div class="background-video">
								<div id="player4" data-code="sgpDVISFLgI"></div> <!-- 유투브 코드값 -->
							</div>
							<div class="background-video-alternative" style="background:#000"></div><!-- 하위브라우저 대체이미지  -->
						</article>
						<div class="visual-circle-box video-play-btn video-03" title="play" data-video="2">
							<div id="defaultBar" class="circle-box circle3">
								<svg viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg">
									<circle class="circle" cx="64" cy="64" r="64" id="progressBar"></circle>
								</svg>
								<button class="pause-btn stop"><i class="xi-pause"></i></button>
								<button class="play-btn play"><i class="xi-play"></i></button>
							</div>
						</div>
						<div class="play-video-bg" style="background:url(https://img.youtube.com/vi/sgpDVISFLgI/maxresdefault.jpg) no-repeat 50% 50%"></div>
						<div class="video-dim"></div>
					</div>
				</article>
				<aside class="play-video-tab">
					<strong class="tit up-effect-txt"><em>Promo Video Playlist</em></strong>
					<div class="play-video-tab-list cm-tab-list-JS scroll-object" data-scroll="">
						<ul class="clearfix">
							<li class="selected up-effect-txt"><a href="#tabCon01" class="video-01 effect-inner" data-video="0">창립 20주년 기념 동영상<em>01</em></a></li>
							<li class="up-effect-txt"><a href="#tabCon02" class="video-02 effect-inner" data-video="1">회사 소개 동영상<em>02</em></a></li>
							<li class="up-effect-txt"><a href="#tabCon03" class="video-03 effect-inner" data-video="2">ISSCA 컨퍼런스 홍보 영상<em>03</em></a></li>
						</ul>
					</div>
				</aside>
			</section>
		</section>
		<!-- ****************** 메인 컨텐츠3 ********************** -->
		<section id="mainNewsCon" class="section">
			<div class="area-box">
				<div class="news-con-top clearfix scroll-object" data-scroll="">
					<h3 class="tit cm-word-split-JS up-effect-txt" data-splitting data-css-property="animation" data-speed="0" data-speed-delay="0">NEWS</h3>
					<div class="more-view-btn up-effect-txt">
						<a href="<?=$site_url?>/customer/news.php" class="effect-inner"><span class="pc">더보기</span><span class="mb"><i class="xi-plus"></i></span></a>
					</div>
				</div>
				<div class="swiper-container main-news-slide scroll-object" data-scroll="fade-up" data-scroll-delay="300">
					<div class="swiper-wrapper">
						<?
						$rs = $db->select("cs_bbs_data","where code='news' and lang='$lang' order by ranking asc, reg_date desc, idx desc");
						while($row = mysqli_fetch_object($rs)){
						?>
						<div class="news-item swiper-slide">
							<a href="<?=$site_url?>/customer/news.php?bgu=view&idx=<?=$row->idx?>">
								<span class="news-img over-img">
									<? if($row->sum_file){ ?>
									<img src="/data/bbsData/<?=$row->sum_file?>" alt="" />
									<? } else { ?>
									<span class="no-image"><img src="<?=$site_host?>/favicon.png" alt="No Image" class="img-center"></span>
									<? } ?>
								</span>
								<div class="new-txt">
									<strong class="tit text-ellipsis"><?=$row->subject?></strong>
									<p class="txt line-clamp2"><?=strip_tags($row->content)?></p>
									<span class="date"><?=substr($row->reg_date,0,10)?></span>
								</div>
							</a>
						</div>
						<? } ?>
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
							<div class="effect-circle" style="margin-top:-3%; margin-left:-13.1%" title="한국"><span></span><span></span><span></span><span></span><i></i></div>
							<div class="effect-circle" style="margin-top:-4%; margin-left:-10.2%" title="일본"><span></span><span></span><span></span><span></span><i></i></div>
							<div class="effect-circle" style="margin-top:-2%; margin-left:-18.2%" title="중국"><span></span><span></span><span></span><span></span><i></i></div>
							<!-- <div class="effect-circle" style="margin-top:4%; margin-left:-18%" title="베트남"><span></span><span></span><span></span><span></span><i></i></div> -->
							<div class="effect-circle" style="margin-top:6.5%; margin-left:-19.4%" title="싱가포르"><span></span><span></span><span></span><span></span><i></i></div>
							<div class="effect-circle" style="margin-top:3%; margin-left:-20%" title="태국"><span></span><span></span><span></span><span></span><i></i></div>
							<div class="effect-circle" style="margin-top:0.5%; margin-left:-14.9%" title="대만"><span></span><span></span><span></span><span></span><i></i></div>
							<div class="effect-circle" style="margin-top:14.5%; margin-left:-11.9%" title="호주"><span></span><span></span><span></span><span></span><i></i></div>
							<div class="effect-circle" style="margin-top:19.5%; margin-left:-1.9%" title="뉴질렌드"><span></span><span></span><span></span><span></span><i></i></div>
							<img src="<?=$site_host?>/images/main/global_map_asia.png" alt="Asia" class="pc"/>
							<img src="<?=$site_host?>/images/main/global_map_asia_m.png" alt="Asia" class="mobile left"/>
						</div>
						<div class="nation-circle" data-num="2">
							<div class="effect-circle" style="margin-top:-2.2%; margin-left:-28.5%" title="아프가니스탄"><span></span><span></span><span></span><span></span><i></i></div>
							<div class="effect-circle" style="margin-top:0.8%; margin-left:-33.5%" title="사우디아라비아"><span></span><span></span><span></span><span></span><i></i></div>
							<!-- <div class="effect-circle mb-no" style="margin-top:0.6%; margin-left:-31%" title="UAE"><span></span><span></span><span></span><span></span><i></i></div> -->
							<div class="effect-circle mb-no" style="margin-top:-2%; margin-left:-31%" title="이란"><span></span><span></span><span></span><span></span><i></i></div>
							<div class="effect-circle" style="margin-top:-1.8%; margin-left:-35.5%" title="요르단"><span></span><span></span><span></span><span></span><i></i></div>
							<div class="effect-circle" style="margin-top:3%; margin-left:-33%" title="예멘"><span></span><span></span><span></span><span></span><i></i></div>
							<img src="<?=$site_host?>/images/main/global_map_mideast.png" alt="Middle East"  class="pc"/>
							<img src="<?=$site_host?>/images/main/global_map_mideast_m.png" alt="Middle East" class="mobile" />
						</div>
						<div class="nation-circle" data-num="3">
							<div class="effect-circle" style="margin-top:-4.5%; margin-left:27.9%" title="미국"><span></span><span></span><span></span><span></span><i></i></div>
							<div class="effect-circle" style="margin-top:-11.5%; margin-left:24.9%" title="캐나다"><span></span><span></span><span></span><span></span><i></i></div>
							<div class="effect-circle" style="margin-top:0.5%; margin-left:27.9%" title="멕시코"><span></span><span></span><span></span><span></span><i></i></div>
							<img src="<?=$site_host?>/images/main/global_map_north_america.png" alt="North America"  class="pc"/>
							<img src="<?=$site_host?>/images/main/global_map_north_america_m.png" alt="North America"  class="mobile left"/>
						</div>
						<div class="nation-circle" data-num="4">
							<div class="effect-circle" style="margin-top:15%; margin-left:35.6%" title="칠레"><span></span><span></span><span></span><span></span><i></i></div>
							<div class="effect-circle" style="margin-top:6%; margin-left:34.6%" title="콜롬비아"><span></span><span></span><span></span><span></span><i></i></div>
							<div class="effect-circle" style="margin-top:7.9%; margin-left:33.6%" title="에콰도르"><span></span><span></span><span></span><span></span><i></i></div>
							<div class="effect-circle" style="margin-top:13.9%; margin-left:38.6%" title="파라과이"><span></span><span></span><span></span><span></span><i></i></div>
							<div class="effect-circle" style="margin-top:16.9%; margin-left:39%" title="우루과이"><span></span><span></span><span></span><span></span><i></i></div>
							<div class="effect-circle" style="margin-top:10%; margin-left:34.5%" title="페루"><span></span><span></span><span></span><span></span><i></i></div>
							<img src="<?=$site_host?>/images/main/global_map_south_america.png" alt="South America"  class="pc"/>
							<img src="<?=$site_host?>/images/main/global_map_south_america_m.png" alt="South America" class="mobile" />
						</div>
						<div class="nation-circle" data-num="5">
							<div class="effect-circle" style="margin-top:-9%; margin-left:-39.5%" title="폴란드"><span></span><span></span><span></span><span></span><i></i></div>
							<div class="effect-circle mb-no" style="margin-top:-8.5%; margin-left:-41.5%" title="독일"><span></span><span></span><span></span><span></span><i></i></div>
							<div class="effect-circle" style="margin-top:-4.5%; margin-left:-45%" title="스페인"><span></span><span></span><span></span><span></span><i></i></div>
							<div class="effect-circle" style="margin-top:-5.5%; margin-left:-41%" title="이탈리아"><span></span><span></span><span></span><span></span><i></i></div>
							<div class="effect-circle" style="margin-top:-12.5%; margin-left:-41.8%" title="노르웨이"><span></span><span></span><span></span><span></span><i></i></div>
							<div class="effect-circle" style="margin-top:-13%; margin-left:-37.7%" title="핀란드"><span></span><span></span><span></span><span></span><i></i></div>
							<div class="effect-circle mb-no" style="margin-top:-13.5%; margin-left:-40.3%" title="스웨덴"><span></span><span></span><span></span><span></span><i></i></div>
							<img src="<?=$site_host?>/images/main/global_map_europe.png" alt="Europe"  class="pc"/>
							<img src="<?=$site_host?>/images/main/global_map_europe_m.png" alt="Europe"  class="mobile right"/>
						</div>
						<div class="nation-circle" data-num="6">
							<div class="effect-circle" style="margin-top:-0.3%; margin-left:-37%" title="이집트"><span></span><span></span><span></span><span></span><i></i></div>
							<div class="effect-circle" style="margin-top:4.7%; margin-left:-42%" title="나이지리아"><span></span><span></span><span></span><span></span><i></i></div>
							<div class="effect-circle" style="margin-top:-2.1%; margin-left:-45.5%" title="모로코"><span></span><span></span><span></span><span></span><i></i></div>
							<div class="effect-circle" style="margin-top:6.9%; margin-left:-36.5%" title="우간다"><span></span><span></span><span></span><span></span><i></i></div>
							<div class="effect-circle" style="margin-top:-2.8%; margin-left:-41.9%" title="튀니지"><span></span><span></span><span></span><span></span><i></i></div>
							<img src="<?=$site_host?>/images/main/global_map_africa.png" alt="Africa" class="pc" />
							<img src="<?=$site_host?>/images/main/global_map_africa_m.png" alt="Africa" class="mobile right" />
						</div>
					</div>
				</div>
				<div class="global-country font-roboto" >
					<div data-scroll="fade-up"> 
						<div class="lf-txt">
							<p class="txt-02 up-effect-txt"><span class="effect-inner">세계 64개국</span></p>
							<p class="txt-01 up-effect-txt"><span class="effect-inner">약 110여개의 대리점</span></p>
							<p class="txt-03 up-effect-txt"><span class="effect-inner">110</span></p>
						</div>
						<div class="rt-txt up-effect-txt">
							<ul class="country-list effect-inner">
								<li data-num="1" class="on clearfix">
									<span class="country">아시아</span>
									<span class="num">15</span>
								</li>
								<li data-num="2" class="clearfix">
									<span class="country">중동</span>
									<span class="num">9</span>
								</li>
								<li data-num="3" class="clearfix">
									<span class="country">북미</span>
									<span class="num">3</span>
								</li>
								<li data-num="4" class="clearfix">
									<span class="country">남미</span>
									<span class="num">6</span>
								</li>
								<li data-num="5" class="clearfix">
									<span class="country">유럽</span>
									<span class="num">26</span>
								</li>
								<li data-num="6" class="clearfix">
									<span class="country">아프리카</span>
									<span class="num">5</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ****************** 메인 컨텐츠5 ********************** -->
		<section id="contactFooter" class="section">
			<div class="main-contact-con">
				<div class="area-box scroll-object" data-scroll="">
					<p class="txt cm-word-split-JS up-effect-txt" data-splitting data-css-property="animation" data-speed="0" data-speed-delay="0">무엇이든 물어보세요. </p>
					<p class="txt txt02 cm-word-split-JS up-effect-txt" data-splitting data-css-property="animation" data-speed="0" data-speed-delay="0">
						줄기세포 토탈 솔루션<em class="fw300">에서부터</em><br> 제품 문의<em class="fw300">까지</em> 
					</p>
					<div class="up-effect-txt contact-btn " data-splitting data-css-property="animation" data-speed="0" data-speed-delay="0">
						<a href="<?=$site_url?>/customer/inquiry.php" class="effect-inner">문의하기<!-- <i class="xi-pen"></i> --></a>
					</div>
				</div>
			</div>
		</section>
		<!-- ****************** 메인 footer ********************** -->
		<section id="mainFooter" class="section fp-auto-height">
			<!-- footer -->
			<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/footer.php"; ?>
			<!-- //footer -->
		</section>
		<!-- // -->
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
<script type="text/javascript" src="<?=$site_host?>/js/main.js?ver=250829"></script>

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
<? if($tools->device()=="mobile"){ ?>
<? include $_SERVER['DOCUMENT_ROOT']."/in_popup_m.php"; ?>
<? } else { ?>
<? include $_SERVER['DOCUMENT_ROOT']."/in_popup.php"; ?>
<? } ?>