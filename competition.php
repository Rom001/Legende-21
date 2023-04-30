<?php
require_once('fonctions/connexion.php');
require_once('modules/header.php');
require_once('modules/nav.php');
?>

    <?php
    $req = $DB->query("SELECT * FROM competition LIMIT 0, 10"); // On selectionne toutes les competititons
    $row = $req->fetch();
    $nb_competition = $req->rowCount();

    for ($i = 0; $i < $nb_competition; $i++) {
    ?>
        <a href="competition_complete.php?competition=<?php echo $row['id_competition']; ?>"> <!-- On envoie l'id_competition de la div cliquer vers competition_complete.php -->
            <div class="global_over">
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
                <div class="partiel_image">
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