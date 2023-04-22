<?php
require_once('fonctions/connexion.php');
require_once('modules/header.php');
require_once('modules/nav.php');
?>

<body>
    <div class="container_connexion">
        <h1>Se connecter</h1>
        <form method="post">
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
        </form>
        <div>
            Pas encore de compte, clique <a href="inscription.php">ici</a>
        </div>
    </div>
</body>

</html>