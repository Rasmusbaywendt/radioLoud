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
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.typekit.net/lfd3jsr.css">

<style>
    #filtrering button {

        color: black;
        background: none;
        font-family: unit-rounded, sans-serif;
        font-weight: 700;
        font-style: normal;
        font-size: 0.6rem;
        padding: 9px;
        margin: 1.5px;
    }

    #filtrering button:hover {
        background-color: #04145D;
        color: white;
    }

    #filtrering button:focus {
        background-color: #04145D;
        color: white;
    }

    .site-content {
        background-color: #98CEFD;

    }

    #liste .podcastbillede {
        width: 14vw;
        height: 16vw;
        border-radius: 50%;
        margin-left: 80vw;
        margin-right: 2vw;
        margin-top: -10vw;
    }


    .tid {
        font-family: 'Rubik';
        color: #DA083A;
        position: relative;
        top: 38vw;
        font-size: 1rem;
        left: 2vw;

    }

    .titel {
        font-family: 'Rubik';
        color: #DA083A;
        position: relative;
        bottom: 1vw;
        font-size: 1rem;
        left: 18vw;
    }

    .beskrivelse {
        font-family: 'Quicksand', sans-serif;
        position: relative;
        bottom: 3vw;
        padding-right: 18vw;
        padding-left: 18vw;

        font-size: 0.8rem;


    }

    H1 {
        font-family: 'Rubik';
        color: #DA083A;
        text-align: center;
    }

    .sepodcast button {
        background-color: white;
        color: #DA083A;
    }

    img {
        position: relative;
        top: 39vw;
    }

    .sepodcast {
        position: relative;
        top: 0vw;
        font-family: unit-rounded, sans-serif;
        font-weight: 700;
        font-style: normal;
        white-space: nowrap;
        color: white;
        background-color: #DA083A;
        height: 5%;
        padding: 9px 16px;
        border-radius: 7px;
        left: 17vw;

    }



    @media only screen and (min-width: 600px) {

        img {
            position: relative;
            top: 0;
        }


        #filtrering {
            text-align: center;
        }

        button {
            margin: 0.4vw;
        }

        #filtrering button {
            color: black;
            background: none;
            font-family: unit-rounded, sans-serif;
            font-weight: 700;
            font-style: normal;
            font-size: 1rem;
            padding: 10px;
            margin: 16;


        }

        #filtrering button:hover {
            background-color: #04145D;
            color: white;
        }

        #filtrering button:focus {
            background-color: #04145D;
            color: white;
        }


        .site-content {
            background-color: #98CEFD;

        }

        .loopart {
            display: flex;
            margin-left: 13vw;
            margin-right: 13vw;
        }



        #liste .podcastbillede {
            width: 8vw;
            height: 8vw;
            border-radius: 50%;
            margin-left: 2vw;
            margin-right: 2vw;
            margin-top: 5vw;
        }

        .tekst {
            display: flex;
            flex-direction: column;
            position: relative;
            top: 1vw;
        }

        .sepodcast {
            position: relative;
            top: 8vw;
            font-family: unit-rounded, sans-serif;
            font-weight: 700;
            font-style: normal;
            white-space: nowrap;
            color: white;
            background-color: #DA083A;
            height: 5%;
            padding: 9px 16px;
            border-radius: 7px;
            left: 0vw;


        }

        .tid {
            font-family: 'Rubik';
            color: #DA083A;
            position: relative;
            top: 2vw;
            font-size: 1rem;
            left: 0vw;
        }

        .titel {
            font-family: 'Rubik';
            color: #DA083A;
            position: relative;
            bottom: 1vw;
            font-size: 1rem;
            left: 0vw;
        }

        .beskrivelse {
            font-family: 'Quicksand', sans-serif;
            position: relative;
            bottom: 3vw;
            padding-right: 4vw;
            font-size: 0.8rem;
            padding-left: 0vw;



        }

        H1 {
            font-family: 'Rubik';
            color: #DA083A;
            text-align: center;
        }

        .sepodcast button {
            background-color: white;
            color: #DA083A;
        }
    }

</style>
<template>
    <article class="loopart">
        <h2 class="tid"></h2>
        <img src="" alt="podcastbillede" class="podcastbillede">
        <div class="tekst">
            <h2 class="titel"></h2>
            <p class="beskrivelse"></p>
        </div>
        <a href="" class="sepodcast">Se podcast</a>
    </article>
</template>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <h1>SENDEPLAN</h1>
        <nav id="filtrering">
        </nav>
        <section id="liste"></section>
    </main><!-- #main -->
    <script>
        const header = document.querySelector("header h1");

        document.addEventListener("DOMContentLoaded", loadJSON)
        let sendeplan;
        let ugedage;
        let filterSendeplan = 75;

        const dbUrl = "http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-json/wp/v2/sendeplan?per_page=100";
        const catUrl = "http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-json/wp/v2/ugedage";

        async function loadJSON() {
            const data = await fetch(dbUrl);
            const catdata = await fetch(catUrl)
            sendeplan = await data.json();
            ugedage = await catdata.json();
            console.log(ugedage);
            visSendeplan();
            opretknapper();
        }

        function opretknapper() {

            ugedage.forEach(cat => {
                document.querySelector("#filtrering").innerHTML += `<button class="filter" data-sendeplan="${cat.id}">${cat.name}</button>`
            })

            addEventListenersToButtons();
        }

        function addEventListenersToButtons() {
            document.querySelectorAll("#filtrering button").forEach(elm => {
                elm.addEventListener("click", filtrering);
            })
        };

        function filtrering() {
            filterSendeplan = this.dataset.sendeplan;
            console.log(filterSendeplan);

            visSendeplan();
        }

        //funktion der viser retter i liste view
        function visSendeplan() {
            const dest = document.querySelector("#liste"); // container til articles med en ret
            const skabelon = document.querySelector("template").content; // select indhold af html skabelon (article)
            dest.textContent = ""; // ryd container inden ny loop
            sendeplan.forEach(sendeplan => {
                if (sendeplan.ugedage.includes(parseInt(filterSendeplan))) {
                    const klon = skabelon.cloneNode(true);
                    klon.querySelector(".tid").textContent = sendeplan.tid;
                    klon.querySelector(".podcastbillede").src = sendeplan.podcastbillede.guid;
                    klon.querySelector(".titel").textContent = sendeplan.title.rendered;
                    klon.querySelector(".beskrivelse").textContent = sendeplan.beskrivelse;
                    //                    klon.querySelector(".sepodcast").textContent = sendeplan.sepodcast;
                    klon.querySelector(".loopart a").href = sendeplan.sepodcast;

                    // nyt
                    dest.appendChild(klon);
                }
            })
        }

    </script>

    <?php
get_footer();
