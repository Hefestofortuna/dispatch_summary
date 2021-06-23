<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "spr_balance".
 *
 * @property int $id
 * @property string $title Балансовая принадлежность
 *
 * @property SprSpt[] $sprSpts
 */
class SprBalance extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'spr_balance';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
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
            'title' => 'Балансовая принадлежность',
        ];
    }

    /**
     * Gets query for [[SprSpts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSprSpts()
    {
        return $this->hasMany(SprSpt::className(), ['spr_balance_id' => 'id']);
    }
}
