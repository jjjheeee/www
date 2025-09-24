<?
$page_num = "02";
$sub_num = "01";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "nbiotek";
$sub_section = "about";
$page_info = "N-BIOTEK Group";
$sub_info = "About Us";
$content_type="wide";
// $sub_info2 = "3차메뉴";	// 사용안할시 주석처리
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(Description)	필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<style>
	.about-top-menu {max-width: none;}
	.sub-tab-list-style ul li {width: 16.666%;}

	.biotek-tab-con {padding-top: 80px; margin-top: 50px;}
	.biotek-tab-con img {max-width: 100%;}
	.medi-tab-con, .partners-tab-con {padding-top: 80px; margin-top: 70px;}
	.medi-tab-con img {max-width: 100%;}

	@media all and (max-width: 800px) {
		.biotek-tab-con, .medi-tab-con, .partners-tab-con {margin-top: 0;}
		.sub-tab-list-style ul li {width: 100%;}
	}

	/***** 24-03-26 유지보수 :: N-BIOTEK 그룹 *****/
.about-page .logo-box {text-align: center; margin-bottom: 34px;}
.about-page .about-top-txt-box .about-top-txt {font-size: 16px; font-weight: 400; letter-spacing: -0.05em; line-height: 1.8em; color: #555; text-align: center;}
.about-page .about-grid-list-box {display: flex; flex-wrap: wrap; gap: 15px; margin-top: 45px;}
.about-page .about-grid-list-box .about-grid-list {position: relative; border: 3px solid #efefef; box-sizing: border-box; padding: 2.9% 3% 2.9% 3.8%;}
.about-page .about-grid-list-box .about-grid-list::before {position: absolute; content: ""; top: -3px; left: -3px; width: calc(100% + 6px); height: 4px;}
.about-page .biotek-tab-con .about-grid-list-box .about-grid-list::before {background-color: #00a6bc;}
.about-page .medi-tab-con .about-grid-list-box .about-grid-list::before {background-color: #1f3d83;}
.about-page .about-grid-list-box .about-grid-list:first-child {width: calc(33.333% - 10px);}
.about-page .about-grid-list-box .about-grid-list:nth-child(2) {width: calc(33.333% - 10px);}
.about-page .about-grid-list-box .about-grid-list:nth-child(3) {width: calc(33.333% - 10px);}
.about-page .about-grid-list-box .about-grid-list:nth-child(4) {width: calc(50% - 7.5px);}
.about-page .about-grid-list-box .about-grid-list:last-child {width: calc(50% - 7.5px);}

.about-page .about-grid-list-box .tit-box {display: flex; align-items: center; justify-content: space-between;}
.about-page .about-grid-list-box .tit-box .icon img {max-width: none !important;}
.about-page .about-grid-list-box .txt-box {min-height: 48px; display: flex; flex-direction: column; justify-content: flex-end; margin-top: 14px;}
.about-page .about-grid-list-box .grid-list-tit {font-size: 25px; font-weight: 700; letter-spacing: -0.05em; line-height: 1.64em; color: #000; padding-right: 10px;}
.about-page .about-grid-list-box .grid-list-txt {font-size: 16px; font-weight: 400; letter-spacing: -0.05em; line-height: 1.5em; color: #555;}
.about-page .about-grid-list-box .grid-list-txt > span {display: inline-block; font-weight: 500; min-width: 25px; padding-right: 15px;}
.about-page .about-grid-list-box .grid-list-txt.pa5 {padding-bottom: 5px;}
.about-page .about-grid-list-box .grid-list-txt.flex {display: flex;}

@media all and (max-width:800px){
	.about-page .logo-box {margin-bottom: 20px;}
	.about-page .about-grid-list-box {margin-top: 25px;}
	.about-page .about-grid-list-box .about-grid-list {width: calc(50% - 7.5px) !important;}
	.about-page .about-top-txt-box .about-top-txt {font-size: 14px;}
	.about-page .about-grid-list-box .grid-list-tit {font-size: 18px;}
	.about-page .about-grid-list-box .grid-list-txt {font-size: 14px;}
}

@media all and (max-width:480px){
	.about-page .about-grid-list-box .about-grid-list {width: calc(100% - 7.5px) !important; padding: 15px;}
}
</style>

<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top_t(240325).php"; ?>
	<!-- Start -->
	<article class="cm-fixed-tab-container-JS">
		<aside class="sub-tab-wrapper-style">
			<div class="sub-tab-list-style sub-drop-menu-style cm-fixed-tab-list-JS cm-drop-menu-box-JS top-fixed-object" data-drop-width="800" data-drop-event="click">
				<div class="area scroll-object" data-scroll="fade-up" data-scroll-delay="200">
					<a href="javascript:;" class="sub-drop-open-btn-style cm-drop-open-btn-JS"><span>About Us</span><i class="xi-caret-down-min arrow"></i></a>
					<ul class="clearfix cm-drop-list-JS about-top-menu move-line-tab">
						<li class="selected"><a href="#about" class="inner"><em class="txt-inner">About Us</em></a></li>
						<li><a href="#history" class="inner"><em class="txt-inner">History</em></a></li>
						<li><a href="#patent" class="inner"><em class="txt-inner">Patent & Certificate</em></a></li>
						<li><a href="#biotek" class="inner"><em class="txt-inner">GLOBAL N-BIOTEK Inc.</em></a></li>
						<li><a href="#medi" class="inner"><em class="txt-inner">REGENMEDI Inc.</em></a></li>
						<li class="last"><a href="#partners" class="inner"><em class="txt-inner">Partners</em></a></li>
					</ul>
					<div class="nav-on-icon main-move-line">
						<span></span>
					</div>
				</div>
			</div>
		</aside>
		<div class="about-page sub-tab-content-style">
			<div class="sub-tab-con" id="about" data-index="01">
				<div class="scroll-object" data-scroll="fade-up" data-scroll-delay="200">
					<h3 class="tab-tit">ABOUT US</h3>
					<div class="about-top-img area-box">
						<span><img src="<?=$site_host?>/images/content/about_about_img01.jpg" alt="About us"></span>
					</div>
				</div>
				<div class="about-us-con area">
					<div class="txt-box scroll-object" data-scroll="fade-up">
						<h4 class="tit">STEM CELL TOTAL SOLUTION PROVIDER,  <span class="co-green">N-BIOTEK</span></h4>
						<p class="txt">N-BIOTEK is the only one company providing ‘Stem Cell Total Solution’  which is the turn-key solution combined with life science <br class="pc-br">
							 equipment, bio cleanroom and stem cell culture technology consulting. As the Stem Cell Total Solution provider, it has established stem cell 
							processing facilities in various countries and developed other stem cell business and items such as stem cell isolation kit, cosmetics and the 
							International Society for Stem Cell Application. </p>
						<p class="txt">N-BIOTEK is a global life science company that has developed various kinds of life science equipment since 1982. Based on its <br class="pc-br">
							differentiated quality and technology in the domain of life science, it provides its products to more than 100 distributors in the whole world.</p>
						<p class="txt">N-BIOTEK is a leader of life science and regenerative medicine.</p>
					</div>
					<div class="philosophy-con scroll-object" data-scroll="fade-up">
						<h5 class="con-tit">Philosophy</h5>
						<div class="philosophy-list">
							<div class="con-box-wrap">
								<div class="sub-txt-box">
									<strong class="sub-tit">MISSON</strong>
									<p class="sub-txt">Contribute to human health and happiness 
										through the best quality <b>Life Science equipment</b>
										and <b>Stem Cell Total Solution</b></p>
								</div>
								<div class="sub-icon-box"><img src="<?=$site_host?>/images/content/philosophy_icon01.png" alt="MISSION 아이콘" /></div>
							</div>
							<div class="con-box-wrap">
								<div class="sub-txt-box">
									<strong class="sub-tit">VISION</strong>
									<p class="sub-txt">Leading Life Science & Stem Cell <br class="pc-br">
										Total Solution Provider</p>
								</div>
								<div class="sub-icon-box"><img src="<?=$site_host?>/images/content/philosophy_icon02.png" alt="VISION 아이콘" /></div>
							</div>
						</div>
					</div>
				</div>
				<div class="about-us-img-con scroll-object" data-scroll="fade-up">
					<div class="area">
						<span><img src="<?=$site_host?>/images/content/about_about_img02.png" alt=""></span>
					</div>
				</div>
			</div>
			<div class="sub-tab-con history-tab-con" id="history" data-index="02">
				<div class="area scroll-object" data-scroll="fade-up">
					<h3 class="tab-tit">HISTORY</h3>
					<!-- 
						섹션 추가가능, 
						좌측 :: 이미지 및 년도, 텍스트 입력
						우측 :: 년도 입력가능
					-->
					<?
					$code = "year_c";
					$rs = $db->select("cs_bbs_data","where code='$code' and lang='$lang' order by idx desc");
					while($row = mysqli_fetch_object($rs)){
					?>
					<div class="history-con-wrap clearfix">
						<div class="tit-wrap">
							<span><img src="/data/bbsData/<?=$row->sum_file?>" alt="<?=$row->subject?>" /></span>
							<div class="tit-box">
								<h4><?=$row->subject?></h4>
								<p class="txt"><?=$row->content?></p>
							</div>
						</div>
						<div class="history-list-wrap">
							<?
							$rs2 = $db->select("cs_history","where year>='$row->event_sday' and year<='$row->event_eday' group by year order by year desc");
							while($row2 = mysqli_fetch_object($rs2)){
							?>
							<div class="history-item">
								<strong class="year"><?=$row2->year?></strong>
								<?
								$rs3 = $db->select("cs_history","where year='$row2->year' order by idx asc");
								while($row3 = mysqli_fetch_object($rs3)){
								?>
								<p class="txt"><?=$row3->title?></p>
								<? } ?>
							</div>
							<? } ?>
						</div>
					</div>
					<? } ?>

					<!-- <div class="history-con-wrap clearfix">
						<div class="tit-wrap">
							<span><img src="<?=$site_host?>/images/test/history_img.jpg" alt="1982~2006" /></span>
							<div class="tit-box">
								<h4>2008~2021</h4>
								<p class="txt">Global Stem Cell Leader, N-BIOTEK Inc.,</p>
							</div>
						</div>
						<div class="history-list-wrap">
							<div class="history-item">
								<strong class="year">2008</strong>
								<p class="txt">Established “Manhattan Corporation”</p>
								<p class="txt">Developed First Korean Lab Equipment</p>
							</div>
							<div class="history-item">
								<strong class="year">2008</strong>
								<p class="txt">Established “Manhattan Corporation”</p>
								<p class="txt">Developed First Korean Lab Equipment</p>
							</div>
							<div class="history-item">
								<strong class="year">2008</strong>
								<p class="txt">Established “Manhattan Corporation”</p>
								<p class="txt">Developed First Korean Lab Equipment</p>
							</div>
							<div class="history-item">
								<strong class="year">2008</strong>
								<p class="txt">Established “Manhattan Corporation”</p>
								<p class="txt">Developed First Korean Lab Equipment</p>
							</div>
							<div class="history-item">
								<strong class="year">2008</strong>
								<p class="txt">Established “Manhattan Corporation”</p>
								<p class="txt">Developed First Korean Lab Equipment</p>
							</div>
						</div>
					</div> -->
				</div>
			</div>
			<div class="sub-tab-con certifi-tab-con" id="patent" data-index="03">
				<div class="area scroll-object" data-scroll="fade-up">
					<h3 class="tab-tit big">PATENT & CERTIFICATE</h3>
					<p class="tab-txt">CE, Patents for life science equipment and R&D Center’s items,<br>
						ETL ROHS Compliance ISO 9001, ISO 13485, ISO 14001, KGMP Certified.</p>
					<div class="certifi-list-style05">
						<div class="certificate-con">	
							<div class="certificate-list">
								<ul class="clearfix popup-gallery">
									<?
									$code = "cert";
									$rs = $db->select("cs_bbs_data","where code='$code' order by idx asc");
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
									<!-- <li>
										<a href="<?=$site_host?>/images/test/certification_img.jpg" title="">
											<div class="certificate-img-thumb">
												<div class="img-con"><span><img src="<?=$site_host?>/images/test/certification_img.jpg" alt="인증서" /></span></div>
												<div class="certificate-over-box"><i class="material-icons"></i></div>
											</div>
										</a>
									</li>
									<li>
										<a href="<?=$site_host?>/images/test/certification_img.jpg" title="">
											<div class="certificate-img-thumb">
												<div class="img-con"><span><img src="<?=$site_host?>/images/test/certification_img.jpg" alt="인증서" /></span></div>
												<div class="certificate-over-box"><i class="material-icons"></i></div>
											</div>
										</a>
									</li>
									<li>
										<a href="<?=$site_host?>/images/test/certification_img.jpg" title="">
											<div class="certificate-img-thumb">
												<div class="img-con"><span><img src="<?=$site_host?>/images/test/certification_img.jpg" alt="인증서" /></span></div>
												<div class="certificate-over-box"><i class="material-icons"></i></div>
											</div>
										</a>
									</li>
									<li>
										<a href="<?=$site_host?>/images/test/certification_img.jpg" title="">
											<div class="certificate-img-thumb">
												<div class="img-con"><span><img src="<?=$site_host?>/images/test/certification_img.jpg" alt="인증서" /></span></div>
												<div class="certificate-over-box"><i class="material-icons"></i></div>
											</div>
										</a>
									</li>
									<li>
										<a href="<?=$site_host?>/images/test/certification_img.jpg" title="">
											<div class="certificate-img-thumb">
												<div class="img-con"><span><img src="<?=$site_host?>/images/test/certification_img.jpg" alt="인증서" /></span></div>
												<div class="certificate-over-box"><i class="material-icons"></i></div>
											</div>
										</a>
									</li>
									<li>
										<a href="<?=$site_host?>/images/test/certification_img.jpg" title="">
											<div class="certificate-img-thumb">
												<div class="img-con"><span><img src="<?=$site_host?>/images/test/certification_img.jpg" alt="인증서" /></span></div>
												<div class="certificate-over-box"><i class="material-icons"></i></div>
											</div>
										</a>
									</li>
									<li>
										<a href="<?=$site_host?>/images/test/certification_img.jpg" title="">
											<div class="certificate-img-thumb">
												<div class="img-con"><span><img src="<?=$site_host?>/images/test/certification_img.jpg" alt="인증서" /></span></div>
												<div class="certificate-over-box"><i class="material-icons"></i></div>
											</div>
										</a>
									</li> -->
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="sub-tab-con biotek-tab-con" id="biotek" data-index="04">
				<div class="area scroll-object" data-scroll="fade-up">
					<div class="logo-box">
						<span><img src="<?=$site_host?>/images/content/biotek_con_logo.jpg" alt="biotek 로고"></span>
					</div>
					<div class="about-top-txt-box">
						<p class="about-top-txt">GLOBAL N-BIOTEK Inc. is a global bio company providing life science equipment and stem cell total solutions to customers worldwide. <br>As a subsidiary of the N-BIOTEK Group, we are committed to offering high-quality products <br class="pc-br">and services to contribute to the enhancement of human health and happiness.</p>
					</div>
					<ul class="about-grid-list-box">
						<li class="about-grid-list">
							<div class="tit-box">
								<p class="grid-list-tit">CEO</p>
								<div class="icon"><span><img src="<?=$site_host?>/images/content/biotek_list_icon01.png" alt="biotek 아이콘"></span></div>
							</div>
							<div class="txt-box">
								<p class="grid-list-txt">David Kim</p>
							</div>
						</li>
						<li class="about-grid-list">
							<div class="tit-box">
								<p class="grid-list-tit">Company Name</p>
								<div class="icon"><span><img src="<?=$site_host?>/images/content/biotek_list_icon02.png" alt="biotek 아이콘"></span></div>
							</div>
							<div class="txt-box">
								<p class="grid-list-txt">GLOBAL N-BIOTEK Inc.</p>
							</div>
						</li>
						<li class="about-grid-list">
							<div class="tit-box">
								<p class="grid-list-tit">Tel</p>
								<div class="icon"><span><img src="<?=$site_host?>/images/content/biotek_list_icon03.png" alt="biotek 아이콘"></span></div>
							</div>
							<div class="txt-box">
								<p class="grid-list-txt flex pa5"><span>Tel</span>82-32-724-8224</p>
								<p class="grid-list-txt flex"><span>Fax</span>82-32-713-7229</p>
							</div>
						</li>
						<li class="about-grid-list">
							<div class="tit-box">
								<p class="grid-list-tit">Address</p>
								<div class="icon"><span><img src="<?=$site_host?>/images/content/biotek_list_icon04.png" alt="biotek 아이콘"></span></div>
							</div>
							<div class="txt-box">
								<p class="grid-list-txt pa5">101-1009, 397, Seokcheon-ro, Bucheon-si,</p>
								<p class="grid-list-txt">Gyeonggi-do, Republic of Korea</p>
							</div>
						</li>
						<li class="about-grid-list">
							<div class="tit-box">
								<p class="grid-list-tit">E-mail</p>
								<div class="icon"><span><img src="<?=$site_host?>/images/content/biotek_list_icon05.png" alt="biotek 아이콘"></span></div>
							</div>
							<div class="txt-box">
								<p class="grid-list-txt">export@n-biotek.com</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="sub-tab-con medi-tab-con" id="medi" data-index="05">
				<div class="area scroll-object" data-scroll="fade-up">
					<div class="logo-box">
						<span><img src="<?=$site_host?>/images/content/medi_con_logo.jpg" alt="biotek 로고"></span>
					</div>
					<div class="about-top-txt-box">
						<p class="about-top-txt">REGENMEDI Inc. is a specialized stem cell sales company within the N-BIOTEK Group, <br class="pc-br">offering REBORN STEM and REBORN Cell Banking services. <br>We aim to contribute to the health and happiness of our customers.</p>
					</div>
					<ul class="about-grid-list-box">
						<li class="about-grid-list">
							<div class="tit-box">
								<p class="grid-list-tit">CEO</p>
								<div class="icon"><span><img src="<?=$site_host?>/images/content/medi_list_icon01.png" alt="medi 아이콘"></span></div>
							</div>
							<div class="txt-box">
								<p class="grid-list-txt">Deokhwan Lee</p>
							</div>
						</li>
						<li class="about-grid-list">
							<div class="tit-box">
								<p class="grid-list-tit">Company Name</p>
								<div class="icon"><span><img src="<?=$site_host?>/images/content/medi_list_icon02.png" alt="medi 아이콘"></span></div>
							</div>
							<div class="txt-box">
								<p class="grid-list-txt">REGENMEDI Inc.</p>
							</div>
						</li>
						<li class="about-grid-list">
							<div class="tit-box">
								<p class="grid-list-tit">Tel</p>
								<div class="icon"><span><img src="<?=$site_host?>/images/content/medi_list_icon03.png" alt="medi 아이콘"></span></div>
							</div>
							<div class="txt-box">
								<p class="grid-list-txt flex pa5"><span>Tel</span>82-2-2088-8589</p>
								<p class="grid-list-txt flex"><span>Fax</span>82-505-855-8589</p>
							</div>
						</li>
						<li class="about-grid-list">
							<div class="tit-box">
								<p class="grid-list-tit">Address</p>
								<div class="icon"><span><img src="<?=$site_host?>/images/content/medi_list_icon04.png" alt="medi 아이콘"></span></div>
							</div>
							<div class="txt-box">
								<p class="grid-list-txt pa5">6F, 16, Hakdong-ro 30-gil, Gangnam-gu,</p>
								<p class="grid-list-txt">Seoul, Republic of Korea</p>
							</div>
						</li>
						<li class="about-grid-list">
							<div class="tit-box">
								<p class="grid-list-tit">E-mail</p>
								<div class="icon"><span><img src="<?=$site_host?>/images/content/medi_list_icon05.png" alt="medi 아이콘"></span></div>
							</div>
							<div class="txt-box">
								<p class="grid-list-txt">regen30@n-biotek.com</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="sub-tab-con partners-tab-con" id="partners" data-index="04">
				<div class="area scroll-object" data-scroll="fade-up">
					<h3 class="tab-tit big">PARTNERS</h3>
					<p class="tab-txt">The high quality life science equipment produced through N-BIOTEK’s technology and <br>
						infrastructure are supplied to many domestic hospitals, universities, pharmaceutical and bio companies.</p>
					<ul class="partner-list-wrap clearfix">
						<?
						$code = "partner";
						$rs = $db->select("cs_bbs_data","where code='$code' order by idx asc");
						while($row = mysqli_fetch_object($rs)){
						?>
						<li>
							<div class="logo-wrap"><span><img src="/data/bbsData/<?=$row->sum_file?>" alt="" /></span></div>
						</li>
						<? } ?>
						<!-- <li>
							<span><img src="<?=$site_host?>/images/test/partners_logo_02.jpg" alt="" /></span>
						</li>
						<li>
							<span><img src="<?=$site_host?>/images/test/partners_logo_03.jpg" alt="" /></span>
						</li>
						<li>
							<span><img src="<?=$site_host?>/images/test/partners_logo_02.jpg" alt="" /></span>
						</li>
						<li>
							<span><img src="<?=$site_host?>/images/test/partners_logo_01.jpg" alt="" /></span>
						</li>
						<li>
							<span><img src="<?=$site_host?>/images/test/partners_logo_03.jpg" alt="" /></span>
						</li>
						<li>
							<span><img src="<?=$site_host?>/images/test/partners_logo_01.jpg" alt="" /></span>
						</li>
						<li>
							<span><img src="<?=$site_host?>/images/test/partners_logo_02.jpg" alt="" /></span>
						</li>
						<li>
							<span><img src="<?=$site_host?>/images/test/partners_logo_03.jpg" alt="" /></span>
						</li>
						<li>
							<span><img src="<?=$site_host?>/images/test/partners_logo_03.jpg" alt="" /></span>
						</li>
						<li>
							<span><img src="<?=$site_host?>/images/test/partners_logo_01.jpg" alt="" /></span>
						</li>
						<li>
							<span><img src="<?=$site_host?>/images/test/partners_logo_02.jpg" alt="" /></span>
						</li> -->
					</ul>
				</div>
				<section id="globalMapCon" class="section scroll-object" data-scroll="fade-up">
					<div class="global-area area-box">
						<div class="global-map-con" >
							<img src="<?=$site_host?>/images/main/global_map.png" alt="세계지도" class="global-map-bg"/>
							<div class="global-nation-box" data-scroll="fade">
								<div class="nation-circle on" data-num="1">
									<div class="effect-circle" style="margin-top:-3%; margin-left:-13.1%" title="한국"><span></span><span></span><span></span><span></span><i></i></div>
									<div class="effect-circle" style="margin-top:-4%; margin-left:-10.2%" title="일본"><span></span><span></span><span></span><span></span><i></i></div>
									<div class="effect-circle" style="margin-top:-2%; margin-left:-18.2%" title="중국"><span></span><span></span><span></span><span></span><i></i></div>
									<!-- <div class="effect-circle" style="margin-top:4%; margin-left:-18%" title="베트남"><span></span><span></span><span></span><span></span><i></i></div> -->
									<div class="effect-circle" style="margin-top:6.5%; margin-left:-19.4%" title="싱가포르"><span></span><span></span><span></span><span></span><i></i></div>
									<div class="effect-circle" style="margin-top:3%; margin-left:-20%" title="태국"><span></span><span></span><span></span><span></span><i></i></div>
									<div class="effect-circle" style="margin-top:0.5%; margin-left:-14.9%" title="대만"><span></span><span></span><span></span><span></span><i></i></div>
									<div class="effect-circle" style="margin-top:14.5%; margin-left:-11.9%" title="호주"><span></span><span></span><span></span><span></span><i></i></div>
									<div class="effect-circle" style="margin-top:19.5%; margin-left:-1.9%" title="뉴질렌드"><span></span><span></span><span></span><span></span><i></i></div>
									<img src="<?=$site_host?>/images/main/global_map_asia.png" alt="Asia" class="pc"/>
									<img src="<?=$site_host?>/images/main/global_map_asia_m.png" alt="Asia" class="mobile left"/>
								</div>
								<div class="nation-circle" data-num="2">
									<div class="effect-circle" style="margin-top:-2.2%; margin-left:-28.5%" title="아프가니스탄"><span></span><span></span><span></span><span></span><i></i></div>
									<div class="effect-circle" style="margin-top:0.8%; margin-left:-33.5%" title="사우디아라비아"><span></span><span></span><span></span><span></span><i></i></div>
									<!-- <div class="effect-circle mb-no" style="margin-top:0.6%; margin-left:-31%" title="UAE"><span></span><span></span><span></span><span></span><i></i></div> -->
									<div class="effect-circle mb-no" style="margin-top:-2%; margin-left:-31%" title="이란"><span></span><span></span><span></span><span></span><i></i></div>
									<div class="effect-circle" style="margin-top:-1.8%; margin-left:-35.5%" title="요르단"><span></span><span></span><span></span><span></span><i></i></div>
									<div class="effect-circle" style="margin-top:3%; margin-left:-33%" title="예멘"><span></span><span></span><span></span><span></span><i></i></div>
									<img src="<?=$site_host?>/images/main/global_map_mideast.png" alt="Middle East"  class="pc"/>
									<img src="<?=$site_host?>/images/main/global_map_mideast_m.png" alt="Middle East" class="mobile" />
								</div>
								<div class="nation-circle" data-num="3">
									<div class="effect-circle" style="margin-top:-4.5%; margin-left:27.9%" title="미국"><span></span><span></span><span></span><span></span><i></i></div>
									<div class="effect-circle" style="margin-top:-11.5%; margin-left:24.9%" title="캐나다"><span></span><span></span><span></span><span></span><i></i></div>
									<div class="effect-circle" style="margin-top:0.5%; margin-left:27.9%" title="멕시코"><span></span><span></span><span></span><span></span><i></i></div>
									<img src="<?=$site_host?>/images/main/global_map_north_america.png" alt="North America"  class="pc"/>
									<img src="<?=$site_host?>/images/main/global_map_north_america_m.png" alt="North America"  class="mobile left"/>
								</div>
								<div class="nation-circle" data-num="4">
									<div class="effect-circle" style="margin-top:15%; margin-left:35.6%" title="칠레"><span></span><span></span><span></span><span></span><i></i></div>
									<div class="effect-circle" style="margin-top:6%; margin-left:34.6%" title="콜롬비아"><span></span><span></span><span></span><span></span><i></i></div>
									<div class="effect-circle" style="margin-top:7.9%; margin-left:33.6%" title="에콰도르"><span></span><span></span><span></span><span></span><i></i></div>
									<div class="effect-circle" style="margin-top:13.9%; margin-left:38.6%" title="파라과이"><span></span><span></span><span></span><span></span><i></i></div>
									<div class="effect-circle" style="margin-top:16.9%; margin-left:39%" title="우루과이"><span></span><span></span><span></span><span></span><i></i></div>
									<div class="effect-circle" style="margin-top:10%; margin-left:34.5%" title="페루"><span></span><span></span><span></span><span></span><i></i></div>
									<img src="<?=$site_host?>/images/main/global_map_south_america.png" alt="South America"  class="pc"/>
									<img src="<?=$site_host?>/images/main/global_map_south_america_m.png" alt="South America" class="mobile" />
								</div>
								<div class="nation-circle" data-num="5">
									<div class="effect-circle" style="margin-top:-9%; margin-left:-39.5%" title="폴란드"><span></span><span></span><span></span><span></span><i></i></div>
									<div class="effect-circle mb-no" style="margin-top:-8.5%; margin-left:-41.5%" title="독일"><span></span><span></span><span></span><span></span><i></i></div>
									<div class="effect-circle" style="margin-top:-4.5%; margin-left:-45%" title="스페인"><span></span><span></span><span></span><span></span><i></i></div>
									<div class="effect-circle" style="margin-top:-5.5%; margin-left:-41%" title="이탈리아"><span></span><span></span><span></span><span></span><i></i></div>
									<div class="effect-circle" style="margin-top:-12.5%; margin-left:-41.8%" title="노르웨이"><span></span><span></span><span></span><span></span><i></i></div>
									<div class="effect-circle" style="margin-top:-13%; margin-left:-37.7%" title="핀란드"><span></span><span></span><span></span><span></span><i></i></div>
									<div class="effect-circle mb-no" style="margin-top:-13.5%; margin-left:-40.3%" title="스웨덴"><span></span><span></span><span></span><span></span><i></i></div>
									<img src="<?=$site_host?>/images/main/global_map_europe.png" alt="Europe"  class="pc"/>
									<img src="<?=$site_host?>/images/main/global_map_europe_m.png" alt="Europe"  class="mobile right"/>
								</div>
								<div class="nation-circle" data-num="6">
									<div class="effect-circle" style="margin-top:-0.3%; margin-left:-37%" title="이집트"><span></span><span></span><span></span><span></span><i></i></div>
									<div class="effect-circle" style="margin-top:4.7%; margin-left:-42%" title="나이지리아"><span></span><span></span><span></span><span></span><i></i></div>
									<div class="effect-circle" style="margin-top:-2.1%; margin-left:-45.5%" title="모로코"><span></span><span></span><span></span><span></span><i></i></div>
									<div class="effect-circle" style="margin-top:6.9%; margin-left:-36.5%" title="우간다"><span></span><span></span><span></span><span></span><i></i></div>
									<div class="effect-circle" style="margin-top:-2.8%; margin-left:-41.9%" title="튀니지"><span></span><span></span><span></span><span></span><i></i></div>
									<img src="<?=$site_host?>/images/main/global_map_africa.png" alt="Africa" class="pc" />
									<img src="<?=$site_host?>/images/main/global_map_africa_m.png" alt="Africa" class="mobile right" />
								</div>
							</div>
						</div>
						<div class="global-country font-roboto">
							<div>
								<div class="lf-txt">
									<em class="txt-01">Global Distributors in</em>
									<span class="txt-02">64 Countries</span>
									<span class="txt-03">110</span>
								</div>
								<div class="rt-txt">
									<ul class="country-list">
										<li data-num="1" class="on clearfix">
											<span class="country">Asia</span>
											<span class="num">15</span>
										</li>
										<li data-num="2" class="clearfix">
											<span class="country">Middle East</span>
											<span class="num">9</span>
										</li>
										<li data-num="3" class="clearfix">
											<span class="country">North America</span>
											<span class="num">3</span>
										</li>
										<li data-num="4" class="clearfix">
											<span class="country">South America</span>
											<span class="num">6</span>
										</li>
										<li data-num="5" class="clearfix">
											<span class="country">Europe</span>
											<span class="num">26</span>
										</li>
										<li data-num="6" class="clearfix">
											<span class="country">Africa</span>
											<span class="num">5</span>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</article>
	<!-- // -->
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
