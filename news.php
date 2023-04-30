<?php
require_once('fonctions/connexion.php');
require_once('modules/header.php');
require_once('modules/nav.php');
?>


    <?php
    $req = $DB->query("SELECT * FROM news ORDER BY id_news DESC LIMIT 0, 10"); // On selectionne toutes les news de notre base de donnée
    $row = $req->fetch();
    $nb_news = $req->rowCount();

    for ($i = 0; $i < $nb_news; $i++) {
    ?>
        <a <?php if (!isset($_SESSION['id_utilisateur'])) {
                echo "href='connexion.php'";
            }
            echo "href='news_complete.php?news=" . $row['id_news'] . "'"; ?>> <!-- On envoie l'id_news de la div cliquer vers news_complete.php -->
            <div class="global_over">
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
                    echo "<img src=image/news/$image style='width: 100%;'>";
                    ?>
                </div>
            </div>
        </a>
    <?php
        $row = $req->fetch();
    }
    ?>
</body>