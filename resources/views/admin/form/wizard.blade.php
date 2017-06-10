@extends('layouts.metro')

@section('content')

<div class="section-wrapper page-heading ">
	<h3>Welcome to Dashboard</h3>
</div>


<div class="section-wrapper animated fadeInRightBig">
	<div class="grid">
		<div class="row cells3">
			<div class="cell">
				
				<div class="panel widget-box">
					<div class="content">
						<div class="text">
							
							<h1>jQuery Steps</h1>
							<br>
							<h3>An all-in-one wizard plugin that is extremely flexible, compact and feature-rich.</h3>
							<br>
							<br>
							<button class="place-center button info" type="button">
								<span class="fa fa-download"></span> Download Now
							</button>
							<br>
							<br>
							<br>

						</div>
						<div class="sub-heading">
							<span class="fa fa-link"></span>
							http://www.jquery-steps.com
						</div>
					</div>
				</div>
				

			</div>

			<div class="cell colspan2">
				
				<div class="panel widget-box" data-role="panel">
					<div class="heading">
						<div class="title">Vertical Step Wizard</div>
					</div>
					<div class="content">
						<div class="text">
							
							<div id="example-vertical">
								<h3>Keyboard</h3>
								<section>
									<p>Try the keyboard navigation by clicking arrow left or right!</p>
								</section>
								<h3>Effects</h3>
								<section>
									<p>Wonderful transition effects.</p>
								</section>
								<h3>Pager</h3>
								<section>
									<p>The next and previous buttons help you to navigate through your content.</p>
								</section>
								<div class="clear"></div>
							</div>


						</div>
					</div>
				</div>


			</div>
		</div>


	</div>		
</div>

<div class="section-wrapper animated fadeInRightBig">
	<div class="grid">
		<div class="row cells">
			<div class="cell">
				<div class="panel widget-box" data-role="panel">
					<div class="heading">
						<div class="title">Advanced Form Example</div>
					</div>
					<div class="content">
						<div class="text">
							
							<form id="example-advanced-form" class="wizard-form" action="#">
								<h3>Account</h3>
								<fieldset>
									<h2>Account Information</h2>
									
									<div class="row cells2">
										<div class="cell">

											<label for="userName-2">User name *</label>
											<div class="input-control text full-size">
												<input id="userName-2" name="userName" type="text" class="required">
											</div>
											
											<label for="password-2">Password *</label>
											<div class="input-control password full-size">
												<input id="password-2" name="password" type="text" class="required">
											</div>
											
											<label for="confirm-2">Confirm Password *</label>
											<div class="input-control password full-size">
												<input id="confirm-2" name="confirm" type="text" class="required">
											</div>

										</div>
									</div>
									
									<p>(*) Mandatory</p>
								</fieldset>
							 
								<h3>Profile</h3>
								<fieldset>
									<h2>Profile Information</h2>
									
									<div class="row cells2">
										<div class="cell">
											
											<label for="name-2">First name *</label>
											<div class="input-control text full-size">
												<input id="name-2" name="name" type="text" class="required">
											</div>
											
											<label for="surname-2">Last name *</label>
											<div class="input-control text full-size">
												<input id="surname-2" name="surname" type="text" class="required">
											</div>
											
											<label for="email-2">Email *</label>
											<div class="input-control text full-size">
												<input id="email-2" name="email" type="text" class="required email">
											</div>
											
											<label for="address-2">Address</label>
											<div class="input-control text full-size">
												<input id="address-2" name="address" type="text">
											</div>
											
											<label for="age-2">Age (The warning step will show up if age is less than 18) *</label>
											<div class="input-control text full-size">
												<input id="age-2" name="age" type="text" class="required number">
											</div>



										</div>
									</div>


									
									<p>(*) Mandatory</p>
								</fieldset>
							 
								<h3>Warning</h3>
								<fieldset>
									<h2>You are to young</h2>
							 
									<p>Please go away ;-)</p>
								</fieldset>
							 
								<h3>Finish</h3>
								<fieldset>
									<h2>Terms and Conditions</h2>
							 
									<label class="input-control checkbox">
										<input id="acceptTerms-2" name="acceptTerms" type="checkbox" class="required"> 
										<span class="check"></span>
										<span class="caption" for="acceptTerms-2">I agree with the Terms and Conditions.</span>
									</label>
								</fieldset>
							</form>							



						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<style>
#example-advanced-form.wizard>.content>.body label.error  {
    position: absolute;
    top: 0px;
    width: 11.25rem;
    left: 100%;
    border: 1px solid #b9b9b9;
    padding: 10px;
    box-shadow: 0px 0px 8px rgba(0,0,0,0.2);
}

#example-advanced-form.wizard>.content>.body label.error:before  {
	content: '';
	height: 10px;
	width: 10px;
	position: absolute;
	left: -5px;
	top: 12px;
	background: #fff;
	border: solid #b9b9b9;
	border-width: 0px 0px 1px 1px;
	transform: rotate(45deg);
	-webkit-transform: rotate(45deg);
}

.wizard .content {
	min-height: 20rem;
}

</style>

<script language="javascript" type="text/javascript">


jQuery(document).ready(function($){

	$("#example-vertical").steps({
		headerTag: "h3",
		bodyTag: "section",
		transitionEffect: "slideLeft",
		stepsOrientation: "vertical"
	});


	var form = $("#example-advanced-form").show();
	 
	form.steps({
		headerTag: "h3",
		bodyTag: "fieldset",
		transitionEffect: "slideLeft",
		onStepChanging: function (event, currentIndex, newIndex)
		{
			// Allways allow previous action even if the current form is not valid!
			if (currentIndex > newIndex)
			{
				return true;
			}
			// Forbid next action on "Warning" step if the user is to young
			if (newIndex === 3 && Number($("#age-2").val()) < 18)
			{
				return false;
			}
			// Needed in some cases if the user went back (clean up)
			if (currentIndex < newIndex)
			{
				// To remove error styles
				form.find(".body:eq(" + newIndex + ") label.error").remove();
				form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
			}
			form.validate().settings.ignore = ":disabled,:hidden";
			return form.valid();
		},
		onStepChanged: function (event, currentIndex, priorIndex)
		{
			// Used to skip the "Warning" step if the user is old enough.
			if (currentIndex === 2 && Number($("#age-2").val()) >= 18)
			{
				form.steps("next");
			}
			// Used to skip the "Warning" step if the user is old enough and wants to the previous step.
			if (currentIndex === 2 && priorIndex === 3)
			{
				form.steps("previous");
			}
		},
		onFinishing: function (event, currentIndex)
		{
			form.validate().settings.ignore = ":disabled";
			return form.valid();
		},
		onFinished: function (event, currentIndex)
		{
			alert("Submitted!");
		}
	}).validate({
		errorPlacement: function errorPlacement(error, element) { element.before(error); },
		rules: {
			confirm: {
				equalTo: "#password-2"
			}
		}
	});

});
	
</script>


@endsection