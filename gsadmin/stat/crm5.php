<?
$mod	= "stat";	
$menu	= "crm5";
include("../header.php");
?>

<?
if(!$_GET['date']) { $_GET['date'] = 1;}

// 전체 접속자 수
$total_connect_cnt=$db->cnt("cs_connect", "");

$year_max= $db->row("cs_connect", "", "max(left(register, 4))");
$year_min= $db->row("cs_connect", "", "min(left(register, 4))");
?>
<script language="javascript">
<!--
function sendit() {
    var form=document.search_form;
	    form.submit();
}

function showMon(){
	var form=document.search_form;
	if(form.year.selectedIndex >0) {
		form.mon.style.display="";
	} else {
		form.mon.style.display="none";
		form.mon.selectedIndex=0;
	}

	if(form.mon.selectedIndex >0) {
		form.day.style.display="";
	} else {
		form.day.style.display="none";
		form.day.selectedIndex=0;
	}
}
//-->
</script>

	<h4 class="page-header">접속로그분석</h4>

<form method=get action="<?=$_SERVER['PHP_SELF'];?>" name="search_form" class="form-inline">
<input type="hidden" name="date" value="7">
<div class="well well-small">
<table width="100%">
	<tr>
		<td> 
			<a href="#" class="btn btn-default" align="absmiddle">기간검색</a>
			<select name="year" class="form-control" onChange="javascript:showMon();" >
			<option value="0" selected>연도별</option>
			<? for($year_go=$year_min[0]; $year_go<=$year_max[0]; $year_go++){?>
			<option value="<?=$year_go?>" <? if($_GET['year'] == $year_go) echo('selected');?>><?=$year_go?>년</option>
			<?}?>
			</select>
			<select name="mon" id="mon" class="form-control" style="display:none;" onChange="javascript:showMon();" >
			<option value="0" selected>월별</option>
			<? for($mon_go=1;$mon_go<13;$mon_go++){?>
			<option value="<?=$mon_go?>" <? if($_GET['mon'] == $mon_go) echo('selected');?>><?=$mon_go?>월</option>
			<?}?>
			</select>
			<select name="day" id="day" class="form-control" style="display:none;">
			<option value="0" selected>일별</option>
			<? for($day_go=1;$day_go<32;$day_go++){?>
			<option value="<?=$day_go?>" <? if($_GET['day'] == $day_go) echo('selected');?>><?=$day_go?>일</option>
			<?}?>
			</select>
			<button type="submit" class="btn btn-primary btn-sm" title="검색"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>&nbsp;&nbsp;&nbsp;<a href="<?=$_SERVER['PHP_SELF'];?>?date=4" class="btn btn-primary btn-sm">요일별</a> <a href="<?=$_SERVER['PHP_SELF'];?>?date=5" class="btn btn-primary btn-sm">IP별</a>
			<a href="<?=$_SERVER['PHP_SELF'];?>?date=6" class="btn btn-primary btn-sm">접속경로</a>
		</td>
		<td class="text-right">전체 접속자 : <?=$total_connect_cnt;?> </td>
	</tr>
</table>
</div>
</form>

<? if($_GET['date']==5 or $_GET['date']==6){ ?>

<!-- calendar -->
<link rel="stylesheet" type="text/css" media="screen" href="/gsadmin/calendar/css/bootstrap-datetimepicker.min.css" />
<script type="text/javascript" src="/gsadmin/calendar/js/moment.js"></script>
<script type="text/javascript" src="/gsadmin/calendar/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript">
		$(function () {
			for(var num=1; num<=20; num++){			
				$('#datetimepicker'+num).datetimepicker({			
					pickTime: false		
				});
			}				
		});
</script>
<!--/ calendar -->

<form method=get action="<?=$_SERVER['PHP_SELF'];?>" name="search_form2" class="form-inline">
<input type="hidden" name="date" value="<?=$_GET['date']?>">
<div class="well well-small">
<table width="100%">
	<tr>
		<td> 
			<a href="#" class="btn btn-default" align="absmiddle">기간검색</a>
			
					<div class='input-group date' id='datetimepicker1' style="width:160px;">
						<input type='text' class="form-control" name="sdate" data-date-format="YYYY-MM-DD"/>
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</span>
					</div>

					~

					<div class='input-group date' id='datetimepicker2' style="width:160px;">
						<input type='text' class="form-control" name="edate" data-date-format="YYYY-MM-DD"/>
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</span>
					</div>

			<button type="submit" class="btn btn-primary btn-sm" title="검색"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
		</td>
	</tr>
</table>
</div>
</form>

<? } ?>

<?
if($_GET['date']==1) {
	// 전체 접속자 수
	$total_connect_cnt=$db->cnt("cs_connect", "");
	$result=$db->result("select left(register, 4), count(ip) from cs_connect group by left(register, 4)");

	if(file_exists('../../data/csv/crm5.csv')) { unlink('../../data/csv/crm5.csv');    }  // 만일 이전에 만든 화일이 있으면 지운다
	$newline = chr(10);            //  LF(줄바꿈)의 ascii 값을 얻는다.
	$fp = fopen( "../../data/csv/crm5.csv", "w" ) or die("../../data/csv/crm5.csv 화일을 열수 없습니다") ;  // crm5.csv 를 새로 연다
	fwrite($fp,"연도, 접속수");		 //  타이틀 쓰고
	fwrite($fp,$newline);                     //  줄바꾸기
?>

<div class="table-responsive">
<table class="table table-bordered table-hover">
<colgroup>
<col width="20%">
<col width="25%">
<col width="*">
<col width="5%">
</colgroup>
<tr>
	<th>연도</th>
	<th>접속수</th>
	<th>접속수 그래프</th>
	<th></th>
</tr>
<?
while( $row = @mysqli_fetch_array( $result )) {
?>
<tr>
	<td style="text-align:center;"><?=$row[0];?></td>
	<td style="text-align:center;"><?=number_format($row[1]);?></td>
	<td>
		<? $total_cnt = intval( $row[1] / $total_connect_cnt * 10000 ) / 100;?>
		<div class="progress">
			<div class="progress progress-bar progress-bar-info progress-bar-striped active" role="progressbar"  aria-valuemax="100" style="width: <?=$total_cnt?>%"> </div>
		</div>
	</td>
	<td class="text-center"><?echo $total_cnt?>%</td>
</tr>
<?
	fwrite($fp, $row[0].",".$row[1]);
	fwrite($fp, $newline);     // 줄 바꾸기
}
fclose($fp);
?>
</table>
</div>
<?
} else if($_GET['date']==2) {
	// 전체 접속자 수
	$total_connect_cnt=$db->cnt("cs_connect", "");
	$result=$db->result("select substring(register, 6, 2), count(ip) from cs_connect group by substring(register, 6, 2)");

	if(file_exists('../../data/csv/crm5.csv')) { unlink('../../data/csv/crm5.csv');    }  // 만일 이전에 만든 화일이 있으면 지운다
	$newline = chr(10);            //  LF(줄바꿈)의 ascii 값을 얻는다.
	$fp = fopen( "../../data/csv/crm5.csv", "w" ) or die("../../data/csv/crm5.csv 화일을 열수 없습니다") ;  // crm5.csv 를 새로 연다
	fwrite($fp,"월별, 접속수");		 //  타이틀 쓰고
	fwrite($fp,$newline);                     //  줄바꾸기
?>
<div class="table-responsive">
<table class="table table-bordered table-hover">
<colgroup>
<col width="20%">
<col width="25%">
<col width="*">
<col width="5%">
</colgroup>
<tr>
	<th>월별</th>
	<th>접속수</th>
	<th>접속수 그래프</th>
</tr>
<?
while( $row = @mysqli_fetch_array( $result )) {
?>
<tr>
	<td><?=$row[0];?></td>
	<td><?=number_format($row[1]);?></td>
	<td>
		<? $total_cnt = intval( $row[1] / $total_connect_cnt * 10000 ) / 100;?>
		<div class="progress">
			<div class="progress progress-bar progress-bar-info progress-bar-striped active" role="progressbar"  aria-valuemax="100" style="width: <?=$total_cnt?>%"> </div>
		</div>
	</td>
	<td class="text-center"><?echo $total_cnt?>%</td>
</tr>
<?
	fwrite($fp, $row[0].",".$row[1]);
	fwrite($fp, $newline);     // 줄 바꾸기
}
fclose($fp);
?>
</thead>
</table>
</div>
<?
} else if($_GET['date']==3) {
	// 전체 접속자 수
	$total_connect_cnt=$db->cnt("cs_connect", "");
	$result=$db->result("select substring(register, 9, 2), count(ip) from cs_connect group by substring(register, 9, 2)");

	if(file_exists('../../data/csv/crm5.csv')) { unlink('../../data/csv/crm5.csv');    }  // 만일 이전에 만든 화일이 있으면 지운다
	$newline = chr(10);            //  LF(줄바꿈)의 ascii 값을 얻는다.
	$fp = fopen( "../../data/csv/crm5.csv", "w" ) or die("../../data/csv/crm5.csv 화일을 열수 없습니다") ;  // crm5.csv 를 새로 연다
	fwrite($fp,"일별, 접속수");		 //  타이틀 쓰고
	fwrite($fp,$newline);                     //  줄바꾸기
?>
<div class="table-responsive">
<table class="table table-bordered table-hover ">
<colgroup>
<col width="20%">
<col width="25%">
<col width="*">
<col width="5%">
</colgroup>
<tr>
	<th>일별</th>
	<th>접속수</th>
	<th>접속수 그래프</th>
	<th></th>
</tr>
<?
while( $row = @mysqli_fetch_array( $result )) {
?>
<tr>
	<td style="text-align:center;"><?=$row[0];?></td>
	<td style="text-align:center;"><?=number_format($row[1]);?></td>
	<td>
		<? $total_cnt = intval( $row[1] / $total_connect_cnt * 10000 ) / 100;?>
		<div class="progress">
			<div class="progress progress-bar progress-bar-info progress-bar-striped active" role="progressbar"  aria-valuemax="100" style="width: <?=$total_cnt?>%"> </div>
		</div>
	</td>
	<td class="text-center"><?echo $total_cnt?>%</td>
</tr>
<?
	fwrite($fp, $row[0].",".$row[1]);
	fwrite($fp, $newline);     // 줄 바꾸기
	}
fclose($fp);
?>
</thead>
</table>
</div>
<?
} else if($_GET['date']==4) {
	// 전체 접속자 수
	$total_connect_cnt=$db->cnt("cs_connect", "");
	$result=$db->result("select WEEKDAY(left(register, 10)), count(ip) from cs_connect group by WEEKDAY(left(register, 10))");

	if(file_exists('../../data/csv/crm5.csv')) { unlink('../../data/csv/crm5.csv');    }  // 만일 이전에 만든 화일이 있으면 지운다
	$newline = chr(10);            //  LF(줄바꿈)의 ascii 값을 얻는다.
	$fp = fopen( "../../data/csv/crm5.csv", "w" ) or die("../../data/csv/crm5.csv 화일을 열수 없습니다") ;  // crm5.csv 를 새로 연다
	fwrite($fp,"요일별, 접속자");		 //  타이틀 쓰고
	fwrite($fp,$newline);                     //  줄바꾸기
?>
<div class="table-responsive">
<table class="table table-bordered table-hover ">
<colgroup>
<col width="20%">
<col width="25%">
<col width="*">
<col width="5%">
</colgroup>
<tr>
	<th>요일별</th>
	<th>접속자</th>
	<th>접속수 그래프</th>
	<th></th>
</tr>
<?
while( $row = @mysqli_fetch_array( $result )) {
?>
<tr>
	<td class="text-center"><?=$tools->strDateWeek($row[0]);?></td>
	<td class="text-center"><?=number_format($row[1]);?></td>
	<td>
		<? $total_cnt = intval( $row[1] / $total_connect_cnt * 10000 ) / 100;?>
		<div class="progress">
			<div class="progress progress-bar progress-bar-info progress-bar-striped active" role="progressbar"  aria-valuemax="100" style="width: <?=$total_cnt?>%"> </div>
		</div>
	</td>
	<td class="text-center"><?echo $total_cnt?>%</td>
</tr>
<?
	fwrite($fp, $row[0].",".$row[1]);
	fwrite($fp, $newline);     // 줄 바꾸기
}
fclose($fp);
?>
</thead>
</table>
</div>
<?
} else if($_GET['date']==5) {
	// 전체 접속자 수
	$total_connect_cnt=$db->cnt("cs_connect", "");
	$listScale		= 10;
	$pageScale	= 10;
	if( !$startPage ) { $startPage = 0; }
	$totalPage = floor($startPage / ($listScale * $pageScale));

	$query		= "select count(ip) as CNT, ip from cs_connect where 1";
	if($_GET['sdate'] && $_GET['edate']){
		$query.=" and (DATE_FORMAT(register ,'%Y-%m-%d')>='$sdate' and DATE_FORMAT(register ,'%Y-%m-%d')<='$edate')";
	}
	$query.=" group by ip order by CNT desc";
	$rs				= mysqli_query($db2,$query);
	$totalList	= mysqli_num_rows($rs);

	$query = "select count(ip) as CNT, ip from cs_connect where 1";
	if($_GET['sdate'] && $_GET['edate']){
		$query.=" and (DATE_FORMAT(register ,'%Y-%m-%d')>='$sdate' and DATE_FORMAT(register ,'%Y-%m-%d')<='$edate')";
	}
	$query.="  group by ip order by CNT desc LIMIT $startPage, $listScale";
	$result = mysqli_query($db2,$query);

	if( $startPage ) { $listNo = $totalList - $startPage; } else { $listNo = $totalList; }


	if(file_exists('../../data/csv/crm5.csv')) { unlink('../../data/csv/crm5.csv');    }  // 만일 이전에 만든 화일이 있으면 지운다
	$newline = chr(10);            //  LF(줄바꿈)의 ascii 값을 얻는다.
	$fp = fopen( "../../data/csv/crm5.csv", "w" ) or die("../../data/csv/crm5.csv 화일을 열수 없습니다") ;  // crm5.csv 를 새로 연다
	fwrite($fp,"접속 IP, 접속수");		 //  타이틀 쓰고
	fwrite($fp,$newline);                     //  줄바꾸기
?>
<div class="table-responsive">
<table class="table table-bordered table-hover">
<colgroup>
<col width="20%">
<col width="25%">
<col width="*">
<col width="5%">
</colgroup>
<tr>
	<th>접속 IP</th>
	<th>접속수</th>
	<th>접속 그래프</th>
	<th></th>
</tr>
<?
	while($row = @mysqli_fetch_array( $result )){ 
?>
<tr>
	<td class="text-center"><?=$row[1];?></td>
	<td class="text-center"><?=$row[0];?></td>
	<td>
		<? $total_cnt = intval( $row[0] / $total_connect_cnt * 10000 ) / 100;?>
		<? $total_cnt_w = intval( $row[0] / $total_connect_cnt * 10000 ) / 100 * 3;?>
		<div class="progress">
			<div class="progress progress-bar progress-bar-info progress-bar-striped active" role="progressbar"  aria-valuemax="100" style="width: <?=$total_cnt?>%"> </div>
		</div>
	</td>
	<td class="text-center"><?echo $total_cnt?>%</td>
</tr>
<?
	fwrite($fp, $row[1].",".$row[0]);
	fwrite($fp, $newline);     // 줄 바꾸기
	$listNo--;
}
fclose($fp);
?>
</thead>
</table>
</div>
<?
} else if($_GET['date']==6) {
	// 전체 접속자 수
	$total_connect_cnt=$db->cnt("cs_connect", "");

	$listScale		= 10;
	$pageScale	= 10;
	if( !$startPage ) { $startPage = 0; }
	$totalPage = floor($startPage / ($listScale * $pageScale));

	$query		= "select count(url) as CNT, url from cs_connect where 1";
	if($_GET['sdate'] && $_GET['edate']){
		$query.=" and (DATE_FORMAT(register ,'%Y-%m-%d')>='$sdate' and DATE_FORMAT(register ,'%Y-%m-%d')<='$edate')";
	}
	$query.=" group by url order by CNT desc";
	$rs				= mysqli_query($db2,$query);
	$totalList	= mysqli_num_rows($rs);

	$query = "select count(url) as CNT, url from cs_connect where 1";
	if($_GET['sdate'] && $_GET['edate']){
		$query.=" and (DATE_FORMAT(register ,'%Y-%m-%d')>='$sdate' and DATE_FORMAT(register ,'%Y-%m-%d')<='$edate')";
	}
	$query.="  group by url order by CNT desc LIMIT $startPage, $listScale";
	$result = mysqli_query($db2,$query);

	if( $startPage ) { $listNo = $totalList - $startPage; } else { $listNo = $totalList; }

	if(file_exists('../../data/csv/crm5.csv')) { unlink('../../data/csv/crm5.csv');    }  // 만일 이전에 만든 화일이 있으면 지운다
	$newline = chr(10);            //  LF(줄바꿈)의 ascii 값을 얻는다.
	$fp = fopen( "../../data/csv/crm5.csv", "w" ) or die("../../data/csv/crm5.csv 화일을 열수 없습니다") ;  // crm5.csv 를 새로 연다
	fwrite($fp,"접속수, 접속URL");		 //  타이틀 쓰고
	fwrite($fp,$newline);                     //  줄바꾸기
?>
<div class="table-responsive">
<table class="table table-bordered table-hover ">
<colgroup>
<col width="20%">
<col width="55%">
<col width="*">
<col width="5%">
</colgroup>
<tr>
	<th>접속수</th>
	<th>접속URL</th>
	<th>접속수 그래프</th>
	<th></th>
</tr>
<?
	while($row = @mysqli_fetch_array( $result )){ 
?>
<tr>
	<td class="text-center"><?=$row[0];?></td>
	<td><? if($row[1]) {?> <a href="<?=$row[1];?>" target="_blank"><?=$tools->strCut($row[1], 80);?></a> <?} else {?> 즐겨찾기나 URL 주소 직접입력으로 방문 <?}?></td>
	<td>
		<? $total_cnt = intval( $row[0] / $total_connect_cnt * 10000 ) / 100;?>
		<div class="progress">
			<div class="progress progress-bar progress-bar-info progress-bar-striped active" role="progressbar"  aria-valuemax="100" style="width: <?=$total_cnt?>%"> </div>
		</div>
	</td>
	<td class="text-center"><?echo $total_cnt?>%</td>
</tr>
<?
	fwrite($fp, $row[0].",".$row[1]);
	fwrite($fp, $newline);     // 줄 바꾸기
	$listNo--;
}
fclose($fp);
?>
</table>
</div>
<?
} else if($_GET['date']==7 && $_GET['year']==0 && $_GET['mon']==0 && $_GET['day']==0) {
	// 전체 접속자 수
	$total_connect_cnt=$db->cnt("cs_connect", "");

	$listScale		= 10;
	$pageScale	= 10;
	if( !$startPage ) { $startPage = 0; }
	$totalPage = floor($startPage / ($listScale * $pageScale));

	$query		= "select left(register, 4), count(ip) from cs_connect group by left(register, 4)";
	$rs				= mysqli_query($db2,$query);
	$totalList	= mysqli_num_rows($rs);

	$query = "select left(register, 4), count(ip) from cs_connect ";
	$query.="  group by left(register, 4) LIMIT $startPage, $listScale";
	$result = mysqli_query($db2,$query);

	if( $startPage ) { $listNo = $totalList - $startPage; } else { $listNo = $totalList; }

	if(file_exists('../../data/csv/crm5.csv')) { unlink('../../data/csv/crm5.csv');    }  // 만일 이전에 만든 화일이 있으면 지운다
	$newline = chr(10);            //  LF(줄바꿈)의 ascii 값을 얻는다.
	$fp = fopen( "../../data/csv/crm5.csv", "w" ) or die("../../data/csv/crm5.csv 화일을 열수 없습니다") ;  // crm5.csv 를 새로 연다
	fwrite($fp,"연도, 접속수");		 //  타이틀 쓰고
	fwrite($fp,$newline);                     //  줄바꾸기
?>
<div class="table-responsive">
<table class="table table-bordered table-hover ">
<colgroup>
<col width="20%">
<col width="25%">
<col width="*">
<col width="5%">
</colgroup>
<tr>
	<th>연도</th>
	<th>접속수</th>
	<th>접속수 그래프</th>
	<th></th>
</tr>
<?
	while($row = @mysqli_fetch_array( $result )){ 
?>
<tr>
	<td class="text-center"><?=$row[0];?></td>
	<td class="text-center"><?=number_format($row[1]);?></td>
	<td>
		<? $total_cnt = intval( $row[1] / $total_connect_cnt * 10000 ) / 100;?>
		<div class="progress">
			<div class="progress progress-bar progress-bar-info progress-bar-striped active" role="progressbar"  aria-valuemax="100" style="width: <?=$total_cnt?>%"> </div>
		</div>
	</td>
	<td class="text-center"><?echo $total_cnt?>%</td>
</tr>
<?
	fwrite($fp, $row[0].",".$row[1]);
	fwrite($fp, $newline);     // 줄 바꾸기
	$listNo--;
}
fclose($fp);
?>
</thead>
</table>
</div>
<?
} else if($_GET['date']==7 && $_GET['year'] && $_GET['mon']==0 && $_GET['day']==0) {
	// 전체 접속자 수
	$total_connect_cnt=$db->cnt("cs_connect", "where left(register, 4)='$_GET[year]'");
	$listScale		= 10;
	$pageScale	= 10;
	if( !$startPage ) { $startPage = 0; }
	$totalPage = floor($startPage / ($listScale * $pageScale));

	$query		= "select substring(register, 6, 2), count(ip) from cs_connect where left(register, 4)='$_GET[year]' group by substring(register, 6, 2)";
	$rs				= mysqli_query($db2,$query);
	$totalList	= mysqli_num_rows($rs);

	$query = "select substring(register, 6, 2), count(ip) from cs_connect where left(register, 4)='$_GET[year]' ";
	$query.="  group by substring(register, 6, 2) LIMIT $startPage, $listScale";
	$result = mysqli_query($db2,$query);

	if( $startPage ) { $listNo = $totalList - $startPage; } else { $listNo = $totalList; }

	if(file_exists('../../data/csv/crm5.csv')) { unlink('../../data/csv/crm5.csv');    }  // 만일 이전에 만든 화일이 있으면 지운다
	$newline = chr(10);            //  LF(줄바꿈)의 ascii 값을 얻는다.
	$fp = fopen( "../../data/csv/crm5.csv", "w" ) or die("../../data/csv/crm5.csv 화일을 열수 없습니다") ;  // crm5.csv 를 새로 연다
	fwrite($fp,"월별, 접속수");		 //  타이틀 쓰고
	fwrite($fp,$newline);                     //  줄바꾸기
?>
<div class="table-responsive">
<table class="table table-bordered table-hover ">
<colgroup>
<col width="20%">
<col width="25%">
<col width="*">
<col width="5%">
</colgroup>
<tr>
	<th>월별</th>
	<th>접속수</th>
	<th>접속수 그래프</th>
	<th></th>
</tr>
<?
	while($row = @mysqli_fetch_array( $result )){ 
?>
<tr>
	<td class="text-center"><?=$row[0];?></td>
	<td class="text-center"><?=number_format($row[1]);?></td>
	<td>
		<? $total_cnt = intval( $row[1] / $total_connect_cnt * 10000 ) / 100;?>
		<div class="progress">
			<div class="progress progress-bar progress-bar-info progress-bar-striped active" role="progressbar"  aria-valuemax="100" style="width: <?=$total_cnt?>%"> </div>
		</div>
	</td>
	<td class="text-center"><?echo $total_cnt?>%</td>
</tr>
<?
	fwrite($fp, $row[0].",".$row[1]);
	fwrite($fp, $newline);     // 줄 바꾸기
	$listNo--;
}
fclose($fp);
?>
</table>
</div>	
<?
} else if($_GET['date']==7 && $_GET['year'] && $_GET['mon'] && $_GET['day']==0) {
	// 전체 접속자 수
	$total_connect_cnt=$db->cnt("cs_connect", "where left(register, 4)='$_GET[year]' and substring(register, 6, 2)=$_GET[mon]");
	$listScale		= 10;
	$pageScale	= 10;
	if( !$startPage ) { $startPage = 0; }
	$totalPage = floor($startPage / ($listScale * $pageScale));

	$query		= "select substring(register, 9, 2), count(ip) from cs_connect where left(register, 4)='$_GET[year]' and substring(register, 6, 2)=$_GET[mon] group by substring(register, 9, 2)";
	$rs				= mysqli_query($db2,$query);
	$totalList	= mysqli_num_rows($rs);

	$query = "select substring(register, 9, 2), count(ip) from cs_connect where left(register, 4)='$_GET[year]' and substring(register, 6, 2)=$_GET[mon] ";
	$query.="  group by substring(register, 9, 2) LIMIT $startPage, $listScale";
	$result = mysqli_query($db2,$query);

	if( $startPage ) { $listNo = $totalList - $startPage; } else { $listNo = $totalList; }

	if(file_exists('../../data/csv/crm5.csv')) { unlink('../../data/csv/crm5.csv');    }  // 만일 이전에 만든 화일이 있으면 지운다
	$newline = chr(10);            //  LF(줄바꿈)의 ascii 값을 얻는다.
	$fp = fopen( "../../data/csv/crm5.csv", "w" ) or die("../../data/csv/crm5.csv 화일을 열수 없습니다") ;  // crm5.csv 를 새로 연다
	fwrite($fp,"일별, 접속수");		 //  타이틀 쓰고
	fwrite($fp,$newline);                     //  줄바꾸기
?>
<div class="table-responsive">
<table class="table table-bordered table-hover ">
<colgroup>
<col width="20%">
<col width="25%">
<col width="*">
<col width="5%">
</colgroup>
<tr>
	<th>일별</th>
	<th>접속수</th>
	<th>접속수 그래프</th>
	<th></th>
</tr>
<?
		while($row = @mysqli_fetch_array( $result )){ 
?>
<tr>
	<td class="text-center"><?=$row[0];?></td>
	<td class="text-center"><?=number_format($row[1]);?></td>
	<td>
		<? $total_cnt = intval( $row[1] / $total_connect_cnt * 10000 ) / 100;?>
		<div class="progress">
			<div class="progress progress-bar progress-bar-info progress-bar-striped active" role="progressbar"  aria-valuemax="100" style="width: <?=$total_cnt?>%"> </div>
		</div>
	</td>
	<td class="text-center"><?echo $total_cnt?>%</td>
</tr>
<?
	fwrite($fp, $row[0].",".$row[1]);
	fwrite($fp, $newline);     // 줄 바꾸기
	$listNo--;
}
fclose($fp);
?>
</table>
</div>
<?
} else if($_GET['date']==7 && $_GET['year'] && $_GET['mon'] && $_GET['day']) {
	// 전체 접속자 수
	$total_connect_cnt=$db->cnt("cs_connect", "where left(register, 4)='$_GET[year]' and substring(register, 6, 2)=$_GET[mon] and substring(register, 9, 2)=$_GET[day]");
	$listScale		= 10;
	$pageScale	= 10;
	if( !$startPage ) { $startPage = 0; }
	$totalPage = floor($startPage / ($listScale * $pageScale));

	$query		= "select substring(register, 12, 2), count(ip) from cs_connect where left(register, 4)='$_GET[year]' and substring(register, 6, 2)=$_GET[mon] and substring(register, 9, 2)=$_GET[day] group by substring(register, 12, 2)";
	$rs				= mysqli_query($db2,$query);
	$totalList	= mysqli_num_rows($rs);

	$query = "select substring(register, 12, 2), count(ip) from cs_connect where left(register, 4)='$_GET[year]' and substring(register, 6, 2)=$_GET[mon] and substring(register, 9, 2)=$_GET[day] ";
	$query.="  group by substring(register, 12, 2)  LIMIT $startPage, $listScale";
	$result = mysqli_query($db2,$query);

	if( $startPage ) { $listNo = $totalList - $startPage; } else { $listNo = $totalList; }

	if(file_exists('../../data/csv/crm5.csv')) { unlink('../../data/csv/crm5.csv');    }  // 만일 이전에 만든 화일이 있으면 지운다
	$newline = chr(10);            //  LF(줄바꿈)의 ascii 값을 얻는다.
	$fp = fopen( "../../data/csv/crm5.csv", "w" ) or die("../../data/csv/crm5.csv 화일을 열수 없습니다") ;  // crm5.csv 를 새로 연다
	fwrite($fp,"시간별, 접속수");		 //  타이틀 쓰고
	fwrite($fp,$newline);                     //  줄바꾸기
?>
<div class="table-responsive">
<table class="table table-bordered table-hover ">
<colgroup>
<col width="20%">
<col width="25%">
<col width="*">
<col width="5%">
</colgroup>
<tr>
	<th>시간별</th>
	<th>접속수</th>
	<th>접속수 그래프</th>
	<th></th>
</tr>
<?
	while($row = @mysqli_fetch_array( $result )){ 
?>
<tr>
	<td class="text-center"><?=$row[0];?></td>
	<td class="text-center"><?=number_format($row[1]);?></td>
	<td>
		<? $total_cnt = intval( $row[1] / $total_connect_cnt * 10000 ) / 100;?>
		<div class="progress">
			<div class="progress progress-bar progress-bar-info progress-bar-striped active" role="progressbar"  aria-valuemax="100" style="width: <?=$total_cnt?>%"> </div>
		</div>
	</td>
	<td class="text-center"><?echo $total_cnt?>%</td>
</tr>
<?
	fwrite($fp, $row[0].",".$row[1]);
	fwrite($fp, $newline);     // 줄 바꾸기
	$listNo--;
}
fclose($fp);
?>
</table>
</div>
<?}?>


<?if($_GET['date']==5 || $_GET['date']==6 || $_GET['date']==7){?>
<div class="text-center">
  <ul class="pagination">
	<?
	if( $totalList > $listScale ) {
		if( $startPage+1 > $listScale*$pageScale ) {
			$prePage = $startPage - $listScale * $pageScale;

			echo "<li><a href='$_SERVER[PHP_SELF]?date=$date&year=$year&mon=$mon&day=$day&key=$key&keyfield=$keyfield&sdate=$sdate&edate=$edate&startPage=$prePage'><span aria-hidden='true'>&laquo;</span></a></li>";
		}

		for( $j=0; $j<$pageScale; $j++ ) {
			$nextPage = ($totalPage * $pageScale + $j) * $listScale;
			$pageNum = $totalPage * $pageScale + $j+1;
			if( $nextPage < $totalList ) {
				if( $nextPage!= $startPage ) {

					echo "<li><a href='$_SERVER[PHP_SELF]?date=$date&year=$year&mon=$mon&day=$day&key=$key&keyfield=$keyfield&sdate=$sdate&edate=$edate&startPage=$nextPage'>$pageNum</a></li>";
				} else {
					echo " <li class='active'><a href='javascript:;'>$pageNum</a></li>";
				}
			}
		}

		if( $totalList > (($totalPage+1) * $listScale * $pageScale)) {
			$nNextPage = ($totalPage+1) * $listScale * $pageScale;

			echo "<li><a href='$_SERVER[PHP_SELF]?date=$date&year=$year&mon=$mon&day=$day&key=$key&keyfield=$keyfield&sdate=$sdate&edate=$edate&startPage=$nNextPage'><span aria-hidden='true'>&raquo;</span></a></li>";
		}
	}
	if( $totalList <= $listScale) {
		echo "<li class='active'><a href='javascript:;'>1</a>";
	}
	mysqli_close();
	?>	 
	</ul>
</div>
<?}?>

<script language="JavaScript">
<!--
showMon();
//-->
</script>
<? include('../footer.php');?>