@extends('layouts.metro')

@section('content')

<div class="section-wrapper page-heading ">
	<h3>Welcome to Dashboard</h3>
</div>

<div class="section-wrapper bg-white animated fadeIn">
	<div class="grid">
		<div class="row cells4 ">
			<div class="cell ">
				<h3>Hello Spock</h3>
				<small>You have 6 new messages </small>
				<table class="table bordered-h">
					<tr>
						<td><span class="tag success">1</span> </td>
						<td>Please contact me</td>
						<td>5min</td>
					</tr>
					<tr>
						<td><span class="tag warning">2</span> </td>
						<td>Where are you</td>
						<td>10min</td>
					</tr>
					<tr>
						<td><span class="mif-bell fg-red mif-ani-shake mif-ani-fast"></span> </td>
						<td>Meet with Jaya</td>
						<td>15min</td>
					</tr>
					<tr>
						<td><span class="tag info">3</span> </td>
						<td>Congrats for you</td>
						<td>1hrs</td>
					</tr>
					<tr>
						<td colspan="3" class="align-center">
							<span class="tag info">
								<span class="icon mif-arrow-down"></span> load more...
							</span> 
						</td>
					</tr>
				</table>

			</div>
			<div class="cell colspan2 ">
				<h4 class="align-center">
					Last Month Progress
				</h4>
				
				<div class="flot-chart" style="height:250px;">
					<div class="flot-chart-content" id="flot-dashboard-chart">
						&nbsp;
					</div>
				</div>
				<br>
				<div class="row cells2 fg-steel">
					<div class="cell">
						Sales of month:<strong> $ <span data-role="countup">94,240</span></strong>
					</div>
					<div class="cell">
						Revenue of month:<strong> $ <span data-role="countup">62,349</span></strong>
					</div>
				</div>

			</div>
			<div class="cell ">
				<h4 class="">Work to do..</h4>
				<ul class="todo-list">
					<li>
						<label class="input-control checkbox" >
							<input type="checkbox" class="todo-cb" checked >
							<span class="check"></span>
							<span class="caption todo-completed ">Make coffee for boss</span>
						</label>
					</li>
					<li>
						<label class="input-control checkbox">
							<input type="checkbox" class="todo-cb">
							<span class="check"></span>
							<span class="caption">Send Email to Jaka</span>
						</label>
					</li>
					<li>
						<label class="input-control checkbox">
							<input type="checkbox" class="todo-cb">
							<span class="check"></span>
							<span class="caption">Buy a soda</span>
						</label>
					</li>
					<li>
						<label class="input-control checkbox">
							<input type="checkbox" class="todo-cb">
							<span class="check"></span>
							<span class="caption">Prepare PSD</span>
						</label>
					</li>
					<li>
						<label class="input-control checkbox">
							<input type="checkbox" class="todo-cb">
							<span class="check"></span>
							<span class="caption">Met a client</span>
						</label>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="section-wrapper padding-top-10 animated fadeIn">
	<div class="grid">
		<div class="row cells3">
			<div class="cell">
				<div class="panel widget-box " data-role="panel">
					<div class="heading">
						<div class="title">Chat</div>
					</div>
					<div class="content">
						<ul class="chat-list">
							<li>
								<a href="#" class="place-left">
									<div class="icon small">
										<img src="{{ asset('user/images/01.jpg') }} " class="circle fit-width">
									</div>
								</a>
								<div >
									<h5>Monita</h5>
									<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa quam.</div>
								</div>
							</li>
							<li>
								<a href="#" class="place-left">
									<div class="icon small">
										<img src="{{ asset('user/images/02.jpg') }} " class="circle fit-width">
									</div>
								</a>
								<div >
									<h5>Jaya Kuntjara</h5>
									<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa quam.</div>
								</div>
							</li>
							<li>
								<a href="#" class="place-left">
									<div class="icon small">
										<img src="{{ asset('user/images/03.jpg') }} " class="circle fit-width">
									</div>
								</a>
								<div >
									<h5>Jaka Kelana</h5>
									<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa quam.</div>
								</div>
							</li>
							<li>
								<a href="#" class="place-left">
									<div class="icon small">
										<img src="{{ asset('user/images/04.jpg') }} " class="circle fit-width">
									</div>
								</a>
								<div >
									<h5>Firdaus</h5>
									<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque culpa quam.</div>
								</div>
							</li>
						</ul>


					</div>
					<div class="footer">
						<div class="input-control text full-size" data-role="input" >
							<input type="text" class="bg-grayLighter" placeholder="type your message here" >
							<button class="button info"><span class="fa fa-edit"></span></button>
						</div>

					</div>
				</div>
			</div>
			<div class="cell">
				
				<div class="panel widget-box " data-role="panel">
					<div class="heading">
						<div class="title">Project Timeline</div>
					</div>
						<div class="content">
							<div class="subtitle ribbed-orange fg-white ">
								Important meeting today at 10:00am
							</div>
							<ul class="timeline-list">
								<li>
									<div class="date">
										<span class="icon fa fa-briefcase"></span>
										<div>6:00 am</div>
										<small>2 hrs ago</small>
									</div>
									<div class="content">
										<h5>Meet with Jaya</h5>
										<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima laboriosam amet quibusdam provident deserunt.</div>
									</div>
								</li>

								<li>
									<div class="date">
										<span class="icon fa fa-envelope"></span>
										<div>7:00 am</div>
										<small>1 hrs ago</small>
									</div>
									<div class="content">
										<h5>Send email to Jaka</h5>
										<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima laboriosam amet quibusdam provident deserunt.</div>
									</div>
								</li>

								<li>
									<div class="date">
										<span class="icon fa fa-users"></span>
										<div>10:00 am</div>
										<small>1 hrs ago</small>
									</div>
									<div class="content">
										<h5>Meet the Clients</h5>
										<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima laboriosam amet quibusdam provident deserunt.</div>
									</div>
								</li>
							</ul>


					</div>
				</div>

			</div>
			<div class="cell">
				
				<div class="panel widget-box " data-role="panel">
					<div class="heading">
						<div class="title">Sales Statistic</div>
					</div>
					<div class="content">
						<div class="text">
							<table class="table bordered-h">
								<tr>
									<th>Salesman</th>
									<th>Total</th>
									<th>Trend</th>
								</tr>
								<tr>
									<td>Jaka</td>
									<td class="align-right" data-role="countup" id="sales_1">9,027</td>
									<td><div class="peity-chart" data-stroke="red" data-strokewidth="2" >50,30,45,40,50,20,35,40,50,70,90,40</div></td>
								</tr>
								<tr>
									<td>Monita</td>
									<td class="align-right" data-role="countup" id="sales_2">12,135</td>
									<td><div class="peity-chart" data-stroke="green" data-strokewidth="2" >50,30,45,40,50,20,35,40,50,70,90,40</div></td>
								</tr>
								<tr>
									<td>Jaya</td>
									<td class="align-right" data-role="countup" id="sales_3">6,273</td>
									<td><div class="peity-chart" data-stroke="blue" data-strokewidth="2" >50,30,45,40,50,20,35,40,50,70,90,40</div></td>
								</tr>
								<tr>
									<td>Firdaus <span class="fa fa-trophy fg-blue"></span></td>
									<td class="align-right" data-role="countup" id="sales_4">14,427</td>
									<td><div class="peity-chart" data-stroke="orange" data-strokewidth="2" >50,30,45,40,50,20,35,40,50,70,90,40</div></td>
								</tr>
							</table>
						</div>
					</div>
				</div>

				<div class="panel widget-box " data-role="panel">
					<div class="heading">
						<div class="title">Calendar</div>
					</div>
					<div class="content">
						<div class="text">
							<div data-role="calendar" data-week-start="1" data-buttons="false"></div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>



<script type="text/javascript" language="javascript">
	
	var data1 = [
		[0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
	];
	var data2 = [
		[0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
	];
	$("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
		data1, data2
	],
			{
				series: {
					lines: {
						show: false,
						fill: true
					},
					splines: {
						show: true,
						tension: 0.4,
						lineWidth: 1,
						fill: 0.4
					},
					points: {
						radius: 0,
						show: true
					},
					shadowSize: 2
				},
				grid: {
					hoverable: true,
					clickable: true,
					tickColor: "#d5d5d5",
					borderWidth: 1,
					color: '#d5d5d5'
				},
				colors: ["#1ab394", "#464f88"],
				xaxis:{
				},
				yaxis: {
					ticks: 4
				},
				tooltip: false
			}
	);


	
</script>


@endsection