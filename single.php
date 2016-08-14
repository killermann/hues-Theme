	<?php get_header(); ?>

			<header class="article-header wrap">
				<h1 class="entry-title single-title" itemprop="headline"><span><?php the_title(); ?></span></h1>
				<div class="excerpt">
					<h3><?php the_excerpt();?></h3>
				</div>

				<div class="huesLinks" class="clearfix">
				
					<?php if(get_field('store_link') ): ?>

						<a class="button" href="<?php the_field('store_link'); ?>">
							Buy <i class="fa fa-shopping-bag"></i>
						</a> 

						<a class="button accent-button" href="http://hues.xyz/merch">
							Browse Shop <i class="fa fa-th-list"></i>
						</a>

						<script src="https://gumroad.com/js/gumroad.js"></script>

					<?php endif; ?>

				</div><!--/hueslinks-->
			</header> <!-- end article header -->
			
			<section class="featuredImage clearfix">
				<?php the_post_thumbnail('full'); ?>
			</section>

			<div id="content" class="clearfix">
				<div class="merchSingleContent clearfix" role="main">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
							
							<section class="entry-content clearfix" itemprop="articleBody">
								<?php bones_hook_post_intro();?>
								<?php the_content(); ?>
							</section> <!-- end article section -->

							<footer class="article-footer">
								<?php bones_hook_post_footer();?>
							</footer> <!-- end article footer -->

						</article> <!-- end article -->


					<?php endwhile; ?>

					<?php else : ?>

						<article id="post-not-found" class="hentry clearfix">
								<header class="article-header">
									<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
								</header>
								<section class="entry-content">
									<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
								</section>
								<footer class="article-footer">
										<p><?php _e("This is the error message in the single.php template.", "bonestheme"); ?></p>
								</footer>
						</article>

					<?php endif; ?>
				</div>

				<div id="inner-content" class="wrap clearfix">
													
					<div id="main" class="eightcol first clearfix" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								
								<section class="entry-content clearfix" itemprop="articleBody">
									<?php bones_hook_post_intro();?>
									<?php the_content(); ?>
								</section> <!-- end article section -->

								<footer class="article-footer">
									<?php bones_hook_post_footer();?>
								</footer> <!-- end article footer -->

							</article> <!-- end article -->

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry clearfix">
									<header class="article-header">
										<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e("This is the error message in the single.php template.", "bonestheme"); ?></p>
									</footer>
							</article>

						<?php endif; ?>

						<div id="stickyPostTitle" class="mobileHide unactiveSticky">
							<div class="wrap">
								<div id="stickyTitle">
									<?php the_title(); ?> 
								</div>
							</div>
						</div><!--/stickyPostTitle-->

					</div> <!-- end #main -->

					<?php get_sidebar(); ?>


				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->


			<?php getCollectiveInterstitial();?>

			<?php getMailingList();?>

<?php get_footer(); ?>
