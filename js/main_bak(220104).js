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
		$fullPage.fullpage({
			css3: true,
			fitToSection: false,
			navigation: false,
			scrollBar:false,
			scrollingSpeed:800,
			navigationPosition: 'right',
			navigationTooltips: ['Content01', 'Content02', 'Content03', 'Content04'],
			//responsiveWidth: tabletWidth,
			responsiveHeight : 550,
			onLeave : function(origin, destination, direction){
				setTimeout(function  () {
					$(".section").eq(destination-1).find("[data-scroll]").addClass("animated");
				},500);
				
				if ( destination == 2 )  {	
					$("#mainVisual").addClass("active-section");
					$(".main-visual-con").slick("slickPlay");
				}else if( destination == 4 ){
					$("#mainPlayVideo").addClass("active-section");
					$("#mainPlayVideo .play-video-bg.video-bg-01").delay(1000).fadeOut(1000);
					setTimeout(function  () {
						players[0].playVideo();
					},100);
				}

				if ( destination == 5 )  {	
					$("#header").addClass("bk")
				}else{	
					$("#header").removeClass("bk")	
				}
				
				if ( destination > 6 )  {
					$("body:not('.fp-responsive')").find("#header").hide();	// ie responsive모드에서 상단으로 이동시 destination 오류로 추가
				}else {
					$("body:not('.fp-responsive')").find("#header").show();
				}

				if (direction == 'up') {  
                    $("#header").removeClass("down");
					$("#header").addClass("up");
                }else if(direction == 'down'){ 
                    $("#header").removeClass("up");
					$("#header").addClass("down");
                }

				if ( destination >1 )  {	
					$("#header").addClass("content")
				}else{	
					$("#header").removeClass("content")	
				}

			}
		});
	}


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
				maxSize : '63%',
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
					maxSize : '63%',
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
var playerMain;
var playerID = $("#playerMain").data("code");
var playerInfoList = [{id: 'player2', videoId: 'Sk3va7fu-Mc'}, {id: 'player3', videoId: 'TAk11eksjks'}, {id: 'player4', videoId: 'sgpDVISFLgI'}];

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
		$(this).parent().parent().parent().next(".play-video-bg").delay(200).fadeOut(1000);
		$(this).parent().addClass("play-video");
		/* 해당 비디오 재생 */
		var playNum=$(this).parent().attr('data-video');
		videoPause();
		players[playNum].playVideo();
	});
	
	/* stop버튼 클릭 시  */
	$(".video-play-btn .stop").click(function  () {		
		videoPause();
		$(".video-play-btn").removeClass("play-video");
	});

	/* 탭 클릭 시 비디오 재생, 배경 제거 */
	$('.play-video-tab li a').click(function(){	
		$(".play-video-txt").removeClass("start").addClass("end");
		var videoNum=$(this).attr('data-video');
		$('.sub-tab-con').each(function(){
			if($(this).attr('data-video')==videoNum){	
				$(this).find(".play-video-bg").delay(200).fadeOut(1000);
				$(this).find(".video-play-btn").addClass("play-video");
			}
		});
		videoPause();
		players[videoNum].playVideo();
    });
})


