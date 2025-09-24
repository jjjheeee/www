<?
$page_num = "01";
$sub_num = "01";
$page_section = "company";
$sub_section = "ceo";
$page_info = "회사소개";
$sub_info = "CEO인사말";
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(서브페이지) *필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<style>
/* css */

</style>

<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
					<!-- 온라인문의 기본형 폼 시작 -->
	<form action="./inquiry_ok.php" name="form" method="post" enctype="multipart/form-data">
		<section class="bbs-write-con">
			<article class="bbs-inquiry-agree-con">
				<h3 class="agree-tit">개인정보처리방침</h3>
				<div class="inquiry-agreement-con editor">
					<?
					$page_row = $db->object("cs_page", "where page_index='privacy'");

					$content = $page_row->content;
					$content = str_replace("<P>","",$content);
					$content = str_replace("</P>","<br/>",$content);
					$content = str_replace("<p>","",$content);
					$content = str_replace("</p>","<br/>",$content);

					echo $content;
					?>
				</div>
				<p class="agree-txt"><input type="checkbox" name="agree1" id="agree1"><label for="agree1"><i class="xi-check-circle"></i>개인정보처리방침에 동의합니다. </label></p>
			</article>	
			<article class="bbs-write-tbl-box">
				<p class="inquiry-essential-txt"><span class="essential-icon">*</span> 표시는 필수 입력 항목입니다.</p>
				<table class="bbs-write-tbl">
					<caption>문의폼입니다.</caption>
					<colgroup>
						<col style="width:20%;">
						<col>
					</colgroup>
					<tbody>
						<tr>
							<th scope="row"><span class="essential-icon">*</span> 이름</th>
							<td><input type="text" class="write-input" name="name"></td>
						</tr>
						<tr>
							<th scope="row">연락처</th>
							<td>
								<fieldset class="phone-fieldset">
									<select name="tel1" class="write-select width20">
										<option value="02">02</option>
										<option value="031">031</option>
										<option value="032">032</option>
										<option value="033">033</option>
										<option value="041">041</option>
										<option value="042">042</option>
										<option value="043">043</option>
										<option value="044">044</option>
										<option value="051">051</option>
										<option value="052">052</option>
										<option value="053">053</option>
										<option value="054">054</option>
										<option value="055">055</option>
										<option value="061">061</option>
										<option value="062">062</option>
										<option value="063">063</option>
										<option value="064">064</option>
										<option value="070">070</option>
									</select>
									<span class="hypen">-</span>
									<input type="text" class="write-input width30" style="max-width:150px;" name="tel2" title="연락처 가운데" maxlength="4">
									<span class="hypen">-</span>
									<input type="text" class="write-input width30" style="max-width:150px;"  name="tel3" title="연락처 마지막"maxlength="4">
								</fieldset>
							</td>
						</tr>
						<tr>
							<th scope="row"><span class="essential-icon">*</span> 휴대폰번호</th>
							<td>
								<fieldset class="phone-fieldset">
									<select name="phone1" class="write-select width20">
										<option value="010">010</option>
										<option value="011">011</option>
										<option value="016">016</option>
										<option value="017">017</option>
										<option value="018">018</option>
										<option value="019">019</option>
									</select>
									<span class="hypen">-</span>
									<input type="text" class="write-input width30" style="max-width:150px;" name="phone2" title="휴대폰번호 가운데" maxlength="4">
									<span class="hypen">-</span>
									<input type="text" class="write-input width30" style="max-width:150px;"  name="phone3" title="휴대폰번호 마지막" maxlength="4">
								</fieldset>
							</td>
						</tr>
						<tr>
							<th scope="row">이메일</th>
							<td>
								<fieldset class="email-fieldset">
									<input type="text" class="write-input width20" name="email1"> <span class="hypen">@</span> <input type="text" class="write-input width20" name="email2" readonly>
									<select name="email3" class="write-select width20" onChange="res();">
										<option value="b">메일계정선택</option>
										<option value="a">직접입력</option>
										<option value="naver.com">naver.com</option>
										<option value="nate.com">nate.com</option>
										<option value="hanmail.net">hanmail.net</option>
										<option value="gmail.com">gmail.com</option>
										<option value="hotmail.com">hotmail.com</option>
										<option value="outlook.com">outlook.com</option>
										<option value="empal.com">empal.com</option>
										<option value="dreamwiz.com">dreamwiz.com</option>
										<option value="lycos.co.kr">lycos.co.kr</option>
										<option value="yahoo.co.kr">yahoo.co.kr</option>
										<option value="korea.com">korea.com</option>
										<option value="paran.com">paran.com</option>
									</select>
								</fieldset>
							</td>
						</tr>
					<!-- 	<tr>
							<th scope="row"><span class="essential-icon">*</span> 주소</th>
							<td>
								<fieldset class="address-fieldset">
									<input type="text" class="write-input width30 with-sub-btn-input" name="zip_new" readOnly><button type="button" class="bbs-write-sub-btn trans400" onclick="openDaumPostcode();">우편번호 검색</button>
									<input type="text" class="write-input width100" name="add1">
									<input type="text" class="write-input width100" name="add2" placeholder="상세주소 입력">
								</fieldset>
							</td>
						</tr>
						<tr>
							<th scope="row">항목1</th>
							<td>
								<input type="text" class="write-input width100" name="">
							</td>
						</tr>
						<tr>
							<th scope="row">항목2</th>
							<td>
								<input type="text" class="write-input width100" name="">
								<span class="write-sub-txt2">항목에 대한 설명이 들어갑니다</span>
							</td>
						</tr>
						<tr>
							<th scope="row">체크항목</th>
							<td>
								<fieldset class="input-check">
									<span><input type="radio" name="" value="" checked id="radio1" /><label for="radio1">체크항목1</label></span>
									<span><input type="radio" name="" value="" id="radio2" /><label for="radio2">체크항목2</label></span>
									<span><input type="radio" name="" value="" id="radio3" /><label for="radio3">체크항목3</label></span>
								</fieldset>
							</td>
						</tr>
						<tr>
							<th scope="row">선택항목</th>
							<td>
								<fieldset class="input-check">
									<span><input type="checkbox" name="" value="" checked id="check1" /><label for="check1">선택항목1</label></span>
									<span><input type="checkbox" name="" value="" id="check2" /><label for="check2">선택항목2</label></span>
									<span><input type="checkbox" name="" value="" id="check3" /><label for="check3">선택항목3</label></span>
								</fieldset>
							</td>
						</tr>
					 -->
						<tr>
							<th scope="row">첨부파일</th>
							<td>
								<input type="file" class="write-input" name="bbs_file">
							</td>
						</tr>
						<tr>
							<th scope="row">내용</th>
							<td>
								<textarea name="content" class="write-textarea"></textarea>
							</td>
						</tr>
					</tbody>
				</table>
			</article>

			<div class="cm-btn-controls">
				<button type="button" class="btn-style01" onClick="sendit();">작성완료</button><a href="/" class="btn-style02">취소</a>
			</div>
		</section>
	</form>
	<!-- // 온라인문의 기본형 폼 끝 -->
<script type="text/javascript">
<!--
function sendit() {
	var f=document.form;
	if(f.agree1.checked==false){
		alert("개인정보처리방침에  동의하지 않으셨습니다.");
		f.agree1.focus();
	}else if(f.name.value=="") {
		alert("이름을 입력해 주세요.");
		f.name.focus();
	} else if(f.phone1.value=="") {
		alert("휴대폰번호를 입력해 주세요.");
		f.phone1.focus();
	} else if(f.phone2.value=="") {
		alert("휴대폰번호를 입력해 주세요.");
		f.phone2.focus();
	} else if(f.phone3.value=="") {
		alert("휴대폰번호를 입력해 주세요.");
		f.phone3.focus();
	} else {
		f.submit();
	}
}

function res(){
	var f = document.form;
	if(f.email3.value=="a"){
	f.email2.readOnly= false;
	f.email2.value="";
	f.email2.focus();
	}else if(f.email3.value=="b"){
	f.email2.readOnly= false;
	f.email2.value="";
	}else{
	f.email2.readOnly= false;
	f.email2.value=f.email3.value;
	}
}
//-->
</script>

<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
