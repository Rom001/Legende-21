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
$req = $DB->query("SELECT * FROM competition WHERE id_competition = $competition");
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
            <img src="image/<?php echo $row['image'];?>">
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
</dody>