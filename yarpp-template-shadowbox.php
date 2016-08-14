<?php 
/*
YARPP Template: Shadowbox
*/
?>

<div id="relatedPosts" class="clearfix">
	
	<?php if (have_posts()):?>

	<ul>
		<?php while (have_posts()) : the_post(); ?>
		<li class="shadowbox loopCard threecol">
			<a href="<?php the_permalink() ?>" rel="bookmark">
				<div class="loopText">
					<h4 class="loopTitle"><span class="highlight"><?php the_title(); ?></span></h4>
				</div>
				<div class="loopImage">
					<?php the_post_thumbnail('square-thumb-300');?>
				</div>
			</a><!-- (<?php the_score(); ?>)-->
		</li>
		<?php endwhile; ?>
	</ul>



	<?php else:
	query_posts("orderby=rand&order=asc&limit=1");
	the_post();?>
	<p>No related posts were found, so here's a consolation prize: <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>.</p>
	</div>

<?php endif; ?>

</div>
