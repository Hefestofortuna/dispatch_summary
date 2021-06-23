<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "oper_rasp_work".
 *
 * @property int $id
 * @property int $oper_rasp_id Оперативное распаряжение
 * @property int $oper_rasp_isp_id Оперативное распаряжение
 * @property string $comment Замечание
 * @property string $work Мероприятие
 * @property string|null $date_term Срок устранения
 * @property string|null $date_finish Дата завершения
 */
class OperRaspWork extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oper_rasp_work';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['oper_rasp_id', 'oper_rasp_isp_id', 'comment', 'work'], 'required'],
            [['oper_rasp_id', 'oper_rasp_isp_id'], 'default', 'value' => null],
            [['oper_rasp_id', 'oper_rasp_isp_id'], 'integer'],
            [['date_term', 'date_finish'], 'safe'],
            [['comment', 'work'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'oper_rasp_id' => 'Оперативное распаряжение',
            'oper_rasp_isp_id' => 'Оперативное распаряжение',
            'comment' => 'Замечание',
            'work' => 'Мероприятие',
            'date_term' => 'Срок устранения',
            'date_finish' => 'Дата завершения',
        ];
    }
}
