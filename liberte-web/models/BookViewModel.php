<?php

namespace app\models;

use Yii;
use yii\base\Model;
use app\assests\repositories;

class BookViewModel extends Model
{
    
    public $Books;
    public $SelectedBook;
    
    function __construct($id)
    {
        $repo = new \app\assets\repositories\BookRepo();
        $this->Books = $repo->Books;

        if($id != null)
        {
            foreach($repo->Books as $book)
            {
                if(strtolower($id) == strtolower($book->id))
                {
                    $this->SelectedBook = $book;
                }
            }
        }
    }

}
