<?
$Qs=$_SERVER["QUERY_STRING"];
$Qs=(strlen($Qs)>0)? "?".$Qs:"";
header("HTTP/1.1 301 Moved Permanently");
$var = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
if($var=="ko"){
	header("Location:http://".$_SERVER['HTTP_HOST']."/kr/index.php".$Qs);
} else {
	header("Location:http://".$_SERVER['HTTP_HOST']."/en/index.php".$Qs);
}
?>