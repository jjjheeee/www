<?
$mod	= "product";	
$menu	= "product_list";
include("../header.php");
if($_POST['hidden_part_code'] || $_GET['hidden_part_code'] ) {
	if( $_POST['hidden_part_code']) {
		$hidden_part_code = $_POST['hidden_part_code'];
	} else if($_GET['hidden_part_code']) {
		$hidden_part_code = $_GET['hidden_part_code'];
	}
	$part_row=$db->object("cs_part", "where part1_code='$hidden_part_code' or part2_code='$hidden_part_code' or part3_code='$hidden_part_code'", "idx");
}
?>
<script language="JavaScript">
<!--
// 상품 이동
function moveSendit() {
	var form=document.to_part_form;
    var choice = confirm( '상품을 이동 하시겠습니까?');
	if(choice) {
		form.to_hidden_move_copy.value=1;
		elementsSendit();
		form.submit();
	}
}

// 상품 복사
function copySendit() {
	var form=document.to_part_form;
    var choice = confirm( '상품을 복사 하시겠습니까?');
	if(choice) {
		form.to_hidden_move_copy.value=2;
		elementsSendit();
		form.submit();
	}
}

// 상품 삭제
function delSendit() {
	var form=document.to_part_form;
    var choice = confirm( '상품을 삭제 하시겠습니까?');
	if(choice) {
		form.to_hidden_move_copy.value=3;
		elementsSendit();
		form.submit();
	}
}

// 배열화 하여 전송
function elementsSendit(){
	var form=document.to_part_form;
	form.to_hidden_elements.value="";
	for(i=0; i < form.elements.length; i++){
		if(form.elements[i].checked  == true) {
			form.to_hidden_elements.value =form.to_hidden_elements.value + form.elements[i].value;
			form.to_hidden_elements.value= form.to_hidden_elements.value + "&&";
		}
	}
}

// 전체 선택 반전
var toggle=0;
function checkAll(  ) {
	var form=document.to_part_form;
	toggle=1-toggle;
	var i=0;
	if( toggle ) {
		for(i=0; i < form.elements.length; i++){
			form.elements[i].checked  = true;
		}
	} else {
		for(i=0; i < form.elements.length; i++){
			form.elements[i].checked  = false;
		}
	}
}
//-->
</script>


<script language="JavaScript">
<!--
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

i = 1;
// depth1 의 배열 초기화
depth1[0] = "카테고리를 선택하세요";
depth1_value[0] = "";

<?
$part1_result = $db->select( "cs_part", "where part_index=1 order by part_ranking asc");
while( $part1_row = mysqli_fetch_object($part1_result) ) {
?>
	depth1[i] = "<?=$part1_row->part_name;?>";
	depth1_value[i] = "<?=$part1_row->part1_code;?>";
	
	j = 1;

	// depth2 의 배열 초기화
	<?
	$part2_result = $db->select( "cs_part", "where part1_code='$part1_row->part1_code' and part_index=2 order by part_ranking asc");
	while( $part2_row = mysqli_fetch_object($part2_result) ) 
	{
	?>
		if ( j == 1 )
		{
			depth2[i] = new Array(); 
			depth2_value[i] = new Array();
			depth3[i] = new Array();
			depth3_value[i] = new Array();
			depth2[i][0] = "카테고리를 선택하세요" ;
			depth2_value[i][0] = "";
		}

		depth2[i][j] = "<?=$part2_row->part_name;?>" ;
		depth2_value[i][j] = "<?=$part2_row->part2_code;?>";
		
		k = 1;
		<?
		$part3_result = $db->select( "cs_part", "where part2_code='$part2_row->part2_code' and part1_code='$part1_row->part1_code' and part_index=3 order by part_ranking asc");
		while( $part3_row = mysqli_fetch_object($part3_result) ) 
		{
		?>
			if ( k == 1 )
			{
				depth3[i][j] = new Array();
				depth3_value[i][j] = new Array();
				depth3[i][j][0] = "카테고리를 선택하세요";
				depth3_value[i][j][0] = "" ;
			}

			depth3[i][j][k] = "<?=$part3_row->part_name?>";
			depth3_value[i][j][k] = "<?=$part3_row->part3_code?>";
		k += 1;
	    <?}?>
	 j += 1;
	<?}?>	
i += 1;		
<? }?>

// 선택되었을때 다음 단계 카테고리 출력
function change(depth, index, target)
{
	f = document.part_form;   // 선택된 Form;
	
	if ( depth == 1 && index != -1)  // 대분류 선택 시
	{
		sp_value = f.select1[index].value;
		sp_value = sp_value.split(sep);
		sp_value2 = sp_value[1];
		
		for ( i = f.select2.length; i >= 0; i-- ) {
			f.select2[i] = null; 
		}
		part_form.hidden_part_code.value = "";
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
			part_form.hidden_part_code.value = depth1_value[sp_value2];
			if(part_form.hidden_part_code.value) {
				alert("카테고리 선택완료");
				sendit();
			}
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
		part_form.hidden_part_code.value = "";
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
			part_form.hidden_part_code.value = depth2_value[sp_value2][sp_value3];
			if(part_form.hidden_part_code.value) {
				alert("카테고리 선택완료");
				sendit();
			}
		}
	}
	else if ( depth == 3 && index != -1 )
	{
		part_form.hidden_part_code.value = f.select3[index].value;
		if(part_form.hidden_part_code.value) {
			alert("카테고리 선택완료");
			sendit();
		}
	}
}

function sendit() {
	var form=document.part_form;
	form.submit();
}

////  카테고리 선택 폼 설정 종료 //////////////////////////////////////////////////////////////////////////
//-->
</script>
<script language="JavaScript">
////  카테고리 선택 폼 설정 시작 //////////////////////////////////////////////////////////////////////////
// 배열 선언
to_depth1 = new Array(); // 리스트1 출력용
to_depth2 = new Array(); // 리스트2 출력용
to_depth3 = new Array(); // 리스트3 출력용

to_depth1_value = new Array(); // 리스트1 값
to_depth2_value = new Array(); // 리스트2 값
to_depth3_value = new Array(); // 리스트3 값

var to_depth1_size = 3;
var to_depth2_size = 3;
var to_depth3_size = 3;
var to_sep = "$$";
// 배열 초기화

to_i = 1;
// depth1 의 배열 초기화
to_depth1[0] = "카테고리를 선택하세요";
to_depth1_value[0] = "";
<?
$part1_result = $db->select( "cs_part", "where part_index=1 order by part_ranking asc");
while( $part1_row = mysqli_fetch_object($part1_result) ) {
?>
	to_depth1[to_i] = "<?=$part1_row->part_name;?>";
	to_depth1_value[to_i] = "<?=$part1_row->part1_code;?>";
	
	to_j = 1;

	// depth2 의 배열 초기화
	<?
	$part2_result = $db->select( "cs_part", "where part1_code='$part1_row->part1_code' and part_index=2 order by part_ranking asc");
	while( $part2_row = mysqli_fetch_object($part2_result) ) 
	{
	?>
		if ( to_j == 1 )
		{
			to_depth2[to_i] = new Array(); 
			to_depth2_value[to_i] = new Array();
			to_depth3[to_i] = new Array();
			to_depth3_value[to_i] = new Array();
			to_depth2[to_i][0] = "카테고리를 선택하세요" ;
			to_depth2_value[to_i][0] = "";
		}
		to_depth2[to_i][to_j] = "<?=$part2_row->part_name;?>" ;
		to_depth2_value[to_i][to_j] = "<?=$part2_row->part2_code;?>";
		
		to_k = 1;
		<?
		$part3_result = $db->select( "cs_part", "where part2_code='$part2_row->part2_code' and part1_code='$part1_row->part1_code' and part_index=3 order by part_ranking asc");
		while( $part3_row = mysqli_fetch_object($part3_result) ) 
		{
		?>
			if (to_k == 1 )
			{
				to_depth3[to_i][to_j] = new Array();
				to_depth3_value[to_i][to_j] = new Array();
				to_depth3[to_i][to_j][0] = '카테고리를 선택하세요' ;
				to_depth3_value[to_i][to_j][0] = "";
			}
			to_depth3[to_i][to_j][to_k] = '<?=$part3_row->part_name?>' ;
			to_depth3_value[to_i][to_j][to_k] = '<?=$part3_row->part3_code?>' ;
		to_k += 1;
	    <?}?>
	 to_j += 1;
	<?}?>	
to_i += 1;		
<? }?>

// 선택되었을때 다음 단계 카테고리 출력
function toChange(to_depth, to_index, to_target)
{
	to_f = document.to_part_form;   // 선택된 Form;
	
	if ( to_depth == 1 && to_index != -1)  // 대분류 선택 시
	{
		to_sp_value = to_f.to_select1[to_index].value;
		to_sp_value = to_sp_value.split(to_sep);
		to_sp_value2 = to_sp_value[1];
		
		for ( to_i = to_f.to_select2.length; to_i >= 0; to_i-- ) {
			to_f.to_select2[to_i] = null; 
		}
		to_part_form.to_hidden_part_code.value = "";
		if ( to_depth2[to_sp_value2] != null )
		{
	
			for ( to_i = 0 ; to_i <= to_depth2[to_sp_value2].length -1 ; to_i++ )
			{
				to_f.to_select2.options[to_i] = new Option(to_depth2[to_sp_value2][to_i],to_depth2_value[to_sp_value2][to_i] + to_sep + to_sp_value2 + to_sep +to_i );
			}
		}
		else
		{
//			alert("2차 카테고리는 없습니다.");
			to_part_form.to_hidden_part_code.value = to_depth1_value[to_sp_value2];
			if(to_part_form.to_hidden_part_code.value) {
				alert("카테고리 선택완료");
			}
		}


		// 카테고리 2를 초기화 되면 카테로기 3은 모두 삭제한다.
		for ( to_i = to_f.to_select3.length; to_i >= 0; to_i-- ) {
			to_f.to_select3[to_i] = null; 
		}
	}
	else if ( to_depth == 2 && to_index != -1 )   // 중분류 선택 시 
	{
		to_sp_value = to_f.to_select2[to_index].value;
		to_sp_value = to_sp_value.split(to_sep);
		to_sp_value2 = to_sp_value[1];
		to_sp_value3 = to_sp_value[2];
		
		for ( to_i = to_f.to_select3.length; to_i >= 0; to_i-- ) {
			to_f.to_select3[to_i] = null; 
		}
		to_part_form.to_hidden_part_code.to_value = "";
		if ( to_depth3[to_sp_value2][to_sp_value3] != null )
		{

			for ( to_i = 0 ; to_i <= to_depth3[to_sp_value2][to_sp_value3].length -1 ; to_i++ )
			{
				to_f.to_select3.options[to_i] = new Option(to_depth3[to_sp_value2][to_sp_value3][to_i],to_depth3_value[to_sp_value2][to_sp_value3][to_i]);
			}
		}
		else
		{
//			alert("3차 카테고리는 없습니다.");
			to_part_form.to_hidden_part_code.value = to_depth2_value[to_sp_value2][to_sp_value3];
			if(to_part_form.to_hidden_part_code.value) {
				alert("카테고리 선택완료");
			}
		}
	}
	else if ( to_depth == 3 && to_index != -1 )
	{
		to_part_form.to_hidden_part_code.value = to_f.to_select3[to_index].value;
		if(to_part_form.to_hidden_part_code.value) {
			alert("카테고리 선택완료");
		}
	}
}

////  카테고리 선택 폼 설정 종료 //////////////////////////////////////////////////////////////////////////
//-->
</script>

<table width="850" border="0" align="center" cellpadding="0" cellspacing="0">
	<tr> 
		
		<td height="70" align="center" valign="top" bgcolor="#FFFFFF" class="menu"><br><img src="../images/title_product_move.jpg" width="800" height="70"></td>
		
	</tr>
	<tr> 
		<td align="center" bgcolor="#FFFFFF" class="menu"><br>
			<table width="800" border="0" cellspacing="0" cellpadding="0">
				<tr> 
					<td class="sub_title" height="25"><img src="../images/arrow_blue.gif"> 제품 이동/복사</td>
				</tr>
			</table>
			<table width="800" border="0" cellspacing="0" cellpadding="0">
				<form action="<?=$_SERVER['PHP_SELF'];?>" method="post" name="part_form">
				<input type="hidden" name="hidden_part_code">
				<tr> 
					<td>
						<table width="260" border="1" cellspacing="0" cellpadding="3" bordercolor='#BDBEBD' class="menu" style='border-collapse: collapse'>
							<tr> 
								<td align="center" bgcolor="F7F3F7" class="menu">1차 분류 <span class="menupurple">→ 먼저선택하세요</span></td>
							</tr>
							<tr> 
								<td align="center">
									<select name="select1" style="background-color:EFEFEF; width:200;" onChange='change(1, this.form.select1.selectedIndex, this.form)'  class="input">
										<script language = "javascript">
										for ( i = 0 ; i <= depth1.length -1 ; i++ ){	document.write ("<option value='"+ depth1_value[i] + to_sep + i + "' >" + depth1[i] + "</option>");}
										</script>
									</select>
								</td>
							</tr>
						</table>
					</td>
					<td align="center">
						<table width="260" border="1" cellspacing="0" cellpadding="3" bordercolor='#BDBEBD' class="menu" style='border-collapse: collapse'>
							<tr> 
								<td align="center" bgcolor="F7F3F7">2차 분류</td>
							</tr>
							<tr> 
								<td align="center">
									<select name="select2" style="background-color:EFEFEF; width:200;"  onChange='change(2, this.form.select2.selectedIndex, this.form)' class="input"></select>
								</td>
							</tr>
						</table>
					</td>
					<td align="right">
						<table width="260" border="1" cellspacing="0" cellpadding="3" bordercolor='#BDBEBD' class="menu" style='border-collapse: collapse'>
							<tr> 
								<td align="center" bgcolor="F7F3F7">3차 분류</td>
							</tr>
							<tr> 
								<td align="center">
									<select name="select3" onChange='change(3, this.form.select3.selectedIndex, this.form)' style="background-color:EFEFEF; width:200;" class="input"></select>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				</form>
			</table><br> 
			<?
			if($hidden_part_code) {
				$part_stat_row = $db->object("cs_part", "where idx=$part_row->idx");
				if( $part_stat_row->part_index == 1 ) {
					$part_result = $db->select("cs_part", "where part1_code='$part_stat_row->part1_code' && part_index=1 order by idx asc", "part_name");
				} else if( $part_stat_row->part_index == 2 ) {
					$part_result = $db->select("cs_part", "where (part1_code='$part_stat_row->part1_code' && part_index=1) || (part2_code ='$part_stat_row->part2_code' && part_index=2) order by idx asc", "part_name");
				} else if( $part_stat_row->part_index == 3 ) {
					$part_result = $db->select("cs_part", "where (part1_code='$part_stat_row->part1_code' && part_index=1) || (part2_code ='$part_stat_row->part2_code' && part_index=2) || (part3_code='$part_stat_row->part3_code' && part_index=3) order by idx asc", "part_name");
				}
				$i=0;
				while( $part_stat_row = @mysqli_fetch_object( $part_result )) {
					$i++;
					$part_name.=$i."차 카테고리 : <font color='#FF0000'>".$part_stat_row->part_name."</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
				}
			}
			?>
			<table width="800" border="0" cellspacing="0" cellpadding="3" class="menu" style='border-collapse: collapse'>
				<tr>
					<td><?=$part_name;?></td>
				</tr>
			</table>
			<table width="800" border="1" cellspacing="0" cellpadding="3" bordercolor='#BDBEBD' class="menu" style='border-collapse: collapse'>
				<form action="product_move_ok.php" method="post" name="to_part_form">
				<input type="hidden" name="to_hidden_check_data">
				<input type="hidden" name="to_hidden_part_code">
				<input type="hidden" name="to_hidden_elements">
				<input type="hidden" name="to_hidden_move_copy">
				<tr align="center" bgcolor="F7F3F7"> 
					<td width="40" height="25"><a href="javascript:checkAll();">선택</a></td>
					<td width="80" height="25">제품번호</td>
					<td height="25">제품명</td>
					<td height="25">제조사</td>
					<td width="80" height="25">판매가격</td>
					<td width="150" height="25">등록일</td>
				</tr>
				<?
				if($hidden_part_code) {
					$totalList = $db->cnt("cs_goods", "where part_idx=$part_row->idx");
					$result = $db->select( "cs_goods", "where part_idx=$part_row->idx");
					while( $row = @mysqli_fetch_object( $result )) {
				?>
				<tr align="center">
					<td width="40" height="25"><input type="checkbox" name="elements[]" value="<?=$row->idx;?>"></td>
					<td width="80" height="25"><?=$row->code;?></td>
					<td height="25"><?=$db->stripSlash($tools->strCut($row->name,46));?></td>
					<td height="25"><?=$tools->strCut($row->company,20);?></td>
					<td width="80" height="25"><?=number_format($row->shop_price);?></td>
					<td width="150" height="25"><?=$tools->strDateCut($row->register,2);?></td>
				</tr>
				<? 
					}
				}
				?>

				
				<? if( $totalList ==0 ){?>
				<tr align="center"> 
					<td height="100" colspan="6" class="menublue">※ 등록된 상품이 없습니다</td>
				</tr>
				<?}?>
			</table><br>
			<table width="800" border="0" cellspacing="0" cellpadding="0">
				<tr> 
					<td>
						<table width="260" border="1" cellspacing="0" cellpadding="3" bordercolor='#BDBEBD' class="menu" style='border-collapse: collapse'>
							<tr> 
								<td align="center" bgcolor="F7F3F7" class="menu">1차 분류 <span class="menupurple">→ 먼저선택하세요</span></td>
							</tr>
							<tr> 
								<td align="center">
									<select name="to_select1" style="background-color:EFEFEF; width:200;" onChange='toChange(1, this.form.to_select1.selectedIndex, this.form)'  class="input">
										<script language = "javascript">
										for ( i = 0 ; i <= to_depth1.length -1 ; i++ ){	document.write ("<option value='"+ to_depth1_value[i] + to_sep + i + "' >" + to_depth1[i] + "</option>");}
										</script>
									</select>
								</td>
							</tr>
						</table>
					</td>
					<td align="center">
						<table width="260" border="1" cellspacing="0" cellpadding="3" bordercolor='#BDBEBD' class="menu" style='border-collapse: collapse'>
							<tr> 
								<td align="center" bgcolor="F7F3F7">2차 분류</td>
							</tr>
							<tr> 
								<td align="center">
									<select name="to_select2"  style="background-color:EFEFEF; width:200;"  onChange='toChange(2, this.form.to_select2.selectedIndex, this.form)' class="input"></select>
								</td>
							</tr>
						</table>
					</td>
					<td align="right">
						<table width="260" border="1" cellspacing="0" cellpadding="3" bordercolor='#BDBEBD' class="menu" style='border-collapse: collapse'>
							<tr> 
								<td align="center" bgcolor="F7F3F7">3차 분류</td>
							</tr>
							<tr> 
								<td align="center">
									<select name="to_select3" onChange='toChange(3, this.form.to_select3.selectedIndex, this.form)' style="background-color:EFEFEF; width:200;" class="input"></select>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				</form>
			</table>
			<table width="800" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td height="75" align="center"><a href="javascript:moveSendit();"><img src="../images/bt_pd_mv.gif" width="139" height="36" border="0" align="absmiddle"></a>&nbsp;<a href="javascript:copySendit();"><img src="../images/bt_pd_cp.gif" width="139" height="36" border="0" align="absmiddle"></a>&nbsp;<a href="javascript:delSendit();"><img src="../images/bt_pd_del.gif" width="139" height="36" border="0" align="absmiddle"></a></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<? include('../footer.php');?>