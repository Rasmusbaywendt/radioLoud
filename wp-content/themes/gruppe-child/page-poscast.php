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

			
 <!--  her starter min kode-->
 
 <template >
     <article>
         <img src="" alt="">
         <div>
             <h2></h2>
             <p class="beskrivelse"></p>
         </div>
     </article>
 </template>
 <section id="primary" class="content-area">
     <main id="main" class="site-main">
     <nav id="filtrering"><button date-podcast="alle">Alle</button></nav>
     <section id="podcastcontainer">
     </section>
     </main> <!-- #main -->
     
     <script>
        let podcasts;
        let categories;
        let filterPodcast = "alle";
        const dbUrl = "http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/podcast?per_page=100"; 
        const catUrl = "http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/categories";
         
        async function getJson () {
            const data = await fetch(dbUrl);
            const catdata = await fetch(carUrl);
            podcasts = await data.json();
            console.log(categories);
            visPoscasts();
            opretknapper();
        }
        
         function opretknapper() {
             
             categories.forEach(cat => {
                 document.querySelector("filtrering").innerHTML += `<button class="filter" data-podcast="${cat.id}">${cat.name}</button>`
            })
            addEventListenerToButtons();
         }
         
         function addEventListenersToButtons() {
             document.querySelectorAll("#filtrering button").forEach(elm => {
                 elm.addEventListener("click", filtrering);
             })
         };
         
         function filtrering() {
             let temp = document.querySelector("template");
             let container = document.querySelector("#podcastcontainer")
             container.innerHTML = "";
             poscasts.forEach(podcast => {
                 if(filterPodcast == "alle" || podcast.categories.includes(parseInt(filterPodcast))){
                     
                     let klon = temp.cloneNode(true).content;
                     klon.querySelector("h2").textContent = podcast.tetle.rendered;
                     //                     klon.querySelector("img).src = ret.billede.guid;
                     klon.querySelector(".beskrivelse").innerHTML = podcast.content.rendered;
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
</section> <!-- #primary -->
 
		

<?php
get_footer();
