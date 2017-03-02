<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\User2;
class MyUserController extends Controller{
    public $layout = 'myuser';
    public function actionLogin(){
        $model = new User2(['scenario' => 'login']);
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            return $this->render('login-confirm', ['model' => $model]);
        }else{
            return $this->render('login',['model' => $model]);
        }
}
    public function actionRegister(){
        $model = new User2(['scenario' => 'register']);
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
           echo 'ok';
        }else{
            return $this->render('register',['model' => $model,'aa'=>'i is aa']);
        }

    }
}