<?
$mod	= "basic";	
$menu	= "email_setup";
include('../../header.php'); 

//에디터 스크립트
include $_SERVER['DOCUMENT_ROOT']."/webeditor/webeditor_script.php";

?>	

	<h4 class="page-header">메일전송 </h4>

	
	
	<form name="tx_editor_form" id="tx_editor_form" action="email_ok.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="returnURL" value="<?=$_SERVER["REQUEST_URI"]; ?>">

	<h5 class="page-header"><i class="glyphicon glyphicon-check"></i> 메일 카테고리</h5>
	<table class="table table-bordered">
	<tr>
		<th><input type="radio" name="kind" id="kind" value="1" > 전체전송</input></th>
		<td></td>
	</tr>
	<tr>
		<th><input type="radio" name="kind" id="kind" value="2" > 직접입력</input></th>
		<td> 
	    <input type="text" name="kind2" id="kind2" class="form-control"></input>
		</td>
	</tr>
	<tr>
		<th><input type="radio" name="kind" id="kind" value="3" > 회원레벨</input></th>
		<td> 
	    <select name="level" class="form-control input-sm" >
			<option value="1">일반회원</option>
			<option value="2">특별회원</option>
		</select>
		</td>
	</tr>
	<tr>
		<th><input type="radio" name="kind" id="kind" value="4" > 회원선택</input></th>
		<td> 
	    <select name="member"  class="form-control input-sm" >
		<?
		$mem_rs = $db->select("cs_member","");
		while($mem_row = mysqli_fetch_object($mem_rs)){
		?>
			<option value="<?=$mem_row->idx?>"><?=$mem_row->userid?> (<?=$mem_row->name?>)</option>
			<?}?>
		</select>
		</td>
	</tr>
	</table><br>



	<h5 class="page-header"><i class="glyphicon glyphicon-check"></i> 본문내용</h5>
	<table class="table table-bordered">
	
		<tr>
			<th>보내는사람 이름</th>
			<td><input type="text" name="name" class="form-control" value="<?=$admin_stat->shop_name?>"></input></td>
		</tr>
		<tr>
			<th>보내는사람 이메일</th>
			<td><input type="text" name="email" class="form-control" value="<?=$admin_stat->shop_email?>"></input></td>
		</tr>
		<tr>
			<th>메일제목</th>
			<td><input type="text" name="subject" class="form-control"></input></td>
		</tr>
		<tr>
			<th>메일내용</th>
			<td>
				<textarea id="contents_source" style="display:none;"></textarea>
				<?include $_SERVER['DOCUMENT_ROOT']."/webeditor/webeditor_area.php";?>
			</td>
		</tr>
	</table>
	</form>

	<table class="table">
		<tr>
			<td class="text-center"><button type="button" class="btn btn-primary" onClick="Editor.save();">이메일전송</button></td>
		</tr>
	</table>


<script src="/webeditor/webeditor_config.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
<!--

function validForm(editor) {
	var validator = new Trex.Validator();
	var content = editor.getContent();
	
	if (document.tx_editor_form.kind[0].checked==false && document.tx_editor_form.kind[1].checked==false && document.tx_editor_form.kind[2].checked==false && document.tx_editor_form.kind[3].checked==false) {
		alert('메일전송 카테고리를 선택해주세요.');
		document.tx_editor_form.lang.focus();
		return false;
	}

	if (document.tx_editor_form.kind[1].checked==true && document.tx_editor_form.kind2.value=="") {
		alert('받는사람 이메일을 선택해주세요.');
		document.tx_editor_form.kind2.focus();
		return false;
	}

	if (document.tx_editor_form.name.value =="") {
		alert('보내는사람 이름을 입력해주세요.');
		document.tx_editor_form.name.focus();
		return false;
	}

	if (document.tx_editor_form.email.value =="") {
		alert('보내는사람 이메일을 입력해주세요.');
		document.tx_editor_form.email.focus();
		return false;
	}

	if (document.tx_editor_form.subject.value =="") {
		alert('제목을 입력해주세요.');
		document.tx_editor_form.subject.focus();
		return false;
	}
	
	if (!validator.exists(content)) {
		$("#contents_validate").html('내용을 입력해주세요.');
		Editor.focus();
		return false;
	}
	
	return true;
}

//-->
</script>


<? include('../footer.php');?>