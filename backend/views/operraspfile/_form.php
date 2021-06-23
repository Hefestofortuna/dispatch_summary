<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\OperRaspFile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oper-rasp-file-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'oper_rasp_isp_id')->textInput() ?>

    <?= $form->field($model, 'file')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'putdate')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
