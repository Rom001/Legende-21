<?php
session_start();
include('bd/connexionbd.php'); // Connexion à la BDD

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
    $req = $DB->query("SELECT * FROM news ORDER BY id_news DESC LIMIT 0, 10"); // On selectionne toutes les news de notre base de donnée
    $row = $req->fetch();
    $nb_news = $req->rowCount();
    /*
    $nb_news = $row['id_news'];
    if ($nb_news >= 10) { // On limite l'affichage a 10 news
        $nb_news = 10;
    }
    */

    for ($i = 0; $i < $nb_news; $i++) { 
    ?>
        <a 
        <?php if(!isset($_SESSION['id_utilisateur'])){echo "href='connexion.php'";}
        echo "href='news_complete.php?news=" . $row['id_news'] . "'";?>> <!-- On envoie l'id_news de la div cliquer vers news_complete.php -->
            <div class="global">
                <div class="partiel">
                    <h1>
                        <?php
                        echo $row['titre'];
                        ?>
                    </h1>
                    <p>
                        <?php
                        echo $row['resume'];
                        ?>
                    </p>
                </div>
                <div class="partiel">
                    <?php $image = $row['image'];
                    echo "<img src=image/news/$image>";
                    ?>
                </div>
            </div>
        </a>
    <?php
        $row = $req->fetch();
    }
    ?>

</body>