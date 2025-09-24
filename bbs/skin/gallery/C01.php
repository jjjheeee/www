<section id="certificationContent">
    <ul class="certifi-list-style01 popup-gallery clearfix">
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
                <div class="certi-thumb"><span><img src="/data/bbsData/<?=$bbs_row->sum_file?>" alt="<?=$bbs_row->subject?> 이미지"></span></div>
                <div class="certi-info">
                    <strong class="certi-name"><?=$bbs_row->subject?></strong>
                    <p class="certi-txt">
                        <?=$content?>
                    </p>
                </div>
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
</section>