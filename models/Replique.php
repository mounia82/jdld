<?php 
    
    class Replique {

        private $replique;
        private $image;
        private $audio;
      


        public function __construct($_replique,$_image,$_audio)

        {
            $this->replique = $_replique;
            $this->image = $_image;
            $this->audio = $_audio;
           
        }
    }



?>