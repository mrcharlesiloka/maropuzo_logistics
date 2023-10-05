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
					<li><a class="active" href="truck_stop">Truck Stop / Truck Wash</a></li>
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

<!-- page-banner-section 
					================================================== 
				<section class="page-banner-section">
					<div class="container">
						<div class="row">
							<div class="col-sm-6">
								<h2>Services</h2>
							</div>
							<div class="col-sm-6">
								<ul class="page-depth">
									<li><a href="./">Home</a></li>
									<li><a href="services">Services</a></li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<!-- End page-banner section -->

				<!-- services-page section 
					================================================== -->
				<section class="services-page-section">
					<div class="container">
						<div class="row">
							
							<div class="col-sm-12">
								<div class="services-wrapp">
									<div class="row">
										<div class="col-md-6">
											<div class="services-post">
												
									<h1>Coming Soon...</h1>
												
												<p>&nbsp;</p>
										  </div>
										</div>
										<div class="col-md-6">
											<div class="services-post">
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