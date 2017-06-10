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
				<h1>Tile</h1>
				<hr>

				<div class="grid">

        <div class="tile-container bg-darkTeal">

            <div class="tile bg-red fg-white" data-role="tile">
                <div class="tile-content iconic">
                    <span class="icon mif-cogs"></span>
                </div>
            </div>

            <div class="tile bg-cyan fg-white" data-role="tile">
                <div class="tile-content iconic">
                    <span class="icon mif-envelop"></span>
                    <span class="tile-badge bg-darkRed">5</span>
                    <span class="tile-label">Mail</span>
                </div>
            </div>

            <div class="tile-wide bg-orange fg-white" data-role="tile">
                <div class="tile-content iconic">
                    <span class="icon mif-cloud"></span>
                    <span class="tile-label">Cloud service</span>
                </div>
            </div>

            <div class="tile-wide bg-orange fg-white" data-role="tile">
                <div class="tile-content image-set">
                    <img src="{{ asset('metro/images/1.jpg') }}">
                    <img src="{{ asset('metro/images/2.jpg') }}">
                    <img src="{{ asset('metro/images/3.jpg') }}">
                    <img src="{{ asset('metro/images/4.jpg') }}">
                    <img src="{{ asset('metro/images/5.jpg') }}">
                </div>
                <span class="tile-label">image-set</span>
            </div>

            <div class="tile-wide bg-orange fg-white" data-role="tile">
                <div class="tile-content">
                    <div class="image-container">
                        <div class="frame">
                            <img src="{{ asset('metro/images/1.jpg') }}">
                        </div>
                        <div class="image-overlay op-green">
                            <h2>Image title</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                    <div class="tile-label">Image container</div>
                </div>
            </div>

            <div class="tile bg-transparent fg-white text-shadow" data-role="tile">
                <div class="tile-content">
                    <img src="{{ asset('metro/images/me.jpg') }}" data-role="fitImage" data-format='square'>
                    <div class="tile-label">fitImage</div>
                </div>
            </div>

            <div class="tile-wide bg-orange fg-white" data-role="tile">
                <div class="tile-content">
                    <div class="carousel" data-role="carousel" data-controls="false" data-markers="true">
                        <div class="slide"><img src="{{ asset('metro/images/1.jpg') }}"></div>
                        <div class="slide"><img src="{{ asset('metro/images/2.jpg') }}"></div>
                        <div class="slide"><img src="{{ asset('metro/images/3.jpg') }}"></div>
                        <div class="slide"><img src="{{ asset('metro/images/4.jpg') }}"></div>
                        <div class="slide"><img src="{{ asset('metro/images/5.jpg') }}"></div>
                    </div>
                    <div class="tile-label">Carousel</div>
                </div>
            </div>

            <div class="tile bg-green fg-white element-selected" data-role="tile">
                <div class="tile-content iconic">
                    <span class="icon mif-home"></span>
                    <div class="tile-label">selected</div>
                </div>
            </div>

            <div class="tile fg-white" data-role="tile">
                <div class="tile-content slide-up">
                    <div class="slide">
                        <img src="{{ asset('metro/images/2.jpg') }}" data-role="fitImage" data-format="square">
                    </div>
                    <div class="slide-over op-cyan text-small padding10">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </div>
                    <div class="tile-label">slide-up</div>
                </div>
            </div>

            <div class="tile-wide fg-white" data-role="tile">
                <div class="tile-content slide-up">
                    <div class="slide">
                        <img src="{{ asset('metro/images/3.jpg') }}" data-role="fitImage" data-format="hd">
                    </div>
                    <div class="slide-over op-orange text-small padding10">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </div>
                    <div class="tile-label">slide-up</div>
                </div>
            </div>

            <div class="tile-wide fg-white" data-role="tile">
                <div class="tile-content slide-up-2">
                    <div class="slide">
                        <img src="{{ asset('metro/images/3.jpg') }}" data-role="fitImage" data-format="fill">
                    </div>
                    <div class="slide-over bg-orange text-small padding10">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </div>
                    <div class="tile-label">slide-up-2</div>
                </div>
            </div>

            <div class="tile fg-white" data-role="tile">
                <div class="tile-content slide-down">
                    <div class="slide">
                        <img src="{{ asset('metro/images/4.jpg') }}" data-role="fitImage" data-format="square">
                    </div>
                    <div class="slide-over op-cyan text-small padding10">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </div>
                    <div class="tile-label">slide-down</div>
                </div>
            </div>

            <div class="tile-wide fg-white" data-role="tile">
                <div class="tile-content slide-down">
                    <div class="slide">
                        <img src="{{ asset('metro/images/5.jpg') }}" data-role="fitImage" data-format="hd">
                    </div>
                    <div class="slide-over op-green text-small padding10">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </div>
                    <div class="tile-label">slide-down</div>
                </div>
            </div>

            <div class="tile-wide fg-white" data-role="tile">
                <div class="tile-content slide-down-2">
                    <div class="slide">
                        <img src="{{ asset('metro/images/5.jpg') }}" data-role="fitImage" data-format="fill">
                    </div>
                    <div class="slide-over bg-green text-small padding10">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </div>
                    <div class="tile-label">slide-down-2</div>
                </div>
            </div>

            <div class="tile fg-white bg-transparent " data-role="tile">
                <div class="tile-content slide-down-2 ">
                    <div class="slide">
                        <img src="{{ asset('metro/images/spface2.jpg') }}" data-role="fitImage" data-format="square">
                    </div>
                    <div class="slide-over bg-green text-small padding10 ">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </div>
                    <div class="tile-label">slide-down-2</div>
                </div>
            </div>

            <div class="tile fg-white" data-role="tile">
                <div class="tile-content slide-left">
                    <div class="slide">
                        <img src="{{ asset('metro/images/4.jpg') }}" data-role="fitImage" data-format="square">
                    </div>
                    <div class="slide-over op-cyan text-small padding10">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </div>
                    <div class="tile-label">slide-left</div>
                </div>
            </div>

            <div class="tile-wide fg-white" data-role="tile">
                <div class="tile-content slide-left">
                    <div class="slide">
                        <img src="{{ asset('metro/images/5.jpg') }}" data-role="fitImage" data-format="hd">
                    </div>
                    <div class="slide-over op-green text-small padding10">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </div>
                    <div class="tile-label">slide-left</div>
                </div>
            </div>

            <div class="tile fg-white" data-role="tile">
                <div class="tile-content slide-left-2">
                    <div class="slide">
                        <img src="{{ asset('metro/images/5.jpg') }}" data-role="fitImage" data-format="fill">
                    </div>
                    <div class="slide-over op-green text-small padding10">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </div>
                    <div class="tile-label">slide-left-2</div>
                </div>
            </div>

            <div class="tile fg-white" data-role="tile">
                <div class="tile-content slide-right">
                    <div class="slide">
                        <img src="{{ asset('metro/images/1.jpg') }}" data-role="fitImage" data-format="square">
                    </div>
                    <div class="slide-over op-cyan text-small padding10">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </div>
                    <div class="tile-label">slide-right</div>
                </div>
            </div>

            <div class="tile-wide fg-white" data-role="tile">
                <div class="tile-content slide-right">
                    <div class="slide">
                        <img src="{{ asset('metro/images/2.jpg') }}" data-role="fitImage" data-format="hd">
                    </div>
                    <div class="slide-over op-green text-small padding10">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </div>
                    <div class="tile-label">slide-right</div>
                </div>
            </div>

            <div class="tile-wide fg-white" data-role="tile">
                <div class="tile-content slide-right-2">
                    <div class="slide">
                        <img src="{{ asset('metro/images/1.jpg') }}" data-role="fitImage" data-format="fill">
                    </div>
                    <div class="slide-over op-green text-small padding10">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </div>
                    <div class="tile-label">slide-right-2</div>
                </div>
            </div>

            <div class="tile-wide fg-white" data-role="tile">
                <div class="tile-content zooming">
                    <div class="slide">
                        <img src="{{ asset('metro/images/5.jpg') }}">
                    </div>
                    <div class="tile-label">Zooming</div>
                </div>
            </div>

            <div class="tile-wide fg-white" data-role="tile">
                <div class="tile-content zooming-out">
                    <div class="slide">
                        <img src="{{ asset('metro/images/4.jpg') }}">
                    </div>
                    <div class="tile-label">Zooming out</div>
                </div>
            </div>

            <div class="tile fg-white" data-role="tile" data-effect="slideLeft">
                <div class="tile-content">
                    <div class="live-slide"><img src="{{ asset('metro/images/1.jpg') }}" data-role="fitImage" data-format="fill"></div>
                    <div class="live-slide"><img src="{{ asset('metro/images/2.jpg') }}" data-role="fitImage" data-format="fill"></div>
                    <div class="live-slide"><img src="{{ asset('metro/images/3.jpg') }}" data-role="fitImage" data-format="fill"></div>
                    <div class="live-slide"><img src="{{ asset('metro/images/4.jpg') }}" data-role="fitImage" data-format="fill"></div>
                    <div class="live-slide"><img src="{{ asset('metro/images/5.jpg') }}" data-role="fitImage" data-format="fill"></div>
                </div>
                <div class="tile-label">effect: slideLeft</div>
            </div>

            <div class="tile fg-white" data-role="tile" data-effect="slideRight">
                <div class="tile-content">
                    <div class="live-slide"><img src="{{ asset('metro/images/1.jpg') }}" data-role="fitImage" data-format="fill"></div>
                    <div class="live-slide"><img src="{{ asset('metro/images/2.jpg') }}" data-role="fitImage" data-format="fill"></div>
                    <div class="live-slide"><img src="{{ asset('metro/images/3.jpg') }}" data-role="fitImage" data-format="fill"></div>
                    <div class="live-slide"><img src="{{ asset('metro/images/4.jpg') }}" data-role="fitImage" data-format="fill"></div>
                    <div class="live-slide"><img src="{{ asset('metro/images/5.jpg') }}" data-role="fitImage" data-format="fill"></div>
                </div>
                <div class="tile-label">effect: slideRight</div>
            </div>

            <div class="tile fg-white" data-role="tile" data-effect="slideLeftRight">
                <div class="tile-content">
                    <div class="live-slide"><img src="{{ asset('metro/images/1.jpg') }}" data-role="fitImage" data-format="fill"></div>
                    <div class="live-slide"><img src="{{ asset('metro/images/2.jpg') }}" data-role="fitImage" data-format="fill"></div>
                    <div class="live-slide"><img src="{{ asset('metro/images/3.jpg') }}" data-role="fitImage" data-format="fill"></div>
                    <div class="live-slide"><img src="{{ asset('metro/images/4.jpg') }}" data-role="fitImage" data-format="fill"></div>
                    <div class="live-slide"><img src="{{ asset('metro/images/5.jpg') }}" data-role="fitImage" data-format="fill"></div>
                </div>
                <div class="tile-label">effect: slideLeftRight</div>
            </div>

            <div class="tile fg-white" data-role="tile" data-effect="slideUp">
                <div class="tile-content">
                    <div class="live-slide"><img src="{{ asset('metro/images/1.jpg') }}" data-role="fitImage" data-format="fill"></div>
                    <div class="live-slide"><img src="{{ asset('metro/images/2.jpg') }}" data-role="fitImage" data-format="fill"></div>
                    <div class="live-slide"><img src="{{ asset('metro/images/3.jpg') }}" data-role="fitImage" data-format="fill"></div>
                    <div class="live-slide"><img src="{{ asset('metro/images/4.jpg') }}" data-role="fitImage" data-format="fill"></div>
                    <div class="live-slide"><img src="{{ asset('metro/images/5.jpg') }}" data-role="fitImage" data-format="fill"></div>
                </div>
                <div class="tile-label">effect: slideUp</div>
            </div>

            <div class="tile fg-white" data-role="tile" data-effect="slideDown">
                <div class="tile-content">
                    <div class="live-slide"><img src="{{ asset('metro/images/1.jpg') }}" data-role="fitImage" data-format="fill"></div>
                    <div class="live-slide"><img src="{{ asset('metro/images/2.jpg') }}" data-role="fitImage" data-format="fill"></div>
                    <div class="live-slide"><img src="{{ asset('metro/images/3.jpg') }}" data-role="fitImage" data-format="fill"></div>
                    <div class="live-slide"><img src="{{ asset('metro/images/4.jpg') }}" data-role="fitImage" data-format="fill"></div>
                    <div class="live-slide"><img src="{{ asset('metro/images/5.jpg') }}" data-role="fitImage" data-format="fill"></div>
                </div>
                <div class="tile-label">effect: slideDown</div>
            </div>

            <div class="tile fg-white" data-role="tile" data-effect="slideUpDown">
                <div class="tile-content">
                    <div class="live-slide"><img src="{{ asset('metro/images/1.jpg') }}" data-role="fitImage" data-format="fill"></div>
                    <div class="live-slide"><img src="{{ asset('metro/images/2.jpg') }}" data-role="fitImage" data-format="fill"></div>
                    <div class="live-slide"><img src="{{ asset('metro/images/3.jpg') }}" data-role="fitImage" data-format="fill"></div>
                    <div class="live-slide"><img src="{{ asset('metro/images/4.jpg') }}" data-role="fitImage" data-format="fill"></div>
                    <div class="live-slide"><img src="{{ asset('metro/images/5.jpg') }}" data-role="fitImage" data-format="fill"></div>
                </div>
                <div class="tile-label">effect: slideUpDown</div>
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