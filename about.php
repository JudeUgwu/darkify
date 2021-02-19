<?php 
  require_once "DB.php";
  require_once "config.php";
  require_once "controllers/functions.php";
  require_once "controllers/helpers.php";
$active = "about";
?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php require_once "includes/css.php"; ?>
		<title>About Us</title>
</head>

<body>


	<div class="site-content">
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
				Start Site Header
		~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	  <?php require_once "includes/header.php"; ?>

		<!--~~./ end site header ~~-->
		<!--~~~ Sticky Header ~~~-->
		<div id="sticky-header" class="active"></div>
		<!--~./ end sticky header ~-->

		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start About Block 
		~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div class="about-block">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="about-content-area text-center">
							<div class="about-content">
								<h2 class="heading">About <?=APP_NAME?></h2>
								<p>Hi, I am Zohan Smith. Sed pellentesque pulvinar arcu ac congue. Sed sed est nec justo
									maximus blandit. Curabitur lacinia, eros sit amet maximus suscipit, magna sapien
									veneuynatis eros, et gravida urna massa ut lectus. Quisque lacinia laciunia viverra.
									Nullram nec est et lorem sodales ornare a in sapien. In trtset urna marximus, conse
									ctetur iligula in, gravida erat. Nullam digniifssrim hendrerit auctor. Sed varius,
									dolor vitae iaculis condim rtweentum, massa nisl cursus sapien, gravida ultrices
									nisi dolor non erat.</p>
							</div>
							<div class="about-mockup">
								<img src="assets/images/about/about.jpg" alt="About Me">
							</div>
							<div class="follow-me">
								Follow Me :
								<a href="#"><span class="fab fa-behance"></span></a>
								<a href="#"><span class="fab fa-vimeo-v"></span></a>
								<a href="#"><span class="fab fa-facebook-f"></span></a>
								<a href="#"><span class="fab fa-twitter"></span></a>
								<a href="#"><span class="fab fa-instagram"></span></a>
								<a href="#"><span class="fab fa-pinterest-p "></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--~./ end about block ~-->



		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
				Start Site Footer
		~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<?php require_once "includes/footer.php"; ?>

		<!--~./ end site footer ~-->
	</div>
	<!--~~./ end site content ~~-->

	<!-- All The JS Files
		================================================== -->
		<?php  require_once "includes/scripts.php"; ?>

	<!-- main-js -->
</body>

</html>