<?
include("../header2.php");
?>
<link rel="stylesheet" type="text/css" media="screen" href="/css/content_do.css" />
<div class="col-md-12" >

	<h4 class="page-header">Documents (국문)</h4>

	<table class="table table-bordered">
	<colgroup>
	<col width="15%">
	<col width="*">
	</colgroup>
	<tbody>
	<tr>
		<td colspan="2" class="text-center">
			<button type="button" onclick="location.href='product_k_file_write.php?code=<?=$code?>';" class="btn btn-primary btn-sm">등록하기</button>
		</td>
	</tr>
	</tbody>
	</table>


	<table class="table table-bordered table-hover">
	<colgroup>
	<col width="5%">
	<col width="*">
	<col width="20%">
	<col width="15%">
	</colgroup>
	<thead>
	<tr>
		<th>N O</th>
		<th>제 목</th>
		<th>파 일</th>
		<th>관리하기</th>
	</tr>

	<?
	$listNo=1;
	$rs = $db->select("cs_goods_k_file","where code='$code' order by ranking asc, idx desc");
	while($row = mysqli_fetch_object($rs)){
	?>
	<tr>
		<td class="text-center"><?echo $listNo?></td>
		<td class="text-center"><?=$row->title?></td>
		<td class="text-center"><a href="product_k_file_download.php?download=1&idx=<?=$row->idx?>"><?=$row->sbbs_file?></a></td>
		<td class="text-center">
		<a href="#none" onclick="location.href='product_k_file_edit.php?idx=<?=$row->idx?>&code=<?=$code?>';" class="btn btn-sm btn-primary">수정</a>
		<a href="#none" onclick="dele('<?=$row->idx?>');" class="btn btn-sm btn-danger">삭제</a>
		</td>
	</tr>
	<? $listNo++; } ?>
	</thead>
	<tbody>


</div>


<script language="javascript">
<!--
function dele(text){

	ans = confirm("삭제 하시겠습니까?");

	if(ans==true){
		location.href="product_k_file_ok.php?code=<?=$code?>&mode=del&idx="+text;
	}

}
-->
</script>