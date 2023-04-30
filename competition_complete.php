<?php
session_start();
include('bd/connexionbd.php'); // Connexion à la BDD
$competition = $_GET['competition'];
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
            <?php
            echo $row['lieux'] . $row['saison'];
            ?>
        </div>
        <div class="partiel_over">
            <a <?php if (!isset($_SESSION['id_utilisateur'])) {
                    echo "href='connexion.php'";
                }
                echo "href='classement.php?classement=$competition'"; ?>>>>> Classement <<<</a>
        </div>
    </div>
    <div class="global">
        <div class="partiel_image">
            <img src="image/competition/<?php echo $row['image1']; ?>.png">
        </div>
        <div class="partiel">
            <p class="ligue">
                <?php
                echo $row['texte'];
                ?>
            </p>
        </div>
    </div>
    <div class="global">
        <div class="partiel">
            <h1>
                Dernier vainqueur :
                <?php
                echo $row['last_win'];
                ?>
            </h1>
        </div>
        <div class="partiel_image">
            <img src="image/Logo equipe/Logo_<?php echo $row['last_win']; ?>.png">
        </div>
    </div>
    <div class="global_large">
    <img src="image/competition/<?php echo $row['image2']; ?>.png" style="width:100%;">
    </div>
</dody>

</html>