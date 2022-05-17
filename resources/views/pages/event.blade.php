<x-layouts.app>
	<div class="page-title-style01 page-title-negative-top pt-bkg09">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>Rendezvény</h1>

					<p style="text-align: center; color: #fff">ITT VAGYUNK, TÁMOGATUNK egyesület.</p>
				</div><!-- .col-md-12 end -->
			</div><!-- .row end -->
		</div><!-- .container end -->
	</div>
	<div class="page-content">
		<div class="container">
			<div class="row" style="display: flex; justify-content: center;">
				<div class="col-md-9 blog-posts post-single">
					<div class="clearfix blog-post">
						<div class="post-media">
							<a href="news-single.html" class="post-img">
								<img src="/img/events/{{$event['id']}}/1.jpg" alt="Trucking Transportation and Logistics HTML template"/>
							</a>
						</div><!-- .post-media end -->

						<div class="post-date">
							<p class="day">{{ $event['day'] }}</p>
							<p class="month">{{ $event['month'] }}</p>
						</div><!-- .post-date end -->

						<div class="post-body">
							<a href="{{ route('pages.event', $event['id']) }}">
								<h2>{{ $event['title'] }}</h2>
							</a>

							<p style="font-size: 16px; color: #444">{{ $event['text'] }}</p>

						</div><!-- .post-body end -->


					</div><!-- .blog-post end -->                        
				</div><!-- .col-md-9.blog-posts.post-list end -->

				<!-- aside.aside-left start -->
			</div><!-- .row end -->
		</div><!-- .container end -->
	</div>
	<div class="page-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading02">
						<h2>Képek</h2>
						<p>{{ $event['title'] }}</p>
					</div><!-- .custom-heading02 end -->
				</div><!-- .col-md-12 end -->
			</div><!-- .row end -->
		</div><!-- .container end -->
	</div>
	<div class="page-content">
		<div class="container">
			<div class="row">
				<ul class="clearfix vehicle-gallery">
					<!-- .gallery-item end -->

					@for($i = 0; $i < $event['images']; $i++)
						<li class="col-md-4">
							<figure class="gallery-item-container">                               
								<div class="gallery-item">
									<img src="/img/events/{{$event['id']}}/{{$i + 1}}.jpg" alt=""/>

									<div class="hover-mask-container">
										<div class="hover-mask"></div>
										<div class="hover-zoom">
											<a href="/img/events/{{$event['id']}}/{{$i + 1}}.jpg" class="triggerZoom fa fa-search"></a>
										</div><!-- .hover-details end -->
									</div><!-- .hover-mask-container end -->
								</div><!-- .service-item end -->

							</figure><!-- .gallery-item-container end -->
						</li>
					@endfor

					<!-- .gallery-item end -->                        
				</ul><!-- #vehicle-gallery end -->
			</div><!-- .row end -->
		</div><!-- .container end -->
	</div>
</x-layouts.app>
