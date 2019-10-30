<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>

<!-- styles needed by jScrollPane -->
<link type="text/css" href="/wp-content/themes/twentyten-child/scripts/jquery.jscrollpane.css" rel="stylesheet" media="all" />
<!-- the styles for the lozenge theme --> 
<link type="text/css" href="/wp-content/themes/twentyten-child/scripts/jquery.jscrollpane.lozenge.css" rel="stylesheet" media="all" />

<!-- the mousewheel plugin - optional to provide mousewheel support -->
<script type="text/javascript" src="/wp-content/themes/twentyten-child/scripts/jquery.mousewheel.js"></script>

<!-- the jScrollPane script -->
<script type="text/javascript" src="/wp-content/themes/twentyten-child/scripts/jquery.jscrollpane.min.js"></script>

<script type="text/javascript">
$j=jQuery.noConflict();
$j(function() {
	$j('#home-events').jScrollPane({
		showArrows: true,
		horizontalGutter: 10
	});
});
</script>
<div id="container" class="home">
    <div id="content" role="main">
        <div class="row">
            <div class="col col-xs-12 col-sm-12 col-md-9">
            	<?php echo do_shortcode("[nggallery id=1 template=home]");?>
            </div>
        </div><!-- .row -->
        <div class="row">
            <div class="col col-xs-12 col-sm-6">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="entry-content">
                            <?php the_content(); ?>
                            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
                            <?php //edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
                        </div><!-- .entry-content -->
                    </div><!-- #post-## -->
                <?php endwhile; ?>
            </div>
			<div class="col col-xs-12 col-sm-6">
				<?php get_sidebar('home'); ?>
            </div>
            <div id="sidebar" class="col col-xs-12 col-sm-12 hidden-md hidden-lg">
                <?php get_sidebar('puzzle'); ?>
            </div>
        </div><!-- .row -->
	</div><!-- #content -->

</div><!-- #container -->

<?php get_footer(); ?>
