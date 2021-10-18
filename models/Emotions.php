<?php
require_once("Connection.php");

class Emotions extends Connection
{

public function getEmotions($id){
    // essaye de faire
    try{
        $requete= "SELECT * FROM emotions WHERE id_emotions = :id";
        $params = array(
            ":id" => $id
        );
        // exucte retourne par défaut un tableau
        // comme il n'y a qu'une seule ligne
        // recupère uniquement la ligne 0
        // [0]
        if($this->execute($requete, $params)!= null){
            return $this->execute($requete, $params)[0];
        }
        else {
            throw new Exception("La cat n'existe pas") ;
        }
        
    }
    // si tu n'y arrives pas alors récupère l'erreur
    catch(Exception $e){
        // affiche l'erreur
        // var_dump($e);
        // var_dump($e->getMessage());
        return null;
    }
}

    public function getAllEmotions()
{		
    $requete = "SELECT * FROM emotions";
    return $this->execute($requete);
}

}






// public function __construct($_idEmotion,$_la_colere, $_le_degout, $_la_surprise, $_le_mepris, $_la_tristesse, $_la_joie, $_la_peur)

// {
//     $this->idEmotion = $_idEmotion;
//     $this->la_colere = $_la_colere;
//     $this->le_degout = $_le_degout;
//     $this->la_surprise = $_la_surprise;
//     $this->le_mepris = $_le_mepris;
//     $this->la_tristesse = $_la_tristesse;
//     $this->la_joie = $_la_joie;
//     $this->la_peur = $_la_peur;
// }


// public function setIdEmotion($_idEmotion)
// {
//     $this->idEmotion = $_idEmotion;
// }

// public function setLaColere($_la_colere)
// {
//     $this->la_colere = $_la_colere;
// }

// public function setLeDegout($_le_degout)
// {
//     $this->le_degout = $_le_degout;
// }

// public function setLaSurprise($_la_surprise)
// {
//     $this->la_surprise = $_la_surprise;
// }

// public function setLaTristesse($_la_tristesse)
// {
//     $this->la_tristesse = $_la_tristesse;
// }

// public function setLaJoie($_la_joie)
// {
//     $this->la_joie = $_la_joie;
// }

// public function setLeMepris($_le_mepris)
// {
//     $this->le_mepris = $_le_mepris;
// }

// public function setLaPeur($_la_peur)
// {
//     $this->la_peur = $_la_peur;
// }


// public function getIdEmotion()
// {

//     return $this->idEmotion;
// }

// public function getLaColere()
// {

//     return $this->la_colere;
// }

// public function getLeDegout()
// {
//     return $this->le_degout;
// }

// public function getLaSurprise()
// {
//     return $this->la_surprise;
// }

// public function getLaTristesse()
// {
//     return $this->la_tristesse;
// }

// public function getLaJoie()
// {
//     return $this->la_joie;
// }

// public function getLeMepris()
// {
//     return $this->le_mepris;
// }

// public function getLapeur()
// {
//     return $this->la_peur;
// }


?>