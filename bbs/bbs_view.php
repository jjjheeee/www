<?
if($_GET['idx']){
	$idx = $db->filter($_GET['idx']);
}
if($_GET['bgu']){
	$bgu = $db->filter($_GET['bgu']);
}
if($_POST['pwd']){
	$pwd = $db->filter($_POST['pwd']);
}
if($_POST['bbs_view_secr']){
	$bbs_view_secr = $db->filter($_POST['bbs_view_secr']);
}

$bbs_admin_stat		=	$db->object("cs_bbs", "where code='$code'");
if($lang==""){ $lang = $bbs_admin_stat->nation; }

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
//게시판환경
$bbs_admin_stat	= $db->object("cs_bbs", "where code='$code'", "bbs_pds, header, footer, bbs_secret");
//게시판정보
$bbs_stat	= $db->object("cs_bbs_data", "where code='$code' and idx='$idx'");
if(!$bbs_stat->idx) { $tools->errMsg($title_wrong);}

// 수정 정보 체크
if( $bbs_view_secr ) {

	$pwd = $tools->openssl($pwd);

	if($bbs_stat->re_level >=1){

		$query="select * from cs_bbs_data where code='$code' and ref='$bbs_stat->ref' and re_level=0 order by idx asc";
		$rs = mysqli_query($db2,$query);
		$row = mysqli_fetch_array($rs);

		if( $bbs_stat->pwd  != $pwd) {
			if($row['pwd']!= $pwd){
				$tools->errMsg($title_passx);
			}
		}

	} else {

		if( $bbs_stat->pwd  != $pwd) {
			$tools->errMsg($title_passx);
		}

	}
}else{
	//비밀글체크
	if($bbs_stat->secret=="y"){
		if($_SESSION['USERID'] && $_SESSION['USERID']==$bbs_stat->userid){
			//pass
		}else{
			if($bbs_stat->pwd != $pwd){
				$tools->errMsg($title_passx);
			}
		}
	}
}


	$db->update("cs_bbs_data", "read_cnt=read_cnt+1 where idx='$idx'");
	$bbs_stat			= $db->object("cs_bbs_data", "where idx='$idx'");
	$bbs_admin_stat	= $db->object("cs_bbs", "where code='$bbs_stat->code'");

	// 게시판 접근 권한 설정
	if( $bbs_admin_stat->bbs_read == 1 ) {
		if( !$_SESSION['LEVEL'] ) { $tools->errMsg($title_login);}
	}

	$name			= $bbs_stat->name;
	$email			= $bbs_stat->email;
	$reg_date		= $tools->strDateCut($bbs_stat->reg_date, 3);
	$subject		= $bbs_stat->subject;
	$read_cnt		= $bbs_stat->read_cnt;

	// 내용 출력 방식

	if($bbs_admin_stat->editor==1){
		$content = $bbs_stat->content;
		/*
		$content = str_replace("<P>","",$content);
		$content = str_replace("</P>","<br/>",$content);
		$content = str_replace("<p>","",$content);
		$content = str_replace("</p>","<br/>",$content);
		*/
		$content = $tools->strHtml($content);
	} else {
		$content = nl2br($tools->strHtmlNoBr($bbs_stat->content));
	}
?>
<article class="bbs-view-con">
	<aside class="bbs-view-top">
		<!-- 필요할 경우만 삽입 -->
		<!-- <dl class="event-date"><dt><i class="material-icons">&#xE878;</i> 이벤트기간</dt><dd>2017-07-14 ~ 2017-07-31</dd></dl> -->
		<!-- <p class="reply-state"><span>답변대기</span></p><p class="reply-state reply-state-finish"><span>답변완료</span></p> -->
		<!-- <span class="bbs-category">[카테고리 있을때 쓰세요]</span> -->
		<!-- // -->
		<h1 class="bbs-tit"><?=$db->stripSlash($subject);?></h1>
		<dl class="bbs-write-info">
			<dt><?=$title_name?></dt>
			<dd><?=$name?></dd>
			<dt><?=$title_date?></dt>
			<dd><?=$reg_date?></dd>
			<dt><?=$title_view?></dt>
			<dd><?=number_format($read_cnt)?></dd>
		</dl>
	</aside>
	<div class="bbs-view-content editor">
		<?=$content;?>
	</div>

	<!-- 
		게시판 공유 기능
		( ※ 필요한경우에만 넣으세요(sns공유) )
		아이콘 안나올시 : <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">	
	-->
	<!-- <div class="bbs-view-share-con">
		<ul>
			<li style="background-color:#777;"><a href="" title="URL 복사"><i class="xi-link"></i></a></li>
			<li style="background-color:#3b5998;"><a href="" title="페이스북으로 공유하기"><i class="xi-facebook"></i></a></li>
			<li style="background-color:#11c1ff;"><a href="" title="트위터로 공유하기"><i class="xi-twitter"></i></a></li>
			<li style="background-color:#fab900;"><a href="" title="카카오스토리로 공유하기"><i class="xi-kakaostory"></i></a></li>
			<li style="background-color:#00c300;"><a href="" title="블로그로 공유하기"><i class="xi-blogger"></i></a></li>
			<li style="background-color:#dc4e41;"><a href="" title="구글에 공유하기"><i class="xi-google-plus"></i></a></li>
		</ul>
	</div> -->


	<?
	if( $bbs_admin_stat->bbs_pds)  {
	?>
	<? if($bbs_stat->sbbs_file=="" and $bbs_stat->sbbs_file2=="" and $bbs_stat->sbbs_file3=="" and $bbs_stat->sbbs_file4=="" and $bbs_stat->sbbs_file5==""){ } else { ?>
	<aside class="bbs-view-file-info-box">
		<?
		for($i=1;$i<=$bbs_admin_stat->bbs_pds_ea;$i++){
			if($i==1){ $bbsf = $bbs_stat->sbbs_file;}
			if($i==2){ $bbsf = $bbs_stat->sbbs_file2;}
			if($i==3){ $bbsf = $bbs_stat->sbbs_file3;}
			if($i==4){ $bbsf = $bbs_stat->sbbs_file4;}
			if($i==5){ $bbsf = $bbs_stat->sbbs_file5;}
		?>
		<dl class="bbs-file-list">
			<dt>
				<?=$title_file?>
				<?if($bbs_admin_stat->bbs_pds_ea>1){
					echo " #".$i;
				}?>
			</dt>
			<dd>
				<?if($bbsf){?>
					<a href="<?=$site_host?>/bbs/bbs_download.php?idx=<?=$bbs_stat->idx?>&download=<?=$i?>">
						<?=$bbsf?>
					</a>
				<?}else{?>
					<?=$title_no_file?>
				<?}?>
			</dd>
		</dl>

		<?}?>
	</aside>
	<? } ?>
	<?
	}
	?>

	<form method="post" action="" name="form2">
	<input type="hidden" name="code" value="<?=$code;?>">
	<input type="hidden" name="bbs_view_del" value="1">
	<input type="hidden" name="bbs_view_edit" value="1">
	<input type="hidden" name="returnURL" value="<?=$_SERVER['PHP_SELF']?>">
	</form>

	<div class="cm-btn-controls">
		<? if($bbs_admin_stat->bbs_write!=9) {?>
		<div class="left-btn-controls">
			<? if($_SESSION['USERID']){ ?>
				<? if($_SESSION['USERID']==$bbs_stat->userid){ ?>
					<button type="button" class="btn-style02" onClick="modi();">
						<?=$title_edit?>
					</button>
					<button type="button" class="btn-style03" onClick="dele();">
						<?=$title_del?>
					</button>
				<?}?>
			<? } else { ?>
			<?if($returnURL==""){ $returnURL=$_SERVER['PHP_SELF'];}?>
				<a href="<?=$_SERVER['PHP_SELF']?>?returnURL=<?=urlencode($_SERVER['PHP_SELF']);?>&bgu=pass&bbs_view_edit=1&idx=<?=$bbs_stat->idx;?>" class="btn-style02">
					<?=$title_edit?>
				</a>
				<a href="<?=$_SERVER['PHP_SELF']?>?returnURL=<?=urlencode($_SERVER['PHP_SELF']);?>&bgu=pass&bbs_view_del=1&idx=<?=$bbs_stat->idx;?>" class="btn-style03">
					<?=$title_del?>
				</a>
			<? } ?>
		</div>
		<?}?>
		<div class="right-btn-controls">
			<a href="<?echo $returnURL? $returnURL:$_SERVER['PHP_SELF']?>" class="btn-style01">
				<?=$title_list?>
			</a>
		</div>
	</div>


	<!-- 이전/다음 게시글보기 -->

			<?

			$ref = $bbs_stat->ref;
			$re_level = $bbs_stat->re_level;
			$notice = $bbs_stat->notice;
			$reg_dates = $bbs_stat->reg_date;
			$ranking = $bbs_stat->ranking;

			//이전글

				if($notice>0){//공지사항일때

					if($ranking==0){//현 제품의 순위설정이 0일때
					$bbs_ranking_cnt = $db->cnt("cs_bbs_data","where idx!='$idx' and ranking=0 and code='$code' and lang='$lang' and notice>0");
					if($bbs_ranking_cnt>0){//현 제품처럼 순위설정이 0인것이 있을때
					$query = "select idx,subject,secret from cs_bbs_data where code='$code' and idx<'$idx' and notice>0 and lang='$lang' order by idx desc limit 1";
					} else if($bbs_ranking_cnt==0){//현 제품처럼 순위설정이 0인것이 없을때
					$query = "select idx,subject,secret,ranking from cs_bbs_data where code='$code' and ranking>'$ranking' and notice>0 and lang='$lang' order by ranking asc limit 1";
					}
					} else if($ranking>0){// 현 제품이 순위설정을 했을때
					$query = "select idx,subject,secret,ranking from cs_bbs_data where code='$code' and ranking>'$ranking' and notice>0 and lang='$lang' order by ranking asc limit 1";
					}

				} else {//공지사항 아닐때

					$query = "select idx from cs_bbs_data where code='$code' and ref='$ref' and re_level>'$re_level' and notice<1 and lang='$lang'";
					$rs = mysqli_query($db2,$query);
					$count = mysqli_num_rows($rs);

					if($count==0){//일반형태
						if($bbs_admin_stat->date_check==1){//날짜수정형일때
						$query = "select idx,subject,secret,reg_date from cs_bbs_data where code='$code' and reg_date<'$reg_dates' and idx!='$idx' and notice<1 and lang='$lang' order by reg_date desc, re_step DESC limit 1";
						} else {//날짜수정형 아닐때
						if($ranking==0){//현 제품의 순위설정이 0일때
						$bbs_ranking_cnt = $db->cnt("cs_bbs_data","where idx!='$idx' and ranking=0 and code='$code' and lang='$lang' and notice<1");
						if($bbs_ranking_cnt>0){//현 제품처럼 순위설정이 0인것이 있을때
						$query = "select idx,subject,secret from cs_bbs_data where code='$code' and ref<$ref and idx!='$idx' and notice<1 and lang='$lang' order by ref desc, re_step DESC limit 1";
						} else if($bbs_ranking_cnt==0){//현 제품처럼 순위설정이 0인것이 없을때
						$query = "select idx,subject,secret,ranking from cs_bbs_data where code='$code' and ranking>'$ranking' and idx!='$idx' and notice<1 and lang='$lang' order by ranking asc,ref desc, re_step DESC limit 1";
						}
						} else if($ranking>0){// 현 제품이 순위설정을 했을때
						$query = "select idx,subject,secret,ranking from cs_bbs_data where code='$code' and ranking>'$ranking' and idx!='$idx' and notice<1 and lang='$lang' order by ranking asc,ref desc, re_step DESC limit 1";
						}
						}
					} else {//답변형태
						$query = "select idx,subject,secret from cs_bbs_data where code='$code' and ref<=$ref and idx!='$idx' and re_level>'$re_level' and notice<1 and lang='$lang' order by ref desc, re_step DESC limit 1";
					}

				}
					$rs_m = mysqli_query($db2,$query);
					$row_m = mysqli_fetch_array($rs_m);

		   ?>


		   <?
		   //다음글
		   if($notice>0){//공지사항일때
			   if($ranking==0){//현 제품의 순위설정이 0일때
			   $bbs_ranking_cnt = $db->cnt("cs_bbs_data","where idx!='$idx' and ranking=0 and code='$code' and lang='$lang' and notice>0");
			   if($bbs_ranking_cnt>0){//현 제품처럼 순위설정이 0인것이 있을때
			   $query = "select idx,subject,secret from cs_bbs_data where code='$code' and idx>'$idx' and notice>0 and lang='$lang' order by idx asc limit 1";
			   } else if($bbs_ranking_cnt==0){//현 제품처럼 순위설정이 0인것이 없을때
			   $query = "select idx,subject,secret from cs_bbs_data where code='$code' and ranking<'$ranking' and notice>0 and lang='$lang' order by ranking desc,idx asc limit 1";
			   }
			   } else if($ranking>0){// 현 제품이 순위설정을 했을때
			   $query = "select idx,subject,secret from cs_bbs_data where code='$code' and ranking<'$ranking' and notice>0 and lang='$lang' order by ranking desc,idx asc limit 1";
			   }
		   } else {//공지사항 아닐때

			   if($re_level>0){//답변형태

					if($re_level>1){
						$query = "select idx,subject,secret from cs_bbs_data where code='$code' and ref='$ref' and re_level<'$re_level' and idx!='$idx' and notice<1 and lang='$lang' order by ref asc, re_step ASC limit 1";
					} else {
						$query = "select idx,subject,secret from cs_bbs_data where code='$code' and ref='$ref' and re_level<'$re_level' and idx!='$idx' and notice<1 and lang='$lang' order by ref asc, re_step ASC limit 1";
					}
			   } else {//일반형태
					if($bbs_admin_stat->date_check==1){//날짜수정형일때
					$query = "select idx,subject,secret,reg_date from cs_bbs_data where code='$code' and reg_date>'$reg_dates' and notice<1 and lang='$lang' order by reg_date asc, re_step DESC limit 1";
					} else {
					if($ranking==0){//현 제품의 순위설정이 0일때
					$bbs_ranking_cnt = $db->cnt("cs_bbs_data","where idx!='$idx' and ranking=0 and code='$code' and lang='$lang' and notice<1");
					if($bbs_ranking_cnt>0){//현 제품처럼 순위설정이 0인것이 있을때
					$query = "select idx,subject,secret from cs_bbs_data where code='$code' and ref>'$ref' and notice<1 and lang='$lang' order by ref asc, re_step DESC limit 1";
					} else if($bbs_ranking_cnt==0){//현 제품처럼 순위설정이 0인것이 없을때
					$query = "select idx,subject,secret from cs_bbs_data where code='$code' and ranking<'$ranking' and notice<1 and lang='$lang' order by ranking desc,ref asc, re_step DESC limit 1";
					}
					} else if($ranking>0){// 현 제품이 순위설정을 했을때
					$query = "select idx,subject,secret from cs_bbs_data where code='$code' and ranking<'$ranking' and notice<1 and lang='$lang' order by ranking desc,ref asc, re_step DESC limit 1";
					}
					}
			   }
		   }
				$rs_p = mysqli_query($db2,$query);
				$row_p = mysqli_fetch_array($rs_p);
		   ?>

	<article class="bbs-view-prev-next-list">
		<ul>
			<li>
				<table class="bbs-prev-next-tbl">
					<colgroup>
						<col style="width:140px">
						<col style="">
					</colgroup>
					<tbody>
						<tr>
							<th><strong class="bbs-prev-next-tit">PREV<i class="xi-angle-up-min"></i></strong></th>
							<?if($row_m['subject']!=""){?>
							<td>
							  <? if($row_m['secret']=="y"){ ?>
							  <a href="<?=$_SERVER['PHP_SELF']?>?code=<?=$code?>&idx=<?=$row_m['idx']?>&bgu=pass">
							  <? } else { ?>
							  <a href="<?=$_SERVER['PHP_SELF']?>?code=<?=$code?>&idx=<?=$row_m['idx']?>&bgu=view">
							  <? } ?>
									<p class="bbs-tit"><? echo $row_m['subject'] ?></p>
								</a>
							</td>
							<?} else {?>
							<td>
									<?if($lang==1){?>
									<p class="bbs-tit">이전 글이 없습니다.</p>
									<?} else if($lang==2){?>
									<p class="bbs-tit">No previous post.</p>
									<?} else if($lang==3){?>
									<p class="bbs-tit">没有以前的帖子。</p>
									<?} else if($lang==4){?>
									<p class="bbs-tit">前の投稿がありません。</p>
									<?}?>
							</td>
							<?}?>
						</tr>
					</tbody>
				</table>
			</li>
			<li>
				<table class="bbs-prev-next-tbl">
					<colgroup>
						<col style="width:140px">
						<col style="">
					</colgroup>
					<tbody>
						<tr>
							<th><strong class="bbs-prev-next-tit">NEXT<i class="xi-angle-down-min"></i></strong></th>
							<?if($row_p['subject']!=""){//다음글이 없으면?>
							<td>
							  <? if($row_p['secret']=="y"){ ?>
							  <a href="<?=$_SERVER['PHP_SELF']?>?code=<?=$code?>&idx=<?=$row_p['idx']?>&bgu=pass">
							  <? } else { ?>
							  <a href="<?=$_SERVER['PHP_SELF']?>?code=<?=$code?>&idx=<?=$row_p['idx'];?>&bgu=view">
							  <? } ?>
									<p class="bbs-tit"><? echo $row_p['subject'] ?></p>
								</a>
							</td>
							<?} else {?>
							<td>
									<?if($lang==1){?>
									<p class="bbs-tit">다음 글이 없습니다.</p>
									<?} else if($lang==2){?>
									<p class="bbs-tit">No next post.</p>
									<?} else if($lang==3){?>
									<p class="bbs-tit">没有以下帖子。</p>
									<?} else if($lang==4){?>
									<p class="bbs-tit">後の投稿がありません。</p>
									<?}?>
							</td>
							<?}?>
						</tr>
					</tbody>
				</table>
			</li>
		</ul>
	</article>
	<!-- // -->



	<? 
	//코멘트
	if($bbs_admin_stat->bbs_coment){ 
		include $_SERVER['DOCUMENT_ROOT']."/bbs/bbs_coment.php";
	}
	?>

<script type="text/javascript">
<!--
function dele(){
	ans = confirm("게시글을 삭제하시겠습니까?");
	if (ans==true)
	{
		form2.action = "/bbs/bbs_view_del.php?returnURL=<?=urlencode($returnURL);?>&idx=<?=$idx;?>";
		form2.submit();
	}

}
function modi(){
	form2.action = "<?=$_SERVER[PHP_SELF]?>?returnURL=<?=urlencode($returnURL);?>&bgu=edit&idx=<?=$idx;?>";
	form2.submit();
}
//-->
</script>


</article>