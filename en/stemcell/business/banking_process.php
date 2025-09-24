<?
$page_num = "03";
$sub_num = "03";
$sub_num2 = "04";
$sub_num3 = "02";
$page_section = "stemcell";
$sub_section = "business";
$sub_section2 = "banking";
$page_info = "Stem Cell";
$sub_info = "Stem Cell Business";
$sub_info2 = "CELL BANKING";
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
									<strong class="tit"><span class="num">01</span>Registration</strong>
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_banking_process_img_02.jpg" alt=""></span></dt>
								<dd>
									<strong class="tit"><span class="num">02</span>Blood test</strong>
									<div class="txt-box">
										<p class="txt point">Conduct 7 days before liposuction</p>
									</div>
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_banking_process_img_03.jpg" alt=""></span></dt>
								<dd>
									<strong class="tit"><span class="num">03</span>Qualification</strong>
									<div class="txt-box">
										<p class="txt">Check patient’s condition</p>
										<p class="txt">Compare the result before and after treatment</p>
									</div>
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_banking_process_img_04.jpg" alt=""></span></dt>
								<dd>
									<strong class="tit"><span class="num">04</span>Cell isolation</strong>
									<div class="txt-box">
										<p class="txt">Using N-BIOTEK Stempia Kit</p>
										<p class="txt">50M SVF extractable from 40mL fat tissue</p>
									</div>
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_banking_process_img_05.jpg" alt=""></span></dt>
								<dd>
									<strong class="tit"><span class="num">05</span>Cell banking</strong>
									<div class="txt-box">
										<p class="txt">By special cryopreservation technology</p>
										<p class="txt point">Over 90% of long-term cell viability</p>
									</div>
								</dd>
							</dl>
						</li>
						<li>
							<dl>
								<dt><span><img src="<?=$site_host?>/images/content/stemcell_business_banking_process_img_06.jpg" alt=""></span></dt>
								<dd>
									<strong class="tit"><span class="num">06</span>Request for use</strong>
									<div class="txt-box">
										<p class="txt point">At anytime when needed</p>
										<p class="txt">Additional cell culture, quality control necessary. (Clinical trial purpose) </p>
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
