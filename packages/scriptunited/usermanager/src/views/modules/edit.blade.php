<div class="section-wrapper animated fadeInRightBig">
	<div class="panel widget-box">
		<div class="heading">
			<div class="title">module Edit
			</div>
			<div class="button-wrap">
				<button class="close-{{$_action}} button primary" data-ref="module">
					<span class="mif-cross"></span>
				</button>
			</div>
		</div>
		<div class="content">
			<div class="text">
				<form action="/modules" id="form_edit" method="post">
					{{ csrf_field() }}
					{{ method_field( $_method ) }}
					<input type="hidden" name="id" value="{{$module['id']}}" >
					<div class="table-responsive">
						<table class="table striped border bordered" >
							<tr>
								<th>Title</th>
								<th>Value</th>
							</tr>
							<tr>
								<td>Module Title</td>
								<td>
									<div class="input-control text full-size">
										<input name="module_title" type="text" value="{{ $module->module_title }}">
									</div>
								</td>
							</tr>
							<tr>
								<td>Module Controller
								<td>
									<div class="input-control text full-size">
										<input name="module_controller" type="text" value="{{ $module->module_controller }}">
									</div>
								</td>
							</tr>
							<tr>
								<td>Module Sub Title</td>
								<td>
									<div class="input-control text full-size">
										<input name="module_subtitle" type="text" value="{{ $module->module_subtitle }}">
									</div>
								</td>
							</tr>
							<tr>
								<td>Module Description</td>
								<td>
									<div class="input-control text full-size">
										<input name="module_description" type="text" value="{{ $module->module_description }}">
									</div>
								</td>
							</tr>

						</table>
					</div>
				</form>
			</div>
			<button class="button small-button primary save-item " data-form='#form_edit' data-table="#moduleTable">Save</button>
			<button class="button small-button close-{{$_action}}" data-ref="module">Close</button>
		</div>
	</div>
</div>


<script type="application/javascript">

jQuery(document).ready(function($){

	$('input[name="module_title"]').change(function(){
		$('input[name="module_controller"]').val($(this).val()+'Controller');
		$('input[name="module_subtitle"]').val('Manage ' +  $(this).val());
	})


})
	
</script>


