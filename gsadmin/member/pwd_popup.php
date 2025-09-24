<?
include ("../header.php");

$idx = $db->filter($_GET['idx']);

//회원정보
$mem_row = $db->object("cs_member", "where idx='$idx'");

//패스워드 변경
$rand_passwd = substr(md5(rand()),0,8);
$passwd = $tools->openssl($rand_passwd);
$query = "update cs_member set passwd='$passwd' where idx='$idx'";
mysqli_query($db2,$query);

//메일보내기
include $_SERVER['DOCUMENT_ROOT']."/lib/mail_class.php";
$mail = new my_mime_mail();
$mail_row = $db->object("cs_mailform","where code='password'");

$mail_subject			= $mail_row->subject;
$mail_content			= $mail_row->content;

$mail_content = str_replace("[{SHOP_NAME}]", $admin_stat->shop_name, $mail_content);
$mail_content = str_replace("[{USER_NAME}]", $mem_row->name, $mail_content);
$mail_content = str_replace("[{USER_ID}]", $mem_row->userid, $mail_content);
$mail_content = str_replace("[{USER_PASSWD}]", $rand_passwd, $mail_content);
$mail_content = str_replace("[{SHOP_DOMAIN}]", "http://".$_SERVER['HTTP_HOST'], $mail_content);

$conf['charset'] = "UTF-8";
$mail_to_name		= "=?$conf[charset]?B?".base64_encode($mem_row->name) . "?=";
$mail_from_name	= "=?$conf[charset]?B?".base64_encode($admin_stat->shop_name) . "?=";
$mail_subject			=	"=?$conf[charset]?B?".base64_encode($mail_subject) . "?=";

$mail->to =  $mail_to_name." <".$mem_row->email.">";
$mail->from = $mail_from_name." <".$admin_stat->shop_email.">";
$mail->subject = $mail_subject;
$mail->body = $mail_content;
$mail->send();

$tools->msgClose("메일로 임시 비밀번호를 보냈습니다.");

include ("../footer.php");
?>