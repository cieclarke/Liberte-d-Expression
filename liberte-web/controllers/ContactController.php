<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models;


class ContactController extends Controller
{

    public $defaultAction = 'index';

    public function actionIndex()
    {
        $this->view->params['class'] = 'page-home-sub';
        $this->view->params['script-bgswitcher'] = '';
        $model = new \app\models\ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('index', [
            'model' => $model,
        ]);
    }


}
