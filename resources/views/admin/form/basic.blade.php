@extends('layouts.metro')

@section('content')

<div class="section-wrapper page-heading ">
	<h3>Welcome to Dashboard</h3>
</div>


<div class="section-wrapper animated fadeInRightBig">
	<div class="grid ">
		<div class="row cells3">
			<div class="cell colspan2">
				
				<!-- login form -->
				<div class="panel widget-box ">
					<div class="heading">
						<div class="title">Login Form
							<small>Simple login example</small>
						</div>
					</div>
					<div class="content">
						<div class="text">
							
							<div class="row cells2">
								<div class="cell">
									
									<form action="">
										
										<h1>Login to Service</h1>
										<hr class="thin bg-lime">
										<div class="input-control full-size text">
											<label for="user_login">User email</label>
											<input type="text" name="user_login" id="user_login">
											<button class="helper-button button clear"><span class="mif-cross"></span></button>
										</div>
										<br>
										<br>
										<div class="input-control full-size password" data-role="input">
											<label for="user_password">Password</label>
											<input type="text" name="user_password" id="user_password">
											<button class="button helper-button reveal"><span class="mif-looks"></span></button>
										</div>
										<br>
										<br>
										<div class="form-actions">
											<button class="button primary" type="submit">Login to...</button>
											<button class="button link" type="button">Cancel</button>
										</div>

									</form>



								</div>
								<div class="cell">
									<h1>or Sign Up Here</h1>
									<hr class="thin">
									<div class="align-center">
										<a href="#" class=""><span style="font-size:200px;" class="fa fa-sign-in fg-grayLighter"></span></a>
									</div>



								</div>
							</div>


						</div>
					</div>
				</div>


			</div>

			<div class="cell">

				<!-- modern input -->
				<div class="panel widget-box ">
					<div class="heading">
						<div class="title">Modern Input</div>
					</div>

					<div class="content">
						<div class="sub-heading">
							<h5><b>Some example of modern input type</b></h5>
						</div>
						<div class="text">
							
							<div class="grid">
								<div class="cells">
									<div class="cell">
										<div class="input-control modern text full-size" data-role="input">
											<input type="text">
											<span class="label">You login</span>
											<span class="informer">Please enter you login or email</span>
											<span class="placeholder">Input login</span>
										</div>
									</div>
									<div class="cell">
										<div class="input-control modern text iconic " data-role="input">
											<input type="text">
											<span class="label">You login</span>
											<span class="informer">Please enter you login or email</span>
											<span class="placeholder">Input login</span>
											<span class="icon mif-user"></span>
										</div>
									</div>
									<div class="cell">
										<div class="input-control modern password iconic " data-role="input">
											<input type="password">
											<span class="label">You password</span>
											<span class="informer">Please enter you password</span>
											<span class="placeholder">Input password</span>
											<span class="icon mif-lock"></span>
											<button class="button helper-button reveal"><span class="mif-looks"></span></button>
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
</div>


<div class="section-wrapper animated fadeInRightBig">
	<div class="grid">
		<div class="row cells3">
			
			<div class="cell colspan2">
				
				<!-- inline form -->
				<div class="panel widget-box">
					<div class="heading">
						<div class="title">
							Inline Form
						</div>
					</div>

					<div class="content">
						<div class="text">
							<form action="" >
								
								<div class="row cells3">
									<div class="cell">
										
										<div class="input-control text full-size">
											<input type="text" placeholder="username">
										</div>

									</div>

									<div class="cell">
										<div class="input-control text full-size">
											<input type="text" placeholder="password">
										</div>
									</div>
									<div class="cell">
										<label class="input-control checkbox">
											<input type="checkbox" >
											<span class="check"></span>
											<span class="caption">remember</span>
										</label>
										<button class="button" type="button">Login</button>
									</div>
								</div>
									
										
							</form>
						</div>
					</div>
				</div>

			</div>

			<div class="cell">
				
				<!-- modal form -->
				<div class="panel widget-box">
					<div class="heading">
						<div class="title">Modal Form</div>
					</div>

					<div class="content">
						<div class="text">
							
							<div class="align-center margin-bottom-20"><button class="button info" onclick="showDialog('dialog1');">Open form login dialog </button></div>


							<div id="dialog1" class="padding20" data-role="dialog" data-close-button="true">
								
								<div class="row cells2">
									<div class="cell">
										
										<form action="">
											
											<h1>Login to Service</h1>
											<hr class="thin bg-lime">
											<div class="input-control full-size text">
												<label for="user_login">User email</label>
												<input type="text" name="user_login" id="user_login">
												<button class="helper-button button clear"><span class="mif-cross"></span></button>
											</div>
											<br>
											<br>
											<div class="input-control full-size password" data-role="input">
												<label for="user_password">Password</label>
												<input type="text" name="user_password" id="user_password">
												<button class="button helper-button reveal"><span class="mif-looks"></span></button>
											</div>
											<br>
											<br>
											<div class="form-actions">
												<button class="button primary" type="submit">Login to...</button>
												<button class="button link" type="button">Cancel</button>
											</div>

										</form>



									</div>
									<div class="cell">

										<h1>or Sign Up Here</h1>
										<hr class="thin">
										<div class="align-center">
											<a href="#" class=""><span style="font-size:200px;" class="fa fa-sign-in fg-grayLighter"></span></a>
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
</div>


<div class="section-wrapper margin-bottom-60 animated fadeInRightBig">
	<div class="grid">
		<div class="row cells">
			
			<div class="cell">
				
				<div class="panel widget-box">
					<div class="heading">
						<div class="title">Basic Form Elements</div>
					</div>

					<div class="content">
						<div class="sub-heading">Text &amp; Password</div>
						<div class="text">
							
							<div class="row cells2">
								<div class="cell">
									<label>Simple input text</label>
									<div class="input-control text full-size">
										<input type="text">
									</div>
								</div>
								<div class="cell">
									<label>Simple input password</label>
									<div class="input-control password full-size">
										<input type="password">
									</div>
								</div>
							</div>
							<div class="row cells2">
								<div class="cell">
									<label>Input with placeholder</label>
									<div class="input-control text full-size">
										<input type="text" placeholder="Input you text here...">
									</div>
								</div>
								<div class="cell">
									<label>Readonly input</label>
									<div class="input-control text full-size">
										<input type="text" readonly value="Metro UI CSS">
									</div>
								</div>
							</div>
							<div class="row cells2">
								<div class="cell">
									<label>Disabled input</label>
									<div class="input-control text full-size">
										<input type="text" disabled value="Metro UI CSS">
									</div>
								</div>
								<div class="cell">
									<label>Disabled input with placeholder</label>
									<div class="input-control text full-size">
										<input type="text" disabled placeholder="Input you text">
									</div>
								</div>
							</div>
						</div>

						<div class="sub-heading">Checkboxes &amp; Radio Buttons</div>
						<div class="text">
							
							<div class="row cells2">
								<div class="cell">
									<h5>Checkboxes</h5>
									<label class="input-control checkbox">
										<input type="checkbox" checked>
										<span class="check"></span>
										<span class="caption">Check me</span>
									</label>
									<label class="input-control checkbox">
										<input type="checkbox" disabled>
										<span class="check"></span>
										<span class="caption">Check me</span>
									</label>
									<label class="input-control checkbox">
										<input type="checkbox" disabled checked>
										<span class="check"></span>
										<span class="caption">Check me</span>
									</label>
									<h5>Small checkboxes</h5>
									<label class="input-control checkbox small-check">
										<input type="checkbox" checked>
										<span class="check"></span>
										<span class="caption">Check me</span>
									</label>
									<label class="input-control checkbox small-check">
										<input type="checkbox" disabled>
										<span class="check"></span>
										<span class="caption">Check me</span>
									</label>
									<label class="input-control checkbox small-check">
										<input type="checkbox" disabled checked>
										<span class="check"></span>
										<span class="caption">Check me</span>
									</label>
									<h5>indeterminate</h5>
									<label class="input-control checkbox">
										<input type="checkbox" checked data-show="indeterminate">
										<span class="check"></span>
										<span class="caption">Check me</span>
									</label>
									<label class="input-control checkbox">
										<input type="checkbox" data-show="indeterminate" disabled>
										<span class="check"></span>
										<span class="caption">Check me</span>
									</label>
									<h5>indeterminate small-check</h5>
									<label class="input-control checkbox small-check">
										<input type="checkbox" checked data-show="indeterminate">
										<span class="check"></span>
										<span class="caption">Check me</span>
									</label>
									<label class="input-control checkbox small-check">
										<input type="checkbox" data-show="indeterminate" disabled>
										<span class="check"></span>
										<span class="caption">Check me</span>
									</label>
								</div>
								<div class="cell">
									<h5>Radio buttons</h5>
									<label class="input-control radio">
										<input type="radio" name="n1" checked>
										<span class="check"></span>
										<span class="caption">Select me</span>
									</label>
									<label class="input-control radio">
										<input type="radio" name="n1">
										<span class="check"></span>
										<span class="caption">Select me</span>
									</label>
									<label class="input-control radio">
										<input type="radio" name="n2" disabled>
										<span class="check"></span>
										<span class="caption">Select me</span>
									</label>
									<label class="input-control radio">
										<input type="radio" name="n2" disabled checked>
										<span class="check"></span>
										<span class="caption">Select me</span>
									</label>
									<h5>Small radio buttons</h5>
									<label class="input-control radio small-check">
										<input type="radio" name="n3" checked>
										<span class="check"></span>
										<span class="caption">Select me</span>
									</label>
									<label class="input-control radio small-check">
										<input type="radio" name="n3">
										<span class="check"></span>
										<span class="caption">Select me</span>
									</label>
									<label class="input-control radio small-check">
										<input type="radio" name="n4" disabled>
										<span class="check"></span>
										<span class="caption">Select me</span>
									</label>
									<label class="input-control radio small-check">
										<input type="radio" name="n4" disabled checked>
										<span class="check"></span>
										<span class="caption">Select me</span>
									</label>
								</div>
							</div>
						</div>

						<div class="sub-heading">Switcher</div>
						<div class="text">
							
							<div class="row cells2">
								<div class="cell">
									<h5>Modern Switchers</h5>
									<label class="switch">
										<input type="checkbox" checked>
										<span class="check"></span>
									</label>
									<label class="switch">
										<input type="checkbox" >
										<span class="check"></span>
									</label>
									<label class="switch">
										<input type="checkbox" disabled>
										<span class="check"></span>
									</label>
									<label class="switch">
										<input type="checkbox" disabled checked>
										<span class="check"></span>
									</label>
								</div>
								<div class="cell">
									<h5>Original Switchers</h5>
									<label class="switch-original">
										<input type="checkbox" checked>
										<span class="check"></span>
									</label>
									<label class="switch-original">
										<input type="checkbox" >
										<span class="check"></span>
									</label>
									<label class="switch-original">
										<input type="checkbox" disabled>
										<span class="check"></span>
									</label>
									<label class="switch-original">
										<input type="checkbox" disabled checked>
										<span class="check"></span>
									</label>
								</div>
							</div>

						</div>

						<div class="sub-heading">Textarea</div>
						<div class="text">
							
							<div class="input-control textarea full-size">
								<textarea style="height:100px;" ></textarea>
							</div>

						</div>

						<div class="sub-heading">Select</div>
						<div class="text">
							
							<div class="row cells2">
								<div class="cell">
									<h5>Select</h5>
									<div class="input-control select full-size">
										<select>
											<option>1</option>
											<option>2</option>
											<option>3</option>
										</select>
									</div>
								</div>
								<div class="cell">
									<h5>Select with multiply</h5>
									<div class="input-control select multiple full-size" style="height: 100px">
										<select multiple>
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
										</select>
									</div>
								</div>
							</div>

						</div>

						<div class="sub-heading">Input File</div>	   
						<div class="text">
							
							<div class="row cells3">
								<div class="cell">
									<label>Button with icon font</label>
									<div class="input-control file full-size" data-role="input">
										<input type="file">
										<button class="button"><span class="mif-folder"></span></button>
									</div>
								</div>
								<div class="cell">
									<label>Button with image</label>
									<div class="input-control file full-size" data-role="input">
										<input type="file">
										<button class="button"><img src="{{asset('public/metro/images/Blank_Folder.png')}}"></button>
									</div>
								</div>
								<div class="cell">
									<label>Disabled input</label>
									<div class="input-control file full-size" data-role="input">
										<input type="file" disabled>
										<button class="button"><img src="{{asset('public/metro/images/Blank_Folder.png')}}"></button>
									</div>
								</div>
							</div>

							
						</div>

						<div class="sub-heading">Input Buttons</div>
						<div class="text">
							
							<input type="button" value="Button">
							<input type="reset" value="Reset">
							<input type="submit" value="Submit">

						</div>

						<div class="sub-heading">Text Fields States</div>
						<div class="text">
							
							<div class="row cells4">
								<div class="cell">
									<label class="block">.error</label>
									<div class="input-control text error">
										<input type="text">
									</div>
								</div>
								<div class="cell">
									<label class="block">.warning</label>
									<div class="input-control text warning">
										<input type="text">
									</div>
								</div>
								<div class="cell">
									<label class="block">.success</label>
									<div class="input-control text success">
										<input type="text">
									</div>
								</div>
								<div class="cell">
									<label class="block">.required</label>
									<div class="input-control text info">
										<input type="text">
									</div>
								</div>
							</div>

						</div>

						<div class="sub-heading">Input with Prepend Icon</div>
						<div class="text">
							
							<div class="input-control text full-size">
								<span class="mif-user prepend-icon"></span>
								<input type="text">
							</div>


						</div>

						<div class="sub-heading">Big Input</div>
						<div class="text">
							
							<div class="input-control text big-input full-size">
								<input type="text">
							</div>


						</div>


						<div class="sub-heading">Input with Helper Buttons</div>
						<div class="text">
							
							<div class="row cells2">
								<div class="cell">
									<label>Input text with clear helper</label>
									<div class="input-control text full-size" data-role="input">
										<input type="text">
										<button class="button helper-button clear"><span class="mif-cross"></span></button>
									</div>
								</div>
								<div class="cell">
									<label>Input password with reveal helper</label>
									<div class="input-control password full-size" data-role="input">
										<input type="password">
										<button class="button helper-button reveal"><span class="mif-looks"></span></button>
									</div>
								</div>
							</div>


						</div>


						<div class="sub-heading">Input with Button(s)</div>
						<div class="text">
							
							<label>Input with button</label>
							<div class="input-control text full-size" data-role="input">
								<input type="text">
								<button class="button"><span class="mif-search"></span></button>
							</div>

							<label>Input with button group</label>
							<div class="input-control text full-size" data-role="input">
								<input type="text">
								<div class="button-group">
									<button class="button"><img src="{{asset('public/metro/images/location.png')}}"></button>
									<button class="button"><img src="{{asset('public/metro/images/group.png')}}"></button>
									<button class="button"><img src="{{asset('public/metro/images/power.png')}}"></button>
								</div>
							</div>


						</div>


						<div class="sub-heading">Modern Inputs</div>
						<div class="text">
							
							<div class="row cells3">
								<div class="cell">
									<div class="input-control modern text " data-role="input">
										<input type="text">
										<span class="label">You login</span>
										<span class="informer">Please enter you login or email</span>
										<span class="placeholder">Input login</span>
									</div>
								</div>
								<div class="cell">
									<div class="input-control modern text iconic" data-role="input">
										<input type="text">
										<span class="label">You login</span>
										<span class="informer">Please enter you login or email</span>
										<span class="placeholder">Input login</span>
										<span class="icon mif-user"></span>
									</div>
								</div>
								<div class="cell">
									<div class="input-control modern password iconic " data-role="input">
										<input type="password">
										<span class="label">You password</span>
										<span class="informer">Please enter you password</span>
										<span class="placeholder">Input password</span>
										<span class="icon mif-lock"></span>
										<button class="button helper-button reveal"><span class="mif-looks"></span></button>
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

	function showDialog(id){
		var dialog = $("#"+id).data('dialog');
		if (!dialog.element.data('opened')) {
			dialog.open();
		} else {
			dialog.close();
		}
	}

	
</script>


@endsection