<?php 
    // inclus la classe Tea
   
    include("models/Replique.php");
    // créer un objet de type tea
   
    $replique= new Replique();
    // faire appel getAllTea qui récupérer tout depuis la table The
  
    $repliques = $replique->getAllReplique();
    // afficher momentanément les tés
    //  var_dump($teas);

    // générer le table
  
    $table3 = "";


    foreach ($repliques as $rep)
    {
        // var_dump($rep);
        $table3 .= "<tr>";
        $table3 .= "<td>". $rep['id_replique'] . "</td>";
        $table3 .= "<td>". $rep['replique'] . "</td>";
        $table3 .= "<td>". $rep['image'] . "</td>";
        $table3 .= "</tr>";
    }
    
    
    

      
   
   
    include("views/page/replique.php");
    
?>

   
  
  
