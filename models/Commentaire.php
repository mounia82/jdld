<?php 
    class Commentaire {

        private $contenu;
        private $date_com;
        private $heure_com;
        private $fk_utilisateur;
        private $fk_replique;
       
        public function __construct($_contenu,$_date_com,$_heure_com,$_fk_utilisateur,$_fk_replique) {

            $this->contenu=$_contenu;
            $this->date_com=$_date_com;
            $this->heure_com=$_heure_com;
            $this->fk_utilisateur=$_fk_utilisateur;
            $this->fk_replique=$_fk_replique;
        }
    }
?>