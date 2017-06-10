@extends('layouts.metro')

@section('content')


<div data-role="yield" data-source="mysub"></div>

<div class="section-wrapper page-heading">
	<h3>Price Table</h3>
</div>

<div class="section-wrapper padding10 animated fadeInRightBig">
	<div class="grid">
		<div class="row cells4">
			<div class="cell bg-darkViolet shadow">
				
				<div class="padding30 align-center">
					<div class="img-circle price-icon ">
						<span class="mif-dice"></span>
					</div>
				</div>
				<div class="price-heading padding10 align-center">
					basic package
				</div>
				<div class="bg-white">
					<ul class="price-itemlist nolist">
						<li>
							<span class="icon fa fa-check fg-lime"></span>
							<span class="text">Storage</span>
						</li>
						<li>
							<span class="icon fa fa-check fg-lime"></span>
							<span class="text">Storage</span>
						</li>
						<li>
							<span class="icon fa fa-check fg-lime"></span>
							<span class="text">Storage</span>
						</li>
						<li>
							<span class="icon fa fa-times fg-red"></span>
							<span class="text">access</span>
						</li>
						<li>
							<span class="icon fa fa-times fg-red"></span>
							<span class="text">access</span>
						</li>
						<li>
							<span class="icon fa fa-times fg-red"></span>
							<span class="text">access</span>
						</li>
					</ul>
				</div>
				<div class="padding20 align-center">
					<a href="#" class="price-button ">Sign Up</a>
				</div>

			</div>
			<div class="cell bg-lightBlue shadow">
				
				<div class="padding30 align-center price-leader">
					<label class=" ">Best Value</label>
					<div class="img-circle price-icon ">
						<span class="mif-dice"></span>
					</div>
				</div>
				<div class="price-heading padding10 align-center">
					basic package
				</div>
				<div class="bg-white">
					<ul class="price-itemlist nolist">
						<li>
							<span class="icon fa fa-check fg-lime"></span>
							<span class="text">Storage</span>
						</li>
						<li>
							<span class="icon fa fa-check fg-lime"></span>
							<span class="text">Storage</span>
						</li>
						<li>
							<span class="icon fa fa-check fg-lime"></span>
							<span class="text">Storage</span>
						</li>
						<li>
							<span class="icon fa fa-check fg-lime"></span>
							<span class="text">Storage</span>
						</li>
						<li>
							<span class="icon fa fa-times fg-red"></span>
							<span class="text">access</span>
						</li>
						<li>
							<span class="icon fa fa-times fg-red"></span>
							<span class="text">access</span>
						</li>
					</ul>
				</div>
				<div class="padding20 align-center">
					<a href="#" class="price-button ">Sign Up</a>
				</div>

			</div>

			<div class="cell bg-emerald shadow">
				
				<div class="padding30 align-center price-leader">
					<div class="img-circle price-icon ">
						<span class="mif-dice"></span>
					</div>
				</div>
				<div class="price-heading padding10 align-center">
					basic package
				</div>
				<div class="bg-white">
					<ul class="price-itemlist nolist">
						<li>
							<span class="icon fa fa-check fg-lime"></span>
							<span class="text">Storage</span>
						</li>
						<li>
							<span class="icon fa fa-check fg-lime"></span>
							<span class="text">Storage</span>
						</li>
						<li>
							<span class="icon fa fa-check fg-lime"></span>
							<span class="text">Storage</span>
						</li>
						<li>
							<span class="icon fa fa-check fg-lime"></span>
							<span class="text">Storage</span>
						</li>
						<li>
							<span class="icon fa fa-check fg-lime"></span>
							<span class="text">Storage</span>
						</li>
						<li>
							<span class="icon fa fa-times fg-red"></span>
							<span class="text">access</span>
						</li>
					</ul>
				</div>
				<div class="padding20 align-center">
					<a href="#" class="price-button ">Sign Up</a>
				</div>

			</div>
			<div class="cell bg-crimson shadow">
				
				<div class="padding30 align-center">
					<div class="img-circle price-icon ">
						<span class="mif-dice"></span>
					</div>
				</div>
				<div class="price-heading padding10 align-center">
					basic package
				</div>
				<div class="bg-white">
					<ul class="price-itemlist nolist">
						<li>
							<span class="icon fa fa-check fg-lime"></span>
							<span class="text">Storage</span>
						</li>
						<li>
							<span class="icon fa fa-check fg-lime"></span>
							<span class="text">Storage</span>
						</li>
						<li>
							<span class="icon fa fa-check fg-lime"></span>
							<span class="text">Storage</span>
						</li>
						<li>
							<span class="icon fa fa-check fg-lime"></span>
							<span class="text">Storage</span>
						</li>
						<li>
							<span class="icon fa fa-check fg-lime"></span>
							<span class="text">Storage</span>
						</li>
						<li>
							<span class="icon fa fa-check fg-lime"></span>
							<span class="text">Storage</span>
						</li>
					</ul>
				</div>
				<div class="padding20 align-center">
					<a href="#" class="price-button ">Sign Up</a>
				</div>

			</div>
		</div>
	</div>
</div>

<style>
.price-leader {overflow: hidden;position: relative;}
.price-leader > label {padding: 5px;width: 200px;transform: rotate(-45deg);-webkit-transform: rotate(-45deg);-moz-transform: rotate(-45deg);-o-transform: rotate(-45deg);display: inline-block;position: absolute;left: -60px;text-align: center;top: 25px;font-size: 20px;font-weight: bold;color: #fff;background-color: #f00;}
.price-icon {width: 100px; height: 100px;margin:0px auto;background-color: rgba(255,255,255,0.2);color: #fff;}
.price-icon > span {padding: 25px;font-size: 50px; }
.price-heading {text-transform: uppercase; font-weight: bold; background-color: rgba(0,0,0,0.3);color: #fff;}
.price-itemlist li {height: 2rem;line-height: 2rem;}
.price-itemlist li:nth-child(odd) {background-color: #e9e9e9;}
.price-itemlist li .icon {float: left; width: 2rem;margin: 0px 10px;padding: 0.5rem;}
.price-button {background-color: rgba(0,0,0,0.3);color: #fff;text-transform: uppercase;text-decoration: none;padding:10px;font-weight: bold;min-width: 100px;display: inline-block;}
yield {display: none;}
</style>



@endsection


