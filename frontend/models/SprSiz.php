<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "spr_siz".
 *
 * @property int $id
 * @property string $title Наименование СИЗ
 * @property int $time Периодичность испытания (мес)
 */
class SprSiz extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'spr_siz';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'time'], 'required'],
            [['time'], 'default', 'value' => null],
            [['time'], 'integer'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Наименование СИЗ',
            'time' => 'Периодичность испытания (мес)',
        ];
    }
}
