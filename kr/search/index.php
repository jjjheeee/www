<?
$page_num = "01";
$sub_num = "03";
$page_section = "search";
$sub_section = "index";
$page_info = "통합검색";	// EN : Search / CH : 综合搜索 / JP : 統合検索
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
				
						<!-- 여기서부터 START (/search/index.php)-->
						<article class="search-result-top-container">
							<aside class="search-result-top-con">
								<div class="result-top-tit"><strong class="result-bold-txt">"테스트"</strong> 검색결과</div>
								<p class="result-txt"><strong class="result-bold-txt">"테스트"</strong> 에 대한 <b>123</b>개의 검색결과입니다.</p>
								<!-- 검색결과가 없을때 -->
								<div class="no-result-txt">
									<p><strong class="result-bold-txt">"테스트"</strong> 에 대한 검색결과가 없습니다. 다시 시도하여 주시기 바랍니다.</p>
									<ul>
										<li>- 단어의 철자가 정확한지 확인하세요.</li>
										<li>- 한글을 영어로 혹은 영어를 한글로 입력했는지 확인하세요.</li>
										<li>- 검색어의 단어 수를 줄이거나, 보다 일반적인 검색어로 다시 검색하세요.</li>
										<li>- 두 단어 이상의 검색어인 경우, 띄어쓰기를 확인하세요.</li>
									</ul>
								</div>
								<!-- // -->
							</aside>
							<!-- 통합검색일때 넣어주세요 -->
							<article class="search-result-classify-con clearfix">
								<div class="search-result-classify-item">
									<div class="search-result-classify-inner">
										<p class="result-list-tit"><i class="material-icons"></i> 게시글 검색 결과</p>
										<p class="result-info"><strong class="result-bold-txt">777</strong>개의 컨텐츠가 <br>검색되었습니다.</p>
									</div>
								</div>
								<div class="search-result-classify-item">
									<div class="search-result-classify-inner">
										<p class="result-list-tit"><i class="material-icons"></i> 제품 검색 결과</p>
										<p class="result-info"><strong class="result-bold-txt">777</strong>개의 컨텐츠가 <br>검색되었습니다.</p>
									</div>
								</div>
							</article>
							<!-- // -->
						</article>
						<section class="total-search-result-list-con">
							<article class="total-search-result-con total-search-board-result-con">
								<div class="totabl-search-list-tit-box clearfix">
									<h3 class="total-search-list-tit"><strong>게시글</strong> 검색결과</h3>
									<a href="./search_board.php" class="total-search-more-btn" title="게시글 검색결과 더보기"><i class="material-icons">&#xe03b;</i></a>
								</div>
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
							<!-- 통합검색일때 ( 제품검색 ) -->
							<article class="total-search-result-con">
								<div class="totabl-search-list-tit-box clearfix">
									<h3 class="total-search-list-tit"><strong>제품</strong> 검색결과</h3>
									<a href="./search_product.php" class="total-search-more-btn" title="제품 검색결과 더보기"><i class="material-icons">&#xe03b;</i></a>
								</div>
								해당 프로젝트에 들어가는 제품 리스트 넣어주세요
							</article>
						</section>
						<!-- 영문버전 -->
						<article class="search-result-top-container">
							<aside class="search-result-top-con">
								<div class="result-top-tit"><strong class="result-bold-txt">"TEST"</strong> Search Result</div>
								<p class="result-txt"><b>123</b> results for <strong class="result-bold-txt">"TEST"</strong>.</p>
								<!-- 검색결과가 없을때 -->
								<div class="no-result-txt">
									<p>No results for <strong class="result-bold-txt">"TEST"</strong> Please try again.</p>
									<ul class="en-no-result-txt">
										<li>- Make sure the word is spelled correctly.</li>
										<li>- Make sure you have entered Korean as English or English as Korean.</li>
										<li>- Reduce the number of words in your query, or search again with more general terms.</li>
										<li>- If the search term is more than one word, check the spacing.</li>
									</ul>
								</div>
								<!-- // -->
							</aside>
							<!-- 통합검색일때 넣어주세요 -->
							<article class="search-result-classify-con clearfix">
								<div class="search-result-classify-item">
									<div class="search-result-classify-inner">
										<p class="result-list-tit"><i class="material-icons"></i> Search results</p>
										<p class="result-info"><strong class="result-bold-txt">777</strong>content found.</p>
									</div>
								</div>
								<div class="search-result-classify-item">
									<div class="search-result-classify-inner">
										<p class="result-list-tit"><i class="material-icons"></i> Product search results</p>
										<p class="result-info"><strong class="result-bold-txt">777</strong>content found.</p>
									</div>
								</div>
							</article>
							<!-- // -->
						</article>
						<section class="total-search-result-list-con">
							<article class="total-search-result-con total-search-board-result-con">
								<div class="totabl-search-list-tit-box clearfix">
									<h3 class="total-search-list-tit"><strong>Posts</strong> Search Results</h3>
									<a href="./search_board.php" class="total-search-more-btn" title="Posts Search Results"><i class="material-icons">&#xe03b;</i></a>
								</div>
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
							<!-- 통합검색일때 ( 제품검색 ) -->
							<article class="total-search-result-con">
								<div class="totabl-search-list-tit-box clearfix">
									<h3 class="total-search-list-tit"><strong>Product </strong> Search Results</h3>
									<a href="./search_product.php" class="total-search-more-btn" title="Product Search Results"><i class="material-icons">&#xe03b;</i></a>
								</div>
								해당 프로젝트에 들어가는 제품 리스트 넣어주세요
							</article>
						</section>
						<!-- // -->
						<!-- 중문버전 -->
						<article class="search-result-top-container">
							<aside class="search-result-top-con">
								<div class="result-top-tit"><strong class="result-bold-txt">"TEST"</strong>搜索结果</div>
								<p class="result-txt"><strong class="result-bold-txt">"TEST"</strong> 对于 <b>123</b>结果来自.</p>
								<!-- 검색결과가 없을때 -->
								<div class="no-result-txt">
									<p><strong class="result-bold-txt">"TEST"</strong> 找不到结果。 请再试一次。</p>
									<ul>
										<li>- 确保单词拼写正确。</li>
										<li>- 确保您输入韩语为英语或英语为韩语。</li>
										<li>- 减少查询中的字数，或使用更一般的术语再次搜索。</li>
										<li>- 如果搜索词不止一个单词，请检查间距。</li>
									</ul>
								</div>
								<!-- // -->
							</aside>
							<!-- 통합검색일때 넣어주세요 -->
							<article class="search-result-classify-con clearfix">
								<div class="search-result-classify-item">
									<div class="search-result-classify-inner">
										<p class="result-list-tit"><i class="material-icons"></i> 帖子 搜索结果</p>
										<p class="result-info"><strong class="result-bold-txt">777</strong>内容已被检索。</p>
									</div>
								</div>
								<div class="search-result-classify-item">
									<div class="search-result-classify-inner">
										<p class="result-list-tit"><i class="material-icons"></i> 生产 搜索结果</p>
										<p class="result-info"><strong class="result-bold-txt">777</strong>内容已被检索。</p>
									</div>
								</div>
							</article>
							<!-- // -->
						</article>
						<section class="total-search-result-list-con">
							<article class="total-search-result-con total-search-board-result-con">
								<div class="totabl-search-list-tit-box clearfix">
									<h3 class="total-search-list-tit"><strong>帖子 </strong> 搜索结果</h3>
									<a href="./search_board.php" class="total-search-more-btn" title="帖子 搜索结果"><i class="material-icons">&#xe03b;</i></a>
								</div>
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
							<!-- 통합검색일때 ( 제품검색 ) -->
							<article class="total-search-result-con">
								<div class="totabl-search-list-tit-box clearfix">
									<h3 class="total-search-list-tit"><strong>生产  </strong> 搜索结果</h3>
									<a href="./search_product.php" class="total-search-more-btn" title="生产 搜索结果"><i class="material-icons">&#xe03b;</i></a>
								</div>
								해당 프로젝트에 들어가는 제품 리스트 넣어주세요
							</article>
						</section>
						<!-- // -->
						<!-- 일문버전 -->
						<article class="search-result-top-container">
							<aside class="search-result-top-con">
								<div class="result-top-tit"><strong class="result-bold-txt">"TEST"</strong>検索結果</div>
								<p class="result-txt"><strong class="result-bold-txt">"TEST"</strong>の<b>1</b>本検索結果です。</p>
								<!-- 검색결과가 없을때 -->
								<div class="no-result-txt">
									<p><strong class="result-bold-txt">"TEST"</strong>の検索結果がありません。再試行してください。</p>
									<ul>
										<li> - 単語のスペルが正しいことを確認してください。</li>
										<li> - ハングルを英語でまたは英語をハングルで入力してください。</li>
										<li> - 検索の単語数を減らすか、より一般的な用語で再検出します。</li>
										<li> - 複数の単語を検索の場合、スペースを確認してください。</li>
									</ul>
								</div>
								<!-- // -->
							</aside>
							<!-- 통합검색일때 넣어주세요 -->
							<article class="search-result-classify-con clearfix">
								<div class="search-result-classify-item">
									<div class="search-result-classify-inner">
										<p class="result-list-tit"><i class="material-icons"></i> スレッド検索結果</p>
										<p class="result-info"><strong class="result-bold-txt">777</strong>のコンテンツが検索されました。</p>
									</div>
								</div>
								<div class="search-result-classify-item">
									<div class="search-result-classify-inner">
										<p class="result-list-tit"><i class="material-icons"></i>  製品検索結果</p>
										<p class="result-info"><strong class="result-bold-txt">777</strong>のコンテンツが検索されました。</p>
									</div>
								</div>
							</article>
							<!-- // -->
						</article>
						<section class="total-search-result-list-con">
							<article class="total-search-result-con total-search-board-result-con">
								<div class="totabl-search-list-tit-box clearfix">
									<h3 class="total-search-list-tit"><strong>スレッド </strong> 検索結果</h3>
									<a href="./search_board.php" class="total-search-more-btn" title="スレッド 検索結果"><i class="material-icons">&#xe03b;</i></a>
								</div>
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
							<!-- 통합검색일때 ( 제품검색 ) -->
							<article class="total-search-result-con">
								<div class="totabl-search-list-tit-box clearfix">
									<h3 class="total-search-list-tit"><strong>製品  </strong> 検索結果</h3>
									<a href="./search_product.php" class="total-search-more-btn" title="製品 検索結果"><i class="material-icons">&#xe03b;</i></a>
								</div>
								해당 프로젝트에 들어가는 제품 리스트 넣어주세요
							</article>
						</section>
						<!-- // -->
						<!-- // 여기까지 -->
 
 
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
