<?
$page_num = "01";
$sub_num = "01";
$page_section = "company";
$sub_section = "ceo";
$page_info = "회사소개";
$sub_info = "CEO인사말";
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(서브페이지) *필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<style>
/* css */

</style>

<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
				<?
				$code = "news";	// 게시판 코드
				
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

<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
