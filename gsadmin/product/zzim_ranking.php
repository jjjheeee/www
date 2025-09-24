<?
include("../header.php");

$db_name	= "cs_zzim";
$ranking=1;

for($i=0;$i<count($check_list);$i++) {

	$query = "update $db_name set ranking='$ranking' where idx='$check_list[$i]'";
	mysqli_query($db2,$query);

$ranking++;
}

include('../footer.php');
?>