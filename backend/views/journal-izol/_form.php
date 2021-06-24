<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\JournalIzol */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="journal-izol-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'station_id')->textInput() ?>

    <?= $form->field($model, 'place')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_create')->textInput() ?>

    <?= $form->field($model, 'r_izol_start')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shns_user_id')->textInput() ?>

    <?= $form->field($model, 'date_finish')->textInput() ?>

    <?= $form->field($model, 'step')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->checkbox() ?>

    <?= $form->field($model, 'r_izol_end')->textInput() ?>

    <?= $form->field($model, 'date_next')->textInput() ?>

    <?= $form->field($model, 'isDevice')->checkbox() ?>

    <?= $form->field($model, 'organization_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
