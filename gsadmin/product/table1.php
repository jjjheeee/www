<?
include("../header2.php");
?>
<link rel="stylesheet" type="text/css" media="screen" href="/css/content_do.css" />
<div class="col-md-12" >

	<h4 class="page-header">Technical Specifications</h4>

	<table class="table table-bordered">
	<colgroup>
	<col width="15%">
	<col width="*">
	</colgroup>
	<tbody>
	<tr>
		<td colspan="2" class="text-center">
			<button type="button" onclick="location.href='table1_write.php?code=<?=$code?>';" class="btn btn-primary btn-sm">등록하기</button>
		</td>
	</tr>
	</tbody>
	</table>


						<?
						$rs = $db->select("cs_goods_tablew","where code='$code' and cate='1' order by ranking asc, idx asc");
						while($row = mysqli_fetch_object($rs)){
						?>
						<div class="prd-cm-table">
							<h4 class="front-cir-title detail-tit big tbl-tit"><?=$row->head_title?></h4>
							<div class="custom-scrollbar-wrapper">
								<div class="scroll-object-box">
									<table class="equipment-view-tbl scroll-object">
										<tbody>
											<tr>
												<? if($row->name1){ ?><th><?=$row->name1?></th><? } ?>
												<? if($row->name2){ ?><th><?=$row->name2?></th><? } ?>
												<? if($row->name3){ ?><th><?=$row->name3?></th><? } ?>
												<? if($row->name4){ ?><th><?=$row->name4?></th><? } ?>
												<? if($row->name5){ ?><th><?=$row->name5?></th><? } ?>
												<? if($row->name6){ ?><th><?=$row->name6?></th><? } ?>
												<? if($row->name7){ ?><th><?=$row->name7?></th><? } ?>
												<? if($row->name8){ ?><th><?=$row->name8?></th><? } ?>
												<? if($row->name9){ ?><th><?=$row->name9?></th><? } ?>
												<? if($row->name10){ ?><th><?=$row->name10?></th><? } ?>
												<? if($row->name11){ ?><th><?=$row->name11?></th><? } ?>
												<? if($row->name12){ ?><th><?=$row->name12?></th><? } ?>
												<? if($row->name13){ ?><th><?=$row->name13?></th><? } ?>
												<? if($row->name14){ ?><th><?=$row->name14?></th><? } ?>
												<? if($row->name15){ ?><th><?=$row->name15?></th><? } ?>
												<? if($row->name16){ ?><th><?=$row->name16?></th><? } ?>
												<? if($row->name17){ ?><th><?=$row->name17?></th><? } ?>
												<? if($row->name18){ ?><th><?=$row->name18?></th><? } ?>
												<? if($row->name19){ ?><th><?=$row->name19?></th><? } ?>
												<? if($row->name20){ ?><th><?=$row->name20?></th><? } ?>
												<? if($row->name21){ ?><th><?=$row->name21?></th><? } ?>
												<? if($row->name22){ ?><th><?=$row->name22?></th><? } ?>
												<? if($row->name23){ ?><th><?=$row->name23?></th><? } ?>
												<? if($row->name24){ ?><th><?=$row->name24?></th><? } ?>
												<? if($row->name25){ ?><th><?=$row->name25?></th><? } ?>
												<? if($row->name26){ ?><th><?=$row->name26?></th><? } ?>
												<? if($row->name27){ ?><th><?=$row->name27?></th><? } ?>
												<? if($row->name28){ ?><th><?=$row->name28?></th><? } ?>
												<? if($row->name29){ ?><th><?=$row->name29?></th><? } ?>
												<? if($row->name30){ ?><th><?=$row->name30?></th><? } ?>
												<? if($row->name31){ ?><th><?=$row->name31?></th><? } ?>
												<? if($row->name32){ ?><th><?=$row->name32?></th><? } ?>
												<? if($row->name33){ ?><th><?=$row->name33?></th><? } ?>
												<? if($row->name34){ ?><th><?=$row->name34?></th><? } ?>
												<? if($row->name35){ ?><th><?=$row->name35?></th><? } ?>
												<? if($row->name36){ ?><th><?=$row->name36?></th><? } ?>
												<? if($row->name37){ ?><th><?=$row->name37?></th><? } ?>
												<? if($row->name38){ ?><th><?=$row->name38?></th><? } ?>
												<? if($row->name39){ ?><th><?=$row->name39?></th><? } ?>
												<? if($row->name40){ ?><th><?=$row->name40?></th><? } ?>
												<? if($row->name41){ ?><th><?=$row->name41?></th><? } ?>
												<? if($row->name42){ ?><th><?=$row->name42?></th><? } ?>
												<? if($row->name43){ ?><th><?=$row->name43?></th><? } ?>
												<? if($row->name44){ ?><th><?=$row->name44?></th><? } ?>
												<? if($row->name45){ ?><th><?=$row->name45?></th><? } ?>
												<? if($row->name46){ ?><th><?=$row->name46?></th><? } ?>
												<? if($row->name47){ ?><th><?=$row->name47?></th><? } ?>
												<? if($row->name48){ ?><th><?=$row->name48?></th><? } ?>
												<? if($row->name49){ ?><th><?=$row->name49?></th><? } ?>
												<? if($row->name50){ ?><th><?=$row->name50?></th><? } ?>
											</tr>
											<?
											$rs2 = $db->select("cs_goods_tableh","where code='$code' and cate='1' and keyidx='$row->idx' order by num asc");
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
							<? if($row->title){ ?>
							<p class="view-tbl-txt"><?=$row->title?></p> 
							<? } ?>
						</div>
						<table class="table">
							<tr>
								<td class="text-center">
									<button type="button" class="btn btn-primary" onClick="location.href='table1_edit.php?idx=<?=$row->idx?>&code=<?=$code?>';">수정</button>
									<button type="button" class="btn btn-danger" onClick="dele('<?=$row->idx?>');">삭제</button>
								</td>
							</tr>
						</table>
						<? } ?>

</div>


<script language="javascript">
<!--
function dele(text){

	ans = confirm("삭제 하시겠습니까?");

	if(ans==true){
		location.href="table1_ok.php?code=<?=$code?>&mode=del&idx="+text;
	}

}
-->
</script>

 <? include('../footer2.php');?>