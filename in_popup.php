<?
$now_time=time();
$popup_cnt = $db->cnt("cs_popup","where start_day<='$now_time'and end_day>='$now_time'");
if($popup_cnt>0){
?>
<!-- ****************** 팝업기능 (update 200410) ********************** -->
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />  
<script src="//code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
<style type="text/css">
@media all and (max-width:800px) {
	/* 반응형일때 강제로 왼쪽으로 붙도록 변경 ( 2018-01-12 MH ) */
	.main-layer-popup{left:2% !important; top:2% !important;  right:2% !important; width:auto !important; max-width:96% !important; height:auto !important; }
	.main-layer-popup .layer-popup-inner-img img{max-width:none !important; width:100%; height:auto;}
}
/* 2021-05-31 MH 롤링팝업 추가 */
.popup-rolling-con{overflow:hidden;}
.popup-rolling-con .slick-list,
.popup-rolling-con .slick-track{height:100%; }
.popup-rolling-con .popup-img img{width:100%; height:100%; image-rendering: -webkit-optimize-contrast}
.popup-rolling-con .slick-prev,
.popup-rolling-con .slick-next{position:absolute; top:50%; font-size:24px; color:#fff; text-shadow:1px 1px 1px rgba(0, 0, 0, .5);z-index:11; margin-top:-12px;}
.popup-rolling-con .slick-prev{left:5px;}
.popup-rolling-con .slick-next{right:5px;}
</style>
<?}?>
<?
//////////////////////////////////////////////////////////////// 메인 접속정보및 팝업 소스 S /////////////////////////////////////////////////////////////////////////////
// 접속정보 입력
$db->insert("cs_connect", "ip='$_SERVER[REMOTE_ADDR]', url='$_SERVER[HTTP_REFERER]', register=now()");

//=======       POPUP 창 설정 ==========================================================
$popup_result = $db->select("cs_popup", "where lang='$lang'");
$now_time=time();
$left = 80;
while($popup_row=@mysqli_fetch_object($popup_result)) {
?>
<? if($popup_row->kind==0){ ?>
<?
	if( $_COOKIE['POPUP_COOKIE_'.$popup_row->idx] != 'NO' ) {
		if($popup_row->start_day <=$now_time && $popup_row->end_day >= $now_time) {
			$popup_row->height=$popup_row->height+52;
			if($popup_row->position==0){//팝업위치 왼쪽기준
			echo"<script> window.open('/etc/popup.php?idx=$popup_row->idx&lang=$lang','$popup_row->idx','scrollbars=no,width=$popup_row->width,height=$popup_row->height,top=$popup_row->tops,left=$popup_row->lefts'); </script>";	
			} else if($popup_row->position==1){//팝업위치 오른쪽기준
			echo"<script> window.open('/etc/popup.php?idx=$popup_row->idx&lang=$lang','$popup_row->idx','scrollbars=no,width=$popup_row->width,height=$popup_row->height,top=$popup_row->tops_right,right=$popup_row->lefts_right'); </script>";	
			}
			$left = $left + $popup_row->width;

		}
	}
?>

<? } else if($popup_row->kind==1){ ?>


<!-- 레이어POPUP 시작-->
<?
	if( $_COOKIE['POPUP_COOKIE_'.$popup_row->idx] != 'NO' ) {
		if($popup_row->start_day <=$now_time && $popup_row->end_day >= $now_time) {
			//$popup_row->height=$popup_row->height+58;
?>


<!--레이어팝업-->

<script language="JavaScript">

function setcookie<?=$popup_row->idx?>( name, value, expirehours ) {
var todayDate = new Date();
todayDate.setHours( todayDate.getHours() + expirehours );
document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
}

function closeWin<?=$popup_row->idx?>() {
if ( document.notice_form<?=$popup_row->idx?>.chkbox.checked ){
	<? if($popup_stat->live==0) {?>
		setcookie<?=$popup_row->idx?>( "maindiv<?=$popup_row->idx?>", "done" , 24 );
	<?} else if($popup_stat->live==1) {?>
		setcookie<?=$popup_row->idx?>( "maindiv<?=$popup_row->idx?>", "done" , 8760 );
	<?}?>
}
document.all['divpop<?=$popup_row->idx?>'].style.display = "none";

}

</script>

 <!--레이어팝업 끝-->

<script>
$(document).ready(function() {
	$("#divpop<?=$popup_row->idx?>").draggable({
		start: function() {
			<?if($popup_row->position==1){?>//팝업위치 오른쪽기준
			$("#divpop<?=$popup_row->idx?>").css("right","auto");
			<?}?>
		}
	});
});
</script> 
<?if($popup_row->position==0){//팝업위치 왼쪽기준?>
<div id="divpop<?=$popup_row->idx?>" class="ui-widget-content main-layer-popup" style="position:absolute; left:<?=$popup_row->lefts?>px; top:<?=$popup_row->tops?>px; z-index:10000; max-width:600px; visibility:hidden; overflow:hidden; -webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px; box-shadow:rgba(134, 134, 134, 0.4) 3px 4px 5px, rgba(134, 134, 134, 0.25) -2px -1px 4px; border:0; <?if($popup_row->display==2){?>width:<?=$popup_row->width;?>px; height:calc(<?=$popup_row->height;?>px + 58px);<? } ?> ">
<?} else if($popup_row->position==1){//팝업위치 오른쪽기준?>
<div id="divpop<?=$popup_row->idx?>" class="ui-widget-content main-layer-popup" style="position:absolute; right:<?=$popup_row->lefts_right?>px; top:<?=$popup_row->tops_right?>px; z-index:10000; max-width:600px; visibility:hidden; overflow:hidden; -webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px; box-shadow:rgba(134, 134, 134, 0.4) 3px 4px 5px, rgba(134, 134, 134, 0.25) -2px -1px 4px; border:0; <?if($popup_row->display==2){?>width:<?=$popup_row->width;?>px; height:calc(<?=$popup_row->height;?>px + 58px);<? } ?> ">
<?}?>
	<div class="layer-popup-inner-img">
		<? if($popup_row->display==0) {?>
			<div class="layer-popup-html-inner editor" style="border-bottom:1px solid #eee; padding:15px; background-color:#fff;">
				<?=$tools->strHtml($popup_row->content);?>
			</div>
		<?} else if($popup_row->display==1) {?>
			<? if($popup_row->link_url) {?>
				<a href="<?=$popup_row->link_url;?>">
					<img src='/data/designImages/<?=$popup_row->popup_images;?>' border='0' alt="" style="max-width:100%; vertical-align:top;" >
				</a>
			<?} else {?>
				<img src='/data/designImages/<?=$popup_row->popup_images;?>' border='0' alt="" style="max-width:100%; vertical-align:top;">
			<?}?>

		<?} else if($popup_row->display==2){?>
		
		<div class="popup-rolling-con" style="height:<?=$popup_row->height;?>px;"><!-- 슬라이드 팝업 높이가 들어갑니다 -->
			
			<? if($popup_row->bbs_file){ ?>
			<div class="popup-img">
				<? if($popup_row->link_url1){ ?><a href="<?=$popup_row->link_url1?>"><? } ?>
					<img src='/data/designImages/<?=$popup_row->bbs_file;?>' border='0' alt="" style="max-width:100%; vertical-align:top;">
				</a>
			</div>
			<? } ?>
			
			<? if($popup_row->bbs_file2){ ?>
			<div class="popup-img">
				<? if($popup_row->link_url2){ ?><a href="<?=$popup_row->link_url2?>"><? } ?>
					<img src='/data/designImages/<?=$popup_row->bbs_file2;?>' border='0' alt="" style="max-width:100%; vertical-align:top;">
				</a>
			</div>
			<? } ?>

			<? if($popup_row->bbs_file3){ ?>
			<div class="popup-img">
				<? if($popup_row->link_url3){ ?><a href="<?=$popup_row->link_url3?>"><? } ?>
					<img src='/data/designImages/<?=$popup_row->bbs_file3;?>' border='0' alt="" style="max-width:100%; vertical-align:top;">
				</a>
			</div>
			<? } ?>

			<? if($popup_row->bbs_file4){ ?>
			<div class="popup-img">
				<? if($popup_row->link_url4){ ?><a href="<?=$popup_row->link_url4?>"><? } ?>
					<img src='/data/designImages/<?=$popup_row->bbs_file4;?>' border='0' alt="" style="max-width:100%; vertical-align:top;">
				</a>
			</div>
			<? } ?>

			<? if($popup_row->bbs_file5){ ?>
			<div class="popup-img">
				<? if($popup_row->link_url5){ ?><a href="<?=$popup_row->link_url5?>"><? } ?>
					<img src='/data/designImages/<?=$popup_row->bbs_file5;?>' border='0' alt="" style="max-width:100%; vertical-align:top;">
				</a>
			</div>
			<? } ?>
		</div>

		<?}?>
	</div>
	<form name="notice_form<?=$popup_row->idx?>">
		<div class="layer-popup-bottom-con" style="overflow:hidden; height:22px; background-color:#fff; padding:18px">
			<p class="left-close-option-txt" style="float:left; line-height:22px; color:#333; font-size:14px;">
				<input type=checkbox name="chkbox" id="popupCloseCheck" onclick="closeWin<?=$popup_row->idx?>();" style="vertical-align:middle; margin-top:-1px;">
				<?if($lang==1){?>
				<? if($popup_row->live==0) {?>
				<label for="popupCloseCheck">오늘 하루 이창을 열지 않음<?} else if($popup_row->live==1) {?>다시 열지 않음<?}?>&nbsp;&nbsp;
				</label>
				<?} else if($lang==2){?>
				<? if($popup_row->live==0) {?>
				<label for="popupCloseCheck">Do not show again.<?} else if($popup_row->live==1) {?>Do not show again.<?}?>&nbsp;&nbsp;
				</label>
				<?} else if($lang==3){?>
				<? if($popup_row->live==0) {?>
				<label for="popupCloseCheck">今天不要打开此窗口。<?} else if($popup_row->live==1) {?>不要重新打开。<?}?>&nbsp;&nbsp;
				</label>
				<?}?>
			</p>
			<a href="javascript:closeWin<?=$popup_row->idx?>();" title="팝업닫기" style="float:right;"><i class="material-icons" style="color:#717171;">&#xE5CD;</i></a>
		</div>
	</form>
</div>

<script language="Javascript">
cookiedata = document.cookie;  
if ( cookiedata.indexOf("maindiv<?=$popup_row->idx?>=done") < 0 ){    
    document.all['divpop<?=$popup_row->idx?>'].style.visibility = "visible";
    }
    else {
        document.all['divpop<?=$popup_row->idx?>'].style.visibility = "hidden";
}
</script>

<?
	$left = $left + $popup_row->width;

		}
	}
//=====================================================================================
?>

<!-- 레이어POPUP 끝-->

<? } ?>

<?
}
//////////////////////////////////////////////////////////////// 메인 접속정보및 팝업 소스 E /////////////////////////////////////////////////////////////////////////////
?>
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