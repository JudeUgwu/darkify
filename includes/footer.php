<footer class="site-footer footer-style-two">
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
					Start Footer Widget Area
				~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<div class="footer-widget-area">
				<div class="container">
					<div class="row">
						<!--~~~~~ Start Widget Location ~~~~~-->
						<div class="col-lg-4 col-md-6">
							<aside class="widget bt-location-widget">
								<h2 class="widget-title">Our Address</h2>
								<div class="widget-content">
									<div class="info-box">
										<p>
											<?=ucwords(APP_ADDRESS);?>
										</p>
									</div>
									<div class="info-box">
										<p><?=ucwords(APP_PHONE)?></p>
										<p>
											<a href="mailto:<?=APP_EMAIL?>"><?=APP_EMAIL?></a>
										</p>
									</div>
								</div>
							</aside>
						</div>
						<!--~./ end location widget ~-->

						<!--~~~~~ Start Widget Links ~~~~~-->
						<div class="col-lg-2 col-md-6">
							<aside class="widget widget_links">
								<h2 class="widget-title">Quick Links</h2>
								<div class="widget-content">
									<ul>
										<li><a href="#">About Us</a></li>
										<li><a href="#">Contact Us</a></li>
										<li><a href="#">Login</a></li>
										<li><a href="#">Register</a></li>
									</ul>
								</div>
							</aside>
						</div>
						<!--~./ end links widget ~-->



						<!--~./ end subscribe widget ~-->
					</div>
				</div>
			</div>
			<!--~./ end footer widgets area ~-->

			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
				Start Footer Bottom Area
			~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<div class="footer-bottom-area">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="footer-bottom-content">
								<div class="copyright-text text-center">
									<p>
										Copyright - <?=date("Y")?> 
										<a href="<?=APP_PATH?>"><?=APP_NAME?></a>
									</p>
								</div>
								<!--~./ end copyright text ~-->
							</div>
						</div>
						<!--~./ col-12 ~-->
					</div>
				</div>
			</div>
			<!--~./ end footer bottom area ~-->
		</footer>