<?php


use app\assets\models;

namespace app\assets\repositories;

class GalleryRepo
{
    function __construct()
    {
        $params = \Yii::$app->params;
        $this->Gallery = $params['data']; /*"data";*/
    } 

    public $Gallery;

}   