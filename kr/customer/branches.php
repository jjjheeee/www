<?
$page_num = "07";
$sub_num = "04";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "customer";
$sub_section = "branches";
$page_info = "CS Center";
$sub_info = "국내 대리점";
$content_type="wide";
// $sub_info2 = "3차메뉴";	// 사용안할시 주석처리
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(Description)	필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<style>
.content-tit{display: none;}
#content.wide{padding: 180px 0;}
@media (max-width: 1260px){
	#content.wide{padding: 180px 30px;}
}
@media (max-width: 1024px){
	#content.wide{padding: 100px 15px;}
}
@media (max-width: 800px){
	#content.wide{padding-bottom: 0;}
}
</style>

<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
	<section class="branches-page" data-scroll="fade-up">
		<div class="area branches-wrapper">
			<article class="branches-info-con">
				<h3 class="branches-content-tit">국내 대리점</h3>
				<div class="info-box point">
					<h4>본사 및 제1공장</h4>
					<div class="info-list">
						<div>
							<dl class="tel">
								<dt>엔바이오텍</dt>
								<dd class="font-noto">032-321-2100</dd>
							</dl>
							<p class="address">
								<strong>서울,경기</strong>
								<em>경기도 부천시</em>
							</p>
						</div>
					</div>
				</div>
				<div class="info-box">
					<h4>국내 대리점</h4>
					<div class="info-list">
						<div>
							<dl class="tel">
								<dt>이든바이오텍</dt>
								<dd class="font-noto">033-256-3385</dd>
							</dl>
							<p class="address">
								<strong>강원</strong>
								<em>강원도 춘천시</em>
							</p>
						</div>
						<!-- <div>
							<dl class="tel">
								<dt>중수과학</dt>
								<dd class="font-noto">043-235-2300</dd>
							</dl>
							<p class="address">
								<strong>충북</strong>
								<em>충청북도 청주시</em>
							</p>
						</div> -->
						<div>
							<dl class="tel">
								<dt>랩업</dt>
								<dd class="font-noto">043-716-0104</dd>
							</dl>
							<p class="address">
								<strong>충북</strong>
								<em>충청북도 청주시</em>
							</p>
						</div>
						<div>
							<dl class="tel clearfix">
								<dt>대명사이언스</dt>
								<dd class="font-noto">042-826-9798</dd>
							</dl>
							<p class="address">
								<strong>대전,충청</strong>
								<em>대전광역시</em>
							</p>
						</div>
						<div>
							<dl class="tel">
								<dt>라온테크</dt>
								<dd class="font-noto">062-268-7123</dd>
							</dl>
							<p class="address">
								<strong>광주,전남,전북</strong>
								<em>광주광역시</em>
							</p>
						</div>
						<div>
							<dl class="tel clearfix">
								<dt>지오리서치</dt>
								<dd class="font-noto">053-710-4790</dd>
							</dl>
							<p class="address">
								<strong>대구</strong>
								<em>대구광역시</em>
							</p>
						</div>
						<div>
							<dl class="tel">
								<dt>바이진</dt>
								<dd class="font-noto">054-278-8863</dd>
							</dl>
							<p class="address">
								<strong>포항</strong>
								<em>경북 포항시</em>
							</p>
						</div>
						<div>
							<dl class="tel">
								<dt>오투바이오</dt>
								<dd class="font-noto">070-7777-6502</dd>
							</dl>
							<p class="address">
								<strong>부산</strong>
								<em>부산광역시</em>
							</p>
						</div>
						<div>
							<dl class="tel">
								<dt>SM바이오텍</dt>
								<dd class="font-noto">055-762-5095</dd>
							</dl>
							<p class="address">
								<strong>진주</strong>
								<em>경상남도진주시</em>
							</p>
						</div>
						<div>
							<dl class="tel">
								<dt>소일테크</dt>
								<dd class="font-noto">064-702-1833</dd>
							</dl>
							<p class="address">
								<strong>제주</strong>
								<em>제주특별자치도</em>
							</p>
						</div>
					</div>
				</div>
			</article>
			<article class="branches-map-con">
				<img src="<?=$site_host?>/images/content/branches_map.png" alt="지도이미지">
			</article>
		</div>
	</section>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
