<?
include("../header2.php");
?>
<div class="col-md-12" >

	<h4 class="page-header">Documents</h4>

	<form method="post" name="form" action="product_file_ok.php" enctype="multipart/form-data">
	<input type="hidden" name="code" value="<?=$code?>">
	<input type="hidden" name="mode" value="write">

	<table class="table table-bordered">
	<colgroup>
	<col width="15%">
	<col width="*">
	</colgroup>
	<tbody>
	<tr>
		<th>순서</th>
		<td>
		<input type="text" name="ranking" class="form-control2">
		</td>
	</tr>
	<tr>
		<th>제목</th>
		<td>
		<input type="text" name="title" class="form-control">
		</td>
	</tr>
	<tr>
		<th>파일</th>
		<td>
		<input type="file" name="bbs_file" class="form-control">
		</td>
	</tr>
	</table>

		</form>

	<table class="table">
		<tr>
			<td class="text-center">
				<button type="button" class="btn btn-primary" onClick="sendit();">등록</button>
				<a href="product_file.php?code=<?=$code?>" class="btn btn-default">목록</a>
			</td>
		</tr>
	</table>



<script language="javascript">
<!--
function sendit(){

	if(form.title.value==""){
		alert("제목을 입력해 주세요.");
		form.title.focus();
	} else if(form.bbs_file.value==""){
		alert("파일을 선택해 주세요.");
		form.bbs_file.focus();
	} else {
		form.submit();
	}

}
-->
</script>

</div>


 <? include('../footer2.php');?>