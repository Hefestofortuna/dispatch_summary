<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "fail".
 *
 * @property int $id
 * @property string $putdate Дата
 * @property string $date_start Дата начала
 * @property string $time_start Время начала
 * @property string $date_finish Дата окончания
 * @property string $time_finish Время окончания
 * @property int $service_id Служба
 * @property string $description Причина
 * @property int $subdivision_id Подразделение
 * @property int $user_id Автор
 * @property string $character Характер
 * @property int $station_id Характер
 * @property int|null $fail_user_id Кто расследовал
 * @property int $organization_id Предприятие
 * @property bool $system КАСАНТ
 *
 * @property FailUser $failUser
 * @property Organization $organization
 * @property Service $service
 * @property Station $station
 * @property Subdivision $subdivision
 * @property User $user
 * @property FailUser[] $failUsers
 */
class Fail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['putdate', 'date_start', 'date_finish', 'service_id', 'description', 'subdivision_id', 'user_id', 'character', 'station_id', 'organization_id'], 'required'],
            [['putdate', 'date_start', 'time_start', 'date_finish', 'time_finish'], 'safe'],
            [['service_id', 'subdivision_id', 'user_id', 'station_id', 'fail_user_id', 'organization_id'], 'default', 'value' => null],
            [['service_id', 'subdivision_id', 'user_id', 'station_id', 'fail_user_id', 'organization_id'], 'integer'],
            [['system'], 'boolean'],
            [['description', 'character'], 'string', 'max' => 255],
            [['fail_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => FailUser::className(), 'targetAttribute' => ['fail_user_id' => 'id']],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organization_id' => 'id']],
            [['service_id'], 'exist', 'skipOnError' => true, 'targetClass' => Service::className(), 'targetAttribute' => ['service_id' => 'id']],
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
            'date_start' => 'Дата начала',
            'time_start' => 'Время начала',
            'date_finish' => 'Дата окончания',
            'time_finish' => 'Время окончания',
            'service_id' => 'Служба',
            'description' => 'Причина',
            'subdivision_id' => 'Подразделение',
            'user_id' => 'Автор',
            'character' => 'Характер',
            'station_id' => 'Характер',
            'fail_user_id' => 'Кто расследовал',
            'organization_id' => 'Предприятие',
            'system' => 'КАСАНТ',
        ];
    }

    /**
     * Gets query for [[FailUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFailUser()
    {
        return $this->hasOne(FailUser::className(), ['id' => 'fail_user_id']);
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
     * Gets query for [[Service]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getService()
    {
        return $this->hasOne(Service::className(), ['id' => 'service_id']);
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

    /**
     * Gets query for [[FailUsers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFailUsers()
    {
        return $this->hasMany(FailUser::className(), ['fail_id' => 'id']);
    }
}
