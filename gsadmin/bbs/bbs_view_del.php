<?
extract($_POST);
extract($_GET);
$mod	= "bbs";	
include("../header.php");

$table_name	= "cs_bbs_data";
$returnURL		= $returnURL? $returnURL:"bbs_list.php";

if( $bbs_view_del ) {
	$row = $db->object($table_name, "where idx = $idx", "pwd, bbs_file,bbs_file2,bbs_file3,bbs_file4,bbs_file5,sum_file");
		// 자료실 삭제
		if(empty($row->sbbs_file))	{@unlink("../../data/bbsData/".$row->bbs_file); }
		if(empty($row->sbbs_file2)) {@unlink("../../data/bbsData/".$row->bbs_file2); }
		if(empty($row->sbbs_file3)) {@unlink("../../data/bbsData/".$row->bbs_file3); }
		if(empty($row->sbbs_file4)) {@unlink("../../data/bbsData/".$row->bbs_file4); }
		if(empty($row->sbbs_file5)) {@unlink("../../data/bbsData/".$row->bbs_file5); }
		if(empty($row->sum_sfile))	{@unlink("../../data/bbsData/".$row->sum_file); }

		


		// 코멘트 삭제
		$db->delete("cs_bbs_coment", "where link = $idx");
		// 작성글 삭제
		$db->delete($table_name, "where idx = $idx");
		$tools->javaGo($returnURL);

} else {
	$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
}

include('../footer.php');
?>