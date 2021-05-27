<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "auto_service".
 *
 * @property int $id
 * @property string $title Наименование
 * @property int|null $period_odometr Периодичность по одометру
 * @property int|null $period_date Периодичность по дате
 */
class AutoService extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'auto_service';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['period_odometr', 'period_date'], 'default', 'value' => null],
            [['period_odometr', 'period_date'], 'integer'],
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
            'title' => 'Наименование',
            'period_odometr' => 'Периодичность по одометру',
            'period_date' => 'Периодичность по дате',
        ];
    }
}
