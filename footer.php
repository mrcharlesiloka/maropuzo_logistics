<!-- footer 
					================================================== -->
				<footer>
					<div class="up-footer">
						<div class="container">
							<div class="row">
								<div class="col-md-4">
									<div class="footer-widget">
										<h2>About Us</h2>
										<p>Whatever environment your operations are, we are flexible to do our best to provide best service to you at the best of our ability because we know what you need to power your business.</p><p>
           <strong> Company Reg. No:</strong> 2022/853221/07
          </p>
										<img src="images/footer-logo.png" alt="">
									</div>
								</div>
								<div class="col-md-4">
									<div class="footer-widget">
										<h2>Locate Us</h2>
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3582.731590400507!2d28.049921075411927!3d-26.107679077136137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e957336c9b81e51%3A0xd00ca3e98a953ca3!2sSpaces%20-%20Johannesburg%2C%20Spaces%20Atrium%20on%205th%20Sandton!5e0!3m2!1sen!2sng!4v1696452849089!5m2!1sen!2sng" width="150" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
									</div>
								</div>
								<div class="col-md-4">
									<div class="footer-widget info-widget">
										<h2>Info</h2>
										<p class="first-par">You can contact or visit us during working time.</p>
										<p><span>Tel: </span> <?php echo $site_tel ?></p>
										<p><span>Email: </span> <?php echo $site_email ?></p>
										<p><span>W.Hours: </span> 8:00 a.m - 17:00 a.m</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<p class="copyright">
						&copy; Copyright <script language="JavaScript">
					var currentDate = new Date();	
					document.write(currentDate.getFullYear());
				</script> <?php echo $site_title ?>. All rights reserved.</p>
					
				</footer>
				<!-- End footer -->
			</div>
		</div>
		<!-- End Content -->

	</div>
	<!-- End Container -->

	<!-- Revolution slider -->
	<script type="text/javascript">

		jQuery(document).ready(function() {
						
			jQuery('.tp-banner').show().revolution(
			{
				dottedOverlay:"none",
				delay:5000,
				startwidth:1140,
				startheight:560,
				hideThumbs:200,
				
				thumbWidth:100,
				thumbHeight:50,
				thumbAmount:5,
				
				navigationType:"bullet",
				
				touchenabled:"on",
				onHoverStop:"off",
				
				swipe_velocity: 0.7,
				swipe_min_touches: 1,
				swipe_max_touches: 1,
				drag_block_vertical: false,
										
										parallax:"mouse",
				parallaxBgFreeze:"on",
				parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
										
				keyboardNavigation:"off",
				
				navigationHAlign:"center",
				navigationVAlign:"bottom",
				navigationHOffset:0,
				navigationVOffset:40,
						
				shadow:0,

				spinner:"spinner4",
				
				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,

				shuffle:"off",
				
				autoHeight:"off",						
				forceFullWidth:"off",						
										
										
										
				hideThumbsOnMobile:"off",
				hideNavDelayOnMobile:1500,						
				hideBulletsOnMobile:"off",
				hideArrowsOnMobile:"off",
				hideThumbsUnderResolution:0,
				
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				startWithSlide:0,
				fullScreenOffsetContainer: ".header"	
			});
							
		});	//ready
		
	</script>
</body>
</html>