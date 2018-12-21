<?php
/*
Template Name: Collective
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="clearfix">

					<div id="collectiveI" class="clearfix interstitial" role="main">
						<div class="interstitialOverlay clearfix">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="https://schema.org/BlogPosting">


								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_content(); ?>
									<div class="essayButtons">
										<a class="button accent-button" href="#Join"><i class="fa fa-exclamation-circle"></i> Where do I sign up?</a>
										<a class="button" href="#Creed"><i class="fa fa-question-circle"></i> Tell me more.</a>
									</div>
								</section> <!-- end article section -->

								<footer class="article-footer">
									<?php $args = array(
									    'post_parent' => $post->ID,
									    'post_type' => 'page',
									    'orderby' => 'menu_order'
									);

									$child_query = new WP_Query( $args );
									?>

									<?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>

									   <?php loopBlogged();?>
									   
									<?php endwhile; ?>

									<?php
									wp_reset_postdata();?>

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
						</div><!--inter overlay triple-->

					</div> <!-- end #main -->

					<div id="Creed" class="wrap collectiveSec clearfix">
						<h1>This is our creed</h1>
						<h2>This is what we believe.</h2>
						<div class="clearfix feature">
							<a href="https://hues.xyz/creed" alt="hues Creed"><img src="https://hues.xyz/wp-content/uploads/2016/01/hues-Creed-1400.png" alt="hues Creed"/></a>
						</div>
						<div class="collectiveShare clearfix">
									<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//hues.xyz/creed
" alt="Share Creed on Facebook" id="fb">
										Share on Facebook <i class="fa fa-facebook-square"></i>
									</a>
									<a target="_blank" href="https://twitter.com/home?status=http%3A//hues.xyz/creed" alt="tweet the creed" id="tw">
										Tweet it <i class="fa fa-twitter"></i>
									</a>

									<a target="_blank" href="https://pinterest.com/pin/create/button/?url=hues&media=http%3A//hues.xyz/wp-content/uploads/2016/01/hues-Creed-1400.png&description=The%20hues%20Creed%3A%2025%20bold%20ideas%20for%20living%20well." alt="pin the creed on pinterest" id="pi">
										Pin It <i class="fa fa-pinterest-square"></i>
									</a>

									<a target="_blank" target="_blank" href="https://hues.xyz/hues-creed-poster/" alt="Get Poster" id="po">
										Get Creed Poster <i class="fa fa-file-image-o"></i>
									</a>
						</div><!--/collectiveshare-->
													
					</div><!--collective creed-->

					<div id="Join" class="collectiveSec clearfix">
						<div class="interstitialOverlay clearfix">
							<div class="wrap clearfix">
								<h1>Join</h1>
								<h2>The Collective</h2>
								<p class="threecol first">
									<span class="large">Stand in solidarity <span class="amp">&amp;</span><br/></span><br/> get an email every month with links, free resources, and calls to action &mdash; a monthly push toward a more beautiful world.
								</p>
								
								<!-- Begin MailChimp Signup Form -->
								<div id="mc_embed_signup" class="ninecol last clearfix">
								<form action="//xyz.us11.list-manage.com/subscribe/post?u=b58eda9cbc9b986662b68482d&amp;id=007f95694e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
										<div class="mc-field-group sixcol first clearfix">
											<label for="mce-EMAIL">Email Address</label><br/>
											<input type="email" value="" placeholder="your@email.com" name="EMAIL" class="required email" id="mce-EMAIL">
										</div>
										<div class="sixcol clearfix last mc-field-group">
											<label for="mce-MMERGE3">Your Credo </label>
											<input type="text" value="" placeholder="What do you believe?" name="MMERGE3" class="" id="mce-MMERGE3">
										</div>
										<div class="sixcol clearfix first mc-field-group">
											<label for="mce-FNAME">First Name </label><br/>
											<input type="text" value="" placeholder="(optional)" name="FNAME" class="" id="mce-FNAME">
										</div>
										<div class="sixcol clearfix last mc-field-group">
											<label for="mce-LNAME">Last Name </label><br/>
											<input type="text" value="" placeholder="(optional)" name="LNAME" class="" id="mce-LNAME">
										</div>
										
										<div id="mce-responses" class="clear">
											<div class="response" id="mce-error-response" style="display:none"></div>
											<div class="response" id="mce-success-response" style="display:none"></div>
										</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
								    	<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b58eda9cbc9b986662b68482d_007f95694e" tabindex="-1" value=""></div>
								    
								    	<div class="mc-field-group clear">
								    		<input type="submit" value="I'm in." name="subscribe" id="mc-embedded-subscribe" class="button">
								    	</div>
								</form>
								</div>

								<!--End mc_embed_signup-->
							</div><!--/wrap-->
						</div><!--/overlay-->
					</div><!--/collectiveJoin-->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
