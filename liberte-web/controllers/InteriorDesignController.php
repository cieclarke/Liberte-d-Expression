<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models;


class InteriorDesignController extends Controller
{

    public $defaultAction = 'index';

    public function actionIndex()
    {
        $this->view->params['class'] = 'page-interior-design light';
        $vm = new \app\models\GalleryViewModel();

        return $this->render('index', [
            'model' => $vm,
        ]);
    }


}
