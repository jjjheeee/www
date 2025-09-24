<? session_start();
header("Content-type: text/html; charset=utf-8");
include $_SERVER['DOCUMENT_ROOT']."/common.php";

//if(!strstr($_SERVER['HTTP_REFERER'],"도메인 단어")){ $tools->alertJavaGo("비정상적인 접근 입니다.","/"); exit; }

if( $_POST[name] ) {

	$ip=$_SERVER['REMOTE_ADDR'];

	/////////////////////////////// 기존 숫자 방식의 스팸처리 S //////////////////////////
	if($_POST['num']){
		
		$cnum = $_SESSION['CNUM'];
		$cnum1 = substr($cnum,3,1);
		$cnum2 = substr($cnum,2,1);
		$cnum3 = substr($cnum,1,1);
		$cnum4 = substr($cnum,0,1);
		$cnum = $cnum1.$cnum2.$cnum3.$cnum4;
		
		if($cnum!=$_POST['num']){
			$tools->errMsg("스팸방지 숫자가 일치하지 않습니다.");
			exit;
		} else {
			$_SESSION['CNUM'] = ""; 
		}
	}
	/////////////////////////////// 기존 숫자 방식의 스팸처리 E //////////////////////////

	//////////////////////////////////////// 스팸처리 Start ////////////////////////////////////////////////////////
	$time = date("Y-m-d H:i");
	$time_check = $db->cnt("cs_online","where ip='$ip' and reg_date like '$time%'");
	if($time_check >0){
		$tools->errMsg('잠시후 다시 시도해 주세요.');
		exit;
	}
	//////////////////////////////////////// 스팸처리 End ////////////////////////////////////////////////////////

	$country		= 	$db->filter($_POST[country]);
	$affi = $db->filter($_POST[affi]);
	$name		= 	$db->filter($_POST[name]);
	$inquiry			= 	$db->filter($_POST[inquiry]);
	$classify			= 	$db->filter($_POST[classify]);
	$modelno			= 	$db->filter($_POST[modelno]);
	$phone1	= $db->filter($_POST[phone1]);
	$phone2	= $db->filter($_POST[phone2]);
	$phone3	= $db->filter($_POST[phone3]);
	$email1		= 	$db->filter($_POST[email1]);
	$email2		= 	$db->filter($_POST[email2]);
	$content	= 	$db->filter2($_POST[content]);

	if($phone1)	{$phone= $phone1."-".$phone2."-".$phone3;}
	if($email1)	{$email	= $email1."@".$email2;}

	if( $_FILES[bbs_file][size] > 0 ) {
		$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");	// 업로드 파일 제한 확장자 추가 가능
		if( $EXT_TMP = explode( ".", $_FILES[bbs_file][name])) {	 foreach ($EXT_CHECK as $value) { if( strstr( $value, strtolower($EXT_TMP[1]))) { $tools->errMsg( strtoupper($EXT_TMP[1])." 은 업로드 할수 없습니다." ); } }	}
		if( $_FILES[bbs_file][size]  > 1024*1024*5) { $tools->errMsg("업로드 용량 초과입니다\\n\\n5메가 까지 업로드 가능합니다"); exit(); }
		$filename = substr($_FILES[bbs_file][name],-5);
		$fn = explode(".",$filename);
		$EXT_TMP = $fn[1];
		$file_name	= time()."1.".$EXT_TMP;
		$sfile_name = $_FILES[bbs_file][name];
		if( !@move_uploaded_file($_FILES[bbs_file][tmp_name], $ROOT_DIR."/data/upload/".$file_name) ) { $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES[bbs_file][tmp_name]);	}
	} else {
		$file_name 	= "";
	}

	if( $db->insert("cs_online",
	"country='$country',
	affi='$affi',
	name='$name',
	email='$email',
	phone='$phone',
	inquiry='$inquiry',
	classify='$classify',
	modelno='$modelno',
	bbs_file='$file_name',
	sbbs_file='$sfile_name',
	content='$content',
	ip='$ip',
	reg_date=now()") ) { 

	//메일보내기(시작)
	
	include $_SERVER['DOCUMENT_ROOT']."/lib/mail_class.php";
	$mail = new my_mime_mail();
	$admin_stat = $db->object("cs_admin","");

	if($inquiry=="Lab Equipment (International)"){ 
		$admin_stat->shop_email = "export@n-biotek.com"; 
	} else if($inquiry=="Lab Equipment (Korea)" or $inquiry=="Validation (Korea only)"){
		$admin_stat->shop_email = "sales@n-biotek.com"; 
	} else if($inquiry=="Stem Cell Business"){
		$admin_stat->shop_email = "nbkjy@n-biotek.com"; 
	} else {
		$admin_stat->shop_email = "export@n-biotek.com"; 
	}

	if($admin_stat->shop_email){

		$mail_row = $db->object("cs_mailform","where code='online'");

		$mail_subject			= $mail_row->subject;
		$mail_content			= $mail_row->content;
		
		$mail_subject = str_replace("[{SHOP_NAME}]", $admin_stat->shop_name, $mail_subject);

		$mail_content = str_replace("[{SHOP_NAME}]", $admin_stat->shop_name, $mail_content);
		
		$mail_content = str_replace("[{USER_COUNTRY}]", $country, $mail_content);
		$mail_content = str_replace("[{USER_AFFIL}]", $affi, $mail_content);
		$mail_content = str_replace("[{USER_NAME}]", $name, $mail_content);
		$mail_content = str_replace("[{USER_EMAIL}]", $email, $mail_content);
		$mail_content = str_replace("[{USER_PHONE}]", $phone, $mail_content);
		$mail_content = str_replace("[{USER_TYPES}]", $inquiry, $mail_content);
		$mail_content = str_replace("[{USER_CLASS}]", $classify, $mail_content);
		$mail_content = str_replace("[{USER_MODEL}]", $modelno, $mail_content);
		$mail_content = str_replace("[{USER_CONTENT}]", nl2br($_POST[content]), $mail_content);
		$file = "<a href='http://".$_SERVER['HTTP_HOST']."/data/bbsData/".$file_name."' target='_blank'>".$file_name."</a>";
		$mail_content = str_replace("[{USER_FILE}]", $file, $mail_content);
		$mail_content = str_replace("[{SHOP_DOMAIN}]", "http://".$_SERVER['HTTP_HOST'], $mail_content);

		$conf['charset'] = "UTF-8";
		$mail_to_name		= "=?$conf[charset]?B?".base64_encode($name) . "?=";
		$mail_from_name	= "=?$conf[charset]?B?".base64_encode($admin_stat->shop_name) . "?=";
		$mail_subject			= "=?$conf[charset]?B?".base64_encode($mail_subject) . "?=";

		$mail->to =  $mail_from_name." <".$admin_stat->shop_email.">";
		$mail->from = $mail_from_name." <".$admin_stat->shop_email.">";
		$mail->subject = $mail_subject;
		$mail->body = $mail_content;
		$mail->send();

	}
	
	//메일보내기(종료)

	$tools->alertJavaGo("Uploaded.", "inquiry.php"); } else { $tools->errMsg('비상적으로 입력 되었습니다.');}
} else {
	$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
}
?>