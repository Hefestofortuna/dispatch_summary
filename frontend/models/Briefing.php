<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "briefing".
 *
 * @property int $id
 * @property int $employee_user_id Сотрудник
 * @property string $putdate Дата проведения
 * @property int $instructor_user_id Инструктор
 * @property int $type Тип инструктажа
 * @property int|null $period Периодичность
 * @property string|null $putdate_next Дата следующего проведения
 *
 * @property User $employeeUser
 * @property User $instructorUser
 */
class Briefing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'briefing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['employee_user_id', 'putdate', 'instructor_user_id'], 'required'],
            [['employee_user_id', 'instructor_user_id', 'type', 'period'], 'default', 'value' => null],
            [['employee_user_id', 'instructor_user_id', 'type', 'period'], 'integer'],
            [['putdate', 'putdate_next'], 'safe'],
            [['employee_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['employee_user_id' => 'id']],
            [['instructor_user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['instructor_user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'employee_user_id' => 'Сотрудник',
            'putdate' => 'Дата проведения',
            'instructor_user_id' => 'Инструктор',
            'type' => 'Тип инструктажа',
            'period' => 'Периодичность',
            'putdate_next' => 'Дата следующего проведения',
        ];
    }

    /**
     * Gets query for [[EmployeeUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEmployeeUser()
    {
        return $this->hasOne(User::className(), ['id' => 'employee_user_id']);
    }

    /**
     * Gets query for [[InstructorUser]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInstructorUser()
    {
        return $this->hasOne(User::className(), ['id' => 'instructor_user_id']);
    }
}
