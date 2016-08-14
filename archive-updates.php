<?php get_header(); ?>

			<div id="content" class="yearly-archive">

				<div id="inner-content" class="wrap wrap-960 clearfix">

					<h1 class="archive-title alt-font">
						Updates from <span class="light-orange">h</span><span class="pink">u</span><span class="light-blue">e</span><span class="teal">s</span>
						<span class="updatesSub" class="clearfix">
							<a class="button" href="https://feedburner.google.com/fb/a/mailverify?uri=huesorgupdates&amp;loc=en_US" alt="hues Updates Mailing List">
								Subscribe <i class="fa fa-envelope-square"></i>
							</a><a class="button accent-button" href="<?php echo home_url(); ?>/updates/rss">RSS <i class="fa fa-rss"></i></a>

						</span><!--/updatesSub-->
					</h1>


					<div id="main" class="clearfix" role="main">


						<?php
						    function posts_by_year() {
							  // array to use for results
							  $years = array();

							  // get posts from WP
							  $posts = get_posts(array(
							    'numberposts' => -1,
							    'orderby' => 'post_date',
							    'order' => 'ASC',
							    'post_type' => 'updates',
							    'post_status' => 'publish'
							  ));

							  // loop through posts, populating $years arrays
							  foreach($posts as $post) {
							    $years[date('Y', strtotime($post->post_date))][] = $post;
							  }

							  // reverse sort by year
							  krsort($years);

							  return $years;
							}
						?>

						<?php foreach(posts_by_year() as $year => $posts) : ?>
							<div class="postYear clearfix"> 
								<div class="twocol clearfix first">
									<h2 class=""><?php echo $year; ?></h2>
								</div>
								<ul class="clearfix tencol last">
								    <?php foreach($posts as $post) : setup_postdata($post); ?>
								      <li class="clearfix">
								        <a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>">
								        	<strong class="postTitle"><?php the_title(); ?></strong>
									        <em class="postDate "><?php the_date("M j"); ?></em>
									    </a>
								      </li>
								    <?php endforeach; ?>
							  </ul>
							</div><!--/postyear-->				
							<?php endforeach; ?>
									
					</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
