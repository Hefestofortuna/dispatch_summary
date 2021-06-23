<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "oper_rasp_file".
 *
 * @property int $id
 * @property int $oper_rasp_isp_id Исполнитель
 * @property string $file Файл
 * @property string $putdate Дата публикации
 *
 * @property OperRaspIsp $operRaspIsp
 */
class OperRaspFile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oper_rasp_file';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['oper_rasp_isp_id', 'file', 'putdate'], 'required'],
            [['oper_rasp_isp_id'], 'default', 'value' => null],
            [['oper_rasp_isp_id'], 'integer'],
            [['putdate'], 'safe'],
            [['file'], 'string', 'max' => 256],
            [['oper_rasp_isp_id'], 'exist', 'skipOnError' => true, 'targetClass' => OperRaspIsp::className(), 'targetAttribute' => ['oper_rasp_isp_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'oper_rasp_isp_id' => 'Исполнитель',
            'file' => 'Файл',
            'putdate' => 'Дата публикации',
        ];
    }

    /**
     * Gets query for [[OperRaspIsp]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperRaspIsp()
    {
        return $this->hasOne(OperRaspIsp::className(), ['id' => 'oper_rasp_isp_id']);
    }
}
