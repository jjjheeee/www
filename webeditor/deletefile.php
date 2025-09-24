<?
session_start();
include $_SERVER['DOCUMENT_ROOT']."/common.php";
//한글
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

<?
$exp_delete_file = explode("/",$delete_file);
$r_del_file = $exp_delete_file[sizeof($exp_delete_file)-1];

$delete_file_url = "$ROOT_DIR/data/plupload/$r_del_file";
if(file_exists($delete_file_url)){
	unlink($delete_file_url);
}
?>

</body>
</html>
