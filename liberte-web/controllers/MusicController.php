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

    public function actionIndex()
    {
        $this->view->params['class'] = 'music';
        $vm = new \app\models\AudioViewModel();

        return $this->render('index', [
            'model' => $vm,
        ]);
    }

}
