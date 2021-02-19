<div class="col-lg-3">
						<!-- Sidebar Items -->
						<div class="sidebar-items style-one">

              <?php if(!empty($categories)){ ?>
							<!--~~~~~ Start Categories Widget ~~~~~-->
							<aside class="widget widget_categories">
								<h4 class="widget-title">
									Categories
								</h4>
								<!-- /.widget-title -->
								<div class="widget-content">
									<ul>
										<?php foreach ($categories as $key => $category) {?>
											<li>
											<a href="<?=APP_PATH?>index.php?cat_id=<?=$category->id?>"><?=ucwords($category->name)?> </a>
										</li>
										<?php } ?>

									</ul>
								</div>
								<!-- /.widget-content -->
							</aside>
							<?php } ?>
							<!--~./ end categories widget ~-->




						</div>
						<!--  /.sidebar-items -->
					</div>