/* *******************************************************
 * filename : product.js
 * description : 제품페이지에서 사용되는 JS
 * date : 2019-09-03
******************************************************** */

$(document).ready(function  () {
	/* *********************** 제품관리 :: 제품관리 02 ************************ */
	/* 카테고리 하위메뉴펼치기 */ 
	var $openCategory = $(".prd-left-search-box");
	$openCategory.find(".prd-search-select-box").each(function  () {
		// 클릭할때 펼치기
		$(this).find(".cur-prd-category").click(function  () {
			$(this).toggleClass("open");
			$(this).siblings(".prd-category-select-list").slideToggle();

			return false;
		});
	});
	
	$(".prd-search-select-box").mouseleave(function  () {
		if ( $(this).find(".prd-category-select-list").css("display") == "block" ) {
			$(this).find(".cur-prd-category").removeClass("open");
			$(this).find(".prd-category-select-list").slideUp();
		}
	});

	/* *********************** 제품관리 :: 제품관리 04 ************************ */
	// 제품 이미지 슬라이드
	$('.prd-gallery-wrapper').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: false,
		dots:false,
		autoplay: false,
		speed:1000,
		infinite:true,
		centerMode: true,
		centerPadding: '0',
		autoplaySpeed: 4000,
		easing: 'easeInOutQuint',
		pauseOnHover:false,
		prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Prev" tabindex="0" role="button"><i class="xi-angle-left-thin"></i></button>',
		nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><i class="xi-angle-right-thin"></i></button>'
	});


	/* *********************** 제품관리 :: 제품관리 05 ************************ */
	$('.prd-view-top-style05-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: false,
		dots:false,
		autoplay: true,
		speed:700,
		infinite:true,
		autoplaySpeed: 3000,
		easing: 'easeInOutQuint',
		pauseOnHover:false,
		prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Prev" tabindex="0" role="button"><i class="xi-angle-left-thin"></i></button>',
		nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><i class="xi-angle-right-thin"></i></button>'
	});
	
});