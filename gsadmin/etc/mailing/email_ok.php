<?
$mod	= "basic";	
$menu	= "email_setup";
include('../../header.php');

$returnURL		= $returnURL? $returnURL:"email_setup.php";



$kind				=	$db->filter($_POST['kind']);
$kind2				=	$db->filter($_POST['kind2']);
$level				=	$db->filter($_POST['level']);
$member				=	$db->filter($_POST['member']);
$name				=	$_POST['name'];
$email				=	$_POST['email'];
$subject				=	$_POST['subject'];
$content		=	$_POST['content'];

$content = str_replace("/data/plupload/",$site_host."/data/plupload/",$content);


if($content) {	
				
	include $_SERVER['DOCUMENT_ROOT']."/lib/mail_class.php";
	
	$admin_stat = $db->object("cs_admin","");

	if($kind==1){
	$rs = $db->select("cs_member","");
	} else if($kind==3){
	$rs = $db->select("cs_member","where level='$level'");
	} else if($kind==4){
	$rs = $db->select("cs_member","where idx='$member'");
	}

	
	$conf['charset'] = "UTF-8";
	if($kind!=2){

	while($row = mysqli_fetch_object($rs)){

	$mail = new my_mime_mail();
	$email2 = $row->email;
	$name2 = $row->name;
	$mail_to_name		= "=?$conf[charset]?B?".base64_encode($name2) . "?=";
	$mail_from_name	= "=?$conf[charset]?B?".base64_encode($name) . "?=";
	$mail_subject			= "=?$conf[charset]?B?".base64_encode($subject) . "?=";

	$mail->to =  $mail_to_name." <".$email2.">";
	$mail->from = $mail_from_name." <".$email.">";
	$mail->subject = $mail_subject;
	$mail->body = $content;
	$mail->send();

	}

	} else if($kind==2){
	
	$mail = new my_mime_mail();
	$email2 = $kind2;
	$name2 = $kind2;
	$mail_to_name		= "=?$conf[charset]?B?".base64_encode($name2) . "?=";
	$mail_from_name	= "=?$conf[charset]?B?".base64_encode($name) . "?=";
	$mail_subject			= "=?$conf[charset]?B?".base64_encode($subject) . "?=";

	$mail->to =  $mail_to_name." <".$email2.">";
	$mail->from = $mail_from_name." <".$email.">";
	$mail->subject = $mail_subject;
	$mail->body = $content;
	$mail->send();	

	}
	
	$tools->alertJavaGo("메일전송을 완료했습니다.", $returnURL);
	} else {
		$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
	}

include('../../footer.php');
?>