<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oper_rasp_isp".
 *
 * @property int $id
 * @property int $oper_rasp_sam_id Пункт распоряжения
 * @property int $isp_user_id Исполнитель
 * @property string|null $description Примечание
 * @property string|null $date_finish Примечание
 * @property bool $status Отметка о вы выполнении
 * @property int $oper_rasp_id Оперативное распоряжение
 * @property int $percent Примечание
 * @property int|null $agreed_user_id Отметка о выполнении
 *
 * @property OperRaspFile[] $operRaspFiles
 * @property OperRasp $operRasp
 * @property OperRaspSam $operRaspSam
 * @property User $ispUser
 * @property User $agreedUser
 */
class OperRaspIsp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oper_rasp_isp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['oper_rasp_sam_id', 'isp_user_id', 'status', 'oper_rasp_id'], 'required'],
            [['oper_rasp_sam_id', 'isp_user_id', 'oper_rasp_id', 'percent', 'agreed_user_id'], 'default', 'value' => null],
            [['oper_rasp_sam_id', 'isp_user_id', 'oper_rasp_id', 'percent', 'agreed_user_id'], 'integer'],
            [['date_finish'], 'safe'],
            [['status'], 'boolean'],
            [['description'], 'string', 'max' => 255],
            [['oper_rasp_id'], 'exist', 'skipOnError' => true, 'targetClass' => OperRasp::className(), 'targetAttribute' => ['oper_rasp_id' => 'id']],
            [['oper_rasp_sam_id'], 'exist', 'skipOnError' => true, 'targetClass' => OperRaspSam::className(), 'targetAttribute' => ['oper_rasp_sam_id' => 'id']],
            [['isp_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['isp_user_id' => 'id']],
            [['agreed_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['agreed_user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'oper_rasp_sam_id' => 'Пункт распоряжения',
            'isp_user_id' => 'Исполнитель',
            'description' => 'Примечание',
            'date_finish' => 'Примечание',
            'status' => 'Отметка о вы выполнении',
            'oper_rasp_id' => 'Оперативное распоряжение',
            'percent' => 'Примечание',
            'agreed_user_id' => 'Отметка о выполнении',
        ];
    }

    /**
     * Gets query for [[OperRaspFiles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperRaspFiles()
    {
        return $this->hasMany(OperRaspFile::className(), ['oper_rasp_isp_id' => 'id']);
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

    /**
     * Gets query for [[OperRaspSam]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperRaspSam()
    {
        return $this->hasOne(OperRaspSam::className(), ['id' => 'oper_rasp_sam_id']);
    }

    /**
     * Gets query for [[IspUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIspUser()
    {
        return $this->hasOne(User::className(), ['id' => 'isp_user_id']);
    }

    /**
     * Gets query for [[AgreedUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAgreedUser()
    {
        return $this->hasOne(User::className(), ['id' => 'agreed_user_id']);
    }
}
