<?
include("../header2.php");



$code = $_POST['code'];
$title = $_POST['title'];

$ranking = $_POST['ranking'];
$mode = $_POST['mode'];

if($mode==""){ $mode = $_GET['mode']; }


if($mode=="write"){

	echo "aaa";

	// 파일업로드 
	$EXT_CHECK = array("php","php3","php4","htm","html","cgi","perl","inc","exe","phtml","pl","asp","jsp","dll");	// 업로드 파일 제한 확장자 추가 가능
	
	if( $_FILES['bbs_file']['size'] > 0 ) {
		if( $_FILES['bbs_file']['size']  > 1024*1024*100) { $tools->errMsg("업로드 용량 초과입니다\\n\\n100메가 까지 업로드 가능합니다"); exit(); }
		$filename = substr($_FILES['bbs_file']['name'],-5);
		$fn = explode(".",$filename); 
		$EXT_TMP = $fn[1]; 
		if($EXT_TMP){ foreach ($EXT_CHECK as $value) { if( strstr( $value, strtolower($EXT_TMP))) { $tools->errMsg( strtoupper($EXT_TMP)." 은 업로드 할수 없습니다." ); exit(); } }	}
		$file_name	= time()."1.".$EXT_TMP;
		$sfile_name = $_FILES['bbs_file']['name'];
		if( !@move_uploaded_file($_FILES['bbs_file']['tmp_name'], $ROOT_DIR."/data/bbsData/".$file_name) ) { $tools->errMsg("파일 업로드 에러"); exit(); } else { @unlink($_FILES['bbs_file']['tmp_name']);	} 
	} else {
		$file_name 	= "";
	}

	$db->insert("cs_goods_file","code='$code', title='$title', bbs_file='$file_name', sbbs_file='$sfile_name', ranking='$ranking'");

	$tools->alertJavaGo("입력 하였습니다.","product_file.php?code=".$code);

}

if($mode=="edit"){

	$idx = $_POST['idx'];

// 파일업로드 
	$bbs_data_stat = $db->object("cs_goods_file", "where idx=$idx", "bbs_file, sbbs_file");

	// 파일업로드 
	$EXT_CHECK = array("php","php3","php4","htm","html","cgi","perl","inc","exe","phtml","pl","asp","jsp","dll");	// 업로드 파일 제한 확장자 추가 가능
	
	if($imdel1=="y"){
		$file_name = "";
		$sfile_name = "";
	} else {
		if( $_FILES['bbs_file']['size'] > 0 ) {
			
			if( $_FILES['bbs_file']['size']  > 1024*1024*100) { $tools->errMsg("업로드 용량 초과입니다\\n\\n100메가 까지 업로드 가능합니다"); exit(); }
			$filename = substr($_FILES['bbs_file']['name'],-5);
			$fn = explode(".",$filename); 
			$EXT_TMP = $fn[1]; 
			if($EXT_TMP){ foreach ($EXT_CHECK as $value) { if( strstr( $value, strtolower($EXT_TMP))) { $tools->errMsg( strtoupper($EXT_TMP)." 은 업로드 할수 없습니다." ); exit(); } }	}
			$file_name	= time()."1.".$EXT_TMP;
			$sfile_name = $_FILES['bbs_file']['name'];
			if( !@move_uploaded_file($_FILES['bbs_file']['tmp_name'], $ROOT_DIR."/data/bbsData/".$file_name) ) { $tools->errMsg("파일 업로드 에러"); exit(); } else { @unlink($_FILES['bbs_file']['tmp_name']);	} 	

			@unlink( "../../data/bbsData/".$bbs_data_stat->bbs_file );

		} else {
			$file_name 	= $bbs_data_stat->bbs_file;
			$sfile_name = $bbs_data_stat->sbbs_file;
		}
	}


	$db->update("cs_goods_file","title='$title', bbs_file='$file_name', sbbs_file='$sfile_name', ranking='$ranking' where idx='$idx'");

	$tools->alertJavaGo("수정 하였습니다.","product_file.php?code=".$code);

}

if($mode=="del"){

	$idx = $_GET['idx'];

	$bbs_stat = $db->object("cs_goods_file", "where idx = $idx", "bbs_file");

	if($bbs_stat->bbs_file){ @unlink("../../data/bbsData/".$bbs_stat->bbs_file); }
	
	$db->delete("cs_goods_file","where idx='$idx'");

	$tools->alertJavaGo("삭제 하였습니다.","product_file.php?code=".$_GET[code]);

}
?>