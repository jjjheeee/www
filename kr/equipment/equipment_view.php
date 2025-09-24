<?
$page_num = "06";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "equipment";
$sub_section = "equipment_view";
$page_info = "실험 장비";
$sub_info = "Stem Cell Total Solution Provider N-BIOTEK";
$top_searchbox = "true";
//$content_type="wide";
// $sub_info2 = "3차메뉴";	// 사용안할시 주석처리
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";

$part_idx = $db->filter($part_idx);
if($part_idx==""){ $part_idx = 1; }
$sub_num = "0".$part_idx;
$row = $db->object("cs_part","where idx='$part_idx'");
$sub_info = $row->part_name_k;

$sub_description = ""; // 페이지 설명(Description)	필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<style>
#content:not(.wide){padding: 180px 0;}
@media (max-width: 1260px){
	#content:not(.wide){padding: 180px 30px;}
}
@media (max-width: 1024px){
	#content:not(.wide){padding: 150px 30px;}
}
@media (max-width: 800px){
	#content:not(.wide){padding: 50px 30px;}
}
</style>

<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
	<!-- 
		[ 이미지 모두 정사각형 비율 유지 ]
		- 로고 등록 시 노출됩니다.
		- 제품 이미지 권장사이즈 : 270*270
		- 로고 이미지 권장사이즈 : 104*104
		
		- 탭 4개 항목및 타이틀은 고정입니다.
		- 표는 에디터로 들어가지 않습니다(작업하실때 설명드리겠습니다.)
		- 맨하단 다운로드는 2개 고정입니다.
	-->

<?
$idx = $db->filter($idx);

$row = $db->object("cs_goods_k","where idx='$idx'");
$rowp = $db->object("cs_part","where idx='$row->part_idx'");
?>

	<section class="equipment-view-page scroll-object" data-scroll="fade-up" data-scroll-delay="200">
		<article class="view-top-container">
			<div class="tit-con">
				<em class="prd-tit"><?=$rowp->part_name_k?></em>
				<h3><?=$row->name?></h3>
				<em class="detail-txt"><?=$row->name2?></em>
			</div>

			<div class="info-con">
				<div class="img-box">
					<ul class="equipment-main-list">
						<? if($row->add_images1){ ?>
						<li class="equipment-box-stl">
							<div class="equipment-inner-stl">
								<div class="equipment-img-box">
									<span class="img-wrap">
										<img src="/data/goodsImages/<?=$row->add_images1?>" alt="제품이미지">
									</span>
								</div>
								<? if($row->images2){ ?>
								<span class="equipment-logo">
									<span class="logo"><img src="/data/goodsImages/<?=$row->images2?>" alt="로고이미지" class="img-center"></span>
								</span>
								<? } ?>
							</div>
						</li>
						<? } ?>
						<? if($row->add_images2){ ?>
						<li class="equipment-box-stl">
							<div class="equipment-inner-stl">
								<div class="equipment-img-box">
									<span class="img-wrap">
										<img src="/data/goodsImages/<?=$row->add_images2?>" alt="제품이미지">
									</span>
								</div>
								<? if($row->images2){ ?>
								<span class="equipment-logo">
									<span class="logo"><img src="/data/goodsImages/<?=$row->images2?>" alt="로고이미지" class="img-center"></span>
								</span>
								<? } ?>
							</div>
						</li>
						<? } ?>
						<? if($row->add_images3){ ?>
						<li class="equipment-box-stl">
							<div class="equipment-inner-stl">
								<div class="equipment-img-box">
									<span class="img-wrap">
										<img src="/data/goodsImages/<?=$row->add_images3?>" alt="제품이미지">
									</span>
								</div>
								<? if($row->images2){ ?>
								<span class="equipment-logo">
									<span class="logo"><img src="/data/goodsImages/<?=$row->images2?>" alt="로고이미지" class="img-center"></span>
								</span>
								<? } ?>
							</div>
						</li>
						<? } ?>
						<? if($row->add_images4){ ?>
						<li class="equipment-box-stl">
							<div class="equipment-inner-stl">
								<div class="equipment-img-box">
									<span class="img-wrap">
										<img src="/data/goodsImages/<?=$row->add_images4?>" alt="제품이미지">
									</span>
								</div>
								<? if($row->images2){ ?>
								<span class="equipment-logo">
									<span class="logo"><img src="/data/goodsImages/<?=$row->images2?>" alt="로고이미지" class="img-center"></span>
								</span>
								<? } ?>
							</div>
						</li>
						<? } ?>
						<? if($row->add_images5){ ?>
						<li class="equipment-box-stl">
							<div class="equipment-inner-stl">
								<div class="equipment-img-box">
									<span class="img-wrap">
										<img src="/data/goodsImages/<?=$row->add_images5?>" alt="제품이미지">
									</span>
								</div>
								<? if($row->images2){ ?>
								<span class="equipment-logo">
									<span class="logo"><img src="/data/goodsImages/<?=$row->images2?>" alt="로고이미지" class="img-center"></span>
								</span>
								<? } ?>
							</div>
						</li>
						<? } ?>
						<? if($row->add_images6){ ?>
						<li class="equipment-box-stl">
							<div class="equipment-inner-stl">
								<div class="equipment-img-box">
									<span class="img-wrap">
										<img src="/data/goodsImages/<?=$row->add_images6?>" alt="제품이미지">
									</span>
								</div>
								<? if($row->images2){ ?>
								<span class="equipment-logo">
									<span class="logo"><img src="/data/goodsImages/<?=$row->images2?>" alt="로고이미지" class="img-center"></span>
								</span>
								<? } ?>
							</div>
						</li>
						<? } ?>
						<? if($row->add_images7){ ?>
						<li class="equipment-box-stl">
							<div class="equipment-inner-stl">
								<div class="equipment-img-box">
									<span class="img-wrap">
										<img src="/data/goodsImages/<?=$row->add_images7?>" alt="제품이미지">
									</span>
								</div>
								<? if($row->images2){ ?>
								<span class="equipment-logo">
									<span class="logo"><img src="/data/goodsImages/<?=$row->images2?>" alt="로고이미지" class="img-center"></span>
								</span>
								<? } ?>
							</div>
						</li>
						<? } ?>
						<? if($row->add_images8){ ?>
						<li class="equipment-box-stl">
							<div class="equipment-inner-stl">
								<div class="equipment-img-box">
									<span class="img-wrap">
										<img src="/data/goodsImages/<?=$row->add_images8?>" alt="제품이미지">
									</span>
								</div>
								<? if($row->images2){ ?>
								<span class="equipment-logo">
									<span class="logo"><img src="/data/goodsImages/<?=$row->images2?>" alt="로고이미지" class="img-center"></span>
								</span>
								<? } ?>
							</div>
						</li>
						<? } ?>
						<? if($row->add_images9){ ?>
						<li class="equipment-box-stl">
							<div class="equipment-inner-stl">
								<div class="equipment-img-box">
									<span class="img-wrap">
										<img src="/data/goodsImages/<?=$row->add_images9?>" alt="제품이미지">
									</span>
								</div>
								<? if($row->images2){ ?>
								<span class="equipment-logo">
									<span class="logo"><img src="/data/goodsImages/<?=$row->images2?>" alt="로고이미지" class="img-center"></span>
								</span>
								<? } ?>
							</div>
						</li>
						<? } ?>
						<? if($row->add_images10){ ?>
						<li class="equipment-box-stl">
							<div class="equipment-inner-stl">
								<div class="equipment-img-box">
									<span class="img-wrap">
										<img src="/data/goodsImages/<?=$row->add_images10?>" alt="제품이미지">
									</span>
								</div>
								<? if($row->images2){ ?>
								<span class="equipment-logo">
									<span class="logo"><img src="/data/goodsImages/<?=$row->images2?>" alt="로고이미지" class="img-center"></span>
								</span>
								<? } ?>
							</div>
						</li>
						<? } ?>
					</ul>

					<ul class="equipment-small-list">
						<? if($row->add_images1){ ?>
						<li class="equipment-box-stl">
							<div class="equipment-inner-stl">
								<div class="equipment-img-box">
									<span class="img-wrap">
										<img src="/data/goodsImages/<?=$row->add_images1?>" alt="제품이미지">
									</span>
								</div>
							</div>
						</li>
						<? } ?>
						<? if($row->add_images2){ ?>
						<li class="equipment-box-stl">
							<div class="equipment-inner-stl">
								<div class="equipment-img-box">
									<span class="img-wrap">
										<img src="/data/goodsImages/<?=$row->add_images2?>" alt="제품이미지">
									</span>
								</div>
							</div>
						</li>
						<? } ?>
						<? if($row->add_images3){ ?>
						<li class="equipment-box-stl">
							<div class="equipment-inner-stl">
								<div class="equipment-img-box">
									<span class="img-wrap">
										<img src="/data/goodsImages/<?=$row->add_images3?>" alt="제품이미지">
									</span>
								</div>
							</div>
						</li>
						<? } ?>
						<? if($row->add_images4){ ?>
						<li class="equipment-box-stl">
							<div class="equipment-inner-stl">
								<div class="equipment-img-box">
									<span class="img-wrap">
										<img src="/data/goodsImages/<?=$row->add_images4?>" alt="제품이미지">
									</span>
								</div>
							</div>
						</li>
						<? } ?>
						<? if($row->add_images5){ ?>
						<li class="equipment-box-stl">
							<div class="equipment-inner-stl">
								<div class="equipment-img-box">
									<span class="img-wrap">
										<img src="/data/goodsImages/<?=$row->add_images5?>" alt="제품이미지">
									</span>
								</div>
							</div>
						</li>
						<? } ?>
						<? if($row->add_images6){ ?>
						<li class="equipment-box-stl">
							<div class="equipment-inner-stl">
								<div class="equipment-img-box">
									<span class="img-wrap">
										<img src="/data/goodsImages/<?=$row->add_images6?>" alt="제품이미지">
									</span>
								</div>
							</div>
						</li>
						<? } ?>
						<? if($row->add_images7){ ?>
						<li class="equipment-box-stl">
							<div class="equipment-inner-stl">
								<div class="equipment-img-box">
									<span class="img-wrap">
										<img src="/data/goodsImages/<?=$row->add_images7?>" alt="제품이미지">
									</span>
								</div>
							</div>
						</li>
						<? } ?>
						<? if($row->add_images8){ ?>
						<li class="equipment-box-stl">
							<div class="equipment-inner-stl">
								<div class="equipment-img-box">
									<span class="img-wrap">
										<img src="/data/goodsImages/<?=$row->add_images8?>" alt="제품이미지">
									</span>
								</div>
							</div>
						</li>
						<? } ?>
						<? if($row->add_images9){ ?>
						<li class="equipment-box-stl">
							<div class="equipment-inner-stl">
								<div class="equipment-img-box">
									<span class="img-wrap">
										<img src="/data/goodsImages/<?=$row->add_images9?>" alt="제품이미지">
									</span>
								</div>
							</div>
						</li>
						<? } ?>
						<? if($row->add_images10){ ?>
						<li class="equipment-box-stl">
							<div class="equipment-inner-stl">
								<div class="equipment-img-box">
									<span class="img-wrap">
										<img src="/data/goodsImages/<?=$row->add_images10?>" alt="제품이미지">
									</span>
								</div>
							</div>
						</li>
						<? } ?>
					</ul>
				</div>
				
				<div class="detail-box">
					<?
					$content_re = explode("\n",$row->content_re);
					foreach($content_re as $key=>$data){
					?>
					<p class="front-check-txt"><?=$data?></p>
					<? } ?>
					<!-- <p class="front-check-txt">Optimized for Large Scale Cell Container</p>
					<p class="front-check-txt">Excellent Temperature Uniformity & Rapid Heating for Fast <br class="pc-br" />Recovery by 6 side Direct Heating and 4 Air Circulation Fans</p>
					<p class="front-check-txt">7 Inch Full color LCD Touch Panel</p>
					<p class="front-check-txt">Various Composition and Divided Glass Door Options </p> -->

					<dl class="detail-item">
						<dt><?=$row->name_s?></dt>
						<dd>
							<?
							$content_re = explode("\n",$row->content_re_s);
							foreach($content_re as $key=>$data){
							?>
							<p><?=$data?></p>
							<? } ?>
						</dd>
					</dl>
				</div>
			</div>
		</article><!-- //view-top-container -->

		<article class="view-detail-container">
			<div class="cm-fixed-tab-container-JS">
				<aside class="sub-tab-wrapper-style">
					<div class="sub-tab-list-style sub-drop-menu-style cm-fixed-tab-list-JS cm-drop-menu-box-JS top-fixed-object" data-drop-width="800" data-drop-event="click">
						<div class="area equipment-tab-area">
							<a href="javascript:;" class="sub-drop-open-btn-style cm-drop-open-btn-JS"><span>제품개요</span><i class="xi-caret-down-min arrow"></i></a>
							<ul class="clearfix cm-drop-list-JS equipment-tab-list move-line-tab">
								<li class="selected on"><a href="#fixedContentM1" class="inner"><em class="txt-inner">제품개요</em></a></li>
								<li><a href="#fixedContentM2" class="inner"><em class="txt-inner">기술사양</em></a></li>
								<li><a href="#fixedContentM3" class="inner"><em class="txt-inner">액세서리 / 옵션 <!-- for <?=$row->name2?> --></em></a></li>
								<li class="last"><a href="#fixedContentM4" class="inner"><em class="txt-inner">문서</em></a></li>
							</ul>
							<div class="nav-on-icon main-move-line">
								<span></span>
							</div>
						</div>
					</div>
				</aside>
				<div class="sub-tab-content-style">
					<div class="sub-tab-con" id="fixedContentM1"> <!-- 코딩해놓은 스타일 가져다가 에디터에 넣어서 쓰실듯 합니다. -->
						
						<?
						$content = $tools->strHtml($row->content);
						echo $content;
						?>
						
						<!--
						<div class="img-box"><img src="<?=$site_host?>/images/test/equipment_img01.png" alt=""></div>
						<dl class="detail-item">
							<dt class="detail-tit big">Realize your large scale cell culture needs <br class="pc-br" />with the great platform, Max Cell™. </dt>
							<dd class="detail-txt">N-BIOTEK 880 liter large-capacity CO<sub>2</sub> incubator, Max Cell™ provides the optimal environment for your large scale cell culture needs in one <br class="pc-br" />big platform. Its 6-side direct heating and optimal air circulation system enable to maintain excellent uniformity of temperature, humidity <br class="pc-br" />and CO<sub>2</sub>  even under full container loading. It is specially optimized for the use of large cell culture containers like Corning Cell Stack and <br class="pc-br" />Nunk Cell Factory. With this one big platform, stacking two incubators is not needed anymore.</dd>
						</dl>

						<div class="detail-item">
							<h4 class="front-cir-title detail-tit big">Products Features</h4>
							<dl>
								<dt class="detail-tit">Optimized for large scale cell container</dt>
								<dd class="detail-txt">Maximum 6 x Corning Cell Stack or Nunk Cell Factory is available on a shelf, Totally, 30 x 10 layer Cell stack containers loadable  in an incubator.</dd>
							</dl>
							<div class="img-box add-top-pd"><img src="<?=$site_host?>/images/test/equipment_img02.png" alt=""></div>
						</div>

						<div class="detail-item">
							<dl>
								<dt class="detail-tit">Excellent Temperature uniformity & Rapid Heating for fast recovery by 6 side direct heating and 4 Air Circulation Fans</dt>
								<dd class="detail-txt">Four air circulation fans are installed at bottom side of air-duct that is mounted on rare wall in chamber.<br />Such fans move the air from down to top through the air-duct and direct airflow from top to down.<br/>It eventually distributes the air including heat, CO₂, humidity evenly throughout the big chamber.</dd>
							</dl>
							<div class="img-box add-top-pd"><img src="<?=$site_host?>/images/test/equipment_img03.png" alt=""></div>
						</div>

						<dl class="detail-item">
							<dt class="detail-tit">7 Inch Full Color LCD Touch Panel</dt>
							<dd class="detail-txt">
								<p class="sub-detail-tit">Easy Setup, Clear View, Data Recording, Real-time Information</p>
								<p class="front-dash-txt">Internal Memory recordable for 6months and USB 3.0 for longer data recording & extraction</p>
								<p class="front-dash-txt">Microprocess PID control, Screen Lock, Alarm Message, Real-time Monitoring Graph</p>
							</dd>
						</dl>
						<div class="detail-item">
							<dl>
								<dt class="detail-tit">Various Composition and Divided Glass Door Options</dt>
								<dd class="detail-txt">
									<p class="front-dash-txt">25 Positions of Shelf and 5 Types of Glass doors(Also, customization available)</p>
								</dd>
							</dl>
							<div class="img-box add-top-pd"><img src="<?=$site_host?>/images/test/equipment_img04.png" alt=""></div>
						</div>
					</div>
					-->
					<div class="sub-tab-con" id="fixedContentM2">
						<!-- <h4 class="front-cir-title detail-tit big">Specification</h4> -->


						<?
						$rst = $db->select("cs_goods_k_tablew","where code='$row->code' and cate='1' order by ranking asc, idx asc");
						while($rowt = mysqli_fetch_object($rst)){
						?>
						<div class="prd-cm-table">
							<? if($rowt->head_title){ ?>
							<h4 class="front-cir-title detail-tit big tbl-tit"><?=$rowt->head_title?></h4>
							<? } ?>
							<div class="custom-scrollbar-wrapper">
								<div class="scroll-object-box">
									<table class="equipment-view-tbl scroll-object">
										<tbody>
											<tr>
												<? if($rowt->name1){ ?><th><?=$rowt->name1?></th><? } ?>
												<? if($rowt->name2){ ?><th><?=$rowt->name2?></th><? } ?>
												<? if($rowt->name3){ ?><th><?=$rowt->name3?></th><? } ?>
												<? if($rowt->name4){ ?><th><?=$rowt->name4?></th><? } ?>
												<? if($rowt->name5){ ?><th><?=$rowt->name5?></th><? } ?>
												<? if($rowt->name6){ ?><th><?=$rowt->name6?></th><? } ?>
												<? if($rowt->name7){ ?><th><?=$rowt->name7?></th><? } ?>
												<? if($rowt->name8){ ?><th><?=$rowt->name8?></th><? } ?>
												<? if($rowt->name9){ ?><th><?=$rowt->name9?></th><? } ?>
												<? if($rowt->name10){ ?><th><?=$rowt->name10?></th><? } ?>
												<? if($rowt->name11){ ?><th><?=$rowt->name11?></th><? } ?>
												<? if($rowt->name12){ ?><th><?=$rowt->name12?></th><? } ?>
												<? if($rowt->name13){ ?><th><?=$rowt->name13?></th><? } ?>
												<? if($rowt->name14){ ?><th><?=$rowt->name14?></th><? } ?>
												<? if($rowt->name15){ ?><th><?=$rowt->name15?></th><? } ?>
												<? if($rowt->name16){ ?><th><?=$rowt->name16?></th><? } ?>
												<? if($rowt->name17){ ?><th><?=$rowt->name17?></th><? } ?>
												<? if($rowt->name18){ ?><th><?=$rowt->name18?></th><? } ?>
												<? if($rowt->name19){ ?><th><?=$rowt->name19?></th><? } ?>
												<? if($rowt->name20){ ?><th><?=$rowt->name20?></th><? } ?>
												<? if($rowt->name21){ ?><th><?=$rowt->name21?></th><? } ?>
												<? if($rowt->name22){ ?><th><?=$rowt->name22?></th><? } ?>
												<? if($rowt->name23){ ?><th><?=$rowt->name23?></th><? } ?>
												<? if($rowt->name24){ ?><th><?=$rowt->name24?></th><? } ?>
												<? if($rowt->name25){ ?><th><?=$rowt->name25?></th><? } ?>
												<? if($rowt->name26){ ?><th><?=$rowt->name26?></th><? } ?>
												<? if($rowt->name27){ ?><th><?=$rowt->name27?></th><? } ?>
												<? if($rowt->name28){ ?><th><?=$rowt->name28?></th><? } ?>
												<? if($rowt->name29){ ?><th><?=$rowt->name29?></th><? } ?>
												<? if($rowt->name30){ ?><th><?=$rowt->name30?></th><? } ?>
												<? if($rowt->name31){ ?><th><?=$rowt->name31?></th><? } ?>
												<? if($rowt->name32){ ?><th><?=$rowt->name32?></th><? } ?>
												<? if($rowt->name33){ ?><th><?=$rowt->name33?></th><? } ?>
												<? if($rowt->name34){ ?><th><?=$rowt->name34?></th><? } ?>
												<? if($rowt->name35){ ?><th><?=$rowt->name35?></th><? } ?>
												<? if($rowt->name36){ ?><th><?=$rowt->name36?></th><? } ?>
												<? if($rowt->name37){ ?><th><?=$rowt->name37?></th><? } ?>
												<? if($rowt->name38){ ?><th><?=$rowt->name38?></th><? } ?>
												<? if($rowt->name39){ ?><th><?=$rowt->name39?></th><? } ?>
												<? if($rowt->name40){ ?><th><?=$rowt->name40?></th><? } ?>
												<? if($rowt->name41){ ?><th><?=$rowt->name41?></th><? } ?>
												<? if($rowt->name42){ ?><th><?=$rowt->name42?></th><? } ?>
												<? if($rowt->name43){ ?><th><?=$rowt->name43?></th><? } ?>
												<? if($rowt->name44){ ?><th><?=$rowt->name44?></th><? } ?>
												<? if($rowt->name45){ ?><th><?=$rowt->name45?></th><? } ?>
												<? if($rowt->name46){ ?><th><?=$rowt->name46?></th><? } ?>
												<? if($rowt->name47){ ?><th><?=$rowt->name47?></th><? } ?>
												<? if($rowt->name48){ ?><th><?=$rowt->name48?></th><? } ?>
												<? if($rowt->name49){ ?><th><?=$rowt->name49?></th><? } ?>
												<? if($rowt->name50){ ?><th><?=$rowt->name50?></th><? } ?>
											</tr>
											<?
											$rs2 = $db->select("cs_goods_k_tableh","where code='$row->code' and cate='1' and keyidx='$rowt->idx' order by num asc");
											while($row2 = mysqli_fetch_object($rs2)){
											?>
											<tr>
												<? if($row2->name1){ ?><td class="sub-tit"><?=$row2->name1?></td><? } ?>
												<? if($row2->name2){ ?><td class="has"><?=$row2->name2?></td><? } ?>
												<? if($row2->name3){ ?><td class="has"><?=$row2->name3?></td><? } ?>
												<? if($row2->name4){ ?><td class="has"><?=$row2->name4?></td><? } ?>
												<? if($row2->name5){ ?><td class="has"><?=$row2->name5?></td><? } ?>
												<? if($row2->name6){ ?><td class="has"><?=$row2->name6?></td><? } ?>
												<? if($row2->name7){ ?><td class="has"><?=$row2->name7?></td><? } ?>
												<? if($row2->name8){ ?><td class="has"><?=$row2->name8?></td><? } ?>
												<? if($row2->name9){ ?><td class="has"><?=$row2->name9?></td><? } ?>
												<? if($row2->name10){ ?><td class="has"><?=$row2->name10?></td><? } ?>
												<? if($row2->name11){ ?><td class="has"><?=$row2->name11?></td><? } ?>
												<? if($row2->name12){ ?><td class="has"><?=$row2->name12?></td><? } ?>
												<? if($row2->name13){ ?><td class="has"><?=$row2->name13?></td><? } ?>
												<? if($row2->name14){ ?><td class="has"><?=$row2->name14?></td><? } ?>
												<? if($row2->name15){ ?><td class="has"><?=$row2->name15?></td><? } ?>
												<? if($row2->name16){ ?><td class="has"><?=$row2->name16?></td><? } ?>
												<? if($row2->name17){ ?><td class="has"><?=$row2->name17?></td><? } ?>
												<? if($row2->name18){ ?><td class="has"><?=$row2->name18?></td><? } ?>
												<? if($row2->name19){ ?><td class="has"><?=$row2->name19?></td><? } ?>
												<? if($row2->name20){ ?><td class="has"><?=$row2->name20?></td><? } ?>
												<? if($row2->name21){ ?><td class="has"><?=$row2->name21?></td><? } ?>
												<? if($row2->name22){ ?><td class="has"><?=$row2->name22?></td><? } ?>
												<? if($row2->name23){ ?><td class="has"><?=$row2->name23?></td><? } ?>
												<? if($row2->name24){ ?><td class="has"><?=$row2->name24?></td><? } ?>
												<? if($row2->name25){ ?><td class="has"><?=$row2->name25?></td><? } ?>
												<? if($row2->name26){ ?><td class="has"><?=$row2->name26?></td><? } ?>
												<? if($row2->name27){ ?><td class="has"><?=$row2->name27?></td><? } ?>
												<? if($row2->name28){ ?><td class="has"><?=$row2->name28?></td><? } ?>
												<? if($row2->name29){ ?><td class="has"><?=$row2->name29?></td><? } ?>
												<? if($row2->name30){ ?><td class="has"><?=$row2->name30?></td><? } ?>
												<? if($row2->name31){ ?><td class="has"><?=$row2->name31?></td><? } ?>
												<? if($row2->name32){ ?><td class="has"><?=$row2->name32?></td><? } ?>
												<? if($row2->name33){ ?><td class="has"><?=$row2->name33?></td><? } ?>
												<? if($row2->name34){ ?><td class="has"><?=$row2->name34?></td><? } ?>
												<? if($row2->name35){ ?><td class="has"><?=$row2->name35?></td><? } ?>
												<? if($row2->name36){ ?><td class="has"><?=$row2->name36?></td><? } ?>
												<? if($row2->name37){ ?><td class="has"><?=$row2->name37?></td><? } ?>
												<? if($row2->name38){ ?><td class="has"><?=$row2->name38?></td><? } ?>
												<? if($row2->name39){ ?><td class="has"><?=$row2->name39?></td><? } ?>
												<? if($row2->name40){ ?><td class="has"><?=$row2->name40?></td><? } ?>
												<? if($row2->name41){ ?><td class="has"><?=$row2->name41?></td><? } ?>
												<? if($row2->name42){ ?><td class="has"><?=$row2->name42?></td><? } ?>
												<? if($row2->name43){ ?><td class="has"><?=$row2->name43?></td><? } ?>
												<? if($row2->name44){ ?><td class="has"><?=$row2->name44?></td><? } ?>
												<? if($row2->name45){ ?><td class="has"><?=$row2->name45?></td><? } ?>
												<? if($row2->name46){ ?><td class="has"><?=$row2->name46?></td><? } ?>
												<? if($row2->name47){ ?><td class="has"><?=$row2->name47?></td><? } ?>
												<? if($row2->name48){ ?><td class="has"><?=$row2->name48?></td><? } ?>
												<? if($row2->name49){ ?><td class="has"><?=$row2->name49?></td><? } ?>
												<? if($row2->name50){ ?><td class="has"><?=$row2->name50?></td><? } ?>
											</tr>
											<? } ?>
										</tbody>
									</table>
								</div>
							</div>
							<? if($rowt->title){ ?>
							<p class="view-tbl-txt"><?=nl2br($rowt->title)?></p> 
							<? } ?>
						</div>
						<? } ?>

						<!-- <div class="prd-cm-table">
							<div class="custom-scrollbar-wrapper">
								<div class="scroll-object-box">
									<table class="equipment-view-tbl scroll-object">
										<tbody>
											<tr>
												<th>Model</th>
												<th>NBT203XXL-2D</th>
											</tr>
											<tr>
												<td class="sub-tit">Chamber Volume</td>
												<td class="has">880 Liter</td>
											</tr>
											<tr>
												<td class="sub-tit">Chamber Volume</td>
												<td class="has">880 Liter</td>
											</tr>
											<tr>
												<td class="sub-tit">Chamber Volume</td>
												<td class="has">880 Liter</td>
											</tr>
											<tr>
												<td class="sub-tit">Chamber Volume</td>
												<td class="has">880 Liter</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<p class="view-tbl-txt">Optimum performance for maximum allowance can be obtained at 15</p> <!-- 표 하단에 간단한 텍스트 입력가능 ->
						</div> -->
					</div>
					<div class="sub-tab-con" id="fixedContentM3">

						<?
						$rst = $db->select("cs_goods_k_tablew","where code='$row->code' and cate='2' order by ranking asc, idx asc");
						while($rowt = mysqli_fetch_object($rst)){
						?>
						<div class="prd-cm-table">
							<? if($rowt->head_title){ ?>
							<h4 class="front-cir-title detail-tit big tbl-tit"><?=$rowt->head_title?></h4>
							<? } ?>
							<div class="custom-scrollbar-wrapper <? if($rowt->name4){ ?>long-tbl<? } ?>">
								<div class="scroll-object-box">
									<table class="equipment-view-tbl scroll-object">
										<tbody>
											<tr>
												<? if($rowt->name1){ ?><th><?=$rowt->name1?></th><? } ?>
												<? if($rowt->name2){ ?><th><?=$rowt->name2?></th><? } ?>
												<? if($rowt->name3){ ?><th><?=$rowt->name3?></th><? } ?>
												<? if($rowt->name4){ ?><th><?=$rowt->name4?></th><? } ?>
												<? if($rowt->name5){ ?><th><?=$rowt->name5?></th><? } ?>
												<? if($rowt->name6){ ?><th><?=$rowt->name6?></th><? } ?>
												<? if($rowt->name7){ ?><th><?=$rowt->name7?></th><? } ?>
												<? if($rowt->name8){ ?><th><?=$rowt->name8?></th><? } ?>
												<? if($rowt->name9){ ?><th><?=$rowt->name9?></th><? } ?>
												<? if($rowt->name10){ ?><th><?=$rowt->name10?></th><? } ?>
												<? if($rowt->name11){ ?><th><?=$rowt->name11?></th><? } ?>
												<? if($rowt->name12){ ?><th><?=$rowt->name12?></th><? } ?>
												<? if($rowt->name13){ ?><th><?=$rowt->name13?></th><? } ?>
												<? if($rowt->name14){ ?><th><?=$rowt->name14?></th><? } ?>
												<? if($rowt->name15){ ?><th><?=$rowt->name15?></th><? } ?>
												<? if($rowt->name16){ ?><th><?=$rowt->name16?></th><? } ?>
												<? if($rowt->name17){ ?><th><?=$rowt->name17?></th><? } ?>
												<? if($rowt->name18){ ?><th><?=$rowt->name18?></th><? } ?>
												<? if($rowt->name19){ ?><th><?=$rowt->name19?></th><? } ?>
												<? if($rowt->name20){ ?><th><?=$rowt->name20?></th><? } ?>
												<? if($rowt->name21){ ?><th><?=$rowt->name21?></th><? } ?>
												<? if($rowt->name22){ ?><th><?=$rowt->name22?></th><? } ?>
												<? if($rowt->name23){ ?><th><?=$rowt->name23?></th><? } ?>
												<? if($rowt->name24){ ?><th><?=$rowt->name24?></th><? } ?>
												<? if($rowt->name25){ ?><th><?=$rowt->name25?></th><? } ?>
												<? if($rowt->name26){ ?><th><?=$rowt->name26?></th><? } ?>
												<? if($rowt->name27){ ?><th><?=$rowt->name27?></th><? } ?>
												<? if($rowt->name28){ ?><th><?=$rowt->name28?></th><? } ?>
												<? if($rowt->name29){ ?><th><?=$rowt->name29?></th><? } ?>
												<? if($rowt->name30){ ?><th><?=$rowt->name30?></th><? } ?>
												<? if($rowt->name31){ ?><th><?=$rowt->name31?></th><? } ?>
												<? if($rowt->name32){ ?><th><?=$rowt->name32?></th><? } ?>
												<? if($rowt->name33){ ?><th><?=$rowt->name33?></th><? } ?>
												<? if($rowt->name34){ ?><th><?=$rowt->name34?></th><? } ?>
												<? if($rowt->name35){ ?><th><?=$rowt->name35?></th><? } ?>
												<? if($rowt->name36){ ?><th><?=$rowt->name36?></th><? } ?>
												<? if($rowt->name37){ ?><th><?=$rowt->name37?></th><? } ?>
												<? if($rowt->name38){ ?><th><?=$rowt->name38?></th><? } ?>
												<? if($rowt->name39){ ?><th><?=$rowt->name39?></th><? } ?>
												<? if($rowt->name40){ ?><th><?=$rowt->name40?></th><? } ?>
												<? if($rowt->name41){ ?><th><?=$rowt->name41?></th><? } ?>
												<? if($rowt->name42){ ?><th><?=$rowt->name42?></th><? } ?>
												<? if($rowt->name43){ ?><th><?=$rowt->name43?></th><? } ?>
												<? if($rowt->name44){ ?><th><?=$rowt->name44?></th><? } ?>
												<? if($rowt->name45){ ?><th><?=$rowt->name45?></th><? } ?>
												<? if($rowt->name46){ ?><th><?=$rowt->name46?></th><? } ?>
												<? if($rowt->name47){ ?><th><?=$rowt->name47?></th><? } ?>
												<? if($rowt->name48){ ?><th><?=$rowt->name48?></th><? } ?>
												<? if($rowt->name49){ ?><th><?=$rowt->name49?></th><? } ?>
												<? if($rowt->name50){ ?><th><?=$rowt->name50?></th><? } ?>
											</tr>
											<?
											$rs2 = $db->select("cs_goods_k_tableh","where code='$row->code' and cate='2' and keyidx='$rowt->idx' order by num asc");
											while($row2 = mysqli_fetch_object($rs2)){
											?>
											<tr>
												<? if($row2->name1){ ?><td class="sub-tit"><?=$row2->name1?></td><? } ?>
												<? if($row2->name2){ ?><td class="has"><?=$row2->name2?></td><? } ?>
												<? if($row2->name3){ ?><td class="has"><?=$row2->name3?></td><? } ?>
												<? if($row2->name4){ ?><td class="has"><?=$row2->name4?></td><? } ?>
												<? if($row2->name5){ ?><td class="has"><?=$row2->name5?></td><? } ?>
												<? if($row2->name6){ ?><td class="has"><?=$row2->name6?></td><? } ?>
												<? if($row2->name7){ ?><td class="has"><?=$row2->name7?></td><? } ?>
												<? if($row2->name8){ ?><td class="has"><?=$row2->name8?></td><? } ?>
												<? if($row2->name9){ ?><td class="has"><?=$row2->name9?></td><? } ?>
												<? if($row2->name10){ ?><td class="has"><?=$row2->name10?></td><? } ?>
												<? if($row2->name11){ ?><td class="has"><?=$row2->name11?></td><? } ?>
												<? if($row2->name12){ ?><td class="has"><?=$row2->name12?></td><? } ?>
												<? if($row2->name13){ ?><td class="has"><?=$row2->name13?></td><? } ?>
												<? if($row2->name14){ ?><td class="has"><?=$row2->name14?></td><? } ?>
												<? if($row2->name15){ ?><td class="has"><?=$row2->name15?></td><? } ?>
												<? if($row2->name16){ ?><td class="has"><?=$row2->name16?></td><? } ?>
												<? if($row2->name17){ ?><td class="has"><?=$row2->name17?></td><? } ?>
												<? if($row2->name18){ ?><td class="has"><?=$row2->name18?></td><? } ?>
												<? if($row2->name19){ ?><td class="has"><?=$row2->name19?></td><? } ?>
												<? if($row2->name20){ ?><td class="has"><?=$row2->name20?></td><? } ?>
												<? if($row2->name21){ ?><td class="has"><?=$row2->name21?></td><? } ?>
												<? if($row2->name22){ ?><td class="has"><?=$row2->name22?></td><? } ?>
												<? if($row2->name23){ ?><td class="has"><?=$row2->name23?></td><? } ?>
												<? if($row2->name24){ ?><td class="has"><?=$row2->name24?></td><? } ?>
												<? if($row2->name25){ ?><td class="has"><?=$row2->name25?></td><? } ?>
												<? if($row2->name26){ ?><td class="has"><?=$row2->name26?></td><? } ?>
												<? if($row2->name27){ ?><td class="has"><?=$row2->name27?></td><? } ?>
												<? if($row2->name28){ ?><td class="has"><?=$row2->name28?></td><? } ?>
												<? if($row2->name29){ ?><td class="has"><?=$row2->name29?></td><? } ?>
												<? if($row2->name30){ ?><td class="has"><?=$row2->name30?></td><? } ?>
												<? if($row2->name31){ ?><td class="has"><?=$row2->name31?></td><? } ?>
												<? if($row2->name32){ ?><td class="has"><?=$row2->name32?></td><? } ?>
												<? if($row2->name33){ ?><td class="has"><?=$row2->name33?></td><? } ?>
												<? if($row2->name34){ ?><td class="has"><?=$row2->name34?></td><? } ?>
												<? if($row2->name35){ ?><td class="has"><?=$row2->name35?></td><? } ?>
												<? if($row2->name36){ ?><td class="has"><?=$row2->name36?></td><? } ?>
												<? if($row2->name37){ ?><td class="has"><?=$row2->name37?></td><? } ?>
												<? if($row2->name38){ ?><td class="has"><?=$row2->name38?></td><? } ?>
												<? if($row2->name39){ ?><td class="has"><?=$row2->name39?></td><? } ?>
												<? if($row2->name40){ ?><td class="has"><?=$row2->name40?></td><? } ?>
												<? if($row2->name41){ ?><td class="has"><?=$row2->name41?></td><? } ?>
												<? if($row2->name42){ ?><td class="has"><?=$row2->name42?></td><? } ?>
												<? if($row2->name43){ ?><td class="has"><?=$row2->name43?></td><? } ?>
												<? if($row2->name44){ ?><td class="has"><?=$row2->name44?></td><? } ?>
												<? if($row2->name45){ ?><td class="has"><?=$row2->name45?></td><? } ?>
												<? if($row2->name46){ ?><td class="has"><?=$row2->name46?></td><? } ?>
												<? if($row2->name47){ ?><td class="has"><?=$row2->name47?></td><? } ?>
												<? if($row2->name48){ ?><td class="has"><?=$row2->name48?></td><? } ?>
												<? if($row2->name49){ ?><td class="has"><?=$row2->name49?></td><? } ?>
												<? if($row2->name50){ ?><td class="has"><?=$row2->name50?></td><? } ?>
											</tr>
											<? } ?>
										</tbody>
									</table>
								</div>
							</div>
							<? if($rowt->title){ ?>
							<p class="view-tbl-txt"><?=$rowt->title?></p> 
							<? } ?>
						</div>
						<? } ?>


						<!--
						<div class="prd-cm-table">
							<div class="custom-scrollbar-wrapper">
								<div class="scroll-object-box">
									<table class="equipment-view-tbl scroll-object">
										<tbody>
											<tr>
												<th>Model</th>
												<th>test</th>
												<th>NBT203XXL-2D</th>
												<th>test</th>
											</tr>
											<tr>
												<td class="sub-tit">Chamber Volume</td>
												<td>880 Liter</td>
												<td>880 Liter</td>
												<td></td>
											</tr>
											<tr>
												<td class="sub-tit">Chamber Volume</td>
												<td></td>
												<td>880 Liter</td>
												<td>test</td>
											</tr>
											<tr>
												<td class="sub-tit">Chamber Volume</td>
												<td>880 Liter</td>
												<td>880 Liter</td>
												<td></td>
											</tr>
											<tr>
												<td class="sub-tit">Chamber Volume</td>
												<td>880 Liter</td>
												<td>880 Liter</td>
												<td></td>
											</tr>
											<tr>
												<td class="sub-tit">Chamber Volume</td>
												<td>880 Liter</td>
												<td>880 Liter</td>
												<td></td>
											</tr>
											<tr>
												<td class="sub-tit">Chamber Volume</td>
												<td>880 Liter</td>
												<td>880 Liter</td>
												<td>test</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="prd-cm-table">
							<div class="custom-scrollbar-wrapper">
								<div class="scroll-object-box">
									<table class="equipment-view-tbl scroll-object">
										<tbody>
											<tr>
												<th>Model</th>
												<th>test</th>
												<th>NBT203XXL-2D</th>
											</tr>
											<tr>
												<td class="sub-tit">Chamber Volume</td>
												<td></td>
												<td>880 Liter</td>
											</tr>
											<tr>
												<td class="sub-tit">Chamber Volume</td>
												<td></td>
												<td>880 Liter</td>
											</tr>
											<tr>
												<td class="sub-tit">Chamber Volume</td>
												<td>880 Liter</td>
												<td>880 Liter</td>
											</tr>
											<tr>
												<td class="sub-tit">Chamber Volume</td>
												<td>880 Liter</td>
												<td>880 Liter</td>
											</tr>
											<tr>
												<td class="sub-tit">Chamber Volume</td>
												<td>880 Liter</td>
												<td>880 Liter</td>
											</tr>
											<tr>
												<td class="sub-tit">Chamber Volume</td>
												<td>880 Liter</td>
												<td>880 Liter</td>
											</tr>
										</tbody>
									</table>	
								</div>
							</div>
						</div>
						<div class="prd-cm-table">
							<div class="custom-scrollbar-wrapper long-tbl"> <!-- 하늘색 배경내용 제외하고 4칸이상 내용이 들어가는 표는 long-tbl 클래스를 붙여주세요 ->
								<div class="scroll-object-box">
									<table class="equipment-view-tbl scroll-object">
										<tbody>
											<tr>
												<th>Model</th>
												<th>test</th>
												<th>NBT203XXL-2D</th>
												<th>NBT203XXL-2D</th>
												<th>NBT203XXL-2D</th>
											</tr>
											<tr>
												<td class="sub-tit">Chamber Volume</td>
												<td></td>
												<td>880 Liter</td>
												<td>880 Liter</td>
												<td>880 Liter</td>
											</tr>
											<tr>
												<td class="sub-tit">Chamber Volume</td>
												<td></td>
												<td>880 Liter</td>
												<td>880 Liter</td>
												<td>880 Liter</td>
											</tr>
											<tr>
												<td class="sub-tit">Chamber Volume</td>
												<td>880 Liter</td>
												<td>880 Liter</td>
												<td>880 Liter</td>
												<td>880 Liter</td>
											</tr>
											<tr>
												<td class="sub-tit">Chamber Volume</td>
												<td>880 Liter</td>
												<td>880 Liter</td>
												<td>880 Liter</td>
												<td>880 Liter</td>
											</tr>
										</tbody>
									</table>	
								</div>
							</div>
						</div>
					</div>
					-->
					<div class="sub-tab-con" id="fixedContentM4">
						
						<h4 class="front-cir-title detail-tit big tbl-tit">문서</h4>
						
						<?
						$rsf = $db->select("cs_goods_k_file","where code='$row->code' order by ranking asc, idx desc");
						while($rowf = mysqli_fetch_object($rsf)){
						?>
						<div class="equipment-down-item">
							<a href="product_file_download.php?download=1&idx=<?=$rowf->idx?>" download>
								<div class="align-center"><p><i class="xi-document"></i><?=$rowf->title?></p></div>
								<span class="icon align-center"><em>보기</em><i class="xi-long-arrow-right"></i></span>
							</a>
						</div>
						<? } ?>
						<!-- <div class="equipment-down-item">
							<a href="" download>
								<div class="align-center"><p><i class="xi-document"></i>User Manual_NB206CXL/NB206CXXL_N-BIOTEK</p></div>
								<span class="icon align-center"><em>VIEW</em><i class="xi-long-arrow-right"></i></span>
							</a>
						</div> -->
						<a href="./equipment_list.php?part_idx=<?=$row->part_idx?>" class="equipment-list-btn">목록</a>
					</div>
				</div>
			</div>
		</article>
	</section>

<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
