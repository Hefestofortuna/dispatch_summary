<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "windowapplication".
 *
 * @property int $id
 * @property string|null $dnc ДНЦ
 * @property string $date Дата и время
 * @property int $station_id Станция/Перегон
 * @property string $type Работа
 * @property int $way Путь
 * @property int $km Километр
 * @property int $picket Пикет
 * @property bool $shutdown Выключение устройств
 * @property string $fio_main ФИО руководителя работ
 * @property string $fio_bd ФИО отвественного за БД
 * @property bool $representative Требуется ли представитель
 * @property bool $sign С окном|Без окна
 * @property bool $shutdown_voltage Снятие напряжения
 * @property string|null $description Примечание
 * @property string|null $fio_shchd ФИО ШЧД
 * @property bool $written Записан
 *
 * @property Station $station
 */
class Windowapplication extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'windowapplication';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'station_id', 'type', 'way', 'km', 'picket', 'shutdown', 'fio_main', 'fio_bd', 'representative', 'sign', 'shutdown_voltage', 'written'], 'required'],
            [['date'], 'safe'],
            [['station_id', 'way', 'km', 'picket'], 'default', 'value' => null],
            [['station_id', 'way', 'km', 'picket'], 'integer'],
            [['shutdown', 'representative', 'sign', 'shutdown_voltage', 'written'], 'boolean'],
            [['dnc', 'type', 'fio_main', 'fio_bd', 'description', 'fio_shchd'], 'string', 'max' => 255],
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
            'dnc' => 'ДНЦ',
            'date' => 'Дата и время',
            'station_id' => 'Станция/Перегон',
            'type' => 'Работа',
            'way' => 'Путь',
            'km' => 'Километр',
            'picket' => 'Пикет',
            'shutdown' => 'Выключение устройств',
            'fio_main' => 'ФИО руководителя работ',
            'fio_bd' => 'ФИО отвественного за БД',
            'representative' => 'Требуется ли представитель',
            'sign' => 'С окном|Без окна',
            'shutdown_voltage' => 'Снятие напряжения',
            'description' => 'Примечание',
            'fio_shchd' => 'ФИО ШЧД',
            'written' => 'Записан',
        ];
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
