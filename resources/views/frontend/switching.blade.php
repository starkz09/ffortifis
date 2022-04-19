@extends('frontend.layouts.main')

@section('main-container')









	
		<!-- TOP SECTION
    ================================================== -->
	
		<section class="section parallax-section parallax-section-padding-top-bottom-pagetop section-page-top-title">
		
			<div class="parallax-about"></div>
		
			<div class="container">
				<div class="eight columns">
					<h1>Switches</h1>
				</div>
				<div class="eight columns">
					<div id="owl-top-page-slider" class="owl-carousel owl-theme">
						<div class="item">
							<div class="page-top-icon">&#xf1f4;</div>
							<div class="page-top-text">buy with paypal</div>
						</div>
						<div class="item">
							<div class="page-top-icon">&#xf0d1;</div>
							<div class="page-top-text">free shipping</div>
						</div>
					</div>
				</div>
			</div>
				
		</section>	
	
	<!-- SECTION
    ================================================== -->	
	
		<section class="section white-section section-padding-top-bottom">	
			<div class="container">
				<div class="sixteen columns">
					<ul id="owl-logos" class="owl-carousel owl-theme">
						<li><img  src="{{ URL::asset('frontend/images/logos/1.png') }}" alt="" /></li>
						<li><img  src="{{ URL::asset('frontend/images/logos/2.png') }}" alt="" /></li>
						<li><img  src="{{ URL::asset('frontend/images/logos/3.png') }}" alt="" /></li>
						<li><img  src="{{ URL::asset('frontend/images/logos/4.png') }}" alt="" /></li>
						<li><img  src="{{ URL::asset('frontend/images/logos/1.png') }}" alt="" /></li>
						<li><img  src="{{ URL::asset('frontend/images/logos/2.png') }}" alt="" /></li>
						<li><img  src="{{ URL::asset('frontend/images/logos/3.png') }}" alt="" /></li>
						<li><img  src="{{ URL::asset('frontend/images/logos/4.png') }}" alt="" /></li>
					</ul>
				</div>
			</div>
		</section>		

	<!-- SECTION
    ================================================== -->	
	
		<section class="section grey-section section-padding-top-bottom">	
			<div class="container">
					<div class="one-third column">
						<div class="shop-box grey-section">
							<img src="{{ URL::asset('frontend/images/shop/1.jfif') }}" alt="">
							<div class="mask-shop-white"></div>
							<div class="shop-price"><span>$150</span></br>$117</div>
							<a class="animsition-link" href="shop-item.html"><h5>SONY</h5></a>
							<a class="animsition-link" href="shop-item.html"><div class="mask-left-shop">&#xf06e;</div></a>
							<a href="#"><div class="mask-right-shop">&#xf07a;</div></a>
						</div>
					</div>
					<div class="one-third column">
						<div class="shop-box grey-section">
							<img src="{{ URL::asset('frontend/images/shop/2.jfif') }}" alt="">
							<div class="mask-shop-white"></div>
							<div class="shop-price"><span>$300</span></br>$231</div>
							<a class="animsition-link" href="shop-item.html"><h5>CANON</h5></a>
							<a class="animsition-link" href="shop-item.html"><div class="mask-left-shop">&#xf06e;</div></a>
							<a href="#"><div class="mask-right-shop">&#xf07a;</div></a>
						</div>
					</div>
					<div class="one-third column">
						<div class="shop-box grey-section">
							<img src="{{ URL::asset('frontend/images/shop/333.jfif') }}" alt="">
							<div class="mask-shop-white"></div>
							<div class="shop-price"><span>$110</span></br>$73</div>
							<a class="animsition-link" href="shop-item.html"><h5>Fuji Films</h5></a>
							<a class="animsition-link" href="shop-item.html"><div class="mask-left-shop">&#xf06e;</div></a>
							<a href="#"><div class="mask-right-shop">&#xf07a;</div></a>
						</div>
					</div>
					<div class="clear"></div>
					<div class="one-third column">
						<div class="shop-box grey-section">
							<img src="{{ URL::asset('frontend/images/shop/4.jfif') }}" alt="">
							<div class="mask-shop-white"></div>
							<div class="shop-price"><span>$150</span></br>$117</div>
							<a class="animsition-link" href="shop-item.html"><h5>KOTAK</h5></a>
							<a class="animsition-link" href="shop-item.html"><div class="mask-left-shop">&#xf06e;</div></a>
							<a href="#"><div class="mask-right-shop">&#xf07a;</div></a>
						</div>
					</div>
					<div class="one-third column">
						<div class="shop-box grey-section">
							<img src="{{ URL::asset('frontend/images/shop/55.jfif') }}" alt="">
							<div class="mask-shop-white"></div>
							<div class="shop-price"><span>$220</span></br>$167</div>
							<a class="animsition-link" href="shop-item.html"><h5>Panasonic</h5></a>
							<a class="animsition-link" href="shop-item.html"><div class="mask-left-shop">&#xf06e;</div></a>
							<a href="#"><div class="mask-right-shop">&#xf07a;</div></a>
						</div>
					</div>
					<div class="one-third column">
						<div class="shop-box grey-section">
							<img src="{{ URL::asset('frontend/images/shop/6.jfif') }}" alt="">
							<div class="mask-shop-white"></div>
							<div class="shop-price">$650</div>
							<a class="animsition-link" href="shop-item.html"><h5>Samsung</h5></a>
							<a class="animsition-link" href="shop-item.html"><div class="mask-left-shop">&#xf06e;</div></a>
							<a href="#"><div class="mask-right-shop">&#xf07a;</div></a>
						</div>
					</div>
			</div>
		</section>	
			

	<!-- SECTION
    ================================================== -->	
	
		<section class="section white-section section-padding-top-bottom">
		
			<div class="container">
				<div class="sixteen columns">
					<div class="blog-left-right-links">
						<a href="#"><div class="blog-left-link"><p>prev</p></div></a>
						<a href="#"><div class="blog-right-link"><p>next</p></div></a>
					</div>
				</div>
			</div>
			
		</section>	
		






@endsection