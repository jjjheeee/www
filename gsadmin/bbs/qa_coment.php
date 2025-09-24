<?
$mod	= "bbs";	
include ("../header.php");

$mv_data	= $_POST['bbs_data'];
$bbs_data	= $tools->decode( $_POST['bbs_data'] );
$idx = $bbs_data['idx'];
$code = $bbs_data['code'];

if( $_POST['coment_qa'] ) {

	$coment_qa= $_POST['coment_qa'];

	// 디비에 입력
	if( $db->update("cs_bbs_data", "coment_qa='$coment_qa' where idx=$idx") ) { $tools->alertJavaGo("수정 하였습니다.", "bbs_list.php?bbs_data=$mv_data"); } else { $tools->errMsg('비상적으로 입력 되었습니다.');}
} else {
	$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
}

include('../footer.php');
?>