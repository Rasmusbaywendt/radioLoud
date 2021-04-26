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
    <div class="single-podcast">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">

                <section id="primary" class="content-area">
                    <main id="main" class="site-main">

                        <article class="aktuel_podcast">
                            <div class="beskrivelse_div">
                                <h1 class="podcast_titel"></h1>
                                <p class="beskrivelse"></p>
                            </div>
                            <img class="pic" src="" alt="">

                        </article>
                        <div class="seneste_episoder">SENESTE EPISODER</div>
                        <section class="episoder">
                            <template>
                                <article>
                                    <div>
                                        <h3></h3>
                                        <h4></h4>
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

                        }

                        function visEpisoder() {
                            console.log("visEpisoder");
                            let temp = document.querySelector("template");
                            console.log(aktuelpodcast);
                            episoder.forEach(episode => {
                                console.log("Im at: ", episode.horer_til_podcast);
                                const horer = episode.horer_til_podcast[0].id;
                                console.log("tyeeew", horer);

                                if (horer == aktuelpodcast) {
                                    console.log("i pass if")
                                    let klon = temp.cloneNode(true).content;
                                    klon.querySelector("h3").textContent = episode.title.rendered;
                                    klon.querySelector("h4").textContent = episode.dato;
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
