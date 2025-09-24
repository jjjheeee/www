<?
extract($_POST);
extract($_GET);
$mod	= "bbs";	
include("../header.php");
?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td width="205">&nbsp;</td>
		<td width="595">
			<table width="50%" border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td height="30">&nbsp;</td>
				</tr>
				<tr>
					<td>	
						<h3 class="page-header"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;관리자 인증 (패스워드 입력)</h3>
					</td>
				</tr>
				<tr>
					<td height="130" align="center" bgcolor="EFEFEF">
						<table width="220" border="0" cellspacing="0" cellpadding="3">
							<? if( $_GET['coment_del'] ) {	?>
							<form name="bbs_passwd_form" action="bbs_coment_ok.php?menu=<?=$menu;?>&idx=<?=$idx?>&startPage=<?=$startPage;?>&listNo=<?=$listNo;?>&table=<?=$table;?>&code=<?=$code;?>&search_item=<?=$search_item;?>&search_order=<?=$search_order;?>" method="post">
							<input type="hidden" name="coment_del" value="<?=$_GET['coment_del'];?>">
							<input type="hidden" name="coment_idx" value="<?=$_GET['coment_idx'];?>">
							<? } else if( $_GET['bbs_view_del'] ) {	?>
							<form name="bbs_passwd_form" action="bbs_view_del.php?menu=<?=$menu;?>&idx=<?=$idx;?>&startPage=<?=$startPage;?>&listNo=<?=$listNo;?>&table=<?=$table;?>&code=<?=$code;?>&search_item=<?=$search_item;?>&search_order=<?=$search_order;?>" method="post">
							<input type="hidden" name="bbs_view_del" value="<?=$_GET['bbs_view_del'];?>">
							<? } else if( $_GET['bbs_view_edit'] ) {	?>
							<form name="bbs_passwd_form" action="bbs_edit.php?menu=<?=$menu;?>&idx=<?=$idx;?>&startPage=<?=$startPage;?>&listNo=<?=$listNo;?>&table=<?=$table;?>&code=<?=$code;?>&search_item=<?=$search_item;?>&search_order=<?=$search_order;?>" method="post">
							<input type="hidden" name="bbs_view_edit" value="<?=$_GET['bbs_view_edit'];?>">
							<? } else if( $_GET['bbs_view_secr'] ) {	?>
							<form name="bbs_passwd_form" action="bbs_view.php?menu=<?=$menu;?>&idx=<?=$idx;?>&startPage=<?=$startPage;?>&listNo=<?=$listNo;?>&table=<?=$table;?>&code=<?=$code;?>&search_item=<?=$search_item;?>&search_order=<?=$search_order;?>" method="post">
							<input type="hidden" name="bbs_view_secr" value="<?=$_GET['bbs_view_secr'];?>">
							<? }?>
							<tr>
								<td align="center" height="70" class="menu">
									<input type="password" name="pwd" class="form-control " value="<?=$_SESSION['ADMIN_PASSWD'];?>">
								</td>
							</tr>
							<tr>
								<td align="center">
									<button type="submit" class="btn btn-primary">확인</button>&nbsp;
									<a href="javascript: history.back()" class="btn btn-default">취소</a>
								</td>
							</tr>
							</form>
						</table>
					</td>
				</tr>
			</table><br><br>
		</td>
	</tr>
</table>

<? include('../footer.php');?>