<?
include("../header.php");

$table_name = "cs_cate";

if($_GET['mode'])		{$mode				=	$db->filter($_GET['mode']);}		else{$mode	=	$db->filter($_POST['mode']);}
if($_GET['idx'])		{$idx				=	$db->filter($_POST['idx']);}
if($_GET['code'])		{$code				=	$db->filter($_GET['code']);}			else{$code	=	$db->filter($_POST['code']);}
if($_GET['name'])		{$name				=	$db->filter($_GET['name']);}		else{$name	=	$db->filter($_POST['name']);}

if($mode=="write"){

	$max_no = @mysqli_fetch_row($db->result("select max(no) from $table_name where code='$code'"));
	$no = $max_no[0]+1;

	$query = "insert into cs_cate set code='$code', name='$name', no='$no'";
	mysqli_query($db2,$query);

	$tools->alertJavaGo("등록 하였습니다.","cate_popup.php?code=".$code);
}

if($mode=="edit"){

	$query = "update cs_cate set name='$name' where idx='$idx'";
	mysqli_query($db2,$query);

}

include("../footer.php");
?>