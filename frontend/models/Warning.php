<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "warning".
 *
 * @property int $id
 * @property int $station_id Станция/перегон
 * @property string $place Место работ (№ пути, км, пк)
 * @property string $description Описание
 * @property string $date_work Дата выполнения работ
 * @property string $time_from Время с (мск)
 * @property string $time_to Время по (мск)
 * @property string|null $date_arm Внесено в АРМ ЛП
 * @property int $user_id Пользователь
 * @property string $time_arm Время внесения (мск)
 * @property int|null $arm_user_id Передал в АРМ ЛП
 * @property int $organization_id Предприятие
 * @property string|null $pub_date Дата создания
 * @property string|null $number Номер пр-ния
 *
 * @property Organization $organization
 * @property Station $station
 * @property User $user
 * @property User $armUser
 */
class Warning extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'warning';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['station_id', 'place', 'description', 'date_work', 'time_from', 'time_to', 'user_id', 'time_arm', 'organization_id'], 'required'],
            [['station_id', 'user_id', 'arm_user_id', 'organization_id'], 'default', 'value' => null],
            [['station_id', 'user_id', 'arm_user_id', 'organization_id'], 'integer'],
            [['date_work', 'time_from', 'time_to', 'date_arm', 'time_arm', 'pub_date'], 'safe'],
            [['place', 'description', 'number'], 'string', 'max' => 255],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organization_id' => 'id']],
            [['station_id'], 'exist', 'skipOnError' => true, 'targetClass' => Station::className(), 'targetAttribute' => ['station_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['arm_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['arm_user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'station_id' => 'Станция/перегон',
            'place' => 'Место работ (№ пути, км, пк)',
            'description' => 'Описание',
            'date_work' => 'Дата выполнения работ',
            'time_from' => 'Время с (мск)',
            'time_to' => 'Время по (мск)',
            'date_arm' => 'Внесено в АРМ ЛП',
            'user_id' => 'Пользователь',
            'time_arm' => 'Время внесения (мск)',
            'arm_user_id' => 'Передал в АРМ ЛП',
            'organization_id' => 'Предприятие',
            'pub_date' => 'Дата создания',
            'number' => 'Номер пр-ния',
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
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * Gets query for [[ArmUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getArmUser()
    {
        return $this->hasOne(User::className(), ['id' => 'arm_user_id']);
    }
}
