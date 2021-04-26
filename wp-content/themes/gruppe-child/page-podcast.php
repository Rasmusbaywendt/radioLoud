<?php
/**
 * The template for displaying poscast
 *
* Template Name: Podcast
 
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

			
 <!--  her starter min kode-->
 
 <template >
     <article>
        <img class="podcastimg" src="" alt="" >
         <div>
             <h2></h2>
             <p class="beskrivelse"></p>
         </div>
     </article>
 </template>
 
 <section id="primary" class="content-area">
     <main id="main" class="site-main">
     <div style="text-align:center;" style="display: flex";>
     <nav id="filtrering" ><button data-podcast = "alle">Alle</button></nav>
     
         </div>
     <section id="podcastcontainer">
     </section>
     </main> <!-- #main -->
     </section> <!-- #primary -->
     
     <script>
        let podcasts;
        let genre;
        let filterPodcast = "alle";
        const dbUrl = "http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-json/wp/v2/podcast?per_page=100"  ; 
        const catUrl = "http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-json/wp/v2/genre";
         
        async function getJson () {
            const data = await fetch("http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-json/wp/v2/podcast?per_page=100");
            const catdata = await fetch("http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-json/wp/v2/genre");
            podcasts = await data.json();
            genre = await catdata.json();
            console.log(genre);
            visPodcasts();
            opretknapper();
        }
        
         function opretknapper() {
             
             genre.forEach(cat => {
                 document.querySelector("#filtrering").innerHTML += `<button class="filter" data-podcast="${cat.id}">${cat.name}</button>`
            })
            addEventListenerToButtons();
         }
         
         function addEventListenerToButtons() {
             document.querySelectorAll("#filtrering button").forEach(elm => {
                 elm.addEventListener("click", filtrering);
             })
         };
         function filtrering() {
             filterPodcast = this.dataset.podcast;
             console.log(filterPodcast);
             visPodcasts();
            }
         
         function visPodcasts() {
             let temp = document.querySelector("template");
             let container = document.querySelector("#podcastcontainer")
             container.innerHTML = "";
             podcasts.forEach(podcast => {
                 if(filterPodcast == "alle" || podcast.genre.includes(parseInt(filterPodcast))){
                     
                     let klon = temp.cloneNode(true).content;
                     klon.querySelector("h2").textContent = podcast.title.rendered;
                     klon.querySelector(".podcastimg").src = podcast.billede.guid;
                     klon.querySelector(".beskrivelse").innerHTML = podcast.beskrivelse;
                     //                     klon.querySelector(".pris").textContent = ret.pris;
                     klon.querySelector("article").addEventListener("click",() => { 
                         location.href = podcast.link;
                     })
                     container.appendChild(klon);
                 }
             })
         }
         
         getJson();
         
     </script>

<?php
get_footer();
