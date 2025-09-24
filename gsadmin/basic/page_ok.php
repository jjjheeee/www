<?
$mod	= "basic";	
$menu	= "page";	
include('../header.php');

$table_name = "cs_page";
$returnURL		= $returnURL? $returnURL:"basic_setup.php";

$idx				=	$db->filter($_POST['idx']);
$title				=	$db->filter($_POST['title']);
$content		=	$db->filter2($_POST['content']);
$page_index=	$db->filter($_POST['page_index']);

if($content) {	
				
		if( $db->cnt($table_name, "where page_index='$page_index'")) {
			
			if( $db->update($table_name, "title='$title', content='$content' where page_index='$page_index'")) { 
				
					

				$tools->alertJavaGo("저장 완료 되었습니다.", $returnURL); } else { $tools->errMsg('비상적으로 입력 되었습니다.'); }} else { 

			if( $db->insert("cs_page",  "page_index='$page_index', title='$title', content='$content'") ) { 
				
					

				$tools->alertJavaGo("저장 완료 되었습니다.", $returnURL); } else { $tools->errMsg('비상적으로 입력 되었습니다.'); }}
	} else {
		
		$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
	}

include('../footer.php');
?>