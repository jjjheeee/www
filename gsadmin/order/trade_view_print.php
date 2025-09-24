<?
session_cache_limiter("");
session_start();
include $_SERVER['DOCUMENT_ROOT']."/common.php";

$site_url		= "http://" . $_SERVER['HTTP_HOST'];
$admin_stat = $db->object("cs_admin","");
$trade_stat = $db->object("cs_trade", "where trade_code='$trade_code'");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<?if( !$_SESSION['ADMIN_USERID'] || !$_SESSION['ADMIN_PASSWD']) { $tools->alertJavaGo('경고! 잘못된 접근입니다\n\n로그인 하세요', '/gsadmin/');}?>

    <title><?=$admin_stat->shop_name;?></title>

    <link href="<?=$site_url?>/gsadmin/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="<?=$site_url?>/gsadmin/css/skin/dashboard.css" rel="stylesheet"> -->
	 <link href="<?=$site_url?>/gsadmin/css/ie9.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="/gsadmin/js/assets/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?=$site_url?>/gsadmin/js/assets/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?=$site_url?>/gsadmin/js/bootstrap.min.js"></script>
    <script src="<?=$site_url?>/gsadmin/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?=$site_url?>/gsadmin/js/assets/ie10-viewport-bug-workaround.js"></script>

<style type="text/css">
.page-header{
	margin:10px 0 10px;
}
</style>

</head>

<body>
	<div class="col-sm-12">

	<div class="page-header" style="font-weight:bold"><span class="glyphicon glyphicon-play" aria-hidden="true"></span> 주문정보</div>
	<table class="table table-bordered">
	<colgroup>
	<col width="10%">
	<col width="23%">
	<col width="10%">
	<col width="23%">
	<col width="10%">
	<col width="*%">
	</colgroup>
	<tbody>
	<tr>
		<th>주문번호</th>
		<td class="text-center"><?=$trade_stat->trade_code;?></td>
		<th>접수일</th>
		<td class="text-center"><?=$tools->strDateCut($trade_stat->trade_day, 3);?></td>
		<th>아이디</th>
		<td class="text-center"><? if($trade_stat->order_userid) {?><?=$trade_stat->order_userid;?><?} else {?>비회원<?}?></td>
	</tr>
	</tbody>
	</table>

	<div class="page-header" style="font-weight:bold"><span class="glyphicon glyphicon-play" aria-hidden="true"></span> 주문내역</div>
	<table class="table table-bordered">
	<colgroup>
	<col width="*">
	<col width="15%">
	<col width="10%">
	<col width="15%">
	</colgroup>
	<thead>
	<tr>
		<th>상품명</th>
		<th>가 격</th>
		<th>수 량</th>
		<th>구매금액</th>
	</tr>
	</thead>
	<tbody>
	<?
	$trade_goods_result=$db->select("cs_trade_goods", "where trade_code='$trade_stat->trade_code' order by idx asc");
	while( $trade_goods_row=@mysqli_fetch_object( $trade_goods_result)) {
	?>
	<tr>
		<td class="text-center">
			<?=$db->stripSlash($trade_goods_row->goods_name);?>
			<?
			if($trade_goods_row->option_idx){
			echo "&nbsp;/&nbsp;";
			echo $trade_goods_row->option_name;
			}
			?>
		</td>
		<td class="text-center"> <?=number_format($trade_goods_row->goods_price);?> 원</td>
		<td class="text-center"> <?=number_format($trade_goods_row->goods_cnt);?> </td>
		<td class="text-center"> <?=number_format($trade_goods_row->goods_price*$trade_goods_row->goods_cnt);?> 원</td>
	</tr>
	<?}?>
	</tbody>
	</table>

	<table class="table table-bordered">
	<colgroup>
	<col width="15%">
	<col width="20%">
	<col width="15%">
	<col width="20%">
	<col width="15%">
	<col width="*">
	</colgroup>
	<tbody>
	<tr>
		<th>상품 금액</th>
		<td class="text-center"><?=number_format($trade_stat->trade_price);?> 원</td>
		<th>배송비</th>
		<td class="text-center"><?=number_format($trade_stat->trade_deliv_price);?> 원</td>
		<th rowspan="2">최종<br>결제 금액</th>
		<td rowspan="2" class="text-center"><?=number_format($trade_stat->trade_total_price);?> 원</td>
	</tr>
	<tr>
		<th>적립금</th>
		<td class="text-center">
			<? if($trade_stat->order_userid) {?>
				<?=number_format($trade_stat->trade_save_point);?> 원
			<?} else {?>
				<font color="#FF9933">비회원</font>
			<?}?>
		</td>
		<th rowspan="2">적립금 사용</th>
		<td rowspan="2" class="text-center"><?=number_format($trade_stat->trade_use_point);?> 원</td>
	</tr>
	</tbody>
	</table>


	<div class="page-header" style="font-weight:bold"><span class="glyphicon glyphicon-play" aria-hidden="true"></span> 배송지정보</div>
	<table class="table table-bordered">
	<colgroup>
	<col width="15%">
	<col width="35%">
	<col width="15%">
	<col width="35%">
	</colgroup>
	<tbody>
	<tr>
		<th>이름</th>
		<td><?=$trade_stat->deliv_name;?></td>
		<th>연락처</th>
		<td><?=$trade_stat->deliv_phone;?></td>
	</tr>
	<tr>
		<th>주 소</th>
		<td colspan="3">(<?=$trade_stat->deliv_zip_new;?>)<br>
			<?=$trade_stat->deliv_add1;?><br>
			<?=$trade_stat->deliv_add2;?>
		</td>
	</tr>
	<tr>
		<th>배송메세지</th>
		<td colspan="3"><?echo nl2br($trade_stat->deliv_content);?></td>
	</tr>
	</tbody>
	</table>


	<div class="page-header" style="font-weight:bold"><span class="glyphicon glyphicon-play" aria-hidden="true"></span> 결제정보</div>
	<table class="table table-bordered">
	<colgroup>
	<col width="15%">
	<col width="35%">
	<col width="15%">
	<col width="35%">
	</colgroup>
	<tbody>
	<tr>
		<th>결제정보</th>
		<td colspan="3">
			<?
			if($trade_stat->trade_method==1){
				$trade_method_info = explode("|",$trade_stat->trade_method_info);
				echo "무통장입금";
			}else if($trade_stat->trade_method==2){
				echo "신용카드";
			}else if($trade_stat->trade_method==3){
				echo "실시간 계좌이체";
			}else if($trade_stat->trade_method==10){
				echo "적립금";
			}
			?>
		</td>
	</tr>

	<?if($trade_stat->trade_method==1){?>
	<tr>
		<th>현금영수증</th>
		<td colspan="3">
			<?
			if($trade_stat->tax_check==1){
				echo "개인소득공제용 : 휴대폰번호 (".$trade_stat->tax_phone.")";
			}else if($trade_stat->tax_check==2){
				echo "지출증빙용 : 사업자번호 (".$trade_stat->tax_licensee.")";
			}else{
				echo "미발행";
			}
			?>
		</td>
	</tr>
	<?}?>
	</tbody>
	</table><br>


	</div>

<script type="text/javascript">
  setTimeout("print_time()",1000); 
function print_time() {

	window.print();

}
</script>

</body>
</html>