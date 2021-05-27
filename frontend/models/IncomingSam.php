<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "incoming_sam".
 *
 * @property int $id
 * @property int $docs Заголовок
 * @property string $date Срок устранения
 * @property int $isp_user_id Исполнитель
 * @property string $description Описание
 * @property bool $status Статус
 *
 * @property User $ispUser
 */
class IncomingSam extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'incoming_sam';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['docs', 'date', 'isp_user_id', 'description'], 'required'],
            [['docs', 'isp_user_id'], 'default', 'value' => null],
            [['docs', 'isp_user_id'], 'integer'],
            [['date'], 'safe'],
            [['status'], 'boolean'],
            [['description'], 'string', 'max' => 255],
            [['isp_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['isp_user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'docs' => 'Заголовок',
            'date' => 'Срок устранения',
            'isp_user_id' => 'Исполнитель',
            'description' => 'Описание',
            'status' => 'Статус',
        ];
    }

    /**
     * Gets query for [[IspUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIspUser()
    {
        return $this->hasOne(User::className(), ['id' => 'isp_user_id']);
    }
}
