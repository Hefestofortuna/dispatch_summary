<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Ors */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ors-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'station_id')->textInput() ?>

    <?= $form->field($model, 'sum_main_pch')->textInput() ?>

    <?= $form->field($model, 'sum_main_shch')->textInput() ?>

    <?= $form->field($model, 'sum_main')->textInput() ?>

    <?= $form->field($model, 'putdate')->textInput() ?>

    <?= $form->field($model, 'sum_minor_pch')->textInput() ?>

    <?= $form->field($model, 'sum_minor_shch')->textInput() ?>

    <?= $form->field($model, 'sum_minor')->textInput() ?>

    <?= $form->field($model, 'subdivision_id')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
