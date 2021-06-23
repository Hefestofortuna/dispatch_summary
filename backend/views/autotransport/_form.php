<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Autotransport */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="autotransport-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'subdivision_id')->textInput() ?>

    <?= $form->field($model, 'target')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contact_user_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'auto_id')->textInput() ?>

    <?= $form->field($model, 'driver_user_id')->textInput() ?>

    <?= $form->field($model, 'time_arrival')->textInput() ?>

    <?= $form->field($model, 'time_departure')->textInput() ?>

    <?= $form->field($model, 'odometr')->textInput() ?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <?= $form->field($model, 'organization_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
