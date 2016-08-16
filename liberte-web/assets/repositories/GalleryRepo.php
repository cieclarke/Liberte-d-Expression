<?php

namespace app\assets\repositories;

class GalleryRepo
{
    function __construct()
    {
        $params = \Yii::$app->params;
        $data = $params['data']['Gallery'];
        $galleryTitle = $data['title'];

        $albums = [];

        foreach($data['albums'] as $a)
        {
            
            $images = [];
            
            
            foreach($a['images'] as $i)
            {
                $image = new \app\assets\models\Image($i['title'], $i['description'], $i['urls']);
                array_push($images, $image);
            }
            
            $album = new \app\assets\models\Album($a['title'], $a['description'], $images);
            array_push($albums, $album);
            
        }

        $this->Gallery = new \app\assets\models\Gallery($galleryTitle, $albums);
    }

    public $Gallery;

}