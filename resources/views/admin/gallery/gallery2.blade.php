@extends('layouts.metro')

@section('content')

<div class="section-wrapper page-heading ">
	<h3>Welcome to Dashboard</h3>
</div>

<div class="section-wrapper bg-white margin-bottom-40 align-center ">
	
	<h1>Js Shuffle Gallery</h1>

</div>


<div class="section-wrapper animated fadeInRightBig">
	<div class="container" >

		<div class="grid condensed " >

			<div class="align-center margin-bottom-40" id="shuffle-filter">
				<button class="button filter" data-group="">All</button> 
				<button class="button filter" data-group="bridge">Bridge</button>
				<button class="button filter" data-group="nature">Nature</button>
				<button class="button filter" data-group="transport">Transport</button>
			</div>

			<div class="row cells3 mason" id="shuffle-cells">
				<div class="cell gallery" data-groups='["transport"]'>
					
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
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid veniam harum amet consequuntur consequatur, fuga eos aut sed ea, voluptatum minus sunt odio reiciendis facilis aliquam tenetur. Repudiandae repellat recusandae unde praesentium similique, modi velit nesciunt accusantium reprehenderit ad quo fuga aspernatur, reiciendis hic, quisquam vitae minima dolorum. Quo, ratione.
							</div>
						</div>
					</div>
			
				</div>
				<div class="cell gallery" data-groups='["transport"]'>

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
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde vero, soluta voluptatibus eos, enim tenetur. Possimus voluptas, ab quisquam nesciunt.
							</div>
						</div>
					</div>
			
				</div>
				<div class="cell gallery" data-groups='["nature","transport"]'>

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
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quia dolore libero incidunt perferendis molestiae natus ipsa accusantium maxime nulla animi, accusamus, sunt officiis ipsam ullam consequuntur. Sunt asperiores optio nihil et reprehenderit nobis atque voluptatum vero aperiam, maiores! Impedit?
							</div>
						</div>
					</div>
			
				</div>
				<div class="cell gallery" data-groups='["nature","bridge"]'>

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
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga repellendus aliquid nisi at praesentium omnis ab reprehenderit culpa quos molestiae repudiandae ipsa consectetur facere, accusantium, voluptatum dolor perferendis natus sint fugiat maiores! Unde et placeat, eius nulla iure ducimus esse.
							</div>
						</div>
					</div>
			
				</div>
				<div class="cell gallery" data-groups='["transport"]'>

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
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto officiis quos laudantium quas unde molestias excepturi earum voluptatem ipsa? Aliquam ipsam, quas consequuntur veniam vitae assumenda excepturi, a commodi aut tenetur beatae libero. Facilis nisi cupiditate ullam quas suscipit, autem laborum non maiores sapiente facere, dolore omnis quibusdam. Eaque, tempora officia ad vel rerum repudiandae iusto! Incidunt quisquam ipsa a voluptatem vitae ex nesciunt, rem temporibus doloremque unde quos tenetur assumenda voluptas! Cupiditate minus autem error exercitationem ea. Modi, officiis!
							</div>
						</div>
					</div>
			
				</div>
				<div class="cell gallery" data-groups='["bridge"]'>

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
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt minima perspiciatis, unde ex illo molestias commodi, debitis reprehenderit doloremque non similique modi assumenda impedit voluptas eligendi quia voluptatum? Mollitia, corrupti.
							</div>
						</div>
					</div>
			
				</div>
				<div class="cell gallery" data-groups='["bridge"]'>

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
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores ipsam molestiae, iure enim, aut accusantium iste aliquam temporibus, eaque ad reprehenderit ratione. Deserunt, a, velit, assumenda explicabo consequatur eaque, tenetur placeat odio quaerat hic distinctio quas ut consequuntur? Dignissimos, sapiente.
							</div>
						</div>
					</div>
			
				</div>
				<div class="cell gallery" data-groups='["transport"]'>

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
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur voluptatem iste pariatur doloribus nisi quisquam, nemo error possimus natus sit repellendus ad omnis reiciendis tenetur earum nam ipsum. Ratione quisquam quam deserunt omnis repellendus sapiente cumque quia natus quos aut mollitia laboriosam commodi voluptates placeat fugit atque earum quod accusantium necessitatibus, error, nemo aliquam molestiae dolores, iste assumenda. Debitis, veniam!
							</div>
						</div>
					</div>
			
				</div>
				<div class="cell gallery" data-groups='["nature"]'>

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
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati quam sapiente modi dicta voluptates animi est doloribus quod sed expedita. Dolorem dolorum error minus fuga nobis doloremque, est deleniti, quis ratione dolore, quam officia, consectetur?
							</div>
						</div>
					</div>
			
				</div>
				<div class="cell gallery" data-groups='["nature"]'>

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
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam sequi sint aspernatur. Atque eius tempore cum ipsa. Dolorem quis recusandae, omnis hic rem mollitia nemo voluptatem libero iure qui, nostrum amet reiciendis velit illo cupiditate in quisquam nesciunt facere. Dolores sint, odit rem qui quibusdam.
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

	$('#mason-box').masonry({
		itemSelector: '.cell',
	});

	$('#mason-box').mixItUp();

});

</script>

@endsection