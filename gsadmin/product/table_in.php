<?
extract($_POST);
extract($_GET);
$mod	= "product";	
$menu	= "product";
include("../header.php");

$code = $_POST['code'];
$tablew = $_POST['tablew'];
$tableh = $_POST['tableh'];
$cate1 = $_POST['cate1'];
if($cate1){
	$cate = $cate1;
}

if($code && $tablew && $tableh){

	for($i=1;$i<=20;$i++){
		if($tablew>=$i){

		} else {
			${"w_name".$i} = "";
		}
	}

	$db->insert("cs_goods_tablew","code='$code', cate='$cate', name1='$w_name1', name2='$w_name2', name3='$w_name3', name4='$w_name4', name5='$w_name5', name6='$w_name6', name7='$w_name7', name8='$w_name8', name9='$w_name9', name10='$w_name10', name11='$w_name11', name12='$w_name12', name13='$w_name13', name14='$w_name14', name15='$w_name15', name16='$w_name16', name17='$w_name17', name18='$w_name18', name19='$w_name19', name20='$w_name20'");

	for($i=1;$i<=$tablew;$i++){
		
		$nquery = "";
		for($j=1;$j<=$tableh;$j++){
			$nquery.=",name".$i."='".${"h_name".$i."_".$j}."'";
		}
		$db->insert("cs_goods_tableh","code='$code', cate='$cate', num='$i' $nquery");
	}

}
?>