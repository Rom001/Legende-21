<?php
session_start();
//session_unset();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="prono">
    <title>Legend 21</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- navbar -->
    <ul class="topnav">
        <li><a class="active" href="#home">Home</a></li>
        <li class="right"><a href="news.php">News</a></li>
        <li class="right"><a href="#contact">Contact</a></li>
        <li class="right"><a href="#about">About</a></li>
    </ul>
    <?php
    echo $_SESSION['id_utilisateur'];
    if (!isset($_SESSION['id_utilisateur'])) { ?>
        <div class='global'>
            <div class='partiel'>
                <p class='inscription'><a href='inscription.php'>S'INSCRIRE</a></p>
            </div>
            <div class='partiel'>
                <p class='connexion'><a href='connexion.php'>SE CONNECTER</a></p>
            </div>
        </div>
    <?php
    } else { ?>
            <div class='global'>
            <div class='partiel'>
                <p class='deconnexion'><a href='deconnexion.php'>SE DECONNECTER</a></p>
            </div>
<?php
    }
    ?>

</body>

</html>