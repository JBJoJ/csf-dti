<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "process".
 *
 * @property int $id
 * @property string $name
 */
class Process extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'process';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\ProcessQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\ProcessQuery(get_called_class());
    }
}
