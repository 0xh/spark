@extends('layouts.metro')

@section('content')

<div class="section-wrapper page-heading ">
	<h3>Welcome to Dashboard</h3>
</div>

<div class="section-wrapper">
	<h1>Data Table</h1>
	<br>
</div>

<div class="section-wrapper animated fadeInRightBig">
	<div>
		<label class="input-control checkbox">
			<input type="checkbox" class="cb_type" onchange="$('#table').toggleClass('striped');">
			<span class="check"></span>
			<span class="caption">.striped</span>
		</label>
		<label class="input-control checkbox">
			<input type="checkbox" class="cb_type" onchange="$('#table').toggleClass('border');" >
			<span class="check"></span>
			<span class="caption">.border</span>
		</label>
		<label class="input-control checkbox">
			<input type="checkbox" class="cb_type" onchange="$('#table').toggleClass('bordered');">
			<span class="check"></span>
			<span class="caption">.bordered</span>
		</label>
		<label class="input-control checkbox">
			<input type="checkbox" class="cb_type" onchange="$('#table').toggleClass('hovered');">
			<span class="check"></span>
			<span class="caption">.hovered</span>
		</label>
		<label class="input-control checkbox">
			<input type="checkbox" class="cb_type" onchange="$('#table').toggleClass('cell-hovered');">
			<span class="check"></span>
			<span class="caption">.cell-hovered</span>
		</label>
	</div>

	<div class="panel widget-box">
		<div class="heading">
			<div class="title">Class table</div>
		</div>
		<div class="content">
			<div class="text">

				<div class="table-responsive">
					
					<table id="table" class="table" >
						<tr>
							<th>Heading 1</th>
							<th>Heading 2</th>
							<th>Heading 3</th>
							<th>Heading 4</th>
							<th>Heading 5</th>
						</tr>
						<tr>
							<td>Lorem</td>
							<td>ipsum</td>
							<td>dolor</td>
							<td>sit</td>
							<td>amet</td>
						</tr>
						<tr>
							<td>Lorem</td>
							<td>ipsum</td>
							<td>dolor</td>
							<td>sit</td>
							<td>amet</td>
						</tr>
						<tr>
							<td>Lorem</td>
							<td>ipsum</td>
							<td>dolor</td>
							<td>sit</td>
							<td>amet</td>
						</tr>
						<tr>
							<td>Lorem</td>
							<td>ipsum</td>
							<td>dolor</td>
							<td>sit</td>
							<td>amet</td>
						</tr>
						<tr>
							<td>Lorem</td>
							<td>ipsum</td>
							<td>dolor</td>
							<td>sit</td>
							<td>amet</td>
						</tr>
						<tr>
							<td>Lorem</td>
							<td>ipsum</td>
							<td>dolor</td>
							<td>sit</td>
							<td>amet</td>
						</tr>
					</table>

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