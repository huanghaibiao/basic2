<?php
namespace app\controllers;
use yii\web\Controller;
class ContactFormController extends Controller{
    public function actionIndex(){
     $model=new \app\models\ContactForm();
     echo $model->getAttributeLabel('name');
    }
}