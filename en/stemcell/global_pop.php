<?
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
?>
<section id="globalPop" class="footer-modal-content">
	<button onclick="ajaxUnLoad();" title="팝업 닫기" class="modal-close-btn"><i class="xi-close-thin"></i></button>
	<div class="global-pop-inner">
		
		<? if( $nation == 1 ){ ?>
			<div class="top-tit clearfix">
				<strong class="tit">Turkey</strong>
				<span class="flag"><img src="<?=$site_host?>/images/content/flag_turkey.jpg" alt="" /></span>
			</div>
			<div class="nation-detail">
				<p>
					<b>Apr. 2018</b><span>3rd ISSCA Regenerative Medicine Conference</span>
				</p>
				<p>
					<b>Apr. 2019</b><span>6th ISSCA Stem Cell & Regenerative Medicine Conference </span>
				</p>
			</div>
		<?}else if( $nation == 2 ){?>
			<div class="top-tit clearfix">
				<strong class="tit">Mongolia</strong>
				<span class="flag"><img src="<?=$site_host?>/images/content/flag_mongolia.jpg" alt="" /></span>
			</div>
			<div class="nation-detail">
				<p>
					<b>Jun. 2019</b><span>7th ISSCA Regenerative Medicine Conference</span>
				</p>
			</div>
		<?}else if( $nation == 3 ){?>
			<div class="top-tit clearfix">
				<strong class="tit">South Korea</strong>
				<span class="flag"><img src="<?=$site_host?>/images/content/flag_korea.jpg" alt="" /></span>
			</div>
			<div class="nation-detail">
				<p>
					<b>Apr. 2017</b><span>1st ISSCA Stem Cell Training & Health Education Conference</span>
				</p>
				<p>
					<b>Jan. 2018</b><span>2nd ISSCA Stem Cell Specialist Conference</span>
				</p>
				<p>
					<b>Nov. 2018</b><span>4th ISSCA Regenerative Medicine Conference</span>
				</p>
			</div>
		<?}else if( $nation == 4 ){?>
			<div class="top-tit clearfix">
				<strong class="tit">Morocco</strong>
				<span class="flag"><img src="<?=$site_host?>/images/content/flag_morocco.jpg" alt="" /></span>
			</div>
			<div class="nation-detail">
				<p>
					<b>Feb. 2019</b><span>5th ISSCA Stem Cell& Regenerative Medicine Conference</span>
				</p>
			</div>
		<?}else if( $nation == 5 ){?>
			<div class="top-tit clearfix">
				<strong class="tit">Malaysia</strong>
				<span class="flag"><img src="<?=$site_host?>/images/content/flag_malaysia.jpg" alt="" /></span>
			</div>
			<div class="nation-detail">
				<p>
					<b>Nov. 2019</b><span>8th ISSCA Stem Cell & Regenerative Medicine Conference</span>
				</p>
			</div>
		<?}?>


		
	</div>
</section>
