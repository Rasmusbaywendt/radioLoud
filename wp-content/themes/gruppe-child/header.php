<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?>
<style>
    .site-logo {
        top: -16px;
        border-radius: 0%;
        right: 30px;
    }

    .site-branding-container ul {
        left: 50vw;
    }

    #menu-item-1291 {
        border-radius: 10px;
        padding: 6px 15px;
        margin-left: 5px;
        background-color: #DC0B3A;
    }


    .main-navigation .main-menu>li:last-child>a,
    .main-navigation .main-menu>li:last-child.menu-item-has-children .submenu-expand {
        color: white;
    }

</style>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://use.typekit.net/lfd3jsr.css">
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">

        <a class="skip-link screen-reader-text" href="#content">
            <?php _e( 'Skip to content', 'twentynineteen' ); ?>
        </a>

        <header id="masthead" class="<?php echo is_singular() && twentynineteen_can_show_post_thumbnail() ? 'site-header featured-image' : 'site-header'; ?>">




            <div class="site-branding-container">
                <?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

            </div>

            <!-- .site-branding-container -->

            <?php if ( is_singular() && twentynineteen_can_show_post_thumbnail() ) : ?>
            <div class="site-featured-image">

                <?php
						twentynineteen_post_thumbnail();
						the_post();
						$discussion = ! is_page() && twentynineteen_can_show_post_thumbnail() ? twentynineteen_get_discussion_data() : null;

						$classes = 'entry-header';
					if ( ! empty( $discussion ) && absint( $discussion->responses ) > 0 ) {
						$classes = 'entry-header has-discussion';
					}
					?>
                <div class="<?php echo $classes; ?>">
                    <?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
                </div>
                <!-- .entry-header -->
                <?php rewind_posts(); ?>
            </div>
            <?php endif; ?>
        </header>
        <!-- #masthead -->

        <div id="content" class="site-content">
