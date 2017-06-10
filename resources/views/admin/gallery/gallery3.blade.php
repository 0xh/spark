@extends('layouts.metro')

@section('content')

<div class="section-wrapper page-heading ">
	<h3>Welcome to Dashboard</h3>
</div>

<div class="section-wrapper bg-white margin-bottom-40 align-center ">
	
	<h1>Media Gallery</h1>

</div>


<div class="section-wrapper animated fadeInRightBig">
	<div class="" >

		<div class="grid condensed " >

			<div class="row cells4">
				<div class="cell">

					<!-- thumbnail -->
					<div class="thumbnail thumbnail-album animation animating delay fadeInLeft">
						<!-- media -->
						<div class="media">
							<!-- indicator -->
							<div class="indicator"><span class="spinner5 mif-ani-spin"></span></div>
							<!--/ indicator -->
							<!-- toolbar overlay -->
							<div class="overlay">
								<div class="toolbar">
									<a href="javascript:void(0);" class="button img-circle bg-teal" title="upload to collection"><i class="fa fa-upload"></i></a>
									<a href="{{asset('images/gallery1/gallery-01.jpg')}}" class="button img-circle success" data-lightbox="gallery-3" title="watch collection"><i class="fa fa-star"></i></a>
									<a href="javascript:void(0);" class="button img-circle bg-teal" title="love this collection"><i class="fa fa-heart"></i></a>
								</div>
							</div>
							<!--/ toolbar overlay -->
							<img data-toggle="unveil" src="{{asset('images/gallery1/gallery-01.jpg')}}" data-src="{{asset('images/gallery1/gallery-01.jpg')}}" alt="Cover" width="100%" class="unveiled delay animation animating " />
						</div>
						<!--/ media -->
						<!-- caption -->
						<div class="caption">
							<h5 class="semibold mt0 mb5">Train Cabin</h5>
							<p class="text-muted mb5 ellipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
							<p class="ellipsis">
								<a class="tag info" href="javascript:void(0);">#Lorem</a>&nbsp;
								<a class="tag success" href="javascript:void(0);">#Ipsum</a>
							</p>
						</div>
						<!--/ caption -->
						<hr class="thin no-margin-v bg-grayLighter">
						<ul class="meta">
							<li>
								<div class="img-group img-group-stack">
									<img src="{{asset('user/images/01.jpg')}}" class="circle" alt="" />
									<img src="{{asset('user/images/02.jpg')}}" class="circle" alt="" />
								</div>
							</li>
							<li>
								<p class="nm"><a href="javascript:void(0);" class="semibold">2 people</a> love this</p>
							</li>
						</ul>
					</div>
					<!--/ thumbnail -->

				</div>

				<div class="cell">

					<!-- thumbnail -->
					<div class="thumbnail thumbnail-album animation animating delay fadeInLeft">
						<!-- media -->
						<div class="media">
							<!-- indicator -->
							<div class="indicator"><span class="spinner5 mif-ani-spin"></span></div>
							<!--/ indicator -->
							<!-- toolbar overlay -->
							<div class="overlay">
								<div class="toolbar">
									<a href="javascript:void(0);" class="button img-circle bg-teal" title="upload to collection"><i class="fa fa-upload"></i></a>
									<a href="{{asset('images/gallery1/gallery-02.jpg')}}" class="button img-circle success" data-lightbox="gallery-3" title="watch collection"><i class="fa fa-star"></i></a>
									<a href="javascript:void(0);" class="button img-circle bg-teal" title="love this collection"><i class="fa fa-heart"></i></a>
								</div>
							</div>
							<!--/ toolbar overlay -->
							<img data-toggle="unveil" src="{{asset('images/gallery1/gallery-02.jpg')}}" data-src="{{asset('images/gallery1/gallery-02.jpg')}}" alt="Cover" width="100%" class="unveiled delay animation animating " />
						</div>
						<!--/ media -->
						<!-- caption -->
						<div class="caption">
							<h5 class="semibold mt0 mb5">Rail Way</h5>
							<p class="text-muted mb5 ellipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
							<p class="ellipsis">
								<a class="tag info" href="javascript:void(0);">#Lorem</a>&nbsp;
								<a class="tag success" href="javascript:void(0);">#Ipsum</a>
							</p>
						</div>
						<!--/ caption -->
						<hr class="thin no-margin-v bg-grayLighter">
						<ul class="meta">
							<li>
								<div class="img-group img-group-stack">
									<img src="{{asset('user/images/03.jpg')}}" class="circle" alt="" />
									<span class="more img-circle">2+</span>
								</div>
							</li>
							<li>
								<p class="nm"><a href="javascript:void(0);" class="semibold">3 people</a> love this</p>
							</li>
						</ul>
					</div>
					<!--/ thumbnail -->

				</div>
				
				<div class="cell">

					<!-- thumbnail -->
					<div class="thumbnail thumbnail-album animation animating delay fadeInRight">
						<!-- media -->
						<div class="media">
							<!-- indicator -->
							<div class="indicator"><span class="spinner5 mif-ani-spin"></span></div>
							<!--/ indicator -->
							<!-- toolbar overlay -->
							<div class="overlay">
								<div class="toolbar">
									<a href="javascript:void(0);" class="button img-circle bg-teal" title="upload to collection"><i class="fa fa-upload"></i></a>
									<a href="{{asset('images/gallery1/gallery-03.jpg')}}" class="button img-circle success" data-lightbox="gallery-3" title="watch collection"><i class="fa fa-star"></i></a>
									<a href="javascript:void(0);" class="button img-circle bg-teal" title="love this collection"><i class="fa fa-heart"></i></a>
								</div>
							</div>
							<!--/ toolbar overlay -->
							<img data-toggle="unveil" src="{{asset('images/gallery1/gallery-03.jpg')}}" data-src="{{asset('images/gallery1/gallery-03.jpg')}}" alt="Cover" width="100%" class="unveiled delay animation animating " />
						</div>
						<!--/ media -->
						<!-- caption -->
						<div class="caption">
							<h5 class="semibold mt0 mb5">Bicycle</h5>
							<p class="text-muted mb5 ellipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
							<p class="ellipsis">
								<a class="tag info" href="javascript:void(0);">#Lorem</a>&nbsp;
								<a class="tag success" href="javascript:void(0);">#Ipsum</a>
							</p>
						</div>
						<!--/ caption -->
						<hr class="thin no-margin-v bg-grayLighter">
						<ul class="meta">
							<li>
								<div class="img-group img-group-stack">
									<img src="{{asset('user/images/04.jpg')}}" class="circle" alt="" />
								</div>
							</li>
							<li>
								<p class="nm"><a href="javascript:void(0);" class="semibold">Jaya</a> love this</p>
							</li>
						</ul>
					</div>
						<!--/ thumbnail -->

				</div>
				
				<div class="cell">

					<!-- thumbnail -->
					<div class="thumbnail thumbnail-album animation animating delay fadeInRight">
						<!-- media -->
						<div class="media">
							<!-- indicator -->
							<div class="indicator"><span class="spinner5 mif-ani-spin"></span></div>
							<!--/ indicator -->
							<!-- toolbar overlay -->
							<div class="overlay">
								<div class="toolbar">
									<a href="javascript:void(0);" class="button img-circle bg-teal" title="upload to collection"><i class="fa fa-upload"></i></a>
									<a href="{{asset('images/gallery1/gallery-07.jpg')}}" class="button img-circle success" data-lightbox="gallery-3" title="watch collection"><i class="fa fa-star"></i></a>
									<a href="javascript:void(0);" class="button img-circle bg-teal" title="love this collection"><i class="fa fa-heart"></i></a>
								</div>
							</div>
							<!--/ toolbar overlay -->
							<img data-toggle="unveil" src="{{asset('images/gallery1/gallery-07.jpg')}}" data-src="{{asset('images/gallery1/gallery-07.jpg')}}" alt="Cover" width="100%" class="unveiled delay animation animating " />
						</div>
						<!--/ media -->
						<!-- caption -->
						<div class="caption">
							<h5 class="semibold mt0 mb5">London Bridge</h5>
							<p class="text-muted mb5 ellipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
							<p class="ellipsis">
								<a class="tag info" href="javascript:void(0);">#Lorem</a>&nbsp;
								<a class="tag success" href="javascript:void(0);">#Ipsum</a>
							</p>
						</div>
						<!--/ caption -->
						<hr class="thin no-margin-v bg-grayLighter">
						<ul class="meta">
							<li>
								<div class="img-group img-group-stack">
									<span class="more img-circle"><span class="fa fa-user icon"></span></span>
								</div>
							</li>
							<li>
								<p class="nm"><a href="javascript:void(0);" class="semibold">Anonymous</a> love this</p>
							</li>
						</ul>
					</div>
					<!--/ thumbnail -->

				</div>

			</div>
			<div class="row cells3">
				
				<div class="cell">

					<!-- thumbnail -->
					<div class="thumbnail thumbnail-album animation animating delay fadeInLeft">
						<!-- media -->
						<div class="media">
							<!-- indicator -->
							<div class="indicator"><span class="spinner5 mif-ani-spin"></span></div>
							<!--/ indicator -->
							<!-- toolbar overlay -->
							<div class="overlay">
								<div class="toolbar">
									<a href="javascript:void(0);" class="button img-circle bg-teal" title="upload to collection"><i class="fa fa-upload"></i></a>
									<a href="{{asset('images/gallery1/gallery-04.jpg')}}" class="button img-circle success" data-lightbox="gallery-3" title="watch collection"><i class="fa fa-star"></i></a>
									<a href="javascript:void(0);" class="button img-circle bg-teal" title="love this collection"><i class="fa fa-heart"></i></a>
								</div>
							</div>
							<!--/ toolbar overlay -->
							<img data-toggle="unveil" src="{{asset('images/gallery1/gallery-04.jpg')}}" data-src="{{asset('images/gallery1/gallery-04.jpg')}}" alt="Cover" width="100%" class="unveiled delay animation animating " />
						</div>
						<!--/ media -->
						<!-- caption -->
						<div class="caption">
							<h5 class="semibold mt0 mb5">Nature</h5>
							<p class="text-muted mb5 ellipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
							<p class="ellipsis">
								<a class="tag info" href="javascript:void(0);">#Lorem</a>&nbsp;
								<a class="tag success" href="javascript:void(0);">#Ipsum</a>
							</p>
						</div>
						<!--/ caption -->
						<hr class="thin no-margin-v bg-grayLighter">
						<ul class="meta">
							<li>
								<div class="img-group img-group-stack">
									<img src="{{asset('user/images/01.jpg')}}" class="circle" alt="" />
									<img src="{{asset('user/images/02.jpg')}}" class="circle" alt="" />
									<span class="more img-circle">6+</span>
								</div>
							</li>
							<li>
								<p class="nm"><a href="javascript:void(0);" class="semibold">8 people</a> love this</p>
							</li>
						</ul>
					</div>
					<!--/ thumbnail -->

				</div>
				
				<div class="cell">

					<!-- thumbnail -->
					<div class="thumbnail thumbnail-album animation animating delay fadeInUp">
						<!-- media -->
						<div class="media">
							<!-- indicator -->
							<div class="indicator"><span class="spinner5 mif-ani-spin"></span></div>
							<!--/ indicator -->
							<!-- toolbar overlay -->
							<div class="overlay">
								<div class="toolbar">
									<a href="javascript:void(0);" class="button img-circle bg-teal" title="upload to collection"><i class="fa fa-upload"></i></a>
									<a href="{{asset('images/gallery1/gallery-05.jpg')}}" class="button img-circle success" data-lightbox="gallery-3" title="watch collection"><i class="fa fa-star"></i></a>
									<a href="javascript:void(0);" class="button img-circle bg-teal" title="love this collection"><i class="fa fa-heart"></i></a>
								</div>
							</div>
							<!--/ toolbar overlay -->
							<img data-toggle="unveil" src="{{asset('images/gallery1/gallery-05.jpg')}}" data-src="{{asset('images/gallery1/gallery-05.jpg')}}" alt="Cover" width="100%" class="unveiled delay animation animating " />
						</div>
						<!--/ media -->
						<!-- caption -->
						<div class="caption">
							<h5 class="semibold mt0 mb5">Speed Train</h5>
							<p class="text-muted mb5 ellipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
							<p class="ellipsis">
								<a class="tag info" href="javascript:void(0);">#Lorem</a>&nbsp;
								<a class="tag success" href="javascript:void(0);">#Ipsum</a>
							</p>
						</div>
						<!--/ caption -->
						<hr class="thin no-margin-v bg-grayLighter">
						<ul class="meta">
							<li>
								<div class="img-group img-group-stack">
									<img src="{{asset('user/images/01.jpg')}}" class="circle" alt="" />
									<img src="{{asset('user/images/02.jpg')}}" class="circle" alt="" />
									<span class="more img-circle">6+</span>
								</div>
							</li>
							<li>
								<p class="nm"><a href="javascript:void(0);" class="semibold">8 people</a> love this</p>
							</li>
						</ul>
					</div>
					<!--/ thumbnail -->

				</div>
				
				<div class="cell">

					<!-- thumbnail -->
					<div class="thumbnail thumbnail-album animation animating delay fadeInRight">
						<!-- media -->
						<div class="media">
							<!-- indicator -->
							<div class="indicator"><span class="spinner5 mif-ani-spin"></span></div>
							<!--/ indicator -->
							<!-- toolbar overlay -->
							<div class="overlay">
								<div class="toolbar">
									<a href="javascript:void(0);" class="button img-circle bg-teal" title="upload to collection"><i class="fa fa-upload"></i></a>
									<a href="{{asset('images/gallery1/gallery-06.jpg')}}" class="button img-circle success" data-lightbox="gallery-3" title="watch collection"><i class="fa fa-star"></i></a>
									<a href="javascript:void(0);" class="button img-circle bg-teal" title="love this collection"><i class="fa fa-heart"></i></a>
								</div>
							</div>
							<!--/ toolbar overlay -->
							<img data-toggle="unveil" src="{{asset('images/gallery1/gallery-06.jpg')}}" data-src="{{asset('images/gallery1/gallery-06.jpg')}}" alt="Cover" width="100%" class="unveiled delay animation animating " />
						</div>
						<!--/ media -->
						<!-- caption -->
						<div class="caption">
							<h5 class="semibold mt0 mb5">Bridge Forest</h5>
							<p class="text-muted mb5 ellipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
							<p class="ellipsis">
								<a class="tag info" href="javascript:void(0);">#Lorem</a>&nbsp;
								<a class="tag success" href="javascript:void(0);">#Ipsum</a>
							</p>
						</div>
						<!--/ caption -->
						<hr class="thin no-margin-v bg-grayLighter">
						<ul class="meta">
							<li>
								<div class="img-group img-group-stack">
									<img src="{{asset('user/images/01.jpg')}}" class="circle" alt="" />
									<img src="{{asset('user/images/02.jpg')}}" class="circle" alt="" />
									<span class="more img-circle">6+</span>
								</div>
							</li>
							<li>
								<p class="nm"><a href="javascript:void(0);" class="semibold">8 people</a> love this</p>
							</li>
						</ul>
					</div>
					<!--/ thumbnail -->

				</div>

			</div>
			<div class="row cells4">

				<div class="cell">

					<!-- thumbnail -->
					<div class="thumbnail thumbnail-album animation animating delay fadeInLeft">
						<!-- media -->
						<div class="media">
							<!-- indicator -->
							<div class="indicator"><span class="spinner5 mif-ani-spin"></span></div>
							<!--/ indicator -->
							<!-- toolbar overlay -->
							<div class="overlay">
								<div class="toolbar">
									<a href="javascript:void(0);" class="button img-circle bg-teal" title="upload to collection"><i class="fa fa-upload"></i></a>
									<a href="{{asset('images/gallery1/gallery-07.jpg')}}" class="button img-circle success" data-lightbox="gallery-3" title="watch collection"><i class="fa fa-star"></i></a>
									<a href="javascript:void(0);" class="button img-circle bg-teal" title="love this collection"><i class="fa fa-heart"></i></a>
								</div>
							</div>
							<!--/ toolbar overlay -->
							<img data-toggle="unveil" src="{{asset('images/gallery1/gallery-07.jpg')}}" data-src="{{asset('images/gallery1/gallery-07.jpg')}}" alt="Cover" width="100%" class="unveiled delay animation animating " />
						</div>
						<!--/ media -->
						<!-- caption -->
						<div class="caption">
							<h5 class="semibold mt0 mb5">London Bridge</h5>
							<p class="text-muted mb5 ellipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
							<p class="ellipsis">
								<a class="tag info" href="javascript:void(0);">#Lorem</a>&nbsp;
								<a class="tag success" href="javascript:void(0);">#Ipsum</a>
							</p>
						</div>
						<!--/ caption -->
						<hr class="thin no-margin-v bg-grayLighter">
						<ul class="meta">
							<li>
								<div class="img-group img-group-stack">
									<img src="{{asset('user/images/01.jpg')}}" class="circle" alt="" />
									<img src="{{asset('user/images/02.jpg')}}" class="circle" alt="" />
									<span class="more img-circle">6+</span>
								</div>
							</li>
							<li>
								<p class="nm"><a href="javascript:void(0);" class="semibold">8 people</a> love this</p>
							</li>
						</ul>
					</div>
					<!--/ thumbnail -->

				</div>
				
				<div class="cell">

					<!-- thumbnail -->
					<div class="thumbnail thumbnail-album animation animating delay fadeInLeft">
						<!-- media -->
						<div class="media">
							<!-- indicator -->
							<div class="indicator"><span class="spinner5 mif-ani-spin"></span></div>
							<!--/ indicator -->
							<!-- toolbar overlay -->
							<div class="overlay">
								<div class="toolbar">
									<a href="javascript:void(0);" class="button img-circle bg-teal" title="upload to collection"><i class="fa fa-upload"></i></a>
									<a href="{{asset('images/gallery1/gallery-08.jpg')}}" class="button img-circle success" data-lightbox="gallery-3" title="watch collection"><i class="fa fa-star"></i></a>
									<a href="javascript:void(0);" class="button img-circle bg-teal" title="love this collection"><i class="fa fa-heart"></i></a>
								</div>
							</div>
							<!--/ toolbar overlay -->
							<img data-toggle="unveil" src="{{asset('images/gallery1/gallery-08.jpg')}}" data-src="{{asset('images/gallery1/gallery-08.jpg')}}" alt="Cover" width="100%" class="unveiled delay animation animating " />
						</div>
						<!--/ media -->
						<!-- caption -->
						<div class="caption">
							<h5 class="semibold mt0 mb5">Rail Ways</h5>
							<p class="text-muted mb5 ellipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
							<p class="ellipsis">
								<a class="tag info" href="javascript:void(0);">#Lorem</a>&nbsp;
								<a class="tag success" href="javascript:void(0);">#Ipsum</a>
							</p>
						</div>
						<!--/ caption -->
						<hr class="thin no-margin-v bg-grayLighter">
						<ul class="meta">
							<li>
								<div class="img-group img-group-stack">
									<img src="{{asset('user/images/01.jpg')}}" class="circle" alt="" />
									<img src="{{asset('user/images/02.jpg')}}" class="circle" alt="" />
									<span class="more img-circle">6+</span>
								</div>
							</li>
							<li>
								<p class="nm"><a href="javascript:void(0);" class="semibold">8 people</a> love this</p>
							</li>
						</ul>
					</div>
					<!--/ thumbnail -->

				</div>
				
				<div class="cell">

					<!-- thumbnail -->
					<div class="thumbnail thumbnail-album animation animating delay fadeInRight">
						<!-- media -->
						<div class="media">
							<!-- indicator -->
							<div class="indicator"><span class="spinner5 mif-ani-spin"></span></div>
							<!--/ indicator -->
							<!-- toolbar overlay -->
							<div class="overlay">
								<div class="toolbar">
									<a href="javascript:void(0);" class="button img-circle bg-teal" title="upload to collection"><i class="fa fa-upload"></i></a>
									<a href="{{asset('images/gallery1/gallery-09.jpg')}}" class="button img-circle success" data-lightbox="gallery-3" title="watch collection"><i class="fa fa-star"></i></a>
									<a href="javascript:void(0);" class="button img-circle bg-teal" title="love this collection"><i class="fa fa-heart"></i></a>
								</div>
							</div>
							<!--/ toolbar overlay -->
							<img data-toggle="unveil" src="{{asset('images/gallery1/gallery-09.jpg')}}" data-src="{{asset('images/gallery1/gallery-09.jpg')}}" alt="Cover" width="100%" class="unveiled delay animation animating " />
						</div>
						<!--/ media -->
						<!-- caption -->
						<div class="caption">
							<h5 class="semibold mt0 mb5">River</h5>
							<p class="text-muted mb5 ellipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
							<p class="ellipsis">
								<a class="tag info" href="javascript:void(0);">#Lorem</a>&nbsp;
								<a class="tag success" href="javascript:void(0);">#Ipsum</a>
							</p>
						</div>
						<!--/ caption -->
						<hr class="thin no-margin-v bg-grayLighter">
						<ul class="meta">
							<li>
								<div class="img-group img-group-stack">
									<img src="{{asset('user/images/01.jpg')}}" class="circle" alt="" />
									<img src="{{asset('user/images/02.jpg')}}" class="circle" alt="" />
									<span class="more img-circle">6+</span>
								</div>
							</li>
							<li>
								<p class="nm"><a href="javascript:void(0);" class="semibold">8 people</a> love this</p>
							</li>
						</ul>
					</div>
					<!--/ thumbnail -->

				</div>
				
				<div class="cell">

					<!-- thumbnail -->
					<div class="thumbnail thumbnail-album animation animating delay fadeInRight">
						<!-- media -->
						<div class="media">
							<!-- indicator -->
							<div class="indicator"><span class="spinner5 mif-ani-spin"></span></div>
							<!--/ indicator -->
							<!-- toolbar overlay -->
							<div class="overlay">
								<div class="toolbar">
									<a href="javascript:void(0);" class="button img-circle bg-teal" title="upload to collection"><i class="fa fa-upload"></i></a>
									<a href="{{asset('images/gallery1/gallery-10.jpg')}}" class="button img-circle success" data-lightbox="gallery-3" title="watch collection"><i class="fa fa-star"></i></a>
									<a href="javascript:void(0);" class="button img-circle bg-teal" title="love this collection"><i class="fa fa-heart"></i></a>
								</div>
							</div>
							<!--/ toolbar overlay -->
							<img data-toggle="unveil" src="{{asset('images/gallery1/gallery-10.jpg')}}" data-src="{{asset('images/gallery1/gallery-10.jpg')}}" alt="Cover" width="100%" class="unveiled delay animation animating " />
						</div>
						<!--/ media -->
						<!-- caption -->
						<div class="caption">
							<h5 class="semibold mt0 mb5">Fireworks
							<p class="text-muted mb5 ellipsis">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
							<p class="ellipsis">
								<a class="tag info" href="javascript:void(0);">#Lorem</a>&nbsp;
								<a class="tag success" href="javascript:void(0);">#Ipsum</a>
							</p>
						</div>
						<!--/ caption -->
						<hr class="thin no-margin-v bg-grayLighter">
						<ul class="meta">
							<li>
								<div class="img-group img-group-stack">
									<img src="{{asset('user/images/01.jpg')}}" class="circle" alt="" />
									<img src="{{asset('user/images/02.jpg')}}" class="circle" alt="" />
									<span class="more img-circle">6+</span>
								</div>
							</li>
							<li>
								<p class="nm"><a href="javascript:void(0);" class="semibold">8 people</a> love this</p>
							</li>
						</ul>
					</div>
					<!--/ thumbnail -->

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