<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\JournalSpt */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="journal-spt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'date_create')->textInput() ?>

    <?= $form->field($model, 'time_create')->textInput() ?>

    <?= $form->field($model, 'character')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reported')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spr_spt_id')->textInput() ?>

    <?= $form->field($model, 'date_to')->textInput() ?>

    <?= $form->field($model, 'time_to')->textInput() ?>

    <?= $form->field($model, 'pers_to')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_finish')->textInput() ?>

    <?= $form->field($model, 'time_finish')->textInput() ?>

    <?= $form->field($model, 'pers_finish')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shd_finish')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organization_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
