<div class="section-wrapper animated fadeInRightBig">
	<div class="panel widget-box">
		<div class="heading">
			<div class="title">User Lists
			</div>
			<div class="button-wrap">
				<button class="close-view button primary" data-ref="user">
					<span class="mif-cross"></span>
				</button>
			</div>
		</div>
		<div class="content">
			<div class="text">
				<div class="table-responsive">
					<table class="table striped border bordered" >
						<tr>
							<th>Title</th>
							<th>Value</th>
						</tr>
						<tr>
							<td>Email</td>
							<td>{{ $user['email'] }} </td>
						</tr>
						<tr>
							<td>First Name</td>
							<td>{{ $user['first_name']}} </td>
						</tr>
						<tr>
							<td>Last Name</td>
							<td>{{ $user['last_name']}} </td>
						</tr>
						<tr>
							<td>Groups Member</td>
							<td>
								<ul class="nolist">
								@foreach($userGroups as $group)
									<li>{{$group->group_title}} </li>
								@endforeach
								</ul>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<button class="button small-button primary close-view" data-ref="user">Close</button>
		</div>
	</div>
</div>