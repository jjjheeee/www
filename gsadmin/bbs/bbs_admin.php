<?
$mod	= "bbs";	
include("../header.php");
?>

<script type="text/javascript">
<!--
// 삭제
function bbsDel(data) {
	var delCheck = confirm("게시판 정보가 모두 삭제됩니다\n\n삭제 하시겠습니까?");
	if( delCheck ) {
		location.href = "bbs_admin_del.php?idx="+data;
	} else  { return; }
}

// 수정
function bbsEdit(data) {
	var editCheck = confirm("게시판 정보를 수정하겠습니까 ?\n\n수정 하시겠습니까?");
	if( editCheck ) {
		 location.href = "bbs_admin_edit.php?idx="+data;
	} else  { return; }
}
//-->
</script>



<table class="table table-bordered">
	<colgroup>
		<col width="5%">
		<col width="*%">
		<col width="10%">
		<col width="5%">
		<col width="10%">
		<col width="5%">
		<col width="5%">
		<col width="5%">
		<col width="5%">
		<col width="5%">
		<col width="7%">
		<col width="10%">
	</colgroup>
	<thead>		
		<tr> 
			<th>번호</th>
			<th>이 름</th>
			<th>코 드</th>
			<th>언 어</th>
			<th>타 입</th>
			<th>스킨</th>
			<th>자료실</th>
			<th>접근</th>
			<th>쓰기</th>
			<th>읽기</th>
			<th>등록글수</th>
			<th>관 리</th>
		</tr>
		</thead>
		<tbody>
	<?
	$i=0; // 번호 초기화
	$result = $db->select("cs_bbs", "order by idx asc, code asc");
	while( $row = mysqli_fetch_object( $result)) {
		$i++; // 번호 증가
		
		// 게시판 타입출력
		if( $row->bbs_type == 1 ) { $type = "답변형"; } else if( $row->bbs_type == 2 ) { $type = "공지사항"; }	else if( $row->bbs_type == 3 ) {	$type = "갤러리형"; } else if( $row->bbs_type == 4 ) {	$type = "FAQ형"; } 								
		// 자료실 사용유무
		if( $row->bbs_pds ) {	$pds_check = "사용"; } else { $pds_check = "미사용"; }								
		// 접근 권한
		if( $row->bbs_access == 0 ) { $access_check = "비회원"; }	else if( $row->bbs_access == 1 ) { $access_check = "회원"; }								
		// 쓰기 권한
		if( $row->bbs_write == 0 ) {	$write_check = "비회원"; }	else if( $row->bbs_write == 1 ) { $write_check = "회원"; }else if( $row->bbs_write == 9 ) { $write_check = "관리자"; }
		// 읽기 권한
		if( $row->bbs_read == 0 ) { $read_check = "비회원"; } else if( $row->bbs_read == 1 ) { $read_check = "회원"; }
		$list_cnt_value = $db->cnt("cs_bbs_data", "where code = '$row->code'");

		if($db->cnt("cs_bbs_data", "where code = '$row->code' and TO_DAYS(reg_date)=TO_DAYS(NOW())")) {
			$new_list_img = "<span class='label label-danger'>New</span>" ;
		} else {
			$new_list_img="";
		}

		$skin_name = str_replace("L","게시판 ",$row->skin);
		$skin_name = str_replace("G","갤러리 ",$skin_name);
		$skin_name = str_replace("F","FAQ ",$skin_name);
	?>
	<tr> 
		<td class="text-center"><?=$i;?></td>
		<td class="text-center"><a href="bbs_list.php?code=<?=$row->code;?>"><?=$row->name;?></a>&nbsp;<?=$new_list_img;?></td>
		<td class="text-center"><?=$row->code;?></td>
		<td class="text-center"><? if($row->nation==1){ ?>국문<? } else if($row->nation==2){ ?>영문<? } ?></td>
		<td class="text-center"><?=$type;?></td>
		<td class="text-center"><?echo $skin_name?></td>
		<td class="text-center"><?=$pds_check;?></td>
		<td class="text-center"><?=$access_check;?></td>
		<td class="text-center"><?=$write_check;?></td>
		<td class="text-center"><?=$read_check;?></td>
		<td class="text-center"><?=$list_cnt_value;?></td>
		<td class="text-center">
			<a href="javascript:bbsEdit(<?=$row->idx;?>);"class="btn btn-primary btn-sm">수정</a>&nbsp;
			<a href="javascript:bbsDel(<?=$row->idx;?>);" class="btn btn-danger btn-sm">삭제</a>
		</td>
	</tr>
	<?}?>

	</tbody>
</table>


<table class="table">
	<tr>
		<td class="text-center"><a href="bbs_admin_reg.php" class="btn btn-primary btn-large">게시판 생성</a></td>
	</tr>
</table>

<? include('../footer.php');?>