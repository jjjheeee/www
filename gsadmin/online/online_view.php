<?
$mod	= "online";	
$menu	= "online";
include("../header.php");

$row = $db->object("cs_online","where idx='$idx'");
?>

	<h4 class="page-header">온라인 신청서</h4>

	<table class="table table-bordered">
	<colgroup>
	<col width="15%">
	<col width="*">
	</colgroup>
	<tbody>
	<tr>
		<th>접수일</th>
		<td><?echo $row->reg_date?></td>
	</tr>
	<tr>
		<th>Country</th>
		<td><?echo $row->country?></td>
	</tr>
	<tr>
		<th>Affiliation</th>
		<td><?echo $row->affi?></td>
	</tr>
	<tr>
		<th>이 름</th>
		<td><?echo $row->name?></td>
	</tr>
	<tr>
		<th>Types of Inquiry</th>
		<td><?echo $row->inquiry?></td>
	</tr>
	<tr>
		<th>Classify</th>
		<td><?echo $row->classify?></td>
	</tr>
	<tr>
		<th>Model No / Serial Number</th>
		<td><?echo $row->modelno?></td>
	</tr>
	<tr>
		<th>휴대폰번호</th>
		<td><?echo $row->phone?></td>
	</tr>
	<tr>
		<th>이메일</th>
		<td><?echo $row->email?></td>
	</tr>
	<tr> 
		<th>첨부파일</th>
		<td><?if($row->bbs_file){ echo '<a href="./download.php?idx='.$row->idx.'&download=1">'.$row->sbbs_file.'</a>';}?></td>
	</tr>
	<tr>
		<th>내 용</th>
		<td><?echo nl2br($tools->strHtmlNoBr($row->content));?></td>
	</tr>
	</tbody>
	</table>


	<table class="table">
		<tr>
			<td class="text-center"><a href="<?echo $returnURL? $returnURL:"online.php";?>" class="btn btn-default" >목록</a></td>
		</tr>
	</table>

<? include('../footer.php');?>