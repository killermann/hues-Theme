<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">
					
					<div class="search-header text-center">
						<h1 class="archive-title">
							<?php _e('search results for:', 'bonestheme'); ?>
						<br/>
						<span><i class="fa fa-quote-left"></i>
							<?php echo esc_attr(get_search_query()); ?>
						<i class="fa fa-quote-right"></i></span>
						</h1>
					</div>

					<div id="main" class="isotope clearfix" role="main">

						

						<div id="searchPageSearch">
							<?php get_search_form(); ?>
						</div>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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

									<article id="post-not-found" class="loopCard projectVert hentry clearfix">
										<header class="article-header">
										</header>
										<section class="loopTitleWrap">
											<h2 class="loopTitle">Sorry! We don't have anything like that.</h2>
										</section>
										<footer class="article-footer">
										</footer>
									</article>

							<?php endif; ?>

						</div> <!-- end #main -->						

					</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
