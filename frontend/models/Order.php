<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property int $num_off Номер разрешения
 * @property int $station_id Станция/Перегон
 * @property int $card_id Работа
 * @property string $description_off Примечание заявки
 * @property string|null $date_off Дата выкл.
 * @property string|null $time_off Время выкл.
 * @property int $shns_off_user_id Ответ. ШН/ШНС
 * @property int $shchd_off_user_id ШЧД/ШЧДС
 * @property string $apply_ds Разрешен ДС
 * @property int $apply_shch_user_id Разрешен ШЧ
 * @property string|null $date_on Дата вкл.
 * @property string|null $time_on Время вкл.
 * @property int $shns_on_user_id Ответ. ШН/ШНС
 * @property int $shchd_on_user_id ШЧД/ШЧДС
 * @property string $description_on Примечание
 * @property int $num_on Номер включения
 * @property string $date Дата
 * @property int $organization_id Предприятие
 *
 * @property Card $card
 * @property Organization $organization
 * @property Station $station
 * @property User $shnsOffUser
 * @property User $shchdOffUser
 * @property User $applyShchUser
 * @property User $shnsOnUser
 * @property User $shchdOnUser
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['num_off', 'station_id', 'card_id', 'description_off', 'description_on', 'num_on', 'date', 'organization_id'], 'required'],
            [['num_off', 'station_id', 'card_id', 'shns_off_user_id', 'shchd_off_user_id', 'apply_shch_user_id', 'shns_on_user_id', 'shchd_on_user_id', 'num_on', 'organization_id'], 'default', 'value' => null],
            [['num_off', 'station_id', 'card_id', 'shns_off_user_id', 'shchd_off_user_id', 'apply_shch_user_id', 'shns_on_user_id', 'shchd_on_user_id', 'num_on', 'organization_id'], 'integer'],
            [['date_off', 'time_off', 'date_on', 'time_on', 'date'], 'safe'],
            [['description_off', 'apply_ds', 'description_on'], 'string', 'max' => 255],
            [['card_id'], 'exist', 'skipOnError' => true, 'targetClass' => Card::className(), 'targetAttribute' => ['card_id' => 'id']],
            [['organization_id'], 'exist', 'skipOnError' => true, 'targetClass' => Organization::className(), 'targetAttribute' => ['organization_id' => 'id']],
            [['station_id'], 'exist', 'skipOnError' => true, 'targetClass' => Station::className(), 'targetAttribute' => ['station_id' => 'id']],
            [['shns_off_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['shns_off_user_id' => 'id']],
            [['shchd_off_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['shchd_off_user_id' => 'id']],
            [['apply_shch_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['apply_shch_user_id' => 'id']],
            [['shns_on_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['shns_on_user_id' => 'id']],
            [['shchd_on_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['shchd_on_user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'num_off' => 'Номер разрешения',
            'station_id' => 'Станция/Перегон',
            'card_id' => 'Работа',
            'description_off' => 'Примечание заявки',
            'date_off' => 'Дата выкл.',
            'time_off' => 'Время выкл.',
            'shns_off_user_id' => 'Ответ. ШН/ШНС',
            'shchd_off_user_id' => 'ШЧД/ШЧДС',
            'apply_ds' => 'Разрешен ДС',
            'apply_shch_user_id' => 'Разрешен ШЧ',
            'date_on' => 'Дата вкл.',
            'time_on' => 'Время вкл.',
            'shns_on_user_id' => 'Ответ. ШН/ШНС',
            'shchd_on_user_id' => 'ШЧД/ШЧДС',
            'description_on' => 'Примечание',
            'num_on' => 'Номер включения',
            'date' => 'Дата',
            'organization_id' => 'Предприятие',
        ];
    }

    /**
     * Gets query for [[Card]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCard()
    {
        return $this->hasOne(Card::className(), ['id' => 'card_id']);
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
     * Gets query for [[ShnsOffUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShnsOffUser()
    {
        return $this->hasOne(User::className(), ['id' => 'shns_off_user_id']);
    }

    /**
     * Gets query for [[ShchdOffUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShchdOffUser()
    {
        return $this->hasOne(User::className(), ['id' => 'shchd_off_user_id']);
    }

    /**
     * Gets query for [[ApplyShchUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApplyShchUser()
    {
        return $this->hasOne(User::className(), ['id' => 'apply_shch_user_id']);
    }

    /**
     * Gets query for [[ShnsOnUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShnsOnUser()
    {
        return $this->hasOne(User::className(), ['id' => 'shns_on_user_id']);
    }

    /**
     * Gets query for [[ShchdOnUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShchdOnUser()
    {
        return $this->hasOne(User::className(), ['id' => 'shchd_on_user_id']);
    }
}
