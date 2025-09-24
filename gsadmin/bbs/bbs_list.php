<?
extract($_POST);
extract($_GET);
$mod	= "bbs";	
include ("../header.php");
include($_SERVER['DOCUMENT_ROOT']."/lib/page_class.php");

// 게시판 환경
$bbs_stat		=	$db->object("cs_bbs", "where code='$code'");
if(!$bbs_stat->idx) { $tools->errMsg("잘못된 접근입니다");}
$colspan=1;
?>

	<h4 class="page-header">게시판 관리(<?=$bbs_stat->name;?>)</h4>

	<form method="get" name="search_form" class="form-inline" action="<?=$_SERVER['PHP_SELF'];?>" >
	<input type="hidden" name="code" value="<?=$code?>">
	<table class="table table-bordered">
	<colgroup>
	<col width="15%">
	<col width="*">
	</colgroup>
	<tbody>
	<tr>
		<th>검색어</th>
		<td>
			<div class="form-group">
				<div class="input-group-btn">
					<select name="search_item"  class="form-control input-sm" >
						<option value="">통합검색</option>
						<option value="subject" <?if($search_item=="subject"){?>selected<?}?>>제목</option>
						<option value="content" <?if($search_item=="content"){?>selected<?}?>>내용</option>
						<option value="name" <?if($search_item=="name"){?>selected<?}?>>작성자</option>
					</select>
				</div>
			</div>
			<input type="text" name="search_order" class="form-control input-sm" value="<?=$search_order?>">
		</td>
	</tr>
	<tr>
		<th>등록일</th>
		<td>
			<div class="input-group datetime">
				<input type="text" name="search_sday" class="form-control input-sm text-center" value="<?=$search_sday?>"/>
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-calendar"></span>
				</span>
			</div>
			~
			<div class="input-group datetime">
				<input type="text" name="search_eday" class="form-control input-sm text-center" value="<?if(empty($search_eday)){echo date("Y-m-d");}else{echo $search_eday;}?>"/>
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-calendar"></span>
				</span>
			</div>
		</td>
	</tr>
	<?if($bbs_stat->bbs_cate==1){?>
	<tr>
		<th>카테고리</th>
		<td>
			<label class="radio-inline"><input type="radio" name="search_cate" value="" <?if(empty($search_cate))	{ echo "checked";}?>>전체</label>
			<?
			$rsc = $db->select("cs_cate","where code='$code' order by idx asc");
			while($rowc = mysqli_fetch_array($rsc)){
			?>
			<label class="radio-inline"><input type="radio" name="search_cate" value="<?=$rowc['idx']?>" <?if($search_cate==$rowc['idx']){ echo "checked";}?>><?=$rowc['name']?></label>
			<?}?>
		</td>
	</tr>
	<?}?>
	<?if($bbs_stat->nation==1){?>
	<tr>
		<th>언어</th>
		<td>
			<label class="radio-inline"><input type="radio" name="lang" value="" <?if(empty($lang))	{ echo "checked";}?>>전체</label>
			<label class="radio-inline"><input type="radio" name="lang" value="1" <?if($lang==1)	{ echo "checked";}?>>국문</label>
			<label class="radio-inline"><input type="radio" name="lang" value="2" <?if($lang==2)	{ echo "checked";}?>>영문</label>
			<!-- <label class="radio-inline"><input type="radio" name="lang" value="3" <?if($lang==3)	{ echo "checked";}?>>중문</label>
			<label class="radio-inline"><input type="radio" name="lang" value="4" <?if($lang==4)	{ echo "checked";}?>>일문</label> -->
		</td>
	</tr>
	<?}?>
	<tr>
		<td colspan="2" class="text-center">
			<button type="submit" class="btn btn-primary btn-sm">검색</button>&nbsp;
			<a href="<?=$_SERVER['PHP_SELF']?>?code=<?=$code?>" class="btn btn-default btn-sm">초기화</a>
		</td>
	</tr>
	</tbody>
	</table>
	</form>

	<?if($code=='news'){?>
	<?if($lang){?>
    <table class="table table-bordered table-hover ">
	<tr>
	  <th>&nbsp;&nbsp;
	  <button type="button" class="glyphicon glyphicon-th-list btn btn-danger btn-xs" aria-hidden="true" onClick="goodsRanking('<?=$code;?>','<?=$lang?>');"> 순위설정</button>
	  </th>
	</tr>
	</table>
	<?}?>
	<?}?>


	<div class="table-responsive">
	<table class="table table-bordered table-hover">
	<colgroup>
	<col width="5%">
	<col width="5%">
	<?if($bbs_stat->nation==1) {$colspan++;//언어?>
	<col width="7%">
	<?}?>
	<?if($bbs_stat->bbs_cate==1) {$colspan++;//카테고리?>
	<col width="10%">
	<?}?>
	<? if( $bbs_stat->bbs_type==3 ) {$colspan++;//썸네일?>
	<col width="10%">
	<? }?>
	<col width="*">
	<col width="7%">
	<col width="7%">
	<col width="5%">
	<col width="7%">
	</colgroup>
	<thead>
	<tr>
		<td><button type="button" class="btn btn-danger btn-xs btn-block ajax-checkbox" data-table="cs_bbs_data" data-name="delete" data-val="">삭제</button></td>
		<td class="text-right" colspan="<?echo ceil(5+$colspan);?>">
			<?if($bbs_stat->bbs_cate==1){?><button type="button" class="btn btn-primary btn-xs active" onClick="cate_pop('<?=$code?>');">카테고리관리</button><?}?>
		</td>
	</tr>
	<tr>
		<th><input type="checkbox" id="allCheck"></th>
		<th>N O</th>
		<?if($bbs_stat->nation==1) {?>
		<th>언어</th>
		<?}?>
		<?if($bbs_stat->bbs_cate==1) {?>
		<th>카테고리</th>
		<?}?>
		<? if( $bbs_stat->bbs_type==3 ) {?>
		<th>썸네일</th>
		<? }?>
		<th>제 목</th>
		<th>작성자</th>
		<th>등록일</th>
		<th>조회수</th>
		<th>관리하기</th>
	</tr>
	</thead>
	<tbody>


	<!-- [시작] 게시판 공지형---------------------------------------------------------------------------------------------------------------------------------------------------------------->
	<?
	$table				= "cs_bbs_data";
	if($lang){ $query =" and lang='$lang'"; }
	if($bbs_stat->date_check==1){
	$notice_result		= $db->select( $table, "where code='$code' and notice > 0 $query order by reg_date desc,idx desc" );
	} else {
	$notice_result		= $db->select( $table, "where code='$code' and notice > 0 $query order by idx desc" );
	}
	while( $row = mysqli_fetch_object($notice_result) ) {
		$new_check		=		$bbs_stat->new_check;
		$subject			=		$tools->strCut_utf($row->subject, 100);
		$preface			=		$row->preface;
		$name				=		$row->name;
		$read_cnt			=		$row->read_cnt;
		$reg_date			=		$tools->strDateCut( $row->reg_date,3 );
		$coment_cnt	=		$db->cnt("cs_bbs_coment", "where link=$row->idx");

		/*카테고리 노출*/
		if($bbs_stat->bbs_cate==1){	$cs_cate = $db->object("cs_cate", "where idx='$row->cate'");	}
		/*NEW 이미지*/
		if( $new_check )	{	$new_img = $page->bbsNewImg( $row->reg_date, $bbs_stat->new_mark, "<span class='label label-danger'>New</span>" ); }
	?>

		<tr class="primary active">
			<td class="text-center"><input type="checkbox" name="check_list" value="<?=$row->idx;?>"></td>
			<td class="text-center"><font class="btn btn-xs btn-danger">공지</font></td>
			<?if($bbs_stat->nation==1) {?>
			<td class="text-center">
			<? if($row->lang==1){ ?>국문<? } ?>
			<? if($row->lang==2){ ?>영문<? } ?>
			<? if($row->lang==3){ ?>중문<? } ?>
			<? if($row->lang==4){ ?>일문<? } ?>
			</td>
			<?}?>
			<?if($bbs_stat->bbs_cate==1) {?>
			<td class="text-center"><?=$cs_cate->name;?></td>
			<?}?>
			<? if( $bbs_stat->bbs_type==3 ) {//썸네일?>
			<td class="text-center"><img src="<?=$site_host?>/data/bbsData/<?=$row->sum_file?>" class="img-responsive"></td>
			<? }?>
			<td><?=$db->stripSlash($subject);?>
			<? if($coment_cnt) {?><span class="badge"><?=$coment_cnt;?></span><?}?>&nbsp;<?echo $new_img?>
			</td>
			<td class="text-center"><?=$name?></td>
			<td class="text-center"><?=$reg_date?></td>
			<td class="text-center"><?=$read_cnt?></td>
			<td class="text-center"><a href="./bbs_view.php?returnURL=<?=urlencode($_SERVER['REQUEST_URI'])?>&code=<?=$code;?>&idx=<?=$row->idx;?>" class="btn btn-default btn-sm">수정하기</a></td>
		</tr>

	<? } ?>
	<!-- [종료] 게시판 공지형---------------------------------------------------------------------------------------------------------------------------------------------------------------->

		
	<!-- [시작] 게시판 목록 ---------------------------------------------------------------------------------------------------------------------------------------------------------------->
	<?
	$table				= "cs_bbs_data";
	// 리스트갯수
	$listScale			= $bbs_stat->list_height;
	// 페이지 갯수
	$pageScale		=	$bbs_stat->list_page;
	// 스타트 페이지
	if( !$startPage ) { $startPage = 0; }
	// 토탈페이지
	$totalPage = floor($startPage / ($listScale * $pageScale));
	// 검색
	if($search_order){
			$search_order=$search_order; //넘어오는 값 변수 설정
			$search_order=trim($search_order); //앞뒤 공백 제거
			$search_order=str_replace(' ', '', $search_order);
	}

	$query = "select * from $table where code='$code' and notice < 1";
		if($search_cate)		{$query.=" and cate='$search_cate'";}
		if($search_sday)		{$query.=" and DATE_FORMAT(reg_date,'%Y-%m-%d')>='$search_sday'";}
		if($search_eday)		{$query.=" and DATE_FORMAT(reg_date,'%Y-%m-%d')<='$search_eday'";}

		if($search_order){
			if($search_item){
				$query.=" and $search_item like '%$search_order%'";
			}else{
				$query.=" and (subject like '%$search_order%' or name like '%$search_order%' or content like '%$search_order%')";
			}
		}
		if($lang){ $query.=" and lang='$lang'"; }
	$rs = mysqli_query($db2,$query);
	$totalList = mysqli_num_rows($rs);

	$query = "select * from $table where code='$code' and notice < 1";
		if($search_cate)		{$query.=" and cate='$search_cate'";}
		if($search_sday)		{$query.=" and DATE_FORMAT(reg_date,'%Y-%m-%d')>='$search_sday'";}
		if($search_eday)		{$query.=" and DATE_FORMAT(reg_date,'%Y-%m-%d')<='$search_eday'";}

		if($search_order){
			if($search_item){
				$query.=" and $search_item like '%$search_order%'";
			}else{
				$query.=" and (subject like '%$search_order%' or name like '%$search_order%' or content like '%$search_order%')";
			}
		}
		if($lang){ $query.=" and lang='$lang'"; }
	if($bbs_stat->date_check==1){
		$query.="  order by reg_date desc, ref desc, re_step ASC LIMIT $startPage, $listScale";
	} else {
		$query.="  order by ref desc, re_step ASC LIMIT $startPage, $listScale";
	}
	$result = mysqli_query($db2,$query);


	// 페이지넘버
	if( $startPage ) { $listNo = $totalList - $startPage; } else { $listNo = $totalList; }
	// 답변 화살표
	$arowImage="┗";
	// 루프 시작
	while( $bbs_row = mysqli_fetch_object($result)) {
		
		$subject				=		$tools->strCut_utf($bbs_row->subject, 100);
		$preface				=		$bbs_row->preface;
		$name					=		$bbs_row->name;
		$read_cnt				=		$bbs_row->read_cnt;
		$reg_date				=		$tools->strDateCut( $bbs_row->reg_date,3 );
		$reg_date_edit	=		$tools->strDateCut( $bbs_row->reg_date_edit,3 );
		$coment_cnt		=		$db->cnt("cs_bbs_coment", "where link=$bbs_row->idx");

		if($bbs_stat->new_check) {$new_img =$page->bbsNewImg( $bbs_row->reg_date, $bbs_stat->new_mark, "<span class='label label-danger'>New</span>" ); }

		// 답변 re image view
		if($bbs_row->re_level > 0){ $wid = 7 * $bbs_row->re_level; $level_img="$arowImage"."&nbsp;"; } else $level_img="";

		/*카테고리 노출*/
		if($bbs_stat->bbs_cate==1){	$cs_cate = $db->object("cs_cate", "where idx='$bbs_row->cate'");	}
	?>

		<tr>
			<td class="text-center"><input type="checkbox" name="check_list" value="<?=$bbs_row->idx;?>"></td>
			<td class="text-center"><?=$listNo?></td>
			<?if($bbs_stat->nation==1) {?>
			<td class="text-center">
			<? if($bbs_row->lang==1){ ?>국문<? } ?>
			<? if($bbs_row->lang==2){ ?>영문<? } ?>
			<? if($bbs_row->lang==3){ ?>중문<? } ?>
			<? if($bbs_row->lang==4){ ?>일문<? } ?>
			</td>
			<?}?>
			<?if($bbs_stat->bbs_cate==1) {//카테고리?>
			<td class="text-center"><?echo $cs_cate->name;?></td>
			<?}?>
			<? if( $bbs_stat->bbs_type==3 ) {//썸네일?>
			<td class="text-center"><img src="<?=$site_host?>/data/bbsData/<?=$bbs_row->sum_file?>" class="img-responsive"></td>
			<? }?>
			<td>
				<?=$level_img?><?=$db->stripSlash($subject);?>&nbsp;
				<? if($coment_cnt) {?><span class="badge"><?=$coment_cnt;?></span><?}?>&nbsp;<?=$new_img?>
				<? if($bbs_row->secret=="y"){ ?><span class="glyphicon glyphicon-lock" aria-hidden="true"></span><? } ?>
			</td>
			<td class="text-center"><?=$name?></td>
			<td class="text-center"><?=$reg_date?></td>
			<td class="text-center"><?=$read_cnt?></td>
			<td class="text-center"><a href="./bbs_view.php?returnURL=<?=urlencode($_SERVER['REQUEST_URI'])?>&code=<?=$code;?>&idx=<?=$bbs_row->idx;?>" class="btn btn-default btn-sm">수정하기</a></td>
		</tr>

		<?
			$listNo--;
			}
		?>
	</tbody>
	</table>
	</div>

	<div class="text-center">
		<ul class="pagination">
			<?
			$pageURL= "code=".urlencode($code);
			$pageURL.= "&search_item=".urlencode($search_item);
			$pageURL.= "&search_order=".urlencode($search_order);
			$pageURL.= "&search_cate=".urlencode($search_cate);
			$pageURL.= "&search_sday=".urlencode($search_sday);
			$pageURL.= "&search_eday=".urlencode($search_eday);
			$pageURL.= "&lang=".urlencode($lang);

			if( $totalList > $listScale ) {
				if( $startPage+1 > $listScale*$pageScale ) {
					$prePage = $startPage - $listScale * $pageScale;
					echo "<li><a href='$_SERVER[PHP_SELF]?$pageURL&startPage=$prePage'><span aria-hidden='true'>&laquo;</span></a></li>";
				}
				for( $j=0; $j<$pageScale; $j++ ) {
					$nextPage = ($totalPage * $pageScale + $j) * $listScale;
					$pageNum = $totalPage * $pageScale + $j+1;
					if( $nextPage < $totalList ) {
						if( $nextPage!= $startPage ) {
							echo "<li><a href='$_SERVER[PHP_SELF]?$pageURL&startPage=$nextPage'>$pageNum</a></li>";
						} else {
							echo "<li class='active'><a href='javascript:;'>$pageNum</a></li>";
						}
					}
				}
				if( $totalList > (($totalPage+1) * $listScale * $pageScale)) {
					$nNextPage = ($totalPage+1) * $listScale * $pageScale;
					echo "<li><a href='$_SERVER[PHP_SELF]?$pageURL&startPage=$nNextPage'><span aria-hidden='true'>&raquo;</span></a></li>";
				}
			}
			if( $totalList <= $listScale) {
				echo "<li class='active'><a href='javascript:;' >1</a></li>";
			}
			?>
		</ul>
	</div>


	<table class="table">
		<tr>
			<td class="text-center"><a href="./bbs_write.php?returnURL=<?=urlencode($_SERVER['REQUEST_URI'])?>&code=<?=$code;?>" class="btn btn-primary">등록하기</a></td>
		</tr>
	</table>


<? include('../footer.php');?>

<script>
function goodsRanking(code,lang){
	var winleft = (screen.width - 400) / 2;
	var wintop = (screen.height - 500) / 2;
	window.open("./bbs_ranking.php?code="+code+"&lang="+lang,"","scrollbars=no, width=700, height=600, top="+wintop+", left="+winleft+"");
}
</script>