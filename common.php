<?
	include $_SERVER['DOCUMENT_ROOT']."/config.php";
	@include($ROOT_DIR.'/lib/basic_class.php');
	$db = new dbConnect($DB_HOST, $DB_NAME, $DB_USER, $DB_PWD);
	$db2 = mysqli_connect( $DB_HOST, $DB_USER, $DB_PWD, $DB_NAME);
	include $_SERVER['DOCUMENT_ROOT']."/lib/function.php";

	$tools = new tools();
	mysqli_query($db2,"set names utf8");


	extract($_POST);
	extract($_GET);
?>