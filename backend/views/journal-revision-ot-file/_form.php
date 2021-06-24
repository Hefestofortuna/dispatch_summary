<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\JournalRevisionOtFile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="journal-revision-ot-file-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'journal_revision_ot_id')->textInput() ?>

    <?= $form->field($model, 'file')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_upload')->textInput() ?>

    <?= $form->field($model, 'type')->checkbox() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
