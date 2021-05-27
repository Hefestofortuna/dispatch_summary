<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sam".
 *
 * @property int $id
 * @property string $putdate Дата замечания
 * @property string $time_start Время начала
 * @property string|null $time_finish Время окончания
 * @property int $sam_from_id Кто сделал
 * @property int $subdivision_id Подразделение
 * @property int $station_id Станция/Перегон
 * @property int|null $responsible_user_id Отвественный
 * @property string|null $reason Причина
 * @property string|null $description Примечание
 * @property bool $status Устранено
 * @property int $user_id Пользователь
 * @property string|null $title_object Объект
 * @property int $sam_category_id Категория неисправности
 * @property int $level Категория неисправности
 * @property string|null $putdate_send Дата сообщения электромеханику
 * @property string|null $time_send Время сообщения электромеханику
 * @property string|null $date_finish Дата завершения
 * @property int $organization_id Препдприятие
 * @property string|null $putdate_term Срок устранения
 *
 * @property Organization $organization
 * @property SamCategory $samCategory
 * @property SamFrom $samFrom
 * @property Station $station
 * @property Subdivision $subdivision
 * @property User $responsibleUser
 * @property User $user
 */
class Sam extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sam';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['putdate', 'sam_from_id', 'subdivision_id', 'station_id', 'user_id', 'sam_category_id', 'organization_id'], 'required'],
            [['putdate', 'time_start', 'time_finish', 'putdate_send', 'time_send', 'date_finish', 'putdate_term'], 'safe'],
            [['sam_from_id', 'subdivision_id', 'station_id', 'responsible_user_id', 'user_id', 'sam_category_id', 'level', 'organization_id'], 'default', 'value' => null],
            [['sam_from_id', 'subdivision_id', 'station_id', 'responsible_user_id', 'user_id', 'sam_category_id', 'level', 'organization_id'], 'integer'],
            [['status'], 'boolean'],
            [['reason', 'description', 'title_object'], 'string', 'max' => 255],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organization_id' => 'id']],
            [['sam_category_id'], 'exist', 'skipOnError' => true, 'targetClass' => SamCategory::className(), 'targetAttribute' => ['sam_category_id' => 'id']],
            [['sam_from_id'], 'exist', 'skipOnError' => true, 'targetClass' => SamFrom::className(), 'targetAttribute' => ['sam_from_id' => 'id']],
            [['station_id'], 'exist', 'skipOnError' => true, 'targetClass' => Station::className(), 'targetAttribute' => ['station_id' => 'id']],
            [['subdivision_id'], 'exist', 'skipOnError' => true, 'targetClass' => Subdivision::className(), 'targetAttribute' => ['subdivision_id' => 'id']],
            [['responsible_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['responsible_user_id' => 'id']],
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
            'putdate' => 'Дата замечания',
            'time_start' => 'Время начала',
            'time_finish' => 'Время окончания',
            'sam_from_id' => 'Кто сделал',
            'subdivision_id' => 'Подразделение',
            'station_id' => 'Станция/Перегон',
            'responsible_user_id' => 'Отвественный',
            'reason' => 'Причина',
            'description' => 'Примечание',
            'status' => 'Устранено',
            'user_id' => 'Пользователь',
            'title_object' => 'Объект',
            'sam_category_id' => 'Категория неисправности',
            'level' => 'Категория неисправности',
            'putdate_send' => 'Дата сообщения электромеханику',
            'time_send' => 'Время сообщения электромеханику',
            'date_finish' => 'Дата завершения',
            'organization_id' => 'Препдприятие',
            'putdate_term' => 'Срок устранения',
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
     * Gets query for [[SamCategory]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSamCategory()
    {
        return $this->hasOne(SamCategory::className(), ['id' => 'sam_category_id']);
    }

    /**
     * Gets query for [[SamFrom]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSamFrom()
    {
        return $this->hasOne(SamFrom::className(), ['id' => 'sam_from_id']);
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
     * Gets query for [[ResponsibleUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResponsibleUser()
    {
        return $this->hasOne(User::className(), ['id' => 'responsible_user_id']);
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
