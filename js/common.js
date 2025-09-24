/* *******************************************************
 * filename : common.js
 * description : 전체적으로 사용되는 JS
 * Update : 2021-06-15
******************************************************** */

var laptopWidth = 1366;
var tabletWidth = 1024; // 헤더가 변경되는 시점
var mobileWidth = 800;

$(window).load(function  () {
	// toAnchorParameter("anchor");	/* 주소~?anchor=content  */ 
});

$(document).ready(function  () {
	/* ************************
	* Func : 브라우저 체크 및 기기체크
	* isMobile() 필요
	************************ */
	checkOsBrowser();
	$(window).on('resize', checkOsBrowser);
	function checkOsBrowser () {
		if ( isMobile() ) {
			$("body").removeClass("is-pc").addClass("is-mobile").addClass(detectOS()+"-os");
		}else {
			$("body").removeClass("is-mobile").addClass("is-pc").addClass(detectBrowser()+"-browser");
		}
	}

	/* ************************
	* Func : 스킵네비게이션 영문번역
	************************ */
	if ( $("html").attr("lang") != "ko" ) {
		$(".cm-accessibility a").text("Skip to content");
	}

	/* ************************
	* Func : 웹접근성 키보드이용시
	************************ */
	if ( detectBrowser() !== "ie" && !isMobile() ) {
		mouseCheck();
	}
	function mouseCheck () {
		$("body").mousemove(function(event) { 
			$(this).addClass("mouse");
		});
		$("body").on("keydown touchstart",function(event) { 
			$(this).removeClass("mouse");
		});
	}

	/* ************************
	* Func : Waypoint.js
	* Waypoint.js, isMobile () 필요
	************************ */
	if ($.exists('[data-scroll]')) {
		if ( isMobile() ) {
			startOffset = "100%";
		}else {
			startOffset = "80%";
		}
		$("[data-scroll]").waypoint(function(){
			$(this).addClass("animated");
		}, { 
			offset: startOffset
		});
	}
		
	/* ************************
	* Func : 드롭메뉴 공통
	* getWindowWidth () 필요
	************************ */
	$(".cm-drop-menu-box-JS").each(function  () {
		var $dropBox = $(this);
		var $dropOpenBtn = $(this).find(".cm-drop-open-btn-JS");
		var $dropList = $(this).find(".cm-drop-list-JS");
		var eventState = $dropBox.data("drop-event");
		
		if ( eventState === "click" ) {
			$dropOpenBtn.click(function  () {
				$dropList.slideToggle(500);
				$dropBox.toggleClass("open");
				$dropBox.on("mouseleave", function  () {
					dropClose ();
				});
				return false;
			});
			$("body").click(function  () {
				dropClose();
			});
		}else if ( eventState === "hover" ) {
			$dropBox.hover(function  () {
				$dropList.slideDown(500);
				$dropBox.addClass("open");
			},function  () {
				dropClose ();
			});
		}
		function dropClose () {
			if ( $dropBox.data("drop-width") ) {
				if ( getWindowWidth () < $dropBox.data("drop-width")+1 ) {
					$dropList.slideUp(500);
					$dropBox.removeClass("open");
				}
			}else {
				$dropList.slideUp(500);
				$dropBox.removeClass("open");
			}
		}
		$(window).resize(function  () {
			if ( getWindowWidth () > $dropBox.data("drop-width") ) {
				$dropList.removeAttr("style");
			}else {
				$dropList.hide();
			}
		});
	});

	/* ************************
	* Func : 탭 메뉴 공통 사용
	* getWindowWidth () 필요
	************************ */
	$(".cm-tab-container-JS").each(function  () {
		var $cmTabList = $(this).find(".cm-tab-list-JS");
		var $cmTabListli = $cmTabList.find("li");
		var $cmConWrapper = $(this).children(".cm-tab-content-wrapper-JS");
		var $cmContent = $cmConWrapper.children();
		
		
		// 탭 영역 숨기고 selected 클래스가 있는 영역만 보이게
		var $selectCon = $cmTabList.find("li.selected").find("a").attr("href");
		var selectTxt = $cmTabList.find("li.selected").find("em").text();
		$cmContent.hide();
		$($selectCon).show();

		$cmTabListli.children("a").click(function  () {
			if ( !$(this).parent().hasClass("selected")) {
				var visibleCon = $(this).attr("href");
				$cmTabListli.removeClass("selected");
				$(this).parent("li").addClass("selected");
				$cmContent.hide();
				$(visibleCon).fadeIn();
			}
			return false;
		});

		// 모바일 버튼이 있을때 추가
		var $cmTabMobileBtn = $(this).find(".cm-tab-select-btn-JS");
		if ($.exists($cmTabMobileBtn)) {
			$cmTabMobileBtn.find("span").text(selectTxt);
			// Mobile Btn Click
			$cmTabMobileBtn.click(function  () {
				$(this).toggleClass("open").siblings().slideToggle();
				return false;
			});

			// Mobile List Click
			$cmTabListli.children("a").click(function  () {
				$cmTabMobileBtn.find("span").text($(this).find("em").text());
				tabListClose();
			});
			$("body").click(function  () {
				tabListClose();
			});
			function tabListClose () {
				if ( getWindowWidth () < 801 ) {
					$cmTabMobileBtn.removeClass("open").siblings().slideUp();
				}
			}
			$(window).resize(function  () {
				if ( getWindowWidth () > 800 ) {
					$cmTabMobileBtn.siblings().removeAttr("style");
				}else {
					$cmTabMobileBtn.siblings().hide()//.css("display","none");
				}
			});
		}
	});

	/* ************************
	* Func : 단어 Split 사용 
	* Splitting.js 필요
	************************ */	
	/* -------- Split :: 기본 -------- */ 
	if ($.exists('.cm-word-split')) {
		var $mainTxt = ('.cm-word-split');
		// 텍스트 Split
		splittingText($mainTxt);
		// Split 텍스트에 delay주기	
		$($mainTxt).each(function  () {
			splittingTextDelay($(this),$(this).data("speed"),$(this).data("speed-delay"));
		});
	}
	/* -------- Split :: Splitting Plugin -------- */ 
	if ($.exists('.cm-word-split-JS')) {
		if ( detectBrowser () !== "ie" || ieVersionCheck() > 9 ) {
			Splitting();
			var $splittingTxt = $(".cm-word-split-JS");
			$($splittingTxt).each(function  () {
				splittingTextDelay($(this),$(this).data("speed"),$(this).data("speed-delay"));
			});
		}
	}

	/* ************************
	* Func : 상단 :: 모바일버전에서 헤더 FIXED
	* getWindowWidth (), objectFixed() 필요
	************************ */	
	if ($.exists('#header')) {
		$(window).scroll(function  () {
			if ( getWindowWidth () < (tabletWidth-1) ) {
				objectFixed($("#header"), 0, "top-fixed");
			}
		});
		$(window).resize(function  () {
			if ( getWindowWidth () > tabletWidth ) {
				$("#header").removeClass("top-fixed");
			}
		});
	}

	/* ************************
	* Func : 상단 :: 검색 toggle
	************************ */	
	$(".header-search-box").each(function  () {
		var $searchBox = $(this);
		var $openBtn = $(this).find(".header-search-open-btn");
		var $closeBtn = $(this).find(".header-search-close-btn");
		
		$openBtn.click(function  () {
			$searchBox.addClass("open");
		});
		$closeBtn.click(function  () {
			$searchBox.removeClass("open");
		});
	});

	/* ************************
	* Func : 상단 :: 사이트맵 스타일 02
	************************ */
	if ($.exists('.sitemap-open-btn')) {
		var sitemapState = false;
		var $sitemapOpenbtn = $(".sitemap-open-btn");
		
		// 클릭이벤트
		var sitemapState = false;
		var $sitemapOpenbtn = $(".sitemap-open-btn");
		
		//  Toggle
		$(".sitemap-open-btn").click(function  () {
			if ( ! sitemapState ) {
				openSitemap();
			}else {
				closeSitemap();
			}
			if ( $(this).data("event") === "toggle") {
				sitemapState = !sitemapState;
			}
		});
		// Close Button
		$(".sitemap-close-btn").click(function  () {
			sitemapState = !sitemapState;
			closeSitemap();
		});

		function openSitemap () {
			$("#sitemapContent").addClass("open");
			if ( $sitemapOpenbtn.data("event") === "toggle") {
				$sitemapOpenbtn.addClass("active");
			}
			$("body").css({'height':$(window).height(), 'overflow':'hidden'});
			if ($.exists('#fullpage')) {
				$.fn.fullpage.setAllowScrolling(false);
				$.fn.fullpage.setKeyboardScrolling(false);
			}
		}
		function closeSitemap () {
			$("#sitemapContent").removeClass("open");
			$sitemapOpenbtn.removeClass("active");
			$("body").css({'height':'auto', 'overflow':'auto'});
			if ($.exists('#fullpage')) {
				$.fn.fullpage.setAllowScrolling(true);
				$.fn.fullpage.setKeyboardScrolling(true);
			}
		}
	}

	/* ************************
	* Func : 하단 :: top버튼
	* moveScrollTop (), objectFixed() 필요
	************************ */
	$(".to-top-btn").each(function  () {
		// top버튼 나오게 (필요한 경우에만 넣으세요)
		if ( $(this).length > 0 ) {
			$(window).scroll(function  () {
				objectFixed($(".to-top-btn"), 0, "bottom-fixed");
				objectFixed($(".business-inquiry-btn"), 0, "bottom-fixed");
			});
		}
		// top버튼 클릭
		$(this).on("click",function  () {
			if ($.exists('#fullpage')) {
				$.fn.fullpage.moveTo(1);
			}else {
				$("html, body").animate({scrollTop:0}, 300 ,"easeInOutExpo",function  () {
					$(".logo > a").focus();
				});
			}
			
			return false;
		});
	});


	/* ************************
	* Func : 하단 :: 파트너사 리스트
	************************ */
	if ($.exists('.footer-partner-list')) {
		$('.footer-partner-list').slick({
			slidesToShow: 7,
			slidesToScroll: 1,
			arrows: true,
			fade: false,
			dots:false,
			autoplay: true,
			speed:500,
			infinite:true,
			autoplaySpeed: 3000,
			easing: 'easeInOutQuint',
			pauseOnHover:false,
			prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Prev" tabindex="0" role="button"><i class="xi-angle-left-min"></i></button>',
			nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><i class="xi-angle-right-min"></i></button>',
			responsive: [
						{
						  breakpoint: 1367,
						  settings: {
							slidesToShow: 5
						  }
						},
						{
						  breakpoint: 1025,
						  settings: {
							slidesToShow: 3
						  }
						}
					  ]
		});
	}

	
	/* ************************
	* Func : 하단 :: 푸터 사이트맵 삽입(대메뉴복사)
	************************ */
	if ( $.exists(".footer-sitemap-list-con") ) {
		cloneFooterSitemap();

		function cloneFooterSitemap () {
			var $sitemapGnbList = $("#gnb > ul > li");
			var gnbLength = $sitemapGnbList.length;
			$(".footer-sitemap-list-con").append("<ul></ul>");
			
			for(var i=0; i < gnbLength; i++){
				var $gnb1depItem = $sitemapGnbList.eq(i).children("a");
				var $gnb2depList = $sitemapGnbList.eq(i).find(".gnb-2dep > ul").html() ? $sitemapGnbList.eq(i).find(".gnb-2dep > ul").html() :	'<a href="'+$gnb1depItem.attr("href")+'">'+$gnb1depItem.text()+'</a>';
				$(".footer-sitemap-list-con > ul").append('<li><h3>'+$gnb1depItem.text()+'</h3><ul class="sitemap-2dep">'+$gnb2depList+'</ul></li>');
			}
		}
	}

	/* ************************
	* Func : Custom Select 
	************************ */
	if ($.exists('.custom-select-box .custom-select')) {
		$(".custom-select-box .custom-select").each(function() {
			var classes = $(this).attr("class");
			var id = $(this).attr("id");
			var name = $(this).attr("name");
			var template = '<div class="' + classes + '">';
			template += '<span class="custom-select-trigger">' + $(this).attr("placeholder") + "</span>";
			template += '<ul class="custom-option-drop-list">';
			$(this).find("option").each(function() {
				template += '<li class="custom-option-item ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + "</li>";
			});
			template += "</ul></div>";
			$(this).wrap('<div class="custom-select-wrapper"></div>');
			$(this).hide();
			$(this).after(template);
		});
		$(".custom-option:first-of-type").hover(function() {
			$(this).parents(".custom-option-drop-list").addClass("option-hover");
		}, function() {
			$(this).parents(".custom-option-drop-list").removeClass("option-hover");
		});
		$(".custom-select-trigger").on("click", function(event) {
			$("html").one("click", function() {
				$(".custom-select").removeClass("opened");
			});
			$(this).parents(".custom-select").toggleClass("opened");
			event.stopPropagation();
		});
		$(".custom-option-item").on("click", function() {
			$(this).parents(".custom-select-wrapper").find("select").val($(this).data("value"));
			$(this).parents(".custom-option-drop-list").find(".custom-option-item").removeClass("selection");
			$(this).addClass("selection");
			$(this).parents(".custom-select").removeClass("opened");
			$(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text());
			// 이메일 선택할때 넣어주세요.
			/* if ($(this).data("value") != "a" && $(this).data("value") != "b") {
				$(".email2").attr("value", $(this).text()).prop("readonly", true);
			} else {
				$(".email2").attr("value", "").prop("readonly", false).focus();
			} */
		});
	}


	/* ************************
	* Func : 메인 Global map 섹션
	************************ */
	$('.country-list li').click(function(){	
		$(".country-list li").removeClass("on")
		$(this).addClass('on');

       var aVal=$(this).attr('data-num');
       $('.nation-circle').each(function(){
			if($(this).attr('data-num')==aVal){	
				$(".nation-circle").fadeOut().removeClass("on");
				$(this).fadeIn().addClass('on');
			}
       });
    });


});

$(window).load(function  () {	
	function getParameter(strParamName){
		var arrResult = null;
		if(strParamName){
			arrResult = location.search.match(new RegExp("[&?]" + strParamName + "=(.*?)(&|$)"));
		}
		return arrResult && arrResult[1] ? arrResult[1] : null;
	}

if ( getParameter("menu") ) {
		var delta = 150; 
		var timer = null;
		goDivTop ();
		$(window).on('resize', function  () {
			clearTimeout( timer ); 
			timer = setTimeout( goDivTop, delta );
		})
		function goDivTop () {
			if (getWindowWidth () < 801) {
				var goDiv = $("#"+getParameter("menu")+"").offset().top;	// 모바일메뉴 	
			}else {
				var goDiv = $("#"+getParameter("menu")+"").offset().top - $("#topMenu04").height() - $(".sub-tab-wrapper-style").height();		// pc메뉴
			}
			$("html, body").animate({scrollTop:goDiv}, 400);
			return false;
		}
	}

	/* ************************
	* Func : 메인 비주얼 높이 설정 및 slick 슬라이드
	* slick.js , getWindowWidth(), getWindowHeight() 필요
	************************ */
	// 메인 비주얼 높이값 설정
	if ($.exists('.full-height')) {
		mainVisualHeight();
		$(window).on('resize', mainVisualHeight);

		function mainVisualHeight () {
			var visual_height = getWindowHeight();	// header가 fixed or absolute일경우 - $("#header").height() 삭제 - $("#header").height()
			if ( getWindowWidth() > 800 ) {
				$(".full-height").height(visual_height);
			}else {
				$(".full-height").css("height","auto");
			}
		}
	}

});


$(window).load(function  () {
	/* *********************** 한페이지 내에서의 주소 이동 ************************ */
	toAnchorParameter("anchor");	/* 주소~?anchor=content */ 
});