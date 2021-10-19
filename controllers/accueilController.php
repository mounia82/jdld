<?php


// print_r($_GET)



//ici contact ta base de donnée, sur base des deux element que tu as ici au dessus 

//tu crée une petite variable avec ta réplique et tu l'affiche dans acceuil.php


// inclus la classe Tea
include("models/Lol.php");
include("models/Emotions.php");
include("models/Replique.php");

// créer un objet de type tea
$replique = new Replique();

// $acteurs = $acteur -> getActeurNom($nom,$prenom);

if (isset($_GET["categ"]) && isset($_GET["emotion"])) {
    $repliques = $replique->getRepliqueByCategAndEmot($_GET["categ"], $_GET["emotion"]);
    // var_dump($repliques);
  
    /* ?><pre><?= print_r($repliques); ?></pre><?php */
    $table3 = "";
  
    foreach ($repliques as $rep) {
        

        // var_dump($rep);
        $table3 .= "<tr>";
        /*  $table3 .= "<td>". $rep['id_replique'] . "</td>"; */
        /*  $table3 .= "<td>". $rep['replique'] . "</td>"; */
        /*   $table3 .= "<td><img src='". $rep['image'] . "'></td>"; */
        $table3 .= "<p class=\"displayReplique\">" . $rep['replique'] . "<br>" . $rep['film_titre'] ." ". $rep['realisateur_nom']." ". $rep['realisateur_prenom']. $rep['film_date'] ."<audio controls
                src=public/audio/chewinggum.mp3>" . "</audio>" . "<br>" . $rep['acteur_nom']. " " . $rep['acteur_prenom']  . "<img src='" .  $rep['image'] . "'>" . "</p>";
        $table3 .= "</tr>";
    
}
// faire appel getAllTea qui récupérer tout depuis la table The

// afficher momentanément les tés
//  var_dump($teas);

// générer le table
/*
        $table = "";
        $table2 ="";
        $table3 = "";
        */


// boucle
// foreach($teas as $t){
//     // var_dump($t); 
//     $table .= "<tr>";
//     $table .= "<td>". $t['id_categorie'] . "</td>";
//     $table .= "<td>". $t['nom_categorie'] . "</td>";


// modifier
// $table .= "<td><a href='?section=updateTea&id=". $t['id_categorie'] . "'>mod</a></td>";
// // supprimer
// $table .= "<td><a href='?section=deleteTea&id=". $t['id_categorie'] . "'>sup</a></td>";
//  $table .= "</tr>";

// }

// foreach ($emotionss as $emo)
// {
//     var_dump($emo);
//     $table2 .= "<tr>";
//     $table2 .= "<td>". $emo['id_emotions'] . "</td>";
//     $table2 .= "<td>". $emo['nom_emotion'] . "</td>";
//     $table2 .= "</tr>";
// }

/*
        
        */




include("views/page/accueil.php");
       
        // include("views/page/replique.php");
}