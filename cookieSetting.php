<?php
session_start(); // Zahájení session

// Zpracování tlačítek
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['accept_cookies'])) {
        $_SESSION['cookie_agreement'] = true;  // Uloží souhlas do session
        // var_dump($_SESSION['cookie_agreement']);
    } elseif (isset($_POST['decline_cookies'])) {
        $_SESSION['cookie_agreement'] = false; // Uloží nesouhlas do session
        // var_dump($_SESSION['cookie_agreement']);
    }
    if(isset($_POST["from"])){
        $fromCookie = htmlspecialchars($_POST["from"]);
        header("location: $fromCookie");
    } else {
        header("location: index.php");
    }
}