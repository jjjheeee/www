<?
$page_num = "03";
$sub_num = "03";
$sub_num2 = "02";
$sub_num3 = "04";
$sub_num4 = "02";
$page_section = "stemcell";
$sub_section = "business";
$sub_section2 = "system";
$sub_section3 = "product";
$page_info = "Stem Cell Business";
$sub_info = "What is Stem Cell";
$sub_info2 = "STEMPIA SYSTEM";
$content_type="wide";
// $sub_info2 = "3차메뉴";	// 사용안할시 주석처리
include $_SERVER["DOCUMENT_ROOT"]."/lib/config.php";
include "../../lib/config.php";
$sub_description = ""; // 페이지 설명(Description)	필요시 사용
include "../../lib/sub.php";
include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/dtd.php";
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-deferred@2.0.0/dist/chartjs-plugin-deferred.min.js"></script>
<style>
	#content.wide {padding:0;}
</style>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/top.php"; ?>
	<section class="stemcell-system-page stemcell-business-container">
		<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/stemcell/business/left_menu.php"; ?>
		<article class="stemcell-business-content">
			<div class="area">
				<div class="system-kit-con01 system-prd-top-con" data-scroll="fade-up">
					<strong class="system-prd-tit">STEMPIA KIT</strong>
					<div class="con-box">
						<div class="img-box"><img src="<?=$site_host?>/images/content/stemcell_business_system_kit_top_img.png" alt=""></div>
						<div class="txt-box">
							<span class="logo"><img src="<?=$site_host?>/images/content/stemcell_business_system_kit_top_logo.png" alt="STEMPIA"></span>
							<strong class="tit"> Adipose derived Stem Cell Isolation Kit </strong>
						</div>
					</div>
				</div>
				<div class="system-kit-con02">
					<div class="tit-box" data-scroll="fade-up">
						<strong class="stem-business-tit small">SIMPLE AND EASY SVF ISOLATION WITH STEMPIA KIT</strong>
						<p class="stem-business-txt">
							STEMPIA KIT consist of two specially designed tubes for isolation and concentration of SVF derived from adipose tissue. STEMPIA offer easier and shorter process for SVF isolation using less consumables and tools as compared with typical manual SVF isolation process using pipets and conical tubes. 
							<span>Save both cost and time for SVF isolation with STEMPIA KIT.</span>
						</p>
					</div>
					<div class="con-box">
						<div class="item" data-scroll="fade-up">
							<div class="inner">
								<div class="left-box"><strong class="tit">Simple & Easy Isolation</strong></div>
								<div class="right-box"><p class="txt stem-business-txt">SVF isolation process is simplified to allow anyone to conduct SVF isolation easily.</p></div>
							</div>
						</div>
						<div class="item" data-scroll="fade-up">
							<div class="inner">
								<div class="left-box"><strong class="tit">Low Rist of Contamination</strong></div>
								<div class="right-box"><p class="txt stem-business-txt">Since fat tissue and cells are not exposed to external environment during isolation, <br class="pc-br"> The risk of contamination is minimized.</p></div>
							</div>
						</div>
						<div class="item" data-scroll="fade-up">
							<div class="inner">
								<div class="left-box"><strong class="tit">High Quality</strong></div>
								<div class="right-box"><p class="txt stem-business-txt">The quality of treatment is upgraded by the high cell viability and yield rate of STEAMPIA KIT.</p></div>
							</div>
							<div class="graph-box">
								<div class="graph-item">
									<div class="inner-box">
										<canvas class="chartjs-wrapper" id="chart01" class=""></canvas>
									</div>
								</div>
								<div class="graph-item">
									<div class="inner-box">
										<canvas class="chartjs-wrapper" id="chart02" class=""></canvas>
									</div>
								</div>
							</div>
						</div>
						<div class="item" data-scroll="fade-up">
							<div class="inner">
								<div class="left-box"><strong class="tit">Cost Saving</strong></div>
								<div class="right-box">
									<p class="txt stem-business-txt">Cost is greatly saved by decreasing the numbers and types of necessary consumables</p>
								</div>
								<div class="img-box">
									<ul class="img-list">
										<li>
											<dl>
												<dt><img src="<?=$site_host?>/images/content/stemcell_business_system_kit_img_01.jpg" alt="Consumables required for SVF isolation (General Manual) Image"></dt>
												<dd>Consumables required for SVF isolation (General Manual)</dd>
											</dl>
										</li>
										<li>
											<dl>
												<dt><img src="<?=$site_host?>/images/content/stemcell_business_system_kit_img_02.jpg" alt="Consumables of STEMPIA KIT Image"></dt>
												<dd>Consumables of STEMPIA KIT</dd>
											</dl>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>
	</section>

	<script>
		Chart.register(ChartDataLabels);//chart dataTable Plugin 연결
		Chart.register(ChartDeferred); // chart deferred Plugin 연결

		var barChart01 = document.getElementById("chart01");
		var barChart02 = document.getElementById("chart02");
		var ctx = barChart01.getContext("2d");
		var gradient = ctx.createLinearGradient(0, 0, 0, 400);
			gradient.addColorStop(0, '#d298a6');   
			gradient.addColorStop(0.2, '#d398a4');   
			gradient.addColorStop(0.5, '#71a7ba');   
			gradient.addColorStop(1, '#70a8b7');


		var chart01 = new Chart(barChart01, {
			type: 'bar',
			 data: {
				  labels: ["Test 1", "Test 2", "Test 3", "Test 4","Test 5","Test 6"],
				  datasets: [
						{
						  backgroundColor:gradient,
						  data: [100,85,80,96.6,95.9,81,87.8,89.5],
						  datalabels: {
							display:false,
						  },
						  barPercentage: 0.16
						}
					  ]
				  },
			options: {
				// Plugins 
				plugins: {
					deferred: {
					  yOffset: '100%'
					},
					legend:{
						display:false,
					}
				},
				scales: {
					x: {
						grid: {
							borderColor:'#a0a0a0',
							borderWidth:2,
							drawOnChartArea:false,
							tickColor:'white',
							z:1
						},
						ticks:{
							color:'#575757',
							font: {
							  weight: 500,
							  size:'14',
							  family:'Poppins',
							},
						},
					},
					y: {
						ticks: {
							beginAtZero:true,
							bezierCurve : false,
							stepSize:20,
							color:'#575757',
							font: {
							  weight: '500',
							  size:'14',
							  family:'Poppins',
							},
							padding:20,
						},
						grid:{
							borderColor:'white',
							tickColor:'white'
						}
					}
				},
				maintainAspectRatio: true,
			}
		});
		var chart02 = new Chart(barChart02, {
			type: 'bar',
			 data: {
				  labels: ["5", "10", "15", "20","25","30","Avg"],
				  datasets: [
						{
						  backgroundColor:"#cc99cd",
						  data: [100,85,80,96.6,95.9,81,87.8,89.5],
						  datalabels: {
							display:false,
						  },
						  barPercentage: 0.4
						},
						{
						  backgroundColor:"#7ec699",
						  data: [100,85,80,96.6,95.9,81,null],
						  datalabels: {
							display:false,
						  },
						   barPercentage: [0.4,0.4,0.4,0.4,0.4,0.4,0,],
						},
						{
						  backgroundColor:"#f8c555",
						  data: [100,85,80,96.6,95.9,81,null],
						  datalabels: {
							display:false,
						  },
						   barPercentage: [0.4,0.4,0.4,0.4,0.4,0.4,null],
						},
						{
						  backgroundColor:"#f08d49",
						  data: [100,85,80,96.6,95.9,81,null],
						  datalabels: {
							display:false,
						  },
						  barPercentage: [0.4,0.4,0.4,0.4,0.4,0.4,0.1,],
						  
						},
						{
						  backgroundColor:["#7e8083","#7e8083","#7e8083","#7e8083","#7e8083","#7e8083",gradient],
						  data: [100,85,80,96.6,95.9,81,87.8],
						  datalabels: {
							display:false,
						  },
						  barPercentage: [0.4,0.4,0.4,0.4,0.4,0.4,0.4,0.8],
						  //categoryPercentage:[1,1,1,1,1,1,1,1],
						}
					  ]
				  },
			options: {
				// Plugins 
				plugins: {
					deferred: {
					  yOffset: '100%'
					},
					legend:{
						display:false,
					}
				},
				scales: {
					x: {
						grid: {
							borderColor:'#a0a0a0',
							borderWidth:2,
							drawOnChartArea:false,
							tickColor:'white',
							z:1
						},
						ticks:{
							color:'#575757',
							font: {
							  weight: ['500','500','500','500','500','500','500','600',],
							  size:'14',
							  family:'Poppins',
							},
							align:'right'
						},
					},
					y: {
						ticks: {
							beginAtZero:true,
							bezierCurve : false,
							stepSize:20,
							color:'#575757',
							font: {
							  weight: '500',
							  size:'14',
							  family:'Poppins',
							},
							padding:20,
						},
						grid:{
							borderColor:'white',
							tickColor:'white'
						}
					}
				},
				maintainAspectRatio: true,
			}
		});

</script>
<? include $_SERVER["DOCUMENT_ROOT"].$site_directory."/include/bottom.php"; ?>
