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

    #main button {
        font-family: 'Rubik';
        font-weight: 400;
        color: black;
        background-color: #97CDFC;
        border: none;

        border-radius: 0.5vw;
        height: 5vw;

    }


    #main button img {
        height: 2vw;
        top: 6.4;

    }

    #filtrering button:hover {
        background-color: #7db7ea;
        color: white;
    }

    #filtrering button:focus {
        background-color: #97CDFC;
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
        color: #FFFFFF;

        font-weight: 400;
        padding-left: 1.2vw;
        padding-right: 1.2vw;
       overflow: hidden;
    }

    H2 {
        font-family: 'Rubik';
        color: white;
        text-align: left;
        font-weight: 500;
        font-size: 1.7rem;
        padding-left: 1.2vw;
        padding-right: 1.2vw;

    }
     H1 {
        font-family: 'Rubik';
        color: white;
        text-align: left;
        font-weight: 500;
        font-size: 2.2rem;
    }

    .podcastimg {
        padding-left: 1.2vw;
        padding-right: 1.2vw;
        width: 100%;
        height: 40%;
        border-radius: 1.5vw; 
        

    }

    #podcastcontainer {
        display: inline-grid;
        grid-template-columns: repeat(3, 1fr);
        column-gap: 2vw;
        grid-row-gap: 2vw;
        padding: 2vw;
        background: conic-gradient(at 0% 20%, white 20%, ghostwhite 30%, white 50%);
    }
    #diver {
    border-radius: .5vw;
    }
    
    #holdind {
        background-color: #04145D;
        max-height: 50vw;
        overflow: hidden;
        border-radius: .5vw;

    }

    #podHead {
        display: inline-grid;
        background-color: #04145D;
        grid-template-columns: 1fr 1fr;
        max-height: 25vw;
        overflow:hidden;    

        
    }
    #fontimg {
    width: 100%;
    height: 80%;
    float: right;  
    }
    #podtext {
        overflow: hidden;
        font-size: 1.2rem;
        text-align: left;
    }
    #headpodtext {
        padding-left: 6vw;
        padding-top: 2vw;
    }

</style>
    

<!--  her starter min kode-->

 <template >
     <article id="holdind">
          <div id="diver"> <img class="podcastimg" src="" alt="" >
         <div>
             <h2></h2>
             <p class="beskrivelse"></p>
         </div></div>
     </article>
 </template>

<section id="primary" class="content-area">
    <main id="main" class="site-main">
        <div style="text-align:center;" style="display: flex" ;>
           <div id="podHead">
            <div id="headpodtext">
             <h1>PODCAST</h1>
                <p id="podtext" style="color: white";>Find vores mange programmer, udsendelser,<br> serier, afsnit og episoder her.</p>
                </div>
             <img id="fontimg" src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/people_train.jpg" alt="">
         </div>
            <nav id="filtrering"><button data-podcast="alle">ALLE</button>
                <button data-podcast="67">AKTUELT</button>
                <button data-podcast="71"> <img src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/CRIME-1.svg" alt="">CRIME</button>
                <button data-podcast="67"> <img src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/historie-1.svg" alt="">HISTORIE</button>
                <button data-podcast="73"> <img src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/KULTUR.svg" alt="">KULTUR</button>
                <button data-podcast="72"> <img src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/globus.svg" alt="">NYHEDER</button>
                <button data-podcast="70"> <img src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/handtegn.svg" alt="">UNGDOM</button>
                <button data-podcast="68"> <img src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/samfund-1.svg" alt="">SAMFUND</button>
            </nav>

        </div>
        <section id="podcastcontainer">
        </section>
    </main> <!-- #main -->
</section> <!-- #primary -->

<script>
    let podcasts;
    let genre;
    let filterPodcast = "alle";
    const dbUrl = "http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-json/wp/v2/podcast?per_page=100";
    const catUrl = "http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-json/wp/v2/genre";

    async function getJson() {
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
            document.querySelector("#filtrering").innerHTML
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
            if (filterPodcast == "alle" || podcast.genre.includes(parseInt(filterPodcast))) {

                let klon = temp.cloneNode(true).content;
                klon.querySelector("h2").textContent = podcast.title.rendered;
                klon.querySelector(".podcastimg").src = podcast.billede.guid;
                klon.querySelector(".beskrivelse").innerHTML = podcast.beskrivelse;
                //                     klon.querySelector(".pris").textContent = ret.pris;
                klon.querySelector("article").addEventListener("click", () => {
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
