<?
$mod	= "product";	
$menu	= "category_ranking";
include('../header.php');


# $list1 # 1차 카테고리
# $list2 # 2차 카테고리
# $list3 # 3차 카테고리

# 각 카테고리별 업데이트
# 1차
$arr_1 = explode("&&", $_POST['list1'] );
while ( list($key,$val) = each($arr_1) ) {
	$key++;
	$db->update("cs_part", "part_ranking=$key where part_index=1 and part1_code='$val'");
 
//	 echo("\$arr_1[$key] : $val<br>");

 # $val 이 해당 상품의 코드구욤.. 
 # 순서대로 0 부터 순서를 잡아 주면 되겠죠.. 
 # 이렇게 업데이트 하면 되겠죠.. 
 # 업데이트 문구는 명수씨가 더 잘 하실거니깐. .생략함당..
}
# 2차
$arr_2 = explode("&&", $_POST['list2'] );
while ( list($key,$val) = each($arr_2) )
{
	$key++;
	$db->update("cs_part", "part_ranking=$key where part_index=2 and part2_code='$val'");

//	 echo("\$arr_2[$key] : $val<br>");

 # $val 이 해당 상품의 코드구욤.. 
 # 순서대로 0 부터 순서를 잡아 주면 되겠죠.. 
 # 이렇게 업데이트 하면 되겠죠.. 
 # 업데이트 문구는 명수씨가 더 잘 하실거니깐. .생략함당..
}	
	
# 3차
$arr_3 = explode("&&", $_POST['list3'] );
while ( list($key,$val) = each($arr_3) )
{
	$key++;
	$db->update("cs_part", "part_ranking=$key where part_index=3 and part3_code='$val'");
	
//	echo("\$arr_3[$key] : $val<br>");

 # $val 이 해당 상품의 코드구욤.. 
 # 순서대로 0 부터 순서를 잡아 주면 되겠죠.. 
 # 이렇게 업데이트 하면 되겠죠.. 
 # 업데이트 문구는 명수씨가 더 잘 하실거니깐. .생략함당..
}

$tools->alertJavaGo("순위 설정을 완료 하였습니다", "./category_ranking.php?select_value1=$_POST[select_value1]&select_value2=$_POST[select_value2]");
#  처리하고 다시 부를때 이것도 붙이세염..    select_value1=$select_value1&select_value2=$select_value2
?>