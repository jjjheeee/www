<?
$mod	= "excel";	
$menu	= "excel";
include("../../header.php");
//include($ROOT_DIR."/lib/page_class.php");
?>
<?
if(strcmp($exceilFile,"")) {

	$savedir7 = $_SERVER['DOCUMENT_ROOT']."/data/csv";
        
	   $full_filename7 = explode(".", "$exceilFile_name");
	   $extension7 = $full_filename7[sizeof($full_filename7)-1];	  
	
		if($extension7=="xls"){

		   if(!strcmp($extension7,"html") || 
			  !strcmp($extension7,"htm") ||
			  !strcmp($extension7,"php") ||
			  !strcmp($extension7,"php3") ||
			  !strcmp($extension7,"pl") ||
			  !strcmp($extension7,"cgi") ||
			  !strcmp($extension7,"txt") ||
			  !strcmp($extension7,"asp") ||
			  !strcmp($extension7,"") ||
			  !strcmp($extension7,"phtml")) 
		   { 
			  error("NOACCESS_EXTENSION");
			  exit;
		   }

		   $exceilFile_name = date("YmdHis").".".$extension7;

		   if(!copy($exceilFile,"$savedir7/$exceilFile_name")) {
			  error("업로드 실패");
			  exit;
		   }

		   if(!unlink($exceilFile)) {
			  error("삭제 실패");
			  exit;
		   }
		  

		$tools->javaGo("./excel_ok.php?exceilFile_name=".$exceilFile_name);
	}else{
		$tools->alertJavaGo("파일확장자를 확인해주시기 바랍니다.","./excel_write.php");
	}

	
}else{
	$tools->alertJavaGo("엑셀파일을 등록해주세요.","./excel_write.php");
}
?>