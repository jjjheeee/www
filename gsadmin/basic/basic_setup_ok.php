<? 
$mod	= "basic";	
$menu	= "basic_setup";
include('../header.php');

$table_name = "cs_admin";
$returnURL		= $returnURL? $returnURL:"basic_setup.php";

$mode						=	$db->filter($_POST['mode']);
$admin_userid		=	$db->filter($_POST['admin_userid']);
$admin_passwd		=	$db->filter($_POST['admin_passwd']);
$shop_name			=	$db->filter($_POST['shop_name']);
$shop_tel					=	$db->filter($_POST['shop_tel']);
$shop_email			=	$db->filter($_POST['shop_email']);
$shop_domain		=	$db->filter($_POST['shop_domain']);
$ip1 = $db->filter($_POST['ip1']);
$ip2 = $db->filter($_POST['ip2']);
$ip3 = $db->filter($_POST['ip3']);

//PW암호화
$admin_passwd		 = $tools->openssl($admin_passwd);

if($mode=="admin"){

	$sql="admin_userid='$admin_userid',
	admin_passwd='$admin_passwd',
	shop_name='$shop_name',
	shop_tel='$shop_tel',
	shop_email='$shop_email',
	shop_domain='$shop_domain',
	ip1='$ip1',
	ip2='$ip2',
	ip3='$ip3'";
	
	// 디비입력
	if( $db->cnt($table_name, ""))		{
			if( $db->update($table_name, $sql) ) { 
				$tools->alertJavaGo("저장 완료 되었습니다.", $returnURL);
			} else { 
				$tools->errMsg('비정상적으로 입력 되었습니다.'); 
			}

	} else { 
			if( $db->insert($table_name, $sql) )	{ 
				$tools->alertJavaGo("저장 완료 되었습니다.", $returnURL);
			} else { 
				$tools->errMsg('비정상적으로 입력 되었습니다.'); 
			}
	}
}else{
	$tools->errMsg('비정상적으로 입력 되었습니다.'); 
}

include('../footer.php');
?>