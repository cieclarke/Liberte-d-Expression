<?php

namespace app\assets\repositories;

class AudioRepo
{
    function __construct()
    {
        $params = \Yii::$app->params;
        $data = $params['data']['Audio'];

        $songs = [];

        foreach($data as $a)
        {
            
           $audio  = new \app\assets\models\Audio($a['title'], $a['description'], $a['urls']);
            
           
            array_push($songs, $audio);
            
        }

       $this->Songs = $songs;
    }

    public $Songs;

}