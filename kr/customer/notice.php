<?
$page_num = "07";
$sub_num = "01";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "customer";
$sub_section = "notice";
$page_info = "CS Center";
$sub_info = "공지사항";
//$content_type="wide";
// $sub_info2 = "3차메뉴";	// 사용안할시 주석처리
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(Description)	필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<style>
#content:not(.wide){padding: 180px 0;}
@media (max-width: 1260px){
	#content:not(.wide){padding: 180px 30px;}
}
@media (max-width: 1024px){
	#content:not(.wide){padding: 100px 30px;}
}
</style>

<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
	<section class="notice-page" data-scroll="fade-up">

<?
$code = "notice";

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



		<!-- <ul class="bbs-list-style02">
			<li class="bbs-item">
			  <a href="">
				 <p class="bbs-list-date"><strong>13</strong><span>2020.08</span></p>
					<div class="bbs-list-info-con">
						<div class="bbs-subject-box">
							<div class="bbs-subject-txt-box">
								<strong class="bbs-subject-txt">BOD INCUBATOR / 저온 배양기(150리터,250리터,432리터) / Low Temperature Incubator / B.O.D 인큐베이터</strong>
								<div class="bbs-subject-icons"></div>
							</div>
						</div>
					<p class="bbs-list-sub-txt">BOD INCUBATOR / 저온 배양기(150리터,250리터,432리터) / Low Temperature Inctubator / B.O.D 인큐베이터</p>
				 </div>
				 <div class="bbs-right-info-con">
					<i class="xi-long-arrow-right"></i>
				 </div>
			  </a>
		   </li>
		   <li class="bbs-item">
			  <a href="">
				 <p class="bbs-list-date"><strong>13</strong><span>2020.08</span></p>
					<div class="bbs-list-info-con">
						<div class="bbs-subject-box">
							<div class="bbs-subject-txt-box">
								<strong class="bbs-subject-txt">BOD INCUBATOR / 저온 배양기(150리터,250리터,432리터) / Low Temperature Incubator / B.O.D 인큐베이터</strong>
								<div class="bbs-subject-icons"></div>
							</div>
						</div>
					<p class="bbs-list-sub-txt">BOD INCUBATOR / 저온 배양기(150리터,250리터,432리터) / Low Temperature Inctubator / B.O.D 인큐베이터</p>
				 </div>
				 <div class="bbs-right-info-con">
					<i class="xi-long-arrow-right"></i>
				 </div>
			  </a>
		   </li>
		</ul>

		<div class="paging">
			<a href="javascript:;" class="cur">1</a>  <a href="/board/notice.php?search_item=L02&amp;search_order=&amp;startPage=10">2</a>
		</div>

		<div class="board-search-box">
			<div class="board-search-inner clearfix">
				<select name="search_item" class="search-subject-select">
					<option value="subject">Subject</option>
					<option value="content">content</option>
				</select>
				<input placeholder="Please enter your search term." type="search" name="search_order" class="search-word" value="">
				<button type="submit" class="bbs-search-btn" title="search"><i class="xi-search"></i></button>
			</div>
		</div> -->
	</section>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
