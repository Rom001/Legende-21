<?php
session_start();
include('bd/connexionbd.php'); // Connexion à la BDD
$news = $_GET['news']; // On récupere l'id_news pour afficher la bonne news
?>


<?php
require_once('modules/header.php');
require_once('modules/nav.php');
?>

<?php

// News prénédente
$req = $DB->query("SELECT MAX(id_news) as id FROM news WHERE id_news < $news");
$row = $req->fetch();
$news_precedente = $row['id'];

// News suivante
$req = $DB->query("SELECT MIN(id_news) as id FROM news WHERE id_news > $news");
$row = $req->fetch();
$news_suivante = $row['id'];

$req = $DB->query("SELECT * FROM news WHERE id_news = $news");
$row = $req->fetch();

if (!$row['titre']){
    header('Location: news.php');
    exit;
}

?>

<div class="global_news">

    <h1>
        <?php
        echo $row['titre'];
        ?>
    </h1>
    <div id="enLigne" style="">
        <?php
        if ($news_precedente) echo "<a style='margin: 10px;' href='news_complete.php?news=" . $news_precedente . "'>News précédente</a>";
        if ($news_suivante) echo "<a style='margin: 10px;' href='news_complete.php?news=" . $news_suivante . "'>News suivante</a>";
        ?>
    </div>
    <img class="image_news_complete" <?php $image = $row['image'];
                                        echo "src=image/news/$image";
                                        ?>>
    <div style="marging: 10px; padding:10px; border: solid; border-color:white;">
        Résumé :
        <?php
        echo $row['resume'];
        ?>
    </div>
    <div style="marging: 10px; padding:10px">
        <?php
        echo $row['texte'];
        ?>
    </div>
</div>
</body>