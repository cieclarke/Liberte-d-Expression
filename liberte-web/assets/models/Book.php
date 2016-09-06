<?php

namespace app\assets\models;


class Book
{
    function __construct($title, $description, $types)
    {
        $this->title = $title;
        $this->description = $description;
        $this->types = $types;
    }
    
    public $title;
    public $description;
    public $types;

   
}