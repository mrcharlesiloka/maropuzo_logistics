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
					<li><a href="about">About</a></li>
					<li><a class="active" href="services">Our Services</a><!--
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
							<div class="col-sm-12">
								<div class="offer-post"><h2> Our Services</h2>
<p>We transport coal from the mines to power stations and Ports in South Africa. 
<br><?php echo $site_title ?> operates as a contractor and provides sub-contracting opportunities to small transporters for short and long distances within South Africa.

<br></p><br>

									<h2><a href="services.html">Subcontracting</a></h2>
									<p>We organize sub-contractor vehicles, all of which have undergone a meticulous approval process conducted by us and ESKOM.<br>
<br>
We regard our approved transporters as valued collaborators and cherish the personal connections we've established with them, recognizing the significance of these relationships in our business.
<br>
<br>
We have been able to establish amazing relationships with several reputable companies.
<br>

Contact us for more information.
</p>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End services-offer section -->

				<!-- services-page section 
					================================================== -->
				<section class="services-page-section">
					<div class="container">
						<div class="row">
							
							<div class="col-sm-12">
								<div class="services-wrapp">
									<div class="row">
										<div class="col-md-4">
											<div class="services-post">
												<img src="upload/slide/1.jpg" alt="">
												
												<p>&nbsp;</p>
										  </div>
										</div>
										<div class="col-md-4">
											<div class="services-post">
												<img src="upload/slide/2.jpg" alt="">
												
										  </div>
										</div>
										<div class="col-md-4">
											<div class="services-post">
												<img src="upload/slide/3.jpg" alt="">
												
										  </div>
										</div>
									</div>
									
									
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End services-page section -->


<?php
include ('footer.php');
?>