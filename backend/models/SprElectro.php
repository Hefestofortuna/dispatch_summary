<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "spr_electro".
 *
 * @property int $id
 * @property int $subdivision_id Подразделение
 * @property int $spr_electro_type_id Тип счетчика
 * @property int $spr_electro_obj_id Объект
 * @property int $fider_type Фидер
 * @property string|null $place Место
 * @property string $number Номер
 * @property int $spr_electro_trans_id Трансформатор
 * @property int $organization_id Предприятие
 * @property bool $active Работает
 *
 * @property JournalElectro[] $journalElectros
 * @property Organization $organization
 * @property SprElectroObj $sprElectroObj
 * @property SprElectroTrans $sprElectroTrans
 * @property SprElectroType $sprElectroType
 * @property Subdivision $subdivision
 */
class SprElectro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'spr_electro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subdivision_id', 'spr_electro_type_id', 'spr_electro_obj_id', 'number', 'spr_electro_trans_id', 'organization_id'], 'required'],
            [['subdivision_id', 'spr_electro_type_id', 'spr_electro_obj_id', 'fider_type', 'spr_electro_trans_id', 'organization_id'], 'default', 'value' => null],
            [['subdivision_id', 'spr_electro_type_id', 'spr_electro_obj_id', 'fider_type', 'spr_electro_trans_id', 'organization_id'], 'integer'],
            [['active'], 'boolean'],
            [['place', 'number'], 'string', 'max' => 255],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organization_id' => 'id']],
            [['spr_electro_obj_id'], 'exist', 'skipOnError' => true, 'targetClass' => SprElectroObj::className(), 'targetAttribute' => ['spr_electro_obj_id' => 'id']],
            [['spr_electro_trans_id'], 'exist', 'skipOnError' => true, 'targetClass' => SprElectroTrans::className(), 'targetAttribute' => ['spr_electro_trans_id' => 'id']],
            [['spr_electro_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => SprElectroType::className(), 'targetAttribute' => ['spr_electro_type_id' => 'id']],
            [['subdivision_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subdivision::className(), 'targetAttribute' => ['subdivision_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'subdivision_id' => 'Подразделение',
            'spr_electro_type_id' => 'Тип счетчика',
            'spr_electro_obj_id' => 'Объект',
            'fider_type' => 'Фидер',
            'place' => 'Место',
            'number' => 'Номер',
            'spr_electro_trans_id' => 'Трансформатор',
            'organization_id' => 'Предприятие',
            'active' => 'Работает',
        ];
    }

    /**
     * Gets query for [[JournalElectros]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJournalElectros()
    {
        return $this->hasMany(JournalElectro::className(), ['spr_electro_id' => 'id']);
    }

    /**
     * Gets query for [[Organization]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrganization()
    {
        return $this->hasOne(Organization::className(), ['id' => 'organization_id']);
    }

    /**
     * Gets query for [[SprElectroObj]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSprElectroObj()
    {
        return $this->hasOne(SprElectroObj::className(), ['id' => 'spr_electro_obj_id']);
    }

    /**
     * Gets query for [[SprElectroTrans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSprElectroTrans()
    {
        return $this->hasOne(SprElectroTrans::className(), ['id' => 'spr_electro_trans_id']);
    }

    /**
     * Gets query for [[SprElectroType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSprElectroType()
    {
        return $this->hasOne(SprElectroType::className(), ['id' => 'spr_electro_type_id']);
    }

    /**
     * Gets query for [[Subdivision]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubdivision()
    {
        return $this->hasOne(Subdivision::className(), ['id' => 'subdivision_id']);
    }
}
