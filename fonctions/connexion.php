<?php
session_start();
include('bd/connexionbd.php'); // Connexion à la BDD

// S'il y a une session alors on ne retourne plus sur cette page
if (isset($_SESSION['id'])) {
    header('Location: index.php');
    exit;
}

// Si la variable "$_Post" contient des informations alors on les traitres
if (!empty($_POST)) {
    extract($_POST);
    $valid = true;

    if (isset($_POST['connexion'])) {
        $mail = htmlentities(strtolower(trim($mail)));
        $mdp = trim($mdp);

        if (empty($mail)) { // Vérification qu'il y est bien un mail de renseigné
            $valid = false;
            $er_mail = "Il faut mettre un mail";
        }

        if (empty($mdp)) { // Vérification qu'il y est bien un mot de passe de renseigné
            $valid = false;
            $er_mdp = "Il faut mettre un mot de passe";
        }

        // On fait une requête pour savoir si le couple mail / mot de passe existe bien car le mail est unique !
        $req = $DB->query(
            "SELECT *
        FROM utilisateur
        WHERE mail = ?",
            array($mail)
        );
        $req = $req->fetch();

        // Si on a pas de résultat alors c'est qu'il n'y a pas d'utilisateur correspondant au couple mail / mot de passe
        if (crypt($mdp, '$6$rounds=5000$usesomesillystringforsalt$') != $req['mdp']) {
            $valid = false;
            $er_mail = "Le mail ou le mot de passe est incorrecte";
        }

        // S'il y a un résultat alors on va charger la SESSION de l'utilisateur en utilisateur les variables $_SESSION
        if ($valid) {
            $_SESSION['id_utilisateur'] = $req['id_utilisateur']; // id de l'utilisateur unique pour les requêtes futures
            $_SESSION['nom'] = $req['nom'];
            $_SESSION['prenom'] = $req['prenom'];
            $_SESSION['mail'] = $req['mail'];

            header('Location: index.php');
            exit;
        }
    }
}
?>