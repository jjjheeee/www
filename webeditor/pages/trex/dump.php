<?
session_start();
include $_SERVER['DOCUMENT_ROOT']."/common.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="robots" content="none">
<title></title>
<script src="/webeditor/js/popup.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="/webeditor/css/popup.css" type="text/css"  charset="utf-8"/>
</head>

<script type="text/javascript">
// <![CDATA[
	function done() {
		if (typeof(execAttach) == 'undefined') {
	        return;
	    }

		//반복
		<?
		for($i=0; $i<$uploader_count; $i++){
			$u_tmpname = ${uploader_.$i._tmpname};
			$u_name = ${uploader_.$i._name};

			if($u_name){
				//$u_size = ${uploader_.$i._size};
				$u_size = filesize('../../../data/plupload/'.$u_name);
				$rep_url = "/data/plupload/".$u_name;
			?>
			var _mockdata = {
				'imageurl': '<?=$rep_url?>',
				'filename': '<?=$u_tmpname?>',
				'filesize': '<?=$u_size?>',
				'imagealign': 'L',
				'originalurl': '<?=$rep_url?>',
				'thumburl': '<?=$rep_url?>'
			};
			execAttach(_mockdata);
		<?
			}
		}
		?>
		//반복

		closeWindow();
	}

	function initUploader(){
	    var _opener = PopupUtil.getOpener();
	    if (!_opener) {
	        alert('잘못된 경로로 접근하셨습니다.');
	        return;
	    }

	    var _attacher = getAttacher('image', _opener);
	    registerAction(_attacher);
	}
// ]]>
</script>

<body onload="initUploader(); done();">

</body>
</html>
