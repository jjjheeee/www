<?
$page_num = "06";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "equipment";
$sub_section = "equipment_search";
$page_info = "실험 장비";
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
	#content:not(.wide){padding: 150px 15px;}
}
</style>

<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>

<?
$part_idx = $db->filter($part_idx);

if($part_idx==""){ $part_idx = 1; }

$row = $db->object("cs_part","where idx='$part_idx'");

$search_item = $db->filter($search_item);
$search_order = $db->filter($search_order);
?>

<?
				if($search_order){
					if($search_item){
						$query = "and $search_item like '%$search_order%'";
					} else {
						$query = "and (name like '%$search_order%' or name2 like '%$search_order%' or keywords like '%$search_order%')";
					}
				}
?>

	<section class="equipment-list-page scroll-object" data-scroll="fade-up" data-scroll-delay="200">
		
		
		<? 
		$kk=0;
		$rsp = $db->select("cs_part","where part_display_check='1' and part_index='1' order by part_ranking asc, idx asc");
		while($rowp = mysqli_fetch_object($rsp)){

		$rscnt = $db->cnt("cs_goods_k","where display='1' and part_idx='$rowp->idx' $query");
		if($rscnt>0){
		?>

		<div class="equipment-cate-sec">
			<h3 class="list-title"><?=$rowp->part_name_k?></h3>
			<ul class="equipment-list">
				
				<?
				$rs = $db->select("cs_goods_k","where display='1' and part_idx='$rowp->idx' $query order by ranking asc, idx desc");
				while($row = mysqli_fetch_object($rs)){
				?>
				<li class="equipment-box-stl">
					<a href="./equipment_view.php?idx=<?=$row->idx?>&part_idx=<?=$rowp->idx?>" class="equipment-inner-stl">
						<div class="equipment-img-box">
							<span class="img-wrap">
								<img src="/data/goodsImages/<?=$row->images1?>" alt="제품이미지">
							</span>
						</div>
						<div class="info-box">
							<strong class="line-clamp2"><?=$row->name?></strong>
							<em class="text-ellipsis"><?=$row->name2?></em>
						</div>
						<? if($row->images2){ ?>
						<span class="equipment-logo">
							<span class="logo"><img src="/data/goodsImages/<?=$row->images2?>" alt="로고이미지" class="img-center"></span>
						</span>
						<? } ?>
					</a>
				</li>
				<? } ?>
			</ul>
		</div>

		<? $kk++; } } ?>


		<? if($kk==0){ ?>
							

						<article class="search-result-top-container">
							<aside class="search-result-top-con">
								<div class="no-result-txt"><br>
									<p>검색 결과 없음</p>
								</div>
							</aside>
						</article>

		<? } ?>

	</section>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
