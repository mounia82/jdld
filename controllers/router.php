<?php 
    
    if(isset($_GET["section"])){
        switch ($_GET["section"]) {
            case 'accueil':
                include("views/page/accueil.php");
                break;
            case 'apropos':
                include("views/page/apropos.php");
                break;
            case 'contact':
                include("views/page/contact.php");
                break;
            case 'connexion':
                    include("views/page/connexion.php");
                    break;
        
            default:
                # code...
                break;
        }

    }
    else {
        include("views/page/accueil.php");
    }
