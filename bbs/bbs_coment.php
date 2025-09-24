<script type="text/javascript">
<!--
	function comentSendit() {
		
		<? if(!$_SESSION['LEVEL']){ ?>
			alert("회원 전용입니다.\n\n로그인을 해주세요.");
			return false;
		<?}?>

		var form=document.bbs_coment_form;
		if(form.name.value=="") {
			alert("이름을 입력해 주세요.");
			form.name.focus();
	/*
		<? if($_SESSION['USERID']==""){ ?>
		} else if(form.pwd.value=="") {
			alert("패스워드를 입력해 주십시오.");
			form.pwd.focus();
		<? } ?>
	*/
		} else if(form.coment.value=="") {
			alert("댓글을 입력해 주세요.");
			form.coment.focus();
		} else {
			form.submit();
		}
	}

	function co_dele(text){
		ans = confirm("댓글을 삭제하시겠습니까?");
		if(ans==true){
			location.href="/bbs/bbs_coment_ok.php?coment_del=1&coment_idx="+text+"&returnURL=<?=$_SERVER[PHP_SELF]?>";
		}

	}

	function co_modi(idx){
	  status = $("#modi_co"+idx).css("display");
	  if (status == "none") {
			$(".modi_co").hide();
			$("#modi_co"+idx).fadeIn(1000);
			$("#modi_co"+idx).show();
	  }else{
		$("#modi_co"+idx).hide();
	  }
	}

	function re_Sendit(idx){
		var coment = $("#coment"+idx).val();
		location.href="/bbs/bbs_coment_ok.php?reWrite=1&co_idx="+idx+"&coment="+coment+"&bbs_data=<?=$mv_data;?>&url=<?=$PHP_SELF?>";
	}
//-->
</script>
<?
$query = "select * from cs_bbs_coment where link='$bbs_stat->idx' order by reg_date asc";
$rs = mysqli_query($db2,$query);
$count = mysqli_num_rows($rs);
?>
	<article class="bbs-comment-con">
		<p class="bbs-cm-head"><i class="material-icons" style="vertical-align:middle;">&#xE8AF;</i> 댓글 ( <?=$count?> )</p>

		<? if( $bbs_admin_stat->bbs_coment) { ?>
			<?if($mem_row->userid){?>
			<!-- 댓글작성 -->
			<div class="cm-write-con">
				<div class="cm-write-top">
					<p class="cm-writer-info"><strong class="cm-writer"><?=$mem_row->name?></strong><span class="cm-write-sub-txt">※ 악성 댓글은 삭제될 수 있습니다. 신중한 작성 부탁드립니다.</span></p>
				</div>
				<form name="bbs_coment_form" action="/bbs/bbs_coment_ok.php" method="post">
				<input type="hidden" name="coment_reg" value="1">
				<input type="hidden" name="idx" value="<?=$idx?>">
				<input type="hidden" name="returnURL" value="<?=$_SERVER['PHP_SELF']?>">
				<input type="hidden" name="name" value="<?=$mem_row->name?>">
				<div class="cm-write-bottom">
					<textarea name="coment" class="cm-textarea"></textarea>
					<button type="button" onclick="comentSendit();return false;" class="cm-regi-btn">댓글등록</button>
				</div>
				</form>
			</div>
			<?}else{?>
				<div class="cm-write-con">
					<div class="cm-write-top">
						<p class="cm-writer-info"><!-- <strong class="cm-writer">비회원</strong> --><span class="cm-write-sub-txt">※ 악성 댓글은 삭제될 수 있습니다. 신중한 작성 부탁드립니다.</span></p>
					</div>
					<form name="bbs_coment_form" action="/bbs/bbs_coment_ok.php?bbs_data=<?=$mv_data;?>" method="post">
					<input type="hidden" name="coment_reg" value="1">
					<input type="hidden" name="url" value="<?=$_SERVER['PHP_SELF']?>">
					<div class="cm-write-bottom">
						<!-- <p>
							작성자 : <input type="text" class="write-input" name="name" value="">&emsp;
							비밀번호 : <input type="password" class="write-input" name="pwd" value="">
						</p>
						<br> -->
						<textarea name="coment" class="cm-textarea"></textarea>
						<button type="button" onclick="comentSendit();return false;" class="cm-regi-btn">댓글등록</button>
					</div>
					</form>
				</div>
			<?}?>
		<? } ?>
		
		<ul class="cm-list-con">
		<?
		while($co_row = mysqli_fetch_object($rs)){
			$co_idx			= $co_row->idx;
			$co_name		= htmlspecialchars($co_row->name);
			$co_coment		= htmlspecialchars($co_row->coment);
			$co_coment		= str_replace("\n","<br>", $co_coment);
			$co_coment		= stripslashes($co_coment);
			$co_reg_date	= $tools->strDateCut($co_row->reg_date);
		?>
			<li class="cm-item">
				<div class="cm-write-top">
					<p class="cm-writer-info"><strong class="cm-writer"><?=$co_row->name?></strong><span class="cm-write-sub-txt"><?=$co_reg_date;?></span></p>
					<?if($mem_row->userid==$co_row->userid && $mem_row->userid){?>
					<div class="cm-control-btns">
						<!--a href="">답글</a-->
						<!-- <a href="#none" onclick="co_modi('<?=$co_idx?>');">수정</a> -->
						<a href="#none" onclick="co_dele('<?=$co_idx?>');">삭제</a>
					</div>
					<?}else{?>
						<!-- <div class="cm-control-btns">
							<a href="<?=$_SERVER['PHP_SELF']?>?coment_del=1&coment_idx=<?=$co_row->idx?>&bbs_data=<?=$mv_data;?>&bgu=pass">삭제</a>
						</div> -->
					<?}?>
				</div>
				<div class="cm-write-bottom">
					<p class="cm-content"><?=$co_coment;?></p>
				</div>
			</li>

			<li class="cm-item" id="modi_co<?=$co_idx?>" style="display:none;">
				<div class="cm-write-top">
					<p class="cm-writer-info"><strong class="cm-writer">댓글수정자</strong></p>
					<div class="cm-control-btns">
						<a href="#none" onclick="co_modi('<?=$co_idx?>');">취소</a>
					</div>
				</div>
				<div class="cm-write-bottom">
					<textarea name="coment" id="coment<?=$co_idx?>" class="cm-textarea"><?=$co_coment;?></textarea>
					<input type="button" value="댓글수정" onclick="re_Sendit('<?=$co_idx?>');return false;" class="cm-regi-btn">
				</div>
			</li>
		<?
		}
		?>
		</ul>