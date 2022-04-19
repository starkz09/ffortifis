<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>FORTIFIS.NET|Home</title>
	<link rel="icon" href="{{ asset('frontend/images/icon.png')}}">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="{{ asset('frontend/css/base.css')}}" />
	<link rel="stylesheet" href="{{ asset('frontend/css/skeleton.css')}}" />
	<link rel="stylesheet" href="{{ asset('frontend/css/layout(copy).css')}}" />
	<link rel="stylesheet" href="{{ asset('frontend/css/settings.css')}}" />
	<link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.css')}}" />
	<link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css')}}" />
	<link rel="stylesheet" href="{{ asset('frontend/css/retina.css')}}" />
	<link rel="stylesheet" href="{{ asset('frontend/css/animsition.min.css')}}" />
	<link rel="stylesheet" href="{{ asset('frontend/css/popup.css')}}" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="alternate stylesheet" type="text/css" href="{{ asset('frontend/css/colors/color-gold.css')}}" title="1">
	<link rel="alternate stylesheet" type="text/css" href="{{ asset('frontend/css/colors/color-2.css')}}" title="2">
	<link rel="alternate stylesheet" type="text/css" href="{{ asset('frontend/css/colors/color-3.css')}}" title="3">
	<link rel="alternate stylesheet" type="text/css" href="{{ asset('frontend/css/colors/color-4.css')}}" title="4">
	<link rel="alternate stylesheet" type="text/css" href="{{ asset('frontend/css/colors/color-5.css')}}" title="5">
	<link rel="alternate stylesheet" type="text/css" href="{{ asset('frontend/css/colors/color-6.css')}}" title="6">
	<link rel="alternate stylesheet" type="text/css" href="{{ asset('frontend/css/colors/color-7.css')}}" title="7">
	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css"> -->
 	
    <!-- Top - nav bar css designs(Harsh) -->
	
</head>

<body>
	<!-- Primary Page Layout
	================================================== -->
	<div class="Animation">

		<!-- <div id="switch">
        <div class="content-switcher" >        
			<p>Color Options:</p>
			<ul class="header">           
				<li><a href="#" onClick="setActiveStyleSheet('1'); return false;" class="button color switch" style="background-color:#cfa144"></a></li>
				<li><a href="#" onClick="setActiveStyleSheet('2'); return false;" class="button color switch" style="background-color:#9b59b6"></a></li>
				<li><a href="#" onClick="setActiveStyleSheet('3'); return false;" class="button color switch" style="background-color:#2ecc71"></a></li>
				<li><a href="#" onClick="setActiveStyleSheet('4'); return false;" class="button color switch" style="background-color:#e74c3c"></a></li>
				<li><a href="#" onClick="setActiveStyleSheet('5'); return false;" class="button color switch" style="background-color:#34495e"></a></li> 
				<li><a href="#" onClick="setActiveStyleSheet('6'); return false;" class="button color switch" style="background-color:#f1c40f"></a></li>
				<li><a href="#" onClick="setActiveStyleSheet('7'); return false;" class="button color switch" style="background-color:#3498db"></a></li>
			</ul>        
			<div class="clear"></div>    
			<div id="hide">
				<img  src="{{ asset('frontend/images/close.png')}}" alt="" /> 
			</div>
        </div>
	</div>
	<div id="show" style="display: block;">
        <div id="setting"></div>
    </div> -->
		<!-- Switch Panel -->



		<!-- MENU
    ================================================== -->
		<!-- Top-Bar Menu  -->


		<div class="header-top">
			<div class="navbartop">
			<a href="{{ URL::asset('contact') }}" class="animsition-link">Login</a>
			<button class="view-modal button">Contact</button>
			<div class="dropdowntop">
				<button class="dropbtn">US Dollars
				<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdowntop-content">
					<a href="#">US Dollars</a>
					<a href="#">Euro</a>
					<a href="#">British Pound</a>
				</div>
			</div>
			<a href="#Cart"><i class="fa fa-shopping-cart" style="font-size:20px"></i></a>
		</div>
			<header class="cd-main-header">
				<a class="cd-logo animsition-link" href="{{URL::asset('/') }}"><img src="{{ asset('frontend/images/logo.png')}}" alt="Logo"></a>

				<ul class="cd-header-buttons">
					<li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
					<li><a class="cd-nav-trigger" href="#cd-primary-nav"><span></span></a></li>
				</ul> <!-- cd-header-buttons -->
			</header>

			<nav class="cd-nav">
				<ul id="cd-primary-nav" class="cd-primary-nav is-fixed">

				<li class="has-children">
						<a href="#">Why Fortifis?</a>

						<ul class="cd-nav-gallery is-hidden">
							<li class="go-back"><a href="#0">Menu</a></li>
							<li class="see-all"><a href="{{ URL::asset('contact') }}" class="animsition-link">Contact Us !</a></li>
							<li>
								<a class="cd-nav-item animsition-link" href="{{ URL::asset('vision') }}">
									<img src="{{ asset('frontend/images/vision.png')}}" alt="Product Image">
									<h3>VISION</h3>
								</a>
							</li>

							<li>
								<a class="cd-nav-item animsition-link" href="{{ URL::asset('mission') }}">
									<img src="{{ asset('frontend/images/mission.png')}}" alt="Product Image">
									<h3>MISSION</h3>
								</a>
							</li>

							<li>
								<a class="cd-nav-item animsition-link" href="{{ URL::asset('ourteam') }}">
									<img src="{{ asset('frontend/images/team.png')}}" alt="Product Image">
									<h3>Our TEAM</h3>
								</a>
							</li>

							<li>
								<a class="cd-nav-item animsition-link" href="{{ URL::asset('ourcustomers') }}">
									<img src="{{ asset('frontend/images/customers.png')}}" alt="Product Image">
									<h3>Our Customers</h3>
								</a>
							</li>
						</ul>
					</li>
















					<li class="has-children">
						<a href="#">SHOP</a>

						<ul class="cd-secondary-nav is-hidden">
							<li class="go-back"><a href="#0">Menu</a></li>
							<li class="see-all"><a href="trail') }}">Get a Free Trail !</a></li>


							<li class="has-children">
								<a href="{{ URL::asset('tlsssl') }}">TLS/SSL Certificates</a>


							</li>
							<li class="has-children">
								<a href="{{ URL::asset('signingcertificates') }}">Signing Certificates</a>


							</li>

							<li class="has-children">
								<a href="{{ URL::asset('additionalproducts') }}">Additional Products</a>


							</li>

							<li class="has-children">
								<a>Enterprise Management</a>

								<ul class="is-hidden">
									<li class="go-back"><a href="#0">Pages</a></li>
									<li>
										<a href="{{ URL::asset('certificatemanager') }}">Certificate Manager</a>


									</li>
									<li>
										<a href="{{ URL::asset('identityplat') }}">IOT Identity Platform</a>


									</li>
									<li>
										<a href="{{ URL::asset('quantumsafecertificate') }}">Quantum Safe Certificate</a>


									</li>

								</ul>
							</li>
						</ul>
					</li>



					<li class="has-children">
						<a href="#">Products</a>


						<ul class="cd-secondary-nav is-hidden">
							<li class="go-back"><a href="#0">Menu</a></li>
							<li class="see-all"><a href="{{ URL::asset('trail') }}">Get a Free Trail !</a></li>


							<li>
								<a href="{{ URL::asset('network-security') }}">Network Security</a>


							</li>

							<li>
								<a href="{{ URL::asset('cloudsecurity') }}">Cloud Security</a>


							</li>

							<li>
								<a href="{{ URL::asset('websecurity') }}">Web Security</a>


							</li>

							<li class="has-children">
								<a>Hardware Products</a>

								<ul class="is-hidden">
									<li class="go-back"><a href="#0">Pages</a></li>
									<li class="has-children">
										<a href="#0">Access Procducts</a>

										<ul class="is-hidden">
											<li class="go-back"><a href="#0">Portfolio</a></li>
											<li><a href="{{ URL::asset('wirelesslan') }}" class="animsition-link">Wireless LAN</a></li>
											<li><a href="{{ URL::asset('switching') }}" class="animsition-link">Switching</a></li>
											<li><a href="{{ URL::asset('mobiledevicemanagement') }}" class="animsition-link">Mobile Device Management</a></li>
										</ul>
									</li>
									<li class="has-children">
										<a href="#0">WAN</a>

										<ul class="is-hidden">
											<li class="go-back"><a href="#0">Portfolio</a></li>

											<li><a href="{{ URL::asset('sdwan') }}" class="animsition-link">Security & SD-WAN</a></li>
											<li><a href="{{ URL::asset('wirelesswan') }}" class="animsition-link">Wireless WAN</a></li>

										</ul>
									</li>
									<li class="has-children">
										<a href="#0">IOT</a>

										<ul class="is-hidden">
											<li class="go-back"><a href="#0">Portfolio</a></li>

											<li><a href="{{ URL::asset('smartcamera') }}" class="animsition-link">Smart Camera</a></li>
											<li><a href="{{ URL::asset('sensors') }}" class="animsition-link">Sensors</a></li>

										</ul>
									</li>

									<li>
										<a href="#0"></a>

										<ul class="is-hidden">
											<li class="go-back"><a href="#0">Portfolio</a></li>

											<li><a href="#0" class="animsition-link"></a></li>
											<li><a href="#0" class="animsition-link"></a></li>

										</ul>
									</li>

								</ul>
							</li>
						</ul>
					</li>



					<li class="has-children">
						<a href="#">Services</a>


						<ul class="cd-secondary-nav is-hidden">
							<li class="go-back"><a href="#0">Menu</a></li>
							<li class="see-all"><a href="{{ URL::asset('trail') }}">Get a Free Trail !</a></li>


							<li class="has-children">
								<a href="{{ URL::asset('pentestinganalysis') }}">Pentesting & Analysis</a>


							</li>

							<li class="has-children">
								<a href="{{ URL::asset('securitymanagement') }}">Security Management</a>


							</li>



							<li class="has-children">
								<a>Forensic Analysis</a>

								<ul class="is-hidden">
									<li class="go-back"><a href="#0">Pages</a></li>
									<li class="has-children">
										<a href="#0">Security Services</a>

										<ul class="is-hidden">
											<li class="go-back"><a href="#0">Portfolio</a></li>

											<li><a href="{{ URL::asset('networksecurity') }}" class="animsition-link">Network Security</a></li>
											<li><a href="{{ URL::asset('vulnerabilityassessment') }}" class="animsition-link">Vulnerability Assessment</a></li>
											<li><a href="{{ URL::asset('webapppentesting') }}" class="animsition-link">Web Application Pentesting</a></li>
											<li><a href="{{ URL::asset('iotsecuritycomplaince') }}" class="animsition-link">IT Security Complaince</a></li>
											<li><a href="{{ URL::asset('policydrafting') }}" class="animsition-link">Policy Drafting</a></li>
											<li><a href="{{ URL::asset('networkcomplaincesecurity') }}" class="animsition-link">Network Complaince Security</a></li>
										</ul>


									</li>
									<li class="has-children">
										<a href="#0">Forensic Services</a>

										<ul class="is-hidden">
											<li class="go-back"><a href="#0">Portfolio</a></li>

											<li><a href="{{ URL::asset('mobileforensics') }}" class="animsition-link">Mobile Forensics</a></li>
											<li><a href="{{ URL::asset('data-forensics-recovery') }}" class="animsition-link">Data Forensics & Recovery</a></li>
											<li><a href="{{ URL::asset('emailinvestigation') }}" class="animsition-link">Email Investigation</a></li>

										</ul>
									</li>
									<li>
										<a href="{{ URL::asset('securitytraining') }}">Security Training</a>


									</li>

									<li>
										<a href="#0"></a>

										<ul class="is-hidden">
											<li class="go-back"><a href="#0">Portfolio</a></li>

											<li><a href="#0" class="animsition-link"></a></li>
											<li><a href="#0" class="animsition-link"></a></li>
											<li><a href="#0" class="animsition-link"></a></li>

										</ul>
									</li>
									<li>
										<a href="#0"></a>

										<ul class="is-hidden">
											<li class="go-back"><a href="#0">Portfolio</a></li>

											<li><a href="#0" class="animsition-link"></a></li>
											<li><a href="#0" class="animsition-link"></a></li>
											<li><a href="#0" class="animsition-link"></a></li>

										</ul>
									</li>
									<li>
										<a href="#0"></a>

										<ul class="is-hidden">
											<li class="go-back"><a href="#0">Portfolio</a></li>

											<li><a href="#0" class="animsition-link"></a></li>
											<li><a href="#0" class="animsition-link"></a></li>
											<li><a href="#0" class="animsition-link"></a></li>

										</ul>
									</li>
									<li>
										<a href="#0"></a>

										<ul class="is-hidden">
											<li class="go-back"><a href="#0">Portfolio</a></li>

											<li><a href="#0" class="animsition-link"></a></li>
											<li><a href="#0" class="animsition-link"></a></li>
											<li><a href="#0" class="animsition-link"></a></li>

										</ul>
									</li>

								</ul>
							</li>
						</ul>
					</li>

					<li class="has-children">
						<a href="#">Resources</a>
						<ul class="cd-nav-icons is-hidden">
							<li class="go-back"><a href="#0">Menu</a></li>
							<li class="see-all"><a href="{{ URL::asset('trail') }}" class="animsition-link">Get a Free Trail !</a></li>






							<li>
								<a class="cd-nav-item item-5 animsition-link" href="{{ URL::asset('productvideos') }}">
									<h3>Product Videos</h3>
									<p>Checkout latest product videos !</p>
								</a>
							</li>



							<li>
								<a class="cd-nav-item item-7 animsition-link" href="{{ URL::asset('onlinetraining') }}">
									<h3>Online Training</h3>
									<p>Start your cyber security learning</p>
								</a>
							</li>



							<li>
								<a class="cd-nav-item item-9 animsition-link" href="{{ URL::asset('webcast') }}">
									<h3>WEBCAST</h3>
									<p>Know all our latest updates here</p>
								</a>
							</li>



							<li>
								<a class="cd-nav-item item-11 animsition-link" href="{{ URL::asset('customerstories') }}">
									<h3>Customer Stories</h3>
									<p>Success stories from our clients</p>
								</a>
							</li>


						</ul>
					</li>






				</ul> <!-- primary-nav -->
			</nav> <!-- cd-nav -->

			<div id="cd-search" class="cd-search">
				<form>
					<input type="search" placeholder="Search...">
				</form>
			</div>

		</div>

		<main class="cd-main-content">
		
		

		
<div class="popup">
      <div id="main">
        <div id="close">X</div>
        <h1 id="heading">Contact us</h1>
        <div id="content">
          <form>
            <div class="name">
              <div class="sub form2">
                <input
                  type="text"
                  name="fname"
                  placeholder="First Name"
                  required
                />
              </div>
              <div class="sub form2">
                <input type="text" placeholder="Last Name" required />
              </div>
            </div>
            <div class="name">
              <div class="sub form2">
                <input
                  type="text"
                  name="cname"
                  placeholder="Company Name"
                  required
                />
              </div>
              <div class="sub form2">
                <input type="email" placeholder="Email" required />
              </div>
            </div>
            <div class="name">
              <div class="sub form2">
                <input type="tel" placeholder="Phone Number" required />
              </div>
            </div>
            <div class="name">
              <div class="sub form2">
                <textarea
                  rows="3"
                  placeholder="Please provide us details"
                  required
                ></textarea>
              </div>
            </div>
            <div class="sub">
              <small
                >By clicking submit below, you consent to allow Fortifes and its
                affiliates to process the personal information you submitted
                above to provide you with a response to your inquiry. If you
                would like to receive additional communications.
              </small>
            </div>
            <div class="name sub">
              <button id="submit" type="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>

<!-- Script for top bar -->

<script>
	const viewBtn = document.querySelector(".view-modal"),
    popup = document.querySelector(".popup"),
    close = popup.querySelector("#close");

    viewBtn.onclick = ()=>{
      popup.classList.toggle("show");
    }
    
    close.onclick = ()=>{
      viewBtn.click();
    }
	</script>


</body>
</html>
