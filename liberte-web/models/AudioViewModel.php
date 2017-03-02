<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\assests\repositories;

class AudioViewModel extends Model
{
    
    public $Songs;
    public $SelectedSong;

    function __construct($songid = null)
    {
        $repo = new \app\assets\repositories\AudioRepo();
        $this->Songs = $repo->Songs;
       
        foreach($repo->Songs as $a)
        {
           if(strtolower($a->id) == strtolower($songid))
           {
                $this->SelectedSong = $a;
           }
        }
    }
}