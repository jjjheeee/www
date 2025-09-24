<?
include("../header2.php");

$code = $_POST['code'];
$tablew = $_POST['tablew'];
$tableh = $_POST['tableh'];
$cate = $_POST['cate'];
$mode = $_POST['mode'];
if($mode==""){ $mode = $_GET['mode']; }
$title = $_POST['title'];
$head_title = $_POST['head_title'];

if($mode=="write"){

	for($i=1;$i<=50;$i++){
		if($tablew>=$i){

		} else {
			${"w_name".$i} = "";
		}
	}

	$db->insert("cs_goods_tablew","code='$code', cate='$cate', name1='$w_name1', name2='$w_name2', name3='$w_name3', name4='$w_name4', name5='$w_name5', name6='$w_name6', name7='$w_name7', name8='$w_name8', name9='$w_name9', name10='$w_name10', name11='$w_name11', name12='$w_name12', name13='$w_name13', name14='$w_name14', name15='$w_name15', name16='$w_name16', name17='$w_name17', name18='$w_name18', name19='$w_name19', name20='$w_name20', name21='$w_name21', name22='$w_name22', name23='$w_name23', name24='$w_name24', name25='$w_name25', name26='$w_name26', name27='$w_name27', name28='$w_name28', name29='$w_name29', name30='$w_name30', name31='$w_name31', name32='$w_name32', name33='$w_name33', name34='$w_name34', name35='$w_name35', name36='$w_name36', name37='$w_name37', name38='$w_name38', name39='$w_name39', name40='$w_name40', name41='$w_name41', name42='$w_name42', name43='$w_name43', name44='$w_name44', name45='$w_name45', name46='$w_name46', name47='$w_name47', name48='$w_name48', name49='$w_name49', name50='$w_name50', head_title='$head_title', title='$title', ranking='$ranking'");

	$query = "select max(idx) from cs_goods_tablew";
	$rs = mysqli_query($db2,$query);
	$row = mysqli_fetch_array($rs);
	$keyidx = $row[0];

	for($i=1;$i<=$tableh;$i++){
		
		$nquery = "";
		for($j=1;$j<=$tablew;$j++){
			$nquery.=",name".$j."='".${"h_name".$i."_".$j}."'";
		}
		$db->insert("cs_goods_tableh","code='$code', cate='$cate', keyidx='$keyidx', num='$i' $nquery");
	}

	$tools->alertJavaGo("입력 하였습니다.","table1.php?code=".$code);

}

if($mode=="edit"){

	$idx = $_POST['idx'];

	$db->update("cs_goods_tablew","name1='$w_name1', name2='$w_name2', name3='$w_name3', name4='$w_name4', name5='$w_name5', name6='$w_name6', name7='$w_name7', name8='$w_name8', name9='$w_name9', name10='$w_name10', name11='$w_name11', name12='$w_name12', name13='$w_name13', name14='$w_name14', name15='$w_name15', name16='$w_name16', name17='$w_name17', name18='$w_name18', name19='$w_name19', name20='$w_name20', name21='$w_name21', name22='$w_name22', name23='$w_name23', name24='$w_name24', name25='$w_name25', name26='$w_name26', name27='$w_name27', name28='$w_name28', name29='$w_name29', name30='$w_name30', name31='$w_name31', name32='$w_name32', name33='$w_name33', name34='$w_name34', name35='$w_name35', name36='$w_name36', name37='$w_name37', name38='$w_name38', name39='$w_name39', name40='$w_name40', name41='$w_name41', name42='$w_name42', name43='$w_name43', name44='$w_name44', name45='$w_name45', name46='$w_name46', name47='$w_name47', name48='$w_name48', name49='$w_name49', name50='$w_name50', head_title='$head_title', title='$title', ranking='$ranking' where idx='$idx'");

	$i=1;
	$rs2 = $db->select("cs_goods_tableh","where code='$code' and cate='1' and keyidx='$idx' order by num asc");
	while($row2 = mysqli_fetch_object($rs2)){

		$h_name1 = ${"h_name".$i."_1"};
		$h_name2 = ${"h_name".$i."_2"};
		$h_name3 = ${"h_name".$i."_3"};
		$h_name4 = ${"h_name".$i."_4"};
		$h_name5 = ${"h_name".$i."_5"};
		$h_name6 = ${"h_name".$i."_6"};
		$h_name7 = ${"h_name".$i."_7"};
		$h_name8 = ${"h_name".$i."_8"};
		$h_name9 = ${"h_name".$i."_9"};
		$h_name10 = ${"h_name".$i."_10"};
		$h_name11 = ${"h_name".$i."_11"};
		$h_name12 = ${"h_name".$i."_12"};
		$h_name13 = ${"h_name".$i."_13"};
		$h_name14 = ${"h_name".$i."_14"};
		$h_name15 = ${"h_name".$i."_15"};
		$h_name16 = ${"h_name".$i."_16"};
		$h_name17 = ${"h_name".$i."_17"};
		$h_name18 = ${"h_name".$i."_18"};
		$h_name19 = ${"h_name".$i."_19"};
		$h_name20 = ${"h_name".$i."_20"};
		$h_name21 = ${"h_name".$i."_21"};
		$h_name22 = ${"h_name".$i."_22"};
		$h_name23 = ${"h_name".$i."_23"};
		$h_name24 = ${"h_name".$i."_24"};
		$h_name25 = ${"h_name".$i."_25"};
		$h_name26 = ${"h_name".$i."_26"};
		$h_name27 = ${"h_name".$i."_27"};
		$h_name28 = ${"h_name".$i."_28"};
		$h_name29 = ${"h_name".$i."_29"};
		$h_name30 = ${"h_name".$i."_30"};
		$h_name31 = ${"h_name".$i."_31"};
		$h_name32 = ${"h_name".$i."_32"};
		$h_name33 = ${"h_name".$i."_33"};
		$h_name34 = ${"h_name".$i."_34"};
		$h_name35 = ${"h_name".$i."_35"};
		$h_name36 = ${"h_name".$i."_36"};
		$h_name37 = ${"h_name".$i."_37"};
		$h_name38 = ${"h_name".$i."_38"};
		$h_name39 = ${"h_name".$i."_39"};
		$h_name40 = ${"h_name".$i."_40"};
		$h_name41 = ${"h_name".$i."_41"};
		$h_name42 = ${"h_name".$i."_42"};
		$h_name43 = ${"h_name".$i."_43"};
		$h_name44 = ${"h_name".$i."_44"};
		$h_name45 = ${"h_name".$i."_45"};
		$h_name46 = ${"h_name".$i."_46"};
		$h_name47 = ${"h_name".$i."_47"};
		$h_name48 = ${"h_name".$i."_48"};
		$h_name49 = ${"h_name".$i."_49"};
		$h_name50 = ${"h_name".$i."_50"};

		$db->update("cs_goods_tableh","name1='$h_name1', name2='$h_name2', name3='$h_name3', name4='$h_name4', name5='$h_name5', name6='$h_name6', name7='$h_name7', name8='$h_name8', name9='$h_name9', name10='$h_name10', name11='$h_name11', name12='$h_name12', name13='$h_name13', name14='$h_name14', name15='$h_name15', name16='$h_name16', name17='$h_name17', name18='$h_name18', name19='$h_name19', name20='$h_name20', name21='$h_name21', name22='$h_name22', name23='$h_name23', name24='$h_name24', name25='$h_name25', name26='$h_name26', name27='$h_name27', name28='$h_name28', name29='$h_name29', name30='$h_name30', name31='$h_name31', name32='$h_name32', name33='$h_name33', name34='$h_name34', name35='$h_name35', name36='$h_name36', name37='$h_name37', name38='$h_name38', name39='$h_name39', name40='$h_name40', name41='$h_name41', name42='$h_name42', name43='$h_name43', name44='$h_name44', name45='$h_name45', name46='$h_name46', name47='$h_name47', name48='$h_name48', name49='$h_name49', name50='$h_name50' where idx='$row2->idx'");

	$i++;
	}

	$tools->alertJavaGo("수정 하였습니다.","table1.php?code=".$code);

}

if($mode=="del"){

	$idx = $_GET['idx'];
	
	$db->delete("cs_goods_tablew","where idx='$idx'");
	$db->delete("cs_goods_tableh","where keyidx='$idx'");

	$tools->alertJavaGo("삭제 하였습니다.","table1.php?code=".$_GET[code]);

}
?>