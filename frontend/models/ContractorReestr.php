<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contractor_reestr".
 *
 * @property int $id
 * @property int $contractor_id Подрядная организация
 * @property int $station_id Станция/Перегон
 * @property string $date_start Дата начала
 * @property string $date_finish Дата завершения
 * @property string $notice Предупреждение
 * @property string $ppr ППР
 * @property string $act_dopusk Акт-допуск
 * @property string $naryad_dopusk Наряд-допуск
 * @property string $act_kabel Акт проверки трассы кабелей
 * @property string $otv_isp_info Ответственный исполнитель
 * @property string $otv_ruk_info Ответственный руководитель
 * @property string $nadzor_doc № и дата приказа
 * @property string $nadrzor_otv ФИО ответственного по ШЧ
 * @property string $title Титул
 * @property string $haracter Характер выполняемых работ
 * @property int $organization_id Предприятие
 *
 * @property Contractor $contractor
 * @property Organization $organization
 * @property Station $station
 */
class ContractorReestr extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contractor_reestr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['contractor_id', 'station_id', 'date_start', 'date_finish', 'notice', 'ppr', 'act_dopusk', 'naryad_dopusk', 'act_kabel', 'otv_isp_info', 'otv_ruk_info', 'nadzor_doc', 'nadrzor_otv', 'title', 'haracter', 'organization_id'], 'required'],
            [['contractor_id', 'station_id', 'organization_id'], 'default', 'value' => null],
            [['contractor_id', 'station_id', 'organization_id'], 'integer'],
            [['date_start', 'date_finish'], 'safe'],
            [['notice', 'ppr', 'act_dopusk', 'naryad_dopusk', 'act_kabel', 'otv_isp_info', 'otv_ruk_info', 'nadzor_doc', 'nadrzor_otv', 'title', 'haracter'], 'string', 'max' => 255],
            [['contractor_id'], 'exist', 'skipOnError' => true, 'targetClass' => Contractor::className(), 'targetAttribute' => ['contractor_id' => 'id']],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organization_id' => 'id']],
            [['station_id'], 'exist', 'skipOnError' => true, 'targetClass' => Station::className(), 'targetAttribute' => ['station_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'contractor_id' => 'Подрядная организация',
            'station_id' => 'Станция/Перегон',
            'date_start' => 'Дата начала',
            'date_finish' => 'Дата завершения',
            'notice' => 'Предупреждение',
            'ppr' => 'ППР',
            'act_dopusk' => 'Акт-допуск',
            'naryad_dopusk' => 'Наряд-допуск',
            'act_kabel' => 'Акт проверки трассы кабелей',
            'otv_isp_info' => 'Ответственный исполнитель',
            'otv_ruk_info' => 'Ответственный руководитель',
            'nadzor_doc' => '№ и дата приказа',
            'nadrzor_otv' => 'ФИО ответственного по ШЧ',
            'title' => 'Титул',
            'haracter' => 'Характер выполняемых работ',
            'organization_id' => 'Предприятие',
        ];
    }

    /**
     * Gets query for [[Contractor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getContractor()
    {
        return $this->hasOne(Contractor::className(), ['id' => 'contractor_id']);
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
}
