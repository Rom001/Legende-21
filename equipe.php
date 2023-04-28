<?php
session_start();
include('bd/connexionbd.php'); // Connexion à la BDD
$equipe = $_GET['equipe'];
$competition = $_GET['competition'];
if ($competition != 'LFL') {
    echo "<script>alert(\"Cette fonctionalité n'est disponible que pour les équipe francaise (LFL) !\")</script>";
    echo "<script>document.location.href='competition.php'</script>";
}
?>


<?php
require_once('modules/header.php');
require_once('modules/nav.php');
?>
<?php
$req = $DB->query("SELECT * FROM equipe WHERE id_equipe ='$equipe'");
$row2 = $req->fetch();
$req = $DB->query("SELECT * FROM joueur WHERE equipe_code ='$equipe'");
$row = $req->fetch();
?>


<div class="global">
    <div class="partiel">
        <h1>
            <?php
            echo $row2['nom'];
            ?>
        </h1>
        <p>
            Nombre de Victoire :
            <?php
            echo $row2['nb_victoire'];
            ?>
        </p>
    </div>
    <div class="partiel">
        <img src="image/Logo equipe/Logo_<?php echo $row2['nom']; ?>.png">
    </div>
</div>

<div class="joueur">
    <?php
    for ($i = 0; $i < 5; $i++) {
    ?>
        <div class="item" style="background-image: url(image/joueur/<?php echo $row['pseudo']; ?>.png);">

            <div class="vert"><?php echo $row['position']; ?></div>
            <?php echo $row['pseudo']; ?>
        </div>
    <?php
        $row = $req->fetch();
    }
    ?>

</div>


</dody>