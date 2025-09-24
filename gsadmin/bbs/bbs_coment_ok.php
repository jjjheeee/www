<?
$mod	= "bbs";	
include("../header.php");

if($_GET['idx'])					{$idx					=	$db->filter($_GET['idx']);}
if($_GET['code'])				{$code				=	$db->filter($_GET['code']);}

if($_POST['coment_idx'])	{$coment_idx	=	$db->filter($_POST['coment_idx']);}
if($_POST['pwd'])				{$pwd				=	$db->filter($_POST['pwd']);}
if($_POST['name'])				{$name				=	$db->filter($_POST['name']);}
if($_POST['coment'])			{$coment			=	$db->filter2($_POST['coment']);}

if( $_POST['coment_reg'] ) {	
	// 코멘트 등록	
	$db->insert("cs_bbs_coment", "link = $idx, coment = '$coment', name = '$name', pwd = '$pwd', reg_date = now()");
	$tools->alertJavaGo("등록 하였습니다.", "bbs_view.php?code=$code&idx=$idx");
} else if( $_POST['coment_del'] ) {
	// 코멘트 삭제
	$co_row	= $db->object("cs_bbs_coment", "where idx=$coment_idx", "pwd");
	if( $co_row->pwd == $pwd || $_SESSION['ADMIN_PASSWD']==$pwd ) {
		$db->delete("cs_bbs_coment", "where idx = $coment_idx");
		$tools->alertJavaGo("삭제 하였습니다.", "bbs_view.php?code=$code&idx=$idx");
	} else {
		$tools->errMsg("패스워드가 올바르지 않습니다.");			
	}
} else {
	$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
}

include('../footer.php');
?>