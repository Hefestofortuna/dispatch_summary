<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oper_rasp_sam".
 *
 * @property int $id
 * @property int $oper_rasp_id Документ
 * @property string $content Содержание распаряжения
 * @property string $date Срок исполнения
 *
 * @property OperRaspIsp[] $operRaspIsps
 * @property OperRasp $operRasp
 */
class OperRaspSam extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oper_rasp_sam';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['oper_rasp_id', 'content', 'date'], 'required'],
            [['oper_rasp_id'], 'default', 'value' => null],
            [['oper_rasp_id'], 'integer'],
            [['date'], 'safe'],
            [['content'], 'string', 'max' => 512],
            [['oper_rasp_id'], 'exist', 'skipOnError' => true, 'targetClass' => OperRasp::className(), 'targetAttribute' => ['oper_rasp_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'oper_rasp_id' => 'Документ',
            'content' => 'Содержание распаряжения',
            'date' => 'Срок исполнения',
        ];
    }

    /**
     * Gets query for [[OperRaspIsps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperRaspIsps()
    {
        return $this->hasMany(OperRaspIsp::className(), ['oper_rasp_sam_id' => 'id']);
    }

    /**
     * Gets query for [[OperRasp]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperRasp()
    {
        return $this->hasOne(OperRasp::className(), ['id' => 'oper_rasp_id']);
    }
}
