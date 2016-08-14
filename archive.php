<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<?php if (is_category()) { ?>
							<h1 class="archive-title h2">
								<span class="alt-font"><?php single_cat_title(); ?></span>
							</h1>

						<?php } elseif (is_tag()) { ?>
							<h1 class="archive-title h2">
								<span class="alt-font"><?php single_cat_title(); ?></span>
							</h1>

						<?php } elseif (is_author()) {
							global $post;
							$author_id = $post->post_author;
						?>
							<h1 class="archive-title h2">

								<span><?php _e("All posts by", "bonestheme"); ?></span> <?php the_author_meta('display_name', $author_id); ?>

							</h1>
						<?php } elseif (is_day()) { ?>
							<h1 class="archive-title h2">
								<span  class="alt-font"><?php _e("The hues of ", "bonestheme"); ?></span> 
								<span class="highlight"><?php the_time('l, F j, Y'); ?></span>
							</h1>

						<?php } elseif (is_month()) { ?>
								<h1 class="archive-title h2">
									<span  class="alt-font"><?php _e("The hues of ", "bonestheme"); ?></span> 
									<?php the_time('F Y'); ?>
								</h1>

						<?php } elseif (is_year()) { ?>
								<h1 class="archive-title h2">
									<span class="alt-font"><?php _e("The hues of ", "bonestheme"); ?></span> 
									<?php the_time('Y'); ?>
								</h1>
						<?php } ?>

						<div id="main" class="eightcol first clearfix" role="main">

							<?php
								if ( !get_query_var( 'paged' ) ) {
									echo "<div class='entry-content catIntro clearfix'>";
								  	echo wpautop( apply_filters( 'the_content', term_description() ) );
								  	echo "</div>";
								} 
							?>



							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php loopProject();?> <!--THE LOOP from Loops.php -->

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
												<p>Sorry about that!</p>
										</footer>
									</article>

							<?php endif; ?>

						</div> <!-- end #main -->

						<?php get_sidebar('archiveSidebar'); ?>

								</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
