<?
$mod	= "product";	
$menu	= "category";
include("../header.php");
include$_SERVER['DOCUMENT_ROOT']."/lib/style_class.php";
include $_SERVER['DOCUMENT_ROOT']."/webeditor/webeditor_script.php";
$row = $db->object("cs_part", "where idx='$_GET[idx]'");
?>

	<h4 class="page-header">카테고리관리(수정)</h4>

	<form action="category_edit_ok.php" method="post" name="part_form" id="tx_editor_form" enctype="multipart/form-data">
	<input type="hidden" name="part_index" value="<?=$part_index?>">
	<input type="hidden" name="idx" value="<?=$row->idx;?>">
	<input type="hidden" name="part1_code" value="<?=$row->part1_code;?>" title="1차코드">
	<input type="hidden" name="part2_code" value="<?=$row->part2_code;?>" title="2차코드">
	<input type="hidden" name="part3_code" value="<?=$row->part3_code;?>" title="3차코드">


	<table class="table table-bordered">		
	<colgroup>
	<col width="20%">
	<col width="*">
	</colgroup>
	<tbody>
	<tr> 
		<th>카테고리 상태</th>
		<td><?=$part_index?>차 카테고리 수정</td>
	</tr>
	<tr> 
		<th>카테고리 이름_영문</th>
		<td><input name="part_name" type="text" class="form-control" value="<?=$row->part_name?>" ></td>
	</tr>
	<tr> 
		<th>카테고리 이름_국문</th>
		<td><input name="part_name_k" type="text" class="form-control" value="<?=$row->part_name_k?>"></td>
	</tr>
	<tr> 
		<th>노출여부</th>
		<td>
			<label class="radio-inline">
				<input type="radio" name="part_display_check" value="0" <? if( $row->part_display_check == 0 ) { echo( 'checked' ); }?>>&nbsp;미노출
			</label>
			<label class="radio-inline">
				<input type="radio" name="part_display_check" value="1" <? if( $row->part_display_check == 1 ) { echo( 'checked' ); }?>>&nbsp;노출
			</label>
		</td>
	</tr>
	<tr style="display:<?if($part_index >=1){?>none<?}?>"> 
		<th>하위 카테고리 설정</th>
		<td>
			<label class="radio-inline">
				<input type="radio" name="part_low_check" value="0" <? if( $row->part_low_check == 0 ) { echo( 'checked' ); }?>>&nbsp;미사용
			</label>
			<label class="radio-inline">
				<input type="radio" name="part_low_check" value="1" <? if( $row->part_low_check == 1 ) { echo( 'checked' ); }?>>&nbsp;사용
			</label>&nbsp;&nbsp;&nbsp;(2, 3차 카테고리를 등록 유무 설정)
		</td>
	</tr>
	<tr>
		<th>비주얼 배경 이미지 첨부</th>
		<td>
			<? if($row->bbs_file){ ?>
				<img src="/data/bbsData/<?=$row->bbs_file?>" width="300"><br>
				<label class="checkbox-inline"><input type="checkbox" name="imdel1" value="y">삭제</label><br><br>
			<? } ?>
			<input type="file" name="bbs_file">
		</td>
	</tr>
	<tr style="display:none"> 
		<th>내 용</th>
		<td>
			<textarea id="contents_source" style="display:none;"><?=$tools->strHtmlNoBr($row->title_html_code);?></textarea>
			<?include $_SERVER['DOCUMENT_ROOT']."/webeditor/webeditor_area.php";?>
		</td>
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