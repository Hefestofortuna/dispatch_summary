<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Fail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'putdate')->textInput() ?>

    <?= $form->field($model, 'date_start')->textInput() ?>

    <?= $form->field($model, 'time_start')->textInput() ?>

    <?= $form->field($model, 'date_finish')->textInput() ?>

    <?= $form->field($model, 'time_finish')->textInput() ?>

    <?= $form->field($model, 'service_id')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subdivision_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'character')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'station_id')->textInput() ?>

    <?= $form->field($model, 'fail_user_id')->textInput() ?>

    <?= $form->field($model, 'organization_id')->textInput() ?>

    <?= $form->field($model, 'system')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
