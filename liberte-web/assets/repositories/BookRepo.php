<?php

namespace app\assets\repositories;

class BookRepo
{
    function __construct()
    {
        $params = \Yii::$app->params;
        $data = $params['data']['Books'];

        $books = [];

        foreach($data as $b)
        {
            
           $book  = new \app\assets\models\Book($b['title'], $b['description'], $b['urls']);
            
           
            array_push($books, $book);
            
        }

       $this->Books = $books;
    }

    public $Books;

}