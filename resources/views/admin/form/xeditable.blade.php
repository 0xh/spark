@extends('layouts.metro')

@section('content')

<div class="section-wrapper page-heading ">
	<h3>Welcome to Dashboard</h3>
</div>


<div class="section-wrapper animated fadeInRightBig">
	
	<div class="panel widget-box" data-role="panel">
		<div class="heading">
			<div class="title">X Editable</div>
		</div>
		<div class="content">
			<div class="sub-heading">
				<span class="fa fa-link"></span> https://vitalets.github.io/x-editable/
			</div>
			<div class="text">
				
				<h2>Example</h2>   
				<div style="">
					<label class="input-control checkbox" style="margin-right: 50px">
						<input type="checkbox" id="autoopen" >
						<span class="check"></span>
						<span class="caption">&nbsp;auto-open next field</span>
					</label>
					<button id="enable" class="button info" >enable / disable</button>
				</div>

				<div class="table-autoresponsive" >
					<table id="user" class="table bordered striped border " style="clear: both">
						<tbody> 
							<tr>		 
								<td width="35%">Simple text field</td>
								<td width="65%"><a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username">superuser</a></td>
							</tr>
							<tr>		 
								<td>Empty text field, required</td>
								<td><a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a></td>
							</tr>  
							
							<tr>		 
								<td>Select, local array, custom display</td>
								<td><a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a></td>
							</tr>

							<tr>		 
								<td>Combodate (date)</td>
								<td><a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth"></a></td>
							</tr> 

							<tr>		 
								<td>Combodate (datetime)</td>
								<td><a href="#" id="event" data-type="combodate" data-template="D MMM YYYY  HH:mm" data-format="YYYY-MM-DD HH:mm" data-viewformat="MMM D, YYYY, HH:mm" data-pk="1"  data-title="Setup event date and time"></a></td>
							</tr> 
							
							<tr>		 
								<td>Textarea, buttons below. Submit by <i>ctrl+enter</i></td>
								<td><a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a></td>
							</tr> 
							
							<tr>		 
								<td>Checklist</td>
								<td><a href="#" id="fruits" data-type="checklist" data-value="2,3" data-title="Select fruits"></a></td>
							</tr>

							<tr>		 
								<td>Custom input, several fields</td>
								<td><a href="#" id="address" data-type="address" data-pk="1" data-title="Please, fill address"></a></td>
							</tr>					  
																														
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>




</div>




<script language="javascript" type="text/javascript">

var f = 'plain';

jQuery(document).ready(function($){

})

	
</script>


@endsection