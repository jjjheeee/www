<?
$page_num = "02";
$sub_num = "02";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "reborn";
$sub_section = "reborn_cgf";
$page_info = "Reborn Stem";
$sub_info = "Reborn C.G.F.";
$content_type="wide";
// $sub_info2 = "3차메뉴";	// 사용안할시 주석처리
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(Description)	필요시 사용
include "../lib/sub.php";
//include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<!doctype html>
<html lang="ko"<?if($fullpage){?> class="fullpage-html"<?}?>>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?if($page_info){?><?=$site_title_last?><?} else {?><?=$site_head_title?><?}?></title>
<meta name="Title" content="<?if($page_info){?><?=$site_title_last?><?} else {?><?=$site_head_title?><?}?>">
<meta name="Subject" content="<?=$site_subject?>">
<meta name="Keywords" content="<?=$site_keywords?>">
<meta name="Description" content="<?=$site_description?>">
<meta property="og:type" content="<?=$og_type?>">
<meta property="og:title" content="<?=$og_title?>">
<meta property="og:description" content="<?=$og_description?>">
<meta property="og:image" content="<?=$og_image?>">
<meta property="og:url" content="<?=$og_url?>">
<meta name="twitter:card" content="<?=$sns_card?>">
<meta name="twitter:title" content="<?=$sns_title?>">
<meta name="twitter:description" content="<?=$sns_description?>">
<meta name="twitter:image" content="<?=$sns_image?>">
<meta name="twitter:domain" content="<?=$sns_domain?>">
<meta name="google-site-verification" content="<?=$google_verification?>">
<meta name="naver-site-verification" content="<?=$naver_verification?>">
<meta name="viewport" content="width=device-width, initial-scale=1"><!-- 모바일사이트, 반응형사이트 제작시 사용 -->
<meta name="format-detection" content="telephone=no"/><!-- ios 자동전화걸기 방지 -->
<meta name="NaverBot" content="All"/>
<meta name="NaverBot" content="<?=$site_robots?>"/>
<meta name="Yeti" content="All"/>
<meta name="Yeti" content="<?=$site_robots?>"/>
<meta name="Googlebot" content="All" />
<meta name="Googlebot" content="<?=$site_robots?>" />
<meta name="Robots" content="<?=$site_robots?>">
<meta name="theme-color" content="#222222">
<link rel="canonical" href="<?=$site_host?>">
<link rel="stylesheet" href="<?=$site_host?>/css/default.css">
<link rel="stylesheet" href="<?=$site_host?>/css/layout.css?ver=221108">
<link rel="stylesheet" href="<?=$site_host?>/css/content_t(250911).css?ver=250911_2">
<link rel="stylesheet" href="<?=$site_host?>/css/main.css?ver=220727" />
<link rel="stylesheet" href="<?=$site_url?>/css/language.css?ver=221108" /><!-- 해당언어에서만 사용하는 css -->
<link rel="stylesheet" href="<?=$site_host?>/css/layout_responsive.css?ver=220726">
<link rel="stylesheet" href="<?=$site_host?>/css/content_responsive.css?ver=240326">
<link rel="stylesheet" href="<?=$site_host?>/css/main_responsive.css?ver=220727" />
<link rel="stylesheet" href="<?=$site_host?>/css/animate.css" />
<!-- <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">google
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">naver -->
<link rel="stylesheet" href="<?=$site_host?>/css/xeicon.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" as="style" crossorigin href="https://cdn.jsdelivr.net/gh/orioncactus/pretendard@v1.3.9/dist/web/static/pretendard-dynamic-subset.min.css" />
<!-- Board Skin -->
<link rel="stylesheet" href="<?=$site_host?>/css/common/cm_bbs_common.css">
<link rel="stylesheet" href="<?=$site_host?>/css/common/cm_board.css">
<link rel="stylesheet" href="<?=$site_host?>/css/common/cm_gallery.css" />
<link rel="stylesheet" href="<?=$site_host?>/css/common/cm_certification.css" />
<!-- Plugin -->
<link rel="stylesheet" type="text/css" href="<?=$site_host?>/css/plugin/slick.css">
<link rel="stylesheet" type="text/css" href="<?=$site_host?>/css/plugin/jquery.mCustomScrollbar.css">
<link rel="stylesheet" type="text/css" href="<?=$site_host?>/css/plugin/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="<?=$site_host?>/css/plugin/swiper.css" />
<link rel="stylesheet" type="text/css" href="<?=$site_host?>/css/plugin/jquery.kwicks.css" />
<!--[if lte IE 9]>
	<link rel="stylesheet" href="<?=$site_host?>/css/ie9.css">
<![endif]-->
<script type="text/javascript" src="<?=$site_host?>/js/vendor/jquery-1.8.3.min.js"></script>


<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>

<style>
	body, table, th, td, button, select, input, textarea {
		font-family:'Pretendard', "나눔고딕", NanumGothic, "Nanum Gothic","돋움", Dotum, Arial, sans-serif;
	
	}

	@font-face {
		font-family:'Poppins';
		font-style: normal;
		unicode-range: U+0041-005A;
	}

</style>

<article>
	<section class="reborn-intro-con">
		<div class="area-box">
			<div class="title" data-scroll="fade-up">
				<strong class="reborn-intro-tit">Reborn C.G.F. Ampoule</strong>
				<p class="reborn-intro-sub-tit">Skin Regeneration Anti-Aging</p>
			</div>
			<div class="intro-box" data-scroll="fade">
				<div class="banner">
					<span class="bg">
						<p class="bg-tit">Reborn C.G.F. Ampoule</p>
					</span>
					<p class="bg-tit">Reborn C.G.F. Ampoule</p>
				</div>
				<!-- <div class="container">
					<div class="banner">
						<span class="bg">
							<p class="bg-tit">Reborn C.G.F. Ampoule</p>
						</span>
						<p class="bg-tit">Reborn C.G.F. Ampoule</p>
					</div>
				</div> -->
				<div class="intro-img-box">
					<span class="intro-img-shadow"></span>
					<img src="<?=$site_host?>/images/content/reborn_intro_pro.png" alt="">
				</div>
			</div>
		</div>
	</section>
	<section class="reborn-con intro" data-scroll="fade">
		<div class="area">
			<div class="inner-con">
				<div class="tit-box" data-scroll="fade-up">
					<span class="reborn-sub-tit">Reborn C.G.F.란?</span>
					<p class="reborn-tit">100% 지방줄기세포 배양액 구성으로, <br class="pc-br"> 안티에이징에 도움이 되는 다양한 성장인자를 함유한 앰플입니다.</p>
				</div>
				<ul class="cgf-list">
					<li>
						<div class="img-box">
							<div class="txt-box">
								<span class="num">01</span>
								<p class="cgf-tit">엔바이오텍의 <br> 기술로 직접 배양</p>
							</div>
						</div>
						
					</li>
					<li>
						<div class="img-box">
							<div class="txt-box">
								<span class="num">02</span>
								<p class="cgf-tit">첨가물없는 순도 100% <br> 지방 줄기세포 배양액</p>
							</div>
						</div>					
					</li>
					<li>
						<div class="img-box">
							<div class="txt-box">
								<span class="num">03</span>
								<p class="cgf-tit">VEGF, HGF 등 <br> 다양한 성장인자 함유</p>
							</div>
						</div>					
					</li>
				</ul>
			</div>
			<div class="inner-con" data-scroll="fade">
				<div class="tit-box" data-scroll="fade-up">
					<span class="reborn-sub-tit">줄기세포 배양액의 효능</span>
					<p class="reborn-tit">피부노화를 막으려면 줄어든 <br class="pc-br"> 성장인자를 다시 채워주어야 합니다.</p>
					<p class="reborn-txt">성인이 되면 체내의 성장인자 감소, 피부 장벽이 무너지고 진피 속 콜라겐, 엘라스틴 생산량 줄어 <br class="pc-br">
					피부 노화를 막기위한 열쇠인 성장인자는 체내에 자연적 존재하기 때문에 세포를 통해 얻을 수 있습니다. <br>
					특히 줄기세포를 통해 다양하게 얻을 수 있습니다.</p>
				</div>
				<div class="table-box">
					<div class="table-txt-box">
						<div class="txt">체내 성장인자 <br> 
							<div class="count">
								<div class="count-num-box">
									<div class="count-num-item-wrap">
										<ul class="count-num-item-box down">
											<li class="count-num-item">9</li>
											  <li class="count-num-item">2</li>
											  <li class="count-num-item">3</li>
											  <li class="count-num-item">4</li>
											  <li class="count-num-item">5</li>
											  <li class="count-num-item">6</li>
											  <li class="count-num-item">7</li>
											  <li class="count-num-item">8</li>
											  <li class="count-num-item">9</li>
											  <li class="count-num-item">1</li>
										</ul>
									</div>
									<div class="count-num-item-wrap">
										<ul class="count-num-item-box">
											<li class="count-num-item">1</li>
											  <li class="count-num-item">2</li>
											  <li class="count-num-item">3</li>
											  <li class="count-num-item">4</li>
											  <li class="count-num-item">5</li>
											  <li class="count-num-item">6</li>
											  <li class="count-num-item">7</li>
											  <li class="count-num-item">8</li>
											  <li class="count-num-item">9</li>
											  <li class="count-num-item">0</li>
										</ul>
									</div>
								</div>
								% 감소
							</div>
						</div>
						<i class="xi-long-arrow-down"></i>
					</div>
					<img src="<?=$site_host?>/images/content/effect_table.png" alt="">
				</div>
			</div>
		</div>
	</section>
	<section class="reborn-con">
		<div class="area">
			<div class="tit-box" data-scroll="fade-up">
				<span class="reborn-sub-tit">성장인자 VEGF, HGF 함유</span>
				<p class="reborn-tit">산화되어가는 피부의 재생 및 회복을 돕고 <br class="pc-br"> 건강한 피부 유지에 도움을 줍니다.</p>
				<p class="reborn-txt">
					Reborn C.G.F.에 존재하는 다양한 성장인자 중 함량을 측정한 성장인자 VEGF, HGF
				</p>
			</div>
			<div class="growth-box" data-scroll="fade">
				<div class="growth-item">
					<span class="line"></span>
					<div class="inner-circle">
						<strong>VEGF</strong>
						<p>혈관 내피세포 분열 촉진</p>
						<p>세포 소멸 억제</p>
						<p>신생혈관 생성 및 유지</p>
						<p>피부영양 공급 촉진</p>
					</div>
				</div>
				<div class="growth-img">
					<div class="inner-box"></div>
					<div class="arrow-box">
						<span><i class="xi-angle-left-min"></i></span>
					</div>
					<p>성장인자 함유</p>
					<div class="arrow-box">
						<span><i class="xi-angle-right-min"></i></span>
					</div>
				</div>
				<div class="growth-item">
					<span class="line"></span>
					<div class="inner-circle">
						<strong>HGF</strong>
						<p>세포의 성장 및 분열 조절</p>
						<p>피부재생 및 회복</p>
						<p>세포 산화 및 노화 방지</p>
						<p>염증 억제</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="reborn-con">
		<div class="experiment-box">
			<div class="bg">				
				<div class="area">
					<div class="tit-box" data-scroll="fade-up"> 
						<span class="reborn-sub-tit">세포 내 콜라겐 함량 측정 실험</span>
						<p class="reborn-tit">피부 흡수 후 세포 내에 <br class="pc-br"> 존재하는 콜라겐 함량 측정 실험</p>
						<p class="reborn-txt">
							Reborn C.G.F. 사용 시 콜라겐, 피브릴린 함량 모두 증가를 확인하였습니다.
						</p>
					</div>
					<div class="result-box" data-scroll="fade-up">
						<p class="result-txt">Reborn C.G.F. 사용 시 콜라겐, 피브릴린 함량 <span>모두 증가</span></p>
						<ul class="result-list">
							<li>
								<img src="<?=$site_host?>/images/content/experiment_01.jpg" alt="">
								<p>CONTROL</p>
							</li>
							<li>
								<img src="<?=$site_host?>/images/content/experiment_02.jpg" alt="">
								<p>Reborn C.G.F.</p>
							</li>
						</ul>
					</div>
				</div>				
			</div>
		</div>
	</section>
	<section class="reborn-con">	
		<div class="area">
			<div class="tit-box" data-scroll="fade-up"> 
				<span class="reborn-sub-tit">Reborn C.G.F.</span>
				<p class="reborn-tit">줄기세포 배양액의 효능</p>
			</div>
			<div class="efficacy-box" data-scroll="fade">
				<ul class="efficacy-list">
					<li>
						<div class="txt-box">
							<span class="num">01</span>
							<ul class="inner-list">
								<li><em>피부 재생 촉진</em><i class="xi-check-circle"></i></li>
								<li><em>세포 성장</em><i class="xi-check-circle"></i></li>
								<li><em>피부 재생 지원</em><i class="xi-check-circle"></i></li>
								<li><em>상처 치유</em><i class="xi-check-circle"></i></li>
								<li><em>회복 촉진</em><i class="xi-check-circle"></i></li>
							</ul>
						</div>
					</li>
					<li>
						<div class="txt-box">
							<span class="num">02</span>
							<ul class="inner-list">
								<li><i class="xi-check-circle"></i><em>피부 주름 개선</em></li>
								<li><i class="xi-check-circle"></i><em>콜라겐 생성 촉진</em></li>
								<li><i class="xi-check-circle"></i><em>주름 완화</em></li>
								<li><i class="xi-check-circle"></i><em>탄력 증가</em></li>
								<li><i class="xi-check-circle"></i><em>피부 탄력 개선</em></li>
							</ul>
						</div>
					</li>
					<li>
						<div class="txt-box">
							<span class="num">03</span>
							<ul class="inner-list">
								<li><em>피부 염증 완화</em><i class="xi-check-circle"></i></li>
								<li><em>항염증 작용</em><i class="xi-check-circle"></i></li>
							</ul>
						</div>
					</li>
					<li>
						<div class="txt-box">
							<span class="num">04</span>
							<ul class="inner-list">
								<li><i class="xi-check-circle"></i><em>피부 톤 개선</em></li>
								<li><i class="xi-check-circle"></i><em>색소 침착 개선</em></li>
								<li><i class="xi-check-circle"></i><em>잡티 완화</em></li>							
							</ul>
						</div>
					</li>
				</ul>
				<div class="efficacy-center">
					<img src="<?=$site_host?>/images/content/efficacy_center.png" alt="">
				</div>
			</div>
		</div>
	</section>
	<section class="reborn-con differentiation">	
		<div class="area">
			<div class="tit-box" data-scroll="fade-up"> 
				<span class="reborn-sub-tit">Reborn C.G.F. 만의 차별성</span>
				<p class="reborn-tit">순도 지방 줄기세포, 타사대비 <br class="pc-br"> 1.6배 많은 콜라겐 함량 Reborn C.G.F.</p>
			</div>
			<div class="differentiation-box">
				<div class="d-top" data-scroll="fade-up">
					<p>타사 줄기세포 배양액</p>
					<span>vs</span>
					<p>Reborn C.G.F.Ampoule</p>
				 </div>
				<div class="item-box" data-scroll="fade-up">
					<div class="wave">
						<div class="inner-wave"></div>
						<div class="inner-wave"></div>
						<div class="inner-wave"></div>
						<div class="inner-wave"></div>
					</div>
					<div class="left-list-box">
						<p class="title">타사 줄기세포 배양액</p>
						<ul class="left-list">
							<li><p><em>줄기세포 배양액 외 첨가물</em><i class="xi-check-circle"></i></p></li>
							<li><p><em>적은 콜라겐 함량</em><i class="xi-check-circle"></i></p></li>
							<li><p><em>미미한 자외선 회복 효과</em><i class="xi-check-circle"></i></p></li>
							<li><p><em>미미한 자외선 보호 효과</em><i class="xi-check-circle"></i></p></li>
						</ul>
					</div>
					<div class="item"><img src="<?=$site_host?>/images/content/differentiation_img.png" alt=""></div>
					<div class="right-list-box">
						<p class="title">Reborn C.G.F.Ampoule</p>
						<ul class="right-list">
							<li><p><i class="xi-check-circle"></i><em>첨가물 없는 순도 100% 지방 줄기 세포 배양액</em></p></li>
							<li><p><i class="xi-check-circle"></i><em>1.6배 많은 콜라겐 함량(타사대비)</em></p></li>
							<li><p><i class="xi-check-circle"></i><em>2배 많은 자외선B 회복 효과(타사대비)</em></p></li>
							<li><p><i class="xi-check-circle"></i><em>1.3배 많은 자외선 보호 효과(타사대비)</em></p></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
</article>

<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>