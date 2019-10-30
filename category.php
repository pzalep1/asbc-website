<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<div class="row">
    <div class="col col-xs-12 col-sm-12 col-md-9">
        <div id="container" class="default">
            <div class="page-intro-wrap">
                <div class="textwidget"><div class="page-intro-wrap">
                    <div class="intro-text">
                        <h1 class="page-title">
                       	 <?php printf( __( '%s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
                        </h1>
                    </div>
                    <div style="clear:both;"></div>
                    </div><!-- pageintro.widget-area -->
                </div>
			</div>
            <div class="row">
            <?php if ( is_active_sidebar('news-widget-area') ) : ?>
                <div id="sidebar" class="col col-xs-12 col-sm-4">
                	<div id="news-sidebar-wrap">
                    	<?php dynamic_sidebar('news-widget-area'); ?>
                    </div>
                </div>
                <?php endif; ?>
                <div id="content" role="main" class="statistic col col-xs-12 col-sm-8">
                    <?php
                    $category_description = category_description();
                    if ( ! empty( $category_description ) )
                    echo '<div class="archive-meta">' . $category_description . '</div>';
                    
                    /* Run the loop for the category page to output the posts.
                    * If you want to overload this in a child theme then include a file
                    * called loop-category.php and that will be used instead.
                    */
                    get_template_part( 'loop', 'category' );
                    ?>
				</div><!-- #content -->
             </div><!-- .row -->
        </div><!-- #container -->
    </div>
    <div class="col col-xs-12 col-sm-12 col-md-3">
		<?php get_sidebar('puzzle'); ?>
    </div>
</div>
<?php get_footer(); ?>