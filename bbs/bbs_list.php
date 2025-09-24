<?
include $_SERVER['DOCUMENT_ROOT']."/lib/page_class.php";

$bbs_admin_stat		=	$db->object("cs_bbs", "where code='$code'");
if($lang==""){ $lang = $bbs_admin_stat->nation; }

if($lang==1){
	$title_no = "번호";
	$title_subject = "제목";
	$title_date = "등록일";
	$title_notice = "공지";
	$title_notice_head = "공지";
	$title_name = "작성자";
	$title_total = "TOTAL";
	$title_ea = "개";
	$title_view = "조회수";
	$title_content = "내용";
	$title_search = "검색어를 입력해 주세요.";
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

	$title_broad = "보도언론사";

	$title_category = "전체";
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

	$title_broad = "Press";

	$title_category = "Category";
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

	$title_broad = "按下按";

	$title_category = "类别";
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

	$title_broad = "プレス報道機関";
}

if($_GET['cate'])					{$cate				=	$db->filter($_GET['cate']);}
if($_GET['startPage'])			{$startPage		=	$db->filter($_GET['startPage']);}
if($_GET['search_item'])		{$search_item	=	$db->filter($_GET['search_item']);}
if($_GET['search_order'])	{$search_order	=	$db->filter($_GET['search_order']);}

$bbs_admin_stat		=	$db->object("cs_bbs", "where code='$code'");
if(!$bbs_admin_stat->idx) { $tools->errMsg($title_wrong);}
// 게시판 접근 권한 설정
if( $bbs_admin_stat->bbs_access == 1 ) {
	if( !$_SESSION['LEVEL'] ) { $tools->errMsg($title_login);}
}
?>
<script type="text/javascript">
$(document).ready(function  () {
	// FAQ Toggle
	$(".bbs-faq-list").each(function  () {
		var $faqItem = $(this).find(".faq-item");

		$faqItem.children("dt").click(function  () {
			var $faqCon = $(this).siblings();
			if ($faqCon.css("display") == "block") {
				$(this).siblings().slideUp();
				$(".faq-item").removeClass("open");
			}else {
				$(".faq-item > dd:visible").slideUp();
				$(".faq-item").removeClass("open");
				$(this).parent("dl").addClass("open");
				$faqCon.slideDown();	
			}
		});
	});
});
</script>
<!-----------------------------------------------------  게시판 리스트 시작 ------------------------------------------------------------------------------------------------------------------------------------->
<? if( $bbs_admin_stat->bbs_type==1 || $bbs_admin_stat->bbs_type==2) {?>

<?
	$table				= "cs_bbs_data";
	// 리스트갯수
	$listScale			=	10;
	// 페이지 갯수
	$pageScale		=	5;
	// 스타트 페이지
	if( !$startPage ) { $startPage = 0; }
	// 토탈페이지
	$totalPage = floor($startPage / ($listScale * $pageScale));
	
	// 쿼리문 
	$query = "select * from $table where code='$code' and lang='$lang' and notice < 1";
		if($cate){$query.=" and cate='$cate'";}

		if($search_order){
			if($search_item){
				$query.=" and $search_item like '%$search_order%'";
			}
		}

	$rs = mysqli_query($db2,$query);
	$totalList = mysqli_num_rows($rs);

	$query = "select * from $table where code='$code' and lang='$lang' and notice < 1";
		if($cate){$query.=" and cate='$cate'";}

		if($search_order){
			if($search_item){
				$query.=" and $search_item like '%$search_order%'";
			}
		}
	if($bbs_admin_stat->date_check==1){
		$query.="  order by ranking asc, reg_date desc, ref desc, re_step ASC LIMIT $startPage, $listScale";
	} else {
		$query.="  order by ranking asc, ref desc, re_step ASC LIMIT $startPage, $listScale";
	}
	$result = mysqli_query($db2,$query);

	// 페이지넘버
	if( $startPage ) { $listNo = $totalList - $startPage; } else { $listNo = $totalList; }

	include $_SERVER['DOCUMENT_ROOT']."/bbs/skin/notice/".$bbs_admin_stat->skin.".php";

?>


<!-- 답변형/공지사항형 종료 -->

<?} else if($bbs_admin_stat->bbs_type==3) {?>
<!-- 갤러리형 시작 -->
<?
	$table				= "cs_bbs_data";
	// 리스트갯수
	$listScale			=	$bbs_admin_stat->list_height;
	// 페이지 갯수
	$pageScale		=	5;
	// 스타트 페이지
	if( !$startPage ) { $startPage = 0; }
	// 토탈페이지
	$totalPage = floor($startPage / ($listScale * $pageScale));

	// 쿼리문 
	$query = "select * from $table where code='$code' and lang='$lang' and notice < 1";
	if($cate){$query.=" and cate='$cate'";}
		if($search_order){
			if($search_item){
				$query.=" and $search_item like '%$search_order%'";
			}
		}
	$rs = mysqli_query($db2,$query);
	$totalList = mysqli_num_rows($rs);

	$query = "select * from $table where code='$code' and lang='$lang' and notice < 1";
	if($cate){$query.=" and cate='$cate'";}
		if($search_order){
			if($search_item){
				$query.=" and $search_item like '%$search_order%'";
			}
		}
	if($bbs_admin_stat->date_check==1){
		$query.="  order by ranking asc, reg_date desc, ref desc, re_step ASC LIMIT $startPage, $listScale";
	} else {
		$query.="  order by ranking asc, ref desc, re_step ASC LIMIT $startPage, $listScale";
	}
	$result = mysqli_query($db2,$query);
	// 페이지넘버
	if( $startPage ) { $listNo = $totalList - $startPage; } else { $listNo = $totalList; }
	
	include $_SERVER['DOCUMENT_ROOT']."/bbs/skin/gallery/".$bbs_admin_stat->skin.".php";

?>
<!-- 갤러리형 종료 -->

<?} else if($bbs_admin_stat->bbs_type==4) {?>

<!-- FAQ형 시작 -->
	<?
	$table				= "cs_bbs_data";
	// 리스트갯수
	$listScale			=  10;
	// 페이지 갯수
	$pageScale		=	5;
	// 스타트 페이지
	if( !$startPage ) { $startPage = 0; }
	// 토탈페이지
	$totalPage = floor($startPage / ($listScale * $pageScale));

	$query = "select * from $table where code='$code' and lang='$lang'";
	if($cate){$query.=" and cate='$cate'";}

		if($search_order){
			if($search_item){
				$query.=" and $search_item like '%$search_order%'";
			}
		}

	$rs = mysqli_query($db2,$query);
	$totalList = mysqli_num_rows($rs);

	$query = "select * from $table where code='$code' and lang='$lang'";
	if($cate){$query.=" and cate='$cate'";}

		if($search_order){
			if($search_item){
				$query.=" and $search_item like '%$search_order%'";
			}
		}

	if($bbs_admin_stat->date_check==1){
		$query.="  order by ranking asc, reg_date desc, ref desc, re_step ASC LIMIT $startPage, $listScale";
	} else {
		$query.="  order by ranking asc, ref desc, re_step ASC LIMIT $startPage, $listScale";
	}
	$result = mysqli_query($db2,$query);

	// 페이지넘버
	if( $startPage ) { $listNo = $totalList - $startPage; } else { $listNo = $totalList; }

	include $_SERVER['DOCUMENT_ROOT']."/bbs/skin/faq/".$bbs_admin_stat->skin.".php";
?>

<? } ?>

	<? if($bbs_admin_stat->bbs_write!=9) {?>
	<div class="cm-btn-controls">
		<a href="<?=$_SERVER['PHP_SELF']?>?returnURL=<?=urlencode($_SERVER['REQUEST_URI'])?>&bgu=write" class="btn-style01">
			<?=$title_write?>
		</a>
	</div>
	<? } ?>
	
	 <!-- 
		paging 스타일 클래스
		no-margin(margin없는형태) / paging-style02(원형) / paging-style03(라인)
	-->

	<div class="paging">
		<? $page->bbs($totalPage, $totalList, $listScale, $pageScale, $startPage,$search_item,$search_order,$cate);?>
	</div>

	<? if($bbs_admin_stat->bbs_type!=4) {?>

	<div class="board-search-box">
		<form name="bbs_search_form" method="get" action="<?=$_SERVER['PHP_SELF'];?>">
			<div class="board-search-inner clearfix">
				<select name="search_item" class="search-subject-select  custom-select" placeholder="<?=$title_subject?>">
					<option value="subject" <?if($search_item=="subject"){?>selected<?}?>><?=$title_subject?></option>
					<option value="content" <?if($search_item=="content"){?>selected<?}?>><?=$title_content?></option>
				</select>
				<input placeholder="<?=$title_search?>" type="search" name="search_order" class="search-word" value="<?=$search_order?>">
				<button type="submit" class="bbs-search-btn" title="검색"><i class="xi-search"></i></button>
			</div>
		</form>
	</div>

	<?}?>

</article>