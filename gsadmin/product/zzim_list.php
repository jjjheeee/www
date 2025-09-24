<?
session_cache_limiter("");
session_start();
include $_SERVER['DOCUMENT_ROOT']."/common.php";

$site_host	= "http://" . $_SERVER['HTTP_HOST'];
$site_url	= $site_host."/gsadmin";
$admin_stat = $db->object("cs_admin","");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<?if( !$_SESSION['ADMIN_USERID'] || !$_SESSION['ADMIN_PASSWD']) { $tools->alertJavaGo('경고! 잘못된 접근입니다\n\n로그인 하세요', $site_url);}?>

    <title><?=$admin_stat->shop_name;?></title>

    <link href="<?=$site_url?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="<?=$site_url?>/css/skin/dashboard.css" rel="stylesheet"> -->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="<?=$site_url?>/js/assets/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?=$site_url?>/js/assets/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="<?=$site_url?>/js/bootstrap.min.js"></script>
    <script src="<?=$site_url?>/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?=$site_url?>/js/assets/ie10-viewport-bug-workaround.js"></script>
<style type="text/css">
.page-header{
	margin:10px 0 10px;
}
</style>
</head>


<?
include($ROOT_DIR."/lib/page_class.php");
if($_POST['part_code']) { $part_row=$db->object("cs_part", "where part1_code='$_POST[part_code]' or part2_code='$_POST[part_code]' or part3_code='$_POST[part_code]'", "idx"); $_GET['part_idx']=$part_row->idx;}


$mv_data	= $_GET['goods_data'];
$goods_data	= $tools->decode( $_GET['goods_data'] );
if($_GET['idx'] )						{ $idx = $_GET['idx']; }											else { $idx = $goods_data['idx']; }
if($_GET['code'] )				{ $code = $_GET['code']; }									else { $code	= $goods_data['code']; }
if($_GET['part_idx'] )			{ $part_idx = $_GET['part_idx']; }						else { $part_idx = $goods_data['part_idx']; }
if($_GET['listNo'] )					{ $listNo = $_GET['listNo']; }									else { $listNo = $goods_data['listNo']; }
if($_GET['startPage'] )			{ $startPage = $_GET['startPage']; }					else { $startPage	= $goods_data['startPage']; }
if($_POST['search_item'] )	{ $search_item = $_POST['search_item']; }			else { $search_item	= $goods_data['search_item']; }
if($_POST['search_order'] )	{ $search_order = $_POST['search_order']; }		else { $search_order	= $goods_data['search_order']; }
?>

<script language="javascript">
<!--
function sendit() {
	var form=document.goods_form;
	form.submit();
}

// 검색기능
function search(){
	var form=document.goods_search_form;
	if(form.search_order.value=="")	{
		alert("검색할 내용을 입력해 주십시오.");
		form.search_order.focus();
	} else {
		form.submit();
	}
}





////  카테고리 선택 폼 설정 시작 //////////////////////////////////////////////////////////////////////////
// 배열 선언
depth1 = new Array(); // 리스트1 출력용
depth2 = new Array(); // 리스트2 출력용
depth3 = new Array(); // 리스트3 출력용

depth1_value = new Array(); // 리스트1 값
depth2_value = new Array(); // 리스트2 값
depth3_value = new Array(); // 리스트3 값

var depth1_size = 3;
var depth2_size = 3;
var depth3_size = 3;
var sep = "$$";
// 배열 초기화

i = 0;
// depth1 의 배열 초기화
<?
$part1_result = $db->select( "cs_part", "where part_index=1 order by part_ranking asc");
while( $part1_row = mysqli_fetch_object($part1_result) ) {
	?>
	depth1[i] = "<?=$part1_row->part_name;?>";
	depth1_value[i] = "<?=$part1_row->part1_code;?>";

	j = 0;

	// depth2 의 배열 초기화
	<?
	$part2_result = $db->select( "cs_part", "where part1_code='$part1_row->part1_code' and part_index=2 order by part_ranking asc");
	while( $part2_row = mysqli_fetch_object($part2_result) )
	{
		?>
		if ( j == 0 )
		{
			depth2[i] = new Array();
			depth2_value[i] = new Array();
			depth3[i] = new Array();
			depth3_value[i] = new Array();
		}

		depth2[i][j] = "<?=$part2_row->part_name;?>" ;
		depth2_value[i][j] = "<?=$part2_row->part2_code;?>";

		k = 0;
		<?
		$part3_result = $db->select( "cs_part", "where part2_code='$part2_row->part2_code' and part1_code='$part1_row->part1_code' and part_index=3 order by part_ranking asc");
		while( $part3_row = mysqli_fetch_object($part3_result) )
		{
			?>
			if ( k == 0 )
			{
				depth3[i][j] = new Array();
				depth3_value[i][j] = new Array();
			}
			depth3[i][j][k] = '<?=$part3_row->part_name?>' ;
			depth3_value[i][j][k] = '<?=$part3_row->part3_code?>' ;
			k += 1;
			<?}
		?>
		j += 1;
		<?}
	?>
	i += 1;
	<? }
?>

// 선택되었을때 다음 단계 카테고리 출력
function change(depth, index, target)
{
	f = document.goods_form;   // 선택된 Form;

	if ( depth == 1 && index != -1)  // 대분류 선택 시
	{
		sp_value = f.select1[index].value;
		sp_value = sp_value.split(sep);
		sp_value2 = sp_value[1];

		for ( i = f.select2.length; i >= 0; i-- ) {
			f.select2[i] = null;
		}
		goods_form.part_code.value = "";
		if ( depth2[sp_value2] != null )
		{

			for ( i = 0 ; i <= depth2[sp_value2].length -1 ; i++ )
			{
				f.select2.options[i] = new Option(depth2[sp_value2][i],depth2_value[sp_value2][i] + sep + sp_value2 + sep + i );
			}
		}
		else
		{
			//			alert("2차 카테고리는 없습니다.");
			goods_form.part_code.value = depth1_value[sp_value2];
			alert("카테고리 선택 완료");
			sendit();
		}


		// 카테고리 2를 초기화 되면 카테로기 3은 모두 삭제한다.
		for ( i = f.select3.length; i >= 0; i-- ) {
			f.select3[i] = null;
		}
	}
	else if ( depth == 2 && index != -1 )   // 중분류 선택 시
	{
		sp_value = f.select2[index].value;
		sp_value = sp_value.split(sep);
		sp_value2 = sp_value[1];
		sp_value3 = sp_value[2];

		for ( i = f.select3.length; i >= 0; i-- ) {
			f.select3[i] = null;
		}
		goods_form.part_code.value = "";
		if ( depth3[sp_value2][sp_value3] != null )
		{

			for ( i = 0 ; i <= depth3[sp_value2][sp_value3].length -1 ; i++ )
			{
				f.select3.options[i] = new Option(depth3[sp_value2][sp_value3][i],depth3_value[sp_value2][sp_value3][i]);
			}
		}
		else
		{
			//			alert("3차 카테고리는 없습니다.");
			goods_form.part_code.value = depth2_value[sp_value2][sp_value3];
			alert("카테고리 선택 완료");
			sendit();
		}
	}
	else if ( depth == 3 && index != -1 )
	{
		goods_form.part_code.value = f.select3[index].value;
		alert("카테고리 선택 완료");
		sendit();
	}
}
////  카테고리 선택 폼 설정 종료 //////////////////////////////////////////////////////////////////////////

function send(form){

	var count=0;

	for(var i=0; i<form.elements.length; i++) {
		if(form.elements[i].checked == true) {
			count++;
		}
	}
	if( count == 0 ) {
		alert('관련제품을 체크하세요');
		return;
	}else{
		form.action = "./zzim_ok.php?code=<? echo $code ?>";
		form.submit();
	}

}
$(opener.location).attr("href", "javascript:zzim_load();");
//-->
</script>

<body>

<div class="col-md-12" >

	<h4 class="page-header">관련 제품 추가</h4>

	<form action="<?=$_SERVER['PHP_SELF'];?>?code=<?=$code?>" method="post" name="goods_form">
	<input type="hidden" name="part_code" value="<?=$_POST['part_code'];?>">
	<table class="table table-bordered">
	<colgroup>
	<col width="15%" title="분류선택">
	<col width="*" title="카테고리">
	</colgroup>
	<tbody>
	<tr>
	  <th class="text-center">분류선택</th>
	  <td>
		<table class="table table-bordered">
		<colgroup>
		<col width="33%" title="1차카테고리">
		<col width="33%" title="2차카테고리">
		<col width="*"   title="3차카테고리">
		</colgroup>
		<tbody>
		<tr>
		  <td class="text-center"><span class="btn btn-primary btn-xs btn-grad btn-rect">&nbsp;&nbsp;1차 카테고리&nbsp;&nbsp;</span></td>
		  <td class="text-center"><span class="btn btn-primary btn-xs btn-grad btn-rect">&nbsp;&nbsp;2차 카테고리&nbsp;&nbsp;</span></td>
		  <td class="text-center"><span class="btn btn-primary btn-xs btn-grad btn-rect">&nbsp;&nbsp;3차 카테고리&nbsp;&nbsp;</span></td>
		</tr>
		<tr>
		  <td>
			<select name="select1" onClick='change(1, this.form.select1.selectedIndex, this.form)'  class="form-control"  multiple="multiple" style="height:150px;">
			<script language = "javascript">
			for ( i = 0 ; i <= depth1.length -1 ; i++ ){
				document.write ("<option value='"+ depth1_value[i] + sep + i + "' >" + depth1[i] + "</option>");
			}
			</script>
			</select>
		  </td>
		  <td><select name="select2" onclick='change(2, this.form.select2.selectedIndex, this.form)' class="form-control"  multiple="multiple" style="height:150px;"></select></td>
		  <td><select name="select3" onclick='change(3, this.form.select3.selectedIndex, this.form)' class="form-control"  multiple="multiple" style="height:150px;"></select></td>
		</tr>
		</tbody>
		</table>
	  </td>
	</tr>
	</tbody>
	</table>
	</form><br>
	<?
	if($part_idx) {
		$part_stat_row = $db->object("cs_part", "where idx=$part_idx");
		if( $part_stat_row->part_index == 1 ) {
			$part_result = $db->select("cs_part", "where part1_code='$part_stat_row->part1_code' && part_index=1 order by idx asc", "part_name");
		} else if( $part_stat_row->part_index == 2 ) {
			$part_result = $db->select("cs_part", "where (part1_code='$part_stat_row->part1_code' && part_index=1) || (part2_code ='$part_stat_row->part2_code' && part_index=2) order by idx asc", "part_name");
		} else if( $part_stat_row->part_index == 3 ) {
			$part_result = $db->select("cs_part", "where (part1_code='$part_stat_row->part1_code' && part_index=1) || (part2_code ='$part_stat_row->part2_code' && part_index=2) || (part3_code='$part_stat_row->part3_code' && part_index=3) order by idx asc", "part_name");
		}
		$i=0;
		while( $part_stat_row = @mysqli_fetch_object( $part_result )) {
			$i++;
			$part_name.=$i."차 카테고리 : <font color='#FF0000'>".$part_stat_row->part_name."</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		}
	} else {
		$part_name = "전체";
	}
	?>
	<table class="table table-bordered">
		<tr>
			<th><?=$part_name;?></th>
		</tr>
	</table>


	<form name="form" method="post">
	<input type="hidden" name="return_url" value="<?=$_SERVER["REQUEST_URI"]; ?>">
	<table class="table table-bordered table-hover">
	<colgroup>
	<col width="5%" title="관리">
	<col width="5%" title="No" >
	<col width="10%" title="이미지" >
	<col width="*" title="제품명">
	<col width="10%" title="노출여부">
	<col width="15%" title="판매가격">
	</colgroup>
	<thead>
	<tr>
		<th></th>
		<th>No</th>
		<th>이미지</th>
		<th>제품명</th>
		<th>노출여부</th>
		<th>판매가격</th>
	</tr>
	</thead>
	<tbody>
	<?
	$table				= "cs_goods";
	$listScale			=	10; 		// 리스트 수
	$pageScale		=	10;		// 페이지 수
	if( !$startPage ) { $startPage = 0; }		// 스타트 페이지
	$totalPage = floor($startPage / ($listScale * $pageScale));		// 토탈페이지

	if($part_idx){

		if( $search_item == 1 ) {
			$totalList	= $db->cnt( $table, "where part_idx=$part_idx and name like '%$search_order%'" );
			$result		= $db->select( $table, "where part_idx=$part_idx and name like '%$search_order%' order by idx desc LIMIT $startPage, $listScale" );
		}else if( $search_item == 2 ) {
			$totalList	= $db->cnt( $table, "where part_idx=$part_idx and code like '%$search_order%'" );
			$result		= $db->select( $table, "where part_idx=$part_idx and code like '%$search_order%' order by idx desc LIMIT $startPage, $listScale" );
		}else {
			$totalList	= $db->cnt( $table, "where part_idx=$part_idx" );
			$result		= $db->select( $table, "where part_idx=$part_idx order by idx desc LIMIT $startPage, $listScale" );
		}

	}else {

		if( $search_item == 1 ) {
			$totalList	= $db->cnt( $table, "where name like '%$search_order%'" );
			$result		= $db->select( $table, "where name like '%$search_order%' order by idx desc LIMIT $startPage, $listScale" );
		}else if( $search_item == 2 ) {
			$totalList	= $db->cnt( $table, "where code like '%$search_order%'" );
			$result		= $db->select( $table, "where code like '%$search_order%' order by idx desc LIMIT $startPage, $listScale" );
		}else {
			$totalList	= $db->cnt( $table, "" );
			$result		= $db->select( $table, " order by idx desc LIMIT $startPage, $listScale" );
		}
	}

	if( $startPage ) { $listNo = $totalList - $startPage; } else { $listNo = $totalList; }
	while( $row = mysqli_fetch_object($result)) {
		$goods_data = $tools->encode("idx=".$row->idx."&startPage=".$startPage."&listNo=".$listNo."&table=".$table."&part_idx=".$part_idx."&search_item=".$search_item."&search_order=".$search_order);
		$zzim_cnt = $db->cnt("cs_zzim","where code='$code' and goods_idx='$row->idx'");
	?>
	<tr>
		<td class="text-center"><input type="checkbox" name="check[]"  value="<?=$row->idx?>" <?if($zzim_cnt){?>checked readonly disabled<?}?>></td>
		<td class="text-center"><?=$listNo;?></td>
		<td class="text-center"><img src="<?=$site_host?>/data/goodsImages/<?=$row->images1?>" class="img-rounded" style="width:50px;height:50px;"></td>
		<td class="text-left"><?=$db->stripSlash($row->name);?></td>
		<td class="text-center"><?=strtoupper($row->display);?></td>
		<td class="text-center"><?=number_format($row->shop_price);?>&nbsp;원</td>
	</tr>
	<?
		$listNo--;
		}
	?>
	<? if(empty($totalList)) { ?>
	<tr>
		<td colspan="6" class="text-center" style="font-weight:bold"> 등록된 제품이 없습니다.</td>
	</tr>
	<?}else{?>
	<tr>
		<td colspan="6" class="text-center"><a href="javascript:send(this.form);" class="btn btn-warning btn-sm">&nbsp;&nbsp;&nbsp;선&nbsp;택&nbsp;&nbsp;&nbsp;</a></td>
	</tr>
	<?}?>
	</tbody>
	</table>
	</form>


	<div class="text-center">
		<ul class="pagination">
			<? $page->goods_zzim( $code, $part_idx, $table, $totalPage, $totalList, $listScale, $pageScale, $startPage, "<span aria-hidden='true'>&laquo;</span>", "<span aria-hidden='true'>&raquo;</span>", $search_item, $search_order );?>
		 </ul>
	</div>


	<div class="well well-small text-center">
		<form name="goods_search_form" class="form-inline" method="post" action="<?=$_SERVER['PHP_SELF'];?>?code=<?=$code?>">
		<input type="hidden" name="part_code" value="<?=$_POST['part_code'];?>">
		<div class="form-group input-group">
			<div class="input-group-btn">
				<select class="form-control" name="search_item">
					<option value="1">제품명</option>
				</select>
			</div>
		</div>
		<div class="form-group input-group">
			<input type="text" name="search_order" class="form-control" placeholder="Search">
			<div class="input-group-btn">
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>&nbsp;
				<a href="<?=$_SERVER['PHP_SELF'];?>?code=<?=$code?>" class="btn btn-default" title="새로고침"> <span class="glyphicon glyphicon-refresh"></span></a>
			</div>
		</div>
		</form>
	</div>

</div><!-- .col-md-12 -->
</body>
</html>