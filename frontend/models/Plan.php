<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "plan".
 *
 * @property int $id
 * @property string $putdate Дата
 * @property string|null $work Шифр работы
 * @property string|null $station Станция
 * @property string|null $subdivision Бригада
 * @property string|null $expired Просрочено
 * @property int $organization_id Предприятие
 * @property int $work_plan Плановая трудоемкость
 *
 * @property Organization $organization
 */
class Plan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'plan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['putdate', 'organization_id'], 'required'],
            [['putdate'], 'safe'],
            [['organization_id', 'work_plan'], 'default', 'value' => null],
            [['organization_id', 'work_plan'], 'integer'],
            [['work', 'station', 'subdivision', 'expired'], 'string', 'max' => 255],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organization_id' => 'id']],
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
            'work' => 'Шифр работы',
            'station' => 'Станция',
            'subdivision' => 'Бригада',
            'expired' => 'Просрочено',
            'organization_id' => 'Предприятие',
            'work_plan' => 'Плановая трудоемкость',
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
}
