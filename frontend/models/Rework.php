<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rework".
 *
 * @property int $id
 * @property string $putdate Дата
 * @property int $user_id Сотрудник
 * @property string $time_start Время (с)
 * @property string $time_finish Время (по)
 * @property float $sum Переработка (часов)
 * @property string $description Примечание
 * @property int $organization_id Предприятие
 *
 * @property Organization $organization
 * @property User $user
 */
class Rework extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rework';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['putdate', 'user_id', 'time_start', 'time_finish', 'sum', 'description', 'organization_id'], 'required'],
            [['putdate', 'time_start', 'time_finish'], 'safe'],
            [['user_id', 'organization_id'], 'default', 'value' => null],
            [['user_id', 'organization_id'], 'integer'],
            [['sum'], 'number'],
            [['description'], 'string', 'max' => 255],
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
            'user_id' => 'Сотрудник',
            'time_start' => 'Время (с)',
            'time_finish' => 'Время (по)',
            'sum' => 'Переработка (часов)',
            'description' => 'Примечание',
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
