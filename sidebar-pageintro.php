<?php
/**
 * The Page Intro Sidebar 
*/

if ( is_active_sidebar( 'pageintro-widget-area' ) ) : ?>

		<div class="page-intro-wrap">
				<?php dynamic_sidebar( 'pageintro-widget-area' ); ?>
		</div><!-- pageintro.widget-area -->

<?php endif; ?>