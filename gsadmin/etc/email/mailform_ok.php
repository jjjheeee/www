<?include $_SERVER['DOCUMENT_ROOT']."/common.php";?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?
if( $_POST['subject'] ) {	

	$_POST['subject'] = $db->stripSlash ( $_POST['subject'] );
	$_POST['content'] = $db->stripSlash ( $_POST['content'] );
	$_POST['subject'] = $db->addSlash ( $_POST['subject'] );
	$_POST['content'] = $db->addSlash ( $_POST['content'] );
	
	$db_name = "cs_mailform";
	
	if( $db->cnt($db_name, "where code='$code'"))		{
			$sql = "subject='$_POST[subject]',content='$_POST[content]' where code='$code'";
			if( $db->update($db_name, $sql) ) { 
				$tools->alertJavaGo("저장 완료 되었습니다.",  $_POST['return_url']);
			} else { 
				$tools->errMsg('비상적으로 입력 되었습니다.'); 
			}

	} else { 
			$sql = "subject='$_POST[subject]',content='$_POST[content]',code='$code'";
			if( $db->insert($db_name, $sql) )	{ 
				$tools->alertJavaGo("저장 완료 되었습니다.",  $_POST['return_url']);
			} else { 
				$tools->errMsg('비상적으로 입력 되었습니다.'); 
			}
	}

} else {
	$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
}
?>