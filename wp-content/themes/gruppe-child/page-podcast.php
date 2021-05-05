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
        height: 25%;
        position: relative;
        bottom: -4vw;
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
        background-color: #72afe5;
        color: white;
    }

    #filtrering button:focus {
        background-color: deepskyblue;
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
        bottom: 4vw;
        font-size: 0.8rem;
        color: #FFFFFF;
        font-weight: 400;
        padding-left: 1.2vw;
        padding-right: 1.2vw;



        overflow: hidden;
    }

    #diver H2 {
        font-family: 'Rubik';
        color: white;
        text-align: left;
        font-weight: 500;
        font-size: 1.5rem;
        padding-left: 1.2vw;
        padding-right: 1.2vw;


        padding-bottom: 3vw;

    }


    #podtext {
        padding: 0;
        right: -79px;
        position: relative;
        text-align: left;
        font-size: 1.2rem;
    }

    #podcastcontainer {
        display: inline-grid;
        grid-template-columns: repeat(3, 1fr);
        column-gap: 2vw;
        grid-row-gap: 2vw;
        padding: 2vw;
        background: conic-gradient(at 0% 20%, white 20%, ghostwhite 30%, white 50%);
        position: relative;
        top: 1vw;

    }

    H1 {
        font-family: 'Rubik';
        color: white;
        text-align: left;
        font-weight: 500;
        font-size: 2.2rem;
    }


    .podcastimg {
        width: 100%;
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
        padding-bottom:

    }

    #podHead {
        display: inline-grid;
        background-color: #04145D;
        grid-template-columns: 1fr 1fr;
        max-height: 23vw;
        overflow: hidden;

    }

    #podHead img {
        top: -15vw;
        left: 65vw;
        width: 83%;
    }


    #fontimg {
        width: 100%;
        height: 80%;
        float: right;
        width: 100%;
        height: 100%;
        float: right;
    }

    h6 {
        font-family: 'Quicksand', sans-serif;
        color: white;
        right: 45vw;
        position: relative;
        font-size: 0.8rem;
        top: 11vw;
    }

    #podHead h2 {
        font-family: 'Rubik';
        color: white;
        padding-left: 6.2vw;
        font-size: 3rem;
    }


    #headpodtext {
        padding-left: 6vw;
        padding-top: 2vw;
    }

<<<<<<< Updated upstream
    @media only screen and (max-width: 600px) {

        #podHead {
            display: inline-grid;
            background-color: #04145D;
            grid-template-columns: 1fr;
            min-height: 120vw;
            overflow: hidden;
        }

        #podHead h2 {
            font-family: 'Rubik';
            color: white;
            padding-left: .7vw;
            font-size: 2rem;
        }

        h6 {
            font-family: 'Quicksand', sans-serif;
            color: white;
            right: 1vw;
            position: relative;
            font-size: 0.8rem;
            top: 1vw;
        }

        #main button {
            font-family: 'Rubik';
            font-weight: 400;
            color: black;
            background-color: #97CDFC;
            border: none;
            border-radius: 0.5vw;
            height: 12vw;
        }

        #diver H2 {
            font-family: 'Rubik';
            color: white;
            text-align: left;
            font-weight: 500;
            font-size: .5rem;
            padding-left: 1.2vw;
            padding-right: 1.2vw;
            padding-bottom: 3vw;
        }

        #filtrering {
            text-align: center;
            height: 30%;
            position: relative;
            bottom: 6vw;
            padding-top: 6vw;
        }

        #main button img {
            height: 4.8vw;
            top: auto;
        }

        #podcastcontainer {
            display: inline-grid;
            grid-template-columns: repeat(3, 1fr);
            column-gap: 2vw;
            grid-row-gap: 2vw;
            padding: 2vw;
        }

        #podHead img {
            top: 1vw;
            left: 9vw;
            width: 83%;
            min-height: 60vw;
        }

        #holdind {
            background-color: #04145D;
            max-height: 53vw;
            overflow: hidden;
            border-radius: .5vw;
            padding-bottom: ;
        }
    }
=======
@media only screen and (max-width: 600px) {
  
    #podHead {
    display: inline-grid;
    background-color: #04145D;
    grid-template-columns: 1fr;
    min-height: 120vw;
    overflow: hidden;
}
    #podHead h2 {
    font-family: 'Rubik';
    color: white;
    padding-left: .7vw;
    font-size: 2rem;
}
    h6 {
    font-family: 'Quicksand', sans-serif;
    color: white;
    right: 1vw;
    position: relative;
    font-size: 0.8rem;
    top: 1vw;
}
    #main button {
    font-family: 'Rubik';
    font-weight: 400;
    color: black;
    background-color: #97CDFC;
    border: none;
    border-radius: 0.5vw;
    height: 12vw;
}
    #diver H2 {
    font-family: 'Rubik';
    color: white;
    text-align: left;
    font-weight: 500;
    font-size: .5rem;
    padding-left: 1.2vw;
    padding-right: 1.2vw;
    padding-bottom: 3vw;
}
    #filtrering {
    text-align: center;
    height: 30%;
    position: relative;
    bottom: 6vw;
    padding-top: 6vw;
}
    
    #main button img {
    height: 4.8vw;
    top: auto;
}
    #podcastcontainer {
    display: inline-grid;
    grid-template-columns: 1fr;
    column-gap: 2vw;
    grid-row-gap: 2vw;
    padding: 2vw;
}
    #podHead img {
    top: 1vw;
    left: 9vw;
    width: 83%;
    min-height: 60vw;
}

#holdind {
    background-color: #04145D;
    max-height: 118vw;
    overflow: hidden;
    border-radius: .5vw;
    padding-bottom: 2vw;

}
    #diver {
    border-radius: .5vw;
}
    
}

    @media only screen and (min-width: 3000px) {
        
    #podHead {
    display: inline-grid;
    background-color: #04145D;
    grid-template-columns: 1fr 1fr;
    max-height: 30vw;
    overflow: visible;
    width: 100%;
        
}
    #podHead img {
    padding-top: 12vw;
    left: 25vw;
    width: 83%;
}
    }
    
>>>>>>> Stashed changes

</style>
<template>
    <article id="holdind">
        <div id="diver"> <img class="podcastimg" src="" alt="podcastimg">
            <div>
                <h2></h2>
                <p class="beskrivelse"></p>
            </div>
        </div>
    </article>
</template>

<section id="primary" class="content-area">
    <main id="main" class="site-main">
        <div style="text-align:center;" style="display: flex" ;>
            <div id="podHead">
                <h2>PODCAST</h2>
                <h6>Find vores mange programmer, udsendelser, serier, afsnit og episoder her.
                </h6>
                <img src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/people_train.jpg" alt="train_boy">
            </div>
            <nav id="filtrering"><button data-podcast="alle">ALLE</button> <button data-podcast="67"> AKTUELT </button>
                <button data-podcast="71"> <img src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/CRIME-1.svg" alt="crime_icon"> CRIME </button> <button data-podcast="67"> <img src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/historie-1.svg" alt="historie_icon"> HISTORIE </button> <button data-podcast="73"> <img src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/KULTUR.svg" alt="kultur_icon"> KULTUR </button>
                <button data-podcast="72"> <img src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/globus.svg" alt="nyheder_icon"> NYHEDER </button> <button data-podcast="70"><img src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/handtegn.svg" alt="ungdom_icon">UNGDOM</button> <button data-podcast="68"><img src="http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-content/uploads/2021/04/samfund-1.svg" alt="samfund_icon">SAMFUND
                </button>
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
    };


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
