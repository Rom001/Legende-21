<?php
session_start();
include('bd/connexionbd.php'); // Connexion à la BDD
$news = $_GET['news']; // On récupere l'id_news pour afficher la bonne news
?>


<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News</title>
    <link rel="stylesheet" href="css/styles.css">

</head>

<body>

    <!-- navbar -->
    <ul class="topnav">
        <li><a class="active" href="index.php">Home</a></li>
        <li class="right"><a href="news.php">News</a></li>
        <li class="right"><a href="#contact">Contact</a></li>
        <li class="right"><a href="#about">About</a></li>
    </ul>

    <?php

    $req = $DB->query("SELECT * FROM news WHERE id_news = $news");
    $row = $req->fetch();

    ?>

    <div>
        <h1>
            <?php
            echo $row['titre'];
            ?>
        </h1>
    </div>
    <img class="image_news_complete" <?php $image = $row['image'];
                                        echo "src=image/news/$image";
                                        ?>>
    <div>
        <?php
        echo $row['texte'];
        ?>
    </div>

</body>