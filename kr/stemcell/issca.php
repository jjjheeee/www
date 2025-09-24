<?
$page_num = "04";
$sub_num = "05";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "stemcell";
$sub_section = "solution";
$page_info = "줄기세포";
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
			<img src="<?=$site_host?>/images/content/issca_top_img_kr.jpg" alt="Stempia Global Platform" />
		</div>
		<div class="issca-app scroll-object">
			<div class="area">
				<h3 class="tit" data-scroll="fade-up"><b>ISSCA</b>국제줄기세포응용학회</h3>
				<div class="issca-check-box" data-scroll="fade-up">
					<div class="lf-logo"><img src="<?=$site_host?>/images/content/issca_logo.jpg" alt="ISSCA" /></div>
					<div class="rt-txt">
						<p>첨단재생의료 컨퍼런스</p>
						<p>시연</p>
						<p>임상사례 공유</p>
						<p>폭넓은 회원 자격</p>
					</div>
				</div>
				<div class="txt-con stem-cm-txt" data-scroll="fade-up">
					<p>줄기세포 응용 기술에 대한 관심이 세계적으로 높아지고 있습니다. 그러나 줄기세포 응용 기술을 배우고 교류할 수 있는 기회는 많지 않습니다. 줄기세포 토탈 솔루션을 제공하는 엔바이오텍은 각종 트레이닝 코스와 기술이전을 통해 전 세계의 수 많은 첨단재생의료 분야 전문가들을 교육하고 있으며, 국제줄기세포응용학회(ISSCA)를 통해 함께 줄기세포 응용을 위한 연구 및 응용 기술을 확대하는 것을 목표로 하고 있습니다.</p>
					<p>국제줄기세포응용학회(ISSCA)는 다양한 컨퍼런스, 교육 등을 통해 세계 여러 국가에서 줄기세포 및 첨단재생의료의 상용화와 법제화에 기여하고 있으며 세계 여러국가의 전문가로 구성된 회원들간의 교류를 통해 줄기세포 및 첨단재생의료 기술 개발에 힘써오고 있습니다.</p>
					<p>엔바이오텍은 앞으로도 글로벌 무대에서 줄기세포 기술과 지식을 발전시키기 위해 지속적으로 노력할 것입니다.</p>
				</div>
				<ul class="icon-box-list" data-scroll="fade-up">
					<li>
						<span class="icon"><img src="<?=$site_host?>/images/content/issca_icon_01.png" alt="Case presentation in a conference" /></span>
						<p class="txt stem-cm-txt">컨퍼런스에서의 임상사례 발표</p>
					</li>
					<li>
						<span class="icon"><img src="<?=$site_host?>/images/content/issca_icon_02.png" alt="ISSCA magazine advertisment" /></span>
						<p class="txt stem-cm-txt">ISSCA 매거진 광고</p>
					</li>
					<li>
						<span class="icon"><img src="<?=$site_host?>/images/content/issca_icon_03.png" alt="Promotional article distribution" /></span>
						<p class="txt stem-cm-txt">홍보 기사 배포</p>
					</li>
				</ul>
			</div>
		</div>
		<div class="issca-video scroll-object" data-scroll="fade-up">
			<div class="area">
				<h4 class="stem-cm-tit sm">프로모션 영상</h4>
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
										<b>터키</b>
									</div>
									<div class="explain">
										<p class="clearfix"><b>2018년 4월</b><span>제3차 ISSCA 첨단재생의료 컨퍼런스</span></p>
										<p class="clearfix"><b>2019년 4월</b><span>제6차 ISSCA 첨단재생의료 컨퍼런스</span></p>
									</div>
								</div>
								<div class="effect-circle" title="Turkey"><span></span><span></span><span></span><span></span><i></i></div>
							</div>
							<div class="nation-circle nation-02" style="margin-top:-33%; margin-left:-17.3%">
								<div class="nation-explain-wrap rt">
									<div class="nation-tit">
										<b>몽골</b>
										<img src="<?=$site_host?>/images/content/issca_global_nation_02.png" alt="Mongolia" />
									</div>
									<div class="explain">
										<p class="clearfix"><b>2019년 6월</b><span>제7차 첨단재생의료 컨퍼런스</span></p>
									</div>
								</div>
								<div class="effect-circle" title="Turkey"><span></span><span></span><span></span><span></span><i></i></div>
							</div>
							<div class="nation-circle nation-03" style="margin-top:-31%; margin-left:-12%">
								<div class="nation-explain-wrap rt">
									<div class="nation-tit">
										<b>대한민국</b>
										<img src="<?=$site_host?>/images/content/issca_global_nation_03.png" alt="South Korea" />
									</div>
									<div class="explain">
										<p class="clearfix"><b>2017년 4월</b><span>제1차 줄기세포 교육 및 건강 교육 컨퍼런스</span></p>
										<p class="clearfix"><b>2018년 1월</b><span>제2차 ISSCA 줄기세포 전문가 컨퍼런스</span></p>
										<p class="clearfix"><b>2018년 11월</b><span>제4차 ISSCA 첨단재생의료 컨퍼런스</span></p>
									</div>
								</div>
								<div class="effect-circle" title="Turkey"><span></span><span></span><span></span><span></span><i></i></div>
							</div>
							<div class="nation-circle nation-04" style="margin-top:-28%; margin-left:-44.1%">
								<div class="nation-explain-wrap">
									<div class="nation-tit">
										<img src="<?=$site_host?>/images/content/issca_global_nation_04.png" alt="Morocco" />
										<b>모로코</b>
									</div>
									<div class="explain">
										<p class="clearfix"><b>2019년 2월</b><span>제5차 ISSCA 첨단재생의료 컨퍼런스</span></p>
									</div>
								</div>
								<div class="effect-circle" title="Turkey"><span></span><span></span><span></span><span></span><i></i></div>
							</div>
							<div class="nation-circle nation-05" style="margin-top:-18.5%; margin-left:-15.1%">
								<div class="nation-explain-wrap rt">
									<div class="nation-tit">
										<b>말레이시아 </b>
										<img src="<?=$site_host?>/images/content/issca_global_nation_05.png" alt="Malaysia" />
									</div>
									<div class="explain">
										<p class="clearfix"><b>2019년 11월</b><span>제8차 ISSCA 첨단재생의료 컨퍼런스</span></p>
									</div>
								</div>
								<div class="effect-circle" title="Malaysia"><span></span><span></span><span></span><span></span><i></i></div>
							</div>
						</div>
					</div>
					<div  class="tb-img"><img src="<?=$site_url?>/images/content/issca_global_map_tb.png" alt=""/></div>
					<div  class="mb-global-con">
						<img src="<?=$site_host?>/images/content/issca_global_map_mb_kr.jpg" alt="" usemap="#Map"/>
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
				<h4 class="stem-cm-tit sm">갤러리</h4>
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
					<a href="http://www.issca.net" target="_blank">ISSCA 웹사이트 이동<i class="xi-globus"></i></a>
				</div>
			</div>
		</div>

	</article>		
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
