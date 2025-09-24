<?
$mod	= "product";	
$menu	= "category";
include("../header.php");

if($_POST['part1_code'] ) {		

	$part_name					=	$db->filter($_POST['part_name']);
	$part_name_k				=	$db->filter($_POST['part_name_k']);
	$part1_code				=	$db->filter($_POST['part1_code']);
	$part2_code				=	$db->filter($_POST['part2_code']);
	$part3_code				=	$db->filter($_POST['part3_code']);
	$part_index					=	$db->filter($_POST['part_index']);
	$part_display_check=	$db->filter($_POST['part_display_check']);
	$part_low_check		=	$db->filter($_POST['part_low_check']);
	$content						=	$db->filter2($_POST['content']);

	//파일업로드
	if( $_FILES['bbs_file']['size'] > 0 ) {
		$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");	// 업로드 파일 제한 확장자 추가 가능
		if( $EXT_TMP = explode( ".", $_FILES['bbs_file']['name'])) {	 foreach ($EXT_CHECK as $value) { if( strstr( $value, strtolower($EXT_TMP[1]))) { $tools->errMsg( strtoupper($EXT_TMP[1])." 은 업로드 할수 없습니다." ); } }	}
		if( $_FILES['bbs_file']['size']  > 1024*1024*5) { $tools->errMsg("업로드 용량 초과입니다\\n\\n5메가 까지 업로드 가능합니다"); exit(); }
		$filename = substr($_FILES['bbs_file']['name'],-5);
		$fn = explode(".",$filename); 
		$EXT_TMP = $fn[1]; 
		$file_name	= time()."1.".$EXT_TMP;
		$sfile_name = $_FILES['bbs_file']['name'];
		if( !@move_uploaded_file($_FILES['bbs_file']['tmp_name'], "../../data/bbsData/".$file_name) ) { $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['bbs_file']['tmp_name']);	} 
	} else {
		$file_name 	= "";
	}


	$sql="part_name='$part_name',
		part_name_k='$part_name_k',
		part1_code='$part1_code',
		part2_code='$part2_code',
		part3_code='$part3_code',
		part_index='$part_index',
		part_display_check='$part_display_check',
		part_low_check='$part_low_check',
		bbs_file='$file_name',
		sbbs_file='$sfile_name',
		content='$content'";


	if( $db->insert("cs_part", $sql) ) { 
		$tools->alertMetaGo($part_index."차 카테고리 등록 되었습니다.", "./category.php");
	} else { 
		$tools->errMsg('비상적으로 입력 되었습니다.');}
} else {
	$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
}

include('../footer.php');
?>