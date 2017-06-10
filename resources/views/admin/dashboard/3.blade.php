@extends('layouts.metro')

@section('content')

<div class="section-wrapper page-heading ">
	<h3>Welcome to Dashboard</h3>
</div>

<div class="page-content animated fadeInRightBig">

	<div class="widget-sidebar ">
		<div class="">
			<div class="padding10">						
				<h4>New Messages <span class="place-right tag info">6</span> </h4>
			</div>
			<ul class="chat-list mini">
				<li>
					<a href="#" class="place-left" >
						<div class="icon mini ">
							<img src="{{asset('user/images/01.jpg')}}" alt="user 1" class="circle">
						</div>
					</a>
					<div>
						<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit rem incidunt sint dolorum.</div>
					</div>
				</li>
				<li>
					<a href="#" class="place-left" >
						<div class="icon mini ">
							<img src="{{asset('user/images/08.jpg')}}" alt="user 1" class="circle">
						</div>
					</a>
					<div>
						<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit rem incidunt sint dolorum.</div>
					</div>
				</li>
				<li>
					<a href="#" class="place-left" >
						<div class="icon mini ">
							<img src="{{asset('user/images/09.jpg')}}" alt="user 1" class="circle">
						</div>
					</a>
					<div>
						<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit rem incidunt sint dolorum.</div>
					</div>
				</li>
				<li>
					<button class="button info full-size" type="button"><span class="fa fa-arrow-down"></span> Load more...</button>
				</li>
			</ul>
		</div>

		<div class="padding-top-10 ">

			<div class="padding10">
				<h4>Mini Stats</h4>
				<div class="fg-gray">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat, neque.
				</div>
				<table class="table bordered-h fg-gray">
					<tr>
						<th>Sales</th>
						<th>Graph</th>
					</tr>
					<tr>
						<td>Last Month</td>
						<td>
							<span class="peity-chart" data-type="bar" data-fill='["#59cde2","#fa6800"]' >5,3,9,6,5,9,7,3,5,2</span>
						</td>
					</tr>
					<tr>
						<td>Current Month</td>
						<td>
							<span class="peity-chart" data-type="line" data-fill="#59cde2" >5,3,9,6,5,9,7,3,5,2</span>
						</td>
					</tr>
				</table>
			</div>
		</div>

		<div class="padding-top-10">
			<div class="padding10">
				<h4>Trending Topics</h4>
				<ul class="numeric-list square-marker">
					<li><a href="#" >Laravel Dev</a></li>
					<li><a href="#" >PHP</a></li>
					<li><a href="#" >Rubi on rails</a></li>
					<li><a href="#" >Angular js</a></li>
					<li><a href="#" >Symphony</a></li>
				</ul>

			</div>
		</div>

	</div>

	<div class="grid wrapper-content ">
		<div class="row cells ">
			<div class="cell padding-top-20 ">
				<div class="">
					<div class="panel widget-box  ">
						<div class="content ">
							<div class="text">
								<span class="place-right align-right">
									<small>average value of sales in the past semester at <strong>Asia Pacific</strong></small>
									<br>
									All Sales: $ <span>256,231</span>
								</span>
								<h2 class="nowrap" >$ <span id="big_sales" data-role="countup">50,212</span></h2>
								<h4 class="text-bold no-margin-top">Semester revenue margin</h4>
								<small>Sales marketing</small>
								<div class="chartjs-content">
									<canvas id="lineChart" height="70" ></canvas>
								</div>
								<div class="padding-top-10 fg-gray text-secondary " >
									<span class="place-right align-right">
										<span class="fa fa-clock-o"></span> updated 06.08.2015
									</span>
									<span>
										<b>Market Analysis:</b> The value has been changed over time, and last month reached a level over $50,000.
									</span>
								</div>							
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row cells3">
			<div class="cell ">
						
				<div class="panel widget-box ">
					<div class="heading bg-green">
						<div class="title">Visitor
							<span class="widget-tag fg-green">today</span>
						</div>
					</div>
					<div class="content">
						<div class="text fg-gray">
							<h2 id="visitor" data-role="countup">23,324,120</h2>
							<div class="text-secondary ">
								<span>New Visitor</span>
								<span class="place-right fg-green">20% <span class="icon mif-arrow-up"></span> </span>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="cell ">
				
				<div class="panel widget-box ">
					<div class="heading bg-cyan">
						<div class="title">Order
							<span class="widget-tag fg-cyan">monthly</span>
						</div>
					</div>
					<div class="content">
						<div class="text fg-gray">
							<h2 id="order" data-role="countup">11,324,120</h2>
							<div class="text-secondary ">
								<span>New Orders</span>
								<span class="place-right fg-green">18% <span class="icon mif-arrow-up"></span> </span>
							</div>
						</div>
					</div>
				</div>

			</div>

			<div class="cell ">
				
				<div class="panel widget-box ">
					<div class="heading bg-orange">
						<div class="title">Revenue
							<span class="widget-tag fg-orange">annual</span>
						</div>
					</div>
					<div class="content">
						<div class="text fg-gray">
							<h2 id="revenue" data-role="countup">25,421,120</h2>
							<div class="text-secondary ">
								<span>Incremnt Income</span>
								<span class="place-right fg-green">22% <span class="icon mif-arrow-up"></span> </span>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>	
			
		<div class="row cells2">
			<div class="cell">
				<div class="panel widget-box " data-role="panel">
					<div class="heading">
						<div class="title">New report from last meeting</div>
					</div>
					<div class="content">
						<div class="sub-heading">
							<h3>Incrment Revenu Margin <span class="tag place-right fg-green text-bold">20% <span class="fa fa-arrow-up"></span> </span> </h3>
							<small><span class="fa fa-comment"></span> New data from sales division </small>
						</div>
						<div class="text ">
							<div class="place-right align-right padding-top-20 ">
								<span class="peity-chart" data-type="bar" data-width="100" data-fill='["#59cde2","#fa6800"]' >5,3,9,6,5,9,7,3,5,2,4,7,3,2,7,9,6,4,5,7,3,2,1,0,9,5,6,8,3,2,1</span><br>
								<small>$ 20,123</small>
							</div>
							<div>
								<h4>New report data</h4>
								<a href="#">Click for the latest data</a>
							</div>
						</div>
					</div>
				</div>

				<div class="panel widget-box wow fadeInLeftBig" data-role="panel">
					<div class="heading">
						<div class="title">
							Read comment and tweet
						</div>
					</div>
					<div class="content">
						<div class="text fg-gray">
							
							<ul class="chat-list">
								<li>
									<div><a href="#">@monita</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, corrupti, quas.</div>
									<small><span class="fa fa-clock-o"></span> 1 minuts ago</small>
								</li>
								<li>
									<div><a href="#">@jaya_kuntjara</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, corrupti, quas.</div>
									<small><span class="fa fa-clock-o"></span> 21 minuts ago</small>
								</li>
								<li>
									<div><a href="#">@jaka_kelana</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, corrupti, quas.</div>
									<small><span class="fa fa-clock-o"></span> 1 hour ago</small>
								</li>
								<li>
									<div><a href="#">@firdaus</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, corrupti, quas.</div>
									<small><span class="fa fa-clock-o"></span> 2 hours ago</small>
								</li>
							</ul>

						</div>
					</div>
				</div>


			</div>



			<div class="cell">
				
				<div class="panel widget-box  " data-role="panel">
					<div class="heading">
						<div class="title">
							Timeline <span class="tag fg-cyan " >meeting today</span>
						</div>
					</div>
					<div class="content">
						<div class="text">
							
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
									<h5>Meet the Clients <span class="tag alert">important</span> </h5>
									<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima laboriosam amet quibusdam provident deserunt.</div>
								</div>
							</li>

							<li>
								<div class="date">
									<span class="icon fa fa-trophy"></span>
									<div>3:00 pm</div>
									<small>1 hrs ago</small>
								</div>
								<div class="content">
									<h5>Report to Boss </h5>
									<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima laboriosam amet quibusdam provident deserunt.</div>
								</div>
							</li>

							</ul>

						</div>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>

<script type="text/javascript" language="javascript">

jQuery(document).ready(function($){

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