<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ContractorReestrSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contractor-reestr-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'contractor_id') ?>

    <?= $form->field($model, 'station_id') ?>

    <?= $form->field($model, 'date_start') ?>

    <?= $form->field($model, 'date_finish') ?>

    <?php // echo $form->field($model, 'notice') ?>

    <?php // echo $form->field($model, 'ppr') ?>

    <?php // echo $form->field($model, 'act_dopusk') ?>

    <?php // echo $form->field($model, 'naryad_dopusk') ?>

    <?php // echo $form->field($model, 'act_kabel') ?>

    <?php // echo $form->field($model, 'otv_isp_info') ?>

    <?php // echo $form->field($model, 'otv_ruk_info') ?>

    <?php // echo $form->field($model, 'nadzor_doc') ?>

    <?php // echo $form->field($model, 'nadrzor_otv') ?>

    <?php // echo $form->field($model, 'title') ?>

    <?php // echo $form->field($model, 'haracter') ?>

    <?php // echo $form->field($model, 'organization_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
