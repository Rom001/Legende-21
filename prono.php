<?php
session_start();
if (!isset($_SESSION['id_utilisateur'])) {
    header('Location: connexion.php');
    exit;
}
?>

<?php
include('bd/connexionbd.php'); // Connexion à la BDD
require_once('modules/header.php');
require_once('modules/nav.php');
?>

<?php
$req_competition = $DB->query("SELECT * FROM competition");
$row_competiton = $req_competition->fetch();
$nb_competion = $req_competition->rowCount();

for ($i = 0; $i < $nb_competion; $i++) {
?>
    <div class="global_large">
        <div class="partiel">
            <h1>
                <?php
                echo $row_competiton['nom'];
                ?>
            </h1>
            <p>
                <?php
                echo $row_competiton['lieux'] . $row_competiton['saison'];
                ?>
            </p>
        </div>
        <div class="partiel_image">
            <?php $image = $row_competiton['image1'];
            echo "<img src=image/competition/$image.png>";
            ?>
        </div>
    </div>
    <?php
    $req = $DB->query("SELECT * FROM equipe WHERE id_equipe LIKE '%$row_competiton[id_competition]%'"); // On selectionne toutes les news de notre base de donnée
    $row_equipe = $req->fetch();
    $nb_equipe = $req->rowCount();
    for ($j = 0; $j < $nb_equipe; $j++) {
    ?>
        <a href="mon_prono.php?equipe=<?php echo $row_equipe['id_equipe']; ?>">
            <div class="global_over">
                <div class="partiel">
                    <h1>
                        <?php
                        echo $row_equipe['nom'];
                        ?>
                    </h1>
                </div>
                <div class="partiel_image">
                    <img style="height:100px" src="image/Logo equipe/Logo_<?php echo $row_equipe['nom']; ?>.png">
                </div>
            </div>
        </a>
<?php
        $row_equipe = $req->fetch();
    }
    $row_competiton = $req_competition->fetch();
}
?>
</body>

</html>