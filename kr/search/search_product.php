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
				

				<!-- 각각 상세 페이지 (/search/search_product.php) -->
				<section class="search-result-detail-container">
					<article class="search-result-top-container">
						<article class="search-result-classify-con clearfix">
							<div class="search-result-classify-item">
								<div class="search-result-classify-inner">
									<p class="result-list-tit"><i class="material-icons"></i> 제품 검색 결과</p>
									<p class="result-info"><strong class="result-bold-txt">777</strong>개의 컨텐츠가 검색되었습니다.</p>
								</div>
							</div>
						</article>
					</article>
					<article class="total-search-result-list-con">
						해당 프로젝트에 들어가는 제품 리스트 넣어주세요
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
