<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sam_from".
 *
 * @property int $id
 * @property string $title Название
 *
 * @property Sam[] $sams
 */
class SamFrom extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sam_from';
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
            'title' => 'Название',
        ];
    }

    /**
     * Gets query for [[Sams]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSams()
    {
        return $this->hasMany(Sam::className(), ['sam_from_id' => 'id']);
    }
}
