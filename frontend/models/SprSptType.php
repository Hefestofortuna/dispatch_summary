<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "spr_spt_type".
 *
 * @property int $id
 * @property string|null $title Тип
 *
 * @property SprSpt[] $sprSpts
 */
class SprSptType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'spr_spt_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Тип',
        ];
    }

    /**
     * Gets query for [[SprSpts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSprSpts()
    {
        return $this->hasMany(SprSpt::className(), ['spr_spt_type_id' => 'id']);
    }
}
