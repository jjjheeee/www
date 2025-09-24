<?
$mod	= "product";	
$menu	= "product_list";
include("../header.php");

//if( $_POST[to_hidden_move_copy]==1 && $_POST[to_hidden_part_code] && $_POST[to_hidden_elements] ) {
$elea = count($_POST['elements']);
if( $_POST['to_hidden_move_copy']==1 && $_POST['to_hidden_part_code'] && ($elea>0) ) {
	if($_POST['to_hidden_part_code']) { $part_row=$db->object("cs_part", "where part1_code='$_POST[to_hidden_part_code]' or part2_code='$_POST[to_hidden_part_code]' or part3_code='$_POST[to_hidden_part_code]'", "idx");}
	//$elements_data = explode("&&", $_POST[to_hidden_elements] );
	$elements_data = explode("&&", $_POST['elements'] );
	//for( $i=0; $i < count($elements_data)-1; $i++ ) { $db->update("cs_goods", "part_idx=$part_row->idx where idx=$elements_data[$i]");}
	for( $i=0; $i < count($elements); $i++ ) { $db->update("cs_goods", "part_idx=$part_row->idx where idx=$elements[$i]");}
	$tools->javaGo("product_move.php?hidden_part_code=$_POST[to_hidden_part_code]");
//} else if( $_POST[to_hidden_move_copy]==2 && $_POST[to_hidden_part_code] && $_POST[to_hidden_elements] ) {
} else if( $_POST['to_hidden_move_copy']==2 && $_POST['to_hidden_part_code'] && ($elea>0) ) {
	if($_POST['to_hidden_part_code']) { $part_row=$db->object("cs_part", "where part1_code='$_POST[to_hidden_part_code]' or part2_code='$_POST[to_hidden_part_code]' or part3_code='$_POST[to_hidden_part_code]'", "idx");}
	//$elements_data = explode("&&", $_POST[to_hidden_elements] );
	$elements_data = explode("&&", $_POST['elements'] );
	$new_goods_code=time();
	//for( $i=0; $i < count($elements_data)-1; $i++ ) {
	for( $i=0; $i < count($elements); $i++ ) {
		$new_goods_code++; 
		$goods_stat = $db->object("cs_goods", "where idx=$elements[$i]");

		// 이미지 이름 초기화한다.
		$images1=""; $images2=""; $add_images1=""; $add_images2=""; $add_images3=""; $add_images4=""; $add_images5=""; $goods_file_name="";
		// 파일를 복사한다.
		if( $goods_stat->images1 ) { $images1 = 'GOODS1_'.$new_goods_code; if( !@copy( "../../data/goodsImages/".$goods_stat->images1, "../../data/goodsImages/".$images1 )) { $tools->errMsg("파일 카피 에러"); }}
		if( $goods_stat->images2 ) { $images2 = 'GOODS2_'.$new_goods_code; if( !@copy( "../../data/goodsImages/".$goods_stat->images2, "../../data/goodsImages/".$images2 )) { $tools->errMsg("파일 카피 에러"); }}
		if( $goods_stat->add_images1 ) { $add_images1 = 'ADD_GOODS1_'.$new_goods_code; if( !@copy( "../../data/goodsImages/".$goods_stat->add_images1, "../../data/goodsImages/".$add_images1 )) { $tools->errMsg("파일 카피 에러"); }}
		if( $goods_stat->add_images2 ) { $add_images2 = 'ADD_GOODS2_'.$new_goods_code; if( !@copy( "../../data/goodsImages/".$goods_stat->add_images2, "../../data/goodsImages/".$add_images2 )) { $tools->errMsg("파일 카피 에러"); }}
		if( $goods_stat->add_images3 ) { $add_images3 = 'ADD_GOODS3_'.$new_goods_code; if( !@copy( "../../data/goodsImages/".$goods_stat->add_images3, "../../data/goodsImages/".$add_images3 )) { $tools->errMsg("파일 카피 에러"); }}
		if( $goods_stat->add_images4 ) { $add_images4 = 'ADD_GOODS4_'.$new_goods_code; if( !@copy( "../../data/goodsImages/".$goods_stat->add_images4, "../../data/goodsImages/".$add_images4 )) { $tools->errMsg("파일 카피 에러"); }} 
		if( $goods_stat->add_images5 ) { $add_images5 = 'ADD_GOODS5_'.$new_goods_code; if( !@copy( "../../data/goodsImages/".$goods_stat->add_images5, "../../data/goodsImages/".$add_images5 )) { $tools->errMsg("파일 카피 에러"); }}
		if( $goods_stat->goods_file ) { $goods_file_arr = explode("&&", $goods_stat->goods_file ); $goods_file_name	= time()."&&".$goods_file_arr[1]; if( !@copy( "../../data/goodsImages/".$goods_stat->images1, "../../data/goodsImages/".$goods_file_name) ) { $tools->errMsg("파일 카피 에러"); }}

		$goods_stat->name				= $db->addSlash ( $goods_stat->name );
		$goods_stat->company			= $db->addSlash ( $goods_stat->company );
		if( $goods_stat->option_check ==1) 	{ $goods_stat->option1_name	= $db->addSlash ( $goods_stat->option1_name );}
		if( $goods_stat->option_check ==2) 	{ $goods_stat->option1_name	= $db->addSlash ( $goods_stat->option1_name ); $goods_stat->option2_name	= $db->addSlash ( $goods_stat->option2_name );}
		$goods_stat->content				= $db->addSlash ( $goods_stat->content );

		$db->insert("cs_goods", "part_idx='$part_row->idx', display='$goods_stat->display', code='$new_goods_code', name='$goods_stat->name', company='$goods_stat->company', old_price='$goods_stat->old_price', shop_price='$goods_stat->shop_price', unlimit='$goods_stat->unlimit', number='$goods_stat->number', point='$goods_stat->point', box='$goods_stat->box', option_check='$goods_stat->option_check', option1_name='$goods_stat->option1_name', option1_part='$goods_stat->option1_part', option2_name='$goods_stat->option2_name', option2_part='$goods_stat->option2_part', images1='$images1', images2='$images2', images3='$images3', add_images1='$add_images1', add_images2='$add_images2', add_images3='$add_images3', add_images4='$add_images4', add_images5='$add_images5', new_mark='$goods_stat->new_mark', hit_mark='$goods_stat->hit_mark', goods_file='$goods_file_name', tag='$goods_stat->tag', content='$goods_stat->content', register=now()");
	}
	$tools->javaGo("product_move.php?hidden_part_code=$_POST[to_hidden_part_code]");
//} else if( $_POST[to_hidden_move_copy]==3 && $_POST[to_hidden_elements] ) {
} else if( $_POST['to_hidden_move_copy']==3 && ($elea>0) ) {	
	if($_POST['to_hidden_part_code']) { $part_row=$db->object("cs_part", "where part1_code='$_POST[to_hidden_part_code]' or part2_code='$_POST[to_hidden_part_code]' or part3_code='$_POST[to_hidden_part_code]'", "idx");}
	//$elements_data = explode("&&", $_POST[to_hidden_elements] );
	$elements_data = explode("&&", $_POST['elements'] );
	//for( $i=0; $i < count($elements_data)-1; $i++ ) {
	for( $i=0; $i < count($elements); $i++ ) {
		// 넘어온 idx 로 삭제 레코드를 검색한다.
		$row = $db->object("cs_goods", "where idx=$elements[$i]");
		// 기본 이미지 삭제
		if( $row->images1) { @unlink("../../data/goodsImages/".$row->images1); } 
		if( $row->images2) { @unlink("../../data/goodsImages/".$row->images2); } 
		if( $row->add_images1) { @unlink("../../data/goodsImages/".$row->add_images1); } 
		if( $row->add_images2) { @unlink("../../data/goodsImages/".$row->add_images2); } 
		if( $row->add_images3) { @unlink("../../data/goodsImages/".$row->add_images3); } 
		if( $row->add_images4) { @unlink("../../data/goodsImages/".$row->add_images4); } 
		if( $row->add_images5) { @unlink("../../data/goodsImages/".$row->add_images5); } 
		// 상품 파일 삭제
		if( $row->goods_file) { @unlink("../../data/goodsImages/".$row->goods_file); }
		$db->delete("cs_goods", "where idx=$elements[$i]");
	}
	$tools->javaGo("product_move.php");
} else {
	
	//echo $_POST[to_hidden_move_copy]."<br>";
	//echo $_POST[to_hidden_part_code]."<br>";
	//echo $_POST[to_hidden_elements];
	
	$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
}
?>
