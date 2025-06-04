<?php

namespace App\View\Part;

class Header
{
    /**
     * Titre de la page pour les onglets, modifiable via les controller (ou ailleurs en vrai)
     * en faisant Header::$pageTitle = "titre"
     */
    public static string $pageTitle = "";
    public function render()
    {
        ?>


        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>My dogs - <?= self::$pageTitle ?></title>
        </head>

        <body>
            <header>Mon Header
                <nav>
                    <a href="/">Home</a>
                    <a href="/add-dog">Add dog</a>
                    (<a href="/person">Person</a>
                    <a href="/about">About</a>)
                </nav>

            <form action="/search" method="get">
                <label>Search :
                    <input type="text" name="keyword">
                </label>
                <button>Go</button>
            </form>

            </header>
            <?php
    }
}
