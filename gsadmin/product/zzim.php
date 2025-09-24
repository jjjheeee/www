<?
include $_SERVER['DOCUMENT_ROOT']."/common.php";

$site_host	= "http://" . $_SERVER['HTTP_HOST'];
$site_url	= $site_host."/gsadmin";
?>
<script src="<?=$site_url?>/js/admin.js"></script>

<?
$table			= "cs_zzim";
$listScale		= 1000;
$pageScale	= 10;
if( !$startPage ) { $startPage = 0; }
$totalPage = floor($startPage / ($listScale * $pageScale));

$query		= "select * from $table where code='$code'";
$rs				= mysqli_query($db2,$query);
$totalList	= mysqli_num_rows($rs);

$query = "select * from $table where code='$code'";
$query.="  order by ranking asc, goods_idx desc";
$result = mysqli_query($db2,$query);

if( $startPage ) { $listNo = $totalList - $startPage; } else { $listNo = $totalList; }
?>

<h5 class="page-header"><i class="glyphicon glyphicon-check"></i> 관련제품</h5>

<div class="text-right">
	<a href="javascript:;" class="btn btn-warning btn-xs" onClick="res();"><i class="glyphicon glyphicon-plus-sign"></i>&nbsp;제품추가</a>&nbsp;
	<?if($totalList){?>
	<a href="javascript:;" class="btn btn-danger btn-xs ajax-checkbox" data-table="<?=$table?>" data-name="delete" data-val=""><i class="glyphicon glyphicon-trash"></i>&nbsp;삭제</a>
	<?}?>
</div><p>

<form method="post" name="form">
<table class="table table-bordered">
<colgroup>
<col width="5%">
<col width="5%">
<col width="10%">
<col width="5%">
<col width="*">
<col width="10%">
<col width="10%">
</colgroup>
<thead>
<tr>
	<th><input type="checkbox" id="allCheck"></th>
	<th>NO</th>
	<th>순서 변경 &nbsp; ( <a href="javascript:;" class="label label-danger btn-sm" onClick="rankingSendit();">저장</a> )</th>
	<th>이미지</th>
	<th>제품명</th>
	<th>노출여부</th>
	<th>판매가격</th>
</tr>	
</thead>
<tbody>
<?
while($row = mysqli_fetch_array($result)){
	$goods_row = $db->object("cs_goods","where idx='$row[goods_idx]'");
?>
<tr>
	<td class="text-center"><input type="checkbox" name="check_list" value="<? echo $row['idx'] ?>"></td>
	<td class="text-center"><?=$listNo?></td>
	<td class="text-center">
		<a href="javascript:;" class="glyphicon btn btn-sm btn-default" onclick="moveUp(this)">∧</a>&nbsp;&nbsp;&nbsp;
		<a href="javascript:;" class="glyphicon btn btn-sm btn-default" onclick="moveDown(this)">∨</a>
	</td>
	<td class="text-center"><img src="<?=$site_host?>/data/goodsImages/<?=$goods_row->images1?>" alt="" class="img-responsive img50"></td>
	<td><?=$db->stripSlash($goods_row->name);?></td>
	<td class="text-center"><?=strtoupper($goods_row->display)?></td>
	<td class="text-center"><?=number_format($goods_row->shop_price)?></td>
</tr>
<? 
	$listNo--;
	}
?>
</tbody>
</table>
</form>
<br>

<script type="text/javascript">
<!--
function rankingSendit(){	
	$("input[name=check_list]").prop('checked', true);
	var checkboxVal = [];
	$("input[name=check_list]").each(function(i) {
		checkboxVal.push($(this).val());
	});
	var dbname	= "<?=$table?>";
	var idx			= checkboxVal;
	var name		= "ranking";
	var postData =
		{ 
		"dbname": dbname,
		"idx": idx,
		"name": name
		};

	$.ajax({
		url : "../ajax/checkbox.php",
		type: "post",
		data: postData,
		success:function(obj){ 
			alert("변경이 완료되었습니다.");
			zzim_load();
		}
	});

}
//-->
</script>