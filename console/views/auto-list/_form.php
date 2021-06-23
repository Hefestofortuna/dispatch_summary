<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AutoList */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auto-list-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'organization_id')->textInput() ?>

    <?= $form->field($model, 'putdate')->textInput() ?>

    <?= $form->field($model, 'auto_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'hour')->textInput() ?>

    <?= $form->field($model, 'mileage')->textInput() ?>

    <?= $form->field($model, 'consumption_liter')->textInput() ?>

    <?= $form->field($model, 'kiloton')->textInput() ?>

    <?= $form->field($model, 'consumption_ton')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
