<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "file".
 *
 * @property int $id
 * @property int $news_id Новость
 * @property string $filename Имя файла
 * @property string $filepath Путь до файла
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
            [['filename'], 'file','maxFiles'=>10],
            [['filepath'], 'string'],
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
}
