<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "organization".
 *
 * @property int $id
 * @property string $title Наименование предприятия
 * @property string $code Шифр
 * @property int|null $user_id Начальник подразделения
 * @property string|null $code_asui Код ЕКАСУИ
 *
 * @property AutoList[] $autoLists
 * @property Autotransport[] $autotransports
 * @property Category[] $categories
 * @property Contact[] $contacts
 * @property ContractorReestr[] $contractorReestrs
 * @property Dga[] $dgas
 * @property DgaList[] $dgaLists
 * @property Fail[] $fails
 * @property Incoming[] $incomings
 * @property JournalElectro[] $journalElectros
 * @property JournalIzol[] $journalIzols
 * @property JournalRevisionOt[] $journalRevisionOts
 * @property JournalSiz[] $journalSizs
 * @property JournalSpt[] $journalSpts
 * @property Kasant[] $kasants
 * @property Kip[] $kips
 * @property KipDevice[] $kipDevices
 * @property Movement[] $movements
 * @property Msu[] $msus
 * @property Notice[] $notices
 * @property OperRasp[] $operRasps
 * @property Order[] $orders
 * @property User $user
 * @property Otkl[] $otkls
 * @property Plan[] $plans
 * @property Rework[] $reworks
 * @property Sam[] $sams
 * @property Service[] $services
 * @property SocialInspect[] $socialInspects
 * @property SprAuto[] $sprAutos
 * @property SprElectro[] $sprElectros
 * @property SprElectroObj[] $sprElectroObjs
 * @property Station[] $stations
 * @property Subdivision[] $subdivisions
 * @property User[] $users
 * @property Warning[] $warnings
 * @property Work[] $works
 */
class Organization extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'organization';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'code'], 'required'],
            [['user_id'], 'default', 'value' => null],
            [['user_id'], 'integer'],
            [['title', 'code', 'code_asui'], 'string', 'max' => 255],
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
            'title' => 'Наименование предприятия',
            'code' => 'Шифр',
            'user_id' => 'Начальник подразделения',
            'code_asui' => 'Код ЕКАСУИ',
        ];
    }

    /**
     * Gets query for [[AutoLists]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAutoLists()
    {
        return $this->hasMany(AutoList::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[Autotransports]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAutotransports()
    {
        return $this->hasMany(Autotransport::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[Categories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Category::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[Contacts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContacts()
    {
        return $this->hasMany(Contact::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[ContractorReestrs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContractorReestrs()
    {
        return $this->hasMany(ContractorReestr::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[Dgas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDgas()
    {
        return $this->hasMany(Dga::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[DgaLists]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDgaLists()
    {
        return $this->hasMany(DgaList::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[Fails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFails()
    {
        return $this->hasMany(Fail::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[Incomings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIncomings()
    {
        return $this->hasMany(Incoming::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[JournalElectros]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJournalElectros()
    {
        return $this->hasMany(JournalElectro::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[JournalIzols]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJournalIzols()
    {
        return $this->hasMany(JournalIzol::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[JournalRevisionOts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJournalRevisionOts()
    {
        return $this->hasMany(JournalRevisionOt::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[JournalSizs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJournalSizs()
    {
        return $this->hasMany(JournalSiz::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[JournalSpts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJournalSpts()
    {
        return $this->hasMany(JournalSpt::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[Kasants]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKasants()
    {
        return $this->hasMany(Kasant::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[Kips]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKips()
    {
        return $this->hasMany(Kip::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[KipDevices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKipDevices()
    {
        return $this->hasMany(KipDevice::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[Movements]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMovements()
    {
        return $this->hasMany(Movement::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[Msus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMsus()
    {
        return $this->hasMany(Msu::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[Notices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNotices()
    {
        return $this->hasMany(Notice::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[OperRasps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperRasps()
    {
        return $this->hasMany(OperRasp::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['organization_id' => 'id']);
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
     * Gets query for [[Otkls]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOtkls()
    {
        return $this->hasMany(Otkl::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[Plans]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPlans()
    {
        return $this->hasMany(Plan::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[Reworks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReworks()
    {
        return $this->hasMany(Rework::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[Sams]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSams()
    {
        return $this->hasMany(Sam::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[Services]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasMany(Service::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[SocialInspects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSocialInspects()
    {
        return $this->hasMany(SocialInspect::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[SprAutos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSprAutos()
    {
        return $this->hasMany(SprAuto::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[SprElectros]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSprElectros()
    {
        return $this->hasMany(SprElectro::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[SprElectroObjs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSprElectroObjs()
    {
        return $this->hasMany(SprElectroObj::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[Stations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStations()
    {
        return $this->hasMany(Station::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[Subdivisions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubdivisions()
    {
        return $this->hasMany(Subdivision::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasMany(User::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[Warnings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWarnings()
    {
        return $this->hasMany(Warning::className(), ['organization_id' => 'id']);
    }

    /**
     * Gets query for [[Works]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWorks()
    {
        return $this->hasMany(Work::className(), ['organization_id' => 'id']);
    }
}
