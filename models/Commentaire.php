<?php
class Commentaire
{

    private $idCommentaire;
    private $contenu;
    private $date_com;
    private $heure_com;


    public function __construct($_idCommentaire,$_contenu, $_date_com, $_heure_com)
    {
        $this->idCommentaire = $_idCommentaire;
        $this->contenu = $_contenu;
        $this->date_com = $_date_com;
        $this->heure_com = $_heure_com;
    }

    ////////////////////////SET////////////////////

    public function setIdCommentaire($_idCommentaire)
    {
        $this->idCommentaire = $_idCommentaire;
    }

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

    public function getIdCommentaire()
    {
        return $this->idCommentaire;
    }

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
