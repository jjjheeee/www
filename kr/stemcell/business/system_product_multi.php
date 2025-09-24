<?
$page_num = "03";
$sub_num = "04";
$sub_num2 = "02";
$sub_num3 = "04";
$sub_num4 = "01";
$page_section = "stemcell";
$sub_section = "business";
$sub_section2 = "system";
$sub_section3 = "product";
$page_info = "줄기세포";
//$sub_info = "줄기세포 사업";
$sub_info = "스템피아";
$sub_info2 = "스템피아 시스템";
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
	<section class="stemcell-system-page stemcell-business-container">
		<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/stemcell/business/left_menu.php"; ?>
		<article class="stemcell-business-content">
			<div class="area">
				<div class="system-multi-con01 system-prd-top-con"  data-scroll="fade-up">
					<strong class="system-prd-tit">스템셀 멀티워크스테이션</strong>
					<div class="con-box">
						<div class="img-box"><img src="<?=$site_host?>/images/content/stemcell_business_system_multi_top_img.png" alt=""></div>
						<div class="txt-box">
							<strong class="tit">
								편리하고 안전하게 줄기세포 추출 
							</strong>
							<p class="txt">무균작업대 내에서 원심분리기와 진탕배양기 사용이 가능하여 동선이 최소화되고 SVF 분리의 모든 과정이 무균 환경에서 이루어져 외부 오염의 위험을 줄여  더욱 편리하고 안전한 줄기세포 추출이 가능합니다</p>
						</div>
					</div>
				</div>
				<div class="system-multi-con02">
					<strong class="stem-business-tit small"  data-scroll="fade-up" style="display:block;">SVF 분리용 멀티 워크스테이션</strong>
					<p class="stem-business-txt" data-scroll="fade-up">
						무균작업대 내에서 원심분리기와 진탕배양기 사용이 가능하여 동선이 최소화되고 <br class="pc-br">
						SVF 분리의 모든 과정이 무균 환경에서 이루어져 외부 오염의 위험을 줄여  더욱 편리하고 안전한 줄기세포 추출이 가능합니다
						<!--<span>It minimizes the risk of contamination during stem cell isolation or some biological application. <br class="pc-br">
						Enjoy all-in-one station for the efficiency.</span>-->
					</p>
					<div class="img-box pc-ver" data-scroll=""><? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/stemcell/business/system_product_multi_svg.php"; ?></div>
					<div class="img-box m-ver" data-scroll=""><? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/stemcell/business/system_product_multi_svg_m.php"; ?></div>
				</div>
				<div class="system-multi-con03" data-scroll="fade-up">
					<strong class="stem-business-tit small">스템셀 멀티워크스테이션을 이용한 쉽고 효과적인 SVF 분리 및 응용</strong>
					<div class="con-box">
						<ul class="system-multi-list">
							<li>
								<dl>
									<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_system_multi_list_img_01.jpg" alt="Liposuction Image"></span></dt>
									<dd>
										<b class="num">01</b>
										<p class="txt">지방채취</p>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_system_multi_list_img_02.jpg" alt="Prepare STEMPIA Kits and other materials Image"></span></dt>
									<dd>
										<b class="num">02</b>
										<p class="txt">STEMPIA 키트 및 기타 소모품 준비 </p>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_system_multi_list_img_03.jpg" alt="Decompose fat tissue by using a 1st stempia kit, collagenase and shaking incubator Image"></span></dt>
									<dd>
										<b class="num">03</b>
										<p class="txt">1번 키트, 콜라게나아제와 진탕배양기를 사용하여 지방 조직 분해</p>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_system_multi_list_img_04.jpg" alt="Isolate SVF by using a centrifuge Image"></span></dt>
									<dd>
										<b class="num">04</b>
										<p class="txt">원심분리기를 사용하여 SVF 분리</p>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_system_multi_list_img_05.jpg" alt="Wash SVF by using 2nd Stempia kit and normal saline Image"></span></dt>
									<dd>
										<b class="num">05</b>
										<p class="txt">2번키트와 생리식염수를 활용하여  SVF 세척</p>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_system_multi_list_img_06.jpg" alt="Collect SVF Image"></span></dt>
									<dd>
										<b class="num">06</b>
										<p class="txt">SVF 추출</p>
									</dd>
								</dl>
							</li>
							<li>
								<dl>
									<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_system_multi_list_img_07.jpg" alt="Activate SVF by using a Led Cell Activator Image"></span></dt>
									<dd>
										<b class="num">07</b>
										<p class="txt">LED 셀 액티베이터를 사용하여 SVF 활성화 </p>
									</dd>
								</dl>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</article>
	</section>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
