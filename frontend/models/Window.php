<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "window".
 *
 * @property int $id
 * @property string $putdate Дата
 * @property string $organization Предприятие
 * @property string $work Работа
 * @property string $place Место
 * @property string|null $plan План. время
 * @property string|null $hozed Хоз. ед
 * @property string|null $leader Руководитель
 * @property string|null $spec Особые требования
 * @property string|null $description Примечание
 * @property int|null $transfer_user_id Передано
 * @property int $user_id Пользователь
 *
 * @property User $transferUser
 * @property User $user
 */
class Window extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'window';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['putdate', 'organization', 'work', 'place', 'user_id'], 'required'],
            [['putdate'], 'safe'],
            [['transfer_user_id', 'user_id'], 'default', 'value' => null],
            [['transfer_user_id', 'user_id'], 'integer'],
            [['organization', 'work', 'place', 'plan', 'hozed', 'leader', 'spec', 'description'], 'string', 'max' => 255],
            [['transfer_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['transfer_user_id' => 'id']],
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
            'organization' => 'Предприятие',
            'work' => 'Работа',
            'place' => 'Место',
            'plan' => 'План. время',
            'hozed' => 'Хоз. ед',
            'leader' => 'Руководитель',
            'spec' => 'Особые требования',
            'description' => 'Примечание',
            'transfer_user_id' => 'Передано',
            'user_id' => 'Пользователь',
        ];
    }

    /**
     * Gets query for [[TransferUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransferUser()
    {
        return $this->hasOne(User::className(), ['id' => 'transfer_user_id']);
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
