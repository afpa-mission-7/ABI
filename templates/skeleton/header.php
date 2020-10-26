<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page d'accueil</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <script src="https://kit.fontawesome.com/c2ce3de10b.js" crossorigin="anonymous" defer></script>
    <script src="assets/js/jquery.js" defer></script>
    <script src="assets/js/bootstrap.js" defer></script>
    <script src="assets/js/main.js" defer></script>
    <script src="assets/js/connect.js" defer></script>
<!--   <script src="assets/js/collaborator.js" defer></script> -->

</head>

<body class="d-flex flex-column justify-content-between">

<header class="d-flex flex-column fixed-top">
    
<?php
if(!empty($_SESSION["id"])){
    require 'navBarConnect.php';
} else {
    require 'navBarDisconnect.php';
}
?>
</header>

<main class="container">
