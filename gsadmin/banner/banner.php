<?
$mod	= "banner";	
$menu	= "banner";
include("../header.php");


	$table			= "cs_banner";
	$listScale		= 10;
	$pageScale	= 10;
	if( !$startPage ) { $startPage = 0; }
	$totalPage = floor($startPage / ($listScale * $pageScale));

	$query		= "select * from $table where 1";
		if($search_cate)		{$query.=" and cate='$search_cate'";}
		if($search_order){
			if($search_item){
				$query.=" and $search_item like '%$search_order%'";
			}else{
				$query.=" and (subject like '%$search_order%' or link_url like '%$search_order%')";
			}
		}
		if($lang){ $query.=" and lang='$lang'"; }

	$rs				= mysqli_query($db2,$query);
	$totalList	= mysqli_num_rows($rs);

	$query = "select * from $table where 1";
		if($search_cate)		{$query.=" and cate='$search_cate'";}
		if($search_order){
			if($search_item){
				$query.=" and $search_item like '%$search_order%'";
			}else{
				$query.=" and (subject like '%$search_order%' or link_url like '%$search_order%')";
			}
		}
		if($lang){ $query.=" and lang='$lang'"; }

	$query.="  order by idx desc LIMIT $startPage, $listScale";
	$result = mysqli_query($db2,$query);

	if( $startPage ) { $listNo = $totalList - $startPage; } else { $listNo = $totalList; }
?>

<script language="javascript">
function goodsRanking(part_idx){
	var winleft = (screen.width - 400) / 2;
	var wintop = (screen.height - 500) / 2;
	window.open("banner_ranking.php?part_idx="+part_idx,"","scrollbars=no, width=700, height=600, top="+wintop+", left="+winleft+"");
}

</script>

	<h4 class="page-header">홈/제품 배너 관리</h4>

	<form method="get" name="search_form" class="form-inline" action="<?=$_SERVER['PHP_SELF'];?>" >
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
					<select name="search_item" class="form-control input-sm" >
						<option value="">통합검색</option>
						<option value="subject" <?if($search_item=="subject"){?>selected<?}?>>제목</option>
						<option value="link_url" <?if($search_item=="link_url"){?>selected<?}?>>링크</option>
					</select>
				</div>
			</div>
			<input type="text" name="search_order" class="form-control input-sm" value="<?=$search_order?>">
		</td>
	</tr>

	<tr>
		<th>카테고리</th>
		<td>
			<label class="radio-inline"><input type="radio" name="search_cate" value="" <?if(empty($search_cate))	{ echo "checked";}?>>전체</label>
			<?
			$rsc = $db->select("cs_cate","where code='banner' order by idx asc");
			while($rowc = mysqli_fetch_array($rsc)){
			?>
			<label class="radio-inline"><input type="radio" name="search_cate" value="<?=$rowc['idx']?>" <?if($search_cate==$rowc['idx']){ echo "checked";}?>><?=$rowc['name']?></label>
			<?}?>
		</td>
	</tr>

	<tr style="display:none;">
		<th>언어설정</th>
		<td>
			<label class="radio-inline"><input type="radio" name="lang" value="" <?if($lang==""){?>checked<?}?>>전체</label>
			<label class="radio-inline"><input type="radio" name="lang" value="1" <?if($lang==1){?>checked<?}?>>국문</label>
			<label class="radio-inline"><input type="radio" name="lang" value="2" <?if($lang==2){?>checked<?}?>>영문</label>
			<label class="radio-inline"><input type="radio" name="lang" value="3" <?if($lang==3){?>checked<?}?>>중문</label>
			<label class="radio-inline"><input type="radio" name="lang" value="4" <?if($lang==4){?>checked<?}?>>일문</label>
		</td>
	</tr>

	<tr>
		<td colspan="2" class="text-center">
			<button type="submit" class="btn btn-primary btn-sm">검색</button>&nbsp;
			<a href="<?=$_SERVER['PHP_SELF']?>" class="btn btn-default btn-sm">초기화</a>
		</td>
	</tr>
	</tbody>
	</table>
	</form>


	<div class="table-responsive">
	<table class="table table-bordered table-hover">
	<colgroup>
	<col width="5%">
	<col width="5%">
	<col width="5%">
	<col width="10%">
	<col width="10%">
	<col width="*">
	<col width="10%">
	<col width="10%">
	<col width="10%">
	<col width="7%">
	</colgroup>
	<thead>
	<tr>
		<td><button type="button" class="btn btn-danger btn-xs btn-block ajax-checkbox" data-table="<?=$table?>" data-name="delete" data-val="">삭제</button></td>
		<?if($search_cate!=""){?>
		<td><button type="button" class="glyphicon glyphicon-th-list btn btn-danger btn-xs ff-nanum" aria-hidden="true" onClick="goodsRanking('<?=$search_cate;?>');"> 순위설정</button></td>
		<?}?>
		<td class="text-right" colspan="8">
			<button type="button" class="btn btn-primary btn-xs active" onClick="cate_pop('banner');">카테고리관리</button>
		</td>
	</tr>
	<tr>
		<th><input type="checkbox" id="allCheck"></th>
		<th>N O</th>
		<th>언 어</th>
		<th>카테고리</th>
		<th>이미지</th>
		<th>제 목</th>
		<th>링 크</th>
		<th>노출여부</th>
		<th>등록일</th>
		<th>관리하기</th>
	</tr>
	</thead>
	<tbody>
	<?
		while($row = mysqli_fetch_array($result)){

			$cate_row = $db->object("cs_cate", "where idx='$row[cate]'");

			$reg_date	= $tools->strDateCut($row['reg_date'], 3);
	?>
	<tr>
		<td class="text-center"><input type="checkbox" name="check_list" value="<?echo $row['idx']?>"></td>
		<td class="text-center"><?echo $listNo ?></td>
		<td class="text-center">
		<? if($row['lang']==1){ ?>국문<? } else if($row['lang']==2){ ?>영문<? } ?>
		</td>
		<td class="text-center"><?echo $db->stripSlash($cate_row->name);?></td>
		<td class="text-center"><img src="<?=$site_host?>/data/bbsData/<?=$row['bbs_file']?>" class="img-responsive"></td>
		<td class="text-center"><?echo $db->stripSlash($row['subject'])?></td>
		<td class="text-center">
			<?
				if($row['link_url'] && ($row['link_open']==1 || $row['link_open']==2)){
					echo '<a href="http://'.$row['link_url'].'" target="_blank">';
					echo '<h5>[ 클릭 ]</h5>'; 
					echo '</a>';
				}
			?>
		</td>
		<td class="text-center">
			<div class="btn-group">
				<span data-table="<?=$table?>" data-name="display" data-idx="<?=$row['idx']?>" data-val="1" class="btn btn-<?if($row['display']){echo"danger active btn-xs";}else{ echo"default btn-xs ajax-button";}?>">ON</span>
				<span data-table="<?=$table?>" data-name="display" data-idx="<?=$row['idx']?>" data-val="0" class="btn btn-<?if(empty($row['display'])){echo "danger active btn-xs";}else{ echo "default btn-xs ajax-button";}?>">OFF</span>
			</div>
		</td>
		<td class="text-center"><?echo $reg_date?></td>
		<td class="text-center"><a href="./banner_form.php?returnURL=<?=urlencode($_SERVER['REQUEST_URI'])?>&idx=<?=$row['idx']?>" class="btn btn-default btn-sm">수정하기</a></td>
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
			$pageURL= "search_item=".urlencode($search_item);
			$pageURL.= "&search_order=".urlencode($search_order);
			$pageURL.= "&search_cate=".urlencode($search_cate);
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
			<td class="text-center"><a href="./banner_form.php" class="btn btn-primary">등록하기</a></td>
		</tr>
	</table>


 <? include('../footer.php');?>