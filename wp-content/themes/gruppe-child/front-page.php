<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.typekit.net/lfd3jsr.css">

<style>
    #page {
        background: linear-gradient(90deg, rgba(245, 244, 244, 1) 0%, rgba(151, 205, 252, 1) 100%);
    }

    .site-content {
        background: linear-gradient(90deg, rgba(245, 244, 244, 1) 0%, rgba(151, 205, 252, 1) 100%);
    }

    .ha-slick-content {
        position: relative;
        height: 86px;
        bottom: 23px;
        background: none;
    }

    h2.ha-slick-title {
        margin-bottom: 6px;
        line-height: 0em;
    }

    /* h2 overskrifter til podcast på forside*/

    .elementor-13 .elementor-element.elementor-element-5acd3cc .elementor-heading-title {
        font-family: unit-rounded, sans-serif;
        font-weight: 700;
        font-style: normal;
    }

    .elementor-widget-heading .elementor-heading-title {
        font-family: unit-rounded, sans-serif;
        font-weight: 700;
        font-style: normal;
    }

    .elementor-13 .elementor-element.elementor-element-2fbb744>.elementor-background-overlay {
        background-color: black;
        opacity: 0.3;
        transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    }


    .site-logo:hover {
        color: white;
        box-shadow: none;
    }

    .site-logo .custom-logo-link {
        box-shadow: none;

    }


    /*
    p.ha-slick-subtitle {
    line-height: 1.8rem;
    font-family: 'Quicksand', sans-serif;
    }
*/
    /*p tekst i LOUD LAB sektion*/
    .entry .entry-content p {
        font-family: 'Quicksand', sans-serif;
        font-weight: 500;
    }

    /*baggrundsfarve på tekststykke i podcat sektion*/
    .elementor-13 .elementor-element.elementor-element-b03ed9a .ha-slick-content {
        background-color: #04145D;
    }

    /*Fjerner understregning på tekst i podcast sektion*/
    .entry .entry-content a {
        text-decoration: none;
    }

    /*splashbillede på forside*/
    .elementor-13 .elementor-element.elementor-element-2fbb744:not(.elementor-motion-effects-element-type-background),
    .elementor-13 .elementor-element.elementor-element-2fbb744>.elementor-motion-effects-container>.elementor-motion-effects-layer {
        background-size: cover;
    }

    .elementor-button span {
        font-family: unit-rounded, sans-serif;
        font-weight: 900;
    }


    .elementor-13 .elementor-element.elementor-element-d62cabe .slick-prev,
    .elementor-13 .elementor-element.elementor-element-d62cabe .slick-next {
        z-index: 30;
    }

    .elementor-13 .elementor-element.elementor-element-be97253 .slick-prev,
    .elementor-13 .elementor-element.elementor-element-be97253 .slick-next {
        z-index: 30;
    }

    /*Rykker 'mest populære' længere op*/
    .elementor-column-gap-default>.elementor-column>.elementor-element-populated {
        margin-top: 41px;
    }

    @media screen and (max-width: 600px) {

        /*Pile i billede karousel*/
        .elementor-13 .elementor-element.elementor-element-d62cabe .slick-prev,
        .elementor-13 .elementor-element.elementor-element-d62cabe .slick-next {
            top: 313px;
        }

        .elementor-13 .elementor-element.elementor-element-be97253 .slick-prev,
        .elementor-13 .elementor-element.elementor-element-be97253 .slick-next {
            top: 313px;
        }

        /*Rykker 'mest populære' længere op*/
        .elementor-13 .elementor-element.elementor-element-353545f .elementor-heading-title {
            margin-top: -58px;
        }

        /*Større fontstørrelse på 'nyt fra loud' podcasts*/
        .elementor-13 .elementor-element.elementor-element-d62cabe .ha-slick-title {
            font-size: 21px;
        }

        .elementor-13 .elementor-element.elementor-element-be97253 .ha-slick-title {
            font-size: 21px;
        }

        /*Større fontstørrelse på 'Nyt fra Loud' podcast p tekst*/
        .elementor-13 .elementor-element.elementor-element-d62cabe .ha-slick-subtitle {
            font-size: 15px;
        }

        /*Større fontstørrelse på 'mest populære' podcast p tekst*/
        .elementor-13 .elementor-element.elementor-element-be97253 .ha-slick-subtitle {
            font-size: 15px;
        }
    }

</style>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php

			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'front' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End the loop.
			?>

    </main>
    <!-- #main -->
</div>
<!-- #primary -->


<?php
get_footer();
