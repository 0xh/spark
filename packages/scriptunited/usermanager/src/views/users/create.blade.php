<div class="section-wrapper animated fadeInRightBig">
	<div class="panel widget-box">
		<div class="heading">
			<div class="title">Invite User
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
					<input type="hidden" name="id" value="" >
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
										<input name="email" type="text" value="">
									</div>
								</td>
							</tr>
							<tr>
								<td>App Url</td>
								<td>
									<div class="input-control text full-size">
										<input name="app_url" type="text" value="{{ $metrouser['app_regis_url'] }}">
									</div>
								</td>
							</tr>
							<tr>
								<td>App Name</td>
								<td>
									<div class="input-control text full-size">
										<input name="app_name" type="text" value="{{ $metrouser['app_name'] }}">
									</div>
								</td>
							</tr>
							<tr>
								<td>Subject</td>
								<td>
									<div class="input-control text full-size">
										<input name="subject" type="text" value="{{ $metrouser['mail_invite_subject'] .' '.$metrouser['app_name'] }}">
									</div>
								</td>
							</tr>

						</table>
					</div>
				</form>
			</div>
			<button class="button small-button primary save-item" data-form='#form_edit' data-table="#userTable">Invite</button>
			<button class="button small-button close-{{$_action}}" data-ref="user">Close</button>
		</div>
	</div>
</div>

