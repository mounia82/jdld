<?php
require_once("Connection.php");

class Acteur extends Connection {

    public function getActeurNom($nom,$prenom) {
        try {
            $requete = "SELECT * FROM acteur WHERE nom = :nom,prenom = :prenom";
            $params = array(":nom" => $nom, ":prenom" => $prenom);
            if ($this->execute($requete, $params) != null) {
                return $this->execute($requete, $params)[0];
            } else {
                throw new Exception("Le nom n'existe pas");
            }
        }
        catch (Exception $e) {
            // affiche l'erreur
            // var_dump($e);
            // var_dump($e->getMessage());
            return null;
        }
    }

}
