<header class="site-header default-header-style intro-element">
			<div class="header-top-area">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-4">
							<div class="intro-socail-share">
								<div class="share-alt"><span class="fa fa-share-alt"></span></div>

							</div><!-- /.intro-socail-share -->
						</div>
						<div class="col-4">
							<div class="site-branding text-center">

							<h1>								<a href="<?=APP_PATH?>">
								   <?=APP_NAME?>
									<!-- <img src="assets/images/logo/logo.png" alt="Site Logo" /> -->
								</a></h1>

							</div><!-- /.site-branding -->
						</div>
						<div class="col-4">
							<div class="header-right-area">
								<div class="search-wrap">
									<div class="search-btn">
										<i class="fas fa-search"></i>
									</div>
									<div class="search-form">
										<form action="#">
											<input type="search" placeholder="Search">
											<button type="submit"><i class="fas fa-search"></i></button>
										</form>
									</div>
								</div>
								<!--~./ search-wrap ~-->

								<!--~./ header card area ~-->

								<div class="hamburger-menus">
									<span></span>
									<span></span>
									<span></span>
								</div>
							</div><!-- /.header-top-right-area -->
						</div>
					</div>
				</div>
			</div><!-- /.header-top-area -->

			<div class="navigation-area">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="site-navigation">
								<nav class="navigation">
									<div class="menu-wrapper">
										<div class="menu-content">
											<ul class="mainmenu">
												<li class="megamenu">
													<a class="<?php if(!empty($active) && $active == "home"){ echo 'active';}?>" href="<?=APP_PATH?>">Home</a>

												</li>
												<li><a class="<?php if(!empty($active) && $active == "about"){ echo 'active';}?>" href="<?=APP_PATH?>about.php">About</a></li>
												<li><a href="mailto:<?=APP_EMAIL?>">Contact Us</a></li>
												<?php if(empty($_SESSION["customer_id"])){ ?>
												<li><a href="<?=DASHBOARD_PATH?>auth/register.php">Register</a></li>
												<li><a href="<?=DASHBOARD_PATH?>auth/login.php">Login</a></li>
												<?php }else{ ?>
												<li><a href="<?=DASHBOARD_PATH?>">Dashboard</a></li>
												<?php  } ?>

											</ul> <!-- /.menu-list -->
										</div> <!-- /.hours-content-->
									</div><!-- /.menu-wrapper -->
								</nav>
							</div><!-- /.site-navigation -->
						</div><!-- /.col-12 -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.navigation-area -->

			<div class="mobile-sidebar-menu sidebar-menu">
				<div class="overlaybg"></div>
			</div>
		</header>