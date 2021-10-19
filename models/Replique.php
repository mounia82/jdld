<?php
require_once("Connection.php");

class Replique extends Connection {

    public function getReplique($id)
    {

        try {
            $requete = "SELECT * FROM replique WHERE id_replique = :id";
            $params = array(":id" => $id);
            if ($this->execute($requete, $params) != null) {
                return $this->execute($requete, $params)[0];
            } else {
                throw new Exception("La replique n'existe pas");
            }
        } 
        catch (Exception $e) {
            // affiche l'erreur
            // var_dump($e);
            // var_dump($e->getMessage());
            return null;
        }
    }

    public function getRepliqueByCategAndEmot($categ, $emotion)
    {
        try{
            $requete = "select id_replique,replique,traduction,image,audio, film.titre as film_titre, film.date_film as film_date , realisateur.nom as realisateur_nom, realisateur.prenom as realisateur_prenom, acteur.nom as acteur_nom, acteur.prenom as acteur_prenom from replique
            join emotions on replique.emotion_id = emotions.id_emotions
            join categorie on replique.categorie_id = categorie.id_categorie
            JOIN film on replique.film_id = film.id_film
            JOIN acteur on acteur.id_acteur = film.acteur_id
            JOIN realisateur on film.realisateur_id = realisateur.id_realisateur
            where categorie.nom_categorie = :categ and emotions.nom_emotion = :emot";

            $params = array(":categ" => $categ, ":emot" => $emotion);
            if($this->execute($requete, $params) != null){
                return $this->execute($requete, $params);
            }else{
                throw new Exception("La réplique n'existe pas");
            }

        }
        catch(Exception $e)
        {
            return null;
        }
    }


    public function getAllReplique()
    {

        $requete = "SELECT * FROM replique";
        return $this->execute($requete);
    }
}










    // private $idReplique;
    // private $replique;
    // private $image;
    // private $audio;

    // public function __construct($_idReplique, $_replique, $_image, $_audio)

    // {
    //     $this->idReplique = $_idReplique;
    //     $this->replique = $_replique;
    //     $this->image = $_image;
    //     $this->audio = $_audio;
    // }

    // public function setIdReplique($_idReplique)
    // {
    //     $this->idReplique = $_idReplique;
    // }

    // public function setReplique($_replique)
    // {
    //     $this->replique = $_replique;
    // }

    // public function setImage($_image)
    // {
    //     $this->image = $_image;
    // }

    // public function setAudio($_audio)
    // {
    //     $this->audio = $_audio;
    // }
    

    // public function getIdReplique()
    // {
    //     return $this->idReplique;
    // }

    // public function getReplique()
    // {
    //     return $this->replique;
    // }

    // public function getImage()
    // {
    //     return $this->image;
    // }

    // public function getAudio()
    // {
    //     return $this->audio;
    // }
?>