<?php
/*
Template Name: Tools Page
*/
?>

<?php get_header(); ?>

			<div id="content">
				<header class="article-header">

					<h1 class="text-center alt-font" itemprop="headline">Tools &cross; hues</h1>

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
									        'terms' => 'tools' //the slug of the custom tax
									        ),
									    ), 
									    'orderby' => 'modified', 
									    'order' => 'DESC')
									);

									if ( have_posts() ) : while ( have_posts() ) : the_post();								
								
								    	loopProjectVertical();
							
							    endwhile; else: endif; ?>


						</div> <!-- end #main -->


				</div> <!-- end #inner-content -->

				<?php getMailingList();?>

			</div> <!-- end #content -->

<?php get_footer(); ?>
