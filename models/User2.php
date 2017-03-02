<?php
namespace app\models;
use yii\db\ActiveRecord;
class User2 extends ActiveRecord{
    public $username;
    public $password2;
    public $email;
    public function scenarios(){
        return [ 'login' => ['username', 'password2'],
            'register' => ['username', 'email', 'password2']];
    }
    public function rules(){
        return [
         [['username', 'email', 'password2'], 'required'],
         ['email', 'email']
        ];
}
   static public function tableName(){
        return 'country';
   }
}