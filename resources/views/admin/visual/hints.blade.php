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
				<h1>Hints</h1>
				<hr>

				<div class="grid margin-bottom-60 ">

					<h5>Default</h5>
					<div class="row cells4">
						<div class="cell debug align-center padding10">
							<span data-role="hint" data-hint="Title|Hint content">Hint bottom</span>
						</div>
						<div class="cell debug align-center padding10">
							<span data-role="hint" data-hint="Title|Hint content" data-hint-position="top">Hint top</span>
						</div>
						<div class="cell debug align-center padding10">
							<span data-role="hint" data-hint="Title|Hint content" data-hint-position="right">Hint right</span>
						</div>
						<div class="cell debug align-center padding10">
							<span data-role="hint" data-hint="Title|Hint content" data-hint-position="left">Hint left</span>
						</div>
					</div>
					
					<h5>Variant 2</h5>
					<div class="row cells4">
						<div class="cell debug align-center padding10">
							<span data-role="hint" data-hint-mode="2" data-hint="Title|Hint content">Hint bottom</span>
						</div>
						<div class="cell debug align-center padding10">
							<span data-role="hint" data-hint-mode="2" data-hint="Title|Hint content" data-hint-position="top">Hint top</span>
						</div>
						<div class="cell debug align-center padding10">
							<span data-role="hint" data-hint-mode="2" data-hint="Title|Hint content" data-hint-position="right">Hint right</span>
						</div>
						<div class="cell debug align-center padding10">
							<span data-role="hint" data-hint-mode="2" data-hint="Title|Hint content" data-hint-position="left">Hint left</span>
						</div>
					</div>


					<h5>Custom colors</h5>
					<div class="row cells4">
						<div class="cell debug align-center padding10">
							<span data-role="hint" data-hint-background="bg-green" data-hint-color="fg-white" data-hint-mode="2" data-hint="Title|Hint content">Hint bottom</span>
						</div>
						<div class="cell debug align-center padding10">
							<span data-role="hint" data-hint-background="bg-pink" data-hint-color="fg-white" data-hint-mode="2" data-hint="Title|Hint content" data-hint-position="top">Hint top</span>
						</div>
						<div class="cell debug align-center padding10">
							<span data-role="hint" data-hint-background="bg-red" data-hint-color="fg-white" data-hint-mode="2" data-hint="Title|Hint content" data-hint-position="right">Hint right</span>
						</div>
						<div class="cell debug align-center padding10">
							<span data-role="hint" data-hint-background="bg-blue" data-hint-color="fg-white" data-hint-mode="2" data-hint="Title|Hint content" data-hint-position="left">Hint left</span>
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