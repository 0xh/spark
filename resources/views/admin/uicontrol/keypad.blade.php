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
				<h1>Keypad</h1>
				<hr>

				<div class="grid">

					<div class="row cells4">
						<div class="cell">
							<h5>Input text</h5>
							<div class="input-control text" data-role="keypad">
								<input type="text">
							</div>
						</div>
						<div class="cell">
							<h5>Input password</h5>
							<div class="input-control password" data-role="keypad">
								<input type="password">
							</div>
						</div>
						<div class="cell">
							<h5>Length control (ex: max 3 dig)</h5>
							<div class="input-control password" data-role="keypad" data-length="3">
								<input type="password">
							</div>
						</div>
						<div class="cell">
							<h5>Shuffle buttons</h5>
							<div class="input-control text" data-role="keypad" data-shuffle="true">
								<input type="text">
							</div>
						</div>
					</div>

					<div class="margin-bottom-60 padding-top-60"></div>

					<h3>Additional Usage</h3>
					
					<div class="row cells3">
						<div class="cell">
							<h5>Standalone keypad</h5>
							<div class="input-control text">
								<input type="text" id="target1">
							</div>
							<div data-role="keypad" data-target="#target1"></div>
						</div>
						<div class="cell">
							<h5>Non standard usage</h5>
							<div class="input-control text">
								<input type="text" id="target2">
								<div class="button-group">
									<button class="button dropdown-toggle"><span class="mif-keyboard"></span></button>
									<div data-role="dropdown" data-no-close="true" style="right: 0;">
										<div data-role="keypad" data-target="#target2"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="cell">
							<h5>Non standard, shuffle</h5>
							<div class="input-control text">
								<input type="text" id="target3">
								<div class="button-group">
									<button class="button dropdown-toggle"><span class="mif-keyboard"></span></button>
									<div data-role="dropdown" data-no-close="true" style="right: 0;">
										<div data-role="keypad" data-shuffle="true" data-target="#target3"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row cells3">
						<div class="cell">
							<h5>Custom keys</h5>
							<div class="input-control text" data-role="keypad" data-keys="q,w,e,r,t,y,u,i,o,p,a,s,d,f,g,h,j,k,l,z,x,c,v,b,n,m">
								<input type="text">
							</div>
						</div>
						<div class="cell">
							<h5>Custom keys, shuffle</h5>
							<div class="input-control text" data-role="keypad" data-shuffle="true" data-keys="q,w,e,r,t,y,u,i,o,p,a,s,d,f,g,h,j,k,l,z,x,c,v,b,n,m">
								<input type="text">
							</div>
						</div>
					</div>

					<div class="margin-bottom-60 padding-top-60"></div>

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