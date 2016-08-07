<?php

namespace app\assets\models;


class Image
{
    function __construct($title, $description, $paths)
    {
        $this->title = $title;
        $this->description = $description;
        $this->paths = $paths;
    }
    
    public $title;
    public $description;
    public $paths;

   
}
