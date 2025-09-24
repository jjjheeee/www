

<article class="bbs-list-con">
	<aside class="bbs-top-list-box clearfix">
		<p class="total-list-con">TOTAL : <b><?=$totalList?></b> </p>
		<?  if($bbs_admin_stat->bbs_cate==1){?>
		<div class="top-search-box">
			<select name="cate" id="topSearchCategory" onchange="location.href='<?=$_SERVER['PHP_SELF']?>?cate='+this.value;">
				<option value=""><?=$title_category?></option>
				<?
				$rsc = $db->select("cs_cate","where code='$code' order by idx asc");
				while($rowc = mysqli_fetch_array($rsc)){
				?>
				<option value="<?=$rowc['idx']?>" <?if($cate==$rowc['idx']){echo "selected";}?>><?=$rowc['name']?></option>
				<?}?>
			</select>
		</div>
		<? }?>
	</aside>
    <ul class="bbs-list-style02">
		<!-- 공지사항 -->

		<?
		if($bbs_admin_stat->date_check==1){
		$notice_result		= $db->select( $table, "where code='$code' and lang='$lang' and notice > 0 order by reg_date desc,idx desc" );
		} else {
		$notice_result		= $db->select( $table, "where code='$code' and lang='$lang' and notice > 0 order by idx desc" );
		}
		while( $bbs_row = mysqli_fetch_object($notice_result) ) {
			$new_check		=		$bbs_admin_stat->new_check;
			$subject			=		$tools->strCut_utf($db->stripSlash($bbs_row->subject), 150);
			$name				=		$bbs_row->name;
			$read_cnt			=		$bbs_row->read_cnt;
			$reg_date			=		$tools->strDateCut( $bbs_row->reg_date,3);
			$coment_cnt	=		$db->cnt("cs_bbs_coment", "where link=$bbs_row->idx");
		
			if( $new_check ) { $new_img =	$page->bbsNewImg( $bbs_row->reg_date, $bbs_admin_stat->new_mark, '<span class="bbs-icons new-icon-v2 cm-bbs-font-color" title="NEW"><i class="xi-new"></i></span>'); }	

			$reg_date_ymd = explode("-",$reg_date);

			if($bbs_admin_stat->bbs_cate==1 and $bbs_row->cate){
				$row_cate = $db->object("cs_cate","where code='$code' and idx='$bbs_row->cate'");
			}
		?>

		<li class="bbs-item">
            <a href="<?=$_SERVER['PHP_SELF']?>?bgu=view&idx=<?=$bbs_row->idx;?>">
                <p class="bbs-list-date"><strong><?=$reg_date_ymd[2]?></strong><span><?=$reg_date_ymd[0]?>.<?=$reg_date_ymd[1]?></span></p>
                <div class="bbs-list-info-con">
					<div class="bbs-subject-box">
						<div class="bbs-subject-txt-box">
							<strong class="bbs-subject-txt"><em class="notice-tit"><?=$title_notice_head?></em><? if($bbs_admin_stat->bbs_cate==1 and $bbs_row->cate){ ?><span class="category">[<?=$row_cate->name?>]</span><? } ?><?=$db->stripSlash($subject);?></strong>
							<div class="bbs-subject-icons">
								<?=$new_img?>
							</div>
						</div>
					</div>
                    <p class="bbs-list-sub-txt">
                        <?=$content?>
                    </p>
                    <p class="bbs-list-date-m"><?=$reg_date?></p>
                </div>
				 <div class="bbs-right-info-con">
					<i class="xi-long-arrow-right"></i>
				 </div>
                <!-- <div class="bbs-right-info-con">
                    <dl>
                        <dt title="<?=$title_view?>"><i class="xi-eye-o"></i></dt>
                        <dd><?=number_format($read_cnt)?></dd>
                    </dl>
                    <span class="bbs-more-btn"><em>MORE</em> <i class="xi-angle-right"></i></span>
                </div> -->
            </a>
        </li>

		<? } ?>
		<!-- // 공지사항 -->

		<?
		while($bbs_row = mysqli_fetch_object($result)) {
			$new_check			=		$bbs_admin_stat->new_check;
			$subject				=		$bbs_row->subject;
			$name					=		$bbs_row->name;
			$read_cnt				=		$bbs_row->read_cnt;
			$reg_date				=		$tools->strDateCut( $bbs_row->reg_date,3 );
			$content				=		 strip_tags($bbs_row->content);
			$coment_cnt		=		$db->cnt("cs_bbs_coment", "where link=$bbs_row->idx");

			if( $new_check ){$new_img = $page->bbsNewImg( $bbs_row->reg_date, $bbs_admin_stat->new_mark, '<span class="bbs-icons new-icon-v2 cm-bbs-font-color" title="NEW"><i class="xi-new"></i></span>' ); }

			$reg_date_ymd = explode("-",$reg_date);

			if($bbs_admin_stat->bbs_cate==1 and $bbs_row->cate){
				$row_cate = $db->object("cs_cate","where code='$code' and idx='$bbs_row->cate'");
			}
		?>
        <li class="bbs-item">
            <a href="<?=$_SERVER['PHP_SELF']?>?bgu=view&idx=<?=$bbs_row->idx;?>">
                <p class="bbs-list-date"><strong><?=$reg_date_ymd[2]?></strong><span><?=$reg_date_ymd[0]?>.<?=$reg_date_ymd[1]?></span></p>
                <div class="bbs-list-info-con">
					<div class="bbs-subject-box">
						<div class="bbs-subject-txt-box">
							<strong class="bbs-subject-txt"><? if($bbs_admin_stat->bbs_cate==1 and $bbs_row->cate){ ?><span class="category">[<?=$row_cate->name?>]</span><? } ?><?=$db->stripSlash($subject);?></strong>
							<div class="bbs-subject-icons">
								<?=$new_img?>
							</div>
						</div>
					</div>
                    <p class="bbs-list-sub-txt">
                        <?=$content?>
                    </p>
                    <p class="bbs-list-date-m"><?=$reg_date?></p>
                </div>
				 <div class="bbs-right-info-con">
					<i class="xi-long-arrow-right"></i>
				 </div>
                <!-- <div class="bbs-right-info-con">
                    <dl>
                        <dt title="<?=$title_view?>"><i class="xi-eye-o"></i></dt>
                        <dd><?=number_format($read_cnt)?></dd>
                    </dl>
                    <span class="bbs-more-btn"><em>MORE</em><i class="xi-angle-right"></i></span>
                </div> -->
            </a>
        </li>
		<? 
		$listNo--;
		}
		?>
	</ul>
</article>

