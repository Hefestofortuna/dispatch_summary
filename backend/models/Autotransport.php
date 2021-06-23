<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "autotransport".
 *
 * @property int $id
 * @property string $date Дата
 * @property int|null $subdivision_id Подразделение
 * @property string $target Цель поездки
 * @property int $contact_user_id Кому
 * @property int $user_id Пользователь
 * @property int|null $auto_id Автотранспорт
 * @property int|null $driver_user_id Водитель
 * @property string|null $time_arrival Время прибытия
 * @property string|null $time_departure Время отправления
 * @property int|null $odometr Время отправления
 * @property bool $status Одометр
 * @property int $organization_id Согласовано
 *
 * @property Organization $organization
 * @property SprAuto $auto
 * @property Subdivision $subdivision
 * @property User $contactUser
 * @property User $user
 * @property User $driverUser
 */
class Autotransport extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'autotransport';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'target', 'contact_user_id', 'user_id', 'status', 'organization_id'], 'required'],
            [['date', 'time_arrival', 'time_departure'], 'safe'],
            [['subdivision_id', 'contact_user_id', 'user_id', 'auto_id', 'driver_user_id', 'odometr', 'organization_id'], 'default', 'value' => null],
            [['subdivision_id', 'contact_user_id', 'user_id', 'auto_id', 'driver_user_id', 'odometr', 'organization_id'], 'integer'],
            [['status'], 'boolean'],
            [['target'], 'string', 'max' => 255],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organization_id' => 'id']],
            [['auto_id'], 'exist', 'skipOnError' => true, 'targetClass' => SprAuto::className(), 'targetAttribute' => ['auto_id' => 'id']],
            [['subdivision_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subdivision::className(), 'targetAttribute' => ['subdivision_id' => 'id']],
            [['contact_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['contact_user_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['driver_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['driver_user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date' => 'Дата',
            'subdivision_id' => 'Подразделение',
            'target' => 'Цель поездки',
            'contact_user_id' => 'Кому',
            'user_id' => 'Пользователь',
            'auto_id' => 'Автотранспорт',
            'driver_user_id' => 'Водитель',
            'time_arrival' => 'Время прибытия',
            'time_departure' => 'Время отправления',
            'odometr' => 'Время отправления',
            'status' => 'Одометр',
            'organization_id' => 'Согласовано',
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
     * Gets query for [[Auto]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuto()
    {
        return $this->hasOne(SprAuto::className(), ['id' => 'auto_id']);
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
     * Gets query for [[ContactUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContactUser()
    {
        return $this->hasOne(User::className(), ['id' => 'contact_user_id']);
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

    /**
     * Gets query for [[DriverUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDriverUser()
    {
        return $this->hasOne(User::className(), ['id' => 'driver_user_id']);
    }
}
