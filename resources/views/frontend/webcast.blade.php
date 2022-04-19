@extends('frontend.layouts.main')

@section('main-container')












	<!-- TOP SECTION
    ================================================== -->
	
		
		

	<!-- SECTION
    ================================================== -->	
	
		<section class="section white-section section-padding-top-bottom">
			<div class="container">
				<div class="sixteen columns">
					<div id="portfolio-filter">
						<ul id="filter">
							<li><a href="#" class="current" data-filter="*" title="">Show All</a></li>
							<li><a href="#" data-filter=".photography" title="">Photography</a></li>
							<li><a href="#" data-filter=".illustration" title="">Illustration</a></li>
							<li><a href="#" data-filter=".motion-graphics" title="">Motion Graphics</a></li>
							<li><a href="#" data-filter=".web-design" title="">Web Design</a></li>
						</ul>
					</div>
				</div>
				<div class="clear"></div>
				<div id="projects-grid">
					<div class="one-third column photography">
						<div class="portfolio-box-2 grey-section">
							<a href="slider-project.html" class="animsition-link"><div class="mask-left">&#xf0c1;</div></a>
							<a class="group1" href="{{ URL::asset('frontend/images/portfolio/1.jpg') }}"><div class="mask-right">&#xf0b2;</div></a>
							<img src="{{ URL::asset('frontend/images/1111.jpg') }}" alt="">
							<h6>holy sadie</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
					</div>
					<div class="one-third column illustration">
						<div class="portfolio-box-2 grey-section">
							<a href="video-project.html" class="animsition-link"><div class="mask-left">&#xf0c1;</div></a>
							<a class="group1" href="{{ URL::asset('frontend/images/portfolio/2.jpg') }}"><div class="mask-right">&#xf0b2;</div></a>
							<img src="{{ URL::asset('frontend/images/1111.jpg') }}" alt="">
							<h6>dreamy honey</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
					</div>
					<div class="one-third column motion-graphics">
						<div class="portfolio-box-2 grey-section">
							<a href="parallax-project.html" class="animsition-link"><div class="mask-left">&#xf0c1;</div></a>
							<a class="group1" href="{{ URL::asset('frontend/images/portfolio/3.jpg') }}"><div class="mask-right">&#xf0b2;</div></a>
							<img src="{{ URL::asset('frontend/images/1111.jpg') }}" alt="">
							<h6>crazy layla</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
					</div>
					<div class="clear"></div>
					<div class="one-third column motion-graphics">
						<div class="portfolio-box-2 grey-section">
							<a href="gallery-project.html" class="animsition-link"><div class="mask-left">&#xf0c1;</div></a>
							<a class="group1 vimeo" href="http://player.vimeo.com/video/96696089?title=0&amp;byline=0&amp;portrait=0&amp;color=cfa144"><div class="mask-right">&#xf0b2;</div></a>
							<img src="{{ URL::asset('frontend/images/1111.jpg') }}" alt="">
							<h6>holy sadie</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
					</div>
					<div class="one-third column photography">
						<div class="portfolio-box-2 grey-section">
							<a href="slider-project.html" class="animsition-link"><div class="mask-left">&#xf0c1;</div></a>
							<a class="group1" href="{{ URL::asset('frontend/images/portfolio/5.jpg') }}"><div class="mask-right">&#xf0b2;</div></a>
							<img src="{{ URL::asset('frontend/images/1111.jpg') }}" alt="">
							<h6>dreamy honey</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
					</div>
					<div class="one-third column web-design">
						<div class="portfolio-box-2 grey-section">
							<a href="video-project.html" class="animsition-link"><div class="mask-left">&#xf0c1;</div></a>
							<a class="group1" href="{{ URL::asset('frontend/images/portfolio/6.jpg') }}"><div class="mask-right">&#xf0b2;</div></a>
							<img src="{{ URL::asset('frontend/images/1111.jpg') }}" alt="">
							<h6>crazy layla</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
					</div>
					<div class="clear"></div>
					<div class="one-third column photography">
						<div class="portfolio-box-2 grey-section">
							<a href="parallax-project.html" class="animsition-link"><div class="mask-left">&#xf0c1;</div></a>
							<a class="group1" href="{{ URL::asset('frontend/images/portfolio/7.jpg') }}"><div class="mask-right">&#xf0b2;</div></a>
							<img src="{{ URL::asset('frontend/images/1111.jpg') }}" alt="">
							<h6>holy sadie</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
					</div>
					<div class="one-third column motion-graphics">
						<div class="portfolio-box-2 grey-section">
							<a href="gallery-project.html" class="animsition-link"><div class="mask-left">&#xf0c1;</div></a>
							<a class="group1" href="{{ URL::asset('frontend/images/portfolio/8.jpg') }}"><div class="mask-right">&#xf0b2;</div></a>
							<img src="{{ URL::asset('frontend/images/1111.jpg') }}" alt="">
							<h6>dreamy honey</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
					</div>
					<div class="one-third column web-design">
						<div class="portfolio-box-2 grey-section">
							<a href="slider-project.html" class="animsition-link"><div class="mask-left">&#xf0c1;</div></a>
							<a class="group1" href="{{ URL::asset('frontend/images/portfolio/9.jpg') }}"><div class="mask-right">&#xf0b2;</div></a>
							<img src="{{ URL::asset('frontend/images/1111.jpg') }}" alt="">
							<h6>crazy layla</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
					</div>
					<div class="clear"></div>
					<div class="one-third column illustration">
						<div class="portfolio-box-2 grey-section">
							<a href="video-project.html" class="animsition-link"><div class="mask-left">&#xf0c1;</div></a>
							<a class="group1 vimeo" href="http://player.vimeo.com/video/96696089?title=0&amp;byline=0&amp;portrait=0&amp;color=cfa144"><div class="mask-right">&#xf0b2;</div></a>
							<img src="{{ URL::asset('frontend/images/1111.jpg') }}" alt="">
							<h6>holy sadie</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
					</div>
					<div class="one-third column web-design">
						<div class="portfolio-box-2 grey-section">
							<a href="parallax-project.html" class="animsition-link"><div class="mask-left">&#xf0c1;</div></a>
							<a class="group1" href="{{ URL::asset('frontend/images/portfolio/11.jp') }}g"><div class="mask-right">&#xf0b2;</div></a>
							<img src="{{ URL::asset('frontend/images/1111.jpg') }}" alt="">
							<h6>dreamy honey</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
					</div>
					<div class="one-third column illustration">
						<div class="portfolio-box-2 grey-section">
							<a href="gallery-project.html" class="animsition-link"><div class="mask-left">&#xf0c1;</div></a>
							<a class="group1" href="{{ URL::asset('frontend/images/portfolio/12.jp') }}g"><div class="mask-right">&#xf0b2;</div></a>
							<img src="{{ URL::asset('frontend/images/1111.jpg') }}" alt="">
							<h6>crazy layla</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
					</div>
				</div>
			</div>
		</section>		
		

























@endsection