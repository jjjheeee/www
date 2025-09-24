<script>
	<? if ( $page_section == "company" ) { ?>	//  1번째  대메뉴 인덱스
		dep1 = 1
	<? }else if ( $page_section == "nbiotek" ) { ?>	//  2번째 대메뉴 인덱스
		dep1 = 2
	<? }else if ( $page_section == "equipment" ) { ?>	//   3번째  대메뉴 인덱스
		dep1 = 3
	<? }else if ( $page_section == "stemcell" ) { ?> //  4번째  대메뉴 인덱스
		dep1 = 4	
	<? }else if ( $page_section == "customer" ) { ?> // 5번째  대메뉴 인덱스
		dep1 = 5	
	<? }else { ?>
		dep1 = 0	
	<? } ?>
	
	// dep1 = <?=$page_num?>,
	dep2 = <?=$sub_num?>;

	// sub_num2 변수가 있을때 ( 3차메뉴 )
	<? if( $sub_num2 ){ ?>
			dep3 = <?=$sub_num2?>;
	<? } else { ?>
			dep3 = "";
	<? } ?>
	
	// sub_num3 변수가 있을때 ( 4차메뉴 )
	<? if( $sub_num3 ){ ?>
			dep4 = <?=$sub_num3?>;
	<? } else { ?>
			dep4 = "";
	<? } ?>
	// sub_num4 변수가 있을때 ( 5차메뉴 )
	<? if( $sub_num4 ){ ?>
			dep5 = <?=$sub_num4?>;
	<? } else { ?>
			dep5 = "";
	<? } ?>

	$(function  () {
		if (dep1 > 0 && dep2 > 0) {
			$("#header").addClass("sub");
		}
	})


</script>
</head>

<body>
<!-- accessibility -->
<div class="cm-accessibility">
	<a href="#container">본문바로가기</a>
</div>
<!-- //accessibility -->
<!-- code -->
<div id="wrap">
	<!-- header -->
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/header_t(240325).php"; ?>
	<!-- //header -->
	<!-- container -->
	<div id="container">
		<!-- visual -->
		<?if($page_section != "search" ){?>
			<?if($intro_page != "true" ){?>
				<section id="visual" class="sub-visual-<?=$page_section?>">
					<?if($page_section == "equipment" ){?> <!-- 제품 상단비주얼 관리 :: 페이지마다 다르게 들어갑니다 -->
						<?if($sub_section == "equipment_search" ){?> 
							<div class="visual-img-con" style="background:#eee url(<?=$site_host?>/images/layout/sub_visual_<?=$page_section?>.jpg) no-repeat 50% 0%"></div>
						<?}else if($sub_info == "Validation"){?>
							<div class="visual-img-con" style="background:#eee url(<?=$site_host?>/images/layout/sub_visual_validation.jpg) no-repeat 50% 0%"></div>
						<?}else{?>
							<div class="visual-img-con" style="background:#eee url(/data/bbsData/<?=$row->bbs_file?>) no-repeat 50% 0%"></div>
						<?}?>
					<?}else{?>
						<div class="visual-img-con" style="background:#eee url(<?=$site_host?>/images/layout/sub_visual_<?=$page_section?>.jpg) no-repeat 50% 0%"></div>
					<?}?>
					<div class="area-1595 visual-txt-con">
						<div class="table-cell-layout">
							<div class="visual-txt-container">
								<h2 class="visual-tit trans400 up-effect-txt">
									<span class="effect-inner"><?=$page_info?></span>
								</h2>
								<p class="visual-sub-txt up-effect-txt"><span class="effect-inner">Stem Cell Total Solution Provider N-BIOTEK</span></p>
							</div>
						</div>
					</div>
				</section>
			<?}else{?>
				<section id="introVisual" class="full-height">
					<div class="txt-con">
						<h3>Life Science Equipment</h3>
						<p>N-BIOTEK has an extensive lab equipment portfolio, ranging from CO2 Incubator, Shaking Incubator, Shaker & Roller Apparatus, <br class="pc-br">
						Water Bath & Thermal Block, Concentrator, Oven & Incubator, Autoclave, Bio Work Station to Stem Cell Isolation Package.</p>
						<p>Now we are exporting lab equipment to more than 100 international distributors.</p>
					</div>
					<div class="view-txt">
						<b>View product</b>
						<i class="xi-angle-down-min down-01"></i>
						<i class="xi-angle-down-min down-02"></i>
					</div>
					<!-- 제품 인트로페이지에서 사용되는 검색바입니다. -->
					<div class="equipment-search-box fixed-sub-menu">
						<div class="inner">
							<form name="bbs_search_form" method="get" action="<?=$site_url?>/equipment/equipment_search.php">
							<input type="hidden" name="part_idx" value="<?=$part_idx?>">
							<script language="javascript">
							<!--
							function top_search(){
								var form = document.bbs_search_form;
								if(form.search_order.value==""){
									alert("Please enter Search data.");
									form.search_order.focus();
								} else {
									form.submit();
								}
							}
							-->
							</script>
								<div class="list-search clearfix">
									<div class="select-custom">
										<!-- Select Custom -->
										<div class="sample-select-custom">
											<!-- Select Custom -->
											<div class="select-box custom-select-box">
												<select name="search_item" class="custom-select" placeholder="All Search">
													<option value="" selected>All Search</option>
													<option value="name">Product name</option>
													<option value="name2">Model</option>
												</select>
											</div>
										</div>
									</div>
									<div class="select-input">
										<input type="text" name="search_order" value="" placeholder="Product name or Model Serial Number Search">
										<button type="button" onclick="top_search();" class="btn-search">Search</button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</section>
			<?}?>
		<?}?>
		<!-- //visual -->
		<!-- middleArea -->
		<div id="middleArea">
			<!-- ****************** 서브메뉴 ********************** -->
			<?if($page_section != "search" && $sub_section != "equipment_intro"){?>
			<!--  모든 서브메뉴 : fixed될때 fixed-sub-menu, top-fixed-object 클래스 추가  -->
			<!-- 서브메뉴 4(PC,모바일 모두사용가능) -->
			<aside id="topMenu04" class="<?if($top_searchbox == "true"){?>fixed-sub-menu equipment-menu<?}else{?>fixed-sub-menu<?}?> top-menu-<?=$page_section?>">
				<div class="side-menu-inner clearfix">
					<div class="equipment-search-box">
						<form name="bbs_search_form2" method="get" action="<?=$site_url?>/equipment/equipment_search.php">
						<input type="hidden" name="part_idx" value="<?=$part_idx?>">
							<script language="javascript">
							<!--
							function top_search2(){
								var form = document.bbs_search_form2;
								if(form.search_order.value==""){
									alert("Please enter Search data.");
									form.search_order.focus();
								} else {
									form.submit();
								}
							}
							-->
							</script>
							<div class="list-search clearfix">
								<div class="select-custom">
									<!-- Select Custom -->
									<div class="sample-select-custom">
										<!-- Select Custom -->
										<div class="select-box custom-select-box">
											<select name="search_item" class="custom-select" placeholder="All Search">
												<option value="" selected>All Search</option>
												<option value="name">Product name</option>
												<option value="name2">Model</option>
											</select>
										</div>
									</div>
								</div>
								<div class="select-input">
									<input type="text" name="search_order" value="" placeholder="Product name or Model Serial Number Search">
									<button type="button" onclick="top_search2();" class="btn-search">Search</button>
								</div>
							</div>
						</form>
					</div>
					<div class="cm-top-menu clearfix">
						<a href="<?=$site_url?>/" class="location-to-home-btn" title="메인으로"><i class="xi-home-o"></i></a>
						<div class="menu-location location1 cm-drop-menu-box-JS" data-drop-event="click">
							<button class="cur-location cm-drop-open-btn-JS">
								<span><?=$page_info?></span>
								<i class="xi-angle-down-min arrow"></i>
							</button>
							<ul class="location-menu-con cm-drop-list-JS">
								<li><a href="<?=$site_url?>/">Home</a></li>
								<li><a href="<?=$site_url?>/nbiotek/about.php">N-BIOTEK Group</a></li>
								<li><a href="<?=$site_url?>/equipment/equipment_intro.php">Lab Equipment</a></li>
								<li><a href="<?=$site_url?>/stemcell/about.php">Stem Cell</a></li>
								<li><a href="<?=$site_url?>/customer/notice.php">CS Center</a></li>
						</div>
						<div class="menu-location location2 cm-drop-menu-box-JS" data-drop-event="click">
							<button class="cur-location cm-drop-open-btn-JS">
								<span><?=$sub_info?></span>
								<i class="xi-angle-down-min arrow"></i>
							</button>
							<ul class="location-menu-con cm-drop-list-JS">
								<?  include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_".$page_section.".php"; ?>
							</ul>
						</div>
					</div>
				</div>
			</aside>
			<!-- // -->
			<?}?>
			
			<!-- content -->
			<section id="content" class="<?if($content_type == "wide"){?>wide<?}else{?>area<?}?>">
				<?if($page_section == "customer"){?>
				<aside id="contentInfoCon" class="<?if($sub_section == "news"){?>area<?}?>">
					<h3 class="content-tit"><?=$sub_info?></h3>
				</aside>
				<?}else{?>

				<?}?>