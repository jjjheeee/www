<?
include("../header2.php");
?>
<link rel="stylesheet" type="text/css" media="screen" href="/css/content_do.css" />
<div class="col-md-12" >

	<h4 class="page-header">Accessories / Option (국문)</h4>

	<form method="post" name="form" action="table_k2_ok.php">
	<input type="hidden" name="cate" value="2">
	<input type="hidden" name="code" value="<?=$code?>">
	<input type="hidden" name="mode" value="write">

	<table class="table table-bordered">
	<colgroup>
	<col width="15%">
	<col width="*">
	</colgroup>
	<tbody>
	<tr>
		<th>순서</th>
		<td>
		<input type="text" name="ranking" class="form-control2">
		</td>
	</tr>
	<tr>
		<th>표 상단 제목</th>
		<td>
		<input type="text" name="head_title" class="form-control">
		</td>
	</tr>
	<tr>
		<th>테이블 생성</th>
		<td>
		열 
		<select name="tablew" class="form-control2" onchange="table_res();">
		<option value="">선택</option>
		<? for($i=1;$i<51;$i++){ ?>
		<option value="<?=$i?>"><?=$i?></option>
		<? } ?>
		</select>

		행 
		<select name="tableh" class="form-control2" onchange="table_res();">
		<option value="">선택</option>
		<? for($i=1;$i<51;$i++){ ?>
		<option value="<?=$i?>"><?=$i?></option>
		<? } ?>
		</select>
		</td>
	</tr>
	<tr>
		<td colspan=2>

		<table class="table table-bordered">
		<tr>
			<td id="w1" style="display:none;"><input type="text" name="w_name1" class="form-control"></td>
			<td id="w2" style="display:none;"><input type="text" name="w_name2" class="form-control"></td>
			<td id="w3" style="display:none;"><input type="text" name="w_name3" class="form-control"></td>
			<td id="w4" style="display:none;"><input type="text" name="w_name4" class="form-control"></td>
			<td id="w5" style="display:none;"><input type="text" name="w_name5" class="form-control"></td>
			<td id="w6" style="display:none;"><input type="text" name="w_name6" class="form-control"></td>
			<td id="w7" style="display:none;"><input type="text" name="w_name7" class="form-control"></td>
			<td id="w8" style="display:none;"><input type="text" name="w_name8" class="form-control"></td>
			<td id="w9" style="display:none;"><input type="text" name="w_name9" class="form-control"></td>
			<td id="w10" style="display:none;"><input type="text" name="w_name10" class="form-control"></td>
			<td id="w11" style="display:none;"><input type="text" name="w_name11" class="form-control"></td>
			<td id="w12" style="display:none;"><input type="text" name="w_name12" class="form-control"></td>
			<td id="w13" style="display:none;"><input type="text" name="w_name13" class="form-control"></td>
			<td id="w14" style="display:none;"><input type="text" name="w_name14" class="form-control"></td>
			<td id="w15" style="display:none;"><input type="text" name="w_name15" class="form-control"></td>
			<td id="w16" style="display:none;"><input type="text" name="w_name16" class="form-control"></td>
			<td id="w17" style="display:none;"><input type="text" name="w_name17" class="form-control"></td>
			<td id="w18" style="display:none;"><input type="text" name="w_name18" class="form-control"></td>
			<td id="w19" style="display:none;"><input type="text" name="w_name19" class="form-control"></td>
			<td id="w20" style="display:none;"><input type="text" name="w_name20" class="form-control"></td>
			<td id="w21" style="display:none;"><input type="text" name="w_name21" class="form-control"></td>
			<td id="w22" style="display:none;"><input type="text" name="w_name22" class="form-control"></td>
			<td id="w23" style="display:none;"><input type="text" name="w_name23" class="form-control"></td>
			<td id="w24" style="display:none;"><input type="text" name="w_name24" class="form-control"></td>
			<td id="w25" style="display:none;"><input type="text" name="w_name25" class="form-control"></td>
			<td id="w26" style="display:none;"><input type="text" name="w_name26" class="form-control"></td>
			<td id="w27" style="display:none;"><input type="text" name="w_name27" class="form-control"></td>
			<td id="w28" style="display:none;"><input type="text" name="w_name28" class="form-control"></td>
			<td id="w29" style="display:none;"><input type="text" name="w_name29" class="form-control"></td>
			<td id="w30" style="display:none;"><input type="text" name="w_name30" class="form-control"></td>
			<td id="w31" style="display:none;"><input type="text" name="w_name31" class="form-control"></td>
			<td id="w32" style="display:none;"><input type="text" name="w_name32" class="form-control"></td>
			<td id="w33" style="display:none;"><input type="text" name="w_name33" class="form-control"></td>
			<td id="w34" style="display:none;"><input type="text" name="w_name34" class="form-control"></td>
			<td id="w35" style="display:none;"><input type="text" name="w_name35" class="form-control"></td>
			<td id="w36" style="display:none;"><input type="text" name="w_name36" class="form-control"></td>
			<td id="w37" style="display:none;"><input type="text" name="w_name37" class="form-control"></td>
			<td id="w38" style="display:none;"><input type="text" name="w_name38" class="form-control"></td>
			<td id="w39" style="display:none;"><input type="text" name="w_name39" class="form-control"></td>
			<td id="w40" style="display:none;"><input type="text" name="w_name40" class="form-control"></td>
			<td id="w41" style="display:none;"><input type="text" name="w_name41" class="form-control"></td>
			<td id="w42" style="display:none;"><input type="text" name="w_name42" class="form-control"></td>
			<td id="w43" style="display:none;"><input type="text" name="w_name43" class="form-control"></td>
			<td id="w44" style="display:none;"><input type="text" name="w_name44" class="form-control"></td>
			<td id="w45" style="display:none;"><input type="text" name="w_name45" class="form-control"></td>
			<td id="w46" style="display:none;"><input type="text" name="w_name46" class="form-control"></td>
			<td id="w47" style="display:none;"><input type="text" name="w_name47" class="form-control"></td>
			<td id="w48" style="display:none;"><input type="text" name="w_name48" class="form-control"></td>
			<td id="w49" style="display:none;"><input type="text" name="w_name49" class="form-control"></td>
			<td id="w50" style="display:none;"><input type="text" name="w_name50" class="form-control"></td>
		</tr>
		</table>

		<table class="table table-bordered">
		<? for($i=1;$i<51;$i++){ ?>
		<tr>
			<td id="h_<?=$i?>_1" style="display:none;"><input type="text" name="h_name<?=$i?>_1" class="form-control"></td>
			<td id="h_<?=$i?>_2" style="display:none;"><input type="text" name="h_name<?=$i?>_2" class="form-control"></td>
			<td id="h_<?=$i?>_3" style="display:none;"><input type="text" name="h_name<?=$i?>_3" class="form-control"></td>
			<td id="h_<?=$i?>_4" style="display:none;"><input type="text" name="h_name<?=$i?>_4" class="form-control"></td>
			<td id="h_<?=$i?>_5" style="display:none;"><input type="text" name="h_name<?=$i?>_5" class="form-control"></td>
			<td id="h_<?=$i?>_6" style="display:none;"><input type="text" name="h_name<?=$i?>_6" class="form-control"></td>
			<td id="h_<?=$i?>_7" style="display:none;"><input type="text" name="h_name<?=$i?>_7" class="form-control"></td>
			<td id="h_<?=$i?>_8" style="display:none;"><input type="text" name="h_name<?=$i?>_8" class="form-control"></td>
			<td id="h_<?=$i?>_9" style="display:none;"><input type="text" name="h_name<?=$i?>_9" class="form-control"></td>
			<td id="h_<?=$i?>_10" style="display:none;"><input type="text" name="h_name<?=$i?>_10" class="form-control"></td>
			<td id="h_<?=$i?>_11" style="display:none;"><input type="text" name="h_name<?=$i?>_11" class="form-control"></td>
			<td id="h_<?=$i?>_12" style="display:none;"><input type="text" name="h_name<?=$i?>_12" class="form-control"></td>
			<td id="h_<?=$i?>_13" style="display:none;"><input type="text" name="h_name<?=$i?>_13" class="form-control"></td>
			<td id="h_<?=$i?>_14" style="display:none;"><input type="text" name="h_name<?=$i?>_14" class="form-control"></td>
			<td id="h_<?=$i?>_15" style="display:none;"><input type="text" name="h_name<?=$i?>_15" class="form-control"></td>
			<td id="h_<?=$i?>_16" style="display:none;"><input type="text" name="h_name<?=$i?>_16" class="form-control"></td>
			<td id="h_<?=$i?>_17" style="display:none;"><input type="text" name="h_name<?=$i?>_17" class="form-control"></td>
			<td id="h_<?=$i?>_18" style="display:none;"><input type="text" name="h_name<?=$i?>_18" class="form-control"></td>
			<td id="h_<?=$i?>_19" style="display:none;"><input type="text" name="h_name<?=$i?>_19" class="form-control"></td>
			<td id="h_<?=$i?>_20" style="display:none;"><input type="text" name="h_name<?=$i?>_20" class="form-control"></td>
			<td id="h_<?=$i?>_21" style="display:none;"><input type="text" name="h_name<?=$i?>_21" class="form-control"></td>
			<td id="h_<?=$i?>_22" style="display:none;"><input type="text" name="h_name<?=$i?>_22" class="form-control"></td>
			<td id="h_<?=$i?>_23" style="display:none;"><input type="text" name="h_name<?=$i?>_23" class="form-control"></td>
			<td id="h_<?=$i?>_24" style="display:none;"><input type="text" name="h_name<?=$i?>_24" class="form-control"></td>
			<td id="h_<?=$i?>_25" style="display:none;"><input type="text" name="h_name<?=$i?>_25" class="form-control"></td>
			<td id="h_<?=$i?>_26" style="display:none;"><input type="text" name="h_name<?=$i?>_26" class="form-control"></td>
			<td id="h_<?=$i?>_27" style="display:none;"><input type="text" name="h_name<?=$i?>_27" class="form-control"></td>
			<td id="h_<?=$i?>_28" style="display:none;"><input type="text" name="h_name<?=$i?>_28" class="form-control"></td>
			<td id="h_<?=$i?>_29" style="display:none;"><input type="text" name="h_name<?=$i?>_29" class="form-control"></td>
			<td id="h_<?=$i?>_30" style="display:none;"><input type="text" name="h_name<?=$i?>_30" class="form-control"></td>
			<td id="h_<?=$i?>_31" style="display:none;"><input type="text" name="h_name<?=$i?>_31" class="form-control"></td>
			<td id="h_<?=$i?>_32" style="display:none;"><input type="text" name="h_name<?=$i?>_32" class="form-control"></td>
			<td id="h_<?=$i?>_33" style="display:none;"><input type="text" name="h_name<?=$i?>_33" class="form-control"></td>
			<td id="h_<?=$i?>_34" style="display:none;"><input type="text" name="h_name<?=$i?>_34" class="form-control"></td>
			<td id="h_<?=$i?>_35" style="display:none;"><input type="text" name="h_name<?=$i?>_35" class="form-control"></td>
			<td id="h_<?=$i?>_36" style="display:none;"><input type="text" name="h_name<?=$i?>_36" class="form-control"></td>
			<td id="h_<?=$i?>_37" style="display:none;"><input type="text" name="h_name<?=$i?>_37" class="form-control"></td>
			<td id="h_<?=$i?>_38" style="display:none;"><input type="text" name="h_name<?=$i?>_38" class="form-control"></td>
			<td id="h_<?=$i?>_39" style="display:none;"><input type="text" name="h_name<?=$i?>_39" class="form-control"></td>
			<td id="h_<?=$i?>_40" style="display:none;"><input type="text" name="h_name<?=$i?>_40" class="form-control"></td>
			<td id="h_<?=$i?>_41" style="display:none;"><input type="text" name="h_name<?=$i?>_41" class="form-control"></td>
			<td id="h_<?=$i?>_42" style="display:none;"><input type="text" name="h_name<?=$i?>_42" class="form-control"></td>
			<td id="h_<?=$i?>_43" style="display:none;"><input type="text" name="h_name<?=$i?>_43" class="form-control"></td>
			<td id="h_<?=$i?>_44" style="display:none;"><input type="text" name="h_name<?=$i?>_44" class="form-control"></td>
			<td id="h_<?=$i?>_45" style="display:none;"><input type="text" name="h_name<?=$i?>_45" class="form-control"></td>
			<td id="h_<?=$i?>_46" style="display:none;"><input type="text" name="h_name<?=$i?>_46" class="form-control"></td>
			<td id="h_<?=$i?>_47" style="display:none;"><input type="text" name="h_name<?=$i?>_47" class="form-control"></td>
			<td id="h_<?=$i?>_48" style="display:none;"><input type="text" name="h_name<?=$i?>_48" class="form-control"></td>
			<td id="h_<?=$i?>_49" style="display:none;"><input type="text" name="h_name<?=$i?>_49" class="form-control"></td>
			<td id="h_<?=$i?>_50" style="display:none;"><input type="text" name="h_name<?=$i?>_50" class="form-control"></td>
		</tr>
		<? } ?>
		</table>
		</td>
	</tr>
	<tr>
		<th>표 하단 문구</th>
		<td>
		<input type="text" name="title" class="form-control" >
		</td>
	</tr>
	</table>

		</form>

	<table class="table">
		<tr>
			<td class="text-center">
				<button type="button" class="btn btn-primary" onClick="sendit();">등록</button>
				<a href="table_k2.php?code=<?=$code?>" class="btn btn-default">목록</a>
			</td>
		</tr>
	</table>



<script language="javascript">
<!--
function table_res(){

	var wa = form.tablew.value;
	var ha = form.tableh.value;

			for(i=1;i<=50;i++){
				kk = eval("w"+i);
				kk.style.display = "none";
			}

			for(i=1;i<=50;i++){
				for(j=1;j<=50;j++){
					kk2 = eval("h_"+j+"_"+i);
					kk2.style.display = "none";
				}
			}

	if(wa==""){
		alert("열 부터 선택해 주세요.");
	} else {

		if(wa){
			for(i=1;i<=wa;i++){
				kk = eval("w"+i);
				kk.style.display = "";
			}
		}

		if(wa && ha){

			for(i=1;i<=wa;i++){
				for(j=1;j<=ha;j++){
					kk2 = eval("h_"+j+"_"+i);
					kk2.style.display = "";
				}
			}

		}

	}

}

function sendit(){

	if(form.tablew.value==""){
		alert("열 을 선택해 주세요.");
		form.tablew.focus();
	} else if(form.tableh.value==""){
		alert("행 을 선택해 주세요.");
		form.tableh.focus();
	} else {
		form.submit();
	}

}
-->
</script>

</div>


 <? include('../footer2.php');?>