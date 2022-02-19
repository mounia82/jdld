<?php
class Realisateur
{

    private $idRealisateur;
    private $nomRealisateur;

    public function __construct($_idRealisateur,$_nomRealisateur)
    {
        $this->nomRealisateur = $_nomRealisateur;
        $this->idrealisateur = $_idRealisateur;
    }

    /////////////////SET/////////////////

    public function idRealisateur($_idRealisateur)
    {
        $this->idRealisateur = $_idRealisateur;
    }

    public function setNomRealisateur($_nomRealisateur)
    {
        $this->nomRealisateur = $_nomRealisateur;
    }


    ///////////////////GET////////////////////

    public function getIdRealisateur()
    {
        return $this->idRealisateur;
    }

    public function getNomRealisateur()
    {
        return $this->nomRealisateur;
    }
}
