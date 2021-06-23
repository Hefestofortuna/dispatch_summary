<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "spr_spt_system".
 *
 * @property int $id
 * @property string|null $title Наименование
 *
 * @property SprSpt[] $sprSpts
 */
class SprSptSystem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'spr_spt_system';
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
            'title' => 'Наименование',
        ];
    }

    /**
     * Gets query for [[SprSpts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSprSpts()
    {
        return $this->hasMany(SprSpt::className(), ['spr_spt_system_id' => 'id']);
    }
}
