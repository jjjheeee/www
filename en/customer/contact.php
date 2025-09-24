<?
$page_num = "05";
$sub_num = "05";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "customer";
$sub_section = "contact";
$page_info = "CS Center";
$sub_info = "Contact Us";
//$content_type="wide";
// $sub_info2 = "3차메뉴";	// 사용안할시 주석처리
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(Description)	필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<style>
#content:not(.wide){padding: 180px 0;}
@media (max-width: 1260px){
	#content:not(.wide){padding: 180px 30px;}
}
@media (max-width: 1024px){
	#content:not(.wide){padding: 100px 30px;}
}
</style>

<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
	<section class="contact-page">
		<article class="contact-item" data-scroll="fade-up">
			<article class="map-iframe-wrapper">
				<div class="map-iframe-con">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.6159956082747!2d126.7619138155874!3d37.516974134722226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b7d5c58cb3cbb%3A0x2b7d77ac9dd8bfe0!2z6rK96riw64-EIOu2gOyynOyLnCDsm5Drr7jqtawg7JW964yA64-ZIO2PieyynOuhnCA2NTU!5e0!3m2!1sko!2skr!4v1630049088172!5m2!1sko!2skr" width="1200" height="429" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</article> 
			<div class="contact-info-wrapper">
				<div class="inner">
					<h3>Headquarter</h3>
					<div class="info-list">
						<dl>
							<dt>ADDRESS</dt>
							<dd>402-803, Technopark, 655, Pyeongcheon-ro, Bucheon-si, Gyeonggi-do, 14502, Republic of Korea</dd>
						</dl>
						<dl>
							<dt>E-MAIL</dt>
							<dd>webmaster@n-biotek.com</dd>
						</dl>
						<dl>
							<dt>TEL</dt>
							<dd>032-321-2100</dd>
						</dl>
						<dl>
							<dt>FAX</dt>
							<dd>032-328-2372</dd>
						</dl>
					</div>
				</div>
			</div>
		</article>

		<article class="contact-item" data-scroll="fade-up" id="rndLocation">
			<article class="map-iframe-wrapper">
				<div class="map-iframe-con">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.3674166347446!2d126.76504196564726!3d37.522835384386674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c82a7631f2da3%3A0xd7b7e7af5dc0d41!2z7IyN7JqpM-ywqC7rtoDsspzthYztgazrhbjtjIztgaw!5e0!3m2!1sko!2skr!4v1643083300420!5m2!1sko!2skr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</article> 
			<div class="contact-info-wrapper">
				<div class="inner">
					<h3>N-BIOTEK <br class="pc-br" />R&D Center</h3>
					<div class="info-list">
						<dl>
							<dt>ADDRESS</dt>
							<dd>104-706, Technopark Ssangyong 3cha, 397, Seokcheon-ro, Bucheon-si, Gyeonggi-do, 14449, Republic of Korea</dd>
						</dl>
						<!--<dl>
							<dt>E-MAIL</dt>
							<dd>rnd@n-biotek.com</dd>
						</dl>-->
						<dl>
							<dt>TEL</dt>
							<dd>032-624-4274</dd>
						</dl>
						<dl>
							<dt>FAX</dt>
							<dd>032-328-2372</dd>
						</dl>
					</div>
				</div>
			</div>
		</article>

		<article class="contact-item" data-scroll="fade-up">
			<article class="map-iframe-wrapper">
				<div class="map-iframe-con">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.5408348418337!2d126.76191511564713!3d37.518746434620695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b7d5c24826d43%3A0xf07add0a58a0f23d!2z6rK96riw64-EIOu2gOyynOyLnCDsmKTsoJXqtawg7ISd7LKc66GcIDM0NQ!5e0!3m2!1sko!2skr!4v1641257683388!5m2!1sko!2skr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</article> 
			<div class="contact-info-wrapper">
				<div class="inner">
					<h3>Branch Factory </h3>
					<div class="info-list">
						<dl>
							<dt>ADDRESS</dt>
							<dd>304-805, Technopark, 345, Seokcheon-ro, Bucheon-si, Gyeonggi-do, 14501, Republic of Korea</dd>
						</dl>
						<dl>
							<dt>TEL</dt>
							<dd>032-234-1016</dd>
						</dl>
						<dl>
							<dt>FAX</dt>
							<dd>032-234-1017</dd>
						</dl>
					</div>
				</div>
			</div>
		</article>
	</section>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
