<?
include ("../header2.php");

$table = "cs_bbs_data";

$optionArr = explode(',',$_POST[optionArr]);
for($i=0;$i<count($optionArr);$i++){
	if($optionArr[$i]) $db->update($table,'ranking='.$i.' where idx='.$optionArr[$i]);
}
if(count($_POST[optionArr])){$tools->openerReload();}

$code = $db->filter($_GET[code]);
$lang = $db->filter($_GET[lang]);
$bbs_row = $db->object("cs_bbs","Where code='$code'");
$cate_row = $db->object("cs_cate","where idx='$cate'");

?>

	<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
	<input type="hidden" name="optionArr" value="">
	<input type="hidden" name="part_idx" value="<?=$part_idx;?>">
	<table class="table table-bordered">
	<tr>
		<td class="glyphicon btn  btn-xs btn-danger btn-block" aria-hidden="true">[ <?=$bbs_row->name?> ] 순위설정</td>
	</tr>
	<tr>
		<td class="text-center">
			<select id="ranking_list" class="form-control" size="20" multiple>
				<?
				$no=0;
				$rs=$db->select($table, "where code='$code' and lang='$lang' order by ranking asc, idx desc","idx,code,subject,ranking,notice");
				while($row=mysqli_fetch_array($rs)) {
				$no++;
				?>
				<option value="<?=$row[idx];?>"><?=$no;?> : <?if($row['notice']>0){?>[공지]<?}?> <?echo $db->stripSlash($row[subject]);?></option>
				<?}?>
			</select>
		</td>
	</tr>
	<tr>
		<td class="text-center">				
			<button type="button" class="btn btn-sm btn-default ranking-up" data-no=""><i class="glyphicon glyphicon-fast-backward"></i><br>(처음)</button>&nbsp;
			<button type="button" class="btn btn-sm btn-default ranking-up" data-no="100"><i class="glyphicon glyphicon-backward"></i><br>&nbsp;(100)&nbsp;</button>&nbsp;
			<button type="button" class="btn btn-sm btn-default ranking-up" data-no="10"><i class="glyphicon glyphicon-backward"></i><br>&nbsp;(10)&nbsp;</button>&nbsp;
			<button type="button" class="btn btn-sm btn-default ranking-up" data-no="1"><i class="glyphicon glyphicon-chevron-left"></i><br>(이전)</button>&nbsp;
			&emsp;
			<button type="submit" class="btn btn-danger" aria-hidden="true"> 저 장 </button>
			&emsp;
			<button type="button" class="btn btn-sm btn-default ranking-down" data-no="1"><i class="glyphicon glyphicon-chevron-right"></i><br>(다음)</button>&nbsp;
			<button type="button" class="btn btn-sm btn-default ranking-down" data-no="10"><i class="glyphicon glyphicon-forward"></i><br>&nbsp;(10)&nbsp;</button>&nbsp;
			<button type="button" class="btn btn-sm btn-default ranking-down" data-no="100"><i class="glyphicon glyphicon-forward"></i><br>&nbsp;(100)&nbsp;</button>&nbsp;
			<button type="button" class="btn btn-sm btn-default ranking-down" data-no=""><i class="glyphicon glyphicon-fast-forward"></i><br>(마지막)</button>&nbsp;
		</td>
	</tr>
	</table>
	</form>

<script language="JavaScript">
<!--
$(function() {
	$("form").submit(function( event ) {
	var optionArr = new Array();
	$("#ranking_list option").each(function(){
		optionArr.push(this.value);
	});
	$("input[name=optionArr]").val(optionArr);
	});
});
//-->
</script>

<?
include ("../footer2.php");
?>