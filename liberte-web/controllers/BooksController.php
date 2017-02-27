<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models;


class BooksController extends Controller
{

    public $defaultAction = 'index';

    public function actionIndex()
    {
        $this->view->params['class'] = 'page-books light';
        $vm = new \app\models\BookViewModel();

        return $this->render('index', [
            'model' => $vm,
        ]);
    }

    public function actionBook($id = '')
    {
        $this->view->params['class'] = 'books';
        $vm = new \app\models\BookViewModel();
        $bookForView = $vm['Books'][0];

        foreach($vm['Books'] as $book)
        {
            if(strtolower($id) == strtolower($book->id))
            {
                $bookForView = $book;
            }
        }

        return $this->render('book', [
            'model' => $bookForView,
        ]);

    }
}
