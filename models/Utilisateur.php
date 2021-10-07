

<?php


class Utilisateur
{

    private $login;
    private $mdp;
    private $date_naissance;
    private $email;


    public function __construct($_login, $_mdp, $_date_naissance, $_email)
    {

        $this->login = $_login;
        $this->mdp = $_mdp;
        $this->date_naissance = $_date_naissance;
        $this->email = $_email;
    }
}

?>
