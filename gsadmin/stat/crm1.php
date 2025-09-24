<?
$mod	= "stat";	
$menu	= "crm1";
include("../header.php");

	if(empty($search_sday)){$search_sday = date("Y-m-01");}
	if(empty($search_eday)){$search_eday = date("Y-m-d");}

	if(file_exists('../../data/csv/crm1.csv')) { unlink('../../data/csv/crm1.csv');    }  // 만일 이전에 만든 화일이 있으면 지운다 
	$newline = chr(10);            //  LF(줄바꿈)의 ascii 값을 얻는다. 
	$fp = fopen( "../../data/csv/crm1.csv", "w" ) or die("../../data/csv/crm1.csv 화일을 열수 없습니다") ;  // crm1.csv 를 새로 연다 
	fwrite($fp,"번호, 제품명, 제품번호, 판매가격, 판매수량, 판매금액");		 //  타이틀 쓰고 
	fwrite($fp,$newline);                     //  줄바꾸기 
?>

	<h4 class="page-header">상품별 매출</h4>

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
				<input type="text" name="search_sday" class="form-control input-sm text-center" value="<?if(empty($search_sday)){echo date("Y-m-d");}else{echo $search_sday;}?>"/>
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
					<label class="radio-inline"><input type="radio" name="trade_stat" value="5" <?if($trade_stat==5){echo "checked";}?>>주문취소</label>　
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

	<table class="table table-bordered table-hover">
	<colgroup>
	<col width="10%">
	<col width="15%">
	<col width="*">
	<col width="10%">
	<col width="15%">
	</colgroup>
	<tbody>
	<tr> 
		<th>No</td>
		<th>제품코드</th>
		<th>제품명</th>
		<th>판매량</th>
		<th>판매금액</th>
	</tr>
	<?
	if($search_sday && $trade_stat){
		$total_price = $db->sum("cs_trade_goods inner join cs_trade USING(trade_code)", "where cs_trade.trade_stat='$trade_stat' and cs_trade.order_gu='y' and  (DATE_FORMAT(cs_trade.trade_day,'%Y-%m-%d')>='$search_sday' and DATE_FORMAT(cs_trade.trade_day,'%Y-%m-%d')<='$search_eday')", "(cs_trade_goods.goods_price*cs_trade_goods.goods_cnt)");
		$result	  = $db->result( "select (sum(goods_cnt)*goods_price), goods_price,  sum(goods_cnt), goods_name, goods_code from cs_trade_goods inner join cs_trade USING(trade_code) where cs_trade.trade_stat='$trade_stat' and cs_trade.order_gu='y' and (DATE_FORMAT(cs_trade.trade_day,'%Y-%m-%d')>='$search_sday' and DATE_FORMAT(cs_trade.trade_day,'%Y-%m-%d')<='$search_eday') group by goods_code order by 1 desc" );

	}else if($search_sday && empty($trade_stat)){
		$total_price = $db->sum("cs_trade_goods inner join cs_trade USING(trade_code)", "where cs_trade.order_gu='y' and  (DATE_FORMAT(cs_trade.trade_day,'%Y-%m-%d')>='$search_sday' and DATE_FORMAT(cs_trade.trade_day,'%Y-%m-%d')<='$search_eday')", "(cs_trade_goods.goods_price*cs_trade_goods.goods_cnt)");
		$result	  = $db->result( "select (sum(goods_cnt)*goods_price), goods_price,  sum(goods_cnt), goods_name, goods_code from cs_trade_goods inner join cs_trade USING(trade_code) where cs_trade.order_gu='y' and (DATE_FORMAT(cs_trade.trade_day,'%Y-%m-%d')>='$search_sday' and DATE_FORMAT(cs_trade.trade_day,'%Y-%m-%d')<='$search_eday') group by goods_code order by 1 desc" );


	}else if(empty($search_sday) && $trade_stat){

		$total_price = $db->sum("cs_trade_goods inner join cs_trade USING(trade_code)", "where cs_trade.trade_stat='$trade_stat' and cs_trade.order_gu='y'", "(cs_trade_goods.goods_price*cs_trade_goods.goods_cnt)");
		$result	  = $db->result( "select (sum(goods_cnt)*goods_price), goods_price,  sum(goods_cnt), goods_name, goods_code from cs_trade_goods inner join cs_trade USING(trade_code) where cs_trade.trade_stat='$trade_stat' and cs_trade.order_gu='y' group by goods_code order by 1 desc" );

	} else {
	$total_price = $db->sum("cs_trade_goods inner join cs_trade USING(trade_code)", "where cs_trade.order_gu='y'", "(cs_trade_goods.goods_price*cs_trade_goods.goods_cnt)");
	$result	  = $db->result( "select (sum(goods_cnt)*goods_price), goods_price,  sum(goods_cnt), goods_name, goods_code from cs_trade_goods inner join cs_trade USING(trade_code) where cs_trade.order_gu='y' group by goods_code order by 1 desc" );
	}
	while( $row = @mysqli_fetch_array($result)) {
		$goods_row = $db->object("cs_goods","where code='$row[4]'");
	?>
	<tr> 
		<td class="text-center"><?=++$listNo;?></td>
		<td class="text-center"><?=$goods_row->code;?></td>
		<td class="text-center"><?=$row[3];?></td>
		<td class="text-center"><?=number_format($row[2]);?> 건</td>
		<td class="text-center"><?=number_format($row[0]);?> 원</td>
	</tr>
	<?
	}
	?>
	</tbody>
	</table>


<? include('../footer.php');?>