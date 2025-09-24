<?
$mod="bbs";
$menu="history";
include("../../header.php");


	$table			= "cs_history";
	$listScale		= 10;
	$pageScale	= 10;
	if( !$startPage ) { $startPage = 0; }
	$totalPage = floor($startPage / ($listScale * $pageScale));

	$query		= "select * from $table where 1";
	if($key){ $query.=" and $keyfield like '%$key%'"; }
	$rs				= mysqli_query($db2,$query);
	$totalList	= mysqli_num_rows($rs);

	$query = "select * from $table where 1";
		if($key){ $query.=" and $keyfield like '%$key%'"; }
	$query.="  order by year desc, month desc, idx desc LIMIT $startPage, $listScale";
	$result = mysqli_query($db2,$query);

	if( $startPage ) { $listNo = $totalList - $startPage; } else { $listNo = $totalList; }
?>


	<div class="text-right">
		<h3 class="page-header">
			<small>
				연혁관리
			</small>
		</h3>
	</div>

	
	<div class="well well-small text-center">
		<form name="formch" class="form-inline" method="post" action="<?=$_SERVER['PHP_SELF'];?>">
		<div class="form-group input-group">
			<div class="input-group-btn">
				<select name="keyfield" class="form-control">
					<option value="title">제목</option>
				</select>
			</div>
		</div>
		<div class="form-group input-group">
			<input type="text" name="key" class="form-control" placeholder="Search" value="<?=$key?>">
			<div class="input-group-btn">
				<a href="javascript:search(this.form);" class="btn btn-primary" title="검색" > <span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
				<a href="<?=$PHP_SELF?>" class="btn btn-default" title="새로고침"> <span class="glyphicon glyphicon-refresh"></span></a>
			</div>
		</div>
		</form>
	</div>


	<form method="post" name="form">
	<table class="table table-bordered table-hover">
	<colgroup>
	<col width="5%">
	<col width="5%">
	<col width="5%">
	<col width="10%">
	<col width="*%">
	<col width="5%">
	</colgroup>
	<thead>
	<tr>
		<th><input type="checkbox" id="allCheck" class="check-all" onChange="javascript:all_checkbox();"></th>
		<th>No</th>
		<th>연도</th>
		<th>월일</th>
		<th>제 목</th>
		<th>설 정</th>
	</tr>
	</thead>
	<tbody>
	<?
		$odate = date("Y-m-d");
		while($row = mysqli_fetch_array($result)){

			$date1 = substr($row['udate'],0,-9);
	?>
	<tr>
		<td class="text-center"><input type="checkbox" class="check_list" value="<? echo $row['idx'] ?>" name="check[]"></td>
		<td class="text-center"><? echo $listNo ?></td>
		<td class="text-center"><?=$row['year']?></td>
		<td class="text-center"><?=$row['month']?></td>
		<td><?=$row['title']?></td>
		<td class="text-center"><a href="history_form.php?idx=<?=$row['idx']?>" class="btn btn-default btn-sm">보기</a></td>
		</td>
	</tr>
	<? 
		$listNo--;
		}
	?>
	</tbody>
	</table>
	</form>


	<div class="text-center">
		<ul class="pagination">
			<?
				if( $totalList > $listScale ) {
					if( $startPage+1 > $listScale*$pageScale ) {
						$prePage = $startPage - $listScale * $pageScale;
						echo "<li><a href='$_SERVER[PHP_SELF]?key=$key&keyfield=$keyfield&startPage=$prePage'><span aria-hidden='true'>&laquo;</span></a></li>";
					}
					for( $j=0; $j<$pageScale; $j++ ) {
						$nextPage = ($totalPage * $pageScale + $j) * $listScale;
						$pageNum = $totalPage * $pageScale + $j+1;
						if( $nextPage < $totalList ) {
							if( $nextPage!= $startPage ) {
								echo "<li><a href='$_SERVER[PHP_SELF]?key=$key&keyfield=$keyfield&startPage=$nextPage'>$pageNum</a></li>";
							} else {
								echo " <li class='active'><a href='javascript:;'>$pageNum</a></li>";
							}
						}
					}
					if( $totalList > (($totalPage+1) * $listScale * $pageScale)) {
						$nNextPage = ($totalPage+1) * $listScale * $pageScale;

						echo "<a href='$_SERVER[PHP_SELF]?key=$key&keyfield=$keyfield&startPage=$nNextPage'><span aria-hidden='true'>&raquo;</span></a></li>";
					}
				}
				if( $totalList <= $listScale) {
					echo "<li class='active'><a href='javascript:;'>1</a></li>";
				}
				
			?>
		</ul>
	</div>


	<table class="table">
		<tr>
			<td class="text-left"><a href="javascript:send(this.form);" class="btn btn-danger btn-sm" >삭제</a></td>
			<td class="text-right"><a href="./history_form.php" class="btn btn-primary btn-sm">글쓰기</a></td>
		</tr>
	</table>


<script language=javascript>
<!--
//삭제
function send(form){

		var count=0;
	
		for(var i=0; i<form.elements.length; i++) 
		{ 
			if(form.elements[i].checked == true) 
			{ 
				count++; 
			} 
		} 
		
		if ( count == 0 ) 
		{ 
			   alert('삭제항목을 체크해주세요'); 
			   return; 
		} else {
	
			ans = confirm("정말 삭제 하시겠습니까?");
			
			if(ans==true){
				
				form.action = "history_del.php?start=<? echo $start ?>&key=<? echo $key ?>&keyfield=<? echo $keyfield ?>";
				form.submit();
			}
		}

}

//-->
</script>

<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
      $( document ).ready( function() {
        $( '.check-all' ).click( function() {
          $( '.check_list' ).prop( 'checked', this.checked );
        } );
      } );
    </script>


<? include('../../footer.php');?>