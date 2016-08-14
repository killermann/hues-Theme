<?php
/*
Template Name: Full-Width Page (No Sidebars)
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title"><?php the_title(); ?></h1>

								</header> <!-- end article header -->

								<section class="entry-content clearfix" itemprop="articleBody">
									<div class="featuredImage">
										<?php the_post_thumbnail('full'); ?>
									</div>

									<div id="relatedPages" class="clearfix">
										<?php $args = array(
										    'post_parent' => $post->ID,
										    'post_type' => 'page',
										    'orderby' => 'menu_order'
										);

										$child_query = new WP_Query( $args );
										?>

										<?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>

										   <?php loopMinimal();?>
										   
										<?php endwhile; ?>

										<?php
										wp_reset_postdata();?>
									</div><!--widget related pages-->

									<?php the_content(); ?>
								</section> <!-- end article section -->

								<footer class="article-footer">
									
								</footer> <!-- end article footer -->

							</article> <!-- end article -->

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry clearfix">
											<header class="article-header">
												<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e("This is the error message in the page-custom.php template.", "bonestheme"); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

				<?php getMailingList();?>

			</div> <!-- end #content -->

<?php get_footer(); ?>
