<?
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
?>

<section class="footer-modal-content">
	<button onclick="ajaxUnLoad();" title="팝업 닫기" class="modal-close-btn"><i class="xi-close-thin"></i></button>
	<h1>Privacy policy</h1>
	<div class="footer-inner-box">
		<div class="footer-inner editor">
			
					<?
					$page_row = $db->object("cs_page", "where page_index='privacy'");

					$content = $page_row->content;
					$content = $tools->strHtml($content);

					echo $content;
					?>


		</div>
	</div>
</section>