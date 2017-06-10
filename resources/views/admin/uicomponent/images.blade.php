@extends('layouts.metro')

@section('content')

<div class="section-wrapper page-heading ">
	<h3>Welcome to Dashboard</h3>
</div>


<div class="section-wrapper bg-white align-center  ">

	<h1>Images</h1>

</div>

<div class="section-wrapper padding-top-20  animated fadeInRightBig">

        <div class="example" data-text="containers">
            <div class="grid no-margin-top">
                <div class="row cells6">
                    <div class="cell">
                        <h5>image-container</h5>
                        <div class="image-container">
                            <div class="frame"><img src="{{asset('metro/images/1.jpg')}}"></div>
                        </div>
                    </div>
                    <div class="cell">
                        <h5>&.rounded</h5>
                        <div class="image-container rounded">
                            <div class="frame"><img src="{{asset('metro/images/1.jpg')}}"></div>
                        </div>
                    </div>
                    <div class="cell">
                        <h5>&.bordered</h5>
                        <div class="image-container bordered">
                            <div class="frame"><img src="{{asset('metro/images/1.jpg')}}"></div>
                        </div>
                    </div>
                    <div class="cell">
                        <h5>&.polaroid</h5>
                        <div class="image-container polaroid">
                            <div class="frame"><img src="{{asset('metro/images/1.jpg')}}"></div>
                        </div>
                    </div>
                    <div class="cell">
                        <h5>&.handing</h5>
                        <div class="image-container bordered handing image-format-hd">
                            <div class="frame">
                                <img src="{{asset('metro/images/1.jpg')}}">
                            </div>
                        </div>
                    </div>
                    <div class="cell">
                        <h5>&.handing.ani</h5>
                        <div class="image-container bordered handing ani image-format-hd">
                            <div class="frame">
                                <img src="{{asset('metro/images/1.jpg')}}">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row cells3">
                    <div class="cell">
                        <h5>custom color overlay</h5>
                        <div class="image-container">
                            <div class="frame"><img src="{{asset('metro/images/1.jpg')}}"></div>
                            <div class="image-overlay op-green">
                                <h2>Image title</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="cell">
                        <h5>image-container with overlay</h5>
                        <div class="image-container">
                            <div class="frame"><img src="{{asset('metro/images/2.jpg')}}"></div>
                            <div class="image-overlay">
                                <h2>Image title</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="cell">
                        <h5>image-container selected</h5>
                        <div class="image-container element-selected">
                            <div class="frame"><img src="{{asset('metro/images/4.jpg')}}"></div>
                            <div class="image-overlay">
                                <h2>Image title</h2>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="example" data-text="fitImage">
            <div class="grid">
                <h5>Source images</h5>
                <div class="row cells6">
                    <div class="cell">
                        <img src="{{asset('metro/images/grid2.jpg')}}">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/2.jpg')}}">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/myface.jpg')}}">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/4.jpg')}}">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/5.jpg')}}">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/me.jpg')}}">
                    </div>
                </div>
                <h5>fitImage plugin (data-format='hd') 16x9</h5>
                <div class="row cells6">
                    <div class="cell">
                        <img src="{{asset('metro/images/grid2.jpg')}}" data-role="fitImage">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/2.jpg')}}" data-role="fitImage">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/myface.jpg')}}" data-role="fitImage">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/4.jpg')}}" data-role="fitImage">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/5.jpg')}}" data-role="fitImage">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/me.jpg')}}" data-role="fitImage">
                    </div>
                </div>
                <h5>fitImage plugin (data-format='sd') 4x3</h5>
                <div class="row cells6">
                    <div class="cell">
                        <img src="{{asset('metro/images/grid2.jpg')}}" data-role="fitImage" data-format="sd">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/2.jpg')}}" data-role="fitImage" data-format="sd">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/myface.jpg')}}" data-role="fitImage" data-format="sd">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/4.jpg')}}" data-role="fitImage" data-format="sd">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/5.jpg')}}" data-role="fitImage" data-format="sd">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/me.jpg')}}" data-role="fitImage" data-format="sd">
                    </div>
                </div>
                <h5>fitImage plugin (data-format='square')</h5>
                <div class="row cells6">
                    <div class="cell">
                        <img src="{{asset('metro/images/grid2.jpg')}}" data-role="fitImage" data-format="square">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/2.jpg')}}" data-role="fitImage" data-format="square">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/myface.jpg')}}" data-role="fitImage" data-format="square">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/4.jpg')}}" data-role="fitImage" data-format="square">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/5.jpg')}}" data-role="fitImage" data-format="square">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/me.jpg')}}" data-role="fitImage" data-format="square">
                    </div>
                </div>

                <h5>fitImage plugin (data-format='square' data-type='diamond')</h5>
                <div class="row cells6">
                    <div class="cell">
                        <img src="{{asset('metro/images/grid2.jpg')}}" data-role="fitImage" data-format="square" data-type="diamond">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/2.jpg')}}" data-role="fitImage" data-format="square" data-type="diamond">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/myface.jpg')}}" data-role="fitImage" data-format="square" data-type="diamond">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/4.jpg')}}" data-role="fitImage" data-format="square" data-type="diamond">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/5.jpg')}}" data-role="fitImage" data-format="square" data-type="diamond">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/me.jpg')}}" data-role="fitImage" data-format="square" data-type="diamond">
                    </div>
                </div>

                <h5>fitImage plugin (data-format='cycle')</h5>
                <div class="row cells6">
                    <div class="cell">
                        <img src="{{asset('metro/images/grid2.jpg')}}" data-role="fitImage" data-format="cycle" data-overlay="...">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/2.jpg')}}" data-role="fitImage" data-format="cycle">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/myface.jpg')}}" data-role="fitImage" data-format="cycle">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/4.jpg')}}" data-role="fitImage" data-format="cycle">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/5.jpg')}}" data-role="fitImage" data-format="cycle">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/me.jpg')}}" data-role="fitImage" data-format="cycle">
                    </div>
                </div>
                <h5>fitImage plugin (data-type='bordered')</h5>
                <div class="row cells6">
                    <div class="cell">
                        <img src="{{asset('metro/images/grid2.jpg')}}" data-role="fitImage" data-overlay="you text here..."  data-type="bordered">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/2.jpg')}}" data-role="fitImage" data-overlay="you text here..." data-type="bordered">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/myface.jpg')}}" data-role="fitImage" data-overlay="you text here..." data-type="bordered">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/4.jpg')}}" data-role="fitImage" data-overlay="you text here..." data-type="bordered">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/5.jpg')}}" data-role="fitImage" data-overlay="you text here..." data-type="bordered">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/me.jpg')}}" data-role="fitImage" data-overlay="you text here..." data-type="bordered">
                    </div>
                </div>
                <h5>fitImage plugin (data-type='handing-ani')</h5>
                <div class="row cells6">
                    <div class="cell">
                        <img src="{{asset('metro/images/grid2.jpg')}}" data-role="fitImage" data-overlay="you text here..."  data-type="handing-ani">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/2.jpg')}}" data-role="fitImage" data-overlay="you text here..." data-type="handing-ani">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/myface.jpg')}}" data-role="fitImage" data-overlay="you text here..." data-type="handing-ani">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/4.jpg')}}" data-role="fitImage" data-overlay="you text here..." data-type="handing-ani">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/5.jpg')}}" data-role="fitImage" data-overlay="you text here..." data-type="handing-ani">
                    </div>
                    <div class="cell">
                        <img src="{{asset('metro/images/me.jpg')}}" data-role="fitImage" data-overlay="you text here..." data-type="handing-ani">
                    </div>
                </div>
            </div>
        </div>
    </div>





</div>




<script language="javascript" type="text/javascript">

jQuery(document).ready(function($){
});

</script>

@endsection