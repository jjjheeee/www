<? $mod=menu02 ?>
<?
include('../header.php');
$_GET=&$HTTP_GET_VARS;
$_POST=&$HTTP_POST_VARS;

// $_GET[item] 값이 없을 경우 
if(!$_GET[item]) { $_GET[item]=1;}

// 메일 폼 값들 불려 오기
$mailform_stat=$db->object("cs_mailform", "where item='$_GET[item]'");
?>
<script language="javascript">
<!--
function formCheck(chk) {
	var form=document.mail_check_form;
	form.action="<?=$_SERVER[PHP_SELF];?>?item="+chk;
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
		window.open("","mailform_mir","scrollbars=yes, width=600, height=650, left=150, top=100");
		form.target="mailform_mir";
		form.action="mailform_mir.php";
		form.submit();
	}
}

function ftpWinOpen() {
	window.open("../webftp.php","","scrollbars=yes, width=500, height=600");
}

// TEXTAREA 입력 폼 크기 조정
function textarea_resize( formname, size ) {
	if( size=='reset' ){
		formname.rows = 15;
	}else{
		var value = formname.rows + size;
		if(value>16) formname.rows = value;
		else return;
	}
}
//-->
</script>

<table width="851" border="0" cellpadding="0" cellspacing="0">
	<tr> 
		<td height="70" align="center" valign="top" bgcolor="#FFFFFF" class="menu"><br><img src="../images/title_mail.jpg" width="800" height="70"></td>
	</tr>
	<tr> 
		<td height="75" align="center" valign="top" bgcolor="#FFFFFF" class="menu">
			<table width="800" border="0" cellspacing="0" cellpadding="0">
				<tr> 
					<td height="25"><img src="../images/bar_mail.gif" alt="메일설정"></td>
				</tr>
			</table>
			<table width="800" border="1" cellpadding="5" cellspacing="0" bordercolor='#BDBEBD' class="menu" style='border-collapse: collapse'>
				<tr> 
					<td width="150" height="25" align="center" bgcolor="EFEFEF">분류선택</td>
					<td width="650" height="25">
						<table width="600" border="0" cellspacing="0" cellpadding="0" class="menu">
							<form method="post" name="mail_check_form">
							<tr>
								<td><input name="mailform" type="radio" value="1" onclick="formCheck(1);" <? if($_GET[item]==1) { echo('checked');}?>>회원가입(회원)&nbsp;&nbsp;<input name="mailform" type="radio" value="5" onclick="formCheck(5);" <? if($_GET[item]==5) { echo('checked');}?>>회원가입(관리자)&nbsp;&nbsp;<input name="mailform" type="radio" value="10" onclick="formCheck(10);" <? if($_GET[item]==10) { echo('checked');}?>>아이디 패스워드 찾기</td>
								<!--td><input name="mailform" type="radio" value="2" onclick="formCheck(2);" <? if($_GET[item]==2) { echo('checked');}?>>주문메일(회원)</td>
								<td><input name="mailform" type="radio" value="3" onclick="formCheck(3);" <? if($_GET[item]==3) { echo('checked');}?>>결제완료(회원)</td>
								<td><input name="mailform" type="radio" value="4" onclick="formCheck(4);" <? if($_GET[item]==4) { echo('checked');}?>>배송메일(회원)</td>
							</tr>
							<tr>
								<td><input name="mailform" type="radio" value="5" onclick="formCheck(5);" <? if($_GET[item]==5) { echo('checked');}?>>회원가입(관리자)</td>
								<td><input name="mailform" type="radio" value="6" onclick="formCheck(6);" <? if($_GET[item]==6) { echo('checked');}?>>주문메일(관리자)</td>
								<td><input name="mailform" type="radio" value="7" onclick="formCheck(7);" <? if($_GET[item]==7) { echo('checked');}?>>결제완료(관리자)</td>
								<td><input name="mailform" type="radio" value="8" onclick="formCheck(8);" <? if($_GET[item]==8) { echo('checked');}?>>배송메일(관리자)</td>
							</tr>
							<tr>
								<td><input name="mailform" type="radio" value="9" onclick="formCheck(9);" <? if($_GET[item]==9) { echo('checked');}?>>상품 추천메일</td>
								<td><input name="mailform" type="radio" value="10" onclick="formCheck(10);" <? if($_GET[item]==10) { echo('checked');}?>>아이디 패스워드 찾기</td>
								<td></td>
								<td></td-->
							</tr>
							</form>
						</table>
					</td>
				</tr>
				<tr> 
					<td width="150" height="25" align="center" bgcolor="EFEFEF">사용자 정보<br>치환 코드</td>
					<td width="650" height="25">
						<? if($_GET[item]==1) {?>
						<table width="610" border="1" cellpadding="0" cellspacing="0" bordercolor='#BDBEBD' class="menu" style='border-collapse: collapse'>
							<tr>
								<td bgcolor="#FEFDD8">__USER_NAME__: 이름(회원명), __USER_ID__: 회원 아이디, __USER_PASSWD__: 회원패스워드,<br>__USER_JUMIN__: 회원주민번호, __USER_EMAIL__: 회원이메일, __USER_TEL__: 회원전화번호,<br>__USER_ADDRESS__: 회원주소</td>
							</tr>
						</table>
						<?} else if($_GET[item]==2) {?>
						<table width="610" border="1" cellpadding="0" cellspacing="0" bordercolor='#BDBEBD' class="menu" style='border-collapse: collapse'>
							<tr>
								<td bgcolor="#FEFDD8">__ORDER_NAME__: 주문자이름,  __TRADE_CODE__: 주문코드, __TRADE_METHOD__: 결제방법, __TRADE_METHOD_INFO__: 결제정보, __TRADE_PRICE__: 결제금액, __TRADE_DAY__: 주문일, __TRADE_MONEY_OK__: 결제완료, __TRADE_COMPANY__: 배송회사, __TRADE_NUMBER__: 배송번호, __DELIV_NAME__: 받을 사람, __DELIV_TEL__: 받을 연락처, __DELIV_ADDRESS__: 받을 주소, __TRADE_START_DAY__: 배송일</td>
							</tr>
						</table>
						<?} else if($_GET[item]==3) {?>
						<table width="610" border="1" cellpadding="0" cellspacing="0" bordercolor='#BDBEBD' class="menu" style='border-collapse: collapse'>
							<tr>
								<td bgcolor="#FEFDD8">__ORDER_NAME__: 주문자이름,  __TRADE_CODE__: 주문코드, __TRADE_METHOD__: 결제방법, __TRADE_METHOD_INFO__: 결제정보, __TRADE_PRICE__: 결제금액, __TRADE_DAY__: 주문일, __TRADE_MONEY_OK__: 결제완료, __TRADE_COMPANY__: 배송회사, __TRADE_NUMBER__: 배송번호, __DELIV_NAME__: 받을 사람, __DELIV_TEL__: 받을 연락처, __DELIV_ADDRESS__: 받을 주소, __TRADE_START_DAY__: 배송일</td>
							</tr>
						</table>
						<?} else if($_GET[item]==4) {?>
						<table width="610" border="1" cellpadding="0" cellspacing="0" bordercolor='#BDBEBD' class="menu" style='border-collapse: collapse'>
							<tr>
								<td bgcolor="#FEFDD8">__ORDER_NAME__: 주문자이름,  __TRADE_CODE__: 주문코드, __TRADE_METHOD__: 결제방법, __TRADE_METHOD_INFO__: 결제정보, __TRADE_PRICE__: 결제금액, __TRADE_DAY__: 주문일, __TRADE_MONEY_OK__: 결제완료, __TRADE_COMPANY__: 배송회사, __TRADE_NUMBER__: 배송번호, __DELIV_NAME__: 받을 사람, __DELIV_TEL__: 받을 연락처, __DELIV_ADDRESS__: 받을 주소, __TRADE_START_DAY__: 배송일</td>
							</tr>
						</table>
						<?} else if($_GET[item]==5) {?>
						<table width="610" border="1" cellpadding="0" cellspacing="0" bordercolor='#BDBEBD' class="menu" style='border-collapse: collapse'>
							<tr>
								<td bgcolor="#FEFDD8">__USER_NAME__: 이름(회원명), __USER_ID__: 회원 아이디, __USER_PASSWD__: 회원패스워드,<br>__USER_JUMIN__: 회원주민번호, __USER_EMAIL__: 회원이메일, __USER_TEL__: 회원전화번호,<br>__USER_ADDRESS__: 회원주소</td>
							</tr>
						</table>
						<?} else if($_GET[item]==6) {?>
						<table width="610" border="1" cellpadding="0" cellspacing="0" bordercolor='#BDBEBD' class="menu" style='border-collapse: collapse'>
							<tr>
								<td bgcolor="#FEFDD8">__ORDER_NAME__: 주문자이름,  __TRADE_CODE__: 주문코드, __TRADE_METHOD__: 결제방법, __TRADE_METHOD_INFO__: 결제정보, __TRADE_PRICE__: 결제금액, __TRADE_DAY__: 주문일, __TRADE_MONEY_OK__: 결제완료, __TRADE_COMPANY__: 배송회사, __TRADE_NUMBER__: 배송번호, __DELIV_NAME__: 받을 사람, __DELIV_TEL__: 받을 연락처, __DELIV_ADDRESS__: 받을 주소, __TRADE_START_DAY__: 배송일</td>
							</tr>
						</table>
						<?} else if($_GET[item]==7) {?>
						<table width="610" border="1" cellpadding="0" cellspacing="0" bordercolor='#BDBEBD' class="menu" style='border-collapse: collapse'>
							<tr>
								<td bgcolor="#FEFDD8">__ORDER_NAME__: 주문자이름,  __TRADE_CODE__: 주문코드, __TRADE_METHOD__: 결제방법, __TRADE_METHOD_INFO__: 결제정보, __TRADE_PRICE__: 결제금액, __TRADE_DAY__: 주문일, __TRADE_MONEY_OK__: 결제완료, __TRADE_COMPANY__: 배송회사, __TRADE_NUMBER__: 배송번호, __DELIV_NAME__: 받을 사람, __DELIV_TEL__: 받을 연락처, __DELIV_ADDRESS__: 받을 주소, __TRADE_START_DAY__: 배송일</td>
							</tr>
						</table>
						<?} else if($_GET[item]==8) {?>
						<table width="610" border="1" cellpadding="0" cellspacing="0" bordercolor='#BDBEBD' class="menu" style='border-collapse: collapse'>
							<tr>
								<td bgcolor="#FEFDD8">__ORDER_NAME__: 주문자이름,  __TRADE_CODE__: 주문코드, __TRADE_METHOD__: 결제방법, __TRADE_METHOD_INFO__: 결제정보, __TRADE_PRICE__: 결제금액, __TRADE_DAY__: 주문일, __TRADE_MONEY_OK__: 결제완료, __TRADE_COMPANY__: 배송회사, __TRADE_NUMBER__: 배송번호, __DELIV_NAME__: 받을 사람, __DELIV_TEL__: 받을 연락처, __DELIV_ADDRESS__: 받을 주소, __TRADE_START_DAY__: 배송일</td>
							</tr>
						</table>
						<?} else if($_GET[item]==9) {?>
						<table width="610" border="1" cellpadding="0" cellspacing="0" bordercolor='#BDBEBD' class="menu" style='border-collapse: collapse'>
							<tr>
								<td bgcolor="#FEFDD8">__MAIL_FROM_USER__: 메일보낸사람,  __MAIL_TITLE__: 보낸사람이 작성한 메일제목, __MAIL_CONTENT__: 보낸사람이 작성한 메일내용, __GOODS_NAME__: 추천상품명, __GOODS_CONTENT__: 추천상품설명</td>
							</tr>
						</table>
						<?} else if($_GET[item]==10) {?>
						<table width="610" border="1" cellpadding="0" cellspacing="0" bordercolor='#BDBEBD' class="menu" style='border-collapse: collapse'>
							<tr>
								<td bgcolor="#FEFDD8">__USER_NAME__: 이름(회원명), __USER_ID__: 회원 아이디, __USER_PASSWD__: 회원패스워드,<br>__USER_JUMIN__: 회원주민번호, __USER_EMAIL__: 회원이메일, __USER_TEL__: 회원전화번호,<br>__USER_ADDRESS__: 회원주소</td>
							</tr>
						</table>
						<?}?>
					</td>
				</tr>
				<tr> 
					<td width="150" height="25" align="center" bgcolor="EFEFEF">쇼핑몰 정보<br>치환 코드</td>
					<td width="650" height="25">
						<table width="610" border="1" cellpadding="0" cellspacing="0" bordercolor='#BDBEBD' class="menu" style='border-collapse: collapse'>
							<tr>
								<td bgcolor="#FEFDD8">__SHOP_NAME__: 쇼핑몰 상호, __SHOP_DOMAIN__: 쇼핑몰 도메인, __SHOP_CEO__: 쇼핑몰 대표자, __SHOP_TEL__: 쇼핑몰 전화번호, __SHOP_EMAIL__: 쇼핑몰 이메일, __SHOP_ADDRESS__: 쇼핑몰 주소, __MAILFORM_IMAGES_URL__: 기본 이미지 경로(스킨/mailform)</td>
							</tr>
						</table>
					</td>
				</tr>
				<form method="post" action="mailform_ok.php" name="mail_form">
				<input type="hidden" name="item" value="<?=$_GET[item];?>">
				<tr> 
					<td width="150" height="25" align="center" bgcolor="EFEFEF">메일제목</td>
					<td width="650" height="25"><input name="title" type="text" class="input" size="100" value="<?=$mailform_stat->title;?>"></td>
				</tr>
				<tr> 
					<td width="150" height="25" align="center" bgcolor="EFEFEF">메일내용</td>
					<td width="650" height="25">
						<table width="620" cellpadding="0" cellspacing="0" border="0" height="30">
							<tr> 
								<td height="3" colspan="2"></td>
							</tr>
							<tr  height="25">
								<td align="left" class="menu">&nbsp;
									<a href="javascript:textarea_resize(mail_form.content, 5)"><img src="../images/bt_down.gif" width="19" height="19" border="0" align="absmiddle"></a>
									<a href="javascript:textarea_resize(mail_form.content, 'reset')"><img src="../images/bt_middle.gif" width="19" height="19" border="0" align="absmiddle"></a>
									<a href="javascript:textarea_resize(mail_form.content, -5)"><img src="../images/bt_up.gif" width="19" height="19" border="0" align="absmiddle"></a>
									&nbsp;&nbsp;&nbsp;<img src="../images/bt_type.gif" width="64" height="19" border=0 alt="" align="absmiddle">&nbsp; <input name="tag" type="radio" value="0" <? if( $mailform_stat->tag == 0) { echo("checked");}?>>&nbsp;TEXT&nbsp;&nbsp;<input type="radio" name="tag" value="1" <? if( $mailform_stat->tag == 1) { echo("checked");}?>>&nbsp;HTML</td>
								<td align="right"><a href="javascript:ftpWinOpen();"><img src="../images/bt_upload.gif" border="0"></a></td>
							</tr>
							<tr> 
								<td colspan="2">&nbsp;<textarea name="content" cols="100" rows="15"  class="input"><?=$mailform_stat->content;?></textarea></td>
							</tr>
							<tr> 
								<td height="5" colspan="2"></td>
							</tr>
						</table>
					</td>
				</tr>
				</form>
			</table>
		</td>
	</tr>
	<tr> 
		<td align="center" valign="top" bgcolor="#FFFFFF" class="menu"><br><a href="javascript:newmir();"><img src="../images/bt_review.gif" border="0"></a>&nbsp;<a href="javascript:sendit();"><img src="../images/bt_save.gif" border="0"></a><br><br> </td>
	</tr>
</table>
<? include('../footer.php');?>