				<div id="pageSidebar" class="sidebar fourcol last clearfix" role="complementary">

					<?php getNewsWidget();?>

					<?php getStoreWidget();?>

					<?php if ( is_active_sidebar( 'pagesidebar' ) ) : ?>

						<?php dynamic_sidebar( 'pagesidebar' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->

						<div class="alert alert-help">
							<p><?php _e("Please activate some Widgets.", "bonestheme");  ?></p>
						</div>

					<?php endif; ?>

				</div>