<?php
class Categorie
{

    private $idCategorie;
    private $amis;
    private $famille;
    private $couple;
    private $boss;
    private $autre;


    public function __construct($_idCategorie,$_amis, $_famille, $_couple, $_boss, $_autre)
    {
        $this->idCategorie = $_idCategorie;
        $this->amis = $_amis;
        $this->famille = $_famille;
        $this->couple = $_couple;
        $this->boss = $_boss;
        $this->boss = $_autre;
    }

    ////////////////////////SET/////////////////

    public function setIdCategorie ($_idCategorie)
    {
        $this->idCategorie = $_idCategorie;
    }

    public function setAmis($_amis)
    {
        $this->amis = $_amis;
    }

    public function setFamille($_famille)
    {
        $this->famille = $_famille;
    }

    public function setCouple($_couple)
    {
        $this->couple = $_couple;
    }

    public function setBoss($_boss)
    {
        $this->boss = $_boss;
    }
    public function setAutre($_autre)
    {
        $this->autre = $_autre;
    }




    ////////////////GET///////////////

    public function getIdCategorie()
    {
        return $this->idCategorie;
    }

    public function getAmis()
    {
        return $this->amis;
    }

    public function getFamille()
    {
        return $this->famille;
    }

    public function getCouple()
    {
        return $this->couple;
    }

    public function getBoss()
    {
        return $this->boss;
    }

    public function getAutre()
    {
        return $this->autre;
    }
}
