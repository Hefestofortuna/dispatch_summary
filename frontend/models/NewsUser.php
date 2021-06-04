<?php

namespace frontend\models;

use app\models\User;
use Yii;

/**
 * This is the model class for table "news_user".
 *
 * @property int $news_id Новость
 * @property int $user_id Пользователь
 *
 * @property News $news
 * @property Ur $user
 */
class NewsUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['news_id', 'user_id'], 'required'],
            [['news_id', 'user_id'], 'default', 'value' => null],
            [['news_id', 'user_id'], 'integer'],
            [['news_id', 'user_id'], 'unique', 'targetAttribute' => ['news_id', 'user_id']],
            [['news_id'], 'exist', 'skipOnError' => true, 'targetClass' => News::className(), 'targetAttribute' => ['news_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'news_id' => 'Новость',
            'user_id' => 'Пользователь',
        ];
    }

    /**
     * Gets query for [[News]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasOne(News::className(), ['id' => 'news_id']);
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
