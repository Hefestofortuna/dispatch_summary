<?php

namespace frontend\models;

use app\models\User;
use Yii;

/**
 * This is the model class for table "news".
 *
 * @property int $id
 * @property string $title Заголовок
 * @property string $content Содержание
 * @property int $user_id Автор
 * @property string $putdate Дата публикации
 * @property int|null $file_id Файлы
 *
 * @property FileNews[] $fileNews
 * @property File $file
 * @property User $user
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content', 'user_id', 'putdate'], 'required'],
            [['user_id', 'file_id'], 'default', 'value' => null],
            [['user_id', 'file_id'], 'integer'],
            [['putdate'], 'safe'],
            [['title', 'content'], 'string', 'max' => 255],
            [['file_id'], 'exist', 'skipOnError' => true, 'targetClass' => File::className(), 'targetAttribute' => ['file_id' => 'id']],
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
            'title' => 'Заголовок',
            'content' => 'Содержание',
            'user_id' => 'Автор',
            'putdate' => 'Дата публикации',
            'file_id' => 'Файлы',
        ];
    }

    public function beforeSave($insert)
    {
        return parent::beforeSave($insert); // TODO: Change the autogenerated stub
    }

    /**
     * Gets query for [[FileNews]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFileNews()
    {
        return $this->hasMany(FileNews::className(), ['news_id' => 'id']);
    }

    /**
     * Gets query for [[File]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFile()
    {
        return $this->hasOne(File::className(), ['id' => 'file_id']);
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
