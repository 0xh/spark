								<button class="button small-button primary create-item" >Create Item</button>
								<div class="table-responsive">
									<table id="data-table" class="table striped border bordered" data-role="dataTable">
										<thead>
											<tr>
												<td>Group Name</td>
												<td class="option-wrap">Option</td>
											</tr>
										</thead>
										<tbody>
											@foreach($groups as $group)
											<tr>
												<td>{{$group->group_title}} </td>
												<td>
													<button class="button small-button view-item" data-id="{{$group['id']}}" >View</button> 
													<button class="button small-button edit-item" data-id="{{$group['id']}}">Edit</button> 
													<button class="button small-button delete-item" data-id="{{$group['id']}}" >Delete</button>
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
									<div class="link-box" data-target="#groupTable" >
										{{ $groups->links() }}
									</div>
								</div>
