<?
session_start();
include $_SERVER['DOCUMENT_ROOT']."/common.php";

if($_POST['login']==1){

if($_POST['admin_userid'])		{$admin_userid		= 	$db->filter($_POST['admin_userid']);}
if($_POST['admin_passwd'])	{$admin_passwd	= 	$db->filter($_POST['admin_passwd']);}

$admin_passwd = $tools->openssl($admin_passwd);

//계정생성
if(!$db->cnt("cs_admin", "")){
	$db->insert("cs_admin", "admin_userid='$admin_userid', admin_passwd='$admin_passwd'");
}

$query="select * from cs_admin where admin_userid='$admin_userid' and admin_passwd='$admin_passwd'";
$rs=mysqli_query($db2,$query);
$cnt=mysqli_num_rows($rs);

	if($cnt){
		$row=mysqli_fetch_object($rs);
		/*
		@session_register("ADMIN_USERID")	or die("session_register err");
		@session_register("ADMIN_PASSWD")	or die("session_register err");
		@session_register("ADMIN_EMAIL")	or die("session_register err");
		@session_register("ADMIN_NAME")	or die("session_register err");
		*/
		$ADMIN_USERID				= $row->admin_userid;
		$ADMIN_PASSWD			= $row->admin_passwd;
		$ADMIN_EMAIL				= $row->shop_email;
		$ADMIN_NAME				= "관리자";

		$_SESSION['ADMIN_USERID']	= $ADMIN_USERID;
		$_SESSION['ADMIN_NAME']		= $ADMIN_NAME;
		$_SESSION['ADMIN_EMAIL']		= $ADMIN_EMAIL;
		$_SESSION['ADMIN_PASSWD']	= $ADMIN_PASSWD;

		echo "y";

		$log_txt = fopen("log.txt", "a");  
		$txt = date("Y-m-d H:i:s")." [LOGIN] ".$_SERVER['REMOTE_ADDR'];
		fwrite($log_txt, $txt."\r\n");
		fclose($log_txt);

	}else{
		
		echo "n";

	}

}else if($_GET['logout']==1){

	$_SESSION['ADMIN_USERID'] = "";
	$_SESSION['ADMIN_NAME'] = "";
	$_SESSION['ADMIN_EMAIL'] = "";
	$_SESSION['ADMIN_PASSWD'] = "";
	$tools->javaGo('index.php');
}
?>