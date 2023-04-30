<?php
session_start();
$equipe = $_GET['equipe'];
?>

<?php
include('bd/connexionbd.php'); // Connexion à la BDD
require_once('modules/header.php');
require_once('modules/nav.php');

$req = $DB->query("SELECT nom FROM equipe WHERE id_equipe LIKE '%$equipe%'");
$row_equipe = $req->fetch();
?>
<div id="container_connexion">
    <form method="post">
        <h1>Faites votre pronostique !</h1>
        <h2><?php echo $row_equipe['nom'];?></h2>
        <img src="image/Logo equipe/Logo_<?php echo $row_equipe['nom']; ?>.png">
        <h1>A Quelle place vont il finir ? : </h1>
        <input type="int" id="prono" name="prono" required><br>
        <input type="submit" value="Envoyer">
    </form>
</div>

<?php
$req = $DB->query("SELECT p.prono FROM prono p INNER JOIN utilisateur u on p.code_utilisateur = u.id_utilisateur INNER JOIN equipe e on e.id_equipe = p.code_equipe WHERE e.id_equipe = '$equipe'");
$row_prono = $req->fetch();

if (!empty($_POST)) {
    extract($_POST);

    if (isset($_POST['prono'])) {
        $prono = trim($prono);
        if (!isset($row_prono['prono'])) {
            $DB->insert(
                "INSERT INTO prono (code_utilisateur, code_equipe, prono) VALUES (?, ?, ?)",
                array($_SESSION['id_utilisateur'], $equipe, $prono)
            );
        } else {
            $DB->insert("UPDATE prono SET prono = ? WHERE code_utilisateur = ? AND code_equipe = ?", array($prono, $_SESSION['id_utilisateur'], $equipe));
        }
    }
    header('Location: prono.php');
    exit;
}
?>