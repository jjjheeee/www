<?
include('../header.php'); 

if($_POST['idx'])		{$idx		=	$_POST['idx'];}
if($_POST['table'])	{$table	=	$db->filter($_POST['table']);}
if($_POST['name'])	{$name	=	$db->filter($_POST['name']);}
if($_POST['val'])		{$val		=	$db->filter($_POST['val']);}

/***********************************************************************************************************/

if($name=="trade_stat"){

	$row = $db->object($table,"where idx='$idx'");

	//결제완료
	if($val==2){
		$db->update($table, "$name='$val', trade_money_ok=now() where idx='$idx'");

	//상품배송중
	}else if($val==3){
		$db->update($table, "$name='$val', delivery_day=now() where idx='$idx'");

	//배송완료
	}else if($val==4){
		//포인트 적립
		if($row->userid && $row->trade_save_point !=0) {
			$title="상품구입 주문번호 : ".$row->trade_code;
			$db->insert("cs_point", "userid='$row->userid', title='$title', point='$row->trade_save_point', register=now()");
		}
		$db->update($table, "$name='$val', sale_end_day=now() where idx='$idx'");

	//취소완료
	}else if($val==5){

		//포인트 취소
		if($row->userid && $row->trade_use_point>0) {
			$title="상품취소 주문번호 : ".$row->trade_code;
			$db->insert("cs_point", "userid='$row->userid', title='$title', point='$row->trade_use_point', register=now()");
		}

		$db->update($table, "$name='$val', cancle_day=now() where idx='$idx'");
	}

}

//등급
if($name=="level"){
	$db->update($table, "$name='$val' where idx='$idx'");
}

/***********************************************************************************************************/
include('../footer.php');
?>