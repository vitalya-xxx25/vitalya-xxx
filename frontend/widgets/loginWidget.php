<?php

namespace frontend\widgets;

use common\models\LoginForm;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Widget;
use yii\web\Response;

class LoginWidget extends Widget{

    public function run(){
        $model = new LoginForm();

        if($model->load(\Yii::$app->request->post()) && $model->login()){
            $controller = \Yii::$app->controller;
            $controller->goBack();
        }

        return $this->render("login", ['model' => $model]);
    }
}
