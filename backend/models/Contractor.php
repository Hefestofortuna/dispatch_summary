<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "contractor".
 *
 * @property int $id
 * @property string $title Наименование
 *
 * @property ContractorReestr[] $contractorReestrs
 */
class Contractor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contractor';
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
            'title' => 'Наименование',
        ];
    }

    /**
     * Gets query for [[ContractorReestrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContractorReestrs()
    {
        return $this->hasMany(ContractorReestr::className(), ['contractor_id' => 'id']);
    }
}
