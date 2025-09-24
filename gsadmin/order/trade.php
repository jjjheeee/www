<? 
$mod	= "order";	
$menu	= $trade_stat;
include('../header.php');


	$table			= "cs_trade";
	$listScale		= 20;
	$pageScale	= 10;
	if( !$startPage ) { $startPage = 0; }
	$totalPage = floor($startPage / ($listScale * $pageScale));

	$query		= "select * from $table where order_gu='y'";
		if($trade_stat)							{$query.=" and trade_stat ='$trade_stat'";}
		if($search_trade_method)	{$query.=" and trade_method ='$search_trade_method'";}
		if($search_device)					{$query.=" and device ='$search_device'";}
		if($search_sday)						{$query.=" and DATE_FORMAT(trade_day,'%Y-%m-%d')>='$search_sday'";}
		if($search_eday)						{$query.=" and DATE_FORMAT(trade_day,'%Y-%m-%d')<='$search_eday'";}

		if($search_order){
			if($search_item){
				$query.=" and $search_item like '%$search_order%'";
			}else{
				$query.=" and (trade_code like '%$search_order%' or order_name like '%$search_order%' or order_userid like'%$search_order%' or order_phone like'%$search_order%')";
			}
		}

	$rs				= mysqli_query($db2,$query);
	$totalList	= mysqli_num_rows($rs);

	$query = "select * from $table where order_gu='y'";
		if($trade_stat)							{$query.=" and trade_stat ='$trade_stat'";}
		if($search_trade_method)	{$query.=" and trade_method ='$search_trade_method'";}
		if($search_device)					{$query.=" and device ='$search_device'";}
		if($search_sday)						{$query.=" and DATE_FORMAT(trade_day,'%Y-%m-%d')>='$search_sday'";}
		if($search_eday)						{$query.=" and DATE_FORMAT(trade_day,'%Y-%m-%d')<='$search_eday'";}

		if($search_order){
			if($search_item){
				$query.=" and $search_item like '%$search_order%'";
			}else{
				$query.=" and (trade_code like '%$search_order%' or order_name like '%$search_order%' or order_userid like'%$search_order%' or order_phone like'%$search_order%')";
			}
		}

	$query.="  order by idx desc LIMIT $startPage, $listScale";
	$result = mysqli_query($db2,$query);

	if( $startPage ) { $listNo = $totalList - $startPage; } else { $listNo = $totalList; }

	$param_url = 
	"trade_stat=".$trade_stat.
	"&search_trade_method=".$search_trade_method.
	"&search_device=".$search_device.
	"&search_item=".$search_item.
	"&search_order=".$search_order.
	"&search_sday=".$search_sday.
	"&search_eday=".$search_eday;
?>

	<h4 class="page-header">
			주문관리 > 
		<? if($trade_stat==1) {?>
			결제대기
		<?} else if($trade_stat==2) {?>
			결제완료
		<?} else if($trade_stat==3) {?>
			상품배송중
		<?} else if($trade_stat==4) {?>
			배송완료
		<?} else if($trade_stat==5) {?>
			주문취소
		<?} else {?>
			전체보기
		<?}?>
	</h4>

	<div class="text-right"><a href="trade_excel.php?<?=$param_url?>" class="btn btn-success btn-sm">엑셀 다운로드</a></div><br>
	<form method="post" name="search_form" class="form-inline" action="<?=$_SERVER['PHP_SELF'];?>" >
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
					<select name="search_item" class="form-control input-sm" >
						<option value="">통합검색</option>
						<option value="trade_code" <?if($search_item=="trade_code"){?>selected<?}?>>주문번호</option>
						<option value="order_name" <?if($search_item=="order_name"){?>selected<?}?>>주문자</option>
						<option value="order_userid" <?if($search_item=="order_userid"){?>selected<?}?>>회원ID</option>
						<option value="order_phone" <?if($search_item=="order_phone"){?>selected<?}?>>연락처</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<input type="text" name="search_order" class="form-control input-sm" value="<?=$search_order?>">
			</div>
		</td>
	</tr>
	<tr>
		<th>주문일자</th>
		<td>
			<div class="input-group datetime">
				<input type="text" name="search_sday" class="form-control input-sm text-center" value="<?=$search_sday?>"/>
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-calendar"></span>
				</span>
			</div>
			<div class="input-group">~</div>
			<div class="input-group datetime">
				<input type="text" name="search_eday" class="form-control input-sm text-center" value="<?if(empty($search_eday)){echo date("Y-m-d");}else{echo $search_eday;}?>"/>
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-calendar"></span>
				</span>
			</div>
		</td>
	</tr>
	<tr>
		<th>주문상태</th>
		<td>
			<label class="radio-inline"><input type="radio" name="trade_stat" value="" <?if(empty($trade_stat)){echo "checked";}?>>전체</label>
			<label class="radio-inline"><input type="radio" name="trade_stat" value="1" <?if($trade_stat==1){echo "checked";}?>>결제대기</label>
			<label class="radio-inline"><input type="radio" name="trade_stat" value="2" <?if($trade_stat==2){echo "checked";}?>>결제완료</label>　
			<label class="radio-inline"><input type="radio" name="trade_stat" value="3" <?if($trade_stat==3){echo "checked";}?>>상품배송중</label>　
			<label class="radio-inline"><input type="radio" name="trade_stat" value="4" <?if($trade_stat==4){echo "checked";}?>>판매완료</label>
			<label class="radio-inline"><input type="radio" name="trade_stat" value="5" <?if($trade_stat==5){echo "checked";}?>>주문취소</label>　
		</td>
	</tr>
	<tr>
		<th>결제방법</th>
		<td>
			<label class="radio-inline"><input type="radio" name="search_trade_method" value="" <?if(empty($search_trade_method)){echo "checked";}?>>전체</label>
			<label class="radio-inline"><input type="radio" name="search_trade_method" value="2" <?if($search_trade_method==2){echo "checked";}?>>신용카드</label>
			<label class="radio-inline"><input type="radio" name="search_trade_method" value="1" <?if($search_trade_method==1){echo "checked";}?>>무통장입금</label>
			<label class="radio-inline"><input type="radio" name="search_trade_method" value="3" <?if($search_trade_method==3){echo "checked";}?>>실시간 계좌이체</label>
			<label class="radio-inline"><input type="radio" name="search_trade_method" value="10" <?if($search_trade_method==10){echo "checked";}?>>적립금</label>
		</td>
	</tr>
	<tr>
		<th>결제경로</th>
		<td>
			<label class="radio-inline"><input type="radio" name="search_device" value="" <?if(empty($search_device)){echo "checked";}?>>전체</label>
			<label class="radio-inline"><input type="radio" name="search_device" value="pc" <?if($search_device=="pc"){echo "checked";}?>>PC</label>
			<label class="radio-inline"><input type="radio" name="search_device" value="mobile" <?if($search_device=="mobile"){echo "checked";}?>>모바일</label>
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
	<table class="table table-bordered table-hover">
	<colgroup>
	<?if($trade_stat==5){?>
	<col width="5%">
	<?}?>
	<col width="5%">
	<col width="*">
	<col width="10%">
	<col width="10%">
	<col width="10%">
	<col width="5%">
	<col width="10%">
	<col width="10%">
	<col width="10%">
	<col width="3%">
	<col width="10%">
	</colgroup>
	<thead>
	<?if($trade_stat==5){?>
	<tr>
		<td colspan="11"></td>
		<th><a href="javascript:;" class="btn btn-default btn-xs ajax-checkbox"  data-dbname="<?=$table?>" data-name="delete" data-val="">삭제하기</a></th>
	</tr>
	<?}?>
	<tr>
		<?if($trade_stat==5){?>
		<th><input type="checkbox" id="allCheck"></th>
		<?}?>
		<th>No</th>
		<th>주문번호</th>
		<th>이름</th>
		<th>회원ID</th>
		<th>결제금액</th>
		<th>결제방법</th>
		<th>연락처</th>
		<th>주문일</th>
		<th>거래상태</th>
		<th>인쇄</th>
		<th>거래관리</th>
	</tr>
	</thead>
	<tbody>
	<?
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
		<?if($trade_stat==5){?>
		<td class="text-center"><input type="checkbox" name="check_list" value="<?=$row->idx?>"></td>
		<?}?>
		<td class="text-center"><?=$listNo;?></td>
		<td class="text-center"><?=$row->trade_code;?></td>
		<td class="text-center"><?=$row->order_name;?></a><?if($row->device=="mobile"){?>&nbsp;<span class="badge">M</span><?}?></td>
		<td class="text-center">
			<? 
			if($row->order_userid){
			echo $row->order_userid;}
			else{
			echo "<font color='#FF9933'>비회원</font>";}
			?>
		</td>
		</td>
		<td class="text-center"><font color="#FF0000"><?=number_format($row->trade_total_price);?></font>&nbsp;</td>
		<td class="text-center">
			<? 
			if($row->trade_method==1)				{echo('무통장');}
			 else if($row->trade_method==2)		{echo('카 드');}
			 else if($row->trade_method==3)		{echo('계좌이체');}
			 else if($row->trade_method==10)	{echo('적립금');}
			?>
		</td>
		<td class="text-center"><?=$row->order_phone;?></td>
		<td class="text-center"><?=$tools->strDateCut($row->trade_day,3);?></td>
		<td class="text-center">
			<select name="trade_stat" class="form-control input-sm ajax-select" data-dbname="<?=$table?>" data-idx="<?=$row->idx?>">
				<option value="1" <? if( $row->trade_stat == 1 ) { echo("selected");} ?>>결제대기</option>
				<option value="2" <? if( $row->trade_stat == 2 ) { echo("selected");} ?>>결제완료</option>
				<option value="3" <? if( $row->trade_stat == 3 ) { echo("selected");} ?>>상품배송중</option>
				<option value="4" <? if( $row->trade_stat == 4 ) { echo("selected");} ?>>배송완료</option>
				<option value="5" <? if( $row->trade_stat == 5 ) { echo("selected");} ?>>주문취소</option>
			</select>
		</td>
		<td class="text-center">
			<a href="javascript:;" class="btn btn-success btn-sm" onClick="openOderprint('<?=$row->trade_code;?>');"><i class="glyphicon glyphicon-print"></i></a>
		</td>
		<td class="text-center">
			<a href="javascript:;" class="btn btn-default btn-sm" onClick="invoiceWinOpen('<?=$row->idx;?>');">송장</a>&nbsp;
			<a href="./trade_view.php?<?=$param_url?>&idx=<?=$row->idx?>" class="btn btn-default btn-sm">상세</a>&nbsp;
		</td>
	</tr>
	<?
		$listNo--;
		}
	?>
	<? if( !$totalList ) { ?>
	<tr>
		<td colspan="12" class="text-center"> 거래 내역이 없습니다.</td>
	</tr>
	<?}?>
	</tbody>
	</table>
	</div>


	<div class="text-center">
		<ul class="pagination">
		<?
			if( $totalList > $listScale ) {
				if( $startPage+1 > $listScale*$pageScale ) {
					$prePage = $startPage - $listScale * $pageScale;
					echo "<li><a href='$_SERVER[PHP_SELF]?$param_url&startPage=$prePage'><span aria-hidden='true'>&laquo;</span></a></li>";
				}
				for( $j=0; $j<$pageScale; $j++ ) {
					$nextPage = ($totalPage * $pageScale + $j) * $listScale;
					$pageNum = $totalPage * $pageScale + $j+1;
					if( $nextPage < $totalList ) {
						if( $nextPage!= $startPage ) {
							echo "<li><a href='$_SERVER[PHP_SELF]?$param_url&startPage=$nextPage'>$pageNum</a></li>";
						} else {
							echo "<li class='active'><a href='javascript:;'>$pageNum</a></li>";
						}
					}
				}
				if( $totalList > (($totalPage+1) * $listScale * $pageScale)) {
					$nNextPage = ($totalPage+1) * $listScale * $pageScale;
					echo "<li><a href='$_SERVER[PHP_SELF]?$param_url&startPage=$nNextPage'><span aria-hidden='true'>&raquo;</span></a></li>";
				}
			}
			if( $totalList <= $listScale) {
				echo "<li class='active'><a href='javascript:;' >1</a></li>";
			}
			
		?>
		</ul>
	</div>


<? include('../footer.php');?>