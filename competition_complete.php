<?php
session_start();
include('bd/connexionbd.php'); // Connexion à la BDD
$competition = $_GET['competition']; // On récupere l'id_news pour afficher la bonne news
?>


<?php
require_once('modules/header.php');
require_once('modules/nav.php');
?>

<?php
$req = $DB->query("SELECT * FROM competition WHERE id_competition = '$competition'");
$row = $req->fetch();
?>

<dody>

    <div class="global">
        <div class="partiel">
            <h1>
                <?php
                echo $row['nom'];
                ?>
            </h1>
        </div>
        <div class="partiel">
            <p>
                <?php
                echo $row['lieux'] . $row['saison'];
                ?>
            </p>
        </div>
    </div>
    <hr>
    <div class="global">
        <div class="partiel">
            <img src="image/<?php echo $row['image1'];?>">
        </div>
        <div class="partiel">
            <p>
                <?php
                echo $row['texte'];
                ?>
            </p>
        </div>
    </div>
    <hr>
    <img src="image/<?php echo $row['image2'];?>">
    <hr>
    <div class="global">
        <div class="partiel">
            <h1>
                <?php
                echo $row['last_win'];
                ?>
            </h1>
        </div>
        <div class="partiel">
            <img src="image/Logo equipe/Logo_<?php echo $row['last_win'];?>.png">
        </div>
    </div>
    <hr>
    <a href="liste_equipe.php?competition=<?php echo $competition;?>">Liste des équipe participante</a>
    <?php
    $nom = 'E-LCK-BRION';
    $req = $DB->query("SELECT * FROM equipe where id_equipe = '$nom'"); // On selectionne toutes les news de notre base de donnée
    $row = $req->fetch();
    $nb_news = $req->rowCount();
    /*
    $nb_news = $row['id_news'];
    if ($nb_news >= 10) { // On limite l'affichage a 10 news
        $nb_news = 10;
    }
    */

    for ($i = 0; $i < $nb_news; $i++) { 
    ?>  <!-- On envoie l'id_news de la div cliquer vers news_complete.php -->
            <div class="global">
                <div class="partiel">
                    <h1>
                        <?php
                        echo $row['nom'];
                        ?>
                    </h1>
                    <p>
                        <?php
                        echo $row['nom'];
                        ?>
                    </p>
                </div>
                <div class="partiel">
                <img src="image/Logo equipe/Logo_<?php echo $row['nom'];?>.png">
                </div>
            </div>
    <?php
        $row = $req->fetch();
    }
    ?>
</dody>