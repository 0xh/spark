								<button class="button small-button primary create-item" >Create Item</button>
								<div class="table-responsive">
									<table id="data-table" class="table striped border bordered" data-role="dataTable">
										<thead>
											<tr>
												<td>Email</td>
												<td class="option-wrap">Option</td>
											</tr>
										</thead>
										<tbody>
											@foreach($users as $user)
											<tr>
												<td>{{$user['email']}} </td>
												<td>
													<button class="button small-button view-item" data-id="{{$user['id']}}" >View</button> 
													<button class="button small-button edit-item" data-id="{{$user['id']}}">Edit</button> 
													<button class="button small-button delete-item" data-id="{{$user['id']}}" >Delete</button>
													<button class="button small-button group-item" data-id="{{$user['id']}}" >Group</button>
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
									<div class="link-box" data-target="#userTable" >
										{{ $users->links() }}
									</div>
								</div>
