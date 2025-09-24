<?
include ("../header2.php");

// 넘겨받은 데이타
if($_GET['userid']) { $userid =$_GET['userid'];} else if($_POST['userid']) { $userid =$_POST['userid'];}
if(!$userid) { $tools->errMsg('아이디가 정상적으로 입력되지 않았습니다');}

	$table			= "cs_point";
	$listScale		= 5;
	$pageScale	= 5;
	if( !$startPage ) { $startPage = 0; }
	$totalPage = floor($startPage / ($listScale * $pageScale));

	$query		= "select * from $table where userid='$userid'";
	$rs				= mysqli_query($db2,$query);
	$totalList	= mysqli_num_rows($rs);

	$query = "select * from $table where userid='$userid'";
	$query.="  order by idx desc LIMIT $startPage, $listScale";
	$result = mysqli_query($db2,$query);

		if( $startPage ) { $listNo = $totalList - $startPage; } else { $listNo = $totalList; }
?>


<script language="JavaScript">
<!--
function sendit() {
	var form=document.point_form;
	if(form.title.value=="") {
		alert("구분을 입력해 주세요.");
		form.title.focus();
	} else if(form.point.value=="") {
		alert("포인트를 입력해 주세요.");
		form.point.focus();
	} else {
		form.submit();
	}
}

function pointDel( idx, userid ) {
    var choose = confirm( '포인트를 삭제 하시겠습니까?');
	if(choose) {	location.href='point_ok.php?mode=del&idx='+idx+'&userid='+userid; }
	else { return; }
}
//-->
</script>


	<div class="col-md-12" >
		<div class="page-header" style="font-weight:bold"><span class="glyphicon glyphicon-play" aria-hidden="true"></span> 포인트설정</div>
		<p>
			<?$mem_row = $db->object("cs_member","where userid='$_GET[userid]'");?>
			<span style="font-weight:bold">아이디 : <?=$mem_row->userid?></span><br>
			<span style="font-weight:bold">이름 : <?=$mem_row->name?></span>
		</p>
		<form action="point_ok.php" method="post" name="point_form">
		<input type="hidden" name="mode" value="write">
		<input type="hidden" name="userid" value="<?=$userid;?>">
		<table class="table table-bordered">
		<colgroup>
		<col width="30%">
		<col width="*">
		</colgroup>
		<tbody>
		<tr>
			<th>구분</th>
			<td><input name="title" type="text" class="form-control" maxlength="200"></td>
		</tr>
		<tr>
			<th>포인트</th>
			<td>
				<select name="sum" class="form-control2">
					<option value="+">+</option>
					<option value="-">-</option>
				</select> 
				<input name="point" type="text" class="form-control2" size="5" maxlength="6" onKeyPress="if( (event.keyCode<48) || (event.keyCode>57) ) event.returnValue=false;">
				<a href="javascript:sendit();" class="btn btn-primary btn-sm">저장하기</a>
			</td>
		</tr>
		<tr>
			<td colspan="2" class="text-center">
				Total : <font color="#FF0000">	<? $total_point = $db->sum("cs_point", "where userid='$userid'", "point"); echo(number_format($total_point));?></font> 원
			</td>
		</tr>
		</tbody>
		</table>
		</form>

		<table class="table table-bordered">
		<colgroup>
		<col width="*">
		<col width="20%">
		<col width="20%">
		<col width="5%">
		</colgroup>
		<thead>
		<tr>
			<th>구분</th>
			<th>포인트</th>
			<th>거래일</th>
			<th>관리</th>
		</tr>
		</thead>
		<tbody>
		<?
			while( $row = mysqli_fetch_object($result)) {
		?>
		<tr>
			<td><?=$row->title;?></td>
			<td class="text-center"><?=number_format($row->point);?></td>
			<td class="text-center"><?=$tools->strDateCut($row->register, 1);?></td>
			<td class="text-center"><a href="#none" class="btn btn-danger btn-xs" onClick="pointDel('<?=$row->idx;?>', '<?=$userid;?>');">삭제</a></td>
		</tr>
		<? 
			$listNo--;
			}
		?>	
		</tbody>
		</table>
	
		<div class="text-center">
			<ul class="pagination">
				<?
				if( $totalList > $listScale ) {
					if( $startPage+1 > $listScale*$pageScale ) {
						$prePage = $startPage - $listScale * $pageScale;
						echo "<li><a href='$_SERVER[PHP_SELF]?userid=$userid&startPage=$prePage'><span aria-hidden='true'>&laquo;</span></a></li>";
					}
					for( $j=0; $j<$pageScale; $j++ ) {
						$nextPage = ($totalPage * $pageScale + $j) * $listScale;
						$pageNum = $totalPage * $pageScale + $j+1;
						if( $nextPage < $totalList ) {
							if( $nextPage!= $startPage ) {

								echo "<li><a href='$_SERVER[PHP_SELF]?userid=$userid&startPage=$nextPage'>$pageNum</a></li>";
							} else {
								echo "<li class='active'><a href='javascript:;'>$pageNum</a></li>";
							}
						}
					}
					if( $totalList > (($totalPage+1) * $listScale * $pageScale)) {
						$nNextPage = ($totalPage+1) * $listScale * $pageScale;
						echo "<li><a href='$_SERVER[PHP_SELF]?userid=$userid&startPage=$nNextPage'><span aria-hidden='true'>&raquo;</span></a></li>";
					}
				}
				if( $totalList <= $listScale) {
					echo "<li class='active'><a href='javascript:;'>1</a></li>";
				}
				
				?>
			</ul>
		</div>

	</div>

<?
include ("../footer2.php");
?>