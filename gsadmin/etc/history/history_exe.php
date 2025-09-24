<?
$mod="bbs";
$menu="history";
include("../../header.php");
	
	if($_POST['day']){
		$day = explode(".",$_POST['day']);
	
		$year		= $day[0];
		//$month	= $day[1].".".$day[2];
		$month = $day[1];
	}

if($mode=="write"){

	$query = "insert into cs_history set
					year='$year',
					month='$month',
					title='$title',
					title_k='$title_k'";

	mysqli_query($db2,$query);

	$tools->alertJavaGo("입력 하였습니다.","./history_list.php");

}

if($mode=="edit"){

	$query = "update cs_history set 
					year='$year',
					month='$month',
					title='$title',
					title_k='$title_k' where idx='$idx'";

	mysqli_query($db2,$query);

	$tools->alertJavaGo("수정 하였습니다.","./history_list.php");

}

/*
create table cs_history(
idx int not null auto_increment,
year varchar(4),
month varchar(6),
title varchar(200),
PRIMARY KEY(idx)
);
*/

?>