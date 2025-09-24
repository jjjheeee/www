/* *******************************************************
 * filename : main.js
 * description : 메인에만 사용되는 JS
 * date : 2021-06-15
******************************************************** */

$(window).on("load", function  () {
	$(".background-video iframe").attr("data-keepplaying",""); 
});

$(document).ready(function  () {
	/* ************************
	* Func : fullpage 레이아웃 사용시
	* fullpage.js , detectBrowser() 필요
	************************ */
	if ($.exists('#fullpage')) {
		var $fullPage = $("#fullpage");
		var $fullPageSection = $fullPage.children(".section");
		var destoryHeight = isMobile() ? "640" : "640";
		//console.log(destoryHeight);
		$fullPage.fullpage({
			css3: true,
			fitToSection: false,
			navigation: true,
			scrollBar:false,
			scrollingSpeed:800,
			navigationPosition: 'right',
			responsiveWidth: 359,
			responsiveHeight : destoryHeight,
			onLeave : function(origin, destination, direction){
				setTimeout(function  () {
					$(".section").eq(destination-1).find("[data-scroll]").addClass("animated");
				},500);
				
				if ( destination == 2 )  {	
					$("#mainVisual").addClass("active-section");
					$(".main-visual-con").slick("slickPlay");
				}else if( destination == 4 ){
					$("#mainPlayVideo").addClass("active-section");
				}

				if ( destination == 5 )  {	
					$("#header").addClass("bk");
					$("#fp-nav").addClass("black");
				}else{	
					$("#header").removeClass("bk");
					$("#fp-nav").removeClass("black");
				}
				
				if ( destination > 7 )  {
					$("body:not('.fp-responsive')").find("#header").hide();	// ie responsive모드에서 상단으로 이동시 destination 오류로 추가
					$("#fp-nav").hide();
				}else {
					$("body:not('.fp-responsive')").find("#header").show();
					$("#fp-nav").show();
				}
				/*
				if (getWindowWidth() > mobileWidth) {
					if (direction == 'up') {  
						$("#header").removeClass("down");
						$("#header").addClass("up");
					}else if(direction == 'down'){ 
						$("#header").removeClass("up");
						$("#header").addClass("down");
					}
				}
				*/
				if ( destination >1 )  {	
					$("#header").addClass("content")
				}else{	
					$("#header").removeClass("content")	
				}

				$("#fp-nav").find(".cur").text("0"+destination);
				
			}
		});

		$("#fp-nav").prepend("<span class='cur'>01</span>");
		$("#fp-nav").append("<span class='total'>07</span>");
	}
	

	/*if (getWindowWidth() <= 800) {
		$("#mainVisual").addClass("animated");
	}*/

	// 메인 비주얼 슬라이드
	var $mainVisualItem = $(".main-visual-con");
	var visualPausePlay = true;		// Pause, play 사용시 변경

	$mainVisualItem.on('init', function(event, slick, currentSlide) {
		$(".main-visual-item").eq(0).addClass("active-item");
		if ($.exists('.main-visual-conuter')) {
			$(".main-visual-conuter .total-num").text(slick.slideCount);
		}
	});
	$mainVisualItem.on('beforeChange', function(event, slick, currentSlide, nextSlide) {	
		$(".main-visual-item").removeClass("active-item");
		$(this).find(".main-visual-item").eq(nextSlide).addClass("active-item");
		if ($.exists('.main-visual-conuter')) {
			$(".main-visual-conuter .cur-num").text(nextSlide+1);
		}
	});

	// 메인 비주얼 슬라이드
	$mainVisualItem.slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: true,
		dots:true,
		autoplay: false,
		speed:2000,
		infinite:true,
		autoplaySpeed: 4000,
		easing: 'easeInOutQuint',
		pauseOnHover:false,
		zIndex:1,
		prevArrow: '.visual-arrow .prev',
		nextArrow: '.visual-arrow .next',
		appendDots: $(".visual-slide-dot"),
		customPaging : function(slider, i) {
			thumbTitle = $(slider.$slides[i]).data('title');
			return '<div class="dot-wrap"><strong class="visual-name">'+thumbTitle+'</strong></div>';
			
		},
	});

	// 일시정지, 재생버튼 사용시
	if ( visualPausePlay ) {
		$(".visual-arrow .visual-stop").append("<span class='slick-control-btns'><button class='slick-pause-btn' title='일시정지'><i class='xi-pause'></i></button><button class='slick-play-btn' title='재생'><i class='xi-play-circle-o'></i></button></span>");

		$(document).on("click",".slick-pause-btn",function  () {
			$mainVisualItem.slick("slickPause");
			$(this).hide();
			$(".slick-play-btn").show();
		});
		$(document).on("click",".slick-play-btn",function  () {
			$mainVisualItem.slick("slickPlay");
			$(this).hide();
			$(".slick-pause-btn").show();
		});
	}
	
	setTimeout(function  () {
		addClassName($("#mainVideo"), "fade-in");
	},100);


	/* ************************
	* Func : 메인 Quick메뉴 섹션
	************************ */
		// window 가로 값따라 메인 비주얼 이미지 변경
		$(".kwicks").each(function  () {
		if ( getWindowWidth() < 801 ) {
			$(this).kwicks('destroy');
			$(".main-quick-item").click(function () {
				$(".main-quick-item").removeClass("active");
				$(this).addClass("active");
			});
		}else {
			$(".main-quick-item").removeClass("active");
			$(this).kwicks({
				maxSize : '68.23%',
				spacing : 0,
				behavior: 'menu', 
				selectOnClick:false
			});
		}
	});

	$(window).resize(function  () {
		$(".kwicks").each(function  () {
			if ( getWindowWidth() < 801 ) {
				$(this).kwicks('destroy');
				$(".main-quick-item").click(function () {
					$(".main-quick-item").removeClass("active");
					$(this).addClass("active");
				});
			}else {
				$(".main-quick-item").removeClass("active");
				$(this).kwicks({
					maxSize : '68.23%',
					spacing : 0,
					behavior: 'menu', 
					selectOnClick:false
				});
			}
		});
	});


	
	/* ************************
	* Func : 메인 News 섹션
	************************ */
	var swiper = new Swiper(".main-news-slide", {	
		slidesPerView: 2,
        spaceBetween: 15,
		navigation: {
          nextEl: ".news-arrow.next",
          prevEl: ".news-arrow.prev",
        },
        scrollbar: {
			el: ".swiper-scrollbar",
			hide: false,
			draggable: true,
        },
		breakpoints: {
          641: {
            slidesPerView: 3,
            spaceBetween: 15,
          },
          1025: {
            slidesPerView: 4,
            spaceBetween: 33,
          }
        },
      });



	/* ************************
	* Func : 해당영역갔을때 슬라이드 autoPlay
	* wayPoint.js 필요
	************************ */
	// 해당영역갔을때 슬라이드 autoPlay
	if ($.exists('.start-autoplay-scroll-object')) {
		$(".start-autoplay-scroll-object").slick("slickPause");
		$(".start-autoplay-scroll-object").waypoint(function  () {
			$(this).slick("slickPlay");
		}, { 
			offset: startOffset
		});
	}

	/* ************************
	* Func : 사이드바 FIXED
	* objectFixed() 필요
	************************ */
	if ($.exists('#rightBar')) {
		$(window).scroll(function  () {
			var rightStartTop = $(window).height() / 2;
			objectFixed($("#rightBar"), rightStartTop);
		});
	}
});



/* ************************
* 메인 유튜브 영상
************************ */

/* 유투브 API 가져오기 */ 
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var done = false;
var playerMain; var playerMainM;
var playerID = $("#playerMain").data("code");
var playerIDM = $("#playerMainMobile").data("code");
var playerInfoList = [{id: 'player2', videoId: 'TAk11eksjks'}, {id: 'player3', videoId: 'Sk3va7fu-Mc'}, {id: 'player4', videoId: 'sgpDVISFLgI'}];

if ( detectBrowser() === "ie" ) {
	if ( ieVersionCheck() < 9 ) {
		progressSize = 0;
	}else {
		progressSize = parseFloat(2*Math.PI*(Number(document.querySelector('circle').getAttribute("r")))).toFixed(2);
	}
}else {
	progressSize = parseFloat(document.querySelector('circle').getTotalLength()).toFixed(2);
}



ieYoutubeAlt();

function onYouTubeIframeAPIReady() {
	playerMain = new YT.Player('playerMain', {
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
	
	playerMainM = new YT.Player('playerMainMobile', {
		playerVars: {
		'autoplay': 1,
		'controls': 0,
		'autohide': 1,
		'wmode': 'opaque',
		'showinfo': 0,
		'loop': 1,
		'mute':1,
		'playsinline':1,
		'playlist': playerIDM	// Youtube ID
		},
		videoId: playerIDM,	// Youtube ID
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
		'mute':1,
		'playsinline':1,
		'playlist': playerInfo.videoId,
		},
		videoId: playerInfo.videoId,
		events: {
			'onStateChange': 
			function onPlayerStateChange(event) {	
				if (event.data === 1) {	// 재생
					// Progress bar
					updateBar=setInterval(updateProgressBar, 0);
					event.target.unMute(); // 영상재생시 음소거 off
				}
				if ( event.data === 2 || event.data === 0 ) {	// 일시정지, 정지
					// Progress bar
					clearInterval(updateBar);
					event.target.mute(); // 영상정지시 음소거 on
				}
			}
		}
    });
}

/* 영상 progress circle */
function updateProgressBar (event) {	
	$(players).each(function (i) {	
		if( i == 0){	
			$circleProgressBar = $(".circle-box.circle1 .circle");
			var currentTime = parseFloat(players[0].getCurrentTime()).toFixed(2);
			var videoTime = parseFloat(players[0].getDuration()).toFixed(2);
		}else if(i == 1){	
			$circleProgressBar = $(".circle-box.circle2 .circle");
			var currentTime = parseFloat(players[1].getCurrentTime()).toFixed(2);
			var videoTime = parseFloat(players[1].getDuration()).toFixed(2);
		}else{	
			$circleProgressBar = $(".circle-box.circle3 .circle");
			var currentTime = parseFloat(players[2].getCurrentTime()).toFixed(2);
			var videoTime = parseFloat(players[2].getDuration()).toFixed(2);
		}
		// Circle update
		var size = parseFloat((currentTime*progressSize) / videoTime).toFixed(2);
		$circleProgressBar.css("stroke-dashoffset", (progressSize - size)+"px"); 
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
	//$(".background-video #player2").attr('data-autoplay',''); // 자동재생
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

	function videoPause () { 
		$(players).each(function (i) {
			this.pauseVideo();
		});
	}
	
	/* play버튼 클릭 시 */
	$(".video-play-btn .play").click(function  () {	
		if (getWindowWidth() > 1024) {
			$(this).parent().parent().next(".play-video-bg").delay(200).fadeOut(1000);
			$(this).parent().parent().parent().find(".video-dim").delay(200).fadeOut(1000);
			$(this).parent().parent().siblings(".play-video-txt").delay(200).fadeOut(1000);
		}
		$(this).parent().parent().addClass("play-video");
		/* 해당 비디오 재생 */
		var playNum=$(this).parent().parent().attr('data-video');
		videoPause();
		players[playNum].playVideo();
	});

	
	/* stop버튼 클릭 시  */
	$(".video-play-btn .stop").click(function  () {		
		videoPause();
		$(".video-play-btn").removeClass("play-video");
		if (getWindowWidth() > 1024) {
			$(".video-dim").fadeIn(1000);
			$(this).parent().parent().siblings(".play-video-txt").delay(200).fadeIn(1000);
		}
	});

	/* 탭 클릭 시 비디오 재생, 배경 제거 */
	$('.play-video-tab li a').click(function(){	
		if (getWindowWidth() > 1024) {
			$(".play-video-txt").removeClass("start").addClass("end").fadeIn(1000);
			$(".video-dim").fadeIn(1000);
		}
		var videoNum=$(this).attr('data-video');
		$('.sub-tab-con').each(function(){
			if($(this).attr('data-video')==videoNum){	
				//$(this).find(".play-video-bg").delay(200).fadeOut(1000);
				$(this).find(".video-play-btn").removeClass("play-video");
			}
		});
		videoPause();
		
		//players[videoNum].playVideo();
    });
})


