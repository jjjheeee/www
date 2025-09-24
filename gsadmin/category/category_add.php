<?
$mod	= "product";	
$menu	= "category";
include("../header.php");
include $_SERVER['DOCUMENT_ROOT']."/webeditor/webeditor_script.php";

if(empty($part_index)){$part_index=1;}
$row = $db->object("cs_part", "where idx='$_GET[idx]'");
?>	

	<h4 class="page-header">카테고리관리(등록)</h4>

	<form action="category_add_ok.php" id="tx_editor_form" method="post" name="part_form" enctype="multipart/form-data">
	<input type="hidden" name="part_index" value="<?=$part_index?>">

<?if($part_index==1){?>
	<input type="hidden" name="part1_code" value="<?=time()?>" title="카테고리 코드">
<?}else if($part_index==2){?>
	<input type="hidden" name="part1_code" value="<?=$row->part1_code;?>" title="1차코드">
	<input type="hidden" name="part2_code" value="<?=time();?>" title="2차코드">
<?}else if($part_index==3){?>
	<input type="hidden" name="part1_code" value="<?=$row->part1_code;?>" title="1차코드">
	<input type="hidden" name="part2_code" value="<?=$row->part2_code;?>" title="2차코드">
	<input type="hidden" name="part3_code" value="<?=time();?>" title="3차코드">
<?
	}else{
		$tools->errMsg('잘못된 접근입니다.');
	}
?>


	<table class="table table-bordered">		
	<colgroup>
	<col width="20%">
	<col width="*">
	</colgroup>
	<tbody>
	<tr> 
		<th>카테고리 상태</th>
		<td><?=$part_index;?>차 카테고리 등록</td>
	</tr>
	<tr> 
		<th>카테고리 이름_영문</th>
		<td><input name="part_name" type="text" class="form-control" placeholder="카테고리 이름을 적어주세요"></td>
	</tr>
	<tr> 
		<th>카테고리 이름_국문</th>
		<td><input name="part_name_k" type="text" class="form-control" placeholder="카테고리 이름을 적어주세요"></td>
	</tr>
	<tr> 
		<th>노출여부</th>
		<td>
			<label class="radio-inline"><input type="radio" name="part_display_check" value="0">&nbsp;미노출</label>
			<label class="radio-inline"><input type="radio" name="part_display_check" value="1" checked>&nbsp;노출</label>
		</td>
	</tr>
	<tr style="display:<?if($part_index >= 1){?>none<?}?>"> 
		<th>하위 카테고리 설정</th>
		<td>
			<label class="radio-inline"><input type="radio" name="part_low_check" value="0" checked>&nbsp;미사용&nbsp;</label>
			<label class="radio-inline"><input type="radio" name="part_low_check" value="1">&nbsp;사용&nbsp;</label>&nbsp;&nbsp;(2, 3차 카테고리를 등록 유무 설정)
		</td>
	</tr>
	<tr>
		<th>비주얼 배경 이미지 첨부</th>
		<td><input type="file" name="bbs_file"></td>
	</tr>
	<tr style="display:none"> 
		<th>내 용</th>
		<td><?include $_SERVER['DOCUMENT_ROOT']."/webeditor/webeditor_area.php";?></td>
	</tr>
	</tbody>
	</table>
	</form>


	<table class="table">
		<tr>
			<td class="text-center">
				<button type="button" class="btn btn-primary" onClick="Editor.save();">등록</button>
				<a href="./category.php" class="btn btn-default">목록</a>
			</td>
		</tr>
	</table>


<script src="/webeditor/webeditor_config.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
<!--
function validForm(editor) {
	var validator = new Trex.Validator();
	var content = editor.getContent();

		if (document.part_form.part_name.value == '') {
			alert('카테고리 이름을 입력해주세요.');
			document.part_form.part_name.focus();
			return false;
	}
	/*
	if (!validator.exists(content)) {
		$("#contents_validate").html('내용을 입력해주세요.');
		Editor.focus();
		return false;
	}
	*/
	return true;
}
//-->
</script>


<? include('../footer.php');?>