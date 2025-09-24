<?
include("../../header.php");

if($_GET['mode']){$_POST['mode'] = $_GET['mode'];}

$db_name	= "cs_schedule";

if($_POST['subject'])	{$_POST['subject']		= $db->addSlash( $_POST['subject'] );}

if($_POST['mode']=="write"){

	if( $db->insert($db_name,
		"
			subject='$_POST[subject]',
			content='$_POST[content]',
			calendar_date='$_POST[calendar_date]',
			reg_date=now()
		"
	))
		{
			$tools->openerReload();
		}

}

if($_POST['mode']=="edit"){

	if( $db->update($db_name,
		"
			subject='$_POST[subject]',
			content='$_POST[content]' where idx='$idx'
		"
	))
		{
			$tools->openerReload();
		}

}

if($_POST['mode']=="delete"){
	
	$db->delete($db_name, "where idx='$idx'");
	$tools->openerReload();

}

include('../../footer.php');
?>