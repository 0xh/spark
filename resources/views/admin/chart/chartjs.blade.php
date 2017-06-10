@extends('layouts.metro')

@section('content')

<div class="section-wrapper page-heading ">
	<h3>Welcome to Dashboard</h3>
</div>

<div class="section-wrapper bg-white margin-bottom-40 align-center ">
	
	<h1>Chart Js</h1>

</div>


<div class="section-wrapper animated fadeInRightBig">
	<div class="grid" >
		<div class="row cells2">
			<div class="cell">
				
				<div class="panel widget-box" data-role="panel">
					<div class="heading">
						<div class="title">Line Chart</div>
					</div>
					<div class="content">
						<div class="text chartjs-content">
							
							<canvas id="chartjs-linechart"></canvas>

						</div>
					</div>
				</div>

			</div>
			<div class="cell">
				
				<div class="panel widget-box" data-role="panel">
					<div class="heading">
						<div class="title">Bar Chart</div>
					</div>
					<div class="content">
						<div class="text chartjs-content">
							
							<canvas id="chartjs-barchart"></canvas>

						</div>
					</div>
				</div>

			</div>
		</div>

		<div class="row cells2">
			<div class="cell">
				
				<div class="panel widget-box" data-role="panel">
					<div class="heading">
						<div class="title">Polar Area Chart</div>
					</div>
					<div class="content">
						<div class="text chartjs-content">
							
							<canvas id="chartjs-polarchart"></canvas>

						</div>
					</div>
				</div>

			</div>
			<div class="cell">
				
				<div class="panel widget-box" data-role="panel">
					<div class="heading">
						<div class="title">Radar Chart</div>
					</div>
					<div class="content">
						<div class="text chartjs-content">
							
							<canvas id="chartjs-radarchart"></canvas>

						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="row cells2">
			<div class="cell">
				
				<div class="panel widget-box" data-role="panel">
					<div class="heading">
						<div class="title">Pie Chart</div>
					</div>
					<div class="content">
						<div class="text chartjs-content">
							
							<canvas id="chartjs-piechart"></canvas>

						</div>
					</div>
				</div>

			</div>
			<div class="cell">
				
				<div class="panel widget-box" data-role="panel">
					<div class="heading">
						<div class="title">Doughnut Chart</div>
					</div>
					<div class="content">
						<div class="text chartjs-content">
							
							<canvas id="chartjs-doughnutchart"></canvas>

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

	var e = function() {
					return Math.round(100 * Math.random())
				}

	o = {
		labels: ["January", "February", "March", "April", "May", "June", "July"],
		datasets: [{
			label: "My First dataset",
			fillColor: "rgba(114,102,186,0.2)",
			strokeColor: "rgba(114,102,186,1)",
			pointColor: "rgba(114,102,186,1)",
			pointStrokeColor: "#fff",
			pointHighlightFill: "#fff",
			pointHighlightStroke: "rgba(114,102,186,1)",
			data: [e(), e(), e(), e(), e(), e(), e()]
		}, {
			label: "My Second dataset",
			fillColor: "rgba(35,183,229,0.2)",
			strokeColor: "rgba(35,183,229,1)",
			pointColor: "rgba(35,183,229,1)",
			pointStrokeColor: "#fff",
			pointHighlightFill: "#fff",
			pointHighlightStroke: "rgba(35,183,229,1)",
			data: [e(), e(), e(), e(), e(), e(), e()]
		}]
	};
	n = {
		scaleShowGridLines: !0,
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleGridLineWidth: 1,
		bezierCurve: !0,
		bezierCurveTension: .4,
		pointDot: !0,
		pointDotRadius: 4,
		pointDotStrokeWidth: 1,
		pointHitDetectionRadius: 20,
		datasetStroke: !0,
		datasetStrokeWidth: 2,
		datasetFill: !0,
		responsive: !0
	};
	a = document.getElementById("chartjs-linechart").getContext("2d"),
	i = (new Chart(a).Line(o, n), {
		labels: ["January", "February", "March", "April", "May", "June", "July"],
		datasets: [{
			fillColor: "#23b7e5",
			strokeColor: "#23b7e5",
			highlightFill: "#23b7e5",
			highlightStroke: "#23b7e5",
			data: [e(), e(), e(), e(), e(), e(), e()]
		}, {
			fillColor: "#5d9cec",
			strokeColor: "#5d9cec",
			highlightFill: "#5d9cec",
			highlightStroke: "#5d9cec",
			data: [e(), e(), e(), e(), e(), e(), e()]
		}]
	});


	r = {
		scaleBeginAtZero: !0,
		scaleShowGridLines: !0,
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleGridLineWidth: 1,
		barShowStroke: !0,
		barStrokeWidth: 2,
		barValueSpacing: 5,
		barDatasetSpacing: 1,
		responsive: !0
	};

	l = document.getElementById("chartjs-barchart").getContext("2d"),
	s = (new Chart(l).Bar(i, r), [{
		value: 300,
		color: "#7266ba",
		highlight: "#7266ba",
		label: "Purple"
	}, {
		value: 50,
		color: "#23b7e5",
		highlight: "#23b7e5",
		label: "Info"
	}, {
		value: 100,
		color: "#fad732",
		highlight: "#fad732",
		label: "Yellow"
	}]);


	c = {
		segmentShowStroke: !0,
		segmentStrokeColor: "#fff",
		segmentStrokeWidth: 2,
		percentageInnerCutout: 85,
		animationSteps: 100,
		animationEasing: "easeOutBounce",
		animateRotate: !0,
		animateScale: !1,
		responsive: !0
	};
	d = document.getElementById("chartjs-doughnutchart").getContext("2d"),
	u = (new Chart(d).Doughnut(s, c), [{
		value: 300,
		color: "#7266ba",
		highlight: "#7266ba",
		label: "Purple"
	}, {
		value: 40,
		color: "#fad732",
		highlight: "#fad732",
		label: "Yellow"
	}, {
		value: 120,
		color: "#23b7e5",
		highlight: "#23b7e5",
		label: "Info"
	}]);

	f = {
		segmentShowStroke: !0,
		segmentStrokeColor: "#fff",
		segmentStrokeWidth: 2,
		percentageInnerCutout: 0,
		animationSteps: 100,
		animationEasing: "easeOutBounce",
		animateRotate: !0,
		animateScale: !1,
		responsive: !0
	};
	h = document.getElementById("chartjs-piechart").getContext("2d"),
	p = (new Chart(h).Pie(u, f), [{
		value: 300,
		color: "#f532e5",
		highlight: "#f532e5",
		label: "Red"
	}, {
		value: 50,
		color: "#7266ba",
		highlight: "#7266ba",
		label: "Green"
	}, {
		value: 100,
		color: "#f532e5",
		highlight: "#f532e5",
		label: "Yellow"
	}, {
		value: 140,
		color: "#7266ba",
		highlight: "#7266ba",
		label: "Grey"
	}]);

	g = {
		scaleShowLabelBackdrop: !0,
		scaleBackdropColor: "rgba(255,255,255,0.75)",
		scaleBeginAtZero: !0,
		scaleBackdropPaddingY: 1,
		scaleBackdropPaddingX: 1,
		scaleShowLine: !0,
		segmentShowStroke: !0,
		segmentStrokeColor: "#fff",
		segmentStrokeWidth: 2,
		animationSteps: 100,
		animationEasing: "easeOutBounce",
		animateRotate: !0,
		animateScale: !1,
		responsive: !0
	},
	m = document.getElementById("chartjs-polarchart").getContext("2d"),
	y = (new Chart(m).PolarArea(p, g), {
		labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
		datasets: [{
			label: "My First dataset",
			fillColor: "rgba(114,102,186,0.2)",
			strokeColor: "rgba(114,102,186,1)",
			pointColor: "rgba(114,102,186,1)",
			pointStrokeColor: "#fff",
			pointHighlightFill: "#fff",
			pointHighlightStroke: "rgba(114,102,186,1)",
			data: [65, 59, 90, 81, 56, 55, 40]
		}, {
			label: "My Second dataset",
			fillColor: "rgba(151,187,205,0.2)",
			strokeColor: "rgba(151,187,205,1)",
			pointColor: "rgba(151,187,205,1)",
			pointStrokeColor: "#fff",
			pointHighlightFill: "#fff",
			pointHighlightStroke: "rgba(151,187,205,1)",
			data: [28, 48, 40, 19, 96, 27, 100]
		}]
	});

	v = {
		scaleShowLine: !0,
		angleShowLineOut: !0,
		scaleShowLabels: !1,
		scaleBeginAtZero: !0,
		angleLineColor: "rgba(0,0,0,.1)",
		angleLineWidth: 1,
		pointLabelFontFamily: "'Arial'",
		pointLabelFontStyle: "bold",
		pointLabelFontSize: 10,
		pointLabelFontColor: "#565656",
		pointDot: !0,
		pointDotRadius: 3,
		pointDotStrokeWidth: 1,
		pointHitDetectionRadius: 20,
		datasetStroke: !0,
		datasetStrokeWidth: 2,
		datasetFill: !0,
		responsive: !0
	},
	w = document.getElementById("chartjs-radarchart").getContext("2d");
	new Chart(w).Radar(y, v)



});

</script>

@endsection