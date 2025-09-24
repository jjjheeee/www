<article class="bbs-basic-gallery-con03">
	<ul>
		<?
		$no=0;
		// 루프 시작
		while( $bbs_row = mysqli_fetch_object($result)) {
			$subject			=		$tools->strCut_utf($bbs_row->subject, 100);
			$name				=		$bbs_row->name;
			$read_cnt			=		$bbs_row->read_cnt;
			$reg_date			=		$tools->strDateCut( $bbs_row->reg_date, 3);
			$content			=		strip_tags($bbs_row->content);

			$no++;
		?>
		<li>
			<a href="<?=$_SERVER['PHP_SELF']?>?idx=<?=$bbs_row->idx;?>&bgu=view">
				<div class="press-thum">
					<?if($bbs_row->sum_sfile){?>
					<span class="press-img"><img src="<?=$site_host?>/data/bbsData/<?=$bbs_row->sum_file?>" alt=""></span>
					<?}else{?>
					<span class="no-image"><strong><i class="material-icons">&#xE413;</i><br>NO IMAGES</strong></span>
					<?}?>
				</div>
				<div class="press-info-con">
					<strong class="press-tit"><?=$db->stripSlash($subject);?></strong>
					<div class="press-detail-info">
						<dl><dt>보도언론사 :&nbsp;</dt><dd><?=$name;?></dd></dl>
						<dl><dt>작성일 :&nbsp;</dt><dd><?=$reg_date?></dd></dl>
						<dl><dt>조회수 :&nbsp;</dt><dd><?=number_format($read_cnt)?></dd></dl>
					</div>
					<span class="more-btn" title="더보기"><i class="material-icons">&#xE145;</i></span>
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