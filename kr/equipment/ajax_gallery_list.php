<?
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
?>

<?
$rs = $db->select("cs_bbs_data","where code='v_gallery' order by idx desc limit $listgu,3");
while($row = mysqli_fetch_object($rs)){
?>
<li class="grid-item"><span class="img"><img src="/data/bbsData/<?=$row->sum_file?>" alt=""></span></li>
<? } ?>