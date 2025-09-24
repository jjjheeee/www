
		<aside id="leftMenu" class="">
			<div class="inner-box">
				<a href="<?=$site_url?>/stemcell/business/intro.php" class="go-intro-btn"><i class="xi-hamburger-back"></i><span>인트로</span></a>
				<strong class="top-tit"><?=$sub_info2?></strong>
				<div class="menu-box">
					<ul class="menu-list">
						<?  include $_SERVER["DOCUMENT_ROOT"].$site_directory."/stemcell/business/left_menu_".$sub_section2.".php"; ?>
					</ul>
				</div>
				<div class="bottom-txt-box">
					<strong class="tit">
						<?if($leftMenu_tit){?>
						<?=$leftMenu_tit?>
						<?}else{?>
							<?if($sub_section3 != "product"){?> <?=$sub_info2?> <?}?>
						<?}?>
					</strong>
					<p class="txt">
						<?if($leftMenu_txt){?>
						<?=$leftMenu_txt?>
						<?}else{?>
							<?if($sub_section3 != "product"){?>
								<?if($sub_section2 == "solutions"){?>
								국내외 파트너 분들이 성공적으로 첨단재생의료 분야를 선도할 수 있도록 바이오클린룸 구축, 생명과학장비 설치 그리고 줄기세포 처리기술 이전까지 제공하고 있습니다.
								<?}else if($sub_section2 == "system"){?>
								SVF 및 PRP 분리 및 응용을 위한<br class="pc-br"> 원스톱 솔루션.
								<?}else if($sub_section2 == "research"){?>
								공식적으로 허가받은 시설에서 지방 및 제대혈 줄기세포, 면역세포 등을 안전하게 처리합니다. 
								<?}else if($sub_section2 == "banking"){?>
								추후 사용을 위한 맞춤화된 줄기세포 보관 서비스
								<?}?>
							<?}?>
						<?}?>
					</p>
					<a href="<?=$site_url?>/customer/inquiry.php" class="inquiry-btn"><span>줄기세포 문의</span><i class="xi-caret-up-min"></i></a>
				</div>
			</div>
			<button class="open-btn"><span class="line"></span><span class="line"></span><span class="line"></span></button>
		</aside>
		
