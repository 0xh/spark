<div class="section-wrapper animated fadeInRightBig">
	<div class="panel widget-box">
		<div class="heading">
			<div class="title">Show Module 
			</div>
			<div class="button-wrap">
				<button class="close-view button primary" data-ref="module">
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
							<td>Module Name</td>
							<td>{{ $module['module_title'] }} </td>
						</tr>
						<tr>
							<td>Module Controller</td>
							<td>{{ $module['module_controller'] }} </td>
						</tr>
						<tr>
							<td>Subtitle</td>
							<td>{{ $module['module_subtitle']}} </td>
						</tr>
						<tr>
							<td>Description</td>
							<td>{{ $module['module_description']}} </td>
						</tr>
					</table>
				</div>
			</div>
			<button class="button small-button primary close-view" data-ref="module">Close</button>
		</div>
	</div>
</div>