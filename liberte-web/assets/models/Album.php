<?php

namespace app\assets\models;

class Album
{
    public $title;
    public $description;
    public $media;

    function __construct($title, $description, $media)
    {
        $this->title = $title;
        $this->description = $description;
        $this->media = $media;
    }
}
