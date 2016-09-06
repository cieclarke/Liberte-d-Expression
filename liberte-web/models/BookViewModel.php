<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\assests\repositories;

class BookViewModel extends Model
{
    
    public $Books;
    
    function __construct()
    {
        $repo = new \app\assets\repositories\BookRepo();
        $this->Books = $repo->Books;
    }

}
