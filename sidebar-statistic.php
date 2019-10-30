<?php
/**
 * The Statistic Sidebar 
*/

if ( is_active_sidebar( 'statistic-widget-area' ) ) : ?>

		<div id="statistic-wrap">
				<?php dynamic_sidebar( 'statistic-widget-area' ); ?>
			
		</div><!-- statistic.widget-area -->

<?php endif; ?>