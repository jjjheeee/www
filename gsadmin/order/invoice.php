<?include $_SERVER['DOCUMENT_ROOT']."/common.php";?>
<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>택배송장번호</title>

    <link href="/gsadmin/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="/gsadmin/css/skin/dashboard.css" rel="stylesheet"> -->
    <!-- <link href="/gsadmin/css/skin/signin.css" rel="stylesheet"> -->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="/gsadmin/js/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/gsadmin/js/assets/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/gsadmin/js/bootstrap.min.js"></script>
    <script src="/gsadmin/js/docs.min.js"></script>
	<script src="/gsadmin/js/form.js"></script>
	<script src="/gsadmin/js/jquery.form.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/gsadmin/js/assets/ie10-viewport-bug-workaround.js"></script>
	<style type="text/css">
	.page-header{
		margin:10px 0 10px;
	}
	</style>
  </head>
<?
// 넘겨받은 데이타
if($_GET['trade_idx']) { $trade_idx =$_GET['trade_idx'];} else if($_POST['trade_idx']) { $trade_idx =$_POST['trade_idx'];}
if($_POST['trade_number']) {
	$db->update("cs_trade", "trade_delivery='$trade_delivery',trade_delivery2='$trade_delivery2',delivery_url='$delivery_url',trade_number='$_POST[trade_number]' where idx=$trade_idx");
?>
<script type="text/javascript">
<!--
var select = "trade_stat";
var val = 3;
var idx = "<?=$trade_idx?>";
$.ajax({
	type: "post",
	url : "ajax_trade.php",
	data: {"select" :select,"idx" :idx,"val" :val}, 
	success:function(result){
		alert("송장번호 입력완료");
		window.opener.parent.location.reload();
		window.self.close();
	}
});
//-->
</script>
<?
}
?>
<script language="JavaScript">
<!--
function sendit() {
	var form=document.invoice_form;

	if(form.trade_delivery.value==""){
		alert("택배사를 선택해주세요.");
		form.trade_delivery.focus();
	}else if(form.trade_number.value==""){
		alert("송장번호를 입력해주세요.");
		form.trade_delivery.focus();
	}else{
		form.submit();
	}
}

//-->
</script>
<script type="text/javascript">
	function tradeDeli(){
		var form=document.invoice_form;
		if(form.trade_delivery.value==6){
				document.getElementById("deliveryName").style.display="";
				document.getElementById("deliveryURL").style.display="";
		}else{
				document.getElementById("deliveryName").style.display="none";
				document.getElementById("deliveryURL").style.display="none";
		}
	}
</script>
<? $trade_row = $db->object("cs_trade", "where idx='$trade_idx'");?>
	<div class="col-md-12" >
		<div class="page-header" style="font-weight:bold"><span class="glyphicon glyphicon-play" aria-hidden="true"></span> 송장번호입력</div>
		<p>
			<span style="font-weight:bold">주문번호 : <?=$trade_row->trade_code?></span><br>
			<span style="font-weight:bold">주문자 : <?=$trade_row->name?></span>
		</p>
		<font color="red">※ 저장하기를 누르시면 거래상태가 배송중으로 변경됩니다.</font><p></p>
		<form action="<?=$_SERVER['PHP_SELF'];?>" method="post" name="invoice_form" class="form-inline">
		<input type="hidden" name="trade_idx" value="<?=$trade_idx;?>">
		<table class="table table-bordered">
		<colgroup>
		<col width="30%">
		<col width="*">
		</colgroup>
		<tbody>
		<tr>
			<th>택배사</th>
			<td>
				<select name="trade_delivery" id="trade_delivery" class="form-control2" onchange="tradeDeli();">
					<option value="">선택</option>
					<option value="1" <?if($trade_row->trade_delivery==1){?>selected<?}?>>로젠택배</option>
					<option value="2" <?if($trade_row->trade_delivery==2){?>selected<?}?>>CJ대한통운 택배</option>
					<option value="3" <?if($trade_row->trade_delivery==3){?>selected<?}?>>한진택배</option>
					<option value="4" <?if($trade_row->trade_delivery==4){?>selected<?}?>>우체국택배</option>
					<option value="5" <?if($trade_row->trade_delivery==5){?>selected<?}?>>KGB택배</option>
					<option value="7" <?if($trade_row->trade_delivery==7){?>selected<?}?>>현대택배</option>
					<option value="8" <?if($trade_row->trade_delivery==8){?>selected<?}?>>대한통운</option>
					<option value="9" <?if($trade_row->trade_delivery==9){?>selected<?}?>>한진화물</option>
					<option value="10" <?if($trade_row->trade_delivery==10){?>selected<?}?>>옐로우택배</option>
					<option value="11" <?if($trade_row->trade_delivery==11){?>selected<?}?>>대신택배</option>
					<option value="12" <?if($trade_row->trade_delivery==12){?>selected<?}?>>경동택배</option>
					<option value="13" <?if($trade_row->trade_delivery==13){?>selected<?}?>>일양택배</option>
					<option value="14" <?if($trade_row->trade_delivery==14){?>selected<?}?>>이노지스</option>
					<option value="15" <?if($trade_row->trade_delivery==15){?>selected<?}?>>천일화물택배</option>
					<option value="16" <?if($trade_row->trade_delivery==16){?>selected<?}?>>건영택배</option>
					<option value="17" <?if($trade_row->trade_delivery==17){?>selected<?}?>>스마일로지스</option>
					<option value="18" <?if($trade_row->trade_delivery==18){?>selected<?}?>>편의점택배</option>
					<option value="6" <?if($trade_row->trade_delivery==6){?>selected<?}?>>기타</option>
				</select>
			</td>
		</tr>
		<tr id="deliveryName" style="display:none;">
			<th>택배사명</th>
			<td><input name="trade_delivery2" type="text" class="form-control" maxlength="50" value="<?=$trade_row->trade_delivery2?>"></td>
		</tr>
		<tr id="deliveryURL" style="display:none;">
			<th>택배사주소(URL)</th>
			<td><input name="delivery_url" type="text" class="form-control" maxlength="200" value="<?=$trade_row->delivery_url?>"></td>
		</tr>
		<tr>
			<th>송장번호</th>
			<td><input name="trade_number" type="text" class="form-control" maxlength="50" value="<?=$trade_row->trade_number?>"></td>
		</tr>
		<tr>
			<td colspan="2" class="text-center"><a href="javascript:sendit();" class="btn btn-primary">저장하기</a></td>
		</tr>
		</table>
		</form>
	</div>
</body>
</html>