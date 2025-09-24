<?
$mod	= "basic";	
$menu	= "shop";
include('../header.php'); 

include($ROOT_DIR.'/lib/style_class.php');
?>

<script type="text/javascript">
<!--
// 계좌번호 관련 자바스크립트 함수 
// 디비에서 등록된 계좌번호 불러오는 쿼리
<?
	$bank_cnt = 0;
	for( $i=0; $i<10; $i++ ) {
		$bank_str =  "bank_".$i."_1";
		if(  $admin_stat->$bank_str ) { $bank_cnt++; }
	}
?>

var bank_cnt=<? if($bank_cnt) { echo($bank_cnt); } else { echo(1); }?>;
function addBank() {
	if( bank_cnt < 10 ) { 
		document.all.bank_view[bank_cnt].style.display=""; 
		bank_cnt++;
	} else { 
		alert('계좌번호는 10개까지 입력 할수 있습니다'); 
	}
}
function delBank(num) {
	if(( bank_cnt-1 ) == num) {
		document.all.bank_view[num].style.display="none";
		bank_cnt--;
	} else {
		alert('하단 삭제버턴 클릭 해주세요');
	}
}


// 배송 관련 자바스크립트
function expressShow() {
	var form=document.admin_form;
	if( form.express_check[1].checked ) {
		document.all.express_view.style.display="";
		form.express_money.disabled = false;
	} else {
		document.all.express_view.style.display="none"; 
		form.express_money.value = "";
		form.express_money.disabled = true;
	}
}

// 입력폼 체크 자바스크립트
function sendit() {
	var form=document.admin_form;
	ans = confirm("저장하시겠습니까?");
	if(ans==true){
		form.hidden_bank_cnt.value = bank_cnt;
		form.submit();
	}
}
//-->
</script>

	<h4 class="page-header">쇼핑몰 설정</h4>

	<form action="shop_basic_setup_ok.php" method="post" name="admin_form">
	<input type="hidden" name="mode" value="admin" />
	<input type="hidden" name="return_url" value="<?=$_SERVER["REQUEST_URI"]; ?>">
	<input type="hidden" name="hidden_bank_cnt" value="">

	<h5 class="page-header"><i class="glyphicon glyphicon-check"></i> 쇼핑몰 기본정보</h5>
	<table class="table table-bordered">
	<colgroup>
	<col width="15%">
	<col width="35%">
	<col width="15%">
	<col width="35%">
	</colgroup>
	<tbody>
	<tr>
		<th>대표자명</th>
		<td><input name="shop_ceo" type="text" class="form-control" value="<?=$admin_stat->shop_ceo;?>"></td>
		<th>사업자 등록번호</th>
		<td><input name="shop_num" type="text" class="form-control" value="<?=$admin_stat->shop_num;?>"></td>
	</tr>
	<tr>
		<th>팩 스</th>
		<td><input name="shop_fax" type="text" class="form-control" value="<?=$admin_stat->shop_fax;?>"></td>
		<th>통신판매신고</th>
		<td><input name="shop_license" type="text" class="form-control" value="<?=$admin_stat->shop_license;?>"></td>
	</tr>
	<tr>
		<th>주소</th>
		<td colspan="3"><input name="shop_address" type="text" class="form-control col-md-12" value="<?=$admin_stat->shop_address;?>"></td>
	</tr>
	</tbody>
	</table>


	<h5 class="page-header"><i class="glyphicon glyphicon-check"></i> 결제 정보</h5>
	<table class="table table-bordered">
	<colgroup>
	<col width="15%">
	<col width="35%">
	<col width="15%">
	<col width="35%">
	</colgroup>
	<tbody>
	<tr>
		<th>카드결제사(PG)</th>
		<td>
			<select name="pg_company" id="" class="form-control2">
				<option value="" selected>선택하세요</option>
				<option value="1" <? if($admin_stat->pg_company==1) echo('selected');?>>LGU+</option>
				<option value="2" <? if($admin_stat->pg_company==2) echo('selected');?>>이니시스</option>
			</select>
		</td>
		<th>상점 아이디(PG사 상점번호)</th>
		<td><input name="pg_id" type="text" class="form-control col-md-7" value="<?=$admin_stat->pg_id;?>"></td>
	</tr>
	<tr>
		<th>무통장 입금</th>
		<td colspan="3">
			<table class="table table-bordered">
			<caption></caption>
			<colgroup>
			<col width="15%">
			<col width="*">
			<col width="20%">
			<col width="10%">
			</colgroup>
			<thead>
			<tr>
				<th>입금은행</th>
				<th>입금계좌</th>
				<th>예금주</th>
				<th>비고</th>
			</tr>							
			<tr id="bank_view" style="display;">
				<td><input name="bank_0_1" type="text" class="form-control text-center" value="<?=$admin_stat->bank_0_1;?>"></td>
				<td><input name="bank_0_2" type="text" class="form-control text-center" value="<?=$admin_stat->bank_0_2;?>"></td>
				<td><input name="bank_0_3" type="text" class="form-control text-center" value="<?=$admin_stat->bank_0_3;?>"></td>
				<td align="center"><a href="javascript:addBank();" class="btn btn-default btn-sm">추가</a></td>
			</tr>
			<?	for( $i=1; $i<10; $i++ ) { ?>
			<tr align="center" id="bank_view" style="display;">
				<td><input name="bank_<?=$i;?>_1" type="text" class="form-control text-center" value="<?  $bank_i = "bank_".$i."_1"; echo ( $admin_stat->$bank_i);?>"></td>
				<td><input name="bank_<?=$i;?>_2" type="text" class="form-control text-center" value="<?  $bank_i = "bank_".$i."_2"; echo ( $admin_stat->$bank_i);?>"></td>
				<td><input name="bank_<?=$i;?>_3" type="text" class="form-control text-center" value="<?  $bank_i = "bank_".$i."_3"; echo ( $admin_stat->$bank_i);?>"></td>
				<td><a href="javascript:delBank(<?=$i;?>);" class="btn btn-danger btn-sm">삭제</a></td>
			</tr>
			<? } ?>
			</thead>
			</table>		
		</td>
	</tr>
	</tbody>
	</table>


	<h5 class="page-header"><i class="glyphicon glyphicon-check"></i> 배송비</h5>
	<table class="table table-bordered">
	<colgroup>
	<col width="15%">
	<col width="15%">
	<col width="*">
	</colgroup>
	<tbody>
	<tr>
		<th rowspan="2">배송비 기능 설정</th>
		<td><label class="radio-inline"><input type="radio" name="express_check" value="0" onclick="javascript:expressShow();" <? if( $admin_stat->express_check == 0 ) { echo("checked"); } ?>> 완전 무료 배송</label></td>
		<td>모든 주문에 대해서 완전 무료 배송을 합니다.</td>
	</tr>
	<tr>
		<td><label class="radio-inline"><input type="radio" name="express_check" value="1" onclick="javascript:expressShow();" <? if( $admin_stat->express_check == 1 ) { echo("checked"); } ?>> 일반배송비 기능</label></td>
		<td><input name="express_money" type="text" class="form-control2" maxlength="11"<?=$style->strCheck();?> <?=$style->colorAlign("#FF0000", 2);?> value="<? if( $admin_stat->express_check == 1 ) { echo($admin_stat->express_money); }?>"> 원 (모든 주문에 대해서 공통 적용) </td>
	</tr>
	<tr id="express_view" style="display:<?if($admin_stat->express_check==0){?>none<?}?>;">
		<th>무료 배송</th>
		<td colspan="2"><input name="express_free" type="text" class="form-control2" maxlength="11" <?=$style->strCheck();?> <?=$style->colorAlign("#FF0000", 2);?> value="<? if( $admin_stat->express_check != 0 ) { echo($admin_stat->express_free); }?>"> 원 일정금액 이상이 될 경우 배송비 무료적용 </td>
	</tr>
	</tbody>
	</table>


	<h5 class="page-header"><i class="glyphicon glyphicon-check"></i> 포인트</h5>
	<table class="table table-bordered" style="display:;">
	<colgroup>
	<col width="15%">
	<col width="*">
	</colgroup>
	<tbody>
	<tr>
		<th>기본 포인트</th>
		<td><input name="point_basic" type="text" class="form-control2 text-right" maxlength="5" value="<?=$admin_stat->point_basic;?>" style="color:#FF0000;">&nbsp;% </td>
	</tr>
	<tr>
		<th>축하 포인트</th>
		<td>
			<input name="point_register" type="text" class="form-control2 text-right" maxlength="10" value="<?=$admin_stat->point_register;?>" style="color:#FF0000;">&nbsp;Point&nbsp;[회원 가입시 적립되는 포인트]
		</td>
	</tr>
	<tr style="display:none;">
		<th>사용가능포인트</th>
		<td>
			<input name="point_use" type="text" class="form-control2 text-right" maxlength="11" value="<?=$admin_stat->point_use;?>" style="color:#FF0000;">&nbsp;
			Point&nbsp;[일정 포인트 이상이 될 경우에만 결제시 사용가능]
		</td>
	</tr>
	</tbody>
	</table>

	<table class="table">
		<tr>
			<td class="text-center">
				<button type="button" class="btn btn-primary" onClick="sendit();">저장하기</button>
			</td>
		</tr>
	</table>

	</form>


<!-- 계좌번호 입력폼 과 추천회원제폼 숨기기 자바스크립트 -->
<script language="JavaScript">
<!--
var form=document.admin_form;
for(i=<? if($bank_cnt) { echo($bank_cnt); } else { echo(1); }?>; i<document.all.bank_view.length; i++) document.all.bank_view[i].style.display="none";

if( form.member_check[0].checked ) {
	document.all.member_view[0].style.display=""; 
	document.all.member_view[1].style.display=""; 
} else {
	document.all.member_view[0].style.display="none"; 
	document.all.member_view[1].style.display="none"; 
}

if( form.express_check[1].checked ) {
	document.all.express_view.style.display="";
//} else if( form.express_check[2].checked ) {
//	document.all.express_view.style.display="";
} else {
	document.all.express_view.style.display="none"; 
}
//-->
</script>


<? include('../footer.php');?>