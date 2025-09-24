<?
$mod	= "stat";	
$menu	= "crm4";
include("../header.php");
?>

	<h4 class="page-header">지역별 통계</h4>

	<form method="post" name="search_form" class="form-inline" action="<?=$_SERVER['PHP_SELF'];?>" >
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
				<input type="text" name="search_sday" class="form-control input-sm text-center" value="<?=$search_sday?>"/>
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-calendar"></span>
				</span>
			</div>
			<div class="input-group">~</div>
			<div class="input-group datetime">
				<input type="text" name="search_eday" class="form-control input-sm text-center" value="<?if(empty($search_eday)){echo date("Y-m-d");}else{echo $search_eday;}?>"/>
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-calendar"></span>
				</span>
			</div>
		</td>
	</tr>
	<tr>
		<th>주문상태</th>
		<td>
			<div class="row">
				<div class="col-sm-12">
					<label class="radio-inline"><input type="radio" name="trade_stat" value="" <?if(empty($trade_stat)){echo "checked";}?>>전체</label>
					<label class="radio-inline"><input type="radio" name="trade_stat" value="1" <?if($trade_stat==1){echo "checked";}?>>결제대기</label>
					<label class="radio-inline"><input type="radio" name="trade_stat" value="2" <?if($trade_stat==2){echo "checked";}?>>결제완료</label>　
					<label class="radio-inline"><input type="radio" name="trade_stat" value="3" <?if($trade_stat==3){echo "checked";}?>>상품배송중</label>　
					<label class="radio-inline"><input type="radio" name="trade_stat" value="4" <?if($trade_stat==4){echo "checked";}?>>배송완료</label>
					<label class="radio-inline"><input type="radio" name="trade_stat" value="5" <?if($trade_stat==5){echo "checked";}?>>취소신청</label>　
				</div>
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
if(file_exists('../../data/csv/crm4.csv')) { unlink('../../data/csv/crm4.csv');    }  // 만일 이전에 만든 화일이 있으면 지운다 
$newline = chr(10);            //  LF(줄바꿈)의 ascii 값을 얻는다. 
$fp = fopen( "../../data/csv/crm4.csv", "w" ) or die("../../data/csv/crm4.csv 화일을 열수 없습니다") ;  // crm4.csv 를 새로 연다 
fwrite($fp,"지역, 구매수, 구매금액");		 //  타이틀 쓰고 
fwrite($fp,$newline);                     //  줄바꾸기 
?>
<table class="table table-bordered table-hover">
<colgroup>
<col width="15%">
<col width="15%">
<col width="*">
</colgroup>
<thead>
<tr> 
	<th>지역</td>
	<th>판매량</td>
	<th>판매금액</td>
</tr>
</thead>
<tbody>
<?
$arrArea=Array("서울","부산","대구","인천","광주","대전","울산","경기","강원","충북","충남","경북","경남","전북","전남","제주","세종특별");
$strArrArea=Array("서 울","부 산","대 구","인 천","광 주","대 전","울 산","경 기","강 원","충 북","충 남","경 북","경 남","전 북","전 남","제 주","세 종");
$total_trade_cnt=0;
$total_trade_price=0;
for($i=0;$i<count($arrArea);$i++) {
	$trade_cnt=0;
	$trade_price=0;

	if($search_sday && $trade_stat)
	{
		$result=$db->result("select trade_total_price, trade_day, order_gu from cs_trade where DATE_FORMAT(trade_day,'%Y-%m-%d')>='$search_sday' and DATE_FORMAT(trade_day,'%Y-%m-%d')<='$search_eday' and trade_stat='$trade_stat' and order_gu='y' and deliv_add1 like '$arrArea[$i]%'");
	}
	else if($search_sday && empty($trade_stat))
	{
		$result=$db->result("select trade_total_price, trade_day, order_gu from cs_trade where DATE_FORMAT(trade_day,'%Y-%m-%d')>='$search_sday' and DATE_FORMAT(trade_day,'%Y-%m-%d')<='$search_eday' and order_gu='y' and deliv_add1 like '$arrArea[$i]%'");
	}
	else if(empty($search_sday) && $trade_stat)
	{		
		$result=$db->result("select trade_total_price, trade_day, order_gu from cs_trade where trade_stat='$trade_stat' and order_gu='y' and deliv_add1 like '$arrArea[$i]%'");
	}
	else
	{
		$result=$db->result("select trade_total_price, trade_day, order_gu from cs_trade where order_gu='y' and deliv_add1 like '$arrArea[$i]%'");		
	}
	while($area_row=@mysqli_fetch_array($result)) {
		$trade_cnt++;
		$trade_price+=$area_row[0];
	}
	$total_trade_cnt+=$trade_cnt;
	$total_trade_price+=$trade_price;
?>
<tr>
	<td class="text-center"><?=$strArrArea[$i];?></th>
	<td class="text-center"><?=number_format($trade_cnt);?> 건</td>
	<td class="text-center"><?=number_format($trade_price);?> 원</td>
</tr>
<?
	fwrite($fp, $strArrArea[$i].",".$trade_cnt.",".$trade_price);
	fwrite($fp, $newline);//줄 바꾸기             
}
fclose($fp); 
?>
<tr>
	<th>합 계</th>
	<th class="text-center"><?=number_format($total_trade_cnt)?> 건</td>
	<th class="text-center"><?=number_format($total_trade_price)?> 원</td>
</tr>
</tbody>
</table>


<? include('../footer.php');?>