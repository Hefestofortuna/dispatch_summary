<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "file".
 *
 * @property int $id
 * @property int $news_id Новость
 * @property string $filename Имя файла
 * @property string $filepath Путь до файла
 *
 * @property News $news
 */
class File extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'file';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['news_id', 'filename', 'filepath'], 'required'],
            [['news_id'], 'default', 'value' => null],
            [['news_id'], 'integer'],
            [['filename', 'filepath'], 'string'],
            [['news_id'], 'exist', 'skipOnError' => true, 'targetClass' => News::className(), 'targetAttribute' => ['news_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'news_id' => 'Новость',
            'filename' => 'Имя файла',
            'filepath' => 'Путь до файла',
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
}
