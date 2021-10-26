<?php
// inclus la classe Tea
// include("models/Lol.php");
include("models/Emotions.php");
include("models/Replique.php");
// créer un objet de type tea
$replique = new Replique();
// var_dump($replique);
// $acteurs = $acteur -> getActeurNom($nom,$prenom);
$table3 = "";
if (isset($_GET["categ"]) && isset($_GET["emotion"])) {
    $repliques = $replique->getRepliqueByCategAndEmot($_GET["categ"], $_GET["emotion"]);
    // var_dump($repliques);
    // die;
    /* ?><pre><?= print_r($repliques); ?></pre><?php */
    $table3 = "";
    $i = 0;
    // if $count($repliques > 1) {
    //     # code...
    // }else{
        
    // }
    foreach ($repliques as $rep) {
        $table3 .= '<div class="carousel-item ' . (($i == 0) ? 'active' : '') . '">
            <div class="row">
                <div id="quotesab" class="col-12"><h2 class="h2quote">&#x275d;</h2></div>
                <div id="hastasab" class="col-12"><p>' . $rep['replique'] . '</p> </div>
            </div>
            <div class="row">
                <figure id="audioHastasab" class="col-5">
                <audio
                    controls
                    loop
                    controls
                    type="audio/wav"
                    src="public/audio/' . $rep['audio'] . '"
                ></audio><figcaption>' . $rep['acteur_nom'] . " " . $rep['acteur_prenom'] . '</figcaption>
                </figure>
                
                
            </div>
            <div class="row">
                <p id="titreFilm" class=" col-6 " > ' . $rep['film_titre'] . " - " . $rep['film_date'] . '</p>
              
                <p id="" class="realisateur col-6 " > ' . $rep['realisateur_prenom'] . " " . $rep['realisateur_nom'] . '</p>
                
            </div>

            <div class="row">
                <div class="col-12 bandeFilm1"><img src="public/images/' . $rep['image'] . '" alt="bandeFilm1"></div>

            </div>
            <div class="row">
            
                <img style="width: 10px; height:auto;" class="coeursab col-1"  src="public/images/boutons/boutonCoeurBlanc.png" alt="like">
                <img style="width: 10px; height:auto;" class="bullesab col-1"  src="public/images/boutons/bulleCommentaire.png" alt="commentaire">
            </div>
          
            


            </div>';
        $i++;
    }

    

    // var_dump($rep);
    // $table3 .= "<tr>";
    /*  $table3 .= "<td>". $rep['id_replique'] . "</td>"; */
    /*  $table3 .= "<td>". $rep['replique'] . "</td>"; */
    /*   $table3 .= "<td><img src='". $rep['image'] . "'></td>"; */
    // $table3 .= "<p class=\"displayReplique\">" . $rep['replique'] . "<br>" . $rep['film_titre'] ." ". $rep['realisateur_nom']." ". $rep['realisateur_prenom']. $rep['film_date'] ."<audio controls
    //         src=public/audio/chewinggum.mp3>" . "</audio>" . "<br>" . $rep['acteur_nom']. " " . $rep['acteur_prenom']  . "<img src='" .  $rep['image'] . "'>" . "</p>";
    // // $table3 .= "</tr>";

}






include("views/page/replique.php");
