<?
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
?>
<script type="text/javascript" src="/js/layer_popup.js"></script>
<section id="siteMapCon" class="footer-modal-content">
	<a href="#none" class="modal-close-btn" title="레이어팝업 닫기"><i class="xi-close-thin"></i></a>
	<h1>사이트맵</h1>
	<article class="sitemap-wrapper">
		<ul>
			<li>
				<h2>대메뉴1</h2>
				<ul class="sitemap-2dep">
					<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
				</ul>
			</li>
			<li>
				<h2>대메뉴2</h2>
				<ul class="sitemap-2dep">
					<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
				</ul>
			</li>
			<li>
				<h2>대메뉴3</h2>
				<ul class="sitemap-2dep">
					<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
				</ul>
			</li>
			<li>
				<h2>대메뉴4</h2>
				<ul class="sitemap-2dep">
					<?  include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
				</ul>
			</li>
			<li>
				<h2>대메뉴5</h2>
				<ul class="sitemap-2dep">
					<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_company.php"; ?>
				</ul>
			</li>
		</ul>
	</article>
</section>
