<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contact".
 *
 * @property int $id
 * @property string $putdate Дата
 * @property string $title Тема сообщения
 * @property string $text Сообщение
 * @property bool $status Состояние
 * @property int $user_id Контактное лицо
 * @property int $organization_id Предприятие
 *
 * @property Organization $organization
 * @property User $user
 */
class Contact extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contact';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['putdate', 'title', 'text', 'user_id', 'organization_id'], 'required'],
            [['putdate'], 'safe'],
            [['status'], 'boolean'],
            [['user_id', 'organization_id'], 'default', 'value' => null],
            [['user_id', 'organization_id'], 'integer'],
            [['title', 'text'], 'string', 'max' => 255],
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
            'title' => 'Тема сообщения',
            'text' => 'Сообщение',
            'status' => 'Состояние',
            'user_id' => 'Контактное лицо',
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
