<?
if($_GET['bgu'])			{$bgu		=	$db->filter($_GET['bgu']);}
if($_GET['reWrite'])	{$reWrite	=	$db->filter($_GET['reWrite']);}

$bbs_admin_stat		=	$db->object("cs_bbs", "where code='$code'");
$lang = $bbs_admin_stat->nation;

if($lang==1){
	$title_no = "번호";
	$title_subject = "제목";
	$title_date = "등록일";
	$title_notice = "공지사항";
	$title_notice_head = "공지";
	$title_name = "작성자";
	$title_total = "TOTAL";
	$title_ea = "개";
	$title_view = "조회수";
	$title_content = "내용";
	$title_search = "검색어를 입력해주세요.";
	$title_no_list = "작성된 글이 없습니다.";
	$button_list = "목록";
	$title_wrong = "잘못된 접근입니다.";
	$title_login = "회원 전용입니다.로그인을 해주세요";
	$title_passx = "패스워드가 올바르지 않습니다.";
	$title_no_file = "첨부파일이 없습니다.";
	$title_file = "첨부파일";
	$title_delq = "게시글을 삭제하시겠습니까?";
	$title_edit = "수정";
	$title_del = "삭제";
	$title_list = "목록";
	$title_write = "글쓰기";

	$title_secret = "비밀글 설정";
	$title_pwd = "비밀번호";
	$title_pwd_cap = "글수정 및 삭제 시 필요합니다. 꼭! 기억해주세요.";
	$title_cap = '<span class="essential-icon">*</span> 표시는 필수 입력 항목입니다.';
	$title_pu = "공개";
	$title_pri = "비공개";
	$title_submit = "등록";
	$title_cancel = "취소";
	$title_req_1 = "제목을 입력해 주세요.";
	$title_req_2 = "작성자를 입력해 주세요.";
	$title_req_3 = "비밀번호를 입력해 주세요.";
	$title_req_4 = "내용을 입력해 주세요.";
	$title_err = "작성에 실패하였습니다.";
	$title_complete = "등록되었습니다.";

	$title_pass_msg = "해당글은 비밀글입니다. <br><b>글 작성 시 입력하신 비밀번호</b>를 입력해주세요.";
	$title_pwd_insert = "비밀번호 입력";
	$title_ok = "확인";
	$title_req_5 = "비밀번호를 입력해 주세요.";

	$title_state = "상태";
	$title_wait = "접수";
	$title_comp = "답변완료";
}else if($lang==2){
	$title_no = "No";
	$title_subject = "Subject";
	$title_date = "Date";
	$title_notice = "Notice";
	$title_notice_head = "Notice";
	$title_name = "Name";
	$title_total = "TOTAL";
	$title_ea = "EA";
	$title_view = "View";
	$title_content = "Content";
	$title_search = "Please enter your search term.";
	$title_no_list = "There is no written comment.";
	$button_list = "List";
	$title_wrong = "The wrong approach.";
	$title_login = "Members only.Please log in.";
	$title_passx = "The password is incorrect.";
	$title_no_file = "No attachments found.";
	$title_file = "Attach";
	$title_delq = "Are you sure you want to delete this post?";
	$title_edit = "Edit";
	$title_del = "Delete";
	$title_list = "List";
	$title_write = "Write";

	$title_secret = "Secret setting";
	$title_pwd = "password";
	$title_pwd_cap = "This is required when modifying or deleting posts. exactly! Please remember.";
	$title_cap = '<span class="essential-icon">*</span> Is a required field.';
	$title_pu = "Public";
	$title_pri = "Private";
	$title_submit = "Submit";
	$title_cancel = "Cancel";
	$title_req_1 = "Please enter the subject.";
	$title_req_2 = "Please enter the author.";
	$title_req_3 = "Please enter a password.";
	$title_req_4 = "Please enter your details.";
	$title_err = "Creation failed.";
	$title_complete = "Registered.";

	$title_pass_msg = "This article is a secret.<br><b>Please enter the password you entered when writing </b>.";
	$title_pwd_insert = "Enter Password";
	$title_ok = "Confirm";
	$title_req_5 = "Please enter a password.";

	$title_state = "State";
	$title_wait = "Receipt";
	$title_comp = "Answer completed";
}else if($lang==3){
	$title_no = "数";
	$title_subject = "主题";
	$title_date = "注册日期";
	$title_notice = "通知";
	$title_notice_head = "公告";
	$title_name = "作者";
	$title_total = "TOTAL";
	$title_ea = "数";
	$title_view = "查看";
	$title_content = "内容";
	$title_search = "请输入您的搜索字词。";
	$title_no_list = "没有书面评论。";
	$button_list = "名单";
	$title_wrong = "错误的做法。";
	$title_login = "仅限会员。请登录。";
	$title_passx = "密码不正确。";
	$title_no_file = "找不到附件。";
	$title_file = "附件";
	$title_delq = "您确定要删除此帖吗？";
	$title_edit = "水晶";
	$title_del = "删除";
	$title_list = "名单";
	$title_write = "写作";

	$title_secret = "秘密设置";
	$title_pwd = "密码";
	$title_pwd_cap = "修改或删除帖子时需要这样做。通过一切手段！ 请记住。";
	$title_cap = '<span class="essential-icon">*</span> 是必填字段。';
	$title_pu = "发布";
	$title_pri = "私人";
	$title_submit = "注册";
	$title_cancel = "取消";
	$title_req_1 = "제목을 입력해 주세요.";
	$title_req_2 = "请输入作者。";
	$title_req_3 = "请输入您的密码。";
	$title_req_4 = "请输入您的内容。";
	$title_err = "创作失败了。";
	$title_complete = "它已被注册。";

	$title_pass_msg = "这篇文章是个秘密。 <br>请输入您在写作时输入的密码。";
	$title_pwd_insert = "输入密码";
	$title_ok = "确认";
	$title_req_5 = "请输入您的密码。";
}else if($lang==4){
	$title_no = "番号";
	$title_subject = "タイトル";
	$title_date = "登録日";
	$title_notice = "お知らせ";
	$title_notice_head = "お知らせ";
	$title_name = "投稿者";
	$title_total = "TOTAL";
	$title_ea = "本";
	$title_view = "ヒット";
	$title_content = "内容";
	$title_search = "検索用語を入力してください。";
	$title_no_list = "作成された文がありません。";
	$button_list = "リスト";
	$title_wrong = "不適切なアプローチです。";
	$title_login = "会員専用です。ログインをしてください";
	$title_passx = "パスワードが正しくありません。";
	$title_no_file = "添付ファイルがありません。";
	$title_file = "添付ファイル";
	$title_delq = "スレッドを削除しますか?";
	$title_edit = "修正";
	$title_del = "削除";
	$title_list = "リスト";
	$title_write = "書き込み";

	$title_secret = "非公開文の設定";
	$title_pwd = "パスワード";
	$title_pwd_cap = "記事の修正や削除時に必要です。是非！記憶ください。";
	$title_cap = '<span class="essential-icon">*</span> 印は必須入力項目です。';
	$title_pu = "公開";
	$title_pri = "プライベート";
	$title_submit = "登録";
	$title_cancel = "キャンセル";
	$title_req_1 = "タイトルを入力してください。";
	$title_req_2 = "作成者を入力してください。";
	$title_req_3 = "パスワードを入力してください。";
	$title_req_4 = "内容を入力してください。";
	$title_err = "作成に失敗しました。";
	$title_complete = "登録されてい.";

	$title_pass_msg = "この記事は非公開文です。<br><b>記事作成時に入力されたパスワード</b>を入力してください。";
	$title_pwd_insert = "パスワード入力";
	$title_ok = "確認";
	$title_req_5 = "パスワードを入力してください。";
}

$bbs_admin_stat		=	$db->object("cs_bbs", "where code='$code'");
if(!$bbs_admin_stat->idx) { $tools->errMsg($title_wrong);}

// 게시판 접근 권한 설정
if( $bbs_admin_stat->bbs_access == 1 ) {
	if( !$_SESSION['LEVEL'] ) { $tools->errMsg($title_login);}
}
if( $bbs_admin_stat->bbs_write >= 1 ) {
	if( !$_SESSION['LEVEL'] ) { $tools->errMsg($title_login);}
}

if( $reWrite ) {
  	$view_row		= $db->object("cs_bbs_data", "where idx='$idx'");
	$subject			= $db->stripSlash($view_row->subject);
	$subject2			= "[답글] ".$db->stripSlash($view_row->subject);
	$content			= $db->stripSlash($view_row->content);
	$re_content		= "$view_row->name 님 쓰신글\n\n"."제목 : ".$view_row->subject."\n".$content."<br><br>"."[답변] ";
}

//스팸차단
if($bbs_admin_stat->nospam==1){
	include $_SERVER['DOCUMENT_ROOT']."/nospam.php";
}

if($bbs_admin_stat->editor==1){
// 에디터 스크립트
include $_SERVER['DOCUMENT_ROOT']."/webeditor/webeditor_script.php";
}
?>
<form name="tx_editor_form" id="tx_editor_form" action="/bbs/bbs_write_ok.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="code" value="<?=$code;?>">
<input type="hidden" name="ref" value="<?=$view_row->ref;?>">
<input type="hidden" name="re_step" value="<?=$view_row->re_step;?>">
<input type="hidden" name="re_level" value="<?=$view_row->re_level;?>">
<input type="hidden" name="returnURL" value="<?=$_SERVER['PHP_SELF']?>">
<input type="hidden" name="lang" value="<?=$lang?>">

<section class="bbs-write-con">
	<article class="bbs-write-tbl-box">
		<p class="inquiry-essential-txt"><?=$title_cap?></p>
		<table class="bbs-write-tbl">
		<caption>글 작성하는 리스트입니다.</caption>
		<colgroup>
		<col style="width:20%;">
		<col>
		</colgroup>
		<tbody>
		<tr>
			<th scope="row"><span class="essential-icon">*</span> <?=$title_subject?></th>
			<td><input type="text" class="write-input" autofocus="" name="subject" value="<?=$subject2?>"></td>
		</tr>
		<tr>
			<th scope="row"><span class="essential-icon">*</span> <?=$title_name?></th>
			<td>
				<?if($_SESSION['USERID']==""){?>
				<input type="text" class="write-input" name="name">
				<?}else{?>
				<fieldset>
					<span><?=$_SESSION['NAME']?></span>
					<input type="hidden" name="name" value="<?=$_SESSION['NAME']?>"/>
				</fieldset>
				<?}?>
			</td>
		</tr>

		<? if($bbs_admin_stat->bbs_secret==1){ ?>
		<tr>
			<th scope="row"><span class="essential-icon">*</span> <?=$title_secret?></th>
			<td>
				<fieldset class="input-check">
					<span><input type="radio" name="secret" id="radio1" value=""><label for="radio1">&nbsp;<?=$title_pu?></label></span>
					<span><input type="radio" name="secret" id="radio2" value="y" checked><label for="radio2">&nbsp;<?=$title_pri?></label></span>
				</fieldset>
			</td>
		</tr>
		<?}?>

		<? if($_SESSION['USERID']==""){ ?>
			<tr>
				<th scope="row"><span class="essential-icon">*</span><?=$title_pwd?></th>
				<td>
					<input type="password" class="write-input" name="pwd">
					<span class="write-sub-txt"><?=$title_pwd_cap?></span>
				</td>
			</tr>
		<?}?>

		<tr>
			<!-- <th scope="row">내용</th> -->
			<td colspan="2">
				<? if($bbs_admin_stat->editor==1){ ?>
					<textarea id="contents_source" style="display:none;"><?=$re_content;?></textarea>
					<?include $_SERVER['DOCUMENT_ROOT']."/webeditor/webeditor_area.php";?>
				<? } else { ?>
					<textarea name="content" class="write-textarea"></textarea>
				<? } ?>
			</td>
		</tr>

		<? if( $bbs_admin_stat->bbs_pds ) { ?>
			<? if($bbs_admin_stat->bbs_pds_ea==1){ ?>
			<tr>
				<th scope="row"><?=$title_file?></th>
				<td><input type="file" name="bbs_file" class="write-input"></td>
			</tr>
			<?}else{?>
				<?for($i=1;$i<=$bbs_admin_stat->bbs_pds_ea;$i++){?>
					<?if($i==1){?>
						<tr>
							<th scope="row"><?=$title_file?> #1</th>
							<td><input type="file" name="bbs_file" class="write-input"></td>
						</tr>
					<?}else{?>
						<tr>
							<th><?=$title_file?> #<?=$i?></th>
							<td><input type="file" name="bbs_file<?=$i?>" class="write-input"/></td>
						</tr>
					<?}?>
				<?}?>
			<?}?>
		<?}?>
        </tbody>
        </table>

    </article>

	<div class="cm-btn-controls">
		<button type="button" class="btn-style01" <?if($bbs_admin_stat->editor==1){?>
			onclick="Editor.save();"
		<?}else{?>
			onclick="writeSendit();"
		<?}?>>
			<?=$title_submit?>
		</button>
		<a href="<?=$returnURL?>" class="btn-style02">
			<?=$title_cancel?>
		</a>
	</div>

    </section>
</form>


<? if($bbs_admin_stat->editor==1){ ?>
<script src="<?=$site_host?>/webeditor/webeditor_config.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	<!--
	function validForm(editor) {
		var validator = new Trex.Validator();
		var content = editor.getContent();

		if (document.tx_editor_form.subject.value =="") {
			alert('<?=$title_req_1?>');
			document.tx_editor_form.subject.focus();
			return false;
		}

		if (document.tx_editor_form.name.value == '') {
			alert('<?=$title_req_2?>');
			document.tx_editor_form.name.focus();
			return false;
		}

		<? if($_SESSION['USERID']==""){ ?>
		if (document.tx_editor_form.pwd.value == '') {
			alert('<?=$title_req_3?>');
			document.tx_editor_form.pwd.focus();
			return false;
		}
		<? } ?>

		if (!validator.exists(content)) {
			alert('<?=$title_req_4?>');
			return false;
		}

		return true;
	}
	//-->
</script>
<?}else{?>
	<script language="javascript">
	<!--
	function writeSendit() {
		var f=document.tx_editor_form;
		if(f.subject.value=="") {
			alert("제목을 입력해 주십시오.");
			f.subject.focus();

		} else if( f.name.value=="") {
			alert("이름을 입력해 주십시오.");
			f.name.focus();

		<? if($_SESSION['USERID']==""){ ?>
		} else if( f.pwd.value=="") {
			alert("패스워드를 입력해 주십시오.");
			f.pwd.focus();
		<? } ?>

		} else {
			f.submit();
		}
	}
	//-->
	</script>
<?}?>