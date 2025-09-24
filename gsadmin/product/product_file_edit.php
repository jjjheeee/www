<?
include("../header2.php");

$idx = $_GET[idx];

$row = $db->object("cs_goods_file","where idx='$idx'");
?>
<link rel="stylesheet" type="text/css" media="screen" href="/css/content_do.css" />
<div class="col-md-12" >

	<h4 class="page-header">Documents</h4>

	<form method="post" action="product_file_ok.php" name="form" enctype="multipart/form-data">
	<input type="hidden" name="idx" value="<?=$idx?>">
	<input type="hidden" name="code" value="<?=$code?>">
	<input type="hidden" name="mode" value="edit">

	<table class="table table-bordered">
	<colgroup>
	<col width="15%">
	<col width="*">
	</colgroup>
	<tbody>
	<tr>
		<th>순서</th>
		<td>
		<input type="text" name="ranking" class="form-control2" value="<?=$row->ranking?>">
		</td>
	</tr>
	<tr>
		<th>제목</th>
		<td>
		<input type="text" name="title" class="form-control" value="<?=$row->title?>">
		</td>
	</tr>
	<tr>
		<th>파일</th>
		<td>
		<? if($row->bbs_file){ ?><?=$row->sbbs_file?> <input type="checkbox" name="imdel1" value="y"> 삭제<br><? } ?>
		<input type="file" name="bbs_file" class="form-control">
		</td>
	</tr>
	</table>

						<table class="table">
							<tr>
								<td class="text-center">
									<button type="submit" class="btn btn-primary">등록</button>
									<a href="product_file.php?code=<?=$code?>" class="btn btn-default">목록</a>
								</td>
							</tr>
						</table>
	</form>

</div>

 <? include('../footer2.php');?>