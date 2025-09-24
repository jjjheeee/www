<?
extract($_POST);
extract($_GET);
$mod	= "product";	
$menu	= "product_k";
include("../header.php");

include$_SERVER['DOCUMENT_ROOT']."/lib/style_class.php";
include $_SERVER['DOCUMENT_ROOT']."/webeditor/webeditor_script.php";
?>
<script type="text/javascript">
<!--
function partCodeCheck() {
	if(document.tx_editor_form.part_code.value=="카테고리를 선택하세요") {
		alert('카테고리를 선택하세요');
	}
}

//옵션
function optionCheck() {
	var form=document.tx_editor_form;
	if( form.option_check[0].checked ) {
		$(".option_view").css("display","none");
	} else if( form.option_check[1].checked ) {
		$(".option_view").css("display","");
	}
}

//관련 제품
function res(){	
	var code = $("input[name=code]").val();
	window.open("zzim_list.php?code="+code,"","width=1000,height=600,scrollbars=yes");	
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
	depth1[i] = "<?=$part1_row->part_name_k;?>";
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
	    <?}?>
	 j += 1;
	<?}?>	
i += 1;		
<? }?>

// 선택되었을때 다음 단계 카테고리 출력
function change(depth, index, target)
{
	f = document.tx_editor_form;   // 선택된 Form;
	
	if ( depth == 1 && index != -1)  // 대분류 선택 시
	{
		sp_value = f.select1[index].value;
		sp_value = sp_value.split(sep);
		sp_value2 = sp_value[1];
		
		for ( i = f.select2.length; i >= 0; i-- ) {
			f.select2[i] = null; 
		}
		tx_editor_form.part_code.value = "카테고리를 선택하세요";
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
			tx_editor_form.part_code.value = depth1_value[sp_value2];
			alert("카테고리 선택 완료\n\n제품을 등록 하세요");
			tx_editor_form.name.focus();
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
		tx_editor_form.part_code.value = "카테고리를 선택하세요";
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
			tx_editor_form.part_code.value = depth2_value[sp_value2][sp_value3];
			alert("카테고리 선택 완료\n\n제품을 등록 하세요");
			tx_editor_form.name.focus();
		}
	}
	else if ( depth == 3 && index != -1 )
	{
		tx_editor_form.part_code.value = f.select3[index].value;
		alert("카테고리 선택 완료\n\n제품을 등록 하세요");
		tx_editor_form.name.focus();
	}
}
////  카테고리 선택 폼 설정 종료 //////////////////////////////////////////////////////////////////////////
//-->
</script>

	<h4 class="page-header">제품등록(국문)</h4>

	<form name="tx_editor_form" id="tx_editor_form" action="product_k_add_ok.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="hidden_option1_data">
	<input type="hidden" name="hidden_option2_data">
	<input type="hidden" name="code" value="<?=time();?>" title="제품코드">
	<input type="hidden" name="part_code" value="">
	<input type="hidden" name="icon" value="" title="추가표시">
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
				<td class="text-center"><span class="btn btn-primary btn-xs btn-grad btn-rect">1차 카테고리</span></td>
				<td class="text-center" style="display:none;"><span class="btn btn-primary btn-xs btn-grad btn-rect">2차 카테고리</span></td>
				<td class="text-center" style="display:none;"><span class="btn btn-primary btn-xs btn-grad btn-rect">3차 카테고리</span></td>
			</tr>
			<tr> 
				<td>
					<select  name="select1" onChange='change(1, this.form.select1.selectedIndex, this.form)'  class="form-control"  size="5">
						<script language = "javascript">
						for ( i = 0 ; i <= depth1.length -1 ; i++ ){	document.write ("<option value='"+ depth1_value[i] + sep + i + "' >" + depth1[i] + "</option>");}
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
	<tr>
		<td colspan="2"></td>
	</tr>
	<tr> 
		<th>노출여부</th>
		<td>
			<label class="radio-inline"><input type="radio" name="display" value="1" checked>노출</label>&nbsp;
			<label class="radio-inline"><input type="radio" name="display" value="">미노출</label>&nbsp;&nbsp;
		</td>
	</tr>
	<!-- <tr> 
		<th>메인노출1</th>
		<td>
			<label class="radio-inline"><input type="radio" name="main_position" value="1">ON</label>&nbsp;
			<label class="radio-inline"><input type="radio" name="main_position" value="" checked>OFF</label>
		</td>
	</tr>
	<tr> 
		<th>메인노출2</th>
		<td>
			<label class="radio-inline"><input type="radio" name="sub_position" value="1">ON</label>&nbsp;
			<label class="radio-inline"><input type="radio" name="sub_position" value="" checked>OFF</label>
		</td>
	</tr>
	<tr>
		<th>추가표시</th>
		<td>
			<?
			$rsc = $db->select("cs_cate","where code='icon' order by idx asc");
			while($rowc = mysqli_fetch_array($rsc)){
			?>
			<label class="checkbox-inline"><input type="checkbox" name="icon_arr" value="<?=$rowc[idx]?>"><?=$rowc[name]?></label>&nbsp;&nbsp;
			<?}?>
		</td>
	</tr> -->
	</tbody>
	</table><br>

	<h5 class="page-header"><i class="glyphicon glyphicon-check"></i> 제품정보</h5>
	<table class="table table-bordered">
	<colgroup>
	<col width="15%">
	<col width="*">
	</colgroup>
	<tbody>
	<tr>
		<th>제품명</th>
		<td><input name="name" type="text" class="form-control" onKeyDown="partCodeCheck();"></td>
	</tr>
	<tr>
		<th>제품명_2</th>
		<td><input name="name2" type="text" class="form-control"></td>
	</tr>
	<tr>
		<th>제품간단설명</th>
		<td>
		<p class="editor-table-txt" style="font-size:11px; padding:5px 0 0 0; text-align:left;">※  제품간단설명을 꼭 입력하셔야 검색엔진(네이버나 구글)에서 검색이 원활하게 이루어질 수 있습니다.</p>
		<textarea name="content_re" class="form-control" style="height:150px;"></textarea>
		</td>
	</tr>
	<tr>
		<th>제품명_s</th>
		<td><input name="name_s" type="text" class="form-control"></td>
	</tr>
	<tr>
		<th>제품간단설명_s</th>
		<td>
		<textarea name="content_re_s" class="form-control" style="height:150px;"></textarea>
		</td>
	</tr>

	<tr> 
		<th>제품이미지</th>
		<th>
			<table class="table table-bordered">
			<caption></caption>
			<colgroup>
			<col width="15%">
			<col width="*">
			</colgroup>
			<tbody>
			<tr>
				<td>리스트 이미지</td>
				<td class="text-left"><input name="images1" type="file"> [권장 사이즈 270 x 270 ]</td>
			</tr>
			<tr>
				<td>로고 이미지</td>
				<td class="text-left"><input name="images2" type="file"> [권장 사이즈 104 x 104 ]</td>
			</tr>
			<tr> 
				<td>상세 이미지1</td>
				<td class="text-left"><input name="add_images1" type="file"> [권장 사이즈 270 x 270 ]</td>
			</tr>
			<tr> 
				<td>상세 이미지2</td>
				<td class="text-left"><input name="add_images2" type="file"> [권장 사이즈 270 x 270 ]</td>
			</tr>
			<tr> 
				<td>상세 이미지3</td>
				<td class="text-left"><input name="add_images3" type="file"> [권장 사이즈 270 x 270 ]</td>
			</tr>
			<tr> 
				<td>상세 이미지4</td>
				<td class="text-left"><input name="add_images4" type="file"> [권장 사이즈 270 x 270 ]</td>
			</tr>
			<tr> 
				<td>상세 이미지5</td>
				<td class="text-left"><input name="add_images5" type="file"> [권장 사이즈 270 x 270 ]</td>
			</tr>
			<tr> 
				<td>상세 이미지6</td>
				<td class="text-left"><input name="add_images6" type="file"> [권장 사이즈 270 x 270 ]</td>
			</tr>
			<tr> 
				<td>상세 이미지7</td>
				<td class="text-left"><input name="add_images7" type="file"> [권장 사이즈 270 x 270 ]</td>
			</tr>
			<tr> 
				<td>상세 이미지8</td>
				<td class="text-left"><input name="add_images8" type="file"> [권장 사이즈 270 x 270 ]</td>
			</tr>
			<tr> 
				<td>상세 이미지9</td>
				<td class="text-left"><input name="add_images9" type="file"> [권장 사이즈 270 x 270 ]</td>
			</tr>
			<tr> 
				<td>상세 이미지10</td>
				<td class="text-left"><input name="add_images10" type="file"> [권장 사이즈 270 x 270 ]</td>
			</tr>
			</tbody>
			</table>
		</th>
	</tr>
	<tr>
		<th>해시태그</th>
		<td>
		<p class="editor-table-txt" style="font-size:11px; padding:5px 0 0 0; text-align:left;">※ 구분자 쉼표로 등록해 주세요. 예 : 테스트,test,제품</p>
		<input name="keywords" type="text" class="form-control">
		</td>
	</tr>
	</tbody>
	</table><br><br>

	<h5 class="page-header"><i class="glyphicon glyphicon-check"></i> 제품설명</h5>
	<table class="table table-bordered">
		<tr> 
			<td><?include $_SERVER['DOCUMENT_ROOT']."/webeditor/webeditor_area.php";?></td>
		</tr>
	</table><br>
	
	<table class="table">
		<tr>
			<td class="text-center">
				<button type="button" class="btn btn-primary" onClick="Editor.save();">등록</button>
				<a href="<?echo $returnURL? $returnURL:"product_k.php";?>" class="btn btn-default">목록</a>
			</td>
		</tr>
	</table>

	</form>



<script src="/webeditor/webeditor_config.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
<!--
function validForm(editor) {
	var validator = new Trex.Validator();
	var content = editor.getContent();

	//옵션
	var option_sold_out = document.getElementsByName("option_sold_out[]"); 
	var hidden_option_sold_out = document.getElementsByName("hidden_option_sold_out[]"); 

	for (var i = 0 ; i < option_sold_out.length; i++) { 
		if(option_sold_out[i].checked==true){
			hidden_option_sold_out[i].value="y";
		}else if(option_sold_out[i].checked==false){
			hidden_option_sold_out[i].value="";
		}
	}

	if (document.tx_editor_form.part_code.value == '') {
		alert('카테고리를 선택해 주세요');
		return false;
	}

	if (document.tx_editor_form.name.value == '') {
		alert('제품명을 입력해 주세요');
		document.tx_editor_form.name.focus();
		return false;
	}


	//if (!validator.exists(content)) {
		//$("#contents_validate").html('내용을 입력해주세요.');
		//Editor.focus();
		//return false;
	//}
	//dataInput();
	return true;
}


//옵션 처리
function  option_arr(){
	var no= $('.arrRow').length;
	var html =
	'<tr class="arrRow" id="sizeRow'+no+'">' +
		'<td><input type="text" name="option_name[]" class="form-control input-sm" placeholder="예시) 색상/빨강"></td>' +
		'<td><input type="text" name="option_price[]" class="form-control input-sm text-center" placeholder="예시) 10000"></td>' +
		//'<td><input type="text" name="option_number[]" class="form-control input-sm text-center" maxlength="4" placeholder="예시) 9999" value="1000"></td>' +
		'<td class="text-center">' +
			'<label class="checkbox-inline"><input type="checkbox" name="option_sold_out[]" value="y">품절</label>' +
			'<input type="hidden" name="hidden_option_sold_out[]" value="">' +
		'</td>' +
		'<td class="text-center"><a href="javascript:;" class="btnDel btn btn-danger btn-xs" data-del="'+no+'">삭제</a></td>' +
	'</tr>';
	$("#option_arr").append(html);
}

//삭제
$(document).on("click", ".btnDel", function(){
	$("#sizeRow" + $(this).attr("data-del")).remove();
});
//-->
</script>

<? include('../footer.php');?>