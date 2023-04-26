<?php
session_start();
include('bd/connexionbd.php'); // Connexion à la BDD
$equipe = $_GET['equipe']; // On récupere l'id_news pour afficher la bonne news
?>


<?php
require_once('modules/header.php');
require_once('modules/nav.php');
?>
<?php
$req = $DB->query("SELECT * FROM equipe WHERE id_equipe ='$equipe'"); // On selectionne toutes les news de notre base de donnée
$row2 = $req->fetch();
$req = $DB->query("SELECT * FROM joueur WHERE equipe_code ='$equipe'"); // On selectionne toutes les news de notre base de donnée
$row = $req->fetch();
?>

<dody>

    <div class="global">
        <div class="partiel">
            <h1>
                <?php
                echo $row2['nom'];
                ?>
            </h1>
            <p>
                <?php
                echo $row2['nom'];
                ?>
            </p>
        </div>
        <div class="partiel">
            <img src="image/Logo equipe/Logo_<?php echo $row2['nom']; ?>.png">
        </div>
    </div>

<div class="joueur">
    <div class="item">
        <div class="vert">SUPP</div>
        Rom/1
    </div>
    <div class="item">
        <div class="vert">SUPP</div>
        Rom/1
    </div>
    <div class="item">
        <div class="vert">SUPP</div>
        Rom/1
    </div>
    <div class="item">
        <div class="vert">SUPP</div>
        Rom/1
    </div>
    <div class="item">
        <div class="vert">SUPP</div>
        Rom/1
    </div>
</div>

<div class="global">
        <div class="partiel">
            <h1>
                <?php
                echo $row['pseudo'];
                ?>
            </h1>
        </div>
        <div class="partiel">
            <p>
                <?php
                echo $row['position'];
                ?>
            </p>
        </div>
    </div>

</dody>