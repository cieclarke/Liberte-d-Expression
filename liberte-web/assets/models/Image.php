<?php

namespace app\assest\models;


class Image
{
    function Gallery($title, $desription, $paths)
    {
        $this->$title = $title;
        $this->$desription = $description;
        $this->$path = $path;
    }
    
    public $title;
    public $description;
    public $paths;

   
}
