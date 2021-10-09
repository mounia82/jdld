<?php
class Commentaire
{

    private $contenu;
    private $date_com;
    private $heure_com;


    public function __construct($_contenu, $_date_com, $_heure_com)
    {

        $this->contenu = $_contenu;
        $this->date_com = $_date_com;
        $this->heure_com = $_heure_com;
    }

    ////////////////////////SET////////////////////


    public function setContenu($_contenu)
    {
        $this->login = $_contenu;
    }

    public function setDate_com($_date_com)
    {
        $this->mdp = $_date_com;
    }

    public function setHeure_com($_heure_com)
    {
        $this->mdp = $_heure_com;
    }



    /////////////////////GET/////////////

    public function getContenu()
    {
        return $this->contenu;
    }

    public function getDate_com()
    {
        return $this->date_com;
    }

    public function getHeure_com()
    {
        return $this->heure_com;
    }
}
