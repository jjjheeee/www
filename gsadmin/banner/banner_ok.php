<?
$mod	= "banner";	
$menu	= "banner";
include("../header.php");

$table_name	= "cs_banner";
$returnURL		= $returnURL? $returnURL:"banner.php";

//파일업로드경로
$file_dir	 = $_SERVER['DOCUMENT_ROOT']."/data/bbsData/";
//GD함수 업로드
include $_SERVER['DOCUMENT_ROOT']."/bbs/gd.php";

$mode				= 	$db->filter($_POST['mode']);
$idx					= 	$db->filter($_POST['idx']);
$cate					= 	$db->filter($_POST['cate']);
$display				= 	$db->filter($_POST['display']);
$subject			= 	$db->filter($_POST['subject']);
$link_url			= 	$db->filter($_POST['link_url']);
$link_open		= 	$db->filter($_POST['link_open']);
$lang		= 	$db->filter($_POST['lang']);

$ctext1 = $_POST['ctext1'];
$ctext2 = $_POST['ctext2'];
$ctext3 = $db->filter($_POST['ctext3']);

if($mode=="write"){

	if( $_FILES['bbs_file']['size'] > 0 ) {
		$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");	// 업로드 파일 제한 확장자 추가 가능
		if( $EXT_TMP = explode( ".", $_FILES['bbs_file']['name'])) {	 foreach ($EXT_CHECK as $value) { if( strstr( $value, strtolower($EXT_TMP[1]))) { $tools->errMsg( strtoupper($EXT_TMP[1])." 은 업로드 할수 없습니다." ); } }	}
		if( $_FILES['bbs_file']['size']  > 1024*1024*5) { $tools->errMsg("업로드 용량 초과입니다\\n\\n5메가 까지 업로드 가능합니다"); exit(); }
		$filename = substr($_FILES['bbs_file']['name'],-5);
		$fn = explode(".",$filename); 
		$EXT_TMP = $fn[1]; 
		$file_name	= time()."1.".$EXT_TMP;
		$sfile_name = $_FILES['bbs_file']['name'];
		list($width, $height)=getimagesize($_FILES['bbs_file']['tmp_name']); 
			if($width>2600){
				$imgwidth=$width*(50/100);//width 값 
				$imgheight=$height*(50/100);//height 값 
				if(!@GDImageResize($_FILES['bbs_file']['tmp_name'], $file_dir.$file_name, $imgwidth, $imgheight)){ $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['bbs_file']['tmp_name']);	} 
				if($tools->device()=="mobile"){
				//모바일 이미지 회전
				//$tools->image_fix_orientation($file_dir.$file_name);
				}
			}else{
				if( !@move_uploaded_file($_FILES['bbs_file']['tmp_name'], $file_dir.$file_name) ) { $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['bbs_file']['tmp_name']);	} 
			}
	} else {
		$file_name 	= "";
	}

	if( $_FILES['bbs_file2']['size'] > 0 ) {
		$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");	// 업로드 파일 제한 확장자 추가 가능
		if( $EXT_TMP = explode( ".", $_FILES['bbs_file2']['name'])) {	 foreach ($EXT_CHECK as $value) { if( strstr( $value, strtolower($EXT_TMP[1]))) { $tools->errMsg( strtoupper($EXT_TMP[1])." 은 업로드 할수 없습니다." ); } }	}
		if( $_FILES['bbs_file2']['size']  > 1024*1024*5) { $tools->errMsg("업로드 용량 초과입니다\\n\\n5메가 까지 업로드 가능합니다"); exit(); }
		$filename = substr($_FILES['bbs_file2']['name'],-5);
		$fn = explode(".",$filename); 
		$EXT_TMP = $fn[1]; 
		$file_name2	= time()."2.".$EXT_TMP;
		$sfile_name2 = $_FILES['bbs_file2']['name'];
		list($width, $height)=getimagesize($_FILES['bbs_file2']['tmp_name']); 
			if($width>2600){
				$imgwidth=$width*(50/100);//width 값 
				$imgheight=$height*(50/100);//height 값 
				if(!@GDImageResize($_FILES['bbs_file2']['tmp_name'], $file_dir.$file_name2, $imgwidth, $imgheight)){ $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['bbs_file2']['tmp_name']);	} 
				if($tools->device()=="mobile"){
				//모바일 이미지 회전
				//$tools->image_fix_orientation($file_dir.$file_name);
				}
			}else{
				if( !@move_uploaded_file($_FILES['bbs_file2']['tmp_name'], $file_dir.$file_name2) ) { $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['bbs_file2']['tmp_name']);	} 
			}
	} else {
		$file_name2 	= "";
	}

	if( $_FILES['bbs_file3']['size'] > 0 ) {
		$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");	// 업로드 파일 제한 확장자 추가 가능
		if( $EXT_TMP = explode( ".", $_FILES['bbs_file3']['name'])) {	 foreach ($EXT_CHECK as $value) { if( strstr( $value, strtolower($EXT_TMP[1]))) { $tools->errMsg( strtoupper($EXT_TMP[1])." 은 업로드 할수 없습니다." ); } }	}
		if( $_FILES['bbs_file3']['size']  > 1024*1024*5) { $tools->errMsg("업로드 용량 초과입니다\\n\\n5메가 까지 업로드 가능합니다"); exit(); }
		$filename = substr($_FILES['bbs_file3']['name'],-5);
		$fn = explode(".",$filename); 
		$EXT_TMP = $fn[1]; 
		$file_name3	= time()."3.".$EXT_TMP;
		$sfile_name3 = $_FILES['bbs_file3']['name'];
		list($width, $height)=getimagesize($_FILES['bbs_file3']['tmp_name']); 
			if($width>2600){
				$imgwidth=$width*(50/100);//width 값 
				$imgheight=$height*(50/100);//height 값 
				if(!@GDImageResize($_FILES['bbs_file3']['tmp_name'], $file_dir.$file_name3, $imgwidth, $imgheight)){ $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['bbs_file3']['tmp_name']);	} 
				if($tools->device()=="mobile"){
				//모바일 이미지 회전
				//$tools->image_fix_orientation($file_dir.$file_name);
				}
			}else{
				if( !@move_uploaded_file($_FILES['bbs_file3']['tmp_name'], $file_dir.$file_name3) ) { $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['bbs_file3']['tmp_name']);	} 
			}
	} else {
		$file_name3 	= "";
	}

	if( $db->insert($table_name,
		"
			cate='$cate',
			display='$display',
			subject='$subject',
			ctext1='$ctext1',
			ctext2='$ctext2',
			ctext3='$ctext3',
			lang='$lang',
			link_url='$link_url',
			link_open='$link_open',
			bbs_file='$file_name',
			sbbs_file='$sfile_name',
			bbs_file2='$file_name2',
			sbbs_file2='$sfile_name2',
			bbs_file3='$file_name3',
			sbbs_file3='$sfile_name3',
			reg_date=now()
		"
	))
		{
			$tools->alertJavaGo("등록 하였습니다.", $returnURL);
		}

}

if($mode=="edit"){

	$row = $db->object($table_name, "where idx=$idx");

	if($imdel1=="y"){
		$file_name = "";
		$sfile_name = "";
	}else{
		if( $_FILES['bbs_file']['size'] > 0 ) {
			@unlink( $file_dir.$row->bbs_file );
			$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");	// 업로드 파일 제한 확장자 추가 가능
			if( $EXT_TMP = explode( ".", $_FILES['bbs_file']['name'])) {	 foreach ($EXT_CHECK as $value) { if( strstr( $value, strtolower($EXT_TMP[1]))) { $tools->errMsg( strtoupper($EXT_TMP[1])." 은 업로드 할수 없습니다." ); } }	}
			if( $_FILES['bbs_file']['size']  > 1024*1024*5) { $tools->errMsg("업로드 용량 초과입니다\\n\\n5메가 까지 업로드 가능합니다"); exit(); }
			$filename = substr($_FILES['bbs_file']['name'],-5);
			$fn = explode(".",$filename); 
			$EXT_TMP = $fn[1]; 
			$file_name	= time()."1.".$EXT_TMP;
			$sfile_name = $_FILES['bbs_file']['name'];
			list($width, $height)=getimagesize($_FILES['bbs_file']['tmp_name']); 
				if($width>2600){
					$imgwidth=$width*(50/100);//width 값 
					$imgheight=$height*(50/100);//height 값 
					if(!@GDImageResize($_FILES['bbs_file']['tmp_name'], $file_dir.$file_name, $imgwidth, $imgheight)){ $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['bbs_file']['tmp_name']);	} 
					if($tools->device()=="mobile"){
					//모바일 이미지 회전
					//$tools->image_fix_orientation($file_dir.$file_name);
					}
				}else{
					if( !@move_uploaded_file($_FILES['bbs_file']['tmp_name'], $file_dir.$file_name) ) { $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['bbs_file']['tmp_name']);	} 
				}
		} else {
			$file_name 	= $row->bbs_file;
			$sfile_name = $row->sbbs_file;
		}
	}

	if($imdel2=="y"){
		$file_name2 = "";
		$sfile_name2 = "";
	}else{
		if( $_FILES['bbs_file2']['size'] > 0 ) {
			@unlink( $file_dir.$row->bbs_file2 );
			$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");	// 업로드 파일 제한 확장자 추가 가능
			if( $EXT_TMP = explode( ".", $_FILES['bbs_file2']['name'])) {	 foreach ($EXT_CHECK as $value) { if( strstr( $value, strtolower($EXT_TMP[1]))) { $tools->errMsg( strtoupper($EXT_TMP[1])." 은 업로드 할수 없습니다." ); } }	}
			if( $_FILES['bbs_file2']['size']  > 1024*1024*5) { $tools->errMsg("업로드 용량 초과입니다\\n\\n5메가 까지 업로드 가능합니다"); exit(); }
			$filename = substr($_FILES['bbs_file2']['name'],-5);
			$fn = explode(".",$filename); 
			$EXT_TMP = $fn[1]; 
			$file_name2	= time()."2.".$EXT_TMP;
			$sfile_name2 = $_FILES['bbs_file2']['name'];
			list($width, $height)=getimagesize($_FILES['bbs_file2']['tmp_name']); 
				if($width>2600){
					$imgwidth=$width*(50/100);//width 값 
					$imgheight=$height*(50/100);//height 값 
					if(!@GDImageResize($_FILES['bbs_file2']['tmp_name'], $file_dir.$file_name2, $imgwidth, $imgheight)){ $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['bbs_file2']['tmp_name']);	} 
					if($tools->device()=="mobile"){
					//모바일 이미지 회전
					//$tools->image_fix_orientation($file_dir.$file_name);
					}
				}else{
					if( !@move_uploaded_file($_FILES['bbs_file2']['tmp_name'], $file_dir.$file_name2) ) { $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['bbs_file2']['tmp_name']);	} 
				}
		} else {
			$file_name2 	= $row->bbs_file2;
			$sfile_name2 = $row->sbbs_file2;
		}
	}

	if($imdel3=="y"){
		$file_name3 = "";
		$sfile_name3 = "";
	}else{
		if( $_FILES['bbs_file3']['size'] > 0 ) {
			@unlink( $file_dir.$row->bbs_file3 );
			$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");	// 업로드 파일 제한 확장자 추가 가능
			if( $EXT_TMP = explode( ".", $_FILES['bbs_file3']['name'])) {	 foreach ($EXT_CHECK as $value) { if( strstr( $value, strtolower($EXT_TMP[1]))) { $tools->errMsg( strtoupper($EXT_TMP[1])." 은 업로드 할수 없습니다." ); } }	}
			if( $_FILES['bbs_file3']['size']  > 1024*1024*5) { $tools->errMsg("업로드 용량 초과입니다\\n\\n5메가 까지 업로드 가능합니다"); exit(); }
			$filename = substr($_FILES['bbs_file3']['name'],-5);
			$fn = explode(".",$filename); 
			$EXT_TMP = $fn[1]; 
			$file_name3	= time()."3.".$EXT_TMP;
			$sfile_name3 = $_FILES['bbs_file3']['name'];
			list($width, $height)=getimagesize($_FILES['bbs_file3']['tmp_name']); 
				if($width>2600){
					$imgwidth=$width*(50/100);//width 값 
					$imgheight=$height*(50/100);//height 값 
					if(!@GDImageResize($_FILES['bbs_file3']['tmp_name'], $file_dir.$file_name3, $imgwidth, $imgheight)){ $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['bbs_file3']['tmp_name']);	} 
					if($tools->device()=="mobile"){
					//모바일 이미지 회전
					//$tools->image_fix_orientation($file_dir.$file_name);
					}
				}else{
					if( !@move_uploaded_file($_FILES['bbs_file3']['tmp_name'], $file_dir.$file_name3) ) { $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['bbs_file3']['tmp_name']);	} 
				}
		} else {
			$file_name3 	= $row->bbs_file3;
			$sfile_name3 = $row->sbbs_file3;
		}
	}

	if( $db->update($table_name,
		"
			cate='$cate',
			display='$display',
			subject='$subject',
			ctext1='$ctext1',
			ctext2='$ctext2',
			ctext3='$ctext3',
			link_url='$link_url',
			lang='$lang',
			link_open='$link_open',
			bbs_file='$file_name',
			sbbs_file='$sfile_name',
			bbs_file2='$file_name2',
			sbbs_file2='$sfile_name2',
			bbs_file3='$file_name3',
			sbbs_file3='$sfile_name3' where idx='$idx'
		"
	))
		{
			$tools->alertJavaGo("수정 하였습니다.", $returnURL);
		}

}

include('../footer.php');
?>