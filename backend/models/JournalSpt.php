<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "journal_spt".
 *
 * @property int $id
 * @property string $date_create Дата регистрации
 * @property string $time_create Время регистрации
 * @property string $character Характер неисправности
 * @property string $reported Сообщил
 * @property int $spr_spt_id Объект
 * @property string|null $date_to Дата оповещения о неисправности
 * @property string|null $time_to Время оповещения о неисправности
 * @property string|null $pers_to ФИО/Должность
 * @property string|null $date_finish Дата устранения
 * @property string|null $time_finish Время устранения
 * @property string|null $pers_finish Подтвердил
 * @property string|null $description Примечание
 * @property string $status Статус
 * @property string|null $shd_finish Доложил об устранении
 * @property int $organization_id Предприятие
 *
 * @property Organization $organization
 * @property SprSpt $sprSpt
 */
class JournalSpt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'journal_spt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_create', 'time_create', 'character', 'reported', 'spr_spt_id', 'organization_id'], 'required'],
            [['date_create', 'time_create', 'date_to', 'time_to', 'date_finish', 'time_finish'], 'safe'],
            [['spr_spt_id', 'organization_id'], 'default', 'value' => null],
            [['spr_spt_id', 'organization_id'], 'integer'],
            [['character', 'reported', 'pers_to', 'pers_finish', 'description', 'status', 'shd_finish'], 'string', 'max' => 255],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organization_id' => 'id']],
            [['spr_spt_id'], 'exist', 'skipOnError' => true, 'targetClass' => SprSpt::className(), 'targetAttribute' => ['spr_spt_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date_create' => 'Дата регистрации',
            'time_create' => 'Время регистрации',
            'character' => 'Характер неисправности',
            'reported' => 'Сообщил',
            'spr_spt_id' => 'Объект',
            'date_to' => 'Дата оповещения о неисправности',
            'time_to' => 'Время оповещения о неисправности',
            'pers_to' => 'ФИО/Должность',
            'date_finish' => 'Дата устранения',
            'time_finish' => 'Время устранения',
            'pers_finish' => 'Подтвердил',
            'description' => 'Примечание',
            'status' => 'Статус',
            'shd_finish' => 'Доложил об устранении',
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
     * Gets query for [[SprSpt]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSprSpt()
    {
        return $this->hasOne(SprSpt::className(), ['id' => 'spr_spt_id']);
    }
}
