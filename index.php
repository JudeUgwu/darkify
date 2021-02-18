<?php 
  require_once "DB.php";
  require_once "config.php";
  require_once "controllers/functions.php";
  require_once "controllers/helpers.php";

	$posts = selectMultipleData("article","*","");
	$trending = selectMultipleData("article","*","`views`>'10'");
	


   



?>
<!DOCTYPE html>
<html lang="en">
<head>
	  <?php require_once "includes/css.php"; ?>
</head>

<body class="bg-white-smoke">
	<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
        Start Preloader
    ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
	  <?php #	require_once "includes/loader.php"; ?>


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
				Start Frontpage Slider Posts
		~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div class="frontpage-slider-posts">
			<div class="container-medium">
				<div class="row">
					<div class="col-12">
						<div class="owl-carousel frontpage-slider-one style-one carousel-rectangle carousel-nav-center">
							<!--~~~~~ Start Post ~~~~~-->
							<?php  if(!empty($trending)){ ?>
							<?php foreach ($trending as $key => $post) { ?>
							<article class="post hentry post-slider-one text-center">
								<div class="entry-thumb">
									<figure class="thumb-wrap">
										<a href="single-post.html">
											<img src="<?=$post->image?>" alt="post" />
										</a>
									</figure>
									<!--./ thumb-wrap -->
								</div>
								<!--./ entry-thumb -->
								<div class="content-entry-wrap">
									<!--./ entry-category -->
									<h3 class="entry-title">
										<a href="single-post.html"><?=$post->title?></a>
									</h3>
									<!--./ entry-title -->
									<div class="entry-content">
										<div class="read-more-wrap">
											<a class="read-more" href="single-post.html">Read Details</a>
										</div>
									</div>
									<!--./ entry-content -->
								</div>
								<!--./ content-entry-wrap -->
							</article>
							<?php }  ?>
							<?php } ?>

							<!--~./ end post ~-->

						</div>
						<!--/#frontpage-slide -->
					</div>
				</div>
			</div>
		</div>
		<!--~./End frontpage slider posts ~-->

		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Main Wrapper
		~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div class="features-block style-one">
			<div class="container">
				<div class="row feature-list gutters-50">
					<!--~~~~~ Start Feature Item ~~~~~-->
					<div class="col-lg-4 col-md-6">
						<div class="feature-item text-center style-one">
							<div class="feature-thumb">
								<img src="assets/images/feature/one/feature1-post1.jpg" alt="feature" />
							</div>
							<!--./ feature-thumb -->
							<div class="feature-info">
								<h3 class="title">
									<a href="#">Photo Stories</a>
								</h3>
								<!--./ title -->
								<div class="feature-desc">
									<p>When it comes to creating is a website for your business, an attractive design
									</p>
								</div>
								<div class="read-more-wrap">
									<a class="read-more-text" href="#">Read More <i class="fas fa-arrow-right"></i></a>
								</div>
								<!--./ read-more-wrap -->
							</div>
						</div>
					</div>
					<!--~./ end feature item ~-->
					<!--~~~~~ Start Feature Item ~~~~~-->
					<div class="col-lg-4 col-md-6">
						<div class="feature-item text-center style-one">
							<div class="feature-thumb">
								<img src="assets/images/feature/one/feature1-post2.jpg" alt="feature" />
							</div>
							<!--./ feature-thumb -->
							<div class="feature-info">
								<h3 class="title">
									<a href="#">Follow @ Instagram</a>
								</h3>
								<!--./ title -->
								<div class="feature-desc">
									<p>When it comes to creating is a website for your business, an attractive design
									</p>
								</div>
								<div class="read-more-wrap">
									<a class="read-more-text" href="#">Follow Me <i class="fas fa-arrow-right"></i></a>
								</div>
								<!--./ read-more-wrap -->
							</div>
						</div>
					</div>
					<!--~./ end feature item ~-->
					<!--~~~~~ Start Feature Item ~~~~~-->
					<div class="col-lg-4 col-md-6">
						<div class="feature-item text-center style-one">
							<div class="feature-thumb">
								<img src="assets/images/feature/one/feature1-post3.jpg" alt="feature" />
							</div>
							<!--./ feature-thumb -->
							<div class="feature-info">
								<h3 class="title">
									<a href="#">Browse Shop</a>
								</h3>
								<!--./ title -->
								<div class="feature-desc">
									<p>When it comes to creating is a website for your business, an attractive design
									</p>
								</div>
								<div class="read-more-wrap">
									<a class="read-more-text" href="#">Browse <i class="fas fa-arrow-right"></i></a>
								</div>
								<!--./ read-more-wrap -->
							</div>
						</div>
					</div>
					<!--~./ end feature item ~-->
				</div>
			</div>
		</div>
		<!--~./ end features block ~-->


		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
            Start Main Wrapper
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div class="main-wrapper pd-b-120">
			<div class="container">
				<div class="row justify-content-between gutters-50">
					<div class="col-lg-9 main-wrapper-content">
						<!--~~~~~ Start Site Main ~~~~~-->
						<main class="site-main style-one">
							<div class="row gutters-50">
								<!--~~~~~ Start Post ~~~~~-->

								<!--~./ end post ~-->



								<!--~~~~~ Start Post ~~~~~-->
								<?php if(!empty($posts)){ ?>
								<?php foreach ($posts as $key => $post) { 
								  $author = selectSingleData("users","`firstname`","`id`={$post->user_id}");
		
								?>
								<div class="col-lg-6 col-md-6">
									<article class="post hentry post-grid text-center style-one">
										<div class="entry-thumb">
											<figure class="thumb-wrap">
												<a href="single-post.html">
													<img src="<?=$post->image?>" alt="post" />
												</a>
											</figure>
											<!--./ thumb-wrap -->
										</div>
										<!--./ entry-thumb -->
										<div class="content-entry-wrap">
											<!--./ entry-category -->
											<h3 class="entry-title">
												<a href="single-post.html"><?=$post->title?></a>
											</h3>
											<!--./ entry-title -->
											<div class="entry-meta-content">
												<div class="entry-author">
												  
													By <a href="#"><?=$author["firstname"]?></a>
												</div>
												<!--./ entry-date -->
												<div class="entry-date">
													On <span class="text-info"><?=date(" D m , Y",strtotime($post->created_at))?></span>
												</div>
												<!--./ entry-date -->
											</div>
											<!--./ entry-meta-content -->
											<div class="read-more-wrap">
												<a class="read-more" href="single-post.html">Read Details</a>
											</div>
											<!--./ entry-content -->
										</div>
										<!--./ content-entry-wrap -->
									</article>
								</div>
								<?php } ?>
								<?php } ?>
								<!--~./ end post ~-->

							</div>
						</main>
						<!--~./ end site main ~-->

						<!--~~~~~ Start Paging Navigation ~~~~~-->
						<nav class="navigation paging-navigation pd-t-30">
							<ul class="nav-links">
								<li><a href="#">1</a></li>
								<li class="active"><a href="#" class="page-numbers">2</a></li>
								<li><a href="#" class="page-numbers">3</a></li>
								<li class="nav-next">
									<a href="#"><i class="fas fa-angle-right"></i></a>
								</li>
							</ul>
						</nav>
						<!--~./ end paging navigation ~-->
					</div>

					<!--~~~~~ Start sidebar ~~~~~-->
          <?php  require_once "includes/sidebar.php"; ?>
					<!--~./ end sidebar ~-->
				</div>
			</div>
		</div>
		<!--~./ end main wrapper ~-->

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