<?php

class Replique
{

    private $idReplique;
    private $replique;
    private $image;
    private $audio;



    public function __construct($_idReplique, $_replique, $_image, $_audio)

    {
        $this->idReplique = $_idReplique;
        $this->replique = $_replique;
        $this->image = $_image;
        $this->audio = $_audio;
    }

    /////////////////////SET//////////////////

    public function setIdReplique($_idReplique)
    {
        $this->idReplique = $_idReplique;
    }

    public function setReplique($_replique)
    {
        $this->replique = $_replique;
    }

    public function setImage($_image)
    {
        $this->image = $_image;
    }

    public function setAudio($_audio)
    {
        $this->audio = $_audio;
    }
    ////////////////GET/////////////////////

    public function getIdReplique()
    {
        return $this->idReplique;
    }

    public function getReplique()
    {
        return $this->replique;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getAudio()
    {
        return $this->audio;
    }
}
