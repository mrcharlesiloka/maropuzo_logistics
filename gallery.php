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
					<li><a class="active" href="gallery">Gallery</a></li>
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

<!-- page-banner-section 
					================================================== 
				<section class="page-banner-section">
					<div class="container">
						<div class="row">
							<div class="col-sm-6">
								<h2>Gallery</h2>
							</div>
							<div class="col-sm-6">
								<ul class="page-depth">
									<li><a href="./">Home</a></li>
									<li><a href="services">gallery</a></li>
								</ul>
							</div>
						</div>
					</div>
				</section>
				<!-- End page-banner section -->

				<!-- projects-page section 
					================================================== -->
				<section class="projects-section">
				<hr>
					<div class="container">
						<div class="project-title">
							<h2>Our Gallery</h2>
						</div>
						<div class="project-box iso-call">
							<div class="project-post buildings isolation">
								<img src="upload/projects/1.jpg" alt="">
								<div class="hover-box">
									<a class="zoom" href="upload/projects/1.jpg"><i class="fa fa-search"></i></a>
								</div>
							</div>
							<div class="project-post interior">
								<img src="upload/projects/2.jpg" alt="">
								<div class="hover-box">
									<a class="zoom" href="upload/projects/2.jpg"><i class="fa fa-search"></i></a>
								</div>
							</div>
							<div class="project-post buildings isolation">
								<img src="upload/projects/3.jpg" alt="">
								<div class="hover-box">
									<a class="zoom" href="upload/projects/3.jpg"><i class="fa fa-search"></i></a>
								</div>
							</div>
							<div class="project-post buildings">
								<img src="upload/projects/4.jpg" alt="">
								<div class="hover-box">
									<a class="zoom" href="upload/projects/4.jpg"><i class="fa fa-search"></i></a>
								</div>
							</div>s
							<div class="project-post interior isolation">
								<img src="upload/projects/5.jpg" alt="">
								<div class="hover-box">
									<a class="zoom" href="upload/projects/5.jpg"><i class="fa fa-search"></i></a>
								</div>
							</div>
							<div class="project-post energy">
								<img src="upload/projects/6.jpg" alt="">
								<div class="hover-box">
									<a class="zoom" href="upload/projects/6.jpg"><i class="fa fa-search"></i></a>
								</div>
							</div>
							
							<div class="project-post energy">
								<img src="upload/projects/7.jpg" alt="">
								<div class="hover-box">
									<a class="zoom" href="upload/projects/7.jpg"><i class="fa fa-search"></i></a>
								</div>
							</div>
							
							<div class="project-post energy">
								<img src="upload/projects/8.jpg" alt="">
								<div class="hover-box">
									<a class="zoom" href="upload/projects/8.jpg"><i class="fa fa-search"></i></a>
								</div>
							</div>
							
							<div class="project-post energy">
								<img src="upload/projects/9.jpg" alt="">
								<div class="hover-box">
									<a class="zoom" href="upload/projects/9.jpg"><i class="fa fa-search"></i></a>
								</div>
							</div>
							<div class="project-post energy">
								<img src="upload/projects/10.jpg" alt="">
								<div class="hover-box">
									<a class="zoom" href="upload/projects/10.jpg"><i class="fa fa-search"></i></a>
								</div>
							</div>
							
							<div class="project-post energy">
								<img src="upload/projects/11.jpg" alt="">
								<div class="hover-box">
									<a class="zoom" href="upload/projects/11.jpg"><i class="fa fa-search"></i></a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End projects-page section -->


<?php
include ('footer.php');
?>