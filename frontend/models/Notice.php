<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "notice".
 *
 * @property int $id
 * @property string $give Кто дал
 * @property string $text Объявление
 * @property int $user_id Пользователь
 * @property string $putdate Дата
 * @property int $subdivision_id Подразделение
 * @property int $organization_id Предприятие
 *
 * @property Organization $organization
 * @property Subdivision $subdivision
 * @property User $user
 */
class Notice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'notice';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['give', 'text', 'user_id', 'putdate', 'subdivision_id', 'organization_id'], 'required'],
            [['user_id', 'subdivision_id', 'organization_id'], 'default', 'value' => null],
            [['user_id', 'subdivision_id', 'organization_id'], 'integer'],
            [['putdate'], 'safe'],
            [['give'], 'string', 'max' => 50],
            [['text'], 'string', 'max' => 255],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organization_id' => 'id']],
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
            'give' => 'Кто дал',
            'text' => 'Объявление',
            'user_id' => 'Пользователь',
            'putdate' => 'Дата',
            'subdivision_id' => 'Подразделение',
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
