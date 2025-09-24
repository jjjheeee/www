
<article class="bbs-basic-gallery-con09">
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
   <ul class="bbs-thum-list clearfix">
		<?
		$no=0;
		while( $bbs_row = mysqli_fetch_object($result)) {
		$no++;
			$subject = $tools->strCut_utf($bbs_row->subject, 100);
			$name = $bbs_row->name;
			$read_cnt = $bbs_row->read_cnt;
			$reg_date = $tools->strDateCut( $bbs_row->reg_date, 3);
			$content = strip_tags($bbs_row->content);

			if($bbs_admin_stat->bbs_cate==1 and $bbs_row->cate){
				$row_cate = $db->object("cs_cate","where code='$code' and idx='$bbs_row->cate'");
			}
		?>
		 <li>
			<a href="<?=$_SERVER['PHP_SELF']?>?bgu=view&idx=<?=$bbs_row->idx;?>">
				<span class="bbs-left-photo-con">
					<img src="<?=$site_host?>/data/bbsData/<?=$bbs_row->sum_file?>" alt="<?=$db->stripSlash($subject);?> 썸네일">
					<? if($bbs_admin_stat->bbs_cate==1 and $bbs_row->cate){ ?><em class="category"><?=$row_cate->name?></em><? } ?>
				</span>
				<div class="bbs-right-info-con">
					<strong class="bbs-title"><?=$db->stripSlash($subject);?> </strong>
					<p class="bbs-sub-txt"><?=$content?></p>
					<span class="bbs-date"><?=$reg_date?></span>
					<span class="more-btn">more</span>
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
</article>