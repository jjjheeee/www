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
<link rel="stylesheet" href="<?=$site_host?>/css/content.css?ver=250912_2">
<link rel="stylesheet" href="<?=$site_host?>/css/main.css?ver=250912" />
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

