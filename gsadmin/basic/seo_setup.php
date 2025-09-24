<? 
$mod	= "basic";	
$menu	= "seo_setup";
include('../header.php'); 

if($lang==""){ $lang = 1; }

$row = $db->object("cs_seo","where lang='$lang'");
?>

	<h4 class="page-header">검색엔진 최적화(SEO)</h4>


	<div class="form-group" style="display:none;">
		<div class="btn-group"><a href="./seo_setup.php?lang=1" class="btn btn-sm btn-<?if($lang=="1"){?>warning active<?}else{?>default<?}?>">국문</a></div>
		<div class="btn-group"><a href="./seo_setup.php?lang=2" class="btn btn-sm btn-<?if($lang=="2"){?>warning active<?}else{?>default<?}?>">영문</a></div>
		<div class="btn-group"><a href="./seo_setup.php?lang=3" class="btn btn-sm btn-<?if($lang=="3"){?>warning active<?}else{?>default<?}?>">중문</a></div>
		<div class="btn-group"><a href="./seo_setup.php?lang=4" class="btn btn-sm btn-<?if($lang=="4"){?>warning active<?}else{?>default<?}?>">일문</a></div>
	</div>
	<div>&nbsp;</div>

	<form name="seo_form" action="seo_setup_ok.php" method="post">
	<input type="hidden" name="mode" value="seo" />
	<input type="hidden" name="lang" value="<?=$lang?>">
	<table class="table table-bordered">
	<colgroup>
	<col width="15%">
	<col width="*%">
	</colgroup>
	<tbody>
	<tr>
		<th>메타태그 : Title <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="right" title="- 타이틀은 인터넷 브라우저 상단에 출력되는 문구이자, 검색엔진의 검색결과에서 제목부분으로 나타납니다. 타이틀은 간단명료하면서 페이지 내용에 대한 정보를 제공할 수 있도록 작성하는 것이 좋습니다."><span class="glyphicon glyphicon-question-sign"></span></button></th>
		<td><input name="title" type="text" class="form-control" value="<?=$row->title;?>"></td>
	</tr>
	<tr>
		<th>메타태그 : Description <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="right" title="- 검색엔진의 검색결과에서 페이지의 요약내용을 보여주는 부분으로 1-2개의 문장이나 짧은 단락을 사용하는 것이 좋습니다."><span class="glyphicon glyphicon-question-sign"></span></button></th>
		<td><input name="description" type="text" class="form-control" value="<?=$row->description;?>"></td>
	</tr>
	<tr>
		<th>메타태그 : Keywords <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="right" title="- 사용자가 많이 검색하는 검색어 및 사이트와 연관된 키워드 정보를 기입합니다."><span class="glyphicon glyphicon-question-sign"></span></button></th>
		<td>
			<textarea name="keywords" class="form-control" rows="5"><?=$row->keywords;?></textarea>
			- 키워드는 콤마(,)로 구분하여 연속적으로 입력하세요. (예: 여성의류, 오피스룩, 악세사리)
		</td>
	</tr>
	<tr>
		<td colspan="2" class="text-right">
			<br>
			<font color="red">- content 안에 들어가는 코드를 입력해주시기 바랍니다.</font>
		</td>
	</tr>
	<tr>
		<th><a href="https://webmastertool.naver.com/" target="_blank">네이버 웹마스터도구<br>코드 입력</a> <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="right" title="- 네이버에서 서비스 하는 검색엔진 최적화 및 검색과 관련된 분석에 사용되는 분석 도구입니다."><span class="glyphicon glyphicon-question-sign"></span></button></td>
		<td><input name="naver_meta" type="text" class="form-control" placeholder="" value="<?=$row->naver_meta;?>"></td>
	</tr>
	<tr>
		<th><a href="https://www.google.com/webmasters/tools/home?hl=ko" target="_blank">구글 웹마스터도구<br>코드 입력</a> <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="right" title="- 구글에서 서비스 하는 검색엔진 최적화 및 검색과 관련된 분석에 사용되는 분석 도구입니다."><span class="glyphicon glyphicon-question-sign"></span></button></td>
		<td><input name="google_meta" type="text" class="form-control" placeholder="" value="<?=$row->google_meta;?>"></td>
	</tr>
	<tr style="display:none;">
		<th>전환 스크립트 <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="right" title="- 구글이나 네이버에서 받은 공통 전환 스크립트 소스를 입력 합니다."><span class="glyphicon glyphicon-question-sign"></span></button></th>
		<td>
			<textarea name="script_content" class="form-control" rows="10"><?=$row->script_content;?></textarea>
		</td>
	</tr>
	</tbody>
	</table>
	</form>

	<table class="table">
		<tr>
			<td class="text-center"><button type="button" class="btn btn-primary" onClick="sendit();">저장하기</button></td>
		</tr>
	</table>

<script type="text/javascript">
<!--
function sendit() {
	var f=document.seo_form;
	f.submit();
}
//-->
</script>


<? include('../footer.php');?>