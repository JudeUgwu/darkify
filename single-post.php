<?php
  require_once "DB.php";
  require_once "config.php";
  require_once "controllers/functions.php";
  require_once "controllers/helpers.php";

	$post_id = sanitize($_GET["id"]);
  if(empty($post_id) || !is_numeric($post_id)){
		header("Location: 404.php");
		exit();
	}
	
	
	$post = selectSingleData('article',"*","`id`={$post_id}");



  
	if(empty($post)){
		header("Location: 404.php");
		exit();
	}

	$post = (object) $post;
	$author = (object) selectSingleData('users',"*","`id`={$post->user_id}");
	$relatedPosts  = selectMultipleData("article","*","`category_id`='{$post->category_id}' AND id != '{$post->id}'");
	$comments  = selectMultipleData("comments","*","`post_id`='{$post->id}'","created_at","ASC");





?>

<!DOCTYPE html>
<html lang="en">

<head>
<?php require_once "includes/css.php"; ?>
	<title><?=$post->title?></title>
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
            Start Main Wrapper
        ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
		<div class="main-wrapper pd-b-100">
			<!-- Blog Items -->
			<div class="blog-single-page">
				<article class="post single-post single-post-one">
					<div class="container">
						<div class="post-thumbnail-area">
							<figure class="post-thumb">
								<img src="<?=$post->image?>" alt="<?=$post->title?>" />
							</figure><!-- /.post-thumb -->
							<div class="entry-header-outer">
								<div class="entry-header">
									<!--./ entry-category -->
									<h3 class="entry-title"><?=ucwords(html_entity_decode($post->title,ENT_QUOTES))?>
									</h3>
									<!--./ entry-title -->
									<div class="entry-meta-content">
										<div class="entry-author">
											By <a href="#"><?=$author->firstname?> <?=$author->lastname?></a>
										</div>
										<!--./ entry-date -->
										<div class="entry-date">
											On <span> <?=date("D M, Y", strtotime($post->created_at))?> </span>
										</div>
										<!--./ entry-date -->
									</div>
									<!--./ entry-meta-content -->
								</div><!-- /.entry-header-outer -->
							</div>
						</div>

						<div class="post-details">
							<div class="entry-content">

                  <p>
										<?=html_entity_decode($post->content,ENT_QUOTES)?>
									</p>

							</div><!--  /.entry-content -->
						</div><!--  /.post-details -->

					</div>
				</article><!-- /.post -->

				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-5">
							<!--~~~~~ Start Author Info ~~~~~-->
							<div class="author-info">
								<div id="author-img">
									<figure class="at-img">
										<img src="<?=$author->image?>" alt="img">
									</figure>
								</div><!-- / author-img -->

								<div id="author-details">
									<h3 class="author-name"><?=$author->firstname?> <?=$author->lastname?></h3>
									<div class="authors-bio">
										<p><?=$author->bio?>
										</p>
									</div>
								</div><!-- /author-details -->
							</div>
							<!--~./ end author info ~-->
						</div>
					</div>

					<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
							Start Related Posts Block
					~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
					<?php if(!empty($relatedPosts)){ ?>
					<div class="related-posts-block">
						<div class="row">
							<div class="col-12">
								<h3 class="related-title">Related Posts</h3>
							</div>
						</div>
						<div class="row">
							<!--~~~~~ Start Post ~~~~~-->
							<?php foreach ($relatedPosts as $key => $post) { 
								$author = (object) selectSingleData('users',"*","`id`={$post->user_id}");	
							?>
							<div class="col-lg-4 col-md-6">
								<article class="post post-grid-style post-grid-style-two">
									<div class="entry-thumb">
										<figure class="thumb-wrap">
											<a href="single-post.php?id=<?=$post->id?>">
												<img src="<?=$post->image?>" alt="post" />
											</a>
										</figure>
										<!--./ thumb-wrap -->
									</div>
									<!--./ entry-thumb -->
									<div class="content-entry-wrap">
										<!--./ entry-category -->
										<h3 class="entry-title">
											<a href="single-post.php?id=<?=$post->id?>">
												<?=ucwords($post->title)?>
											</a>
										</h3>
										<!--./ entry-title -->
									</div>
									<!--./ content-entry-wrap -->
									<div class="entry-user">
										<div class="thumb">
											<img src="<?=$author->image?>" alt="Thumb" />
										</div>
										<div class="info">
											<div class="author-name">
												<a href="#"><?=$author->firstname?> <?=$author->lastname?></a>
											</div>
											<div class="entry-date"><?=date("D M, Y", strtotime($post->created_at))?></div>
											<!--./ entry-time -->
										</div>
									</div>
								</article>
							</div>
							<?php } ?>

							<!--~./ end post ~-->
						</div>
					</div>
					<?php } ?>

					<!--~./End related posts block ~-->
					<?php require_once "includes/comments.php"; ?>


				</div>
			</div><!--  /.blog-latest-items -->
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