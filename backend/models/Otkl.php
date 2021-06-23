<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "otkl".
 *
 * @property int $id
 * @property string $putdate Дата отключения
 * @property string $time_from Время с
 * @property string $time_to Время по
 * @property int $station_id Станция/Перегон
 * @property string $description Описание
 * @property string $object Что отключается
 * @property int $transfer_user_id Передано
 * @property int $user_id Пользователь
 * @property int $organization_id Предприятие
 *
 * @property Organization $organization
 * @property Station $station
 * @property User $transferUser
 * @property User $user
 */
class Otkl extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'otkl';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['putdate', 'station_id', 'description', 'object', 'organization_id'], 'required'],
            [['putdate', 'time_from', 'time_to'], 'safe'],
            [['station_id', 'transfer_user_id', 'user_id', 'organization_id'], 'default', 'value' => null],
            [['station_id', 'transfer_user_id', 'user_id', 'organization_id'], 'integer'],
            [['description', 'object'], 'string', 'max' => 255],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organization_id' => 'id']],
            [['station_id'], 'exist', 'skipOnError' => true, 'targetClass' => Station::className(), 'targetAttribute' => ['station_id' => 'id']],
            [['transfer_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['transfer_user_id' => 'id']],
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
            'putdate' => 'Дата отключения',
            'time_from' => 'Время с',
            'time_to' => 'Время по',
            'station_id' => 'Станция/Перегон',
            'description' => 'Описание',
            'object' => 'Что отключается',
            'transfer_user_id' => 'Передано',
            'user_id' => 'Пользователь',
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
     * Gets query for [[TransferUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransferUser()
    {
        return $this->hasOne(User::className(), ['id' => 'transfer_user_id']);
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
