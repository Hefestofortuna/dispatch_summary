<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string|null $password_reset_token
 * @property string $email
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property bool $is_admin
 * @property int|null $subdivision_id
 * @property int|null $organization_id
 * @property string $name
 * @property int $post_id
 * @property string|null $description
 * @property int|null $phone
 * @property bool $reinstruction
 * @property string|null $verification_token
 *
 * @property AutoList[] $autoLists
 * @property Autotransport[] $autotransports
 * @property Autotransport[] $autotransports0
 * @property Autotransport[] $autotransports1
 * @property Briefing[] $briefings
 * @property Briefing[] $briefings0
 * @property Contact[] $contacts
 * @property Document[] $documents
 * @property Fail[] $fails
 * @property FailUser[] $failUsers
 * @property IncomingSam[] $incomingSams
 * @property JournalElectro[] $journalElectros
 * @property JournalIzol[] $journalIzols
 * @property JournalRevisionOt[] $journalRevisionOts
 * @property JournalRevisionOt[] $journalRevisionOts0
 * @property Kasant[] $kasants
 * @property Kip[] $kips
 * @property Movement[] $movements
 * @property Msu[] $msus
 * @property News[] $news
 * @property Notice[] $notices
 * @property OperRasp[] $operRasps
 * @property OperRaspIsp[] $operRaspIsps
 * @property OperRaspIsp[] $operRaspIsps0
 * @property Order[] $orders
 * @property Order[] $orders0
 * @property Order[] $orders1
 * @property Order[] $orders2
 * @property Order[] $orders3
 * @property Organization[] $organizations
 * @property Otkl[] $otkls
 * @property Otkl[] $otkls0
 * @property Rework[] $reworks
 * @property Sam[] $sams
 * @property Sam[] $sams0
 * @property SocialInspect[] $socialInspects
 * @property SprDriver[] $sprDrivers
 * @property Subdivision[] $subdivisions
 * @property Organization $organization
 * @property Subdivision $subdivision
 * @property Warning[] $warnings
 * @property Warning[] $warnings0
 * @property Window[] $windows
 * @property Window[] $windows0
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at', 'is_admin', 'name', 'post_id', 'reinstruction'], 'required'],
            [['status', 'created_at', 'updated_at', 'subdivision_id', 'organization_id', 'post_id', 'phone'], 'default', 'value' => null],
            [['status', 'created_at', 'updated_at', 'subdivision_id', 'organization_id', 'post_id', 'phone'], 'integer'],
            [['is_admin', 'reinstruction'], 'boolean'],
            [['username', 'password_hash', 'password_reset_token', 'email', 'verification_token'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['name'], 'string', 'max' => 64],
            [['description'], 'string', 'max' => 256],
            [['password_reset_token'], 'unique'],
            [['username'], 'unique'],
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
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'is_admin' => 'Is Admin',
            'subdivision_id' => 'Subdivision ID',
            'organization_id' => 'Organization ID',
            'name' => 'Name',
            'post_id' => 'Post ID',
            'description' => 'Description',
            'phone' => 'Phone',
            'reinstruction' => 'Reinstruction',
            'verification_token' => 'Verification Token',
        ];
    }

    public function getShortName(){
        return preg_replace('~^(\S++)\s++(\S)\S++\s++(\S)\S++$~u', '$1 $2.$3.', $this->name);
    }

    /**
     * Gets query for [[AutoLists]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAutoLists()
    {
        return $this->hasMany(AutoList::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Autotransports]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAutotransports()
    {
        return $this->hasMany(Autotransport::className(), ['contact_user_id' => 'id']);
    }

    /**
     * Gets query for [[Autotransports0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAutotransports0()
    {
        return $this->hasMany(Autotransport::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Autotransports1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAutotransports1()
    {
        return $this->hasMany(Autotransport::className(), ['driver_user_id' => 'id']);
    }

    /**
     * Gets query for [[Briefings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBriefings()
    {
        return $this->hasMany(Briefing::className(), ['employee_user_id' => 'id']);
    }

    /**
     * Gets query for [[Briefings0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBriefings0()
    {
        return $this->hasMany(Briefing::className(), ['instructor_user_id' => 'id']);
    }

    /**
     * Gets query for [[Contacts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContacts()
    {
        return $this->hasMany(Contact::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Documents]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDocuments()
    {
        return $this->hasMany(Document::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Fails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFails()
    {
        return $this->hasMany(Fail::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[FailUsers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFailUsers()
    {
        return $this->hasMany(FailUser::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[IncomingSams]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIncomingSams()
    {
        return $this->hasMany(IncomingSam::className(), ['isp_user_id' => 'id']);
    }

    /**
     * Gets query for [[JournalElectros]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJournalElectros()
    {
        return $this->hasMany(JournalElectro::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[JournalIzols]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJournalIzols()
    {
        return $this->hasMany(JournalIzol::className(), ['shns_user_id' => 'id']);
    }

    /**
     * Gets query for [[JournalRevisionOts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJournalRevisionOts()
    {
        return $this->hasMany(JournalRevisionOt::className(), ['first_kom_user_id' => 'id']);
    }

    /**
     * Gets query for [[JournalRevisionOts0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJournalRevisionOts0()
    {
        return $this->hasMany(JournalRevisionOt::className(), ['second_kom_user_id' => 'id']);
    }

    /**
     * Gets query for [[Kasants]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKasants()
    {
        return $this->hasMany(Kasant::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Kips]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKips()
    {
        return $this->hasMany(Kip::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Movements]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMovements()
    {
        return $this->hasMany(Movement::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Msus]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMsus()
    {
        return $this->hasMany(Msu::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[News]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNews()
    {
        return $this->hasMany(News::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Notices]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNotices()
    {
        return $this->hasMany(Notice::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[OperRasps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperRasps()
    {
        return $this->hasMany(OperRasp::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[OperRaspIsps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperRaspIsps()
    {
        return $this->hasMany(OperRaspIsp::className(), ['isp_user_id' => 'id']);
    }

    /**
     * Gets query for [[OperRaspIsps0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperRaspIsps0()
    {
        return $this->hasMany(OperRaspIsp::className(), ['agreed_user_id' => 'id']);
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['shns_off_user_id' => 'id']);
    }

    /**
     * Gets query for [[Orders0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders0()
    {
        return $this->hasMany(Order::className(), ['shchd_off_user_id' => 'id']);
    }

    /**
     * Gets query for [[Orders1]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders1()
    {
        return $this->hasMany(Order::className(), ['apply_shch_user_id' => 'id']);
    }

    /**
     * Gets query for [[Orders2]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders2()
    {
        return $this->hasMany(Order::className(), ['shns_on_user_id' => 'id']);
    }

    /**
     * Gets query for [[Orders3]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders3()
    {
        return $this->hasMany(Order::className(), ['shchd_on_user_id' => 'id']);
    }

    /**
     * Gets query for [[Organizations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrganizations()
    {
        return $this->hasMany(Organization::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Otkls]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOtkls()
    {
        return $this->hasMany(Otkl::className(), ['transfer_user_id' => 'id']);
    }

    /**
     * Gets query for [[Otkls0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOtkls0()
    {
        return $this->hasMany(Otkl::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Reworks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReworks()
    {
        return $this->hasMany(Rework::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Sams]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSams()
    {
        return $this->hasMany(Sam::className(), ['responsible_user_id' => 'id']);
    }

    /**
     * Gets query for [[Sams0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSams0()
    {
        return $this->hasMany(Sam::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[SocialInspects]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSocialInspects()
    {
        return $this->hasMany(SocialInspect::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[SprDrivers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSprDrivers()
    {
        return $this->hasMany(SprDriver::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Subdivisions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubdivisions()
    {
        return $this->hasMany(Subdivision::className(), ['user_id' => 'id']);
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
     * Gets query for [[Warnings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWarnings()
    {
        return $this->hasMany(Warning::className(), ['user_id' => 'id']);
    }

    /**
     * Gets query for [[Warnings0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWarnings0()
    {
        return $this->hasMany(Warning::className(), ['arm_user_id' => 'id']);
    }

    /**
     * Gets query for [[Windows]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWindows()
    {
        return $this->hasMany(Window::className(), ['transfer_user_id' => 'id']);
    }

    /**
     * Gets query for [[Windows0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getWindows0()
    {
        return $this->hasMany(Window::className(), ['user_id' => 'id']);
    }
}
