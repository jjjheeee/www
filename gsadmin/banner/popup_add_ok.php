<? 
$mod	= "banner";	
$menu	= "popup";
include('../header.php'); 

if( $_POST['title_bar'] ) {	

	$kind			= $db->filter($_POST['kind']);
	$display		= $db->filter($_POST['display']);
	$position		= $db->filter($_POST['position']);
	$start_day	= $db->filter($_POST['start_day']);
	$end_day	= $db->filter($_POST['end_day']);
	$width		= $db->filter($_POST['width']);
	$height		= $db->filter($_POST['height']);
	$tops			= $db->filter($_POST['tops']);
	$lefts			= $db->filter($_POST['lefts']);
	$tops_right		= $db->filter($_POST['tops_right']);
	$lefts_right	= $db->filter($_POST['lefts_right']);
	$live			= $db->filter($_POST['live']);
	$lang			= $db->filter($_POST['lang']);
	$title_bar	= $db->filter($_POST['title_bar']);
	$link_url	= $db->filter($_POST['link_url']);
	$link_url1 = $_POST[link_url1];
	$link_url2 = $_POST[link_url2];
	$link_url3 = $_POST[link_url3];
	$link_url4 = $_POST[link_url4];
	$link_url5 = $_POST[link_url5];
	$content	= $db->filter2($_POST['content']);

	$start_day = explode("-",$start_day);
	$start_year	= $start_day[0];
	$start_mon	= $start_day[1];
	$start_day	= $start_day[2];

	$end_day = explode("-",$end_day);
	$end_year	= $end_day[0];
	$end_mon	= $end_day[1];
	$end_day		= $end_day[2];

	$start_day = mktime( 0, 0, 0, $start_mon, $start_day, $start_year );
	$end_day = mktime( 0, 0, 0, $end_mon, $end_day, $end_year );
	if( $start_day >= $end_day ) {	$tools->errMsg('팝업창 시작일과 종료일이 \n\n같은일이나 이전일 경우 등록 되지 않습니다.');}
	if( $display == 0 ) {
		$link_url = "";
		$popup_images = "";
		$popup_images2 = "";
	} else if( $display == 1 ) {
		if( $_FILES['popup_images']['size'] > 0 ) {
			if( !strstr($_FILES['popup_images']['type'], 'image')) { $tools->errMsg('이미지 파일만 등록 가능합니다.'); }
			if( $_FILES['popup_images']['size'] > 1024*1024*4) { $tools->errMsg('업로드 용량 초과입니다\\n\\n4메가 까지 업로드 가능합니다'); }
			$popup_images = 'POPUP_'.time();
			if( !@move_uploaded_file( $_FILES['popup_images']['tmp_name'], "../../data/designImages/".$popup_images )) { $tools->errMsg('파일 업로드 에러'); } else { @unlink($_FILES['popup_images']['tmp_name']); } 
		}

		if( $_FILES['popup_images2']['size'] > 0 ) {
			if( !strstr($_FILES['popup_images2']['type'], 'image')) { $tools->errMsg('이미지 파일만 등록 가능합니다.'); }
			if( $_FILES['popup_images2']['size'] > 1024*1024*4) { $tools->errMsg('업로드 용량 초과입니다\\n\\n4메가 까지 업로드 가능합니다'); }
			$popup_images2 = 'POPUP_2'.time();
			if( !@move_uploaded_file( $_FILES['popup_images2']['tmp_name'], "../../data/designImages/".$popup_images2 )) { $tools->errMsg('파일 업로드 에러'); } else { @unlink($_FILES['popup_images2']['tmp_name']); } 
		} 

		$content = "";

	} else if($display==2){

		$file_query = "";
		// 파일업로드
		
			$EXT_CHECK = array("php","php3","php4","htm","html","cgi","perl","inc","exe","phtml","pl","asp","jsp","dll","txt","ini","xml");
			for($i = 1; $i<=5; $i++){
				if($i==1){
					$file_form = "bbs_file";
				}else{
					$file_form = "bbs_file".$i;
				}
				if($_FILES[$file_form][size]>0){
				///////////////////////////////////////////////////////////////////
					if($EXT_TMP = explode( ".", $_FILES[$file_form ][name])){
						foreach ($EXT_CHECK as $value){
							if(strstr($value,strtolower($EXT_TMP[count($EXT_TMP)-1]))){
								$tools->errMsg(strtoupper($EXT_TMP[count($EXT_TMP)-1])." 은 업로드 할수 없습니다.");
							}
						}
					}
					if($_FILES[$file_form][size]>1024*1024*5){
						$tools->errMsg("업로드 용량 초과입니다\n5메가 까지 업로드 가능합니다"); 
						exit();
					}
					$file_name = time().$i.".".$EXT_TMP[count($EXT_TMP)-1];
					$sfile_name = $_FILES[$file_form][name];
					if(!@move_uploaded_file($_FILES[$file_form][tmp_name],$ROOT_DIR."/data/designImages/".$file_name)){
						$tools->errMsg("파일 업로드 에러");
					}else{
						@unlink($_FILES[$file_form][tmp_name]);
					}
				///////////////////////////////////////////////////////////////////
					if($i==1){
						$file_query.="bbs_file='$file_name',";
					}else{
						$file_query.="bbs_file$i='$file_name',";
					}
				}
			}
		

	}

	
	// 디비 입력
	$sql="kind='$kind',
		display='$display',
		position='$position',
		start_day='$start_day',
		end_day='$end_day',
		width='$width',
		height='$height',
		tops='$tops',
		lefts='$lefts',
		tops_right='$tops_right',
		lefts_right='$lefts_right',
		live='$live',
		lang='$lang',
		title_bar='$title_bar',
		link_url='$link_url',
		popup_images='$popup_images',
		popup_images2='$popup_images2',
		content='$content',
		reg_date=now(),
		$file_query
		link_url1='$link_url1',
		link_url2='$link_url2',
		link_url3='$link_url3',
		link_url4='$link_url4',
		link_url5='$link_url5'";
	if( $db->insert("cs_popup", $sql) ) { 
		


		$tools->alertJavaGo('팝업창을 등록 되었습니다.', 'popup.php'); } else { @unlink("../../data/designImages/".$popup_images); $tools->errMsg('비상적으로 입력 되었습니다.');}
} else {
	$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
}

include('../footer.php');
?>