@extends('layouts.metro')

@section('content')

<div class="section-wrapper page-heading ">
	<h3>Welcome to Dashboard</h3>
</div>


<div class="section-wrapper animated fadeInRightBig">
	<br>
	<div class="panel widget-box">
		<div class="content">
			<div class="text">
				<h1>List Views</h1>
				
				<hr>

				<div class="grid">

					<div class="row cells3">
						<div class="cell">
							
							<h3>Default</h3>	
							
							<div class="listview set-border padding10" data-role="listview" id="lv1" data-on-list-click="alert('You select ' + list.find('.list-title').text())">
								<div class="list">
									<img src="{{ asset('metro/images/folder-videos.png') }}" class="list-icon">
									<span class="list-title">Video</span>
								</div>
								<div class="list">
									<img src="{{ asset('metro/images/folder-documents.png') }}" class="list-icon">
									<span class="list-title">Documents</span>
								</div>
								<div class="list active">
									<img src="{{ asset('metro/images/folder-downloads.png') }}" class="list-icon">
									<span class="list-title">Downloads</span>
								</div>
								<div class="list">
									<img src="{{ asset('metro/images/folder-images.png') }}" class="list-icon">
									<span class="list-title">Images</span>
								</div>
								<div class="list">
									<img src="{{ asset('metro/images/folder-music.png') }}" class="list-icon">
									<span class="list-title">Music</span>
								</div>
							</div>


							<h3>Listing <small>& <b>.list-type-listing</b></small></h3>	
							
							<div class="listview set-border padding10 list-type-listing" data-role="listview" id="lv1" data-on-list-click="alert('You select ' + list.find('.list-title').text())">
								<div class="list">
									<img src="{{ asset('metro/images/folder-videos.png') }}" class="list-icon">
									<span class="list-title">Video</span>
								</div>
								<div class="list">
									<img src="{{ asset('metro/images/folder-documents.png') }}" class="list-icon">
									<span class="list-title">Documents</span>
								</div>
								<div class="list active">
									<img src="{{ asset('metro/images/folder-downloads.png') }}" class="list-icon">
									<span class="list-title">Downloads</span>
								</div>
								<div class="list">
									<img src="{{ asset('metro/images/folder-images.png') }}" class="list-icon">
									<span class="list-title">Images</span>
								</div>
								<div class="list">
									<img src="{{ asset('metro/images/folder-music.png') }}" class="list-icon">
									<span class="list-title">Music</span>
								</div>
							</div>


						</div>

						<div class="cell colspan2">
							
							<h3>Tiles <small>& <b>.list-type-tiles</b></small></h3>

							<div class="listview set-border padding10 list-type-tiles " data-role="listview" id="lv1" data-on-list-click="alert('You select ' + list.find('.list-title').text())">
								<div class="list">
									<img src="{{ asset('metro/images/folder-videos.png') }}" class="list-icon">
									<span class="list-title">Video</span>
								</div>
								<div class="list">
									<img src="{{ asset('metro/images/folder-documents.png') }}" class="list-icon">
									<span class="list-title">Documents</span>
								</div>
								<div class="list active">
									<img src="{{ asset('metro/images/folder-downloads.png') }}" class="list-icon">
									<span class="list-title">Downloads</span>
								</div>
								<div class="list">
									<img src="{{ asset('metro/images/folder-images.png') }}" class="list-icon">
									<span class="list-title">Images</span>
								</div>
								<div class="list">
									<img src="{{ asset('metro/images/folder-music.png') }}" class="list-icon">
									<span class="list-title">Music</span>
								</div>
							</div>

							<h3>Icons <small>& <b>.list-type-icons</b></small></h3>

							<div class="listview set-border padding10 list-type-icons " data-role="listview" id="lv1" data-on-list-click="alert('You select ' + list.find('.list-title').text())">
								<div class="list">
									<img src="{{ asset('metro/images/folder-videos.png') }}" class="list-icon">
									<span class="list-title">Video</span>
								</div>
								<div class="list">
									<img src="{{ asset('metro/images/folder-documents.png') }}" class="list-icon">
									<span class="list-title">Documents</span>
								</div>
								<div class="list active">
									<img src="{{ asset('metro/images/folder-downloads.png') }}" class="list-icon">
									<span class="list-title">Downloads</span>
								</div>
								<div class="list">
									<img src="{{ asset('metro/images/folder-images.png') }}" class="list-icon">
									<span class="list-title">Images</span>
								</div>
								<div class="list">
									<img src="{{ asset('metro/images/folder-music.png') }}" class="list-icon">
									<span class="list-title">Music</span>
								</div>
							</div>



						</div>

					</div>

				</div>
				
				
			</div>
		</div>
	</div>

</div>

<div class="section-wrapper">
	<div class="panel widget-box">
		<div class="content">
			<div class="text">
				
				<h1>List View</h1>
				<br>

				<h3>ListView with Groups</h3>

	            <div class="listview set-border padding10" data-role="listview">
	                <div class="list-group">
	                    <span class="list-group-toggle">My Resources</span>
	                    <div class="list-group-content">
	                        <div class="list">
	                            <img src="{{ asset('metro/images/folder-videos.png') }}" class="list-icon">
	                            <span class="list-title">Video</span>
	                        </div>
	                        <div class="list">
	                            <img src="{{ asset('metro/images/folder-documents.png') }}" class="list-icon">
	                            <span class="list-title">Documents</span>
	                        </div>
	                        <div class="list">
	                            <img src="{{ asset('metro/images/folder-downloads.png') }}" class="list-icon">
	                            <span class="list-title">Downloads</span>
	                        </div>
	                        <div class="list">
	                            <img src="{{ asset('metro/images/folder-images.png') }}" class="list-icon">
	                            <span class="list-title">Images</span>
	                        </div>
	                        <div class="list">
	                            <img src="{{ asset('metro/images/folder-music.png') }}" class="list-icon">
	                            <span class="list-title">Music</span>
	                        </div>
	                    </div>
	                </div>

	                <div class="list-group">
	                    <span class="list-group-toggle">My Computer</span>
	                    <div class="list-group-content">
	                        <div class="list">
	                            <img src="{{ asset('metro/images/disk-sys.png') }}" class="list-icon">
	                            <span class="list-title">Local Drive (C:)</span>
	                            <div class="list-data">
	                                <div class="progress" data-role="progressBar" data-value="75"></div>
	                            </div>
	                        </div>
	                        <div class="list">
	                            <img src="{{ asset('metro/images/hard-drive.png') }}" class="list-icon">
	                            <span class="list-title">Local Drive (D:)</span>
	                            <div class="list-data">
	                                <div class="progress" data-role="progressBar" data-value="35"></div>
	                            </div>
	                        </div>
	                        <div class="list">
	                            <img src="{{ asset('metro/images/hard-drive.png') }}" class="list-icon">
	                            <span class="list-title">Removable Drive (E:)</span>
	                            <div class="list-data">
	                                <div class="progress" data-role="progressBar" data-value="45"></div>
	                            </div>
	                        </div>
	                        <div class="list">
	                            <img src="{{ asset('metro/images/bd-rom.png') }}" class="list-icon">
	                            <span class="list-title">BD-ROM (J:)</span>
	                            <div class="list-data">
	                                disk not found
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>



			</div>
		</div>
	</div>
</div>


<style>



</style>

<script language="javascript" type="text/javascript">


jQuery(document).ready(function($){

});
	
</script>

@endsection