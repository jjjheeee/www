<?
$mod="bbs";
$menu="history";
include("../../header.php");

if($idx) { 
	$row = $db->object("cs_history","where idx='$idx'");
	$page_mode = "수정";
	$mode = "edit";

	if($row->year){
		$day = $row->year.".".$row->month;
	}

}else{
	$page_mode = "등록";
	$mode = "write";
}
?>
<!-- calendar -->
<link rel="stylesheet" type="text/css" media="screen" href="/gsadmin/calendar/css/bootstrap-datetimepicker.min.css" />
<script type="text/javascript" src="/gsadmin/calendar/js/moment.js"></script>
<script type="text/javascript" src="/gsadmin/calendar/js/bootstrap-datetimepicker.js"></script>

<script type="text/javascript">
		$(function () {
			for(var num=1; num<=20; num++){			
				$('#datetimepicker'+num).datetimepicker({			
					pickTime: false		
				});
			}				
		});
</script>
<!--/ calendar -->


	<div class="text-right">
		<h3 class="page-header">
			<small>
				연혁관리(<?=$page_mode;?>)
			</small>
		</h3>
	</div>


	<form method="post" action="./history_exe.php" name="tx_editor_form" class="form-search" ENCTYPE="multipart/form-data">
	<input type="hidden" name="mode" value="<?=$mode?>">
	<input type="hidden" name="idx" value="<?=$idx?>">

	<table class="table table-bordered">
	<colgroup>
	<col width="15%">
	<col width="*">
	</colgroup>
	<tbody>
	<tr>
		<th>날 짜</th>
		<td>
			<div class="input-group date col-md-2" id="datetimepicker1">
				<input type="text" name="day" class="form-control" data-date-format="YYYY.MM.DD" value="<?=$day?>"/>
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-calendar"></span>
				</span>
			</div>
		</td>
	</tr>
	<tr>
		<th>제 목_영문</th>
		<td><input type="text" name="title" class="form-control" value="<?=$row->title?>"></td>
	</tr>
	<tr>
		<th>제 목_국문</th>
		<td><input type="text" name="title_k" class="form-control" value="<?=$row->title_k?>"></td>
	</tr>
	</tbody>	
	</table>
	</form>

	<table class="table">
		<tr>
			<td class="text-center">
				<a href="javascript:send();" class="btn btn-primary">등록</a>
				<a href="./history_list.php" class="btn btn-default">목록</a>
			</td>
		</tr>
	</table>

	
<script type="text/javascript">
<!--
function send(){
	var form=document.tx_editor_form;
	form.submit();
}
//-->
</script>


<? include('../../footer.php');?>