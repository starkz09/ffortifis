@extends('frontend.layouts.main')

@section('main-container')





	
	<!-- TOP SECTION
    ================================================== -->
	
		<section class="section white-section section-home-padding-top">
		
			<div class="container">
				<div class="sixteen columns">
					<div class="section-title left">
						<h1>VISION</h1>
						<div class="subtitle left big">Fortifis Establishment</div>
					</div>
				</div>
			</div>
				
		</section>	

	<!-- SECTION
    ================================================== -->	
	
		<section class="section white-section section-padding-bottom">
		
			<div class="container">
				<div class="twelve columns">
				
					<div class="blog-big-wrapper grey-section" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">
						<div class="big-post-date"><span>&#xf073;</span> 2021</div>
						<div id="owl-blog-big-slider" class="owl-carousel owl-theme">
							<div class="item">
								<img src="{{ URL::asset('frontend/images/blog/111.jpeg') }}" alt="">
							</div>
							<div class="item">
								<img src="{{ URL::asset('frontend/images/blog/222.webp') }}" alt="">
							</div>
							<div class="item">
								<img src="{{ URL::asset('frontend/images/blog/333.jpg') }}" alt="">
							</div>
						</div>
						<p>For more than 8 years, Fortfis’s story has always been about innovation. In 2013 we began testing and certifying web security before they were put to standars, and in 2016 we pioneered the idea of independent testing laboratories. Then in 2018, the greatest inventor of them all became part of our story. When Microsoft released the wonders of cloud security platform and the IOT technologies it wanted to ensure that his products were checked, tested and safe. He established the Lamp Testing Bureau, later to become the benchmark in IT industry.


</p>
						<p class="text-border-left">Over a century later, we maintain his ETL mark of quality, and continue to establish new standards in quality to protect consumers and our clients’ reputations across the world. Today we are a global force, operating in over 100 countries, offering Total Quality Assurance expertise, delivered consistently with precision, pace and passion, enabling our customers to power ahead safely.
</p> 
						<p>The foundations and aspirations of our business remain true to those established by our visionary founders, and their innovation and energy continue to be our inspiration. Our passion and entrepreneurial culture will ensure that we deliver for our customers in safety, quality and assurance – today and in the future.</p>
				
					</div>	
					<div class="post-tags-categ grey-section" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">
						<p>Services: <a href="#">SSL</a>, <a href="#">WEB Security</a>, <a href="#">Pentesting</a><span>|</span>Tags: <a href="#">Gallery</a></p>
					</div>	
					<div class="post-content-share grey-section" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">
						<div class="social-share">
							<span>share:</span>
							<ul class="list-social-share">
								<li class="icon-soc-share">
									<a href="#">&#xf099;</a>
								</li>
								<li class="icon-soc-share">
									<a href="#">&#xf09a;</a>
								</li>
								<li class="icon-soc-share">
									<a href="#">&#xf09b;</a>
								</li>
								<li class="icon-soc-share">
									<a href="#">&#xf0d5;</a>
								</li>
							</ul>
						</div>				
					</div>	
					<div class="post-content-com-top grey-section" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">	
						<p>COMMENTS <span>(3)</span></p>
					</div>	
					
					<div class="post-content-comment grey-section" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">
						<img  src="{{ URL::asset('frontend/images/team11.jpg') }}" alt="" />
						<h6>ALEX ANDREWS</h6>	
						<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>  
						<a href="#"><div class="reply">reply</div></a>
					</div>	
					
					<div class="post-content-comment reply-in grey-section" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">
						<img  src="{{ URL::asset('frontend/images/team22.jpg') }}" alt="" />
						<h6>KARA KULIS</h6>
						<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p> 
						<a href="#"><div class="reply">reply</div></a>
					</div>
					
					<div class="post-content-comment grey-section" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">
						<img  src="{{ URL::asset('frontend/images/team33.jpg') }}" alt="" />
						<h6>FRANK FURIOUS</h6>
						<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p> 
						<a href="#"><div class="reply">reply</div></a>
					</div>
					
					<div class="leave-reply grey-section" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">
						<h6>LEAVE A REPLY</h6>
						<p>Your email address will not be published. Required fields are marked *</p> 
						<input name="name" type="text"   placeholder="NAME *"/>
						<input name="email" type="text"   placeholder="EMAIL *"/>
						<input name="website" type="text"   placeholder="website"/>
						<textarea name="website"  placeholder="COMMENT"></textarea>
						<button class="post-comment">post comment</button>
					</div>
					
				</div>
				<div class="four columns" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">
					<div class="post-sidebar">
						<input name="search" type="text"   placeholder="type to search and hit enter"/>
						<div class="separator-sidebar"></div>
						<h6>Services:</h6>
						<ul class="link-recents">
							<li><a href="#">SSL (2)</a></li>
							<li><a href="#">Web Security (3)</a></li> 
							<li><a href="#">IOT (1)</a></li>
							<li><a href="#">Pentesting (4)</a></li> 
							<li><a href="#">Cloud Security (5)</a></li> 
						</ul>
						<div class="separator-sidebar"></div>
						<h6>recent posts</h6>
						<ul class="link-recents">
							<li><a href="#">Data Breach</a></li>
							<li><a href="#">Identity fraud</a></li> 
							<li><a href="#">Hacks Summit.</a></li>
							<li><a href="#">IOT Innovation</a></li> 
							<li><a href="#">Nulla consequat massa.</a></li> 
							<li><a href="#">Vivamus elementum semper.</a></li> 
						</ul>
						<div class="separator-sidebar"></div>
						<h6>LATEST PROJECTS</h6>
						<ul class="lat-pro">						
							<li><a href="#"><div class="lat-pro-img"><img  src="{{ URL::asset('frontend/images/portfolio/1.png') }}" alt="" /></div></a></li> 		
							<li><a href="#"><div class="lat-pro-img"><img  src="{{ URL::asset('frontend/images/portfolio/2.png') }}" alt="" /></div></a></li> 		
							<li><a href="#"><div class="lat-pro-img"><img  src="{{ URL::asset('frontend/images/portfolio/3.png') }}" alt="" /></div></a></li> 		
							<li><a href="#"><div class="lat-pro-img"><img  src="{{ URL::asset('frontend/images/portfolio/4.png') }}" alt="" /></div></a></li> 
						</ul>
						<div class="separator-sidebar"></div>
						<h6>LATEST video</h6>
							<iframe src="{{ URL::asset('http://player.vimeo.com/video/96696089?title=0&amp;byline=0&amp;portrait=0&amp;color=cfa144') }}" width="940" height="450" ></iframe>	
						<div class="separator-sidebar"></div>
						<h6>tags</h6>
						<ul class="link-tag">
							<li><a href="#">Analysis</a></li> 
							<li><a href="#">Art</a></li>  
							<li><a href="#">Articles</a></li>  
							<li><a href="#">Audio</a></li> 
							<li><a href="#">Business</a></li>  
							<li><a href="#">Culture</a> </li> 
							<li><a href="#">Development</a> </li> 
							<li><a href="#">Ecology</a></li>  
							<li><a href="#">Events</a> </li> 
							<li><a href="#">Information</a> </li> 
							<li><a href="#">Inspiration</a></li>  
							<li><a href="#">Nature</a> </li> 
							<li><a href="#">Opportunities</a> </li> 
							<li><a href="#">Science</a> </li> 
							<li><a href="#">Trends</a> </li> 
							<li><a href="#">Video</a></li> 
						</ul>
					</div>
				</div>
			</div>
		
		</section>		
				
		
	<!-- SECTION
    ================================================== -->	
	
		<section class="section grey-section section-padding-top-bottom">
			<div class="container">
				<div class="sixteen columns">
					<div class="section-title">
						<h3>Our Daily Blog</h3>
					</div>
				</div>
				<div class="one-third column" data-scroll-reveal="enter left move 200px over 1s after 0.3s">
					<a href="image-post.html" class="animsition-link">
						<div class="blog-box-1 white-section">
							<img src="{{ URL::asset('frontend/images/blog/1.jpg') }}"  alt="">
							<div class="blog-date-1">21.11.'14</div>
							<div class="blog-comm-1">3 <span>&#xf086;</span></div>
							<h6>Latest post</h6>
							<p>Cyber Attack on Airtel India.</p>
							<div class="link">&#xf178;</div>
						</div>
					</a>
				</div>
				<div class="one-third column" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">
					<a href="slider-post.html" class="animsition-link">
						<div class="blog-box-1 white-section">
							<img src="{{ URL::asset('frontend/images/blog/2.jpg') }}"  alt="">
							<div class="blog-date-1">17.11.'14</div>
							<div class="blog-comm-1">2 <span>&#xf086;</span></div>
							<h6>Latest post</h6>
							<p>Data Breach in Microsoft.</p>
							<div class="link">&#xf178;</div>
						</div>
					</a>
				</div>
				<div class="one-third column" data-scroll-reveal="enter right move 200px over 1s after 0.3s">
					<a href="video-post.html" class="animsition-link">
						<div class="blog-box-1 white-section">
							<img src="{{ URL::asset('frontend/images/blog/3.jpg') }}"  alt="">
							<div class="blog-date-1">14.11.'14</div>
							<div class="blog-comm-1">7 <span>&#xf086;</span></div>
							<h6>Latest post</h6>
							<p>Google all new security patch for Android 12.</p>
							<div class="link">&#xf178;</div>
						</div>
					</a>
				</div>
			</div>
		</section>	




@endsection