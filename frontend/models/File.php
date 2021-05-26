<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "file".
 *
 * @property int $id
 * @property string $title Название
 * @property string $file Документ
 *
 * @property FileNews[] $fileNews
 * @property News[] $news
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
            [['title', 'file'], 'required'],
            [['title', 'file'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Название',
            'file' => 'Документ',
        ];
    }

    /**
     * Gets query for [[FileNews]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFileNews()
    {
        return $this->hasMany(FileNews::className(), ['file_id' => 'id']);
    }

    /**
     * Gets query for [[News]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasMany(News::className(), ['file_id' => 'id']);
    }
}
