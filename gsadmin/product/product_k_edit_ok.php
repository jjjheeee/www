<?
extract($_POST);
extract($_GET);
$mod	= "product";	
$menu	= "product_k";
include("../header.php");

$table_name	= "cs_goods_k";
$returnURL		= $returnURL? $returnURL:"product_k.php";

//파일업로드경로
$file_dir	 = $_SERVER['DOCUMENT_ROOT']."/data/bbsData/";
//GD함수 업로드
include $_SERVER['DOCUMENT_ROOT']."/bbs/gd.php";

if($_POST['code'] ) {

// 넘어온 상품 정보 쿼리
$row=$db->object("cs_goods_k", "where idx='$idx'");

if($_POST['part_code']){
	$dh_1cha=$db->cnt("cs_part","where part1_code='$_POST[part_code]'");
	$dh_2cha=$db->cnt("cs_part","where part2_code='$_POST[part_code]'");
	$dh_3cha=$db->cnt("cs_part","where part3_code='$_POST[part_code]'");

	if($dh_1cha){//1차카테고리의 코드가 존재할경우.
		$dh=$db->object("cs_part","where part1_code='$_POST[part_code]'");
		$part_idx=$dh->idx;
	}else if($dh_2cha){//2차카테고리의 코드가 존재할경우.
		$dh=$db->object("cs_part","where part2_code='$_POST[part_code]'");
		$part_idx=$dh->idx;
	}else if($dh_3cha){//3차카테고리의 코드가 존재할경우.
		$dh=$db->object("cs_part","where part3_code='$_POST[part_code]'");
		$part_idx=$dh->idx;
	}
}else{
	$part_idx = $row->part_idx;
}

	$display					=	$db->filter($_POST['display']);
	$code						=	$db->filter($_POST['code']);
	$icon						=	$db->filter($_POST['icon']);
	$name					=	$_POST['name'];
	$name2				=  $db->filter($_POST['name2']);
	$name_s				=  $db->filter($_POST['name_s']);
	$company				=	$db->filter($_POST['company']);
	$old_price			=	$db->filter($_POST['old_price']);
	$shop_price			=	$db->filter($_POST['shop_price']);
	$sold_out				=	$db->filter($_POST['sold_out']);
	$number				=	$db->filter($_POST['number']);
	$point					=	$db->filter($_POST['point']);
	$option_check	=	$db->filter($_POST['option_check']);
	$content				=	$db->filter2($_POST['content']);
	$content_re			=	$db->filter2($_POST['content_re']);
	$content_re_s		=	$db->filter2($_POST['content_re_s']);
	$main_position	=	$db->filter($_POST['main_position']);
	$sub_position		=	$db->filter($_POST['sub_position']);
	$zzim						=	$db->filter($_POST['zzim']);
	$keywords = $db->filter($_POST['keywords']);

	$udate = date("YmdHis");
	// 상품 이미지 등록
	if($imdel1=="y"){
		$images1="";
		//@unlink("../../data/goodsImages/".$row->images1);
	}else{
		if( $_FILES['images1']['size'] > 0 ) {
			if( $_FILES['images1']['size'] > 1024*1024*5) { $tools->errMsg("업로드 용량 초과입니다\\n\\n5메가 까지 업로드 가능합니다"); exit(); }
			$images1_name = substr($_FILES['images1']['name'],-5);
			$images1name = explode(".",$images1_name);
			$images1 = 'GOODS1_'.$code.$udate.".".$images1name[1];
			list($width, $height)=getimagesize($_FILES['images1']['tmp_name']); 
			if($width>2600){
				$imgwidth=$width*(50/100);//width 값 
				$imgheight=$height*(50/100);//height 값 
				if(!@GDImageResize($_FILES['images1']['tmp_name'], "../../data/goodsImages/".$images1, $imgwidth, $imgheight)){ $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['images1']['tmp_name']);	} 
			} else {
				if( !@move_uploaded_file($_FILES['images1']['tmp_name'], "../../data/goodsImages/".$images1) ) { $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['images1']['tmp_name']);	} 
			}
		} else {
			$images1=$row->images1;
		}
	}

	if($imdel2=="y"){
		$images2="";
		//@unlink("../../data/goodsImages/".$row->images2);
	}else{
		if( $_FILES['images2']['size'] > 0 ) {
			if( $_FILES['images2']['size'] > 1024*1024*5) { $tools->errMsg("업로드 용량 초과입니다\\n\\n5메가 까지 업로드 가능합니다"); exit(); }
			$images2_name = substr($_FILES['images2']['name'],-5);
			$images2name = explode(".",$images2_name);
			$images2 = 'GOODS2_'.$code.$udate.".".$images2name[1];
			list($width, $height)=getimagesize($_FILES['images2']['tmp_name']); 
			if($width>2600){
				$imgwidth=$width*(50/100);//width 값 
				$imgheight=$height*(50/100);//height 값 
				if(!@GDImageResize($_FILES['images2']['tmp_name'], "../../data/goodsImages/".$images2, $imgwidth, $imgheight)){ $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['images2']['tmp_name']);	} 
			} else {
				if( !@move_uploaded_file($_FILES['images2']['tmp_name'], "../../data/goodsImages/".$images2) ) { $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['images2']['tmp_name']);	} 
			}
		} else {
			$images2=$row->images2;
		}
	}


	// 추가 상품 이미지 등록
	if($add_imdel1=="y"){
		$add_images1="";
		//@unlink("../../data/goodsImages/".$row->add_images1);
	}else{
		if( $_FILES['add_images1']['size'] > 0 ) {
			if( $_FILES['add_images1']['size'] > 1024*1024*5) { $tools->errMsg("업로드 용량 초과입니다\\n\\n5메가 까지 업로드 가능합니다"); exit(); }
			$add_images1_name = substr($_FILES['add_images1']['name'],-5);
			$add1 = explode(".",$add_images1_name);
			$add_images1 = 'ADD_GOODS1_'.$code.$udate.".".$add1[1];
			list($width, $height)=getimagesize($_FILES['add_images1']['tmp_name']); 
			if($width>2600){
				$imgwidth=$width*(50/100);//width 값 
				$imgheight=$height*(50/100);//height 값 
				if(!@GDImageResize($_FILES['add_images1']['tmp_name'], "../../data/goodsImages/".$add_images1, $imgwidth, $imgheight)){ $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['add_images1']['tmp_name']);	} 
			}else{
				if( !@move_uploaded_file($_FILES['add_images1']['tmp_name'], "../../data/goodsImages/".$add_images1) ) {
					$tools->errMsg("파일 업로드 에러"); 
				} else { 
					@unlink($_FILES['add_images1']['tmp_name']);
				}
			}
		} else {
			$add_images1=$row->add_images1;
		}
	}

	if($add_imdel2=="y"){
		$add_images2="";
		//@unlink("../../data/goodsImages/".$row->add_images2);
	}else{
		if( $_FILES['add_images2']['size'] > 0 ) {
			if( $_FILES['add_images2']['size'] > 1024*1024*5) { $tools->errMsg("업로드 용량 초과입니다\\n\\n5메가 까지 업로드 가능합니다"); exit(); }
			$add_images2_name = substr($_FILES['add_images2']['name'],-5);
			$add2 = explode(".",$add_images2_name);
			$add_images2 = 'ADD_GOODS2_'.$code.$udate.".".$add2[1];
			list($width, $height)=getimagesize($_FILES['add_images2']['tmp_name']); 
			if($width>2600){
				$imgwidth=$width*(50/100);//width 값 
				$imgheight=$height*(50/100);//height 값 
				if(!@GDImageResize($_FILES['add_images2']['tmp_name'], "../../data/goodsImages/".$add_images2, $imgwidth, $imgheight)){ $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['add_images2']['tmp_name']);	} 
			}else{
				if( !@move_uploaded_file($_FILES['add_images2']['tmp_name'], "../../data/goodsImages/".$add_images2) ) {
					$tools->errMsg("파일 업로드 에러"); 
				} else { 
					@unlink($_FILES['add_images2']['tmp_name']);
				}
			}
		} else {
			$add_images2=$row->add_images2;
		}
	}

	if($add_imdel3=="y"){
		$add_images3="";
		//@unlink("../../data/goodsImages/".$row->add_images3);
	}else{
		if( $_FILES['add_images3']['size'] > 0 ) {
			if( $_FILES['add_images3']['size'] > 1024*1024*5) { $tools->errMsg("업로드 용량 초과입니다\\n\\n5메가 까지 업로드 가능합니다"); exit(); }
			$add_images3_name = substr($_FILES['add_images3']['name'],-5);
			$add3 = explode(".",$add_images3_name);
			$add_images3 = 'ADD_GOODS3_'.$code.$udate.".".$add3[1];
			list($width, $height)=getimagesize($_FILES['add_images3']['tmp_name']); 
			if($width>2600){
				$imgwidth=$width*(50/100);//width 값 
				$imgheight=$height*(50/100);//height 값 
				if(!@GDImageResize($_FILES['add_images3']['tmp_name'], "../../data/goodsImages/".$add_images3, $imgwidth, $imgheight)){ $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['add_images3']['tmp_name']);	} 
			}else{
				if( !@move_uploaded_file($_FILES['add_images3']['tmp_name'], "../../data/goodsImages/".$add_images3) ) {
					$tools->errMsg("파일 업로드 에러"); 
				} else { 
					@unlink($_FILES['add_images3']['tmp_name']);
				}
			}
		} else {
			$add_images3=$row->add_images3;
		}
	}

	if($add_imdel4=="y"){
		$add_images4="";
		//@unlink("../../data/goodsImages/".$row->add_images4);
	}else{
		if( $_FILES['add_images4']['size'] > 0 ) {
			if( $_FILES['add_images4']['size'] > 1024*1024*5) { $tools->errMsg("업로드 용량 초과입니다\\n\\n5메가 까지 업로드 가능합니다"); exit(); }
			$add_images4_name = substr($_FILES['add_images4']['name'],-5);
			$add4 = explode(".",$add_images4_name);
			$add_images4 = 'ADD_GOODS4_'.$code.$udate.".".$add4[1];
			list($width, $height)=getimagesize($_FILES['add_images4']['tmp_name']); 
			if($width>2600){
				$imgwidth=$width*(50/100);//width 값 
				$imgheight=$height*(50/100);//height 값 
				if(!@GDImageResize($_FILES['add_images4']['tmp_name'], "../../data/goodsImages/".$add_images4, $imgwidth, $imgheight)){ $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['add_images4']['tmp_name']);	} 
			}else{
				if( !@move_uploaded_file($_FILES['add_images4']['tmp_name'], "../../data/goodsImages/".$add_images4) ) {
					$tools->errMsg("파일 업로드 에러"); 
				} else { 
					@unlink($_FILES['add_images4']['tmp_name']);
				}
			}
		} else {
			$add_images4=$row->add_images4;
		}
	}

	if($add_imdel5=="y"){
		$add_images5="";
		//@unlink("../../data/goodsImages/".$row->add_images5);
	}else{
		if( $_FILES['add_images5']['size'] > 0 ) {
			if( $_FILES['add_images5']['size'] > 1024*1024*5) { $tools->errMsg("업로드 용량 초과입니다\\n\\n5메가 까지 업로드 가능합니다"); exit(); }
			$add_images5_name = substr($_FILES['add_images5']['name'],-5);
			$add5 = explode(".",$add_images5_name);
			$add_images5 = 'ADD_GOODS5_'.$code.$udate.".".$add5[1];
			list($width, $height)=getimagesize($_FILES['add_images5']['tmp_name']); 
			if($width>2600){
				$imgwidth=$width*(50/100);//width 값 
				$imgheight=$height*(50/100);//height 값 
				if(!@GDImageResize($_FILES['add_images5']['tmp_name'], "../../data/goodsImages/".$add_images5, $imgwidth, $imgheight)){ $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['add_images5']['tmp_name']);	} 
			}else{
				if( !@move_uploaded_file($_FILES['add_images5']['tmp_name'], "../../data/goodsImages/".$add_images5) ) {
					$tools->errMsg("파일 업로드 에러"); 
				} else { 
					@unlink($_FILES['add_images5']['tmp_name']);
				}
			}
		} else {
			$add_images5=$row->add_images5;
		}
	}

	if($add_imdel6=="y"){
		$add_images6="";
		//@unlink("../../data/goodsImages/".$row->add_images6);
	}else{
		if( $_FILES['add_images6']['size'] > 0 ) {
			if( $_FILES['add_images6']['size'] > 1024*1024*5) { $tools->errMsg("업로드 용량 초과입니다\\n\\n5메가 까지 업로드 가능합니다"); exit(); }
			$add_images6_name = substr($_FILES['add_images6']['name'],-5);
			$add6 = explode(".",$add_images6_name);
			$add_images6 = 'ADD_GOODS6_'.$code.$udate.".".$add6[1];
			list($width, $height)=getimagesize($_FILES['add_images6']['tmp_name']); 
			if($width>2600){
				$imgwidth=$width*(50/100);//width 값 
				$imgheight=$height*(50/100);//height 값 
				if(!@GDImageResize($_FILES['add_images6']['tmp_name'], "../../data/goodsImages/".$add_images6, $imgwidth, $imgheight)){ $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['add_images6']['tmp_name']);	} 
			}else{
				if( !@move_uploaded_file($_FILES['add_images6']['tmp_name'], "../../data/goodsImages/".$add_images6) ) {
					$tools->errMsg("파일 업로드 에러"); 
				} else { 
					@unlink($_FILES['add_images6']['tmp_name']);
				}
			}
		} else {
			$add_images6=$row->add_images6;
		}
	}

	if($add_imdel7=="y"){
		$add_images7="";
		//@unlink("../../data/goodsImages/".$row->add_images7);
	}else{
		if( $_FILES['add_images7']['size'] > 0 ) {
			if( $_FILES['add_images7']['size'] > 1024*1024*5) { $tools->errMsg("업로드 용량 초과입니다\\n\\n5메가 까지 업로드 가능합니다"); exit(); }
			$add_images7_name = substr($_FILES['add_images7']['name'],-5);
			$add7 = explode(".",$add_images7_name);
			$add_images7 = 'ADD_GOODS7_'.$code.$udate.".".$add7[1];
			list($width, $height)=getimagesize($_FILES['add_images7']['tmp_name']); 
			if($width>2600){
				$imgwidth=$width*(50/100);//width 값 
				$imgheight=$height*(50/100);//height 값 
				if(!@GDImageResize($_FILES['add_images7']['tmp_name'], "../../data/goodsImages/".$add_images7, $imgwidth, $imgheight)){ $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['add_images7']['tmp_name']);	} 
			}else{
				if( !@move_uploaded_file($_FILES['add_images7']['tmp_name'], "../../data/goodsImages/".$add_images7) ) {
					$tools->errMsg("파일 업로드 에러"); 
				} else { 
					@unlink($_FILES['add_images7']['tmp_name']);
				}
			}
		} else {
			$add_images7=$row->add_images7;
		}
	}

	if($add_imdel8=="y"){
		$add_images8="";
		//@unlink("../../data/goodsImages/".$row->add_images8);
	}else{
		if( $_FILES['add_images8']['size'] > 0 ) {
			if( $_FILES['add_images8']['size'] > 1024*1024*5) { $tools->errMsg("업로드 용량 초과입니다\\n\\n5메가 까지 업로드 가능합니다"); exit(); }
			$add_images8_name = substr($_FILES['add_images8']['name'],-5);
			$add8 = explode(".",$add_images8_name);
			$add_images8 = 'ADD_GOODS8_'.$code.$udate.".".$add8[1];
			list($width, $height)=getimagesize($_FILES['add_images8']['tmp_name']); 
			if($width>2600){
				$imgwidth=$width*(50/100);//width 값 
				$imgheight=$height*(50/100);//height 값 
				if(!@GDImageResize($_FILES['add_images8']['tmp_name'], "../../data/goodsImages/".$add_images8, $imgwidth, $imgheight)){ $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['add_images8']['tmp_name']);	} 
			}else{
				if( !@move_uploaded_file($_FILES['add_images8']['tmp_name'], "../../data/goodsImages/".$add_images8) ) {
					$tools->errMsg("파일 업로드 에러"); 
				} else { 
					@unlink($_FILES['add_images8']['tmp_name']);
				}
			}
		} else {
			$add_images8=$row->add_images8;
		}
	}

	if($add_imdel9=="y"){
		$add_images9="";
		//@unlink("../../data/goodsImages/".$row->add_images9);
	}else{
		if( $_FILES['add_images9']['size'] > 0 ) {
			if( $_FILES['add_images9']['size'] > 1024*1024*5) { $tools->errMsg("업로드 용량 초과입니다\\n\\n5메가 까지 업로드 가능합니다"); exit(); }
			$add_images9_name = substr($_FILES['add_images9']['name'],-5);
			$add9 = explode(".",$add_images9_name);
			$add_images9 = 'ADD_GOODS9_'.$code.$udate.".".$add9[1];
			list($width, $height)=getimagesize($_FILES['add_images9']['tmp_name']); 
			if($width>2600){
				$imgwidth=$width*(50/100);//width 값 
				$imgheight=$height*(50/100);//height 값 
				if(!@GDImageResize($_FILES['add_images9']['tmp_name'], "../../data/goodsImages/".$add_images9, $imgwidth, $imgheight)){ $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['add_images9']['tmp_name']);	} 
			}else{
				if( !@move_uploaded_file($_FILES['add_images9']['tmp_name'], "../../data/goodsImages/".$add_images9) ) {
					$tools->errMsg("파일 업로드 에러"); 
				} else { 
					@unlink($_FILES['add_images9']['tmp_name']);
				}
			}
		} else {
			$add_images9=$row->add_images9;
		}
	}

	if($add_imdel10=="y"){
		$add_images10="";
		//@unlink("../../data/goodsImages/".$row->add_images10);
	}else{
		if( $_FILES['add_images10']['size'] > 0 ) {
			if( $_FILES['add_images10']['size'] > 1024*1024*5) { $tools->errMsg("업로드 용량 초과입니다\\n\\n5메가 까지 업로드 가능합니다"); exit(); }
			$add_images10_name = substr($_FILES['add_images10']['name'],-5);
			$add10 = explode(".",$add_images10_name);
			$add_images10 = 'ADD_GOODS10_'.$code.$udate.".".$add10[1];
			list($width, $height)=getimagesize($_FILES['add_images10']['tmp_name']); 
			if($width>2600){
				$imgwidth=$width*(50/100);//width 값 
				$imgheight=$height*(50/100);//height 값 
				if(!@GDImageResize($_FILES['add_images10']['tmp_name'], "../../data/goodsImages/".$add_images10, $imgwidth, $imgheight)){ $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['add_images10']['tmp_name']);	} 
			}else{
				if( !@move_uploaded_file($_FILES['add_images10']['tmp_name'], "../../data/goodsImages/".$add_images10) ) {
					$tools->errMsg("파일 업로드 에러"); 
				} else { 
					@unlink($_FILES['add_images10']['tmp_name']);
				}
			}
		} else {
			$add_images10=$row->add_images10;
		}
	}

	if($imdel1=="y"){
		$file_name = "";
		$sfile_name = "";
	}else{
		if( $_FILES['bbs_file']['size'] > 0 ) {
			@unlink( $file_dir.$row->bbs_file );
			$EXT_CHECK = array("php", "php3", "htm", "html", "cgi", "perl");	// 업로드 파일 제한 확장자 추가 가능
			if( $EXT_TMP = explode( ".", $_FILES['bbs_file']['name'])) {	 foreach ($EXT_CHECK as $value) { if( strstr( $value, strtolower($EXT_TMP[1]))) { $tools->errMsg( strtoupper($EXT_TMP[1])." 은 업로드 할수 없습니다." ); } }	}
			if( $_FILES['bbs_file']['size']  > 1024*1024*20) { $tools->errMsg("업로드 용량 초과입니다\\n\\n20메가 까지 업로드 가능합니다"); exit(); }
			$filename = substr($_FILES['bbs_file']['name'],-5);
			$fn = explode(".",$filename); 
			$EXT_TMP = $fn[1]; 
			$file_name	= time()."1.".$EXT_TMP;
			$sfile_name = $_FILES['bbs_file']['name'];
			if( !@move_uploaded_file($_FILES['bbs_file']['tmp_name'], $file_dir.$file_name) ) { $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['bbs_file']['tmp_name']);	} 
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
			if( $_FILES['bbs_file2']['size']  > 1024*1024*20) { $tools->errMsg("업로드 용량 초과입니다\\n\\n20메가 까지 업로드 가능합니다"); exit(); }
			$filename = substr($_FILES['bbs_file2']['name'],-5);
			$fn = explode(".",$filename); 
			$EXT_TMP = $fn[1]; 
			$file_name2	= time()."2.".$EXT_TMP;
			$sfile_name2 = $_FILES['bbs_file2']['name'];
			if( !@move_uploaded_file($_FILES['bbs_file2']['tmp_name'], $file_dir.$file_name2) ) { $tools->errMsg("파일 업로드 에러"); } else { @unlink($_FILES['bbs_file2']['tmp_name']);	} 
		} else {
			$file_name2 	= $row->bbs_file2;
			$sfile_name2 = $row->sbbs_file2;
		}
	}


	/*옵션 설정*/
	if($option_check > 0){
		//옵션

			for($i=0; $i<count(${'option_name'}); $i++){
				if($option_name[$i]){
					//숫자체크
					if(!is_numeric($option_price[$i])){	
						$option_price[$i] = 0;
					}
					if($option_idx[$i]){
						//업데이트
						$query = "update cs_option set
							code='$code',
							name='$option_name[$i]',
							price='$option_price[$i]',
							number='$option_number[$i]',
							sold_out='$hidden_option_sold_out[$i]' where idx='$option_idx[$i]'";
						mysqli_query($db2,$query);
					}else{
						//생성
						$query = "insert into cs_option set
							code='$code',
							name='$option_name[$i]',
							price='$option_price[$i]',
							number='$option_number[$i]',
							sold_out='$hidden_option_sold_out[$i]'";
						mysqli_query($db2,$query);
					}
				}
			}

	}




$sql = "part_idx='$part_idx',
			display='$display',
			code='$code',
			icon='$icon',
			name='$name',
			name2='$name2',
			name_s='$name_s',
			company='$company',
			old_price='$old_price',
			shop_price='$shop_price',
			sold_out='$sold_out',
			number='$number',
			point='$point',
			option_check='$option_check',
			images1='$images1',
			images2='$images2',
			add_images1='$add_images1',
			add_images2='$add_images2',
			add_images3='$add_images3',
			add_images4='$add_images4',
			add_images5='$add_images5',
			add_images6='$add_images6',
			add_images7='$add_images7',
			add_images8='$add_images8',
			add_images9='$add_images9',
			add_images10='$add_images10',
			bbs_file='$file_name',
			sbbs_file='$sfile_name',
			bbs_file2='$file_name2',
			sbbs_file2='$sfile_name2',
			content='$content',
			content_re='$content_re',
			content_re_s='$content_re_s',
			main_position='$main_position',
			sub_position='$sub_position',
			register=now(),
			zzim='$zzim',
			keywords='$keywords' where idx=$idx";

	if( $db->update($table_name, $sql) ) { 
	
		
		$tools->alertJavaGo("수정 하였습니다.",$returnURL); } else { $tools->errMsg('비상적으로 입력 되었습니다.');}

} else {
	$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
}

include('../footer.php');
?>