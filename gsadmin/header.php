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

if($admin_stat->ip1 or $admin_stat->ip2 or $admin_stat->ip3){

	$uip = $_SERVER['REMOTE_ADDR'];

	if($uip==$admin_stat->ip1 or $uip==$admin_stat->ip2 or $uip==$admin_stat->ip3){
	} else {
		echo "<meta charset='utf-8'>";
		$tools->alertJavaGo("비정상적인 접근 입니다.","/");
	}

}
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

    <title><?=$admin_stat->shop_name;?> 관리자</title>

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
	<script src="<?=$site_url?>/js/admin.js"></script>
	<? if(!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS']==""){ ?>
	<script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>
	<? } else { ?>
	<script src="https://ssl.daumcdn.net/dmaps/map_js_init/postcode.v2.js"></script>
	<? } ?>
	<!-- <script src="https://ssl.daumcdn.net/dmaps/map_js_init/postcode.v2.js"></script> -->

	 <!-- calendar 
	 ==================================================-->
	<link rel="stylesheet" type="text/css" media="screen" href="<?=$site_url?>/calendar/css/bootstrap-datetimepicker.min.css" />
	<script type="text/javascript" src="<?=$site_url?>/calendar/js/moment.js"></script>
	<script type="text/javascript" src="<?=$site_url?>/calendar/js/bootstrap-datetimepicker.js"></script>
	

  </head>
  <body>


<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><font color=white><?=$admin_stat->shop_name;?></font></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/" class="navbar-link" target="_blank">사용자 메인</a></li>
            <li><?if($_SESSION['ADMIN_USERID']){?><a href="<?=$site_url?>/ajax_progress.php?logout=1" class="navbar-link">로그아웃</a><?}?></li>
          </ul>
          <ul class="nav navbar-nav navbar-left">
			<!-- 상단메뉴 -->
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">설정관리 <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
                    <li><a href="<?=$site_url?>/basic/basic_setup.php">관리자 기본정보</a></li>
                    <li><a href="<?=$site_url?>/basic/page.php">이용약관 설정</a></li>
					<li><a href="<?=$site_url?>/basic/seo_setup.php">검색엔진 최적화(SEO)</a></li>
               </ul>
			</li>


			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">게시판관리 <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<!-- <li><a href="<?=$site_url?>/bbs/bbs_admin.php">게시판생성</a></li> -->
					<li><a href="<?=$site_url?>/etc/history/history_list.php">연혁관리</a></li>
					<?
					$rs = $db->select("cs_bbs","where 1 order by idx asc");
					while($row = mysqli_fetch_array($rs)){
					?>
					<li><a href="<?=$site_url?>/bbs/bbs_list.php?code=<?=$row['code'];?>"><?=$row['name'];?></a></li>
					<?}?>
               </ul>
			</li>

			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">제품관리 <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
                    <li><a href="<?=$site_url?>/product/product.php">제품관리(영문)</a></li>
					<li><a href="<?=$site_url?>/product/product_k.php">제품관리(국문)</a></li>
                    <li><a href="<?=$site_url?>/category/category.php">카테고리관리</a></li>
					<!-- <li><a href="<?=$site_url?>/category/category_ranking.php">카테고리 순위설정</a></li> -->
               </ul>
			</li>


			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">신청서관리 <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
                    <li><a href="<?=$site_url?>/online/online.php">온라인 신청서</a></li>
               </ul>
			</li>


			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">배너관리 <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
                    <li><a href="<?=$site_url?>/banner/banner.php">배너 관리</a></li>
					<li><a href="<?=$site_url?>/banner/popup.php">팝업배너 관리</a></li>
               </ul>
			</li>


			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">접속통계 <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
                    <li><a href="<?=$site_url?>/stat/crm5.php">접속로그</a></li>
               </ul>
			</li>


			 <!-- //상단메뉴 -->
          </ul>

        </div>
      </div>
    </nav>


	<div class="col-sm-3 col-md-2 sidebar">
		<div class="row">
            <div class="panel panel-default">

				<?if( $mod == "" ){?>
				<div class="panel-heading"><h3 class="panel-title">관리자</h3></div>
				<?}?>


				<?if( $mod == "basic" ){?>
				<div class="panel-heading"><h3 class="panel-title">설정관리</h3></div>
					<a href="<?=$site_url?>/basic/basic_setup.php" class="list-group-item <?if($menu=="basic_setup"){?>active<?}?>">관리자 기본정보</a>
					<a href="<?=$site_url?>/basic/page.php" class="list-group-item <?if($menu=="page"){?>active<?}?>">이용약관 설정</a>
					<a href="<?=$site_url?>/basic/seo_setup.php" class="list-group-item <?if($menu=="seo_setup"){?>active<?}?>">검색엔진 최적화(SEO)</a>
				<?}?>


				<?if( $mod == "bbs" ){?>
				<div class="panel-heading"><h3 class="panel-title">게시판관리</h3></div>
					<a href="<?=$site_url?>/etc/history/history_list.php" class="list-group-item <?if($menu=="history"){?>active<?}?>">연혁관리</a>
					<?
					$rs = $db->select("cs_bbs","where 1 order by idx asc");
					while($row = mysqli_fetch_array($rs)){
					?>
					<a href="<?=$site_url?>/bbs/bbs_list.php?code=<?=$row['code']?>" class="list-group-item <?if($row['code']==$code){?>active<?}?>"><?=$row['name']?></a>
					<?}?>
				<?}?>



				<?if( $mod == "product" ){?>
				<div class="panel-heading"><h3 class="panel-title">제품관리</h3></div>
					<a href="<?=$site_url?>/product/product.php" class="list-group-item <?if($menu=="product"){?>active<?}?>">제품관리(영문)</a>
					<a href="<?=$site_url?>/product/product_k.php" class="list-group-item <?if($menu=="product_k"){?>active<?}?>">제품관리(국문)</a>
					<a href="<?=$site_url?>/category/category.php" class="list-group-item <?if($menu=="category"){?>active<?}?>">카테고리관리</a>
				<?}?>

				<?if( $mod == "online" ){?>
				<div class="panel-heading"><h3 class="panel-title">신청서관리</h3></div>
					<a href="<?=$site_url?>/online/online.php" class="list-group-item <?if($menu=="online"){?>active<?}?>">온라인 신청서</a>
				<?}?>


				<?if( $mod == "banner" ){?>
				<div class="panel-heading"><h3 class="panel-title">배너관리</h3></div>
					<a href="<?=$site_url?>/banner/banner.php" class="list-group-item <?if($menu=="banner"){?>active<?}?>">배너 관리</a>
					<a href="<?=$site_url?>/banner/popup.php" class="list-group-item <?if($menu=="popup"){?>active<?}?>">팝업배너 관리</a>
				<?}?>


				<?if( $mod == "stat" ){?>
				<div class="panel-heading"><h3 class="panel-title">통계관리</h3></div>
					<a href="<?=$site_url?>/stat/crm5.php" class="list-group-item <?if($menu=="crm5"){?>active<?}?>">접속로그</a>
				<?}?>

	
		</div><!-- /.panel panel-default -->

    </div><!-- /.row -->
 </div><!-- /.col-sm-3 col-md-2 sidebar -->


	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" ><!-- 테이블 위치 -->