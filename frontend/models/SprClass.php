<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "spr_class".
 *
 * @property int $id
 * @property string $cur Значение
 *
 * @property SprSpt[] $sprSpts
 */
class SprClass extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'spr_class';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cur'], 'required'],
            [['cur'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cur' => 'Значение',
        ];
    }

    /**
     * Gets query for [[SprSpts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSprSpts()
    {
        return $this->hasMany(SprSpt::className(), ['spr_class_id' => 'id']);
    }
}
