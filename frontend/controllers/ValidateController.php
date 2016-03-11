<?php
namespace frontend\controllers;

use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use Yii;
use yii\web\Response;
use yii\widgets\ActiveForm;

class ValidateController extends Controller{

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'index' => ['get', 'post'],
                    'subscribe' => ['get', 'post'],
                ],
            ],
        ];
    }

    public function actionIndex(){
        $post = Yii::$app->request->post();
        $model = null;
        
        if (isset($post['LoginForm'])) {
            $model = new \common\models\LoginForm();
        }
        else if (isset($post['Subscribe'])) {
            
        }

        if (!empty($model) && Yii::$app->request->isAjax && $model->load($post)) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ActiveForm::validate($model);
        }
    }
}