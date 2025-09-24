<?
function plupload_update($table_name,$table_idx,$url,$filename){
	$query_insert = "insert into cs_plupload values(
		'',
		'$table_name',
		'$table_idx',
		'$url',
		'$filename'
		)";
	$result_insert = mysql_query($query_insert);
}


//¸Æ½º°ª
function max_count($mf,$table_name){
	$query_select = "select max($mf) from $table_name";
	$result_select = mysql_query($query_select);
	$max_no = mysql_result($result_select,0,0);
	return $max_no;
}


$Number_Grade_Array = array(
	"1"	=>	"01",
	"2"	=>	"02",
	"3"	=>	"03",
	"4"	=>	"04",
	"5"	=>	"05",
	"6"	=>	"06",
	"7"	=>	"07",
	"8"	=>	"08",
	"9"	=>	"09",
	"10"	=>	"10",
	"11"	=>	"11",
	"12"	=>	"12"
);
reset($Number_Grade_Array);



function weekDayCheck($time){
$dayContent="";
$week = date("w", $time);
if(!$sunday) $sunday = mktime(0, 0, 0, date("m"), date("d") - $week, date("Y"));
for ($L = 0, $day = $sunday; $L < 7; $L++, $day+= 86400) {
	if($dayContent==""){
		$dayContent=date("d ", $day);
	}else{
		$dayContent.="|".date("d ", $day);
	}

	return $dayContent;

}
}




function dayCheck($year,$month,$day){
$inputYear = $year;
$inputMonth = $month;
$inputDay = $day;

$tmp = date("D", mktime (0,0,0,date($inputMonth), date($inputDay), date($inputYear)));

Switch ($tmp) {
case "Sun" :
$Date0 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay), date($inputYear)));
$Date1 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)+1, date($inputYear)));
$Date2 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)+2, date($inputYear)));
$Date3 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)+3, date($inputYear)));
$Date4 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)+4, date($inputYear)));
$Date5 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)+5, date($inputYear)));
$Date6 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)+6, date($inputYear)));
break;
case "Mon" :
$Date0 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)-1, date($inputYear)));
$Date1 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay), date($inputYear)));
$Date2 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)+1, date($inputYear)));
$Date3 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)+2, date($inputYear)));
$Date4 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)+3, date($inputYear)));
$Date5 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)+4, date($inputYear)));
$Date6 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)+5, date($inputYear)));
break;
case "Tue" :
$Date0 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)-2, date($inputYear)));
$Date1 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)-1, date($inputYear)));
$Date2 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay), date($inputYear)));
$Date3 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)+1, date($inputYear)));
$Date4 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)+2, date($inputYear)));
$Date5 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)+3, date($inputYear)));
$Date6 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)+4, date($inputYear)));

break;
case "Wed" :
$Date0 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)-3, date($inputYear)));
$Date1 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)-2, date($inputYear)));
$Date2 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)-1, date($inputYear)));
$Date3 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay), date($inputYear)));
$Date4 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)+1, date($inputYear)));
$Date5 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)+2, date($inputYear)));
$Date6 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)+3, date($inputYear)));
break;
case "Thu" :
$Date0 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)-4, date($inputYear)));
$Date1 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)-3, date($inputYear)));
$Date2 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)-2, date($inputYear)));
$Date3 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)-1, date($inputYear)));
$Date4 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay), date($inputYear)));
$Date5 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)+1, date($inputYear)));
$Date6 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)+2, date($inputYear)));
break;
case "Fri" :
$Date0 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)-5, date($inputYear)));
$Date1 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)-4, date($inputYear)));
$Date2 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)-3, date($inputYear)));
$Date3 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)-2, date($inputYear)));
$Date4 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)-1, date($inputYear)));
$Date5 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay), date($inputYear)));
$Date6 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)+1, date($inputYear)));
break;
case "Sat" :
$Date0 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)-6, date($inputYear)));
$Date1 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)-5, date($inputYear)));
$Date2 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)-4, date($inputYear)));
$Date3 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)-3, date($inputYear)));
$Date4 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)-2, date($inputYear)));
$Date5 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay)-1, date($inputYear)));
$Date6 = date("Y-m-d", mktime (0,0,0,date($inputMonth), date($inputDay), date($inputYear)));
break;
}
//	$content=$Date0."|".$Date1."|".$Date2."|".$Date3."|".$Date4."|".$Date5."|".$Date6;
	$content=$Date0."|".$Date6;
	return $content;
}



?>
