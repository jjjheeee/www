<?
include("../header2.php");
?>
<link rel="stylesheet" type="text/css" media="screen" href="/css/content_do.css" />
<div class="col-md-12" >

	<h4 class="page-header">Accessories / Option (국문)</h4>

	<form method="post" action="table_k2_ok.php" name="form">
	<input type="hidden" name="idx" value="<?=$idx?>">
	<input type="hidden" name="code" value="<?=$code?>">
	<input type="hidden" name="mode" value="edit">

						<?
						$row = $db->object("cs_goods_k_tablew","where idx='$idx'");
						?>
						<div class="prd-cm-table">
							<p class="view-tbl-txt">순서 : <input type="text" name="ranking" class="form-control2" value="<?=$row->ranking?>"></p> 
							<h4 class="front-cir-title detail-tit big tbl-tit"><input type="text" name="head_title" class="form-control" value="<?=$row->head_title?>"></h4>
							<div class="custom-scrollbar-wrapper">
								<div class="scroll-object-box">
									<table class="equipment-view-tbl scroll-object">
										<tbody>
											<tr>
												<? if($row->name1){ ?><th><input type="text" name="w_name1" class="form-control" value="<?=$row->name1?>"></th><? } ?>
												<? if($row->name2){ ?><th><input type="text" name="w_name2" class="form-control" value="<?=$row->name2?>"></th><? } ?>
												<? if($row->name3){ ?><th><input type="text" name="w_name3" class="form-control" value="<?=$row->name3?>"></th><? } ?>
												<? if($row->name4){ ?><th><input type="text" name="w_name4" class="form-control" value="<?=$row->name4?>"></th><? } ?>
												<? if($row->name5){ ?><th><input type="text" name="w_name5" class="form-control" value="<?=$row->name5?>"></th><? } ?>
												<? if($row->name6){ ?><th><input type="text" name="w_name6" class="form-control" value="<?=$row->name6?>"></th><? } ?>
												<? if($row->name7){ ?><th><input type="text" name="w_name7" class="form-control" value="<?=$row->name7?>"></th><? } ?>
												<? if($row->name8){ ?><th><input type="text" name="w_name8" class="form-control" value="<?=$row->name8?>"></th><? } ?>
												<? if($row->name9){ ?><th><input type="text" name="w_name9" class="form-control" value="<?=$row->name9?>"></th><? } ?>
												<? if($row->name10){ ?><th><input type="text" name="w_name10" class="form-control" value="<?=$row->name10?>"></th><? } ?>
												<? if($row->name11){ ?><th><input type="text" name="w_name11" class="form-control" value="<?=$row->name11?>"></th><? } ?>
												<? if($row->name12){ ?><th><input type="text" name="w_name12" class="form-control" value="<?=$row->name12?>"></th><? } ?>
												<? if($row->name13){ ?><th><input type="text" name="w_name13" class="form-control" value="<?=$row->name13?>"></th><? } ?>
												<? if($row->name14){ ?><th><input type="text" name="w_name14" class="form-control" value="<?=$row->name14?>"></th><? } ?>
												<? if($row->name15){ ?><th><input type="text" name="w_name15" class="form-control" value="<?=$row->name15?>"></th><? } ?>
												<? if($row->name16){ ?><th><input type="text" name="w_name16" class="form-control" value="<?=$row->name16?>"></th><? } ?>
												<? if($row->name17){ ?><th><input type="text" name="w_name17" class="form-control" value="<?=$row->name17?>"></th><? } ?>
												<? if($row->name18){ ?><th><input type="text" name="w_name18" class="form-control" value="<?=$row->name18?>"></th><? } ?>
												<? if($row->name19){ ?><th><input type="text" name="w_name19" class="form-control" value="<?=$row->name19?>"></th><? } ?>
												<? if($row->name20){ ?><th><input type="text" name="w_name20" class="form-control" value="<?=$row->name20?>"></th><? } ?>
												<? if($row->name21){ ?><th><input type="text" name="w_name21" class="form-control" value="<?=$row->name21?>"></th><? } ?>
												<? if($row->name22){ ?><th><input type="text" name="w_name22" class="form-control" value="<?=$row->name22?>"></th><? } ?>
												<? if($row->name23){ ?><th><input type="text" name="w_name23" class="form-control" value="<?=$row->name23?>"></th><? } ?>
												<? if($row->name24){ ?><th><input type="text" name="w_name24" class="form-control" value="<?=$row->name24?>"></th><? } ?>
												<? if($row->name25){ ?><th><input type="text" name="w_name25" class="form-control" value="<?=$row->name25?>"></th><? } ?>
												<? if($row->name26){ ?><th><input type="text" name="w_name26" class="form-control" value="<?=$row->name26?>"></th><? } ?>
												<? if($row->name27){ ?><th><input type="text" name="w_name27" class="form-control" value="<?=$row->name27?>"></th><? } ?>
												<? if($row->name28){ ?><th><input type="text" name="w_name28" class="form-control" value="<?=$row->name28?>"></th><? } ?>
												<? if($row->name29){ ?><th><input type="text" name="w_name29" class="form-control" value="<?=$row->name29?>"></th><? } ?>
												<? if($row->name30){ ?><th><input type="text" name="w_name30" class="form-control" value="<?=$row->name30?>"></th><? } ?>
												<? if($row->name31){ ?><th><input type="text" name="w_name31" class="form-control" value="<?=$row->name31?>"></th><? } ?>
												<? if($row->name32){ ?><th><input type="text" name="w_name32" class="form-control" value="<?=$row->name32?>"></th><? } ?>
												<? if($row->name33){ ?><th><input type="text" name="w_name33" class="form-control" value="<?=$row->name33?>"></th><? } ?>
												<? if($row->name34){ ?><th><input type="text" name="w_name34" class="form-control" value="<?=$row->name34?>"></th><? } ?>
												<? if($row->name35){ ?><th><input type="text" name="w_name35" class="form-control" value="<?=$row->name35?>"></th><? } ?>
												<? if($row->name36){ ?><th><input type="text" name="w_name36" class="form-control" value="<?=$row->name36?>"></th><? } ?>
												<? if($row->name37){ ?><th><input type="text" name="w_name37" class="form-control" value="<?=$row->name37?>"></th><? } ?>
												<? if($row->name38){ ?><th><input type="text" name="w_name38" class="form-control" value="<?=$row->name38?>"></th><? } ?>
												<? if($row->name39){ ?><th><input type="text" name="w_name39" class="form-control" value="<?=$row->name39?>"></th><? } ?>
												<? if($row->name40){ ?><th><input type="text" name="w_name40" class="form-control" value="<?=$row->name40?>"></th><? } ?>
												<? if($row->name41){ ?><th><input type="text" name="w_name41" class="form-control" value="<?=$row->name41?>"></th><? } ?>
												<? if($row->name42){ ?><th><input type="text" name="w_name42" class="form-control" value="<?=$row->name42?>"></th><? } ?>
												<? if($row->name43){ ?><th><input type="text" name="w_name43" class="form-control" value="<?=$row->name43?>"></th><? } ?>
												<? if($row->name44){ ?><th><input type="text" name="w_name44" class="form-control" value="<?=$row->name44?>"></th><? } ?>
												<? if($row->name45){ ?><th><input type="text" name="w_name45" class="form-control" value="<?=$row->name45?>"></th><? } ?>
												<? if($row->name46){ ?><th><input type="text" name="w_name46" class="form-control" value="<?=$row->name46?>"></th><? } ?>
												<? if($row->name47){ ?><th><input type="text" name="w_name47" class="form-control" value="<?=$row->name47?>"></th><? } ?>
												<? if($row->name48){ ?><th><input type="text" name="w_name48" class="form-control" value="<?=$row->name48?>"></th><? } ?>
												<? if($row->name49){ ?><th><input type="text" name="w_name49" class="form-control" value="<?=$row->name49?>"></th><? } ?>
												<? if($row->name50){ ?><th><input type="text" name="w_name50" class="form-control" value="<?=$row->name50?>"></th><? } ?>
											</tr>
											<?
											$i=1;
											$rs2 = $db->select("cs_goods_k_tableh","where code='$code' and cate='2' and keyidx='$row->idx' order by num asc");
											while($row2 = mysqli_fetch_object($rs2)){
											?>
											<tr>
												<? if($row2->name1){ ?><td class="sub-tit"><input type="text" name="h_name<?=$i?>_1" class="form-control" value="<?=$row2->name1?>"></td><? } ?>
												<? if($row2->name2){ ?><td class="has"><input type="text" name="h_name<?=$i?>_2" class="form-control" value="<?=$row2->name2?>"></td><? } ?>
												<? if($row2->name3){ ?><td class="has"><input type="text" name="h_name<?=$i?>_3" class="form-control" value="<?=$row2->name3?>"></td><? } ?>
												<? if($row2->name4){ ?><td class="has"><input type="text" name="h_name<?=$i?>_4" class="form-control" value="<?=$row2->name4?>"></td><? } ?>
												<? if($row2->name5){ ?><td class="has"><input type="text" name="h_name<?=$i?>_5" class="form-control" value="<?=$row2->name5?>"></td><? } ?>
												<? if($row2->name6){ ?><td class="has"><input type="text" name="h_name<?=$i?>_6" class="form-control" value="<?=$row2->name6?>"></td><? } ?>
												<? if($row2->name7){ ?><td class="has"><input type="text" name="h_name<?=$i?>_7" class="form-control" value="<?=$row2->name7?>"></td><? } ?>
												<? if($row2->name8){ ?><td class="has"><input type="text" name="h_name<?=$i?>_8" class="form-control" value="<?=$row2->name8?>"></td><? } ?>
												<? if($row2->name9){ ?><td class="has"><input type="text" name="h_name<?=$i?>_9" class="form-control" value="<?=$row2->name9?>"></td><? } ?>
												<? if($row2->name10){ ?><td class="has"><input type="text" name="h_name<?=$i?>_10" class="form-control" value="<?=$row2->name10?>"></td><? } ?>
												<? if($row2->name11){ ?><td class="has"><input type="text" name="h_name<?=$i?>_11" class="form-control" value="<?=$row2->name11?>"></td><? } ?>
												<? if($row2->name12){ ?><td class="has"><input type="text" name="h_name<?=$i?>_12" class="form-control" value="<?=$row2->name12?>"></td><? } ?>
												<? if($row2->name13){ ?><td class="has"><input type="text" name="h_name<?=$i?>_13" class="form-control" value="<?=$row2->name13?>"></td><? } ?>
												<? if($row2->name14){ ?><td class="has"><input type="text" name="h_name<?=$i?>_14" class="form-control" value="<?=$row2->name14?>"></td><? } ?>
												<? if($row2->name15){ ?><td class="has"><input type="text" name="h_name<?=$i?>_15" class="form-control" value="<?=$row2->name15?>"></td><? } ?>
												<? if($row2->name16){ ?><td class="has"><input type="text" name="h_name<?=$i?>_16" class="form-control" value="<?=$row2->name16?>"></td><? } ?>
												<? if($row2->name17){ ?><td class="has"><input type="text" name="h_name<?=$i?>_17" class="form-control" value="<?=$row2->name17?>"></td><? } ?>
												<? if($row2->name18){ ?><td class="has"><input type="text" name="h_name<?=$i?>_18" class="form-control" value="<?=$row2->name18?>"></td><? } ?>
												<? if($row2->name19){ ?><td class="has"><input type="text" name="h_name<?=$i?>_19" class="form-control" value="<?=$row2->name19?>"></td><? } ?>
												<? if($row2->name20){ ?><td class="has"><input type="text" name="h_name<?=$i?>_20" class="form-control" value="<?=$row2->name20?>"></td><? } ?>
												<? if($row2->name21){ ?><td class="has"><input type="text" name="h_name<?=$i?>_21" class="form-control" value="<?=$row2->name21?>"></td><? } ?>
												<? if($row2->name22){ ?><td class="has"><input type="text" name="h_name<?=$i?>_22" class="form-control" value="<?=$row2->name22?>"></td><? } ?>
												<? if($row2->name23){ ?><td class="has"><input type="text" name="h_name<?=$i?>_23" class="form-control" value="<?=$row2->name23?>"></td><? } ?>
												<? if($row2->name24){ ?><td class="has"><input type="text" name="h_name<?=$i?>_24" class="form-control" value="<?=$row2->name24?>"></td><? } ?>
												<? if($row2->name25){ ?><td class="has"><input type="text" name="h_name<?=$i?>_25" class="form-control" value="<?=$row2->name25?>"></td><? } ?>
												<? if($row2->name26){ ?><td class="has"><input type="text" name="h_name<?=$i?>_26" class="form-control" value="<?=$row2->name26?>"></td><? } ?>
												<? if($row2->name27){ ?><td class="has"><input type="text" name="h_name<?=$i?>_27" class="form-control" value="<?=$row2->name27?>"></td><? } ?>
												<? if($row2->name28){ ?><td class="has"><input type="text" name="h_name<?=$i?>_28" class="form-control" value="<?=$row2->name28?>"></td><? } ?>
												<? if($row2->name29){ ?><td class="has"><input type="text" name="h_name<?=$i?>_29" class="form-control" value="<?=$row2->name29?>"></td><? } ?>
												<? if($row2->name30){ ?><td class="has"><input type="text" name="h_name<?=$i?>_30" class="form-control" value="<?=$row2->name30?>"></td><? } ?>

												
												<? if($row2->name31){ ?><td class="has"><input type="text" name="h_name<?=$i?>_31" class="form-control" value="<?=$row2->name31?>"></td><? } ?>
												<? if($row2->name32){ ?><td class="has"><input type="text" name="h_name<?=$i?>_32" class="form-control" value="<?=$row2->name32?>"></td><? } ?>
												<? if($row2->name33){ ?><td class="has"><input type="text" name="h_name<?=$i?>_33" class="form-control" value="<?=$row2->name33?>"></td><? } ?>
												<? if($row2->name34){ ?><td class="has"><input type="text" name="h_name<?=$i?>_34" class="form-control" value="<?=$row2->name34?>"></td><? } ?>
												<? if($row2->name35){ ?><td class="has"><input type="text" name="h_name<?=$i?>_35" class="form-control" value="<?=$row2->name35?>"></td><? } ?>
												<? if($row2->name36){ ?><td class="has"><input type="text" name="h_name<?=$i?>_36" class="form-control" value="<?=$row2->name36?>"></td><? } ?>
												<? if($row2->name37){ ?><td class="has"><input type="text" name="h_name<?=$i?>_37" class="form-control" value="<?=$row2->name37?>"></td><? } ?>
												<? if($row2->name38){ ?><td class="has"><input type="text" name="h_name<?=$i?>_38" class="form-control" value="<?=$row2->name38?>"></td><? } ?>
												<? if($row2->name39){ ?><td class="has"><input type="text" name="h_name<?=$i?>_39" class="form-control" value="<?=$row2->name39?>"></td><? } ?>
												<? if($row2->name40){ ?><td class="has"><input type="text" name="h_name<?=$i?>_40" class="form-control" value="<?=$row2->name40?>"></td><? } ?>

												<? if($row2->name41){ ?><td class="has"><input type="text" name="h_name<?=$i?>_41" class="form-control" value="<?=$row2->name41?>"></td><? } ?>
												<? if($row2->name42){ ?><td class="has"><input type="text" name="h_name<?=$i?>_42" class="form-control" value="<?=$row2->name42?>"></td><? } ?>
												<? if($row2->name43){ ?><td class="has"><input type="text" name="h_name<?=$i?>_43" class="form-control" value="<?=$row2->name43?>"></td><? } ?>
												<? if($row2->name44){ ?><td class="has"><input type="text" name="h_name<?=$i?>_44" class="form-control" value="<?=$row2->name44?>"></td><? } ?>
												<? if($row2->name45){ ?><td class="has"><input type="text" name="h_name<?=$i?>_45" class="form-control" value="<?=$row2->name45?>"></td><? } ?>
												<? if($row2->name46){ ?><td class="has"><input type="text" name="h_name<?=$i?>_46" class="form-control" value="<?=$row2->name46?>"></td><? } ?>
												<? if($row2->name47){ ?><td class="has"><input type="text" name="h_name<?=$i?>_47" class="form-control" value="<?=$row2->name47?>"></td><? } ?>
												<? if($row2->name48){ ?><td class="has"><input type="text" name="h_name<?=$i?>_48" class="form-control" value="<?=$row2->name48?>"></td><? } ?>
												<? if($row2->name49){ ?><td class="has"><input type="text" name="h_name<?=$i?>_49" class="form-control" value="<?=$row2->name49?>"></td><? } ?>
												<? if($row2->name50){ ?><td class="has"><input type="text" name="h_name<?=$i?>_40" class="form-control" value="<?=$row2->name50?>"></td><? } ?>
											</tr>
											<? $i++; } ?>
										</tbody>
									</table>
								</div>
							</div>
							
							<br>
							<p class="view-tbl-txt">
							<input type="text" name="title" class="form-control" value="<?=$row->title?>">
							</p> 
							
						</div>

						<table class="table">
							<tr>
								<td class="text-center">
									<button type="submit" class="btn btn-primary">등록</button>
									<a href="table_k2.php?code=<?=$code?>" class="btn btn-default">목록</a>
								</td>
							</tr>
						</table>
	</form>

</div>

 <? include('../footer2.php');?>