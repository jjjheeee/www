<?
if (!!(FALSE !== strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile')) != 1) {
    // PC 브라우저
	include $_SERVER['DOCUMENT_ROOT']."/webeditor/webeditor_area_pc.php";
} else {
    // 모바일 브라우저
	include $_SERVER['DOCUMENT_ROOT']."/webeditor/webeditor_area_mobile.php";
}
?>