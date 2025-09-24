<?
$mod	= "stat";	
$menu	= "crm0";
include("../header.php");
 
if(file_exists('../../data/csv/crm0.csv')) { unlink('../../data/csv/crm0.csv');    }  // 만일 이전에 만든 화일이 있으면 지운다 
$newline = chr(10);            //  LF(줄바꿈)의 ascii 값을 얻는다. 
$fp = fopen( "../../data/csv/crm0.csv", "w" ) or die("../../data/csv/crm0.csv 화일을 열수 없습니다") ;  // crm0.csv 를 새로 연다 
fwrite($fp,"번호, 제품명, 제품번호, 소비자가격, 쇼핑몰가격, 조회수");		 //  타이틀 쓰고 
fwrite($fp,$newline);                     //  줄바꾸기 
?>

<h4 class="page-header">인기상품</h4>

<table class="table table-bordered table-hover">
<colgroup>
<col width="10%">
<col width="15%">
<col width="*">
<col width="10%">
<col width="10%">
</colgroup>
<thead>
<tr> 
	<th>No</td>
	<th>제품코드</td>
	<th>제품명</td>
	<th>판매가격</td>
	<th>조회수</td>
</tr>
</thead>
<tbody>
<?
$result = $db->select("cs_goods", "order by read_cnt desc" );
while( $row = @mysqli_fetch_object($result)) {
?>
<tr> 
	<td class="text-center"><?=++$listNo;?></td>
	<td class="text-center"><?=$row->code;?></td>
	<td class="text-center"><?=$row->name;?></td>
	<td class="text-center"><?=number_format($row->shop_price);?> 원</td>
	<td class="text-center"><?=number_format($row->read_cnt);?></td>
</tr>
<?
	fwrite($fp, $listNo.",".$row->code.",".$row->name.",".$row->shop_price.",".$row->read_cnt);
	fwrite($fp, $newline);     // 줄 바꾸기             
}
fclose($fp); 
?>
</tbody>
</table>
				
	
<? include('../footer.php');?>