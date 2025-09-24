<?
extract($_POST);
extract($_GET);
$mod	= "bbs";	
include("../header.php");

$table_name	= "cs_bbs_data";
$returnURL		= $returnURL? $returnURL:"bbs_list.php";

if( $_POST['name'] ) {

	$code			= 	$db->filter($_POST['code']);
	$cate			= 	$db->filter($_POST['cate']);
	$subject	= 	$db->filter($_POST['subject']);
	$name		= 	$db->filter($_POST['name']);
	$pwd			= 	$db->filter($_POST['pwd']);
	$email		= 	$db->filter($_POST['email']);
	$secret		=	$db->filter($_POST['secret']);
	$notice		= 	$db->filter($_POST['notice']);
	$ref				=	$db->filter($_POST['ref']);
	$re_step	=	$db->filter($_POST['re_step']);
	$re_level	=	$db->filter($_POST['re_level']);
	$content	=	$db->filter2($_POST['content']);
	$lang = $db->filter($_POST['lang']);
	$event_sday = $db->filter($_POST['event_sday']);
	$event_eday = $db->filter($_POST['event_eday']);
	$bbs_admin_stat	= $db->object("cs_bbs", "where code='$code'", "bbs_cate, bbs_pds, bbs_pds_ea, header, footer, bbs_secret,editor,bbs_type");
	

	// 이메일 유무 검색
	if( $email ) { if(!$tools->chkMail($email, 1)) { $tools->errMsg('정확한 이메일주소를 입력해주세요.');}}

	// 답변
	if( $ref ) {
		$db->update($table_name, "re_step=re_step+1 where ref=$ref and re_step > $re_step");
		$re_step++;
		$re_level++;
	} else {		// 쓰기
		$row					= @mysqli_fetch_row( $db->result("select max(idx) from $table_name where code='$code'"));
		$ref		= $row[0]+1;
		$re_step	= 0;
		$re_level= 0;
	}
	$file_query = "";
	// 파일업로드
	if( $bbs_admin_stat->bbs_pds ) {
		$EXT_CHECK = array("php","php3","php4","htm","html","cgi","perl","inc","exe","phtml","pl","asp","jsp","dll","txt","ini","xml");
		for($i = 1; $i<=$bbs_admin_stat->bbs_pds_ea; $i++){
			if($i==1){
				$file_form = "bbs_file";
			}else{
				$file_form = "bbs_file".$i;
			}
			if($_FILES[$file_form]['size']>0){
			///////////////////////////////////////////////////////////////////
				if($EXT_TMP = explode( ".", $_FILES[$file_form ]['name'])){
					foreach ($EXT_CHECK as $value){
						if(strstr($value,strtolower($EXT_TMP[count($EXT_TMP)-1]))){
							$tools->errMsg(strtoupper($EXT_TMP[count($EXT_TMP)-1])." 은 업로드 할수 없습니다.");
						}
					}
				}
				if($_FILES[$file_form]['size']>1024*1024*5){
					$tools->errMsg("업로드 용량 초과입니다\n5메가 까지 업로드 가능합니다"); 
					exit();
				}
				$file_name = time().$i.".".$EXT_TMP[count($EXT_TMP)-1];
				$sfile_name = $_FILES[$file_form]['name'];
				if(!@move_uploaded_file($_FILES[$file_form]['tmp_name'],$ROOT_DIR."/data/bbsData/".$file_name)){
					$tools->errMsg("파일 업로드 에러");
				}else{
					@unlink($_FILES[$file_form]['tmp_name']);
				}
			///////////////////////////////////////////////////////////////////
				if($i==1){
					$file_query.="bbs_file='$file_name',sbbs_file='$sfile_name',";
				}else{
					$file_query.="bbs_file$i='$file_name',sbbs_file$i='$sfile_name',";
				}
			}
		}
	}

	//GD함수 업로드
	include $_SERVER['DOCUMENT_ROOT']."/bbs/gd.php";
	
	// 파일업로드 
	if( $_FILES['sum_file']['size'] > 0 ) {
		$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");	// 업로드 파일 제한 확장자 추가 가능
		if( $EXT_TMP = explode( ".", $_FILES['sum_file']['name'])) {	 foreach ($EXT_CHECK as $value) { if( strstr( $value, strtolower($EXT_TMP[1]))) { $tools->errMsg( strtoupper($EXT_TMP[1])." 은 업로드 할수 없습니다." ); } }	}
		if( $_FILES['sum_file']['size']  > 1024*1024*5) { $tools->errMsg("업로드 용량 초과입니다\\n\\n5메가 까지 업로드 가능합니다"); exit(); }
		$filename = substr($_FILES['sum_file']['name'],-5);
		$fn = explode(".",$filename); 
		$EXT_TMP = $fn[1]; 
		$sum_name	= time()."9.".$EXT_TMP;
		$ssum_name = $_FILES['sum_file']['name'];
		list($width, $height)=getimagesize($_FILES['sum_file']['tmp_name']); 
		if($width>2600){
			$imgwidth=$width*(50/100);//width 값 
			$imgheight=$height*(50/100);//height 값 
			if(!@GDImageResize($_FILES['sum_file']['tmp_name'], $ROOT_DIR."/data/bbsData/".$sum_name, $imgwidth, $imgheight)){ $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['sum_file']['tmp_name']);	} 
		} else {
			if( !@move_uploaded_file($_FILES['sum_file']['tmp_name'], $ROOT_DIR."/data/bbsData/".$sum_name) ) { $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['sum_file']['tmp_name']);	} 
		}
	} else {
		$sum_name 	= "";
	}

	$udate = $db->filter($_POST['udate']);
	if($udate){
		$udate = $_POST['udate']." ".date("H:i:s");
	} else {
		$udate = date("Y-m-d H:i:s");
	}


	// 디비입력
	if( $db->insert($table_name,
		"code='$code',
		cate='$cate',
		subject='$subject',
		name='$name',
		pwd='$pwd',
		email='$email',
		event_sday='$event_sday',
		event_eday='$event_eday',
		read_cnt=0,
		reg_date='$udate',
		content='$content',
		lang='$lang',
		notice='$notice',
		ref='$ref',
		re_level='$re_level',
		re_step='$re_step',
		$file_query
		sum_file='$sum_name',
		sum_sfile='$ssum_name',
		secret='$secret'") ) {





		$tools->alertJavaGo("등록 하였습니다.",$returnURL);		} else { @unlink($ROOT_DIR."/data/bbsData/".$file_name1); $tools->errMsg('비상적으로 입력 되었습니다.');}
} else {
	$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
}

include('../footer.php');
?>