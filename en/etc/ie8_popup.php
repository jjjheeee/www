<?
$site_host = "http://".$_SERVER["HTTP_HOST"];
?>
<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>브라우저 업데이트 안내</title>
<meta name="viewport" content="width=device-width, initial-scale=1"><!-- 모바일사이트, 반응형사이트 제작시 사용 -->

<link rel="stylesheet" href="<?=$site_host?>/css/default.css">
<script src="<?=$site_host?>/js/vendor/jquery-1.8.3.min.js"></script>

</head>

<body>

<div class="popup-img">
	<img src="<?=$site_host?>/images/content/ie8_popup.png" alt="브라우저 업데이트 안내" />
</div>
</body>
</html>
