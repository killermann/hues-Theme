<?php
/*
This is the custom post type post template.
If you edit the post type name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom post type is called
register_post_type( 'bookmarks',
then your single template should be
single-bookmarks.php

*/
?>

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

											<a class="button" href="https://feedburner.google.com/fb/a/mailverify?uri=huesorgupdates&amp;loc=en_US" alt="hues Updates Mailing List">
												Subscribe <i class="fa fa-envelope-square"></i>
											</a> 

											<a class="button accent-button" href="<?php echo home_url(); ?>/updates/rss"><i class="fa fa-rss"></i></a>

										</span><!--/hueslinks-->

										<a href="<?php echo home_url(); ?>/updates" alt="Updates">Update</a> <?php
										printf(__('posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span> <span class="amp">&</span> filed under %4$s.', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(__('F jS, Y', 'bonestheme')), bones_get_the_author_posts_link(), get_the_term_list( $post->ID, 'theme_tag', ' ', ', ', '' ));?>
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

								<?php comments_template(); ?>

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
