<?
$mod	= "bbs";	
include("../header.php");
?>
<?
if( $_GET['idx'] ) {
	$bbs_stat = $db->object("cs_bbs", "where idx=$_GET[idx]", "code");
	if($bbs_stat->code=="notice") { $tools->errMsg('공지사항은 삭제할수 없습니다');}
	
	// 코멘트 및 파일 삭제
	$bbs_result = $db->select("cs_bbs_data", "where code='$bbs_stat->code'", "idx, bbs_file");
	while( $bbs_row = @mysqli_fetch_object( $bbs_result )) {
		$db->delete("cs_bbs_coment", "where link = $bbs_row->idx");
		if( $bbs_row->bbs_file != "none" ) { @unlink($ROOT_DIR."/data/bbsData/".$bbs_row->bbs_file); }		
	}
	
	$db->delete("cs_bbs_data", "where code='$bbs_stat->code'");
	$db->delete("cs_bbs", "where idx=$_GET[idx]");
	$tools->alertMetaGo("게시판 삭제완료", "bbs_admin.php");
} else {
	$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
}

include('../footer.php');
?>