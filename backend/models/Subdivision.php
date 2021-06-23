<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "subdivision".
 *
 * @property int $id
 * @property int $organization_id Предприятие
 * @property string $title Наименование подразделения
 * @property int|null $user_id Начальник подразделения
 * @property bool $briefing Инструктаж
 * @property string $ekasui_title Обозначение в ЕКАСУИ
 * @property string|null $code_asui Код ЕКАСУИ
 *
 * @property Autotransport[] $autotransports
 * @property Fail[] $fails
 * @property JournalRevisionOt[] $journalRevisionOts
 * @property JournalSiz[] $journalSizs
 * @property Kip[] $kips
 * @property KipDevice[] $kipDevices
 * @property Movement[] $movements
 * @property Msu[] $msus
 * @property Notice[] $notices
 * @property Ors[] $ors
 * @property Sam[] $sams
 * @property SprElectro[] $sprElectros
 * @property Station[] $stations
 * @property StationSubdivision[] $stationSubdivisions
 * @property Station[] $stations0
 * @property Organization $organization
 * @property User $user
 * @property User[] $users
 */
class Subdivision extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subdivision';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['organization_id', 'title', 'briefing', 'ekasui_title'], 'required'],
            [['organization_id', 'user_id'], 'default', 'value' => null],
            [['organization_id', 'user_id'], 'integer'],
            [['briefing'], 'boolean'],
            [['title', 'ekasui_title', 'code_asui'], 'string', 'max' => 255],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organization_id' => 'id']],
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
            'organization_id' => 'Предприятие',
            'title' => 'Наименование подразделения',
            'user_id' => 'Начальник подразделения',
            'briefing' => 'Инструктаж',
            'ekasui_title' => 'Обозначение в ЕКАСУИ',
            'code_asui' => 'Код ЕКАСУИ',
        ];
    }

    /**
     * Gets query for [[Autotransports]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAutotransports()
    {
        return $this->hasMany(Autotransport::className(), ['subdivision_id' => 'id']);
    }

    /**
     * Gets query for [[Fails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFails()
    {
        return $this->hasMany(Fail::className(), ['subdivision_id' => 'id']);
    }

    /**
     * Gets query for [[JournalRevisionOts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJournalRevisionOts()
    {
        return $this->hasMany(JournalRevisionOt::className(), ['subdivision_id' => 'id']);
    }

    /**
     * Gets query for [[JournalSizs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJournalSizs()
    {
        return $this->hasMany(JournalSiz::className(), ['subdivision_id' => 'id']);
    }

    /**
     * Gets query for [[Kips]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKips()
    {
        return $this->hasMany(Kip::className(), ['subdivision_id' => 'id']);
    }

    /**
     * Gets query for [[KipDevices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKipDevices()
    {
        return $this->hasMany(KipDevice::className(), ['subdivision_id' => 'id']);
    }

    /**
     * Gets query for [[Movements]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMovements()
    {
        return $this->hasMany(Movement::className(), ['subdivision_id' => 'id']);
    }

    /**
     * Gets query for [[Msus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMsus()
    {
        return $this->hasMany(Msu::className(), ['subdivision_id' => 'id']);
    }

    /**
     * Gets query for [[Notices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNotices()
    {
        return $this->hasMany(Notice::className(), ['subdivision_id' => 'id']);
    }

    /**
     * Gets query for [[Ors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrs()
    {
        return $this->hasMany(Ors::className(), ['subdivision_id' => 'id']);
    }

    /**
     * Gets query for [[Sams]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSams()
    {
        return $this->hasMany(Sam::className(), ['subdivision_id' => 'id']);
    }

    /**
     * Gets query for [[SprElectros]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSprElectros()
    {
        return $this->hasMany(SprElectro::className(), ['subdivision_id' => 'id']);
    }

    /**
     * Gets query for [[Stations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStations()
    {
        return $this->hasMany(Station::className(), ['subdivision_id' => 'id']);
    }

    /**
     * Gets query for [[StationSubdivisions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStationSubdivisions()
    {
        return $this->hasMany(StationSubdivision::className(), ['subdivision_id' => 'id']);
    }

    /**
     * Gets query for [[Stations0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStations0()
    {
        return $this->hasMany(Station::className(), ['id' => 'station_id'])->viaTable('station_subdivision', ['subdivision_id' => 'id']);
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
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['subdivision_id' => 'id']);
    }
}
