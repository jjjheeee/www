<div class="certifi-list-style04">
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
            <a href="/data/bbsData/<?=$bbs_row->sum_file?>" title="<?=$bbs_row->subject?>">
                <div class="certifi-img-thumb">
                    <span><img src="/data/bbsData/<?=$bbs_row->sum_file?>" alt="<?=$bbs_row->subject?> 이미지"></span>
                    <div class="certifi-over-box"><i class="material-icons"></i></div>
                </div>
                <p class="certifi-tit"><?=$bbs_row->subject?></p>
            </a>
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