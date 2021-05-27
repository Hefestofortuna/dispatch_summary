<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kip".
 *
 * @property int $id
 * @property string $putdate Дата
 * @property int $station_id Станция
 * @property int $plan Количество приборов (план)
 * @property int $user_id Пользователь
 * @property int $count_sent Пользователь
 * @property int $count_install Пользователь
 * @property int $organization_id Предприятие
 * @property int|null $date_install Дата установки
 * @property int|null $date_ship Дата отгрузки
 * @property int|null $subdivision_id Подразделение
 * @property string|null $description Примечание
 *
 * @property Organization $organization
 * @property Station $station
 * @property Subdivision $subdivision
 * @property User $user
 */
class Kip extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kip';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['putdate', 'station_id', 'user_id', 'organization_id'], 'required'],
            [['putdate'], 'safe'],
            [['station_id', 'plan', 'user_id', 'count_sent', 'count_install', 'organization_id', 'date_install', 'date_ship', 'subdivision_id'], 'default', 'value' => null],
            [['station_id', 'plan', 'user_id', 'count_sent', 'count_install', 'organization_id', 'date_install', 'date_ship', 'subdivision_id'], 'integer'],
            [['description'], 'string', 'max' => 255],
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
            'putdate' => 'Дата',
            'station_id' => 'Станция',
            'plan' => 'Количество приборов (план)',
            'user_id' => 'Пользователь',
            'count_sent' => 'Пользователь',
            'count_install' => 'Пользователь',
            'organization_id' => 'Предприятие',
            'date_install' => 'Дата установки',
            'date_ship' => 'Дата отгрузки',
            'subdivision_id' => 'Подразделение',
            'description' => 'Примечание',
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
