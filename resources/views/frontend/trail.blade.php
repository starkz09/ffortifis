@extends('frontend.layouts.main')

@section('main-container')










<!-- HOME SECTION
    ================================================== -->
	
		<section class="home cd-main-content-app">
		
			<div class="cd-product-intro">
				<h1>Awesome Introduction Page For Your App</h1>
				<p>Click on the Start button to see the animated slideshow.</p>
				<div class="cd-triggers">
					<a href="#" class="btn">Download</a>
					<a href="#cd-product-tour" class="btn salmon" data-type="cd-tour">Start</a>
				</div>
			</div> <!-- cd-product-intro -->

			<div id="cd-product-tour">
				<ul>
					<li class="cd-single-item cd-active">
						<div class="cd-caption">
							<h2>What a great feature</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus praesentium, quis ab iusto possimus quaerat perspiciatis voluptas obcaecati ipsam autem.	
							</p>
						</div>
						<div class="cd-image-container">
							<div>
								<div class="cd-phone-frame"></div>
								<div class="cd-image-wrapper">
									<img src="{{ URL::asset('frontend/images/screen-1.png' ) }}" alt="Screen Preview 1">
								</div>
							</div>
						</div>
					</li>
					<li class="cd-single-item cd-not-visible cd-move-right">
						<div class="cd-caption">
							<h2>This one is even better</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus praesentium, quis ab iusto possimus quaerat perspiciatis voluptas obcaecati ipsam autem.	
							</p>
						</div>
						<div class="cd-image-container">
							<div>
								<div class="cd-phone-frame"></div>
								<div class="cd-image-wrapper">
									<img src="{{ URL::asset('frontend/images/screen-2.png' ) }}" alt="Screen Preview 2">
								</div>
							</div>
						</div>
					</li>
					<li class="cd-single-item cd-not-visible cd-move-right">
						<div class="cd-caption">
							<h2>Feature number 3</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus praesentium, quis ab iusto possimus quaerat perspiciatis voluptas obcaecati ipsam autem.	
							</p>
						</div>
						<div class="cd-image-container">
							<div>
								<div class="cd-phone-frame"></div>
								<div class="cd-image-wrapper">
									<img src="{{ URL::asset('frontend/images/screen-3.png' ) }}" alt="Screen Preview 3">
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div> <!-- cd-product-tour -->

			<div class="cd-slider-nav">
				<a class="cd-prev" href="#0">Previous</a>
				<a class="cd-next" href="#0">Next</a>
			</div> <!-- cd-slider-nav -->

			<div class="cd-loader"></div> <!-- top loading bar -->		
						
		</section>		





































@endsection