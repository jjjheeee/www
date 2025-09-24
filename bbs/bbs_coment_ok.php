<?
session_start();
set_time_limit(0);
header("Content-type: text/html; charset=utf-8");
include $_SERVER['DOCUMENT_ROOT']."/common.php";

$coment_reg	=	$db->filter($_POST['coment_reg']);
$idx					=	$db->filter($_POST['idx']);
$name				=	$db->filter($_POST['name']);
$pwd					=	$db->filter($_POST['pwd']);
$coment			=	$db->filter2($_POST['coment']);
$returnURL		=	$_POST['returnURL'];
$coment_idx	=	$db->filter($_GET['coment_idx']);

if( $coment_reg ) {	
	if($_SESSION['USERID']){
		$userid	= $db->filter($_SESSION['USERID']);
		$name	= $db->filter($_SESSION['NAME']);
		$pwd	= $db->filter($_SESSION['PASSWD']);
	} else {
		$pwd = $tools->openssl($pwd);
	}

	$db->insert("cs_bbs_coment", "link = '$idx', coment = '$coment', name = '$name', pwd = '$pwd', reg_date = now(), userid='$userid'");
	$tools->JavaGo("$returnURL?bgu=view&idx=$idx");
}else if($reWrite){

	$db->update("cs_bbs_coment", "coment = '$coment' where idx='$co_idx'");
	$tools->JavaGo("$returnURL?bgu=view&idx=$idx");


} else if( $coment_del ) {
	
	$co_row	= $db->object("cs_bbs_coment", "where idx='$coment_idx'");

	if($_SESSION['USERID']){

		$db->delete("cs_bbs_coment", "where idx = '$coment_idx'");
		$tools->JavaGo("$returnURL?bgu=view&idx=$co_row->link");

	} else {
	
		if( $co_row->pwd == $_POST['pwd'] ) {
			$db->delete("cs_bbs_coment", "where idx = '$coment_idx'");
			$tools->JavaGo("$returnURL?bgu=view&idx=$co_row->link");
		} else {
			$tools->errMsg("패스워드가 올바르지 않습니다.");			
		}

	}

} else {
	$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
}
?>