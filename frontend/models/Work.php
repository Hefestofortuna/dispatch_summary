<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "work".
 *
 * @property int $id
 * @property string $code Шифр
 * @property string $doc Инструкция
 * @property string $tkarta Раздел/Пункт
 * @property string $text Наименование работ
 * @property string $period Период
 * @property string|null $type Вид
 * @property int $category Категория
 * @property int $organization_id Предприятие
 *
 * @property Organization $organization
 */
class Work extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'work';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'doc', 'tkarta', 'text', 'period', 'category', 'organization_id'], 'required'],
            [['category', 'organization_id'], 'default', 'value' => null],
            [['category', 'organization_id'], 'integer'],
            [['code', 'doc', 'tkarta', 'text', 'period', 'type'], 'string', 'max' => 255],
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
            'code' => 'Шифр',
            'doc' => 'Инструкция',
            'tkarta' => 'Раздел/Пункт',
            'text' => 'Наименование работ',
            'period' => 'Период',
            'type' => 'Вид',
            'category' => 'Категория',
            'organization_id' => 'Предприятие',
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
