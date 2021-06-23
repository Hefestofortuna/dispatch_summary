<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "fail_user".
 *
 * @property int $id
 * @property int $fail_id
 * @property int $user_id
 *
 * @property Fail[] $fails
 * @property Fail $fail
 * @property User $user
 */
class FailUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fail_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fail_id', 'user_id'], 'required'],
            [['fail_id', 'user_id'], 'default', 'value' => null],
            [['fail_id', 'user_id'], 'integer'],
            [['fail_id'], 'exist', 'skipOnError' => true, 'targetClass' => Fail::className(), 'targetAttribute' => ['fail_id' => 'id']],
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
            'fail_id' => 'Fail ID',
            'user_id' => 'User ID',
        ];
    }

    /**
     * Gets query for [[Fails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFails()
    {
        return $this->hasMany(Fail::className(), ['fail_user_id' => 'id']);
    }

    /**
     * Gets query for [[Fail]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFail()
    {
        return $this->hasOne(Fail::className(), ['id' => 'fail_id']);
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
