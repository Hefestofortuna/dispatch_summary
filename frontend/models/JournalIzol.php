<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "journal_izol".
 *
 * @property int $id
 * @property int $station_id Станция/Перегон
 * @property string $place Место
 * @property string $mark Марка укладки и длина кабеля, м
 * @property string $date_create Дата обнаружения
 * @property float|null $r_izol_start R изоляции
 * @property string $description Описание
 * @property int $shns_user_id Сообщил ШН/ШНС
 * @property string|null $date_finish Дата устранения
 * @property string $step Принятые меры
 * @property bool $status Статус
 * @property float|null $r_izol_end Текущее R изоляции
 * @property string|null $date_next Дата след. проверки
 * @property bool $isDevice Кабель/Устройство
 * @property int $organization_id Кабель/Устройство
 *
 * @property Organization $organization
 * @property Station $station
 * @property User $shnsUser
 * @property JournalIzolControl[] $journalIzolControls
 */
class JournalIzol extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'journal_izol';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['station_id', 'place', 'mark', 'date_create', 'description', 'shns_user_id', 'step', 'organization_id'], 'required'],
            [['station_id', 'shns_user_id', 'organization_id'], 'default', 'value' => null],
            [['station_id', 'shns_user_id', 'organization_id'], 'integer'],
            [['date_create', 'date_finish', 'date_next'], 'safe'],
            [['r_izol_start', 'r_izol_end'], 'number'],
            [['status', 'isDevice'], 'boolean'],
            [['place', 'mark', 'description', 'step'], 'string', 'max' => 255],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organization_id' => 'id']],
            [['station_id'], 'exist', 'skipOnError' => true, 'targetClass' => Station::className(), 'targetAttribute' => ['station_id' => 'id']],
            [['shns_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['shns_user_id' => 'id']],
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
            'place' => 'Место',
            'mark' => 'Марка укладки и длина кабеля, м',
            'date_create' => 'Дата обнаружения',
            'r_izol_start' => 'R изоляции',
            'description' => 'Описание',
            'shns_user_id' => 'Сообщил ШН/ШНС',
            'date_finish' => 'Дата устранения',
            'step' => 'Принятые меры',
            'status' => 'Статус',
            'r_izol_end' => 'Текущее R изоляции',
            'date_next' => 'Дата след. проверки',
            'isDevice' => 'Кабель/Устройство',
            'organization_id' => 'Кабель/Устройство',
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
     * Gets query for [[Station]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStation()
    {
        return $this->hasOne(Station::className(), ['id' => 'station_id']);
    }

    /**
     * Gets query for [[ShnsUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShnsUser()
    {
        return $this->hasOne(User::className(), ['id' => 'shns_user_id']);
    }

    /**
     * Gets query for [[JournalIzolControls]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJournalIzolControls()
    {
        return $this->hasMany(JournalIzolControl::className(), ['journal_izol_id' => 'id']);
    }
}
