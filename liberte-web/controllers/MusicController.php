<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models;


class MusicController extends Controller
{

    public $defaultAction = 'index';

    public function actionIndex($songId = '')
    {
        $this->view->params['class'] = 'page-music';
        $this->view->params['script-bgswitcher'] = '';
        $vm = new \app\models\AudioViewModel($songId);
        
        return $this->render('index', [
            'model' => $vm,
        ]);
    }
}