<?php 
    // inclus la classe Tea
    include("models/Lol.php");
    // créer un objet de type tea
    $tea = new Lol();
    // faire appel getAllTea qui récupérer tout depuis la table The
    $teas = $tea->getAllTea();
    // afficher momentanément les tés
    //  var_dump($teas);

    // générer le table
    $table = "";
    // boucle
    foreach($teas as $t){
        var_dump($t); 
        $table .= "<tr>";
        $table .= "<td>". $t['id_categorie'] . "</td>";
        $table .= "<td>". $t['nom'] . "</td>";
        
        // modifier
        // $table .= "<td><a href='?section=updateTea&id=". $t['id_categorie'] . "'>mod</a></td>";
        // // supprimer
        // $table .= "<td><a href='?section=deleteTea&id=". $t['id_categorie'] . "'>sup</a></td>";
     $table .= "</tr>";
     
    }
    include("views/page/replique.php");
?>

   
  
  
