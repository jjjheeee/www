<?
session_start();
include $_SERVER['DOCUMENT_ROOT']."/common.php";

	# URL를 파일명으로 지정.....
	$domain = str_replace( ".", "_", $HTTP_HOST );
	# 엑셀 생성되는 디비명
	$path = "member";

	Header("Content-type: application/vnd.ms-excel"); 
	Header("Content-Disposition: attachment; filename=" . $domain . "_" . $path . "_".date("Y-m-d").".xls"); 
	Header("Content-Description: PHP5 Generated Data"); 
	Header("Pragma: no-cache"); 
	Header("Expires: 0");
	header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
?>
<style>
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}

@page
	{margin:1.0in .75in 1.0in .75in;
	mso-header-margin:.5in;
	mso-footer-margin:.5in;}
ruby
	{ruby-align:left;}
table
	{color:windowtext;
	font-size:8.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:"맑은 고딕", monospace;
	mso-font-charset:129;
	mso-char-type:none;
	display:none;}
-->
br {mso-data-placement:same-cell;}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?if( !$_SESSION['ADMIN_USERID'] || !$_SESSION['ADMIN_PASSWD']) { $tools->alertJavaGo('경고! 잘못된 접근입니다\n\n로그인 하세요', '/gsadmin/');}?>

<table width="1000" cellpadding="3" cellspacing="0" border="1" bordercolor='#BDBEBD' style='border-collapse: collapse'>
<tr align="center" height="30" bgcolor="#EFEFEF">
	<td width="50">No</td>
	<td width="100">아이디</td>
	<td width="60">회원등급</td>
	<td width="70">이름</td>
	<td width="80">휴대폰</td>
	<td width="120">이메일</td>
	<td width="60">우편번호</td>
	<td width="200">주소</td>
	<td width="120">가입일</td>
	<td width="50">접속수</td>
<?
	# 해당 Query 및 데이터 처리 부분을 넣으시면됩니다
	$rs = $db->select("cs_member", "order by idx asc");

	$intN = 1;
	while( $row = mysqli_fetch_array( $rs ) ) {
		$tmpN = str_pad( $intN, 5, "0", STR_PAD_LEFT );
		
		if($row['level'] == "1") { 
			$row['level'] = "일반회원";
		}else if($row['level'] == "2"){
			$row['level'] = "특별회원";
		}

?>
<tr height="40" valign="middle" bgcolor='#FFFFFF'>
	<td align="center"><?=$tmpN?></td>
	<td align="center"><?=$row['userid']?></td>
	<td align="center"><?=$row['level']?></td>
	<td align="center"><?=$row['name']?></td>
	<td align="center"><?=$row['phone']?></td>
	<td align="center"><?=$row['email']?></td>
	<td align="center"><?=$row['zip_new']?></td>
	<td align="center"><?=$row['add1']?> <?=$row['add2']?></td>
	<td align="center"><?=$row['register']?></td>
	<td align="center"><?=$row['connect']?></td>
<?		
	$intN++;
	}
	mysqli_free_result( $rs );
?>
</table>