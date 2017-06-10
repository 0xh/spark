@extends('layouts.metro')

@section('content')

<div class="section-wrapper page-heading ">
	<h3>Welcome to Dashboard</h3>
</div>

<div class="section-wrapper bg-white margin-bottom-40 align-center ">
	
	<h1>Static Lightbox</h1>

</div>


<div class="section-wrapper animated fadeInRightBig">

	<div class="grid condensed ">

		<div class="repeat-rows" data-cells="4" >
			<div class="cell gallery">
				
                <div class="image gallery-group-1">
                    <div class="image-inner">
                        <a href="{{asset('images/gallery1/gallery-01.jpg')}}" data-title="Train Inside" data-lightbox="gallery-group-1">
                            <img src="{{asset('images/gallery1/gallery-01.jpg')}}" alt="" />
                        </a>
                        <p class="image-caption">
                            Train Inside
                        </p>
                    </div>
                    <div class="image-info">
                        <h5 class="title">Lorem ipsum dolor sit amet</h5>
                        <div class="pull-right">
                            <small>by</small> <a href="javascript:;">Rhyn</a>
                        </div>
                        <div class="rating" data-role="rating" data-value="3.5" data-show-score="false" >
                        </div>
                        <div class="desc">
                            {{ SiteHelpers::word_limit('Nunc velit urna, aliquam at interdum sit amet, lacinia sit amet ligula. Quisque et erat eros. Aenean auctor metus in tortor placerat, non luctus justo blandit.') }}
                        </div>
                    </div>
                </div>
		
			</div>
			<div class="cell gallery">

                <div class="image gallery-group-1">
                    <div class="image-inner">
                        <a href="{{asset('images/gallery1/gallery-02.jpg')}}" data-title="Rail ways" data-lightbox="gallery-group-1">
                            <img src="{{asset('images/gallery1/gallery-02.jpg')}}" alt="" />
                        </a>
                        <p class="image-caption">
                            Rail Way
                        </p>
                    </div>
                    <div class="image-info">
                        <h5 class="title">Lorem ipsum dolor sit amet</h5>
                        <div class="pull-right">
                            <small>by</small> <a href="javascript:;">Rhyn</a>
                        </div>
                        <div class="rating" data-role="rating" data-value="2.5" data-show-score="false" >
                        </div>
                        <div class="desc">
                            {{ SiteHelpers::word_limit('Nunc velit urna, aliquam at interdum sit amet, lacinia sit amet ligula. Quisque et erat eros. Aenean auctor metus in tortor placerat, non luctus justo blandit.') }}
                        </div>
                    </div>
                </div>
		
			</div>
			<div class="cell gallery">

                <div class="image gallery-group-1">
                    <div class="image-inner">
                        <a href="{{asset('images/gallery1/gallery-03.jpg')}}" data-title="" data-lightbox="gallery-group-1">
                            <img src="{{asset('images/gallery1/gallery-03.jpg')}}" alt="" />
                        </a>
                        <p class="image-caption">
                            Bicycle
                        </p>
                    </div>
                    <div class="image-info">
                        <h5 class="title">Lorem ipsum dolor sit amet</h5>
                        <div class="pull-right">
                            <small>by</small> <a href="javascript:;">Rhyn</a>
                        </div>
                        <div class="rating" data-role="rating" data-value="4.5" data-show-score="false" >
                        </div>
                        <div class="desc">
                            {{ SiteHelpers::word_limit('Nunc velit urna, aliquam at interdum sit amet, lacinia sit amet ligula. Quisque et erat eros. Aenean auctor metus in tortor placerat, non luctus justo blandit.') }}
                        </div>
                    </div>
                </div>
		
			</div>
			<div class="cell gallery">

                <div class="image gallery-group-1">
                    <div class="image-inner">
                        <a href="{{asset('images/gallery1/gallery-04.jpg')}}" data-title="" data-lightbox="gallery-group-1">
                            <img src="{{asset('images/gallery1/gallery-04.jpg')}}" alt="" />
                        </a>
                        <p class="image-caption">
                            Green Valley
                        </p>
                    </div>
                    <div class="image-info">
                        <h5 class="title">Lorem ipsum dolor sit amet</h5>
                        <div class="pull-right">
                            <small>by</small> <a href="javascript:;">Rhyn</a>
                        </div>
                        <div class="rating" data-role="rating" data-value="1.0" data-show-score="false" >
                        </div>
                        <div class="desc">
                            {{ SiteHelpers::word_limit('Nunc velit urna, aliquam at interdum sit amet, lacinia sit amet ligula. Quisque et erat eros. Aenean auctor metus in tortor placerat, non luctus justo blandit.') }}
                        </div>
                    </div>
                </div>
		
			</div>
			<div class="cell gallery">

                <div class="image gallery-group-1">
                    <div class="image-inner">
                        <a href="{{asset('images/gallery1/gallery-05.jpg')}}" data-title="" data-lightbox="gallery-group-1">
                            <img src="{{asset('images/gallery1/gallery-05.jpg')}}" alt="" />
                        </a>
                        <p class="image-caption">
                            Speed Train
                        </p>
                    </div>
                    <div class="image-info">
                        <h5 class="title">Lorem ipsum dolor sit amet</h5>
                        <div class="pull-right">
                            <small>by</small> <a href="javascript:;">Rhyn</a>
                        </div>
                        <div class="rating" data-role="rating" data-value="3.0" data-show-score="false" >
                        </div>
                        <div class="desc">
                            {{ SiteHelpers::word_limit('Nunc velit urna, aliquam at interdum sit amet, lacinia sit amet ligula. Quisque et erat eros. Aenean auctor metus in tortor placerat, non luctus justo blandit.') }}
                        </div>
                    </div>
                </div>
		
			</div>
			<div class="cell gallery">

                <div class="image gallery-group-1">
                    <div class="image-inner">
                        <a href="{{asset('images/gallery1/gallery-06.jpg')}}" data-title="" data-lightbox="gallery-group-1">
                            <img src="{{asset('images/gallery1/gallery-06.jpg')}}" alt="" />
                        </a>
                        <p class="image-caption">
                            Bridge
                        </p>
                    </div>
                    <div class="image-info">
                        <h5 class="title">Lorem ipsum dolor sit amet</h5>
                        <div class="pull-right">
                            <small>by</small> <a href="javascript:;">Rhyn</a>
                        </div>
                        <div class="rating" data-role="rating" data-value="1.5" data-show-score="false" >
                        </div>
                        <div class="desc">
                            {{ SiteHelpers::word_limit('Nunc velit urna, aliquam at interdum sit amet, lacinia sit amet ligula. Quisque et erat eros. Aenean auctor metus in tortor placerat, non luctus justo blandit.') }}
                        </div>
                    </div>
                </div>
		
			</div>
			<div class="cell gallery">

                <div class="image gallery-group-1">
                    <div class="image-inner">
                        <a href="{{asset('images/gallery1/gallery-07.jpg')}}" data-title="" data-lightbox="gallery-group-1">
                            <img src="{{asset('images/gallery1/gallery-07.jpg')}}" alt="" />
                        </a>
                        <p class="image-caption">
                            London Bridge
                        </p>
                    </div>
                    <div class="image-info">
                        <h5 class="title">Lorem ipsum dolor sit amet</h5>
                        <div class="pull-right">
                            <small>by</small> <a href="javascript:;">Rhyn</a>
                        </div>
                        <div class="rating" data-role="rating" data-value="2.0" data-show-score="false" >
                        </div>
                        <div class="desc">
                            {{ SiteHelpers::word_limit('Nunc velit urna, aliquam at interdum sit amet, lacinia sit amet ligula. Quisque et erat eros. Aenean auctor metus in tortor placerat, non luctus justo blandit.') }}
                        </div>
                    </div>
                </div>
		
			</div>
			<div class="cell gallery">

                <div class="image gallery-group-1">
                    <div class="image-inner">
                        <a href="{{asset('images/gallery1/gallery-08.jpg')}}" data-title="" data-lightbox="gallery-group-1">
                            <img src="{{asset('images/gallery1/gallery-08.jpg')}}" alt="" />
                        </a>
                        <p class="image-caption">
                            Rail Tracks
                        </p>
                    </div>
                    <div class="image-info">
                        <h5 class="title">Lorem ipsum dolor sit amet</h5>
                        <div class="pull-right">
                            <small>by</small> <a href="javascript:;">Rhyn</a>
                        </div>
                        <div class="rating" data-role="rating" data-value="5.0" data-show-score="false" >
                        </div>
                        <div class="desc">
                            {{ SiteHelpers::word_limit('Nunc velit urna, aliquam at interdum sit amet, lacinia sit amet ligula. Quisque et erat eros. Aenean auctor metus in tortor placerat, non luctus justo blandit.') }}
                        </div>
                    </div>
                </div>
		
			</div>
			<div class="cell gallery">

                <div class="image gallery-group-1">
                    <div class="image-inner">
                        <a href="{{asset('images/gallery1/gallery-09.jpg')}}" data-title="" data-lightbox="gallery-group-1">
                            <img src="{{asset('images/gallery1/gallery-09.jpg')}}" alt="" />
                        </a>
                        <p class="image-caption">
                            Natura
                        </p>
                    </div>
                    <div class="image-info">
                        <h5 class="title">Lorem ipsum dolor sit amet</h5>
                        <div class="pull-right">
                            <small>by</small> <a href="javascript:;">Rhyn</a>
                        </div>
                        <div class="rating" data-role="rating" data-value="2.5" data-show-score="false" >
                        </div>
                        <div class="desc">
                            {{ SiteHelpers::word_limit('Nunc velit urna, aliquam at interdum sit amet, lacinia sit amet ligula. Quisque et erat eros. Aenean auctor metus in tortor placerat, non luctus justo blandit.') }}
                        </div>
                    </div>
                </div>
		
			</div>
			<div class="cell gallery">

                <div class="image gallery-group-1">
                    <div class="image-inner">
                        <a href="{{asset('images/gallery1/gallery-10.jpg')}}" data-title="" data-lightbox="gallery-group-1">
                            <img src="{{asset('images/gallery1/gallery-10.jpg')}}" alt="" />
                        </a>
                        <p class="image-caption">
                            Fire Works
                        </p>
                    </div>
                    <div class="image-info">
                        <h5 class="title">Lorem ipsum dolor sit amet</h5>
                        <div class="pull-right">
                            <small>by</small> <a href="javascript:;">Rhyn</a>
                        </div>
                        <div class="rating" data-role="rating" data-value="1.0" data-show-score="false" >
                        </div>
                        <div class="desc">
                            {{ SiteHelpers::word_limit('Nunc velit urna, aliquam at interdum sit amet, lacinia sit amet ligula. Quisque et erat eros. Aenean auctor metus in tortor placerat, non luctus justo blandit.') }}
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

    var rpt = $('.repeat-rows ');
    var tcells = rpt.data('cells');
    var tclass = rpt.attr('class');
    var i = 0;
    var j = 0;
    var container = [];

    $('.cell.gallery').each(function(i){
        if(i % tcells == 0 ) {
            j++;
            container[j] = [];
        }
        htm = $(this).wrap('<div/>');
        container[j].push($(htm).parent().html());
        i++;
    })

    var tcontainer = [];

    $(container).each(function(i,o){
        if(typeof(o) != 'undefined'){
            tcontainer[i] = o.join('');
        }
    })

    $('.repeat-rows').empty();
    $(tcontainer).each(function(i,o){
        if(typeof(o) != 'undefined'){
            htm = '<div class="row cells'+tcells+'" >'+o+'</div>';
            $('.repeat-rows').append(htm);
        }
    })

});

</script>

@endsection