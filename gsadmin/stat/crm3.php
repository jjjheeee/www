<?
$mod	= "stat";	
$menu	= "crm3";
include("../header.php");
?>

	<h4 class="page-header">베스트 고객</h4>

	<form method="get" name="trade_form" class="form-inline" action="<?=$_SERVER['PHP_SELF'];?>" >
	<table class="table table-bordered">
	<colgroup>
	<col width="15%">
	<col width="*">
	</colgroup>
	<tbody>
	<tr>
		<th>기간</th>
		<td>
			<div class="input-group datetime">
				<input type="text" name="search_start_day" class="form-control input-sm text-center" data-date-format="YYYY-MM-DD" value="<?=$search_start_day?>"/>
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-calendar"></span>
				</span>
			</div>
			<div class="input-group">~</div>
			<div class="input-group datetime">
				<input type="text" name="search_end_day" class="form-control input-sm text-center" data-date-format="YYYY-MM-DD" value="<?if(empty($search_end_day)){echo date("Y-m-d");}else{echo $search_end_day;}?>"/>
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-calendar"></span>
				</span>
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="2" class="text-center">
			<button type="submit" class="btn btn-primary btn-sm">검색</button>&nbsp;
			<a href="<?=$_SERVER['PHP_SELF']?>" class="btn btn-default btn-sm">초기화</a>
		</td>
	</tr>
	</tbody>
	</table>
	</form>

	<? 
	if(file_exists('../../data/csv/crm3.csv')) { unlink('../../data/csv/crm3.csv');    }  // 만일 이전에 만든 화일이 있으면 지운다 
	$newline = chr(10);            //  LF(줄바꿈)의 ascii 값을 얻는다. 
	$fp = fopen( "../../data/csv/crm3.csv", "w" ) or die("../../data/csv/crm3.csv 화일을 열수 없습니다") ;  // crm3.csv 를 새로 연다 
	fwrite($fp,"번호, 회원아이디, 이름, 구매횟수, 구매금액, 사용포인트, 적립포인트, 접속수");		 //  타이틀 쓰고 
	fwrite($fp,$newline);                     //  줄바꾸기 
	?>
	<table class="table table-bordered">
	<colgroup>
	<col width="5%">
	<col width="*">
	<col width="10%">
	<col width="10%">
	<col width="10%">
	<col width="10%">
	<col width="10%">
	<col width="10%">
	</colgroup>
	<tbody>
	<tr> 
		<th>No</td>
		<th>회원아이디</td>
		<th>이름</td>
		<th>구매횟수</td>
		<th>구매금액</td>
		<th>[주문] 사용포인트</td>
		<th>[주문] 적립포인트</td>
		<th>접속수</td>
	</tr>
	<?
	$trade_stat = 4;
	if($search_start_day){
		$result=$db->result("select sum(t.trade_total_price), t.order_userid, t.order_name, count(*), m.connect, sum(t.trade_use_point), sum(t.trade_save_point), t.sale_end_day from cs_trade t, cs_member m where t.order_userid is not null and t.order_userid=m.userid and t.trade_stat='$trade_stat' and (DATE_FORMAT(t.trade_day,'%Y-%m-%d')>='$search_start_day' and DATE_FORMAT(t.trade_day,'%Y-%m-%d')<='$search_end_day') group by order_userid order by 1 desc");
	}else{
		$result=$db->result("select sum(t.trade_total_price), t.order_userid, t.order_name, count(*), m.connect, sum(t.trade_use_point), sum(t.trade_save_point) from cs_trade t, cs_member m where t.order_userid is not null and t.order_userid=m.userid and t.trade_stat='$trade_stat' group by order_userid order by 1 desc");
	}
	while($row=mysqli_fetch_array($result)) {
	?>
	<tr> 
		<td class="text-center"><?=++$listNo;?></td>
		<td class="text-center"><?=$row[1];?></td>
		<td class="text-center"><?=$row[2];?></td>
		<td class="text-center"><?=number_format($row[3]);?></td>
		<td class="text-center"><?=number_format($row[0]);?></td>
		<td class="text-center"><?=number_format($row[5]);?></td>
		<td class="text-center"><?=number_format($row[6]);?></td>
		<td class="text-center"><?=number_format($row[4]);?></td>
	</tr>
	<?
		fwrite($fp, $listNo.",".$row[1].",".$row[2].",".$row[3].",".$row[0].",".$row[5].",".$row[6].",".$row[4]);
		fwrite($fp, $newline);     // 줄 바꾸기             
	}
	fclose($fp); 
	?>
	</tbody>
	</table>
	
	<!-- <table width="800" border="0" cellspacing="0" cellpadding="0" height="55">
		<tr> 
			<td height="25" align="right"><a href="../../data/csv/crm3.csv"><img src="../images/bt_excell.gif" align="absmiddle" border="0"></a></td>
		</tr>
	</table> -->
<? include('../footer.php');?>