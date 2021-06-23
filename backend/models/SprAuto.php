<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "spr_auto".
 *
 * @property int $id
 * @property string $brand Марка
 * @property string $number Гос. номер
 * @property int $organization_id Предприятие
 * @property string|null $date_check Дата осмотра
 * @property int $ts_reestr ТИП ТС (по реестру)
 * @property int $ts_class Тип ТС по классификатору
 * @property int $fuel Вид топлива
 *
 * @property AutoList[] $autoLists
 * @property Autotransport[] $autotransports
 * @property Organization $organization
 */
class SprAuto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'spr_auto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['brand', 'number', 'organization_id', 'ts_reestr', 'ts_class', 'fuel'], 'required'],
            [['organization_id', 'ts_reestr', 'ts_class', 'fuel'], 'default', 'value' => null],
            [['organization_id', 'ts_reestr', 'ts_class', 'fuel'], 'integer'],
            [['date_check'], 'safe'],
            [['brand', 'number'], 'string', 'max' => 255],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organization_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'brand' => 'Марка',
            'number' => 'Гос. номер',
            'organization_id' => 'Предприятие',
            'date_check' => 'Дата осмотра',
            'ts_reestr' => 'ТИП ТС (по реестру)',
            'ts_class' => 'Тип ТС по классификатору',
            'fuel' => 'Вид топлива',
        ];
    }

    /**
     * Gets query for [[AutoLists]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAutoLists()
    {
        return $this->hasMany(AutoList::className(), ['auto_id' => 'id']);
    }

    /**
     * Gets query for [[Autotransports]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAutotransports()
    {
        return $this->hasMany(Autotransport::className(), ['auto_id' => 'id']);
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
}
