<?php

/* Register Hooks */

function bones_hook_before_sidebar() {
	do_action('bones_hook_before_sidebar');
}

function bones_hook_post_intro() {
	do_action('bones_hook_post_intro');
}

function bones_hook_post_footer() {
	do_action('bones_hook_post_footer');
}

function bones_hook_before_footer() {
	do_action('bones_hook_before_footer');
}

/* Snapshot */

function getSnapshot() {?>

<div class="snapshot">
	<p class="tags"><?php the_tags('' . __('', 'bonestheme') . '', ' ', ''); ?> 
	</p>
	<p><small><i class="fa-calendar fa"></i> Last updated <?php the_modified_date(); ?></small></p>
	</p>

</div>

<?php }

add_action('bones_hook_before_sidebar','getSnapshot');

function getNewsWidget() {?>
	<div id="newsWidget" class="clearfix">
		<h4 class="widgettitle">From the collective</h4>
		<?php 
			query_posts(array(
		    'post_type' => 'updates',
		    'showposts' => 1,
		    ));?>

			<?php if ( have_posts()) : while ( have_posts() ) : the_post();

			loopProjectSquare();

	   		endwhile; else: endif; wp_reset_query(); 
	   	?>
	</div>
   	
	<?php
}

add_action('bones_hook_before_sidebar','getNewsWidget');

function getStoreWidget() {?>
	<div id="storeWidget" class="clearfix">
		<h4 class="widgettitle">From the store</h4>
		<?php 
			query_posts(array(
				'post_type' => 'post', 
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
	</div><!--/storewidget-->
   	
	<?php
}

add_action('bones_hook_before_sidebar','getStoreWidget');

function getCreedWidget() {?>
	<div id="creedWidget" class="clearfix">
		<h4 class="widgettitle">The hues creed poster</h4>
		<a href="http://hues.xyz/hues-creed-poster" alt="hues Creed Poster">
			<img src="<?php echo get_template_directory_uri(); ?>/library/images/hues-creed-poster-mockup-model.jpg" alt="hues Creed Poster">
		</a>
		<a class="button" href="http://hues.xyz/hues-creed-poster" alt="Get Poster">
			Get Poster <i class="fa fa-file-photo-o"></i>
		</a>
		<a class="button accent-button" href="http://hues.xyz/creed" alt="Read">
			Read <i class="fa fa-book"></i>
		</a>
	</div><!--/creedWidget-->

	<?php
}

add_action('bones_hook_before_sidebar','getCreedWidget');


function getCollectiveInterstitial() {?>

<div id="collectiveI" class="interstitial clearfix">
	<div class="interstitialOverlay clearfix">
		<div class="wrap clearfix">
			<div class="eightcol first">
				<h3>
					<span class="alt-font">We're a collective</span><br/> 
					who sees ways the Earth can be better for all of its inhabitants and believe in our hearts we can effect those positive changes.
				</h3>
			</div>
			<div class="fourcol interLink last">
				<a href="<?php echo home_url(); ?>/collective" alt="View sK Tour Stops">Join the collective.<i class="fa fa-thumbs-up"></i>
				</a>
			</div>
		</div>
	</div>
</div> <?php } 



function getMailingList() { ?>
<div id="mailingList" class="wrap clearfix">
							
	<!-- Begin MailChimp Signup Form -->
	<div id="mc_embed_signup">
	<form action="//xyz.us11.list-manage.com/subscribe/post?u=b58eda9cbc9b986662b68482d&amp;id=d253cb0027" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		<div class="twocol first">
			<label for="mce-EMAIL">Subscribe for hues Updates</label>
		</div>
		<div class="inputWrap sixcol clearfix">
			<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="your@email.com" required>
		</div>
	    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
	    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b58eda9cbc9b986662b68482d_d253cb0027" tabindex="-1" value=""></div>
	    <div class="inputWrap fourcol last clearfix">
	    	<button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe">Yes, Please <i class="fa fa-thumbs-up"></i></button>
	    </div>
	</form>
	</div>

	<!--End mc_embed_signup-->

</div><!--/braintrust--> <?php }

/*********************************************************
************ INDIVIDUAL POSTS AND PAGE HOOKS ************
*********************************************************/


/* FOR CREED PAGE */

function getCreedSidebar() {
	if (is_single('183') ) {
		
	}
}

add_action('bones_hook_before_sidebar','getCreedSidebar');

?>
