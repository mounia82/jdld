<?php 
   class Categorie {

    private $amis ;
    private $famille;
    private $couple;
    private $boss;
    private $autre;


    public function __construct($_amis, $_famille, $_couple, $_boss, $_autre) {

        $this->amis = $_amis;
        $this->famille = $_famille;
        $this->couple = $_couple;
        $this->boss = $_boss;
        $this->boss = $_autre;

    }
   }
   
   



?>