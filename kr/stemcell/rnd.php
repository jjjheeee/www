<?
$page_num = "04";
$sub_num = "02";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "stemcell";
$sub_section = "rnd";
$page_info = "줄기세포";
$sub_info = "R&D 센터";
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
				<h3 class="big-tit">엔바이오텍 줄기세포<br class="m-br"> 연구센터 소개</h3>
				<p class="stem-cm-txt wh">
					<span>엔바이오텍의 줄기세포 연구센터는 각종 특허로 인정받은<br class="m-br"> 줄기세포 기술력을 바탕으로  다양한 줄기세포 관련 제품을 개발하고 <br class="m-br">사업을 진행해오고 있습니다. </span>
					<span>2020년 첨단재생의료 및 바이오의약품법 시행 이후<br class="m-br"> 세포처리시설과 첨단바이오의약품 제조업 허가를 취득하여 국내외<br class="m-br"> 세포처리시설 구축사업과 줄기세포 임상연구를 진행하는 등 <br class="m-br">첨단재생의료 산업을 선도하며 재생의료 발전에 <br class="m-br">기여해오고 있습니다.</span>
					<span>2016년부터는 국제줄기세포응용학회(ISSCA)를 설립하고 운영하며 줄기세포 기술 협력 플랫폼을 만들어 글로벌 줄기세포 연구 인프라를 구축해오고 있습니다.</span>
				</p>
				<div class="rnd-btn">
					<a href="<?=$site_url?>/customer/contact.php#rndLocation">엔바이오텍 줄기세포 연구센터 위치 안내<i class="xi-globus"></i></a>
				</div>
			</div>
		</article>

		<article class="rnd-tab-con view-detail-container area">
			<div class="cm-fixed-tab-container-JS">
				<aside class="sub-tab-wrapper-style">
					<div class="sub-tab-list-style sub-drop-menu-style cm-fixed-tab-list-JS cm-drop-menu-box-JS top-fixed-object" data-drop-width="800" data-drop-event="click">
						<div class="area equipment-tab-area scroll-object" data-scroll="fade-up" >
							<a href="javascript:;" class="sub-drop-open-btn-style cm-drop-open-btn-JS"><span>세포처리시설 허가증</span><i class="xi-caret-down-min arrow"></i></a>
							<ul class="clearfix cm-drop-list-JS equipment-tab-list col-03">
								<li class="selected"><a href="#rndCon1" class="inner"><em class="txt-inner">세포처리시설 허가증</em></a></li>
								<li><a href="#rndCon2" class="inner"><em class="txt-inner">특허증</em></a></li>
								<li class="last"><a href="#rndCon3" class="inner"><em class="txt-inner">줄기세포 트레이닝</em></a></li>
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
							<h4 class="stem-cm-tit">세포처리시설 허가증</h4>
							<div class="license-wrap">
								<div class="lf-txt">
									<strong>식약처 허가 세포처리시설</strong>
									<div class="stem-cm-txt">
										<p>엔바이오텍은 그동안의 세포처리시설 구축과 자체 연구소 운영 노하우, 특허로 인정받은 기술력을 통해서 식약처로부터 세포처리시설 허가를 취득하여 시설과 기술의 대한 안전성을 인정받게 되었고 이후 현재 국내외 여러 의료기관들과 첨단재생의료 임상연구를 수행하며 줄기세포를 활용한 질병치료 기술을 개발하고 있습니다.</p>
										
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
								<h4 class="stem-cm-tit">특허증</h4>
								<p class="stem-cm-txt sm"><b>줄기세포 계대배양, 줄기세포 대량 생산,<br class="m-br"> 줄기세포 배양 배지 등</b>에 대한 특허.</p>
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
							<h4 class="stem-cm-tit">줄기세포 트레이닝</h4>
							<div class="training-wrap">
								<div class="lf-txt stem-cm-txt">
									<strong><i class="xi-document"></i>SVF · PRP · 줄기세포</strong>
									<strong><i class="xi-document"></i>시연 및 실습</strong>
									<p>엔바이오텍은 줄기세포에 관한 자체 교육 프로그램을 통해 <br class="pc-br">
									안전한 줄기세포 처리와 응용에 필요한 기술을 이전합니다.</p>
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
