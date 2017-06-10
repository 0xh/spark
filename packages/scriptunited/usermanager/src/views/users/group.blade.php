<div class="section-wrapper animated fadeInRightBig">
	<div class="panel widget-box">
		<div class="heading">
			<div class="title">Assign Group to User
			</div>
			<div class="button-wrap">
				<button class="close-group button primary" data-ref="user">
					<span class="mif-cross"></span>
				</button>
			</div>
		</div>
		<div class="content">
			<div class="text">

				<form action="/users/setgroup" id="form_group" method="post">
					{{ csrf_field() }}
					<input type="hidden" name="id" value="{{$user['id']}}" >

					<table class="table border bordered">
						<tr>
							<td>Email</td>
							<td>{{ $user->email}}</td>
						</tr>
					</table>

					@foreach($groups as $group)
					<div>
						<label class="input-control checkbox small-check">
							<input name="group_id[]" value="{{ $group->id }}" type="checkbox" {{ $group->is_user_assigned?"checked":"" }} >
							<span class="check"></span>
							<span class="caption">{{ $group->group_title }}</span>
						</label>
					</div>
					@endforeach


					<button class="button small-button primary save-group" data-target="#form_group">Save</button>
					<button class="button small-button close-group" data-ref="user">Close</button>

				</form>

			</div>
		</div>
	</div>
</div>
