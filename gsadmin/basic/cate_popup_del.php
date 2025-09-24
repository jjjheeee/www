<?
include('../header.php');

	$query = "delete from cs_cate where idx='$idx'";
	mysqli_query($db2,$query);

	$tools->javaGo("cate_popup.php?table_name=".$table_name."&code=".$code);

include('../footer.php');
?>