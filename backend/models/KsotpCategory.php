<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ksotp_category".
 *
 * @property int $id
 * @property string $title Описание несоответствия
 * @property int $parent_id Описание несоответствия
 * @property int $type Описание несоответствия
 * @property int $rating Описание несоответствия
 * @property int $control Контрольный лист
 *
 * @property KsotpCategory $parent
 * @property KsotpCategory[] $ksotpCategories
 */
class KsotpCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ksotp_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['parent_id', 'type', 'rating', 'control'], 'default', 'value' => null],
            [['parent_id', 'type', 'rating', 'control'], 'integer'],
            [['title'], 'string', 'max' => 255],
            [['parent_id'], 'exist', 'skipOnError' => true, 'targetClass' => KsotpCategory::className(), 'targetAttribute' => ['parent_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Описание несоответствия',
            'parent_id' => 'Описание несоответствия',
            'type' => 'Описание несоответствия',
            'rating' => 'Описание несоответствия',
            'control' => 'Контрольный лист',
        ];
    }

    /**
     * Gets query for [[Parent]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(KsotpCategory::className(), ['id' => 'parent_id']);
    }

    /**
     * Gets query for [[KsotpCategories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKsotpCategories()
    {
        return $this->hasMany(KsotpCategory::className(), ['parent_id' => 'id']);
    }
}
