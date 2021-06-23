<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "station".
 *
 * @property int $id
 * @property string $title Станция
 * @property int $subdivision_id Подразделение
 * @property int $dga_id ДГА
 * @property bool $stType Станция/Перегон
 * @property int $organization_id Предприятие
 *
 * @property ContractorReestr[] $contractorReestrs
 * @property Fail[] $fails
 * @property JournalIzol[] $journalIzols
 * @property JournalRevisionOt[] $journalRevisionOts
 * @property JournalSiz[] $journalSizs
 * @property Kip[] $kips
 * @property KipDevice[] $kipDevices
 * @property Msu[] $msus
 * @property Order[] $orders
 * @property Ors[] $ors
 * @property Otkl[] $otkls
 * @property Rc[] $rcs
 * @property Sam[] $sams
 * @property SocialInspect[] $socialInspects
 * @property SprSpt[] $sprSpts
 * @property Organization $organization
 * @property Subdivision $subdivision
 * @property StationSubdivision[] $stationSubdivisions
 * @property Subdivision[] $subdivisions
 * @property Warning[] $warnings
 * @property Windowapplication[] $windowapplications
 */
class Station extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'station';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'subdivision_id', 'dga_id', 'stType', 'organization_id'], 'required'],
            [['subdivision_id', 'dga_id', 'organization_id'], 'default', 'value' => null],
            [['subdivision_id', 'dga_id', 'organization_id'], 'integer'],
            [['stType'], 'boolean'],
            [['title'], 'string', 'max' => 255],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organization_id' => 'id']],
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
            'title' => 'Станция',
            'subdivision_id' => 'Подразделение',
            'dga_id' => 'ДГА',
            'stType' => 'Станция/Перегон',
            'organization_id' => 'Предприятие',
        ];
    }

    /**
     * Gets query for [[ContractorReestrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContractorReestrs()
    {
        return $this->hasMany(ContractorReestr::className(), ['station_id' => 'id']);
    }

    /**
     * Gets query for [[Fails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFails()
    {
        return $this->hasMany(Fail::className(), ['station_id' => 'id']);
    }

    /**
     * Gets query for [[JournalIzols]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJournalIzols()
    {
        return $this->hasMany(JournalIzol::className(), ['station_id' => 'id']);
    }

    /**
     * Gets query for [[JournalRevisionOts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJournalRevisionOts()
    {
        return $this->hasMany(JournalRevisionOt::className(), ['station_id' => 'id']);
    }

    /**
     * Gets query for [[JournalSizs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJournalSizs()
    {
        return $this->hasMany(JournalSiz::className(), ['station_id' => 'id']);
    }

    /**
     * Gets query for [[Kips]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKips()
    {
        return $this->hasMany(Kip::className(), ['station_id' => 'id']);
    }

    /**
     * Gets query for [[KipDevices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKipDevices()
    {
        return $this->hasMany(KipDevice::className(), ['station_id' => 'id']);
    }

    /**
     * Gets query for [[Msus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMsus()
    {
        return $this->hasMany(Msu::className(), ['station_id' => 'id']);
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['station_id' => 'id']);
    }

    /**
     * Gets query for [[Ors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrs()
    {
        return $this->hasMany(Ors::className(), ['station_id' => 'id']);
    }

    /**
     * Gets query for [[Otkls]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOtkls()
    {
        return $this->hasMany(Otkl::className(), ['station_id' => 'id']);
    }

    /**
     * Gets query for [[Rcs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRcs()
    {
        return $this->hasMany(Rc::className(), ['station_id' => 'id']);
    }

    /**
     * Gets query for [[Sams]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSams()
    {
        return $this->hasMany(Sam::className(), ['station_id' => 'id']);
    }

    /**
     * Gets query for [[SocialInspects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSocialInspects()
    {
        return $this->hasMany(SocialInspect::className(), ['station_id' => 'id']);
    }

    /**
     * Gets query for [[SprSpts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSprSpts()
    {
        return $this->hasMany(SprSpt::className(), ['station_id' => 'id']);
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
     * Gets query for [[Subdivision]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubdivision()
    {
        return $this->hasOne(Subdivision::className(), ['id' => 'subdivision_id']);
    }

    /**
     * Gets query for [[StationSubdivisions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStationSubdivisions()
    {
        return $this->hasMany(StationSubdivision::className(), ['station_id' => 'id']);
    }

    /**
     * Gets query for [[Subdivisions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubdivisions()
    {
        return $this->hasMany(Subdivision::className(), ['id' => 'subdivision_id'])->viaTable('station_subdivision', ['station_id' => 'id']);
    }

    /**
     * Gets query for [[Warnings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWarnings()
    {
        return $this->hasMany(Warning::className(), ['station_id' => 'id']);
    }

    /**
     * Gets query for [[Windowapplications]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWindowapplications()
    {
        return $this->hasMany(Windowapplication::className(), ['station_id' => 'id']);
    }
}
