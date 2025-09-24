<?
extract($_POST);
extract($_GET);
$mod	= "product";	
$menu	= "product";
include("../header.php");

include $_SERVER['DOCUMENT_ROOT']."/lib/style_class.php";
include $_SERVER['DOCUMENT_ROOT']."/webeditor/webeditor_script.php";

$row = $db->object("cs_goods", "where idx='$idx'");

// 카테고리 이름 출력
$part_stat_row = $db->object("cs_part", "where idx='$row->part_idx'");
if( $part_stat_row->part_index == 1 ) {
	$part_result = $db->select("cs_part", "where part1_code='$part_stat_row->part1_code' && part_index=1 order by idx asc", "part_name");
} else if( $part_stat_row->part_index == 2 ) {
	$part_result = $db->select("cs_part", "where (part1_code='$part_stat_row->part1_code' && part_index=1) || (part2_code ='$part_stat_row->part2_code' && part_index=2) order by idx asc", "part_name");
} else if( $part_stat_row->part_index == 3 ) {
	$part_result = $db->select("cs_part", "where (part1_code='$part_stat_row->part1_code' && part_index=1) || (part2_code ='$part_stat_row->part2_code' && part_index=2) || (part3_code='$part_stat_row->part3_code' && part_index=3) order by idx asc", "part_name");
}
$i=0;
while( $part_row = @mysqli_fetch_object( $part_result )) {
	$i++;
	$part_name.=$i."차 카테고리 : <font color='#FF0000'>".$part_row->part_name."</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
}

// 이미지 사이즈 
$goods_images1_size=@getimagesize("../../data/goodsImages/$row->images1");
$goods_images1_width=$goods_images1_size[0]; $goods_images1_height=$goods_images1_size[1];
$goods_images2_size=@getimagesize("../../data/goodsImages/$row->images2");
$goods_images2_width=$goods_images2_size[0]; $goods_images2_height=$goods_images2_size[1];
if( $row->add_images1 ) { $goods_add_images1_size=@getimagesize("../../data/goodsImages/$row->add_images1");$goods_add_images1_width=$goods_add_images1_size[0]; $goods_add_images1_height=$goods_add_images1_size[1];}
if( $row->add_images2 ) { $goods_add_images2_size=@getimagesize("../../data/goodsImages/$row->add_images2");	$goods_add_images2_width=$goods_add_images2_size[0]; $goods_add_images2_height=$goods_add_images2_size[1];}
if( $row->add_images3 ) { $goods_add_images3_size=@getimagesize("../../data/goodsImages/$row->add_images3");	$goods_add_images3_width=$goods_add_images3_size[0]; $goods_add_images3_height=$goods_add_images3_size[1];}
if( $row->add_images4 ) { $goods_add_images4_size=@getimagesize("../../data/goodsImages/$row->add_images4");	$goods_add_images4_width=$goods_add_images4_size[0]; $goods_add_images4_height=$goods_add_images4_size[1];}
if( $row->add_images5 ) { $goods_add_images5_size=@getimagesize("../../data/goodsImages/$row->add_images5");	$goods_add_images5_width=$goods_add_images5_size[0]; $goods_add_images5_height=$goods_add_images5_size[1];}
if( $row->add_images6 ) { $goods_add_images6_size=@getimagesize("../../data/goodsImages/$row->add_images6");	$goods_add_images6_width=$goods_add_images6_size[0]; $goods_add_images6_height=$goods_add_images6_size[1];}
if( $row->add_images7 ) { $goods_add_images7_size=@getimagesize("../../data/goodsImages/$row->add_images7");	$goods_add_images7_width=$goods_add_images7_size[0]; $goods_add_images7_height=$goods_add_images7_size[1];}
if( $row->add_images8 ) { $goods_add_images8_size=@getimagesize("../../data/goodsImages/$row->add_images8");	$goods_add_images8_width=$goods_add_images8_size[0]; $goods_add_images8_height=$goods_add_images8_size[1];}
if( $row->add_images9 ) { $goods_add_images9_size=@getimagesize("../../data/goodsImages/$row->add_images9");	$goods_add_images9_width=$goods_add_images9_size[0]; $goods_add_images9_height=$goods_add_images9_size[1];}
if( $row->add_images10 ) { $goods_add_images10_size=@getimagesize("../../data/goodsImages/$row->add_images10");	$goods_add_images10_width=$goods_add_images10_size[0]; $goods_add_images10_height=$goods_add_images10_size[1];}
?>
<script language="javascript">
<!--
//제품확대
function goodsImagesView( check, w, h ){
	window.open("./product_images_view.php?idx=<?=$idx?>&images_check="+check,"images","scrollbars=no,width="+w+",height="+h+",top=200,left=200");
}

// 옵션
function optionCheck() {
	var form=document.tx_editor_form;
	if( form.option_check[0].checked ) {
		$(".option_view").css("display","none");
	} else if( form.option_check[1].checked ) {
		$(".option_view").css("display","");
	}
}

//관련 상품
function res(){	
	var code = $("input[name=code]").val();
	window.open("zzim_list.php?code="+code,"","width=1000,height=600,scrollbars=yes");	
}
/**************관련 상품 종료**************/

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
		tx_editor_form.part_code.value = "";
		if ( depth2[sp_value2] != null )
		{
	
			for ( i = 0 ; i <= depth2[sp_value2].length -1 ; i++ )
			{
				f.select2.options[i] = new Option(depth2[sp_value2][i],depth2_value[sp_value2][i] + sep + sp_value2 + sep + i );
			}
		}
		else
		{
			tx_editor_form.part_code.value = depth1_value[sp_value2];
			alert("카테고리 선택 완료");
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
		tx_editor_form.part_code.value = "";
		if ( depth3[sp_value2][sp_value3] != null )
		{

			for ( i = 0 ; i <= depth3[sp_value2][sp_value3].length -1 ; i++ )
			{
				f.select3.options[i] = new Option(depth3[sp_value2][sp_value3][i],depth3_value[sp_value2][sp_value3][i]);
			}
		}
		else
		{
			tx_editor_form.part_code.value = depth2_value[sp_value2][sp_value3];
			alert("카테고리 선택 완료");
		}
	}
	else if ( depth == 3 && index != -1 )
	{
		tx_editor_form.part_code.value = f.select3[index].value;
		alert("카테고리 선택 완료");
	}
}
////  카테고리 선택 폼 설정 종료 //////////////////////////////////////////////////////////////////////////
//-->
</script>

	<h4 class="page-header">제품수정</h4>

	<form name="tx_editor_form" id="tx_editor_form"  action="product_edit_ok.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="returnURL" value="<?=$returnURL?>">
	<input type="hidden" name="idx" value="<?=$row->idx;?>">
	<input type="hidden" name="code" value="<?=$row->code;?>" title="제품코드">
	<input type="hidden" name="part_code" value="">
	<input type="hidden" name="icon" value="<?=$row->icon?>">
	<table class="table table-bordered">
	<colgroup>
	<col width="15%">
	<col width="*">
	</colgroup>
	<tbody>
	<tr> 
		<th>카테고리 이름</th>
		<td>&nbsp;&nbsp;<?=$part_name;?> </td>
	</tr>
	<tr> 
		<th class="text-center">
			분류변경 <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" title="" data-original-title="- 카테고리변경시 선택하여 주시기바랍니다."><span class="glyphicon glyphicon-question-sign"></span></button>
		</th>
		<td>
			<table class="table table-bordered">
			<colgroup>
			<col width="33%" title="1차카테고리">
			<col width="33%" title="2차카테고리">
			<col width="*"   title="3차카테고리">
			</colgroup>		
			<tbody>
			<tr> 
				<td class="text-center"><span class="btn btn-primary btn-xs btn-grad btn-rect">&nbsp;&nbsp;1차 카테고리&nbsp;&nbsp;</span></td>
				<td class="text-center" style="display:none;"><span class="btn btn-primary btn-xs btn-grad btn-rect">&nbsp;&nbsp;2차 카테고리&nbsp;&nbsp;</span></td>
				<td class="text-center" style="display:none;"><span class="btn btn-primary btn-xs btn-grad btn-rect">&nbsp;&nbsp;3차 카테고리&nbsp;&nbsp;</span></td>
			</tr>
			<tr> 
				<td>
					<select name="select1" onChange='change(1, this.form.select1.selectedIndex, this.form)'  class="form-control"  size="5">
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
			<label class="radio-inline"><input type="radio" name="display" value="1" <?if($row->display){echo("checked");}?>>노출</label>&nbsp;
			<label class="radio-inline"><input type="radio" name="display" value="" <? if(empty($row->display)){echo("checked");}?>>미노출</label>&nbsp;&nbsp;
		</td>
	</tr>	
	<!-- <tr> 
		<th>메인노출1</th>
		<td>
			<label class="radio-inline"><input type="radio" name="main_position" value="1" <?if($row->main_position){echo("checked");}?>>ON</label>&nbsp;
			<label class="radio-inline"><input type="radio" name="main_position" value="" <?if(empty($row->main_position)){echo("checked");}?>>OFF</label>
		</td>
	</tr>	
	<tr> 
		<th>메인노출2</th>
		<td>
			<label class="radio-inline"><input type="radio" name="sub_position" value="1" <?if($row->sub_position){echo("checked");}?>>ON</label>&nbsp;
			<label class="radio-inline"><input type="radio" name="sub_position" value="" <?if(empty($row->sub_position)){echo("checked");}?>>OFF</label>
		</td>
	</tr>
	<tr>
		<th>추가표시</th>
		<td>
			<?
			$rsc = $db->select("cs_cate","where code='icon' order by idx asc");
			while($rowc = mysqli_fetch_array($rsc)){
			?>
			<label class="checkbox-inline"><input type="checkbox" name="icon_arr" value="<?=$rowc[idx]?>" <?if(strpos($row->icon, $rowc[idx]) !== false){ echo "checked";}?>><?=$rowc[name]?></label>&nbsp;&nbsp;
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
		<td><input name="name" type="text" class="form-control" value="<?=$db->stripSlash($row->name);?>"></td>
	</tr>
	<tr>
		<th>제품명_2</th>
		<td><input name="name2" type="text" class="form-control" value="<?=$row->name2?>"></td>
	</tr>
	<tr>
		<th>제품간단설명</th>
		<td>
		<p class="editor-table-txt" style="font-size:11px; padding:5px 0 0 0; text-align:left;">※  제품간단설명을 꼭 입력하셔야 검색엔진(네이버나 구글)에서 검색이 원활하게 이루어질 수 있습니다.</p>
		<textarea name="content_re" class="form-control" style="height:150px;"><?=$row->content_re?></textarea></td>
	</tr>
	<tr>
		<th>제품명_s</th>
		<td><input name="name_s" type="text" class="form-control" value="<?=$row->name_s?>"></td>
	</tr>
	<tr>
		<th>제품간단설명_s</th>
		<td>
		<textarea name="content_re_s" class="form-control" style="height:150px;"><?=$row->content_re_s?></textarea>
		</td>
	</tr>

	<tr> 
		<th>제품이미지</th>
		<th colspan="2">
			<table class="table table-bordered">
			<caption></caption>
			<colgroup>
			<col width="15%">
			<col width="10%">
			<col width="*">
			</colgroup>
			<tbody>
			<tr> 
				<td>리스트 이미지</td>
				<td>
					<? if( $row->images1) { ?><a href="javascript:goodsImagesView( 'G1', '<?=$goods_images1_width;?>' , '<?=$goods_images1_height;?>' );" class="glyphicon glyphicon-picture btn btn-default btn-sm" aria-hidden="true"> View</a>&nbsp;&nbsp;<label class="checkbox-inline"><input type="checkbox" name="imdel1" value="y">삭제</label><? }?>
				</td>
				<td class="text-left"><input type="file" name="images1"> [권장 사이즈 270 x 270 ]</td>
			</tr>
			<tr> 
				<td>로고 이미지</td>
				<td>
					<? if( $row->images2) { ?><a href="javascript:goodsImagesView( 'G2', '<?=$goods_images2_width;?>' , '<?=$goods_images2_height;?>' );" class="glyphicon glyphicon-picture btn btn-default btn-sm" aria-hidden="true"> View</a>&nbsp;&nbsp;<label class="checkbox-inline"><input type="checkbox" name="imdel2" value="y">삭제</label><? }?>
				</td>
				<td class="text-left"><input type="file" name="images2"> [권장 사이즈 104 x 104 ]</td>
			</tr>

			<tr> 
				<td>상세 이미지1</td>
				<td>
					<? if( $row->add_images1) { ?><a href="javascript:goodsImagesView( 'A1', '<?=$goods_add_images1_width;?>' , '<?=$goods_add_images1_height;?>' );" class="glyphicon glyphicon-picture btn btn-default btn-sm" aria-hidden="true"> View</a>&nbsp;&nbsp;<label class="checkbox-inline"><input type="checkbox" name="add_imdel1" value="y">삭제</label><? }?>
				</td>
				<td class="text-left"><input type="file" name="add_images1"> [권장 사이즈 270 x 270 ]</td>
			</tr>
			<tr> 
				<td>상세 이미지2</td>
				<td>
					<? if( $row->add_images2) { ?><a href="javascript:goodsImagesView( 'A2', '<?=$goods_add_images2_width;?>' , '<?=$goods_add_images2_height;?>' );" class="glyphicon glyphicon-picture btn btn-default btn-sm" aria-hidden="true"> View</a>&nbsp;&nbsp;<label class="checkbox-inline"><input type="checkbox" name="add_imdel2" value="y">삭제</label><? }?>
				</td>
				<td class="text-left"><input type="file" name="add_images2"> [권장 사이즈 270 x 270 ]</td>
			</tr>
			<tr> 
				<td>상세 이미지3</td>
				<td>
					<? if( $row->add_images3) { ?><a href="javascript:goodsImagesView( 'A3', '<?=$goods_add_images3_width;?>' , '<?=$goods_add_images3_height;?>' );" class="glyphicon glyphicon-picture btn btn-default btn-sm" aria-hidden="true"> View</a>&nbsp;&nbsp;<label class="checkbox-inline"><input type="checkbox" name="add_imdel3" value="y">삭제</label><? }?>
				</td>
				<td class="text-left"><input type="file" name="add_images3"> [권장 사이즈 270 x 270 ]</td>
			</tr>
			<tr> 
				<td>상세 이미지4</td>
				<td>
					<? if( $row->add_images4) { ?><a href="javascript:goodsImagesView( 'A4', '<?=$goods_add_images4_width;?>' , '<?=$goods_add_images4_height;?>' );" class="glyphicon glyphicon-picture btn btn-default btn-sm" aria-hidden="true"> View</a>&nbsp;&nbsp;<label class="checkbox-inline"><input type="checkbox" name="add_imdel4" value="y">삭제</label><? }?>
				</td>
				<td class="text-left"><input type="file" name="add_images4"> [권장 사이즈 270 x 270 ]</td>
			</tr>
			<tr> 
				<td>상세 이미지5</td>
				<td>
					<? if( $row->add_images5) { ?><a href="javascript:goodsImagesView( 'A5', '<?=$goods_add_images5_width;?>' , '<?=$goods_add_images5_height;?>' );" class="glyphicon glyphicon-picture btn btn-default btn-sm" aria-hidden="true"> View</a>&nbsp;&nbsp;<label class="checkbox-inline"><input type="checkbox" name="add_imdel5" value="y">삭제</label><? }?>
				</td>
				<td class="text-left"><input type="file" name="add_images5"> [권장 사이즈 270 x 270 ]</td>
			</tr>
			<tr> 
				<td>상세 이미지6</td>
				<td>
					<? if( $row->add_images6) { ?><a href="javascript:goodsImagesView( 'A6', '<?=$goods_add_images6_width;?>' , '<?=$goods_add_images6_height;?>' );" class="glyphicon glyphicon-picture btn btn-default btn-sm" aria-hidden="true"> View</a>&nbsp;&nbsp;<label class="checkbox-inline"><input type="checkbox" name="add_imdel6" value="y">삭제</label><? }?>
				</td>
				<td class="text-left"><input type="file" name="add_images6"> [권장 사이즈 270 x 270 ]</td>
			</tr>
			<tr> 
				<td>상세 이미지7</td>
				<td>
					<? if( $row->add_images7) { ?><a href="javascript:goodsImagesView( 'A7', '<?=$goods_add_images7_width;?>' , '<?=$goods_add_images7_height;?>' );" class="glyphicon glyphicon-picture btn btn-default btn-sm" aria-hidden="true"> View</a>&nbsp;&nbsp;<label class="checkbox-inline"><input type="checkbox" name="add_imdel7" value="y">삭제</label><? }?>
				</td>
				<td class="text-left"><input type="file" name="add_images7"> [권장 사이즈 270 x 270 ]</td>
			</tr>
			<tr> 
				<td>상세 이미지8</td>
				<td>
					<? if( $row->add_images8) { ?><a href="javascript:goodsImagesView( 'A8', '<?=$goods_add_images8_width;?>' , '<?=$goods_add_images8_height;?>' );" class="glyphicon glyphicon-picture btn btn-default btn-sm" aria-hidden="true"> View</a>&nbsp;&nbsp;<label class="checkbox-inline"><input type="checkbox" name="add_imdel8" value="y">삭제</label><? }?>
				</td>
				<td class="text-left"><input type="file" name="add_images8"> [권장 사이즈 270 x 270 ]</td>
			</tr>
			<tr> 
				<td>상세 이미지9</td>
				<td>
					<? if( $row->add_images9) { ?><a href="javascript:goodsImagesView( 'A9', '<?=$goods_add_images9_width;?>' , '<?=$goods_add_images9_height;?>' );" class="glyphicon glyphicon-picture btn btn-default btn-sm" aria-hidden="true"> View</a>&nbsp;&nbsp;<label class="checkbox-inline"><input type="checkbox" name="add_imdel9" value="y">삭제</label><? }?>
				</td>
				<td class="text-left"><input type="file" name="add_images9"> [권장 사이즈 270 x 270 ]</td>
			</tr>
			<tr> 
				<td>상세 이미지10</td>
				<td>
					<? if( $row->add_images7) { ?><a href="javascript:goodsImagesView( 'A10', '<?=$goods_add_images10_width;?>' , '<?=$goods_add_images10_height;?>' );" class="glyphicon glyphicon-picture btn btn-default btn-sm" aria-hidden="true"> View</a>&nbsp;&nbsp;<label class="checkbox-inline"><input type="checkbox" name="add_imdel10" value="y">삭제</label><? }?>
				</td>
				<td class="text-left"><input type="file" name="add_images10"> [권장 사이즈 270 x 270 ]</td>
			</tr>

			</tbody>
			</table>
		</th>
	</tr>
	<tr>
		<th>해시태그</th>
		<td>
		<p class="editor-table-txt" style="font-size:11px; padding:5px 0 0 0; text-align:left;">※ 구분자 쉼표로 등록해 주세요. 예 : 테스트,test,제품</p>
		<input name="keywords" type="text" class="form-control" value="<?=$row->keywords?>">
		</td>
	</tr>
	</tbody>
	</table><br><br>


	<h5 class="page-header"><i class="glyphicon glyphicon-check"></i> 제품설명</h5>
	<table class="table table-bordered">
	<tr> 
		<td>
		<?
			$table_name	= "cs_goods";
			$table_idx		= $row->idx;

			$plupload_que = "select url,filename from cs_plupload where table_name='$table_name' and table_idx='$table_idx' order by idx";
			$result_plupload = mysqli_query($db2,$plupload_que);
			//$total_plupload = mysql_affected_rows();
		?>
		<textarea id="contents_source" style="display:none;"><?=$tools->strHtmlNoBr($row->content);?></textarea>
		<?include $_SERVER['DOCUMENT_ROOT']."/webeditor/webeditor_area.php";?>			
		</td>
	</tr>
	</table><br>

	<table class="table">
		<tr>
			<td class="text-center"><a href="javascript:;" class="btn btn-primary"  onClick="Editor.save();">저장하기</a></td>
		</tr>
	</table>

	</form>


<script src="/webeditor/webeditor_config.js" type="text/javascript" charset="utf-8"></script>
<script language="javascript">
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
	return true;
}

// 옵션
var form=document.tx_editor_form;
if( form.option_check[0].checked ) {
	$(".option_view").css("display","none");
} else if( form.option_check[1].checked ) {
	$(".option_view").css("display","");
}

//옵션 처리
function  option_arr(){
	var no= $('.arrRow').length;
	var html =
	'<tr class="arrRow" id="sizeRow'+no+'">' +
		'<td><input type="text" name="option_name[]" class="form-control input-sm" placeholder="예시) 색상/빨강"></td>' +
		'<td><input type="text" name="option_price[]" class="form-control input-sm text-center"></td>' +
		//'<td><input type="text" name="option_number[]" class="form-control input-sm text-center" maxlength="4" value="1000"></td>' +
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
	var idx	 =	$(this).attr("data-idx");
	if(idx){
		ans = confirm("[삭제] 하시겠습니까?");
		if(ans==true){		
		$.ajax({
			type: "get",
			url : "option_del.php",
			data: {"idx" :idx}, 
			success:function(result){
			}
		});
		}else{
			return;
		}
	}
	$("#sizeRow" + $(this).attr("data-del")).remove();
});
//-->
</script>
<? include('../footer.php');?>