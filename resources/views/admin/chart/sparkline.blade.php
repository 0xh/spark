@extends('layouts.metro')

@section('content')

<div class="section-wrapper page-heading ">
	<h3>Welcome to Dashboard</h3>
</div>

<div class="section-wrapper bg-white margin-bottom-40 align-center ">
	
	<h1>Sparkline Chart</h1>

</div>


<div class="section-wrapper animated fadeInRightBig">
	<div class="grid" >
		
		<div class="row cells2">
			<div class="cell">

				<div class="panel widget-box padding20" style="height:390px;">
					<div class="content">
						<div class="text" style="height:100%;">
							
							<h1>Sparkline</h1>
							<h3>generates sparklines (small inline charts) directly in the browser using data supplied either inline in the HTML, or via javascript.</h3>
							<h4 class="" style="position:absolute;bottom:1rem;"><span class="fa fa-link"></span> http://omnipotent.net/jquery.sparkline/</h4>

						</div>
					</div>
				</div>
				
			</div>
			<div class="cell">
				
				<div class="panel widget-box">
					<div class="heading">
						<div class="title">Sparkline Chart</div>
					</div>
					<div class="content">
						<div class="text">
							
							<table class="table border bordered-h">
								<thead>
									<tr>
										<th>Graph</th>
										<th>Type</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<span id="sparkline1"></span>
										</td>
										<td>
											Inline line chart
										</td>
									</tr>
									<tr>
										<td>
											<span id="sparkline2"></span>
										</td>
										<td>
											Bar chart
										</td>
									</tr>
									<tr>
										<td>
											<span id="sparkline3"></span>
										</td>
										<td>
											Pie chart
										</td>
									</tr>
									<tr>
										<td>
											<span id="sparkline4"></span>
										</td>
										<td>
											Long inline chart
										</td>
									</tr>
									<tr>
										<td>
											<span id="sparkline5"></span>
										</td>
										<td>
											Tristate chart
										</td>
									</tr>
									<tr>
										<td>
											<span id="sparkline6"></span>
										</td>
										<td>
											Discrete chart
										</td>
									</tr>
									
								</tbody>
							</table>

						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="row cells3">
			<div class="cell">
				
				<div class="panel widget-box">
					<div class="heading">
						<div class="title">Bar Custom Size </div>
					</div>
					<div class="content">
						<div class="text align-center">
							<span id="sparkline8"></span>
						</div>
					</div>
				</div>

			</div>
			<div class="cell">
				
				<div class="panel widget-box">
					<div class="heading">
						<div class="title">Line Custom Size </div>
					</div>
					<div class="content">
						<div class="text align-center">
							<span id="sparkline9"></span>
						</div>
					</div>
				</div>

			</div>
			<div class="cell">
				
				<div class="panel widget-box">
					<div class="heading">
						<div class="title">Pie Custom Size </div>
					</div>
					<div class="content">
						<div class="text align-center">
							<span id="sparkline7"></span>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>

<br>
<br>
<br>

<style>

</style>

<script language="javascript" type="text/javascript">

jQuery(document).ready(function($){

	$("#sparkline1").sparkline([34, 43, 43, 35, 44, 32, 44, 52, 25], {
		type: 'line',
		lineColor: metro_color.darkTeal,
		fillColor: metro_color.teal,
	});
	$("#sparkline2").sparkline([5, 6, 7, 2, 0, -4, -2, 4], {
		type: 'bar',
		barColor: metro_color.teal,
		negBarColor: metro_color.lightRed});

	$("#sparkline3").sparkline([1, 1, 2], {
		type: 'pie',
		sliceColors: [metro_color.violet, metro_color.lime, metro_color.amber]});

	$("#sparkline4").sparkline([34, 43, 43, 35, 44, 32, 15, 22, 46, 33, 86, 54, 73, 53, 12, 53, 23, 65, 23, 63, 53, 42, 34, 56, 76, 15, 54, 23, 44], {
		type: 'line',
		lineColor: metro_color.darkTeal,
		fillColor: metro_color.grayLighter,
	});

	$("#sparkline5").sparkline([1, 1, 0, 1, -1, -1, 1, -1, 0, 0, 1, 1], {
		type: 'tristate',
		posBarColor: metro_color.teal,
		negBarColor: metro_color.darkLight});


	$("#sparkline6").sparkline([4, 6, 7, 7, 4, 3, 2, 1, 4, 4, 5, 6, 3, 4, 5, 8, 7, 6, 9, 3, 2, 4, 1, 5, 6, 4, 3, 7, ], {
		type: 'discrete',
		lineColor: metro_color.teal});

	$("#sparkline7").sparkline([52, 12, 44], {
		type: 'pie',
		height: '150px',
		sliceColors: [metro_color.green, metro_color.yellow, metro_color.orange]});

	$("#sparkline8").sparkline([5, 6, 7, 2, 0, -4, -2, -4, -5, -7, 2, 4, 12, 14, 4, 2, 14, 12, 7], {
		type: 'bar',
		barWidth: 8,
		height: '150px',
		barColor: metro_color.olive,
		negBarColor: metro_color.crimson});

	$("#sparkline9").sparkline([34, 43, 43, 35, 44, 32, 15, 22, 46, 33, 86, 54, 73, 53, 12, 53, 23, 65, 23, 63, 53, 42, 34, 56, 76, 15, 54, 23, 44], {
		type: 'line',
		lineWidth: 1,
		height: '150px',
		lineColor: metro_color.brown,
		fillColor: metro_color.amber,
	});

})

</script>

@endsection