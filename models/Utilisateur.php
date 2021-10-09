

<?php

class Utilisateur
{
    private $idUtilisateur;
    private $login;
    private $mdp;
    private $date_naissance;
    private $email;

    public function __construct($_idUtilisateur,$_login, $_mdp, $_date_naissance, $_email)
    {

        $this->idUtilisateur = $_idUtilisateur;
        $this->login = $_login;
        $this->mdp = $_mdp;
        $this->date_naissance = $_date_naissance;
        $this->email = $_email;
        
    }
    ///////////////////////////// SET///////////////////////////

    public function setIdUtilisateur($_idUtilisateur)
    {
        $this->idUtilisateur = $_idUtilisateur;
    }

    public function setLogin($_login)
    {
        $this->login = $_login;
    }

    public function setMdp($_mdp)
    {
        $this->mdp = $_mdp;
    }

    public function setDateNaissance($_date_naissance)
    {
        $this->date_naissance = $_date_naissance;
    }

    public function setEmail($_email)
    {
        $this->email = $_email;
    }

    //////////////////////GET/////////////////////

    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function getMdp()
    {
        return $this->mdp;
    }

    public function getDateNaissance()
    {
        return $this->date_naissance;
    }

    public function getEmail()
    {
        return $this->email;
    }
}
?>
