			<?php bones_hook_before_footer();?>
			
			
			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="clearfix">
					<div class="threecol first clearfix">
						<div class="footStack footerList">
							<h3>
								Recent Updates
							</h3>
							<?php 
								query_posts(array(
							    'post_type' => 'updates',
							    'showposts' => 4,
							    ));?>

							<ul class="clearfix">
								<?php if ( have_posts()) : while ( have_posts() ) : the_post();?>			
									<li>
										<a href="<?php the_permalink() ?>" class="clearfix" rel="bookmark" title="<?php the_title_attribute(); ?>">
											<?php the_title(); ?>
										</a>
									</li>
						    	<?  endwhile; else: endif; wp_reset_query(); ?>
						   	</ul>

						   	<a class="all" href="<?php echo home_url(); ?>/updates" alt="View all Updates">
								All Updates
							</a>
						</div>
					</div>
					<div class="threecol clearfix">

						<div class="footStack footPress footerList">
							<h3>
								Recent Press Clippings 
							</h3>
							<?php 
								query_posts(array(
							    'post_type' => 'press_clippings',
							    'showposts' => 4,
							    ));?>

							<ul class="clearfix">
								<?php if ( have_posts()) : while ( have_posts() ) : the_post();?>			
									<li>
										<a target="_blank" href="<?php if(get_field('article_link')){ echo the_field('article_link');} else echo the_permalink(); ?>" alt="<?php the_title(); ?>">
											<span><em><?php if(get_field('source')){ echo the_field('source');}; ?></em> 
											<strong><?php the_title(); ?></strong></span>
									    </a>
									</li>
						    	<?  endwhile; else: endif; wp_reset_query(); ?>
						   	</ul>

						   	<a class="all" href="<?php echo home_url(); ?>/press" alt="View all Press">
								All Press
							</a>

						</div>
					</div>
					<div class="threecol clearfix">
						<h3>Connect with hues</h3>
						<nav role="navigation" class="footer-links">
							<?php bones_footer_links(); ?>
						</nav>

						<h3 style="margin-top:40px">Mailing Address</h3>
						<div class="footerPara" itemscope itemtype="https://schema.org/Organization">
							<p itemprop="legalName">
								hues Org, LLC
							</p>
							<div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
								<p itemprop="streetAddress">P.O. Box 684412</p>
								<p>
									<span itemprop="addressLocality">Austin</span>, 
									<span itemprop="addressRegion">TX</span> 
									<span itemprop="postalCode">78768</span>
								</p>
							</div>
						</div>
					</div>
					<div class="threecol last clearfix">
						<h3>Support the Org</h3>
						<?php 
							query_posts(array(
								'post_type' => 'post', 
								'orderby' => 'rand',
								'cat' => 36,
								    'tax_query' => array( //getting all posts in a custom taxonomy
								        array(
								        'taxonomy' => 'sections', //name of tax
								        'field' => 'slug', //can be by slug, name, or id
								        'terms' => 'merch' //the slug of the custom tax
								        ),
								    ), 
						    	'showposts' => 1,
						    ));?>

							<?php if ( have_posts()) : while ( have_posts() ) : the_post();

							loopProjectVertical();

					   		endwhile; else: endif; wp_reset_query(); 
					   	?>
					</div>

				</div> <!-- end #inner-footer -->

			</footer> <!-- end footer -->

		</div> <!-- end #container -->

		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

		<script>
			$(window).ready(function() {
			     $('.tip').tipr();
			});
		</script>

	</body>

</html> <!-- end page. what a ride! -->
