<?php
require_once('fonctions/inscription.php');
require_once('modules/header.php');
require_once('modules/nav.php');
?>


<body>
    <div id="container_connexion">
        <form method="post">
            <h1>Inscription</h1>
            <?php
            // S'il y a une erreur sur le nom alors on affiche
            if (isset($er_nom)) {
            ?>
                <div>
                    <?= $er_nom ?>
                </div>
            <?php
            }
            ?>

            <input type="text" placeholder="Votre nom" name="nom" value="<?php if (isset($nom)) {
                                                                                echo $nom;
                                                                            } ?>" required>

            <?php
            if (isset($er_prenom)) {
            ?>
                <div>
                    <?= $er_prenom ?>
                </div>

            <?php
            }
            ?>
            <input type="text" placeholder="Votre prénom" name="prenom" value="<?php if (isset($prenom)) {
                                                                                    echo $prenom;
                                                                                } ?>" required>

            <?php
            if (isset($er_mail)) {
            ?>
                <div>
                    <?= $er_mail ?>
                </div>

            <?php
            }
            ?>
            <input type="email" placeholder="Adresse mail" name="mail" value="<?php if (isset($mail)) {
                                                                                    echo $mail;
                                                                                } ?>" required>

            <?php
            if (isset($er_mdp)) {
            ?>
                <div>
                    <?= $er_mdp ?>
                </div>

            <?php
            }
            ?>
            <input type="password" placeholder="Mot de passe" name="mdp" value="<?php if (isset($mdp)) {
                                                                                    echo $mdp;
                                                                                } ?>" required>
            <input type="password" placeholder="Confirmer le mot de passe" name="confmdp" required>
            <div id="enLigne">
                <button type="reset" name="effacer">Effacer le formulaire</button>
                <button type="submit" name="inscription">Envoyer</button>
            </div>
        </form>
    </div>
</body>

</html>