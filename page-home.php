<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div class="desktopHide homeTopLogo">
					<img src="<?php echo get_template_directory_uri(); ?>/library/images/hues-logo-972.png" alt="hues">
				</div>

				<div id="huesIS" class="clearfix">
					<h1>hues is <span id="rotate">
						<span class="light-orange">art that inspires action</span>
						<span class="pink">tools that facilitate change</span>
						<span class="light-blue">resources that bolster efforts</span>
						<!-- <span class="teal">uncopyrighted and open-source</span> -->
					</span> for global justice</h1>
					<h2>created by Sam Killermann + Friends</h2>
				</div>

				<div id="featuredHues" class="clearfix">
					<div id="featuredMedium" class="clearfix">
						<?php
							query_posts(array(
								'post_type' => 'post',
								'orderby' => 'rand',
								'cat' => 36,
								    'tax_query' => array( //getting all posts in a custom taxonomy
								        array(
								        'taxonomy' => 'sections', //name of tax
								        'field' => 'slug', //can be by slug, name, or id
								        'terms' => 'tools' //the slug of the custom tax
								        ),
								    ),
						    	'showposts' => 2,

						    ));?>

							<?php if ( have_posts()) : while ( have_posts() ) : the_post();

							loopProjectSquare();

					   		endwhile; else: endif; wp_reset_query();
					   	?>
					</div>
					<div id="featuredLarge" class="clearfix">
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

							loopProjectSquare();

					   		endwhile; else: endif; wp_reset_query();
					   	?>
					</div>
					<div id="featuredSmall" class="clearfix">
						<?php
							query_posts(array(
								'post_type' => 'post',
								'orderby' => 'rand',
								'cat' => 36,
								    'tax_query' => array( //getting all posts in a custom taxonomy
								        array(
								        'taxonomy' => 'sections', //name of tax
								        'field' => 'slug', //can be by slug, name, or id
								        'terms' => 'resources' //the slug of the custom tax
								        ),
								    ),
						    	'showposts' => 3,
						    ));?>

							<?php if ( have_posts()) : while ( have_posts() ) : the_post();

							loopProjectSquare();

					   		endwhile; else: endif; wp_reset_query();
					   	?>
					</div>

				</div>

				<div id="home1" class="wrap container clearfix">

					<div class="clearfix stickem-container" id="tabs-container" role="main">
					    <div id="tabNav" class="clearfix stickem floatcol last">
					    	<img src="<?php echo get_template_directory_uri(); ?>/library/images/hues-logo-972.png" alt="hues"><br/>
					    	<p class="alt-font">is</p>
						    <ul class="tabs-menu clearfix">
						        <li class="current"><a id="artLink" href="#art"><i class="fa fa-paint-brush"></i> art</a></li>
						        <li><a id="toolsLink" href="#tools"><i class="fa fa-wrench"></i> tools</a></li>
						        <li><a id="resourcesLink" href="#resources"><i class="fa fa-map"></i> resources</a></li>
						    </ul>

						    <p class="alt-font">for</p>

						    <div class="missionButton clearfix">
								<a id="gjLink" href="<?php echo home_url(); ?>/global-justice">
									global justice <i class="fa fa-globe"></i><i class="fa fa-balance-scales"></i>
								</a>
							</div>

							<p class="alt-font">embodied in the</p>

							<div class="missionButton clearfix">
								<a id="giftLink" href="<?php echo home_url(); ?>/gift">
									gift <i class="fa fa-gift"></i>
								</a>
							</div>

						</div><!--/menu-->
					    <div id="tabContentWrap" class="tab floatcol clearfix first">
					        <div id="art" class="tab-content">
								<?php

								query_posts(array(
								    'showposts' => 4,
								    'post_type' => 'post',
								    'tax_query' => array( //getting all posts in a custom taxonomy
									        array(
									        'taxonomy' => 'sections', //name of tax
									        'field' => 'slug', //can be by slug, name, or id
									        'terms' => 'art' //the slug of the custom tax
									        ),
									    ),
								    )
								);

								if ( have_posts() ) : while ( have_posts() ) : the_post();

							    	loopProject();

							    endwhile; else: endif; wp_reset_query(); ?>

								<a href="<?php echo home_url(); ?>/art" class="button clearfix">View All Art <i class="fa fa-paint-brush"></i></a>

					        </div><!--/art-->

					        <div id="tools" class="tab-content">
								<?php

								query_posts(array(
								    'showposts' => 4,
								    'post_type' => 'post',
								    'tax_query' => array( //getting all posts in a custom taxonomy
									        array(
									        'taxonomy' => 'sections', //name of tax
									        'field' => 'slug', //can be by slug, name, or id
									        'terms' => 'tools' //the slug of the custom tax
									        ),
									    ),
								    )
								);

								if ( have_posts() ) : while ( have_posts() ) : the_post();

							    	loopProject();

							    endwhile; else: endif; wp_reset_query(); ?>

							    <a href="<?php echo home_url(); ?>/tools" class="button clearfix">View All Tools <i class="fa fa-wrench"></i></a>

					        </div><!--/tools-->

					        <div id="resources" class="tab-content">
								<?php

								query_posts(array(
								    'showposts' => 4,
								    'post_type' => 'post',
								    'tax_query' => array( //getting all posts in a custom taxonomy
									        array(
									        'taxonomy' => 'sections', //name of tax
									        'field' => 'slug', //can be by slug, name, or id
									        'terms' => 'resources' //the slug of the custom tax
									        ),
									    ),
								    )
								);

								if ( have_posts() ) : while ( have_posts() ) : the_post();

							    	loopProject();

							    endwhile; else: endif; wp_reset_query(); ?>

							    <a href="<?php echo home_url(); ?>/resources" class="button clearfix">View All Resources <i class="fa fa-map"></i></a>

					        </div><!--/resrouces-->
					    </div><!--/tabs-->
					</div><!--/tabs-container-->

					<script>
						$(document).ready(function() {
							$('.container').stickem();
						});
					</script>
				</div> <!-- end home1-->

				<?php getCollectiveInterstitial();?>

				<div id="homeWelcome" class="wrap clearfix">
					<h2 class="page-title"><?php echo the_title();?></h2>
					<div class="clearfix ninecol first" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix entry-content'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

							<section class="clearfix" itemprop="articleBody">
								<?php the_content(); ?>
							</section> <!-- end article section -->

						</article> <!-- end article -->

						<?php endwhile; endif; wp_reset_query(); ?> <!--reset page intro -->

					</div><!--/main-->

					<div class="threecol last clearfix" role="sidebar">
						<div id="homeLinks" class="clearfix">
							<h4 class="widgettitle">Connect</h4>
							<ul>
								<li>
									<a id="ml" href="http://eepurl.com/btKt31" alt="hues Mailing List">
										Mailing List
										<i class="fa fa-envelope-square"></i>
									</a>
								</li>
								<li>
									<a id="frf" href="http://eepurl.com/bLxcA9" alt="Archived Mailing List Emails">
										Free Resource Friday
										<i class="fa fa-archive"></i>
									</a>
								</li>
								<li>
									<a id="fb" href="https://www.facebook.com/Hues-402694256604377/" alt="hues facebook">
										Facebook
										<i class="fa fa-facebook-square"></i>
									</a>
								</li>

								<li>
									<a id="tw" href="http://twitter.com/huesorg" alt="hues Twitter">
										Twitter
										<i class="fa fa-twitter"></i>
									</a>
								</li>

								<li>
									<a id="yt" href="https://www.youtube.com/user/huesorg" alt="hues YouTube">
										YouTube
										<i class="fa fa-youtube-square"></i>
									</a>
								</li>

								<li>
									<a id="ig" href="https://www.instagram.com/huesorg" alt="hues Instagram">
										Instagram
										<i class="fa fa-instagram"></i>
									</a>
								</li>

								<li>
									<a id="pi" href="https://www.pinterest.com/huesorg" alt="hues YouTube">
										Pinterest
										<i class="fa fa-pinterest-square"></i>
									</a>
								</li>
							</ul>
						</div><!--/homelinks-->

						<?php getNewsWidget();?>

						<?php getStoreWidget();?>

					</div><!--/home about sidebar-->

				</div>

				<?php getMailingList();?>

			</div> <!-- end #content -->

<?php get_footer(); ?>
