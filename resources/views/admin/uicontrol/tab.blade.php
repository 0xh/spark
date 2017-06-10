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
				
				<h1>Tabs Control</h1>
				<hr>

	            <div class="grid responsive">
	                <div class="row cells2">
	                    <div class="cell">
	                        <h5>.tabcontrol</h5>
	                        <div class="tabcontrol" data-role="tabcontrol">
	                            <ul class="tabs">
	                                <li><a href="#frame_1_1">Tab 1</a></li>
	                                <li><a href="#frame_1_2">Tab 2</a></li>
	                                <li class="disabled"><a href="">Tab 3</a></li>
	                            </ul>
	                            <div class="frames bg-grayLight">
	                                <div class="frame" id="frame_1_1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam obcaecati ipsam, perferendis soluta velit, nihil ea pariatur. Numquam exercitationem commodi magnam. Hic unde voluptatum velit doloremque quo dignissimos, nostrum ipsum ratione voluptates, provident voluptate odit minus voluptatem repudiandae, iusto recusandae. 
	                                </div>
	                                <div class="frame" id="frame_1_2">Enim deleniti vitae veniam, laborum aperiam perspiciatis, doloremque distinctio corporis. Dolores debitis nihil voluptates, amet ad vero beatae ab adipisci aspernatur cum repellendus ducimus ratione voluptatum soluta voluptatibus delectus aliquam eum explicabo mollitia saepe, porro itaque velit dicta corporis, vel.</div>
	                            </div>
	                        </div>
	                        <h5>.tabcontrol2</h5>
	                        <div class="tabcontrol2" data-role="tabcontrol">
	                            <ul class="tabs">
	                                <li><a href="#frame_5_1">Tab 1</a></li>
	                                <li><a href="#frame_5_2">Tab 2</a></li>
	                                <li class="disabled"><a href="">Tab 5</a></li>
	                            </ul>
	                            <div class="frames">
	                                <div class="frame" id="frame_5_1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam obcaecati ipsam, perferendis soluta velit, nihil ea pariatur. Numquam exercitationem commodi magnam. Hic unde voluptatum velit doloremque quo dignissimos, nostrum ipsum ratione voluptates, provident voluptate odit minus voluptatem repudiandae, iusto recusandae.
	                                </div>
	                                <div class="frame" id="frame_5_2">Enim deleniti vitae veniam, laborum aperiam perspiciatis, doloremque distinctio corporis. Dolores debitis nihil voluptates, amet ad vero beatae ab adipisci aspernatur cum repellendus ducimus ratione voluptatum soluta voluptatibus delectus aliquam eum explicabo mollitia saepe, porro itaque velit dicta corporis, vel.</div>
	                            </div>
	                        </div>
	                    </div>
	                    <div class="cell">
	                        <h5>.tabcontrol & .tabs-bottom</h5>
	                        <div class="tabcontrol tabs-bottom" data-role="tabcontrol">
	                            <div class="frames bg-grayLight">
	                                <div class="frame" id="frame_2_1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam obcaecati ipsam, perferendis soluta velit, nihil ea pariatur. Numquam exercitationem commodi magnam. Hic unde voluptatum velit doloremque quo dignissimos, nostrum ipsum ratione voluptates, provident voluptate odit minus voluptatem repudiandae, iusto recusandae.
	                                </div>
	                                <div class="frame" id="frame_2_2">Enim deleniti vitae veniam, laborum aperiam perspiciatis, doloremque distinctio corporis. Dolores debitis nihil voluptates, amet ad vero beatae ab adipisci aspernatur cum repellendus ducimus ratione voluptatum soluta voluptatibus delectus aliquam eum explicabo mollitia saepe, porro itaque velit dicta corporis, vel.</div>
	                            </div>
	                            <ul class="tabs tab-bottom">
	                                <li class="active"><a href="#frame_2_1">Tab 1</a></li>
	                                <li><a href="#frame_2_2">Tab 2</a></li>
	                                <li class="disabled"><a href="">Tab 3</a></li>
	                            </ul>
	                        </div>

	                        <h5>.tabcontrol2 & .tabs-bottom</h5>
	                        <div class="tabcontrol2 tabs-bottom" data-role="tabcontrol">
	                            <div class="frames">
	                                <div class="frame" id="frame_6_1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam obcaecati ipsam, perferendis soluta velit, nihil ea pariatur. Numquam exercitationem commodi magnam. Hic unde voluptatum velit doloremque quo dignissimos, nostrum ipsum ratione voluptates, provident voluptate odit minus voluptatem repudiandae, iusto recusandae.
	                                </div>
	                                <div class="frame" id="frame_6_2">Enim deleniti vitae veniam, laborum aperiam perspiciatis, doloremque distinctio corporis. Dolores debitis nihil voluptates, amet ad vero beatae ab adipisci aspernatur cum repellendus ducimus ratione voluptatum soluta voluptatibus delectus aliquam eum explicabo mollitia saepe, porro itaque velit dicta corporis, vel.</div>
	                            </div>
	                            <ul class="tabs tab-bottom">
	                                <li><a href="#frame_6_1">Tab 1</a></li>
	                                <li><a href="#frame_6_2">Tab 2</a></li>
	                                <li class="disabled"><a href="">Tab 3</a></li>
	                            </ul>
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