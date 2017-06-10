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
				<h1>Notify</h1>
				<hr>

				<div class="grid margin-bottom-60 ">

					<div class="align-center">
						<button class="button" onclick="showDialog('dialog')">Show dialog</button>
						<br>
						<button class="button" onclick="showDialog('dialog2')">Show dialog2</button>
						<br>
						<button class="button success" onclick="showDialog('dialog3')">Success</button>
						<br>
						<button class="button warning" onclick="showDialog('dialog4')">Warning</button>
						<br>
						<button class="button alert" onclick="showDialog('dialog5')">Alert</button>
						<br>
						<button class="button info" onclick="showDialog('dialog6')">Info</button>
						<br>
						<button class="button" onclick="showDialog('dialog10')">Custom colors</button>
						<br>
						<button class="button" onclick="showDialog('dialog7')">Windows Style</button>
						<br>
						<button class="button" onclick="showDialog('dialog8')">Overlay</button>
						<br>
						<button class="button" onclick="showDialog('dialog9')">Overlay 2</button>

					</div>

				</div>

			</div>
		</div>
	</div>

</div>

<div data-role="dialog" id="dialog" class="padding20" data-close-button="true">
	<h1>Simple dialog</h1>
	<p>
		Dialog :: Metro UI CSS - The front-end framework for developing projects on the web in Windows Metro Style
	</p>
</div>

<div data-role="dialog" id="dialog3" class="padding20" data-close-button="true" data-type="success">
	<h1>Simple dialog</h1>
	<p>
		Dialog :: Metro UI CSS - The front-end framework for developing projects on the web in Windows Metro Style
	</p>
</div>

<div data-role="dialog" id="dialog4" class="padding20" data-close-button="true" data-type="warning">
	<h1>Simple dialog</h1>
	<p>
		Dialog :: Metro UI CSS - The front-end framework for developing projects on the web in Windows Metro Style
	</p>
</div>

<div data-role="dialog" id="dialog5" class="padding20" data-close-button="true" data-type="alert">
	<h1>Simple dialog</h1>
	<p>
		Dialog :: Metro UI CSS - The front-end framework for developing projects on the web in Windows Metro Style
	</p>
</div>

<div data-role="dialog" id="dialog6" class="padding20" data-close-button="true" data-type="info">
	<h1>Simple dialog</h1>
	<p>
		Dialog :: Metro UI CSS - The front-end framework for developing projects on the web in Windows Metro Style
	</p>
</div>

<div data-role="dialog" id="dialog7" class="padding20" data-close-button="true" data-windows-style="true">
	<div class="container">
		<h1>Simple dialog</h1>
		<p>
			Dialog :: Metro UI CSS - The front-end framework for developing projects on the web in Windows Metro Style
		</p>
	</div>
</div>

<div data-role="dialog" id="dialog8" class="info padding20" data-close-button="true" data-overlay="true">
	<h1>Simple dialog</h1>
	<p>
		This dialog with default overlay
	</p>
</div>

<div data-role="dialog" id="dialog9" class="padding20" data-close-button="true" data-overlay="true" data-overlay-color="op-dark">
	<h1>Simple dialog</h1>
	<p>
		This dialog with colored overlay
	</p>
</div>

<div data-role="dialog" id="dialog10" class="padding20" data-close-button="true" data-background="bg-pink" data-color="fg-white">
	<h1>Simple dialog</h1>
	<p>
		This dialog with custom colors
	</p>
</div>

<div data-role="dialog" id="dialog2" data-hide="3000" class="padding20" data-close-button="true">
	<h1>Simple dialog</h1>
	<p>
		This dialog will be auto closed after 3 sec
	</p>
</div>



<script language="javascript" type="text/javascript">

function showDialog(id){
	var dialog = $("#"+id).data('dialog');
	if (!dialog.element.data('opened')) {
		dialog.open();
	} else {
		dialog.close();
	}
}

jQuery(document).ready(function($){
});

</script>

@endsection