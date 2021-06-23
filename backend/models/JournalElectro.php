<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "journal_electro".
 *
 * @property int $id
 * @property string $putdate Дата передачи показания
 * @property int $indication Показание счетчика
 * @property int $user_id Пользователь
 * @property int $spr_electro_id Тип счетчика/номер
 * @property int $organization_id Предприятие
 *
 * @property Organization $organization
 * @property SprElectro $sprElectro
 * @property User $user
 */
class JournalElectro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'journal_electro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['putdate', 'indication', 'user_id', 'spr_electro_id', 'organization_id'], 'required'],
            [['putdate'], 'safe'],
            [['indication', 'user_id', 'spr_electro_id', 'organization_id'], 'default', 'value' => null],
            [['indication', 'user_id', 'spr_electro_id', 'organization_id'], 'integer'],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organization_id' => 'id']],
            [['spr_electro_id'], 'exist', 'skipOnError' => true, 'targetClass' => SprElectro::className(), 'targetAttribute' => ['spr_electro_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'putdate' => 'Дата передачи показания',
            'indication' => 'Показание счетчика',
            'user_id' => 'Пользователь',
            'spr_electro_id' => 'Тип счетчика/номер',
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

    /**
     * Gets query for [[SprElectro]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSprElectro()
    {
        return $this->hasOne(SprElectro::className(), ['id' => 'spr_electro_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
