<?php
# URL를 파일명으로 지정.....
$domain = str_replace( ".", "_", $HTTP_HOST );
# 엑셀 생성되는 디비명
$path = "trade";
Header("Content-type: application/vnd.ms-excel"); 
Header("Content-Disposition: attachment; filename=" . $domain . "_" . $path . "_".date("Y-m-d").".xls");
Header("Content-Description: PHP4 Generated Data"); 
Header("Pragma: no-cache"); 
Header("Expires: 0");
include $_SERVER['DOCUMENT_ROOT']."/common.php";
echo "<?xml version='1.0' encoding='UTF-8'?>";
?>
<Workbook xmlns="urn:schemas-microsoft-com:office:spreadsheet" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns:ss="urn:schemas-microsoft-com:office:spreadsheet" xmlns:html="http://www.w3.org/TR/REC-html40">  


<Styles> 
  <Style ss:ID='s1'> 
  <Alignment ss:Horizontal='Center' ss:Vertical='Center' ss:WrapText='1'/>
  <Borders>
    <Border ss:Position='Bottom' ss:LineStyle='Continuous' ss:Weight='1'/>
    <Border ss:Position='Left' ss:LineStyle='Continuous' ss:Weight='1'/>
    <Border ss:Position='Right' ss:LineStyle='Continuous' ss:Weight='1'/>
    <Border ss:Position='Top' ss:LineStyle='Continuous' ss:Weight='1'/>
  </Borders> 
  <Interior ss:Color='#FFFF99' ss:Pattern='Solid'/>
  <Font x:Family="Swiss" ss:Size="10" ss:Bold="1"/>
  </Style> 

  <Style ss:ID='s2'> 
  <Alignment ss:Horizontal='Center' ss:Vertical='Center' ss:WrapText='1'/>
  <Borders>
    <Border ss:Position='Bottom' ss:LineStyle='Continuous' ss:Weight='1'/>
    <Border ss:Position='Left' ss:LineStyle='Continuous' ss:Weight='1'/>
    <Border ss:Position='Right' ss:LineStyle='Continuous' ss:Weight='1'/>
    <Border ss:Position='Top' ss:LineStyle='Continuous' ss:Weight='1'/>
  </Borders>
    <Font x:Family="Swiss" ss:Size="8"/>
  </Style>
</Styles>

 <Worksheet ss:Name="trade">
  <Table>
	<Column ss:Width='50'/><!-- No  --> 
	<Column ss:Width='100'/><!-- 주문번호  -->
	<Column ss:Width='100'/><!-- 주문자  -->
	<Column ss:Width='100'/><!-- 회원ID  -->
	<Column ss:Width='100'/><!-- 결제금액  -->
	<Column ss:Width='100'/><!-- 결제방법  -->
	<Column ss:Width='100'/><!-- 연락처 -->
	<Column ss:Width='100'/><!-- 주문일  -->
	<Column ss:Width='100'/><!-- 거래상태  -->

	<Row ss:Height="20"> 
    <Cell ss:StyleID='s1'><Data ss:Type="String">No</Data></Cell> 
    <Cell ss:StyleID='s1'><Data ss:Type="String">주문번호</Data></Cell> 
    <Cell ss:StyleID='s1'><Data ss:Type="String">이름</Data></Cell> 
    <Cell ss:StyleID='s1'><Data ss:Type="String">회원ID</Data></Cell> 
    <Cell ss:StyleID='s1'><Data ss:Type="String">결제금액</Data></Cell> 
    <Cell ss:StyleID='s1'><Data ss:Type="String">결제방법</Data></Cell> 
    <Cell ss:StyleID='s1'><Data ss:Type="String">연락처</Data></Cell> 
    <Cell ss:StyleID='s1'><Data ss:Type="String">주문일</Data></Cell> 
    <Cell ss:StyleID='s1'><Data ss:Type="String">거래상태</Data></Cell> 
    </Row>
<?
	# 해당 Query 및 데이터 처리 부분을 넣으시면됩니다
	$query		= "select * from cs_trade where order_gu='y'";
		if($trade_stat)							{$query.=" and trade_stat ='$trade_stat'";}
		if($search_trade_stat)			{$query.=" and trade_stat ='$search_trade_stat'";}
		if($search_trade_method)	{$query.=" and trade_method ='$search_trade_method'";}
		if($search_device)					{$query.=" and device ='$search_device'";}
		if($search_sday)						{$query.=" and DATE_FORMAT(trade_day,'%Y-%m-%d')>='$search_sday'";}
		if($search_eday)						{$query.=" and DATE_FORMAT(trade_day,'%Y-%m-%d')<='$search_eday'";}

		if($search_order){
			if($search_item){
				$query.=" and $search_item like '%$search_order%'";
			}else{
				$query.=" and (trade_code like '%$search_order%' or name like '%$search_order%' or name like'%$search_order%' or userid like'%$search_order%' or phone like'%$search_order%')";
			}
		}
	$rs = mysqli_query($db2,$query);
	$intN = 1;
	while( $row = mysqli_fetch_array( $rs ) ) {
		$tmpN = str_pad( $intN, 5, "0", STR_PAD_LEFT );

	//결제방법
	if($row['trade_method']==1){
		$trade_method = "무통장입금";
	}else if($row['trade_method']==2){
		$trade_method = "신용카드";
	}else if($row['trade_method']==3){
		$trade_method = "실시간 계좌이체";
	}else if($row['trade_method']==4){
		$trade_method = "가상계좌";
	}else if($row['trade_method']==10){
		$trade_method = "적립금";
	}


	//거래상태
	if($row['trade_stat']==1) {
		$trade_stat = "결제대기";
	} else if($row['trade_stat']==2) {
		$trade_stat = "결제완료";
	} else if($row['trade_stat']==3) {
		$trade_stat = "상품배송중";
	} else if($row['trade_stat']==4) {
		$trade_stat = "배송완료";
	} else if($row['trade_stat']==5) {
		$trade_stat = "주문취소";
	}

?>
<Row ss:Height="20"> 
    <Cell ss:StyleID='s2'><Data ss:Type="String"><?echo $intN?></Data></Cell> 
    <Cell ss:StyleID='s2'><Data ss:Type="String"><?echo $row['trade_code']?></Data></Cell>
    <Cell ss:StyleID='s2'><Data ss:Type="String"><?echo $row['name']?><?if($row['device']=="mobile"){echo "(M)";}?></Data></Cell>
    <Cell ss:StyleID='s2'><Data ss:Type="String"><?if($row['userid']){echo $row['userid'];}else{echo "비회원";}?></Data></Cell>
    <Cell ss:StyleID='s2'><Data ss:Type="String"><?echo number_format($row['trade_total_price']);?></Data></Cell>
    <Cell ss:StyleID='s2'><Data ss:Type="String"><?echo $trade_method?></Data></Cell>
    <Cell ss:StyleID='s2'><Data ss:Type="String"><?echo $row['phone']?></Data></Cell>
    <Cell ss:StyleID='s2'><Data ss:Type="String"><?echo $tools->strDateCut($row['trade_day'],1);?></Data></Cell>
    <Cell ss:StyleID='s2'><Data ss:Type="String"><?echo $trade_stat?></Data></Cell>
  </Row> 
<?		
	$intN++;
	}
	mysqli_free_result( $rs );
?>
</Table> 
 </Worksheet> 
</Workbook>