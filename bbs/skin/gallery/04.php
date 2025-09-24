<article class="bbs-basic-gallery-con04">
	<ul class="bbs-thum-list">
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
				<div class="bbs-thumb-img"><span><img src="<?=$site_host?>/data/bbsData/<?=$bbs_row->sum_file?>" alt=""></span></div>
				<div class="bbs-thumb-info-con">
					<h3><?=$db->stripSlash($subject);?></h3>
					<p class="bbs-detail-txt">
						<?=$content?>
					</p>
					<div class="bbs-thumb-writer-info">
						<dl>
							<dt><i class="material-icons">&#xE417;</i></dt>
							<dd><?=number_format($read_cnt)?></dd>
						</dl>
						<dl>
							<dt><i class="material-icons">&#xE8B5;</i></dt>
							<dd><?=$reg_date?></dd>
						</dl>
					</div>
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