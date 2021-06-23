<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "journal_revision_ot_file".
 *
 * @property int $id
 * @property int $journal_revision_ot_id Идентификатор проверки
 * @property string $file Файл
 * @property string $date_upload Дата загрузки
 * @property bool $type Тип загрузки
 * @property string $title Заголовок
 *
 * @property JournalRevisionOt $journalRevisionOt
 */
class JournalRevisionOtFile extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'journal_revision_ot_file';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['journal_revision_ot_id', 'file', 'date_upload', 'title'], 'required'],
            [['journal_revision_ot_id'], 'default', 'value' => null],
            [['journal_revision_ot_id'], 'integer'],
            [['date_upload'], 'safe'],
            [['type'], 'boolean'],
            [['file', 'title'], 'string', 'max' => 255],
            [['journal_revision_ot_id'], 'exist', 'skipOnError' => true, 'targetClass' => JournalRevisionOt::className(), 'targetAttribute' => ['journal_revision_ot_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'journal_revision_ot_id' => 'Идентификатор проверки',
            'file' => 'Файл',
            'date_upload' => 'Дата загрузки',
            'type' => 'Тип загрузки',
            'title' => 'Заголовок',
        ];
    }

    /**
     * Gets query for [[JournalRevisionOt]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJournalRevisionOt()
    {
        return $this->hasOne(JournalRevisionOt::className(), ['id' => 'journal_revision_ot_id']);
    }
}
