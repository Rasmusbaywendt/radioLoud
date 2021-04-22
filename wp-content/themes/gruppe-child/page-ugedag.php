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

<template>
    <article class="loopart">
        <h2 class="tid"></h2>
        <img src="" alt="" class="podcastbillede">
        <h2 class="titel"></h2>
        <h3 class="beskrivelse"></h3>
        <img src="" alt="" class="afspil">
        <img src="" alt="" class="pause">
    </article>
</template>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <section id="liste"></section>
    </main><!-- #main -->
    <script>
        const header = document.querySelector("header h1");

        document.addEventListener("DOMContentLoaded", loadJSON)
        let ugedage;
        let categories;

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
                document.querySelector("#filtrering").innerHTML += `<button class="filter" data-ugedage="${cat.id}">${cat.name}</button>`
            })

            addEventListenersToButtons();
        }

        function addEventListenersToButtons() {
            document.querySelectorAll("#filtrering button").forEach(elm => {
                elm.addEventListener("click", filtrering);
            })
        };

        function filtrering() {
            filterUgedage = this.dataset.ugedage;
            console.log(filterUgedage);

            visUgedage();
        }

        //funktion der viser retter i liste view
        function visUgedage() {
            const dest = document.querySelector("#liste"); // container til articles med en ret
            const skabelon = document.querySelector("template").content; // select indhold af html skabelon (article)
            dest.textContent = ""; // ryd container inden ny loop
            ugedage.forEach(ugedag => {
                const klon = skabelon.cloneNode(true);
                klon.querySelector(".tid").textContent = ugedag.tid.categories;
                klon.querySelector(".podcastbillede").src = ugedag.podcastbillede.guid;
                klon.querySelector(".titel").textContent = ugedag.title.rendered;
                klon.querySelector(".beskrivelse").textContent = ugedag.beskrivelse;
                klon.querySelector(".afspil").src = ugedag.afspil.guid;
                klon.querySelector(".pause").src = ugedag.pause.guid;
                // nyt
                dest.appendChild(klon);
            })
        }

    </script>

    <?php
get_footer();
