
	<section id="sitemapContent">
		<article id="sitemapInnerCon">
			<div class="sitemap-bg-box"></div>
			<article class="sitemap-wrapper-style02"></article>
		</article>
		<!-- 닫기버튼 필요없을시 삭제 -->
		<!-- <button class="sitemap-close-btn" title="닫기"><i class="xi-close"></i></button> -->
	</section>

	<script type="text/javascript">
		$(document).ready(function  () {
			// 대메뉴복사 후 사이트맵 삽입
			var $gnbList = $("#gnb > ul > li");
			var gnbLength = $gnbList.length;
			var gnbLiWidth = 100 / gnbLength ;
			$(".sitemap-wrapper-style02").append("<ul></ul>");
			
			for(var i=0; i < gnbLength; i++){
				var gnbText = $gnbList.eq(i).children("a").text();
				var gnb2depList = $gnbList.eq(i).find(".gnb-2dep > ul").html() ? $gnbList.eq(i).find(".gnb-2dep > ul").html() :	'';
				$(".sitemap-wrapper-style02 > ul").append('<li style="width:'+gnbLiWidth+'%;"><h2><span>'+gnbText+'</span></h2><ul class="sitemap-2dep">'+gnb2depList+'</ul></li>');
				$(".sitemap-bg-box").append('<div class="visual-intro-item" style="width:'+gnbLiWidth+'%;"></div>');
			}
		});
	</script>