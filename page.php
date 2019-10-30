<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<div class="row">
    <div class="col col-xs-12 col-sm-12 col-md-9">
        <div id="container">
            <?php get_sidebar('pageintro'); ?>
            <div class="row">
                <div id="sidebar" class="col col-xs-12 col-sm-4">
                    <?php get_sidebar('statistic'); ?>
                </div>
                <div id="content" role="main" class="statistic col col-xs-12 col-sm-8">
                <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="entry-content">
                            <?php the_content(); ?>
                            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
                            <?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
                        </div><!-- .entry-content -->
                    </div><!-- #post-## -->
                    
                    <?php comments_template( '', true ); ?>
                
                <?php endwhile; ?>
                
                </div><!-- #content -->
             </div><!-- .row -->
        </div><!-- #container -->
    </div>
    <div class="col col-xs-12 col-sm-12 col-md-3">
		<?php get_sidebar('puzzle'); ?>
    </div>
</div>
<?php get_footer(); ?>
