<?
$page_num = "01";
$sub_num = "03";
$page_section = "search";
$sub_section = "index";
$page_info = "통합검색";
$sub_info = "";
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(서브페이지) *필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<style>
/* css */


                    
</style>
<script>
/* js */

</script>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>

 
 
					<!-- 각각 상세 페이지 (/search/search_board.php) -->
					<section class="search-result-detail-container">
					<article class="search-result-top-container">
						<article class="search-result-classify-con clearfix">
							<div class="search-result-classify-item">
								<div class="search-result-classify-inner">
									<p class="result-list-tit"><i class="material-icons"></i> 게시글 검색 결과</p>
									<p class="result-info"><strong class="result-bold-txt">777</strong>개의 컨텐츠가 검색되었습니다.</p>
								</div>
							</div>
						</article>
					</article>
					<article class="total-search-result-list-con">
						<article class="total-search-result-con total-search-board-result-con">
							<ul class="total-search-result-bbs-list">
								<li>
									<a href="">
										<span class="result-cate">갤러리</span>
										<strong class="result-tit">홈페이지를 새롭게 오픈하였습니다.</strong>
										<p class="result-txt">이른 아침 작은 새들 노랫소리 들려오면 언제나 그랬듯 아쉽게 잠을 깬다 창문 하나 햇살 가득 눈부시게 비쳐오고 서늘한 냉기에 재채기할까 말까
										눈 비비며 빼꼼히 창밖을 내다보니 삼삼오오 아이들은 재잘대며 학교 가고 산책 갔다 오시는 아버지의 양손에는 효과를 알 수 없는 약수가 하나 가득 딸각딸각 아침 짓는 어머니의 분주함과 엉금엉금 냉수 찾는 그 아들의 게으름이 상큼하고 깨끗한 아침의 향기와 구수하게 밥 뜸드는 냄새가 어우러진 </p>
									</a>
								</li>
								<li>
									<a href="">
										<span class="result-cate">NEWS</span>
										<strong class="result-tit">홈페이지를 새롭게 오픈하였습니다.</strong>
										<p class="result-txt">이른 아침 작은 새들 노랫소리 들려오면 언제나 그랬듯 아쉽게 잠을 깬다 창문 하나 햇살 가득 눈부시게 비쳐오고 서늘한 냉기에 재채기할까 말까
										눈 비비며 빼꼼히 창밖을 내다보니 삼삼오오 아이들은 재잘대며 학교 가고 산책 갔다 오시는 아버지의 양손에는 효과를 알 수 없는 약수가 하나 가득 딸각딸각 아침 짓는 어머니의 분주함과 엉금엉금 냉수 찾는 그 아들의 게으름이 상큼하고 깨끗한 아침의 향기와 구수하게 밥 뜸드는 냄새가 어우러진 </p>
									</a>
								</li>
								<li>
									<a href="">
										<span class="result-cate">영상</span>
										<strong class="result-tit">홈페이지를 새롭게 오픈하였습니다.</strong>
										<p class="result-txt">이른 아침 작은 새들 노랫소리 들려오면 언제나 그랬듯 아쉽게 잠을 깬다 창문 하나 햇살 가득 눈부시게 비쳐오고 서늘한 냉기에 재채기할까 말까
										눈 비비며 빼꼼히 창밖을 내다보니 삼삼오오 아이들은 재잘대며 학교 가고 산책 갔다 오시는 아버지의 양손에는 효과를 알 수 없는 약수가 하나 가득 딸각딸각 아침 짓는 어머니의 분주함과 엉금엉금 냉수 찾는 그 아들의 게으름이 상큼하고 깨끗한 아침의 향기와 구수하게 밥 뜸드는 냄새가 어우러진 </p>
									</a>
								</li>
								<li class="thumb-item"><!-- 갤러리 형식의 리스트이면 thumb-item 를 붙여야함 -->
									<a href="">
										<span class="result-cate">갤러리</span>
										<span class="result-thumb"><img src="http://design.giantsoft.co.kr/images/test/thum/test14.jpg" alt=""></span>
										<strong class="result-tit">홈페이지를 새롭게 오픈하였습니다.</strong>
										<p class="result-txt">이른 아침 작은 새들 노랫소리 들려오면 언제나 그랬듯 아쉽게 잠을 깬다 창문 하나 햇살 가득 눈부시게 비쳐오고 서늘한 냉기에 재채기할까 말까
										눈 비비며 빼꼼히 창밖을 내다보니 삼삼오오 아이들은 재잘대며 학교 가고 산책 갔다 오시는 아버지의 양손에는 효과를 알 수 없는 약수가 하나 가득 딸각딸각 아침 짓는 어머니의 분주함과 엉금엉금 냉수 찾는 그 아들의 게으름이 상큼하고 깨끗한 아침의 향기와 구수하게 밥 뜸드는 냄새가 어우러진 </p>
									</a>
								</li>
							</ul>
						</article>
						<div class="paging">
							<a href="" class="paging-arrow"><i class="material-icons" title="처음"></i></a>
							<a href="" class="paging-arrow"><i class="material-icons" title="이전"></i></a>
							<a href="" class="cur">1</a>
							<a href="">2</a>
							<a href="">3</a>
							<a href="">4</a>
							<a href="" class="paging-arrow"><i class="material-icons" title="다음"></i></a>
							<a href="" class="paging-arrow"><i class="material-icons" title="마지막"></i></a>
						</div>
					</article>
					</section>
					<!-- // -->
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
