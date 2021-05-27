<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kasant".
 *
 * @property int $id
 * @property string $putdate Дата
 * @property string $place Место
 * @property string $cause Причина
 * @property string $time_start Время начала
 * @property string $time_finish Время окончания
 * @property string $time_total Продолжительность
 * @property string $service Виновная служба
 * @property string|null $resolution Резолюция
 * @property int|null $count Кол задержанных поезд
 * @property string|null $time_delay Время задержки проездов
 * @property int $user_id Загрузил
 * @property int $organization_id Предприятие
 *
 * @property Organization $organization
 * @property User $user
 */
class Kasant extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kasant';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['putdate', 'place', 'cause', 'time_start', 'time_finish', 'time_total', 'service', 'user_id', 'organization_id'], 'required'],
            [['putdate', 'time_start', 'time_finish', 'time_total', 'time_delay'], 'safe'],
            [['count', 'user_id', 'organization_id'], 'default', 'value' => null],
            [['count', 'user_id', 'organization_id'], 'integer'],
            [['place', 'cause', 'service', 'resolution'], 'string', 'max' => 255],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organization_id' => 'id']],
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
            'place' => 'Место',
            'cause' => 'Причина',
            'time_start' => 'Время начала',
            'time_finish' => 'Время окончания',
            'time_total' => 'Продолжительность',
            'service' => 'Виновная служба',
            'resolution' => 'Резолюция',
            'count' => 'Кол задержанных поезд',
            'time_delay' => 'Время задержки проездов',
            'user_id' => 'Загрузил',
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
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
