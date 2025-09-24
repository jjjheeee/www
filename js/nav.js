/* *******************************************************
 * filename : nav.js
 * description : 네비게이션 및 사이드바 on 등 메뉴에 관련된 JS
 * date : 2021-06-14
******************************************************** */

// PC, 모바일 공통
var $snb = $(".snb");
var $snbMenu = $(".cm-top-menu");
// PC
var $gnb = $("#gnb");
var $gnbList = $gnb.children("ul");
var $gnbItem = $gnbList.children("li");
var $gnb_dep2 = $gnbItem.children(".gnb-2dep");
var $gnbBg = $('.gnb-overlay-bg');
// 모바일
var $menuBtn = $("#header .nav-open-btn");
var $gnbM = $("#gnbM");
var $gnbMList = $gnbM.find("#navigation");
var $gnbMBg = $('.gnb-overlay-bg-m');
var menuState = false;

$(document).ready(function  () {
	// PC 2차메뉴 init
	if ( $gnb.is(".total-menu") ) {
		openTotalMenu();
	}else if ( $gnb.is(".each-menu") ) {
		openEachMenu();
	}
	// PC,모바일  2차메뉴 공통일때
	if ( $gnbMList.data("menu-clone") ) {
		cloneMenu();
	}
	// PC 2차 메뉴에 마우스 올렸을때 대메뉴 on
	$gnb_dep2.hover(function(){
		$(this).parent("li").addClass("on");
	},function  () {
		$gnbItem.removeClass("on");
	});
	
	// PC 1차 메뉴에 마우스 올렸을때 over 클래스 추가
	$gnbItem.hover(function(){
		$(this).addClass("over");
	},function  () {
		$gnbItem.removeClass("over");
	});

	
	// Mobile Menu
	if ( $.exists("#gnbM") ) {
		toggleNavButton();
		calcMenuHeight();
		toggleDepth2Menu();
		addClassFullMenu();
	}

	// 서브 링크이동
	if ( $.exists(".sub-prev-page-btn") || $.exists(".sub-next-page-btn") ) {
		checkPrevNextLink();
	}
	activeMenuIdx();
});

$(window).resize(function  () {
	// 모바일 gnb열린 후 창 크게했을때 스크롤바 생성
	if ( menuState ) {
		if ( getWindowWidth() > tabletWidth ) {
			$("body").css({'height':'auto', 'overflow':'auto'});
		}
	}
	if ( $.exists("#gnbM") ) {
		calcMenuHeight();
	}
});


/* *********************** PC NAV ************************ */
// gnb 메뉴 복사
function cloneMenu () {
	$gnbMList.html($gnbList.html());
}
// gnb 전체메뉴
function openTotalMenu () {
	$gnbItem.children("a").on("mouseenter focus",function  () {
		$gnbItem.removeClass("on");
		$(this).parent("li").addClass("on");
		if (!($gnb.is(".open"))) {
			$gnb.addClass("open");
			$gnbBg.addClass("open");
			$("#header").addClass("open");
		}
	})
	$gnbList.on("mouseleave",gnb_return);
	$gnbList.find("a").last().on("focusout",gnb_return);
	function gnb_return () {
		$gnb.removeClass("open");
		$gnbItem.removeClass("on");
		$gnbBg.removeClass("open");
		$("#header").removeClass("open");
		if ( dep1 > 0 && dep2 ) {
			$gnbItem.eq(dep1-1).addClass("on");
		}
	}
}
// gnb 각각메뉴
function openEachMenu () {
	$gnbItem.children("a").on("mouseenter focus",function  () {
		$gnbItem.removeClass("on").children(".gnb-2dep").removeClass("open");
		$(this).parent("li").addClass("on").children(".gnb-2dep").stop().addClass("open");
	})

	$gnbItem.on("mouseleave",gnb_return);
	$gnbItem.find("a").last().on("focusout",gnb_return);
	
	function gnb_return () {
		$gnbItem.removeClass("on").children(".gnb-2dep").removeClass("open"); 
		if ( dep1 > 0 && dep2 ) {
			$gnbItem.eq(dep1-1).addClass("on");
		}
	}
}

/* *********************** MOBILE NAV ************************ */
// gnbM Nav Button Click
function toggleNavButton () {
	$menuBtn.click(function  () {
		if ( menuState ) {
			closeMobileMenu();
		}else {
			openMobileMenu();
		}
		return false;
	});
	$gnbMBg.click(function  () {
		closeMobileMenu();
	});
}
//  gnbM 메뉴열기
function openMobileMenu () {
	menuState = true;
	$menuBtn.addClass("active");
	$gnbM.addClass("open");
	$gnbMBg.fadeIn();
	$("body").css({'height':$(window).height(), 'overflow':'hidden'});
	if ( dep1> 0 && dep2> 0 ) {
		$gnbMList.children("li").eq(dep1-1).addClass("active").find(".gnb-2dep").show().find("li").eq(dep2-1).addClass("on");
	}
}
// gnbM 메뉴닫기
function closeMobileMenu () {
	menuState = false;
	$menuBtn.removeClass("active");
	$gnbM.removeClass("open");
	$gnbMBg.hide();
	$("body").css({'height':'auto', 'overflow':'auto'});
	if ( dep1> 0 && dep2> 0 ) {
		$gnbMList.children("li").removeClass("active").find(".gnb-2dep").hide();
	}
}
// gnbM 2DEPTH 클래스  및 오픈
function toggleDepth2Menu () {
	$gnbMList.children("li:has('.gnb-2dep')").addClass("has-2dep");
	$gnbMList.children("li:has('.gnb-2dep')").children("a").click(function(event){
		/* 2dep가 열려있을때 */		
		if ( $(this).parent("li").hasClass("active") ){
			$(this).parent("li").removeClass("active");
			$(this).children(".open-icon").hide();
			$(this).children(".close-icon").show();
			$(this).siblings(".gnb-2dep").slideUp(400);					
		}
		/* 2dep가 닫혀있을때 */ 
		else{
			$gnbMList.children("li:has('.gnb-2dep')").each(function() {
				if ( $(this).hasClass("active") ){
					$(this).removeClass("active");
					$(this).find(".open-icon").hide();
					$(this).find(".close-icon").show();
					$(this).children(".gnb-2dep").slideUp(400);
				}
			});	
			$(this).parent("li").addClass("active");
			$(this).children(".close-icon").hide();
			$(this).children(".open-icon").show();
			$(this).siblings(".gnb-2dep").slideDown(400);
		}
		return false;
	});
}
//  gnbM 기본스타일 높이값 지정
function calcMenuHeight () {
	if ( $.exists(".header-util-menu-box") &&  !($.exists(".gnb-style-full"))  ){
		$(".gnb-navigation-wrapper").height(getWindowHeight() - $(".header-util-menu-box").height());
	}
}
//  gnbM full스타일 클래스 지정
function addClassFullMenu () {
	if ( $.exists(".gnb-style-full") && $.exists(".member-menu-box") ) {
		$(".gnb-style-full").addClass("gnb-style-full-member");
	}
}

/* *********************** Sub 공통 ************************ */
// 이전페이지,다음페이지 링크걸기 ( 1depth 이동 )
function checkPrevNextLink () {
	var $sub_prev_page_btn = $(".sub-prev-page-btn");
	var $sub_next_page_btn = $(".sub-next-page-btn");
	var dep1_menu_lang = $gnbItem.length;

	$sub_prev_page_btn.attr("href",$gnbItem.eq(dep1-2).children("a").attr("href")).find(".sub-page-name").text($gnbItem.eq(dep1-2).children("a").text());
	$sub_next_page_btn.attr("href",$gnbItem.eq(dep1).children("a").attr("href")).find(".sub-page-name").text($gnbItem.eq(dep1).children("a").text());

	if ( dep1 == dep1_menu_lang ) {
		$sub_next_page_btn.attr("href",$gnbItem.eq(0).children("a").attr("href"));
		$sub_next_page_btn.find(".sub-page-name").text($gnbItem.eq(0).children("a").text());
	}else if ( dep1 == 1 ) {
		$sub_prev_page_btn.attr("href",$gnbItem.eq(dep1_menu_lang-1).children("a").attr("href"));
		$sub_prev_page_btn.find(".sub-page-name").text($gnbItem.eq(dep1_menu_lang-1).children("a").text());
	}
}
// 서브메뉴에서 해당메뉴 인덱스 on
function activeMenuIdx () {
	if ( dep1 > 0 && dep2 > 0) {
		$gnbItem.eq(dep1-1).addClass("on");
		$gnbMList.eq(dep1-1).addClass("on");
		$snb.each(function  () {
			$(this).find("li").eq(dep2-1).addClass("on");
		});
		$snbMenu.find(".menu-location").each(function  () {
			// 2depth ON
			if ( $(this).is(".location1") ) {
				$(this).find(".location-menu-con").children("li").eq(dep1-1).addClass("on");
			}else if( $(this).is(".location2")) {
				$(this).find(".location-menu-con").children("li").eq(dep2-1).addClass("on");
			}else if( $(this).is(".location3")) {
				$(this).find(".location-menu-con").children("li").eq(dep3-1).addClass("on");
			}
		});
	}
}


