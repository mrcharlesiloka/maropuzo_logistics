<?php
include ('header.php');
?>

<body>

	<!-- Container -->
	<div id="container">

		<!-- Header
		    ================================================== -->
		<header class="clearfix">
			<div class="logo">
				<a href="./"><img src="images/logo.png" alt=""></a>
			</div>

			<a class="elemadded responsive-link" href="#">Menu</a>

			<nav class="nav-menu">
				<ul class="menu-list">
					<li><a href="./">Home</a></li>
					<li><a class="active" href="about">About</a></li>
					<li><a href="services">Our Services</a><!--
						<ul class="dropdown">
							<li><a href="transportation.html">Transportation</a></li>
							<li><a href="packing.html">Packing</a></li>
							<li><a href="removals.html">Removals</a></li>
							<li><a href="collecting.html">Collecting</a></li>
							<li><a href="preaparing.html">Preapring</a></li>
							<li><a href="delivery.html">Delivery</a></li>
						</ul>-->
					</li>
					<li><a href="gallery">Gallery</a></li>
					<li><a href="truck_stop">Truck Stop / Truck Wash</a></li>
					<li><a href="contact">Contact</a></li>
				</ul>
			</nav>
			<div class="guide-box">
				<h2></h2>
				
			</div>
		</header>
		<!-- End Header -->

		<?php
include ('menu_h.php');
?>

<!-- services-offer 
					================================================== -->
				<section class="services-offer-section">
					<div class="container">
						<div class="row">
							<div class="col-sm-4">
								<div class="offer-post">
									<h2><a href="services.html">OUR VISON</a></h2>
									<p>We aim to thrive alongside the evolving South Africa, aligning ourselves with its policies.</p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="offer-post">
									<h2><a href="services.html">OUR MISSION</a></h2>
									<p>To excel as a premier service provider, delivering top-notch services and promoting equal opportunities.</p>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="offer-post">
									<h2><a href="services.html">Business Mission</a></h2>
									<p>Our primary goal is to safeguard and advance the interests of all stakeholders associated with <?php echo $site_title ?>.</p>
								</div>
							</div>
							
						</div>
					</div>
				</section>
				<!-- End services-offer section -->

				<!-- tabs-section 
					================================================== -->
				<section class="tabs-section">
					<div class="container">
						<div class="row">

							<div class="col-sm-7">
								<div class="about-us-box">
									<h1>Who we are</h1>
									<p><?php echo $site_title ?> (PTY) LTD is a 100% black South African woman owned, managed and controlled company. With major 
operational focus in commercial transportation services. <br>
<br>
<p>
The leadership of the company is engaged, responsive and reliable and will be proud to have you as one of our valued clients.</p><br>

<h1> Our Services</h1>
<p>MAROPUZO LOGISITICS operates as contractor and sub-contractor, we provides transportation services to all SADC region:<br>
<br>
<ul>
										      <li>Municipalities, Provincial and National Departments.</li>
								              <li> Parastatals.</li>
									          <li> Mining, Construction and Exploration Sites.</li>
									          <li> Airports and Aviation entities.</li>
									          <li> Farms and manufacturing entities.</li>
									          <li> Heavy Industries.</li>
									    </ul></p>
									
								</div>
							</div>

							<div class="col-sm-5">
								
								<div class="about-box">
									<h2>Our Drive</h2>
									<p>Whatever environment your operations are, we are flexible to do our best to provide best service to you at the best of our ability because we know what you need to power your business.<br>
<br>

Established in year 2022 as an independent B-BBEE LEVEL 1 transportation service provider.<br>
<br>
<?php echo $site_title ?> will deliver an excellent and unbeatable transportation services at competitive prices.</p>
								</div>

							</div>
<div class="col-sm-12">
<h2>We Champion Transportation</h2>
<p>Established in year 2022 as an independent B-BBEE LEVEL 1 transportation service provider, <?php echo $site_title ?> will deliver an excellent and unbeatable transportation services at competitive prices.<br>
<br>
We do not compromise on best quality transportation services, this is our top priority. We are committed to delivering the highest quality services that comply with international safety and quality standards.<br>
<br>
We are passionate about servicing you. We understand that most of our clients operate in remote areas that require special attention and we are ready to respond to all your needs. Our satisfaction is derived from your experience in having secure, reliable and quality logistics services to carry on uninterrupted business activities. </p>
</div>
						</div>
					</div>
				</section>
				<!-- End tabs section -->

				<!-- team section 
					================================================== -->
				<section class="team-section">
					<div class="container">
						<div class="row">
							<div class="col-sm-4">
								<div class="team-post">
									<h2>Tsholofelo Majoro</h2>
									<span>Director &amp; Founder</span>
									<p><strong>Company Registration No:</strong> 2022/853221/07</p>
								</div>
							</div>
							
							
						</div>
						
					</div>
				</section>
				<!-- End team section -->


<?php
include ('footer.php');
?>