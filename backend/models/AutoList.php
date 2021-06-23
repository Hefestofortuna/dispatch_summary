<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "auto_list".
 *
 * @property int $id
 * @property int $organization_id Предприятие
 * @property string $putdate Дата
 * @property int $auto_id Автотранспорт
 * @property int $user_id Регистратор
 * @property int $hour Часы
 * @property int $mileage Пробег
 * @property float $consumption_liter Расход топлива в л.
 * @property float $kiloton Расход топлива в л.
 * @property float $consumption_ton Расход топлива в т.
 *
 * @property Organization $organization
 * @property SprAuto $auto
 * @property User $user
 */
class AutoList extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'auto_list';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['organization_id', 'putdate', 'auto_id', 'user_id', 'hour', 'mileage', 'consumption_liter', 'kiloton', 'consumption_ton'], 'required'],
            [['organization_id', 'auto_id', 'user_id', 'hour', 'mileage'], 'default', 'value' => null],
            [['organization_id', 'auto_id', 'user_id', 'hour', 'mileage'], 'integer'],
            [['putdate'], 'safe'],
            [['consumption_liter', 'kiloton', 'consumption_ton'], 'number'],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organization_id' => 'id']],
            [['auto_id'], 'exist', 'skipOnError' => true, 'targetClass' => SprAuto::className(), 'targetAttribute' => ['auto_id' => 'id']],
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
            'organization_id' => 'Предприятие',
            'putdate' => 'Дата',
            'auto_id' => 'Автотранспорт',
            'user_id' => 'Регистратор',
            'hour' => 'Часы',
            'mileage' => 'Пробег',
            'consumption_liter' => 'Расход топлива в л.',
            'kiloton' => 'Расход топлива в л.',
            'consumption_ton' => 'Расход топлива в т.',
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
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
