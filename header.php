<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(''); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?v=1.0.2" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    
    <?php
        /* We add some JavaScript to pages with the comment form
         * to support sites with threaded comments (when in use).
         */
        if ( is_singular() && get_option( 'thread_comments' ) )
            wp_enqueue_script( 'comment-reply' );
    
        /* Always have wp_head() just before the closing </head>
         * tag of your theme, or you will break many plugins, which
         * generally use this hook to add elements to <head> such
         * as styles, scripts, and meta tags.
         */
        wp_head();
    ?>
    <!--include Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    
    <?php 
		echo get_field( 'ga_code', 'option' );
	?>
</head>

<body <?php body_class(); ?>>
<?php echo do_shortcode( '[alerts]' ) ?>
<div id="wrapper" class="hfeed container">
	<div id="header">
		<div id="masthead">
			<div id="branding" role="banner" class="row">
				<div id="site-title" class="col col-xs-12 col-sm-4">
					<a href="<?php echo get_permalink(5); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="home"></a>
				</div>
				<div id="hadlogo" class="col col-xs-12 col-sm-3">
                	<a href="/calendar-of-events/educationseminars/">
                    	<img src="/wp-content/themes/twentyten-child/images/header_HADlogo.png" width="145" height="59" border="0">
                    </a>
                </div>
				<div id="site-description" class="col col-xs-12 col-sm-5">
                	<h1>Learn how to get involved</h1>
                    <p>410-655-7933 | <a href="mailto:info@baltimoreautismsociety.org">info@baltimoreautismsociety.org</a></p>
                    <?php echo do_shortcode( '[social align="alignright" style="icon"]' ); ?>
                </div>
			</div><!-- #branding -->

		</div><!-- #masthead -->
	</div><!-- #header -->

	<div id="main">
    
    <div class="navigation-wrap">
        <div class="row">
            <div class="hidden-xs col col-sm-12 col-md-9">
                <div class="row">
                    <div id="primary-nav" class="col hidden-xs col-sm-6">
                        <?php wp_nav_menu( array(
                            'menu' => 'main-menu'
                        ) ) ?>
                    </div>
                    <div id="secondary-nav" class="col hidden-xs col-sm-6">
                        <?php wp_nav_menu( array(
                            'menu' => 'secondary-menu'
                        ) ) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div style="clear:both;"></div>