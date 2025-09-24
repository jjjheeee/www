<?
$mod	= "banner";	
$menu	= "popup";
include ("../header.php");
include($ROOT_DIR.'/lib/style_class.php');
include $_SERVER['DOCUMENT_ROOT']."/webeditor/webeditor_script.php";
?>

	<h4 class="page-header">팝업배너(등록)</h4>

	<form name="tx_editor_form" id="tx_editor_form" action="popup_add_ok.php" method="post" enctype="multipart/form-data">
	<table class="table table-bordered">
	<colgroup>
	<col width="15%">
	<col width="*">
	</colgroup>
	<tbody>
	<tr>
		<th>언어설정</th>
		<td>
			<label class="radio-inline"><input type="radio" name="lang" value="1" checked>국문</label>
			<label class="radio-inline"><input type="radio" name="lang" value="2">영문</label>
		</td>
	</tr>
	<tr>
		<th>팝업종류</th>
		<td>
			<label class="radio-inline"><input type="radio" name="kind" value="0" checked onClick="popupReg()">팝업</label>
			<label class="radio-inline"><input type="radio" name="kind" value="1" onClick="popupReg()">레이어</label>
			<label class="radio-inline" style="display:none;"><input type="radio" name="kind" value="2" onClick="popupReg()">모바일</label>
			<p class="popup-txt" style="margin:7px 0 0 0;"><small>※  브라우저의 팝업이 차단되어있을 경우, 팝업 차단을 해제해야합니다.</small> </p>
		</td>
	</tr>
	<tr>
		<th>형태선택</th>
		<td>
			<label class="radio-inline"><input type="radio" name="display" value="0" checked onClick="popupReg2()">HTML</label>
			<label class="radio-inline"><input type="radio" name="display" value="1" onClick="popupReg2()">이미지(1개)</label>
			<label class="radio-inline"><input type="radio" name="display" value="2" onClick="popupReg2()">이미지(5개 슬라이드 기능)</label>
		</td>
	</tr>
	<tr>
		<th>기간설정</th>
		<td>
			<table border="0" cellpadding="0" cellspacing="0">
			<tbody>
			<tr>
				<td>
					<div class="input-group datetime">
						<input type="text" name="start_day" class="form-control input-sm text-center">
						<span class="input-group-addon">
							<span class="glyphicon-calendar glyphicon"></span>
						</span>
					</div>		
				</td>
				<td>&nbsp;~&nbsp;</td>
				<td>
					<div class="input-group datetime">
						<input type="text" name="end_day" class="form-control input-sm text-center">
						<span class="input-group-addon">
							<span class="glyphicon-calendar glyphicon"></span>
						</span>
					</div>			
				</td>
			</tr>
			</tbody>
			</table>
		</td>
	</tr>
	<tr class="popup_view" name="popup_size" id="popup_size">
		<th>팝업크기</th>
		<td>
			가로 <input name="width" type="text" class="form-control2 input-sm text-right" size="5">&nbsp;픽셀,&nbsp;
			세로 <input name="height" type="text" class="form-control2 input-sm text-right" size="5">&nbsp;픽셀 
		</td>
	</tr>
	<tr class="popup_view">
		<th>팝업 위치 기준설정</th>
		<td>
			<label class="radio-inline"><input type="radio" name="position" value="0" onClick="popup_position(this.value);" checked>왼쪽</label>
			<label class="radio-inline"><input type="radio" name="position" value="1" onClick="popup_position(this.value);">오른쪽</label>
		</td>
	</tr>
	<tr class="popup_view2" id="popup_position_left">
		<th>팝업 표시 위치</th>
		<td>
			화면 위로부터 <input name="tops" type="text"  class="form-control2 input-sm text-right" size="5">&nbsp;픽셀,&nbsp;
			왼쪽부터 <input name="lefts" type="text"  class="form-control2 input-sm text-right" size="5">&nbsp;픽셀에서 노출
		</td>
	</tr>
	<tr class="popup_view2" id="popup_position_right" style="display:none;">
		<th>팝업 표시 위치</th>
		<td>
			화면 위로부터 <input name="tops_right" type="text"  class="form-control2 input-sm text-right" size="5">&nbsp;픽셀,&nbsp;
			오른쪽부터 <input name="lefts_right" type="text"  class="form-control2 input-sm text-right" size="5">&nbsp;픽셀에서 노출
		</td>
	</tr>
	<tr>
		<th>제 목</th>
		<td><input name="title_bar" type="text" class="form-control input-sm"></td>
	</tr>
	<tr>
		<th>창닫기 방법</th>
		<td>
			<label class="radio-inline"><input type="radio" name="live" value="0" checked>오늘 하루 열지 않음</label>&nbsp;
			<label class="radio-inline"><input type="radio" name="live" value="1">다시 열지 않음</label>
		</td>
	</tr>
	<tr class="popup_images" style="display:none;">
		<th>URL</th>
		<td><input name="link_url" type="text" class="form-control input-sm" style="display:inline-block; width:calc(100% - 100px);">
		<p class="popup_images" style="display:none; margin:7px 0 0 0;"><small>※ URL 을 입력하시면 이미지를 클릭할 경우 해당페이지로 이동합니다. </small></p>
		</td>
	</tr>
	<tr class="popup_images" style="display:none;">
		<th>이미지<br><small>[권장사이즈 : 가로 600px 이하]</small></th>
		<td>
			<input name="popup_images" type="file" >
			<span class="popup_mobile" style="display:none;">[ 권장사이즈 : 640 x 680 ]</span>
		</td>
	</tr>
	<tr class="popup_images" style="display:none;" >
		<th>이미지(Mobile)<br><small>[권장사이즈 : 가로 600px 이하]</small></th>
		<td>
			<input name="popup_images2" type="file" >
			<span class="popup_mobile" style="display:none;">[ 권장사이즈 : 640 x 680 ]</span>
		</td>
	</tr>
	<tr class="popup_html" style="display:;">
		<td colspan="2">
			<textarea id="contents_source" style="display:none;"></textarea>
			<?include $_SERVER['DOCUMENT_ROOT']."/webeditor/webeditor_area.php";?>
		</td>
	</tr>
	<tr class="popup_images2" style="display:none;">
		<th>이미지(5개 슬라이드 기능)</th>
		<td>
			<style type="text/css">
				.slide-img-add{border:1px solid #eee; padding:15px 10px; margin-bottom:10px; line-height:2;}
				.slide-img-add > strong{display:block; font-size:14px; color:#000; font-weight:600;}
			</style>
			<p class="slide-caution">※ 이미지의 사이즈를 모두 동일하게 등록해주세요.</p>
			<div class="slide-img-add">
				<strong>* 이미지1 : </strong><input name="bbs_file" type="file" >
				링크주소1 : <input name="link_url1" type="text" class="form-control input-sm">
			</div>
			<div class="slide-img-add">
				<strong>* 이미지2 : </strong><input name="bbs_file2" type="file" >
				링크주소2 : <input name="link_url2" type="text" class="form-control input-sm">
			</div>
			<div class="slide-img-add">
				<strong>* 이미지3 : </strong><input name="bbs_file3" type="file" >
				링크주소3 : <input name="link_url3" type="text" class="form-control input-sm">
			</div>
			<div class="slide-img-add">
				<strong>* 이미지4 : </strong><input name="bbs_file4" type="file" >
				링크주소4 : <input name="link_url4" type="text" class="form-control input-sm">
			</div>
			<div class="slide-img-add">
				<strong>* 이미지5 : </strong><input name="bbs_file5" type="file" >
				링크주소5 : <input name="link_url5" type="text" class="form-control input-sm">
			</div>
		</td>
	</tr>
	</tbody>
	</table>
	</form>

	
	
	<table class="table">
		<tr>
			<td class="text-center">
				<button type="button" class="btn btn-primary" onClick="Editor.save();">등록</button>
				<a href="./popup.php" class="btn btn-default">목록</a>
			</td>
		</tr>
	</table>


<script src="/webeditor/webeditor_config.js" type="text/javascript" charset="utf-8"></script>
<script language="JavaScript">
<!--
popupReg();
/*팝업 종류*/

function popup_position(value){

	if(value==0){//팝업표시위치 기준(왼쪽)
		document.getElementById("popup_position_left").style.display="";
		document.getElementById("popup_position_right").style.display="none";
	} else if(value==1){//팝업표시위치 기준(오른쪽)
		document.getElementById("popup_position_left").style.display="none";
		document.getElementById("popup_position_right").style.display="";
	}

}


function popupReg(){
	var form=document.tx_editor_form;
	if( form.kind[2].checked ) {
		$(".popup_view").css("display","none");
		$(".popup_mobile").css("display","");
		form.display[1].checked = true;
		form.display[0].disabled= true;
		popupReg2();		
	}else{
		form.display[0].disabled= false;
		$(".popup_view").css("display","");
		$(".popup_mobile").css("display","none");
		popupReg2();
	}

	if( form.kind[0].checked ) {
		$(".popup-txt").show();
		
	}else {
		$(".popup-txt").hide();
	}

}
/*형태 선택*/
function popupReg2() {
	var form=document.tx_editor_form;
	if( form.display[0].checked ) {
		$(".popup_html").css("display","");
		$(".popup_images").css("display","none");
		$(".popup_images2").css("display","none");
	} else if( form.display[1].checked ) {
		$(".popup_html").css("display","none");
		$(".popup_images").css("display","");		
		$(".popup_images2").css("display","none");
	} else if( form.display[2].checked ) {
		$(".popup_html").css("display","none");
		$(".popup_images").css("display","none");		
		$(".popup_images2").css("display","");
	}

	if(form.kind[1].checked && form.display[2].checked){
		document.getElementById("popup_size").style.display="";
	} else if(form.kind[1].checked && (form.display[0].checked || form.display[1].checked)){
		document.getElementById("popup_size").style.display="none";
	} else if(form.kind[0].checked){
		document.getElementById("popup_size").style.display="";
	}
}

/*폼체크*/	
function validForm(editor) {
	var validator = new Trex.Validator();
	var content = editor.getContent();

		if (document.tx_editor_form.start_day.value == '') {
			alert('기간설정 [시작일]을 선택해 주세요.');
			document.tx_editor_form.start_day.focus();
			return false;
		}
		if (document.tx_editor_form.end_day.value == '') {
			alert('기간설정 [시작일]을 선택해 주세요.');
			document.tx_editor_form.end_day.focus();
			return false;
		}

		if(document.tx_editor_form.kind[0].checked==true || (document.tx_editor_form.kind[1].checked==true && document.tx_editor_form.display[2].checked==true)){
			if (document.tx_editor_form.width.value == '' && document.tx_editor_form.kind[2].checked==false) {
				alert('팝업창 사이즈[가로]를 입력해 주세요.');
				document.tx_editor_form.width.focus();
				return false;
			}
			if (document.tx_editor_form.height.value == '' && document.tx_editor_form.kind[2].checked==false) {
				alert('팝업창 사이즈[세로]를 입력해 주세요.');
				document.tx_editor_form.height.focus();
				return false;
			}
		}
		if (document.tx_editor_form.title_bar.value == '') {
			alert('팝업 제목을 입력해 주세요.');
			document.tx_editor_form.title_bar.focus();
			return false;
		}
		
		/*
		if (!validator.exists(content)) {
			$("#contents_validate").html('내용을 입력해주세요.');
			Editor.focus();
			return false;
		}
		*/
	return true;
}
//-->
</script>


<? include('../footer.php');?>