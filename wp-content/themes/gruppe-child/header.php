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
    .site-header {
        z-index: 100;
        position: sticky;
        top: 0;
    }

    .site-logo {
        top: -16px;
        border-radius: 0%;
        right: 30px;
    }

    .site-logo .custom-logo-link .custom-logo {
        width: 55px;


    }

    .site-logo .custom-logo-link {
        margin-top: 0px;
    }

    .site-branding-container ul {
        left: 50vw;
    }

    #menu-item-1291 {
        border-radius: 10px;
        padding: 6px 15px;
        margin-left: 5px;
        background-color: #DC0B3A;
        color: white;
    }

    svg {
        width: 2.3vw;
        height: 2.3vw;
        position: relative;
        top: 0.4vw;
        left: 1.1vw;
    }

    .site-logo:hover {
        color: white;
        box-shadow: none;
    }

    .site-title a {
        display: none;

    }

    /*    Hover på a links */
    #menu-menu a:hover {
        color: #DC0B3A;
    }


    /*Hover på loud live knap*/
    #menu-item-1291 a:hover {
        color: white;
    }

    /*    loud live knap - farve på tekst og hovereffekt*/
    #menu-item-1291 a {
        color: white;
    }

    #menu-item-1291 a:hover {
        color: black;
    }

    #rmp_menu_trigger-1950 .rmp-trigger-box {
        display: none;
    }


    @media only screen and (max-width: 780px) {
        .site-logo {
            position: relative;
            z-index: 999;
            margin-bottom: calc(.66 * 1rem);
            right: 0px;
            top: auto;

        }

        .site-logo .custom-logo-link .custom-logo {
            width: 55px;
            margin-top: 0px;
            height: auto;
        }

        .site-logo .custom-logo-link {
            border-radius: 100%;
            box-sizing: content-box;
            display: block;
            width: 50px;
            height: 50px;
            transition: box-shadow 200ms ease-in-out;
            margin-left: 30px;
            margin-top: 15px;
        }

        #menu-menu {
            display: none;
        }

        #rmp_menu_trigger-1950 .rmp-trigger-box {
            display: block;
        }

        .search-icon {
            display: none;
        }

        .site-header {
            height: 4rem;
        }
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
