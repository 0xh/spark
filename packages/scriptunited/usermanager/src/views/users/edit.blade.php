<div class="section-wrapper animated fadeInRightBig">
	<div class="panel widget-box">
		<div class="heading">
			<div class="title">User Edit
			</div>
			<div class="button-wrap">
				<button class="close-{{$_action}} button primary" data-ref="user">
					<span class="mif-cross"></span>
				</button>
			</div>
		</div>
		<div class="content">
			<div class="text">
				<form action="/users" id="form_edit" method="post">
					{{ csrf_field() }}
					{{ method_field( $_method ) }}
					<input type="hidden" name="id" value="{{$user['id']}}" >
					<div class="table-responsive">
						<table class="table striped border bordered" >
							<tr>
								<th>Title</th>
								<th>Value</th>
							</tr>
							<tr>
								<td>Email</td>
								<td>
									<div class="input-control text full-size">
										<input name="email" type="text" value="{{ $user->email }}">
									</div>
								</td>
							</tr>
							<tr>
								<td>First Name</td>
								<td>
									<div class="input-control text full-size">
										<input name="first_name" type="text" value="{{ $user->first_name }}">
									</div>
								</td>
							</tr>
							<tr>
								<td>Last Name</td>
								<td>
									<div class="input-control text full-size">
										<input name="last_name" type="text" value="{{ $user->last_name }}">
									</div>
								</td>
							</tr>
							<tr>
								<td>Password</td>
								<td>
									<div class="input-control text full-size">
										<input name="password" type="text" value="">
									</div>
								</td>
							</tr>

						</table>
					</div>
				</form>
			</div>
			<button class="button small-button primary save-item" data-form='#form_edit' data-table="#userTable">Save</button>
			<button class="button small-button close-{{$_action}}" data-ref="user">Close</button>
		</div>
	</div>
</div>

