<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models;


class PaintingsController extends Controller
{

    public $defaultAction = 'index';

    public function actionIndex()
    {
        $this->view->params['class'] = 'page-paintings';
        $this->view->params['script-bgswitcher'] = '';
        $vm = new \app\models\GalleryViewModel();

        return $this->render('index', [
            'model' => $vm,
        ]);
    }


}
