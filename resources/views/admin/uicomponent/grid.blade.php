@extends('layouts.metro')

@section('content')

<div class="section-wrapper page-heading ">
	<h3>Welcome to Dashboard</h3>
</div>


<div class="section-wrapper bg-white align-center ">

	<h1>Grid System</h1>

</div>

<div class="section-wrapper animated fadeInRightBig">
	<div class="margin-bottom-20"></div>

        <div class="example" >
            <h5>Default grid</h5>
            <div class="grid demo-grid">
                <div class="row cells3">
                    <div class="cell debug">1</div>
                    <div class="cell debug">2</div>
                    <div class="cell debug">3</div>
                </div>
                <div class="row cells12">
                    <div class="cell debug">1</div>
                    <div class="cell debug colspan10">2</div>
                    <div class="cell debug">3</div>
                </div>
                <div class="margin-bottom-5">divide into <span class="tag info">5 columns</span></div>
                <div class="row cells5">
                    <div class="cell debug">1</div>
                    <div class="cell debug colspan3">2</div>
                    <div class="cell debug">3</div>
                </div>
                <div class="row cells12">
                    <div class="cell debug">1</div>
                    <div class="cell debug">2</div>
                    <div class="cell debug">3</div>
                    <div class="cell debug">4</div>
                    <div class="cell debug">5</div>
                    <div class="cell debug">6</div>
                    <div class="cell debug">7</div>
                    <div class="cell debug">8</div>
                    <div class="cell debug">9</div>
                    <div class="cell debug">10</div>
                    <div class="cell debug">11</div>
                    <div class="cell debug">12</div>
                </div>
            </div>
        </div>

        <div class="example" >
            <h5>Offset for default grid</h5>
            <div class="grid demo-grid">
                <div class="row cells12">
                    <div class="cell offset11">offset11</div>
                </div>
                <div class="row cells12">
                    <div class="cell offset10 colspan2">offset10</div>
                </div>
                <div class="row cells12">
                    <div class="cell offset9 colspan3">offset9</div>
                </div>
                <div class="row cells12">
                    <div class="cell offset8 colspan4">offset8</div>
                </div>
                <div class="row cells12">
                    <div class="cell offset7 colspan5">offset7</div>
                </div>
                <div class="row cells12">
                    <div class="cell offset6 colspan6">offset6</div>
                </div>
                <div class="row cells12">
                    <div class="cell offset5 colspan7">offset5</div>
                </div>
                <div class="row cells12">
                    <div class="cell offset4 colspan8">offset4</div>
                </div>
                <div class="row cells12">
                    <div class="cell offset3 colspan9">offset3</div>
                </div>
                <div class="row cells12">
                    <div class="cell offset2 colspan10">offset2</div>
                </div>
                <div class="row cells12">
                    <div class="cell offset1 colspan11">offset1</div>
                </div>
                <div class="row">
                    <div class="cell">no offset</div>
                </div>
            </div>
        </div>

        <div class="example" >
            <h5>Condensed grid</h5>
            <div class="grid condensed demo-grid">
                <div class="row cells3">
                    <div class="cell debug">1</div>
                    <div class="cell debug">2</div>
                    <div class="cell debug">3</div>
                </div>
                <div class="row cells12">
                    <div class="cell debug">1</div>
                    <div class="cell debug colspan10">2</div>
                    <div class="cell debug">3</div>
                </div>
                <div class="row cells5">
                    <div class="cell debug">1</div>
                    <div class="cell debug colspan3">2</div>
                    <div class="cell debug">3</div>
                </div>
                <div class="row cells12">
                    <div class="cell debug">1</div>
                    <div class="cell debug">2</div>
                    <div class="cell debug">3</div>
                    <div class="cell debug">4</div>
                    <div class="cell debug">5</div>
                    <div class="cell debug">6</div>
                    <div class="cell debug">7</div>
                    <div class="cell debug">8</div>
                    <div class="cell debug">9</div>
                    <div class="cell debug">10</div>
                    <div class="cell debug">11</div>
                    <div class="cell debug">12</div>
                </div>
            </div>
        </div>

        <div class="example" >
            <h5>Offset for condensed grid</h5>
            <div class="grid condensed demo-grid">
                <div class="row cells12">
                    <div class="cell offset11">offset11</div>
                </div>
                <div class="row cells12">
                    <div class="cell offset10 colspan2">offset10</div>
                </div>
                <div class="row cells12">
                    <div class="cell offset9 colspan3">offset9</div>
                </div>
                <div class="row cells12">
                    <div class="cell offset8 colspan4">offset8</div>
                </div>
                <div class="row cells12">
                    <div class="cell offset7 colspan5">offset7</div>
                </div>
                <div class="row cells12">
                    <div class="cell offset6 colspan6">offset6</div>
                </div>
                <div class="row cells12">
                    <div class="cell offset5 colspan7">offset5</div>
                </div>
                <div class="row cells12">
                    <div class="cell offset4 colspan8">offset4</div>
                </div>
                <div class="row cells12">
                    <div class="cell offset3 colspan9">offset3</div>
                </div>
                <div class="row cells12">
                    <div class="cell offset2 colspan10">offset2</div>
                </div>
                <div class="row cells12">
                    <div class="cell offset1 colspan11">offset1</div>
                </div>
                <div class="row">
                    <div class="cell">no offset</div>
                </div>
            </div>
        </div>



</div>




<script language="javascript" type="text/javascript">

jQuery(document).ready(function($){
});

</script>

@endsection