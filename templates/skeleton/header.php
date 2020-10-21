<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/clients.css">

    <script src="https://kit.fontawesome.com/c2ce3de10b.js" crossorigin="anonymous" defer></script>
    <script src="assets/js/jquery.js" defer></script>
    <script src="assets/js/bootstrap.js" defer></script>
    <script src="assets/js/main.js" defer></script>
    <script src="assets/js/connect.js" defer></script>
</head>

<body class="d-flex flex-column justify-content-between">

<?php
if(!empty($_SESSION["id"])){
    require 'navBarConnect.php';
} else {
    require 'navBarDisconnect.php';
}
?>

<main class="container">
