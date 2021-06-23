<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "spr_spt".
 *
 * @property int $id
 * @property int $station_id Станция/Перегон
 * @property string $object Объект
 * @property int $spr_spt_system_id Вид
 * @property int $spr_spt_type_id Тип
 * @property int $spr_balance_id Балансовая принадлежность
 * @property int $spr_class_id Класс
 *
 * @property JournalSpt[] $journalSpts
 * @property SprBalance $sprBalance
 * @property SprClass $sprClass
 * @property SprSptSystem $sprSptSystem
 * @property SprSptType $sprSptType
 * @property Station $station
 */
class SprSpt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'spr_spt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['station_id', 'object', 'spr_spt_system_id', 'spr_spt_type_id', 'spr_balance_id', 'spr_class_id'], 'required'],
            [['station_id', 'spr_spt_system_id', 'spr_spt_type_id', 'spr_balance_id', 'spr_class_id'], 'default', 'value' => null],
            [['station_id', 'spr_spt_system_id', 'spr_spt_type_id', 'spr_balance_id', 'spr_class_id'], 'integer'],
            [['object'], 'string', 'max' => 255],
            [['spr_balance_id'], 'exist', 'skipOnError' => true, 'targetClass' => SprBalance::className(), 'targetAttribute' => ['spr_balance_id' => 'id']],
            [['spr_class_id'], 'exist', 'skipOnError' => true, 'targetClass' => SprClass::className(), 'targetAttribute' => ['spr_class_id' => 'id']],
            [['spr_spt_system_id'], 'exist', 'skipOnError' => true, 'targetClass' => SprSptSystem::className(), 'targetAttribute' => ['spr_spt_system_id' => 'id']],
            [['spr_spt_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => SprSptType::className(), 'targetAttribute' => ['spr_spt_type_id' => 'id']],
            [['station_id'], 'exist', 'skipOnError' => true, 'targetClass' => Station::className(), 'targetAttribute' => ['station_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'station_id' => 'Станция/Перегон',
            'object' => 'Объект',
            'spr_spt_system_id' => 'Вид',
            'spr_spt_type_id' => 'Тип',
            'spr_balance_id' => 'Балансовая принадлежность',
            'spr_class_id' => 'Класс',
        ];
    }

    /**
     * Gets query for [[JournalSpts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJournalSpts()
    {
        return $this->hasMany(JournalSpt::className(), ['spr_spt_id' => 'id']);
    }

    /**
     * Gets query for [[SprBalance]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSprBalance()
    {
        return $this->hasOne(SprBalance::className(), ['id' => 'spr_balance_id']);
    }

    /**
     * Gets query for [[SprClass]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSprClass()
    {
        return $this->hasOne(SprClass::className(), ['id' => 'spr_class_id']);
    }

    /**
     * Gets query for [[SprSptSystem]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSprSptSystem()
    {
        return $this->hasOne(SprSptSystem::className(), ['id' => 'spr_spt_system_id']);
    }

    /**
     * Gets query for [[SprSptType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSprSptType()
    {
        return $this->hasOne(SprSptType::className(), ['id' => 'spr_spt_type_id']);
    }

    /**
     * Gets query for [[Station]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStation()
    {
        return $this->hasOne(Station::className(), ['id' => 'station_id']);
    }
}
