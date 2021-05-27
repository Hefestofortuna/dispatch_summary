<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "planer".
 *
 * @property int $id
 * @property string $putdate Дата
 * @property string $test Содержание
 * @property string $leader Руководитель
 * @property string $date_create Дата создания
 */
class Planer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'planer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['putdate', 'test', 'leader', 'date_create'], 'required'],
            [['putdate', 'date_create'], 'safe'],
            [['test', 'leader'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'putdate' => 'Дата',
            'test' => 'Содержание',
            'leader' => 'Руководитель',
            'date_create' => 'Дата создания',
        ];
    }
}
