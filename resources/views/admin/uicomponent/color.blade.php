@extends('layouts.metro')

@section('content')

<div class="section-wrapper page-heading ">
	<h3>Welcome to Dashboard</h3>
</div>


<div class="section-wrapper bg-white align-center  ">

	<h1>Color</h1>

</div>

<div class="section-wrapper padding-top-20  animated fadeInRightBig">


        <div class="example" data-text="colors">
            <h5>Predefined colors</h5>
            <ul class="unstyled-list color-list" id="bg-color-list"></ul>
            <script>
                $(function(){
                    var item, span;
                    $.each(metro_color, function(i, v){
                        item = $("<li/>").addClass('bg-'+i+' fg-white padding10 text-shadow').html(i).appendTo($("#bg-color-list"));
                    });
                });
            </script>
        </div>
	
        <p>
            To set background color: use prefix <span class="tag">bg-</span>, to set foreground color: use prefix <span class="tag">fg-</span>, to set outline color: use prefix <span class="tag">ol-</span>, to set border color: use prefix <span class="tag">bd-</span>.
            Also you can set active, hover and focus colors with classes <span class="tag">bg(fg)-hover-*</span>, <span class="tag">bg(fg)-active-</span> and <span class="tag">bg(fg)-focus-</span>.
            Also you can change :before and :after color and background for element with classes: <span class="tag">before-bg-*</span>, <span class="tag">before-fg-*</span>, <span class="tag">after-bg-*</span>, <span class="tag">after-fg-*</span>.
        </p>

        <p>
        	usage in javascript: <code>metro_color.[color-code]</code>, eg: <code>$('#element').css('background', metro_color.cyan )</code>
        </p>

        <div class="example" data-text="colors">
            <h5>:before and :after colors</h5>
            <ul class="simple-list color-list" id="before-bg-color-list"></ul>
            <script>
                $(function(){
                    var item, span;
                    $.each(metro_color, function(i, v){
                        item = $("<li/>").addClass('before-fg-'+i+' padding10').html(i).appendTo($("#before-bg-color-list"));
                    });
                });
            </script>
        </div>

        <div class="example" data-text="ribbed colors">
            <h5>Ribbed backgrounds</h5>
            <ul class="unstyled-list color-list" id="ribbed-color-list"></ul>
            <script>
                $(function(){
                    var item, span;
                    $.each(metro_color, function(i, v){
                        item = $("<li/>").addClass('ribbed-'+i+' fg-white padding10 text-shadow').html(i).appendTo($("#ribbed-color-list"));
                    });
                });
            </script>

        </div>

        <div class="example" data-text="image colors">

            <h5>Image Background</h5>
            <ul class="unstyled-list color-list" id="image-color-list"></ul>
            <script>
                $(function(){
                    var item, span;
                    var bg_img = ['chess','bigchess','leaf','star'];
                    var n = 0;
                    $.each(metro_color, function(i, v){
                        item = $("<li/>").addClass( 'bg-'+i+' bg-'+ bg_img[n] +' fg-white padding10 text-shadow').html(i+'.'+bg_img[n]).appendTo($("#image-color-list"));
                        n++;
                        if(n>3) n=0;
                    });
                });
            </script>

        </div>

</div>




<script language="javascript" type="text/javascript">

jQuery(document).ready(function($){
});

</script>

@endsection