<?php

namespace app\assest\models;

class Gallery
{
    function Gallery($title, $desription, $albums)
    {
        $this->$title = $title;
        $this->$desription = $description;
        $this->$albums = $albums;
    }
    
    public $title;
    public $description;
    public $albums;

   
}
