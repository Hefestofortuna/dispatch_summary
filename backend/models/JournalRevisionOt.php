<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "journal_revision_ot".
 *
 * @property int $id
 * @property string $date_create Дата назначения
 * @property int $station_id Станция/перегон
 * @property int $subdivision_id Подразделение
 * @property string|null $date_rev Дата проверки
 * @property string|null $date_time Срок устранения
 * @property string|null $date_finish Дата завершения
 * @property bool $status Устранено
 * @property int $revisor Устранено
 * @property int $type Заголовок
 * @property bool $upload Отчет
 * @property int $result Оценка
 * @property int $rev_user_id Оценка
 * @property int|null $first_kom_user_id ФИО членов комиссии №1
 * @property int|null $second_kom_user_id ФИО членов комиссии №2
 * @property string|null $time_rev Время проверки
 * @property int $organization_id Предприятие
 *
 * @property Organization $organization
 * @property Station $station
 * @property Subdivision $subdivision
 * @property User $firstKomUser
 * @property User $secondKomUser
 * @property JournalRevisionOtFile[] $journalRevisionOtFiles
 */
class JournalRevisionOt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'journal_revision_ot';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_create', 'station_id', 'subdivision_id', 'revisor', 'type', 'rev_user_id', 'organization_id'], 'required'],
            [['date_create', 'date_rev', 'date_time', 'date_finish', 'time_rev'], 'safe'],
            [['station_id', 'subdivision_id', 'revisor', 'type', 'result', 'rev_user_id', 'first_kom_user_id', 'second_kom_user_id', 'organization_id'], 'default', 'value' => null],
            [['station_id', 'subdivision_id', 'revisor', 'type', 'result', 'rev_user_id', 'first_kom_user_id', 'second_kom_user_id', 'organization_id'], 'integer'],
            [['status', 'upload'], 'boolean'],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organization_id' => 'id']],
            [['station_id'], 'exist', 'skipOnError' => true, 'targetClass' => Station::className(), 'targetAttribute' => ['station_id' => 'id']],
            [['subdivision_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subdivision::className(), 'targetAttribute' => ['subdivision_id' => 'id']],
            [['first_kom_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['first_kom_user_id' => 'id']],
            [['second_kom_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['second_kom_user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date_create' => 'Дата назначения',
            'station_id' => 'Станция/перегон',
            'subdivision_id' => 'Подразделение',
            'date_rev' => 'Дата проверки',
            'date_time' => 'Срок устранения',
            'date_finish' => 'Дата завершения',
            'status' => 'Устранено',
            'revisor' => 'Устранено',
            'type' => 'Заголовок',
            'upload' => 'Отчет',
            'result' => 'Оценка',
            'rev_user_id' => 'Оценка',
            'first_kom_user_id' => 'ФИО членов комиссии №1',
            'second_kom_user_id' => 'ФИО членов комиссии №2',
            'time_rev' => 'Время проверки',
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
     * Gets query for [[Station]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getStation()
    {
        return $this->hasOne(Station::className(), ['id' => 'station_id']);
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
     * Gets query for [[FirstKomUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFirstKomUser()
    {
        return $this->hasOne(User::className(), ['id' => 'first_kom_user_id']);
    }

    /**
     * Gets query for [[SecondKomUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSecondKomUser()
    {
        return $this->hasOne(User::className(), ['id' => 'second_kom_user_id']);
    }

    /**
     * Gets query for [[JournalRevisionOtFiles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJournalRevisionOtFiles()
    {
        return $this->hasMany(JournalRevisionOtFile::className(), ['journal_revision_ot_id' => 'id']);
    }
}
