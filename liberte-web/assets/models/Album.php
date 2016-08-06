<?php

namespace app\assest\models;

class Album
{
    function Album($title, $desription, $images)
    {
        $this->$title = $title;
        $this->$desription = $description;
        $this->$images = $images;
    }
    
    public $title;
    public $description;
    public $images;

   
}
