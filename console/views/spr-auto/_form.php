<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SprAuto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="spr-auto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'brand')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organization_id')->textInput() ?>

    <?= $form->field($model, 'date_check')->textInput() ?>

    <?= $form->field($model, 'ts_reestr')->textInput() ?>

    <?= $form->field($model, 'ts_class')->textInput() ?>

    <?= $form->field($model, 'fuel')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
