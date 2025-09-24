<?
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
?>
<section id="globalPop" class="footer-modal-content">
	<button onclick="ajaxUnLoad();" title="팝업 닫기" class="modal-close-btn"><i class="xi-close-thin"></i></button>
	<div class="global-pop-inner">
		
		<? if( $nation == 1 ){ ?>
			<div class="top-tit clearfix">
				<strong class="tit">터키</strong>
				<span class="flag"><img src="<?=$site_host?>/images/content/flag_turkey.jpg" alt="" /></span>
			</div>
			<div class="nation-detail">
				<p>
					<b>2018년 4월</b><span>제3차 ISSCA 첨단재생의료 컨퍼런스</span>
				</p>
				<p>
					<b>2019년 4월</b><span>제6차 ISSCA 첨단재생의료 컨퍼런스</span>
				</p>
			</div>
		<?}else if( $nation == 2 ){?>
			<div class="top-tit clearfix">
				<strong class="tit">몽골</strong>
				<span class="flag"><img src="<?=$site_host?>/images/content/flag_mongolia.jpg" alt="" /></span>
			</div>
			<div class="nation-detail">
				<p>
					<b>2019년 6월</b><span>제7차 첨단재생의료 컨퍼런스</span>
				</p>
			</div>
		<?}else if( $nation == 3 ){?>
			<div class="top-tit clearfix">
				<strong class="tit">대한민국</strong>
				<span class="flag"><img src="<?=$site_host?>/images/content/flag_korea.jpg" alt="" /></span>
			</div>
			<div class="nation-detail">
				<p>
					<b>2017년 4월</b><span>제1차 줄기세포 교육 및 건강 교육 컨퍼런스</span>
				</p>
				<p>
					<b>2018년 1월</b><span>제2차 ISSCA 줄기세포 전문가 컨퍼런스</span>
				</p>
				<p>
					<b>2018년 11월</b><span>제4차 ISSCA 첨단재생의료 컨퍼런스</span>
				</p>
			</div>
		<?}else if( $nation == 4 ){?>
			<div class="top-tit clearfix">
				<strong class="tit">모로코</strong>
				<span class="flag"><img src="<?=$site_host?>/images/content/flag_morocco.jpg" alt="" /></span>
			</div>
			<div class="nation-detail">
				<p>
					<b>2019년 2월</b><span>제5차 ISSCA 첨단재생의료 컨퍼런스</span>
				</p>
			</div>
		<?}else if( $nation == 5 ){?>
			<div class="top-tit clearfix">
				<strong class="tit">말레이시아</strong>
				<span class="flag"><img src="<?=$site_host?>/images/content/flag_malaysia.jpg" alt="" /></span>
			</div>
			<div class="nation-detail">
				<p>
					<b>2019년 11월</b><span>제8차 ISSCA 첨단재생의료 컨퍼런스</span>
				</p>
			</div>
		<?}?>


		
	</div>
</section>
