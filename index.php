<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
                       	 <?php printf( __( '%s', 'twentyten' ), '<span>' . get_the_title( 1543, false ) . '</span>' ); ?>
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
                /* Run the loop to output the posts.
                 * If you want to overload this in a child theme then include a file
                 * called loop-index.php and that will be used instead.
                 */
                 get_template_part( 'loop', 'index' );
                ?>
				</div><!-- #content -->
             </div><!-- .row -->
        </div><!-- #container -->
    </div>
</div>
<?php get_footer(); ?>