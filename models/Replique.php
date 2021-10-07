<?php 
    
    class Replique {

        private $replique;
        private $image;
        private $audio;
        private $fk_emotion;
        private $fk_categorie;
        private $fk_film;


        public function __construct($_replique,$_image,$_audio,$_fk_emotion,$_fk_categorie,$_fk_film)

        {
            $this->replique = $_replique;
            $this->image = $_image;
            $this->audio = $_audio;
            $this->fk_emotion = $_fk_emotion;
            $this->fk_categorie = $_fk_categorie;
            $this->fk_film = $_fk_film;
        }
    }



?>