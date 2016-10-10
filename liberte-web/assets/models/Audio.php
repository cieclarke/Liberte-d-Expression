<?php

namespace app\assets\models;


class Audio
{
    function __construct($id, $title, $description, $types)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->types = $types;
    }
    
    public $id;
    public $title;
    public $description;
    public $types;

   
}