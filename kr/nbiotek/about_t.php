<?
$page_num = "02";
$sub_num = "01";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "nbiotek";
$sub_section = "about";
$page_info = "N-BIOTEK 그룹";
$sub_info = "기업 소개";
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

	@media all and (max-width: 800px) {
		.sub-tab-list-style ul li {width: 100%;}
	}
</style>

<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top_t.php"; ?>
	<!-- Start -->
	<article class="cm-fixed-tab-container-JS">
		<aside class="sub-tab-wrapper-style">
			<div class="sub-tab-list-style sub-drop-menu-style cm-fixed-tab-list-JS cm-drop-menu-box-JS top-fixed-object" data-drop-width="800" data-drop-event="click">
				<div class="area scroll-object" data-scroll="fade-up" data-scroll-delay="200">
					<a href="javascript:;" class="sub-drop-open-btn-style cm-drop-open-btn-JS"><span>기업 소개</span><i class="xi-caret-down-min arrow"></i></a>
					<ul class="clearfix cm-drop-list-JS about-top-menu move-line-tab">
						<li class="selected"><a href="#about" class="inner"><em class="txt-inner">기업 소개</em></a></li>
						<li><a href="#history" class="inner"><em class="txt-inner">연혁</em></a></li>
						<li><a href="#patent" class="inner"><em class="txt-inner">특허 및 인증</em></a></li>
						<li><a href="#biotek" class="inner"><em class="txt-inner">㈜글로벌엔바이오텍</em></a></li>
		<!--				<li><a href="#medi" class="inner"><em class="txt-inner">㈜리젠메디</em></a></li>     -->
						<li class="last"><a href="#partners" class="inner"><em class="txt-inner">고객사</em></a></li>
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
					<h3 class="tab-tit">기업 소개</h3>
					<div class="about-top-img area-box">
						<span><img src="<?=$site_host?>/images/content/about_about_img01.jpg" alt="About us"></span>
					</div>
				</div>
				<div class="about-us-con area">
					<div class="txt-box scroll-object" data-scroll="fade-up">
						<h4 class="tit">줄기세포 토탈 솔루션 기업, <span class="co-green">엔바이오텍</span></h4>
						<p class="txt">엔바이오텍은 1982년부터 쌓아온 생명과학장비 제조 기술을 바탕으로 국내를 비롯하여 전 세계에 생명과학장비를 공급하고 있으며, <br class="pc-br">
						2020년 첨단재생의료 및 바이오의약품법 시행 이후 세포처리시설과 첨단바이오의약품 제조업 허가를 취득한 노하우로 국내외 세포처리시설 구축사업과 <br class="pc-br">
						줄기세포 임상연구를 진행하며 첨단재생의료 사업을 선도하고 있는 글로벌 바이오기업입니다.</p>
					</div>
					<div class="philosophy-con scroll-object" data-scroll="fade-up">
						<h5 class="con-tit">경영 철학</h5>
						<div class="philosophy-list">
							<div class="con-box-wrap">
								<div class="sub-txt-box">
									<strong class="sub-tit">사명</strong>
									<p class="sub-txt">최고 품질의 <b>생명과학 장비</b>와 <b>줄기세포 토탈 솔루션</b>을 통해 인류의 건강과 행복에 기여합니다.</p>
								</div>
								<div class="sub-icon-box"><img src="<?=$site_host?>/images/content/philosophy_icon01.png" alt="MISSION 아이콘" /></div>
							</div>
							<div class="con-box-wrap">
								<div class="sub-txt-box">
									<strong class="sub-tit">비전</strong>
									<p class="sub-txt">생명과학 선도 & 줄기세포 토탈 솔루션 제공</p>
								</div>
								<div class="sub-icon-box"><img src="<?=$site_host?>/images/content/philosophy_icon02.png" alt="VISION 아이콘" /></div>
							</div>
						</div>
					</div>
				</div>
				<div class="about-us-img-con scroll-object" data-scroll="fade-up">
					<div class="area">
						<span><img src="<?=$site_host?>/images/content/about_about_img02_kr.png" alt=""></span>
					</div>
				</div>
			</div>
			<div class="sub-tab-con history-tab-con" id="history" data-index="02">
				<div class="area scroll-object" data-scroll="fade-up">
					<h3 class="tab-tit">연혁</h3>
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
									if($row3->title_k){
										$title = $row3->title_k;
									} else {
										$title = $row3->title;
									}
								?>
								<p class="txt"><?=$title?></p>
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
					<h3 class="tab-tit big">특허 및 인증</h3>
					<p class="tab-txt">각종 국내외 특허 및 인증</p>
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
						<p class="about-top-txt">㈜글로벌엔바이오텍은 글로벌 고객들에게 생명과학장비 및 줄기세포 토탈 솔루션을 제공하는 글로벌 바이오기업으로서 <br class="pc-br">고품질의 제품과 서비스를 제공하여 인류의 건강과 행복 증진에 기여하는 엔바이오텍그룹의 계열사 입니다.</p>
					</div>
					<ul class="about-grid-list-box">
						<li class="about-grid-list">
							<div class="tit-box">
								<p class="grid-list-tit">대표이사</p>
								<div class="icon"><span><img src="<?=$site_host?>/images/content/biotek_list_icon01.png" alt="biotek 아이콘"></span></div>
							</div>
							<div class="txt-box">
								<p class="grid-list-txt">김주영</p>
							</div>
						</li>
						<li class="about-grid-list">
							<div class="tit-box">
								<p class="grid-list-tit">회사명</p>
								<div class="icon"><span><img src="<?=$site_host?>/images/content/biotek_list_icon02.png" alt="biotek 아이콘"></span></div>
							</div>
							<div class="txt-box">
								<p class="grid-list-txt">㈜글로벌엔바이오텍</p>
							</div>
						</li>
						<li class="about-grid-list">
							<div class="tit-box">
								<p class="grid-list-tit">전화번호</p>
								<div class="icon"><span><img src="<?=$site_host?>/images/content/biotek_list_icon03.png" alt="biotek 아이콘"></span></div>
							</div>
							<div class="txt-box">
								<p class="grid-list-txt flex pa5"><span>Tel</span>032-724-8224</p>
								<p class="grid-list-txt flex"><span>Fax</span>032-713-7229</p>
							</div>
						</li>
						<li class="about-grid-list">
							<div class="tit-box">
								<p class="grid-list-tit">주소</p>
								<div class="icon"><span><img src="<?=$site_host?>/images/content/biotek_list_icon04.png" alt="biotek 아이콘"></span></div>
							</div>
							<div class="txt-box">
								<p class="grid-list-txt pa5">경기도 부천시 오정구 석천로 397</p>
								<p class="grid-list-txt">부천테크노파크쌍용3차 101동 1009호</p>
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
<!--		
               <div class="sub-tab-con medi-tab-con" id="medi" data-index="05">
				<div class="area scroll-object" data-scroll="fade-up">
					<div class="logo-box">
						<span><img src="<?=$site_host?>/images/content/medi_con_logo.jpg" alt="biotek 로고"></span>
					</div>
					<div class="about-top-txt-box">
						<p class="about-top-txt">㈜리젠메디는 엔바이오텍그룹의 줄기세포 판매 전문기업으로서 REBORN STEM과 <br class="pc-br">REBORN Cell Banking(줄기세포 보관) 서비스를 제공하여 고객의 건강과 행복 증진에 기여하는 기업입니다.</p>
					</div>
					<ul class="about-grid-list-box">
						<li class="about-grid-list">
							<div class="tit-box">
								<p class="grid-list-tit">대표이사</p>
								<div class="icon"><span><img src="<?=$site_host?>/images/content/medi_list_icon01.png" alt="medi 아이콘"></span></div>
							</div>
							<div class="txt-box">
								<p class="grid-list-txt">이덕환</p>
							</div>
						</li>
						<li class="about-grid-list">
							<div class="tit-box">
								<p class="grid-list-tit">회사명</p>
								<div class="icon"><span><img src="<?=$site_host?>/images/content/medi_list_icon02.png" alt="medi 아이콘"></span></div>
							</div>
							<div class="txt-box">
								<p class="grid-list-txt">㈜리젠메디</p>
							</div>
						</li>
						<li class="about-grid-list">
							<div class="tit-box">
								<p class="grid-list-tit">전화번호</p>
								<div class="icon"><span><img src="<?=$site_host?>/images/content/medi_list_icon03.png" alt="medi 아이콘"></span></div>
							</div>
							<div class="txt-box">
								<p class="grid-list-txt flex pa5"><span>Tel</span>02-2088-8589</p>
								<p class="grid-list-txt flex"><span>Fax</span>0505-855-8589</p>
							</div>
						</li>
						<li class="about-grid-list">
							<div class="tit-box">
								<p class="grid-list-tit">주소</p>
								<div class="icon"><span><img src="<?=$site_host?>/images/content/medi_list_icon04.png" alt="medi 아이콘"></span></div>
							</div>
							<div class="txt-box">
								<p class="grid-list-txt">서울특별시 강남구 학동로 30길 16 남강빌딩 6층</p>
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
			-->
			<div class="sub-tab-con partners-tab-con" id="partners" data-index="06">
				<div class="area scroll-object" data-scroll="fade-up">
					<h3 class="tab-tit big">고객사</h3>
					<p class="tab-txt">엔바이오텍의 기술력과 인프라를 통해 생산된 고품질의 생명과학장비들은<br> 국내 다수의 병원, 대학교, 제약업체, 바이오 업체 등에 공급되고  있습니다.</p>
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
									
									<span class="txt-02">세계 64개국</span>
									<em class="txt-01">약 110여개의 대리점</em>
									<span class="txt-03">110</span>
								</div>
								<div class="rt-txt">
									<ul class="country-list">
										<li data-num="1" class="on clearfix">
											<span class="country">아시아</span>
											<span class="num">15</span>
										</li>
										<li data-num="2" class="clearfix">
											<span class="country">중동</span>
											<span class="num">9</span>
										</li>
										<li data-num="3" class="clearfix">
											<span class="country">북미</span>
											<span class="num">3</span>
										</li>
										<li data-num="4" class="clearfix">
											<span class="country">남미</span>
											<span class="num">6</span>
										</li>
										<li data-num="5" class="clearfix">
											<span class="country">유럽</span>
											<span class="num">26</span>
										</li>
										<li data-num="6" class="clearfix">
											<span class="country">아프리카</span>
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
