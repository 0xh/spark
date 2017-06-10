@extends('layouts.metro')


@section('content')


<div class="tabcontrol2 page-tab" data-role="tabcontrol">
	<ul class="tabs">
		<li>
			<a href="#module_list" >Module List</a>
		</li>
	</ul>
	<div class="frames bg-white">
		<div class="padding10"></div>
		<div id="module_list">
			
			<div class="section-wrapper animated fadeInRightBig">
				<div class="panel widget-box">
					<div class="heading">
						<div class="title">Module Lists</div>
					</div>
					<div class="content">
						<div class="text">
							<form action="{{ url('modules/table') }}" id="moduleTable" method="POST" data-page="1" data-ref="{{ url('/modules') }}">
								<button class="button small-button primary create-item" >Create Item</button>
								<div class="table-responsive">
									<table id="data-table" class="table striped border bordered" data-role="dataTable">
										<thead>
											<tr>
												<td>Module Name</td>
												<td>Module Controller</td>
												<td class="option-wrap">Option</td>
											</tr>
										</thead>
										<tbody>
											@foreach($modules as $module)
											<tr>
												<td>{{$module->module_title}} </td>
												<td>{{$module->module_controller}} </td>
												<td>
													<button class="button small-button view-item" data-id="{{$module['id']}}" >View</button> 
													<button class="button small-button edit-item" data-id="{{$module['id']}}">Edit</button> 
													<button class="button small-button delete-item" data-id="{{$module['id']}}" >Delete</button>
													<button class="button small-button access-item" data-id="{{$module['id']}}" >Access</button>
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
									<div class="link-box" data-target="#moduleTable" >
										{{ $modules->links() }}
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>

<script type="application/javascript">



	register_tabs_cmd({
		button_class : 'access-item',
		tabs_title : 'access',
		content_id : 'access_item',
		ref_action : 'access',
		close_class : 'close-access'
	})


	register_save_button({
		button_class : 'save-access',
		close_class  : 'close-access',
		target_table : '#moduleTable',
		source_form  : '#form_group'
	})


	$('body').delegate('.select-all-action','change',function(){
		state = $(this).prop('checked');
		$(this).parents('tr').find('.cb-action').attr('checked', state );
	})

	
</script>


@endsection