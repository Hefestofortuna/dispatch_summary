<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "msu".
 *
 * @property int $id
 * @property string $date_setup Дата установки
 * @property int $switch Стрелка
 * @property int $power_supply Источник питания
 * @property int $msu_num № двигателя ЭМСУ
 * @property int $msu_year Год выпуска двигателя ЭМСУ
 * @property float $msu_perevod_plus U МСП (+),В
 * @property float $msu_perevod_min U МСП (-),В
 * @property float $msu_friction_plus U фрикция МСП (+), В
 * @property float $msu_friction_min U фрикция МСП (-), В
 * @property float $emsu_perevod_plus U ЭМСУ-СП (+), В
 * @property float $emsu_perevod_min U ЭМСУ-СП (-), В
 * @property float $emsu_friction_plus U фрикция ЭМСУ-СП (+), В
 * @property float $emsu_friction_min U фрикция ЭМСУ-СП (-), В
 * @property int $emsu_usilie_friction_plus Усилие фрикция ЭМСУ-СП(+), кгс
 * @property int $emsu_usilie_friction_min Усилие фрикция ЭМСУ-СП(-), кгс
 * @property int $organization_id Предприятие
 * @property int $station_id Станция
 * @property int $subdivision_id Подразделение
 * @property int $user_id Пользователь
 * @property string $date_create Дата создания
 *
 * @property Organization $organization
 * @property Station $station
 * @property Subdivision $subdivision
 * @property User $user
 */
class Msu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'msu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_setup', 'switch', 'msu_num', 'msu_year', 'msu_perevod_plus', 'msu_perevod_min', 'msu_friction_plus', 'msu_friction_min', 'emsu_perevod_plus', 'emsu_perevod_min', 'emsu_friction_plus', 'emsu_friction_min', 'emsu_usilie_friction_plus', 'emsu_usilie_friction_min', 'organization_id', 'station_id', 'subdivision_id', 'user_id', 'date_create'], 'required'],
            [['date_setup', 'date_create'], 'safe'],
            [['switch', 'power_supply', 'msu_num', 'msu_year', 'emsu_usilie_friction_plus', 'emsu_usilie_friction_min', 'organization_id', 'station_id', 'subdivision_id', 'user_id'], 'default', 'value' => null],
            [['switch', 'power_supply', 'msu_num', 'msu_year', 'emsu_usilie_friction_plus', 'emsu_usilie_friction_min', 'organization_id', 'station_id', 'subdivision_id', 'user_id'], 'integer'],
            [['msu_perevod_plus', 'msu_perevod_min', 'msu_friction_plus', 'msu_friction_min', 'emsu_perevod_plus', 'emsu_perevod_min', 'emsu_friction_plus', 'emsu_friction_min'], 'number'],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organization_id' => 'id']],
            [['station_id'], 'exist', 'skipOnError' => true, 'targetClass' => Station::className(), 'targetAttribute' => ['station_id' => 'id']],
            [['subdivision_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subdivision::className(), 'targetAttribute' => ['subdivision_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date_setup' => 'Дата установки',
            'switch' => 'Стрелка',
            'power_supply' => 'Источник питания',
            'msu_num' => '№ двигателя ЭМСУ',
            'msu_year' => 'Год выпуска двигателя ЭМСУ',
            'msu_perevod_plus' => 'U МСП (+),В',
            'msu_perevod_min' => 'U МСП (-),В',
            'msu_friction_plus' => 'U фрикция МСП (+), В',
            'msu_friction_min' => 'U фрикция МСП (-), В',
            'emsu_perevod_plus' => 'U ЭМСУ-СП (+), В',
            'emsu_perevod_min' => 'U ЭМСУ-СП (-), В',
            'emsu_friction_plus' => 'U фрикция ЭМСУ-СП (+), В',
            'emsu_friction_min' => 'U фрикция ЭМСУ-СП (-), В',
            'emsu_usilie_friction_plus' => 'Усилие фрикция ЭМСУ-СП(+), кгс',
            'emsu_usilie_friction_min' => 'Усилие фрикция ЭМСУ-СП(-), кгс',
            'organization_id' => 'Предприятие',
            'station_id' => 'Станция',
            'subdivision_id' => 'Подразделение',
            'user_id' => 'Пользователь',
            'date_create' => 'Дата создания',
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

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
