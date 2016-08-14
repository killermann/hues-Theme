				<div id="archiveSidebar" class="sidebar fourcol last clearfix" role="complementary">

				    <?php
					    if (is_category()) {
					    $this_category = get_category($cat);
					    }
					    ?>
					    <?php
					    if($this_category->category_parent)
					    $this_category = wp_list_categories('orderby=id&show_count=0
					    &title_li=&use_desc_for_title=1&child_of='.$this_category->category_parent.
					    "&echo=0"); else
					    $this_category = wp_list_categories('orderby=id&depth=1&show_count=0
					    &title_li=&use_desc_for_title=1&child_of='.$this_category->cat_ID.
					    "&echo=0");
					    if ($this_category) { ?> 

					<ul>
					<?php echo $this_category; ?>

					</ul>

					<?php } ?>

					<?php if ( is_active_sidebar( 'archivesidebar' ) ) : ?>

						<?php dynamic_sidebar( 'archivesidebar' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->

						<div class="alert alert-help">
							<p><?php _e("Please activate some Widgets.", "bonestheme");  ?></p>
						</div>

					<?php endif; ?>

				</div>