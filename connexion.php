<?php
require_once('fonctions/connexion.php');
require_once('modules/header.php');
require_once('modules/nav.php');
?>

    <div id="container_connexion">
        <form method="post">
            <h1>Se connecter</h1>
            <?php
            if (isset($er_mail)) {
            ?>
                <div><?= $er_mail ?></div>
            <?php
            }
            ?>
            <input type="email" placeholder="Adresse mail" name="mail" value="<?php if (isset($mail)) {
                                                                                    echo $mail;
                                                                                } ?>" required>
            <?php
            if (isset($er_mdp)) {
            ?>
                <div><?= $er_mdp ?></div>
            <?php
            }
            ?>
            <input type="password" placeholder="Mot de passe" name="mdp" value="<?php if (isset($mdp)) {
                                                                                    echo $mdp;
                                                                                } ?>" required>
            <button type="submit" name="connexion">Se connecter</button>
            <div>
                <h3><a href="inscription.php">Pas encore de compte, clique ici</a></h3>
            </div>
        </form>
    </div>
</body>

</html>