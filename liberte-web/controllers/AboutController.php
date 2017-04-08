<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models;


class AboutController extends Controller
{

    public $defaultAction = 'index';

    public function actionIndex()
    {
        // view temporarily disabled by request, 8/4/2017
        $this->redirect(array('/'));

        $this->view->params['class'] = 'page-home-sub';
        $this->view->params['script-bgswitcher'] = '';
        $vm = new \app\models\GalleryViewModel();

        return $this->render('index', [
            'model' => $vm,
        ]);
    }


}
