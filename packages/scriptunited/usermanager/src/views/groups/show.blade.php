<div class="section-wrapper animated fadeInRightBig">
	<div class="panel widget-box">
		<div class="heading">
			<div class="title">Show Group 
			</div>
			<div class="button-wrap">
				<button class="close-group button primary" data-ref="group">
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
							<td>Group Name</td>
							<td>{{ $group['group_title'] }} </td>
						</tr>
						<tr>
							<td>Description</td>
							<td>{{ $group['group_description']}} </td>
						</tr>
					</table>
				</div>
			</div>
			<button class="button small-button primary close-group" data-ref="group">Close</button>
		</div>
	</div>
</div>