<?
extract($_POST);
extract($_GET);
$mod	= "product";	
$menu	= "product";
include("../header.php");

if($part_code) {
	$part_row=$db->object("cs_part", "where part1_code='$part_code' or part2_code='$part_code' or part3_code='$part_code'", "idx");
	$part_idx=$part_row->idx;
}

//검색
$table			= "cs_goods";
$listScale		= 10;
$pageScale	= 10;
if( !$startPage ) { $startPage = 0; }
$totalPage = floor($startPage / ($listScale * $pageScale));
$query		= "select * from $table where 1";
	if($part_idx)			{$query.=" and part_idx=$part_idx";}
	if($search_order)	{$query.=" and (name like '%$search_order%')";}

	if($search_display)						{if($search_display=="on")					{$query.=" and display=1";					}else{$query.=" and display=0";}	}

$rs				= mysqli_query($db2,$query);
$totalList	= mysqli_num_rows($rs);

$query = "select * from $table where 1";
	if($part_idx)			{$query.=" and part_idx=$part_idx";}
	if($search_order)	{$query.=" and (name like '%$search_order%')";}

	if($search_display)						{if($search_display=="on")					{$query.=" and display=1";					}else{$query.=" and display=0";}	}

$query.="  order by idx desc LIMIT $startPage, $listScale";
$result = mysqli_query($db2,$query);

if( $startPage ) { $listNo = $totalList - $startPage; } else { $listNo = $totalList; }
?>

<script language="javascript">
<!--
function sendit() {
	var form=document.goods_form;
	form.submit();
}

////  카테고리 선택 폼 설정 시작 //////////////////////////////////////////////////////////////////////////
// 배열 선언
depth1 = new Array(); // 리스트1 출력용
depth2 = new Array(); // 리스트2 출력용
depth3 = new Array(); // 리스트3 출력용

depth1_value = new Array(); // 리스트1 값
depth2_value = new Array(); // 리스트2 값
depth3_value = new Array(); // 리스트3 값

var depth1_size = 3;
var depth2_size = 3;
var depth3_size = 3;
var sep = "$$";
// 배열 초기화

i = 0;
// depth1 의 배열 초기화
<?
$part1_result = $db->select( "cs_part", "where part_index=1 order by part_ranking asc");
while( $part1_row = mysqli_fetch_object($part1_result) ) {
	?>
	depth1[i] = "<?=$part1_row->part_name;?>";
	depth1_value[i] = "<?=$part1_row->part1_code;?>";

	j = 0;

	// depth2 의 배열 초기화
	<?
	$part2_result = $db->select( "cs_part", "where part1_code='$part1_row->part1_code' and part_index=2 order by part_ranking asc");
	while( $part2_row = mysqli_fetch_object($part2_result) )
	{
		?>
		if ( j == 0 )
		{
			depth2[i] = new Array();
			depth2_value[i] = new Array();
			depth3[i] = new Array();
			depth3_value[i] = new Array();
		}

		depth2[i][j] = "<?=$part2_row->part_name;?>" ;
		depth2_value[i][j] = "<?=$part2_row->part2_code;?>";

		k = 0;
		<?
		$part3_result = $db->select( "cs_part", "where part2_code='$part2_row->part2_code' and part1_code='$part1_row->part1_code' and part_index=3 order by part_ranking asc");
		while( $part3_row = mysqli_fetch_object($part3_result) )
		{
			?>
			if ( k == 0 )
			{
				depth3[i][j] = new Array();
				depth3_value[i][j] = new Array();
			}
			depth3[i][j][k] = '<?=$part3_row->part_name?>' ;
			depth3_value[i][j][k] = '<?=$part3_row->part3_code?>' ;
			k += 1;
			<?}
		?>
		j += 1;
		<?}
	?>
	i += 1;
	<? }
?>

// 선택되었을때 다음 단계 카테고리 출력
function change(depth, index, target)
{
	f = document.goods_form;   // 선택된 Form;

	if ( depth == 1 && index != -1)  // 대분류 선택 시
	{
		sp_value = f.select1[index].value;
		sp_value = sp_value.split(sep);
		sp_value2 = sp_value[1];

		for ( i = f.select2.length; i >= 0; i-- ) {
			f.select2[i] = null;
		}
		goods_form.part_code.value = "";
		if ( depth2[sp_value2] != null )
		{

			for ( i = 0 ; i <= depth2[sp_value2].length -1 ; i++ )
			{
				f.select2.options[i] = new Option(depth2[sp_value2][i],depth2_value[sp_value2][i] + sep + sp_value2 + sep + i );
			}
		}
		else
		{
			//			alert("2차 카테고리는 없습니다.");
			goods_form.part_code.value = depth1_value[sp_value2];
			alert("카테고리 선택 완료");
			sendit();
		}


		// 카테고리 2를 초기화 되면 카테로기 3은 모두 삭제한다.
		for ( i = f.select3.length; i >= 0; i-- ) {
			f.select3[i] = null;
		}
	}
	else if ( depth == 2 && index != -1 )   // 중분류 선택 시
	{
		sp_value = f.select2[index].value;
		sp_value = sp_value.split(sep);
		sp_value2 = sp_value[1];
		sp_value3 = sp_value[2];

		for ( i = f.select3.length; i >= 0; i-- ) {
			f.select3[i] = null;
		}
		goods_form.part_code.value = "";
		if ( depth3[sp_value2][sp_value3] != null )
		{

			for ( i = 0 ; i <= depth3[sp_value2][sp_value3].length -1 ; i++ )
			{
				f.select3.options[i] = new Option(depth3[sp_value2][sp_value3][i],depth3_value[sp_value2][sp_value3][i]);
			}
		}
		else
		{
			//			alert("3차 카테고리는 없습니다.");
			goods_form.part_code.value = depth2_value[sp_value2][sp_value3];
			alert("카테고리 선택 완료");
			sendit();
		}
	}
	else if ( depth == 3 && index != -1 )
	{
		goods_form.part_code.value = f.select3[index].value;
		alert("카테고리 선택 완료");
		sendit();
	}
}
////  카테고리 선택 폼 설정 종료 //////////////////////////////////////////////////////////////////////////

function goodsRanking(part_idx){
	var winleft = (screen.width - 400) / 2;
	var wintop = (screen.height - 500) / 2;
	window.open("product_ranking.php?part_idx="+part_idx,"","scrollbars=no, width=700, height=600, top="+wintop+", left="+winleft+"");
}
//-->
</script>


	<h4 class="page-header">제품목록</h4>


	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	  <div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingOne">
		  <h5 class="panel-title">
			 <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseExample">
				<div class="row">
				  <div class="col-xs-6 .col-sm-3">※ 제품검색</div>
				  <div class="col-xs-6 .col-sm-3 text-right"><i class="glyphicon glyphicon-chevron-down"></i></div>
				</div>
			</a>
		  </h5>
		</div>
		<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
		  <div class="panel-body">
				<form method="get" name="search_form" class="form-inline" action="<?=$_SERVER['PHP_SELF'];?>" >
				<input type="hidden" name="part_idx" value="<?=$part_idx?>">
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
									<option value="name" <?if($search_item=="name"){?>selected<?}?>>제품명</option>
								</select>
							</div>
						</div>
						<input type="text" name="search_order" class="form-control input-sm" value="<?=$search_order?>">
					</td>
				</tr>
				<tr>
					<th>노출여부</th>
					<td>
						<label class="radio-inline"><input type="radio" name="search_display" value="" <?if(empty($search_display))	{ echo "checked";}?>>전체</label>
						<label class="radio-inline"><input type="radio" name="search_display" value="on" <?if($search_display=="on")	{ echo "checked";}?>>ON</label>
						<label class="radio-inline"><input type="radio" name="search_display" value="off" <?if($search_display=="off")	{ echo "checked";}?>>OFF</label>
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
		  </div>
		</div>
		</div> 
	</div>

	<!-- <div class="row">
	  <a href="javascript:cate_pop('cs_goods','icon');" class="btn btn-primary btn-xs active">추가표시</a>
	</div><br> -->

	<form action="<?=$_SERVER['PHP_SELF'];?>" method="post" name="goods_form">
	<input type="hidden" name="part_code" value="<?=$part_code;?>">
	<input type="hidden" name="part_idx" value="<?=$part_idx?>">
	<table class="table table-bordered">
	<colgroup>
	<col width="15%" title="분류선택">
	<col width="*" title="카테고리">
	</colgroup>
	<tbody>
	<tr>
		<th class="text-center">분류선택</th>
		<td>
			<table class="table table-bordered">
			<colgroup>
			<col width="33%">
			<col width="33%">
			<col width="*">
			</colgroup>
			<tbody>
			<tr>
				<td class="text-center"><span class="btn btn-primary btn-xs btn-grad btn-rect">&nbsp;&nbsp;1차 카테고리&nbsp;&nbsp;</span></td>
				<td class="text-center" style="display:none;"><span class="btn btn-primary btn-xs btn-grad btn-rect">&nbsp;&nbsp;2차 카테고리&nbsp;&nbsp;</span></td>
				<td class="text-center" style="display:none;"><span class="btn btn-primary btn-xs btn-grad btn-rect">&nbsp;&nbsp;3차 카테고리&nbsp;&nbsp;</span></td>
			</tr>
			<tr>
				<td>
					<select name="select1" onChange='change(1, this.form.select1.selectedIndex, this.form)'  class="form-control" size="5">
					<script language = "javascript">
					for ( i = 0 ; i <= depth1.length -1 ; i++ ){
						document.write ("<option value='"+ depth1_value[i] + sep + i + "' >" + depth1[i] + "</option>");
					}
					</script>
					</select>
				</td>
				<td style="display:none;"><select name="select2" onChange='change(2, this.form.select2.selectedIndex, this.form)' class="form-control"  size="5"></select></td>
				<td style="display:none;"><select name="select3" onChange='change(3, this.form.select3.selectedIndex, this.form)' class="form-control"  size="5"></select></td>
			</tr>
			</tbody>
			</table>
		</td>
	</tr>
	</tbody>
	</table>
	</form><br>

	<?
	if($part_idx) {
		$part_stat_row = $db->object("cs_part", "where idx=$part_idx");
		if( $part_stat_row->part_index == 1 ) {
			$part_result = $db->select("cs_part", "where part1_code='$part_stat_row->part1_code' && part_index=1 order by idx asc", "part_name");
		}
		else if( $part_stat_row->part_index == 2 ) {
			$part_result = $db->select("cs_part", "where (part1_code='$part_stat_row->part1_code' && part_index=1) || (part2_code ='$part_stat_row->part2_code' && part_index=2) order by idx asc", "part_name");
		}
		else if( $part_stat_row->part_index == 3 ) {
			$part_result = $db->select("cs_part", "where (part1_code='$part_stat_row->part1_code' && part_index=1) || (part2_code ='$part_stat_row->part2_code' && part_index=2) || (part3_code='$part_stat_row->part3_code' && part_index=3) order by idx asc", "part_name");
		}
		$i=0;
		while( $part_stat_row = @mysqli_fetch_object( $part_result )) {
			$i++;
			$part_name.=$i."차 카테고리 : <font color='#FF0000'>".$part_stat_row->part_name."</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		}
	}
	else {
		$part_name = "전체";
	}
	?>
	
	<!-- <button type="button" class="btn btn-primary btn-xs active" onClick="cate_pop('icon');">아이콘 관리</button><br> -->

	<table class="table table-bordered table-hover ">
	<tr>
	  <th><?=$part_name;?>&nbsp;&nbsp;
	  <? if($part_idx){ ?> <button type="button" class="glyphicon glyphicon-th-list btn btn-danger btn-xs" aria-hidden="true" onClick="goodsRanking(<?=$part_idx;?>);"> 순위설정</button><? } ?>
	  </th>
	</tr>
	</table>


	<div class="table-responsive" >
	<table class="table table-bordered table-hover">
	<colgroup>
	<col width="5%" title="" >
	<col width="5%" title="No" >
	<col width="5%" title="제품대표이미지">
	<col width="*" title="제품명">
	<col width="7%" title="노출여부">
	<col width="10%" title="판매가격">
	<col width="10%" title="메인노출1">
	<col width="10%" title="메인노출2">
	<col width="7%" title="관리">
	</colgroup>
	<thead>
	<tr>
		<td><button type="button" class="btn btn-danger btn-xs btn-block ajax-checkbox" data-table="<?=$table?>" data-name="delete" data-val="">삭제</button></td>
		<td colspan="8"></td>
	</tr>
	<tr>
	<th><input type="checkbox" id="allCheck"></th>
	<th>N O</th>
	<th>이미지</th>
	<th>제품명</th>
	<th>노출여부</th>
	<th>Technical Specifications</th>
	<th>Accessories / Option</th>
	<th>Documents</th>
	<th>관리하기</th>
	</tr>
	</thead>
	<tbody>
	<?
		while($row = mysqli_fetch_array($result)){
	?>
	<tr>
		<td class="text-center"><input type="checkbox" name="check_list" value="<? echo $row['idx'] ?>"></td>
		<td class="text-center"><?=$listNo;?></td>
		<td class="text-center"><img src="<?=$site_host?>/data/goodsImages/<?=$row['images1']?>" class="img-responsive"></td>
		<td>
			<?=$db->stripSlash($row['name']);?>
			<?
				$rsc = $db->select("cs_cate","where code='icon' order by idx asc");
				while($rowc = mysqli_fetch_array($rsc)){
					if(strpos($row['icon'], $rowc['idx']) !== false){
					echo '<span class="label label-info">'.$rowc['name'].'</span>&nbsp;';
					}
				}
				if($row->sold_out=="y"){
					echo '<span class="label label-danger">품절</span>';			
				}
			?>
		</td>
		<td class="text-center">
			<div class="btn-group">
				<span data-table="<?=$table?>" data-name="display" data-idx="<?=$row['idx']?>" data-val="1" class="btn btn-<?if($row['display']){echo"danger active btn-xs";}else{ echo"default btn-xs ajax-button";}?>">ON</span>
				<span data-table="<?=$table?>" data-name="display" data-idx="<?=$row['idx']?>" data-val="0" class="btn btn-<?if(empty($row['display'])){echo "danger active btn-xs";}else{ echo "default btn-xs ajax-button";}?>">OFF</span>
			</div>
		</td>
		<td class="text-center">
		<a href="#none" onclick="window.open('table1.php?code=<?=$row['code']?>','','width=1000,height=600,scrollbars=yes');" class="btn btn-sm btn-primary">등록</a>
		</td>
		<td class="text-center">
		<a href="#none" onclick="window.open('table2.php?code=<?=$row['code']?>','','width=1000,height=600,scrollbars=yes');" class="btn btn-sm btn-primary">등록</a>
		</td>
		<td class="text-center">
		<a href="#none" onclick="window.open('product_file.php?code=<?=$row['code']?>','','width=1000,height=600,scrollbars=yes');" class="btn btn-sm btn-primary">등록</a>
		</td>
		<td class="text-center"><a href="./product_edit.php?returnURL=<?=urlencode($_SERVER['REQUEST_URI'])?>&idx=<?=$row['idx']?>" class="btn btn-default btn-sm">수정하기</a></td>
	</tr>
	<?
		$listNo--;
		}
	?>
	<? if(empty($totalList)) { ?>
	<tr>
		<td colspan="9" class="text-center" style="font-weight:bold"> 등록된 제품이 없습니다.</td>
	</tr>
	<?}?>
	</tbody>
	</table>
	</div>


	<div class="text-center">
		<ul class="pagination">
			<?
			$pageURL= "part_idx=".urlencode($part_idx);
			$pageURL.= "&search_item=".urlencode($search_item);
			$pageURL.= "&search_order=".urlencode($search_order);
			$pageURL.= "&search_display=".urlencode($search_display);


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
			<td class="text-center"><a href="./product_add.php" class="btn btn-primary">등록하기</a></td>
		</tr>
	</table>


<? include('../footer.php');?>