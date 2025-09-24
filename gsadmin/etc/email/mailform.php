<?
include('../../header.php');

if(!$code) { $code="join";}

// 메일 폼 값들 불려 오기
$row =$db->object("cs_mailform", "where code='$code'");
?>
<script language="javascript">
<!--
function formCheck(code) {
	var form=document.mail_check_form;
	form.action="<?=$_SERVER[PHP_SELF];?>?code="+code;
	form.submit();
}

function sendit() {
	var form=document.mail_form;
	if(form.title.value=="") {
		alert("메일 제목을 입력해 주세요.");
		form.title.focus();
	} else if(form.content.value=="") {
		alert("메일 내용을 입력해 주세요.");
		form.content.focus();
	} else {
		form.target="";
		form.action="mailform_ok.php";
		form.submit();
	}
}

// 메일폼 새창 오픈
function newmir() {
	var form=document.mail_form;
	if(form.title.value=="") {
		alert("메일 제목을 입력해 주세요.");
		form.title.focus();
	} else if(form.content.value=="") {
		alert("메일 내용을 입력해 주세요.");
		form.content.focus();
	} else {
		window.open("","mailform_mir","scrollbars=yes, width=650, height=650, left=150, top=100");
		form.target="mailform_mir";
		form.action="mailform_mir.php";
		form.submit();
	}
}
//-->
</script>

	<h4 class="page-header">메일 설정</h4>

	<form method="post" name="mail_check_form">
	<table class="table table-bordered">
	<colgroup>
	<col width="15%">
	<col width="*">
	</colgroup>
	<tbody>
	<tr>
		<th>분류선택</th>
		<td>
			<label class="radio-inline"><input type="radio" name="code" value="join" onclick="formCheck(this.value);" <? if($code=="join") { echo('checked');}?>>회원가입</label>
			<label class="radio-inline"><input type="radio" name="code" value="password" onclick="formCheck(this.value);" <? if($code=="password") { echo('checked');}?>>아이디 패스워드 찾기</label>
			<label class="radio-inline"><input type="radio" name="code" value="online" onclick="formCheck(this.value);" <? if($code=="online") { echo('checked');}?>>온라인신청서</label>

		</td>
	</tr>
	<tr>
		<th>사용자 정보<br>치환 코드</th>
		<td class="bg-warning">
			<? if($code=="join") {?>
				[{USER_NAME}] : 이름(회원명)<br>
				[{USER_ID}] : 회원 아이디<br>
				[{USER_PASSWD}] : 회원패스워드<br>
				[{USER_EMAIL}] : 회원이메일<br>
				[{USER_TEL}] : 회원전화번호<br>
				[{USER_ADDRESS}] : 회원주소
			<?} else if($code=="password") {?>
				[{USER_NAME}] : 이름(회원명)<br>
				[{USER_ID}] : 회원 아이디<br>
				[{USER_PASSWD}] : 회원패스워드<br>
				[{USER_EMAIL}] : 회원이메일<br>
				[{USER_TEL}] : 회원전화번호<br>
				[{USER_ADDRESS}] : 회원주소
			<?} else if($code=="online") {?>
				[{USER_NAME}] : 이름<br>
				[{USER_TEL}] : 연락처<br>
				[{USER_PHONE}] : 휴대폰번호<br>
				[{USER_EMAIL}] : 이메일<br>
				[{USER_CONTENT}] : 내용
			<?}?>
		</td>
	</tr>
	<tr>
		<th>쇼핑몰 정보<br>치환 코드</th>
		<td class="bg-warning">
			[{SHOP_NAME}] : 쇼핑몰 상호<br>
			[{SHOP_DOMAIN}] : 쇼핑몰 도메인<br>
			[{SHOP_CEO}] : 쇼핑몰 대표자<br>
			[{SHOP_TEL}] : 쇼핑몰 전화번호<br>
			[{SHOP_EMAIL}] : 쇼핑몰 이메일<br>
			[{SHOP_ADDRESS}] : 쇼핑몰 주소<br>
		</td>
	</tr>
	</tbody>
	</form>


	<form method="post" action="mailform_ok.php" name="mail_form">
	<input type="hidden" name="code" value="<?=$code;?>">
	<input type="hidden" name="return_url" value="<?=$_SERVER["REQUEST_URI"]; ?>">
	<table class="table table-bordered">
	<colgroup>
	<col width="15%">
	<col width="*">
	</colgroup>
	<tbody>
	<tr>
		<th>메일제목</th>
		<td><input type="text" name="subject" class="form-control" value="<?=$row->subject;?>"></td>
	</tr>
	<tr>
		<th>메일내용</th>
		<td><textarea name="content" class="form-control" rows="15"><?=$row->content;?></textarea></td>
	</tr>
	</tbody>
	</table>
	</form>


	<table class="table">
		<tr>
			<td class="text-center">
				<a href="javascript:;" class="btn btn-default" onClick="newmir();">미리보기</a>
				<a href="javascript:;" class="btn btn-primary" onClick="sendit();">저장</a>
			</td>
		</tr>
	</table>


<? include('../../footer.php');?>