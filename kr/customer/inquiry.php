<? session_start();
$page_num = "07";
$sub_num = "03";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "customer";
$sub_section = "inquiry";
$page_info = "CS Center";
$sub_info = "문의";
//$content_type="wide";
// $sub_info2 = "3차메뉴";	// 사용안할시 주석처리
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(Description)	필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<style>
.content-tit{display: none;}
</style>

<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>

<?
$cate = $db->filter($cate);
if($cate==""){ $cate = 1; }
?>

	<section class="inquiry-page" data-scroll="fade-up">
		<h3 class="inquiry-content-tit"><!-- Product  --><span class="point">문의</span></h3>

<form action="./inquiry_ok.php" name="form" method="post" enctype="multipart/form-data">
<input type="hidden" name="cate" value="<?=$cate?>">

		<article class="inquiry-wrapper">
			<ul>
				<li>
					<strong class="inquiry-tit"><em>국가</em><span class="essential-icon">*</span></strong>
					<input class="write-input" name="country" type="text" placeholder="국가명을 기입하세요.">
				</li>
				<li>
					<strong class="inquiry-tit"><em>협력사</em><span class="essential-icon">*</span></strong>
					<input class="write-input" name="affi" type="text" placeholder="기업명을 기입하세요.">
				</li>
				<li>
					<strong class="inquiry-tit"><em>성함</em><span class="essential-icon">*</span></strong>
					<input class="write-input" name="name" type="text" placeholder="성함을 기입하세요.">
				</li>
				<li>
					<strong class="inquiry-tit"><em>이메일</em><span class="essential-icon">*</span></strong>
					<fieldset class="email-fieldset">
						<input type="text" class="write-input" name="email1"> <span class="hypen">@</span>
						<input type="text" class="write-input" name="email2">
						<select name="email3" class="inquiry-select" onchange="res();">
							<option value="b">선택</option>
							<option value="a">직접입력</option>
							<option value="naver.com">naver.com</option>
							<option value="nate.com">nate.com</option>
							<option value="hanmail.net">hanmail.net</option>
							<option value="gmail.com">gmail.com</option>
							<option value="hotmail.com">hotmail.com</option>
							<option value="outlook.com">outlook.com</option>
							<option value="empal.com">empal.com</option>
							<option value="dreamwiz.com">dreamwiz.com</option>
							<option value="yahoo.co.kr">yahoo.co.kr</option>
						</select>
					</fieldset>
				</li>
				<li>
					<strong class="inquiry-tit"><em>전화</em></strong>
					<fieldset class="phone-fieldset">
						<select name="phone1" class="inquiry-select">
							<option value="">선택</option>
							<option value="010">010</option>
							<option value="011">011</option>
							<option value="016">016</option>
							<option value="017">017</option>
							<option value="018">018</option>
							<option value="019">019</option>
						</select>
						<span class="hypen">-</span>
						<input type="text" class="write-input" name="phone2" title="휴대폰번호 가운데">
						<span class="hypen">-</span>
						<input type="text" class="write-input" name="phone3" title="휴대폰번호 마지막">
					</fieldset>
				</li>
				<li>
					<strong class="inquiry-tit"><em>파일첨부</em></strong>
					 <div class="file-custom-box clearfix"> 
					    <label for="fileOpenButton"><em>파일첨부</em><i class="xi-file-add"></i></label> 
					    <input type="file" id="fileOpenButton" class="upload-hidden" name="bbs_file"> 
					    <input class="upload-name" value="첨부 가능한 파일 형식 : jpg, jpeg, mp4, bmp" disabled="disabled"> 
					 </div>
					 <p class="file-custom-txt">더 정확한 기술적 문제 평가를 위해 사진/동영상을 첨부해 주시기 바랍니다.</p>
				</li>
			</ul>
			<ul>
				<li>
					<strong class="inquiry-tit"><em>문의 유형</em><span class="essential-icon">*</span></strong>
					<select class="inquiry-select" name="inquiry">
						<option value="">선택</option>
						<option value="Lab Equipment (International)">실험 장비(국제)</option>
						<option value="Lab Equipment (Korea)">실험 장비(한국)</option>
						<option value="Validation (Korea only)" <? if($cate==2){ ?>selected<? } ?>>밸리데이션(한국만 해당)</option>
						<option value="Stem Cell Business">줄기세포 사업</option>
					</select>
				</li>
				<li>
					<strong class="inquiry-tit"><em>분류</em><span class="essential-icon">*</span></strong>
					<div class="classify-select-list">
						<div class="classify-select inquiry-check-stl">
							<input type="radio" id="classify1" name="classify" value="End-user">
							<label for="classify1"><em>최종 사용자</em></label>
						</div>
						<div class="classify-select inquiry-check-stl">
							<input type="radio" id="classify2" name="classify" value="Distributor">
							<label for="classify2"><em>대리점</em></label>
						</div>
					</div>
				</li>
				<li>
					<strong class="inquiry-tit"><em>모델 번호 / 시리얼 넘버</em></strong>
					<input class="write-input" name="modelno" type="text" placeholder="제품 번호 / 일련번호를 기입하세요.">
				</li>
				<li>
					<strong class="inquiry-tit"><em>문의 사항</em><span class="essential-icon">*</span></strong>
					<textarea name="content" class="write-textarea" placeholder="기술적 문제나 정보에 대해 최대한 자세하게 기술해 주시기 바랍니다."></textarea>
					<div class="agree-check-box inquiry-check-stl">
						<input type="checkbox" id="contactAgree" name="agree1">
						<label for="contactAgree">
							
						</label>
						<a href="<?=$site_url?>/etc/privacy.php" class="cm-modal-open-btn agree-click">개인정보 보호정책에 동의합니다. <i class="xi-external-link"></i></a>
					</div>
				</li>
				<? include $_SERVER['DOCUMENT_ROOT']."/bbs/nospam.php"; ?>
				<li class="anti-spam-con">
					<div>
						<em>스팸 방지 문자</em>
						<span class="num"><?=$num4?></span>
						<span class="num"><?=$num3?></span>
						<span class="num"><?=$num2?></span>
						<span class="num"><?=$num1?></span>
					</div>
					<input class="write-input" name="num" type="text" placeholder="보이는 문자를 입력하세요.">
				</li>
			</ul>
		</article>
		<a href="#none" onclick="sendit();" class="inquiry-btn">제출</a>
	</section>

</form>

	<script>
		$(document).on('change','.upload-hidden', function(){
		  if(window.FileReader){
		    var filename = $(this)[0].files[0].name;
		  } else {
		    var filename = $(this).val().split('/').pop().split('\\').pop();
		  }
		  $(this).next(".upload-name").val(filename);
		});
	</script>

<script type="text/javascript">
<!--
function sendit() {
	var f=document.form;
	if(f.country.value=="") {
		alert("Please fill in your country’s name.");
		f.country.focus();
	} else if(f.affi.value=="") {
		alert("Please fill in your affiliation’s name.");
		f.affi.focus();
	} else if(f.name.value=="") {
		alert("Please fill in your name.");
		f.name.focus();
	} else if(f.email1.value=="") {
		alert("Please fill in your Email.");
		f.email1.focus();
	} else if(f.email2.value=="") {
		alert("Please fill in your Email.");
		f.email2.focus();
	} else if(f.inquiry.value=="") {
		alert("Please fill in your types of inquiry.");
		f.inquiry.focus();
	} else if(f.content.value=="") {
		alert("Please attach photo/video for more accurate technical problem assessment.");
		f.content.focus();
	} else if(f.agree1.checked==false){
		alert("Please agree");
		f.agree1.focus();
	} else if(f.num.value==""){
		alert("Enter the characters you see");
		f.num.focus();
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
