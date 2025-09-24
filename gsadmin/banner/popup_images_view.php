<?
include $_SERVER['DOCUMENT_ROOT']."/common.php";
$row=$db->object("cs_popup", "where idx='$_GET[idx]'");
$gu = $_GET[gu];

if($gu==1){
	$images_view = "<img src='../../data/designImages/$row->bbs_file' border='0'>";
} else if($gu==2){
	$images_view = "<img src='../../data/designImages/$row->bbs_file2' border='0'>";
} else if($gu==3){
	$images_view = "<img src='../../data/designImages/$row->bbs_file3' border='0'>";
} else if($gu==4){
	$images_view = "<img src='../../data/designImages/$row->bbs_file4' border='0'>";
} else if($gu==5){
	$images_view = "<img src='../../data/designImages/$row->bbs_file5' border='0'>";
} else {
	$images_view = "<img src='../../data/designImages/$row->popup_images' border='0'>";
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<TITLE>&nbsp;<?=$row->title_bar;?> 이미지 </TITLE>
</HEAD>
<body bgcolor="FFFFFF" text="000000" leftmargin="0" topmargin="0">
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
	<td align="center" valign="middle"><a href="javascript:window.close();" onfocus="this.blur()"><?=$images_view?></a></td>
</tr>
</table>
</body>
</html>