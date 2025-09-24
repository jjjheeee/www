<?
$page_num = "06";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "equipment";
$sub_section = "equipment_list";
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

/* CO₂ Incubator */

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

<?
$part_idx = $db->filter($part_idx);

if($part_idx==""){ $part_idx = 1; }

$row = $db->object("cs_part","where idx='$part_idx'");

$search_item = $db->filter($search_item);
$search_order = $db->filter($search_order);
?>

	<section class="equipment-list-page scroll-object" data-scroll="fade-up" data-scroll-delay="200">
		<div class="equipment-cate-sec">
			<h3 class="list-title"><?=$row->part_name_k?></h3>
			<ul class="equipment-list">
				
				<?
				if($search_order){
					if($search_item){
						$query = "and $search_item like '%$search_order%'";
					} else {
						$query = "and (name like '%$search_order%' or name2 like '%$search_order%')";
					}
				}
				$rs = $db->select("cs_goods_k","where display='1' and part_idx='$part_idx' $query order by ranking asc, idx desc");
				while($row = mysqli_fetch_object($rs)){
				?>
				<li class="equipment-box-stl">
					<a href="./equipment_view.php?idx=<?=$row->idx?>&part_idx=<?=$part_idx?>" class="equipment-inner-stl">
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

				<!-- <li class="equipment-box-stl">
					<a href="" class="equipment-inner-stl">
						<div class="equipment-img-box">
							<span class="img-wrap">
								<img src="<?=$site_host?>/images/test/equipment_prd_img.png" alt="제품이미지">
							</span>
						</div>
						<div class="info-box">
							<strong class="line-clamp2">CO<sub>2</sub> Incubator</strong>
							<em class="text-ellipsis">NB-203/NB-203XL/NB-203XXL</em>
						</div>
					</a>
				</li>
				<li class="equipment-box-stl">
					<a href="" class="equipment-inner-stl">
						<div class="equipment-img-box">
							<span class="img-wrap">
								<img src="<?=$site_host?>/images/test/equipment_prd_img.png" alt="제품이미지">
							</span>
						</div>
						<div class="info-box">
							<strong class="line-clamp2">Mini cell (Portable Mini CO<sub>2</sub><br class="pc-br" />Incubator)</strong>
							<em class="text-ellipsis">NB-203M</em>
						</div>
					</a>
				</li>
				<li class="equipment-box-stl">
					<a href="" class="equipment-inner-stl">
						<div class="equipment-img-box">
							<span class="img-wrap">
								<img src="<?=$site_host?>/images/test/equipment_prd_img.png" alt="제품이미지">
							</span>
						</div>
						<div class="info-box">
							<strong class="line-clamp2">Mini cell (Portable Mini CO<sub>2</sub><br class="pc-br" />Incubator)</strong>
							<em class="text-ellipsis">NB-203M</em>
						</div>
					</a>
				</li>
				<li class="equipment-box-stl">
					<a href="" class="equipment-inner-stl">
						<div class="equipment-img-box">
							<span class="img-wrap">
								<img src="<?=$site_host?>/images/test/equipment_prd_img.png" alt="제품이미지">
							</span>
						</div>
						<div class="info-box">
							<strong class="line-clamp2">CO2 Incubator</strong>
							<em class="text-ellipsis">NB-203M</em>
						</div>
					</a>
				</li>
				<li class="equipment-box-stl">
					<a href="" class="equipment-inner-stl">
						<div class="equipment-img-box">
							<span class="img-wrap">
								<img src="<?=$site_host?>/images/test/equipment_prd_img.png" alt="제품이미지">
							</span>
						</div>
						<div class="info-box">
							<strong class="line-clamp2">Mini cell (Portable Mini CO<sub>2</sub><br class="pc-br" />Incubator)</strong>
							<em class="text-ellipsis">NB-203M</em>
						</div>
					</a>
				</li> -->
			</ul>
		</div>
	</section>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
