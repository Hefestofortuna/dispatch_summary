<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "station_subdivision".
 *
 * @property int $station_id Станция
 * @property int $subdivision_id Подразделение
 *
 * @property Station $station
 * @property Subdivision $subdivision
 */
class StationSubdivision extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'station_subdivision';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['station_id', 'subdivision_id'], 'required'],
            [['station_id', 'subdivision_id'], 'default', 'value' => null],
            [['station_id', 'subdivision_id'], 'integer'],
            [['station_id', 'subdivision_id'], 'unique', 'targetAttribute' => ['station_id', 'subdivision_id']],
            [['station_id'], 'exist', 'skipOnError' => true, 'targetClass' => Station::className(), 'targetAttribute' => ['station_id' => 'id']],
            [['subdivision_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subdivision::className(), 'targetAttribute' => ['subdivision_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'station_id' => 'Станция',
            'subdivision_id' => 'Подразделение',
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

    /**
     * Gets query for [[Subdivision]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubdivision()
    {
        return $this->hasOne(Subdivision::className(), ['id' => 'subdivision_id']);
    }
}
