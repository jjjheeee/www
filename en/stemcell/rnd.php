<?
$page_num = "03";
$sub_num = "02";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "stemcell";
$sub_section = "rnd";
$page_info = "Stem Cell";
$sub_info = "R&D Center";
$content_type="wide";
// $sub_info2 = "3차메뉴";	// 사용안할시 주석처리
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(Description)	필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
	<article class="rnd-page">
		<article class="rnd-top-con">
			<div class="area scroll-object" data-scroll="fade-up" data-scroll-delay="200">
				<h3 class="big-tit">INTRODUCTION OF N-BIOTEK R&D CENTER</h3>
				<p class="stem-cm-txt wh">
					<span>N-BIOTEK STEM CELL R&D CENTER develops stem cell processing technology and provides the best solution for stem cell business.
					The core technologies of N-BIOTEK STEM CELL R&D center are the optimization of stem cell isolation, stem cell cryopreservation, stem cell processing.</span>
					<span>Based on its technology, it becomes 4th stem cell processing facility officially approved by Korea Food and Drug Administration on March, 2021. 
					Since then, it has been contributing the development of regenerative medicine through conducting joint researches with various advanced 
					hospitals implementing regenerative clinical research.</span>
					<span>Also, since the International Society for Stem Cell Application(ISSCA) was established by N-BIOTEK on 2016, N-BIOTEK STEM CELL R&D CENTER constructs 
					fine research infrastructure to build a global stem cell technology cooperating platform.</span>
				</p>
				<div class="rnd-btn">
					<a href="<?=$site_url?>/customer/contact.php#rndLocation">Location of N-BIOTEK R&D Center<i class="xi-globus"></i></a>
				</div>
			</div>
		</article>

		<article class="rnd-tab-con view-detail-container area">
			<div class="cm-fixed-tab-container-JS">
				<aside class="sub-tab-wrapper-style">
					<div class="sub-tab-list-style sub-drop-menu-style cm-fixed-tab-list-JS cm-drop-menu-box-JS top-fixed-object" data-drop-width="800" data-drop-event="click">
						<div class="area equipment-tab-area scroll-object" data-scroll="fade-up" >
							<a href="javascript:;" class="sub-drop-open-btn-style cm-drop-open-btn-JS"><span>Cell Processing Facility License</span><i class="xi-caret-down-min arrow"></i></a>
							<ul class="clearfix cm-drop-list-JS equipment-tab-list col-03">
								<li class="selected"><a href="#rndCon1" class="inner"><em class="txt-inner">Cell Processing Facility License</em></a></li>
								<li><a href="#rndCon2" class="inner"><em class="txt-inner">Patents</em></a></li>
								<li class="last"><a href="#rndCon3" class="inner"><em class="txt-inner">Stem Cell Training</em></a></li>
							</ul>
							<div class="nav-on-icon main-move-line">
								<span></span>
							</div>
						</div>
					</div>
				</aside>
				<div class="sub-tab-content-style">
					<div class="sub-tab-con" id="rndCon1">
						<div class="rnd-license-con scroll-object" data-scroll="fade-up">
							<h4 class="stem-cm-tit">Cell Processing Facility License</h4>
							<div class="license-wrap">
								<div class="lf-txt">
									<strong>KFDA STEM CELL PROCESSING FACILTY</strong>
									<div class="stem-cm-txt">
										<p>A specialized stem cell processing facility which is approved by KFDA by meeting the KFDA standard of facility, equipment and manpower to conduct cell processing. </p>
										<p>An approved stem cell processing facility can officially provide cells as a raw material of research to hospitals that have been approved to conduct regenerative medicine clinical research in Korea.</p>
									</div>
								</div>
								<div class="rt-img"><img src="<?=$site_host?>/images/content/rnd_license_img.jpg" alt="세포처리시설 허가증" class="pc-ver"/>
								<img src="<?=$site_host?>/images/content/rnd_license_img_m.jpg" alt="세포처리시설 허가증" class="m-ver"/></div>
							</div>
						</div>
					</div>
					<div class="sub-tab-con" id="rndCon2">
						<div class="rnd-patents-con scroll-object" data-scroll="fade-up">
							<div class="top-tit">
								<h4 class="stem-cm-tit">Patents</h4>
								<p class="stem-cm-txt sm">Patents of <b>stem cell subculture, stem cell mass production, stem cell culture media etc.</b></p>
							</div>
							<div class="certifi-list-style05">

								<div class="certificate-con">	
									<div class="certificate-list">
										<ul class="clearfix popup-gallery">
											<?
											$code = "in";
											$rs = $db->select("cs_bbs_data","where code='$code' order by idx desc");
											while($row = mysqli_fetch_object($rs)){
											?>
											<li>
												<a href="/data/bbsData/<?=$row->sum_file?>" title="">
													<div class="certificate-img-thumb">
														<div class="img-con"><span><img src="/data/bbsData/<?=$row->sum_file?>" alt="인증서" /></span></div>
														<div class="certificate-over-box"><i class="material-icons"></i></div>
													</div>
												</a>
											</li>
											<? } ?>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="sub-tab-con" id="rndCon3">
						<div class="rnd-training-con scroll-object" data-scroll="fade-up">
							<h4 class="stem-cm-tit">Stem cell training</h4>
							<div class="training-wrap">
								<div class="lf-txt stem-cm-txt">
									<strong><i class="xi-document"></i>SVF · PRP · Adipose Stem Cell</strong>
									<strong><i class="xi-document"></i>Live Demonstration & Hands-on</strong>
									<p>N-BIOTEK transfers its technology of safe stem cell isolation <br class="pc-br">
									and application through its own stem cell training programs.</p>
								</div>
								<div class="rt-img">
									<img src="<?=$site_host?>/images/content/rnd_training_img.jpg" alt="Stem cell training" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>

	</article>		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
