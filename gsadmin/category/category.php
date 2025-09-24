<?
$mod	= "product";	
$menu	= "category";
include("../header.php");
?>

<script language="JavaScript">
<!--
// 카테고리 등록
function partReg2( data ) {	 location.href='category_add.php?part_index=2&idx='+data; }
function partReg3( data ) { location.href='category_add.php?part_index=3&idx='+data; }

// 카테고리 수정
function partEdit( index, data ) {
    var choose = confirm( index+'차 카테고리를 수정 하시겠습니까?');
	if(choose) {	location.href='category_edit.php?part_index='+index+'&idx='+data; }
	else { return; }
}

// 카테고리 삭제
function partDel( index, data ) {
    var choose = confirm( index+'차 카테고리를 삭제 하시겠습니까?');
	if(choose) {	location.href='category_del_ok.php?idx='+data; }
	else { return; }
}
//-->
</script>

	<h4 class="page-header">카테고리설정</h4>

	<div class="text-right"><!-- <a href="./category_add.php?part_index=1" class="btn btn-danger btn-sm">1차카테고리 등록</a> --></div><br>
	<table class="table table-bordered" >
	<colgroup>
	<col width="*" title="카테고리" >
	<col width="10%" title="사용유무">
	<col width="15%" title="관리">
	<col width="20%" title="카테고리등록">
	</colgroup>
	<thead>
	<tr> 
		<th>카테고리</th>
		<th>사용 유무</th>
		<th>관  리</th>
		<th>카테고리등록</th>
	</tr>
	</thead>
	<tbody>
	<?
	// 1차 카테고리 분류
	$part1_result = $db->select( "cs_part", "where part_index=1 order by part_ranking asc");
	while( $part1_row = @mysqli_fetch_object($part1_result) ) {
		// 카테고리 목록 출력 유무
		if( $part1_row->part_display_check )  {	$part1_display_check_images = "사 용"; } else { $part1_display_check_images = "미사용"; }
		// 등록된 상품수
		if($part1_total_goods=$db->cnt("cs_goods", "where part_idx='$part1_row->idx'")) { $part1_total_goods="(".$part1_total_goods.")";} else { $part1_total_goods="";}
	?>		
	<tr> <!-- danger --><!-- primary --><!-- warning -->
		<td><span class="btn btn-danger btn-xs btn-grad btn-rect">&nbsp;&nbsp;1차&nbsp;&nbsp;</span>&nbsp;&nbsp;<b><font color="#FF3636"><?=$part1_row->part_name;?> <?=$part1_total_goods;?></font> <? if($part1_row->part_name_k){ ?>/ <?=$part1_row->part_name_k?><? } ?></b></td>
		<td class="text-center"><span class="btn btn-default btn-sm"><?echo $part1_display_check_images?></span></td>
		<td class="text-center">			
			<a href="javascript:partEdit( 1, '<?=$part1_row->idx;?>' );" class="btn btn-primary btn-sm">수 정</a>
			<a href="javascript:partDel( 1,'<?=$part1_row->idx;?>' );" class="btn btn-danger btn-sm">삭 제</a>
		</td>
		<td class="text-center">
			<?if($part1_row->part_low_check){?>
				<a href="javascript:partReg2('<?=$part1_row->idx;?>');" class="btn btn-primary btn-sm">2차카테고리 등록</a>
			<?}?>
		</td>
	</tr>


	<?
	// 2차 카테고리 분류
	$part2_result = $db->select( "cs_part", "where part_index=2 and part1_code='$part1_row->part1_code' order by part_ranking asc");
	while( $part2_row = @mysqli_fetch_object($part2_result) ) {
		// 카테고리 목록 출력 유무
		if( $part2_row->part_display_check )  {	$part2_display_check_images = "사 용"; } else { $part2_display_check_images = "미사용"; }
		// 등록된 상품수
		if( $part2_total_goods=$db->cnt("cs_goods", "where part_idx='$part2_row->idx'")) { $part2_total_goods="(".$part2_total_goods.")";} else { $part2_total_goods="";}
	?>		
	<tr> 
		<td><span class="col-md-1"></span><span class="btn btn-primary btn-xs btn-grad btn-rect">&nbsp;&nbsp;2차&nbsp;&nbsp;</span>&nbsp;&nbsp;<b><font color="#1B7AC9"><?=$part2_row->part_name;?> <?= $part2_total_goods;?></font></b></td>
		<td class="text-center"><span class="btn btn-default btn-sm"><?echo $part2_display_check_images?></span></td>
		<td class="text-center">			
			<a href="javascript:partEdit( 2, '<?=$part2_row->idx;?>' );" class="btn btn-primary btn-sm">수 정</a>
			<a href="javascript:partDel( 2,'<?=$part2_row->idx;?>' );" class="btn btn-danger btn-sm">삭 제</a>
		</td>
		<td class="text-center">
			<?if($part2_row->part_low_check){?>
				<a href="javascript:partReg3('<?=$part2_row->idx;?>');" class="btn btn-warning btn-sm">3차카테고리 등록</a>
			<?}?>
		</td>
	</tr>


	<?
	$part3_result = $db->select( "cs_part", "where part_index=3 and part2_code='$part2_row->part2_code' and part1_code='$part2_row->part1_code'  order by part_ranking asc");
	while( $part3_row = @mysqli_fetch_object($part3_result) ) {
		// 카테고리 목록 출력 유무
		if( $part3_row->part_display_check )  {	$part3_display_check_images = "사 용"; } else { $part3_display_check_images = "미사용"; }
		// 등록된 상품수
		if( $part3_total_goods=$db->cnt("cs_goods", "where part_idx='$part3_row->idx'")) { $part3_total_goods="(".$part3_total_goods.")";} else { $part3_total_goods="";}
	?>		
	<tr> 
		<td><span class="col-md-2"></span><span class="btn btn-warning btn-xs btn-grad btn-rect">&nbsp;&nbsp;3차&nbsp;&nbsp;</span>&nbsp;&nbsp;<b><font color="#FF9933"><?=$part3_row->part_name;?> <?= $part3_total_goods;?></font></b></td>
		<td class="text-center"><span class="btn btn-default btn-sm"><?echo $part3_display_check_images?></span></td>
		
		<td class="text-center">			
			<a href="javascript:partEdit( 3, '<?=$part3_row->idx;?>' );" class="btn btn-primary btn-sm">수 정</a>
			<a href="javascript:partDel( 3,'<?=$part3_row->idx;?>' );" class="btn btn-danger btn-sm">삭 제</a>
		</td>
		<td></td>
	</tr>
	<? 
			} // 3차 카테고리
		} // 2차 카테고리 
	} // 1차 카테고리 
	?>
			
				
	<? if( !$db->cnt("cs_part", "")) {?>
	<tr>
		<td class="text-center" colspan="4"> 등록된 카테고리가 없습니다.</td>
	</tr>
	<?}?>
	</tbody>
	</table>


<? include('../footer.php');?>