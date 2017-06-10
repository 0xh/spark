@extends('layouts.metro')

@section('content')

<div class="section-wrapper page-heading ">
	<h3>Welcome to Dashboard</h3>
</div>


<div class="section-wrapper animated fadeInRightBig">
	<br>
	<div class="panel widget-box">
		<div class="content">
			<div class="text">
				<h1>Popover</h1>
				<hr>

				<div class="grid margin-bottom-60 ">

					<h2>Popover Template</h2>

					<div class="row cells4">
						<div class="cell">
							<h4>.marker-on-top</h4>
							<div class="popover marker-on-top bg-amber">
								<div class="fg-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
							</div>
						</div>
						<div class="cell">
							<h4>.marker-on-bottom</h4>
							<div class="popover marker-on-bottom bg-pink">
								<div class="fg-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
							</div>
						</div>
						<div class="cell">
							<h4>.marker-on-left</h4>
							<div class="popover marker-on-left bg-darkRed fg-white">
								<div class="fg-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
							</div>
						</div>
						<div class="cell">
							<h4>.marker-on-right</h4>
							<div class="popover marker-on-right bg-cyan">
								<div class="fg-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
							</div>
						</div>
					</div>

					<h2>Popover on click</h2>
					<div>
						<button class="button" data-role="popover" data-popover-mode="click" data-popover-shadow="true" data-popover-position="top" data-popover-text="Button clicked" data-popover-background="bg-cyan" data-popover-color="fg-white">Click Me</button>
						<button class="button" data-role="popover" data-popover-mode="click" data-popover-position="bottom" data-popover-text="Button clicked" data-popover-background="bg-cyan" data-popover-color="fg-white">Click Me</button>
						<button class="button" data-role="popover" data-popover-mode="click" data-popover-position="left" data-popover-text="Button clicked" data-popover-background="bg-cyan" data-popover-color="fg-white">Click Me</button>
						<button class="button" data-role="popover" data-popover-mode="click" data-popover-position="right" data-popover-text="Button clicked" data-popover-background="bg-cyan" data-popover-color="fg-white">Click Me</button>
					</div>

					<h2>Popover by Focus</h2>
					<div>
						<div class="input-control text">
							<input type="text" placeholder="Set the cursor here" data-role="popover" data-popover-position="right" data-popover-text="Enter your data, field can not be empty" data-popover-background="bg-red" data-popover-color="fg-white" data-popover-mode="focus">
						</div>
					</div>

					<h2>Popover by script</h2>
					<div>
						<div class="input-control text">
							<input id="popover_by_script" type="text" placeholder="click on the right" data-role="popover" data-popover-position="bottom" data-popover-text="You pressed" data-popover-background="bg-green" data-popover-color="fg-white">
						</div>
						<button class="button" onclick="$('#popover_by_script').popover('show')">Click me</button>
					</div>


				</div>

			</div>
		</div>
	</div>

</div>


<script language="javascript" type="text/javascript">

jQuery(document).ready(function($){
//
});

</script>

@endsection