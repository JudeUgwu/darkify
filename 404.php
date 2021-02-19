
<?php
require_once "DB.php";
require_once "config.php";
require_once "controllers/functions.php";
require_once "controllers/helpers.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php require_once "includes/css.php"; ?>
<title>404</title>
</head>

<body>
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
			Start Preloader
	~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->



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
				Start Error Page Blcok
		~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div class="error-page-block">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12">
						<div class="error-page-content-outer">
							<div class="error-page-content">
								<div class="error-thumbnail text-center">
									<img src="assets/images/others/404.png" alt="Error">
								</div>
								<!--/.error-thumbnail-->
								<div class="error-text-content">
									<h2 class="error-title">Page Not Found</h2>
									<p class="error-text">A 404 error is a common error and can be caused by a number of issues.
										Essentially, a 404 error occurs when the information that you requested is not available</p>
								</div>
							</div>
							<!--/.error-page-content-->
						</div>
					</div>
					<!--/.col-12-->
				</div>
				<!--/.row-->
			</div>
		</div>
		<!--~./ end error page block ~-->


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