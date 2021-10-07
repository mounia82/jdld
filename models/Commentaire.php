<?php 
    class Commentaire {

        private $contenu;
        private $date_com;
        private $heure_com;
        
       
        public function __construct($_contenu,$_date_com,$_heure_com) {

            $this->contenu=$_contenu;
            $this->date_com=$_date_com;
            $this->heure_com=$_heure_com;
         
        }
    }
?>