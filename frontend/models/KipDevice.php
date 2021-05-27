<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kip_device".
 *
 * @property int $id
 * @property int|null $station_id Станция
 * @property int $subdivision_id Подразделение
 * @property string $type_si Тип/Марка
 * @property string $num_si Заводской номер
 * @property string $pudate Дата колибровки
 * @property string $name Наименование
 * @property int $organization_id Предприятие
 *
 * @property Organization $organization
 * @property Station $station
 * @property Subdivision $subdivision
 */
class KipDevice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kip_device';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['station_id', 'subdivision_id', 'organization_id'], 'default', 'value' => null],
            [['station_id', 'subdivision_id', 'organization_id'], 'integer'],
            [['subdivision_id', 'type_si', 'num_si', 'pudate', 'name', 'organization_id'], 'required'],
            [['pudate'], 'safe'],
            [['type_si', 'num_si', 'name'], 'string', 'max' => 255],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organization_id' => 'id']],
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
            'station_id' => 'Станция',
            'subdivision_id' => 'Подразделение',
            'type_si' => 'Тип/Марка',
            'num_si' => 'Заводской номер',
            'pudate' => 'Дата колибровки',
            'name' => 'Наименование',
            'organization_id' => 'Предприятие',
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
