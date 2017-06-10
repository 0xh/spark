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
				
				<h1>Accordion</h1>
				<hr>

				<div class="grid">

					<div class="row cells3">
						<div class="cell">
							<h5>.accordion</h5>
							<div class="accordion" data-role="accordion" data-close-any="true">
								<div class="frame">
									<div class="heading">Item 1</div>
									<div class="content">
										Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.
									</div>
								</div>
								<div class="frame active">
									<div class="heading">Item 2</div>
									<div class="content">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute.
									</div>
								</div>
								<div class="frame">
									<div class="heading">Item 3</div>
									<div class="content">
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
									</div>
								</div>
							</div>
						</div>

						<div class="cell">
							<h5>.accordion with disabled item</h5>
							<div class="accordion" data-role="accordion">
								<div class="frame">
									<div class="heading">Item 1</div>
									<div class="content">
										Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.
									</div>
								</div>
								<div class="frame active">
									<div class="heading">Item 2</div>
									<div class="content">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute.
									</div>
								</div>
								<div class="frame disabled">
									<div class="heading">Item 3</div>
									<div class="content">
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
									</div>
								</div>
							</div>
						</div>

						<div class="cell">
							<h5>.accordion with icon</h5>
							<div class="accordion" data-role="accordion">
								<div class="frame">
									<div class="heading">Item 1<span class="mif-home icon"></span></div>
									<div class="content">
										Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.
									</div>
								</div>
								<div class="frame active">
									<div class="heading">Item 2<span class="mif-cog icon"></span></div>
									<div class="content">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute.
									</div>
								</div>
								<div class="frame">
									<div class="heading">Item 3<span class="mif-database icon"></span></div>
									<div class="content">
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="cell">
							<h5>.accordion & .large-heading</h5>
							<div class="accordion large-heading" data-role="accordion"
								 data-on-frame-open="return frame.attr('id') !== 'f3'"
								 data-on-frame-opened="alert('You open frame '+frame.find('.heading').text())"
								 data-on-frame-closed="alert('You close frame '+frame.find('.heading').text())"
								>
								<div class="frame">
									<div class="heading">Item 1</div>
									<div class="content">
										Duis autem vel eum iriure dolor in hendrerit in vulputate. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut.
									</div>
								</div>
								<div class="frame active">
									<div class="heading">Item 2</div>
									<div class="content">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute.
									</div>
								</div>
								<div class="frame active">
									<div class="heading">Item 4</div>
									<div class="content">
										Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute.
									</div>
								</div>
								<div class="frame" id="f3">
									<div class="heading">Item 3</div>
									<div class="content">
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
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



<style>



</style>

<script language="javascript" type="text/javascript">


jQuery(document).ready(function($){

});
	
</script>

@endsection