@extends('layouts.metro') 

@section('content')

<div class="section-wrapper page-heading ">
	<h3>Welcome to Dashboard</h3>
</div>
<div class="section-wrapper ">
	<div class="grid">
		<div class="row fg-white cells4	">
			<div class="cell ">
				<div class="bg-cobalt widget-info animated fadeInLeftBig">
					<span class="title">Todays Degrees</span>
					<span class="counter" id="todays_degree" data-role="countup" data-end="26" data-suffix="&deg;C">0</span>
					<span class="icon mif-sun"></span>
				</div>
			</div>
			<div class="cell ">
				<div class="bg-emerald widget-info animated fadeInUpBig ">
					<span class="title">Todays Revenue</span>
					<span id="todays_revenue" class="counter" data-role="countup" data-end="4500" data-prefix="$ ">0</span>
					<span class="icon mif-dollar"></span>
				</div>
			</div>
			<div class="cell ">
				<div class="bg-crimson widget-info animated fadeInRightBig">
					<span class="title">New Messages</span>
					<span class="counter" id="new_messages" data-role="countup" >354</span>
					<span class="icon mif-mail"></span>
				</div>
			</div>
			<div class="cell ">
				<div class="bg-darkBrown widget-info animated fadeInDownBig">
					<span class="title">New Album</span>
					<span class="counter" id="new_album" data-role="countup" >96</span>
					<span class="icon mif-music"></span>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="section-wrapper ">
	<div class="grid bg-white animated fadeInRightBig">

		<div class="panel " data-role="panel" >
			<div class="heading">
				<div class="title">Sales Report</div>
			</div>
			<div class="content bg-white">

				<div class="row cells4">
					<div class="cell colspan3">

						<div class="flot-chart" style="height:250px;">
							<div class="flot-chart-content" id="flot-dashboard-chart">
								&nbsp;
							</div>
						</div>
						
					</div>
					<div class="cell">
						
						<ul class="stat-list">
							<li>
								<h3>1,234</h3>
								<small>Total orders in month</small>
								<div class="stat-counter">40% <span class="mif-arrow-up fg-green"></span> </div>
								<div class="progress small" id="pb2" data-parts="true" data-role="progressBar" data-value="40" data-colors='{"bg-red": 33, "bg-yellow": 66, "bg-cyan": 90, "bg-green": 100}'></div>
							</li>
							<li>
								<h3>1,095</h3>
								<small>Order last month</small>
								<div class="stat-counter">30% <span class="mif-arrow-down fg-red"></span> </div>
								<div class="progress small" id="pb2" data-parts="true" data-role="progressBar" data-value="30" data-colors='{"bg-red": 33, "bg-yellow": 66, "bg-cyan": 90, "bg-green": 100}'></div>
							</li>
							<li>
								<h3>7,890</h3>
								<small>Revenue in month</small>
								<div class="stat-counter">91% <span class="mif-star-full fg-yellow mif-ani-shake "></span> </div>
								<div class="progress small" id="pb2" data-parts="true" data-role="progressBar" data-value="91" data-colors='{"bg-red": 33, "bg-yellow": 66, "bg-cyan": 90, "bg-green": 100}'></div>
							</li>
						</ul>
						

					</div>
				</div>


			</div>
		</div>

	</div>
</div>

<div class="section-wrapper animated fadeInRightBig">
	<div class="grid ">
		<div class="row cells3 ">

			<div class="cell">
				
				<div class="panel widget-box " data-role="panel">
					<div class="heading">
						<div class="title">Messages</div>
					</div>
					<div class="content bg-white ">
						<div class="sub-heading ">
							You have 6 new message in inbox
						</div>
						<div class="text " >

							<table class="table bordered">
								<tr>
									<td class="no-padding-h">
										<b class="tag alert">Monita</b>
										<span class="place-right"><span class="fa fa-clock-o"></span> 25 min</span>
										<div>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat optio, incidunt inventore enim ullam earum.
										</div>
									</td>
								</tr>
								<tr>
									<td class="no-padding-h">
										<b class="tag success">Dandy</b>
										<span class="place-right"><span class="fa fa-clock-o"></span> 1 hrs</span>
										<div>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat optio, incidunt inventore enim ullam earum.
										</div>
									</td>
								</tr>
							</table>

							<div class="align-center"><button class="button info small-button">Load more...</button></div>

						</div>

					</div>

				</div>

			</div>

			<div class="cell">
				
				<div class="panel widget-box " data-role="panel">
					<div class="heading">
						<div class="title">User project lists</div>
					</div>
					<div class="content bg-white ">
						<div class="text" >
							<div class="table-responsive" >
								<table class="table bordered-h">
								<tr>
									<th>Status</th>
									<th>User</th>
									<th>Completion</th>
								</tr>

								<tr>
									<td>pending...</td>
									<td>Monita</td>
									<td>30%</td>
								</tr>
								<tr>
									<td><span class="tag success">completed</span></td>
									<td>Monita</td>
									<td>100%</td>
								</tr>
								<tr>
									<td>progress...</td>
									<td>Monita</td>
									<td>50%</td>
								</tr>
								<tr>
									<td><span class="tag alert">canceled</span></td>
									<td>Monita</td>
									<td>0%</td>
								</tr>
								<tr>
									<td>progress...</td>
									<td>Monita</td>
									<td>50%</td>
								</tr>
								</table>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="cell">
				
				<div class="panel widget-box " data-role="panel">
					<div class="heading">
						<div class="title">Simple Todo List</div>
					</div>
					<div class="content bg-white">
						<div class="sub-heading ">
							<span class="fa fa-check-square-o"></span> Check the completed task
						</div>

						<div class="text">
							<ul class="todo-list">
								<li>
									<label class="input-control checkbox">
										<input type="checkbox" class="todo-cb">
										<span class="check"></span>
										<span class="caption">Go to shop</span>
									</label>
								</li>
								<li>
									<label class="input-control checkbox">
										<input type="checkbox" class="todo-cb" checked >
										<span class="check"></span>
										<span class="caption todo-completed ">Send document to Jaya</span>
									</label>
								</li>
								<li>
									<label class="input-control checkbox">
										<input type="checkbox" class="todo-cb">
										<span class="check"></span>
										<span class="caption">Plan to vacation</span>
									</label>
								</li>
								<li>
									<label class="input-control checkbox">
										<input type="checkbox" class="todo-cb">
										<span class="check"></span>
										<span class="caption">Buy a milk</span>
									</label>
								</li>
								<li>
									<label class="input-control checkbox">
										<input type="checkbox" class="todo-cb" checked >
										<span class="check"></span>
										<span class="caption todo-completed ">Eat Burritos</span>
									</label>
								</li>
							</ul>
						</div>

					</div>
				</div>

			</div>

		</div>

		

	</div>
</div>


<script language="javascript" type="text/javascript">
	
	var data2 = [
		[gd(2012, 1, 1), 7], [gd(2012, 1, 2), 6], [gd(2012, 1, 3), 4], [gd(2012, 1, 4), 8],
		[gd(2012, 1, 5), 9], [gd(2012, 1, 6), 7], [gd(2012, 1, 7), 5], [gd(2012, 1, 8), 4],
		[gd(2012, 1, 9), 7], [gd(2012, 1, 10), 8], [gd(2012, 1, 11), 9], [gd(2012, 1, 12), 6],
		[gd(2012, 1, 13), 4], [gd(2012, 1, 14), 5], [gd(2012, 1, 15), 11], [gd(2012, 1, 16), 8],
		[gd(2012, 1, 17), 8], [gd(2012, 1, 18), 11], [gd(2012, 1, 19), 11], [gd(2012, 1, 20), 6],
		[gd(2012, 1, 21), 6], [gd(2012, 1, 22), 8], [gd(2012, 1, 23), 11], [gd(2012, 1, 24), 13],
		[gd(2012, 1, 25), 7], [gd(2012, 1, 26), 9], [gd(2012, 1, 27), 9], [gd(2012, 1, 28), 8],
		[gd(2012, 1, 29), 5], [gd(2012, 1, 30), 8], [gd(2012, 1, 31), 25]
	];

	var data3 = [
		[gd(2012, 1, 1), 800], [gd(2012, 1, 2), 500], [gd(2012, 1, 3), 600], [gd(2012, 1, 4), 700],
		[gd(2012, 1, 5), 500], [gd(2012, 1, 6), 456], [gd(2012, 1, 7), 800], [gd(2012, 1, 8), 589],
		[gd(2012, 1, 9), 467], [gd(2012, 1, 10), 876], [gd(2012, 1, 11), 689], [gd(2012, 1, 12), 700],
		[gd(2012, 1, 13), 500], [gd(2012, 1, 14), 600], [gd(2012, 1, 15), 700], [gd(2012, 1, 16), 786],
		[gd(2012, 1, 17), 345], [gd(2012, 1, 18), 888], [gd(2012, 1, 19), 888], [gd(2012, 1, 20), 888],
		[gd(2012, 1, 21), 987], [gd(2012, 1, 22), 444], [gd(2012, 1, 23), 999], [gd(2012, 1, 24), 567],
		[gd(2012, 1, 25), 786], [gd(2012, 1, 26), 666], [gd(2012, 1, 27), 888], [gd(2012, 1, 28), 900],
		[gd(2012, 1, 29), 178], [gd(2012, 1, 30), 555], [gd(2012, 1, 31), 993]
	];


	var dataset = [
		{
			label: "Number of orders",
			data: data3,
			color: "#1ab394",
			bars: {
				show: true,
				align: "center",
				barWidth: 24 * 60 * 60 * 600,
				lineWidth:0
			}

		}, {
			label: "Payments",
			data: data2,
			yaxis: 2,
			color: "#464f88",
			lines: {
				lineWidth:1,
					show: true,
					fill: true,
				fillColor: {
					colors: [{
						opacity: 0.2
					}, {
						opacity: 0.2
					}]
				}
			},
			splines: {
				show: false,
				tension: 0.6,
				lineWidth: 1,
				fill: 0.1
			},
		}
	];


	var options = {
		xaxis: {
			mode: "time",
			tickSize: [3, "day"],
			tickLength: 0,
			axisLabel: "Date",
			axisLabelUseCanvas: true,
			axisLabelFontSizePixels: 12,
			axisLabelFontFamily: 'Arial',
			axisLabelPadding: 10,
			color: "#d5d5d5"
		},
		yaxes: [{
			position: "left",
			max: 1070,
			color: "#d5d5d5",
			axisLabelUseCanvas: true,
			axisLabelFontSizePixels: 12,
			axisLabelFontFamily: 'Arial',
			axisLabelPadding: 3
		}, {
			position: "right",
			clolor: "#d5d5d5",
			axisLabelUseCanvas: true,
			axisLabelFontSizePixels: 12,
			axisLabelFontFamily: ' Arial',
			axisLabelPadding: 67
		}
		],
		legend: {
			noColumns: 1,
			labelBoxBorderColor: "#000000",
			position: "nw"
		},
		grid: {
			hoverable: false,
			borderWidth: 0
		}
	};

	function gd(year, month, day) {
		return new Date(year, month - 1, day).getTime();
	}

	var previousPoint = null, previousLabel = null;

	$.plot($("#flot-dashboard-chart"), dataset, options);

	
</script>


@endsection