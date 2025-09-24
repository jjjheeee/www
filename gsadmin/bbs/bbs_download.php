<?
include('../../common.php'); 

if($_GET['idx'])				{$idx				= 	$db->filter($_GET['idx']);}
if($_GET['code'])			{$code			= 	$db->filter($_GET['code']);}
if($_GET['download'])	{$download	= 	$db->filter($_GET['download']);}

// 파일 다운로드
if( $download ) {
	$row= $db->object( "cs_bbs_data", "where idx=$idx");
	if($download==1){
		$fn = iconv("utf-8","euc-kr",$row->bbs_file);
		$bbs_file = iconv("utf-8","euc-kr",urlencode($row->sbbs_file));
	} else{
		$file_form = "bbs_file".$download;
		$sfile_form = "sbbs_file".$download;
		$fn =  iconv("utf-8","euc-kr",$row->$file_form);
		$bbs_file = iconv("utf-8","euc-kr",urlencode($row->$sfile_form));
	}
	$file_dir = "../../data/bbsData";
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
	ob_clean();
	flush();
	if ($fp = fopen("$file_dir/$fn", "rb")) { 
		if (!fpassthru($fp)) fclose($fp); 
		exit(); 
	}
} else {
	$tools->errMsg('경 고\n비정상적으로 접근했습니다.');
}
?>