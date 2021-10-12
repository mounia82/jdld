<?php 
    // inclus la classe Tea
    include("models/Lol.php");
    include("models/Emotions.php");
    include("models/Replique.php");
    // créer un objet de type tea
    $tea = new Lol();
    $emotion = new Emotions();
    $replique= new Replique();
    // faire appel getAllTea qui récupérer tout depuis la table The
    $teas = $tea->getAllTea();
    $emotionss = $emotion->getAllEmotions();
    $repliques = $replique->getAllReplique();
    // afficher momentanément les tés
    //  var_dump($teas);

    // générer le table
    $table = "";
    $table2 ="";
    $table3 = "";
    // boucle
    foreach($teas as $t){
        // var_dump($t); 
        $table .= "<tr>";
        $table .= "<td>". $t['id_categorie'] . "</td>";
        $table .= "<td>". $t['nom_categorie'] . "</td>";
       
        
        // modifier
        // $table .= "<td><a href='?section=updateTea&id=". $t['id_categorie'] . "'>mod</a></td>";
        // // supprimer
        // $table .= "<td><a href='?section=deleteTea&id=". $t['id_categorie'] . "'>sup</a></td>";
     $table .= "</tr>";
     
    }

    foreach ($emotionss as $emo)
    {
        var_dump($emo);
        $table2 .= "<tr>";
        $table2 .= "<td>". $emo['id_emotions'] . "</td>";
        $table2 .= "<td>". $emo['nom_emotion'] . "</td>";
        $table2 .= "</tr>";
    }

    foreach ($repliques as $rep)
    {
        var_dump($rep);
        $table3 .= "<tr>";
        $table3 .= "<td>". $rep['id_replique'] . "</td>";
        $table3 .= "<td>". $rep['replique'] . "</td>";
        $table3 .= "<td>". $rep['image'] . "</td>";
        $table3 .= "</tr>";
    }

   
    include("views/page/replique.php");
    
?>

   
  
  
