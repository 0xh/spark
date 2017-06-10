@extends('layouts.metro')


@section('content')


<div class="tabcontrol2 page-tab" data-role="tabcontrol">
	<ul class="tabs">
		<li>
			<a href="#group_list" >Group List</a>
		</li>
	</ul>
	<div class="frames bg-white">
		<div class="padding10"></div>
		<div id="group_list">
			
			<div class="section-wrapper animated fadeInRightBig">
				<div class="panel widget-box">
					<div class="heading">
						<div class="title">Group Lists</div>
					</div>
					<div class="content">
						<div class="text">
							<form action="{{ url('groups/table') }}" id="groupTable" method="POST" data-page="1" data-ref="{{ url('/groups') }}">
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
							</form>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>

<script type="application/javascript">

</script>


@endsection