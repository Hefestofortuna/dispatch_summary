<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Warning */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="warning-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'station_id')->textInput() ?>

    <?= $form->field($model, 'place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_work')->textInput() ?>

    <?= $form->field($model, 'time_from')->textInput() ?>

    <?= $form->field($model, 'time_to')->textInput() ?>

    <?= $form->field($model, 'date_arm')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'time_arm')->textInput() ?>

    <?= $form->field($model, 'arm_user_id')->textInput() ?>

    <?= $form->field($model, 'organization_id')->textInput() ?>

    <?= $form->field($model, 'pub_date')->textInput() ?>

    <?= $form->field($model, 'number')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
