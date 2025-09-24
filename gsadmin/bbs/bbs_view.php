<?
extract($_POST);
extract($_GET);
$mod	= "bbs";	
include ("../header.php");

// 게시판 환경
$bbs_admin_stat	= $db->object("cs_bbs", "where code='$code'");
if(!$bbs_admin_stat->idx) { $tools->errMsg("잘못된 접근입니다");}

// 수정 정보 체크
if( $_POST['bbs_view_secr'] ) {
	$bbs_stat	= $db->object("cs_bbs_data", "where idx=$idx");
	if( $bbs_stat->pwd  != $_POST['pwd'] && $_SESSION['ADMIN_PASSWD']!=$_POST['pwd']) {
		$tools->alertJavaGo("패스워드가 올바르지 않습니다.", "bbs_passwd.php?bbs_view_secr=1&bbs_data=$mv_data");
	}
} else {
	//$tools->errMsg('경 고 !!!\n\n비정상적으로 접근했습니다.');
}


// 조회수 증가
$db->update("cs_bbs_data", "read_cnt=read_cnt+1 where idx=$idx");
$board_name		= $bbs_admin_stat->name;
$bbs_stat				= $db->object("cs_bbs_data", "where idx=$idx");
$bbs_admin_stat	= $db->object("cs_bbs", "where code='$bbs_stat->code'", "view, editor, bbs_coment, bbs_pds,bbs_pds_ea, header, footer,bbs_type,bbs_cate");
$name					= $bbs_stat->name;
$email					= $bbs_stat->email;
$display				= $bbs_stat->display;
$reg_date				= $tools->strDateCut($bbs_stat->reg_date, 6);
$subject				= $db->stripSlash($bbs_stat->subject);
if($bbs_admin_stat->editor==1){
	$content = $bbs_stat->content;
	/*
	$content = str_replace("<P>","",$content);
	$content = str_replace("</P>","<br>",$content);
	$content = str_replace("<p>","",$content);
	$content = str_replace("</p>","<br>",$content);
	*/
	$content = $tools->strHtml($content);
} else {
	$content = nl2br($tools->strHtmlNoBr($bbs_stat->content));
}
?>

	<h4 class="page-header">게시판 관리(<?=$board_name;?>)</h4>

	<table class="table table-bordered admin-board-view-wrapper">
	<colgroup>
	<col width="15%">
	<col width="*">
	</colgroup>
	<tbody>
	<?
		if($bbs_admin_stat->bbs_cate==1){
		$cate_row = $db->object("cs_cate","where idx='$bbs_stat->cate'");
	?>
	<tr>
		<th>카테고리</th>
		<td><?=$cate_row->name?></td>
	</tr>
	<?}?>
	<tr>
		<th>제 목</th>
		<td><?=$subject;?></td>
	</tr>
	<tr>
		<th>작성자</th>
		<td><?=$name;?></td>
	</tr>
	<tr>
		<th>등록일</th>
		<td><?=$reg_date;?></td>
	</tr>
	<tr>
		<th>파 일</th>
		<td>
		<?for($i = 1; $i<=$bbs_admin_stat->bbs_pds_ea;$i++){
				if($i==1){
					$file_form = "sbbs_file";
				}else{
					$file_form = "sbbs_file".$i;
				}
				if(!empty($bbs_stat->$file_form)){?>
					<a href="./bbs_download.php?idx=<?=$bbs_stat->idx?>&download=<?=$i?>">&nbsp<?=$bbs_stat->$file_form?>&nbsp</a>
				<?}
			}?>
		</td>
	</tr>

	<?if($bbs_admin_stat->bbs_type==3 && $bbs_admin_stat->editor==""){?>
	<tr>
		<td colspan="2" class="text-center">
			<img src="<?=$site_host?>/data/bbsData/<?=$bbs_stat->sum_file;?>">
		</td>
	</tr>
	<?}else{?>
	<tr>
		<td colspan="2" id="imgResize"><?=$content;?></td>
	</tr>
	<?}?>
	<tbody>
	</table>	

	
	<!-- [시작] 코멘트--------------------------------------------------------------------------------------------------------------------------------------------------------------->
	<? if( $bbs_admin_stat->bbs_coment ) { ?>
	<script language="javascript">
	<!--
	function comentSendit() {
		var form=document.bbs_coment_form;
		if(form.name.value=="") {
			alert("이름을 입력해 주십시오.");
			form.name.focus();
		} else if(form.pwd.value=="") {
			alert("패스워드를 입력해 주십시오.");
			form.pwd.focus();
		} else if(form.coment.value=="") {
			alert("코멘트를 입력해 주십시오.");
			form.coment.focus();
		} else {
			form.submit();
		}
	}
	//-->
	</script>

	<table class="table table-bordered">
	<colgroup >
	<col width="15%"/>
	<col width="*" />
	<col width="15%"/>
	<col width="5%"/>
	</colgroup>
	<tbody>
	<?
	$co_result = $db->select( "cs_bbs_coment", "where link='$bbs_stat->idx' order by reg_date asc");
	while( $co_row = @mysqli_fetch_object($co_result)) {
		$co_idx			= $co_row->idx;
		$co_name		= htmlspecialchars($co_row->name);
		$co_coment		= htmlspecialchars($co_row->coment);
		$co_coment		= str_replace("\n","<br>", $co_coment);
		$co_coment		= stripslashes($co_coment);
		$co_reg_date	= $tools->strDateCut($co_row->reg_date);
	?>
	<tr>
		<td class="text-center"><b><?=$co_name;?></b></td>
		<td><?=$co_coment;?></td>
		<td class="text-center"><?=$co_reg_date;?></td>
		<td><a href="./bbs_passwd.php?coment_del=1&coment_idx=<?=$co_idx;?>&code=<?=$code?>&idx=<?=$bbs_stat->idx?>" class="btn btn-danger btn-sm">삭제</a></td>
	</tr>
	<?}?>
	</tbody>
	</table><br>


	<form name="bbs_coment_form" action="bbs_coment_ok.php?&code=<?=$code?>&idx=<?=$bbs_stat->idx;?>" method="post" role="form">
	<input type="hidden" name="coment_reg" value="1">
	<input type="hidden" name="name" value="관리자">
	<input type="hidden" name="pwd" value="<?=$admin_stat->admin_passwd ;?>">
	<table class="table table-bordered" >
	<colgroup >
	<col width="15%"  />
	<col width="*" />
	<col width="5%" />
	</colgroup>
	<tbody>
	<tr>
		<th>코멘트</th>
		<td ><textarea name="coment" rows="6" class="form-control"></textarea></td>		
		<td><a href="javascript:comentSendit();" class="btn btn-primary btn-sm">등록</a></td>
	</tr>
	<tbody>
	</table><br>
	</form>
	<? }?>
	<!-- [종료] 코멘트---------------------------------------------------------------------------------------------------------------------------------------------------------------->

	<table class="table">
		<tr>
			<td class="text-center">
			<?if($bbs_admin_stat->bbs_type==1){?>
				<a href="./bbs_write.php?returnURL=<?=urlencode($returnURL);?>&reWrite=1&code=<?=$code;?>&idx=<?=$bbs_stat->idx;?>" class="btn btn-primary">답변</a>			
			<?}?>
				<button type="button" class="btn btn-danger" onClick="board_del();">삭제</button>
				<a href="./bbs_edit.php?returnURL=<?=urlencode($returnURL);?>&code=<?=$code;?>&idx=<?=$bbs_stat->idx;?>" class="btn btn-primary">수정</a>
				<a href="<?echo $returnURL? $returnURL:"bbs_list.php?code=".$code;?>" class="btn btn-default">목록</a>
			</td>
		</tr>
	</table>


<script type="text/javascript">
<!--
function board_del(){
	ans = confirm("[삭제] 하시겠습니까?");
	if(ans==true){
		location.href='./bbs_view_del.php?returnURL=<?=urlencode($returnURL);?>&bbs_view_del=1&code=<?=$code;?>&idx=<?=$bbs_stat->idx;?>';
	}
}
//-->
</script>

<? include('../footer.php');?>