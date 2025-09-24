<?
$mod	= "order";	
include('../header.php');

if($_SESSION['ADMIN_USERID']) {

$table_name	= "cs_trade";
$return_url = "trade.php?trade_stat=".$trade_stat.
"&search_trade_method=".$search_trade_method.
"&search_device=".$search_device.
"&search_item=".$search_item.
"&search_order=".$search_order.
"&search_sday=".$search_sday.
"&search_eday=".$search_eday;

	if($_POST['deliv_name'])		{$deliv_name		=	$db->filter($_POST['deliv_name']);}
	if($_POST['deliv_tel1'])			{$deliv_tel1			=	$db->filter($_POST['deliv_tel1']);}
	if($_POST['deliv_tel2'])			{$deliv_tel2			=	$db->filter($_POST['deliv_tel2']);}
	if($_POST['deliv_tel3'])			{$deliv_tel3			=	$db->filter($_POST['deliv_tel3']);}
	if($_POST['deliv_phone1'])		{$deliv_phone1		=	$db->filter($_POST['deliv_phone1']);}
	if($_POST['deliv_phone2'])		{$deliv_phone2		=	$db->filter($_POST['deliv_phone2']);}
	if($_POST['deliv_phone3'])		{$deliv_phone3		=	$db->filter($_POST['deliv_phone3']);}
	if($_POST['deliv_zip_new'])	{$deliv_zip_new	=	$db->filter($_POST['deliv_zip_new']);}
	if($_POST['deliv_add1'])			{$deliv_add1			=	$db->filter($_POST['deliv_add1']);}
	if($_POST['deliv_add2'])			{$deliv_add2			=	$db->filter($_POST['deliv_add2']);}
	if($_POST['deliv_content'])		{$deliv_content		=	$db->filter($_POST['deliv_content']);}
	if($_POST['trade_number'])	{$trade_number	=	$db->filter($_POST['trade_number']);}
	if($_POST['trade_delivery'])	{$trade_delivery	=	$db->filter($_POST['trade_delivery']);}
	if($_POST['trade_delivery2'])	{$trade_delivery2	=	$db->filter($_POST['trade_delivery2']);}
	if($_POST['delivery_url'])		{$delivery_url		=	$db->filter($_POST['delivery_url']);}


	if($deliv_tel1)		{$deliv_tel			= $deliv_tel1."-".$deliv_tel2."-".$deliv_tel3;}
	if($deliv_phone1)	{$deliv_phone	= $deliv_phone1."-".$deliv_phone2."-".$deliv_phone3;}


	$db->update($table_name,
		"
			deliv_name='$deliv_name',
			deliv_tel='$deliv_tel',
			deliv_phone='$deliv_phone',
			deliv_zip_new='$deliv_zip_new',
			deliv_add1='$deliv_add1',
			deliv_add2='$deliv_add2',
			deliv_content='$deliv_content',
			trade_number='$trade_number',
			trade_delivery='$trade_delivery',
			trade_delivery2='$trade_delivery2',
			delivery_url='$delivery_url' where idx=$idx
		"
	);
	$tools->javaGo($return_url);
} else {
	$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
}
?>