$(document).ready(function() {

	var options = {//로그인
		beforeSubmit:validateLogin,
		success:showResponseLogin
	};
	$('#login_form').ajaxForm(options);

});

function validateLogin(formData, jqForm, options) {//로그인
	var f = document.login_form;
	if (f.admin_userid.value==""){
		alert("아이디를 입력해 주세요.");
		f.admin_userid.focus();
		return false;
	}
		if (f.admin_passwd.value==""){
		alert("비밀번호를 입력해 주세요.");
		f.admin_passwd.focus();
		return false;
	}
}

function showResponseLogin(responseText, statusText, xhr, $form)  {//로그인
	var responseText = responseText.trim();
	if(responseText=='y'){
		location.href="./main.php"
	}else if(responseText=='n'){
		/*
		(".container-fluid").append("<div class='alert alert-danger col-md-4 col-md-offset-4 text-center'>아이디 또는 비밀번호가 맞지 않습니다.</div>");
		setTimeout( function(){ $(".alert-danger").remove(); },1500);
		*/
		alert("아이디 또는 비밀번호가 맞지 않습니다.");
	}
}