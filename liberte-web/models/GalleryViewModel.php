<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\assests\repositories;

class GalleryViewModel extends Model
{
    
    public $Gallery;
    
    function __construct()
    {
        $repo = new \app\assets\repositories\GalleryRepo();
        $this->Gallery = $repo->Gallery;
    }

    
    
   

}
