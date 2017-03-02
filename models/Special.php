<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%special}}".
 *
 * @property string $id
 * @property string $name
 * @property string $sort
 */
class Special extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%special}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'sort'], 'required'],
            [['id', 'sort'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'sort' => 'Sort',
        ];
    }
}
