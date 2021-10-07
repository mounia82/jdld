<?php

class Emotion
{

    private $la_colere;
    private $le_degout;
    private $la_surprise;
    private $le_mepris;
    private $la_tristesse;
    private $la_joie;
    private $la_peur;


    public function __construct($_la_colere, $_le_degout, $_la_surprise, $_le_mepris, $_la_tristesse, $_la_joie, $_la_peur)

    {
        $this->la_colere = $_la_colere;
        $this->le_degout = $_le_degout;
        $this->la_surprise = $_la_surprise;
        $this->la_mepris = $_le_mepris;
        $this->la_tristesse = $_la_tristesse;
        $this->la_joie = $_la_joie;
        $this->la_peur = $_la_peur;
    }
}
