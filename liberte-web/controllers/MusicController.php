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
        $this->view->params['class'] = 'music';
        $vm = new \app\models\AudioViewModel();
        $songForView = $vm['Songs'][0];

        foreach($vm['Songs'] as $song)
        {
            if(strtolower($songId) == strtolower($song->id))
            {
                $songForView = $song;
            }
        }

        return $this->render('index', [
            'model' => $songForView,
        ]);
    }

    private function getSong($songItem)
    {


    }

}