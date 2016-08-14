<?php
/*
Template Name: Merch Page
*/
?>

<?php get_header(); ?>

			<div id="content">
				<header class="article-header">

					<h1 class="text-center alt-font" itemprop="headline">Merch &cross; <span class="light-orange">h</span><span class="pink">u</span><span class="light-blue">e</span><span class="teal">s</span></h1>

					<div class="button-group filters-button-group clearfix">
						<button class="button is-checked" data-filter="*">show all</button>
						<button class="button" data-filter=".category-shirt">shirts</button>
						<button class="button" data-filter=".category-poster">posters</button>
						<!--<button class="button" data-filter=".category-swag">swag</button>-->
						<!--<button class="button" data-filter=".tag-credo">credos</button>-->
					</div>

				</header> <!-- end article header -->

				<div id="inner-content" class="clearfix">


						<div id="main" class="clearfix isotope" role="main">
								
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<article id="statement" <?php post_class('loopCard clearfix projectVert'); ?> role="article">
									<div class="loopText entry-content clearfix">
										<?php echo the_content()?>
									</div><!--/loopText-->
								</article> <!-- end blog entry -->

								<?php endwhile; endif; wp_reset_query(); ?> <!--reset page intro -->


								<?php 

									query_posts(array(
									    'showposts' => 99, 
									    'post_type' => 'post', 
									    'tax_query' => array( //getting all posts in a custom taxonomy
									        array(
									        'taxonomy' => 'sections', //name of tax
									        'field' => 'slug', //can be by slug, name, or id
									        'terms' => 'merch' //the slug of the custom tax
									        ),
									    ), 
									    'orderby' => 'modified', 
									    'order' => 'DESC')
									);

									if ( have_posts() ) : while ( have_posts() ) : the_post();								
								
								    	loopMerchVertical();
							
							    endwhile; else: endif; ?>


						</div> <!-- end #main -->


				</div> <!-- end #inner-content -->

				<?php getMailingList();?>

			</div> <!-- end #content -->

			<script src="https://gumroad.com/js/gumroad.js"></script>

<?php get_footer(); ?>
