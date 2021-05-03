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

<section id="primary" class="content-area">
    <main id="main" class="site-main">

        <article>

            <img class="pic" src="" alt="podcastimage">
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

<?php
get_footer();
