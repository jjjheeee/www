<?
$mod	= "stat";	
$menu	= "crm2";
include("../header.php");
?>
<?
//결제완료,배송중,배송완료
if(!$_GET['date']) { $_GET['date'] =1;}

$year_max= $db->row("cs_trade", "", "max(left(trade_day, 4))");
$year_min= $db->row("cs_trade", "", "min(left(trade_day, 4))");

?>
<script language="javascript">
<!--
function sendit() {
	var form=document.search_form;
	form.submit();
}

function showMon(){
	var form=document.search_form;
	if(form.year.selectedIndex >0) {
		form.mon.style.display="";
	} else {
		form.mon.style.display="none";
		form.mon.selectedIndex=0;
	}
}
//-->
</script>

	<h4 class="page-header">기간별 매출</h4>

	<form method="get" action="<?=$_SERVER['PHP_SELF'];?>" name="search_form" class="form-inline">
	<input type="hidden" name="date" value="5">
	<div class="well well-small">
	<table width="100%">		
	<tr> 
		<td>
			<a href="#" class="btn btn-default">기간검색</a>
			<select name="year" onChange="javascript:showMon();" class="form-control">
			<option value="0" selected>연도별</option>
			<? for($year_go=$year_min[0]; $year_go<=$year_max[0]; $year_go++){?>
			<option value="<?=$year_go?>" <? if($_GET['year'] == $year_go) echo('selected');?>><?=$year_go?>년</option>
			<?}?>
			</select>
			<select name="mon" id="mon" class="form-control" style="display:none;">
			<option value="0" selected>월별</option>
			<? for($mon_go=1;$mon_go<13;$mon_go++){?>
			<option value="<?=$mon_go?>" <? if($_GET['mon'] == $mon_go) echo('selected');?>><?=$mon_go?>월</option>
			<?}?>
			</select>
			<a href="javascript:sendit();" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-search" aria-hidden="true"></i></a>&nbsp;&nbsp;
			<a href="<?=$_SERVER['PHP_SELF'];?>?date=4" class="btn btn-primary btn-sm">요일별</a>
		</td>
	</tr>
	</table>
	</form>
	</div>

	<?
	// 판매완료한 총 구매수
	$total_trade_cnt=$db->cnt("cs_trade", "where (trade_stat=2 or trade_stat=3 or trade_stat=4)");
	// 판매완료한 총 구입금액
	$total_trade_price=$db->sum("cs_trade", "where (trade_stat=2 or trade_stat=3 or trade_stat=4)", "trade_total_price");
	?>
	<?
	if($_GET['date']==1) {
		$result=$db->result("select left(trade_money_ok, 4), count(idx), sum(trade_total_price), count(if(order_userid!='', order_userid, null)) from cs_trade where (trade_stat=2 or trade_stat=3 or trade_stat=4) and trade_total_price>0 group by left(trade_money_ok, 4)");	
		
		if(file_exists('../../data/csv/crm2.csv')) { unlink('../../data/csv/crm2.csv');    }  // 만일 이전에 만든 화일이 있으면 지운다 
		$newline = chr(10);            //  LF(줄바꿈)의 ascii 값을 얻는다. 
		$fp = fopen( "../../data/csv/crm2.csv", "w" ) or die("../../data/csv/crm2.csv 화일을 열수 없습니다") ;  // crm2.csv 를 새로 연다 
		fwrite($fp,"연도, 판매수, 구매금액, 구매자정보");		 //  타이틀 쓰고 
		fwrite($fp,$newline);                     //  줄바꾸기 
	?>
	<table class="table table-bordered">
	<colgroup>
	<col width="20%">
	<col width="20%">
	<col width="20%">
	<col width="*">
	</colgroup>
	<thead>
	<tr> 
		<th>연도</td>
		<th>판매수</td>
		<th>구매금액</td>
		<th>구매자정보</td>
	</tr>
	</thead>
	<tbody>
	<?
	while($row = @mysqli_fetch_array( $result )) {
		$no_cnt=$row[1]-$row[3]; 
	?>
	<tr> 
		<td class="text-center"><?=$row[0];?></td>
		<td class="text-center"><?=number_format($row[1]);?></td>
		<td class="text-center"><?=number_format($row[2]);?></td>
		<td class="text-center">회원(<?=number_format($row[3]);?>), 비회원(<?=number_format($no_cnt);?>)</td>
	</tr>
	<?
		fwrite($fp, $row[0].",".$row[1].",".$row[2].","."회원(".$row[3].")"." / "."비회원(".$no_cnt.")");
		fwrite($fp, $newline);     // 줄 바꾸기             
	}
	fclose($fp); 
	?>
	</tbody>
	</table>
	<?
	} else if($_GET[date]==2) {
		$result=$db->result("select substring(trade_money_ok, 6, 2), count(idx), sum(trade_total_price), count(if(order_userid!='', order_userid, null)) from cs_trade where (trade_stat=2 or trade_stat=3 or trade_stat=4) group by substring(trade_money_ok, 6, 2)");
		
		if(file_exists('../../data/csv/crm2.csv')) { unlink('../../data/csv/crm2.csv');    }  // 만일 이전에 만든 화일이 있으면 지운다 
		$newline = chr(10);            //  LF(줄바꿈)의 ascii 값을 얻는다. 
		$fp = fopen( "../../data/csv/crm2.csv", "w" ) or die("../../data/csv/crm2.csv 화일을 열수 없습니다") ;  // crm2.csv 를 새로 연다 
		fwrite($fp,"월별, 판매수, 구매금액, 구매자정보");		 //  타이틀 쓰고 
		fwrite($fp,$newline);                     //  줄바꾸기 
	?>
	<table class="table table-bordered">
	<colgroup>
	<col width="20%">
	<col width="20%">
	<col width="20%">
	<col width="*">
	</colgroup>
	<thead>
	<tr> 
		<th>월별</td>
		<th>판매수</td>
		<th>구매금액</td>
		<th>구매자정보</td>
	</tr>
	</thead>
	<tbody>
	<?
	while( $row = @mysqli_fetch_array( $result )) {
		$no_cnt=$row[1]-$row[3]; 
	?>
	<tr> 
		<td class="text-center"><?=$row[0];?></td>
		<td class="text-center"><?=number_format($row[1]);?></td>
		<td class="text-center"><?=number_format($row[2]);?></td>
		<td class="text-center">회원(<?=number_format($row[3]);?>), 비회원(<?=number_format($no_cnt);?>)</td>
	</tr>
	<?
		fwrite($fp, $row[0].",".$row[1].",".$row[2].","."회원(".$row[3].")"." / "."비회원(".$no_cnt.")");
		fwrite($fp, $newline);     // 줄 바꾸기             
	}
	fclose($fp); 
	?>
	</tbody>
	</table>
	<?
	} else if($_GET[date]==3) {
		$result=$db->result("select substring(trade_money_ok, 9, 2), count(idx), sum(trade_total_price), count(if(order_userid!='', order_userid, null)) from cs_trade where (trade_stat=2 or trade_stat=3 or trade_stat=4) group by substring(trade_money_ok, 9, 2)");
		
		if(file_exists('../../data/csv/crm2.csv')) { unlink('../../data/csv/crm2.csv');    }  // 만일 이전에 만든 화일이 있으면 지운다 
		$newline = chr(10);            //  LF(줄바꿈)의 ascii 값을 얻는다. 
		$fp = fopen( "../../data/csv/crm2.csv", "w" ) or die("../../data/csv/crm2.csv 화일을 열수 없습니다") ;  // crm2.csv 를 새로 연다 
		fwrite($fp,"일별, 판매수, 구매금액, 구매자정보");		 //  타이틀 쓰고 
		fwrite($fp,$newline);                     //  줄바꾸기 
	?>
	<table class="table table-bordered">
	<colgroup>
	<col width="20%">
	<col width="20%">
	<col width="20%">
	<col width="*">
	</colgroup>
	<thead>
	<tr> 
		<th>일별</td>
		<th>판매수</td>
		<th>구매금액</td>
		<th>구매자정보</td>
	</tr>
	</thead>
	<tbody>
	<?
	while( $row = @mysqli_fetch_array( $result )) {
		$no_cnt=$row[1]-$row[3];
	?>
	<tr> 
		<td class="text-center"><?=$row[0];?></td>
		<td class="text-center"><?=number_format($row[1]);?></td>
		<td class="text-center"><?=number_format($row[2]);?></td>
		<td class="text-center">회원(<?=number_format($row[3]);?>), 비회원(<?=number_format($no_cnt);?>)</td>
	</tr>
	<?
		fwrite($fp, $row[0].",".$row[1].",".$row[2].","."회원(".$row[3].")"." / "."비회원(".$no_cnt.")");
		fwrite($fp, $newline);     // 줄 바꾸기             
	}
	fclose($fp); 
	?>
	</tbody>
	</table>
	<?
	} else if($_GET[date]==4) {
		$result=$db->result("select WEEKDAY(left(trade_money_ok, 10)), count(idx), sum(trade_total_price), count(if(order_userid!='', order_userid, null)) from cs_trade where (trade_stat=2 or trade_stat=3 or trade_stat=4) and trade_total_price>0 group by WEEKDAY(left(trade_money_ok, 10))");

		if(file_exists('../../data/csv/crm2.csv')) { unlink('../../data/csv/crm2.csv');    }  // 만일 이전에 만든 화일이 있으면 지운다 
		$newline = chr(10);            //  LF(줄바꿈)의 ascii 값을 얻는다. 
		$fp = fopen( "../../data/csv/crm2.csv", "w" ) or die("../../data/csv/crm2.csv 화일을 열수 없습니다") ;  // crm2.csv 를 새로 연다 
		fwrite($fp,"요일별, 판매수, 구매금액, 구매자정보");		 //  타이틀 쓰고 
		fwrite($fp,$newline);                     //  줄바꾸기 
	?>
	<table class="table table-bordered">
	<colgroup>
	<col width="20%">
	<col width="20%">
	<col width="20%">
	<col width="*">
	</colgroup>
	<thead>
	<tr>
		<th>요일별</td>
		<th>판매수</td>
		<th>구매금액</td>
		<th>구매자정보</td>
	</tr>
	</thead>
	<tbody>
	<?
	while( $row = @mysqli_fetch_array( $result )) {
		$no_cnt=$row[1]-$row[3];
	?>
	<tr> 
		<td class="text-center"><?=$tools->strDateWeek($row[0]);?></td>
		<td class="text-center"><?=number_format($row[1]);?></td>
		<td class="text-center"><?=number_format($row[2]);?></td>
		<td class="text-center">회원(<?=number_format($row[3]);?>), 비회원(<?=number_format($no_cnt);?>)</td>
	</tr>
	<?
		fwrite($fp, $row[0].",".$row[1].",".$row[2].","."회원(".$row[3].")"." / "."비회원(".$no_cnt.")");
		fwrite($fp, $newline);     // 줄 바꾸기             
	}
	fclose($fp); 
	?>
	</tbody>
	</table>
	<?
	} else if($_GET['date']==5 && $_GET['year']==0 && $_GET['mon']==0) {
		$result=$db->result("select left(trade_money_ok, 4), count(idx), sum(trade_total_price), count(if(order_userid!='', order_userid, null)) from cs_trade where (trade_stat=2 or trade_stat=3 or trade_stat=4) and trade_total_price>0 group by left(trade_money_ok, 4)");	
		
		if(file_exists('../../data/csv/crm2.csv')) { unlink('../../data/csv/crm2.csv');    }  // 만일 이전에 만든 화일이 있으면 지운다 
		$newline = chr(10);            //  LF(줄바꿈)의 ascii 값을 얻는다. 
		$fp = fopen( "../../data/csv/crm2.csv", "w" ) or die("../../data/csv/crm2.csv 화일을 열수 없습니다") ;  // crm2.csv 를 새로 연다 
		fwrite($fp,"연도, 판매수, 구매금액, 구매자정보");		 //  타이틀 쓰고 
		fwrite($fp,$newline);                     //  줄바꾸기 
	?>
	<table class="table table-bordered">
	<colgroup>
	<col width="20%">
	<col width="20%">
	<col width="20%">
	<col width="*">
	</colgroup>
	<thead>
	<tr> 
		<th>연도</td>
		<th>판매수</td>
		<th>구매금액</td>
		<th>구매자정보</td>
	</tr>
	</thead>
	<tbody>
	<?
	while($row = @mysqli_fetch_array( $result )) {
		$no_cnt=$row[1]-$row[3]; 
	?>
	<tr> 
		<td class="text-center"><?=$row[0];?></td>
		<td class="text-center"><?=number_format($row[1]);?></td>
		<td class="text-center"><?=number_format($row[2]);?></td>
		<td class="text-center">회원(<?=number_format($row[3]);?>), 비회원(<?=number_format($no_cnt);?>)</td>
	</tr>
	<?
		fwrite($fp, $row[0].",".$row[1].",".$row[2].","."회원(".$row[3].")"." / "."비회원(".$no_cnt.")");
		fwrite($fp, $newline);     // 줄 바꾸기             
	}
	fclose($fp); 
	?>
	</tbody>
	</table>
	<?
	} else if($_GET['date']==5 && $_GET['year'] && $_GET['mon']==0) {
		// 판매완료한 총 구매수
		$total_trade_cnt=$db->cnt("cs_trade", "where left(trade_money_ok, 4)='$_GET[year]' and (trade_stat=2 or trade_stat=3 or trade_stat=4)");
		// 판매완료한 총 구입금액
		$total_trade_price=$db->sum("cs_trade", "where left(trade_money_ok, 4)='$_GET[year]' and (trade_stat=2 or trade_stat=3 or trade_stat=4)", "trade_total_price");
		$result=$db->result("select substring(trade_money_ok, 6, 2), count(idx), sum(trade_total_price), count(if(order_userid!='', order_userid, null)) from cs_trade where left(trade_money_ok, 4)='$_GET[year]' and (trade_stat=2 or trade_stat=3 or trade_stat=4) group by substring(trade_money_ok, 6, 2)");
		
		if(file_exists('../../data/csv/crm2.csv')) { unlink('../../data/csv/crm2.csv');    }  // 만일 이전에 만든 화일이 있으면 지운다 
		$newline = chr(10);            //  LF(줄바꿈)의 ascii 값을 얻는다. 
		$fp = fopen( "../../data/csv/crm2.csv", "w" ) or die("../../data/csv/crm2.csv 화일을 열수 없습니다") ;  // crm2.csv 를 새로 연다 
		fwrite($fp,"월별, 판매수, 구매금액, 구매자정보");		 //  타이틀 쓰고 
		fwrite($fp,$newline);                     //  줄바꾸기 
	?>
	<table class="table table-bordered">
	<colgroup>
	<col width="20%">
	<col width="20%">
	<col width="20%">
	<col width="*">
	</colgroup>
	<thead>
	<tr> 
		<th>월별</td>
		<th>판매수</td>
		<th>구매금액</td>
		<th>구매자정보</td>
	</tr>
	</thead>
	<tbody>
	<?
	while( $row = @mysqli_fetch_array( $result )) {
		$no_cnt=$row[1]-$row[3]; 
	?>
	<tr> 
		<td class="text-center"><?=$row[0];?></td>
		<td class="text-center"><?=number_format($row[1]);?></td>
		<td class="text-center"><?=number_format($row[2]);?></td>
		<td class="text-center">회원(<?=number_format($row[3]);?>), 비회원(<?=number_format($no_cnt);?>)</td>
	</tr>
	<?
		fwrite($fp, $row[0].",".$row[1].",".$row[2].","."회원(".$row[3].")"." / "."비회원(".$no_cnt.")");
		fwrite($fp, $newline);     // 줄 바꾸기             
	}
	fclose($fp); 
	?>
	</tbody>
	</table>
	<?
	} else if($_GET['date']==5 && $_GET['year'] && $_GET['mon']) {
		// 판매완료한 총 구매수
		$total_trade_cnt=$db->cnt("cs_trade", "where left(trade_money_ok, 4)='$_GET[year]' and substring(trade_money_ok, 6, 2)=$_GET[mon] and (trade_stat=2 or trade_stat=3 or trade_stat=4)");
		// 판매완료한 총 구입금액
		$total_trade_price=$db->sum("cs_trade", "where left(trade_money_ok, 4)='$_GET[year]' and substring(trade_money_ok, 6, 2)=$_GET[mon] and (trade_stat=2 or trade_stat=3 or trade_stat=4)", "trade_total_price");
		$result=$db->result("select substring(trade_money_ok, 9, 2), count(idx), sum(trade_total_price), count(if(order_userid!='', order_userid, null)) from cs_trade where left(trade_money_ok, 4)='$_GET[year]' and substring(trade_money_ok, 6, 2)=$_GET[mon] and (trade_stat=2 or trade_stat=3 or trade_stat=4) group by substring(trade_money_ok, 9, 2)");
		
		if(file_exists('../../data/csv/crm2.csv')) { unlink('../../data/csv/crm2.csv');    }  // 만일 이전에 만든 화일이 있으면 지운다 
		$newline = chr(10);            //  LF(줄바꿈)의 ascii 값을 얻는다. 
		$fp = fopen( "../../data/csv/crm2.csv", "w" ) or die("../../data/csv/crm2.csv 화일을 열수 없습니다") ;  // crm2.csv 를 새로 연다 
		fwrite($fp,"일별, 판매수, 구매금액, 구매자정보");		 //  타이틀 쓰고 
		fwrite($fp,$newline);                     //  줄바꾸기 
	?>
	<table class="table table-bordered">
	<colgroup>
	<col width="20%">
	<col width="20%">
	<col width="20%">
	<col width="*">
	</colgroup>
	<thead>
	<tr>
		<th>일별</td>
		<th>판매수</td>
		<th>구매금액</td>
		<th>구매자정보</td>
	</tr>
	</thead>
	<tbody>
	<?
	while( $row = @mysqli_fetch_array( $result )) {
		$no_cnt=$row[1]-$row[3];
	?>
	<tr> 
		<td class="text-center"><?=$row[0];?></td>
		<td class="text-center"><?=number_format($row[1]);?></td>
		<td class="text-center"><?=number_format($row[2]);?></td>
		<td class="text-center">회원(<?=number_format($row[3]);?>), 비회원(<?=number_format($no_cnt);?>)</td>
	</tr>
	<?
		fwrite($fp, $row[0].",".$row[1].",".$row[2].","."회원(".$row[3].")"." / "."비회원(".$no_cnt.")");
		fwrite($fp, $newline);     // 줄 바꾸기            
		$total_cnt += $row[1];
		$total_price +=$row[2];
		$total_userid +=$row[3];
		$total_gest +=$no_cnt;

	}
	fclose($fp); 
	?>
	<!-- <tr>
		<th>합 계</th>
		<th><?=number_format($total_trade_cnt);?> 건</th>
		<th><?=number_format($total_trade_price);?> 원</th>
		<th>회원(<?=number_format($total_userid);?>), 비회원(<?=number_format($total_gest);?>)</th>
	</tr> -->
	</tbody>
	</table>
	<?}?>
			
			<!-- <table width="800" border="0" cellspacing="0" cellpadding="0" height="55">
				<tr> 
					<td height="25" align="right"><a href="../../data/csv/crm2.csv"><img src="../images/bt_excell.gif" align="absmiddle" border="0"></a></td>
				</tr>
			</table> -->
<script language="JavaScript">
<!--
showMon();
//-->
</script>
<? include('../footer.php');?>