<?php
/**
 * The Home Sidebar 
*/
?>
<div id="news-events">
<?php
if ( is_active_sidebar( 'home-news-widget-area' ) ) : ?>
	<div id="news-group">
		<div class="title">[<span>what's new in autism</span>]</div>
		<div id="home-news">
<a href="/autism-news/" style="display:block;margin:0 auto;width:130px;"><img src="https://www.baltimoreautismsociety.org/wp-content/gallery/general/asa-news.jpg" alt="asa-news" width="130" border="0"/></a>

		</div><!-- #news .widget-area -->
	</div>

<?php endif;

if ( is_active_sidebar( 'home-events-widget-area' ) ) : ?>
	<div id="event-group">
		<div class="title">[<span>calendar</span>]</div>
		<div id="home-events">
				<?php dynamic_sidebar( 'home-events-widget-area' ); ?>
		</div><!-- #events .widget-area -->
		<div class="gray-tab"><a href="/calendar-of-events/">details</a></div>
	</div>

<?php endif; ?>
</div>