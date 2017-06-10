@extends('layouts.metro')

@section('content')

<div class="section-wrapper page-heading ">
	<h3>Welcome to Dashboard</h3>
</div>

<div class="section-wrapper bg-white margin-bottom-40 align-center ">
	
	<h1>Peity Chart</h1>

</div>


<div class="section-wrapper animated fadeInRightBig">
	<div class="grid" >
		
		<div class="row cells2">
			<div class="cell">
				
				<div class="panel widget-box" style="padding:20px; height:370px;" >
					<div class="content">
						<div class="text">
							
							<h1>Peity Chart</h1>
							<h3>plugin that converts an element's content into a simple 
								<code>&lt;svg&gt;</code><br><br>
								<div class="row cells2" >
									<div class="cell">mini pie <span class="pie">2/5</span></div>
									<div class="cell">donut <span class="donut">5,2,3</span></div>
								</div>
								<div class="row cells2" >
									<div class="cell">line <span class="line">5,3,9,6,5,9,7,3,5,2</span></div>
									<div class="cell">or bar chart <span class="bar">5,3,9,6,5,9,7,3,5,2</span></div>
								</div>
							</h3><br><br>
							<h3><span class="fa fa-link"></span> http://benpickles.github.io/peity/</h3>

						</div>
					</div>
				</div>


			</div>
			<div class="cell">

				<div class="panel widget-box">
					<div class="heading">
						<div class="title">Pie Chart</div>
					</div>
					<div class="content">
						<div class="text">
							
							<table class="table border bordered-h">
								<thead>
									<tr>
										<th>Graph</th>
										<th>Code</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<span class="pie">1/5</span>
										</td>
										<td>
											<code>&lt;span class="pie"&gt;1/5&lt;/span&gt;</code>
										</td>
									</tr>
									<tr>
										<td>
											<span class="pie">226/360</span>
										</td>
										<td>
											<code>&lt;span class="pie"&gt;226/360&lt;/span&gt;</code>
										</td>
									</tr>
									<tr>
										<td>
											<span class="pie">0.52/1.561</span>
										</td>
										<td>
											<code>&lt;span class="pie"&gt;0.52/1.561&lt;/span&gt;</code>
										</td>
									</tr>
									<tr>
										<td>
											<span class="pie">1,4</span>
										</td>
										<td>
											<code>&lt;span class="pie"&gt;1,4&lt;/span&gt;</code>
										</td>
									</tr>
									<tr>
										<td>
											<span class="pie">226,134</span>
										</td>
										<td>
											<code>&lt;span class="pie"&gt;226,134&lt;/span&gt;</code>
										</td>
									</tr>
									<tr>
										<td>
											<span class="pie">0.52,1.041</span>
										</td>
										<td>
											<code>&lt;span class="pie"&gt;0.52,1.041&lt;/span&gt;</code>
										</td>
									</tr>
								</tbody>
							</table>

						</div>
					</div>
				</div>
				
			</div>
		</div>

		<div class="row cells2">
			<div class="cell">
				
				<div class="panel widget-box">
					<div class="heading">
						<div class="title">Line &amp; Bar Chart</div>
					</div>
					<div class="content">
						<div class="text">
							
							<table class="table border bordered-h">
								<thead>
									<tr>
										<th>Chart</th>
										<th>Code</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td>
											<span data-diameter="40" class="updating-chart">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span>
										</td>
										<td>
											<code>&lt;span class="line"&gt;5,3,9,6,5,9,7,3,5,2&lt;/span&gt;</code>
										</td>
									</tr>
									<tr>
										<td>
											<span class="line">5,3,9,6,5,9,7,3,5,2</span>
										</td>
										<td>
											<code>&lt;span class="line"&gt;5,3,9,6,5,9,7,3,5,2&lt;/span&gt;</code>
										</td>
									</tr>
									<tr>
										<td>
											<span class="line">5,3,2,-1,-3,-2,2,3,5,2</span>
										</td>
										<td>
											<code>&lt;span class="line"&gt;5,3,2,-1,-3,-2,2,3,5,2&lt;/span&gt;</code>
										</td>
									</tr>
									<tr>
										<td>
											<span class="line">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span>
										</td>
										<td>
											<code>&lt;span class="line"&gt;0,-3,-6,-4,-5,-4,-7,-3,-5,-2&lt;/span&gt;</code>
										</td>
									</tr>
									<tr>
										<td>
											<span class="bar">5,3,9,6,5,9,7,3,5,2</span>
										</td>
										<td>
											<code>&lt;span class="bar"&gt;5,3,9,6,5,9,7,3,5,2&lt;/span&gt;</code>
										</td>
									</tr>
									<tr>
										<td>
											<span class="bar">5,3,2,-1,-3,-2,2,3,5,2</span>
										</td>
										<td>
											<code>&lt;span class="bar"&gt;5,3,2,-1,-3,-2,2,3,5,2&lt;/span&gt;</code>
										</td>
									</tr>
								</tbody>

								
							</table>

						</div>
					</div>
				</div>

			</div>

			<div class="cell">
				
				<div class="panel widget-box">
					<div class="heading">
						<div class="title">Donut</div>
					</div>
					<div class="content">
						<div class="text">
							
							<table class="table border bordered-h">
								<thead>
									<tr>
										<th>Chart</th>
										<th>Code</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><span class="donut">1/5</span></td>
										<td>
											<code>&lt;span class=&quot;donut&quot;&gt;1/5&lt;/span&gt;</code>
										</td>
									</tr>
									<tr>
										<td><span class="donut">226/360</span></td>
										<td><code>&lt;span class=&quot;donut&quot;&gt;226/360&lt;/span&gt;</code></td>
									</tr>
									<tr>
										<td><span class="donut">1,2,3,2,2</span></td>
										<td><code>&lt;span class=&quot;donut&quot;&gt;1,2,3,2,2&lt;/span&gt;</code></td>
									</tr>
									<tr>
										<td colspan="2">Using <code>data-peity="{options}"</code></td>
									</tr>
									<tr>
										<td colspan=2 >
											<span class="donut2" data-peity='{ "fill": ["red", "#eeeeee"],    "innerRadius": 10, "radius": 40 }'>1/7</span>
											<span class="donut2" data-peity='{ "fill": ["orange", "#eeeeee"], "innerRadius": 14, "radius": 36 }'>2/7</span>
											<span class="donut2" data-peity='{ "fill": ["yellow", "#eeeeee"], "innerRadius": 16, "radius": 32 }'>3/7</span>
											<span class="donut2" data-peity='{ "fill": ["green", "#eeeeee"],  "innerRadius": 18, "radius": 28 }'>4/7</span>
											<span class="donut2" data-peity='{ "fill": ["blue", "#eeeeee"],   "innerRadius": 20, "radius": 24 }'>5/7</span>
											<span class="donut2" data-peity='{ "fill": ["indigo", "#eeeeee"], "innerRadius": 18, "radius": 20 }'>6/7</span>
											<span class="donut2" data-peity='{ "fill": ["violet", "#eeeeee"], "innerRadius": 15, "radius": 16 }'>7/7</span>
										</td>
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

<br>
<br>
<br>

<style>

</style>

<script language="javascript" type="text/javascript">

jQuery(document).ready(function($){

		$("span.pie").peity("pie", {
				fill: [metro_color.amber, metro_color.dark, metro_color.white ]
		})

		$(".line").peity("line",{
				fill: metro_color.amber,
				stroke: metro_color.orange,
		})

		$(".bar").peity("bar", {
				fill: [ metro_color.orange, metro_color.dark]
		})

		$(".bar_dashboard").peity("bar", {
				fill: [metro_color.orange, metro_color.dark],
				width:100
		})

		$(".donut").peity("donut",{
				fill: [metro_color.amber, metro_color.violet, metro_color.green, metro_color.cyan, metro_color.red ]	
		})

		$(".donut2").peity("donut");

		var updatingChart = $(".updating-chart").peity("line", { fill: metro_color.amber,stroke: metro_color.orange, width: 64 })

		setInterval(function() {
				var random = Math.round(Math.random() * 10)
				var values = updatingChart.text().split(",")
				values.shift()
				values.push(random)

				updatingChart
						.text(values.join(","))
						.change()
		}, 1000);

	
})

</script>

@endsection