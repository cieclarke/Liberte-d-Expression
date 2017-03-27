<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models;


class HomeController extends Controller
{

    public $defaultAction = 'index';

    public function actionIndex()
    {
        $this->view->params['class'] = 'page-home';
        $this->view->params['script-bgswitcher'] = '/scripts/jquery.bgswitcher.js';
        $vm = new \app\models\GalleryViewModel();
        
        return $this->render('index', [
            'model' => $vm,
        ]);
    }

}
