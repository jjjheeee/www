<? 
$mod	= "basic";	
$menu	= "seo_setup";
include('../header.php'); 

$table_name = "cs_seo";
$returnURL		= $returnURL? $returnURL:"seo_setup.php?lang=".$lang;

$mode				=	$db->filter($_POST['mode']);
$title					=	$db->filter($_POST['title']);
$author				=	$db->filter($_POST['author']);
$description		=	$db->filter($_POST['description']);
$keywords		=	$db->filter2($_POST['keywords']);
$naver_meta	=	$db->filter($_POST['naver_meta']);
$google_meta	=	$db->filter($_POST['google_meta']);
$script_content	=	$db->filter2($_POST['script_content']);
$lang = $db->filter($_POST['lang']);

if($mode=="seo"){
	
	// 디비입력
	if( $db->cnt($table_name, "where lang='$lang'"))		{
			
	$sql="title='$title',
	author='$author',
	description='$description',
	keywords='$keywords',
	naver_meta='$naver_meta',
	google_meta='$google_meta',
	script_content='$script_content' where lang='$lang'";			
			
			if( $db->update($table_name, $sql) ) { 
				$tools->alertJavaGo("저장 완료 되었습니다.", $returnURL); 
			} else { 
				$tools->errMsg('비상적으로 입력 되었습니다.'); 
			}

	} else { 
			
	$sql="title='$title',
	author='$author',
	description='$description',
	keywords='$keywords',
	naver_meta='$naver_meta',
	google_meta='$google_meta',
	script_content='$script_content',
	lang='$lang'";			
			
			if( $db->insert($table_name, $sql) )	{ 
				$tools->alertJavaGo("저장 완료 되었습니다.", $returnURL); 
			} else { 
				$tools->errMsg('비상적으로 입력 되었습니다.'); 
			}
	}
}else{
	$tools->errMsg('비상적으로 입력 되었습니다.'); 
}

include('../footer.php');
?>