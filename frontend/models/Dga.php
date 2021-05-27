<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dga".
 *
 * @property int $id
 * @property string $putdate Дата
 * @property string $time_on Вкл
 * @property string $time_off Откл
 * @property int $kol Количество топлива
 * @property int $station_id Станция
 * @property int $user_id Передал
 * @property int $underPressure Проверка с нагрузкой
 * @property int $organization_id Предприятие
 * @property string $description Примечание
 * @property int $moto Моточасы
 *
 * @property Organization $organization
 */
class Dga extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dga';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['putdate', 'time_on', 'time_off', 'kol', 'station_id', 'user_id', 'underPressure', 'organization_id', 'description', 'moto'], 'required'],
            [['putdate', 'time_on', 'time_off'], 'safe'],
            [['kol', 'station_id', 'user_id', 'underPressure', 'organization_id', 'moto'], 'default', 'value' => null],
            [['kol', 'station_id', 'user_id', 'underPressure', 'organization_id', 'moto'], 'integer'],
            [['description'], 'string', 'max' => 255],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organization_id' => 'id']],
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
            'time_on' => 'Вкл',
            'time_off' => 'Откл',
            'kol' => 'Количество топлива',
            'station_id' => 'Станция',
            'user_id' => 'Передал',
            'underPressure' => 'Проверка с нагрузкой',
            'organization_id' => 'Предприятие',
            'description' => 'Примечание',
            'moto' => 'Моточасы',
        ];
    }

    /**
     * Gets query for [[Organization]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrganization()
    {
        return $this->hasOne(Organization::className(), ['id' => 'organization_id']);
    }
}
