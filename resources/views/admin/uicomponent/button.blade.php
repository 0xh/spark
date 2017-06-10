@extends('layouts.metro')

@section('content')

<div class="section-wrapper page-heading ">
	<h3>Welcome to Dashboard</h3>
</div>


<div class="section-wrapper bg-white align-center  ">

	<h1>Button</h1>

</div>

<div class="section-wrapper padding-top-20 animated fadeInRightBig ">
	
		<h2 class="padding-top-30" >Push buttons</h2>
		<div class="example" >
			<div class="margin10">
				<button class="button">Default</button>
				<button class="button" disabled>Disabled</button>
				<a class="button">Anchor</a>
				<div class="button">Div</div>
				<span class="button">Span</span>
				<button class="button rounded">Rounded</button>
				<button class="button cycle-button">+</button>
				<button class="button square-button">OK</button>
			</div>
		</div>

		<h2 class="padding-top-30" >With icons</h2>
		<p class="text-small">support both: icon fonts and images</p>
		<div class="example" >
			<div class="margin10">
				<button class="button"><span class="mif-checkmark"></span> Font icon</button>
				<button class="button"><img src="{{asset('metro/images/Checkmark.png')}}"> Image</button>
			</div>
		</div>

		<h2 class="padding-top-30" >Any sizes</h2>
		<div class="example" >
			<div class="margin10">
				<button class="button mini-button">Mini</button>
				<button class="button small-button">Small</button>
				<button class="button">Default</button>
				<button class="button large-button">Large</button>
			</div>
			<div class="margin10">
				<button class="button mini-button"><span class="mif-3d-rotation"></span> Mini</button>
				<button class="button small-button"><span class="mif-3d-rotation"></span> Small</button>
				<button class="button"><span class="mif-3d-rotation"></span> Button</button>
				<button class="button large-button"><span class="mif-3d-rotation"></span> Large</button>
			</div>
			<div class="margin10">
				<button class="square-button mini-button">M</button>
				<button class="square-button small-button">S</button>
				<button class="square-button">D</button>
				<button class="square-button large-button">L</button>
				<button class="square-button mini-button"><span class="mif-3d-rotation"></span></button>
				<button class="square-button small-button"><span class="mif-3d-rotation"></span></button>
				<button class="square-button"><span class="mif-3d-rotation"></span></button>
				<button class="square-button large-button"><span class="mif-3d-rotation"></span></button>
			</div>
			<div class="margin10">
				<button class="cycle-button mini-button">M</button>
				<button class="cycle-button small-button">S</button>
				<button class="cycle-button">D</button>
				<button class="cycle-button large-button">L</button>
				<button class="cycle-button mini-button"><span class="mif-3d-rotation"></span></button>
				<button class="cycle-button small-button"><span class="mif-3d-rotation"></span></button>
				<button class="cycle-button"><span class="mif-3d-rotation"></span></button>
				<button class="cycle-button large-button"><span class="mif-3d-rotation"></span></button>
			</div>
		</div>

        <h2 class="padding-top-30" >Any colors (predefined and custom)</h2>
        <div class="example" >
            <div class="margin10">
                <button class="button primary">Primary</button>
                <button class="button success">Success</button>
                <button class="button info">Info</button>
                <button class="button danger">Danger</button>
                <button class="button warning">Warning</button>
                <button class="button link">Link</button>
                <button class="button bg-pink bg-active-darkPink fg-white">Custom</button>
            </div>
        </div>

        <h2 class="padding-top-30" >Cool buttons</h2>
        <p class="text-small">with predefined classes</p>
        <div class="example" >
            <div class="margin10">
                <button class="button success block-shadow-success text-shadow">Button</button>
                <button class="button warning block-shadow-warning text-shadow">Button</button>
                <button class="button danger block-shadow-danger text-shadow">Button</button>
                <button class="button info block-shadow-info text-shadow">Button</button>
                <button class="button loading-pulse">Download NOW</button>
                <button class="button loading-pulse lighten primary">Download NOW</button>
                <button class="button loading-cube">Loading...</button>
                <button class="button loading-cube lighten danger">Loading...</button>
            </div>
        </div>

        <h2 class="padding-top-30" >Command button</h2>
        <div class="example" >
            <div class="margin10">
                <button class="command-button">
                    <span class="icon mif-share"></span>
                    Yes, share and connect
                    <small>Use this option for home or work</small>
                </button>
                <button class="command-button icon-right warning">
                    <span class="icon mif-share"></span>
                    Yes, share and connect
                    <small>Use this option for home or work</small>
                </button>
            </div>
        </div>

        <h2 class="padding-top-30" >Toolbars</h2>
        <div class="example" >
            <div class="margin10">
                <div class="toolbar">
                    <div class="toolbar-section">
                        <button class="toolbar-button"><span class="mif-floppy-disk"></span></button>
                        <button class="toolbar-button"><span class="mif-print"></span></button>
                        <button class="toolbar-button"><span class="mif-pencil"></span></button>
                        <button class="toolbar-button">2</button>
                        <button class="toolbar-button">3</button>
                        <button class="toolbar-button">4</button>
                    </div>

                    <div class="toolbar-section">
                        <button class="toolbar-button"><span class="mif-floppy-disk"></span></button>
                        <button class="toolbar-button"><span class="mif-print"></span></button>
                        <button class="toolbar-button"><span class="mif-pencil"></span></button>
                        <button class="toolbar-button">2</button>
                        <button class="toolbar-button">3</button>
                        <button class="toolbar-button">4</button>
                    </div>

                    <div class="toolbar-section rounded">
                        <button class="toolbar-button"><span class="mif-floppy-disk"></span></button>
                        <button class="toolbar-button"><span class="mif-print"></span></button>
                        <button class="toolbar-button"><span class="mif-pencil"></span></button>
                        <button class="toolbar-button">2</button>
                        <button class="toolbar-button">3</button>
                        <button class="toolbar-button">4</button>
                    </div>

                    <div class="toolbar-section no-display">
                        <div class="toolbar-group-check" data-role="group" data-group-type="one-state">
                            <button class="toolbar-button">1.1</button>
                            <button class="toolbar-button">1.2</button>
                            <button class="toolbar-button">1.3</button>
                        </div>
                        <div class="toolbar-group-radio" data-role="group" data-group-type="mutli-state">
                            <button class="toolbar-button">2.1</button>
                            <button class="toolbar-button">2.2</button>
                            <button class="toolbar-button">2.3</button>
                        </div>
                    </div>
                </div>

                <div class="toolbar rounded">
                    <div class="toolbar-section">
                        <button class="toolbar-button"><span class="mif-floppy-disk"></span></button>
                        <button class="toolbar-button"><span class="mif-print"></span></button>
                        <button class="toolbar-button"><span class="mif-pencil"></span></button>
                        <button class="toolbar-button">2</button>
                        <button class="toolbar-button">3</button>
                        <button class="toolbar-button">4</button>
                    </div>

                    <div class="toolbar-section">
                        <button class="toolbar-button"><span class="mif-floppy-disk"></span></button>
                        <button class="toolbar-button"><span class="mif-print"></span></button>
                        <button class="toolbar-button"><span class="mif-pencil"></span></button>
                        <button class="toolbar-button">2</button>
                        <button class="toolbar-button">3</button>
                        <button class="toolbar-button">4</button>
                    </div>

                    <div class="toolbar-section">
                        <button class="toolbar-button"><span class="mif-floppy-disk"></span></button>
                        <button class="toolbar-button"><span class="mif-print"></span></button>
                        <button class="toolbar-button"><span class="mif-pencil"></span></button>
                        <button class="toolbar-button">2</button>
                        <button class="toolbar-button">3</button>
                        <button class="toolbar-button">4</button>
                    </div>
                </div>
            </div>
        </div>


        <h2 class="padding-top-30" >Image button</h2>
        <div class="example" >
            <div class="margin10">
                <button class="image-button">
                    Share this
                    <span class="icon mif-share"></span>
                </button>
                <button class="image-button icon-right">
                    Location
                    <img src="{{ asset('metro/images/location.png') }}" class="icon">
                </button>
                <button class="image-button primary">
                    Share this
                    <span class="icon mif-share bg-darkCobalt"></span>
                </button>
                <a class="image-button bg-pink bg-active-amber fg-white icon-right">
                    Anchor
                    <img src="{{ asset('metro/images/location.png') }}" class="icon bg-darkPink">
                </a>
            </div>
            <div class="margin10">
                <button class="image-button small-button">
                    Share this
                    <span class="icon mif-share"></span>
                </button>
                <button class="image-button icon-right small-button">
                    Location
                    <img src="{{ asset('metro/images/location.png') }}" class="icon">
                </button>
                <button class="image-button primary small-button">
                    Share this
                    <span class="icon mif-share bg-darkCobalt"></span>
                </button>
                <a class="image-button bg-pink bg-active-amber fg-white icon-right small-button">
                    Anchor
                    <img src="{{ asset('metro/images/location.png') }}" class="icon bg-darkPink">
                </a>
            </div>
        </div>

        <h2 class="padding-top-30" >Shortcut button</h2>
        <div class="example" >
            <div class="margin10">
                <a class="shortcut-button">
                    <span class="icon mif-rocket"></span>
                    <span class="title">Rocket</span>
                </a>
                <button class="shortcut-button bg-cyan bg-active-darkBlue fg-white">
                    <span class="icon mif-rocket"></span>
                    <span class="title">Rocket</span>
                    <span class="badge">10</span>
                </button>
            </div>
        </div>

        <h2 class="padding-top-30" >Dropdown button</h2>
        <div class="example" >
            <div class="margin10">
                <div class="dropdown-button">
                    <button class="button dropdown-toggle">Menu</button>
                    <ul class="split-content d-menu" data-role="dropdown">
                        <li><a href="#">Reply</a></li>
                        <li><a href="#">Reply All</a></li>
                        <li><a href="#">Forward</a></li>
                    </ul>
                </div>
                <div class="dropdown-button place-right">
                    <button class="button dropdown-toggle">Menu</button>
                    <ul class="split-content d-menu place-right" data-role="dropdown">
                        <li><a href="#">Reply</a></li>
                        <li><a href="#">Reply All</a></li>
                        <li><a href="#">Forward</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <h2 class="padding-top-30" >Split button</h2>
        <div class="example" >
            <div class="margin10">
                <div class="split-button">
                    <button class="button">Reply</button>
                    <button class="split dropdown-toggle"></button>
                    <ul class="split-content d-menu" data-role="dropdown">
                        <li><a href="#">Reply</a></li>
                        <li><a href="#">Reply All</a></li>
                        <li><a href="#">Forward</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <h2 class="padding-top-30" >Pagination</h2>
        <div class="example" >
            <div class="margin10">
                <div class="pagination">
                    <span class="item">&lt;</span>
                    <span class="item">1</span>
                    <span class="item">2</span>
                    <span class="item">3</span>
                    <span class="item current">4</span>
                    <span class="item disabled">5</span>
                    <span class="item spaces">...</span>
                    <span class="item">7</span>
                    <span class="item">8</span>
                    <span class="item">&gt;</span>
                </div>
                <div class="pagination rounded">
                    <span class="item">&lt;</span>
                    <span class="item">1</span>
                    <span class="item">2</span>
                    <span class="item">3</span>
                    <span class="item current">4</span>
                    <span class="item disabled">5</span>
                    <span class="item spaces">...</span>
                    <span class="item">7</span>
                    <span class="item">8</span>
                    <span class="item">&gt;</span>
                </div>
                <div class="pagination cycle">
                    <span class="item">&lt;</span>
                    <span class="item">1</span>
                    <span class="item">2</span>
                    <span class="item">3</span>
                    <span class="item current">4</span>
                    <span class="item disabled">5</span>
                    <span class="item spaces">...</span>
                    <span class="item">7</span>
                    <span class="item">8</span>
                    <span class="item">9</span>
                    <span class="item">10</span>
                    <span class="item">100</span>
                    <span class="item">&gt;</span>
                </div>
                <div class="pagination no-border">
                    <span class="item">&lt;</span>
                    <span class="item">1</span>
                    <span class="item">2</span>
                    <span class="item">3</span>
                    <span class="item current">4</span>
                    <span class="item disabled">5</span>
                    <span class="item spaces">...</span>
                    <span class="item">7</span>
                    <span class="item">8</span>
                    <span class="item">9</span>
                    <span class="item">10</span>
                    <span class="item">100</span>
                    <span class="item">1000</span>
                    <span class="item">&gt;</span>
                </div>
            </div>
        </div>

        <h2 class="padding-top-30" >Breadcrumbs</h2>
        <div class="example" >
            <div class="margin10">
                <h5>breadcrumbs</h5>
                <ul class="breadcrumbs">
                    <li><a href="#"><span class="icon mif-home"></span></a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Download</a></li>
                    <li><a href="#">Windows 10</a></li>
                </ul>
                <ul class="breadcrumbs dark">
                    <li><a href="#"><span class="icon mif-home"></span></a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Download</a></li>
                    <li><a href="#">Windows 10</a></li>
                </ul>
                <br />
                <h5>breadcrumbs2</h5>
                <ul class="breadcrumbs2">
                    <li><a href="#"><span class="icon mif-home"></span></a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Download</a></li>
                    <li><a href="#">Windows 10</a></li>
                </ul>
                <ul class="breadcrumbs2 small">
                    <li><a href="#"><span class="icon mif-home"></span></a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Download</a></li>
                    <li><a href="#">Windows 10</a></li>
                </ul>
                <ul class="breadcrumbs2 mini">
                    <li><a href="#"><span class="icon mif-home"></span></a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Download</a></li>
                    <li><a href="#">Windows 10</a></li>
                </ul>
            </div>
        </div>





</div>




<script language="javascript" type="text/javascript">

jQuery(document).ready(function($){
});

</script>

@endsection