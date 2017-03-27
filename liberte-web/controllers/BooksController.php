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

    public function actionIndex($id = '')
    {
        $this->view->params['class'] = 'page-books light';
        $this->view->params['script-bgswitcher'] = '';
        $vm = new \app\models\BookViewModel($id);

        return $this->render('index', [
            'model' => $vm,
        ]);
    }
}
