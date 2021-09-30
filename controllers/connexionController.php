<?php


$bdd = new PDO('mysql:host=localhost;dbname=inscription;charset-utf8;', 'root', '');
if (isset($_POST['envoyer'])) {
    if (!empty($_POST['pseudo']) and !empty($_POST['mdp'])) {

        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = sha1($_POST['mdp']);
        $insertUser = $bdd->prepare('INSERT INTO utilisateurs(pseudo,mdp)VALUES(?,?)');
        $insertUser->execute(array($pseudo, $mdp));

        $recupUser = $bdd->prepare('SELECT * FROM utilisateurs WHERE pseudo = ? AND mdp = ?');
        $recupUser->execute(array($pseudo, $mdp));
        if ($recupUser->rowCount() > 0) {

            $_SESSION['pseudo'] = $pseudo;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $recupUser->fetch()['id'];
        }
    } else {
        echo "Veuillez compléter tous les champs!";
    }
}


include("views/page/connexion.php");
