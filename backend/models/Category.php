<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $title Наименование
 * @property int $parent_id Родительская папка
 * @property int $otdel_id Отдел
 * @property int $organization_id Предприятие
 *
 * @property Organization $organization
 * @property Otdel $otdel
 * @property Document[] $documents
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'otdel_id', 'organization_id'], 'required'],
            [['parent_id', 'otdel_id', 'organization_id'], 'default', 'value' => null],
            [['parent_id', 'otdel_id', 'organization_id'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organization_id' => 'id']],
            [['otdel_id'], 'exist', 'skipOnError' => true, 'targetClass' => Otdel::className(), 'targetAttribute' => ['otdel_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Наименование',
            'parent_id' => 'Родительская папка',
            'otdel_id' => 'Отдел',
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
     * Gets query for [[Otdel]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOtdel()
    {
        return $this->hasOne(Otdel::className(), ['id' => 'otdel_id']);
    }

    /**
     * Gets query for [[Documents]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDocuments()
    {
        return $this->hasMany(Document::className(), ['category_id' => 'id']);
    }
}
