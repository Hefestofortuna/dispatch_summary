<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "spr_electro_trans".
 *
 * @property int $id
 * @property string $title Название
 * @property string $k_tr Коэф. транс.
 *
 * @property SprElectro[] $sprElectros
 */
class SprElectroTrans extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'spr_electro_trans';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'k_tr'], 'required'],
            [['title', 'k_tr'], 'string', 'max' => 255],
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
            'k_tr' => 'Коэф. транс.',
        ];
    }

    /**
     * Gets query for [[SprElectros]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSprElectros()
    {
        return $this->hasMany(SprElectro::className(), ['spr_electro_trans_id' => 'id']);
    }
}
