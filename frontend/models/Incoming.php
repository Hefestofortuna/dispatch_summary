<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "incoming".
 *
 * @property int $id
 * @property string $title Заголовок
 * @property string $putdate Дата регистрации
 * @property string $num Номер
 * @property int $organization_id Предприятие
 * @property string|null $file Документ
 *
 * @property Organization $organization
 */
class Incoming extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'incoming';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'putdate', 'num', 'organization_id'], 'required'],
            [['putdate'], 'safe'],
            [['organization_id'], 'default', 'value' => null],
            [['organization_id'], 'integer'],
            [['title', 'num', 'file'], 'string', 'max' => 255],
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
            'title' => 'Заголовок',
            'putdate' => 'Дата регистрации',
            'num' => 'Номер',
            'organization_id' => 'Предприятие',
            'file' => 'Документ',
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
