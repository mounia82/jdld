<?php 
    class Film {
        
        private $idFilm;
        private $titre;
        private $date_film;

        public function __construct ($_idFilm,$_titre,$_date_film)

         {
             $this->titre = $_titre;
             $this->date_film = $_date_film;
             $this->idFilm = $_idFilm;
         }




         //////////////////SET///////////////////////

         public function setIdFilm($_idFilm)
         {
             $this->idFilm = $_idFilm;
         }

         public function setTitre($_titre)
         {
             $this->titre = $_titre;
         }
     
         public function setDateFilm($_date_film)
         {
             $this->date_film = $_date_film;
         }


         ////////////////////GET//////////////////

         public function getIdFilm()
         {
             return $this->idFilm;
         }


         public function getTitre()
         {
             return $this->titre;
         }
     
         public function getDateFilm()
         {
             return $this->date_film;
         }

    }
