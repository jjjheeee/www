<?
class dbConnect {
	var $db_host, $db_name, $db_user, $db_pwd, $db_conn;

	function dbConnect ( $db_host, $db_name, $db_user, $db_pwd) {
		$this->db_host		= $db_host;
		$this->db_name		= $db_name;
		$this->db_user		= $db_user;
		$this->db_pwd		= $db_pwd;

		$this->db_conn = mysqli_connect( $this->db_host, $this->db_user, $this->db_pwd, $this->db_name) or die("데이타 베이스에 접속이 불가능합니다.");
		mysqli_query($this->db_conn,"set names utf8");
	}

	function result ( $sql ) {
		$sql				= trim( $sql );
		$result			= mysqli_query( $this->db_conn, $sql ) or die();
		return $result;
	}

	function part_list($table,$where,$value,$field){
		$part2_result = "";
		$sql = "select * from $table $where";
		$result = $this->result($sql);
		while($row = mysqli_fetch_array($result)){
			if($part2_result==""){
				$part2_result= $value."=".$row[$field];
			}else{
				$part2_result.=" or ".$value."=".$row[$field];
			}
		}
		return $part2_result;
	}

	function part2_list($part1_code){
		$part2_result = "";
		$sql = "select * from cs_part where part1_code='$part1_code' and part_index='2' ";
		$result = $this->result($sql);
		$part2_index = 0;
		while($row = mysqli_fetch_array($result)){
			$part2_index++;
			if($part2_index==1){
				$part2_result=$row['idx'];
			}else{
				$part2_result.=",".$row['idx'];
			}

			if($row['part_low_check']==1){
				$part2_result.=",".$this->part3_list($part1_code,$row['part2_code']);
			}

		}
		return $part2_result;
	}

	function part3_list($part1_code,$part2_code){
		$part3_result = "";
		$sql = "select * from cs_part where part1_code='$part1_code' and part2_code='$part2_code' and part_index='3' ";
		$result = $this->result($sql);
		$part3_index = 0;
		while($row = mysqli_fetch_array($result)){
			$part3_index++;
			if($part3_index==1){
				$part3_result=$row['idx'];
			}else{
				$part3_result.=",".$row['idx'];
			}
		}
		return $part3_result;
	}

	function select ( $table, $where, $field = "*" ) {
		$sql				= "Select $field from $table $where";
		$result			= $this->result( $sql );
		return $result;
	}

	function object ( $table, $where, $field = "*" ) {
		$sql				= "Select $field from $table $where";
		$result			= $this->result( $sql );
		$row			= mysqli_fetch_object($result);
		return $row;
	}

	function row ( $table, $where, $field = "*" ) {
		$sql				= "Select $field from $table $where";
		$result			= $this->result( $sql );
		$row			= mysqli_fetch_row($result);
		return $row;
	}

	function sum ( $table, $where, $field = "*" ) {
		$sql				= "Select sum($field) from $table $where";
		$result			= $this->result( $sql );
		$row			=  mysqli_fetch_row($result);
		if( $row[0] ) { return $row[0]; } else { return 0;}
	}

	function cnt ( $table, $where) {
		$sql				= "Select count(idx) from $table $where";
		$result			= $this->result( $sql );
		$row			=  mysqli_fetch_row($result);
		if( $row[0] ) { return $row[0]; } else { return 0;}
	}

	function insert ( $table, $data ) {
		$sql				= "insert into $table set $data";
		if($this->result( $sql )) { return true; } else { return false; }
	}

	function update ( $table, $data ) {
		$sql				= "update $table set $data";
		if($this->result( $sql )) { return true; } else { return false; }
	}
	
	function delete ( $table, $data ) {
		$sql				= "delete from $table $data";
		if($this->result( $sql )) { return true; } else { return false; }
	}
	
	function dropTable ( $data ) {
		$sql				= "drop table $data";
		if($this->result( $sql )) { return true; } else { return false; }
	}

	function createTable ( $data ) {
		$sql				= "create table $data";
		if($this->result( $sql )) { return true; } else { return false; }
	}

	function stripSlash ( $str ) {
		$str				= trim( $str );
		$str				= stripslashes( $str );
		return $str;
	}

	function addSlash ( $str ) {
		$str				= trim( $str );
		$str				= addslashes( $str );
		if(empty( $str )) {
			$str			= "NULL";
		}
		return $str;
	}

	function filter($nameasdferwer){
		$nameasdferwer = htmlspecialchars($nameasdferwer); //HTML의 코드로 인식될 수 있는 문자열의 일부내용을 특수문자(HTML entities)형태로 변환하여 출력해주는 역활을 하는 함수.
		$nameasdferwer = strip_tags($nameasdferwer); //html태그를 없앰
		$nameasdferwer = mysqli_real_escape_string($this->db_conn,$nameasdferwer); //SQL 명령문에 사용되는 문자열에서 특수 문자를 회피한다.
		if (get_magic_quotes_gpc()) { 
			$nameasdferwer = stripslashes($nameasdferwer);
		}else{

		}
		return $nameasdferwer;
	}

	function filter2($nameasdferwer){
		//$nameasdferwer = htmlspecialchars($nameasdferwer, ENT_QUOTES, 'UTF-8');
		$nameasdferwer = mysqli_real_escape_string($this->db_conn,$nameasdferwer);

		return $nameasdferwer;
	}

}


class tools {

	function openssl($data){
		$key = "abc#@(&^329ABC"; // 16자리
		$IV = "giantsoft#"; // 16자리
		$endata = @openssl_encrypt($data , "aes-128-cbc", $key, true, $IV);
		$endata = base64_encode($endata);

		return $endata;
	}

	function openssl_decrypt($data){
		$key = "abc#@(&^329ABC";
		$IV = "giantsoft#";
		$data = base64_decode($data);
		$endata = @openssl_decrypt($data, "aes-128-cbc", $key, true, $IV);

		return $endata;
	}

	//신규 암호화 비교할때 사용
	function if_crypt($data,$db_data){
		if(crypt($data,$db_data)==$db_data){
			$endata = "y";
		} else {
			$endata = "n";
		}

		return $endata;
	}

	// 엔코드
	function encode($data) {
		return base64_encode($data)."||";
	}
	
	// 디코드
	function decode($data){
		$vars=explode("&",base64_decode(str_replace("||","",$data)));
		$vars_num=count($vars);
		for($i=0;$i<$vars_num;$i++) {
			$elements=explode("=",$vars[$i]);
			$var[$elements[0]]=$elements[1];
		}
		return $var;
	}
	
	// 문자열 자르는 부분
	function strCut($str, $len) {
		if ($len >= strlen($str)) return $str;
		$klen = $len - 1;
		while(ord($str[$klen]) & 0x80) $klen--;
		return substr($str, 0, $len - (($len + $klen + 1) % 2)) ."..";
	}

	//이모지제거
	function removeEmoji($text) {
    $clean_text = "";
    // Match Emoticons
    $regexEmoticons = '/[\x{1F600}-\x{1F64F}]/u';
    $clean_text = preg_replace($regexEmoticons, '', $text);
    // Match Miscellaneous Symbols and Pictographs
    $regexSymbols = '/[\x{1F300}-\x{1F5FF}]/u';
    $clean_text = preg_replace($regexSymbols, '', $clean_text);
    // Match Transport And Map Symbols
    $regexTransport = '/[\x{1F680}-\x{1F6FF}]/u';
    $clean_text = preg_replace($regexTransport, '', $clean_text);
    // Match Miscellaneous Symbols
    $regexMisc = '/[\x{2600}-\x{26FF}]/u';
    $clean_text = preg_replace($regexMisc, '', $clean_text);
    // Match Dingbats
    $regexDingbats = '/[\x{2700}-\x{27BF}]/u';
    $clean_text = preg_replace($regexDingbats, '', $clean_text);
    // Match Flags
    $regexDingbats = '/[\x{1F1E6}-\x{1F1FF}]/u';
    $clean_text = preg_replace($regexDingbats, '', $clean_text);
    // Others
    $regexDingbats = '/[\x{1F910}-\x{1F95E}]/u';
    $clean_text = preg_replace($regexDingbats, '', $clean_text);
    $regexDingbats = '/[\x{1F980}-\x{1F991}]/u';
    $clean_text = preg_replace($regexDingbats, '', $clean_text);
    $regexDingbats = '/[\x{1F9C0}]/u';
    $clean_text = preg_replace($regexDingbats, '', $clean_text);
    $regexDingbats = '/[\x{1F9F9}]/u';
    $clean_text = preg_replace($regexDingbats, '', $clean_text);
    return $clean_text;
	}

//문자열자르기 추가

function strCut_utf($str, $len, $checkmb=false, $tail='...') { 
    preg_match_all('/[\xEA-\xED][\x80-\xFF]{2}|./', $str, $match); 

    $m    = $match[0]; 
    $slen = strlen($str);  // length of source string 
    $tlen = strlen($tail); // length of tail string 
    $mlen = count($m); // length of matched characters 
    
    if ($slen <= $len) return $str; 
    if (!$checkmb && $mlen <= $len) return $str; 
    
    $ret  = array(); 
    $count = 0; 
    
    for ($i=0; $i < $len; $i++) { 
        $count += ($checkmb && strlen($m[$i]) > 1)?2:1; 
    
        if ($count + $tlen > $len) break; 
        $ret[] = $m[$i]; 
    } 
    
    return join('', $ret).$tail; 
}
	
	// HTML 출력
	function strHtml($str) {
		$str = trim($str);
		$str = stripslashes($str);
		$str = preg_replace("!<script(.*?)<\/script>!is","",$str);
		return $str;
	}

	// 문자열 HTML BR 형태 출력
	function strHtmlBr($str) {
		$str = trim($str);
		$str = stripslashes($str);
		$str = str_replace("\n","<br>", $str);
		return $str;
	}

	// 문자열 TEXT 형태 출력
	function strHtmlNo($str) {
		$str = trim($str);
		$str = htmlspecialchars($str);
		$str = stripslashes($str);
		$str = str_replace("\n","<br>", $str);
		return $str;
	}

	// 문자열 TEXT 형태 출력
	function strHtmlNo2($str) {
		$str = trim($str);
		$str = htmlspecialchars($str);
		$str = stripslashes($str);
		$str = str_replace("\n","<br>", $str);
		return $str;
	}
	
	// 문자열 TEXT 형태 출력
	function strHtmlNoBr($str) {
		$str = trim($str);
		$str = htmlspecialchars($str);
		$str = stripslashes($str);
		return $str;
	}

	// 날자출력 형태 
	function strDateCut($str, $chk = 1) {
		if( $chk==1 ) {
			$year	=	substr($str,0,4);
			$mon	=	substr($str,5,2);
			$day	=	substr($str,8,2);
			$str	=	$year."/".$mon."/".$day;
		} else if( $chk==2 ) {
			$year	=	substr($str,0,4);
			$mon	=	substr($str,5,2);
			$day	=	substr($str,8,2);
			$time	=	substr($str,11,2);
			$minu	=	substr($str,14,2);
			$str	=	$year."/".$mon."/".$day." ".$time.":".$minu;
		} else if( $chk==3 ) {
			$year	=	substr($str,0,4);
			$mon	=	substr($str,5,2);
			$day	=	substr($str,8,2);
			$str	=	$year."-".$mon."-".$day;
		} else if( $chk==4 ) {
			$year	=	substr($str,0,4);
			$mon	=	substr($str,5,2);
			$day	=	substr($str,8,2);
			$time	=	substr($str,11,2);
			$minu	=	substr($str,14,2);
			$str	=	$year."-".$mon."-".$day." ".$time.":".$minu;
		} else if( $chk==5 ) {
			$year	=	substr($str,0,4);
			$mon	=	substr($str,5,2);
			$day	=	substr($str,8,2);
			$str	=	$year."년 ".$mon."월 ".$day."일";
		} else if( $chk==6) {
			$year	=	substr($str,0,4);
			$mon	=	substr($str,5,2);
			$day	=	substr($str,8,2);
			$time	=	substr($str,11,2);
			$minu	=	substr($str,14,2);
			$str	=	$year."년 ".$mon."월 ".$day."일 ".$time."시 ".$minu."분";
		} else if( $chk==8 ) {
			$year	=	substr($str,2,2);
			$mon	=	substr($str,5,2);
			$day	=	substr($str,8,2);
			$str	=	$year.".".$mon.".".$day;
		}
		return $str;
	}
	
	// 숫자로 된 값을 요일로 변환한다. (0:월요일, 1:화요일, 6:일요일)
	function strDateWeek($chk) {
		if( $chk==0 ) {
			$str="월요일";
		} else if( $chk==1 ) {
			$str="화요일";
		} else if( $chk==2 ) {
			$str="수요일";
		} else if( $chk==3 ) {
			$str="목요일";
		} else if( $chk==4 ) {
			$str="금요일";
		} else if( $chk==5 ) {
			$str="토요일";
		} else if( $chk==6) {
			$str="일요일";
		}
		return $str;
	}
	
	# E-MAIL 주소가 정확한 것인지 검사하는 함수
	#
	# eregi - 정규 표현식을 이용한 검사 (대소문자 무시)
	#         http://www.php.net/manual/function.eregi.php
	# gethostbynamel - 호스트 이름으로 ip 를 얻어옴
	#          http://www.php.net/manual/function.gethostbynamel.php
	# checkdnsrr - 인터넷 호스트 네임이나 IP 어드레스에 대응되는 DNS 레코드를 체크함
	#          http://www.php.net/manual/function.checkdnsrr.php
	function chkMail($email,$hchk=0) {
		$url = trim($email);
		if($hchk) {
			$host = explode("@",$url);
			if(preg_match("/^[\xA1-\xFEa-z0-9_-]+@[\xA1-\xFEa-z0-9_-]+\.[a-z0-9._-]+$/i", $url)) {
				if(checkdnsrr($host[1],"MX") || gethostbynamel($host[1])) return $url;  else return false;
			}
		} else {
			if(preg_match("/^[\xA1-\xFEa-z0-9_-]+@[\xA1-\xFEa-z0-9_-]+\.[a-z0-9._-]+$/i", $url)) return $url;  else return false;
		}
	}
	// 주민등록번호진위여부 확인 함수
	function chkJumin($resno1,$resno2) { 
		$resno = $resno1.$resno2;
		$len = strlen($resno); 
		if ($len <> 13) return false;
		if (!preg_match('/^[[:digit:]]{6}[1-4][[:digit:]]{6}$/', $resno)) return false; 
		$birthYear = ('2' >= $resno[6]) ? '19' : '20'; 
		$birthYear += substr($resno, 0, 2); 
		$birthMonth = substr($resno, 2, 2); 
		$birthDate = substr($resno, 4, 2); 
		if (!checkdate($birthMonth, $birthDate, $birthYear)) return false; 
		for ($i = 0; $i < 13; $i++) $buf[$i] = (int) $resno[$i]; 
		$multipliers = array(2,3,4,5,6,7,8,9,2,3,4,5); 
		for ($i = $sum = 0; $i < 12; $i++) $sum += ($buf[$i] *= $multipliers[$i]); 
		if ((11 - ($sum % 11)) % 10 != $buf[12]) return false; 
		return true; 
	} 

	// 사업자등록번호 체크 함수
	function chkCompany($reginum) { 
		$weight = '137137135';
		$len = strlen($reginum); 
		$sum = 0; 
		if ($len <> 10) return false;
		for ($i = 0; $i < 9; $i++) $sum = $sum + (substr($reginum,$i,1)*substr($weight,$i,1)); 
		$sum = $sum + ((substr($reginum,8,1)*5)/10); 
		$rst = $sum%10; 
		if ($rst == 0) $result = 0;
		else $result = 10 - $rst;
		$saub = substr($reginum,9,1); 
		if ($result <> $saub) return false;
		return true; 
	} 

	# 문자열에 한글이 포함되어 있는지 검사하는 함수
	function chkHan($str) {
		# 특정 문자가 한글의 범위내(0xA1A1 - 0xFEFE)에 있는지 검사
		$strCnt=0;
		while( strlen($str) >= $strCnt) {
			$char = ord($str[$strCnt]);
			if($char >= 0xa1 && $char <= 0xfe) return true;
			$strCnt++;
		}
	}

	// 문자열 체크(숫자)
	function chkDigit($str) {
		if(preg_match("/^[1-9]+[0-9]*$/",$str))  return true;
		else return false;
	}

	// 문자열 체크(알파)
	function chkAlpha($str) {
		if(preg_match("/^[a-zA-Z]+[a-zA-Z]*$/",$str))  return true;
		else return false;
	}

	// 문자열 체크(알파+숫자)		
	function chkAlnum($str) {
		if(preg_match("/^[1-9a-zA-Z]+[0-9a-zA-Z]*$/",$str))  return true;
		else return false;
	}

	// 문자열 체크(알파+숫자+특수문자)		
	function chkAlnumAll($str) {
		if(preg_match("/^[1-9a-zA-Z_-]+[0-9a-zA-Z_-]*$/",$str))  return true;
		else return false;
	}

	// 메세지 출력
	function msg($msg) {
		echo "<script language='javascript'> alert('$msg'); </script>";
	}

	// 메세지 출력후 BACK
	function errMsg($msg) {
		echo "<script language='javascript'> alert('$msg'); history.back(); </script>";
		exit();
	}

	// 메세지 출력후 리로드
	function alertReload($msg) {
		echo "<script language='javascript'> alert('$msg'); location.reload(); </script>";
		exit();
	}

	// 메세지 출력후 이동하는 자바스크립트
	function alertJavaGo($msg,$url) {
		echo "<script language='javascript'> alert('$msg'); location.replace('$url'); </script>";
		exit();
	}

	// 메세지 출력후 이동하는 메타테그
	function alertMetaGo($msg,$url) {
		echo "<script language='javascript'> alert('$msg'); </script>"; 
		echo "<meta http-equiv='refresh' content='0;url=$url'>";
		exit();
	}
	
	// 메타태그로 바로 가기
	function metaGo($url) {
		echo "<meta http-equiv='refresh' content='0;url=$url'>";
		exit();
	}

	// 자바스크립트로 바로 가기
	function javaGo($url) {
		echo "<script language='javascript'> location.href='$url'; </script>";
		exit();
	}
	
	// 창을 닫기
	function winClose() { 
		echo "<script language='javascript'> window.close(); </script>";
		exit();
	}

	// 메세지 출력후 창을 닫기
	function msgClose($msg) { 
		echo "<script language='javascript'> alert('$msg'); window.close(); </script>";
		exit();
	}

	// 부모창 리로드
	function openerClose() { 
		echo "<script language='javascript'> opener.location.reload(); self.close(); </script>";
		exit();
	}

	// 창을 닫고 가는 함수
	function javaGoClose($url) { 
		echo "<script language='javascript'> opener.location.replace('$url'); self.close(); </script>";
		exit();
	}

	// 창을 닫고 새로고침
	function openerReload() { 
		echo "<script language='javascript'> opener.location.reload(); self.close(); </script>";
		exit();
	}
	
	// 프레임으로 된 경우 상위 프레임으로 가는 함수
	function javaGoTop($url) { 
		echo "<script language='javascript'> parent.frames.top.location.replace('$url'); </script>";
		exit();
	}

	/*****************추가***************/
	//디바이스체크
	function device(){ 
		$mobileBrower = '/(iPad|iPod|iPhone|Android|BlackBerry|SymbianOS|SCH-M\d+|Opera Mini|Windows CE|Nokia|SonyEricsson|webOS|PalmOS)/';
		if(preg_match($mobileBrower, $_SERVER['HTTP_USER_AGENT'])) {
			$device = "mobile";
		}else{
			$device = "pc";
		}
		return $device;
	}

	function deviceURL(){ 
		$mobileBrower = '/(iPad|iPod|iPhone|Android|BlackBerry|SymbianOS|SCH-M\d+|Opera Mini|Windows CE|Nokia|SonyEricsson|webOS|PalmOS)/';
		if(preg_match($mobileBrower, $_SERVER['HTTP_USER_AGENT'])) {
			$site_url = "/m";
		}else{
			$site_url = "/kr";
		}
		return $site_url;
	}

	//모바일 이미지 회전
	function image_fix_orientation($filename) {
		$exif = exif_read_data($filename);
		if (!empty($exif['Orientation'])) {
			$image = imagecreatefromjpeg($filename);
			switch ($exif['Orientation']) {
				case 3:
					$image = imagerotate($image, 180, 0);
					break;

				case 6:
					$image = imagerotate($image, -90, 0);
					break;

				case 8:
					$image = imagerotate($image, 90, 0);
					break;
			}

			imagejpeg($image, $filename, 90);
		}
	}

	

	function filter3($nameasdferwer){
		$nameasdferwer = htmlentities($nameasdferwer);
		return $nameasdferwer;
	}

	function create_code(){
		$code = time().dechex(mt_rand("0","15")).dechex(mt_rand("0","15")).dechex(mt_rand("0","15")).dechex(mt_rand("0","15")).dechex(mt_rand("0","15"));
		return $code;
	}	

	function short_url($urls){
		$client_id = ""; // 네이버 개발자센터에서 발급받은 CLIENT ID
		$client_secret = "";// 네이버 개발자센터에서 발급받은 CLIENT SECRET
		$encText = urlencode($urls);
		$postvars = "url=".$encText;
		//$url = "https://openapi.naver.com/v1/util/shorturl";
		//$is_post = true;
		$url = "https://openapi.naver.com/v1/util/shorturl?url=".$encText ;
		$is_post = false;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, $is_post);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		//curl_setopt($ch,CURLOPT_POSTFIELDS, $postvars);
		$headers = array();
		$headers[] = "X-Naver-Client-Id: ".$client_id;
		$headers[] = "X-Naver-Client-Secret: ".$client_secret;
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$response = curl_exec($ch);
		$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close ($ch);
		$response = json_decode($response);
		if($status_code == 200) {
		//echo $response."<br>";
		$urls = $response->result->url;
		return $urls;
		} else {
		echo "Error 내용:".$response;
		}
	}

}
?>