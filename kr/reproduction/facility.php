<?
$page_num = "03";
$sub_num = "02";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "reproduction";
$sub_section = "facility";
$page_info = "첨단 재생 의료";
$sub_info = "세포처리시설";
$content_type="wide";
// $sub_info2 = "3차메뉴";	// 사용안할시 주석처리
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(Description)	필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>

<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>

<style>
	body, table, th, td, button, select, input, textarea {
		font-family:'Pretendard', "나눔고딕", NanumGothic, "Nanum Gothic","돋움", Dotum, Arial, sans-serif;
	
	}

	/* .facility-tit {font-size:36px; color: #000; font-weight: 700; letter-spacing:-0.05em;}
	.facility-txt {font-size:17px; letter-spacing:-0.05em; color: #555; line-height:1.764; margin-top: 23px;}
	.facility-intro {display: flex;
	align-items: center; background: #f6f6f6; border-radius:150px; max-width: 1310px; margin: 0 auto;     padding: 40px 55px;
	box-sizing: border-box; margin-top: 62px; margin-bottom: 164px;}
	.process-box {position: relative; display:flex; width: calc(100% - 35.25%); z-index: 1;}
	.process-box:after {
	background: url(/images/content/facility_center_arrow.png);
	background-repeat: no-repeat;
	background-size: cover;
	position: absolute;
	top: 50%;
	
	transform: translateY(-50%);
	display: block;
	content: "";
	width: 42.543%;
	height: 86.39%;
	z-index: -1;
	right: 140px;
	opacity: 0;
	transition:all 0.8s ease-in-out;
	transition-delay:0.8s;
	}
	.process-box > div {display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column; -webkit-box-shadow: 13px 14px 39px 4px rgba(0, 0, 0, 0.09);
	-moz-box-shadow: 13px 14px 39px 4px rgba(0, 0, 0, 0.09);
	box-shadow: 13px 14px 39px 4px rgba(0, 0, 0, 0.09); transform: translateX(-100px); opacity: 0; transition:all 0.8s ease-in-out;}
	.process-box .ico-box, .result .ico-box {width: 59px; margin: 0 auto;}
	.process-box .ico-box span, .result .ico-box span {display: block; position: relative; width: 100%; height: 0; padding-top: 98.32%;}
	
	.process-box .box01 {position: relative; background: #2e4d67; width: 220px; width: 28.678%; height: 0; padding-top: 28.678%; height: 220px; border-radius:100%; margin-right: 37px;}
	.box01-inner {position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	text-align: center;}
	.process-box .box01 .fa-process-tit {color: #fff;}
	.process-box .box01 .dot {    display: inline-block;
	width: 6px;
	height: 6px;
	background: rgba(46,77,103,0.4);
	border-radius: 100%;
	position: absolute;
	right: -16px;
	top: 50%;
	transform: translateY(-50%);}
	.process-box .box01 .dot:last-of-type {right: -26px; background: rgba(46,77,103,1);}
	.process-box .box02 {background: #fff; border:1px dashed #172b33; border-radius:110px; padding: 0 5%; transition-delay:0.3s; width: 48.119%; box-sizing:border-box;}
	.facility-intro .result {padding: 5.042% 0; border: 3px solid #9cc813;  border-radius:110px; background: #fff; width: 429px; width: 35.25%;     display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center; -webkit-box-shadow: 13px 14px 39px 4px rgba(156, 200, 19, 0.14);
	-moz-box-shadow: 13px 14px 39px 4px rgba(156, 200, 19, 0.14);
	box-shadow: 13px 14px 39px 4px rgba(156, 200, 19, 0.14); opacity: 0; transition:all 0.8s ease-in-out;}
	.facility-intro .result .fa-process-tit {color: #9cc813;}
	.fa-process-tit {font-size:19px; letter-spacing:-0.025em; color: #000; font-weight: 700; margin-top: 16px;}
	
	.facility-intro.animated .process-box > div {transform: translateX(0); opacity: 1;}
	.facility-intro.animated .process-box:after {right: 10px; opacity: 1;}
	.facility-intro.animated .result {opacity: 1; transition-delay:1.3s;}
	
	두번째
	.ft-con02 {background: #f8f8f8; padding: 145px 0 163px;}
	.ft-con02 .facility-txt {margin-bottom: 34px; margin-top: -5px;}
	.ft-con02 .tit-box .tit {font-size:40px; color: #000; font-weight: 700; letter-spacing:-0.015em; line-height:1.743em;}
	.ft-con02 .contents {background: #fff; padding: 30px 35px; -webkit-box-shadow: 7px 1px 59px 2px rgba(0, 0, 0, 0.09);
	-moz-box-shadow: 7px 1px 59px 2px rgba(0, 0, 0, 0.09);
	box-shadow: 7px 1px 59px 2px rgba(0, 0, 0, 0.09);
	border-radius: 20px;}
	
	
	.ft-history-box {position: relative; display:flex; overflow:hidden;}
	.ft-history-box:after {
		display: block;
		content: "";
		position: absolute;
		top: 114px;
		background: #9cc813;
		height: 1px;
		left: -35px;
		width: 0;
		transition:all 1.5s ease-in-out;
	
	} 
	.ft-history-box .left-box {width: 52.744%; background:#f1f9dd; border-radius:12px; position: relative; margin-right: 83px; text-align: center; 
	box-sizing: border-box; transform: translateX(-20%); opacity: 0; transition:all 0.8s ease-in-out;}  
	
	.ft-history-box .left-box:after {display: block; content:""; position:absolute; right: -65px; top: 50%; transform:translateY(-50%); background: url(/images/content/ft_arrow.png) no-repeat; width: 104px;
	height: 14.58%; background-size: contain;}
	.ft-history-box .left-box strong {position: relative; padding-top: 52px; padding-bottom: 24px;
	display: block; font-size:34px; color: #282828; font-weight: 600; line-height:1.2; font-family: 'Poppins'; letter-spacing: -0.025em;}
	.ft-history-list {text-align: left; padding:27px 34px 40.21px;}
	.ft-history-box .left-box strong .dot {border: 5px solid #f1f9dd;
	display: block;
	width: 7px;
	height: 7px;
	background: #9cc813;
	border-radius: 100%;
	position: absolute;
	left: 50%;
	transform: translateX(-50%);
	bottom: -7px; z-index: 2; }
	.ft-history-list li {margin-top: 24px;}
	.ft-history-list li:first-of-type {margin-top: 0;}
	.ft-history-list li p {position: relative; font-size:18px; letter-spacing:-0.025em; color: rgba(56,54,54,0.7); font-weight: 500; line-height:1.667; padding-left: 13px;}
	.ft-history-list li p:before {
	display: block;
	content: "";
	width: 4px;
	height: 4px;
	border-radius: 100%;
	background: rgba(0, 0, 0, 0.4);
	position: absolute;
	left: 0;
	top: 50%;
	transform: translateY(-50%);
	}
	.ft-history-box .right-box {position: relative; display: flex; justify-content: space-between;
	width: calc(100% - (52.744% + 83px));}
	.ft-history-box .right-box .detail-box {width: 48.783%; border: 4px solid #9cc813;
	border-radius: 12px;     box-sizing: border-box; padding: 52px 0;
	text-align: center; -webkit-box-shadow: 7px 1px 59px 2px rgba(82, 184, 0, 0.14);
	-moz-box-shadow: 7px 1px 59px 2px rgba(82, 184, 0, 0.14);
	box-shadow: 7px 1px 59px 2px rgba(82, 184, 0, 0.14); display: flex; flex-direction: column; transform: translateX(-20%); opacity: 0; transition:all 0.8s ease-in-out; z-index: 2;}
	.ft-history-box .right-box .detail-box .txt-box {display:flex; flex-direction:column; justify-content:space-between; padding-top: 24px;
	height: calc(100% - 24px);
	box-sizing: border-box;}
	.ft-history-box .right-box .detail-box .txt-box .ico-box {width: 69px; margin: 0 auto;}
	.ft-history-box .right-box .year {position: relative; font-size:34px; letter-spacing:-0.025em; color: #9cc813; font-weight: 600; line-height:1.2; font-family: 'Poppins';}
	.ft-history-box .right-box .year:after {content:""; border: 5px solid #fff;
	display: block;
	width: 7px;
	height: 7px;
	background: #9cc813;
	border-radius: 100%;
	position: absolute;
	left: 50%;
	transform: translateX(-50%);
	bottom: -27px;}
	.ft-history-box .right-box .txt {font-size:20px; letter-spacing:-0.025em; color: #9cc813; line-height:1.5em; font-weight: 600; padding-top: 24px;}
	
	.ft-con02 .contents.animated .ft-history-box .left-box {transform:none; opacity: 1; }
	.ft-con02 .contents.animated .ft-history-box .right-box .detail-box {transform: translateX(0); opacity: 1; transition-delay:0.5s;}
	.ft-con02 .contents.animated .ft-history-box .right-box .detail-box:last-of-type {transition-delay:0.8s;}
	.ft-con02 .contents.animated .ft-history-box:after {width: calc(100% + 34px); transition-delay:0.4s;}
	
	3
	.ft-state-list {display:flex;}
	.ft-state-list .left-box {width:calc(100% - (53.75% + 6.167%)); margin-right: 6.167%;}
	.ft-state-list .left-box .dots {display: flex; align-items:center;
	flex-direction: column; margin-top: 30px;}
	.ft-state-list .left-box .dots .dot {display:inline-block; width: 6px; height: 6px; border-radius:100%; background: rgba(0,0,0,0.3); margin: 3px 0;} 
	.ft-state-list .left-box .dots .dot:last-of-type {display:inline-block; background: #000;}
	.ft-state-list .left-box .result-txt {font-size:22px; color: #282828; font-weight: 700; line-height:; letter-spacing:-0.025em; text-align:center; margin-top: 20px;}
	.ft-state-list .left-box .result-txt p > span {color: #fff; background: #9cc813; border-radius:3px; padding: 2px 4px;}
	.ft-state-list .right-box {display: flex
	; justify-content: center;
	align-items: center; width: 53.75%; background: url(/images/content/facility_state_img.jpg) no-repeat; background-size:cover; border-radius: 20px; padding: 86px 0; -webkit-box-shadow: 7px 1px 59px 2px rgba(0, 0, 0, 0.09);
	-moz-box-shadow: 7px 1px 59px 2px rgba(0, 0, 0, 0.09);
	box-shadow: 7px 1px 59px 2px rgba(0, 0, 0, 0.09);}
	.ft-state-list .state-item {display: flex;
	align-items: center; border:2px solid #d6d6d6; border-radius:8px; padding: 16.5px 25px;
	box-sizing: border-box; -webkit-box-shadow: 7px 1px 59px 2px rgba(0, 0, 0, 0.09);
	-moz-box-shadow: 7px 1px 59px 2px rgba(0, 0, 0, 0.09);
	box-shadow: 7px 1px 59px 2px rgba(0, 0, 0, 0.09); margin-top: 6px;}
	.ft-state-list .state-item:nth-of-type(2) {border: 3px solid #9cc813; -webkit-box-shadow: 13px 14px 39px 4px rgba(156, 200, 19, 0.22);
	-moz-box-shadow: 13px 14px 39px 4px rgba(156, 200, 19, 0.22);
	box-shadow: 13px 14px 39px 4px rgba(156, 200, 19, 0.22);}
	.ft-state-list .state-item:first-of-type {margin-top: 0;}
	.ft-state-list .state-item:last-of-type {border-color:#9cc813; margin-top: 6px; -webkit-box-shadow: 7px 1px 59px 2px rgba(156, 200, 19, 0.22);
	-moz-box-shadow: 7px 1px 59px 2px rgba(156, 200, 19, 0.22);
	box-shadow: 7px 1px 59px 2px rgba(156, 200, 19, 0.22);}
	.ft-state-list .state-item img {margin-right: 22px;}
	.ft-state-list .company span, .ft-state-list .date span {font-size:15px; color: rgba(40,40,40,0.4); font-weight: 600; letter-spacing:-0.025em; margin-right: 12px;}
	.ft-state-list .company em, .ft-state-list .date em {font-size:19px; color: #282828; font-weight: 700; letter-spacing:-0.025em;}
	.ft-state-list .state-item p {width: calc((100% - (59px + 22px)) / 2);}
	.ft-state-box {margin-top: 215px;}
	.ft-state-box .title {font-size:24px; letter-spacing:-0.05em; color: #282828; font-weight: 700; line-height:1.25em; 
	margin-bottom: 19px;}
	.ft-state-box .title > span {font-size:18px; letter-spacing:-0.025em; color: rgba(40,40,40,0.6); font-weight: 700; line-height:1.667em; margin-left: 7px;}
	.ft-state-list .right-box .ico-box {display: flex
	;
	align-items: center;
	justify-content: center; background: #9cc813; width: 19.845%; height: 0; padding-top: 19.845%;
	position: relative; border-radius:100%; margin-right: 30px;}
	.ft-state-list .right-box .ico-box span {
		display: block;
	width: 52px;
	height: 0;
	padding-top: 46.88%;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	}
	.ft-state-list .right-box .txt-box p {font-size:19px; letter-spacing:-0.025em; color: #fff; font-weight: 500; line-height:1.578em;}
	.ft-state-list .right-box .txt-box strong {margin-top: 5px;
	display: inline-block; font-size:34px; letter-spacing:-0.025em; color: #c0f028; font-weight: 700; line-height:1.1em;}
	.ft-state-list .right-box .txt-box strong > span {font-weight: 500;}
	
	.ft-con03 {margin-top: 159px; margin-bottom: 477px;}
	.ft-cer-top {background: url(/images/content/ft_certificate_top.jpg) no-repeat;     background-position:70% 50%; padding-top: 510px; border-radius: 50px 50px 0 0;}
	.ft-cer-txt {background: #f6f6f6;
	border-radius: 0 0 50px 50px; text-align:center; padding: 90px 30px 380px; box-sizing:border-box;}
	.ft-cer-txt strong {margin-bottom: 27px;
	display: inline-block; font-size:38px; letter-spacing:-0.025em; color: #262626; font-weight: 800; line-height:1.1em;}
	.ft-cer-txt p {font-size:18px; letter-spacing:-0.025em; color: rgba(56,54,54,0.6); font-weight: 500; line-height:1.556em; margin-top: 19px;}
	.ft-cer-txt p:first-of-type {margin-top: 0;}
	
	.ft-cer-list  {display:flex; justify-content: center; margin: 113px auto 0; position: absolute;
	left: 50%; width: 66.083%;
	transform: translateX(-50%);}
	.ft-cer-list li {margin-right: 47px;}
	.ft-cer-list li:last-of-type {margin-right: 0;}
	.ft-cer-list img {border-radius:12px; -webkit-box-shadow: 13px 10px 44px -3px rgba(0, 0, 0, 0.13);
	-moz-box-shadow: 13px 10px 44px -3px rgba(0, 0, 0, 0.13);
	box-shadow: 13px 10px 44px -3px rgba(0, 0, 0, 0.13); max-width:100%;}
	
	.ft-cell-top {background: url(/images/content/re_born_cell_top.jpg) no-repeat; padding-top: 364px; margin-bottom: 237px; padding-bottom:105px;     background-size: cover;
	background-position: 50% 50%;}
	.ft-cell-top .bg-tit {color: #fff; font-size:54px; font-weight: 700; margin-bottom: 65px;}
	.ft-cell-top .bg-tit p {margin-left: 55px;}
	.ft-cell-top .bg-tit span {display: block; font-size:56px; letter-spacing:-0.025em; margin-top: 10px;}
	.ft-cell-txt-box-cover {position:absolute; left: 50%; transform:translateX(-50%); width: 100%;
	max-width: 1200px;}
	.ft-cell-txt-box {background: #fff; border-radius:20px; padding: 56px; box-sizing: border-box;
	margin: 0 auto; -webkit-box-shadow: 8px 8px 31px 9px rgba(0, 0, 0, 0.13);
	-moz-box-shadow: 8px 8px 31px 9px rgba(0, 0, 0, 0.13);
	box-shadow: 8px 8px 31px 9px rgba(0, 0, 0, 0.13);}
	.ft-cell-txt-box p {font-size:18px; letter-spacing:-0.025em; color:rgba(132,132,132,0.9); line-height:1.556em; margin-top: 40px;}
	.ft-cell-txt-box p:first-of-type {margin-top: 0;}
	.ft-cell-txt-box p > span {color:rgba(41,41,41,0.9); font-weight: 700; line-height:1.107em;}
	.ft-cell-process {text-align: center;}
	.ft-cell-process img {max-width:100%;}
	
	.ft-con05 {margin: 170px 0 215px;}
	.ft-con05 .tit-box {margin-left: 54px;}
	.ft-con05 .tit-box span {font-size:30px; letter-spacing:-0.025em; color: rgba(35,35,35,0.5); line-height:1.1; font-weight: 700;}
	.ft-con05 .tit-box p {font-size:54px; letter-spacing:-0.025em; color: #232323; line-height:1.148; font-weight: 700; margin-top: 7px;} 
	.ft-con05 .table-box {margin-top: 44px; text-align:center;}
	.ft-con05 .table-box img {-webkit-box-shadow: 8px 8px 31px -3px rgba(0, 0, 0, 0.09);
	-moz-box-shadow: 8px 8px 31px -3px rgba(0, 0, 0, 0.09);
	box-shadow: 8px 8px 31px -3px rgba(0, 0, 0, 0.09);
	border-radius: 30px; max-width:100%;}
	
	@media all and (max-width:1370px){
		.facility-intro {margin: 62px 30px 164px; max-width:none;}
	}
	
	@media all and (max-width:1250px){
		.ft-state-list .state-item img {margin-right: 15px; width: 40px;}
		.ft-state-list .state-item p {width: calc((100% - (40px + 15px)) / 2);}
		.ft-state-list .company em, .ft-state-list .date em {font-size:15px;}
	
		.ft-cell-txt-box {    margin: 0 30px;
		max-width: none;
		width: calc(100% - 60px);}
		.ft-cell-process {margin: 0 60px;}
		.ft-con05 .table-box {margin: 44px 60px 0;}
	}
	
	@media all and (max-width:1045px){
		.fa-process-tit {font-size:16px;}
		.process-box .ico-box, .result .ico-box {width: 45px;}
		.ft-state-list {flex-direction: column;}
		.ft-state-list .left-box {width: 60%; margin: 3% auto 0;}
		.ft-history-box .left-box:after {right: initial;
		top: 100%;
		left: 50%; transform: translateY(0) translateX(-50%) rotate(90deg); height: 12.58%; }
		.ft-state-list .right-box {margin-top: 50px; width: 100%;}
	
		.ft-history-box {flex-direction: column;}
		.ft-history-box:after {display:none;}
		.ft-history-box .left-box {width: 100%; margin-right: 0;}
		.ft-history-box .left-box strong .dot {display:none;}
		.ft-history-box .right-box {width: 100%;
		display: flex;
		flex-direction: column; margin-top: 60px;}
	    .ft-history-box .right-box .detail-box {width: 100%; margin-top: 30px;}
	    .ft-history-box .right-box .year:after {display:none;}
	    .ft-history-box .right-box .detail-box .txt-box .ico-box {margin: 20px auto 0;}
	    .ft-cell-top .bg-tit p {margin-left: 30px;}
	    .ft-cell-top .bg-tit {font-size:41px;}
	    .ft-cell-top .bg-tit span {font-size:43px;}
	    .ft-cell-txt-box {padding: 30px 0;}
	    .ft-cell-top {padding-top: 180px;}
		.ft-con05 .tit-box span {font-size:22px;}
		.ft-con05 .tit-box p {font-size:46px;}
	
		.ft-history-list {padding: 27px 20px 20px;}
		.ft-history-box .right-box .txt {padding-top: 0;}
	}
	
	@media all and (max-width:800px){
		.facility-intro {flex-direction:column; margin: 62px 30px 80px; border-radius:100px;}
		.facility-intro .result {margin-top: 10%; width: 100%;}
		.process-box {width: 100%;}
		.process-box:after {background: url(/images/content/facility_center_arrow02.png); background-position: 50%;     background-repeat: no-repeat;
		background-size: contain; transform: translateY(0) translateX(-50%) rotate(90deg);
		top: 60%;
		width: 20%;
		height: 40%;
		right: initial;
		left: 50%;}
		.facility-intro.animated .process-box:after {
		right: initial;
		top: 75%;
		}
	    .process-box .box02 {width: calc(100% - (28.678% + 37px));}
	    .ft-con02  {padding: 70px 0 80px;}
	    .ft-con03 {margin: 80px 0 100px;}
	    .ft-state-list .right-box .txt-box p {font-size:17px;}
	    .ft-state-list .right-box .txt-box strong {font-size:28px;}
	    .ft-cell-txt-box-cover {position:static;     transform: translateX(0);}
	    .ft-cell-top {padding-top: 100px;}
	    .ft-cell-top .bg-tit {margin-bottom: 45px;}
	    .ft-cell-top .bg-tit p {text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);}
	    .ft-con05 {margin: 85px 0 100px;}
	    .ft-con05 .tit-box {margin-left: 30px;}	    
	    .ft-cell-process {margin: 0 30px;}
	    .ft-cell-top {margin-bottom: 100px;}
	    .ft-con05 .tit-box p {font-size:38px;}
		.ft-state-box {margin-top: 100px;}
		.facility-tit {font-size:28px;}
		.ft-state-list .left-box {width: 100%;}
		.ft-cer-top {padding-top: 300px;}
		.ft-cer-txt {padding: 90px 30px;}
		.ft-cer-list {        margin: 60px auto 0;
		flex-direction: column;
		position: static;
		transform: translate(0);}
		.ft-cer-list li {margin-right: 0;}
		.ft-cer-list li:last-of-type {margin-top: 20px;}
		.ft-cer-txt {}
		.ft-con05 .table-box {margin: 44px 30px 0;}
	
		.ft-history-box .right-box .detail-box {padding: 30px 0;}
		.ft-history-box .left-box strong {font-size:29px; padding-bottom:0;}
		.ft-history-box .right-box .year {font-size:29px;}
		.ft-history-list li p:before {top: 15px;
		transform: translateY(0);}
		.ft-history-list li p {font-size:16px;}
		.ft-history-box .right-box .txt {font-size:18px;}
	}
	
	@media all and (max-width:640px){
		.process-box {flex-direction: column;}
		.process-box > div {transform: translateX(0) translateY(-100px);}
		.facility-intro {padding: 40px 20px; border-radius:30px;}
		.facility-intro.animated .process-box > div {transform: translateX(0) translateY(0);}
		.ft-state-list .state-item {flex-direction:column; align-items:flex-start;}
		.ft-state-list .state-item p {width: 100%;
		margin-top: 15px;}
		.ft-state-list .state-item img {margin-right: 0;}
		.process-box .box01 {width: 60%; border-radius: 20px; padding-top: 50%; margin: 0 auto;}
		.process-box .box01 .dots {position: absolute; bottom: 0; left: 50%; transform: translateX(-50%) rotate(90deg);}
		.process-box .box02 {width: 100%; padding: 5%;  margin-top: 40px;}
		.process-box:after {width: 20%; height: 17%;}
		.ft-con02 .contents {padding: 30px;}
		.facility-intro.animated .process-box:after {top: 89%;}
		.ft-state-list .right-box {padding: 50px 30px; box-sizing: border-box;}
		.ft-state-box .title > span {display: block; margin-left: 0;}
	}
	
	@media all and (max-width:480px){
		.ft-history-box .left-box:after {height: 55px;}
		.ft-state-list .right-box {flex-direction:column;}
		.ft-state-list .right-box .ico-box {width: 25%; padding-top: 25%; margin-right: 0;}
		.ft-state-list .right-box .txt-box {margin-top: 7%;}
	} */

	
</style>

<article class="facility-page">
	<section class="facility-con">
		<div class="tit-box area" data-scroll="fade-up">
			<p class="facility-tit">세포처리시설은 무엇인가요?</p>
			<p class="facility-txt">인체세포 등을 채취·검사·처리해 첨단재생의료실시기관에 공급하는 업무를 담당하며, 식품의약품안전처의 허가를 받은 시설입니다.</p>
		</div>
		<div class="facility-intro" data-scroll="fade">
			<div class="process-box">
				<div class="box01">
					<div class="dots">
						<span class="dot"></span>
						<span class="dot"></span>
					</div>
					<div class="box01-inner">
						<div class="ico-box"><span><img src="<?=$site_host?>/images/content/facility_center_ico01.png" alt="" class="img-center"></span></div>
						<p class="fa-process-tit">세포처리시설</p>	
					</div>
				</div>
				<div class="box02">
					<div class="ico-box"><span><img src="<?=$site_host?>/images/content/facility_center_ico02.png" alt="" class="img-center"></span></div>
					<p class="fa-process-tit">인세포등 채취·검사·처리</p>
				</div>
			</div>
			<div class="result">
				<div class="ico-box"><span><img src="<?=$site_host?>/images/content/facility_center_ico03.png" alt="" class="img-center"></span></div>
				<p class="fa-process-tit">첨단재생의료 실시기관</p>
			</div>
		</div>
	</section>
	<section class="facility-con ft-con02">
		<div class="area">
			<div class="tit-box" data-scroll="fade-up">
				<strong class="tit">N-BIOTEK</strong>
				<p class="facility-txt">식약처에서 2호로 지정받은 첨생 세포처리시설 엔바이오텍</p>
			</div>
			<div class="contents" data-scroll="fade">
				<div class="ft-history-box">
					<div class="left-box">
						<strong>Since 2012 ~ 2019 <span class="dot"></span></strong>
						<ul class="ft-history-list">
							<li>
								<p>모로코, 터키, 몽골, 말레이시아 ISSCA 컨퍼런스 개최 </p>
								<p>베트남 정부산하 과학기술부 줄기세포 연구센터 구축 </p>
							</li>
							<li>
								<p>식품의약품안전처장 표창 수상</p>
							</li>
							<li>
								<p>국제 줄기세포 응용학회(ISSCA) 설립</p>
								<p>줄기세포 활성화제 화장품 에스포미 런칭</p>
							</li>
							<li>
								<p>제주 성형외과 줄기세포 치료센터 구축</p>
							</li>
							<li>
								<p>㈜엔바이오텍 줄기세포 연구소 설립</p>
								<p>해외 민간기업 줄기세포 치료센터 구축</p>
							</li>
						</ul>
					</div>
					<div class="right-box">
						<div class="detail-box">
							<strong class="year">2020</strong>
							<div class="txt-box">
								<p class="txt">첨단재생의료법 <br> 시행</p>
								<div class="ico-box">
									<img src="<?=$site_host?>/images/content/facility_ico02_01.png" alt="">
								</div>
							</div>
						</div>
						<div class="detail-box">
							<strong class="year">2021</strong>
							<div class="txt-box">
								<p class="txt">세포처리시설 <br> 허가 취득</p>
								<div class="ico-box">
									<img src="<?=$site_host?>/images/content/facility_ico02_02.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>				
			</div>
			<div class="ft-state-box">
				<p class="title" data-scroll="fade-up">세포처리시설 현황 <span>(25년 8월기준 총48개 기관)</span></p>
				<div class="ft-state-list">
					<div class="left-box">
						<div class="state-item" data-scroll="fade-down">
							<img src="<?=$site_host?>/images/content/ft_state_ico01.png" alt="">
							<p class="company"><span>시설명</span><em>S대학교병원</em></p>
							<p class="date"><span>허가일</span><em>21.03.04</em></p>
						</div>
						<div class="state-item" data-scroll="fade-down" data-scroll-delay="200">
							<img src="<?=$site_host?>/images/content/ft_state_ico02.png" alt="">
							<p class="company"><span>시설명</span><em>(주)엔바이오텍</em></p>
							<p class="date"><span>허가일</span><em>21.03.26</em></p>
						</div>
						<div class="dots" data-scroll="fade-down" data-scroll-delay="300">
							<span class="dot"></span>
							<span class="dot"></span>
						</div>
						<div class="result-txt" data-scroll="fade-down" data-scroll-delay="400">
							<p>총 48개 기관중 <span>2호</span></p>
						</div>
					</div>
					<div class="right-box" data-scroll="fade-down">
						<div class="ico-box">
							<span><img src="<?=$site_host?>/images/content/ft_state_ico03.png" alt="" class="img-center"></span>
						</div>
						<div class="txt-box">
							<p>줄기세포 연구로 축척된 노하우를 활용한 </p>
							<strong>A <span>to</span> Z 컨설팅 제공! </strong>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="facility-con ft-con03">
		<div class="area">
			<div class="ft-cer-top" data-scroll="fade-up"></div>
			<div class="ft-cer-txt" data-scroll="fade-up">
				<strong>공인된 세포처리시설</strong>
				<p>엔바이오텍은 국내 식약처로부터 첨단재생의료 임상연구 진행을 위한 세포처리시설 허가와 세포치료제 생산을 위한 <br class="pc-br">
				첨단바이오의약품제조업 허가를 취득하여 자체 시설과 기술력의 안전성을 공식적으로 인정 받았으며</p>
				<p>줄기세포 관련 다양한 특허를 통해 검증된 줄기세포 기술력으로 고객의 니즈에 따라 최적화된 줄기세포 서비스를 제공합니다.</p>
				<ul class="ft-cer-list">
					<li data-scroll="fade-up">
						<img src="<?=$site_host?>/images/content/ft_certificate_01.jpg" alt="">	
					</li>
					<li data-scroll="fade-up" data-scroll-delay="300">
						<img src="<?=$site_host?>/images/content/ft_certificate_02.jpg" alt="">	
					</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="facility-con ft-con04">
		<div class="ft-cell-top" data-scroll="fade-up">
			<div class="bg-tit" data-scroll="fade-up">
				<div class="area">
					<p>
						Re-Born <br> <span>셀뱅킹</span>
					</p>
				</div>				
			</div>
			<div class="ft-cell-txt-box-cover">
				<div class="ft-cell-txt-box" data-scroll="fade-up">
					<div class="area">
						<p><span>엔바이오텍의</span>리본셀뱅킹은 자신의 줄기세포와 면역세포를 보관하여 훗날 필요로 하는 때에 언제든 건강, 미용, 안티에이징 및 질병치료 등의 <br class="pc-br">
						목적으로 사용할 수 있는 고객 맞춤형 줄기세포 보관 서비스입니다.</p>
						<p>남은 인생 중 가장 젊고 건강한 오늘, 엔바이오텍의 리본셀뱅킹을 통해 당신의 젊고 건강한 세포를 보관하여 언제 생길지 모르는 질병에 대비하고 <br class="pc-br"> <span>젊은 시절의 몸으로 Re-Born하세요.</span></p>
					</div>
				</div>
			</div>
		</div>
		<div class="ft-cell-process" data-scroll="fade-up">
			<img src="<?=$site_host?>/images/content/cell_banking_diagram.png" alt="">
		</div>
	</section>
	<section class="facility-con ft-con05">
		<div class="area">
			<div class="tit-box" data-scroll="fade-up">
				<span>동결보관 후 생존율</span>
				<p>평균 약 90%</p>
			</div>			
		</div>
		<div class="table-box" data-scroll="fade-up">
			<img src="<?=$site_host?>/images/content/ft_table_img.jpg" alt="">
		</div>
	</section>
</article>

<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
