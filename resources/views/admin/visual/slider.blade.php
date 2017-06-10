@extends('layouts.metro')

@section('content')

<div class="section-wrapper page-heading ">
	<h3>Welcome to Dashboard</h3>
</div>


<div class="section-wrapper animated fadeInRightBig">
	<br>
	<div class="panel widget-box">
		<div class="content">

			<hr class="thin bg-grayLighter">
			<div class="text">
				<h1>Slider</h1>
				<hr>

				<div class="grid margin-bottom-60 ">

					<h2>Normal Size</h2>

					<div class="row cells4">
						<div class="cell">
							<h5>Default</h5>
							<div class="slider" data-role="slider"></div>
						</div>
						<div class="cell">
							<h5>With hint</h5>
							<div class="slider" data-role="slider" data-show-hint="true" data-position="35"></div>
						</div>
						<div class="cell">
							<h5>Customize</h5>
							<div class="slider" data-role="slider" data-complete-color="ribbed-green" data-marker-color="bg-cyan" data-color="bg-lightRed"></div>
						</div>
						<div class="cell">
							<h5>Accuracy mode</h5>
							<div class="slider" data-accuracy="10" data-role="slider" data-complete-color="ribbed-red" data-marker-color="blue" data-show-hint="true"></div>
						</div>
					</div>

					<hr class="thin bg-grayLighter">

					<h2>Big Size</h2>

					<div class="row cells4">
						<div class="cell">
							<h5>Default</h5>
							<div class="slider large" data-role="slider"></div>
						</div>
						<div class="cell">
							<h5>min(max)Value</h5>
							<div class="slider large" data-on-change="showSliderChange" data-role="slider" data-show-hint="true" data-position="35" data-permanent-hint="true" data-hint-position="bottom" data-max-value="1000" data-min-value="-300"></div>
							<script>
								function showSliderChange(value, slider){
									console.log(value);
								}
							</script>
						</div>
						<div class="cell">
							<h5>Customize</h5>
							<div class="slider large" data-role="slider" data-complete-color="ribbed-green" data-marker-color="bg-yellow" data-color="ribbed-red"></div>
						</div>
						<div class="cell">
							<h5>Accuracy mode</h5>
							<div class="slider large" data-accuracy="10" data-role="slider" data-complete-color="ribbed-red" data-marker-color="blue" data-show-hint="true"></div>
						</div>
					</div>

					<hr class="thin bg-grayLighter">


					<h2>Vertical Mode</h2>


					<div class="row cells4">
						<div class="cell">
							<h5>Vertical</h5>
							<div class="slider" data-role="slider" data-vertical="true"></div>
							<div class="slider" data-role="slider" data-vertical="true" data-position="30"></div>
							<div class="slider" data-role="slider" data-vertical="true" data-colors="red, yellow, green"></div>
							<div class="slider" data-role="slider" data-vertical="true" data-position="75" data-show-hint="true"></div>
							<div class="slider large" data-role="slider" data-vertical="true" data-position="75" data-show-hint="true" data-permanent-hint="true"></div>
						</div>
						<div class="cell">
							<h5>Vertical With hint</h5>
							<div class="slider" data-role="slider" data-show-hint="true" data-vertical="true"></div>
						</div>
						<div class="cell">
							<h5>Vertical Customize</h5>
							<div class="slider" data-role="slider" data-complete-color="ribbed-red" data-marker-color="blue" data-vertical="true"></div>
						</div>
						<div class="cell">
							<h5>Accuracy mode</h5>
							<div class="slider" data-accuracy="10" data-role="slider" data-complete-color="ribbed-red" data-vertical="true" data-show-hint="true"></div>
						</div>
					<hr class="thin bg-grayLighter">


					</div>


				</div>

			</div>
		</div>
	</div>

</div>



<script language="javascript" type="text/javascript">

jQuery(document).ready(function($){
});

</script>

@endsection