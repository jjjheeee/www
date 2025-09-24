<? session_start();
$page_num = "05";
$sub_num = "03";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "customer";
$sub_section = "inquiry";
$page_info = "CS Center";
$sub_info = "Inquiry";
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
		<h3 class="inquiry-content-tit"><!-- Product  --><span class="point">Inquiry</span></h3>

<form action="./inquiry_ok.php" name="form" method="post" enctype="multipart/form-data">
<input type="hidden" name="cate" value="<?=$cate?>">

		<article class="inquiry-wrapper">
			<ul>
				<li>
					<strong class="inquiry-tit"><em>Country</em><span class="essential-icon">*</span></strong>
					<input class="write-input" name="country" type="text" placeholder="Please fill in your country’s name">
				</li>
				<li>
					<strong class="inquiry-tit"><em>Affiliation</em><span class="essential-icon">*</span></strong>
					<input class="write-input" name="affi" type="text" placeholder="Please fill in your affiliation’s name">
				</li>
				<li>
					<strong class="inquiry-tit"><em>Name</em><span class="essential-icon">*</span></strong>
					<input class="write-input" name="name" type="text" placeholder="Please fill in your name">
				</li>
				<li>
					<strong class="inquiry-tit"><em>E-mail</em><span class="essential-icon">*</span></strong>
					<fieldset class="email-fieldset">
						<input type="text" class="write-input" name="email1"> <span class="hypen">@</span>
						<input type="text" class="write-input" name="email2">
						<select name="email3" class="inquiry-select" onchange="res();">
							<option value="b">Select</option>
							<option value="a">Direct</option>
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
					<strong class="inquiry-tit"><em>Phone</em></strong>
					<fieldset class="phone-fieldset">
						<select name="phone1" class="inquiry-select">
							<option value="">Select</option>
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
					<strong class="inquiry-tit"><em>File Attachment</em></strong>
					 <div class="file-custom-box clearfix"> 
					    <label for="fileOpenButton"><em>Attach File</em><i class="xi-file-add"></i></label> 
					    <input type="file" id="fileOpenButton" class="upload-hidden" name="bbs_file"> 
					    <input class="upload-name" value="Available file type : jpg, jpeg, mp4, bmp" disabled="disabled"> 
					 </div>
					 <p class="file-custom-txt">Please attach photo/video for more accurate technical problem assessment.</p>
				</li>
			</ul>
			<ul>
				<li>
					<strong class="inquiry-tit"><em>Types of Inquiry</em><span class="essential-icon">*</span></strong>
					<select class="inquiry-select" name="inquiry">
						<option value="">Select</option>
						<option value="Lab Equipment (International)">Lab Equipment (International)</option>
						<option value="Lab Equipment (Korea)">Lab Equipment (Korea)</option>
						<option value="Validation (Korea only)" <? if($cate==2){ ?>selected<? } ?>>Validation (Korea only)</option>
						<option value="Stem Cell Business">Stem Cell Business</option>
					</select>
				</li>
				<li>
					<strong class="inquiry-tit"><em>Classify</em><span class="essential-icon">*</span></strong>
					<div class="classify-select-list">
						<div class="classify-select inquiry-check-stl">
							<input type="radio" id="classify1" name="classify" value="End-user">
							<label for="classify1"><em>End-user</em></label>
						</div>
						<div class="classify-select inquiry-check-stl">
							<input type="radio" id="classify2" name="classify" value="Distributor">
							<label for="classify2"><em>Distributor</em></label>
						</div>
					</div>
				</li>
				<li>
					<strong class="inquiry-tit"><em>Model No / Serial Number</em></strong>
					<input class="write-input" name="modelno" type="text" placeholder="Please fill in your product lot / serial number">
				</li>
				<li>
					<strong class="inquiry-tit"><em>Your Message</em><span class="essential-icon">*</span></strong>
					<textarea name="content" class="write-textarea" placeholder="Please provide us as much detail as possible regarding your technical problems or information."></textarea>
					<div class="agree-check-box inquiry-check-stl">
						<input type="checkbox" id="contactAgree" name="agree1">
						<label for="contactAgree">
							I agree with
						</label>
						<a href="<?=$site_url?>/etc/privacy.php" class="cm-modal-open-btn agree-click">privacy policy <i class="xi-external-link"></i></a>
					</div>
				</li>
				<? include $_SERVER['DOCUMENT_ROOT']."/bbs/nospam.php"; ?>
				<li class="anti-spam-con">
					<div>
						<em>Anti-spam characters</em>
						<span class="num"><?=$num4?></span>
						<span class="num"><?=$num3?></span>
						<span class="num"><?=$num2?></span>
						<span class="num"><?=$num1?></span>
					</div>
					<input class="write-input" name="num" type="text" placeholder="Enter the characters you see">
				</li>
			</ul>
		</article>
		<a href="#none" onclick="sendit();" class="inquiry-btn">SUBMIT</a>
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
