<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "oper_rasp".
 *
 * @property int $id
 * @property string $title Название документа
 * @property string $date_create Дата регистрации
 * @property string $file Ссылка на документ
 * @property string|null $date_finish Дата завершения
 * @property bool $status Отметка о выполнении
 * @property string $short_name Краткое наименование, номер
 * @property int|null $user_id Ответственное лицо
 * @property int $organization_id Предприятие
 *
 * @property Organization $organization
 * @property User $user
 * @property OperRaspIsp[] $operRaspIsps
 * @property OperRaspSam[] $operRaspSams
 */
class OperRasp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'oper_rasp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'date_create', 'file', 'short_name', 'organization_id'], 'required'],
            [['date_create', 'date_finish'], 'safe'],
            [['status'], 'boolean'],
            [['user_id', 'organization_id'], 'default', 'value' => null],
            [['user_id', 'organization_id'], 'integer'],
            [['title'], 'string', 'max' => 128],
            [['file'], 'string', 'max' => 255],
            [['short_name'], 'string', 'max' => 8],
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
            'title' => 'Название документа',
            'date_create' => 'Дата регистрации',
            'file' => 'Ссылка на документ',
            'date_finish' => 'Дата завершения',
            'status' => 'Отметка о выполнении',
            'short_name' => 'Краткое наименование, номер',
            'user_id' => 'Ответственное лицо',
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
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * Gets query for [[OperRaspIsps]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperRaspIsps()
    {
        return $this->hasMany(OperRaspIsp::className(), ['oper_rasp_id' => 'id']);
    }

    /**
     * Gets query for [[OperRaspSams]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOperRaspSams()
    {
        return $this->hasMany(OperRaspSam::className(), ['oper_rasp_id' => 'id']);
    }
}
