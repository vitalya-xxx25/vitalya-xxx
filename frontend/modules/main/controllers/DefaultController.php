<?php

namespace app\modules\main\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex(){
        $this->layout       = "bootstrap";
        $sections           = \Yii::$app->params['sections'];
        $sectionsByParts    = array_chunk($sections, 4, TRUE);
        
        return $this->render('index', [
            'sections' => $sectionsByParts,
        ]);
    }
}
