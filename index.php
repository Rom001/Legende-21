<?php
session_start();
?>

<?php
require_once('modules/header.php');
require_once('modules/nav.php');
?>

<div style="width:80%; margin:auto;">
    <?php
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
        </div>
    <?php
    }
    ?>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/UUOBtkiDrE8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>
</body>

</html>