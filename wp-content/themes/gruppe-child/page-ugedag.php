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

    .afspil {
        position: relative;
        top: 7vw;
        width: 5vw;
        height: 5vw;
    }

    .pause {
        position: relative;
        top: 7vw;
        width: 5vw;
        height: 5vw;
    }

    .tid {
        font-family: 'Rubik';
        color: #DA083A;
        position: relative;
        top: 2vw;
        font-size: 1rem;
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
        bottom: 3vw;
        padding-right: 4vw;
        font-size: 0.8rem;


    }

    H1 {
        font-family: 'Rubik';
        color: #DA083A;
        text-align: center;
    }

</style>
<template>
    <article class="loopart">
        <h2 class="tid"></h2>
        <img src="" alt="" class="podcastbillede">
        <div class="tekst">
            <h2 class="titel"></h2>
            <p class="beskrivelse"></p>
        </div>
        <img src="" alt="" class="afspil">
        <img src="" alt="" class="pause">
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
        let ugedage;
        let categories;
        let filterUgedag;

        const dbUrl = "http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-json/wp/v2/ugedag?per_page=100";
        const catUrl = "http://julieeggertsen.dk/kea/2_sem/tema_09/09_loud/09_loud_site/wp-json/wp/v2/categories";

        async function loadJSON() {
            const data = await fetch(dbUrl);
            const catdata = await fetch(catUrl);
            ugedage = await data.json();
            categories = await catdata.json();
            console.log(categories);
            visUgedage();
            opretknapper();
        }

        function opretknapper() {

            categories.forEach(cat => {
                document.querySelector("#filtrering").innerHTML += `<button class="filter" data-ugedag="${cat.id}">${cat.name}</button>`
            })

            addEventListenersToButtons();
        }

        function addEventListenersToButtons() {
            document.querySelectorAll("#filtrering button").forEach(elm => {
                elm.addEventListener("click", filtrering);
            })
        };

        function filtrering() {
            filterUgedag = this.dataset.ugedag;
            console.log(filterUgedag);

            visUgedage();
        }

        //funktion der viser retter i liste view
        function visUgedage() {
            const dest = document.querySelector("#liste"); // container til articles med en ret
            const skabelon = document.querySelector("template").content; // select indhold af html skabelon (article)
            dest.textContent = ""; // ryd container inden ny loop
            ugedage.forEach(ugedag => {
                if (ugedag.categories.includes(parseInt(filterUgedag))) {
                    const klon = skabelon.cloneNode(true);
                    klon.querySelector(".tid").textContent = ugedag.tid;
                    klon.querySelector(".podcastbillede").src = ugedag.podcastbillede.guid;
                    klon.querySelector(".titel").textContent = ugedag.title.rendered;
                    klon.querySelector(".beskrivelse").textContent = ugedag.beskrivelse;
                    klon.querySelector(".afspil").src = ugedag.afspil.guid;
                    klon.querySelector(".pause").src = ugedag.pause.guid;
                    // nyt
                    dest.appendChild(klon);
                }
            })
        }

    </script>

    <?php
get_footer();
