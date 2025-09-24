<?session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?
include('../common.php');
$admin_stat=$db->object("cs_admin", "");
if( $_GET['logout']==1) {
	$_SESSION['ADMIN_USERID'] = "";
	$_SESSION['ADMIN_NAME'] = "";
	$_SESSION['ADMIN_EMAIL'] = "";
	$_SESSION['ADMIN_PASSWD'] = "";
	$tools->javaGo('index.php');
} else {
	$_SESSION['ADMIN_USERID'] = "";
	$_SESSION['ADMIN_NAME'] = "";
	$_SESSION['ADMIN_EMAIL'] = "";
	$_SESSION['ADMIN_PASSWD'] = "";
	if($_POST['admin_userid'] == $admin_stat->admin_userid && $_POST['admin_passwd'] == $admin_stat->admin_passwd) {
		$ADMIN_USERID		= $admin_stat->admin_userid;
		$ADMIN_PASSWD	= $admin_stat->admin_passwd;
		$ADMIN_EMAIL		= $admin_stat->shop_email;
		$ADMIN_NAME		= "관리자";
		$_SESSION['ADMIN_USERID'] = $ADMIN_USERID;
		$_SESSION['ADMIN_NAME'] = $ADMIN_NAME;
		$_SESSION['ADMIN_EMAIL'] = $ADMIN_EMAIL;
		$_SESSION['ADMIN_PASSWD'] = $ADMIN_PASSWD;
		$tools->javaGo('./main.php'); 
	} else {
		$tools->errMsg('관리자의 아이디와 패스워드가 올바르지 않습니다.');
	}
}
?>