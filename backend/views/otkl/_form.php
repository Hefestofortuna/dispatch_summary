<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Otkl */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="otkl-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'putdate')->textInput() ?>

    <?= $form->field($model, 'time_from')->textInput() ?>

    <?= $form->field($model, 'time_to')->textInput() ?>

    <?= $form->field($model, 'station_id')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'object')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'transfer_user_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'organization_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
