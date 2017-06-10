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
