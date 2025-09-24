<?
$page_num = "03";
$sub_num = "03";
$sub_num2 = "04";
$sub_num3 = "02";
$page_section = "stemcell";
$sub_section = "business";
$sub_section2 = "banking";
$page_info = "줄기세포";
$sub_info = "줄기세포 사업";
$sub_info2 = "셀뱅킹";
$content_type="wide";
// $sub_info2 = "3차메뉴";	// 사용안할시 주석처리
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../../lib/config.php";
$sub_description = ""; // 페이지 설명(Description)	필요시 사용
include "../../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<style>
	#content.wide {padding:0;}
</style>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
	<section class="stemcell-banking-page stemcell-business-container">
		<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/stemcell/business/left_menu.php"; ?>
		<article class="stemcell-business-content">
			<div class="area">
				<div class="banking-process-con" data-scroll="fade-up">
					<ul class="banking-process-list">
						<li>
							<dl>
								<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_banking_process_img_01.jpg" alt=""></span></dt>
								<dd>
									<strong class="tit"><span class="num">01</span>가입신청</strong>
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_banking_process_img_02.jpg" alt=""></span></dt>
								<dd>
									<strong class="tit"><span class="num">02</span>채혈</strong>
									<div class="txt-box">
										<p class="txt point">지방채취 7일 전에 실시</p>
									</div>
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_banking_process_img_03.jpg" alt=""></span></dt>
								<dd>
									<strong class="tit"><span class="num">03</span>적격검사</strong>
									<div class="txt-box">
										<p class="txt">환자 상태 점검</p>
										<p class="txt">치료 전후 효과 설명</p>
									</div>
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_banking_process_img_04.jpg" alt=""></span></dt>
								<dd>
									<strong class="tit"><span class="num">04</span>세포 분리</strong>
									<div class="txt-box">
										<p class="txt">엔바이오텍 스템피아 키트 사용</p>
										<p class="txt">지방 조직 40mL에서 5천만 개의 SVF 세포 추출 가능</p>
									</div>
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_banking_process_img_05.jpg" alt=""></span></dt>
								<dd>
									<strong class="tit"><span class="num">05</span>냉동보관</strong>
									<div class="txt-box">
										<p class="txt">특수 냉동 보존 기술 활용</p>
										<p class="txt point">90% 이상의 세포 생존율</p>
									</div>
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_banking_process_img_06.jpg" alt=""></span></dt>
								<dd>
									<strong class="tit"><span class="num">06</span>사용 요청 및 배송</strong>
									<div class="txt-box">
										<p class="txt point">필요 시 사용 가능</p>
										<p class="txt">건강, 미용, 항노화 및 질병 치료의 목적으로 사용</p>
									</div>
								</dd>
							</dl>
						</li>
					</ul>
				</div>
			</div>
		</article>
	</section>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
