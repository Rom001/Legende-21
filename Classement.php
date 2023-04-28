<?php
session_start();
include('bd/connexionbd.php'); // Connexion à la BDD
$competition = $_GET['classement'];
$utilisateur = $_SESSION['id_utilisateur'];
?>


<?php
require_once('modules/header.php');
require_once('modules/nav.php');
?>


<?php
$req = $DB->query("SELECT * FROM equipe WHERE id_equipe LIKE '%$competition%' ORDER BY nb_victoire DESC");
$row = $req->fetch();
$nb_equipe = $req->rowCount();
?>

<h2> Classement des équipes</h2>

<table>
    <tr>
        <th>Position</th>
        <th>Equipe</th>
        <th>Victoire</th>
        <th>Position équipe prono</th>
    </tr>

    <?php



    for ($i = 0; $i < $nb_equipe; $i++) {  //parcours de toutes les équipes de la ligue en question puis affichage classement

        $req_prono = $DB->query("SELECT p.prono FROM prono p INNER JOIN utilisateur u on p.code_utilisateur = u.id_utilisateur INNER JOIN equipe e on e.id_equipe = p.code_equipe WHERE id_utilisateur = '$utilisateur' AND id_equipe = '$row[id_equipe]' ORDER BY e.nb_victoire DESC"); // On selectionne truc avec la table d'association
        $row_prono = $req_prono->fetch();

        echo "<tr>";
        echo "<td>" . ($i + 1)  . "</td>";
        echo "<td><a href='equipe.php?equipe=$row[id_equipe]&competition=$competition'><img src='Image/Logo equipe/Logo_" . $row['nom'] . ".png' alt='" . $row['nom'] . "' width='50' height='50'>" . $row['nom'] . "</a></td>";
        echo "<td>" . $row['nb_victoire'] . "</td>";

        if (!isset($row_prono['prono'])) {
            echo "<td>" . "-" . "</td>";
        } else {
            echo "<td>" . $row_prono['prono'] . "</td>";
        }
        echo "<tr>";

        $row = $req->fetch();
        $row_prono = $req_prono->fetch();
    }
    ?>

    </body>