<?php


$bdd = new PDO('mysql:host=localhost;dbname=inscription;charset-utf8;', 'root', '');
if (isset($_POST['submit'])) {
    if (!empty($_POST['identifiant']) and !empty($_POST['date_naissance']) and !empty($_POST['email']) and !empty($_POST['mdp']) and !empty($_POST['confirmermdp'])) {

        $identifiant = htmlspecialchars($_POST['identifiant']);
        $date_naissance = $_POST['date_naissance'];
        $email = $_POST['email'];
        $mdp = sha1($_POST['mdp']);
        $confirmermdp = sha1($_POST['confirmermdp']);
        $insertUser = $bdd->prepare('INSERT INTO utilisateurs(identifiant,date_naissance,email,mdp,confirmermdp)VALUES(?,?,?,?,?)');

        $insertUser->execute(array($identifiant, $date_naissance, $email, $mdp, $confirmermdp));

        $recupUser = $bdd->prepare('SELECT * FROM utilisateurs WHERE identifiant = ? AND date_naissance=? AND email=? AND mdp=? AND confirmermdp=? ');
        $recupUser->execute(array($identifiant, $date_naissance, $email, $mdp, $confirmermdp));
        if ($recupUser->rowCount() > 0) {

            $_SESSION['identifiant'] = $identifiant;
            $_SESSION['mdp'] = $mdp;
            $_SESSION['id'] = $recupUser->fetch()['id'];
        }
    } else {
        echo "Veuillez compléter tous les champs!";
    }
}


include("views/page/connexion.php");
