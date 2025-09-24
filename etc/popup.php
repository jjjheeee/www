<?
include $_SERVER['DOCUMENT_ROOT']."/common.php";
$popup_stat = $db->object("cs_popup", "where idx='$_GET[idx]'");
$COOKIE_NAME="POPUP_COOKIE_".$popup_stat->idx;
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?=$popup_stat->title_bar;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../css/default.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons"><!-- google -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css"><!-- naver -->
<link rel="stylesheet" type="text/css" href="/css/plugin/slick.css">
<script type="text/javascript" src="/js/vendor/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/js/plugin/slick.js"></script>
<script type="text/javascript">
$(document).ready(function  () {
	$(".popup-rolling-con").slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: false,
		dots:false,
		autoplay: true,
		speed:500,
		infinite:true,
		autoplaySpeed: 3000,
		pauseOnHover:true,
		touchMove:false,
		draggable:false,
		prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Prev" tabindex="0" role="button"><i class="xi-angle-left-thin"></i></button>',
		nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><i class="xi-angle-right-thin"></i></button>'	
	});
});
</script>
<style type="text/css">
html{overflow:hidden; }
body, table, th, td, button, select, input, textarea {
	font-family:'Noto Sans KR', "나눔고딕", NanumGothic, "Nanum Gothic","돋움", Dotum, Arial, sans-serif;
}
.popup-htm-inner{padding:15px;}
.layer-popup-bottom-con{position:fixed; width:100%; bottom:0; overflow:hidden; height:22px; background-color:#f2f2f2; padding:15px 0}
.left-close-option-txt{float:left; line-height:22px; margin-left:10px; color:#333; font-size:14px; }
.left-close-option-txt input{position:relative; top:-1px;}
.layer-popup-bottom-con a{margin-right:10px; cursor:pointer;}

/* 2021-05-31 MH 롤링팝업 추가 */
.popup-rolling-con{overflow:hidden;}
.popup-rolling-con .slick-list,
.popup-rolling-con .slick-track{height:100%; }
.popup-rolling-con .popup-img img{width:100%; height:100%; image-rendering: -webkit-optimize-contrast}
.popup-rolling-con .slick-prev,
.popup-rolling-con .slick-next{position:absolute; top:50%; font-size:24px; color:#fff; text-shadow:1px 1px 1px rgba(0, 0, 0, .5);z-index:11; margin-top:-12px;}
.popup-rolling-con .slick-prev i,
.popup-rolling-con .slick-next i{font-style:normal;}
.popup-rolling-con .slick-prev{left:5px;}
.popup-rolling-con .slick-next{right:5px;}
</style>

</head>

<script language="JavaScript">
<!--
function setCookie( name, value, expiredays ){
	var todayDate = new Date();
	todayDate.setDate( todayDate.getDate() + expiredays );
	document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
}

<? if($popup_stat->live==0) {?>
function closeWin(){
	if ( document.popup_form.popup_end.checked ) {
		setCookie( '<?=$COOKIE_NAME;?>', 'NO', 1 );//쿠기 저장 기간은 1일로 한다.
	}
	window.close();
} 
<?} else if($popup_stat->live==1) {?>
function closeWin(){
	if ( document.popup_form.popup_end.checked ) {
		setCookie( '<?=$COOKIE_NAME;?>', 'NO', 365 );//쿠기 저장 기간은 1일로 한다.
	}
	window.close();
} 
<?}?>

function closeGo(url){
	opener.parent.window.location.href=url;
	window.close();
} 
//-->
</script>
<body>
	<div id="popupContent" class="editor">
		<? if($popup_stat->display==0) {?>
			<div class="popup-htm-inner">
			<?=$tools->strHtml($popup_stat->content);?>
			</div>
		<?} else if($popup_stat->display==1) {?>
			<? if($popup_stat->link_url) {?>
				<a href="javascript:closeGo('<?=$popup_stat->link_url;?>')">
				<?if($popup_stat->popup_images2==""){?>
					<img src='/data/designImages/<?=$popup_stat->popup_images;?>' border='0'>
					<?} else if($popup_stat->popup_images2!=""){?>
					<img src='/data/designImages/<?=$popup_stat->popup_images2;?>' border='0'>
					<?}?>
				</a>
			<?} else {?>
				<?if($popup_stat->popup_images2==""){?>
				<img src='/data/designImages/<?=$popup_stat->popup_images;?>' border='0' style="font-size:0">
				<?} else if($popup_stat->popup_images2!=""){?>
				<img src='/data/designImages/<?=$popup_stat->popup_images2;?>' border='0' style="font-size:0">
				<?}?>
			<?}?>
		<?} else if($popup_stat->display==2) {?>
		<div class="popup-rolling-con" style="height:<?=$popup_stat->height?>px;"><!-- 슬라이드 팝업 높이가 들어갑니다 -->

			<? if($popup_stat->bbs_file){ ?>
			<div class="popup-img">
				<? if($popup_stat->link_url1){ ?><a href="#none" onclick="window.open('<?=$popup_stat->link_url1?>','','');"><? } ?>
					<img src='/data/designImages/<?=$popup_stat->bbs_file;?>' border='0' alt="" style="max-width:100%; vertical-align:top;">
				</a>
			</div>
			<? } ?>
			
			<? if($popup_stat->bbs_file2){ ?>
			<div class="popup-img">
				<? if($popup_stat->link_url2){ ?><a href="#none" onclick="window.open('<?=$popup_stat->link_url2?>','','');"><? } ?>
					<img src='/data/designImages/<?=$popup_stat->bbs_file2;?>' border='0' alt="" style="max-width:100%; vertical-align:top;">
				</a>
			</div>
			<? } ?>

			<? if($popup_stat->bbs_file3){ ?>
			<div class="popup-img">
				<? if($popup_stat->link_url3){ ?><a href="#none" onclick="window.open('<?=$popup_stat->link_url3?>','','');"><? } ?>
					<img src='/data/designImages/<?=$popup_stat->bbs_file3;?>' border='0' alt="" style="max-width:100%; vertical-align:top;">
				</a>
			</div>
			<? } ?>

			<? if($popup_stat->bbs_file4){ ?>
			<div class="popup-img">
				<? if($popup_stat->link_url4){ ?><a href="#none" onclick="window.open('<?=$popup_stat->link_url4?>','','');"><? } ?>
					<img src='/data/designImages/<?=$popup_stat->bbs_file4;?>' border='0' alt="" style="max-width:100%; vertical-align:top;">
				</a>
			</div>
			<? } ?>

			<? if($popup_stat->bbs_file5){ ?>
			<div class="popup-img">
				<? if($popup_stat->link_url5){ ?><a href="#none" onclick="window.open('<?=$popup_stat->link_url5?>','','');"><? } ?>
					<img src='/data/designImages/<?=$popup_stat->bbs_file5;?>' border='0' alt="" style="max-width:100%; vertical-align:top;">
				</a>
			</div>
			<? } ?>

		</div>
		<?}?>
	</div>
	<form name="popup_form">
		<div class="layer-popup-bottom-con">
			<p class="left-close-option-txt">
				<input type=checkbox name="popup_end" onclick="closeWin();">
				<?if($lang==1){?>
				<? if($popup_stat->live==0) {?>
					오늘 하루 이창을 열지 않음
				<?} else if($popup_stat->live==1) {?>
					다시 열지 않음
				<?}?>&nbsp;&nbsp;
				<?} else if($lang==2){?>
				<? if($popup_stat->live==0) {?>
					Do not show again.
				<?} else if($popup_stat->live==1) {?>
					Do not show again.
				<?}?>&nbsp;&nbsp;
				<?} else if($lang==3){?>
				<? if($popup_stat->live==0) {?>
					今天不要打开此窗口。
				<?} else if($popup_stat->live==1) {?>
					不要重新打开。
				<?}?>&nbsp;&nbsp;
				<?}?>
			</p>
			<a href="javascript:closeWin();" title="팝업닫기" style="float:right;"><i class="material-icons" style="color:#717171;">&#xE5CD;</i></a>
		</div>
	</form>
</body>
</html>