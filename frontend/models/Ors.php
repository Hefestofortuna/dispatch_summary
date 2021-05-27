<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ors".
 *
 * @property int $id
 * @property int $station_id Станция/Перегон
 * @property int $sum_main_pch Кол-во ПЧ (осн)
 * @property int $sum_main_shch Кол-во ШЧ (осн)
 * @property int $sum_main Всего (осн)
 * @property string $putdate Дата
 * @property int $sum_minor_pch Кол-во ПЧ (дуб)
 * @property int $sum_minor_shch Кол-во ШЧ (дуб)
 * @property int $sum_minor Всего (дуб)
 * @property int|null $subdivision_id Подразделение
 * @property string|null $description Примечание
 *
 * @property Station $station
 * @property Subdivision $subdivision
 */
class Ors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['station_id', 'putdate'], 'required'],
            [['station_id', 'sum_main_pch', 'sum_main_shch', 'sum_main', 'sum_minor_pch', 'sum_minor_shch', 'sum_minor', 'subdivision_id'], 'default', 'value' => null],
            [['station_id', 'sum_main_pch', 'sum_main_shch', 'sum_main', 'sum_minor_pch', 'sum_minor_shch', 'sum_minor', 'subdivision_id'], 'integer'],
            [['putdate'], 'safe'],
            [['description'], 'string', 'max' => 255],
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
            'id' => 'ID',
            'station_id' => 'Станция/Перегон',
            'sum_main_pch' => 'Кол-во ПЧ (осн)',
            'sum_main_shch' => 'Кол-во ШЧ (осн)',
            'sum_main' => 'Всего (осн)',
            'putdate' => 'Дата',
            'sum_minor_pch' => 'Кол-во ПЧ (дуб)',
            'sum_minor_shch' => 'Кол-во ШЧ (дуб)',
            'sum_minor' => 'Всего (дуб)',
            'subdivision_id' => 'Подразделение',
            'description' => 'Примечание',
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
