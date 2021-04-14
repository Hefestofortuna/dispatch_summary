<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contractor_reestr}}`.
 */
class m210412_161522_create_contractor_reestr_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%contractor_reestr}}', [
            'id' => $this->primaryKey(),
            'contractor_id' => $this->integer()->notNull()->comment('Подрядная организация'),
            'station_id' => $this->integer()->notNull()->comment('Станция/Перегон'),
            'date_start' => $this->date()->notNull()->comment('Дата начала'),
            'date_finish' => $this->date()->notNull()->comment('Дата завершения'),
            'notice' => $this->string()->notNull()->comment('Предупреждение'),
            'ppr' => $this->string()->notNull()->comment('ППР'),
            'act_dopusk' => $this->string()->notNull()->comment('Акт-допуск'),
            'naryad_dopusk' => $this->string()->notNull()->comment('Наряд-допуск'),
            'act_kabel' => $this->string()->notNull()->comment('Акт проверки трассы кабелей'),
            'otv_isp_info' => $this->string()->notNull()->comment('Ответственный исполнитель'),
            'otv_ruk_info' => $this->string()->notNull()->comment('Ответственный руководитель'),
            'nadzor_doc' => $this->string()->notNull()->comment('№ и дата приказа'),
            'nadrzor_otv' => $this->string()->notNull()->comment('ФИО ответственного по ШЧ'),
            'title' => $this->string()->notNull()->comment('Титул'),
            'haracter' => $this->string()->notNull()->comment('Характер выполняемых работ'),
            'organization_id' => $this->integer()->notNull()->comment('Предприятие'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%contractor_reestr}}');
    }
}
