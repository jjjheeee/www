<?
$page_num = "03";
$sub_num = "04";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "stemcell";
$sub_section = "solution";
$page_info = "Stem Cell";
$sub_info = "ISSCA";
$content_type="wide";
// $sub_info2 = "3차메뉴";	// 사용안할시 주석처리
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(Description)	필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>

<script type="text/javascript" src="<?=$site_host?>/js/plugin/jquery.rwdImageMaps.min.js"></script>
<script type="text/javascript">
$(document).ready(function  () {
	/* ***********************  영상 클릭시 ************************ */
	$(".video-cover-box").on("click",function  () {
		var videoCode = $(this).data("code");
		$(this).fadeOut().prev(".video-iframe-box").append('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/'+videoCode+'?version=3&showinfo=0&autoplay=1&loop=1&controls=0&modestbranding=1&rel=0&playlist='+videoCode+'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
	});
});

$(function(){
	$('.mb-global-con img').rwdImageMaps();
});
</script>

<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
	<article class="issca-page">
		<div class="issca-top area-box scroll-object" data-scroll="fade-up" data-scroll-delay="200">
			<img src="<?=$site_host?>/images/content/issca_top_img.jpg" alt="Stempia Global Platform" />
		</div>
		<div class="issca-app scroll-object">
			<div class="area">
				<h3 class="tit" data-scroll="fade-up"><b>ISSCA</b> International Society for Stem Cell Application</h3>
				<div class="issca-check-box" data-scroll="fade-up">
					<div class="lf-logo"><img src="<?=$site_host?>/images/content/issca_logo.jpg" alt="ISSCA" /></div>
					<div class="rt-txt">
						<p>Regenerative Medicine Conference</p>
						<p>Demonstration Theraphy</p>
						<p>Clinical Trial Presentation</p>
						<p>Wide Range of Membership Qualification</p>
					</div>
				</div>
				<div class="txt-con stem-cm-txt" data-scroll="fade-up">
					<p>The interest of stem cell application skills spotlighted as the new medical technology is increased as a matter of world concern. However, there are not many chances to learn and exchange of the stem cell application skill. Thus, N-BIOTEK Inc., which provides stem cell total solution collaborates 
					with N-BIOTEK R&D Center. Which trains many doctors of the world, and we together aim to expand the research and applied technology of stem cell 
					applications through International Society for Stem Cell Application, ISSCA.</p>
					<p>International Society for Stem Cell Application, ISSCA will make leaders in promoting excellence and setting standards in the field for publication, 
					research, related education through various seminars and trainings. Also, ISSCA will have continuous exchange of the development of the stem cell application for the cooperation and intimacy of memberships.</p>
					<p>ISSCA consists of the representative of many countries which are Korea, Turkey, Morocco, Malaysia, Mongolia, Vietnam, Indonesia, and so on. <br>
					N-BIOTEK will continuously seek to advance and improve skills and knowledge of stem cell application.</p>
				</div>
				<ul class="icon-box-list" data-scroll="fade-up">
					<li>
						<span class="icon"><img src="<?=$site_host?>/images/content/issca_icon_01.png" alt="Case presentation in a conference" /></span>
						<p class="txt stem-cm-txt">Case presentation in a conference</p>
					</li>
					<li>
						<span class="icon"><img src="<?=$site_host?>/images/content/issca_icon_02.png" alt="ISSCA magazine advertisment" /></span>
						<p class="txt stem-cm-txt">ISSCA magazine advertisment</p>
					</li>
					<li>
						<span class="icon"><img src="<?=$site_host?>/images/content/issca_icon_03.png" alt="Promotional article distribution" /></span>
						<p class="txt stem-cm-txt">Promotional article distribution</p>
					</li>
				</ul>
			</div>
		</div>
		<div class="issca-video scroll-object" data-scroll="fade-up">
			<div class="area">
				<h4 class="stem-cm-tit sm">PROMOTION VIDEO</h4>
				<div class="video-iframe-wrapper">
					<div class="video-iframe-box"></div>
					<div class="video-cover-box" data-code="r0DLLhva2uE">
						<span class="thumb"><img src="<?=$site_host?>/images/content/issca_video_img.jpg" alt="PROMOTION VIDEO 배경" /></span>
						<div class="icon"><img src="<?=$site_host?>/images/content/issca_video_icon.png" alt="PROMOTION VIDEO 재생아이콘" /></div>
					</div>
				</div>
			</div>
		</div>
		<div class="issca-global scroll-object" data-scroll="fade-up">
			<section id="globalMapCon" class="section">
				<div class="global-area area-box">
					<div class="global-map-con" >
						<img src="<?=$site_host?>/images/main/global_map.png" alt="세계지도" class="global-map-bg"/>
						<div class="global-nation-box">
							<div class="nation-circle nation-01" style="margin-top:-30.5%; margin-left:-34.5%">
								<div class="nation-explain-wrap">
									<div class="nation-tit">
										<img src="<?=$site_host?>/images/content/issca_global_nation_01.png" alt="Turkey" />
										<b>Turkey</b>
									</div>
									<div class="explain">
										<p class="clearfix"><b>Apr. 2018</b><span>3rd ISSCA Regenerative Medicine Conference</span></p>
										<p class="clearfix"><b>Apr. 2019</b><span>6th ISSCA Stem Cell & Regenerative Medicine Conference </span></p>
									</div>
								</div>
								<div class="effect-circle" title="Turkey"><span></span><span></span><span></span><span></span><i></i></div>
							</div>
							<div class="nation-circle nation-02" style="margin-top:-33%; margin-left:-17.3%">
								<div class="nation-explain-wrap rt">
									<div class="nation-tit">
										<b>Mongolia</b>
										<img src="<?=$site_host?>/images/content/issca_global_nation_02.png" alt="Mongolia" />
									</div>
									<div class="explain">
										<p class="clearfix"><b>Jun. 2019</b><span>7th ISSCA Regenerative Medicine Conference</span></p>
									</div>
								</div>
								<div class="effect-circle" title="Turkey"><span></span><span></span><span></span><span></span><i></i></div>
							</div>
							<div class="nation-circle nation-03" style="margin-top:-31%; margin-left:-12%">
								<div class="nation-explain-wrap rt">
									<div class="nation-tit">
										<b>South Korea</b>
										<img src="<?=$site_host?>/images/content/issca_global_nation_03.png" alt="South Korea" />
									</div>
									<div class="explain">
										<p class="clearfix"><b>Apr. 2017</b><span>1st ISSCA Stem Cell Training & Health Education Conference</span></p>
										<p class="clearfix"><b>Jan. 2018</b><span>2nd ISSCA Stem Cell Specialist Conference</span></p>
										<p class="clearfix"><b>Nov. 2018</b><span>4th ISSCA Regenerative Medicine Conference</span></p>
									</div>
								</div>
								<div class="effect-circle" title="Turkey"><span></span><span></span><span></span><span></span><i></i></div>
							</div>
							<div class="nation-circle nation-04" style="margin-top:-28%; margin-left:-44.1%">
								<div class="nation-explain-wrap">
									<div class="nation-tit">
										<img src="<?=$site_host?>/images/content/issca_global_nation_04.png" alt="Morocco" />
										<b>Morocco</b>
									</div>
									<div class="explain">
										<p class="clearfix"><b>Feb. 2019</b><span>5th ISSCA Stem Cell& Regenerative Medicine Conference</span></p>
									</div>
								</div>
								<div class="effect-circle" title="Turkey"><span></span><span></span><span></span><span></span><i></i></div>
							</div>
							<div class="nation-circle nation-05" style="margin-top:-18.5%; margin-left:-15.1%">
								<div class="nation-explain-wrap rt">
									<div class="nation-tit">
										<b>Malaysia</b>
										<img src="<?=$site_host?>/images/content/issca_global_nation_05.png" alt="Malaysia" />
									</div>
									<div class="explain">
										<p class="clearfix"><b>Nov. 2019</b><span>8th ISSCA Stem Cell & Regenerative Medicine Conference</span></p>
									</div>
								</div>
								<div class="effect-circle" title="Malaysia"><span></span><span></span><span></span><span></span><i></i></div>
							</div>
						</div>
					</div>
					<div  class="tb-img"><img src="<?=$site_url?>/images/content/issca_global_map_tb.png" alt=""/></div>
					<div  class="mb-global-con">
						<img src="<?=$site_host?>/images/content/issca_global_map_mb.jpg" alt="" usemap="#Map"/>
						<map name="Map" id="Map">
						  <area shape="rect" coords="159,246,285,287" href="<?=$site_url?>/stemcell/global_pop.php?nation=1" class="cm-modal-open-btn"/>
						  <area shape="rect" coords="397,187,554,227" href="<?=$site_url?>/stemcell/global_pop.php?nation=2" class="cm-modal-open-btn"/>
						  <area shape="rect" coords="516,335,708,381" href="<?=$site_url?>/stemcell/global_pop.php?nation=3" class="cm-modal-open-btn"/>
						  <area shape="rect" coords="37,356,183,397" href="<?=$site_url?>/stemcell/global_pop.php?nation=4" class="cm-modal-open-btn"/>
						  <area shape="rect" coords="421,479,578,525" href="<?=$site_url?>/stemcell/global_pop.php?nation=5" class="cm-modal-open-btn"/>
						</map>
						<div class="effect-circle-box">
							<div class="nation-circle" style="margin-top:-12.5%;"><div class="effect-circle" title="Morocco"><span></span><span></span><span></span><span></span><i></i></div></div>
							<div class="nation-circle" style="margin-top:-6%; margin-left:-30.375%;"><div class="effect-circle" title="Turkey"><span></span><span></span><span></span><span></span><i></i></div></div>
							<div class="nation-circle" style="margin-top:-4.25%; margin-left:-41.5%;"><div class="effect-circle" title="Mongolia"><span></span><span></span><span></span><span></span><i></i></div></div>
							<div class="nation-circle" style="margin-top:-7.25%; margin-left:10.5%;"><div class="effect-circle" title="South Kores"><span></span><span></span><span></span><span></span><i></i></div></div>
							<div class="nation-circle" style="margin-top:10.875%; margin-left:5.25%;"><div class="effect-circle" title="Malaysia"><span></span><span></span><span></span><span></span><i></i></div></div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<div class="issca-gallery scroll-object" data-scroll="fade-up">
			<div class="area">
				<h4 class="stem-cm-tit sm">GALLERY</h4>
				<ul class="issca-gallery-slide">
					<?
					$code = "stem3";
					$rs = $db->select("cs_bbs_data","where code='$code' order by idx asc");
					while($row = mysqli_fetch_object($rs)){
					?>
					<li><img src="/data/bbsData/<?=$row->sum_file?>" alt="GALLERY" /></li>
					<? } ?>
					<!-- <li><img src="<?=$site_host?>/images/content/issca_gallery_img01.jpg" alt="" /></li>
					<li><img src="<?=$site_host?>/images/content/issca_gallery_img02.jpg" alt="" /></li>
					<li><img src="<?=$site_host?>/images/content/issca_gallery_img03.jpg" alt="" /></li>
					<li><img src="<?=$site_host?>/images/content/issca_gallery_img04.jpg" alt="" /></li>
					<li><img src="<?=$site_host?>/images/content/issca_gallery_img05.jpg" alt="" /></li>
					<li><img src="<?=$site_host?>/images/content/issca_gallery_img06.jpg" alt="" /></li>
					<li><img src="<?=$site_host?>/images/content/issca_gallery_img07.jpg" alt="" /></li>
					<li><img src="<?=$site_host?>/images/content/issca_gallery_img08.jpg" alt="" /></li>
					<li><img src="<?=$site_host?>/images/content/issca_gallery_img09.jpg" alt="" /></li>
					<li><img src="<?=$site_host?>/images/content/issca_gallery_img10.jpg" alt="" /></li>
					<li><img src="<?=$site_host?>/images/content/issca_gallery_img11.jpg" alt="" /></li>
					<li><img src="<?=$site_host?>/images/content/issca_gallery_img12.jpg" alt="" /></li> -->
				</ul>
				<div class="issca-go-btn">
					<a href="http://www.issca.net" target="_blank">Go to ISSCA Webpage<i class="xi-globus"></i></a>
				</div>
			</div>
		</div>

	</article>		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
