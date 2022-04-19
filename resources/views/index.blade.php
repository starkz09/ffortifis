@extends('Frontend.layouts.main')

@section('main-container')



<!-- HOME SECTION
    ================================================== -->











<section class="home">

	<a href="#scroll-link" class="arrow-down scroll">&#xf103;</a>

	<div class="slider-container">
		<div class="tp-banner-container">
			<div class="tp-banner">
				<ul>
					<li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-saveperformance="on" data-title="Intro Slide">

						<!-- <img src="resources/images/118.png"  alt="slidebg1" data-lazyload="resources/images/118.png" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> -->



						<canvas></canvas>
						<div class="absolute-center">
							<i class="fa fa-fw fa-times-circle-o"></i>
						<!-- <link rel="stylesheet" href="test2.css" /> -->
						<script type="text/javascript" src="test2.js"></script>




						<div class="tp-caption black-heavy-2 randomrotate tp-resizeme" data-speed="200" data-start="300" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 500; max-width: auto; max-height: auto; white-space: nowrap;">
							<span class="slider-text-color">Extreme</span> protection of your data
						</div>
						<div class="tp-caption black-small randomrotate tp-resizeme" data-speed="200" data-start="300" data-easing="Power3.easeInOut" data-splitin="chars" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" style="z-index: 500; max-width: auto; max-height: auto; white-space: nowrap;">
							WE ARE RELENTLESS IN MOVING BOUNDARIES
						</div>
						<a href="{{ URL::asset('trail') }}">
							<div class="button-slider">Free Trail !</div>
						</a>

					</li>



					<!-- <li data-transition="fade" data-slotamount="1" data-masterspeed="500"  data-saveperformance="on"  data-title="Intro Slide">

							


								
									<div class="tp-caption black-heavy-2 randomrotate tp-resizeme"
										data-speed="200"
										data-start="300"
										data-easing="Power3.easeInOut"
										data-elementdelay="0.1"
										data-endelementdelay="0.1"
										style="z-index: 500; max-width: auto; max-height: auto; white-space: nowrap;">
										Security that’s always<span class="slider-text-color" > on</span>
									</div>
									<div class="tp-caption black-small randomrotate tp-resizeme"
										data-speed="200"
										data-start="300"
										data-easing="Power3.easeInOut"
										data-splitin="chars"
										data-splitout="none"
										data-elementdelay="0.1"
										data-endelementdelay="0.1"
										style="z-index: 500; max-width: auto; max-height: auto; white-space: nowrap;">
										WE CRAFT EFFICIENT CYBER SECURITY SOLUTIONS
									</div>
								<a href="trail.html"><div class="button-slider">Free Trail !</div></a>	

							</li> -->
				</ul>
			</div>
		</div>
	</div>

</section>




<!-- SECTION
    ================================================== -->

<section class="section white-section section-padding-top" id="scroll-link">
	<div class="container">
		<div class="sixteen columns">
			<div class="section-title">
				<h2>WELCOME TO FORTIFIS</h2>
				<div class="subtitle">Multipurpose <span class="subtitle-written">Cyber Security</span> Solution</div>
			</div>
		</div>
		<div class="sixteen columns remove-bottom" data-scroll-reveal="enter bottom move 400px over 1s after 0.1s">
			<div class="full-image">
				<img src="{{ URL::asset('frontend/images/home11.png') }}" alt="">
			</div>
		</div>
	</div>
</section>

<!-- SECTION
    ================================================== -->

<section class="section grey-section section-padding-top-bottom">
	<div class="container">
		<div class="one-third column" data-scroll-reveal="enter left move 200px over 1s after 0.3s">
			<div class="services-boxes-1">
				<div class="icon-box">&#xf085;</div>
				<h5>SECURE YOUR ORGANIZATION FROM HIDDEN THREATS</h5>
				<p><br>Active Breach Protection by Fortifis Continuously Protects Your Network, Endpoints and Cloud Connected Applications with Pre-Isolation Technology.</p>
			</div>
		</div>
		<div class="one-third column" data-scroll-reveal="enter bottom move 200px over 1s after 0.3s">
			<div class="services-boxes-1">
				<div class="icon-box">&#xf121;</div>
				<h5>TRUSTED TO PREVENT BREACHES</h5>
				<p><br>Organizations Trust Fortifis Cybersecurity to Protect Their Environments from Cyber Threats.</p>
			</div>
		</div>
		<div class="one-third column" data-scroll-reveal="enter right move 200px over 1s after 0.3s">
			<div class="services-boxes-1">
				<div class="icon-box">&#xf06e;</div>
				<h5>RE-ARCHITECTED SECURITY - ZERO TRUST ENDPOINTS</h5>
				<p><br>Frictionless Next-Generation Endpoint Protection for All Users, and Systems Keeps Your Organization's Endpoints Operating At Peak Performance.</p>
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
				<h3>ASSESSMENT PROCESS</h3>
				<div class="subtitle">Carefully <span class="subtitle-written">crafted security implementation</span> come together into one solution.</div>
			</div>
		</div>
		<div class="sixteen columns">
			<div id="cd-timeline" class="cd-container">
				<div class="cd-timeline-block">
					<div class="cd-timeline-img">&#xf0eb;</div> <!-- cd-timeline-img -->

					<div class="cd-timeline-content">
						<h6>PREPARATION</h6>
						<p>Our preparation exercices and guidance bolster your cyber resiliency by using governmental startards & frameworks, as well as industry regulations to create incident response policies and plans keep your business running with minimal disruption..</p>
						<a href="#0" class="cd-read-more">Read more</a>
						<span class="cd-date">20%</span>
					</div> <!-- cd-timeline-content -->
				</div> <!-- cd-timeline-block -->

				<div class="cd-timeline-block">
					<div class="cd-timeline-img">&#xf200;</div> <!-- cd-timeline-img -->

					<div class="cd-timeline-content">
						<h6>IDENTIFICATION</h6>
						<p>Discover how implementing advanced defense and incident reponse software can quickly detect and eradicate threats to your enviornment.</p>
						<a href="#0" class="cd-read-more">Read more</a>
						<span class="cd-date">40%</span>
					</div> <!-- cd-timeline-content -->
				</div> <!-- cd-timeline-block -->

				<div class="cd-timeline-block">
					<div class="cd-timeline-img">&#xf0d0;</div> <!-- cd-timeline-img -->

					<div class="cd-timeline-content">
						<h6>CONTAINMENT</h6>
						<p>Containment of the breach is necessary so that it doesn’t spread and cause further damage to your business. If you can, disconnect affected devices from the Internet. Have short-term and long-term containment strategies ready.</p>
						<a href="#0" class="cd-read-more">Read more</a>
						<span class="cd-date">60%</span>
					</div> <!-- cd-timeline-content -->
				</div> <!-- cd-timeline-block -->

				<div class="cd-timeline-block">
					<div class="cd-timeline-img">&#xf085;</div> <!-- cd-timeline-img -->

					<div class="cd-timeline-content">
						<h6>ERADICATION</h6>
						<p>Once you’ve contained the issue, you need to find and eliminate the root cause of the breach. This means all malware should be securely removed, systems should again be hardened and patched, and updates should be applied.</p>
						<a href="#0" class="cd-read-more">Read more</a>
						<span class="cd-date">80%</span>
					</div> <!-- cd-timeline-content -->
				</div> <!-- cd-timeline-block -->

				<div class="cd-timeline-block">
					<div class="cd-timeline-img">&#xf201;</div> <!-- cd-timeline-img -->

					<div class="cd-timeline-content">
						<h6>RECOVERY</h6>
						<p>Recovery from an advanced cyber attack relies on sophisticated tooling, expertise, and often leads into root cause analysis and forensic investigation.</p>
						<a href="#0" class="cd-read-more">Read more</a>
						<span class="cd-date">100%</span>
					</div> <!-- cd-timeline-content -->
				</div> <!-- cd-timeline-block -->
			</div>
		</div>
	</div>
</section>

<!-- SECTION
    ================================================== -->

<section class="section parallax-section parallax-section-padding-top-bottom">

	<div class="parallax-1"></div>

	<div class="container">
		<div class="container">
			<div class="four columns">
				<div class="facts-box-1">
					<div class="facts-box-1-num"><span class="counter">82</span>
						<div class="line"></div>
					</div>
					<h6>FINISHED PROJECTS</h6>
				</div>
			</div>
			<div class="four columns">
				<div class="facts-box-1">
					<div class="facts-box-1-num"><span class="counter">8723</span>
						<div class="line"></div>
					</div>
					<h6>VULNERABILITY ASSESSMENTS</h6>
				</div>
			</div>
			<div class="four columns">
				<div class="facts-box-1">
					<div class="facts-box-1-num"><span class="counter">513</span>
						<div class="line"></div>
					</div>
					<h6>ONGOING PROJECTS</h6>
				</div>
			</div>
			<div class="four columns">
				<div class="facts-box-1">
					<div class="facts-box-1-num"><span class="counter">3419</span>
						<div class="line"></div>
					</div>
					<h6>CUSTOM COUNTERS</h6>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- SECTION
    ================================================== -->

<section class="section white-section section-padding-top-bottom">
	<div class="container">
		<div class="five columns">
			<div class="cd-product cd-container">
				<div class="cd-product-wrapper">
					<img src="{{ URL::asset('frontend/images/iphone.png') }}" alt="Preview image">
					<ul>
						<li class="cd-single-point">
							<a class="cd-img-replace" href="#0">More</a>
							<div class="cd-more-info cd-top">
								<h6>Data Leakage</h6>
								<p>Mobile apps are often the cause of unintentional data leakage. These are typically free apps found in official app stores that perform as advertised, but also send personal and potentially corporate data to a remote server.</p>
								<a href="#0" class="cd-close-info cd-img-replace">Close</a>
							</div>
						</li> <!-- .cd-single-point -->

						<li class="cd-single-point">
							<a class="cd-img-replace" href="#0">More</a>
							<div class="cd-more-info cd-top">
								<h6>Unsecured Wi-Fi</h6>
								<p>No one wants to burn through their cellular data when wireless hot spots are available—but free Wi-Fi networks are usually unsecured.</p>
								<a href="#0" class="cd-close-info cd-img-replace">Close</a>
							</div>
						</li> <!-- .cd-single-point -->

						<li class="cd-single-point">
							<a class="cd-img-replace" href="#0">More</a>
							<div class="cd-more-info cd-right">
								<h6>Spyware</h6>
								<p>Although many mobile users worry about malware sending data streams back to cybercriminals, there’s a key threat closer to home: Spyware. In many cases, the attacker keep track of their whereabouts and activity.</p>
								<a href="#0" class="cd-close-info cd-img-replace">Close</a>
							</div>
						</li> <!-- .cd-single-point -->

						<li class="cd-single-point">
							<a class="cd-img-replace" href="#0">More</a>
							<div class="cd-more-info cd-left">
								<h6>Phishing Attacks</h6>
								<p>Mobile devices are always powered-on, they are the front lines of most phishing attack. Users are also more susceptible because email apps display less information to accommodate the smaller screen sizes.</p>
								<a href="#0" class="cd-close-info cd-img-replace">Close</a>
							</div>
						</li> <!-- .cd-single-point -->
					</ul>
				</div> <!-- .cd-product-wrapper -->
			</div> <!-- .cd-product -->
		</div>
		<div class="eleven columns">
			<div class="section-title left">
				<h3>Points of Vulnerabilities</h3>
				<div class="subtitle left">A vulnerability in any type of information systems, infrastructures, computer networks or personal computer devices, can cause <span class="subtitle-written">an offensive action</span> that targets computer using various methods to steal, alter or destroy data or information systems.</div>
			</div>
			<div class="services-boxes-1 interest-padding" data-scroll-reveal="enter right move 200px over 1s after 0.3s">
				<div class="icon-box">&#xf10a;</div>
				<h6>Denial-of-service (DoS)</h6>
				<p>A denial-of-service attack overwhelms a system’s resources so that it cannot respond to service requests. A DDoS attack is also an attack on system’s resources, but it is launched from a large number of other host machines that are infected by malicious software controlled by the attacker.</p>
			</div>
			<div class="services-boxes-1 interest-padding" data-scroll-reveal="enter right move 200px over 1s after 0.3s">
				<div class="icon-box">&#xf06e;</div>
				<h6>Man-in-the-middle (MitM)</h6>
				<p>A MitM attack occurs when a hacker inserts itself between the communications of a client and a server. An attacker hijacks a session between a trusted client and network server. The attacking computer substitutes its IP address for the trusted client while the server continues the session, believing it is communicating with the client.</p>
			</div>
			<div class="services-boxes-1 interest-padding" data-scroll-reveal="enter right move 200px over 1s after 0.3s">
				<div class="icon-box">&#xf121;</div>
				<h6>SQL Injection</h6>
				<p>SQL injection has become a common issue with database-driven websites. It occurs when a malefactor executes a SQL query to the database via the input data from the client to server. SQL commands are inserted into data-plane input (for example, instead of the login or password) in order to run predefined SQL commands.</p>
			</div>
			<div class="services-boxes-1 interest-padding" data-scroll-reveal="enter right move 200px over 1s after 0.3s">
				<div class="icon-box">&#xf121;</div>
				<h6>Cross-site scripting (XSS)</h6>
				<p>XSS attacks use third-party web resources to run scripts in the victim’s web browser or scriptable application. Specifically, the attacker injects a payload with malicious JavaScript into a website’s database. When the victim requests a page from the website, the website transmits the page, with the attacker’s payload as part of the HTML body, to the victim’s browser, which executes the malicious script.</p>
			</div>
		</div>
	</div>
</section>

<!-- SECTION
    ================================================== -->

<section class="section grey-section section-padding-top">
	<div class="container">
		<div class="sixteen columns">
			<div class="section-title">
				<h3>OUR LATEST WORKS</h3>
				<div class="subtitle">WE ARE <span class="subtitle-written">Fortifis</span> SECURITY AGENCY.</div>
			</div>
		</div>
	</div>
	<div class="portfolio-wrap-1">
		<a href="#" class="animsition-link">
			<div class="portfolio-box-1">
				<div class="mask-1"></div>
				<img src="{{ URL::asset('frontend/images/portfolio/1.png') }}" alt="">
				<h6>Identity and Access Management</h6>
			</div>
		</a>
		<a href="#" class="animsition-link">
			<div class="portfolio-box-1">
				<div class="mask-1"></div>
				<img src="{{ URL::asset('frontend/images/portfolio/2.png') }}" alt="">
				<h6>Security and Vulnerability Management</h6>
			</div>
		</a>
		<a href="#" class="animsition-link">
			<div class="portfolio-box-1">
				<div class="mask-1"></div>
				<img src="{{ URL::asset('frontend/images/portfolio/3.png') }}" alt="">
				<h6>Threat Detection and Prevention</h6>
			</div>
		</a>
		<a href="#" class="animsition-link">
			<div class="portfolio-box-1">
				<div class="mask-1"></div>
				<img src="{{ URL::asset('frontend/images/portfolio/4.png') }}" alt="">
				<h6>PENTESTING</h6>
			</div>
		</a>
	</div>
	<div class="call-to-action-1">
		<div class="action-top-1">over 80 finished projects</div>
		<h5>ALL WORKS</h5>
		<a href="#" class="button-1 animsition-link">Discover</a>
	</div>
</section>

<!-- SECTION
    ================================================== -->

<!--What client say-->

<!-- SECTION
    ================================================== -->

<section class="section grey-section section-padding-top-bottom">
	<div class="container">
		<div class="sixteen columns">
			<ul id="owl-logos" class="owl-carousel owl-theme">
				<li><img src="{{ URL::asset('frontend/images/logos/1.png') }}" alt="" /></li>
				<li><img src="{{ URL::asset('frontend/images/logos/2.png') }}" alt="" /></li>
				<li><img src="{{ URL::asset('frontend/images/logos/3.png') }}" alt="" /></li>
				<li><img src="{{ URL::asset('frontend/images/logos/4.png') }}" alt="" /></li>
				<li><img src="{{ URL::asset('frontend/images/logos/1.png') }}" alt="" /></li>
				<li><img src="{{ URL::asset('frontend/images/logos/2.png') }}" alt="" /></li>
				<li><img src="{{ URL::asset('frontend/images/logos/3.png') }}" alt="" /></li>
				<li><img src="{{ URL::asset('frontend/images/logos/4.png') }}" alt="" /></li>
			</ul>
		</div>
	</div>
</section>


















@endsection
