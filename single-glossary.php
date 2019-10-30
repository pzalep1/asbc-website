<?php

get_header(); ?>

<div class="row">
    <div class="col col-xs-12 col-sm-12 col-md-9">
		<div id="container" class="single glossary">

			<div class="page-intro-wrap">
				<?php echo do_shortcode("[sce_pageintro id=118]"); ?>
			</div><!-- pageintro.widget-area -->
            <div class="row">
                <div class="col col-xs-12 col-sm-4">
                    <div id="statistic-wrap">
                        <?php echo do_shortcode("[sce_get_statistic id=61]"); ?>
                    </div><!-- statistic.widget-area -->
                </div>

                <div id="content" role="main" class="statistic col col-xs-12 col-sm-8">
                <?php echo do_shortcode("[sce-glossary-abc]");?>
                <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h2><?php the_title(); ?></h2>
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
    <div id="sidebar" class="col col-xs-12 col-sm-12 col-md-3">
		<?php get_sidebar('puzzle'); ?>
    </div>
</div>
<?php get_footer(); ?>