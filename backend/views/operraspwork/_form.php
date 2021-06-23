<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OperRaspWork */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oper-rasp-work-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'oper_rasp_id')->textInput() ?>

    <?= $form->field($model, 'oper_rasp_isp_id')->textInput() ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'work')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_term')->textInput() ?>

    <?= $form->field($model, 'date_finish')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
