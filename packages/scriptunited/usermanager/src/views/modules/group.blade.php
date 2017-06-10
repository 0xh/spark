<div class="section-wrapper animated fadeInRightBig">
	<div class="panel widget-box">
		<div class="heading">
			<div class="title">Add Group Access
			</div>
			<div class="button-wrap">
				<button class="close-{{ $action }} button primary" data-ref="module">
					<span class="mif-cross"></span>
				</button>
			</div>
		</div>
		<div class="content">
			<div class="text">

				<form action="/modules/access" id="form_group" method="post">
					{{ csrf_field() }}
					<input type="hidden" name="id" value="{{$module['id']}}" >

					<table class="table border bordered">
						<tr>
							<td>Module Title</td>
							<td>{{ $module->module_title}}</td>
						</tr>
						<tr>
							<td>Module Controller</td>
							<td>{{ $module->module_controller}}</td>
						</tr>
					</table>


					<table class="table border bordered">
						<thead>
							<tr>
								<th>Group</th>
								<th>Select</th>
								<th>Create</th>
								<th>List</th>
								<th>Update</th>
								<th>Show</th>
								<th>Destroy</th>
								<th>Custom</th>
							</tr>
						</thead>
						<tbody>
							@foreach($groups as $group)
							<tr>
								<td>
									{{ $group->group_title }}
								</td>
								<td>
									<label class="input-control checkbox small-check">
										<input class="select-all-action" name="access_data[{{ $group->id }}][global]" value="1" type="checkbox" {{ $group->access_data['global']?"checked":"" }} >
										<span class="check"></span>
										<span class="caption"></span>
									</label>

								</td>
								<td>
									<label class="input-control checkbox small-check">
										<input class="cb-action" name="access_data[{{ $group->id }}][create]" value="1" type="checkbox" {{ $group->access_data['create']?"checked":"" }} >
										<span class="check"></span>
										<span class="caption"></span>
									</label>

								</td>
								<td>
									<label class="input-control checkbox small-check">
										<input class="cb-action" name="access_data[{{ $group->id }}][list]" value="1" type="checkbox" {{ $group->access_data['list']?"checked":"" }} >
										<span class="check"></span>
										<span class="caption"></span>
									</label>

								</td>
								<td>
									<label class="input-control checkbox small-check">
										<input class="cb-action" name="access_data[{{ $group->id }}][update]" value="1" type="checkbox" {{ $group->access_data['update']?"checked":"" }} >
										<span class="check"></span>
										<span class="caption"></span>
									</label>

								</td>
								<td>
									<label class="input-control checkbox small-check">
										<input class="cb-action" name="access_data[{{ $group->id }}][show]" value="1" type="checkbox" {{ $group->access_data['show']?"checked":"" }} >
										<span class="check"></span>
										<span class="caption"></span>
									</label>

								</td>
								<td>
									<label class="input-control checkbox small-check">
										<input class="cb-action" name="access_data[{{ $group->id }}][destroy]" value="1" type="checkbox" {{ $group->access_data['destroy']?"checked":"" }} >
										<span class="check"></span>
										<span class="caption"></span>
									</label>

								</td>
								<td>
									<div class="input-control text full-size small">
										<input class="cb-action" name="access_data[{{ $group->id }}][custom]" type="text" value="{{ $group->access_data['custom'] }}">
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>

					<button class="button small-button primary save-{{ $action }}" data-target="#form_group">Save</button>
					<button class="button small-button close-{{ $action }}" data-ref="module">Close</button>

				</form>

			</div>
		</div>
	</div>
</div>
