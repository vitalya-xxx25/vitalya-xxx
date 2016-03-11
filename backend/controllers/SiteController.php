<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['*'],
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
    
    public function actionSetRoles() {
        $role = Yii::$app->authManager->createRole('admin');
        $role->description = 'Админ';
        Yii::$app->authManager->add($role);

        $role = Yii::$app->authManager->createRole('user');
        $role->description = 'Юзер';
        Yii::$app->authManager->add($role);
        echo 'Ok';
    }
    
    /**
        if(Yii::$app->user->can('deleteUser'))
     * 
     */
    public function actionSetPermissions() {
        $permit = Yii::$app->authManager->createPermission('deleteUser');
        $permit->description = 'Право удалять пользователя';
        Yii::$app->authManager->add($permit);
        echo 'Ok';
    }
    
    public function actionInheritanceRoles() {
        $role = Yii::$app->authManager->getRole($name);
        $permit = Yii::$app->authManager->getPermission($permit);
        Yii::$app->authManager->addChild($role, $permit);
        echo 'Ok';
    }
}
