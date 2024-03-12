<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "name".
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property int $age
 */
class Name extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'name';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'age'], 'required'],
            [['age'], 'integer'],
            [['first_name', 'last_name'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'age' => 'Age',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\NameQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\NameQuery(get_called_class());
    }
}
