

<!-- 여기부터 start -->
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
    <ul class="bbs-list-style03">

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

			if($bbs_admin_stat->bbs_cate==1 and $bbs_row->cate){
				$row_cate = $db->object("cs_cate","where code='$code' and idx='$bbs_row->cate'");
			}
		?>

		<li class="bbs-list-item">
			<a href="<?=$_SERVER['PHP_SELF']?>?bgu=view&idx=<?=$bbs_row->idx;?>">
				<div class="bbs-list-row-item"><!-- 공지글 : notice-row추가 -->
					<div class="column column1 bbs-no-data"><span class="notice-tit"><?=$title_notice_head?></span></div>
					<div class="column column2 bbs-title">
						<div class="bbs-subject-box">
							<div class="bbs-subject-txt-box">
								<strong class="bbs-subject-txt"><? if($bbs_admin_stat->bbs_cate==1 and $bbs_row->cate){ ?><span class="category">[<?=$row_cate->name?>]</span><? } ?><?=$db->stripSlash($subject);?></strong>
								<div class="bbs-subject-icons">
									<?=$new_img?>
								</div>
							</div>
						</div>
					</div>
					<div class="column column3 bbs-inline" data-label="<?=$title_name?>"><i class="xi-user"></i> <?=$name?></div>
					<div class="column column4 bbs-inline" data-label="<?=$title_date?>"><i class="xi-time-o"></i> <?=$reg_date?></div>
					<div class="column column5 bbs-inline" data-label="<?=$title_view?>"><i class="xi-eye-o"></i> <?=number_format($read_cnt)?></div>
			   </div>
			</a>
	   </li>
	   <? } ?>


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

			if($bbs_admin_stat->bbs_cate==1 and $bbs_row->cate){
				$row_cate = $db->object("cs_cate","where code='$code' and idx='$bbs_row->cate'");
			}
		?>
		<li class="bbs-list-item">
			<a href="<?=$_SERVER['PHP_SELF']?>?bgu=view&idx=<?=$bbs_row->idx;?>">
				<div class="bbs-list-row-item"><!-- 공지글 : notice-row추가 -->
					<div class="column column1 bbs-no-data"><?=$listNo;?></div>
					<div class="column column2 bbs-title">
						<div class="bbs-subject-box">
							<div class="bbs-subject-txt-box">
								<strong class="bbs-subject-txt"><? if($bbs_admin_stat->bbs_cate==1 and $bbs_row->cate){ ?><span class="category">[<?=$row_cate->name?>]</span><? } ?><?=$db->stripSlash($subject);?></strong>
								<div class="bbs-subject-icons">
									<?=$new_img?>
								</div>
							</div>
						</div>
					</div>
					<div class="column column3 bbs-inline" data-label="<?=$title_name?>"><i class="xi-user"></i> <?=$name?></div>
					<div class="column column4 bbs-inline" data-label="<?=$title_date?>"><i class="xi-time-o"></i> <?=$reg_date?></div>
					<div class="column column5 bbs-inline" data-label="<?=$title_view?>"><i class="xi-eye-o"></i> <?=number_format($read_cnt)?></div>
			   </div>
			</a>
	   </li>
		<? 
		$listNo--;
		}
		?>
    </ul>
</article>
<!-- // 여기까지 end -->

	