<?php
require_once('fonctions/connexion.php');
require_once('modules/header.php');
require_once('modules/nav.php');
?>

<body>

    <?php
    $req = $DB->query("SELECT * FROM competition LIMIT 0, 10"); // On selectionne toutes les news de notre base de donnée
    $row = $req->fetch();
    $nb_competition = $req->rowCount();
    /*
    $nb_news = $row['id_news'];
    if ($nb_news >= 10) { // On limite l'affichage a 10 news
        $nb_news = 10;
    }
    */

    for ($i = 0; $i < $nb_competition; $i++) { 
    ?>
        <a href="competition_complete.php?competition=<?php echo $row['id_competition'];?>"> <!-- On envoie l'id_news de la div cliquer vers news_complete.php -->
            <div class="global">
                <div class="partiel">
                    <h1>
                        <?php
                        echo $row['nom'];
                        ?>
                    </h1>
                    <p>
                        <?php
                        echo $row['lieux'] . $row['saison'];
                        ?>
                    </p>
                </div>
                <div class="partiel">
                    <?php $image = $row['image1'];
                    echo "<img src=image/competition/$image.png>";
                    ?>
                </div>
            </div>
        </a>
    <?php
        $row = $req->fetch();
    }
    ?>
</body>