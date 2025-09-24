<style>
/* ******************  모바일 전용 레이어 인트로 팝업 ********************** */
.mobile-fixed-pop-wrapper{overflow-y:auto; position:fixed; top:0px; left:0px; width:100%; height:100%; z-index:999999; opacity:1.0;filter:Alpha(opacity=100);}
.mobile-fixed-pop-inner{position:absolute; display:table; width:100%; height:100%; text-align:center; background:rgba(0,0,0,0.75); }
.mobile-fixed-pop-inner-box{ position:relative; display:table-cell; vertical-align:middle; top:0px;}
.mobile-fixed-img-con{display:inline-block; min-width:250px; max-width:92%; margin:4% auto; }
.mobile-popup-img{display:block;}
.mobile-popup-img img{max-width:100%; max-height:100%;}
.mobile-popup-img .editor{background-color:#fff; padding:15px;}
.mobile-popup-btn-controls{overflow:hidden; text-align:center; background-color:#f2f2f2; border-top:1px solid #f2f2f2;}
.mobile-popup-btn-controls button{float:left; border:0; padding:0; margin:0px; background:none; width:50%; height:50px; background-color:#fff; font-size:14px; color:#333; cursor:pointer;}
.mobile-popup-btn-controls .today-close-btn{background-color:#eee;}
/* 2021-05-31 MH 롤링팝업 추가 */
.popup-rolling-con{width:calc(100vw - 30px); max-width:360px; }
.popup-rolling-con .slick-list,
.popup-rolling-con .slick-track{height:100%; }
.popup-rolling-con .popup-img-inner{display:block; padding-top:50%; height:0; position:relative;}
.popup-rolling-con .popup-img{position:absolute; top:0px; left:0px;}
.popup-rolling-con .popup-img img{position:absolute; top:0px; left:0px; width:100%; height:100%; image-rendering: -webkit-optimize-contrast}
.popup-rolling-con .slick-prev,
.popup-rolling-con .slick-next{position:absolute; top:50%; font-size:24px; color:#fff; text-shadow:1px 1px 1px rgba(0, 0, 0, .5); z-index:111; margin-top:-12px;}
.popup-rolling-con .slick-prev{left:5px;}
.popup-rolling-con .slick-next{right:5px;}
</style>
<?
//메인 접속정보및 팝업 소스 S//
$db->insert("cs_connect", "ip='$_SERVER[REMOTE_ADDR]', url='$_SERVER[HTTP_REFERER]', register=now()");
//POPUP 창 설정
$popup_result = $db->select("cs_popup", "where lang='$lang'");
$now_time=time();
$left = 80;
while($popup_row=@mysqli_fetch_object($popup_result)) {
?>

<?
	if( $_COOKIE['maindiv'.$popup_row->idx] != 'done' ) {
		if($popup_row->start_day <=$now_time && $popup_row->end_day >= $now_time) {
			$popup_row->height=$popup_row->height+24;
?>
<!-- 모바일팝업 시작-->
<script language="JavaScript">
function setcookie<?=$popup_row->idx?>( name, value, expirehours ) {
	var todayDate = new Date();
	todayDate.setHours( todayDate.getHours() + expirehours );
	//alert(todayDate.toGMTString());
	document.cookie = name + "=" + escape( value ) + "; path=/; expires=" + todayDate.toGMTString() + ";"
}

function closeWin<?=$popup_row->idx?>() {
	<? if($popup_row->live==0) {?>
		setcookie<?=$popup_row->idx?>( "maindiv<?=$popup_row->idx?>", "done" , 24 );
	<?} else if($popup_row->live==1) {?>
		setcookie<?=$popup_row->idx?>( "maindiv<?=$popup_row->idx?>", "done" , 8760 );
	<?}?>	
	$("#mobilePopupCon<?=$popup_row->idx?>").fadeOut();
}
function mobilePopClose (i) {
	var id = "#mobilePopupCon"+i;
	$(id).fadeOut();
}
</script>
<div id="divpop<?=$popup_row->idx?>">
	<!--  -->
	<section id="mobilePopupCon<?=$popup_row->idx?>">
		<article class="mobile-fixed-pop-wrapper">
			<div class="mobile-fixed-pop-inner">
				<div class="mobile-fixed-pop-inner-box">
					<div class="mobile-fixed-img-con">
						<div class="mobile-popup-img">
							<? if($popup_row->display==0) {?>
							<div class="editor"><?=$tools->strHtml($popup_row->content);?></div>
							<? } else if($popup_row->display==1){ ?>
							<? if($popup_row->link_url) {?>
								<a href="<?=$popup_row->link_url;?>" target="_blank">
								<?if($popup_row->popup_images2!=""){?>
									<img src="<?=$site_host?>/data/designImages/<?=$popup_row->popup_images2;?>" alt="" />
									<?} else if($popup_row->popup_images2==""){?>
									<img src="<?=$site_host?>/data/designImages/<?=$popup_row->popup_images;?>" alt="" />
									<?}?>
								</a>
							<?} else {?>
								<?if($popup_row->popup_images2!=""){?>
								<img src="/data/designImages/<?=$popup_row->popup_images2;?>" alt="" />
								<?} else if($popup_row->popup_images2==""){?>
								<img src="/data/designImages/<?=$popup_row->popup_images;?>" alt="" />
								<?}?>
							<?}?>
							<? } else if($popup_row->display==2){ ?>
							
							<div class="popup-rolling-con" data-width="<?=$popup_row->width;?>" data-height="<?=$popup_row->height;?>"><!-- 슬라이드팝업일때 width, height 입력해야합니다. -->
								
								<? if($popup_row->bbs_file){ ?>
								<div class="popup-img">
									<? if($popup_row->link_url1){ ?><a href="<?=$popup_row->link_url1?>"><? } ?>
										<span class="popup-img-inner">
											<img src='/data/designImages/<?=$popup_row->bbs_file;?>' border='0' alt="" style="max-width:100%; vertical-align:top;">
										</span>
									</a>
								</div>
								<? } ?>

								<? if($popup_row->bbs_file2){ ?>
								<div class="popup-img">
									<? if($popup_row->link_url2){ ?><a href="<?=$popup_row->link_url2?>"><? } ?>
										<span class="popup-img-inner">
											<img src='/data/designImages/<?=$popup_row->bbs_file2;?>' border='0' alt="" style="max-width:100%; vertical-align:top;">
										</span>
									</a>
								</div>
								<? } ?>

								<? if($popup_row->bbs_file3){ ?>
								<div class="popup-img">
									<? if($popup_row->link_url3){ ?><a href="<?=$popup_row->link_url3?>"><? } ?>
										<span class="popup-img-inner">
											<img src='/data/designImages/<?=$popup_row->bbs_file3;?>' border='0' alt="" style="max-width:100%; vertical-align:top;">
										</span>
									</a>
								</div>
								<? } ?>

								<? if($popup_row->bbs_file4){ ?>
								<div class="popup-img">
									<? if($popup_row->link_url4){ ?><a href="<?=$popup_row->link_url4?>"><? } ?>
										<span class="popup-img-inner">
											<img src='/data/designImages/<?=$popup_row->bbs_file4;?>' border='0' alt="" style="max-width:100%; vertical-align:top;">
										</span>
									</a>
								</div>
								<? } ?>

								<? if($popup_row->bbs_file5){ ?>
								<div class="popup-img">
									<? if($popup_row->link_url5){ ?><a href="<?=$popup_row->link_url5?>"><? } ?>
										<span class="popup-img-inner">
											<img src='/data/designImages/<?=$popup_row->bbs_file5;?>' border='0' alt="" style="max-width:100%; vertical-align:top;">
										</span>
									</a>
								</div>
								<? } ?>

							</div>

							<? } ?>
						</div><!-- 권장사이즈 640 x 680 비율 -->
						<div class="mobile-popup-btn-controls">
							<button type="button" class="today-close-btn" onclick="closeWin<?=$popup_row->idx?>();">
							<?if($lang==1){?>
								<? if($popup_row->live==0) {?>오늘 하루 열지 않음<?} else if($popup_row->live==1) {?>다시 열지 않음<?}?>
							<?} else if($lang==2){?>
								<? if($popup_row->live==0) {?>Do not show again.<?} else if($popup_row->live==1) {?>Do not show again.<?}?>
							<?} else if($lang==3){?>
								<? if($popup_row->live==0) {?>今天不要打开此窗口。<?} else if($popup_row->live==1) {?>不要重新打开。<?}?>
							<?}?>
							</button>
							<button onclick="javascript:mobilePopClose(<?=$popup_row->idx?>);">
							<?if($lang==1){?>
								닫기
							<?} else if($lang==2){?>
								Close
							<?} else if($lang==3){?>
								关
							<?}?>
							</button>
						</div>
					</div>
				</div>
			</div>
		</article>
	</section>
	<!--  -->
</div>
<script language="Javascript">
cookiedata = document.cookie;  
if ( cookiedata.indexOf("maindiv<?=$popup_row->idx?>=done") < 0 ){    
    document.all['divpop<?=$popup_row->idx?>'].style.visibility = "visible";
}else {
	document.all['divpop<?=$popup_row->idx?>'].style.visibility = "hidden";
}
</script>
<?
	$left = $left + $popup_row->width;
		}
	}
?>
<?
	
}
//메인 접속정보및 팝업 소스 E//
?>
<script type="text/javascript">
$(document).ready(function  () {
	$(".popup-rolling-con").each(function  () {
		var slideWidth = $(this).data("width");
		var slideHeight = $(this).data("height");
		
		// 관리자에서 입력한 가로,세로의 비율을 측정
		slideRatio = (slideHeight/slideWidth) * 100;
		if ( slideRatio ) {
			$(this).find(".popup-img-inner").css("padding-top",""+slideRatio+"%");
		}
	});
	$(".popup-rolling-con").slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: true,
		dots:false,
		autoplay: true,
		speed:500,
		infinite:true,
		autoplaySpeed: 3000,
		pauseOnHover:true,
		touchMove:false,
		draggable:false,
		zIndex:1,
		prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Prev" tabindex="0" role="button"><i class="xi-angle-left-thin"></i></button>',
		nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><i class="xi-angle-right-thin"></i></button>'	
	});
});
</script>