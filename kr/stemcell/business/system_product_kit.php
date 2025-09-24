<?
$page_num = "03";
$sub_num = "04";
$sub_num2 = "02";
$sub_num3 = "04";
$sub_num4 = "02";
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
				<div class="system-kit-con01 system-prd-top-con" data-scroll="fade-up">
					<strong class="system-prd-tit">스템피아 키트</strong>
					<div class="con-box">
						<div class="img-box"><img src="<?=$site_host?>/images/content/stemcell_business_system_kit_top_img.png" alt=""></div>
						<div class="txt-box">
							<span class="logo"><img src="<?=$site_host?>/images/content/stemcell_business_system_kit_top_logo.png" alt="STEMPIA"></span>
							<strong class="tit">엔바이오텍의 SVF 분리 추출 키트</strong>
						</div>
					</div>
				</div>
				<div class="system-kit-con02">
					<div class="tit-box" data-scroll="fade-up">
						<strong class="stem-business-tit small">STEMPIA KIT를 통한 간편하고 쉬운 SVF 분리 추출</strong>
						<p class="stem-business-txt">
							STEMPIA KIT는 엔바이오텍에서 자체개발한 SVF 분리추출 키트로 기존의 매뉴얼 방식보다 더 쉽고, 간편하며 시간을 절약해줍니다. 
							<span>높은 세포 생존율과 오염으로부터 안전한 STEMPIA KIT를 통해 SVF와 PRP 시술 효과를 높이실 수 있습니다. </span>
						</p>
					</div>
					<div class="con-box">
						<div class="item" data-scroll="fade-up">
							<div class="inner">
								<div class="left-box"><strong class="tit">간단하고 쉬운 분리</strong></div>
								<div class="right-box"><p class="txt stem-business-txt">SVF 분리 과정이 간소화되어 누구나 쉽게 SVF를 분리할 수 있습니다.</p></div>
							</div>
						</div>
						<div class="item" data-scroll="fade-up">
							<div class="inner">
								<div class="left-box"><strong class="tit">오염 및 세포손상 최소화</strong></div>
								<div class="right-box"><p class="txt stem-business-txt">분리 과정에서 지방 조직과 세포가 외부 환경에 노출되지 않으므로 오염의 위험이 최소화됩니다.</p></div>
							</div>
						</div>
						<div class="item" data-scroll="">
							<div class="inner">
								<div class="left-box"><strong class="tit">높은 세포 생존율 및 수율</strong></div>
								<div class="right-box"><p class="txt stem-business-txt">STEMPIA 키트의 우수한 세포 생존율과 수율로 시술의 품질이 업그레이드됩니다.</p></div>
							</div>
							<div class="graph-box">
								<div class="graph-item item01">
									<div class="inner-box">
										<div class="tit-box">
											<strong class="tit">생존율 테스트</strong>
											<span class="unit">
												평균 <b>90%</b> <br> 세포 생존율
											</span>
										</div>
										<div class="bar-box">
											<img src="<?=$site_host?>/images/content/stemcell_business_product_kit_graph_bg_01.jpg" alt="">
											<span class="bar"><img src="<?=$site_host?>/images/content/stemcell_business_product_kit_graph_bar_01.png" alt=""></span>
										</div>
									</div>
								</div>
								<div class="graph-item item02">
									<div class="inner-box">
										<div class="tit-box">
											<strong class="tit">세포 수율 테스트</strong>
											<span class="unit">
												Stempia 키트 한 세트를 이용하여<br>
												<b>SVF 5000만 개 추출 가능</b><br>
												(지방 조직 40mL)
											</span>
										</div>
										<div class="bar-box">
											<img src="<?=$site_host?>/images/content/stemcell_business_product_kit_graph_bg_02.png" alt="">
											<span class="bar"><img src="<?=$site_host?>/images/content/stemcell_business_product_kit_graph_bar_02.png" alt=""></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item" data-scroll="fade-up">
							<div class="inner">
								<div class="left-box"><strong class="tit">소모품 비용절감</strong></div>
								<div class="right-box">
									<p class="txt stem-business-txt">필요한 소모품 개수와 종류가 줄어들어 비용이 크게 절약됩니다.</p>
								</div>
								<div class="img-box">
									<ul class="img-list">
										<li>
											<dl>
												<dt><img src="<?=$site_host?>/images/content/stemcell_business_system_kit_img_01.jpg" alt="Consumables required for SVF isolation (General Manual) Image"></dt>
												<dd>타사 제품 SVF분리 시 필요한 소모품</dd>
											</dl>
										</li>
										<li>
											<dl>
												<dt><img src="<?=$site_host?>/images/content/stemcell_business_system_kit_img_02.jpg" alt="Consumables of STEMPIA KIT Image"></dt>
												<dd>STEMPIA 키트의 소모품</dd>
											</dl>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>
	</section>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
