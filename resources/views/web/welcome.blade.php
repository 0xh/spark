@extends('layouts.metroweb')

@section('content')

				<div class="container" >
					<div class="grid no-margin-top" >
						<div class="row cells align-center padding-top-90">
							<div class="cell fg-white text-shadow ">
								<div class="leader">Evolutly</div>
								<div class="header">"Easy Task Management"</div>
							</div>
						</div>
						<div class="row cells3 align-center padding-top-50">
							<div class="cell bg-red padding10">
								<a href="../docs/" class="leader fg-white" target="help"><span class="mif-books"></span><br>Docs</a>
							</div>
							<div class="cell bg-yellow padding10">
								<a href="./admin/dashboard" class="leader fg-white" target="laravel"><span class="fa fa-dashboard"></span><br>Laravel Admin</a>
							</div>
							<div class="cell bg-green padding10">
								<a href="{{ route('login') }}" class="leader fg-white" target="laravel"><span class="fa fa-sign-in"></span><br>Laravel Login</a>
							</div>
						</div>
					</div>
				</div>


@endsection
