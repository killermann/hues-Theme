<?php

/**************************************
TEASER LOOP
**************************************/

function loopTeaser() {?>
<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix teaser loopCard'); ?> role="article">
	<h3 class="loopTitle">
		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
			<?php the_title(); ?>
		</a>
	</h3>

	<div class="loopImage featuredImage fivecol last clearfix">
		<?php 
		if ( has_post_thumbnail() ) {?>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
				<?php the_post_thumbnail('social-thumb'); ?>
			</a>
		<?php } else {?>
			<div class="noPostThumb">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
					<img alt="Missing Thumbnail" src="<?php echo get_template_directory_uri(); ?>/library/images/no-thumbnail.png">
				</a>
			</div>
		<?php }?>
	</div><!--/teaserImage-->

	<div class="loopText sevencol first clearfix">	    
	    <?php if ( has_excerpt( get_the_id() ) ){ echo the_excerpt();} ?>

	    <a class="readThis" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
			I want to go to there <i class="fa fa-share"></i>
		</a>
		
	</div><!--/teaserText-->
</article> <!-- end teaser -->
<?php
}

/**************************************
BLOGGED LOOP
**************************************/

function loopBlogged() {?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('loopCard clearfix blogged'); ?> role="article">

		<div class="loopImage featuredImage">
			<div class="bloggedLeft clearfix">
				<?php 
				if ( has_post_thumbnail() ) {?>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
	    				<?php the_post_thumbnail('tall-thumb-600'); ?>
	    			</a>
				<?php } else {?>
					<div class="noPostThumb">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
							<img alt="Missing Thumbnail" src="<?php echo get_template_directory_uri(); ?>/library/images/no-thumbnail-tall.jpg">
						</a>
					</div>
				<?php }?>
			</div><!--/bloggedLeft-->
		</div><!--/bloggedImage-->

		<div class="loopText">
			<h3 class="loopTitle">
	    		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
	    			<?php the_title(); ?>
	    		</a>
	    	</h3>

	    	<?php if ( has_excerpt( get_the_id() ) ){ echo the_excerpt();} ?>

		</div><!--/bloggedText-->
    </article> <!-- end blogged -->
<?php
}

/**************************************
MINIMAL LOOP
**************************************/

function loopMinimal() {?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('loopCard minimal'); ?> role="article">

		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">

			<span class="loopText">
				<h4 class="loopTitle"><?php the_title(); ?></h4>
			</span><!--/bloggedText-->

		</a>
    </article> <!-- end blogged -->
<?php
}


/**************************************
SHADOWBOX LOOP
**************************************/

function loopProjectSquare() {?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('loopCard clearfix project'); ?> role="article">

		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">

			<div class="loopImage featuredImage">

				<?php 
				if ( has_post_thumbnail() ) {
					
					the_post_thumbnail('square-thumb-300');
				
				} else {?>
					<div class="noPostThumb">
						<img alt="Missing Thumbnail" src="<?php echo get_template_directory_uri(); ?>/library/images/no-thumbnail-square.jpg">
					</div>
				<?php } ?>

				
				<div class="loopText clearfix">
					<div class="loopTitleWrap clearfix">
						<h2 class="loopTitle">
							<?php the_title(); ?>
						</h2>
					</div>
					<div class="subtitle alt-font"><?php if ( has_excerpt( get_the_id() ) ){ echo the_excerpt();} ?></div>
				</div>
				
			</div><!--/loopImage-->
		</a>
	</article> <!-- end blog entry -->
<?php
}

/**************************************
PROJECT LOOP
**************************************/

function loopProject() {?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('loopCard clearfix project'); ?> role="article">

		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">

			<div class="loopImage featuredImage">

				<?php 
				if ( has_post_thumbnail() ) {
					
					the_post_thumbnail('social-thumb');
				
				} else {?>
					<div class="noPostThumb">
						<img width="900" height="473" alt="Missing Thumbnail" src="<?php echo get_template_directory_uri(); ?>/library/images/no-thumbnail-social.jpg">
					</div>
				<?php } ?>

				
				<div class="loopText clearfix">
					<div class="loopTitleWrap clearfix">
						<h2 class="loopTitle">
							<?php the_title(); ?>
						</h2>
					</div>
					<div class="subtitle alt-font"><?php if ( has_excerpt( get_the_id() ) ){ echo the_excerpt();} ?></div>
				</div>
				
			</div><!--/loopImage-->

		</a>
	</article> <!-- end blog entry -->
<?php
}



function loopProjectVertical() {?>

	<article id="post-<?php the_ID(); ?>" <?php post_class('loopCard clearfix projectVert'); ?> role="article">

		<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">

			<div class="loopImage featuredImage">

				<?php 
				if ( has_post_thumbnail() ) {
					
					the_post_thumbnail('square-thumb-300');
				
				} else {?>
					<div class="noPostThumb">
						<img width="800" height="800" alt="Missing Thumbnail" src="<?php echo get_template_directory_uri(); ?>/library/images/no-thumbnail-square.jpg">
					</div>
				<?php } ?>

				<div class="loopTitleWrap clearfix">
					<h2 class="loopTitle">
						<?php the_title(); ?>
					</h2>
				</div>
				
			</div><!--/loopImage-->

			<div class="loopText clearfix">
				<?php if ( has_excerpt( get_the_id() ) ){ echo the_excerpt();} ?>
			</div><!--/loopText-->
		</a>
	</article> <!-- end blog entry -->
<?php
}

/**************************************
MERCH LOOP
**************************************/

function loopMerchVertical() {?>

	<?php 

	if(get_field('store_link') ) { ?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class('loopCard clearfix merchVert'); ?> role="article">

		<a href="<?php the_field('store_link'); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">

			<div class="loopImage featuredImage">

				<?php 
				if ( has_post_thumbnail() ) {
					
					the_post_thumbnail('square-thumb-300');
				
				} else {?>
					<div class="noPostThumb">
						<img width="800" height="800" alt="Missing Thumbnail" src="<?php echo get_template_directory_uri(); ?>/library/images/no-thumbnail-square.jpg">
					</div>
				
				<?php } if(get_field('store_link') ): ?>

				<div class="price">&#36;<?php the_field('cost'); ?></div>

				<?php endif; ?>
				
			</div><!--/loopImage-->
			<div class="loopTitleWrap clearfix">
				<h2 class="loopTitle">
					<?php the_title(); ?>
				</h2>
			</div>

			<div class="merchButtons clearfix">
				<a class="button" href="<?php the_field('store_link'); ?>" rel="bookmark" title="Buy">Buy <i class="fa fa-shopping-bag"></i></a>
				
				<a class="button accent-button" href="<?php the_permalink() ?>" rel="bookmark" title="Info"><i class="fa fa-info-circle"></i></a>
			</div>

			<div class="loopText clearfix">
				<?php if ( has_excerpt( get_the_id() ) ){ echo the_excerpt();} ?>
			</div><!--/loopText-->
		</a>
	</article> <!-- end blog entry -->

	<?php };
}
?>