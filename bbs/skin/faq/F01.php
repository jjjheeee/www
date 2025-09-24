<article class="bbs-faq-list">
	<aside class="bbs-top-list-box clearfix">
		<p class="total-list-con">TOTAL : <b><?=$totalList?></b> </p>
		<?if($bbs_admin_stat->bbs_cate==1){?>
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
		<?}?>
	</aside>
	<article class="faq-list-con<?if($bbs_admin_stat->bbs_cate==1){?> faq-category-list-con<?}?>" style="display:<?if(empty($totalList)){?>none<?}?>;">
	<?
	// 루프 시작
	while( $bbs_row = mysqli_fetch_object($result)) {
		
		$subject			=		$bbs_row->subject;
		$name				=		$bbs_row->name;
		$read_cnt			=		$bbs_row->read_cnt;
		$reg_date			=		$tools->strDateCut( $bbs_row->reg_date, 3);

		/*카테고리 노출*/
		if($bbs_admin_stat->bbs_cate==1){	$cate_row = $db->object("cs_cate", "where idx='$bbs_row->cate'");	}

		if($bbs_admin_stat->editor==1){
			$content = $bbs_row->content;
			$content = str_replace("<P>","",$content);
			$content = str_replace("</P>","<br/>",$content);
			$content = str_replace("<p>","",$content);
			$content = str_replace("</p>","<br/>",$content);
			$content = $tools->strHtml($content);
		} else {
			$content = nl2br($tools->strHtmlNoBr($bbs_row->content));
		}

		$content = $bbs_row->content;
		$content = str_replace("<P>","",$content);
		$content = str_replace("</P>","<br>",$content);
		$content = str_replace("<p>","",$content);
		$content = str_replace("</p>","<br>",$content);
		$content = $tools->strHtml($content);
		?>
		<dl class="faq-item">
			<dt>
				<div class="faq-subject">
					<span class="question-icon">Q</span>
					<?if($bbs_admin_stat->bbs_cate==1){?>
					<span class="faq-category">[<?=$cate_row->name?>]</span>
					<?}?>
					<strong class="faq-title"><?=$db->stripSlash($subject);?></strong>
					<span class="arrow"><i class="material-icons">&#xE313;</i></span>
				</div>
			</dt>
			<dd>
				<span class="answer-icon">A</span>
				<div class="answer-con">
					<?
					if($bbs_admin_stat->editor==1){
					?>
					<div class="editor">
						<?=$content;?>
					</div>
					<?}else{?>
					<div class="answer-txt-con">
						<?=$content;?>
					</div>
					<?
					}
					?>
				</div>
			</dd>
		</dl>
		<? 
		$listNo--;
		}
		?>
	</article>
	<?$count = $db->cnt($table,"where code='$code'")?>
	<?if(empty($totalList)){?>
		<p class="bbs-no-list"><?=$title_no_list?></p>
	<?}?>

</article>