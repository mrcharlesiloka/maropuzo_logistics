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
					<li><a href="truck_stop">Truck Stop / Truck Wash</a></li>
					<li><a class="active" href="contact">Contact</a></li>
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
<!-- map 
					================================================== -->
				<div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3582.731590400507!2d28.049921075411927!3d-26.107679077136137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e957336c9b81e51%3A0xd00ca3e98a953ca3!2sSpaces%20-%20Johannesburg%2C%20Spaces%20Atrium%20on%205th%20Sandton!5e0!3m2!1sen!2sng!4v1696452849089!5m2!1sen!2sng" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
				<!-- map -->

				<!-- contact section 
					================================================== -->
				<section class="contact-section">
					<div class="container">
						<div class="col-sm-5">
							<div class="contact-info">
								<h2>Contact Info</h2>
								<p>You can contact or visit us in our office from Monday to Friday from 8:00 - 17:00</p>
								<ul class="information-list">
									<li><i class="fa fa-map-marker"></i><span><?php echo $site_address ?></span></li>
									<li><i class="fa fa-phone"></i><span><?php echo $site_tel ?></span></li>
									<li><i class="fa fa-envelope-o"></i><span><?php echo $site_email ?></span></li>
								</ul>						
							</div>
						</div>
						<div class="col-sm-7">
							<form id="contact-form">
								<h2>Send us a message</h2>
								<div class="row">
									<div class="col-md-6">
										<input name="name" id="name" type="text" placeholder="Name">
									</div>
									<div class="col-md-6">
										<input name="mail" id="mail" type="text" placeholder="Email">
									</div>
								</div>
								<textarea name="comment" id="comment" placeholder="Message"></textarea>
								<input type="submit" id="submit_contact" value="Send Message">
								<div id="msg" class="message"></div>
							</form>
						</div>
					</div>
				</section>
				<!-- End contact section -->

<?php
include ('footer.php');
?>