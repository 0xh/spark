@extends('layouts.metro')


@section('content')


<div class="tabcontrol2 page-tab" data-role="tabcontrol">
	<ul class="tabs">
		<li>
			<a href="#user_list" data-url="/users/edit/">User List</a>
		</li>
	</ul>
	<div class="frames bg-white">
		<div class="padding10"></div>
		<div id="user_list">
			
			<div class="section-wrapper animated fadeInRightBig">
				<div class="panel widget-box">
					<div class="heading">
						<div class="title">User Lists</div>
					</div>
					<div class="content">
						<div class="text">
							<form action="{{ url('users/table') }}" id="userTable" method="POST" data-page="1" data-ref="{{ url("/users")}}">
								<button class="button small-button primary create-item">Invite User</button>
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
		button_class : 'group-item',
		tabs_title : 'group',
		content_id : 'group_item',
		ref_action : 'setgroup',
		close_class : 'close-group'
	})


	register_save_button({
		button_class : 'save-group',
		close_class  : 'close-group',
		target_table : '#groupTable',
		source_form  : '#form_group'
	})


</script>


@endsection