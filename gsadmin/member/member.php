<?
$mod	= "member";	
$menu	= "member";
include('../header.php');

	$table			= "cs_member";
	$listScale		= 10;
	$pageScale	= 10;
	if( !$startPage ) { $startPage = 0; }
	$totalPage = floor($startPage / ($listScale * $pageScale));

	$query = "select * from $table where 1";
		if($search_level )	{$query.=" and level ='$search_level'";}
		if($search_sday)		{$query.=" and DATE_FORMAT($registerType,'%Y-%m-%d')>='$search_sday'";}
		if($search_eday)		{$query.=" and DATE_FORMAT($registerType,'%Y-%m-%d')<='$search_eday'";}

		if($search_order){
			if($search_item){
				$query.=" and $search_item like '%$search_order%'";
			}else{
				$query.=" and (userid like '%$search_order%' or name like '%$search_order%' or phone like'%$search_order%')";
			}
		}
	$rs			= mysqli_query($db2,$query);
	$totalList	= mysqli_num_rows($rs);

	$query = "select * from $table where 1";
		if($search_level )	{$query.=" and level ='$search_level'";}
		if($search_sday)		{$query.=" and DATE_FORMAT($registerType,'%Y-%m-%d')>='$search_sday'";}
		if($search_eday)		{$query.=" and DATE_FORMAT($registerType,'%Y-%m-%d')<='$search_eday'";}

		if($search_order){
			if($search_item){
				$query.=" and $search_item like '%$search_order%'";
			}else{
				$query.=" and (userid like '%$search_order%' or name like '%$search_order%' or phone like'%$search_order%')";
			}
		}
	$query.="  order by idx desc LIMIT $startPage, $listScale";
	$result = mysqli_query($db2,$query);
	if( $startPage ) { $listNo = $totalList - $startPage; } else { $listNo = $totalList; }
?>

	<h4 class="page-header">회원정보</h4>

	<form method="get" name="search_form" class="form-inline" action="<?=$_SERVER['PHP_SELF'];?>" >
	<table class="table table-bordered">
	<colgroup>
	<col width="15%">
	<col width="*">
	</colgroup>
	<tbody>
	<tr>
		<th>검색어</th>
		<td>
			<div class="form-group">
				<div class="input-group-btn">
					<select name="search_item"  class="form-control input-sm" >
						<option value="">통합검색</option>
						<option value="userid" <?if($search_item=="userid"){?>selected<?}?>>아이디</option>
						<option value="name" <?if($search_item=="name"){?>selected<?}?>>이름</option>
						<option value="phone" <?if($search_item=="phone"){?>selected<?}?>>휴대폰</option>
					</select>
				</div>
			</div>
			<input type="text" name="search_order" class="form-control input-sm" value="<?=$search_order?>">
		</td>
	</tr>

	<tr>
		<th>기간검색</th>
		<td>
			<div class="form-group">
				<div class="input-group-btn">
					<select name="registerType"  class="form-control input-sm" >
						<option value="register" <?if($registerType=="register"){?>selected<?}?>>가입일</option>
						<option value="register_login" <?if($registerType=="register_login"){?>selected<?}?>>로그인</option>
					</select>
				</div>
			</div>

			<div class="input-group datetime">
				<input type="text" name="search_sday" class="form-control input-sm text-center" value="<?=$search_sday?>"/>
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-calendar"></span>
				</span>
			</div>
			~
			<div class="input-group datetime">
				<input type="text" name="search_eday" class="form-control input-sm text-center" value="<?if(empty($search_eday)){echo date("Y-m-d");}else{echo $search_eday;}?>"/>
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-calendar"></span>
				</span>
			</div>
		</td>
	</tr>
	<tr>
		<th>회원레벨</th>
		<td>
			<label class="radio-inline"><input type="radio" name="search_level" value="" <?if(empty($search_level))	{ echo "checked";}?>>전체</label>
			<label class="radio-inline"><input type="radio" name="search_level" value="1" <?if($search_level==1){ echo "checked";}?>>일반회원</label>
			<label class="radio-inline"><input type="radio" name="search_level" value="2" <?if($search_level==2){ echo "checked";}?>>특별회원</label>
		</td>
	</tr>

	<tr>
		<td colspan="2" class="text-center">
			<button type="submit" class="btn btn-primary btn-sm">검색</button>&nbsp;
			<a href="<?=$_SERVER['PHP_SELF']?>" class="btn btn-default btn-sm">초기화</a>
		</td>
	</tr>
	</tbody>
	</table>
	</form>


	<div class="table-responsive">
	<table class="table table-bordered table-hover" >
	<caption class="text-right">전체 회원 : <font color="red"><?=number_format($totalList);?></font> 명&nbsp;&nbsp;</caption>
	<colgroup>
	<col width="5%" title="">
	<col width="5%" title="N O" >
	<col width="*" title="아이디">
	<col width="10%" title="회원레벨">
	<col width="10%" title="이름">
	<col width="10%" title="휴대폰">
	<col width="10%" title="가입일자">
	<col width="10%" title="최종로그인">
	<col width="5%" title="적립금">
	<col width="7%" title="관리하기">
	</colgroup>
	<thead>
	<tr>
		<td><button type="button" class="btn btn-danger btn-xs btn-block ajax-checkbox" data-table="<?=$table?>" data-name="delete" data-val="">삭제</button></td>
		<td class="text-right" colspan="9"><a href="./member_excel.php" class="btn btn-success btn-xs">엑셀 다운로드</a></td>
	</tr>
	<tr>
		<th><input type="checkbox" id="allCheck"></th>
		<th>N O</th>
		<th>아이디</th>
		<th>회원레벨</th>
		<th>이 름</th>
		<th>휴대폰</th>
		<th>가입일자</th>
		<th>최종로그인</th>
		<th>적립금</th>
		<th>관리하기</th>
	</tr>
	</thead>
	<tbody>
	<?
	while( $row = mysqli_fetch_array($result)) {
	?>
	<tr>
		<td class="text-center"><input type="checkbox" name="check_list" value="<?=$row['idx'] ?>"></td>
		<td class="text-center"><?=$listNo;?></td>
		<td class="text-center"><?=$row['userid'];?></td>
		<td class="text-center">
			<select name="level" class="form-control input-sm ajax-select" data-table="<?=$table?>" data-idx="<?=$row['idx']?>">
				<option value="1" <? if( $row['level']==1) { echo("selected");} ?>>일반회원</option>
				<option value="2" <? if( $row['level']==2) { echo("selected");} ?>>특별회원</option>
			</select>	
		</td>
		<td class="text-center"><?=$row['name'];?></td>
		<td class="text-center"><?=$row['phone'];?></td>
		<td class="text-center"><?=$tools->strDateCut($row['register'],3);?></td>
		<td class="text-center"><?=$tools->strDateCut($row['register_login'],3);?></td>
		<td class="text-center"><a href="#none" class="btn btn-warning btn-sm" onClick="pointWinOpen('<?=$row['userid'];?>');">설정</a></td>
		<td class="text-center"><a href="./member_form.php?returnURL=<?=urlencode($_SERVER['REQUEST_URI'])?>&idx=<?=$row['idx']?>" class="btn btn-default btn-sm">수정하기</a></td>
	</tr>	
	<?
		$listNo--;
		}
	?>

	<? if(!$totalList) {?>
	<tr>
		<td colspan="12" class="text-center"> 가입한 회원이 없습니다.</td>
	</tr>
	<?}?>

	</tbody>
	</table>
	</div>


	<div class="text-center">
		<ul class="pagination">
			<?
			$pageURL= "search_item=".urlencode($search_item);
			$pageURL.= "&search_order=".urlencode($search_order);
			$pageURL.= "&search_level=".urlencode($search_level);
			$pageURL.= "&registerType=".urlencode($registerType);
			$pageURL.= "&search_sday=".urlencode($search_sday);
			$pageURL.= "&search_eday=".urlencode($search_eday);

			if( $totalList > $listScale ) {
				if( $startPage+1 > $listScale*$pageScale ) {
					$prePage = $startPage - $listScale * $pageScale;
					echo "<li><a href='$_SERVER[PHP_SELF]?$pageURL&startPage=$prePage'><span aria-hidden='true'>&laquo;</span></a></li>";
				}
				for( $j=0; $j<$pageScale; $j++ ) {
					$nextPage = ($totalPage * $pageScale + $j) * $listScale;
					$pageNum = $totalPage * $pageScale + $j+1;
					if( $nextPage < $totalList ) {
						if( $nextPage!= $startPage ) {
							echo "<li><a href='$_SERVER[PHP_SELF]?$pageURL&startPage=$nextPage'>$pageNum</a></li>";
						} else {
							echo "<li class='active'><a href='javascript:;'>$pageNum</a></li>";
						}
					}
				}
				if( $totalList > (($totalPage+1) * $listScale * $pageScale)) {
					$nNextPage = ($totalPage+1) * $listScale * $pageScale;
					echo "<li><a href='$_SERVER[PHP_SELF]?$pageURL&startPage=$nNextPage'><span aria-hidden='true'>&raquo;</span></a></li>";
				}
			}
			if( $totalList <= $listScale) {
				echo "<li class='active'><a href='javascript:;' >1</a></li>";
			}
			?>
		</ul>
	</div>

<? include('../footer.php');?>