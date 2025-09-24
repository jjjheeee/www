<?
session_start();
set_time_limit(0);
header("Content-type: text/html; charset=utf-8");
include $_SERVER['DOCUMENT_ROOT']."/common.php";
?>

<? if($_POST['image_count']>0){ ?>

<form method="post" action="dump.php" name="form2">
<input type="hidden" name="uploader_count" value="<?=$_POST['image_count']?>">
<?

	$dir = "../../../data/plupload";// 저장될 dir
	if( !file_exists( $dir ) )	mkdir( $dir );//dir이 없으면 만들기
	$file_types = array( "png", "jpeg", "jpg", "gif", "PNG", "JPEG", "JPG", "GIF" );//업로드 허용할 파일확장자
	$upload_check = false;
	$msg = "업로드를 실패했습니다.";
//	system(" rm -r $dir/*.png");

	for($i=0; $i<$_POST['image_count']; $i++) 
	{
		$img_file = $_FILES[$i];//POST로 넘어온 file 데이터
		$ext = substr(strrchr($img_file['name'], '.'), 1); //확장자 구하기
		$file_name = time().$i.".".$ext;// 파일명 변경하기
		if( in_array($ext, $file_types) )// POST로 넘어온 file 확장자 체크
		{
			//echo $img_file['tmp_name'];
			
			if(move_uploaded_file($img_file['tmp_name'], $dir."/".$file_name) )//파일 업로드
			{
				//if( $ext != "png" )//png 가 아니면
				//{
					//system( "convert $dir/$file_name $dir/$i.png" );//  ubuntu pkg imagemagick 으로 png파일로 컨버터 확장자를 변경
					//if( file_exists( "$dir/$file_name" ) )
						//system(" rm $dir/$file_name" );
				//}
				?>
				<input type="hidden" name="uploader_<?=$i?>_name" value="<?=$file_name?>">
				<input type="hidden" name="uploader_<?=$i?>_tmpname" value="<?=$img_file['name']?>">
				<?
				$upload_check = true;
			}
			else error_log( "error" );
		}
	}
	if( $upload_check )
	{
		$msg = "업로드되었습니다.";
	}
	//echo $msg;

?>

</form>

<? } ?>