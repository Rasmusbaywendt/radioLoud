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
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&display=swap" rel="stylesheet">

<style>
 #filtrering {
        text-align: center;
    }

    button {
        margin: 0.4vw;
    }

    #filtrering button {
        font-family: 'Rubik';
        font-weight: 400;
        color: black;
        background: none;
    }

    #filtrering button:hover {
        background-color: #04145D;
        color: white;
    }
     .titel {
        font-family: 'Rubik';
        color: #DA083A;
        position: relative;
        bottom: 1vw;
        font-size: 1rem;
    }

    .beskrivelse {
        font-family: 'Quicksand', sans-serif;
        position: relative;
        bottom: 1vw;
        font-size: 0.8rem;
        padding: 1vw;
       
    }

    H2 {
        font-family: 'Rubik';
        color: #DA083A;
        text-align: center;
        padding-bottom: 3vw;
        
        
    }
    img {
        padding-left: 4vw;
        width: 90%;
        height:30%;
       
    }
    
    #podcastcontainer {
      display: inline-grid;
    grid-template-columns: repeat(3, 1fr);
    column-gap: 2vw;  
    grid-row-gap:2vw;
    padding: 2vw;    
    }
    
    #holdind {
    border: 5px solid black;
    }

    
</style>
			
 <!--  her starter min kode-->
 
 <template >
     <article id="holdind">
          <div> <img class="podcastimg" src="" alt="" >
         <div>
             <h2></h2>
             <p class="beskrivelse"></p>
         </div></div>
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
