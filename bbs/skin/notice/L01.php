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
	<div class="bbs-list-tbl">
		<p class="bbs-list-head">
			<span style="width:7%;"><?=$title_no?></span>
			<span style="width:59%;"><?=$title_subject?></span>
			<span style="width:12%;"><?=$title_name?></span>
			<span style="width:12%;"><?=$title_date?></span>
			<span style="width:10%;"><?=$title_view?></span>
		</p>
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
		?>
	   <div class="bbs-list-row notice-row">
			<div class="column bbs-block" data-label="no"><span class="notice-tit"><?=$title_notice?></span></div>
			<div class="column bbs-title">
				<a href="<?=$_SERVER['PHP_SELF']?>?bgu=view&idx=<?=$bbs_row->idx;?>">
					<div class="bbs-subject-con">
						<strong class="bbs-subject-txt"><? if($cname){ ?><b class="category">[<?=$cname?>]</b><? } ?><?=$db->stripSlash($subject);?></strong>
						<div class="bbs-subject-icons">
							<?=$new_img?>
							<?if($bbs_row->sbbs_file || $bbs_row->sbbs_file2 || $bbs_row->sbbs_file3 || $bbs_row->sbbs_file4 || $bbs_row->sbbs_file5){?>
							<span class="bbs-icons attachment" title="<?=$title_file?>"><i class="xi-attachment"></i></span>
							<?}?>
							<!-- <span class="bbs-icons" title="Lock"><i class="xi-lock-o"></i></span></span> -->
						</div>
					</div>
				</a>
			</div>
			<div class="column bbs-inline" data-label="<?=$title_name?>"><?=$name?></div>
			<div class="column bbs-inline" data-label="<?=$title_date?>"><?=$reg_date?></div>
			<div class="column bbs-inline" data-label="<?=$title_view?>"><?=number_format($read_cnt)?></div>
	   </div>
		<?}?>
	<!-- 공지사항 -->

	<!-- bbs loop start -->
	<?
	while($bbs_row = mysqli_fetch_object($result)) {
		$new_check			=		$bbs_admin_stat->new_check;
		$subject				=		$tools->strCut_utf($bbs_row->subject, 150);
		$name					=		$bbs_row->name;
		$read_cnt				=		$bbs_row->read_cnt;
		$reg_date				=		$tools->strDateCut( $bbs_row->reg_date,3 );
		$coment_cnt		=		$db->cnt("cs_bbs_coment", "where link=$bbs_row->idx");

		//new IMG
		if( $new_check ) {	$new_img			=		$page->bbsNewImg( $bbs_row->reg_date, $bbs_admin_stat->new_mark, '<span class="bbs-icons new-icon-v2 cm-bbs-font-color" title="NEW"><i class="xi-new"></i></span>' ); }
		// 답변 re image view
		if($bbs_row->re_level > 0) { $wid = 7 * $bbs_row->re_level; $level_img='<span class="reply-icon">└ RE</span> '; } else { $level_img="";}
		?>
		<div class="bbs-list-row">
			<div class="column bbs-no-data"><?if($level_img){echo "&nbsp;";}else{echo $listNo;}?></div>
			<div class="column bbs-title">
				<? if($_SESSION['USERID']){ ?>
					<? if($_SESSION['USERID']==$bbs_row->userid){ ?>
						<a href="<?=$_SERVER['PHP_SELF']?>?bgu=view&idx=<?=$bbs_row->idx;?>">
					<? } else { ?>
						<? if($bbs_row->secret=="y"){ ?>	
							<a href="<?=$_SERVER['PHP_SELF']?>?bgu=pass&bbs_view_secr=1&idx=<?=$bbs_row->idx;?>">
						<? } else { ?>
							<a href="<?=$_SERVER['PHP_SELF']?>?bgu=view&idx=<?=$bbs_row->idx;?>">
						<? } ?>
					<? } ?>
				<? } else { ?>
					<? if($bbs_row->secret=="y"){ ?>
						<a href="<?=$_SERVER['PHP_SELF']?>?bgu=pass&bbs_view_secr=1&idx=<?=$bbs_row->idx;?>">
					<? } else { ?>
						<a href="<?=$_SERVER['PHP_SELF']?>?bgu=view&idx=<?=$bbs_row->idx;?>">
					<? } ?>
				<? } ?>
					<div class="bbs-subject-con">
						<strong class="bbs-subject-txt"><?=$level_img?><? if($cname){ ?><b class="category">[<?=$cname?>]</b><? } ?><?=$db->stripSlash($subject);?></strong>
						<div class="bbs-subject-icons">
							<?=$new_img?>
							<?if($bbs_row->sbbs_file || $bbs_row->sbbs_file2 || $bbs_row->sbbs_file3 || $bbs_row->sbbs_file4 || $bbs_row->sbbs_file5){?>
							<span class="bbs-icons attachment" title="<?=$title_file?>"><i class="xi-attachment"></i></span>
							<?}?>
							<?if($bbs_row->secret=="y"){?>
							<span class="bbs-icons lock" title="Lock"><i class="xi-lock-o"></i></span>
							<?}?>
						</div>
					</div>
				</a>
			</div>
			<div class="column bbs-inline" data-label="<?=$title_name?>"><?=$name?></div>
			<div class="column bbs-inline" data-label="<?=$title_date?>"><?=$reg_date?></div>
			<div class="column bbs-inline" data-label="<?=$title_view?>"><?=number_format($read_cnt)?></div>
	   </div>
		<? 
		$listNo--;
		}
		?>
	</div>

	<!-- bbs loop end -->
	<?$count = $db->cnt($table,"where code='$code'")?>
	<?if(empty($count)){?>
		<p class="bbs-no-list"><?=$title_no_list?></p>
	<?}?>