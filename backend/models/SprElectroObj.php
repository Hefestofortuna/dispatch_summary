<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "spr_electro_obj".
 *
 * @property int $id
 * @property string $title Объект
 * @property int $organization_id Предприятие
 *
 * @property SprElectro[] $sprElectros
 * @property Organization $organization
 */
class SprElectroObj extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'spr_electro_obj';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'organization_id'], 'required'],
            [['organization_id'], 'default', 'value' => null],
            [['organization_id'], 'integer'],
            [['title'], 'string', 'max' => 255],
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
            'title' => 'Объект',
            'organization_id' => 'Предприятие',
        ];
    }

    /**
     * Gets query for [[SprElectros]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSprElectros()
    {
        return $this->hasMany(SprElectro::className(), ['spr_electro_obj_id' => 'id']);
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
