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
									<h3 class="entry-title"><?=$post->title?>
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
										<?=$post->content?>
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

					<div id="comments" class="comments-area">
						<div class="comments-main-content">
							<div class="row">
								<div class="col-md-12">
									<h3 class="comments-title">04 Comments</h3>
									<!--/.comments-title-->
								</div>
								<!--/.col-md-12-->
							</div>
							<!--/.row-->

							<div class="row">
								<div class="col-md-12">
									<ol class="comment-list">
										<li class="comment">
											<div class="comment-body">
												<div class="comment-meta">
													<div class="comment-author vcard">
														<div class="author-img">
															<img alt="Maria" src="assets/images/comments/1.png" class="avatar photo">
														</div>
													</div>
													<!--/.comment-author-->
													<div class="comment-metadata"><b class="author">Zhon Andarson</b>
													</div>
													<!--/.comment-metadata-->
												</div>
												<!--/.comment-meta-->
												<div class="comment-details">
													<div class="comment-content">
														<p>Coding is used in almost all aspects of life and work now, be it directly or indirectly.
															It’s not just for companies in the tech sector. “An increasing number of businesses rely
															on computer code,</p>
													</div>
													<!--/.comment-content-->
													<div class="comment-footer">
														<span class="date">10:35pm, 27 jan 2015.</span>
														<a href="#" class="comment-reply-link">Reply</a>
													</div>
												</div><!-- /.comment-details-->
											</div>
											<!--/.comment-body-->
											<ol class="children">
												<li class="comment">
													<div class="comment-body">
														<div class="comment-meta">
															<div class="comment-author vcard">
																<div class="author-img">
																	<img alt="avatar" src="assets/images/comments/2.png" class="avatar photo">
																</div>
															</div>
															<!--/.comment-author-->
															<div class="comment-metadata"><b class="author">Andro Smith Doe</b>
															</div>
															<!--/.comment-metadata-->
														</div>
														<!--/.comment-meta-->
														<div class="comment-details">
															<div class="comment-content">
																<p>Coding is used in almost all aspects of life and work now, be it directly or
																	indirectly. It’s not just for companies in the tech sector. “An increasing number of
																	businesses rely on computer code,</p>
															</div>
															<!--/.comment-content-->
															<div class="comment-footer">
																<span class="date">10:35pm, 27 jan 2015.</span>
																<a href="#" class="comment-reply-link">Reply</a>
															</div>
														</div><!-- /.comment-details-->
													</div>
													<!--/.comment-body-->
												</li>
												<!--/.comment-->
											</ol>
											<!--/.children-->
										</li>
										<!--/.comment-body-->
										<li class="comment">
											<div class="comment-body">
												<div class="comment-meta">
													<div class="comment-author vcard">
														<div class="author-img">
															<img alt="" src="assets/images/comments/2.png" class="avatar photo">
														</div>
													</div>
													<!--/.comment-author-->
													<div class="comment-metadata"><b class="author">Heas lins</b>
													</div>
													<!--/.comment-metadata-->
												</div>
												<!--/.comment-meta-->
												<div class="comment-details">
													<div class="comment-content">
														<p>Coding is used in almost all aspects of life and work now, be it directly or indirectly.
															It’s not just for companies in the tech sector. “An increasing number of businesses rely
															on computer code, </p>
													</div>
													<!--/.comment-content-->
													<div class="comment-footer">
														<span class="date">10:35pm, 27 jan 2015.</span>
														<a href="#" class="comment-reply-link">Reply</a>
													</div>
												</div><!-- /.comment-details-->
											</div>
											<!--/.comment-body-->
										</li>
										<!--/.comment-body-->
									</ol>
									<!--/.comment-list-->
								</div>
								<!--/.col-md-12-->
							</div>
							<!--/.row-->
						</div><!-- /.comments-main-content -->
					</div><!-- /.comments-area -->

					<div class="comment-respond">
						<form action="#" class="comment-form">
							<h3 class="comment-reply-title">Leave your comment</h3>
							<div class="row">
								<div class="col-lg-6 col-md-6">
									<input type="text" class="form-control" placeholder="Enter your name">
								</div><!-- /.col-lg-6 -->
								<div class="col-lg-6 col-md-6">
									<input type="email" class="form-control" placeholder="Your Email">
								</div><!-- /.col-lg-6 -->
								<div class="col-12">
									<textarea class="form-control" rows="4" cols="50" placeholder="Your message here"></textarea>
								</div><!-- /.col-12 -->
								<div class="form-submit clearfix">
									<button class="btn btn-default">Post <i class="fas fa-arrow-right"></i></button>
								</div><!-- /.subimt -->
							</div><!-- /.row -->
						</form>
					</div>
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