		var name = "#quickMenu";
		var menuYloc = null;
		(function($) {
			$(document).ready(function() {
				if (document.getElementById("quickMenu") == null)
				{
					return;
				}
				menuYloc = parseInt($(name).css("top").substring(0,$(name).css("top").indexOf("px")))
				$(window).scroll(function () {
					offset = menuYloc+$(document).scrollTop()+"px";
					$(name).animate({top:offset},{duration:300,queue:false});
				});
				var rollover = {
					newimage: function(src) {
						return src.substring(0, src.search(/(\.[a-z]+)$/) ) + 'on' + src.match(/(\.[a-z]+)$/)[0];
					},
					oldimage: function(src) {
						return src.replace(/on\./, '.');
					},
					init: function() {
						$("#nav li > a.act > img").each( function() {
							$(this).removeClass('roll').attr( 'src', rollover.newimage($(this).attr('src')) );
						} );
						$(".roll").hover(
							function () { $(this).attr( 'src', rollover.newimage($(this).attr('src')) ); },
							function () { $(this).attr( 'src', rollover.oldimage($(this).attr('src')) ); }
						);
					}
				};
				rollover.init();
				$( 'img', $('#nav > li > a') ).click( function() {
					$( 'img', $('#nav > li > a') ).each( function() {
						$(this).attr('src', $(this).attr('src').replace('on', ''));
					} );
					$(this).attr('src', $(this).attr('src').replace('.png', '') + '.png');
				} );
				$('#nav ol').css( { 'opacity': '0'});
				$('#nav > li > a').click(
					function() {
						var checkElement = $(this).next();
						var d=0;
						if((checkElement.is('ol')) && (checkElement.is('.current'))) {
							checkElement.removeClass('current').animate({ left:"0px", opacity: 0}, d+=0);
							return false;
						}
						if((checkElement.is('ol')) && (!checkElement.is('.current'))) {
							$('ol.current').removeClass('current').animate({ left:"0px"}, 0);
							$('ol').animate({ opacity: 0}, 0);
							checkElement.animate({ left: "185px"}, 0).addClass('current');
							checkElement.animate({ opacity: 0.90}, 300)
							return false;
						}
					}
				);
				jQuery("#nav").find(".menu").each(function(){
					jQuery(this).find("ol").css("left", 0);
				})




				var dh = $(document).height();
				var wh = $(window).height();
				var lmH = '495';
				$(window).load(function(){
					if( $(window).height() < $(document).height() ) {
						$('#nav ol, #nav, #wrap').height($(document).height());
						$('#lmLast').height(dh - lmH);
					} else {
						$('#nav ol, #nav, #wrap').height($(window).height());
					}

				});

			});
		})(jQuery);


function goLastzine(obj)
{
	if (obj.options[obj.selectedIndex].value != "")
	{
		top.location.href = obj.options[obj.selectedIndex].value;
	}
}

//자동이동  타이머 (메인비쥬얼)
var layerNumberM = 5;
var TimerM =	"3000"; //1000 = 1초

setInterval(moveTurnM,TimerM);

var layTrunM = 1;
function moveTurnM(){

	todayLayerM(layTrunM);

	layTrunM++;
	if (layTrunM >= layerNumberM)
	{
		layTrunM  = 1;
	}
}

//선택레이어 보이기 (메인비쥬얼)
function todayLayerM(strM) {
	var layM ;

	for(i=1;i<10;i++){
	layM = document.getElementById("todayAreaM"+i);

		if(layM){
			if(i==strM){
				layM.style.display = "block";
			}else{
				layM.style.display = "none";
			}
		}
	}
}


 // wait for the DOM to be loaded
        $(document).ready(function() {

			dataInput();

			fLoadData("#modal_list","/gsadmin/bbs/ajax_modal.php?code=notice_1");

			var options3 = {//
				beforeSubmit:validateRank,
				success:showResponseRank
			};
			$('#myform').ajaxForm(options3);
		
		
		});


function validateRank(formData, jqForm, options3) {//
			dataInput();
			var frm = document.myform;

			var form=document.myform;
			var data_cnt=0;

			form.hidden_goods_list.value="";
			for( data_cnt=0; data_cnt < form.goods_list.length; data_cnt ++) {
				form.hidden_goods_list.value =form.hidden_goods_list.value + form.goods_list.options[data_cnt].value;
				form.hidden_goods_list.value= form.hidden_goods_list.value + "&&";
			}


			if (frm.hidden_goods_list.value==""){
				alert("정확한 입력이 필요합니다.");
				
				return false;
			}



		}

function showResponseRank(responseText, statusText, xhr, $form)  {//
		alert(responseText);
	if(responseText=='y'){
			
			alert('수정 되었습니다.');
			fLoadData("#modal_list","/gsadmin/bbs/ajax_modal.php?code=notice_1");

	}else if(responseText=='n'){
			
			alert("실패");

	}
}




function fLoadData(divID,strUrl){
	$.ajax({
		type: "POST",
		url: strUrl,
		data: "",
		success: function(resultText){
			$(divID).html(resultText);
		},
		error: function() {
			//alert("호출에 실패했습니다.");
		}
	});
}