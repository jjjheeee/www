/* *******************************************************
 * filename : store.js
 * description : 매장관리에서 사용되는 JS
 * date : 2019-09-03
******************************************************** */

$(document).ready(function  () {
	/* *********************** 매장관리 :: 매장관리 01 ************************ */
	$('.center-view-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: false,
		arrows: true,
		autoplay: false,
		infinite:true,
		autoplaySpeed: 3000,
		easing: 'easeInOutQuint',
		prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Prev" tabindex="0" role="button"><i class="material-icons">&#xE314;</i></button>',
		nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button"><i class="material-icons">&#xE315;</i></button>'
	});

	/* *********************** 매장관리 :: 매장관리 02 ************************ */
	$(".store-view-photo-list").each(function  () {
		var $lageThumb = $(this).find(".store-large-box");
		var $smallThumb = $(this).find(".store-small-thumb-box ul");
	
		// 제품 왼쪽사진 롤링
		$lageThumb.slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: false,
			dots:false,
			autoplay: false,
			speed:300,
			infinite:false,
			autoplaySpeed: 3000,
			easing: 'easeInOutQuint',
			pauseOnHover:false,
			asNavFor: $smallThumb
		});
		// 제품 왼쪽사진 하단 롤링
		$smallThumb.slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			arrows: false,
			fade: false,
			dots:false,
			autoplay: false,
			speed:300,
			infinite:false,
			vertical:true,
			autoplaySpeed: 3000,
			easing: 'easeInOutQuint',
			pauseOnHover:false,
			focusOnSelect: true,
			asNavFor: $lageThumb,
			responsive: [
					{
					  breakpoint: 801,
					  settings: {
						slidesToShow: 3,
						vertical:false
					  }
					}
				  ]
		});
	});


	/* *********************** 매장관리 :: 매장관리 04 ************************ */
	$(".store-list-style04 .agency-item").each(function  () {
		var $contentCon = $(this);
		var $contentOpenBox = $(this).find(".agency-info-con");
		var $contentCloseBox = $(this).find(".agency-info-box");
		
		$contentOpenBox.click(function  () {
			if (!($contentCon.is(".open"))) {
				$(".store-list-style04 > .agency-item").removeClass("open");
				$contentCon.addClass("open");
			}else {
				$contentCon.removeClass("open");
			}
		});
	});
});