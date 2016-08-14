	
	<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="eightcol first clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

								<header class="article-header updateHeader">

									<h1 class="single-title"><?php the_title(); ?></h1>
									<div class="excerpt">
										<h3><?php the_excerpt();?></h3>
									</div>

									<p class="byline vcard clearfix">

										<span class="huesLinks floatcol first" class="clearfix">

											<a href="<?php the_field('article_link') ?>" class="button" rel="bookmark" title="<?php the_title_attribute(); ?>">
												View it online <i class="fa fa-external-link"></i>
											</a>

										</span><!--/hueslinks-->

										<a href="<?php echo home_url(); ?>/press" alt="Updates">Press</a> from
										<em class="pressSource">
											<?php if(get_field('source')){ echo the_field('source');}; ?>
										</em> on
										<span class="pressDate">
											<?php echo get_the_time('F jS, Y'); ?>
										</span>
									</p>

								</header> <!-- end article header -->
								<section class="featuredImage clearfix">
									<?php the_post_thumbnail('full'); ?>
								</section>

								<section class="entry-content clearfix">

									<?php the_content(); ?>

								</section> <!-- end article section -->

								<footer class="article-header">

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
												<p><?php _e("This is the error message in the single-custom_type.php template.", "bonestheme"); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div> <!-- end #main -->

						<?php get_sidebar(); ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
