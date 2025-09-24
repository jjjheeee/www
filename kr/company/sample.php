<?
$page_num = "01";
$sub_num = "01";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "company";
$sub_section = "ceo";
$page_info = "회사소개";
$sub_info = "CEO인사말";
$content_type="wide";
// $sub_info2 = "3차메뉴";	// 사용안할시 주석처리
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(Description)	필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<style>
.sample-container{margin-bottom:100px; font-size: 16px; line-height: 1.7; font-weight: 300; letter-spacing: -0.75px; color: #555;}
.sample-container h4{color:#222; font-weight:600; font-size:20px; letter-spacing:-1px; padding:10px; border:1px solid #ccc; background-color:#fff; font-weight:400; margin-bottom:20px;}
.sample-container h4 b{color:#f57f20;}
.sample-container h4:before{content:"-"; margin-right:7px;}

@media all and ( max-width: 1024px ){
	.sample-container{margin-bottom:50px; font-size:13px;}
	.sample-container h4{font-size:15px; margin-bottom:10px}
}
/* 테이블 Sample */
.test-table{width:100%;}
.test-table th{border: 1px solid #c6c6c6; border-top: 1px solid #333; padding: 20px 0; background-color: #f7f7f7; font-size: 16px; font-weight: 300; letter-spacing: -0.7px; color: #464646;}
.test-table td{padding: 25px 0; border: 1px solid #c6c6c6; text-align: center; }
@media all and ( max-width: 800px ){
	.spidochescaler-table-container th,
	.spidochescaler-table-container td{font-size:22px;}
}

/* 리스트 Sample */
.rolling-active-list-con{margin:0 -1%;}
.rolling-active-list-con li{float:left; width:23%; margin:0 1%;  box-sizing:border-box; padding:50px; text-align:center; }
.rolling-active-list-con li.active{background-color:black; color:#fff; }

/* Tab Contents ( 임시 ) */
.sub-tab-con{padding:30px; border:1px solid #ddd; min-height:200px; background-color:#f2f2f2; margin-bottom:20px;}

/* 텍스트 */
.sub-cm-txt-con{margin-top:20px}
.sub-cm-txt-con:first-child{margin-top:0}
</style>

<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
	
	<section class="sample-container">
					<article class="area">
						<h4><b>탭(tabMenu)</b> : 영역이동기능(한페이지내 fixed) / PC:tab, Mobile:dropmenu (Fixed 메뉴 js,drop 메뉴 js 사용) - 주석해제</h4>
						<!-- Start -->
						<article class="cm-fixed-tab-container-JS">
							<aside class="sub-tab-wrapper-style">
								<div class="sub-tab-list-style sub-drop-menu-style cm-fixed-tab-list-JS cm-drop-menu-box-JS top-fixed-object" data-drop-width="800" data-drop-event="click">
									<div class="area">
										<a href="javascript:;" class="sub-drop-open-btn-style cm-drop-open-btn-JS"><span>Fixed Move 1</span><i class="xi-caret-down-min arrow"></i></a>
										<ul class="clearfix cm-drop-list-JS">
											<li class="selected"><a href="#fixedContentM1"><em>Fixed Move 1</em></a></li>
											<li><a href="#fixedContentM2"><em>Fixed Move 내용2</em></a></li>
											<li><a href="#fixedContentM3"><em>Fixed Move 내용3</em></a></li>
											<li><a href="#fixedContentM4"><em>Fixed Move 내용4</em></a></li>
											<li><a href="#fixedContentM5"><em>Fixed Move 내용5</em></a></li>
										</ul>
									</div>
								</div>
							</aside>
							<div class="sub-tab-content-style">
								<div class="sub-tab-con" id="fixedContentM1">
									내용1
								</div>
								<div class="sub-tab-con" id="fixedContentM2">
									내용2
								</div>
								<div class="sub-tab-con" id="fixedContentM3">
									내용3
								</div>
								<div class="sub-tab-con" id="fixedContentM4">
									내용4
								</div>
								<div class="sub-tab-con" id="fixedContentM5">
									내용5
								</div>
							</div>
						</article>
						<!-- // -->
					</article>
				</section>
				<!-- ****************** 기본 이미지 ********************** -->
				<!-- 준비중 -->
				<section class="sample-container" style="background:#eee;" data-scroll="fade-down">
					<article class="area">
						<h4><b>이미지</b> : 컨텐츠 내용이 준비중일때 이미지</h4>
						<img src="<?=$site_url?>/images/content/content_ready_img.png" alt="서비스 준비중입니다." style="display:block; margin:0 auto; max-width:100%;" />
					</article>
				</section>
				<!-- // 준비중 -->

				<!-- 관리자 셋팅 준비중 -->
				<section class="sample-container">
					<article class="area">
						<h4><b>이미지 : </b>관리자 연동이 안된 상태일때 이미지</h4>
						<img src="<?=$site_url?>/images/content/board_ready_img.png" alt="프로그램 개발중입니다." style="display:block; margin:0 auto; max-width:100%;" />
					</article>
				</section>
				<!-- // 준비중 -->

				<section class="sample-container">
					<article class="area">
						<h4><b>이미지 : </b>각각 언어에 사용되는 이미지가 다를때 → $site_url 사용</h4>
						<img src="<?=$site_url?>/images/content/temp_img.jpg" alt="" style="display:block; margin:0 auto; max-width:100%;" />
					</article>
				</section>

				
				<!-- 준비중 -->
				<section class="sample-container" style="background:#eee;">
					<article class="area">
						<h4><b>텍스트</b> : 일반 텍스트 br태그 관련(PC에서 줄바꿈 : .pc-br / Mobile에서 줄바꿈 : .m-br)</h4>
						<p class="sub-cm-txt-con">
							저희를 믿어주시고 신뢰하는 고객님이 많습니다. <br>
							거인소프트가 더 성장할 수 있다고 응원해 주시는 고객님이 많습니다. <br>
							몇 년이 지나도 저희를 기억해 주시는 고객님이 많습니다.
						</p>
						<p class="sub-cm-txt-con">	
							저희에게 가장 힘이 되는 한 마디는 “거인소프트에 맡기길 잘했다.”는 말씀입니다. <br>
							모든 임직원의 열정과 노력이 고객님의 목표와 부합이 되어 성실하고 책임감 있는 WEB-AGENCY를 만들어 가고자 합니다.  <br>
							앞으로도 차분하고 겸손한 마음으로, <br class="pc-br">전문화된 기술력을 겸비한 창의적인 기획과 디자인을 추구하도록 하겠습니다. <br>
							언제나 응원해 주시는 모든 분들께 고개 숙여 감사드립니다.
						</p>
						<p class="sub-cm-txt-con">
							홈페이지를 제작함에 있어서 고객님의 입장에서 <br class="pc-br">
							만족할만한 성과를 내기 위한 최선의 노력을 다합니다.  <br>
							홈페이지를 이해하고 제작에 임할 때 결과물은  <br class="pc-br">
							분명한 차이가 있습니다.
						</p>
						<p class="sub-cm-txt-con">
							컨설팅, 디자인, 프로그램, 서버호스팅 각 팀의  <br class="pc-br">
							효율적인 업무처리를 위한 거인소프트의 프로젝트  <br class="pc-br">
							관리기법은 고객님이 만족하는 홈페이지를  <br class="pc-br">
							제작할 수 있는 가장 최적화된 솔루션입니다.
						</p>
						<p class="sub-cm-txt-con">
							시대의 변화에 따라 홈페이지의 디자인 및 프로그램의 <br class="pc-br">
							유행이 변화하고 있습니다. <br class="m-br"> 우리는 다양한 제작 경험과  <br class="pc-br">
							문제해결 능력을 기반으로 WEB 환경의 패러다임을  <br class="pc-br">
							이해하고 이를 활용하고 있습니다.
						</p>
					</article>
				</section>
				<!-- // 준비중 -->

				<!-- 스크롤 커스텀 -->
				<section class="sample-container">
					<article class="area">
						<h4><b>스크롤커스텀 :</b> 모바일사이즈에서 가로스크롤 생성</h4>
						<!-- 스크롤 영역 Start(테이블) -->
						<div class="custom-scrollbar-wrapper">
							<div class="scroll-object-box">
								<table class="test-table scroll-object"><!-- .scroll-object -->
									<caption>테이블 샘플입니다. 테이블 목적을 입력해주세요</caption>
									<tbody>
										<colgroup>
											<col style="width:10%;"/>
											<col style="width:10%;"/>
											<col style="width:10%;"/>
											<col style="width:10%;"/>
											<col style="width:10%;"/>
											<col style="width:10%;"/>
											<col style="width:10%;"/>
											<col style="width:10%;"/>
											<col style="width:10%;"/>
											<col style="width:10%;"/>
											<col style="width:10%;"/>
										</colgroup>
										<tr>
											<th scope="col">1</th>
											<th scope="col">2</th>
											<th scope="col">3</th>
											<th scope="col">4</th>
											<th scope="col">5</th>
											<th scope="col">6</th>
											<th scope="col">7</th>
											<th scope="col">8</th>
											<th scope="col">9</th>
											<th scope="col">10</th>
										</tr>
										<tr>
											<td>복잡한</td>
											<td>테이블</td>
											<td>모바일로 줄일때</td>
											<td>스크롤이 생기며</td>
											<td>터치로</td>
											<td>이동이</td>
											<td>가능</td>
											<td>합니다</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!-- // -->
						<br><br>
						<!-- 스크롤 영역 Start(이미지) -->
						<div class="custom-scrollbar-wrapper">
							<div class="scroll-object-box">
								<img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" class="scroll-object" /><!-- .scroll-object -->
							</div>
						</div>
						<!-- // -->
					</article>
				</section>
				
				<!-- 모바일에서 사이즈 줄이기 -->
				<section class="sample-container">
					<article class="area">
						<h4><b>scale 축소 :</b> 모바일에서  scale 축소</h4>
						<table class="test-table spidochescaler-table-container">
							<caption>테이블 샘플입니다. 테이블 목적을 입력해주세요</caption>
							<tbody>
								<colgroup>
									<col style="width:10%;"/>
									<col style="width:10%;"/>
									<col style="width:10%;"/>
									<col style="width:10%;"/>
									<col style="width:10%;"/>
								</colgroup>
								<tr>
									<th scope="col">1</th>
									<th scope="col">2</th>
									<th scope="col">3</th>
									<th scope="col">4</th>
									<th scope="col">5</th>
								</tr>
								<tr>
									<td>3~4칸 되는</td>
									<td>테이블</td>
									<td>모바일로 줄일때</td>
									<td>scale로 줄어들게</td>
									<td>하는방법</td>
								</tr>
							</tbody>
						</table>
						<!-- // -->
					</article>
					<script src="<?=$site_host?>/js/plugin/spidocheScaler.min.js"></script>
					<!-- sub.js 이동 -->
					<script>
					// Scale 자동조정
					$('.spidochescaler-table-container').spidochescaler({
						maxWidth:800
					});
					</script>
				</section>

				<!-- 이미지맵  -->
				<section class="sample-container image-map-container">
					<article class="area">
						<h4><b>이미지맵 반응형 사용</b></h4>
						<!-- 스크롤 영역 Start(이미지) -->
						<img src="/images/main/main_visual_01.jpg" alt="" style="display:block; margin:0 auto; max-width:100%;" usemap="#Map" />
						<map name="Map" id="Map">
						  <area shape="rect" coords="186,149,494,309" href="#" />
						  <area shape="rect" coords="846,365,1554,633" href="#" />
						  <area shape="rect" coords="142,753,542,1017" href="#" />
						</map>
						<!-- // -->
					</article>
				</section>
					<script src="<?=$site_host?>/js/plugin/jquery.rwdImageMaps.min.js"></script>
					<!-- sub.js 이동 -->
					<script>
					$(document).ready(function(e) {
						// 이미지맵 반응형 위치조정
						$("img[usemap]").rwdImageMaps();
					});
					</script>

					
				<!-- MagnificPopup -->
				<section class="sample-container">
					<article class="area">
						<h4><b>모달팝업 :</b> 팝업 플러그인</h4>
						<div class="popup-gallery"><!-- popup-gallery 클래스 사용 -->
							<a href="/images/main/main_visual_01.jpg" title="내용1" style="display:inline-block; width:200px;"><img src="/images/main/main_visual_01.jpg" alt="" width="200" />내용1</a>
							<a href="/images/main/main_visual_02.jpg" title="내용2" style="display:inline-block; width:200px;"><img src="/images/main/main_visual_02.jpg" alt="" width="200" />내용2</a>
							<a href="/images/main/main_visual_01.jpg" title="내용3" style="display:inline-block; width:200px;"><img src="/images/main/main_visual_01.jpg" alt="" width="200" />내용3</a>
							<a href="/images/main/main_visual_02.jpg" title="내용4" style="display:inline-block; width:200px;"><img src="/images/main/main_visual_02.jpg" alt="" width="200" />내용4</a>
						</div>
					</article>
				</section>
				<!-- // -->

					
				<section class="sample-container">
					<article class="area">
						<h4><b>탭(tabMenu)</b> : 기본탭기능 - PC:tab, Mobile:tab (기본탭js사용)</h4>
						<!-- 기본탭 -->
						<section class="cm-tab-container-JS">
							<aside class="sub-tab-wrapper-style">
								<div class="sub-tab-list-style cm-tab-list-JS">
									<ul class="clearfix">
										<li class="selected"><a href="#tabCon01"><em>기본탭1</em></a></li>
										<li><a href="#tabCon02"><em>기본탭2</em></a></li>
										<li><a href="#tabCon03"><em>기본탭3</em></a></li>
										<li><a href="#tabCon04"><em>기본탭4</em></a></li>
										<li><a href="#tabCon05"><em>기본탭5</em></a></li>
									</ul>
								</div>
							</aside>
							<article class="sub-tab-content-style cm-tab-content-wrapper-JS">
								<div class="sub-tab-con" id="tabCon01">
									탭1
								</div>
								<div class="sub-tab-con" id="tabCon02">
									탭2
								</div>
								<div class="sub-tab-con" id="tabCon03">
									탭3
								</div>
								<div class="sub-tab-con" id="tabCon04">
									탭4
								</div>
								<div class="sub-tab-con" id="tabCon05">
									탭5
								</div>
							</article>
						</section>
						<!-- // -->
					</article>
				</section>

				<section class="sample-container">
					<article class="area">
						<h4><b>탭(tabMenu)</b>: 기본탭기능 - PC:tab, Mobile:DropMenu (기본탭js사용)</h4>
						<!-- 기본탭 + 모바일드롭메뉴 -->
						<section class="cm-tab-container-JS">
							<aside class="sub-tab-wrapper-style">
								<div class="sub-tab-list-style sub-drop-menu-style cm-tab-list-JS">
									<a href="javascript:;" class="sub-drop-open-btn-style cm-tab-select-btn-JS"><span></span><i class="xi-caret-down-min arrow"></i></a>
									<ul class="clearfix">
										<li class="selected"><a href="#tabConM01"><em>PC탭+모바일드롭탭 1</em></a></li>
										<li><a href="#tabConM02"><em>PC탭+모바일드롭탭 2</em></a></li>
										<li><a href="#tabConM03"><em>PC탭+모바일드롭탭 3</em></a></li>
										<li><a href="#tabConM04"><em>PC탭+모바일드롭탭 4</em></a></li>
										<li><a href="#tabConM05"><em>PC탭+모바일드롭탭 5</em></a></li>
									</ul>
								</div>
							</aside>
							<article class="sub-tab-content-style cm-tab-content-wrapper-JS">
								<div class="sub-tab-con" id="tabConM01">
									탭1
								</div>
								<div class="sub-tab-con" id="tabConM02">
									탭2
								</div>
								<div class="sub-tab-con" id="tabConM03">
									탭3
								</div>
								<div class="sub-tab-con" id="tabConM04">
									탭4
								</div>
								<div class="sub-tab-con" id="tabConM05">
									탭5
								</div>
							</article>
						</section>
					</article>
				</section>
				
				<section class="sample-container">
					<article class="area">
						<h4><b>탭(tabMenu)</b> : 링크이동기능 - PC:tab, Mobile:DropMenu (드롭메뉴 js사용)</h4>
						<!-- 기본탭 + 모바일 드롭메뉴(링크이동) -->					
						<aside class="sub-tab-wrapper-style">
							<div class="sub-tab-list-style sub-drop-menu-style cm-drop-menu-box-JS" data-drop-width="800" data-drop-event="click">
								<a href="javascript:;" class="sub-drop-open-btn-style cm-drop-open-btn-JS"><span>링크이동 1</span><i class="xi-caret-down-min arrow"></i></a>
								<ul class="clearfix cm-drop-list-JS">
									<li class="selected"><a href="<?=$site_url?>/company/sample.php"><em>링크이동 1</em></a></li>
									<li><a href="<?=$site_url?>/company/sample.php"><em>링크이동 2</em></a></li>
									<li><a href="<?=$site_url?>/company/sample.php"><em>링크이동 3</em></a></li>
									<li><a href="<?=$site_url?>/company/sample.php"><em>링크이동 4</em></a></li>
									<li><a href="<?=$site_url?>/company/sample.php"><em>링크이동 5</em></a></li>
								</ul>
							</div>
						</aside>
						<!-- // -->
					</article>
				</section>
				
				<section class="sample-container">
					<article class="area">
						<h4><b>탭(tabMenu)</b> : 영역이동기능(한페이지내 fixed) / PC:tab, Mobile:tab(Fixed 메뉴 js 사용)</h4>
						<!-- Start -->
						<!-- <article class="cm-fixed-tab-container-JS">
							<aside class="sub-tab-wrapper-style">
								<div class="sub-tab-list-style cm-fixed-tab-list-JS top-fixed-object">
									<div class="area">
										<ul class="clearfix cm-drop-list">
											<li class="selected"><a href="#fixedContent1"><em>Fixed Move 1</em></a></li>
											<li><a href="#fixedContent2"><em>Fixed Move 내용2</em></a></li>
											<li><a href="#fixedContent3"><em>Fixed Move 내용3</em></a></li>
											<li><a href="#fixedContent4"><em>Fixed Move 내용4</em></a></li>
											<li><a href="#fixedContent5"><em>Fixed Move 내용5</em></a></li>
										</ul>
									</div>
								</div>
							</aside>
							<div class="sub-tab-content-style">
								<div class="sub-tab-con" id="fixedContent1">
									내용1
								</div>
								<div class="sub-tab-con" id="fixedContent2">
									내용2
								</div>
								<div class="sub-tab-con" id="fixedContent3">
									내용3
								</div>
								<div class="sub-tab-con" id="fixedContent4">
									내용4
								</div>
								<div class="sub-tab-con" id="fixedContent5">
									내용5
								</div>
							</div>
						</article> -->
						<!-- // -->
					</article>
				</section>

				

				
				<!-- 높이값 맞추기 -->
				<section class="sample-container">
					<article class="area">
						<h4><b>CSS</b> : 높이값맞추기 ( display:flex; flex-wrap: wrap; )</h4>
						<ul class="sample-list-con clearfix">
							<li>
								<div class="inner-box">
								아이유 - 밤편지
								</div>
							</li>
							<li>
								<div class="inner-box">
								이 밤 그날의 반딧불을<br class="pc-br">
								당신의 창 가까이 보낼게요<br>
								음 사랑한다는 말이에요
								</div>
							</li>
							<li>
								<div class="inner-box">
								나 우리의 첫 입맞춤을 떠올려<br class="pc-br">
								그럼 언제든 눈을 감고<br class="pc-br">
								음 가장 먼 곳으로 가요<br><br>
								난 파도가 머물던<br class="pc-br">
								모래 위에 적힌 글씨처럼<br class="pc-br">
								그대가 멀리<br class="pc-br">
								사라져 버릴 것 같아<br class="pc-br">
								늘 그리워 그리워
								</div>
							</li>
							<li>
								<div class="inner-box">
								여기 내 마음속에<br class="pc-br">
								모든 말을<br class="pc-br">
								다 꺼내어 줄 순 없지만<br>
								사랑한다는 말이에요
								</div>
							</li>
						</ul>
						<style type="text/css">
							.sample-list-con{display:flex; flex-wrap: wrap; margin:0 -1%;}
							.sample-list-con li{width:23%; margin:0 1%;}
							.sample-list-con li .inner-box{height:100%; border:1px solid #ddd; box-sizing: border-box; padding:30px; }
								@media all and ( max-width: 800px ){
								  .sample-list-con li{width:48%; margin:0 1% 2%;}
								}
						</style>
						<!-- // -->
					</article>
				</section>

				
				<!-- 왼+오 / 오+왼 컨텐츠를 모바일에서 순서동일하게 만들때  -->
				<section class="sample-container">
					<article class="area">
						<h4><b>CSS</b> : 좌우순서가 다른 컨텐츠의 모바일 순서를 동일하게 만들때 ( display: flex; flex-direction: column-reverse; )</h4>
						<div class="left-right-con left">
							<div class="img-box"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></div>
							<div class="txt-box">
								이 밤 그날의 반딧불을<br>
								당신의 창 가까이 보낼게요<br>
								음 사랑한다는 말이에요
							</div>
						</div>
						<div class="left-right-con right">
							<div class="txt-box">
								<p>
								여기 내 마음속에<br>
								모든 말을<br>
								다 꺼내어 줄 순 없지만<br>
								사랑한다는 말이에요
								</p>
							</div>
							<div class="img-box"><img src="<?=$site_host?>/images/test/test_img2.jpg" alt="" /></div>
						</div>
						<style type="text/css">
							.left-right-con{display:table; width:100%; table-layout:fixed;}
							.left-right-con .img-box,
							.left-right-con .txt-box{display:table-cell; width:50%; vertical-align:middle;}
							.left-right-con .img-box img{width:100%;}
							@media all and ( min-width: 1025px ){
								.left-right-con.left .txt-box{padding-left:50px}
							}
							@media all and ( max-width: 1024px ){
								.left-right-con{display:block;}
								.left-right-con.right{display: flex; flex-direction: column-reverse; }
								.left-right-con .img-box,
								.left-right-con .txt-box{overflow:hidden; display:block; width:100%; margin:0px auto 5%; text-align:center; box-sizing:border-box;}
							}
						</style>
						<!-- // -->
					</article>
				</section>
					
				<section class="sample-container">
					<article class="area">
						<h4><b>기타</b> : Active Rolling (순차적으로 active클래스 붙이기)</h4>
						<!-- 순차적으로 Active 붙이기 -->
						<ul class="rolling-active-list-con clearfix" data-rolling-time="2000" data-reset-width="800"><!-- 높이를 해제하는구간 -->
							<li>
								순차적으로 active가 붙어요
							</li>
							<li>
								순차적으로 active가 붙어요
							</li>
							<li>
								순차적으로 active가 붙어요
							</li>
							<li>
								순차적으로 active가 붙어요
							</li>
						</ul>
						<script type="text/javascript">
						$(document).ready(function  () {
							// 순차적으로 active ( sub.js로 이동 )
							rollingActive(".rolling-active-list-con");
						});
						</script>
						<!-- // -->
					</article>
				</section>

				
				<section class="sample-container">
					<article class="area">
						<h4><b>기타</b> : Select Custom </h4>
						
						<p>- Onchange 이벤트에는 사용 X</p>
						<p>- 감싸는 태그에 width를 주거나, /css/cm_bbs_common.css 수정<br><br></p>

						<div class="sample-select-custom" style="width:300px">
							<!-- Select Custom -->
							<div class="select-box custom-select-box">
								<select name="" class="custom-select" placeholder="Select">
									<option value="" selected>Option1</option>
									<option value="">Option2</option>
									<option value="">Option3</option>
									<option value="">Option4</option>
									<option value="">Option5</option>
									<option value="">Option6</option>
									<option value="">Option7</option>
								</select>
							</div>
							<!-- // -->
						</div>
					</article>
				</section>

					
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
