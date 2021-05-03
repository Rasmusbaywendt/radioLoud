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
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
<div class="single-podcast">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <section id="primary" class="content-area">
                <main id="main" class="site-main">

                    <article class="aktuel_podcast">
                        <div class="beskrivelse_div">
                            <h1 class="podcast_titel"></h1>
                            <p class="beskrivelse"></p>
                            <div class="icon_div">

                                <h3>Lyt til podcastet her!</h3>

                                <a class="loud_icon" href=""><img class="play_knap" src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/loud_png.png" alt="play-button"></a>

                                <a class="itunes_icon" href=""><img class="play_knap" src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/apple_png.png"></a>

                                <a class="spotify_icon" href=""><img class="play_knap" src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/spotify_png.png" alt="play-button"></a>

                                <a class="google_icon" href=""><img class="play_knap" src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/google_png.png" alt="play-button"></a>

                                <a class="podimo_icon" href=""><img class="play_knap" src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/podimo_png.png" alt="play-button"></a>
                            </div>

                        </div>
                        <img class="pic" src="" alt="podcastimage">

                    </article>
                    <div class="seneste_episoder">SENESTE EPISODER</div>
                    <section class="episoder">
                        <template>
                            <article>
                                <div class="episode_grid">
                                    <h3 class="episode_titel"></h3>
                                    <a class="loud_lyd" href="">
                                        <img class="play_knap" src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/loud-logo.png" alt="play-button">


                                    </a>
                                    <h4 class="episode_dato"></h4>
                                </div>
                            </article>
                        </template>
                    </section>
                </main>
                <!-- #main -->

                <script>
                    let podcast;
                    let episoder;
                    let aktuelpodcast = <?php echo get_the_ID() ?>;

                    const dbUrl = "http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-json/wp/v2/podcast/" + aktuelpodcast;

                    const episodeUrl = "http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-json/wp/v2/episode?per_page=100";

                    const container = document.querySelector(".episoder");

                    async function getJson() {
                        const data = await fetch(dbUrl);
                        podcast = await data.json();

                        const data2 = await fetch(episodeUrl);
                        episoder = await data2.json();
                        console.log("episoder: ", episoder);

                        visPodcasts();
                        visEpisoder();
                    }


                    function visPodcasts() {
                        console.log("visPodcasts");
                        document.querySelector(".podcast_titel").innerHTML = podcast.title.rendered;
                        document.querySelector(".pic").src = podcast.billede.guid;
                        document.querySelector(".beskrivelse").innerHTML = podcast.beskrivelse;
                        document.querySelector(".loud_icon").href = podcast.loud_podcast_link;

                    }

                    function visEpisoder() {
                        console.log("visEpisoder");
                        let temp = document.querySelector("template");
                        console.log(aktuelpodcast);
                        episoder.forEach(episode => {
                            if (episode.horer_til_podcast == aktuelpodcast) {
                                let klon = temp.cloneNode(true).content;
                                klon.querySelector(".episode_titel").textContent = episode.title.rendered;
                                klon.querySelector(".episode_dato").textContent = episode.dato;
                                klon.querySelector(".loud_lyd").href = episode.loud_link;
                                container.appendChild(klon);
                            }


                        })

                    }

                    getJson();

                </script>

            </section>
            <!-- #primary -->
        </main>
        <!-- #main -->

    </div>
    <!-- #primary -->
</div>
<?php
get_footer();
