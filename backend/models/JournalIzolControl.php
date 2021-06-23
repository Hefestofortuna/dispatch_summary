<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "journal_izol_control".
 *
 * @property int $id
 * @property int $journal_izol_id Кабель
 * @property int $putdate Дата проверки
 * @property float|null $r_izol R изоляции
 *
 * @property JournalIzol $journalIzol
 */
class JournalIzolControl extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'journal_izol_control';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['journal_izol_id', 'putdate'], 'required'],
            [['journal_izol_id', 'putdate'], 'default', 'value' => null],
            [['journal_izol_id', 'putdate'], 'integer'],
            [['r_izol'], 'number'],
            [['journal_izol_id'], 'exist', 'skipOnError' => true, 'targetClass' => JournalIzol::className(), 'targetAttribute' => ['journal_izol_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'journal_izol_id' => 'Кабель',
            'putdate' => 'Дата проверки',
            'r_izol' => 'R изоляции',
        ];
    }

    /**
     * Gets query for [[JournalIzol]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJournalIzol()
    {
        return $this->hasOne(JournalIzol::className(), ['id' => 'journal_izol_id']);
    }
}
