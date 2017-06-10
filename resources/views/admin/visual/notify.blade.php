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

					<div class="row cells4">
						<div class="cell">
							<div class="notify">
								<span class="notify-title">Notify</span>
								<span class="notify-text">This is a default notify style</span>
							</div>
						</div>
						<div class="cell">
							<div class="notify">
								<span class="notify-icon mif-vpn-publ"></span>
								<span class="notify-title">Notify</span>
								<span class="notify-text">Notify with icon</span>
							</div>
						</div>
						<div class="cell">
							<div class="notify">
								<span class="notify-closer"></span>
								<span class="notify-title">Notify</span>
								<span class="notify-text">Notify with closer</span>
							</div>
						</div>
						<div class="cell">
							<div class="notify success">
								<span class="notify-closer"></span>
								<span class="notify-title">Success</span>
								<span class="notify-text">Notify with success</span>
							</div>
						</div>
					</div>

					<div class="row cells4">
						<div class="cell">
							<div class="notify alert">
								<span class="notify-closer"></span>
								<span class="notify-title">Alert</span>
								<span class="notify-text">Notify with alert</span>
							</div>
						</div>
						<div class="cell">
							<div class="notify warning">
								<span class="notify-closer"></span>
								<span class="notify-title">Warning</span>
								<span class="notify-text">Notify with warning</span>
							</div>
						</div>
						<div class="cell">
							<div class="notify info">
								<span class="notify-closer"></span>
								<span class="notify-title">Info</span>
								<span class="notify-text">Notify with info</span>
							</div>
						</div>
						<div class="cell">
							<div class="notify shadow">
								<span class="notify-closer"></span>
								<span class="notify-title">Shadow</span>
								<span class="notify-text">Notify with shadow</span>
							</div>
						</div>
					</div>

					<div class="align-center margin40 no-margin-bottom">
						<button class="button" id="notify_btn_2">Click to Create Notifies</button>
					</div>

				</div>

			</div>
		</div>
	</div>

</div>



<script language="javascript" type="text/javascript">

jQuery(document).ready(function($){

	$('#notify_btn_2').on('click', function(){
		setTimeout(function(){
			$.Notify({keepOpen: true, type: 'default', caption: 'Keep open', content: "This notify in keep-open mode"});
		}, 1000);
		setTimeout(function(){
			$.Notify({type: 'alert', caption: 'Alert', content: "Metro UI CSS is Simple!!!"});
		}, 1000);
		setTimeout(function(){
			$.Notify({type: 'success', caption: 'Success', content: "Metro UI CSS is Sufficient!!!"});
		}, 2000);
		setTimeout(function(){
			$.Notify({type: 'warning', caption: 'Warning', content: "Metro UI CSS is Responsive!!!"});
		}, 3000);
		setTimeout(function(){
			$.Notify({type: 'info', caption: 'Info', content: "Metro UI CSS is Responsive!!!"});
		}, 4000);
		setTimeout(function(){
			$.Notify({caption: 'Default', content: "Default style for notify"});
		}, 5000);
		setTimeout(function(){
			$.Notify({caption: 'Icon', content: "Notify with icon", icon: "<span class='mif-vpn-publ'></span>"});
		}, 6000);
	});

});

</script>

@endsection