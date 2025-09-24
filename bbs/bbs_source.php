<?
$code = "free";

switch($bgu){
	case "list":
		include $_SERVER['DOCUMENT_ROOT']."/bbs/bbs_list.php";
	break;

	case "view":
		include $_SERVER['DOCUMENT_ROOT']."/bbs/bbs_view.php";
	break;

	case "write":
		include $_SERVER['DOCUMENT_ROOT']."/bbs/bbs_write.php";
	break;

	case "edit":
		include $_SERVER['DOCUMENT_ROOT']."/bbs/bbs_edit.php";
	break;

	case "pass":
		include $_SERVER['DOCUMENT_ROOT']."/bbs/bbs_passwd.php";
	break;

	default :
		include $_SERVER['DOCUMENT_ROOT']."/bbs/bbs_list.php";
	break;
}
?>							