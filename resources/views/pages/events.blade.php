<x-layouts.app>
	<div class="page-title-style01 page-title-negative-top pt-bkg09">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="custom-heading02">
						<h1>Rendezvények</h1>
						<p style="color: #fff;">
						ITT VAGYUNK, TÁMOGATUNK
						</p>
					</div><!-- .custom-heading02 end -->
					<!-- .breadcrumb-container end -->
				</div><!-- .col-md-12 end -->
			</div><!-- .row end -->
		</div><!-- .container end -->
	</div>
	<div class="page-content">
		<div class="container">
			<div class="row" style="display: flex; justify-content: center;">
				<ul class="col-md-9 blog-posts post-list">
					@foreach($events as $event)
					<li class="blog-post clearfix">
						<div class="post-media">
							<a href="news-single.html" class="post-img">
								<img style="width: 100%; height: auto;" src="img/events/{{$event['id']}}/1.jpg" alt="{{ $event['title'] }}"/>
							</a>
						</div><!-- .post-media end -->

						<div class="post-date">
							<p class="day">{{ $event['day'] }}</p>
							<p class="month">{{ $event['month'] }}</p>
						</div><!-- .post-date end -->

						<div class="post-body">
							<a href="news-single.html">
								<h3>{{ $event['title'] }}</h3>
							</a>

							<p>{{ $event['text'] }}</p>

							<a href="{{ route('pages.event', $event['id']) }}" class="read-more">
								<span>
									Tovább
									<i class="fa fa-chevron-right"></i>
								</span>                              
							</a>
						</div><!-- .post-body end -->
					</li><!-- .blog-post end -->
				@endforeach


					{{-- <li class="pagination clearfix"> --}}
					{{-- 	<ul> --}}
					{{-- 		<li class="active"> --}}
					{{-- 			<a href="#">1</a> --}}
					{{-- 		</li> --}}
					{{----}}
					{{-- 		<li> --}}
					{{-- 			<a href="#">2</a> --}}
					{{-- 		</li> --}}
					{{----}}
					{{-- 		<li> --}}
					{{-- 			<a href="#">3</a> --}}
					{{-- 		</li> --}}
					{{----}}
					{{-- 		<li> --}}
					{{-- 			<a href="#" class=" fa fa-angle-double-right"></a> --}}
					{{-- 		</li> --}}
					{{-- 	</ul> --}}
					{{-- </li><!-- .pagination end --> --}}
				</ul><!-- .col-md-9.blog-posts.post-list end -->

				<!-- aside.aside-left start -->
				<!-- .aside.aside-left end -->
			</div><!-- .row end -->
		</div><!-- .container end -->
	</div>
</x-layouts.app>
