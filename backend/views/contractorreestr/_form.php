<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ContractorReestr */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contractor-reestr-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'contractor_id')->textInput() ?>

    <?= $form->field($model, 'station_id')->textInput() ?>

    <?= $form->field($model, 'date_start')->textInput() ?>

    <?= $form->field($model, 'date_finish')->textInput() ?>

    <?= $form->field($model, 'notice')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ppr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'act_dopusk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'naryad_dopusk')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'act_kabel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'otv_isp_info')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'otv_ruk_info')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nadzor_doc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nadrzor_otv')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'haracter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organization_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
