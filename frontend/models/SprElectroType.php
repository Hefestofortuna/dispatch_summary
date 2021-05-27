<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "spr_electro_type".
 *
 * @property int $id
 * @property string $title Тип счетчика
 *
 * @property SprElectro[] $sprElectros
 */
class SprElectroType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'spr_electro_type';
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
            'title' => 'Тип счетчика',
        ];
    }

    /**
     * Gets query for [[SprElectros]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSprElectros()
    {
        return $this->hasMany(SprElectro::className(), ['spr_electro_type_id' => 'id']);
    }
}
