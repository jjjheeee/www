<?
session_cache_limiter("");
session_start();
include $_SERVER['DOCUMENT_ROOT']."/common.php";

if(isset($_SERVER["HTTPS"])) {
	$site_host	= "https://" . $_SERVER['HTTP_HOST'];
} else {
	$site_host	= "http://" . $_SERVER['HTTP_HOST'];
}
$site_url	= $site_host."/gsadmin";
$admin_stat = $db->object("cs_admin","");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="robots" content="noindex">

	<?if( !$_SESSION['ADMIN_USERID'] || !$_SESSION['ADMIN_PASSWD']) { $tools->alertJavaGo('경고! 잘못된 접근입니다\n\n로그인 하세요', $site_url);}?>

    <title><?=$admin_stat->shop_name;?></title>

    <link href="<?=$site_url?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=$site_url?>/css/skin/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="<?=$site_url?>/js/assets/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?=$site_url?>/js/assets/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?=$site_url?>/js/bootstrap.min.js"></script>
    <script src="<?=$site_url?>/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?=$site_url?>/js/assets/ie10-viewport-bug-workaround.js"></script>

	<!-- ETC JavaScript
	==================================================-->
	<script src="<?=$site_url?>/js/admin.js?v=<?=time();?>"></script>
	<? if(!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS']==""){ ?>
	<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
	<? } else { ?>
	<script src="https://ssl.daumcdn.net/dmaps/map_js_init/postcode.v2.js"></script>
	<? } ?>

	 <!-- calendar 
	 ==================================================-->
	<link rel="stylesheet" type="text/css" media="screen" href="<?=$site_url?>/calendar/css/bootstrap-datetimepicker.min.css" />
	<script type="text/javascript" src="<?=$site_url?>/calendar/js/moment.js"></script>
	<script type="text/javascript" src="<?=$site_url?>/calendar/js/bootstrap-datetimepicker.js"></script>
	<style type="text/css">
	.page-header{
		margin:10px 0 10px;
	}
	</style>
  </head>
  <body style="padding-top:0px ;">
	<div ><!-- 테이블 위치 -->