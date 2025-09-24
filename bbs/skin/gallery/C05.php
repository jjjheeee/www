<div class="catalogue-list-style01">
    <ul class="clearfix popup-gallery">

      <?
		$no=0;
		while( $bbs_row = mysqli_fetch_object($result)) {
		$no++;
			$subject = $tools->strCut_utf($bbs_row->subject, 100);
			$name = $bbs_row->name;
			$read_cnt = $bbs_row->read_cnt;
			$reg_date = $tools->strDateCut( $bbs_row->reg_date, 8);
			$content = strip_tags($bbs_row->content);
		?>

        <li>
			<div class="catalogue-list-inner">
				<div class="catalogue-img-thumb">
					<span><img src="/data/bbsData/<?=$bbs_row->sum_file?>" alt="<?=$bbs_row->subject?> 이미지"></span>
					<div class="catalogue-over-box"><i class="material-icons"></i></div>
				</div>
				<p class="catalogue-tit"><?=$bbs_row->subject?></p>
				<div class="catalogue-controls-box">
					<ul class="clearfix">
						<li><a href="/data/bbsData/<?=$bbs_row->sum_file?>" title="<?=$bbs_row->subject?>"><i class="xi-search"></i>바로보기</a></li>
						<li><a href="<?=$site_host?>/bbs/bbs_download.php?download=1&idx=<?=$bbs_row->idx?>" class="download-btn"><i class="xi-download"></i>다운로드</a></li>
					</ul>
				</div>
			</div>
        </li>

		<?
		if($no==$bbs_admin_stat->list_width){$no=0;}
		}
		?>
    </ul>
	<?if(empty($totalList)){?>
	<p class="bbs-no-list"><?=$title_no_list?></p>
	<?}?>
</div>  