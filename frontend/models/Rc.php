<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rc".
 *
 * @property int $id
 * @property string $title Рельсовая цепь
 * @property int $station_id Станция/Перегон
 *
 * @property Station $station
 */
class Rc extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rc';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'station_id'], 'required'],
            [['station_id'], 'default', 'value' => null],
            [['station_id'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['station_id'], 'exist', 'skipOnError' => true, 'targetClass' => Station::className(), 'targetAttribute' => ['station_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Рельсовая цепь',
            'station_id' => 'Станция/Перегон',
        ];
    }

    /**
     * Gets query for [[Station]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStation()
    {
        return $this->hasOne(Station::className(), ['id' => 'station_id']);
    }
}
