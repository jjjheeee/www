
		<aside id="leftMenu" class="">
			<div class="inner-box">
				<a href="<?=$site_url?>/stemcell/business/intro.php" class="go-intro-btn"><i class="xi-hamburger-back"></i><span>Intro</span></a>
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
								by conducting stem cell facility, equipment, and technology transfer for helping our partner to lead the stem cell field successfully.
								<?}else if($sub_section2 == "system"){?>
								One-stop solution for SVF and PRP isolation and application.
								<?}else if($sub_section2 == "research"){?>
								provide stem cells to other hospitals for clinical research.
								<?}else if($sub_section2 == "banking"){?>
								customized stem cell storage service for future use.
								<?}?>
							<?}?>
						<?}?>
					</p>
					<a href="<?=$site_url?>/customer/inquiry.php" class="inquiry-btn"><span>Stem Cell Inquiry</span><i class="xi-caret-up-min"></i></a>
				</div>
			</div>
			<button class="open-btn"><span class="line"></span><span class="line"></span><span class="line"></span></button>
		</aside>
		
