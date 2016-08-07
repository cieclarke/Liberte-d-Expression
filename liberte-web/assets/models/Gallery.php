<?php

namespace app\assets\models;

class Gallery
{
    public $title;
    public $albums;

    function __construct($title, $albums)
    {
        $this->title = $title;
        $this->albums = $albums;
    }
}
