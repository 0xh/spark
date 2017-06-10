<div class="section-wrapper animated fadeInRightBig">
	<div class="panel widget-box">
		<div class="heading">
			<div class="title">group Edit
			</div>
			<div class="button-wrap">
				<button class="close-{{$_action}} button primary" data-ref="group">
					<span class="mif-cross"></span>
				</button>
			</div>
		</div>
		<div class="content">
			<div class="text">
				<form action="/groups" id="form_edit_groups" method="post" >
					{{ csrf_field() }}
					{{ method_field( $_method ) }}
					<input type="hidden" name="id" value="{{$group['id']}}" >
					<div class="table-responsive">
						<table class="table striped border bordered" >
							<tr>
								<th>Title</th>
								<th>Value</th>
							</tr>
							<tr>
								<td>Group Name</td>
								<td>
									<div class="input-control text full-size">
										<input name="group_title" type="text" value="{{ $group->group_title }}" required>
									</div>
								</td>
							</tr>
							<tr>
								<td>Group Description</td>
								<td>
									<div class="input-control text full-size">
										<input name="group_description" type="text" value="{{ $group->group_description }}"required>
									</div>
								</td>
							</tr>

						</table>
					</div>
				</form>
			</div>
			<button class="button small-button primary save-item" data-form='#form_edit_groups' data-table="#groupTable">Save</button>
			<button class="button small-button close-{{$_action}}" data-ref="group">Close</button>
		</div>
	</div>
</div>


<script>
jQuery(document).ready(function($){


})
</script>




