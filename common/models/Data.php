<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "data".
 *
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 */
class Data extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'data';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'middle_name', 'last_name'], 'required'],
            [['first_name', 'middle_name', 'last_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\DataQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\DataQuery(get_called_class());
    }
}
