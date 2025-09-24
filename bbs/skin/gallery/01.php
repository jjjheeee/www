<article class="bbs-gallery-list-con">
	<ul class="bbs-basic-gallery-con">
	<?
	$no=0;
	while( $bbs_row = mysqli_fetch_object($result)) {
		$subject			=		$tools->strCut_utf($bbs_row->subject, 100);
		$name				=		$bbs_row->name;
		$read_cnt			=		$bbs_row->read_cnt;
		$reg_date			=		$tools->strDateCut( $bbs_row->reg_date, 8);
		$content			=		strip_tags($bbs_row->content);

		$no++;
	?>
	<li class="<?if($no==1){?>mar0<?}?>">
		<a href="<?=$_SERVER['PHP_SELF']?>?idx=<?=$bbs_row->idx;?>&bgu=view">
			<div class="gallery-thum-box">
				<span class="gallery-thum"><img src="<?=$site_host?>/data/bbsData/<?=$bbs_row->sum_file?>" alt=""></span>
			</div>
			<div class="gallery-txt-con">
				<strong class="gal-tit"><?=$db->stripSlash($subject);?></strong>
				<p class="gal-txt"><?=$content?></p>
				<span class="gal-day"><i class="material-icons"></i> <?=$reg_date?></span>
			</div>
		</a>
	</li>
	<?
	if($no==$bbs_admin_stat->list_width){$no=0;}
	}
	?>
	</ul>
	<?if(empty($totalList)){?>
		<p class="bbs-no-list">작성된 글이 없습니다.</p>
	<?}?>
</article>