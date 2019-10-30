<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
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
            <?php echo get_sidebar('pageintro'); ?>
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
                /* Queue the first post, that way we know
                * what date we're dealing with (if that is the case).
                *
                * We reset this later so we can run the loop
                * properly with a call to rewind_posts().
                */
                if ( have_posts() )
                the_post();
                ?>
                
                <h1 class="page-title">
                    <?php if ( is_day() ) : ?>
                    <?php printf( __( 'Daily Archives: <span>%s</span>', 'twentyten' ), get_the_date() ); ?>
                    <?php elseif ( is_month() ) : ?>
                    <?php printf( __( 'Monthly Archives: <span>%s</span>', 'twentyten' ), get_the_date('F Y') ); ?>
                    <?php elseif ( is_year() ) : ?>
                    <?php printf( __( 'Yearly Archives: <span>%s</span>', 'twentyten' ), get_the_date('Y') ); ?>
                    <?php else : ?>
                    <?php _e( 'Blog Archives', 'twentyten' ); ?>
                    <?php endif; ?>
                </h1>
                
                <?php
                /* Since we called the_post() above, we need to
                * rewind the loop back to the beginning that way
                * we can run the loop properly, in full.
                */
                rewind_posts();
                
                /* Run the loop for the archives page to output the posts.
                * If you want to overload this in a child theme then include a file
                * called loop-archives.php and that will be used instead.
                */
                get_template_part( 'loop', 'archive' );
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