<?
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
?>
<section id="siteMapCon" class="footer-modal-content">
	<button onclick="ajaxUnLoad();" title="팝업 닫기" class="modal-close-btn"><i class="xi-close-thin"></i></button>
	<h1>SITE MAP</h1>
	<article class="sitemap-wrapper"></article>
</section>

<script type="text/javascript">
	// 대메뉴복사 후 사이트맵 삽입
	var $sitemapGnbList = $("#gnb > ul > li");
	var gnbLength = $sitemapGnbList.length;
	$(".sitemap-wrapper").append("<ul></ul>");
	
	for(var i=0; i < gnbLength; i++){
		var $gnb1depItem = $sitemapGnbList.eq(i).children("a");
		var $gnb2depList = $sitemapGnbList.eq(i).find(".gnb-2dep > ul").html() ? $sitemapGnbList.eq(i).find(".gnb-2dep > ul").html() :	'<a href="'+$gnb1depItem.attr("href")+'">'+$gnb1depItem.text()+'</a>';
		$(".sitemap-wrapper > ul").append('<li><h2>'+$gnb1depItem.text()+'</h2><ul class="sitemap-2dep">'+$gnb2depList+'</ul></li>');
	}
</script>