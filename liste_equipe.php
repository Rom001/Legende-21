<?php
session_start();
include('bd/connexionbd.php'); // Connexion à la BDD
$competition = $_GET['competition']; // On récupere l'id_news pour afficher la bonne news
?>


<?php
require_once('modules/header.php');
require_once('modules/nav.php');
?>

