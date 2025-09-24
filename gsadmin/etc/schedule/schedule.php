<?
$mod="ETC";
$menu="schedule";
include("../../header.php");
?>

<?
	if (empty($year)) {
		$year	= date("Y");
		$month	= date("m");
	}

	$prev		= date("Y-m",mktime(0,0,0,$month-1,1,$year));
	$prevArray	= split("-",$prev);
	$prevYear	= $prevArray[0];
	$prevMonth	= $prevArray[1];

	$next		= date("Y-m",mktime(0,0,0,$month+1,1,$year));
	$nextArray	= split("-",$next);
	$nextYear	= $nextArray[0];
	$nextMonth	= $nextArray[1];

	$FirstDayPosition	= date("w",mktime(0,0,0,$month,1,$year)) + 1;  
	$TotalDay			= date("t", mktime(0, 0, 0, $month, 1, $year));
?>	

	<h4 class="page-header">일정관리</h4>

	<div class="text-center">
		<h3>
			<a href="<?=$_SERVER['PHP_SELF']?>?year=<?=$prevYear?>&month=<?=$prevMonth?>" class="btn btn-primary btn-sm active glyphicon glyphicon-chevron-left"></a>&nbsp;&nbsp;
				<?=$year?>년<?=$month?>월&nbsp;&nbsp;
			<a href="<?=$_SERVER['PHP_SELF']?>?year=<?=$nextYear?>&month=<?=$nextMonth?>" class="btn btn-primary btn-sm active glyphicon glyphicon-chevron-right"></a>
		</h3>
	</div>

	<table class="table table-bordered">
	<colgroup>
	<col width="14%" />
	<col width="14%" />
	<col width="14%" />
	<col width="14%" />
	<col width="14%" />
	<col width="14%" />
	<col width="14%" />
	</colgroup>
	<thead>
	<tr>
	<th class="sun">일</th>
	<th>월</th>
	<th>화</th>
	<th>수</th>
	<th>목</th>
	<th>금</th>
	<th class="sat">토</th>
	</tr>
	</thead>
	<tbody>
	<tr>							
	<?
		$line = 5;
		if (($FirstDayPosition > 5) && (ceil($TotalDay/5) == 7)) $line = 6;
		if (($FirstDayPosition == 1) && ($TotalDay == 28)) $line =4;
		if (($FirstDayPosition == 7) && (ceil(($TotalDay+1)/5) == 7)) $line = 6;
		$k = 0;

		for ($i=1; $i<=$line; $i++) {
	?>
		<tr style="height:1px;">
			<?
			for ($j=1; $j<=7; $j++) {
			if ((!$day) && ($j == $FirstDayPosition)) $day = 1;

			$classValue = "";
			if ($j == 1) $classValue = "red";
			if ($j == 7) $classValue = "blue";
			?>
		
		<?if ($day > 0){?>
			<td>
				<h5 style="color:<?=$classValue?>;" ><?=$day?></h5>
				<? if($day>0){ ?>
				<button type="button" class="btn btn-success btn-xs" onClick="SelectedDay('<?=$year."-".$month."-".$day?>');">입력</button>
				<? } ?>
				<dd class="text-left" style="WORD-BREAK:break-all;">				
				<?
				$monthlen = strlen($month);
				if($monthlen==1){ $month = "0".$month; }
				
				$daylen = strlen($day);
				if($daylen==1){ $day = "0".$day; }
				
				$dates = $year."-".$month."-".$day;
				$query = "select * from cs_schedule where calendar_date='$dates' order by idx asc";
				$rs = mysqli_query($db2,$query);
				$counts = mysqli_num_rows($rs);
				
				if($counts==0){} else {?>
					<br>
					<?
					$kk=1;
					while($row1 = mysqli_fetch_array($rs)){
					$gub = $row1['idx'].$day;
					?>
						<button type="button" onClick="selectDay('<?=$row1['idx']?>');"><span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;<? echo $row1['subject'] ?></button><p></p>
					<? $kk++; } ?>
				<? } ?><!-- data-toggle="tooltip" data-placement="left" title="<?=$row1[subject]?>" -->
				</dd>
			</td>

		<? } else {?>

			<td>
				<h5><?=$day?></h5>
				<? if($day>0){ ?>
				<button type="button" class="btn btn-success btn-xs" onClick="SelectedDay('<?=$admin_id?>','<?=$admin_name?>','<?=$year."-".$month."-".$day?>');">입력</button>
				<? } ?>			
			</td>

		<?}?>

		<?
			if ($day != $TotalDay) {
				if (($day > 0) && ($day < $TotalDay)) $day++;
			} else {
				$day = " ";
			}
		}
		?>
		</tr>
	<?
		}
	?>

	</tbody>
	</table>

<script type="text/javascript">
<!--
//일정등록*
function SelectedDay(calendar_date) {
	var popupX = (window.screen.width / 2) - (800 / 2);
	var popupY= (window.screen.height /2) - (700 / 2);
	var URL = "./schedule_write.php?calendar_date=" + calendar_date
	window.open(URL, 'subwindows', 'status=no, width=800, height=700, left='+ popupX + ', top='+ popupY + ', screenX='+ popupX + ', screenY= '+ popupY);
}

//일정수정
function selectDay(idx) {
	var popupX = (window.screen.width / 2) - (800 / 2);
	var popupY= (window.screen.height /2) - (700 / 2);
	var URL = "./schedule_edit.php?idx=" + idx
	window.open(URL, 'subwindows', 'status=no, width=800, height=700, left='+ popupX + ', top='+ popupY + ', screenX='+ popupX + ', screenY= '+ popupY);
}
//-->
</script>

<? include('../../footer.php');?>