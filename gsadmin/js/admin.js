$( document ).ready(function() {  
	var site_host = location.protocol + "//" + location.host;

	//checkbox 전체체크
	$("#allCheck").click(function(){
		if($("#allCheck").prop("checked")) {
			$("input[name=check_list]").prop("checked",true);
		} else {
			$("input[name=check_list]").prop("checked",false);
		}
	})

	//달력
	$('.datetime').datetimepicker({pickTime: false});

	//설명요약
	$('[data-toggle="tooltip"]').tooltip();

	//추가표시(제품)
	$('input[name=icon_arr]').click(function() {
		var f = document.tx_editor_form;
		var items=[];
		$('input[name="icon_arr"]:checkbox:checked').each(function(){
			items.push($(this).val());
		});
		var tmp = items.join('|');
		f.icon.value=tmp;
	});
});


//게시판 카테고리 관리
function cate_pop(code){
	window.open('/gsadmin/basic/cate_popup.php?code='+code+'','팝업','width=600,height=700, menubar=no, status=no, boolbar=no,scrollbars=yes');
}


//우편번호
function openDaumPostcode() {
	new daum.Postcode({
		oncomplete: function(data) {
			document.getElementById('zip_new').value = data.zonecode;
			document.getElementById('add1').value = data.address;
			document.getElementById('add2').focus();
		}
	}).open();
}

// 포인트 설정창 오픈
function pointWinOpen(data) {
	window.open("../member/point.php?userid="+data,"pointWinOpen","scrollbars=yes, width=700, height=700");
}

//주문내역 
function openOderprint(trade_code) {
	window.open("../order/trade_view_print.php?trade_code="+trade_code,"openOderprint","scrollbars=yes, width=850, height=600");
}

//송장번호 입력
function invoiceWinOpen(data) {
		window.open("../order/invoice.php?trade_idx="+data,"invoiceWinOpen","scrollbars=yes, width=450, height=350");
}

$(function() {
	$(".ajax-select").change(function() {
		
		var table		= $(this).attr("data-table");
		var idx			= $(this).attr("data-idx");
		var name		= $(this).attr("name");
		var val			= $("option:selected", this).attr("value");

		var postData = 
			{ 
				"table": table,
				"idx": idx,
				"name": name,
				"val": val
			};

		if(name=="trade_stat"){ 
					if(val==1){var msg = "[결제대기]";}
			else if(val==2){var msg = "[결제완료]";}
			else if(val==3){var msg = "[상품배송중]";}
			else if(val==4){var msg = "[배송완료]";}
			else if(val==5){var msg = "[주문취소]";}	
		}else if(name=="level"){
			var msg = "[회원레벨]";
		}
		ans = confirm(msg + " 변경하시겠습니까?");
		if(ans==true){
		$.ajax({
			url : "../ajax/select.php",
			type: "post",
			data: postData,
			success:function(){ 
				location.reload();
			}
		});
		}

	});//.ajax-select


	$(".ajax-checkbox").click(function() {

		var checkboxVal = [];
		$("input[name='check_list']:checked").each(function(i) {
			checkboxVal.push($(this).val());
		});

		var table	= $(this).attr("data-table");
		var idx		= checkboxVal;
		var name	= $(this).attr("data-name");
		var val		= $(this).attr("data-val");

		var postData = 
			{ 
				"table": table,
				"idx": idx,
				"name": name,
				"val": val
			};

		if(name=="delete"){var msg = "[삭제]";}
	
		if(  $("input:checkbox[name='check_list']").is(":checked") ){
			ans = confirm(msg + " " + "하시겠습니까?");
			if(ans==true){		
			$.ajax({
				url : "../ajax/checkbox.php",
				type: "post",
				data: postData,
				success:function(obj){ 
					if(table=="cs_zzim"){
						zzim_load();
					}else{
						location.reload();
					}
				}
			});
			}
		}else{
			alert(msg+" "+"항목을 선택하여 주세요.");
		}
	
	});//.ajax-checkbox


	$(".ajax-button").click(function() {

		var table	= $(this).attr("data-table");
		var name	= $(this).attr("data-name");
		var idx		= $(this).attr("data-idx");
		var val		= $(this).attr("data-val");

		var postData = { 
				"table": table,
				"name": name,
				"idx": idx,
				"val": val
			};
		$.ajax({
			url : "../ajax/button.php",
			type: "post",
			data: postData,
			success:function(result){ 
				location.reload();
			}
		});
	});//.ajax-button

	$(".ranking-up").click(function() {
		var $option = $("#ranking_list option:selected");
		var $no = $(this).attr("data-no");
		if($option.size() > 0) {
			if($no==1){
				if($option.length==1){
					$option.insertBefore($option.prev());
				}else{
					$option.insertBefore($option.prevAll().eq($option.length-1));
				}
			}else if($no>1){
				$option.insertBefore($option.prevAll().eq($no-1));
			}else{
				 $option.insertBefore($option.prevAll().last());
			}
		}
	});

	$(".ranking-down").click(function() {
		var $option = $("#ranking_list option:selected");
		var $no = $(this).attr("data-no");
		if($option.size() > 0) {
			if($no==1){
				if($option.length==1){
					$option.insertAfter($option.next());
				}else{
					$option.insertAfter($option.nextAll().eq($option.length-1));
				}
			}else if($no>1){
				$option.insertAfter($option.nextAll().eq($no-1));
			}else{
				$option.insertAfter($option.nextAll().last());
			}
		}
	});

});


//테이블 순서변경
function moveUp(el){
	var $tr = $(el).parent().parent(); // 클릭한 버튼이 속한 tr 요소
	$tr.prev().before($tr); // 현재 tr 의 이전 tr 앞에 선택한 tr 넣기
}

function moveDown(el){
	var $tr = $(el).parent().parent(); // 클릭한 버튼이 속한 tr 요소
	$tr.next().after($tr); // 현재 tr 의 다음 tr 뒤에 선택한 tr 넣기
}