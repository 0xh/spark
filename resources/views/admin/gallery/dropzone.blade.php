@extends('layouts.metro')

@section('content')

<div class="section-wrapper page-heading ">
	<h3>Welcome to Dashboard</h3>
</div>

<div class="section-wrapper bg-white margin-bottom-40 align-center ">
	
	<h1>Drop Zone</h1>

</div>


<div class="section-wrapper animated fadeInRightBig">
	<div class="grid" >
		<div class="cells">
			<div class="cell">
				
				<div class="panel widget-box" data-role="panel">
					<div class="heading">
						<div class="title">Drop Zone</div>
					</div>
					<div class="content">
						<div class="sub-heading"><span class="fa fa-link"></span> https://github.com/enyo/dropzone</div>
						<div class="text">
							
							<form id="my-awesome-dropzone" class="dropzone" action="#">
								<div class="dropzone-previews"></div>
								<button type="submit" class="button primary place-right">Submit this form!</button>
							</form>


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

	Dropzone.options.myAwesomeDropzone = {

		autoProcessQueue: false,
		uploadMultiple: true,
		parallelUploads: 100,
		maxFiles: 100,

		// Dropzone settings
		init: function() {
			var myDropzone = this;

			this.element.querySelector("button[type=submit]").addEventListener("click", function(e) {
				e.preventDefault();
				e.stopPropagation();
				myDropzone.processQueue();
			});
			this.on("sendingmultiple", function() {
			});
			this.on("successmultiple", function(files, response) {
			});
			this.on("errormultiple", function(files, response) {
			});
		}

	}


});

</script>

@endsection