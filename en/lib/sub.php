<?
/* sub seo */
if($page_info){
	if($bbs_title) {
		$site_title_0 = $bbs_title." - ";
	}
	if($sub_info2) {
		$site_title_1 = $sub_info2." - ";
	}
	if($sub_info) {
		$site_title_2 = strip_tags($sub_info)." - ";
	}
	$site_title_last = $site_title_0.$site_title_1.$site_title_2.$page_info." - ".$site_title;
	$og_title = $site_title_last;
	$sns_title = $site_title_last;
	if($sub_info2==""){
		$site_subject = $sub_info;
	} else if($sub_info2!=""){
		$site_subject = $sub_info2;
	}
}
if($bgu=="view" and $idx){
	$idx = $db->filter($idx);
	$row_t = $db->object("cs_bbs_data","where idx='$idx'");
	$content = $tools->strCut_utf(strip_tags($row_t->content), 100);
	$sub_description = $row_t->subject." - ".$content;
}

if($sub_description){
	$site_description = $sub_description;
	$og_description = $site_description;
	$sns_description = $site_description;
}
?>