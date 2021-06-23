<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OperRaspIsp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oper-rasp-isp-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'oper_rasp_sam_id')->textInput() ?>

    <?= $form->field($model, 'isp_user_id')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_finish')->textInput() ?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <?= $form->field($model, 'oper_rasp_id')->textInput() ?>

    <?= $form->field($model, 'percent')->textInput() ?>

    <?= $form->field($model, 'agreed_user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
