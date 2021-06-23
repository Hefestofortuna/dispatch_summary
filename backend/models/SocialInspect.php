<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "social_inspect".
 *
 * @property int $id
 * @property string $date_find Дата выявления предотказного состояния
 * @property int $station_id Место предотказного состояния
 * @property string $comment Параметр предотказного состояния
 * @property int $service_id Отвественное предприятие
 * @property int $user_id Выявил на месте
 * @property string $who_give Предеанно
 * @property string $date_last Устранить до
 * @property string|null $date_fix Дата устранения
 * @property string|null $who_control Контроль фактического устранения
 * @property int $organization_id Предприятие
 *
 * @property Organization $organization
 * @property Service $service
 * @property Station $station
 * @property User $user
 */
class SocialInspect extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'social_inspect';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_find', 'station_id', 'comment', 'service_id', 'user_id', 'who_give', 'date_last', 'organization_id'], 'required'],
            [['date_find', 'date_last', 'date_fix'], 'safe'],
            [['station_id', 'service_id', 'user_id', 'organization_id'], 'default', 'value' => null],
            [['station_id', 'service_id', 'user_id', 'organization_id'], 'integer'],
            [['comment', 'who_give', 'who_control'], 'string', 'max' => 255],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organization_id' => 'id']],
            [['service_id'], 'exist', 'skipOnError' => true, 'targetClass' => Service::className(), 'targetAttribute' => ['service_id' => 'id']],
            [['station_id'], 'exist', 'skipOnError' => true, 'targetClass' => Station::className(), 'targetAttribute' => ['station_id' => 'id']],
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
            'date_find' => 'Дата выявления предотказного состояния',
            'station_id' => 'Место предотказного состояния',
            'comment' => 'Параметр предотказного состояния',
            'service_id' => 'Отвественное предприятие',
            'user_id' => 'Выявил на месте',
            'who_give' => 'Предеанно',
            'date_last' => 'Устранить до',
            'date_fix' => 'Дата устранения',
            'who_control' => 'Контроль фактического устранения',
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
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
