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
<style>
    #page {
        background: linear-gradient(90deg, rgba(245, 244, 244, 1) 0%, rgba(151, 205, 252, 1) 100%);
    }

    .site-content {
        background: linear-gradient(90deg, rgba(245, 244, 244, 1) 0%, rgba(151, 205, 252, 1) 100%);
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
