<?
$mod	= "product";	
$menu	= "category";
include("../header.php");


if($_GET['idx']) {
	// 넘어온 idx 로 삭제 레코드를 검색한다.
	$part_stat = $db->object("cs_part", "where idx='$_GET[idx]'");
	// 1차 카테고리 삭제 루프
	if( $part_stat->part_index == 1 ) {
		$del_result = $db->select("cs_part", "where part1_code = '$part_stat->part1_code'");
		while( $del_row = @mysqli_fetch_object($del_result) ) {
			if( $del_row->list_display_check == 1 ) { @unlink("../../data/designImages/".$del_row->list_display_images1); }
			if( $del_row->list_display_check == 2 ) { @unlink("../../data/designImages/".$del_row->list_display_images1); @unlink("../../data/designImages/".$del_row->list_display_images2); }
			if( $del_row->title_display_check == 1 ) { @unlink("../../data/designImages/".$del_row->title_display_images); }

			// 카테고리에 포함된 상품들 삭제
			$goods_result = $db->select("cs_goods", "where part_idx=$del_row->idx");
			while( $goods_row = @mysqli_fetch_object( $goods_result )) {
				// 상품 리뷰 삭제
				//$db->delete("cs_goods_review", "where goods_code='$goods_row->code'");
				if( $goods_row->images1) { @unlink($ROOT_DIR."/data/goodsImages/".$goods_row->images1); }
				if( $goods_row->images2) { @unlink($ROOT_DIR."/data/goodsImages/".$goods_row->images2); }
				if( $goods_row->add_images1) { @unlink($ROOT_DIR."/data/goodsImages/".$goods_row->add_images1); }
				if( $goods_row->add_images2) { @unlink($ROOT_DIR."/data/goodsImages/".$goods_row->add_images2); }
				if( $goods_row->add_images3) { @unlink($ROOT_DIR."/data/goodsImages/".$goods_row->add_images3); }
				if( $goods_row->add_images4) { @unlink($ROOT_DIR."/data/goodsImages/".$goods_row->add_images4); }
				if( $goods_row->add_images5) { @unlink($ROOT_DIR."/data/goodsImages/".$goods_row->add_images5); }
				if( $goods_row->goods_file) { @unlink($ROOT_DIR."/data/goodsImages/".$goods_row->goods_file); }
				$db->delete("cs_goods", "where idx=$goods_row->idx");
			}
		}
		if( $db->delete("cs_part", "where part1_code = '$part_stat->part1_code'") ) { $tools->javaGo('./category.php'); }
	// 2차 카테고리 삭제 루프
	} else if( $part_stat->part_index == 2 ) {
		$del_result = $db->select("cs_part", "where part2_code = '$part_stat->part2_code' and  part1_code = '$part_stat->part1_code'");
		while( $del_row = @mysqli_fetch_object($del_result) ) {
			if( $del_row->list_display_check == 1 ) { @unlink("../../data/designImages/".$del_row->list_display_images1); }
			if( $del_row->list_display_check == 2 ) { @unlink("../../data/designImages/".$del_row->list_display_images1); @unlink("../../data/designImages/".$del_row->list_display_images2); }
			if( $del_row->title_display_check == 1 ) { @unlink("../../data/designImages/".$del_row->title_display_images); }
	     	// 카테고리에 포함된 상품들 삭제
			$goods_result = $db->select("cs_goods", "where part_idx=$del_row->idx");
			while( $goods_row = @mysqli_fetch_object( $goods_result )) {
				// 상품 리뷰 삭제
				//$db->delete("cs_goods_review", "where goods_code='$goods_row->code'");
				if( $goods_row->images1) { @unlink($ROOT_DIR."/data/goodsImages/".$goods_row->images1); }
				if( $goods_row->images2) { @unlink($ROOT_DIR."/data/goodsImages/".$goods_row->images2); }
				if( $goods_row->add_images1) { @unlink($ROOT_DIR."/data/goodsImages/".$goods_row->add_images1); }
				if( $goods_row->add_images2) { @unlink($ROOT_DIR."/data/goodsImages/".$goods_row->add_images2); }
				if( $goods_row->add_images3) { @unlink($ROOT_DIR."/data/goodsImages/".$goods_row->add_images3); }
				if( $goods_row->add_images4) { @unlink($ROOT_DIR."/data/goodsImages/".$goods_row->add_images4); }
				if( $goods_row->add_images5) { @unlink($ROOT_DIR."/data/goodsImages/".$goods_row->add_images5); }
				if( $goods_row->goods_file) { @unlink($ROOT_DIR."/data/goodsImages/".$goods_row->goods_file); }
				$db->delete("cs_goods", "where idx=$goods_row->idx");
			}
		}
		if( $db->delete("cs_part", "where part2_code = '$part_stat->part2_code' and part1_code = '$part_stat->part1_code'") ) { $tools->javaGo('./category.php'); }
	// 3차 카테고리 삭제 루프
	} else if( $part_stat->part_index == 3 ) {
		$del_result = $db->select("cs_part", "where part3_code = '$part_stat->part3_code' and part2_code = '$part_stat->part2_code' and  part1_code = '$part_stat->part1_code'");
		while( $del_row = @mysqli_fetch_object($del_result) ) {
			if( $del_row->list_display_check == 1 ) { @unlink("../../data/designImages/".$del_row->list_display_images1); }
			if( $del_row->list_display_check == 2 ) { @unlink("../../data/designImages/".$del_row->list_display_images1); @unlink("../../data/designImages/".$del_row->list_display_images2); }
			if( $del_row->title_display_check == 1 ) { @unlink("../../data/designImages/".$del_row->title_display_images); }
	     	// 카테고리에 포함된 상품들 삭제
			$goods_result = $db->select("cs_goods", "where part_idx=$del_row->idx");
			while( $goods_row = @mysqli_fetch_object( $goods_result )) {
				// 상품 리뷰 삭제
				//$db->delete("cs_goods_review", "where goods_code='$goods_row->code'");
				if( $goods_row->images1) { @unlink($ROOT_DIR."/data/goodsImages/".$goods_row->images1); }
				if( $goods_row->images2) { @unlink($ROOT_DIR."/data/goodsImages/".$goods_row->images2); }
				if( $goods_row->add_images1) { @unlink($ROOT_DIR."/data/goodsImages/".$goods_row->add_images1); }
				if( $goods_row->add_images2) { @unlink($ROOT_DIR."/data/goodsImages/".$goods_row->add_images2); }
				if( $goods_row->add_images3) { @unlink($ROOT_DIR."/data/goodsImages/".$goods_row->add_images3); }
				if( $goods_row->add_images4) { @unlink($ROOT_DIR."/data/goodsImages/".$goods_row->add_images4); }
				if( $goods_row->add_images5) { @unlink($ROOT_DIR."/data/goodsImages/".$goods_row->add_images5); }
				if( $goods_row->goods_file) { @unlink($ROOT_DIR."/data/goodsImages/".$goods_row->goods_file); }
				$db->delete("cs_goods", "where idx=$goods_row->idx");
			}
		}
		if( $db->delete("cs_part", "where part3_code = '$part_stat->part3_code' and part2_code = '$part_stat->part2_code' and part1_code = '$part_stat->part1_code'") ) { $tools->javaGo('./category.php'); }
	}
} else {
	$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
}

include('../footer.php');
?>