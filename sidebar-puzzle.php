<?php
/**
 * The Puzzle Sidebar 
*/
// A puzzle sidebar for widgets, just because.
if ( is_active_sidebar( 'puzzle-widget-area' ) ) : ?>

		<div id="puzzle">
				<?php dynamic_sidebar( 'puzzle-widget-area' ); ?>

		<?php if(!is_page(5)) { ?>
		<div class="first100">
		<?php echo do_shortcode('[singlepic id="16" template="first100"]'); ?>
		</div>
		<?php } ?>

		</div><!-- #puzzle .widget-area -->
		

<?php endif; ?>
