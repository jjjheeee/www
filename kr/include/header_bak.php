	
	<header id="header" class="top-fixed-object"><!-- .top-fixed가 붙는 object에 top-fixed-object 클래스 추가  -->
		<div class="gnb-overlay-bg"></div>
		<div id="headerInnerWrap">
			<!-- ****************** 헤더상단 ********************** -->
			<div class="area-box">
				<div id="headerInner" class="clearfix">
					<h1 class="logo"><a href="<?=$site_url?>/"><em class="blind">메인으로</em><img src="<?=$site_host?>/images/common/logo.svg" alt="<?=$site_head_title?>" /></a></h1>
					<div class="header-util-box">
						<!-- 사이트맵 버튼 ( 기본 ) -->
						<a href="<?=$site_url?>/etc/sitemap.php" class="sitemap-line-btn cm-modal-open-btn header-cm-link" title="사이트맵 열기">Sitemap</a>
						<!-- 사이트맵 style 02 (toggle기능 사용안하면 date-event 삭제) -->
						<!-- <button class="sitemap-line-btn sitemap-open-btn" title="사이트맵 열기" data-event="toggle">
							<span class="line line1"></span><span class="line line2"></span><span class="line line3"></span>
						</button> -->
						<? // include $_SERVER["DOCUMENT_ROOT"].$site_directory."/etc/sitemap_02.php"; ?>
						<!-- 외국어선택 -->
						<div class="header-lang-box">
							<ul class="header-lang-list">
								<li class="cur"><a href="<?=$site_host?>/kr/">KOR</a></li>
								<li><a href="<?=$site_host?>/en/">ENG</a></li>
							</ul>
						</div>
						
						<!-- <div class="header-lang cm-drop-menu-box-JS" data-drop-event="click">
							<button class="lang-open-btn cm-drop-open-btn-JS"><strong>KOR</strong><span class="arrow"><i class="xi-angle-down-min"></i></span></button>
							<ul id="headerLangList" class="cm-drop-list-JS">
								<li><a href="<?//=$site_host?>/en/">ENG</a></li>
							</ul>
						</div> -->
					</div>
				</div>
			</div>
			<!-- ****************** GNB ********************** -->
			<!-- GNB PC  -->
			<nav id="gnb" class="total-menu">
				<h2 class="blind">주메뉴</h2>
				<!-- 
					- 전체메뉴 : class="total-menu"
					- 각각메뉴 : class="each-menu" + <div id="gnbBg"></div> 삭제
				-->
				<div id="gnbBg"></div>
				<ul class="clearfix">
					<li class="gnb1">
						<a href="<?=$site_url?>/"><span>Home</span></a>
						<div class="gnb-2dep">
							<ul>
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_home.php"; ?>
							</ul>
						</div>
					</li>
					<li class="gnb2">
						<a href="<?=$site_url?>/nbiotek/about.php"><span>N-BIOTEK 그룹</span></a>
						<div class="gnb-2dep">
							<ul>
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_nbiotek.php"; ?>
							</ul>
						</div>
					</li>
					<li class="gnb3">
						<a href="<?=$site_url?>/equipment/equipment_intro.php"><span>실험 장비</span></a>
						<div class="gnb-2dep">
							<ul>
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_equipment.php"; ?>
							</ul>
						</div>
					</li>
					<li class="gnb4">
						<a href="<?=$site_url?>/stemcell/about.php"><span>줄기세포</span></a>
						<div class="gnb-2dep">
							<ul>
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_stemcell.php"; ?>
							</ul>
						</div>
					</li>
					<li class="gnb5">
						<a href="<?=$site_url?>/customer/notice.php"><span>CS Center</span></a>
						<div class="gnb-2dep">
							<ul>
								<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_customer.php"; ?>
							</ul>
						</div>
					</li>
				</ul>
			</nav>
		</div>
		<!-- GNB Mobile -->
		<button class="nav-open-btn" title="네비게이션 열기">
			<i class="xi-apps open"></i>
			<i class="xi-close close"></i>
		</button>
		<!-- <div class="mb-quick-menu">
			<ul class="area-box clearfix">
				<li class="menu-01"><a href="<?=$site_url?>/nbiotek/about.php">N-BIOTEK</a></li>
				<li class="menu-02"><a href="<?=$site_url?>/equipment/equipment_intro.php">Lab Equipment</a></li>
				<li class="menu-03"><a href="<?=$site_url?>/stemcell/about.php">Stem Cell</a></li>
				<li class="menu-04"><a href="<?=$site_url?>/customer/notice.php">CS Center</a></li>
			</ul>
		</div> -->
		<div class="gnb-overlay-bg-m"></div>
		<nav id="gnbM" class="gnb-style-basic">
			<div class="gnb-navigation-wrapper">
				<div class="gnb-navigation-inner">
					<ul id="navigation" data-menu-clone="false">
						<li class="gnb1">
							<a href="<?=$site_url?>/"><span>Home</span></a>
						</li>
						<li class="gnb2">
							<a href="<?=$site_url?>/nbiotek/about.php"><span>N-BIOTEK 그룹</span></a>
							<div class="gnb-2dep">
								<ul>
									<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_nbiotek.php"; ?>
								</ul>
							</div>
						</li>
						<li class="gnb3">
							<a href=""><span>실험 장비</span></a>
							<div class="gnb-2dep">
								<ul>
									<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_equipment.php"; ?>
								</ul>
							</div>
						</li>
						<li class="gnb4">
							<a href=""><span>줄기세포</span></a>
							<div class="gnb-2dep">
								<ul>
									<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_stemcell.php"; ?>
								</ul>
							</div>
						</li>
						<li class="gnb5">
							<a href="<?=$site_url?>/customer/notice.php"><span>CS Center</span></a>
							<div class="gnb-2dep">
								<ul>
									<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/menu_customer.php"; ?>
								</ul>
							</div>
						</li>
						<li class="gnb6">
							<a href="" target="_blank"><span>INTRANET</span></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>