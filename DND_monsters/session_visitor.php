<?php
    // Start de sessie
    session_start();
    // Controleer of de uitlog-knop is ingedrukt
    if(isset($_POST["uitloggen"])){
        // Maak de login sessie variabelen leeg om uit te loggen
        $_SESSION["login"] = null;
    }
    // Initialiseer gebruikersvariabelen om fouten te voorkomen
    $gebruikersID = null;
    $gebruikersEmail = null;
    $gebruikersNaam = null;
    // Controleer of de gebruiker is ingelogd door te kijken of de sessie "login" bestaat
    if(isset($_SESSION["login"])) {
        //Haal gebruikersgegevens uit de sessie en sla ze op in variabelen
        $gebruikersID = $_SESSION["login"][0];
        $gebruikersEmail = $_SESSION["login"][1];
        $gebruikersNaam = $_SESSION["login"][2];
        // Verwijder eventuele waarschuwing cookies
        unset($_COOKIE['waarschruwing']);
    }