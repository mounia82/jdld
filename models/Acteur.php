<?php
class Acteur
{

    private $idActeur;
    private $nomActeur;

    public function __construct($_nomActeur, $_idActeur)
    {
        $this->nom = $_nomActeur;
        $this->idActeur = $_idActeur;
    }

////////////SET////////////////:
    public function setidActeur($_idActeur) {
        $this->idActeur = $_idActeur;
    }

    public function setnomActeur($_nomActeur) {
        $this->nomActeur = $_nomActeur;
    }

    ////////////GET////////////////

    public function getidActeur() {
        return $this->idActeur;
    }
    
    public function getnomActeur() {
        return $this->nomActeur;
    }


}
