<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dga_list".
 *
 * @property int $id
 * @property string $title Марка ДГА
 * @property int $col Неснижаемый запас
 * @property int $organization_id Подразделение
 *
 * @property Organization $organization
 */
class DgaList extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dga_list';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'col', 'organization_id'], 'required'],
            [['col', 'organization_id'], 'default', 'value' => null],
            [['col', 'organization_id'], 'integer'],
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
            'title' => 'Марка ДГА',
            'col' => 'Неснижаемый запас',
            'organization_id' => 'Подразделение',
        ];
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
