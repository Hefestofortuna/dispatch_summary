<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movement".
 *
 * @property int $id
 * @property string $pubdate Дата
 * @property int $subdivision_id Подразделение
 * @property int $user_id Пользователь
 * @property int $status_id Состояние
 * @property string|null $work1 Нахождение работника и выполняемая работа (ДО ОБЕДА)
 * @property string|null $work2 Нахождение работника и выполняемая работа (ПОСЛЕ ОБЕДА)
 * @property bool $duty Дежурство
 * @property int $organization_id Предприятие
 *
 * @property Organization $organization
 * @property Status $status
 * @property Subdivision $subdivision
 * @property User $user
 */
class Movement extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movement';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pubdate', 'subdivision_id', 'user_id', 'status_id', 'duty', 'organization_id'], 'required'],
            [['pubdate'], 'safe'],
            [['subdivision_id', 'user_id', 'status_id', 'organization_id'], 'default', 'value' => null],
            [['subdivision_id', 'user_id', 'status_id', 'organization_id'], 'integer'],
            [['work1', 'work2'], 'string'],
            [['duty'], 'boolean'],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organization_id' => 'id']],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => Status::className(), 'targetAttribute' => ['status_id' => 'id']],
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
            'pubdate' => 'Дата',
            'subdivision_id' => 'Подразделение',
            'user_id' => 'Пользователь',
            'status_id' => 'Состояние',
            'work1' => 'Нахождение работника и выполняемая работа (ДО ОБЕДА)',
            'work2' => 'Нахождение работника и выполняемая работа (ПОСЛЕ ОБЕДА)',
            'duty' => 'Дежурство',
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
     * Gets query for [[Status]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStatus()
    {
        return $this->hasOne(Status::className(), ['id' => 'status_id']);
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
