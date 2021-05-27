<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "document".
 *
 * @property int $id
 * @property string $title Название
 * @property string $file Документ
 * @property string $date_upload Дата загрузки
 * @property string|null $date_modify Дата изменения
 * @property bool $isNews Показывать в новостях
 * @property int $user_id Пользователь
 * @property int $category_id Родительская папка
 * @property int $otdel_id Отдел
 * @property int|null $target Назначение
 *
 * @property Category $category
 * @property Otdel $otdel
 * @property User $user
 */
class Document extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'document';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'file', 'date_upload', 'user_id', 'category_id', 'otdel_id'], 'required'],
            [['date_upload', 'date_modify'], 'safe'],
            [['isNews'], 'boolean'],
            [['user_id', 'category_id', 'otdel_id', 'target'], 'default', 'value' => null],
            [['user_id', 'category_id', 'otdel_id', 'target'], 'integer'],
            [['title', 'file'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['otdel_id'], 'exist', 'skipOnError' => true, 'targetClass' => Otdel::className(), 'targetAttribute' => ['otdel_id' => 'id']],
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
            'title' => 'Название',
            'file' => 'Документ',
            'date_upload' => 'Дата загрузки',
            'date_modify' => 'Дата изменения',
            'isNews' => 'Показывать в новостях',
            'user_id' => 'Пользователь',
            'category_id' => 'Родительская папка',
            'otdel_id' => 'Отдел',
            'target' => 'Назначение',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * Gets query for [[Otdel]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOtdel()
    {
        return $this->hasOne(Otdel::className(), ['id' => 'otdel_id']);
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
