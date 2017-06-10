@extends('layouts.metro')

@section('content')

<div class="section-wrapper page-heading ">
	<h3>Welcome to Dashboard</h3>
</div>


<div class="section-wrapper animated fadeInRightBig">
	<div class="grid">
		<div class="row cells3">
			<div class="cell colspan2">
				
				<!-- ion slider -->
				<div class="panel widget-box" data-role="panel">
					<div class="heading">
						<div class="title">Ion Range Slider</div>
					</div>
					<div class="content">
						<div class="sub-heading"><span class="fa fa-link"></span> https://github.com/IonDen/ion.rangeSlider</div>
						<div class="text">
							
							<h3>
								Sliders
							</h3>
							<p>
								Are perfect for range select option.
							</p>
							<div class="margin-bottom-10 padding-top-20">
								<small ><strong>Example of:</strong> Set diapason from 0 to 10, Set fractional step value: 0.1, Enable grid  </small>
							</div>
							<div id="ionrange_2" class="" data-role="ionrange" data-option='{"min":0,"max":10,"type":"single","step":0.1,"postfix":" carats","prettify":false,"hasGrid":true}'></div>

							<div class="margin-bottom-10 padding-top-20">
								<small ><strong>Example of:</strong> Set diapason from 0 to 5000, Adding postfix "+" to max value, Set slider type to double, Dollar symbol as prefix, Enable grid  </small>
							</div>
							<div id="ionrange_1" class="" data-role="ionrange" data-option='{"min":0,"max":5000,"type":"double","prefix":"$","maxPostfix":"+","prettify":false,"hasGrid":true}'></div>

							<div class="margin-bottom-10 padding-top-20">
								<small ><strong>Example of:</strong> Set diapason from -50 to +50, Set FROM value to 0, Add degree symbol as postfix  </small>
							</div>
							<div id="ionrange_3" class="" data-role="ionrange" data-option='{"min":-50,"max":50,"from":0,"postfix":"°","prettify":false,"hasGrid":true}'></div>

							<div class="margin-bottom-10 padding-top-20">
								<small ><strong>Example of:</strong>Change common slider numbers to custom (Month names). Using values array for that. Array can be any length, Slider will change min and max number automaticaly to fit values array length, Step parameter also will be changed to one, to allow to choose items in values array </small>
							</div>
							<div id="ionrange_4" class="" data-role="ionrange" data-option='{"values":["January", "February", "March","April", "May", "June","July", "August", "September","October", "November", "December"],"type": "single","hasGrid": true}'></div>

							<div>
							<a class="btn btn-white pull-right btn-sm" href="https://github.com/IonDen/ion.rangeSlider" target="_blank">Read about API</a>
								<div class="clearfix"></div>
							</div>


						</div>
					</div>
				</div>

				<!-- mask input -->
				<div class="panel widget-box" data-role="panel">
					<div class="heading">
						<div class="title">Masked Input</div>
					</div>
					<div class="content">
						<div class="sub-heading"><span class="fa fa-link"></span> http://jasny.github.io/bootstrap</div>
						<div class="text " style="padding-bottom:50px;" >
							
							<div class="row cells2">
								
                                <div class="cell">
                                    <h5 >ISBN 1</h5>
                                    <div class="input-control full-size text">
                                        <input type="text" class="" data-mask="999-99-999-9999-9" placeholder="">
                                        <span class="help-block">999-99-999-9999-9</span>
                                        <br>
                                    </div>
                                </div>
                                
                                <div class="cell">
                                    <h5 >ISBN 2</h5>
                                    <div class="input-control full-size text">
                                        <input type="text" class="" data-mask="999 99 999 9999 9" placeholder="">
                                        <span class="help-block">999 99 999 9999 9</span>
                                        <br>
                                    </div>
                                </div>

                            </div>

                            <div class="row cells2" >

                                <div class="cell">
                                    <h5 >ISBN 3</h5>
                                    <div class="input-control full-size text">
                                        <input type="text" class="" data-mask="999/99/999/9999/9" placeholder="">
                                        <span class="help-block">999/99/999/9999/9</span>
                                        <br>
                                    </div>
                                </div>

                                <div class="cell">
                                    <h5 >IPV4</h5>
                                    <div class="input-control full-size text">
                                        <input type="text" class="" data-mask="999.999.999.9999" placeholder="">
                                        <span class="help-block">192.168.100.200</span>
                                        <br>
                                    </div>
                                </div>

                            </div>

                            <div class="row cells2" >

                                <div class="cell">
                                    <h5 >Tax ID</h5>
                                    <div class="input-control full-size text">
                                        <input type="text" class="" data-mask="99-9999999" placeholder="">
                                        <span class="help-block">99-9999999</span>
                                        <br>
                                    </div>
                                </div>

                                <div class="cell">
                                    <h5 >Phone</h5>
                                    <div class="input-control full-size text">
                                        <input type="text" class="" data-mask="(999) 999-9999" placeholder="">
                                        <span class="help-block">(999) 999-9999</span>
                                        <br>
                                    </div>
                                </div>

                            </div>

                            <div class="row cells2" >

                                <div class="cell">
                                    <h5 >Currency</h5>
                                    <div class="input-control full-size text">
                                        <input type="text" class="" data-mask="$ 999,999,999.99" placeholder="">
                                        <span class="help-block">$ 999,999,999.99</span>
                                        <br>
                                    </div>
                                </div>

                                <div class="cell">
                                    <h5 >Date</h5>
                                    <div class="input-control full-size text">
                                        <input type="text" class="" data-mask="99/99/9999" placeholder="">
                                        <span class="help-block">dd/mm/yyyy</span>
                                        <br>
                                    </div>
                                </div>

							</div>

						</div>
					</div>
				</div>



			</div>

			<div class="cell">
				
				<!-- knob dialer -->
				<div class="panel widget-box" data-role="panel">
					<div class="heading">
						<div class="title">Knob Dialer</div>
					</div>
					<div class="content">
						<div class="sub-heading"><span class="fa fa-link"></span> http://anthonyterrien.com/knob/</div>
						<div class="text">
							
							<small>Simple knob example</small><br/><br/>
							<div class="row cells3 align-center ">

								<div class="cell knob-box ">
								<input type="text" value="75" class="knob " data-fgColor="#1ba1e2" data-width="85" data-height="85" />
								</div>
								<div class="cell knob-box ">
								<input type="text" value="25" class="knob " data-fgColor="#1ba1e2" data-width="85" data-height="85"/>
								</div>
								<div class="cell knob-box ">
								<input type="text" value="50" class="knob " data-fgColor="#1ba1e2" data-width="85" data-height="85"/>
								</div>

							</div>

							<small>Dynamic knob example</small><br/><br/>
							<div class="row cells3 align-center ">
								<div class="cell knob-box ">
								<input type="text" value="75" class="knob " data-fgColor="#fa6800" data-width="85" data-height="85" data-cursor=true data-thickness=.3/>
								</div>
								<div class="cell knob-box ">
								<input type="text" value="25" class="knob " data-fgColor="#fa6800" data-width="85" data-height="85" data-step="1000" data-min="-15000" data-max="15000" data-displayPrevious=true/>
								</div>
								<div class="cell knob-box ">
								<input type="text" value="60" class="knob " data-fgColor="#fa6800" data-width="85" data-height="85" data-angleOffset=-125 data-angleArc=250 />
								</div>
							</div>


						</div>
					</div>
				</div>

				<!-- tags input -->
				<div class="panel widget-box" data-role="panel">
					<div class="heading">
						<div class="title">Tags Input</div>
					</div>
					<div class="content">
						<div class="sub-heading">
							<span class="fa fa-link"></span> https://github.com/timschlechter/bootstrap-tagsinput
						</div>
						<div class="text">
							<small>Enter tag words and press comma [ , ]</small>
							<div class="input-control full-size textarea" >
								<input type="text" data-role="tagsinput" class="success" value="jaya,firdaus,jaka," >
							</div>
							<small>use default, info, success, alert, warning as color scheme</small>

						</div>
					</div>
				</div>

				<!-- clock picker -->
				<div class="panel widget-box" data-role="panel">
					<div class="heading">
						<div class="title">Clock picker</div>
					</div>
					<div class="content">
						<div class="sub-heading"><span class="fa fa-link"></span> http://weareoutman.github.io/clockpicker</div>
						<div class="text">
							<small> A clock-style timepicker for jQuery.</small>
							<div class="input-control full-size text" data-role="clockpicker" data-autoclose="true" >
								<input type="text" value="10:10">
								<span class="append-icon fa fa-clock-o"></span>
							</div>

						</div>
					</div>
				</div>

				<!-- color picker -->
				<div class="panel widget-box" data-role="panel">
					<div class="heading spectrum-to-update">
						<div class="title">Color Picker</div>
					</div>
					<div class="content">
						<div class="sub-heading">
							<span class="fa fa-link"></span> https://bgrins.github.io/spectrum/
						</div>
						<div class="text">
							
							<small>no hassle color picker plugin using jQuery </small>

							<h5>As normal input</h5>
							<div class="input-control full-size text">
								<input type="text" class=" " data-role="spectrum" value="#5367ce" />
							</div>

							<h5>As control</h5>
							<label for="">Change panel title color</label>
							<div class="input-control full-size text">
								<input type="text" id="spectrum-demo">
							</div>
							
					
							<br/>

						</div>
					</div>
				</div>

				<!-- switchery -->
				<div class="panel widget-box" data-role="panel">
					<div class="heading">
						<div class="title">Switchery</div>
					</div>
					<div class="content">
						<div class="sub-heading"><span class="fa fa-link"></span> http://abpetkov.github.io/switchery</div>
						<div class="text">
							
							<small>iOS7 style switcher for your checkboxes</small>

							<div>
								
								<input type="checkbox" class="switchery" checked >
								&nbsp;
								<input type="checkbox" class="switchery" checked data-type="success">
								&nbsp;
								<input type="checkbox" class="switchery" checked data-type="warning">


							</div>

						</div>
					</div>
				</div>


			</div>


		</div>
	</div>

</div>

<div class="section-wrapper">
	<div class="grid">
		<div class="row cells">
			
			<div class="cell">
				
				<div class="panel widget-box" data-role="panel">
					<div class="heading">
						<div class="title">Extended Metro Checkbox</div>
					</div>
					<div class="content">
						<div class="sub-heading">check out documentation for detail info</div>
						<div class="text">
							
							<div class="row cells3">
								<div class="cell">
									
									<h4>Boxed</h4>

									<small>support basic button metro color: <br><br><code>primary, success, info, warning, alert</code> </small>

									<div class="" >
										<label class="input-control checkbox primary">
											<input type="checkbox" checked >
											<span class="check"></span>
											<span class="caption">Primary</span>
										</label>
										<label class="input-control small-check checkbox primary">
											<input type="checkbox" checked >
											<span class="check"></span>
											<span class="caption">Primary</span>
										</label>
									</div>

									<div class="" >
										<label class="input-control checkbox info">
											<input type="checkbox" checked >
											<span class="check"></span>
											<span class="caption">Info</span>
										</label>
										<label class="input-control small-check checkbox info">
											<input type="checkbox" checked >
											<span class="check"></span>
											<span class="caption">Info</span>
										</label>
									</div>

									<div class="" >
										<label class="input-control checkbox success">
											<input type="checkbox" checked >
											<span class="check"></span>
											<span class="caption">Success</span>
										</label>
										<label class="input-control small-check checkbox success">
											<input type="checkbox" checked >
											<span class="check"></span>
											<span class="caption">Success</span>
										</label>
									</div>

									<div class="" >
										<label class="input-control checkbox warning">
											<input type="checkbox" checked >
											<span class="check"></span>
											<span class="caption">Warning</span>
										</label>
										<label class="input-control small-check checkbox warning">
											<input type="checkbox" checked >
											<span class="check"></span>
											<span class="caption">Warning</span>
										</label>
									</div>

									<div class="" >
										<label class="input-control checkbox alert">
											<input type="checkbox" checked >
											<span class="check"></span>
											<span class="caption">Alert</span>
										</label>
										<label class="input-control small-check checkbox alert">
											<input type="checkbox" checked >
											<span class="check"></span>
											<span class="caption">Alert</span>
										</label>
									</div>

								</div>
								<div class="cell">
									
									<h4>Circle</h4>

									<small>support circle style with metro button color: <br><br><code>primary, success, info, warning, alert</code> </small>

									<div class="" >
										<label class="input-control checkbox circle primary">
											<input type="checkbox" checked >
											<span class="check"></span>
											<span class="caption">Primary</span>
										</label>
										<label class="input-control small-check checkbox circle primary">
											<input type="checkbox" checked >
											<span class="check"></span>
											<span class="caption">Primary</span>
										</label>
									</div>

									<div class="" >
										<label class="input-control checkbox circle info">
											<input type="checkbox" checked >
											<span class="check"></span>
											<span class="caption">Info</span>
										</label>
										<label class="input-control small-check checkbox circle info">
											<input type="checkbox" checked >
											<span class="check"></span>
											<span class="caption">Info</span>
										</label>
									</div>

									<div class="" >
										<label class="input-control checkbox circle success">
											<input type="checkbox" checked >
											<span class="check"></span>
											<span class="caption">Success</span>
										</label>
										<label class="input-control small-check checkbox circle success">
											<input type="checkbox" checked >
											<span class="check"></span>
											<span class="caption">Success</span>
										</label>
									</div>

									<div class="" >
										<label class="input-control checkbox circle warning">
											<input type="checkbox" checked >
											<span class="check"></span>
											<span class="caption">Warning</span>
										</label>
										<label class="input-control small-check checkbox circle warning">
											<input type="checkbox" checked >
											<span class="check"></span>
											<span class="caption">Warning</span>
										</label>
									</div>

									<div class="" >
										<label class="input-control checkbox circle alert">
											<input type="checkbox" checked >
											<span class="check"></span>
											<span class="caption">Alert</span>
										</label>
										<label class="input-control small-check checkbox circle alert">
											<input type="checkbox" checked >
											<span class="check"></span>
											<span class="caption">Alert</span>
										</label>
									</div>



								</div>
								<div class="cell">
									
									<h4>Radio</h4>

									<small>Single color</small>

									<div class="">
										<label class="input-control radio primary">
											<input name="radio1" type="radio" checked >
											<span class="check"></span>
											<span class="caption">option 1</span>
										</label>
										<br>
										<label class="input-control radio primary">
											<input name="radio1" type="radio">
											<span class="check"></span>
											<span class="caption">option 2</span>
										</label>
									</div>

									<small>Multi color</small>

									<div class="">
										<label class="input-control radio info">
											<input name="radio2" type="radio" checked >
											<span class="check"></span>
											<span class="caption">option 1</span>
										</label>
										<br>
										<label class="input-control radio warning">
											<input name="radio2" type="radio">
											<span class="check"></span>
											<span class="caption">option 2</span>
										</label>
										<br>
										<label class="input-control radio success">
											<input name="radio2" type="radio">
											<span class="check"></span>
											<span class="caption">option 2</span>
										</label>
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
	$('#spectrum-demo').spectrum({
		change: update_title
	})

	function update_title(color){
		if( color ){
			hexColor = color.toHexString();
		}
		$('.spectrum-to-update').css('background', hexColor );
	}


})

	
</script>


@endsection