<?php
if (isset($_GET["section"])) {
    // il est connecté
    if (isset($_SESSION["id"])) {
        switch ($_GET["section"]) {
            case 'accueil':
                include("controllers/accueilController.php");
                break;
            case 'apropos':
                include("controllers/accueilController.php");
                break;
            case 'contact':
                include("controllers/contactController.php");
                break;
            case 'connexion':
                include("controllers/connexionController.php");
                break;
            case 'inscription':
                include("controllers/inscriptionController.php");
                break;
            case 'questionsuivante':
                include("controllers/questionsuivanteController.php");
                break;
            case 'replique':
                include("controllers/repliqueController.php");
                break;
            case 'deconnexion':
                include("controllers/deconnexionController.php");
                break;
            default:
                include("views/error/404.php");
        }
    } else {
        // il n'est pas connecté
        switch ($_GET["section"]) {
            case 'accueil':
                include("controllers/accueilController.php");
                break;
            case 'apropos':
                include("controllers/accueilController.php");
                break;
            case 'questionsuivante':
                include("controllers/questionsuivanteController.php");
                break;
            case 'replique':
                include("controllers/repliqueController.php");
                break;
            case 'contact':
                include("controllers/contactController.php");
                break;
            case 'connexion':
                include("controllers/connexionController.php");
                break;
            case 'inscription':
                include("controllers/inscriptionController.php");
                break;
            default:
                include("views/error/404.php");
        }
    }
} else {
    include("controllers/accueilController.php");
}
