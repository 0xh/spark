@extends('layouts.metro')

@section('content')

<div class="section-wrapper page-heading ">
	<h3>Welcome to Dashboard</h3>
</div>

<div id="tile-area" class="section-wrapper tile-area-scheme-darkCyan fg-white ">
	<div class="grid animatedx fadeInRightBig" >

		<div class="tile-group double">
			<span class="tile-group-title">General</span>
			<div class="tile-container">
				
				<a href="http://calendar.google.com" class="tile bg-indigo fg-white" data-role="tile">
					<div class="tile-content iconic">
						<span class="icon mif-calendar"></span>
					</div>
					<span class="tile-label">Calendar</span>
				</a>

				<div class="tile bg-darkBlue fg-white" data-role="tile" onclick="document.location.href='http://gmail.com'">
					<div class="tile-content iconic">
						<span class="icon mif-envelop"></span>
					</div>
					<span class="tile-label">Inbox</span>
				</div>

				<div class="tile-wide bg-steel fg-white" data-role="tile" data-on-click="document.location.href='http://weather.com'">
						<div class="tile-content" style="background: url({{ asset('metro/images/clouds2.png')}}) top left no-repeat; background-size: cover">
							<span class="padding10 place-right">Weather</span>
							<div class="padding10">
								<h1 class="text-shadow">57°</h1>
								<h4 class="text-shadow">San Francisco</h4>
								<h6 class="text-shadow">Party Cloudy</h6>
							</div>
						</div>
					</div>

			</div>
		</div>

		<div class="tile-group double">
			<span class="tile-group-title">On the Web</span>
			<div class="tile-container">
				<div class="tile bg-teal fg-white" data-role="tile">
					<div class="tile-content iconic">
						<span class="icon mif-pencil"></span>
					</div>
					<span class="tile-label">Editor</span>
				</div>
				<div class="tile bg-darkGreen fg-white" data-role="tile">
					<div class="tile-content iconic">
						<span class="icon mif-shopping-basket"></span>
					</div>
					<span class="tile-label">Store</span>
				</div>
				<div class="tile bg-cyan fg-white" data-role="tile">
					<div class="tile-content iconic">
						<span class="icon mif-skype"></span>
					</div>
					<div class="tile-label">Skype</div>
				</div>
				<div class="tile bg-darkBlue fg-white" data-role="tile">
					<div class="tile-content iconic">
						<span class="icon mif-cloud"></span>
					</div>
					<span class="tile-label">OneDrive</span>
				</div>
			</div>
		</div>
		
		<div class="tile-group one">
			<span class="tile-group-title">Office</span>

			<div class="tile-small bg-blue" data-role="tile">
				<div class="tile-content iconic">
					<img src="{{ asset('metro/images/outlook.png') }}" class="icon">
				</div>
			</div>
			<div class="tile-small bg-darkBlue" data-role="tile">
				<div class="tile-content iconic">
					<img src="{{ asset('metro/images/word.png') }}" class="icon">
				</div>
			</div>
			<div class="tile-small bg-green" data-role="tile">
				<div class="tile-content iconic">
					<img src="{{ asset('metro/images/excel.png') }}" class="icon">
				</div>
			</div>

			<div class="tile-small bg-orange" data-role="tile">
				<div class="tile-content iconic">
					<img src="{{ asset('metro/images/powerpoint.png') }}" class="icon">
				</div>
			</div>
		</div>

	</div>

</div>
<div class="clr margin-bottom-10 "></div>	


<div class="section-wrapper animatedx fadeInRightBig ">
	<div class="grid">
		<div class="row cells5">
		

			<div class="cell">
				<div class="panel widget-box no-margin-bottom ">
					<div class="heading">
						<div class="title">Views <span class="widget-tag fg-cyan">monthly</span></div>
					</div>
					<div class="content">
						<div class="text">
							
							<h2 data-role="countup">425,150</h2>
							<div class="text-secondary">
								Total views:
								<span class="place-right fg-darkCyan">95% <span class="fa fa-arrow-up"></span></span>
							</div>

						</div>
					</div>
				</div>
			</div>


			<div class="cell">
				<div class="panel widget-box no-margin-bottom ">
					<div class="heading bg-violet">
						<div class="title">Order <span class="widget-tag fg-violet">annual</span></div>
					</div>
					<div class="content">
						<div class="text">
							
							<h2 data-role="countup">845,750</h2>
							<div class="text-secondary">
								Incremental order:
								<span class="place-right fg-darkCyan">75% <span class="fa fa-arrow-up"></span></span>
							</div>

						</div>
					</div>
				</div>
			</div>


			<div class="cell">
				<div class="panel widget-box no-margin-bottom ">
					<div class="heading bg-orange">
						<div class="title">Visitor <span class="widget-tag fg-orange">today</span></div>
					</div>
					<div class="content">
						<div class="text">
							
							<h2 data-role="countup">125,250</h2>
							<div class="text-secondary">
								Incremental visitor:
								<span class="place-right fg-darkCyan">58% <span class="fa fa-arrow-up"></span></span>
							</div>

						</div>
					</div>
				</div>
			</div>


			<div class="cell colspan2">
				<div class="panel widget-box no-margin-bottom ">
					<div class="heading bg-red">
						<div class="title">Quaterly Income <span class="widget-tag fg-red">updted 06.08.2015</span></div>
					</div>
					<div class="content">
						<div class="text">
							
							<div class="flot-chart" style="height:70px">
								<div class="flot-chart-content" id="flot-chart1"></div>
							</div>

						</div>
					</div>
				</div>
			</div>



		</div>
	</div>
</div>

<div class="section-wrapper ">
	<div class="grid ">
		<div class="row cells3">
			
			<div class="cell colspan2">
				
				<div class="panel widget-box ">
					<div class="content">
						<div class="text">
							
							<span class="align-right place-right">
								<span class="text-secondary">Average sales achivement in: <strong>pacific</strong></span><br>
								<span>All Sales: 231,764</span>
							</span>

							<h4>Semester revenue report</h4>
							<small>Sales &amp; marketing</small>
							
							<div class="row cells3">
								<div class="cell colspan2">
									
									<div class="chartjs-content" >
										<canvas id="lineChart" height="114"></canvas>
									</div>

								</div>

								<div class="cell">
									
									<h4>1,234</h4>
									<small>total orders in period</small>
									<div class="progress small" data-role="progressBar" data-value="40" data-color='bg-lighterBlue'></div>

									<h4>3,541</h4>
									<small>Orders in last month</small>
									<div class="progress small" data-role="progressBar" data-value="56" data-color='bg-lightGreen'></div>


								</div>

							</div>

							<div class="padding10 no-padding-h text-secondary fg-gray">
								<span class="place-right align-right">
									<span class="fa fa-clock-o"></span> updated 06.08.2015
								</span>
								<span><b>Sales Analysis:</b> The value has been changed over time, and last month reached level over $50,000</span>
							</div>

						</div>
					</div>
				</div>

			</div>

			<div class="cell">
				
				<div class="panel widget-box ">
					<div class="heading bg-white">
						<div class="title fg-darker">Orders <span class="widget-tag fg-white bg-orange">data updated</span></div>
					</div>
					<div class="content">
						<div class="text">
							
							<table class="table bordered-h fg-darker">
								<tr>
									<th>Product</th>
									<th>SKU</th>
									<th>Qty</th>
								</tr>
								<tr>
									<td>Bags</td>
									<td>Bg001</td>
									<td>2 pcs</td>
								</tr>
								<tr>
									<td>Wallet</td>
									<td>Wl005</td>
									<td>1 pcs</td>
								</tr>
								<tr>
									<td>Book</td>
									<td>Bo012</td>
									<td>5 pcs</td>
								</tr>
								<tr>
									<td>Lady Bags</td>
									<td>Bg012</td>
									<td>1 pcs</td>
								</tr>
								<tr>
									<td>Shoes</td>
									<td>Sh003</td>
									<td>2 pairs</td>
								</tr>
							</table>

						</div>
					</div>
				</div>

			</div>


		</div>
	</div>
</div>

<div class="section-wrapper">

	<div class="grid">
		<div class="row cells">
			<div class="cell">
				
				<div class="panel widget-box " data-role="panel">
					<div class="heading">
						<div class="title">Responsive table</div>
					</div>
					<div class="content">
						<div class="sub-heading bg-chess ">Try to resize window</div>
						<div class="text">
							
							<div class="table-responsive ">
								
								<table class="table border bordered striped ">
									<thead class="">
										<tr>
											<th>#</th>
											<th>Project</th>
											<th>Name</th>
											<th>Phone</th>
											<th>Company</th>
											<th>Completeion</th>
											<th>Task</th>
											<th>Date</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>Project P</td>
											<td>Jaya</td>
											<td>555-7837</td>
											<td>Platoon</td>
											<td class="align-center"><span class="peity-chart" data-type="donut" data-fill='["#7ad61d","#eeeeee"]' data-innerradius="3" data-radius="10" >7/10</span> </td>
											<td>pending</td>
											<td>06.08.2015</td>
											<td class="align-center"><span class="fa fa-check fg-green"></span></td>
										</tr>
										<tr>
											<td>2</td>
											<td>Project P</td>
											<td>Jaka</td>
											<td>555-7837</td>
											<td>Platoon</td>
											<td class="align-center"><span class="peity-chart" data-type="donut" data-fill='["orange","#cccccc"]' data-innerradius="3" data-radius="10" >6/10</span> </td>
											<td>pending</td>
											<td>06.08.2015</td>
											<td class="align-center"><span class="fa fa-check fg-green"></span></td>
										</tr>
										<tr>
											<td>3</td>
											<td>Project P</td>
											<td>Firdaus</td>
											<td>555-7837</td>
											<td>Platoon</td>
											<td class="align-center"><span class="peity-chart" data-type="donut" data-fill='["orange","#eeeeee"]' data-innerradius="3" data-radius="10" >4/10</span> </td>
											<td>pending</td>
											<td>06.08.2015</td>
											<td class="align-center"><span class="fa fa-check fg-green"></span></td>
										</tr>
										<tr>
											<td>4</td>
											<td>Project P</td>
											<td>Monita</td>
											<td>555-7837</td>
											<td>Platoon</td>
											<td class="align-center"><span class="peity-chart" data-type="donut" data-fill='["#7ad61d","#eeeeee"]' data-innerradius="3" data-radius="10" >8/10</span> </td>
											<td>pending</td>
											<td>06.08.2015</td>
											<td class="align-center"><span class="fa fa-check fg-green"></span></td>
										</tr>
										<tr>
											<td>5</td>
											<td>Project P</td>
											<td>Jaka</td>
											<td>555-7837</td>
											<td>Platoon</td>
											<td class="align-center"><span class="peity-chart" data-type="donut" data-fill='["orange","#eeeeee"]' data-innerradius="3" data-radius="10" >5/10</span> </td>
											<td>pending</td>
											<td>06.08.2015</td>
											<td class="align-center"><span class="fa fa-check fg-green"></span></td>
										</tr>
										<tr>
											<td>6</td>
											<td>Project P</td>
											<td>Firdaus</td>
											<td>555-7837</td>
											<td>Platoon</td>
											<td class="align-center"><span class="peity-chart" data-type="donut" data-fill='["#7ad61d","#eeeeee"]' data-innerradius="3" data-radius="10" >9/10</span> </td>
											<td>pending</td>
											<td>06.08.2015</td>
											<td class="align-center"><span class="fa fa-check fg-green"></span></td>
										</tr>
										<tr>
											<td>7</td>
											<td>Project P</td>
											<td>Jaya</td>
											<td>555-7837</td>
											<td>Platoon</td>
											<td class="align-center"><span class="peity-chart" data-type="donut" data-fill='["#7ad61d","#eeeeee"]' data-innerradius="3" data-radius="10" >7/10</span> </td>
											<td>pending</td>
											<td>06.08.2015</td>
											<td class="align-center"><span class="fa fa-check fg-green"></span></td>
										</tr>
										<tr>
											<td>8</td>
											<td>Project P</td>
											<td>Jaka</td>
											<td>555-7837</td>
											<td>Platoon</td>
											<td class="align-center"><span class="peity-chart" data-type="donut" data-fill='["red","#cccccc"]' data-innerradius="3" data-radius="10" >2/10</span> </td>
											<td>pending</td>
											<td>06.08.2015</td>
											<td class="align-center"><span class="fa fa-check fg-green"></span></td>
										</tr>
										<tr>
											<td>9</td>
											<td>Project P</td>
											<td>Jaya</td>
											<td>555-7837</td>
											<td>Platoon</td>
											<td class="align-center"><span class="peity-chart" data-type="donut" data-fill='["#7ad61d","#eeeeee"]' data-innerradius="3" data-radius="10" >7/10</span> </td>
											<td>pending</td>
											<td>06.08.2015</td>
											<td class="align-center"><span class="fa fa-check fg-green"></span></td>
										</tr>
										<tr>
											<td>10</td>
											<td>Project P</td>
											<td>Takoor</td>
											<td>555-7837</td>
											<td>Platoon</td>
											<td class="align-center"><span class="peity-chart" data-type="donut" data-fill='["red","#cccccc"]' data-innerradius="3" data-radius="10" >3/10</span> </td>
											<td>pending</td>
											<td>06.08.2015</td>
											<td class="align-center"><span class="fa fa-check fg-green"></span></td>
										</tr>
									</tbody>
								</table>

							</div>

			

						</div>
					</div>
				</div>




			</div>
		</div>
	</div>
</div>


<script type="text/javascript" language="javascript">

jQuery(document).ready(function($) {


	var d1 = [[1262304000000, 6], [1264982400000, 3057], [1267401600000, 20434], [1270080000000, 31982], [1272672000000, 26602], [1275350400000, 27826], [1277942400000, 24302], [1280620800000, 24237], [1283299200000, 21004], [1285891200000, 12144], [1288569600000, 10577], [1291161600000, 10295]];
	var d2 = [[1262304000000, 5], [1264982400000, 200], [1267401600000, 1605], [1270080000000, 6129], [1272672000000, 11643], [1275350400000, 19055], [1277942400000, 30062], [1280620800000, 39197], [1283299200000, 37000], [1285891200000, 27000], [1288569600000, 21000], [1291161600000, 17000]];

	var data1 = [
		{ label: "Data 1", data: d1, color: metro_color.taupe },
		{ label: "Data 2", data: d2, color: metro_color.crimson }
	];
	$.plot($("#flot-chart1"), data1, {
		xaxis: {
			tickDecimals: 0
		},
		series: {
			lines: {
				show: true,
				fill: true,
				fillColor: {
					colors: [{
						opacity: 0.6
					}, {
						opacity: 0.6
					}]
				},
			},
			points: {
				width: 0.1,
				show: false
			},
		},
		grid: {
			show: false,
			borderWidth: 0
		},
		legend: {
			show: false,
		}

	});


	var lineData = {
		labels: ["January", "February", "March", "April", "May", "June", "July"],
		datasets: [
			{
				label: "Example dataset",
				fillColor: "rgba(220,220,220,0.5)",
				strokeColor: "rgba(220,220,220,1)",
				pointColor: "rgba(220,220,220,1)",
				pointStrokeColor: "#fff",
				pointHighlightFill: "#fff",
				pointHighlightStroke: "rgba(220,220,220,1)",
				data: [65, 59, 80, 81, 56, 55, 40]
			},
			{
				label: "Example dataset",
				fillColor: "rgba(26,179,148,0.5)",
				strokeColor: "rgba(26,179,148,0.7)",
				pointColor: "rgba(26,179,148,1)",
				pointStrokeColor: "#fff",
				pointHighlightFill: "#fff",
				pointHighlightStroke: "rgba(26,179,148,1)",
				data: [28, 48, 40, 19, 86, 27, 90]
			}
		]
	};

	var lineOptions = {
		scaleShowGridLines: true,
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleGridLineWidth: 1,
		bezierCurve: true,
		bezierCurveTension: 0.4,
		pointDot: true,
		pointDotRadius: 4,
		pointDotStrokeWidth: 1,
		pointHitDetectionRadius: 20,
		datasetStroke: true,
		datasetStrokeWidth: 2,
		datasetFill: true,
		responsive: true,
	};


	var ctx = document.getElementById("lineChart").getContext("2d");
	var myNewChart = new Chart(ctx).Line(lineData, lineOptions);



})
	
</script>


@endsection