<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Dga */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dga-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'putdate')->textInput() ?>

    <?= $form->field($model, 'time_on')->textInput() ?>

    <?= $form->field($model, 'time_off')->textInput() ?>

    <?= $form->field($model, 'kol')->textInput() ?>

    <?= $form->field($model, 'station_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'underPressure')->textInput() ?>

    <?= $form->field($model, 'organization_id')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'moto')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
