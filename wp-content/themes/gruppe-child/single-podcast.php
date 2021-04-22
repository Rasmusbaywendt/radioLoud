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

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php

			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'single' );

				if ( is_singular( 'attachment' ) ) {
					// Parent post navigation.
					the_post_navigation(
						array(
							/* translators: %s: Parent post link. */
							'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentynineteen' ), '%title' ),
						)
					);
				} elseif ( is_singular( 'post' ) ) {
					// Previous/next post navigation.
					the_post_navigation(
						array(
							'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'twentynineteen' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Next post:', 'twentynineteen' ) . '</span> <br/>' .
								'<span class="post-title">%title</span>',
							'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'twentynineteen' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Previous post:', 'twentynineteen' ) . '</span> <br/>' .
								'<span class="post-title">%title</span>',
						)
					);
				}

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End the loop.
			?>
                <section id="primary" class="content-area">
                    <main id="main" class="site-main">

                        <article>

                            <img class="pic" src="" alt="">
                            <div>
                                <h1></h1>
                                <p class="beskrivelse"></p>
                            </div>

                        </article>
                    </main>
                    <!-- #main -->

                    <script>
                        let podcast;
                        const dbUrl = "http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-json/wp/v2/podcast/" + <?php echo get_the_ID() ?>;

                        async function getJson() {
                            const data = await fetch(dbUrl);
                            podcast = await data.json();

                            visPodcasts();
                        }


                        function visPodcasts() {
                            console.log("visPodcasts");
                            document.querySelector("h1").innerHTML = podcast.title.rendered;
                            document.querySelector(".pic").src = podcast.billede.guid;
                            document.querySelector(".beskrivelse").innerHTML = podcast.beskrivelse;

                        }

                        getJson();

                    </script>

                </section>
                <!-- #primary -->
        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->

    <?php
get_footer();
