<?
include('../../header.php'); 

require_once $_SERVER['DOCUMENT_ROOT']."/gsadmin/etc/excel/reader.php";
$data = new Spreadsheet_Excel_Reader();
//$data->setOutputEncoding('CP949'); //한글 코드
$data->setUTFEncoder("mb");
$data->setOutputEncoding("UTF-8");
//$data->setOutputEncoding("EUC-KR");
$data->read($ROOT_DIR."/data/csv/$exceilFile_name"); 


$j=1;
for ($i = 1; $i <= $data->sheets[0]["numRows"]; $i++){

	$excel_a	= $data->sheets[0]["cells"][$i][1];
	$excel_b	= $data->sheets[0]["cells"][$i][2];
	$excel_c	= $data->sheets[0]["cells"][$i][3];
	
	if($excel_a)	{$excel_a	= $db->filter($excel_a);}
	if($excel_b)	{$excel_b	= $db->filter($excel_b);}
	if($excel_c)	{$excel_c	= $db->filter($excel_c);}


	$excel_a = mb_detect($excel_a);
	$excel_b = mb_detect($excel_b);
	$excel_c = mb_detect($excel_c);

	$code = ceil(time() - $i);

	if($i>1){
	$query = "insert into cs_goods set 
		display=1,
		code='$code',
		part_idx='$excel_a',
		name='$excel_b',
		images1='$excel_c',
		register=now()";

	//	echo $query."<br>";
	mysqli_query($db2,$query);
	}

$j++;
}

function mb_detect($str){
	$ary[] = "UTF-8";
	$ary[] = "SJIS-WIN";
	$CharCheck = mb_detect_encoding($str, $ary);
	if($CharCheck != "UTF-8"){
		$str = mb_convert_encoding($str, "UTF-8");
	}
	return $str;
}

$tools->alertJavaGo("엑셀 업로드가 정상처리되었습니다.","./excel_write.php");
?>

<? include('../../footer.php');?>