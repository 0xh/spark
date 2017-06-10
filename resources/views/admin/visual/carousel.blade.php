@extends('layouts.metro')

@section('content')

<div class="section-wrapper page-heading ">
	<h3>Welcome to Dashboard</h3>
</div>


<div class="section-wrapper animated fadeInRightBig ">
	<br>
	<div class="panel widget-box">
		<div class="content">
			<div class="text">
				
				<h1>Carousel</h1>
				<hr>

				<div class="grid margin-bottom-60 ">

					<div class="row cells5">
						<div class="cell colspan3 offset1">
							<h5>.carousel</h5>
							<div class="carousel" data-role="carousel" data-height="300" data-control-next="<span class='mif-chevron-right'></span>" data-control-prev="<span class='mif-chevron-left'></span>">
								<div class="slide padding20 debug">
									<h2>First slide</h2>
									<p>
										Carousel :: Metro UI CSS - The front-end framework for developing projects on the web in Windows Metro Style
									</p>
								</div>
								<div class="slide"><img src="{{ asset('metro/images/2.jpg') }}" data-role="fitImage" data-format="fill"></div>
								<div class="slide"><img src="{{ asset('metro/images/3.jpg') }}" data-role="fitImage" data-format="fill"></div>
								<div class="slide"><img src="{{ asset('metro/images/4.jpg') }}" data-role="fitImage" data-format="fill"></div>
							</div>
						</div>
					</div>
					<div class="row cells5">
						<div class="cell colspan3 offset1">
							<h5>Without controls</h5>
							<div class="carousel" data-role="carousel" data-height="300" data-controls="false" data-markers="false" data-effect="fade">
								<div class="slide"><img src="{{ asset('metro/images/1.jpg') }}" data-role="fitImage" data-format="fill"></div>
								<div class="slide"><img src="{{ asset('metro/images/2.jpg') }}" data-role="fitImage" data-format="fill"></div>
								<div class="slide"><img src="{{ asset('metro/images/3.jpg') }}" data-role="fitImage" data-format="fill"></div>
								<div class="slide"><img src="{{ asset('metro/images/4.jpg') }}" data-role="fitImage" data-format="fill"></div>
							</div>
						</div>
					</div>
					<div class="row cells5">
						<div class="cell colspan3 offset1">
							<h5>.carousel & .square-markers</h5>
							<div class="carousel square-bullets" data-height="300" data-role="carousel" data-direction="right">
								<div class="slide"><img src="{{ asset('metro/images/1.jpg') }}" data-role="fitImage" data-format="fill"></div>
								<div class="slide"><img src="{{ asset('metro/images/2.jpg') }}" data-role="fitImage" data-format="fill"></div>
								<div class="slide"><img src="{{ asset('metro/images/3.jpg') }}" data-role="fitImage" data-format="fill"></div>
								<div class="slide"><img src="{{ asset('metro/images/4.jpg') }}" data-role="fitImage" data-format="fill"></div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

</div>



<style>



</style>

<script language="javascript" type="text/javascript">


jQuery(document).ready(function($){

});
	
</script>

@endsection