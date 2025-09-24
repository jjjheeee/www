<?
$mod	= "online";	
$menu	= "online";
include("../header.php");

	$table			= "cs_online";
	$listScale		= 10;
	$pageScale	= 10;
	if( !$startPage ) { $startPage = 0; }
	$totalPage = floor($startPage / ($listScale * $pageScale));
	$query		= "select * from $table where 1";
		if($search_order){
			if($search_item){
				$query.=" and $search_item like '%$search_order%'";
			}else{
				$query.=" and (name like '%$search_order%' or phone like '%$search_order%' or content like '%$search_order%')";
			}
		}
	$rs				= mysqli_query($db2,$query);
	$totalList	= mysqli_num_rows($rs);

	$query = "select * from $table where 1";
		if($search_order){
			if($search_item){
				$query.=" and $search_item like '%$search_order%'";
			}else{
				$query.=" and (name like '%$search_order%' or phone like '%$search_order%' or content like '%$search_order%')";
			}
		}
	$query.="  order by idx desc LIMIT $startPage, $listScale";
	$result = mysqli_query($db2,$query);

	if( $startPage ) { $listNo = $totalList - $startPage; } else { $listNo = $totalList; }
?>

	<h4 class="page-header">온라인 신청서</h4>

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
						<option value="name" <?if($search_item=="name"){?>selected<?}?>>이름</option>
						<option value="phone" <?if($search_item=="phone"){?>selected<?}?>>휴대폰</option>
						<option value="content" <?if($search_item=="content"){?>selected<?}?>>내용</option>
					</select>
				</div>
			</div>
			<input type="text" name="search_order" class="form-control input-sm" value="<?=$search_order?>">
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
	<col width="15%">
	<col width="15%">
	<col width="10%">
	<col width="*">
	<col width="10%">
	<col width="7%">
	</colgroup>
	<thead>
	<tr>
		<td><button type="button" class="btn btn-danger btn-xs btn-block ajax-checkbox" data-table="<?=$table?>" data-name="delete" data-val="">삭제</button></td>
		<td colspan="7"></td>
	</tr>
	<tr>
		<th><input type="checkbox" id="allCheck"></th>
		<th>N O</th>
		<th>Types of Inquiry</th>
		<th>이 름</th>
		<th>휴대폰</th>
		<th>내 용</th>
		<th>등록일</th>
		<th>관리하기</th>
	</tr>
	</thead>
	<tbody>
	<?
		$today = date("Y-m-d");
		while($row = mysqli_fetch_array($result)){
			$reg_date	= $tools->strDateCut($row['reg_date'], 3);

			$content = $tools->strCut_utf($tools->strHtmlNoBr($row['content']), 100);
	?>
	<tr>
		<td class="text-center"><input type="checkbox" name="check_list" value="<? echo $row['idx'] ?>"></td>
		<td class="text-center"><?echo $listNo?></td>
		<td class="text-center"><?=$row[inquiry]?></td>
		<td class="text-center"><?echo $row['name']?><? if($today==$reg_date){ ?>&nbsp;<span class="label label-danger">New</span><? } ?></td>
		<td class="text-center"><?echo $row['phone']?> </td>
		<td><?echo $content;?></td>
		<td class="text-center"><?echo $reg_date?></td>
		<td class="text-center"><a href="./online_view.php?returnURL=<?=urlencode($_SERVER['REQUEST_URI'])?>&idx=<?=$row['idx']?>" class="btn btn-default btn-sm">상세보기</a></td>
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


 <? include('../footer.php');?>