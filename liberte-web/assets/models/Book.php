<?php

namespace app\assets\models;


class Book
{
    function __construct($id, $cat, $title, $description, $types)
    {
        $this->id = $id;
        $this->category = $cat;
        $this->title = $title;
        $this->description = $description;
        $this->types = $types;
    }
    
    public $id;
    public $cat;
    public $title;
    public $description;
    public $types;

   
}