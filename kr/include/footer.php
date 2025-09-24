	<footer id="footer">
		<button class="to-top-btn"><em class="blind">TOP</em><i class="xi-arrow-up"></i></button>
		<?if($sub_section=="business"){?>
		<a href="<?=$site_url?>/customer/inquiry.php" class="business-inquiry-btn"><em class="blind">Inquiry</em><i class="xi-border-color"></i></a>
		<?}?>
		<!-- 푸터 상단 -->
		<article id="footerTop">
			<div class="area-box clearfix">
				<!-- 푸터상단 왼쪽 -->
				<div class="footer-left-con">
					<ul class="foot-menu clearfix">
						<li><a href="<?=$site_url?>/etc/privacy.php" class="cm-modal-open-btn">개인정보 보호정책</a></li>
						<li><a href="<?=$site_host?>/images/content/N-BIOTEK_PRODUCT_CATALOG_VOL_18.pdf" download>카탈로그 다운로드</a></li>
						<li><a href="<?=$site_url?>/customer/contact.php">연락처 및 주소</a></li>
					</ul>
				</div>
				<!-- 푸터상단 오른쪽 -->
				<div class="footer-right-con">
					<div class="family-site-box cm-drop-menu-box-JS" data-drop-event="click">
						<button class="family-site-open-btn cm-drop-open-btn-JS">Family Site </button>
						<ul id="footerFamilyList" class="family-site-list cm-drop-list-JS">
							<li><a href="http://esfomi.co.kr/" target="_blank" title="새창으로열기">esfomi</a></li>
							<li><a href="https://issca.net/" target="_blank" title="새창으로열기">ISSCA</a></li>
						</ul>
					</div>
					<div class="foot-sns-menu">
						<ul class="clearfix">
							<li><a href="https://www.youtube.com/channel/UC0GK7C1iG7zU5LfOirUNPlw" target="_blank" title="새창으로열기"><i class="xi-youtube-play"></i></a></li>
							<li><a href="https://www.instagram.com/nbiotek.official/" target="_blank" title="새창으로열기"><i class="xi-instagram"></i></a></li>
							<li><a href="https://ko-kr.facebook.com/nbiotek/" target="_blank" title="새창으로열기"><i class="xi-facebook-official"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</article>
		<!-- 푸터 하단 -->
		<article id="footerBottom">
			<div class="area-box clearfix">
				<!-- 푸터 하단 왼쪽 -->
				<article class="footer-left-con">
					<div class="footer-address-info-box">
						<div class="footer-address-list">
							<dl>
								<dt>주소</dt>
								<dd>경기도 부천시 평천로 655 부천테크노파크 402-803, 우) 14502</dd>
							</dl>
						</div>
						<div class="footer-address-list">
							<dl>
								<dt>전화</dt>
								<dd>+82.32.321.2100</dd>
							</dl>
							<dl>
								<dt>팩스</dt>
								<dd>+82.32.328.2372</dd>
							</dl>
							<dl>
								<dt>이메일</dt>
								<dd><a href="mailto:webmaster@n-biotek.com">webmaster@n-biotek.com</a></dd>
							</dl>
						</div>
					</div>
					<div class="footer-copyright">Copyright ⓒ <b>N-BIOTEK</b> All rights reserved.</div>
				</article>
				<!-- 푸터 하단 오른쪽 -->
				<article class="footer-right-con">
					<span class="foot-logo"><img src="<?=$site_host?>/images/common/footer_logo.jpg" alt="<?=$site_head_title?>" /></span>
				</article>
			</div>
		</article>
	</footer>