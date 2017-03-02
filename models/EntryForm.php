<?php
namespace app\models;
use yii\base\Model;
class EntryForm extends Model{
	public $name2='ddd';
	public $email2='809764744@qq.com';
	public function rules(){
		return [[['name2', 'email2'], 'required'],['email2', 'email']];
	}
	}