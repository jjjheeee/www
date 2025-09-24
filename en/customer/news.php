<?
$page_num = "05";
$sub_num = "02";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "customer";
$sub_section = "news";
$page_info = "CS Center";
$sub_info = "News";
$content_type="wide";
// $sub_info2 = "3차메뉴";	// 사용안할시 주석처리
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(Description)	필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<style>
#content.wide{padding: 180px 0;}
@media (max-width: 1260px){
	#content.wide{padding: 180px 30px;}
}
@media (max-width: 1024px){
	#content.wide{padding: 100px 15px;}
}
</style>

<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
	<!-- 
		- 슬라이드 리스트 이미지 권장사이즈 : 383*213 
		- 하단 갤러리 이미지 권장사이즈 : 290*162
	-->

	<section class="news-page">


<? if($bgu=="view"){ } else { ?>

		<article class="news-slide-wrapper" data-scroll="fade-up">
			<div class="slide-wrap">
				<button type="button" class="news-prev-btn news-slide-btn"><i class="xi-angle-left"></i></button>
				<div class="area">
					<ul class="news-slide-list">
						<?
						$code = "news";
						$rs = $db->select("cs_bbs_data","where code='$code' and notice>0 and lang='$lang' order by ranking asc, reg_date desc, idx desc");
						while($row = mysqli_fetch_object($rs)){
						?>
						<li>
							<a href="news.php?bgu=view&idx=<?=$row->idx?>">
								<div class="news-thumb over-img">
									<img src="/data/bbsData/<?=$row->sum_file?>" alt="예시이미지">
								</div>
								<div class="gallery-info">
									<em><?=substr($row->reg_date,0,10)?></em>
									<strong class="line-clamp2"><?=$row->subject?></strong>
								</div>
							</a>
						</li>
						<? } ?>
						<!-- <li>
							<a href="">
								<div class="news-thumb">
									<img src="<?=$site_host?>/images/test/news_slide_testImg.jpg" alt="예시이미지">
								</div>
								<div class="gallery-info">
									<em>2021-08-13</em>
									<strong class="line-clamp2">ISSCA Pre-Conference in Philippine</strong>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="news-thumb">
									<img src="<?=$site_host?>/images/test/news_slide_testImg.jpg" alt="예시이미지">
								</div>
								<div class="gallery-info">
									<em>2021-08-13</em>
									<strong class="line-clamp2">ISSCA Pre-Conference in Philippine</strong>
								</div>
							</a>
						</li>
						<li>
							<a href="">
								<div class="news-thumb">
									<img src="<?=$site_host?>/images/test/news_slide_testImg.jpg" alt="예시이미지">
								</div>
								<div class="gallery-info">
									<em>2021-08-13</em>
									<strong class="line-clamp2">ISSCA Pre-Conference in Philippine</strong>
								</div>
							</a>
						</li> -->
					</ul>
				</div>
				<button type="button" class="news-next-btn news-slide-btn"><i class="xi-angle-right"></i></button>
			</div>
		</article>

<? } ?>

		<div class="area" data-scroll="fade-up">


<?
$code = "news";

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


			<!-- <ul class="news-gallery-list">
				<li>
					<a href="/">
						<div class="news-thumb">
							<img src="<?=$site_host?>/images/test/news_testImg.jpg" alt="예시이미지">
						</div>
						<div class="gallery-info">
							<strong>ISSCA Pre-Conference in Philippine</strong>
							<em>2021-08-13</em>
						</div>
					</a>
				</li>
				<li>
					<a href="/">
						<div class="news-thumb">
							<img src="<?=$site_host?>/images/test/news_testImg.jpg" alt="예시이미지">
						</div>
						<div class="gallery-info">
							<strong>ISSCA Pre-Conference in Philippine</strong>
							<em>2021-08-13</em>
						</div>
					</a>
				</li>
				<li>
					<a href="/">
						<div class="news-thumb">
							<img src="<?=$site_host?>/images/test/news_testImg.jpg" alt="예시이미지">
						</div>
						<div class="gallery-info">
							<strong>ISSCA Pre-Conference in Philippine</strong>
							<em>2021-08-13</em>
						</div>
					</a>
				</li>
				<li>
					<a href="/">
						<div class="news-thumb">
							<img src="<?=$site_host?>/images/test/news_testImg.jpg" alt="예시이미지">
						</div>
						<div class="gallery-info">
							<strong>ISSCA Pre-Conference in Philippine</strong>
							<em>2021-08-13</em>
						</div>
					</a>
				</li>
				<li>
					<a href="/">
						<div class="news-thumb">
							<img src="<?=$site_host?>/images/test/news_testImg.jpg" alt="예시이미지">
						</div>
						<div class="gallery-info">
							<strong>ISSCA Pre-Conference in Philippine</strong>
							<em>2021-08-13</em>
						</div>
					</a>
				</li>
				<li>
					<a href="/">
						<div class="news-thumb">
							<img src="<?=$site_host?>/images/test/news_testImg.jpg" alt="예시이미지">
						</div>
						<div class="gallery-info">
							<strong>ISSCA Pre-Conference in Philippine</strong>
							<em>2021-08-13</em>
						</div>
					</a>
				</li>
				<li>
					<a href="/">
						<div class="news-thumb">
							<img src="<?=$site_host?>/images/test/news_testImg.jpg" alt="예시이미지">
						</div>
						<div class="gallery-info">
							<strong>ISSCA Pre-Conference in Philippine</strong>
							<em>2021-08-13</em>
						</div>
					</a>
				</li>
				<li>
					<a href="/">
						<div class="news-thumb">
							<img src="<?=$site_host?>/images/test/news_testImg.jpg" alt="예시이미지">
						</div>
						<div class="gallery-info">
							<strong>ISSCA Pre-Conference in Philippine</strong>
							<em>2021-08-13</em>
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
		</div>
	</section>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
