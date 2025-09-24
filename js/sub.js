/* *******************************************************
 * filename : sub.js
 * description : 서브컨텐츠에만 사용되는 JS
 * date : 2021-06-14
******************************************************** */


$(document).ready(function  () {
	/* ************************
	* 제품뷰페이지 이미지 슬라이드
	************************ */
	$('.equipment-main-list').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  arrows: false,
	  fade: true,
	  autoplay:true,
	  autoplaySpeed:2000,
	  speed:800,
	  infinite:true,
	  asNavFor: '.equipment-small-list',
	});
	$('.equipment-small-list').slick({
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  asNavFor: '.equipment-main-list',
	  dots: false,
	  arrows:false,
	  fade:false,
	  autoplay:true,
	  autoplaySpeed:2000,
	  speed:800,
	  focusOnSelect: true,
	});

	/* ************************
	* CS center > News 슬라이드
	************************ */
	$('.news-slide-list').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows: true,
		dots:true,
		fade: false,
		autoplay:true,
		autoplaySpeed:2000,
		speed:800,
		infinite:true,
		prevArrow: '.news-prev-btn',
		nextArrow: '.news-next-btn',
		responsive: [
					{
					  breakpoint: 681,
					  settings: {
						slidesToShow: 2,
					  }
					},
		]
	});
	

	/* ************************
	* Func : 서브 Visual Active 클래스 붙이기
	* addClassName () 필요
	************************ */
	setTimeout(function  () {
		addClassName($("#visual"), "active");
	},200);

	setTimeout(function  () {
		addClassName($("#introVisual"), "active");
	},200);

	/* ************************
	* Func : 모달팝업 플러그인 사용
	* MagnificPopup.js 필요
	************************ */
	if ($.exists(".popup-gallery")) {
		magnificPopup($(".popup-gallery"));
	}

	/* ************************
	* Func : 일정 가로사이즈 아래부터 scroll 사용하기
	* mCustomScrollbar.js, customScrollX() 필요
	************************ */
	/* 서브 Scrollbar object  */
	$(".custom-scrollbar-wrapper").each(function  () {
		if ( $("html").attr("lang") == "ko" ) {
			var dragTxt = "좌우로 드래그 해주세요.";
		}else {
			var dragTxt = "Drag left and right.";
		}
		$(this).append("<div class='custom-scrollbar-cover'><div class='scroll-cover-txt'><i class='xi-touch'></i><p>"+dragTxt+"</p></div></div>");
		var $scrollObject = $(this).find(".scroll-object-box");
		if ($.exists($scrollObject)) {
			customScrollX($scrollObject);
		}
		$(this).on("touchmove click",function  () {
			$(this).find(".custom-scrollbar-cover").fadeOut(200);
		});
	});

	/* ************************
	* Func : 서브 상단 메뉴 FIXED
	* getWindowWidth(), checkOffset(), toFit() 필요
	************************ */
	if ($.exists(".fixed-sub-menu")) {
		var $fixedSubMenu = $(".fixed-sub-menu");
		var topMenuStart =  checkOffset($fixedSubMenu);

		$(window).scroll(function  () {	
			if ( $(window).scrollTop() > 0 ) {
				$fixedSubMenu.addClass("full");
			}else {
				$fixedSubMenu.removeClass("full");
			}
		});

		$(window).resize(function  () {
			if ( getWindowWidth() > tabletWidth ) {
				topMenuStart =  checkOffset($fixedSubMenu);
			}else {
				$fixedSubMenu.removeClass("top-fixed");
			}
		});
		window.addEventListener('scroll', toFit(function  () {
			if ( getWindowWidth() > tabletWidth ) {
				objectFixed($fixedSubMenu, topMenuStart, "top-fixed");
			}else {
				$fixedSubMenu.removeClass("top-fixed");
			}
		}, {
		}),{ passive: true })
	}


	/* ************************
	* Func : 컨텐츠 메뉴 FIXED 및 클릭시 해당영역 이동
	* getScrollTop(), getWindowWidth(), checkOffset(), toFit(), checkFixedHeight(), moveScrollTop() 필요
	************************ */
	if ($.exists(".cm-fixed-tab-container-JS")) {
		var $fixedMoveTab = $(".cm-fixed-tab-list-JS");		// fixed되는 메뉴 클래스
		var $moveTabItem = $fixedMoveTab.find("li");
		//var $lastTabItem = $moveTabItem.find(".last");
		var menuCount= $moveTabItem.size();
		var tabHeight= $fixedMoveTab.height();
		var nav = [];
		
		$(window).on('load', function  () {
			checkStartOffset();
			nav = checkTopOffset();
		});
		$(window).on('resize', function  () {
			checkStartOffset();
			nav = checkTopOffset();
		}); 		
		
		// 탭이 붙기 시작하는 지점 체크
		function checkStartOffset () {
			var fixedStartPoint =  $(".cm-fixed-tab-container-JS").offset().top - checkFixedHeight();	
			return fixedStartPoint;
		}		

		// 해당되는 각각의 영역 상단값 측정
		function checkTopOffset () {
			var arr = [];
			for(var i=0;i < menuCount;i++){
				if($moveTabItem.hasClass("last")){
					arr[i]=$($moveTabItem.eq(i).children("a").attr("href")).offset().top - 100;
				} else{
					arr[i]=$($moveTabItem.eq(i).children("a").attr("href")).offset().top;
				}
			}
			return arr;
		}
		
		// 스크롤 0일때 상단fixed되는 높이값 체크
		function checkFixedObjectHeight () {
			var fixedObjectTotalHeight = 0;
			for (var i=0; i<$(".top-fixed-object").length; i++) {
				var fixedObjectTotalHeight = fixedObjectTotalHeight + $(".top-fixed-object").eq(i).outerHeight();
			}
			return fixedObjectTotalHeight;
		}

		// 스크롤 event 
		window.addEventListener('scroll', toFit(function  () {
			// 메뉴fixed
			// objectFixed($fixedMoveTab, checkStartOffset(), "top-fixed");

			if ( getScrollTop() >  checkStartOffset() ) {
				$fixedMoveTab.addClass("top-fixed");
			}else if ( getScrollTop() <  (checkStartOffset() + $fixedMoveTab.height()) ) {
				$fixedMoveTab.removeClass("top-fixed");
			}

			$moveTabItem.each(function  (idx) {
				var eachOffset = nav[idx] -  checkFixedHeight();
				if( getScrollTop() >= eachOffset ){
					$moveTabItem.removeClass('selected');
					$moveTabItem.eq(idx).addClass('selected');
					// 모바일 드롭메뉴일때
					if ($.exists($moveTabItem.parents(".cm-drop-menu-box-JS"))) {
						$fixedMoveTab.find(".cm-drop-open-btn-JS > span").text($moveTabItem.eq(idx).find("em").text());
					}
				};
			});
			}, {
		}),{ passive: true })
		
		// 클릭 event 
		$moveTabItem.find("a").click(function  () {
			var goDivOffset = $($(this).attr("href")).offset().top - checkFixedHeight() +1;	// 이동해야할 지점
			if ( getScrollTop()  < checkStartOffset()) {
				if ( getScrollTop() == 0 ) {
					//var goDiv = goDivOffset - checkFixedObjectHeight();
					if ( getWindowWidth () > 800 ) {
						var goDiv = goDivOffset - checkFixedObjectHeight()+ tabHeight + 40;
					}else {
						var goDiv = goDivOffset - checkFixedObjectHeight()+ tabHeight;
					}
				}else {
					var goDiv = goDivOffset - $fixedMoveTab.height();
				}
			}else {
				var goDiv = goDivOffset;
			}
			setTimeout(function  () {
				moveScrollTop(goDiv);
			});

			// 모바일 드롭메뉴일때
			if ($.exists($(this).parents(".cm-drop-menu-box-JS")) ) {
				if ( getWindowWidth () < $fixedMoveTab.data("drop-width")+1 ) {
					$fixedMoveTab.find("ul").slideUp();
				}
			}
			 
			return false;
		});
	}

	/* ************************
	* Func : 에디터관련
	************************ */
	if ($.exists(".editor")) {
		/* 테이블 스크롤넣기 */ 
		$(".editor table").each(function  () {
			$(this).wrap("<div class='editor-table-box'></div>");
		});
		
		/* iframe 태그 감싸기 */ 
		$(".editor iframe").each(function  () {
			var iframeSrc = $(this).attr("src");
			var findStr = "https://www.youtube.com/embed"; 

			if (iframeSrc.indexOf(findStr) != -1) {
			  $(this).wrap("<div class='editor-iframe-box'></div>");
			}
		});
	}


	
	$gnbList = $(".move-line-tab");
	var onnavPosition,onnavinnerPosition,onnavWidth;
	/*  헤더메뉴 효과 셋팅  */
	$(".move-line-tab li.selected").each(function  () {
		onnavPosition = $(this).position().left;
		onnavinnerPosition = $(this).find(".txt-inner").position().left;
		onnavWidth = $(this).find("a > .txt-inner").outerWidth();

		$(".main-move-line").children("span").css({
			left:onnavPosition + onnavinnerPosition , width:onnavWidth
		});
	});

	moveLine();
	$(window).scroll(function  () {	
		setTimeout(function  () {
			moveLine();
		});
	});

	function moveLine () {
		$(".move-line-tab li").each(function  () {	
			if ($(this).hasClass("selected")) {	
				var navPosition = $(this).position().left;
				var navinnerPosition = $(this).find(".txt-inner").position().left;
				var navWidth = $(this).find("a > .txt-inner").outerWidth();
				//$(this).addClass("on")
				$(".main-move-line").children("span").show().stop().animate({left:navPosition + navinnerPosition , width:navWidth},300,"swing");
			}
		});
	}
	/* ************************
	* 제품인트로
	************************ */
	/*$(".accordion-item").click(function  () {	
		$(".accordion-list-box").addClass("open");
		$(".accordion-item").removeClass("none-active-item active-item");
		$(".accordion-item").not($(this)).addClass("none-active-item");
		$(this).addClass("active-item");
	});*/


	/* ************************
	* Solution 슬라이드
	************************ */
	$('.solution-gallery-con').each( function() {
	  $(this).find(".solution-gallery-slide").slick({
			autoplay: true, 
			arrows: true,
			infinite:false,
			slidesToShow: 1,
			slidesToScroll: 1,
			speed:1000,
			fade:false,
			dots: false,
			pauseOnHover:false,
			dots:false,
			autoplaySpeed:2500,
			prevArrow: $(this).find(".gallery-arrow .prev"),
			nextArrow: $(this).find(".gallery-arrow .next"),
	  });
	});

	/* ************************
	*ISSCA 갤러리
	************************ */
  $(".issca-gallery-slide").slick({
		autoplay: true, 
		arrows: true,
		infinite:false,
		slidesToShow: 1,
		slidesToScroll: 1,
		speed:1000,
		fade:false,
		dots: true,
		pauseOnHover:false,
		autoplaySpeed:2500,
		prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Prev" tabindex="0" role="button"><i class="xi-angle-left"></i></button>',
		nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><i class="xi-angle-right"></i></button>',
		/*responsive: [
		{
		  breakpoint: 641,
		  settings: {
			slidesToShow: 2
		  }
		}
	  ]*/
  });
/*
	$(".accordion-info-box .more-btn").on("mouseenter",function  () {	
		$(this).removeClass("active");
		$(this).addClass("hover");
	});
	$(".accordion-info-box .more-btn").on("mouseleave",function  () {	
		if ( $(this).hasClass("hover")) {
			$(this).removeClass("hover");
			$(this).addClass("active");
		}
	});
*/
	/* ************************
	* Lab Equipment :: Accordion
	************************ */
	$(window).on('resize',function  () {
		if (getWindowWidth() > 1024 ) {
			accordionMouseenter();
		}else {
			$('.accordion-item').unbind('mouseenter mouseleave');
			accordionClick();
		}
	})

	if (getWindowWidth() > 1024 ) {
		accordionMouseenter();
		$(".accordion-item").find(".more-btn").addClass("hover");
	}else {
		accordionClick();
	}

	function accordionMouseenter () {
		var $accordionItem = $('.accordion-item');
		$accordionItem.mouseenter(function() {
			$(".accordion-list-box").addClass("open");
			$accordionItem.removeClass('active-item');
			$accordionItem.css('width', '6.25%');
			$(this).addClass('active-item');
			$(this).find(".more-btn").removeClass("hover");
			$(this).find(".more-btn").addClass("active");
		});
		  
		$accordionItem.mouseleave(function() {
			$accordionItem.css('width', '10%');
			$accordionItem.removeClass('active-item');
			$(".accordion-item").find(".more-btn").removeClass("active").addClass("hover");
		});
	}

	function accordionClick () {
		var $accordionItem = $('.accordion-item');
		$accordionItem.click(function  () {	
			$(".accordion-list-box").addClass("open");
			$accordionItem.removeClass("none-active-item active-item");
			$accordionItem.not($(this)).addClass("none-active-item");
			$(this).addClass("active-item");
		});
	}

	/* ************************
		* N-BIOTEK top메뉴
	************************ */
	$(".top-menu-nbiotek .location2").each(function  () {
		var $menuList = $(this).find("li");
		$menuList.find("a").click(function  () {
			var goDiv = $($(this).data("move-id")).offset().top - $(".top-menu-nbiotek").outerHeight() - 80;	
			$("html, body").animate({scrollTop:goDiv},500,"swing");

			var menuIndex = $(this).data("index");
			$(".top-menu-nbiotek .location2 ul li").removeClass("on");
			$(".top-menu-nbiotek .location2 ul li").eq(menuIndex -1).addClass("on");

			var subMenuList = $(".top-menu-nbiotek");
			var selectTxt = $(".top-menu-nbiotek .location2").find("li").eq(menuIndex -1).find("span").text();
			$(".top-menu-nbiotek .location2 .cur-location").find("span").text(selectTxt);

			return false;
		});
		
		var $moveTabItem2 = $(".top-menu-nbiotek .location2").find("li");
		var nav2 = [];
		
		$(window).on('load', function  () {
			nav2 = checkTopOffset();
		});
		$(window).on('resize', function  () {
			nav2 = checkTopOffset();
		}); 		


		// 스크롤 event 
		window.addEventListener('scroll', toFit(function  () {

			$(".top-menu-nbiotek .location2").find("li").each(function  (idx) {
				var eachOffset2 = nav2[idx] -  checkFixedHeight();
				if( getScrollTop() >= eachOffset2 ){
					$moveTabItem2.removeClass('on');
					$moveTabItem2.eq(idx).addClass('on');
					$(".top-menu-nbiotek .location2 .cur-location").find("span").text($moveTabItem2.eq(idx).find("span").text());
				};
			});
			}, {
		}),{ passive: true })

	});
	




	/* ************************
	* Func : Stem Cell Business Intro
	************************ */
	if ($.exists(".stemcell-intro-con")) {
		var $stemIntroItem = $(".stemcell-intro-con .stemcell-intro-item");

		stemIntroBg ();

		function stemIntroBg () {
			$stemIntroItem.mouseenter(function  () {
				var bgUrl = $(this).attr("data-bg");
				if ($(this).parents(".stemcell-intro-con").hasClass("on")) {
					$(".stemcell-intro-con .bg").css({"background-image": "url("+bgUrl+")"});
					$stemIntroItem.removeClass("on");
					$(this).addClass("on");
				}else {
					$(this).parents(".stemcell-intro-con").addClass("on");
				}
			})
			$stemIntroItem.mouseleave(function  () {
				var bgUrl = $(".stemcell-intro-item.on").attr("data-bg");
				$(".stemcell-intro-con .bg").css({"background-image": "url("+bgUrl+")"});
			})
		}
	}
	

	/* ************************
	* Func : Stem Cell Business LeftMenu
	* getWindowWidth(), checkOffset(), toFit() 필요
	************************ */
	if ($.exists("#leftMenu")) {
		/* menu */
		var $leftMenuBtn = $(".stemcell-business-container .open-btn");
		var $leftMenu = $("#leftMenu");
		var $leftMenuList = $leftMenu.find(".menu-list");
		var $leftMenu5dep = $leftMenuList.children("li").eq(dep4-1).find(".dep5-menu").children("li");
		var leftMenuState = false;


		leftMenuFixed ();
		toggleMenuButton ();
		toggleDepth5Menu();
		menuInit();
		
		
		if (getWindowWidth() > 1260) {
			customScrollY ("#leftMenu .menu-box");
			leftMenuScroll () ;
		}else {
			$("#leftMenu .menu-box").mCustomScrollbar("destroy");
		}
		
		$(window).resize(function(){
			leftMenuFixed();
			menuInit();
			
			if (getWindowWidth() > 1260) {
				customScrollY ("#leftMenu .menu-box");
				leftMenuScroll () ;
			}else {
				$("#leftMenu .menu-box").mCustomScrollbar("destroy");
			}
		})
		
		/* active & open 초기화 */
		function menuInit () {
			if (getWindowWidth() > 1536) {
				if (dep4 > 0) {
					$leftMenuList.children("li").eq(dep4 -1).addClass("active");
				}
				if (dep5 > 0) {
					$leftMenuList.children("li").eq(dep4-1).find(".dep5-menu").show();
					$leftMenu5dep.eq(dep5 -1).addClass("active");
				}
				openLeftMenu();
			}else {
				closeLeftMenu ()
			}
		}

		/* Left Menu Fixed */
		window.addEventListener('scroll', toFit(function  () {
			leftMenuFixed();
		}, {
		}),{ passive: true })
		function leftMenuFixed () {
			var $fixedContainer = $(".stemcell-business-container");
			var $moveContainer = $("#leftMenu");
		
			if ( getWindowWidth() > 1260 ) {
				var absoluteStart = $fixedContainer.offset().top + $fixedContainer.outerHeight() - $moveContainer.outerHeight()  - $(".fixed-sub-menu").height() ;
				var fixedStart = $fixedContainer.offset().top - $(".fixed-sub-menu").height() ;
			}else {
				var absoluteStart = $fixedContainer.offset().top + $fixedContainer.outerHeight() - $moveContainer.outerHeight() - 60;
				var fixedStart = $fixedContainer.offset().top - 60 ;
			}
			
			if (getWindowWidth() > 1260) {
				if($(window).scrollTop() > fixedStart){
					if ( $(window).scrollTop() > absoluteStart ) {
						$moveContainer.removeClass("fixed").addClass("absolute");
					}else {
						$moveContainer.removeClass("absolute").addClass("fixed");
					}
				} else {
					$moveContainer.removeClass("absolute").removeClass("fixed");
				}
			}else {
				if($(window).scrollTop() > fixedStart){
					$moveContainer.removeClass("absolute").addClass("fixed");
				} else {
					$moveContainer.removeClass("fixed");
				}
			}
			//console.log($fixedContainer.height(), $moveContainer.outerHeight());
			/*if ($fixedContainer.height() < $moveContainer.outerHeight()) {
				$fixedContainer.css("height",$moveContainer.outerHeight());
			}*/
		}
	
		// Left 메뉴  Button Click
		function toggleMenuButton () {
			$leftMenuBtn.click(function  () {
				if ( leftMenuState ) {
					closeLeftMenu();
					//console.log("close");
				}else {
					openLeftMenu();
					//console.log("open");
				}
				return false;
			});
		}
		//  Left 메뉴열기
		function openLeftMenu () {
			leftMenuState = true;
			$leftMenuBtn.addClass("active");
			$leftMenu.addClass("open");
			$leftMenuList.children("li").eq(dep4-1).addClass("active").find(".dep5-menu").show().find("li").eq(dep5-1).addClass("active");
			if (getWindowWidth() > 1260) {
				leftMenuScroll () ;
			}else {
				$leftMenu.find(".inner-box").slideDown(400);
			}
		}
		// Left 메뉴닫기
		function closeLeftMenu () {
			leftMenuState = false;
			$leftMenuBtn.removeClass("active");
			$leftMenu.removeClass("open");
			$leftMenuList.children("li").removeClass("active").find(".dep5-menu").hide();
			if (getWindowWidth() < 1260) {
				$leftMenu.find(".inner-box").slideUp(400);
			}
		}
		// Left 5DEPTH 클래스  및 오픈
		function toggleDepth5Menu () {
			$leftMenuList.children("li:has('.dep5-menu')").addClass("has-5dep");
			$leftMenuList.children("li:has('.dep5-menu')").children("a").click(function(event){
				$leftMenuList.children("li:has('.dep5-menu')").children(".dep5-menu").slideUp(400);
				/* 5dep가 열려있을때 */		
				if ( $(this).parent("li").hasClass("active") ){
					$(this).parent("li").removeClass("active");
					$(this).siblings(".dep5-menu").slideUp(400);			
				}
				/* 5dep가 닫혀있을때 */ 
				else{
					$leftMenuList.children("li:has('.dep5-menu')").each(function() {
						if ( $(this).hasClass("active") ){
							$(this).removeClass("active");
							$(this).children(".dep5-menu").slideUp(400);
						}
					});	
					$(this).parent("li").addClass("active");
					$(this).siblings(".dep5-menu").slideDown(400);
					setTimeout(function  () {
						leftMenuScroll();
						$(".mCustomScrollbar").mCustomScrollbar("update");
					},400)
				}
				return false;
			});
		}

		function leftMenuScroll () {
			var $leftMenuBox = $("#leftMenu .menu-box");
			var leftMenuBoxHeight = $leftMenuBox.height();
			var compareHeight = $("#leftMenu > .inner-box").height() - $("#leftMenu .bottom-txt-box").height() - $("#leftMenu .top-tit").outerHeight() - 36 - 50 - leftMenuBoxHeight;
			var changeHeight = $("#leftMenu").height() - $("#leftMenu .bottom-txt-box").height() - parseInt($("#leftMenu .inner-box").css("paddingTop")) - $("#leftMenu .top-tit").outerHeight() - 36 - 50 ;

			if (getWindowWidth() > 1260) {
				if (compareHeight <= leftMenuBoxHeight) {
					$leftMenuBox.css("height",changeHeight);
				}else {
					$leftMenuBox.css("height","auto");
				}
			}
		}
	}
	
	/* ************************
	* Func : Stem Cell Business rollingActive
	************************ */
	if ($.exists(".solutions-outline-bottom-con")) {
		rollingActive(".outline-cirlcle-item-box");
	}
	/* ************************
	* Func : Stem Cell Business Slide
	************************ */
	if ($.exists(".stemcell-business-slide")) {
		var $stemcellBusinessSlide = $(".stemcell-business-slide");
		$stemcellBusinessSlide.slick({
			autoplay: true, 
			arrows: true,
			infinite:true,
			slidesToShow: 1,
			slidesToScroll: 1,
			speed:1000,
			fade:true,
			dots: true,
			pauseOnHover:false,
			autoplaySpeed:2500,
			prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Prev" tabindex="0" role="button"><i class="xi-long-arrow-left"></i></button>',
			nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><i class="xi-long-arrow-right"></i></button>',
		    zIndex: 1
		});

		$(window).on('resize', slickResponsive);
		slickResponsive();
		function slickResponsive () {
			if (getWindowWidth() < 1366 +1) {
				$stemcellBusinessSlide.slick('unslick');
			}else {
				$stemcellBusinessSlide.slick('refresh');
			}
		}
	}
	
	/* ************************
	* Func : Stem Cell Plan Graph
	************************ */
	if ($.exists(".solutions-plan-graph-box")) {
		var $planGraphItem = $(".solutions-plan-item");
		var $planTitleBox = $(".solutions-plan-tit-box");
		var $planTitleItem = $(".solutions-plan-tit-item");
		var $bg = $(".solutions-plan-content .bg");
		var $graphBar = $(".graph-bar .bar");

		$planGraphItem.find(".row").each(function  () {
			var barSize = parseFloat($(this).find(".month").text()) * (100/7);
			var barStart = parseFloat($(this).find(".bar").attr("data-start"))  * (100/7);
			$(this).find(".bar").css({
				width:barSize+"%",
				left:barStart+"%"
			});
		})
			
		$planGraphItem.find(".first-box").mouseenter(function  () {
			var indexNum = $(this).parents(".solutions-plan-item").attr("data-index");
			var bgUrl = $bg.attr("data-bg-url") + indexNum;
			
			if (!($(this).parents(".solutions-plan-item").hasClass("open"))) {
				// Hidden Item Open
				$planGraphItem.find(".hidden-box").hide();
				$planGraphItem.removeClass("open");
				$(this).parents(".solutions-plan-item").addClass("open");
				$(this).siblings(".hidden-box").show();
				// Title Change
				$planTitleItem.hide();
				$(".solutions-plan-tit-item[data-index="+indexNum+"]").show();
				$bg.css("background-image", "url("+bgUrl+".jpg)");

				if (getWindowWidth() < 1024) {
					setTimeout(function  () {
						leftMenuFixed();
					})
				}
			}
		})
/*
		$(".solutions-plan-graph-box").children(".area").mouseleave(function  () {
			// Hidden Item Open
			$planGraphItem.find(".hidden-box").hide();
			$planGraphItem.removeClass("open");
			// Title Change
			$planTitleItem.hide();
			$(".solutions-plan-tit-item.default").show();
			$bg.css("background-image", "none");
		});

		*/


	/*
		$planGraphItem.find(".first-box").click(function  () {
			var indexNum = $(this).parents(".solutions-plan-item").attr("data-index");
			var bgUrl = $bg.attr("data-bg-url") + indexNum;
			
			if (!($(this).parents(".solutions-plan-item").hasClass("open"))) {
				// Hidden Item Open
				$planGraphItem.find(".hidden-box").slideUp();
				$planGraphItem.removeClass("open");
				$(this).parents(".solutions-plan-item").addClass("open");
				$(this).siblings(".hidden-box").slideDown();
				// Title Change
				$planTitleItem.hide();
				$(".solutions-plan-tit-item[data-index="+indexNum+"]").fadeIn();
				$bg.css("background-image", "url("+bgUrl+".jpg)");

				if (getWindowWidth() < 1024) {
					setTimeout(function  () {
						leftMenuFixed();
					})
				}
			}else {
				// Hidden Item Close
				$planGraphItem.find(".hidden-box").slideUp();
				$planGraphItem.removeClass("open");
				// Title Change
				$planTitleItem.hide();
				$(".solutions-plan-tit-item.default").fadeIn();
				$bg.css("background", "none");

				if (getWindowWidth() < 1024) {
					//setTimeout(function  () {
						leftMenuFixed();
					//})
				}
			}
		})
	*/

		
	}


	/* ************************
	* Func : Stem Cell Multi SVG Draw
	************************ */
	if ($.exists(".system-multi-con02")) {
		$(".system-multi-con02 .img-box").waypoint(function(){
			svgDraw ();
		}, { 
			offset: "80%",
			triggerOnce : true 
		});
		
		function svgDraw () {
			/* SVG Animation */
			var pathes = $('.svg-line-group').children();
			pathes.each(function( i, path ) {
				var total_length = path.getTotalLength();
				path.style.strokeDasharray = total_length + " " + total_length;
				if (getWindowWidth() > 1024) {
					path.style.strokeDashoffset = total_length;
				}else {
					path.style.strokeDashoffset = total_length * (-1);
				}
				
				$(path).stop().animate({
					"strokeDashoffset" : 0
				}, 1000);
			});
		}
	}


});



/* *********************** 스크롤 ************************ */
$(window).load(function  (e) {
	if ($.exists(".stemcell-intro-page")) {
		var wheel_move;
		var isPassive = function () {
			var passiveSupported = false;
			try {
			  document.addEventListener("test", null, { get passive() { passiveSupported = true }});
			} catch(e) {}

			return passiveSupported;
		}
		var windowHeightCheck = function  () {
			return $(window).scrollTop();
		}
		var scrollStop = function(event) {
				event.preventDefault();
				event.stopPropagation();
				return false;
		}
		var browserWheelStop = function  () {
			if (isPassive()) {
				this.addEventListener("wheel",scrollStop, {passive: false});
			} else {
				$('body').on('scroll touchmove mousewheel', scrollStop);
			}
		}
		//if (getWindowWidth() >tabletWidth) {
			var $section1_top = $(".stemcell-intro-page").offset().top;
		//}
		
		if (windowHeightCheck() ===  0) {
			browserWheelStop();
		}


		$("#visual").on("mousewheel DOMMouseScroll", function (e, delta) {
			e.preventDefault();
			var $section1_top = $(".stemcell-intro-page").offset().top;
			if (delta < 0){ // down
				moveScrollContent($section1_top,true);
				return;
			}else { //up
				moveScrollContent(0,false)
			}
		});
		$(".stemcell-intro-page").on("mousewheel DOMMouseScroll", function (e, delta) {
			//e.preventDefault();
			var $section1_top = $(".stemcell-intro-page").offset().top;
			if (delta > 0){ // up
				if (getScrollTop() > $section1_top ) {
					if (isPassive()) {
						window.removeEventListener("wheel",scrollStop, {passive: false});
					} else {
						$('body').off('scroll touchmove mousewheel', scrollStop);
					}
				}else {
					e.preventDefault();
					moveScrollContent(0,true);
				}
				return;
			}else { //down
				if (getScrollTop() >= $section1_top ) {
					if (isPassive()) {
						window.removeEventListener("wheel",scrollStop, {passive: false});
					} else {
						$('body').off('scroll touchmove mousewheel', scrollStop);
					}
				}else {
					e.preventDefault();
					moveScrollContent($section1_top,true);
				}
			}
		});
		function moveScrollContent (top,scrollState) {
			if(wheel_move && wheel_move.progress() < 1){
				return;
			}
			wheel_move = TweenMax.to('html, body', 1, {
				scrollTop:top,
				ease: Expo.easeInOutCubic,
				onComplete : function() {
					if ( scrollState ) {
						if (isPassive()) {
							window.removeEventListener("wheel",scrollStop, {passive: false});
						} else {
							$('body').off('scroll touchmove mousewheel', scrollStop);
						}
					}
				}
			});
		}
	}
});