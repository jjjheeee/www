<article class="certification-list-wrap">
    <ul class="certifi-list-style02 popup-gallery clearfix">
        
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
		<li class="certification-item">
            <div class="certifi-inner-con">
                <div class="certifi-thumb-box">
					<span><img src="/data/bbsData/<?=$bbs_row->sum_file?>" alt="<?=$bbs_row->subject?> 이미지"></span>
				</div>
                <div class="certifi-info-box">
                    <h3 class="certification-tit"><?=$bbs_row->subject?></h3>
                    <dl class="certification-txt clearfix">
                        <dt>규격</dt>
                        <dd>
							<p>OHSAS 18001:2007</p>
                            <p>K-OH-SMS 18001:2007</p>
<!--                        <p><?=nl2br($bbs_row->standard)?></p> -->
                        </dd>
                    </dl>
                    <dl class="certification-txt clearfix">
                        <dt>등록일자</dt>
                        <dd>
                            <p><?=substr($bbs_row->reg_date,0,10)?></p>
                        </dd>
                    </dl>
                    <a href="/data/bbsData/<?=$bbs_row->sum_file?>" class="certification-more-btn clearfix" title="<?=$bbs_row->subject?>">
                        <em><i class="material-icons"></i></em>
                    </a>
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
</article>