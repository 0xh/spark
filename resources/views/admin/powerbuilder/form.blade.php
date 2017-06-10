@extends('layouts.metro')

@section('content')

<section class="section-wrapper padding10">
	<br>
	<div class="panel widget-box ">
		<div class="heading">
			<div class="title">Visual Form Builder</div>
		</div>
		<div class="content">
			<div class="text" >
				
				<div class="fluent-menu" data-role="fluentmenu">
					<ul class="tabs-holder">
						<li class="active"><a href="#basic">Metro</a></li>
						<li><a href="#code">Code</a></li>
					</ul>

					<div class="tabs-content">
						
						<div class="tab-panel" id="basic">
							<div class="tab-panel-group">
								<div class="tab-group-content">
									<button class="fluent-button" id="add_header">
										<span class="icon fa fa-header"></span>
										<span>Header</span>
									</button>
									<button class="fluent-button" id="add_text">
										<span class="icon fa fa-edit"></span>
										<span>Text</span>
									</button>
									<button class="fluent-button" id="add_textarea">
										<span class="icon fa fa-edit"></span>
										<span>Textarea</span>
									</button>
								</div>
								<div class="tab-group-caption">Text</div>
							</div>
							<div class="tab-panel-group">
								<div class="tab-group-content">
									<button class="fluent-button" id="add_checkbox">
										<span class="icon fa fa-check-square-o"></span>
										<span>Checkbox</span>
									</button>
									<button class="fluent-button" id="add_radio">
										<span class="icon fa fa-dot-circle-o"></span>
										<span>Radio</span>
									</button>
									<button class="fluent-button" id="add_switch">
										<span class="icon fa fa-toggle-on"></span>
										<span>Switch</span>
									</button>
								</div>
								<div class="tab-group-caption">Option</div>
							</div>
							<div class="tab-panel-group">
								<div class="tab-group-content">
									<button class="fluent-button" id="add_select">
										<span class="icon fa fa-angle-down"></span>
										<span>Select</span>
									</button>
									<button class="fluent-button" id="add_file">
										<span class="icon fa fa-upload"></span>
										<span>File</span>
									</button>
									<button class="fluent-button" id="add_button">
										<span class="icon fa fa-toggle-right"></span>
										<span>Button</span>
									</button>

								</div>
								<div class="tab-group-caption">More</div>
							</div>

						</div>

						
						<!-- code -->
						<div class="tab-panel" id="code">
							<div class="tab-panel-group">
								<div class="tab-group-content">
									<button class="fluent-big-button" id="show_code">
										<span class="icon fa fa-eye"></span>
										<span>Show / Hide<br/>Code</span>
									</button>
									<button class="fluent-big-button" id="build_code">
										<span class="icon fa fa-cloud-download"></span>
										<span>Build<br/>Code</span>
									</button>
								</div>
								<div class="tab-group-caption">Code</div>
							</div>
							<div class="tab-panel-group">
								<div class="tab-group-content">

									<div class="tab-content-segment">
										<button class="fluent-button" >
											<div class="input-control textarea">
												<textarea name="" id="zen_input" placeholder="try table.table>tr>th{heading}*3"
												></textarea>
											</div>
										</button>
									</div>
									<div class="tab-content-segment">
										<button class="fluent-button" >
											<div class="input-control textarea">
												<textarea name="" id="zen_output" 
												></textarea>
											</div>
										</button>
									</div>

								</div>
								<div class="tab-group-caption">Zen Code Tools</div>
							</div>
						</div>

					</div>
				</div>

				<div id="form_preview" class="grid bg-grayLight padding10 bg-chess" style="min-height: 250px;">
					<div class="row cells3">
						<div class="cell colspan2">
							
							<div class="panel widget-box">
								<div class="heading">
									<div class="title">Form Builder</div>
								</div>
								<div class="content">
									<div class="text" id="form_layout">
										
									</div>
								</div>
							</div>

						</div>
						<div class="cell"></div>
					</div>
				</div>
				<div class="input-control full-size textarea hide" id="code_build">
					<label>Generated Code</label>
					<textarea name="" id="text_code" cols="30" rows="10"></textarea>
				</div>




			</div>
		</div>
	</div>


</section>
<div class="hide" id="zen_area"></div>


@endsection


@section('javascript')

<script language="javascript" type="text/javascript">
	

</script>


@endsection


@section('stylesheet')


@endsection


@section('style')

<style>
#form_layout {position: relative;}	
.fluent-menu .input-control {margin:3px 0;line-height: 1.5rem;height: 1.5rem;}
.fluent-menu .active-button {background-color: #BCDDFA;}
.color-box {border:1px solid #000;width: 1.25rem;height:1rem;float: left;margin:1px;}
#zen_input {height: 85px;min-height: 85px;width: 200px;}
#zen_output {height: 85px;min-height: 85px;width: 500px;}
.sub-class .d-menu {width: 15.625rem;}
.dropdown-wrap {position: relative;}
.fluent-menu .input-control.text button.button {height:1.5rem;padding:0.25rem 0.375rem;line-height: 0.8rem; }
.fluent-menu .tabs-content {z-index: 0;}

.popover {border:1px solid rgba(0,0,0,0.6);}
.popover:before {border-left: 1px solid rgba(0,0,0,0.6);border-bottom: 1px solid rgba(0,0,0,0.6);}
#formbuilder_property label {text-transform: capitalize;}
#formbuilder_property h4:first-child {margin-top:0;font-weight: bold;border-bottom: 1px solid #bbb;box-shadow: 0px 1px 0px #fff;padding-bottom:8px;}



</style>


@endsection