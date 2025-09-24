<?
include $_SERVER['DOCUMENT_ROOT']."/common.php";

if($_GET['idx'])				{$idx					=	$db->filter($_GET['idx']);}
if($_GET['download'])	{$download		=	$db->filter($_GET['download']);}

// 파일 다운로드
if( $download ) {
	$row	= $db->object( "cs_bbs_data", "where idx='$idx'", "bbs_file, bbs_file2, bbs_file3, bbs_file4, bbs_file5, sbbs_file, sbbs_file2, sbbs_file3, sbbs_file4, sbbs_file5" );
	if($download==1){
		$fn = $row->bbs_file;
		$bbs_file = iconv("utf-8","euc-kr",urlencode($row->sbbs_file));
	} else if($download==2){
		$fn = $row->bbs_file2;
		$bbs_file = iconv("utf-8","euc-kr",urlencode($row->sbbs_file2));
	} else if($download==3){
		$fn = $row->bbs_file3;
		$bbs_file = iconv("utf-8","euc-kr",urlencode($row->sbbs_file3));
	} else if($download==4){
		$fn = $row->bbs_file4;
		$bbs_file = iconv("utf-8","euc-kr",urlencode($row->sbbs_file4));
	} else if($download==5){
		$fn = $row->bbs_file5;
		$bbs_file = iconv("utf-8","euc-kr",urlencode($row->sbbs_file5));
	}
	$file_dir = "../data/bbsData";
	 $ftype = "application/octet-stream";
	if(preg_match("/(MSIE 5.0|MSIE 5.1|MSIE 5.5|MSIE 6.0)/i", $HTTP_USER_AGENT)){ 
		Header("Content-type: $ftype"); 
		Header("Content-Length: ".filesize("$file_dir/$fn"));     
		Header("Content-Disposition: attachment;  filename=$bbs_file");   
		Header("Content-Transfer-Encoding: binary");   
		Header("Pragma: no-cache");   
		Header("Expires: 0");   
	} else { 
		Header("Content-type: file/unknown");     
		Header("Content-Length: ".filesize("$file_dir/$fn"));     
		Header("Content-Disposition: attachment;  filename=$bbs_file");   
		Header("Content-Description: PHP3 Generated Data"); 
		Header("Pragma: no-cache"); 
		Header("Expires: 0"); 
	}
	if ($fp = fopen("$file_dir/$fn", "rb")) { 
		if (!fpassthru($fp)) fclose($fp); 
		exit(); 
	}
} else {
	$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
}
?>