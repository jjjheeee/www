<?
include $_SERVER['DOCUMENT_ROOT']."/common.php";

//옵션 삭제
if($_GET['idx'])	{$idx	=	$db->filter($_GET['idx']);}
$db->delete("cs_option", "where idx='$idx'");
?>