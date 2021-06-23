<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SprSpt */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="spr-spt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'station_id')->textInput() ?>

    <?= $form->field($model, 'object')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spr_spt_system_id')->textInput() ?>

    <?= $form->field($model, 'spr_spt_type_id')->textInput() ?>

    <?= $form->field($model, 'spr_balance_id')->textInput() ?>

    <?= $form->field($model, 'spr_class_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
