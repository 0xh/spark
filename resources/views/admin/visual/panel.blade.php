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
				<h1>Panel</h1>
				<hr>

				<div class="grid margin-bottom-60 ">


					<div class="row cells3">
						<div class="cell">
							<h5>Default</h5>
							<div class="panel">
								<div class="heading">
									<span class="title">Panel Title</span>
								</div>
								<div class="content">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean luctus lectus sit amet odio ullamcorper malesuada dignissim justo gravida.
								</div>
							</div>
						</div>

						<div class="cell">
							<h5>With icon</h5>
							<div class="panel">
								<div class="heading">
									<span class="icon mif-home"></span>
									<span class="title">Panel Title</span>
								</div>
								<div class="content">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean luctus lectus sit amet odio ullamcorper malesuada dignissim justo gravida.
								</div>
							</div>
						</div>

						<div class="cell">
							<h5>Collapsible [data-role="panel"] </h5>
							<div class="panel" data-role="panel">
								<div class="heading">
									<img class="icon" src="{{asset('metro/images/location.png')}}">
									<span class="title">Panel Title</span>
								</div>
								<div class="content">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean luctus lectus sit amet odio ullamcorper malesuada dignissim justo gravida.
								</div>
							</div>
						</div>
					</div>

					<div class="row cells3">
						<div class="cell">
							<h5>Alert (&.alert)</h5>
							<div class="panel alert">
								<div class="heading">
									<span class="title">Panel Title</span>
								</div>
								<div class="content">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean luctus lectus sit amet odio ullamcorper malesuada dignissim justo gravida.
								</div>
							</div>
						</div>

						<div class="cell">
							<h5>Warning (&.warning)</h5>
							<div class="panel warning">
								<div class="heading">
									<span class="title">Panel Title</span>
								</div>
								<div class="content">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean luctus lectus sit amet odio ullamcorper malesuada dignissim justo gravida.
								</div>
							</div>
						</div>

						<div class="cell">
							<h5>Success (&.success)</h5>
							<div class="panel success">
								<div class="heading">
									<span class="title">Panel Title</span>
								</div>
								<div class="content">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean luctus lectus sit amet odio ullamcorper malesuada dignissim justo gravida.
								</div>
							</div>
						</div>
					</div>


				</div>

			</div>
		</div>
	</div>

</div>

<div class="section-wrapper">
	<div class="padding-top-30">
		<div class="content">
			<div class="text">
				<h3>Panel (& .widget-box) </h3>
				<hr>

				<div class="grid margin-bottom-60 ">


					<div class="row cells3">
						<div class="cell">
							<h5>Default</h5>
							<div class="panel widget-box ">
								<div class="heading">
									<span class="title">Panel Title</span>
								</div>
								<div class="content">
									<div class="text">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean luctus lectus sit amet odio ullamcorper malesuada dignissim justo gravida.
									</div>
								</div>
							</div>
						</div>

						<div class="cell">
							<h5>With icon</h5>
							<div class="panel widget-box ">
								<div class="heading">
									<span class="icon mif-home"></span>
									<span class="title">Panel Title</span>
								</div>
								<div class="content">
									<div class="text">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean luctus lectus sit amet odio ullamcorper malesuada dignissim justo gravida.
									</div>
								</div>
							</div>
						</div>

						<div class="cell">
							<h5>Collapsible [data-role="panel"] </h5>
							<div class="panel widget-box " data-role="panel">
								<div class="heading">
									<img class="icon" src="{{asset('metro/images/location.png')}}">
									<span class="title">Panel Title</span>
								</div>
								<div class="content">
									<div class="text">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean luctus lectus sit amet odio ullamcorper malesuada dignissim justo gravida.
									</div>
								</div>
							</div>
						</div>
					</div>

					<h4>with sub-heading content</h4>
					<div class="row cells3">
						<div class="cell">
							<h5>Alert (&.alert) </h5>
							<div class="panel widget-box alert">
								<div class="heading">
									<span class="title">Panel Title</span>
								</div>
								<div class="content">
									<div class="sub-heading">sub heading here</div>
									<div class="text">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean luctus lectus sit amet odio ullamcorper malesuada dignissim justo gravida.
									</div>
								</div>
							</div>
						</div>

						<div class="cell">
							<h5>Warning (&.warning)</h5>
							<div class="panel widget-box warning">
								<div class="heading">
									<span class="title">Panel Title</span>
								</div>
								<div class="content">
									<div class="sub-heading">sub heading here</div>
									<div class="text">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean luctus lectus sit amet odio ullamcorper malesuada dignissim justo gravida.
									</div>
								</div>
							</div>
						</div>

						<div class="cell">
							<h5>Success (&.success)</h5>
							<div class="panel widget-box success" data-role="panel" >
								<div class="heading">
									<span class="title">Panel Title</span>
								</div>
								<div class="content">
									<div class="sub-heading">sub heading here</div>
									<div class="text">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean luctus lectus sit amet odio ullamcorper malesuada dignissim justo gravida.
									</div>
								</div>
							</div>
						</div>
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