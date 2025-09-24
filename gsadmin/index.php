<?
if(!isset($_SERVER["HTTPS"])) {
header("Location:https://".$_SERVER[HTTP_HOST]."/gsadmin");
}
?>

<?
include $_SERVER['DOCUMENT_ROOT']."/common.php";

if(isset($_SERVER["HTTPS"])) {
	$site_host	= "https://" . $_SERVER['HTTP_HOST'];
} else {
	$site_host	= "http://" . $_SERVER['HTTP_HOST'];
}
$site_url	= $site_host."/gsadmin";
$admin_stat = $db->object("cs_admin", "");

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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="robots" content="noindex">
    <title><?=$admin_stat->shop_name;?></title>

    <link href="<?=$site_url?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="<?=$site_url?>/css/skin/dashboard.css" rel="stylesheet"> -->
    <link href="<?=$site_url?>/css/skin/signin.css" rel="stylesheet">

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
	<script src="<?=$site_url?>/js/form.js"></script>
	<script src="<?=$site_url?>/js/jquery.form.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?=$site_url?>/js/assets/ie10-viewport-bug-workaround.js"></script>

	<link href="<?=$site_host?>/css/default.css" rel="stylesheet">
	<style type="text/css">
	/* 관리자 :: 로그인 */
	html,body{height:100%; font-family:"나눔고딕", NanumGothic, "Nanum Gothic","돋움", Dotum, Arial, sans-serif;}
	#adminLoginCon{height:100%; background-color:#4b4b4b}
	.admin-company-top-con{padding:77px 0 40px; text-align:center; background-color:#fff;}
	.admin-company-top-con h1{color:#151515; font-size:45px; letter-spacing:-0.25px; font-weight:400; padding-bottom:38px;}
	.admin-company-top-con .sub-title{font-weight:400; font-size:18px; color:#353434; opacity:0.6;filter:Alpha(opacity=60);}
	.admin-company-login-con{width:96%; margin:0px auto; max-width:560px; padding:40px 0 85px;}
	.admin-company-login-con ul{border-bottom:1px solid #7d7d7d; padding-bottom:35px; margin-bottom:35px;}
	.admin-company-login-con ul li{width:100%; max-width:370px; height:55px; padding:3px; margin:20px auto 0px; background-color:#fff; box-sizing:content-box; -webkit-border-radius:30px;-moz-border-radius:30px;-o-border-radius:30px;border-radius:30px;}
	.admin-company-login-con ul li:first-child{margin-top:0;}
	.admin-company-login-con ul li label{display:inline-block; width:55px; height:55px; margin-right:15px; background:#c5c5c5 url(./images/admin_login_icon.png) no-repeat 50% 50%; -webkit-border-radius:55px;-moz-border-radius:55px;-o-border-radius:55px;border-radius:55px; vertical-align:middle;}
	.admin-company-login-con ul li.login-pwd label{background-image:url(./images/admin_pwd_icon.png)}
	.admin-company-login-con ul li .login-input{width:70%; max-width:220px; height:26px; border:0px; background:0; border-left:1px solid #e1e1e1; text-indent:15px; color:#707070; font-size:18px; letter-spacing:-0.25px; vertical-align:middle;}
	.admin-company-login-con .login-btn-controls{text-align:center; padding-bottom:80px;}
	.admin-company-login-con .to-login-btn{border:0; background:0; cursor:pointer; width:100%; max-width:370px; height:61px; margin:0px auto; text-align:left; font-family:inherit; color:#fefefe; font-size:18px; letter-spacing:-0.25px; background:#000 url(./images/login_btn_icon.png) no-repeat 92% 50%; text-indent:30px; -webkit-border-radius:30px;-moz-border-radius:30px;-o-border-radius:30px;border-radius:30px;}
	.admin-company-login-con .to-login-btn span{font-size:16px; opacity:0.4;filter:Alpha(opacity=40); margin-left:10px;}	
	.admin-company-login-con .copyright{text-align:center; color:#fefefe; opacity:0.5;filter:Alpha(opacity=50); letter-spacing:-0.1px;}

	/* 관리자, 부관리자*/
	.admin-select-controls{padding-bottom:30px; text-align:center;}
	.admin-select-controls .admin-select{display:inline-block; position:relative;}
	.admin-select-controls label{display:inline-block; color:#aaa; border:1px solid #333; width:180px; height:35px; line-height:35px; font-size:16px; cursor:pointer; text-indent:10px; -webkit-border-radius:30px;-moz-border-radius:30px;-o-border-radius:30px;border-radius:30px; vertical-align:middle;}
	.admin-select-controls .admin-select input[type="radio"]{position:absolute; top:8px; left:50%; margin-left:-50px;}
	.admin-select-controls .admin-select input[type="radio"]:checked + label{border-color:#fff; color:#fff; background-color:#555;} 
	</style>

  </head>

	<body class="login" onload="login_form.admin_userid.focus();">

	<form name="login_form" id="login_form" action="./ajax_progress.php" method="post" >
	<input type="hidden" name="login" value="1" />
	<div id="adminLoginCon">
		<div class="admin-company-top-con">
			<h1><?=$admin_stat->shop_name ?></h1>
			<h2 class="sub-title">Administrator access</h2>
		</div>
		<div class="admin-company-login-con">
			<ul>
				<li class="login-id"><label for="loginId"></label><input type="text" class="login-input" placeholder="아이디" name="admin_userid" id="loginId" title="아이디를 입력하세요" /></li>
				<li class="login-pwd"><label for="loginPwd"></label><input type="password" class="login-input" placeholder="비밀번호" name="admin_passwd" id="loginPwd" title="비밀번호를 입력하세요"/></li>
			</ul>
			<!-- <div class="admin-select-controls">
				<span class="admin-select"><input type="radio" name="log_ck" id="a" value="1"  checked/><label for="a">관리자</label></span>
				<span class="admin-select"><input type="radio" name="log_ck" id="b" value="2" /><label for="b">부관리자</label></span>
			</div> -->
			<div class="login-btn-controls"><button type="submit" class="to-login-btn">로그인<span>LOGIN</span></button></div>
			<p class="copyright">Copyright &copy; <?=$admin_stat->shop_name ?>. All right reserved.</p>
		</div>
	</div>
	</form>

	</body>
</html>


