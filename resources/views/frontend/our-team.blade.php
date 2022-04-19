﻿@extends('frontend.layouts.main')

@section('main-container')






	
	<!-- TOP SECTION
    ================================================== -->
	
		<section class="section parallax-section parallax-section-padding-top-bottom-pagetop section-page-top-title">
		
			<div class="parallax-team"></div>
		
			<div class="container">
				<div class="eight columns">
					<h1>Our Team</h1>
				</div>
				<div class="eight columns">
					<div id="owl-top-page-slider" class="owl-carousel owl-theme">
						<div class="item">
							<div class="page-top-icon">&#xf002;</div>
							<div class="page-top-text">ATTENTION TO DETAILS...</div>
						</div>
						<div class="item">
							<div class="page-top-icon">&#xf121;</div>
							<div class="page-top-text">Over 34600 lines</div>
						</div>
						<div class="item">
							<div class="page-top-icon">&#xf183;</div>
							<div class="page-top-text">17 team members</div>
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
					<div class="section-title">
						<h3>3 Columns with tooltip</h3>
					</div>
				</div>
				<div class="one-third column" data-scroll-reveal="enter left move 200px over 1s after 0.3s">
					<div class="team-box-1">
						<img src="{{ URL::asset('frontend/images/team1.png') }}"  alt="">
						<span class="tooltip-content">The primary factor is proportions.</span>
						<div class="tooltip-shape">
							<svg viewBox="0 0 200 150" preserveAspectRatio="none">
								<path id="path1" d="M184.112,144.325c0.704,2.461,3.412,4.016,5.905,3.611c2.526-0.318,4.746-2.509,4.841-5.093
								c0.153-2.315-1.483-4.54-3.703-5.155c-2.474-0.781-5.405,0.37-6.612,2.681c-0.657,1.181-0.845,2.619-0.442,3.917"/>
								<path id="path2" d="M159.599,137.909c0.975,3.397,4.717,5.548,8.161,4.988c3.489-0.443,6.558-3.466,6.685-7.043
								c0.217-3.19-1.805-6.34-5.113-7.118c-3.417-1.079-7.469,0.508-9.138,3.701c-0.91,1.636-1.166,3.624-0.612,5.414"/>
								<path id="path3" d="M130.646,125.253c1.368,4.656,6.393,7.288,10.806,6.718c4.763-0.451,9.26-4.276,9.71-9.394
								c0.369-3.779-1.902-7.583-5.244-9.144c-5.404-2.732-12.557-0.222-14.908,5.448c-0.841,1.945-1.018,4.214-0.388,6.294"/>
								<path id="path4" d="M49.933,13.549c10.577-20.192,35.342-7.693,37.057,1.708c3.187-5.687,8.381-10.144,14.943-12.148
								c10.427-3.185,21.37,0.699,28.159,8.982c15.606-3.76,31.369,4.398,35.804,18.915c3.269,10.699-0.488,21.956-8.71,29.388
								c0.395,0.934,0.762,1.882,1.064,2.873c4.73,15.485-3.992,31.889-19.473,36.617c-5.073,1.551-10.251,1.625-15.076,0.518
								c-3.58,10.605-12.407,19.55-24.386,23.211c-15.015,4.586-30.547-0.521-39.226-11.624c-2.861,1.991-6.077,3.564-9.583,4.636
								c-18.43,5.631-32.291,2.419-38.074-19.661c-2.645-10.096,3.606-18.51,3.606-18.51C2.336,71.24,1.132,49.635,16.519,42.394
								C-1.269,28.452,18.559,0.948,37.433,6.818C42.141,8.282,49.933,13.549,49.933,13.549z"/>
							</svg>
						</div>
						<div class="team-box-1-text-in grey-section">
							<div class="team-name-top">founder / ceo</div>
							<h6>ALEX ANDREWS</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							<div class="social-team">
								<ul class="team-social">
									<li class="icon-team">
										<a href="#">&#xf09a;</a>
									</li>
									<li class="icon-team">
										<a href="#">&#xf09b;</a>
									</li>
									<li class="icon-team">
										<a href="#">&#xf0d5;</a>
									</li>
								</ul>	
							</div>
						</div>
					</div>
				</div>
				<div class="one-third column" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">
					<div class="team-box-1">
						<img src="{{ URL::asset('frontend/images/team2.png') }}"  alt="">
						<span class="tooltip-content">I don't design sites, I design dreams.</span>
						<div class="tooltip-shape">
							<svg viewBox="0 0 200 150" preserveAspectRatio="none">
								<path id="path5" d="M184.112,144.325c0.704,2.461,3.412,4.016,5.905,3.611c2.526-0.318,4.746-2.509,4.841-5.093
								c0.153-2.315-1.483-4.54-3.703-5.155c-2.474-0.781-5.405,0.37-6.612,2.681c-0.657,1.181-0.845,2.619-0.442,3.917"/>
								<path id="path6" d="M159.599,137.909c0.975,3.397,4.717,5.548,8.161,4.988c3.489-0.443,6.558-3.466,6.685-7.043
								c0.217-3.19-1.805-6.34-5.113-7.118c-3.417-1.079-7.469,0.508-9.138,3.701c-0.91,1.636-1.166,3.624-0.612,5.414"/>
								<path id="path7" d="M130.646,125.253c1.368,4.656,6.393,7.288,10.806,6.718c4.763-0.451,9.26-4.276,9.71-9.394
								c0.369-3.779-1.902-7.583-5.244-9.144c-5.404-2.732-12.557-0.222-14.908,5.448c-0.841,1.945-1.018,4.214-0.388,6.294"/>
								<path id="path8" d="M49.933,13.549c10.577-20.192,35.342-7.693,37.057,1.708c3.187-5.687,8.381-10.144,14.943-12.148
								c10.427-3.185,21.37,0.699,28.159,8.982c15.606-3.76,31.369,4.398,35.804,18.915c3.269,10.699-0.488,21.956-8.71,29.388
								c0.395,0.934,0.762,1.882,1.064,2.873c4.73,15.485-3.992,31.889-19.473,36.617c-5.073,1.551-10.251,1.625-15.076,0.518
								c-3.58,10.605-12.407,19.55-24.386,23.211c-15.015,4.586-30.547-0.521-39.226-11.624c-2.861,1.991-6.077,3.564-9.583,4.636
								c-18.43,5.631-32.291,2.419-38.074-19.661c-2.645-10.096,3.606-18.51,3.606-18.51C2.336,71.24,1.132,49.635,16.519,42.394
								C-1.269,28.452,18.559,0.948,37.433,6.818C42.141,8.282,49.933,13.549,49.933,13.549z"/>
							</svg>
						</div>
						<div class="team-box-1-text-in grey-section">
							<div class="team-name-top">art director</div>
							<h6>KARA KULIS</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							<div class="social-team">
								<ul class="team-social">
									<li class="icon-team">
										<a href="#">&#xf099;</a>
									</li>
									<li class="icon-team">
										<a href="#">&#xf0d5;</a>
									</li>
								</ul>	
							</div>
						</div>
					</div>
				</div>
				<div class="one-third column" data-scroll-reveal="enter right move 200px over 1s after 0.3s">
					<div class="team-box-1">
						<img src="{{ URL::asset('frontend/images/team3.png') }}"  alt="">
						<span class="tooltip-content">Design is not for philosophy it's for life.</span>
						<div class="tooltip-shape">
							<svg viewBox="0 0 200 150" preserveAspectRatio="none">
								<path id="path9" d="M184.112,144.325c0.704,2.461,3.412,4.016,5.905,3.611c2.526-0.318,4.746-2.509,4.841-5.093
								c0.153-2.315-1.483-4.54-3.703-5.155c-2.474-0.781-5.405,0.37-6.612,2.681c-0.657,1.181-0.845,2.619-0.442,3.917"/>
								<path id="path10" d="M159.599,137.909c0.975,3.397,4.717,5.548,8.161,4.988c3.489-0.443,6.558-3.466,6.685-7.043
								c0.217-3.19-1.805-6.34-5.113-7.118c-3.417-1.079-7.469,0.508-9.138,3.701c-0.91,1.636-1.166,3.624-0.612,5.414"/>
								<path id="path11" d="M130.646,125.253c1.368,4.656,6.393,7.288,10.806,6.718c4.763-0.451,9.26-4.276,9.71-9.394
								c0.369-3.779-1.902-7.583-5.244-9.144c-5.404-2.732-12.557-0.222-14.908,5.448c-0.841,1.945-1.018,4.214-0.388,6.294"/>
								<path id="path12" d="M49.933,13.549c10.577-20.192,35.342-7.693,37.057,1.708c3.187-5.687,8.381-10.144,14.943-12.148
								c10.427-3.185,21.37,0.699,28.159,8.982c15.606-3.76,31.369,4.398,35.804,18.915c3.269,10.699-0.488,21.956-8.71,29.388
								c0.395,0.934,0.762,1.882,1.064,2.873c4.73,15.485-3.992,31.889-19.473,36.617c-5.073,1.551-10.251,1.625-15.076,0.518
								c-3.58,10.605-12.407,19.55-24.386,23.211c-15.015,4.586-30.547-0.521-39.226-11.624c-2.861,1.991-6.077,3.564-9.583,4.636
								c-18.43,5.631-32.291,2.419-38.074-19.661c-2.645-10.096,3.606-18.51,3.606-18.51C2.336,71.24,1.132,49.635,16.519,42.394
								C-1.269,28.452,18.559,0.948,37.433,6.818C42.141,8.282,49.933,13.549,49.933,13.549z"/>
							</svg>
						</div>
						<div class="team-box-1-text-in grey-section">
							<div class="team-name-top">development</div>
							<h6>FRANK FURIOUS</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							<div class="social-team">
								<ul class="team-social">
									<li class="icon-team">
										<a href="#">&#xf099;</a>
									</li>
									<li class="icon-team">
										<a href="#">&#xf09a;</a>
									</li>
									<li class="icon-team">
										<a href="#">&#xf0d5;</a>
									</li>
								</ul>	
							</div>
						</div>
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
						<h3>3 Columns</h3>
					</div>
				</div>
				<div class="one-third column" data-scroll-reveal="enter left move 200px over 1s after 0.3s">
					<div class="team-box-1 full-image-box">
						<img src="{{ URL::asset('frontend/images/team1.jpg') }}"  alt="">
						<div class="team-box-1-text-in white-section">
							<div class="team-name-top">founder / ceo</div>
							<h6>ALEX ANDREWS</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							<div class="social-team">
								<ul class="team-social">
									<li class="icon-team">
										<a href="#">&#xf09a;</a>
									</li>
									<li class="icon-team">
										<a href="#">&#xf09b;</a>
									</li>
									<li class="icon-team">
										<a href="#">&#xf0d5;</a>
									</li>
								</ul>	
							</div>
						</div>
					</div>
				</div>
				<div class="one-third column" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">
					<div class="team-box-1 full-image-box">
						<img src="{{ URL::asset('frontend/images/team2.jpg') }}"  alt="">
						<div class="team-box-1-text-in white-section">
							<div class="team-name-top">art director</div>
							<h6>KARA KULIS</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							<div class="social-team">
								<ul class="team-social">
									<li class="icon-team">
										<a href="#">&#xf099;</a>
									</li>
									<li class="icon-team">
										<a href="#">&#xf0d5;</a>
									</li>
								</ul>	
							</div>
						</div>
					</div>
				</div>
				<div class="one-third column" data-scroll-reveal="enter right move 200px over 1s after 0.3s">
					<div class="team-box-1 full-image-box">
						<img src="{{ URL::asset('frontend/images/team3.jpg') }}"  alt="">
						<div class="team-box-1-text-in white-section">
							<div class="team-name-top">development</div>
							<h6>FRANK FURIOUS</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							<div class="social-team">
								<ul class="team-social">
									<li class="icon-team">
										<a href="#">&#xf099;</a>
									</li>
									<li class="icon-team">
										<a href="#">&#xf09a;</a>
									</li>
									<li class="icon-team">
										<a href="#">&#xf0d5;</a>
									</li>
								</ul>	
							</div>
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
					<div class="section-title">
						<h3>4 Columns</h3>
					</div>
				</div>
				<div class="four columns" data-scroll-reveal="enter left move 200px over 1s after 0.8s">
					<div class="team-box-1 full-image-box">
						<img src="{{ URL::asset('frontend/images/team1.jpg') }}"  alt="">
						<div class="team-box-1-text-in grey-section">
							<div class="team-name-top">founder / ceo</div>
							<h6>ALEX ANDREWS</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							<div class="social-team">
								<ul class="team-social">
									<li class="icon-team">
										<a href="#">&#xf09a;</a>
									</li>
									<li class="icon-team">
										<a href="#">&#xf09b;</a>
									</li>
									<li class="icon-team">
										<a href="#">&#xf0d5;</a>
									</li>
								</ul>	
							</div>
						</div>
					</div>
				</div>
				<div class="four columns" data-scroll-reveal="enter left move 200px over 1s after 0.3s">
					<div class="team-box-1 full-image-box">
						<img src="{{ URL::asset('frontend/images/team2.jpg') }}"  alt="">
						<div class="team-box-1-text-in grey-section">
							<div class="team-name-top">art director</div>
							<h6>KARA KULIS</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							<div class="social-team">
								<ul class="team-social">
									<li class="icon-team">
										<a href="#">&#xf099;</a>
									</li>
									<li class="icon-team">
										<a href="#">&#xf0d5;</a>
									</li>
								</ul>	
							</div>
						</div>
					</div>
				</div>
				<div class="four columns" data-scroll-reveal="enter right move 200px over 1s after 0.3s">
					<div class="team-box-1 full-image-box">
						<img src="{{ URL::asset('frontend/images/team3.jpg') }}"  alt="">
						<div class="team-box-1-text-in grey-section">
							<div class="team-name-top">development</div>
							<h6>FRANK FURIOUS</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							<div class="social-team">
								<ul class="team-social">
									<li class="icon-team">
										<a href="#">&#xf099;</a>
									</li>
									<li class="icon-team">
										<a href="#">&#xf09a;</a>
									</li>
									<li class="icon-team">
										<a href="#">&#xf0d5;</a>
									</li>
								</ul>	
							</div>
						</div>
					</div>
				</div>
				<div class="four columns" data-scroll-reveal="enter right move 200px over 1s after 0.8s">
					<div class="team-box-1 full-image-box">
						<img src="{{ URL::asset('frontend/images/team4.jpg') }}"  alt="">
						<div class="team-box-1-text-in grey-section">
							<div class="team-name-top">development</div>
							<h6>Iva Doe</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							<div class="social-team">
								<ul class="team-social">
									<li class="icon-team">
										<a href="#">&#xf099;</a>
									</li>
									<li class="icon-team">
										<a href="#">&#xf09a;</a>
									</li>
									<li class="icon-team">
										<a href="#">&#xf0d5;</a>
									</li>
								</ul>	
							</div>
						</div>
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
						<h3>3 Columns with skills</h3>
					</div>
				</div>
				
				<div class="one-third column" data-scroll-reveal="enter left move 200px over 1s after 0.3s">
					<div class="team-box-1 full-image-box">
						<img src="{{ URL::asset('frontend/images/team1.jpg') }}"  alt="">
						<div class="team-box-1-text-in white-section">
							<div class="team-name-top">founder / ceo</div>
							<h6>ALEX ANDREWS</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							<div class="social-team">
								<ul class="team-social">
									<li class="icon-team">
										<a href="#">&#xf09a;</a>
									</li>
									<li class="icon-team">
										<a href="#">&#xf09b;</a>
									</li>
									<li class="icon-team">
										<a href="#">&#xf0d5;</a>
									</li>
								</ul>	
							</div>
						
							<div class="skills-name">photoshop</div>
							<div class="pro-bar-container pro-bar-margin">					
								<div class="pro-bar bar-70" data-pro-bar-percent="70"></div>
								<div class="text-in-bar"><span class="counter-skills">70</span>%</div>
								<div class="arrow-skills"></div>
							</div>
							
							<div class="skills-name">css3</div>
							<div class="pro-bar-container pro-bar-margin-last">
								<div class="pro-bar bar-93" data-pro-bar-percent="93" data-pro-bar-delay="300"></div>
								<div class="text-in-bar"><span class="counter-skills">93</span>%</div>
								<div class="arrow-skills"></div>
							</div>
					
						</div>
					</div>
				</div>
				<div class="one-third column" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">
					<div class="team-box-1 full-image-box">
						<img src="{{ URL::asset('frontend/images/team2.jpg') }}"  alt="">
						<div class="team-box-1-text-in white-section">
							<div class="team-name-top">art director</div>
							<h6>KARA KULIS</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							<div class="social-team">
								<ul class="team-social">
									<li class="icon-team">
										<a href="#">&#xf099;</a>
									</li>
									<li class="icon-team">
										<a href="#">&#xf0d5;</a>
									</li>
								</ul>	
							</div>
							
							<div class="skills-name">css3</div>
							<div class="pro-bar-container pro-bar-margin">
								<div class="pro-bar bar-93" data-pro-bar-percent="93" data-pro-bar-delay="300"></div>
								<div class="text-in-bar"><span class="counter-skills">93</span>%</div>
								<div class="arrow-skills"></div>
							</div>
							
							<div class="skills-name">JQUERY</div>
							<div class="pro-bar-container pro-bar-margin-last">
								<div class="pro-bar bar-84" data-pro-bar-percent="84" data-pro-bar-delay="400"></div>
								<div class="text-in-bar"><span class="counter-skills">84</span>%</div>
								<div class="arrow-skills"></div>
							</div>
					
						</div>
					</div>
				</div>
				<div class="one-third column" data-scroll-reveal="enter right move 200px over 1s after 0.3s">
					<div class="team-box-1 full-image-box">
						<img src="{{ URL::asset('frontend/images/team3.jpg') }}"  alt="">
						<div class="team-box-1-text-in white-section">
							<div class="team-name-top">development</div>
							<h6>FRANK FURIOUS</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							<div class="social-team">
								<ul class="team-social">
									<li class="icon-team">
										<a href="#">&#xf099;</a>
									</li>
									<li class="icon-team">
										<a href="#">&#xf09a;</a>
									</li>
									<li class="icon-team">
										<a href="#">&#xf0d5;</a>
									</li>
								</ul>	
							</div>
							
							<div class="skills-name">html5</div>
							<div class="pro-bar-container pro-bar-margin">
								<div class="pro-bar bar-87" data-pro-bar-percent="87" data-pro-bar-delay="100"></div>
								<div class="text-in-bar"><span class="counter-skills">87</span>%</div>
								<div class="arrow-skills"></div>
							</div>
							
							<div class="skills-name">wordpress</div>
							<div class="pro-bar-container pro-bar-margin-last">
								<div class="pro-bar bar-64" data-pro-bar-percent="64" data-pro-bar-delay="200"></div>
								<div class="text-in-bar"><span class="counter-skills">64</span>%</div>
								<div class="arrow-skills"></div>
							</div>
					
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
					<div class="section-title">
						<h3>4 Columns with skills</h3>
					</div>
				</div>
				
				<div class="four columns" data-scroll-reveal="enter left move 200px over 1s after 0.8s">
					<div class="team-box-1 full-image-box">
						<img src="{{ URL::asset('frontend/images/team1.jpg') }}"  alt="">
						<div class="team-box-1-text-in grey-section">
							<div class="team-name-top">founder / ceo</div>
							<h6>ALEX ANDREWS</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						
							<div class="skills-name">photoshop</div>
							<div class="pro-bar-container pro-bar-margin">					
								<div class="pro-bar bar-70" data-pro-bar-percent="70"></div>
								<div class="text-in-bar"><span class="counter-skills">70</span>%</div>
								<div class="arrow-skills"></div>
							</div>
							
							<div class="skills-name">css3</div>
							<div class="pro-bar-container pro-bar-margin-last">
								<div class="pro-bar bar-93" data-pro-bar-percent="93" data-pro-bar-delay="300"></div>
								<div class="text-in-bar"><span class="counter-skills">93</span>%</div>
								<div class="arrow-skills"></div>
							</div>
					
						</div>
					</div>
				</div>
				<div class="four columns" data-scroll-reveal="enter left move 200px over 1s after 0.3s">
					<div class="team-box-1 full-image-box">
						<img src="{{ URL::asset('frontend/images/team2.jpg') }}"  alt="">
						<div class="team-box-1-text-in grey-section">
							<div class="team-name-top">art director</div>
							<h6>KARA KULIS</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							
							<div class="skills-name">css3</div>
							<div class="pro-bar-container pro-bar-margin">
								<div class="pro-bar bar-93" data-pro-bar-percent="93" data-pro-bar-delay="300"></div>
								<div class="text-in-bar"><span class="counter-skills">93</span>%</div>
								<div class="arrow-skills"></div>
							</div>
							
							<div class="skills-name">JQUERY</div>
							<div class="pro-bar-container pro-bar-margin-last">
								<div class="pro-bar bar-84" data-pro-bar-percent="84" data-pro-bar-delay="400"></div>
								<div class="text-in-bar"><span class="counter-skills">84</span>%</div>
								<div class="arrow-skills"></div>
							</div>
					
						</div>
					</div>
				</div>
				<div class="four columns" data-scroll-reveal="enter right move 200px over 1s after 0.3s">
					<div class="team-box-1 full-image-box">
						<img src="{{ URL::asset('frontend/images/team3.jpg') }}"  alt="">
						<div class="team-box-1-text-in grey-section">
							<div class="team-name-top">development</div>
							<h6>FRANK FURIOUS</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							
							<div class="skills-name">html5</div>
							<div class="pro-bar-container pro-bar-margin">
								<div class="pro-bar bar-87" data-pro-bar-percent="87" data-pro-bar-delay="100"></div>
								<div class="text-in-bar"><span class="counter-skills">87</span>%</div>
								<div class="arrow-skills"></div>
							</div>
							
							<div class="skills-name">wordpress</div>
							<div class="pro-bar-container pro-bar-margin-last">
								<div class="pro-bar bar-64" data-pro-bar-percent="64" data-pro-bar-delay="200"></div>
								<div class="text-in-bar"><span class="counter-skills">64</span>%</div>
								<div class="arrow-skills"></div>
							</div>
					
						</div>
					</div>
				</div>
				<div class="four columns" data-scroll-reveal="enter right move 200px over 1s after 0.8s">
					<div class="team-box-1 full-image-box">
						<img src="{{ URL::asset('frontend/images/team4.jpg') }}"  alt="">
						<div class="team-box-1-text-in grey-section">
							<div class="team-name-top">development</div>
							<h6>Iva Doe</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							
							<div class="skills-name">wordpress</div>
							<div class="pro-bar-container pro-bar-margin">
								<div class="pro-bar bar-93" data-pro-bar-percent="93" data-pro-bar-delay="300"></div>
								<div class="text-in-bar"><span class="counter-skills">93</span>%</div>
								<div class="arrow-skills"></div>
							</div>
							
							<div class="skills-name">JQUERY</div>
							<div class="pro-bar-container pro-bar-margin-last">
								<div class="pro-bar bar-84" data-pro-bar-percent="84" data-pro-bar-delay="400"></div>
								<div class="text-in-bar"><span class="counter-skills">84</span>%</div>
								<div class="arrow-skills"></div>
							</div>
					
						</div>
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
						<h3>3 Columns carousel</h3>
					</div>
				</div>
				
				<ul id="carousel-team-3col" class="owl-carousel owl-theme">
				
					<li>
				
						<div class="one-third column">
							<div class="team-box-1 full-image-box">
								<img src="{{ URL::asset('frontend/images/team1.jpg') }}"  alt="">
								<div class="team-box-1-text-in white-section">
									<div class="team-name-top">founder / ceo</div>
									<h6>ALEX ANDREWS</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									<div class="social-team">
										<ul class="team-social">
											<li class="icon-team">
												<a href="#">&#xf09a;</a>
											</li>
											<li class="icon-team">
												<a href="#">&#xf09b;</a>
											</li>
											<li class="icon-team">
												<a href="#">&#xf0d5;</a>
											</li>
										</ul>	
									</div>
								
									<div class="skills-name">photoshop</div>
									<div class="pro-bar-container pro-bar-margin">					
										<div class="pro-bar bar-70" data-pro-bar-percent="70"></div>
										<div class="text-in-bar"><span class="counter-skills">70</span>%</div>
										<div class="arrow-skills"></div>
									</div>
									
									<div class="skills-name">css3</div>
									<div class="pro-bar-container pro-bar-margin-last">
										<div class="pro-bar bar-93" data-pro-bar-percent="93" data-pro-bar-delay="300"></div>
										<div class="text-in-bar"><span class="counter-skills">93</span>%</div>
										<div class="arrow-skills"></div>
									</div>
							
								</div>
							</div>
						</div>
						
					</li>
					<li>
					
						<div class="one-third column">
							<div class="team-box-1 full-image-box">
								<img src="{{ URL::asset('frontend/images/team2.jpg') }}"  alt="">
								<div class="team-box-1-text-in white-section">
									<div class="team-name-top">art director</div>
									<h6>KARA KULIS</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									<div class="social-team">
										<ul class="team-social">
											<li class="icon-team">
												<a href="#">&#xf099;</a>
											</li>
											<li class="icon-team">
												<a href="#">&#xf0d5;</a>
											</li>
										</ul>	
									</div>
									
									<div class="skills-name">css3</div>
									<div class="pro-bar-container pro-bar-margin">
										<div class="pro-bar bar-93" data-pro-bar-percent="93" data-pro-bar-delay="300"></div>
										<div class="text-in-bar"><span class="counter-skills">93</span>%</div>
										<div class="arrow-skills"></div>
									</div>
									
									<div class="skills-name">JQUERY</div>
									<div class="pro-bar-container pro-bar-margin-last">
										<div class="pro-bar bar-84" data-pro-bar-percent="84" data-pro-bar-delay="400"></div>
										<div class="text-in-bar"><span class="counter-skills">84</span>%</div>
										<div class="arrow-skills"></div>
									</div>
							
								</div>
							</div>
						</div>
						
					</li>
					<li>
					
						<div class="one-third column">
							<div class="team-box-1 full-image-box">
								<img src="{{ URL::asset('frontend/images/team3.jpg') }}"  alt="">
								<div class="team-box-1-text-in white-section">
									<div class="team-name-top">development</div>
									<h6>FRANK FURIOUS</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									<div class="social-team">
										<ul class="team-social">
											<li class="icon-team">
												<a href="#">&#xf099;</a>
											</li>
											<li class="icon-team">
												<a href="#">&#xf09a;</a>
											</li>
											<li class="icon-team">
												<a href="#">&#xf0d5;</a>
											</li>
										</ul>	
									</div>
									
									<div class="skills-name">html5</div>
									<div class="pro-bar-container pro-bar-margin">
										<div class="pro-bar bar-87" data-pro-bar-percent="87" data-pro-bar-delay="100"></div>
										<div class="text-in-bar"><span class="counter-skills">87</span>%</div>
										<div class="arrow-skills"></div>
									</div>
									
									<div class="skills-name">wordpress</div>
									<div class="pro-bar-container pro-bar-margin-last">
										<div class="pro-bar bar-64" data-pro-bar-percent="64" data-pro-bar-delay="200"></div>
										<div class="text-in-bar"><span class="counter-skills">64</span>%</div>
										<div class="arrow-skills"></div>
									</div>
							
								</div>
							</div>
						</div>
						
					</li>
					<li>
					
						<div class="one-third column">
							<div class="team-box-1 full-image-box">
								<img src="{{ URL::asset('frontend/images/team1.jpg') }}"  alt="">
								<div class="team-box-1-text-in white-section">
									<div class="team-name-top">founder / ceo</div>
									<h6>ALEX ANDREWS</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									<div class="social-team">
										<ul class="team-social">
											<li class="icon-team">
												<a href="#">&#xf09a;</a>
											</li>
											<li class="icon-team">
												<a href="#">&#xf09b;</a>
											</li>
											<li class="icon-team">
												<a href="#">&#xf0d5;</a>
											</li>
										</ul>	
									</div>
								
									<div class="skills-name">photoshop</div>
									<div class="pro-bar-container pro-bar-margin">					
										<div class="pro-bar bar-70" data-pro-bar-percent="70"></div>
										<div class="text-in-bar"><span class="counter-skills">70</span>%</div>
										<div class="arrow-skills"></div>
									</div>
									
									<div class="skills-name">css3</div>
									<div class="pro-bar-container pro-bar-margin-last">
										<div class="pro-bar bar-93" data-pro-bar-percent="93" data-pro-bar-delay="300"></div>
										<div class="text-in-bar"><span class="counter-skills">93</span>%</div>
										<div class="arrow-skills"></div>
									</div>
							
								</div>
							</div>
						</div>
						
					</li>
					<li>
					
						<div class="one-third column">
							<div class="team-box-1 full-image-box">
								<img src="{{ URL::asset('frontend/images/team2.jpg') }}"  alt="">
								<div class="team-box-1-text-in white-section">
									<div class="team-name-top">art director</div>
									<h6>KARA KULIS</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									<div class="social-team">
										<ul class="team-social">
											<li class="icon-team">
												<a href="#">&#xf099;</a>
											</li>
											<li class="icon-team">
												<a href="#">&#xf0d5;</a>
											</li>
										</ul>	
									</div>
									
									<div class="skills-name">css3</div>
									<div class="pro-bar-container pro-bar-margin">
										<div class="pro-bar bar-93" data-pro-bar-percent="93" data-pro-bar-delay="300"></div>
										<div class="text-in-bar"><span class="counter-skills">93</span>%</div>
										<div class="arrow-skills"></div>
									</div>
									
									<div class="skills-name">JQUERY</div>
									<div class="pro-bar-container pro-bar-margin-last">
										<div class="pro-bar bar-84" data-pro-bar-percent="84" data-pro-bar-delay="400"></div>
										<div class="text-in-bar"><span class="counter-skills">84</span>%</div>
										<div class="arrow-skills"></div>
									</div>
							
								</div>
							</div>
						</div>
						
					</li>
					<li>
					
						<div class="one-third column">
							<div class="team-box-1 full-image-box">
								<img src="{{ URL::asset('frontend/images/team3.jpg') }}"  alt="">
								<div class="team-box-1-text-in white-section">
									<div class="team-name-top">development</div>
									<h6>FRANK FURIOUS</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									<div class="social-team">
										<ul class="team-social">
											<li class="icon-team">
												<a href="#">&#xf099;</a>
											</li>
											<li class="icon-team">
												<a href="#">&#xf09a;</a>
											</li>
											<li class="icon-team">
												<a href="#">&#xf0d5;</a>
											</li>
										</ul>	
									</div>
									
									<div class="skills-name">html5</div>
									<div class="pro-bar-container pro-bar-margin">
										<div class="pro-bar bar-87" data-pro-bar-percent="87" data-pro-bar-delay="100"></div>
										<div class="text-in-bar"><span class="counter-skills">87</span>%</div>
										<div class="arrow-skills"></div>
									</div>
									
									<div class="skills-name">wordpress</div>
									<div class="pro-bar-container pro-bar-margin-last">
										<div class="pro-bar bar-64" data-pro-bar-percent="64" data-pro-bar-delay="200"></div>
										<div class="text-in-bar"><span class="counter-skills">64</span>%</div>
										<div class="arrow-skills"></div>
									</div>
							
								</div>
							</div>
						</div>
					
						
					</li>
								
				</ul>
				
			</div>
		</section>	
	
		
	<!-- SECTION
    ================================================== -->	
	
		<section class="section white-section section-padding-top-bottom">
			<div class="container">
				<div class="sixteen columns">
					<div class="section-title">
						<h3>4 Columns carousel</h3>
					</div>
				</div>
				
				<ul id="carousel-team-4col" class="owl-carousel owl-theme">
				
					<li>
				
						<div class="four columns">
							<div class="team-box-1 full-image-box">
								<img src="{{ URL::asset('frontend/images/team1.jpg') }}"  alt="">
								<div class="team-box-1-text-in grey-section">
									<div class="team-name-top">founder / ceo</div>
									<h6>ALEX ANDREWS</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								
									<div class="skills-name">photoshop</div>
									<div class="pro-bar-container pro-bar-margin">					
										<div class="pro-bar bar-70" data-pro-bar-percent="70"></div>
										<div class="text-in-bar"><span class="counter-skills">70</span>%</div>
										<div class="arrow-skills"></div>
									</div>
									
									<div class="skills-name">css3</div>
									<div class="pro-bar-container pro-bar-margin-last">
										<div class="pro-bar bar-93" data-pro-bar-percent="93" data-pro-bar-delay="300"></div>
										<div class="text-in-bar"><span class="counter-skills">93</span>%</div>
										<div class="arrow-skills"></div>
									</div>
							
								</div>
							</div>
						</div>
						
					</li>
					<li>
					
						<div class="four columns">
							<div class="team-box-1 full-image-box">
								<img src="{{ URL::asset('frontend/images/team2.jpg') }}"  alt="">
								<div class="team-box-1-text-in grey-section">
									<div class="team-name-top">art director</div>
									<h6>KARA KULIS</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									
									<div class="skills-name">css3</div>
									<div class="pro-bar-container pro-bar-margin">
										<div class="pro-bar bar-93" data-pro-bar-percent="93" data-pro-bar-delay="300"></div>
										<div class="text-in-bar"><span class="counter-skills">93</span>%</div>
										<div class="arrow-skills"></div>
									</div>
									
									<div class="skills-name">JQUERY</div>
									<div class="pro-bar-container pro-bar-margin-last">
										<div class="pro-bar bar-84" data-pro-bar-percent="84" data-pro-bar-delay="400"></div>
										<div class="text-in-bar"><span class="counter-skills">84</span>%</div>
										<div class="arrow-skills"></div>
									</div>
							
								</div>
							</div>
						</div>
						
					</li>
					<li>
					
						<div class="four columns">
							<div class="team-box-1 full-image-box">
								<img src="{{ URL::asset('frontend/images/team3.jpg') }}"  alt="">
								<div class="team-box-1-text-in grey-section">
									<div class="team-name-top">development</div>
									<h6>FRANK FURIOUS</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									
									<div class="skills-name">html5</div>
									<div class="pro-bar-container pro-bar-margin">
										<div class="pro-bar bar-87" data-pro-bar-percent="87" data-pro-bar-delay="100"></div>
										<div class="text-in-bar"><span class="counter-skills">87</span>%</div>
										<div class="arrow-skills"></div>
									</div>
									
									<div class="skills-name">wordpress</div>
									<div class="pro-bar-container pro-bar-margin-last">
										<div class="pro-bar bar-64" data-pro-bar-percent="64" data-pro-bar-delay="200"></div>
										<div class="text-in-bar"><span class="counter-skills">64</span>%</div>
										<div class="arrow-skills"></div>
									</div>
							
								</div>
							</div>
						</div>
						
					</li>
					<li>
					
						<div class="four columns">
							<div class="team-box-1 full-image-box">
								<img src="{{ URL::asset('frontend/images/team4.jpg') }}"  alt="">
								<div class="team-box-1-text-in grey-section">
									<div class="team-name-top">development</div>
									<h6>Iva Doe</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									
									<div class="skills-name">wordpress</div>
									<div class="pro-bar-container pro-bar-margin">
										<div class="pro-bar bar-93" data-pro-bar-percent="93" data-pro-bar-delay="300"></div>
										<div class="text-in-bar"><span class="counter-skills">93</span>%</div>
										<div class="arrow-skills"></div>
									</div>
									
									<div class="skills-name">JQUERY</div>
									<div class="pro-bar-container pro-bar-margin-last">
										<div class="pro-bar bar-84" data-pro-bar-percent="84" data-pro-bar-delay="400"></div>
										<div class="text-in-bar"><span class="counter-skills">84</span>%</div>
										<div class="arrow-skills"></div>
									</div>
							
								</div>
							</div>
						</div>
									
					</li>
					<li>
					
					
						<div class="four columns">
							<div class="team-box-1 full-image-box">
								<img src="{{ URL::asset('frontend/images/team1.jpg') }}"  alt="">
								<div class="team-box-1-text-in grey-section">
									<div class="team-name-top">founder / ceo</div>
									<h6>ALEX ANDREWS</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								
									<div class="skills-name">photoshop</div>
									<div class="pro-bar-container pro-bar-margin">					
										<div class="pro-bar bar-70" data-pro-bar-percent="70"></div>
										<div class="text-in-bar"><span class="counter-skills">70</span>%</div>
										<div class="arrow-skills"></div>
									</div>
									
									<div class="skills-name">css3</div>
									<div class="pro-bar-container pro-bar-margin-last">
										<div class="pro-bar bar-93" data-pro-bar-percent="93" data-pro-bar-delay="300"></div>
										<div class="text-in-bar"><span class="counter-skills">93</span>%</div>
										<div class="arrow-skills"></div>
									</div>
							
								</div>
							</div>
						</div>
						
					</li>
					<li>
					
						<div class="four columns">
							<div class="team-box-1 full-image-box">
								<img src="{{ URL::asset('frontend/images/team2.jpg') }}"  alt="">
								<div class="team-box-1-text-in grey-section">
									<div class="team-name-top">art director</div>
									<h6>KARA KULIS</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									
									<div class="skills-name">css3</div>
									<div class="pro-bar-container pro-bar-margin">
										<div class="pro-bar bar-93" data-pro-bar-percent="93" data-pro-bar-delay="300"></div>
										<div class="text-in-bar"><span class="counter-skills">93</span>%</div>
										<div class="arrow-skills"></div>
									</div>
									
									<div class="skills-name">JQUERY</div>
									<div class="pro-bar-container pro-bar-margin-last">
										<div class="pro-bar bar-84" data-pro-bar-percent="84" data-pro-bar-delay="400"></div>
										<div class="text-in-bar"><span class="counter-skills">84</span>%</div>
										<div class="arrow-skills"></div>
									</div>
							
								</div>
							</div>
						</div>
						
					</li>
					<li>
					
						<div class="four columns">
							<div class="team-box-1 full-image-box">
								<img src="{{ URL::asset('frontend/images/team3.jpg') }}"  alt="">
								<div class="team-box-1-text-in grey-section">
									<div class="team-name-top">development</div>
									<h6>FRANK FURIOUS</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									
									<div class="skills-name">html5</div>
									<div class="pro-bar-container pro-bar-margin">
										<div class="pro-bar bar-87" data-pro-bar-percent="87" data-pro-bar-delay="100"></div>
										<div class="text-in-bar"><span class="counter-skills">87</span>%</div>
										<div class="arrow-skills"></div>
									</div>
									
									<div class="skills-name">wordpress</div>
									<div class="pro-bar-container pro-bar-margin-last">
										<div class="pro-bar bar-64" data-pro-bar-percent="64" data-pro-bar-delay="200"></div>
										<div class="text-in-bar"><span class="counter-skills">64</span>%</div>
										<div class="arrow-skills"></div>
									</div>
							
								</div>
							</div>
						</div>
											
					</li>
					<li>
					
						<div class="four columns">
							<div class="team-box-1 full-image-box">
								<img src="{{ URL::asset('frontend/images/team4.jpg') }}"  alt="">
								<div class="team-box-1-text-in grey-section">
									<div class="team-name-top">development</div>
									<h6>Iva Doe</h6>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
									
									<div class="skills-name">wordpress</div>
									<div class="pro-bar-container pro-bar-margin">
										<div class="pro-bar bar-93" data-pro-bar-percent="93" data-pro-bar-delay="300"></div>
										<div class="text-in-bar"><span class="counter-skills">93</span>%</div>
										<div class="arrow-skills"></div>
									</div>
									
									<div class="skills-name">JQUERY</div>
									<div class="pro-bar-container pro-bar-margin-last">
										<div class="pro-bar bar-84" data-pro-bar-percent="84" data-pro-bar-delay="400"></div>
										<div class="text-in-bar"><span class="counter-skills">84</span>%</div>
										<div class="arrow-skills"></div>
									</div>
							
								</div>
							</div>
						</div>
						
					</li>
					
								
				</ul>
				
			</div>
		</section>	
	
	


	@endsection