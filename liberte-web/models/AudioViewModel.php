<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\assests\repositories;

class AudioViewModel extends Model
{
    
    public $Songs;
    
    function __construct()
    {
        $repo = new \app\assets\repositories\AudioRepo();
        $this->Songs = $repo->Songs;
    }

}
