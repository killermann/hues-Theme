<?php get_header(); ?>

			<div id="content">
				<header class="article-header">

					<h1 class="text-center alt-font" itemprop="headline">the many <span class="light-orange">h</span><span class="pink">u</span><span class="light-blue">e</span><span class="teal">s</span></h1>

				</header> <!-- end article header -->

				<div id="inner-content" class="clearfix">

					<div id="main" class="clearfix isotope" role="main">

						<?php

						$args['tax_query'] = array(
						    array(
						        'taxonomy' => 'sections',
						        'terms' => array('merch'),
						        'field' => 'slug',
						        'operator' => 'NOT IN',
						    ),
						);
						query_posts($args);

						if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php loopProjectVertical();?>

						<?php endwhile; ?>

								<?php if (function_exists('bones_page_navi')) { ?>
										<?php bones_page_navi(); ?>
								<?php } else { ?>
										<nav class="wp-prev-next">
												<ul class="clearfix">
													<li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
													<li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
												</ul>
										</nav>
								<?php } ?>

						<?php else : ?>

								<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
									</header>
										<section class="entry-content">
											<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e("This is the error message in the index.php template.", "bonestheme"); ?></p>
									</footer>
								</article>

						<?php endif; ?>

					</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
