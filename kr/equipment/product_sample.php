<?
$page_num = "06";
$sub_num = "01";
// $sub_num2 = "01";	// 사용안할시 주석처리
$page_section = "equipment";
$sub_section = "equipment_list";
$page_info = "Lab Equipment";
$sub_info = "CO2 Incubator";
$top_searchbox = "true";
//$content_type="wide";
// $sub_info2 = "3차메뉴";	// 사용안할시 주석처리
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../lib/config.php";
$sub_description = ""; // 페이지 설명(Description)	필요시 사용
include "../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>


<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
	<article class="view-detail-container">
				<div class="img-box"><img src="<?=$site_host?>/images/test/equipment_img01.png" alt=""></div>
				<div class="detail-item">
					<dl>
						<dt class="detail-tit big">Realize your large scale cell culture needs <br class="pc-br" />with the great platform, Max Cell™. </dt>
						<dd class="detail-txt">N-BIOTEK 880 liter large-capacity CO<sub>2</sub> incubator, Max Cell™ provides the optimal environment for your large scale cell culture needs in one <br class="pc-br" />big platform. Its 6-side direct heating and optimal air circulation system enable to maintain excellent uniformity of temperature, humidity <br class="pc-br" />and CO<sub>2</sub>  even under full container loading. It is specially optimized for the use of large cell culture containers like Corning Cell Stack and <br class="pc-br" />Nunk Cell Factory. With this one big platform, stacking two incubators is not needed anymore.</dd>
					</dl>
				</div>

				<div class="detail-item">
					<h4 class="front-cir-title detail-tit big">Products Features</h4>
					<dl>
						<dt class="detail-tit">Optimized for large scale cell container</dt>
						<dd class="detail-txt">Maximum 6 x Corning Cell Stack or Nunk Cell Factory is available on a shelf, Totally, 30 x 10 layer Cell stack containers loadable  in an incubator.</dd>
					</dl>
					<div class="img-box add-top-pd"><img src="<?=$site_host?>/images/test/equipment_img02.png" alt=""></div>
				</div>

				<div class="detail-item">
					<dl>
						<dt class="detail-tit">Excellent Temperature uniformity & Rapid Heating for fast recovery by 6 side direct heating and 4 Air Circulation Fans</dt>
						<dd class="detail-txt">Four air circulation fans are installed at bottom side of air-duct that is mounted on rare wall in chamber.<br />Such fans move the air from down to top through the air-duct and direct airflow from top to down.<br/>It eventually distributes the air including heat, CO₂, humidity evenly throughout the big chamber.</dd>
					</dl>
					<div class="img-box add-top-pd"><img src="<?=$site_host?>/images/test/equipment_img03.png" alt=""></div>
				</div>

				<dl class="detail-item">
					<dt class="detail-tit">7 Inch Full Color LCD Touch Panel</dt>
					<dd class="detail-txt">
						<p class="sub-detail-tit">Easy Setup, Clear View, Data Recording, Real-time Information</p>
						<p class="front-dash-txt">Internal Memory recordable for 6months and USB 3.0 for longer data recording & extraction</p>
						<p class="front-dash-txt">Microprocess PID control, Screen Lock, Alarm Message, Real-time Monitoring Graph</p>
					</dd>
				</dl>
				<div class="detail-item">
					<dl>
						<dt class="detail-tit">Various Composition and Divided Glass Door Options</dt>
						<dd class="detail-txt">
							<p class="front-dash-txt">25 Positions of Shelf and 5 Types of Glass doors(Also, customization available)</p>
						</dd>
					</dl>
					<div class="img-box add-top-pd"><img src="<?=$site_host?>/images/test/equipment_img04.png" alt=""></div>
				</div>

				<p style="color:red; font-size:20px; margin:200px 0 30px">이미지 왼쪽정렬을 원할시에는 img-box 클래스에 lf 추가해주세요</p>
				<div class="img-box lf"><img src="<?=$site_host?>/images/test/equipment_img03.png" alt=""></div>

			</div>
	</article>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
