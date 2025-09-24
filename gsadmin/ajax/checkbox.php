<?
include("../header.php"); 

if($_POST['idx'])		{$idx		=	$_POST['idx'];}
if($_POST['table'])	{$table	=	$db->filter($_POST['table']);}
if($_POST['name'])	{$name	=	$db->filter($_POST['name']);}
if($_POST['val'])		{$val		=	$db->filter($_POST['val']);}

/***********************************************************************************************************/

if($name=="delete"){
	for($i=0;$i<count($idx);$i++) {
		$row = $db->object($table, "where idx='$idx[$i]'");

		//게시판
		if($table=="cs_bbs_data"){
			@unlink($ROOT_DIR."/data/bbsData/".$row->bbs_file);
			@unlink($ROOT_DIR."/data/bbsData/".$row->bbs_file2);
			@unlink($ROOT_DIR."/data/bbsData/".$row->bbs_file3);
			@unlink($ROOT_DIR."/data/bbsData/".$row->bbs_file4);
			@unlink($ROOT_DIR."/data/bbsData/".$row->bbs_file5);
			@unlink($ROOT_DIR."/data/bbsData/".$row->sum_file);

		//배너
		}else if($table=="cs_banner"){
			@unlink($ROOT_DIR."/data/bbsData/".$row->bbs_file);

		//회원
		}else if($table=="cs_member"){
			$db->delete("cs_wishlist", "where userid='$row->userid'");
			$db->delete("cs_point", "where userid='$row->userid'");
			$db->delete("cs_cart", "where userid='$row->userid'");

		//제품
		}else if($table=="cs_goods"){
			//@unlink($ROOT_DIR."/data/goodsImages/".$row->images1);
			//@unlink($ROOT_DIR."/data/goodsImages/".$row->images2);
			//@unlink($ROOT_DIR."/data/goodsImages/".$row->add_images1);
			//@unlink($ROOT_DIR."/data/goodsImages/".$row->add_images2);
			//@unlink($ROOT_DIR."/data/goodsImages/".$row->add_images3);
			//@unlink($ROOT_DIR."/data/goodsImages/".$row->add_images4);
			//@unlink($ROOT_DIR."/data/goodsImages/".$row->add_images5);

			$db->delete("cs_option", "where code='$row->code'");
		
		//주문
		}else if($table=="cs_trade"){
			$db->delete("cs_trade_goods", "where trade_code='$row->trade_code'");

		//온라인문의
		}else if($table=="cs_online"){
			@unlink($ROOT_DIR."/data/upload/".$row->bbs_file);
		}
		
		$db->delete($table,"where idx='$idx[$i]'");
		//에디터 이미지 삭제
		$rsc = $db->select("cs_plupload","where table_name='$table' and table_idx='$idx[$i]'");
		while($rowc = mysqli_fetch_array($rsc)){
			$db->delete("cs_plupload","where idx='$rowc[idx]'");
			@unlink($_SERVER['DOCUMENT_ROOT'].$rowc['url']);
		}
	}
}//삭제


//노출여부
if($name=="display"){
	for($i=0;$i<count($idx);$i++) {
		$db->update($table,"$name='$val' where idx='$idx[$i]'");
	}
}

//순위설정
if($name=="ranking"){
	$ranking=1;
	for($i=0;$i<count($idx);$i++) {
		$db->update($table,"$name='$ranking' where idx='$idx[$i]'");
	$ranking++;
	}
}

/***********************************************************************************************************/
include("../footer.php");
?>