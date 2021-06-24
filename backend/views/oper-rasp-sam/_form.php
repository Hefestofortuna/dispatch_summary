<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OperRaspSam */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oper-rasp-sam-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'oper_rasp_id')->textInput() ?>

    <?= $form->field($model, 'content')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
