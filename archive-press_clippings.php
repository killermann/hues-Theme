<?php get_header(); ?>

			<div id="content" class="yearly-archive">

				<div id="inner-content" class="wrap wrap-960 clearfix">

					<div class="clearfix">
						<h1 class="archive-title floatcol first alt-font">
							<span class="light-orange">h</span><span class="pink">u</span><span class="light-blue">e</span><span class="teal">s</span> in the Media
						</h1>

						<span style="margin-top:40px; opacity:.6" class="floatcol"><em>Selected press about hues Org and the many hues initiatives</em></span>
					</div>

					<div id="main" class="clearfix" role="main">

						<?php
						    function posts_by_year() {
							  // array to use for results
							  $years = array();

							  // get posts from WP
							  $posts = get_posts(array(
							    'numberposts' => -1,
							    'orderby' => 'post_date',
							    'order' => 'DESC',
							    'post_type' => 'press_clippings',
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
								        <a target="_blank" href="<?php if(get_field('article_link')){ echo the_field('article_link');} else echo the_permalink(); ?>" alt="<?php the_title(); ?>">
											<span><em><?php if(get_field('source')){ echo the_field('source');}; ?></em>
											&nbsp;&nbsp;/&nbsp;&nbsp;
											<strong><?php the_title(); ?></strong></span>
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
