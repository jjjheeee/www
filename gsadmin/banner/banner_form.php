<?
$mod	= "banner";	
$menu	= "banner";
include("../header.php");

$row = $db->object("cs_banner","where idx='$idx'");

if($row->idx) { 
	$page_mode = "수정";
	$mode = "edit";
}else{
	$page_mode = "등록";
	$mode = "write";
}
?>

	<h4 class="page-header">홈/제품 배너 (<?=$page_mode?>)</h4>

	<form method="post" action="banner_ok.php" name="tx_editor_form" ENCTYPE="multipart/form-data">
	<input type="hidden" name="returnURL" value="<?=$returnURL?>">
	<input type="hidden" name="mode" value="<?=$mode?>">
	<input type="hidden" name="idx" value="<?=$row->idx?>">
	<table class="table table-bordered">
	<colgroup>
	<col width="15%">
	<col width="*">
	</colgroup>
	<tbody>
	<tr>
		<th>언어설정</th>
		<td>
			<label class="radio-inline"><input type="radio" name="lang" value="1" <?if(empty($row->lang) or $row->lang==1){?>checked<?}?>>국문</label>
			<label class="radio-inline"><input type="radio" name="lang" value="2" <?if($row->lang==2){?>checked<?}?>>영문</label>
			<!-- <label class="radio-inline"><input type="radio" name="lang" value="3" <?if($row->lang==3){?>checked<?}?>>중문</label>
			<label class="radio-inline"><input type="radio" name="lang" value="4" <?if($row->lang==4){?>checked<?}?>>일문</label> -->
		</td>
	</tr>
	<tr>
		<th>카테고리</th>
		<td>
			<select name="cate" class="form-control2">
			<option value="">선택</option>
			<?
				$rsc = $db->select("cs_cate","where code='banner' order by idx asc");
				while($rowc = mysqli_fetch_array($rsc)){
			?>
			<option value="<?=$rowc['idx']?>" <?if($rowc['idx']==$row->cate){echo "selected";}?>><?=$rowc['name']?></option>
			<?}?>
			</select>
		</td>
	</tr>
	<tr> 
		<th>노출여부</th>
		<td>
			<label class="radio-inline"><input type="radio" name="display" value="1" <?if(empty($row->idx) || $row->display){echo "checked";}?>>노출</label>
			<label class="radio-inline"><input type="radio" name="display" value="0" <?if($row->idx &&empty($row->display)){echo "checked";}?>>미노출</label>
		</td>
	</tr>
	<tr>
		<th>제 목</th>
		<td><input name="subject" class="form-control" value="<?=$row->subject?>"></td>
	</tr>
	<tr>
		<th>문 구1</th>
		<td><input name="ctext1" class="form-control" value='<?=$row->ctext1?>'></td>
	</tr>
	<tr>
		<th>문 구2</th>
		<td><input name="ctext2" class="form-control" value="<?=$row->ctext2?>"></td>
	</tr>
	<tr>
		<th>버튼문구</th>
		<td><input name="ctext3" class="form-control" value="<?=$row->ctext3?>"></td>
	</tr>
	<tr>
		<th>버튼링크</th>
		<td><input type="text" name="link_url" class="form-control" value="<?=$row->link_url?>"></td>
	</tr>
	<tr>
		<th>링크열기</th>
		<td>
			<label class="radio-inline"><input type="radio" name="link_open" value="1" <?if($row->link_open==1){ echo "checked";}?>  <?if(empty($row->idx)){ echo "checked";}?>> 새 창에서 열기</label>
			<label class="radio-inline"><input type="radio" name="link_open" value="2" <?if($row->link_open==2){ echo "checked";}?>> 현재 창에서 열기</label>
			<label class="radio-inline"><input type="radio" name="link_open" value="3" <?if($row->link_open==3){ echo "checked";}?>> 링크 없음</label>
		</td>
	</tr>
	<tr>
		<th>이미지[PC]</th>
		<td>
		<?
			if($row->bbs_file){
				echo "<img src='../../data/bbsData/$row->bbs_file' class='img-thumbnail'>";
				echo "<p></p>";
				echo '<label class="checkbox-inline"><input type="checkbox" name="imdel1" value="y">삭제</label><p></p>';
			}
		?>
		<input type="file" name="bbs_file">
		</td>
	</tr>
	<tr>
		<th>이미지[Mobile]</th>
		<td>
		<?
			if($row->bbs_file2){
				echo "<img src='../../data/bbsData/$row->bbs_file2' class='img-thumbnail'>";
				echo "<p></p>";
				echo '<label class="checkbox-inline"><input type="checkbox" name="imdel2" value="y">삭제</label><p></p>';
			}
		?>
		<input type="file" name="bbs_file2">
		</td>
	</tr>
	<tr>
		<th>로고 이미지</th>
		<td>
		<?
			if($row->bbs_file3){
				echo "<img src='../../data/bbsData/$row->bbs_file3' class='img-thumbnail'>";
				echo "<p></p>";
				echo '<label class="checkbox-inline"><input type="checkbox" name="imdel3" value="y">삭제</label><p></p>';
			}
		?>
		<input type="file" name="bbs_file3">
		</td>
	</tr>
	</tbody>	
	</table>
	</form>

	<table class="table">
		<tr>
			<td class="text-center">
				<button type="button" class="btn btn-primary" onClick="sendit();">등록</button>
				<a href="<?echo $returnURL? $returnURL:"banner.php";?>" class="btn btn-default">목록</a>
			</td>
		</tr>
	</table>

<script type="text/javascript">
<!--
function sendit() {
	var f=document.tx_editor_form;

	if(f.cate.value=="") {
		alert("카테고리를 선택해 주세요.");
		f.cate.focus();
	}else if(f.subject.value=="") {
		alert("제목을 입력해 주세요.");
		f.subject.focus();
	} else {
		f.submit();
	}
}
//-->
</script>

<? include('../footer.php');?>