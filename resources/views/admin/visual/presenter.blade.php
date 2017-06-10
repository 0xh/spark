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
				<h1>Presenter</h1>
				<hr>

				<div class="grid margin-bottom-60 ">

					<div class="presenter" data-role="presenter" data-height="220" data-easing="swing">
						<div class="scene">
							<div class="act bg-pink fg-white">
								<img src="{{ asset('metro/images/css-logo.png') }}"  class="actor" data-position="10,10" style="height: 200px">
								<h1 class="actor" data-position="10,250">Developed with advice</h1>
								<p class="actor" data-position="70,250">Metro UI CSS developed with the advice of Microsoft to build the user interface and include: general styles, grid, layouts, typography, 20+ components, 300+ built-in icons.</p>
								<p class="actor" data-position="130,250">Metro UI CSS build with {LESS}. Metro UI CSS is open source and has MIT licensing model.</p>
							</div>
							<div class="act bg-steel fg-white">
								<img src="{{ asset('metro/images/bizspark_b_2.png') }}"  class="actor" data-position="10,10" style="height: 200px">
								<h1 class="actor" data-position="10,270" >BizSpark Startup</h1>
								<p class="actor" data-position="60,270" >Metro UI CSS is a BizSpark Startup. Microsoft BizSpark is a global program that helps software startups succeed by giving them access to software development tools, connecting them with key industry players, and providing marketing visibility.</p>
								<p class="actor" data-position="120,270" >BizSpark provides free software, support, and visibility to help startups succeed. Join BizSpark and become part of a global community that has over 50,000 members in 100+ countries.</p>
								<a class="actor button primary" data-position="170,270"  href="http://bizspark.com">Join the BizSpark Program now</a>
							</div>
							<div class="act bg-darkCyan fg-white">
								<img src="{{ asset('metro/images/phpstorm_7_eap.png') }}"  class="actor" data-position="10,10" style="height: 200px">
								<h1 class="actor" data-position="10,300" >Thanks to JetBrains</h1>
								<p class="actor" data-position="60,300" >Thanks to the company JetBrains for supporting the project in the form of a license for a great product PhpStorm.</p>
								<a class="actor button success" data-position="130,300" href="http://www.jetbrains.com/phpstorm/">Get PhpStorm now!</a>
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